@extends('freelancer.layouts.master')
@section('title') Add New Client @endsection
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
                <a href="#">Clients</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <span>Add New Client</span>
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
                        <span class="caption-subject bold uppercase"> Add New Client</span>
                    </div>
                </div>
                {!!
                Form::open([
                    'class' => 'form-horizontal',
                    'role'  =>  'form',
                    'route' =>  'add_client',
                    'files' =>  true
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
                            <i class="fa fa-user font-green"></i>
                            <input type="text" name ="name" class="form-control" placeholder="Name" value="{{old('name')}}">
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
                    <label class="col-md-2 control-label">Email</label>
                    <div class="col-md-8">
                        <div class="input-icon">
                            <i class="fa fa-envelope font-green"></i>
                            <input type="text" name="email" class="form-control" placeholder="Email" value="{{old('email')}}">
                            @if($errors->has('email'))
                                <div class="alert alert-danger">
                                    <i class="fa fa-warning"></i>
                                    <strong>Error :</strong> {{$errors->first('email')}}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label">Mobile</label>
                    <div class="col-md-8">
                        <div class="input-icon">
                            <i class="fa fa-mobile font-green"></i>
                            <input type="text" name="mobile" class="form-control" placeholder="Mobile" value="{{old('mobile')}}">
                            @if($errors->has('mobile'))
                                <div class="alert alert-danger">
                                    <i class="fa fa-warning"></i>
                                    <strong>Error :</strong> {{$errors->first('mobile')}}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label">Website</label>
                    <div class="col-md-8">
                        <div class="input-icon">
                            <i class="fa fa-hand-pointer-o font-green"></i>
                            <input type="text" name="website" class="form-control" placeholder="Website" value="{{old('website')}}">
                            @if($errors->has('website'))
                                <div class="alert alert-danger">
                                    <i class="fa fa-warning"></i>
                                    <strong>Error :</strong> {{$errors->first('website')}}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label">Image</label>
                    <div class="col-md-8">
                        <div class="input-icon">
                            <i class="fa fa-image font-green"></i>
                            <input type="file" name="image" class="form-control" value="{{old('image')}}">
                            @if($errors->has('image'))
                                <div class="alert alert-danger">
                                    <i class="fa fa-warning"></i>
                                    <strong>Error :</strong> {{$errors->first('image')}}
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