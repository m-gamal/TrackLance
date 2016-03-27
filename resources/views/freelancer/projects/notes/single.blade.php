@extends('freelancer.layouts.master')
@section('title') {{$note->project->name}} @endsection
@section('custom_head_styles')
    <link href="{{URL::asset('assets/global/plugins/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset('assets/pages/css/blog.min.css')}}" rel="stylesheet" type="text/css" />
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
                    <a href="{{url('projects/all')}}">Projects</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="{{url("project/{$note->project->id}")}}">{{$note->project->name}}</a>
                </li>
            </ul>
        </div>
        <!-- END PAGE HEADER-->

        <div class="blog-page blog-content-2">
            <div class="row">
                <div class="col-md-12">
                    <div class="blog-single-content bordered blog-container">
                        <div class="blog-single-head">
                            <h1 class="blog-single-head-title">{{$note->title}}</h1>
                            <div class="blog-single-head-date">
                                <i class="icon-calendar font-blue"></i>
                                {{$note->created_at}}
                            </div>
                        </div>

                        <div class="blog-single-desc">
                            <p>
                                {{$note->description}}
                            </p>
                        </div>
                        <div class="blog-single-foot">
                            {{$note->status}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('custom_footer_scripts')
    <script>
        $('#projects_tab').addClass('active');
    </script>

    <script src="{{URL::asset('assets/global/scripts/datatable.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('assets/global/plugins/datatables/datatables.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('assets/pages/scripts/table-datatables-editable.min.js')}}" type="text/javascript"></script>
@endsection