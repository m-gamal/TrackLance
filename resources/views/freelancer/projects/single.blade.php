@extends('freelancer.layouts.master')
@section('title') Single Project @endsection
@section('custom_head_styles')
    <link href="{{URL::asset('assets/global/plugins/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset('assets/apps/css/todo.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset('assets/layouts/layout2/css/custom.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
        <!-- BEGIN CONTENT BODY -->
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
                    <span>Projects</span>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <span>Single</span>
                </li>
            </ul>
        </div>
        <!-- END PAGE HEADER-->
        <div class="row">
            <div class="col-md-3">
                <div class="dashboard-stat green-meadow">
                    <div class="visual">
                        <i class="fa fa-comments"></i>
                    </div>
                    <div class="details">
                        <div class="number"> 30 </div>
                        <div class="desc"> Notes </div>
                    </div>
                    <a class="more" href="javascript:;">
                        <strong>
                            <i class="fa fa-plus"></i>
                            Add Note
                        </strong>
                    </a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="dashboard-stat green-meadow">
                    <div class="visual">
                        <i class="fa fa-files-o"></i>
                    </div>
                    <div class="details">
                        <div class="number"> 10 </div>
                        <div class="desc"> Files </div>
                    </div>
                    <a class="more" href="javascript:;">
                        <strong>
                            <i class="fa fa-plus"></i>
                            Add File
                        </strong>
                    </a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="dashboard-stat green-meadow">
                    <div class="visual">
                        <i class="fa fa-tasks"></i>
                    </div>
                    <div class="details">
                        <div class="number"> 12 </div>
                        <div class="desc"> Tasks </div>
                    </div>
                    <a class="more" href="javascript:;">
                        <strong>
                            <i class="fa fa-plus"></i>
                            Add Task
                        </strong>
                    </a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="dashboard-stat green-meadow">
                    <div class="visual">
                        <i class="fa fa-pie-chart"></i>
                    </div>
                    <div class="details">
                        <div class="number"> 2 </div>
                        <div class="desc"> Milestone </div>
                    </div>
                    <a class="more" href="javascript:;">
                        <strong>
                            <i class="fa fa-plus"></i>
                            Add Milestone
                        </strong>
                    </a>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <!-- Begin: life time stats -->
                <div class="portlet light portlet-fit portlet-datatable ">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-laptop font-green"></i>
                            <span class="caption-subject font-green bold uppercase">
                                {{$project->name}}
                            </span>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="tabbable-line">
                            <ul class="nav nav-tabs nav-tabs-lg">
                                <li class="active">
                                    <a href="#details_tab" data-toggle="tab">
                                        <i class="fa fa-pencil"></i>
                                        Details
                                    </a>
                                </li>
                                <li>
                                    <a href="#files_tab" data-toggle="tab">
                                        <i class="fa fa-files-o"></i>
                                        Files
                                    </a>
                                </li>
                                <li>
                                    <a href="#tasks_tab" data-toggle="tab">
                                        <i class="fa fa-tasks"></i>
                                        Tasks
                                    </a>
                                </li>
                                <li>
                                    <a href="#notes_tab" data-toggle="tab">
                                        <i class="fa fa-comment"></i>
                                        Notes
                                    </a>
                                </li>
                                <li>
                                    <a href="#progress_tab" data-toggle="tab">
                                        <i class="fa fa-spinner"></i>
                                        Progress
                                    </a>
                                </li>
                                <li>
                                    <a href="#milestones_tab" data-toggle="tab">
                                        <i class="fa fa-pie-chart"></i>
                                        Milestones
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="details_tab">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="portlet green-meadow box">
                                                <div class="portlet-title">
                                                    <div class="caption">
                                                        <i class="fa fa-laptop"></i>Project Details
                                                    </div>
                                                </div>
                                                <div class="portlet-body">
                                                    <div class="table-scrollable">
                                                        <table class="table table-bordered table-hover">
                                                            <table class="table table-bordered table-hover">
                                                                <tr>
                                                                    <th>
                                                                        <i class="fa fa-pencil"></i>
                                                                        Name
                                                                    </th>
                                                                    <td>{{$project->name}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>
                                                                        <i class="fa fa-calendar"></i>
                                                                        Start
                                                                    </th>
                                                                    <td>{{$project->start}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>
                                                                        <i class="fa fa-calendar"></i>
                                                                        End
                                                                    </th>
                                                                    <td>{{$project->end}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>
                                                                        <i class="fa fa-money"></i>
                                                                        Cost
                                                                    </th>
                                                                    <td>{{$project->cost}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>
                                                                        <i class="fa fa-credit-card"></i>
                                                                        Milestone Till Now
                                                                    </th>
                                                                    <td>{{$project->milestone}}</td>
                                                                </tr>
                                                            </table>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="portlet green-meadow box">
                                                <div class="portlet-title">
                                                    <div class="caption">
                                                        <i class="fa fa-user"></i>Client Details
                                                    </div>
                                                </div>
                                                <div class="portlet-body">
                                                    <div class="table-scrollable">
                                                        <table class="table table-bordered table-hover">
                                                            <tr>
                                                                <th>
                                                                    <i class="fa fa-user"></i>
                                                                    Name
                                                                </th>
                                                                <td>{{$project->client->name}}</td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    <i class="fa fa-envelope-o"></i>
                                                                    Email
                                                                </th>
                                                                <td>{{$project->client->email}}</td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    <i class="fa fa-mobile"></i>
                                                                    Mobile
                                                                </th>
                                                                <td>{{$project->client->mobile}}</td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    <i class="fa fa-external-link"></i>
                                                                    Website
                                                                </th>
                                                                <td>
                                                                    @if($project->client->website )
                                                                        <a href="{{$project->client->website}}" target="_blank">
                                                                            {{$project->client->website}}
                                                                        </a>
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    <i class="fa fa-comment"></i>
                                                                    Notes
                                                                </th>
                                                                <td>102</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="files_tab">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="portlet green-meadow box">
                                                <div class="portlet-title">
                                                    <div class="caption">
                                                        <i class="fa fa-files-o"></i>Files List
                                                    </div>
                                                </div>
                                                <div class="portlet-body">
                                                    <table class="table table-striped table-hover table-bordered sample_editable_1">
                                                        <thead>
                                                        <tr>
                                                            <th> File </th>
                                                            <th> Date </th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="tasks_tab">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="portlet green-meadow box">
                                                <div class="portlet-title">
                                                    <div class="caption">
                                                        <i class="fa fa-task"></i>Tasks List
                                                    </div>
                                                </div>
                                                <div class="portlet-body">
                                                    <table class="table table-striped table-hover table-bordered sample_editable_1">
                                                        <thead>
                                                        <tr>
                                                            <th> Name </th>
                                                            <th> Start </th>
                                                            <th> End </th>
                                                            <th> Progress </th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="notes_tab">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="portlet green-meadow box">
                                                <div class="portlet-title">
                                                    <div class="caption">
                                                        <i class="fa fa-comment"></i>Notes List
                                                    </div>
                                                </div>
                                                <div class="portlet-body">
                                                    <table class="table table-striped table-hover table-bordered sample_editable_1">
                                                        <thead>
                                                        <tr>
                                                            <th> Title </th>
                                                            <th> Date </th>
                                                            <th> Statue </th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="progress_tab">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="portlet green-meadow box">
                                                <div class="portlet-title">
                                                    <div class="caption">
                                                        <i class="fa fa-spinner"></i>Project Progress
                                                    </div>
                                                </div>
                                                <div class="portlet-body">
                                                    <div class="row">
                                                        <div class="col-md-8 col-md-offset-4">
                                                            <input class="knob" data-angleoffset=180 data-fgcolor="red" value="35">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="milestones_tab">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="portlet green-meadow box">
                                                <div class="portlet-title">
                                                    <div class="caption">
                                                        <i class="fa fa-credit-card"></i>Milestones List
                                                    </div>
                                                </div>
                                                <div class="portlet-body">
                                                    <table class="table table-striped table-hover table-bordered sample_editable_1">
                                                        <thead>
                                                        <tr>
                                                            <th> Percent </th>
                                                            <th> Date </th>
                                                            <th> Payment Method </th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End: life time stats -->
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
    <script src="{{URL::asset('assets/global/plugins/jquery-knob/js/jquery.knob.js')}}" type="text/javascript"></script>

    <script src="{{URL::asset('assets/pages/scripts/components-knob-dials.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('assets/pages/scripts/table-datatables-editable.min.js')}}" type="text/javascript"></script>

    <script src="{{URL::asset('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}" type="text/javascript"></script>
    <script src=".{{URL::asset('assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('assets/global/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js')}}" type="text/javascript"></script>

    <script src="{{URL::asset('assets/pages/scripts/ecommerce-orders-view.min.js')}}" type="text/javascript"></script>
@endsection