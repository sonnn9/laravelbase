@extends('admin.layouts.master')

@section('body')
        <!-- BEGIN: Left Aside -->
        <button class="m-aside-left-close m-aside-left-close--skin-light" id="m_aside_left_close_btn"><i
                    class="la la-close"></i></button>

        <div id="m_aside_left" class="m-grid__item m-aside-left ">
            <!-- BEGIN: Aside Menu -->
            @include('admin.layouts.aside_menu')
            <!-- END: Aside Menu -->
        </div>
        <!-- END: Left Aside -->
        <div class="m-grid__item m-grid__item--fluid m-wrapper">

            <!-- BEGIN: Subheader -->
                @include('admin.layouts.quickSlidebar')
            <!-- END: Subheader -->
            <div class="m-content">
                Inner page content goes here
            </div>
        </div>
@endsection