@extends('freelancer.layouts.master')
@section('title') Edit Project @endsection
@section('custom_head_styles')
    <link href="{{URL::asset('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset('assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset('assets/global/plugins/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset('assets/global/plugins/select2/css/select2-bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<div class="page-content">
    <!-- BEGIN PAGE HEADER-->
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <i class="icon-home"></i>
                <a href="index.html">Home</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="#">Project</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <span>Edit Project</span>
            </li>
        </ul>
    </div>
    <!-- END PAGE HEADER-->
    <!-- BEGIN : ADD CLIENT FORM -->
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN SAMPLE FORM PORTLET-->
            <div class="portlet light ">
                <div class="portlet-title">
                    <div class="caption font-red-sunglo">
                        <i class="icon-settings font-red-sunglo"></i>
                        <span class="caption-subject bold uppercase"> Add New Project</span>
                    </div>
                </div>
                {!!
                Form::open([
                    'class' => 'form-horizontal',
                    'role'  =>  'form',
                    'route' =>  ['edit_project', $project->id],
                    'files' =>  true,
                    'id'    =>  'edit-project-form'
                ])
                !!}
                @if(Session::has('message'))
                    <div class="form-group">
                        <div class="alert alert-success alert-dismissable">
                            <i class="fa fa-check"></i>
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <b> Success : </b> {{ Session::get('message') }}
                        </div>
                    </div>
                @endif

                <div class="form-group">
                    <label class="col-md-2 control-label">Name</label>
                    <div class="col-md-8">
                        <div class="input-icon">
                            <i class="fa fa-laptop font-green"></i>
                            <input type="text" name ="name" class="form-control" placeholder="Name" value="{{$project->name}}">
                            @if($errors->has('name'))
                                <div class="alert alert-danger">
                                    <i class="fa fa-warning"></i>
                                    <strong>Error :</strong> {{$errors->first('name')}}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label">Client</label>
                    <div class="col-md-8">
                        <div class="input-icon">
                            <select id="example-chosen" name="client" class="form-control select2" data-placeholder="Select Client">
                                <option value="">Select Client</option>
                                @foreach($clients as $client)
                                    <option value="{{$client->id}}"
                                    @if($project->client_id == $client->id) selected @endif>
                                        {{$client->name}}
                                    </option>
                                @endforeach
                            </select>
                            @if($errors->has('client'))
                                <div class="alert alert-danger">
                                    <i class="fa fa-warning"></i>
                                    <strong>Error :</strong> {{$errors->first('client')}}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label">Type</label>
                    <div class="col-md-8">
                        <div class="input-icon">
                            <i class="fa fa-bolt font-green"></i>
                            <input type="text" name ="type" class="form-control" placeholder="Project Type" value="{{$project->type}}">
                            @if($errors->has('type'))
                                <div class="alert alert-danger">
                                    <i class="fa fa-warning"></i>
                                    <strong>Error :</strong> {{$errors->first('type')}}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label">Description</label>
                    <div class="col-md-8">
                        <div class="input-icon">
                            <i class="fa fa-pencil font-green"></i>
                            <textarea name="description" rows="6" class="form-control">{{$project->description}}</textarea>
                            @if($errors->has('description'))
                                <div class="alert alert-danger">
                                    <i class="fa fa-warning"></i>
                                    <strong>Error :</strong> {{$errors->first('description')}}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label">Start</label>
                    <div class="col-md-8">
                        <div class="input-icon">
                            <i class="fa fa-calendar font-green"></i>
                            <input type="text" name ="start" class="form-control date-picker" placeholder="Start Date" data-date-format="yyyy-mm-dd" value="{{$project->start}}">
                            @if($errors->has('start'))
                                <div class="alert alert-danger">
                                    <i class="fa fa-warning"></i>
                                    <strong>Error :</strong> {{$errors->first('start')}}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label">End</label>
                    <div class="col-md-8">
                        <div class="input-icon">
                            <i class="fa fa-calendar font-green"></i>
                            <input type="text" name="end" class="form-control date-picker" placeholder="End Date" data-date-format="yyyy-mm-dd" value="{{$project->end}}" />
                            @if($errors->has('end'))
                                <div class="alert alert-danger">
                                    <i class="fa fa-warning"></i>
                                    <strong>Error :</strong> {{$errors->first('end')}}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label">Cost</label>
                    <div class="col-md-8">
                        <div class="input-icon">
                            <i class="fa fa-money font-green"></i>
                            <input type="text" name ="cost" class="form-control" placeholder="Cost" value="{{$project->cost}}">
                            @if($errors->has('cost'))
                                <div class="alert alert-danger">
                                    <i class="fa fa-warning"></i>
                                    <strong>Error :</strong> {{$errors->first('cost')}}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label">Milestone</label>
                    <div class="col-md-8">
                        <div class="input-icon">
                            <i class="fa fa-pie-chart font-green"></i>
                            <input type="text" name ="milestone" class="form-control" placeholder="Milestone Percent" value="{{$project->milestone}}">
                            @if($errors->has('milestone'))
                                <div class="alert alert-danger">
                                    <i class="fa fa-warning"></i>
                                    <strong>Error :</strong> {{$errors->first('milestone')}}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label">Status</label>
                    <div class="col-md-8">
                        <div class="input-icon">
                            <input type="checkbox" name="status" checked class="make-switch" data-size="normal">
                            @if($errors->has('status'))
                                <div class="alert alert-danger">
                                    <i class="fa fa-warning"></i>
                                    <strong>Error :</strong> {{$errors->first('status')}}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <div class="col-md-offset-4 col-md-8">
                        <button type="submit" class="btn blue">
                            <i class="fa fa-floppy-o"></i>
                            Update
                        </button>

                        <button type="reset" class="btn default">
                            Cancel
                        </button>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
            <!-- END SAMPLE FORM PORTLET-->
        </div>
    </div>
    <!-- END : ADD CLIENT FORM -->
</div>
@endsection
@section('custom_footer_scripts')
    <script>
        $('#projects_tab').addClass('active');
    </script>
    <script src="{{URL::asset('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('assets/pages/scripts/components-bootstrap-switch.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('assets/pages/scripts/components-date-time-pickers.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('assets/global/plugins/select2/js/select2.full.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('assets/pages/scripts/components-select2.min.js')}}" type="text/javascript"></script>

@endsection