<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
@include('freelancer.layouts.partials.head_scripts')

<body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid">
@include('freelancer.layouts.partials.header')
<div class="clearfix"> </div>
<div class="page-container">
    <div class="page-sidebar-wrapper">
        <div class="page-sidebar navbar-collapse collapse">
            @include('freelancer.layouts.partials.sidebar')
        </div>
    </div>
    <div class="page-content-wrapper">
        @yield('content')
    </div>
</div>
@include('freelancer.layouts.partials.footer_scripts')
</body>

</html>