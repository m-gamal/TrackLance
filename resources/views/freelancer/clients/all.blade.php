@extends('freelancer.layouts.master')
@section('title') Clients List @endsection
@section('custom_head_styles')
    <link href="{{URL::asset('assets/global/plugins/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<div class="page-content">
    <!-- BEGIN PAGE HEADER-->
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <i class="icon-home"></i>
                <a href="#">Home</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="{{url('clients/all')}}">Clients</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="{{url('clients/all')}}">Clients List</a>
            </li>
        </ul>
    </div>
    <!-- END PAGE HEADER-->

    <!-- BEGIN : CLIENTS LIST -->
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light portlet-fit ">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-list font-green"></i>
                        <span class="caption-subject font-green bold uppercase">
                            Clients List
                            <a href="{{url('client/add')}}">
                                <button id="add_client" class="btn btn-primary btn-xs">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </a>
                        </span>
                    </div>
                </div>

                <div class="portlet-body">
                    @if(Session::has('message'))
                        <div class="form-group">
                            <div class="alert alert-success alert-dismissable">
                                <i class="fa fa-check"></i>
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <b> Success : </b> {{ Session::get('message') }}
                            </div>
                        </div>
                    @endif

                    <table class="table table-striped table-hover table-bordered sample_editable_1">
                        <thead>
                        <tr>
                            <th> Name </th>
                            <th> Email </th>
                            <th> Mobile </th>
                            <th> Website</th>
                            <th> Edit </th>
                            <th> Delete </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($clients as $client)
                        <tr>
                            <td><a href="{{url("client/{$client->id}")}}">{{$client->name}}</a></td>
                            <td> {{$client->email}} </td>
                            <td> {{$client->mobile}} </td>
                            <td>
                            @if($client->website )
                                <a href="{{$client->website}}" target="_blank">
                                    {{$client->website}}
                                </a>
                            @endif
                            </td>
                            <td>
                                <a id="edit_client_{{$client->id}}" class="btn btn-primary btn-small" href="{{url('client/edit/'.$client->id)}}">
                                    <i class="fa fa-pencil"></i>
                                </a>
                            </td>
                            <td>
                                <a class="btn btn-danger btn-small" href="#delete_client_{{$client->id}}" data-toggle="modal">
                                    <i class="fa fa-trash-o"></i>
                                </a>
                            </td>

                            <div class="modal fade" id="delete_client_{{$client->id}}" tabindex="-1">
                                <div class="modal-dialog">
                                    {!!
                                    Form::open([
                                        'class' => 'form-horizontal',
                                        'role'  =>  'form',
                                        'route' =>  ['delete_client', $client->id],
                                        'files' =>  true
                                    ])
                                    !!}
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                            <h4 class="modal-title">Confirm Deletion ?</h4>
                                        </div>
                                        <div class="modal-body"> Are you sure to delete this client {{$client->name}} ? </div>
                                        <div class="modal-footer">
                                            <button type="reset" class="btn dark btn-outline" data-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn green">Yes</button>
                                        </div>
                                    </div>
                                    {!! Form::close() !!}
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END EXAMPLE TABLE PORTLET-->
        </div>
    </div>
    <!-- END : CLIENTS LIST -->
</div>
@endsection

@section('custom_footer_scripts')
    <script>
        $('#clients_tab').addClass('active');
    </script>

    <script src="{{URL::asset('assets/global/scripts/datatable.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('assets/global/plugins/datatables/datatables.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('assets/pages/scripts/table-datatables-editable.min.js')}}" type="text/javascript"></script>
@endsection