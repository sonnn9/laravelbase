<!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">
<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>

    <title>Metronic | Dashboard</title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

    <!--begin::Web font -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {"families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700", "Asap+Condensed:500"]},
            active: function () {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <!--end::Web font -->

    <!--begin::Base Styles -->


    <!--begin::Page Vendors -->
    <link href="{{ asset('assets/vendors/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet"
          type="text/css"/>
    <!--RTL version:<link href="assets/vendors/custom/fullcalendar/fullcalendar.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

    <!--end::Page Vendors -->


    <link href="{{ asset('assets/vendors/base/vendors.bundle.css') }}" rel="stylesheet" type="text/css"/>
    <!--RTL version:<link href="assets/vendors/base/vendors.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

    <link href="{{ asset('assets/demo/demo10/base/style.bundle.css') }}" rel="stylesheet" type="text/css"/>
    <!--RTL version:<link href="assets/demo/demo10/base/style.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

    <!--end::Base Styles -->

    <link rel="shortcut icon" href="{{ asset('assets/demo/demo10/media/img/logo/favicon.ico') }}"/>
</head>
<!-- end::Head -->


<!-- begin::Body -->
<body class="m-page--fluid m-page--loading-enabled m-page--loading m-header--fixed m-header--fixed-mobile m-footer--push m-aside--offcanvas-default">


<!-- begin::Page loader -->
<div class="m-page-loader m-page-loader--base">
    <div class="m-blockui">
        <span>Please wait...</span>
        <span><div class="m-loader m-loader--brand"></div></span>
    </div>
</div>

<!-- end::Page Loader -->
<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page">


    <!-- begin::Header -->
    @include('admin.layouts.header')
            <!-- end::Header -->

    <!-- begin::Body -->
    <div class="m-grid__item m-grid__item--fluid  m-grid m-grid--ver-desktop m-grid--desktop m-page__container m-body">
        @yield('left_aside')



        <div class="m-grid__item m-grid__item--fluid m-wrapper">
            <!-- BEGIN: Subheader -->
            @include('admin.layouts.subheader')
            <!-- END: Subheader -->
            <div class="m-content">
                @yield('body')
            </div>
        </div>
        <!-- end::Body -->
    </div>
    <!-- begin::Footer -->
    @include('admin.layouts.footer')
            <!-- end::Footer -->
</div>
<!-- end:: Page -->

<!-- begin::Quick Sidebar -->
@include('admin.layouts.quickSlidebar')
        <!-- end::Quick Sidebar -->

<!-- begin::Scroll Top -->
<div id="m_scroll_top" class="m-scroll-top">
    <i class="la la-arrow-up"></i>
</div>
<!-- end::Scroll Top -->

<!-- begin::Quick Nav -->
<ul class="m-nav-sticky" style="margin-top: 30px;">
    <li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Purchase" data-placement="left">
        <a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes"
           target="_blank"><i class="la la-cart-arrow-down"></i></a>
    </li>
    <li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Documentation" data-placement="left">
        <a href="https://keenthemes.com/metronic/documentation.html" target="_blank"><i class="la la-code-fork"></i></a>
    </li>
    <li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Support" data-placement="left">
        <a href="https://keenthemes.com/forums/forum/support/metronic5/" target="_blank"><i class="la la-life-ring"></i></a>
    </li>
</ul>
<!-- begin::Quick Nav -->
<!--begin::Base Scripts -->
<script src="{{ asset('assets/vendors/base/vendors.bundle.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/demo/demo10/base/scripts.bundle.js') }}" type="text/javascript"></script>
<!--end::Base Scripts -->


<!--begin::Page Vendors -->
<script src="{{ asset('assets/vendors/custom/fullcalendar/fullcalendar.bundle.js') }}" type="text/javascript"></script>
<!--end::Page Vendors -->


<!--begin::Page Snippets -->
<script src="{{ asset('assets/app/js/dashboard.js') }}" type="text/javascript"></script>
<!--end::Page Snippets -->


<!-- begin::Page Loader -->
<script>
    $(window).on('load', function () {
        $('body').removeClass('m-page--loading');
    });
</script>
<!-- end::Page Loader -->
</body>
<!-- end::Body -->
</html>