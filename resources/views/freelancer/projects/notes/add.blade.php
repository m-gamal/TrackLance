@extends('freelancer.layouts.master')
@section('title') Add New Note @endsection
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
                <span>Add New Note</span>
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
                        <span class="caption-subject bold uppercase"> Add New Note</span>
                    </div>
                </div>
                {!!
                Form::open([
                    'class' => 'form-horizontal',
                    'role'  =>  'form',
                    'route' =>  ['add_project_note', \Request::segment(2)],
                    'files' =>  true,
                    'id'    =>  'add-note-form'
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
                    <label class="col-md-2 control-label">Title</label>
                    <div class="col-md-8">
                        <div class="input-icon">
                            <i class="fa fa-comment font-green"></i>
                            <input type="text" name ="title" class="form-control" placeholder="Title" value="{{old('name')}}">
                            @if($errors->has('title'))
                                <div class="alert alert-danger">
                                    <i class="fa fa-warning"></i>
                                    <strong>Error :</strong> {{$errors->first('title')}}
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
                            <textarea name="description" rows="6" class="form-control"></textarea>
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
                    <label class="col-md-2 control-label">File</label>
                    <div class="col-md-8">
                        <div class="input-icon">
                            <i class="fa fa-file-o font-green"></i>
                            <input type="file" name ="file" class="form-control">
                            @if($errors->has('file'))
                                <div class="alert alert-danger">
                                    <i class="fa fa-warning"></i>
                                    <strong>Error :</strong> {{$errors->first('file')}}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-offset-4 col-md-8">
                        <button type="submit" class="btn blue">
                            <i class="fa fa-floppy-o"></i>
                            Add
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