@extends('frontend.layouts.master')
@section('content')
    <link rel="stylesheet"  href="{{url('public/frontend/assets/css/buying_selling.css')}}">
    <div class="profile_khoj_biz">
        <div class="profile_page">

        </div>
        <div id="page-container" class="page-header-fixed">
            <!-- Side Overlay-->
        {{--<aside id="side-overlay" class="font-size-sm">--}}
        {{--<!-- Side Header -->--}}
        {{--<div class="content-header border-bottom">--}}
        {{--<!-- User Avatar -->--}}
        {{--<a class="img-link mr-1" href="javascript:void(0)">--}}
        {{--<img class="img-avatar img-avatar32" src="assets/media/avatars/avatar10.jpg" alt="">--}}
        {{--</a>--}}
        {{--<!-- END User Avatar -->--}}

        {{--<!-- User Info -->--}}
        {{--<div class="ml-2">--}}
        {{--<a class="link-fx text-dark font-w600" href="javascript:void(0)">Adam McCoy</a>--}}
        {{--</div>--}}
        {{--<!-- END User Info -->--}}

        {{--<!-- Close Side Overlay -->--}}
        {{--<!-- Layout API, functionality initialized in Template._uiApiLayout() -->--}}
        {{--<a class="ml-auto btn btn-sm btn-dual" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_close">--}}
        {{--<i class="fa fa-fw fa-times text-danger"></i>--}}
        {{--</a>--}}
        {{--<!-- END Close Side Overlay -->--}}
        {{--</div>--}}
        {{--<!-- END Side Header -->--}}

        {{--<!-- Side Content -->--}}
        {{--<div class="content-side">--}}
        {{--<!-- Side Overlay Tabs -->--}}
        {{--<div class="block block-transparent pull-x pull-t">--}}
        {{--<ul class="nav nav-tabs nav-tabs-alt nav-justified" data-toggle="tabs" role="tablist">--}}
        {{--<li class="nav-item">--}}
        {{--<a class="nav-link active" href="#so-overview">--}}
        {{--<i class="fa fa-fw fa-coffee text-gray mr-1"></i> Overview--}}
        {{--</a>--}}
        {{--</li>--}}
        {{--<li class="nav-item">--}}
        {{--<a class="nav-link" href="#so-sales">--}}
        {{--<i class="fa fa-fw fa-chart-line text-gray mr-1"></i> Sales--}}
        {{--</a>--}}
        {{--</li>--}}
        {{--</ul>--}}
        {{--<div class="block-content tab-content overflow-hidden">--}}
        {{--<!-- Overview Tab -->--}}
        {{--<div class="tab-pane pull-x fade fade-left show active" id="so-overview" role="tabpanel">--}}
        {{--<!-- Activity -->--}}
        {{--<div class="block">--}}
        {{--<div class="block-header block-header-default">--}}
        {{--<h3 class="block-title">Recent Activity</h3>--}}
        {{--<div class="block-options">--}}
        {{--<button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">--}}
        {{--<i class="si si-refresh"></i>--}}
        {{--</button>--}}
        {{--<button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<div class="block-content">--}}
        {{--<!-- Activity List -->--}}
        {{--<ul class="nav-items mb-0">--}}
        {{--<li>--}}
        {{--<a class="text-dark media py-2" href="javascript:void(0)">--}}
        {{--<div class="mr-3 ml-2">--}}
        {{--<i class="si si-wallet text-success"></i>--}}
        {{--</div>--}}
        {{--<div class="media-body">--}}
        {{--<div class="font-w600">New sale ($15)</div>--}}
        {{--<div class="text-success">Admin Template</div>--}}
        {{--<small class="text-muted">3 min ago</small>--}}
        {{--</div>--}}
        {{--</a>--}}
        {{--</li>--}}
        {{--<li>--}}
        {{--<a class="text-dark media py-2" href="javascript:void(0)">--}}
        {{--<div class="mr-3 ml-2">--}}
        {{--<i class="si si-pencil text-info"></i>--}}
        {{--</div>--}}
        {{--<div class="media-body">--}}
        {{--<div class="font-w600">You edited the file</div>--}}
        {{--<div class="text-info">--}}
        {{--<i class="fa fa-file-text"></i> Documentation.doc--}}
        {{--</div>--}}
        {{--<small class="text-muted">15 min ago</small>--}}
        {{--</div>--}}
        {{--</a>--}}
        {{--</li>--}}
        {{--<li>--}}
        {{--<a class="text-dark media py-2" href="javascript:void(0)">--}}
        {{--<div class="mr-3 ml-2">--}}
        {{--<i class="si si-close text-danger"></i>--}}
        {{--</div>--}}
        {{--<div class="media-body">--}}
        {{--<div class="font-w600">Project deleted</div>--}}
        {{--<div class="text-danger">Line Icon Set</div>--}}
        {{--<small class="text-muted">4 hours ago</small>--}}
        {{--</div>--}}
        {{--</a>--}}
        {{--</li>--}}
        {{--</ul>--}}
        {{--<!-- END Activity List -->--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<!-- END Activity -->--}}

        {{--<!-- Online Friends -->--}}
        {{--<!-- END Online Friends -->--}}

        {{--<!-- Quick Settings -->--}}
        {{--<div class="block mb-0">--}}
        {{--<div class="block-header block-header-default">--}}
        {{--<h3 class="block-title">Quick Settings</h3>--}}
        {{--<div class="block-options">--}}
        {{--<button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<div class="block-content">--}}
        {{--<!-- Quick Settings Form -->--}}
        {{--<form action="be_pages_dashboard.html" method="POST" onsubmit="return false;">--}}
        {{--<div class="form-group">--}}
        {{--<p class="font-w600 mb-2">--}}
        {{--Online Status--}}
        {{--</p>--}}
        {{--<div class="custom-control custom-switch mb-1">--}}
        {{--<input type="checkbox" class="custom-control-input" id="so-settings-check1" name="so-settings-check1" checked>--}}
        {{--<label class="custom-control-label" for="so-settings-check1">Show your status to all</label>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<hr>--}}
        {{--<div class="form-group">--}}
        {{--<p class="font-w600 mb-2">--}}
        {{--Auto Updates--}}
        {{--</p>--}}
        {{--<div class="custom-control custom-switch mb-1">--}}
        {{--<input type="checkbox" class="custom-control-input" id="so-settings-check2" name="so-settings-check2" checked>--}}
        {{--<label class="custom-control-label" for="so-settings-check2">Keep up to date</label>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<hr>--}}
        {{--<div class="form-group">--}}
        {{--<p class="font-w600 mb-1">--}}
        {{--Application Alerts--}}
        {{--</p>--}}
        {{--<div class="custom-control custom-switch mb-1">--}}
        {{--<input type="checkbox" class="custom-control-input" id="so-settings-check3" name="so-settings-check3" checked>--}}
        {{--<label class="custom-control-label" for="so-settings-check3">Email Notifications</label>--}}
        {{--</div>--}}
        {{--<div class="custom-control custom-switch mb-1">--}}
        {{--<input type="checkbox" class="custom-control-input" id="so-settings-check4" name="so-settings-check4" checked>--}}
        {{--<label class="custom-control-label" for="so-settings-check4">SMS Notifications</label>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<hr>--}}
        {{--<div class="form-group">--}}
        {{--<p class="font-w600 mb-1">--}}
        {{--API--}}
        {{--</p>--}}
        {{--<div class="custom-control custom-switch mb-1">--}}
        {{--<input type="checkbox" class="custom-control-input" id="so-settings-check5" name="so-settings-check5" checked>--}}
        {{--<label class="custom-control-label" for="so-settings-check5">Enable access</label>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</form>--}}
        {{--<!-- END Quick Settings Form -->--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<!-- END Quick Settings -->--}}
        {{--</div>--}}
        {{--<!-- END Overview Tab -->--}}

        {{--<!-- Sales Tab -->--}}
        {{--<div class="tab-pane pull-x fade fade-right" id="so-sales" role="tabpanel">--}}
        {{--<div class="block mb-0">--}}
        {{--<!-- Stats -->--}}
        {{--<div class="block-content">--}}
        {{--<div class="row items-push pull-t">--}}
        {{--<div class="col-6">--}}
        {{--<div class="font-w700 text-uppercase">Sales</div>--}}
        {{--<a class="link-fx font-size-h3 font-w300" href="javascript:void(0)">22.030</a>--}}
        {{--</div>--}}
        {{--<div class="col-6">--}}
        {{--<div class="font-w700 text-uppercase">Balance</div>--}}
        {{--<a class="link-fx font-size-h3 font-w300" href="javascript:void(0)">$4.589,00</a>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<!-- END Stats -->--}}

        {{--<!-- Today -->--}}
        {{--<div class="block-content block-content-full block-content-sm bg-body-light">--}}
        {{--<div class="row">--}}
        {{--<div class="col-6">--}}
        {{--<span class="font-w600 text-uppercase">Today</span>--}}
        {{--</div>--}}
        {{--<div class="col-6 text-right">--}}
        {{--<span class="ext-muted">$996</span>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<div class="block-content">--}}
        {{--<ul class="nav-items push">--}}
        {{--<li>--}}
        {{--<a class="text-dark media py-2" href="javascript:void(0)">--}}
        {{--<div class="mr-3 ml-2">--}}
        {{--<i class="fa fa-fw fa-circle text-success"></i>--}}
        {{--</div>--}}
        {{--<div class="media-body">--}}
        {{--<div class="font-w600">New sale! + $249</div>--}}
        {{--<small class="text-muted">3 min ago</small>--}}
        {{--</div>--}}
        {{--</a>--}}
        {{--</li>--}}
        {{--<li>--}}
        {{--<a class="text-dark media py-2" href="javascript:void(0)">--}}
        {{--<div class="mr-3 ml-2">--}}
        {{--<i class="fa fa-fw fa-circle text-success"></i>--}}
        {{--</div>--}}
        {{--<div class="media-body">--}}
        {{--<div class="font-w600">New sale! + $129</div>--}}
        {{--<small class="text-muted">50 min ago</small>--}}
        {{--</div>--}}
        {{--</a>--}}
        {{--</li>--}}
        {{--<li>--}}
        {{--<a class="text-dark media py-2" href="javascript:void(0)">--}}
        {{--<div class="mr-3 ml-2">--}}
        {{--<i class="fa fa-fw fa-circle text-success"></i>--}}
        {{--</div>--}}
        {{--<div class="media-body">--}}
        {{--<div class="font-w600">New sale! + $119</div>--}}
        {{--<small class="text-muted">2 hours ago</small>--}}
        {{--</div>--}}
        {{--</a>--}}
        {{--</li>--}}
        {{--<li>--}}
        {{--<a class="text-dark media py-2" href="javascript:void(0)">--}}
        {{--<div class="mr-3 ml-2">--}}
        {{--<i class="fa fa-fw fa-circle text-success"></i>--}}
        {{--</div>--}}
        {{--<div class="media-body">--}}
        {{--<div class="font-w600">New sale! + $499</div>--}}
        {{--<small class="text-muted">3 hours ago</small>--}}
        {{--</div>--}}
        {{--</a>--}}
        {{--</li>--}}
        {{--</ul>--}}
        {{--</div>--}}
        {{--<!-- END Today -->--}}

        {{--<!-- Yesterday -->--}}
        {{--<div class="block-content block-content-full block-content-sm bg-body-light">--}}
        {{--<div class="row">--}}
        {{--<div class="col-6">--}}
        {{--<span class="font-w600 text-uppercase">Yesterday</span>--}}
        {{--</div>--}}
        {{--<div class="col-6 text-right">--}}
        {{--<span class="text-muted">$765</span>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<div class="block-content">--}}
        {{--<ul class="nav-items push">--}}
        {{--<li>--}}
        {{--<a class="text-dark media py-2" href="javascript:void(0)">--}}
        {{--<div class="mr-3 ml-2">--}}
        {{--<i class="fa fa-fw fa-circle text-success"></i>--}}
        {{--</div>--}}
        {{--<div class="media-body">--}}
        {{--<div class="font-w600">New sale! + $249</div>--}}
        {{--<small class="text-muted">26 hours ago</small>--}}
        {{--</div>--}}
        {{--</a>--}}
        {{--</li>--}}
        {{--<li>--}}
        {{--<a class="text-dark media py-2" href="javascript:void(0)">--}}
        {{--<div class="mr-3 ml-2">--}}
        {{--<i class="fa fa-fw fa-circle text-danger"></i>--}}
        {{--</div>--}}
        {{--<div class="media-body">--}}
        {{--<div class="font-w600">Product Purchase - $50</div>--}}
        {{--<small class="text-muted">28 hours ago</small>--}}
        {{--</div>--}}
        {{--</a>--}}
        {{--</li>--}}
        {{--<li>--}}
        {{--<a class="text-dark media py-2" href="javascript:void(0)">--}}
        {{--<div class="mr-3 ml-2">--}}
        {{--<i class="fa fa-fw fa-circle text-success"></i>--}}
        {{--</div>--}}
        {{--<div class="media-body">--}}
        {{--<div class="font-w600">New sale! + $119</div>--}}
        {{--<small class="text-muted">29 hours ago</small>--}}
        {{--</div>--}}
        {{--</a>--}}
        {{--</li>--}}
        {{--<li>--}}
        {{--<a class="text-dark media py-2" href="javascript:void(0)">--}}
        {{--<div class="mr-3 ml-2">--}}
        {{--<i class="fa fa-fw fa-circle text-danger"></i>--}}
        {{--</div>--}}
        {{--<div class="media-body">--}}
        {{--<div class="font-w600">Paypal Withdrawal - $300</div>--}}
        {{--<small class="text-muted">37 hours ago</small>--}}
        {{--</div>--}}
        {{--</a>--}}
        {{--</li>--}}
        {{--<li>--}}
        {{--<a class="text-dark media py-2" href="javascript:void(0)">--}}
        {{--<div class="mr-3 ml-2">--}}
        {{--<i class="fa fa-fw fa-circle text-success"></i>--}}
        {{--</div>--}}
        {{--<div class="media-body">--}}
        {{--<div class="font-w600">New sale! + $129</div>--}}
        {{--<small class="text-muted">39 hours ago</small>--}}
        {{--</div>--}}
        {{--</a>--}}
        {{--</li>--}}
        {{--<li>--}}
        {{--<a class="text-dark media py-2" href="javascript:void(0)">--}}
        {{--<div class="mr-3 ml-2">--}}
        {{--<i class="fa fa-fw fa-circle text-success"></i>--}}
        {{--</div>--}}
        {{--<div class="media-body">--}}
        {{--<div class="font-w600">New sale! + $119</div>--}}
        {{--<small class="text-muted">45 hours ago</small>--}}
        {{--</div>--}}
        {{--</a>--}}
        {{--</li>--}}
        {{--<li>--}}
        {{--<a class="text-dark media py-2" href="javascript:void(0)">--}}
        {{--<div class="mr-3 ml-2">--}}
        {{--<i class="fa fa-fw fa-circle text-success"></i>--}}
        {{--</div>--}}
        {{--<div class="media-body">--}}
        {{--<div class="font-w600">New sale! + $499</div>--}}
        {{--<small class="text-muted">46 hours ago</small>--}}
        {{--</div>--}}
        {{--</a>--}}
        {{--</li>--}}
        {{--</ul>--}}

        {{--<!-- More -->--}}
        {{--<div class="text-center">--}}
        {{--<a class="btn btn-sm btn-light" href="javascript:void(0)">--}}
        {{--<i class="fa fa-arrow-down mr-1"></i> Load More..--}}
        {{--</a>--}}
        {{--</div>--}}
        {{--<!-- END More -->--}}
        {{--</div>--}}
        {{--<!-- END Yesterday -->--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<!-- END Sales Tab -->--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<!-- END Side Overlay Tabs -->--}}
        {{--</div>--}}
        {{--<!-- END Side Content -->--}}
        {{--</aside>--}}
        {{--<!-- END Side Overlay -->--}}

        <!-- Sidebar -->

            <nav id="sidebar" aria-label="Main Navigation">
                <!-- Side Header -->
                <div class="content-header bg-white-5">
                    <!-- Logo -->
                    <a class="font-w600 text-dual" href="index.html">
                        <i class="fa fa-circle-notch text-primary"></i>
                        <span class="smini-hide">
                            <span class="font-w700 font-size-h5">Company Name</span>
                    </span>
                    </a>
                    <!-- END Logo -->

                    <!-- Options -->
                    <div>

                        <!-- Close Sidebar, Visible only on mobile screens -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <a class="d-lg-none text-dual ml-3" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
                            <i class="fa fa-times"></i>
                        </a>
                        <!-- END Close Sidebar -->
                    </div>
                    <!-- END Options -->
                </div>
                <!-- END Side Header -->

                <!-- Side Navigation -->
                <div class="content-side content-side-full">
                    <ul class="nav-main">
                        <li>
                            <a class="nav-link d-flex justify-content-between align-items-center active" href="">
                                About Us
                            </a>
                        </li>
                        <li>
                            <a class="nav-link d-flex justify-content-between align-items-center" href="">Profile </a>
                        </li>
                        <li>
                            <a class="nav-link d-flex justify-content-between align-items-center" href="">Product & Service</a>
                        </li>
                        <li>
                            <a class="nav-link d-flex justify-content-between align-items-center" href="">Image Gallery </a>
                        </li>
                        <li>
                            <a class="nav-link d-flex justify-content-between align-items-center" href="">Contact Us </a>
                        </li>
                    </ul>
                </div>
                <!-- END Side Navigation -->
            </nav>
            <!-- END Sidebar -->

            <!-- Header -->
            <header id="page-header" style="background: #fff;">
                <!-- Header Content -->
                <div class="content-header">
                    <!-- Left Section -->
                    <div class="d-flex align-items-center">
                        <!-- Toggle Sidebar -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
                        <button type="button" class="btn btn-sm btn-dual mr-2 d-lg-none" data-toggle="layout" data-action="sidebar_toggle">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>
                        <!-- END Toggle Sidebar -->
                        <a href="{{url('')}}">
                            <img src="{{url('public/images/defaultImg/khojbiz_logo.png')}}" alt="" width="80">
                        </a> &nbsp;
                        <!-- Apps Modal -->
                        <!-- Opens the Apps modal found at the bottom of the page, after footer’s markup -->
                        <button type="button" class="btn btn-sm btn-dual mr-2" data-toggle="modal" data-target="#one-modal-apps">
                            <i class="si si-grid"></i>
                        </button>
                        <!-- END Apps Modal -->

                        <!-- Open Search Section (visible on smaller screens) -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->

                        <!-- END Open Search Section -->

                        <!-- Search Form (visible on larger screens) -->
                        <ul class="header_nav_pro">
                            <li>
                                <a class="nav-link d-flex justify-content-between align-items-center" href="">
                                    Free Listing
                                </a>
                            </li>
                        </ul>
                        <!-- END Search Form -->
                    </div>
                    <!-- END Left Section -->

                    <!-- Right Section -->
                    <div class="d-flex align-items-center">
                        <button type="button" class="btn btn-sm btn-dual d-sm-none" data-toggle="layout" data-action="header_search_on">
                            <i class="si si-magnifier"></i>
                        </button>
                    @if(\Illuminate\Support\Facades\Auth::check())
                        <!-- User Dropdown -->
                            <div class="dropdown d-inline-block ml-2">
                                <button type="button" class="btn btn-sm btn-dual" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img class="rounded" src="{{url('public/frontend/assets/media/avatars/avatar10.jpg')}}" alt="Khoj Biz" style="width: 18px;">
                                    <span class="d-none d-sm-inline-block ml-1">{{\Illuminate\Support\Facades\Auth::user()->name}}</span>
                                    <i class="fa fa-fw fa-angle-down d-none d-sm-inline-block"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right p-0 border-0 font-size-sm" aria-labelledby="page-header-user-dropdown">
                                    <div class="p-3 text-center bg-primary">
                                        <img class="img-avatar img-avatar48 img-avatar-thumb" src="{{url('public/frontend/assets/media/avatars/avatar10.jpg')}}" alt="">
                                    </div>
                                    <div class="p-2">
                                        <h5 class="dropdown-header text-uppercase">User Options</h5>
                                        <a class="dropdown-item d-flex align-items-center justify-content-between" href="be_pages_generic_inbox.html">
                                            <span>Inbox</span>
                                            <span>
                                            <span class="badge badge-pill badge-primary">3</span>
                                            <i class="si si-envelope-open ml-1"></i>
                                        </span>
                                        </a>
                                        <a class="dropdown-item d-flex align-items-center justify-content-between" href="be_pages_generic_profile.html">
                                            <span>Profile</span>
                                            <span>
                                            <span class="badge badge-pill badge-success">1</span>
                                            <i class="si si-user ml-1"></i>
                                        </span>
                                        </a>
                                        <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                            <span>Settings</span>
                                            <i class="si si-settings"></i>
                                        </a>
                                        <div role="separator" class="dropdown-divider"></div>
                                        <h5 class="dropdown-header text-uppercase">Actions</h5>
                                        <a class="dropdown-item d-flex align-items-center justify-content-between" href="op_auth_lock.html">
                                            <span>Lock Account</span>
                                            <i class="si si-lock ml-1"></i>
                                        </a>
                                        <a class="dropdown-item d-flex align-items-center justify-content-between" href="{{url('logout')}}">
                                            <span>Log Out</span>
                                            <i class="si si-logout ml-1"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- END User Dropdown -->
                            <!-- Notifications Dropdown -->
                            <div class="dropdown d-inline-block ml-2">
                                <button type="button" class="btn btn-sm btn-dual" id="page-header-notifications-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="si si-bell"></i>
                                    <span class="badge badge-primary badge-pill">6</span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0 border-0 font-size-sm" aria-labelledby="page-header-notifications-dropdown">
                                    <div class="p-2 bg-primary text-center">
                                        <h5 class="dropdown-header text-uppercase text-white">Notifications</h5>
                                    </div>
                                    <ul class="nav-items mb-0">
                                        <li>
                                            <a class="text-dark media py-2" href="javascript:void(0)">
                                                <div class="mr-2 ml-3">
                                                    <i class="fa fa-fw fa-check-circle text-success"></i>
                                                </div>
                                                <div class="media-body pr-2">
                                                    <div class="font-w600">You have a new follower</div>
                                                    <small class="text-muted">15 min ago</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="text-dark media py-2" href="javascript:void(0)">
                                                <div class="mr-2 ml-3">
                                                    <i class="fa fa-fw fa-plus-circle text-info"></i>
                                                </div>
                                                <div class="media-body pr-2">
                                                    <div class="font-w600">1 new sale, keep it up</div>
                                                    <small class="text-muted">22 min ago</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="text-dark media py-2" href="javascript:void(0)">
                                                <div class="mr-2 ml-3">
                                                    <i class="fa fa-fw fa-times-circle text-danger"></i>
                                                </div>
                                                <div class="media-body pr-2">
                                                    <div class="font-w600">Update failed, restart server</div>
                                                    <small class="text-muted">26 min ago</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="text-dark media py-2" href="javascript:void(0)">
                                                <div class="mr-2 ml-3">
                                                    <i class="fa fa-fw fa-plus-circle text-info"></i>
                                                </div>
                                                <div class="media-body pr-2">
                                                    <div class="font-w600">2 new sales, keep it up</div>
                                                    <small class="text-muted">33 min ago</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="text-dark media py-2" href="javascript:void(0)">
                                                <div class="mr-2 ml-3">
                                                    <i class="fa fa-fw fa-user-plus text-success"></i>
                                                </div>
                                                <div class="media-body pr-2">
                                                    <div class="font-w600">You have a new subscriber</div>
                                                    <small class="text-muted">41 min ago</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="text-dark media py-2" href="javascript:void(0)">
                                                <div class="mr-2 ml-3">
                                                    <i class="fa fa-fw fa-check-circle text-success"></i>
                                                </div>
                                                <div class="media-body pr-2">
                                                    <div class="font-w600">You have a new follower</div>
                                                    <small class="text-muted">42 min ago</small>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="p-2 border-top">
                                        <a class="btn btn-sm btn-light btn-block text-center" href="javascript:void(0)">
                                            <i class="fa fa-fw fa-arrow-down mr-1"></i> Load More..
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- END Notifications Dropdown -->
                    @else
                        <!-- User Dropdown -->
                            <a href="{{url('login')}}" class="btn btn-sm btn-dual" style="margin:0 10px;">
                                <img class="rounded" src="{{url('public/frontend/assets/media/avatars/avatar10.jpg')}}" alt="Khoj Biz" style="width: 18px;">
                                <span class="d-none d-sm-inline-block ml-1">Login</span>
                            </a>
                            <a href="{{url('register')}}" class="btn btn-sm btn-dual">
                                <img class="rounded" src="{{url('public/frontend/assets/media/avatars/avatar10.jpg')}}" alt="Khoj Biz" style="width: 18px;">  <span class="d-none d-sm-inline-block ml-1">Register</span>
                            </a>
                            <!-- END User Dropdown -->
                    @endif
                    <!-- Toggle Side Overlay -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <button type="button" class="btn btn-sm btn-dual ml-2" data-toggle="layout" data-action="side_overlay_toggle">
                            <i class="fa fa-fw fa-list-ul fa-flip-horizontal"></i>
                        </button>
                        <!-- END Toggle Side Overlay -->
                    </div>
                    <!-- END Right Section -->
                </div>
                <!-- END Header Content -->


                <!-- Header Loader -->
                <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
                <div id="page-header-loader" class="overlay-header bg-white">
                    <div class="content-header">
                        <div class="w-100 text-center">
                            <i class="fa fa-fw fa-circle-notch fa-spin"></i>
                        </div>
                    </div>
                </div>
                <!-- END Header Loader -->
            </header>
            <!-- END Header -->

            <!-- Main Container -->
            <main id="container">
                <!-- Page Content -->
                <div class="content kb_buy_sell_list">
                    <div class="row" style="background-color: white">
                        <div class="col-md-6 offset-md-3">
                            <!-- Search -->
                            <div class="content">
                                <form action="be_pages_generic_search.html" method="POST">
                                    <div class="input-group" style="width: 100%">
                                        <input type="text" class="form-control" placeholder="Search..">
                                        <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="fa fa-fw fa-search"></i>
                                </span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <br><br> <br> <br>
                    </div>
                    <div class="row" style="background-color: #f9f9f9;padding: 15px 0">
                        <div class="col">
                            <div class="classified_ads">
                                <a href="https://www.khojbiz.com">
                                    <span class="icon-background">
                                        <img src="{{url('public/images/icon/1.png')}}" style="width:32px;height:32px" alt="">
                                    </span>
                                    <br> <small>Imóveis jgag ag</small></a>
                            </div>
                        </div>
                        <div class="col">
                          <div class="classified_ads">
                              <a href="https://www.olx.com.br/imoveis"><span class="icon-background">
                                  <img src="{{url('public/images/icon/2.jpg')}}" style="width:32px;height:32px" alt="">
                                  </span>
                                  <br> <small>Imóveis</small></a>
                          </div>
                      </div>
                        <div class="col">
                          <div class="classified_ads">
                              <a href="https://www.olx.com.br/imoveis"><span class="icon-background"><img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyB3aWR0aD0iMjRweCIgaGVpZ2h0PSIyNHB4IiB2aWV3Qm94PSIwIDAgMjQgMjQiIHZlcnNpb249IjEuMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayI+CiAgICA8IS0tIEdlbmVyYXRvcjogU2tldGNoIDQ4LjIgKDQ3MzI3KSAtIGh0dHA6Ly93d3cuYm9oZW1pYW5jb2RpbmcuY29tL3NrZXRjaCAtLT4KICAgIDx0aXRsZT54eHhoZHBpMDogSWNvbnMgLyBDYXRlZ29yeSAvIEltw7N2ZWlzPC90aXRsZT4KICAgIDxkZXNjPkNyZWF0ZWQgd2l0aCBTa2V0Y2guPC9kZXNjPgogICAgPGRlZnM+CiAgICAgICAgPHBhdGggZD0iTTMuMzQsOS41MiBMMy4zNCwxOS40OCBMMjAuNjYsMTkuNDggTDIwLjY2LDkuNTIgTDMuMzQsOS41MiBaIE0yLjM0LDguNTIgTDIxLjY2LDguNTIgTDIxLjY2LDIwLjQ4IEwyLjM0LDIwLjQ4IEwyLjM0LDguNTIgWiBNMjAuOTA1Njk4Niw0IEwzLjA5NDMwMTQxLDQgTDEuODI1NzI5OTgsOC40NCBMMjIuMTc0MjcsOC40NCBMMjAuOTA1Njk4Niw0IFogTTIuMzQsMyBMMjEuNjYsMyBMMjMuNSw5LjQ0IEwwLjUsOS40NCBMMi4zNCwzIFogTTEwLjk0NTIzNjksMTkuNTQ2ODk2MiBMMTAuOTQ1MjM2OSwxNC4zMTUxNjg4IEMxMC45NDUyMzY5LDEzLjQzNTE4MzggMTAuMTYyMzk3MywxMi43IDkuMTkyOTE4OTgsMTIuNyBDOC4yMjMyODg1MywxMi43IDcuNDQsMTMuNDM1MzM0NyA3LjQ0LDE0LjMxNTE2ODggTDcuNDQsMTkuNTQ2ODk2MiBMMTAuOTQ1MjM2OSwxOS41NDY4OTYyIFogTTYuNDQsMTQuMzE1MTY4OCBDNi40NCwxMi44Njg0MzQgNy42ODQ2MzE4NCwxMS43IDkuMTkyOTE4OTgsMTEuNyBDMTAuNzAxMTMwMywxMS43IDExLjk0NTIzNjksMTIuODY4MzcwOSAxMS45NDUyMzY5LDE0LjMxNTE2ODggTDExLjk0NTIzNjksMjAuNTQ2ODk2MiBMNi40NCwyMC41NDY4OTYyIEw2LjQ0LDE0LjMxNTE2ODggWiBNMTUuMywxNC44OCBMMTYuOTgsMTQuODggTDE2Ljk4LDEzLjIgTDE1LjMsMTMuMiBMMTUuMywxNC44OCBaIE0xNC4zLDEyLjIgTDE3Ljk4LDEyLjIgTDE3Ljk4LDE1Ljg4IEwxNC4zLDE1Ljg4IEwxNC4zLDEyLjIgWiBNMS40MiwyMC41MiBDMS4xNDM4NTc2MywyMC41MiAwLjkyLDIwLjI5NjE0MjQgMC45MiwyMC4wMiBDMC45MiwxOS43NDM4NTc2IDEuMTQzODU3NjMsMTkuNTIgMS40MiwxOS41MiBMMjIuNTgsMTkuNTIgQzIyLjg1NjE0MjQsMTkuNTIgMjMuMDgsMTkuNzQzODU3NiAyMy4wOCwyMC4wMiBDMjMuMDgsMjAuMjk2MTQyNCAyMi44NTYxNDI0LDIwLjUyIDIyLjU4LDIwLjUyIEwxLjQyLDIwLjUyIFoiIGlkPSJwYXRoLTEiPjwvcGF0aD4KICAgIDwvZGVmcz4KICAgIDxnIGlkPSJTeW1ib2xzIiBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMSIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj4KICAgICAgICA8ZyBpZD0iMDotSWNvbnMtLy1DYXRlZ29yeS0vLUltw7N2ZWlzIj4KICAgICAgICAgICAgPHBhdGggZD0iTTAsMCBMMjQsMCBMMjQsMjQgTDAsMjQgTDAsMCBaIE0wLDAgTDI0LDAgTDI0LDI0IEwwLDI0IEwwLDAgWiBNMCwwIEwyNCwwIEwyNCwyNCBMMCwyNCBMMCwwIFogTTAsMCBMMjQsMCBMMjQsMjQgTDAsMjQgTDAsMCBaIiBpZD0iQ29udGFpbmVyIj48L3BhdGg+CiAgICAgICAgICAgIDxtYXNrIGlkPSJtYXNrLTIiIGZpbGw9IndoaXRlIj4KICAgICAgICAgICAgICAgIDx1c2UgeGxpbms6aHJlZj0iI3BhdGgtMSI+PC91c2U+CiAgICAgICAgICAgIDwvbWFzaz4KICAgICAgICAgICAgPHVzZSBpZD0iTWFzayIgZmlsbD0iIzRBNEE0QSIgZmlsbC1ydWxlPSJub256ZXJvIiB4bGluazpocmVmPSIjcGF0aC0xIj48L3VzZT4KICAgICAgICAgICAgPGcgaWQ9IjA6LUZ1bmRhbWVudGFscy0vLUNvbG9yLS8tUHJpbWFyeS0vLUJsYWNrIiBtYXNrPSJ1cmwoI21hc2stMikiIGZpbGw9IiM0QTRBNEEiPgogICAgICAgICAgICAgICAgPHJlY3QgaWQ9Ik1peGluL0ZpbGwvQmxhY2siIHg9IjAiIHk9IjAiIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCI+PC9yZWN0PgogICAgICAgICAgICA8L2c+CiAgICAgICAgPC9nPgogICAgPC9nPgo8L3N2Zz4=" style="width:32px;height:32px" alt=""></span>
                                  <br> <small>Imóveis</small></a>
                          </div>
                      </div>
                        <div class="col">
                          <div class="classified_ads">
                              <a href="https://www.olx.com.br/imoveis"><span class="icon-background"><img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyB3aWR0aD0iMjRweCIgaGVpZ2h0PSIyNHB4IiB2aWV3Qm94PSIwIDAgMjQgMjQiIHZlcnNpb249IjEuMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayI+CiAgICA8IS0tIEdlbmVyYXRvcjogU2tldGNoIDQ4LjIgKDQ3MzI3KSAtIGh0dHA6Ly93d3cuYm9oZW1pYW5jb2RpbmcuY29tL3NrZXRjaCAtLT4KICAgIDx0aXRsZT54eHhoZHBpMDogSWNvbnMgLyBDYXRlZ29yeSAvIEltw7N2ZWlzPC90aXRsZT4KICAgIDxkZXNjPkNyZWF0ZWQgd2l0aCBTa2V0Y2guPC9kZXNjPgogICAgPGRlZnM+CiAgICAgICAgPHBhdGggZD0iTTMuMzQsOS41MiBMMy4zNCwxOS40OCBMMjAuNjYsMTkuNDggTDIwLjY2LDkuNTIgTDMuMzQsOS41MiBaIE0yLjM0LDguNTIgTDIxLjY2LDguNTIgTDIxLjY2LDIwLjQ4IEwyLjM0LDIwLjQ4IEwyLjM0LDguNTIgWiBNMjAuOTA1Njk4Niw0IEwzLjA5NDMwMTQxLDQgTDEuODI1NzI5OTgsOC40NCBMMjIuMTc0MjcsOC40NCBMMjAuOTA1Njk4Niw0IFogTTIuMzQsMyBMMjEuNjYsMyBMMjMuNSw5LjQ0IEwwLjUsOS40NCBMMi4zNCwzIFogTTEwLjk0NTIzNjksMTkuNTQ2ODk2MiBMMTAuOTQ1MjM2OSwxNC4zMTUxNjg4IEMxMC45NDUyMzY5LDEzLjQzNTE4MzggMTAuMTYyMzk3MywxMi43IDkuMTkyOTE4OTgsMTIuNyBDOC4yMjMyODg1MywxMi43IDcuNDQsMTMuNDM1MzM0NyA3LjQ0LDE0LjMxNTE2ODggTDcuNDQsMTkuNTQ2ODk2MiBMMTAuOTQ1MjM2OSwxOS41NDY4OTYyIFogTTYuNDQsMTQuMzE1MTY4OCBDNi40NCwxMi44Njg0MzQgNy42ODQ2MzE4NCwxMS43IDkuMTkyOTE4OTgsMTEuNyBDMTAuNzAxMTMwMywxMS43IDExLjk0NTIzNjksMTIuODY4MzcwOSAxMS45NDUyMzY5LDE0LjMxNTE2ODggTDExLjk0NTIzNjksMjAuNTQ2ODk2MiBMNi40NCwyMC41NDY4OTYyIEw2LjQ0LDE0LjMxNTE2ODggWiBNMTUuMywxNC44OCBMMTYuOTgsMTQuODggTDE2Ljk4LDEzLjIgTDE1LjMsMTMuMiBMMTUuMywxNC44OCBaIE0xNC4zLDEyLjIgTDE3Ljk4LDEyLjIgTDE3Ljk4LDE1Ljg4IEwxNC4zLDE1Ljg4IEwxNC4zLDEyLjIgWiBNMS40MiwyMC41MiBDMS4xNDM4NTc2MywyMC41MiAwLjkyLDIwLjI5NjE0MjQgMC45MiwyMC4wMiBDMC45MiwxOS43NDM4NTc2IDEuMTQzODU3NjMsMTkuNTIgMS40MiwxOS41MiBMMjIuNTgsMTkuNTIgQzIyLjg1NjE0MjQsMTkuNTIgMjMuMDgsMTkuNzQzODU3NiAyMy4wOCwyMC4wMiBDMjMuMDgsMjAuMjk2MTQyNCAyMi44NTYxNDI0LDIwLjUyIDIyLjU4LDIwLjUyIEwxLjQyLDIwLjUyIFoiIGlkPSJwYXRoLTEiPjwvcGF0aD4KICAgIDwvZGVmcz4KICAgIDxnIGlkPSJTeW1ib2xzIiBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMSIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj4KICAgICAgICA8ZyBpZD0iMDotSWNvbnMtLy1DYXRlZ29yeS0vLUltw7N2ZWlzIj4KICAgICAgICAgICAgPHBhdGggZD0iTTAsMCBMMjQsMCBMMjQsMjQgTDAsMjQgTDAsMCBaIE0wLDAgTDI0LDAgTDI0LDI0IEwwLDI0IEwwLDAgWiBNMCwwIEwyNCwwIEwyNCwyNCBMMCwyNCBMMCwwIFogTTAsMCBMMjQsMCBMMjQsMjQgTDAsMjQgTDAsMCBaIiBpZD0iQ29udGFpbmVyIj48L3BhdGg+CiAgICAgICAgICAgIDxtYXNrIGlkPSJtYXNrLTIiIGZpbGw9IndoaXRlIj4KICAgICAgICAgICAgICAgIDx1c2UgeGxpbms6aHJlZj0iI3BhdGgtMSI+PC91c2U+CiAgICAgICAgICAgIDwvbWFzaz4KICAgICAgICAgICAgPHVzZSBpZD0iTWFzayIgZmlsbD0iIzRBNEE0QSIgZmlsbC1ydWxlPSJub256ZXJvIiB4bGluazpocmVmPSIjcGF0aC0xIj48L3VzZT4KICAgICAgICAgICAgPGcgaWQ9IjA6LUZ1bmRhbWVudGFscy0vLUNvbG9yLS8tUHJpbWFyeS0vLUJsYWNrIiBtYXNrPSJ1cmwoI21hc2stMikiIGZpbGw9IiM0QTRBNEEiPgogICAgICAgICAgICAgICAgPHJlY3QgaWQ9Ik1peGluL0ZpbGwvQmxhY2siIHg9IjAiIHk9IjAiIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCI+PC9yZWN0PgogICAgICAgICAgICA8L2c+CiAgICAgICAgPC9nPgogICAgPC9nPgo8L3N2Zz4=" style="width:32px;height:32px" alt=""></span>
                                  <br> <small>Imóveis</small></a>
                          </div>
                      </div>
                        <div class="col">
                          <div class="classified_ads">
                              <a href="https://www.olx.com.br/imoveis"><span class="icon-background"><img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyB3aWR0aD0iMjRweCIgaGVpZ2h0PSIyNHB4IiB2aWV3Qm94PSIwIDAgMjQgMjQiIHZlcnNpb249IjEuMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayI+CiAgICA8IS0tIEdlbmVyYXRvcjogU2tldGNoIDQ4LjIgKDQ3MzI3KSAtIGh0dHA6Ly93d3cuYm9oZW1pYW5jb2RpbmcuY29tL3NrZXRjaCAtLT4KICAgIDx0aXRsZT54eHhoZHBpMDogSWNvbnMgLyBDYXRlZ29yeSAvIEltw7N2ZWlzPC90aXRsZT4KICAgIDxkZXNjPkNyZWF0ZWQgd2l0aCBTa2V0Y2guPC9kZXNjPgogICAgPGRlZnM+CiAgICAgICAgPHBhdGggZD0iTTMuMzQsOS41MiBMMy4zNCwxOS40OCBMMjAuNjYsMTkuNDggTDIwLjY2LDkuNTIgTDMuMzQsOS41MiBaIE0yLjM0LDguNTIgTDIxLjY2LDguNTIgTDIxLjY2LDIwLjQ4IEwyLjM0LDIwLjQ4IEwyLjM0LDguNTIgWiBNMjAuOTA1Njk4Niw0IEwzLjA5NDMwMTQxLDQgTDEuODI1NzI5OTgsOC40NCBMMjIuMTc0MjcsOC40NCBMMjAuOTA1Njk4Niw0IFogTTIuMzQsMyBMMjEuNjYsMyBMMjMuNSw5LjQ0IEwwLjUsOS40NCBMMi4zNCwzIFogTTEwLjk0NTIzNjksMTkuNTQ2ODk2MiBMMTAuOTQ1MjM2OSwxNC4zMTUxNjg4IEMxMC45NDUyMzY5LDEzLjQzNTE4MzggMTAuMTYyMzk3MywxMi43IDkuMTkyOTE4OTgsMTIuNyBDOC4yMjMyODg1MywxMi43IDcuNDQsMTMuNDM1MzM0NyA3LjQ0LDE0LjMxNTE2ODggTDcuNDQsMTkuNTQ2ODk2MiBMMTAuOTQ1MjM2OSwxOS41NDY4OTYyIFogTTYuNDQsMTQuMzE1MTY4OCBDNi40NCwxMi44Njg0MzQgNy42ODQ2MzE4NCwxMS43IDkuMTkyOTE4OTgsMTEuNyBDMTAuNzAxMTMwMywxMS43IDExLjk0NTIzNjksMTIuODY4MzcwOSAxMS45NDUyMzY5LDE0LjMxNTE2ODggTDExLjk0NTIzNjksMjAuNTQ2ODk2MiBMNi40NCwyMC41NDY4OTYyIEw2LjQ0LDE0LjMxNTE2ODggWiBNMTUuMywxNC44OCBMMTYuOTgsMTQuODggTDE2Ljk4LDEzLjIgTDE1LjMsMTMuMiBMMTUuMywxNC44OCBaIE0xNC4zLDEyLjIgTDE3Ljk4LDEyLjIgTDE3Ljk4LDE1Ljg4IEwxNC4zLDE1Ljg4IEwxNC4zLDEyLjIgWiBNMS40MiwyMC41MiBDMS4xNDM4NTc2MywyMC41MiAwLjkyLDIwLjI5NjE0MjQgMC45MiwyMC4wMiBDMC45MiwxOS43NDM4NTc2IDEuMTQzODU3NjMsMTkuNTIgMS40MiwxOS41MiBMMjIuNTgsMTkuNTIgQzIyLjg1NjE0MjQsMTkuNTIgMjMuMDgsMTkuNzQzODU3NiAyMy4wOCwyMC4wMiBDMjMuMDgsMjAuMjk2MTQyNCAyMi44NTYxNDI0LDIwLjUyIDIyLjU4LDIwLjUyIEwxLjQyLDIwLjUyIFoiIGlkPSJwYXRoLTEiPjwvcGF0aD4KICAgIDwvZGVmcz4KICAgIDxnIGlkPSJTeW1ib2xzIiBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMSIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj4KICAgICAgICA8ZyBpZD0iMDotSWNvbnMtLy1DYXRlZ29yeS0vLUltw7N2ZWlzIj4KICAgICAgICAgICAgPHBhdGggZD0iTTAsMCBMMjQsMCBMMjQsMjQgTDAsMjQgTDAsMCBaIE0wLDAgTDI0LDAgTDI0LDI0IEwwLDI0IEwwLDAgWiBNMCwwIEwyNCwwIEwyNCwyNCBMMCwyNCBMMCwwIFogTTAsMCBMMjQsMCBMMjQsMjQgTDAsMjQgTDAsMCBaIiBpZD0iQ29udGFpbmVyIj48L3BhdGg+CiAgICAgICAgICAgIDxtYXNrIGlkPSJtYXNrLTIiIGZpbGw9IndoaXRlIj4KICAgICAgICAgICAgICAgIDx1c2UgeGxpbms6aHJlZj0iI3BhdGgtMSI+PC91c2U+CiAgICAgICAgICAgIDwvbWFzaz4KICAgICAgICAgICAgPHVzZSBpZD0iTWFzayIgZmlsbD0iIzRBNEE0QSIgZmlsbC1ydWxlPSJub256ZXJvIiB4bGluazpocmVmPSIjcGF0aC0xIj48L3VzZT4KICAgICAgICAgICAgPGcgaWQ9IjA6LUZ1bmRhbWVudGFscy0vLUNvbG9yLS8tUHJpbWFyeS0vLUJsYWNrIiBtYXNrPSJ1cmwoI21hc2stMikiIGZpbGw9IiM0QTRBNEEiPgogICAgICAgICAgICAgICAgPHJlY3QgaWQ9Ik1peGluL0ZpbGwvQmxhY2siIHg9IjAiIHk9IjAiIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCI+PC9yZWN0PgogICAgICAgICAgICA8L2c+CiAgICAgICAgPC9nPgogICAgPC9nPgo8L3N2Zz4=" style="width:32px;height:32px" alt=""></span>
                                  <br> <small>Imóveis</small></a>
                          </div>
                      </div>
                        <div class="col">
                          <div class="classified_ads">
                              <a href="https://www.olx.com.br/imoveis"><span class="icon-background"><img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyB3aWR0aD0iMjRweCIgaGVpZ2h0PSIyNHB4IiB2aWV3Qm94PSIwIDAgMjQgMjQiIHZlcnNpb249IjEuMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayI+CiAgICA8IS0tIEdlbmVyYXRvcjogU2tldGNoIDQ4LjIgKDQ3MzI3KSAtIGh0dHA6Ly93d3cuYm9oZW1pYW5jb2RpbmcuY29tL3NrZXRjaCAtLT4KICAgIDx0aXRsZT54eHhoZHBpMDogSWNvbnMgLyBDYXRlZ29yeSAvIEltw7N2ZWlzPC90aXRsZT4KICAgIDxkZXNjPkNyZWF0ZWQgd2l0aCBTa2V0Y2guPC9kZXNjPgogICAgPGRlZnM+CiAgICAgICAgPHBhdGggZD0iTTMuMzQsOS41MiBMMy4zNCwxOS40OCBMMjAuNjYsMTkuNDggTDIwLjY2LDkuNTIgTDMuMzQsOS41MiBaIE0yLjM0LDguNTIgTDIxLjY2LDguNTIgTDIxLjY2LDIwLjQ4IEwyLjM0LDIwLjQ4IEwyLjM0LDguNTIgWiBNMjAuOTA1Njk4Niw0IEwzLjA5NDMwMTQxLDQgTDEuODI1NzI5OTgsOC40NCBMMjIuMTc0MjcsOC40NCBMMjAuOTA1Njk4Niw0IFogTTIuMzQsMyBMMjEuNjYsMyBMMjMuNSw5LjQ0IEwwLjUsOS40NCBMMi4zNCwzIFogTTEwLjk0NTIzNjksMTkuNTQ2ODk2MiBMMTAuOTQ1MjM2OSwxNC4zMTUxNjg4IEMxMC45NDUyMzY5LDEzLjQzNTE4MzggMTAuMTYyMzk3MywxMi43IDkuMTkyOTE4OTgsMTIuNyBDOC4yMjMyODg1MywxMi43IDcuNDQsMTMuNDM1MzM0NyA3LjQ0LDE0LjMxNTE2ODggTDcuNDQsMTkuNTQ2ODk2MiBMMTAuOTQ1MjM2OSwxOS41NDY4OTYyIFogTTYuNDQsMTQuMzE1MTY4OCBDNi40NCwxMi44Njg0MzQgNy42ODQ2MzE4NCwxMS43IDkuMTkyOTE4OTgsMTEuNyBDMTAuNzAxMTMwMywxMS43IDExLjk0NTIzNjksMTIuODY4MzcwOSAxMS45NDUyMzY5LDE0LjMxNTE2ODggTDExLjk0NTIzNjksMjAuNTQ2ODk2MiBMNi40NCwyMC41NDY4OTYyIEw2LjQ0LDE0LjMxNTE2ODggWiBNMTUuMywxNC44OCBMMTYuOTgsMTQuODggTDE2Ljk4LDEzLjIgTDE1LjMsMTMuMiBMMTUuMywxNC44OCBaIE0xNC4zLDEyLjIgTDE3Ljk4LDEyLjIgTDE3Ljk4LDE1Ljg4IEwxNC4zLDE1Ljg4IEwxNC4zLDEyLjIgWiBNMS40MiwyMC41MiBDMS4xNDM4NTc2MywyMC41MiAwLjkyLDIwLjI5NjE0MjQgMC45MiwyMC4wMiBDMC45MiwxOS43NDM4NTc2IDEuMTQzODU3NjMsMTkuNTIgMS40MiwxOS41MiBMMjIuNTgsMTkuNTIgQzIyLjg1NjE0MjQsMTkuNTIgMjMuMDgsMTkuNzQzODU3NiAyMy4wOCwyMC4wMiBDMjMuMDgsMjAuMjk2MTQyNCAyMi44NTYxNDI0LDIwLjUyIDIyLjU4LDIwLjUyIEwxLjQyLDIwLjUyIFoiIGlkPSJwYXRoLTEiPjwvcGF0aD4KICAgIDwvZGVmcz4KICAgIDxnIGlkPSJTeW1ib2xzIiBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMSIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj4KICAgICAgICA8ZyBpZD0iMDotSWNvbnMtLy1DYXRlZ29yeS0vLUltw7N2ZWlzIj4KICAgICAgICAgICAgPHBhdGggZD0iTTAsMCBMMjQsMCBMMjQsMjQgTDAsMjQgTDAsMCBaIE0wLDAgTDI0LDAgTDI0LDI0IEwwLDI0IEwwLDAgWiBNMCwwIEwyNCwwIEwyNCwyNCBMMCwyNCBMMCwwIFogTTAsMCBMMjQsMCBMMjQsMjQgTDAsMjQgTDAsMCBaIiBpZD0iQ29udGFpbmVyIj48L3BhdGg+CiAgICAgICAgICAgIDxtYXNrIGlkPSJtYXNrLTIiIGZpbGw9IndoaXRlIj4KICAgICAgICAgICAgICAgIDx1c2UgeGxpbms6aHJlZj0iI3BhdGgtMSI+PC91c2U+CiAgICAgICAgICAgIDwvbWFzaz4KICAgICAgICAgICAgPHVzZSBpZD0iTWFzayIgZmlsbD0iIzRBNEE0QSIgZmlsbC1ydWxlPSJub256ZXJvIiB4bGluazpocmVmPSIjcGF0aC0xIj48L3VzZT4KICAgICAgICAgICAgPGcgaWQ9IjA6LUZ1bmRhbWVudGFscy0vLUNvbG9yLS8tUHJpbWFyeS0vLUJsYWNrIiBtYXNrPSJ1cmwoI21hc2stMikiIGZpbGw9IiM0QTRBNEEiPgogICAgICAgICAgICAgICAgPHJlY3QgaWQ9Ik1peGluL0ZpbGwvQmxhY2siIHg9IjAiIHk9IjAiIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCI+PC9yZWN0PgogICAgICAgICAgICA8L2c+CiAgICAgICAgPC9nPgogICAgPC9nPgo8L3N2Zz4=" style="width:32px;height:32px" alt=""></span>
                                  <br> <small>Imóveis</small></a>
                          </div>
                      </div>
                        <div class="col">
                          <div class="classified_ads">
                              <a href="https://www.olx.com.br/imoveis"><span class="icon-background"><img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyB3aWR0aD0iMjRweCIgaGVpZ2h0PSIyNHB4IiB2aWV3Qm94PSIwIDAgMjQgMjQiIHZlcnNpb249IjEuMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayI+CiAgICA8IS0tIEdlbmVyYXRvcjogU2tldGNoIDQ4LjIgKDQ3MzI3KSAtIGh0dHA6Ly93d3cuYm9oZW1pYW5jb2RpbmcuY29tL3NrZXRjaCAtLT4KICAgIDx0aXRsZT54eHhoZHBpMDogSWNvbnMgLyBDYXRlZ29yeSAvIEltw7N2ZWlzPC90aXRsZT4KICAgIDxkZXNjPkNyZWF0ZWQgd2l0aCBTa2V0Y2guPC9kZXNjPgogICAgPGRlZnM+CiAgICAgICAgPHBhdGggZD0iTTMuMzQsOS41MiBMMy4zNCwxOS40OCBMMjAuNjYsMTkuNDggTDIwLjY2LDkuNTIgTDMuMzQsOS41MiBaIE0yLjM0LDguNTIgTDIxLjY2LDguNTIgTDIxLjY2LDIwLjQ4IEwyLjM0LDIwLjQ4IEwyLjM0LDguNTIgWiBNMjAuOTA1Njk4Niw0IEwzLjA5NDMwMTQxLDQgTDEuODI1NzI5OTgsOC40NCBMMjIuMTc0MjcsOC40NCBMMjAuOTA1Njk4Niw0IFogTTIuMzQsMyBMMjEuNjYsMyBMMjMuNSw5LjQ0IEwwLjUsOS40NCBMMi4zNCwzIFogTTEwLjk0NTIzNjksMTkuNTQ2ODk2MiBMMTAuOTQ1MjM2OSwxNC4zMTUxNjg4IEMxMC45NDUyMzY5LDEzLjQzNTE4MzggMTAuMTYyMzk3MywxMi43IDkuMTkyOTE4OTgsMTIuNyBDOC4yMjMyODg1MywxMi43IDcuNDQsMTMuNDM1MzM0NyA3LjQ0LDE0LjMxNTE2ODggTDcuNDQsMTkuNTQ2ODk2MiBMMTAuOTQ1MjM2OSwxOS41NDY4OTYyIFogTTYuNDQsMTQuMzE1MTY4OCBDNi40NCwxMi44Njg0MzQgNy42ODQ2MzE4NCwxMS43IDkuMTkyOTE4OTgsMTEuNyBDMTAuNzAxMTMwMywxMS43IDExLjk0NTIzNjksMTIuODY4MzcwOSAxMS45NDUyMzY5LDE0LjMxNTE2ODggTDExLjk0NTIzNjksMjAuNTQ2ODk2MiBMNi40NCwyMC41NDY4OTYyIEw2LjQ0LDE0LjMxNTE2ODggWiBNMTUuMywxNC44OCBMMTYuOTgsMTQuODggTDE2Ljk4LDEzLjIgTDE1LjMsMTMuMiBMMTUuMywxNC44OCBaIE0xNC4zLDEyLjIgTDE3Ljk4LDEyLjIgTDE3Ljk4LDE1Ljg4IEwxNC4zLDE1Ljg4IEwxNC4zLDEyLjIgWiBNMS40MiwyMC41MiBDMS4xNDM4NTc2MywyMC41MiAwLjkyLDIwLjI5NjE0MjQgMC45MiwyMC4wMiBDMC45MiwxOS43NDM4NTc2IDEuMTQzODU3NjMsMTkuNTIgMS40MiwxOS41MiBMMjIuNTgsMTkuNTIgQzIyLjg1NjE0MjQsMTkuNTIgMjMuMDgsMTkuNzQzODU3NiAyMy4wOCwyMC4wMiBDMjMuMDgsMjAuMjk2MTQyNCAyMi44NTYxNDI0LDIwLjUyIDIyLjU4LDIwLjUyIEwxLjQyLDIwLjUyIFoiIGlkPSJwYXRoLTEiPjwvcGF0aD4KICAgIDwvZGVmcz4KICAgIDxnIGlkPSJTeW1ib2xzIiBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMSIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj4KICAgICAgICA8ZyBpZD0iMDotSWNvbnMtLy1DYXRlZ29yeS0vLUltw7N2ZWlzIj4KICAgICAgICAgICAgPHBhdGggZD0iTTAsMCBMMjQsMCBMMjQsMjQgTDAsMjQgTDAsMCBaIE0wLDAgTDI0LDAgTDI0LDI0IEwwLDI0IEwwLDAgWiBNMCwwIEwyNCwwIEwyNCwyNCBMMCwyNCBMMCwwIFogTTAsMCBMMjQsMCBMMjQsMjQgTDAsMjQgTDAsMCBaIiBpZD0iQ29udGFpbmVyIj48L3BhdGg+CiAgICAgICAgICAgIDxtYXNrIGlkPSJtYXNrLTIiIGZpbGw9IndoaXRlIj4KICAgICAgICAgICAgICAgIDx1c2UgeGxpbms6aHJlZj0iI3BhdGgtMSI+PC91c2U+CiAgICAgICAgICAgIDwvbWFzaz4KICAgICAgICAgICAgPHVzZSBpZD0iTWFzayIgZmlsbD0iIzRBNEE0QSIgZmlsbC1ydWxlPSJub256ZXJvIiB4bGluazpocmVmPSIjcGF0aC0xIj48L3VzZT4KICAgICAgICAgICAgPGcgaWQ9IjA6LUZ1bmRhbWVudGFscy0vLUNvbG9yLS8tUHJpbWFyeS0vLUJsYWNrIiBtYXNrPSJ1cmwoI21hc2stMikiIGZpbGw9IiM0QTRBNEEiPgogICAgICAgICAgICAgICAgPHJlY3QgaWQ9Ik1peGluL0ZpbGwvQmxhY2siIHg9IjAiIHk9IjAiIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCI+PC9yZWN0PgogICAgICAgICAgICA8L2c+CiAgICAgICAgPC9nPgogICAgPC9nPgo8L3N2Zz4=" style="width:32px;height:32px" alt=""></span>
                                  <br> <small>Imóveis</small></a>
                          </div>
                      </div>
                        <div class="col">
                          <div class="classified_ads">
                              <a href="https://www.olx.com.br/imoveis"><span class="icon-background"><img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyB3aWR0aD0iMjRweCIgaGVpZ2h0PSIyNHB4IiB2aWV3Qm94PSIwIDAgMjQgMjQiIHZlcnNpb249IjEuMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayI+CiAgICA8IS0tIEdlbmVyYXRvcjogU2tldGNoIDQ4LjIgKDQ3MzI3KSAtIGh0dHA6Ly93d3cuYm9oZW1pYW5jb2RpbmcuY29tL3NrZXRjaCAtLT4KICAgIDx0aXRsZT54eHhoZHBpMDogSWNvbnMgLyBDYXRlZ29yeSAvIEltw7N2ZWlzPC90aXRsZT4KICAgIDxkZXNjPkNyZWF0ZWQgd2l0aCBTa2V0Y2guPC9kZXNjPgogICAgPGRlZnM+CiAgICAgICAgPHBhdGggZD0iTTMuMzQsOS41MiBMMy4zNCwxOS40OCBMMjAuNjYsMTkuNDggTDIwLjY2LDkuNTIgTDMuMzQsOS41MiBaIE0yLjM0LDguNTIgTDIxLjY2LDguNTIgTDIxLjY2LDIwLjQ4IEwyLjM0LDIwLjQ4IEwyLjM0LDguNTIgWiBNMjAuOTA1Njk4Niw0IEwzLjA5NDMwMTQxLDQgTDEuODI1NzI5OTgsOC40NCBMMjIuMTc0MjcsOC40NCBMMjAuOTA1Njk4Niw0IFogTTIuMzQsMyBMMjEuNjYsMyBMMjMuNSw5LjQ0IEwwLjUsOS40NCBMMi4zNCwzIFogTTEwLjk0NTIzNjksMTkuNTQ2ODk2MiBMMTAuOTQ1MjM2OSwxNC4zMTUxNjg4IEMxMC45NDUyMzY5LDEzLjQzNTE4MzggMTAuMTYyMzk3MywxMi43IDkuMTkyOTE4OTgsMTIuNyBDOC4yMjMyODg1MywxMi43IDcuNDQsMTMuNDM1MzM0NyA3LjQ0LDE0LjMxNTE2ODggTDcuNDQsMTkuNTQ2ODk2MiBMMTAuOTQ1MjM2OSwxOS41NDY4OTYyIFogTTYuNDQsMTQuMzE1MTY4OCBDNi40NCwxMi44Njg0MzQgNy42ODQ2MzE4NCwxMS43IDkuMTkyOTE4OTgsMTEuNyBDMTAuNzAxMTMwMywxMS43IDExLjk0NTIzNjksMTIuODY4MzcwOSAxMS45NDUyMzY5LDE0LjMxNTE2ODggTDExLjk0NTIzNjksMjAuNTQ2ODk2MiBMNi40NCwyMC41NDY4OTYyIEw2LjQ0LDE0LjMxNTE2ODggWiBNMTUuMywxNC44OCBMMTYuOTgsMTQuODggTDE2Ljk4LDEzLjIgTDE1LjMsMTMuMiBMMTUuMywxNC44OCBaIE0xNC4zLDEyLjIgTDE3Ljk4LDEyLjIgTDE3Ljk4LDE1Ljg4IEwxNC4zLDE1Ljg4IEwxNC4zLDEyLjIgWiBNMS40MiwyMC41MiBDMS4xNDM4NTc2MywyMC41MiAwLjkyLDIwLjI5NjE0MjQgMC45MiwyMC4wMiBDMC45MiwxOS43NDM4NTc2IDEuMTQzODU3NjMsMTkuNTIgMS40MiwxOS41MiBMMjIuNTgsMTkuNTIgQzIyLjg1NjE0MjQsMTkuNTIgMjMuMDgsMTkuNzQzODU3NiAyMy4wOCwyMC4wMiBDMjMuMDgsMjAuMjk2MTQyNCAyMi44NTYxNDI0LDIwLjUyIDIyLjU4LDIwLjUyIEwxLjQyLDIwLjUyIFoiIGlkPSJwYXRoLTEiPjwvcGF0aD4KICAgIDwvZGVmcz4KICAgIDxnIGlkPSJTeW1ib2xzIiBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMSIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj4KICAgICAgICA8ZyBpZD0iMDotSWNvbnMtLy1DYXRlZ29yeS0vLUltw7N2ZWlzIj4KICAgICAgICAgICAgPHBhdGggZD0iTTAsMCBMMjQsMCBMMjQsMjQgTDAsMjQgTDAsMCBaIE0wLDAgTDI0LDAgTDI0LDI0IEwwLDI0IEwwLDAgWiBNMCwwIEwyNCwwIEwyNCwyNCBMMCwyNCBMMCwwIFogTTAsMCBMMjQsMCBMMjQsMjQgTDAsMjQgTDAsMCBaIiBpZD0iQ29udGFpbmVyIj48L3BhdGg+CiAgICAgICAgICAgIDxtYXNrIGlkPSJtYXNrLTIiIGZpbGw9IndoaXRlIj4KICAgICAgICAgICAgICAgIDx1c2UgeGxpbms6aHJlZj0iI3BhdGgtMSI+PC91c2U+CiAgICAgICAgICAgIDwvbWFzaz4KICAgICAgICAgICAgPHVzZSBpZD0iTWFzayIgZmlsbD0iIzRBNEE0QSIgZmlsbC1ydWxlPSJub256ZXJvIiB4bGluazpocmVmPSIjcGF0aC0xIj48L3VzZT4KICAgICAgICAgICAgPGcgaWQ9IjA6LUZ1bmRhbWVudGFscy0vLUNvbG9yLS8tUHJpbWFyeS0vLUJsYWNrIiBtYXNrPSJ1cmwoI21hc2stMikiIGZpbGw9IiM0QTRBNEEiPgogICAgICAgICAgICAgICAgPHJlY3QgaWQ9Ik1peGluL0ZpbGwvQmxhY2siIHg9IjAiIHk9IjAiIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCI+PC9yZWN0PgogICAgICAgICAgICA8L2c+CiAgICAgICAgPC9nPgogICAgPC9nPgo8L3N2Zz4=" style="width:32px;height:32px" alt=""></span>
                                  <br> <small>Imóveis</small></a>
                          </div>
                      </div>
                        <div class="col">
                          <div class="classified_ads">
                              <a href="https://www.olx.com.br/imoveis"><span class="icon-background"><img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyB3aWR0aD0iMjRweCIgaGVpZ2h0PSIyNHB4IiB2aWV3Qm94PSIwIDAgMjQgMjQiIHZlcnNpb249IjEuMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayI+CiAgICA8IS0tIEdlbmVyYXRvcjogU2tldGNoIDQ4LjIgKDQ3MzI3KSAtIGh0dHA6Ly93d3cuYm9oZW1pYW5jb2RpbmcuY29tL3NrZXRjaCAtLT4KICAgIDx0aXRsZT54eHhoZHBpMDogSWNvbnMgLyBDYXRlZ29yeSAvIEltw7N2ZWlzPC90aXRsZT4KICAgIDxkZXNjPkNyZWF0ZWQgd2l0aCBTa2V0Y2guPC9kZXNjPgogICAgPGRlZnM+CiAgICAgICAgPHBhdGggZD0iTTMuMzQsOS41MiBMMy4zNCwxOS40OCBMMjAuNjYsMTkuNDggTDIwLjY2LDkuNTIgTDMuMzQsOS41MiBaIE0yLjM0LDguNTIgTDIxLjY2LDguNTIgTDIxLjY2LDIwLjQ4IEwyLjM0LDIwLjQ4IEwyLjM0LDguNTIgWiBNMjAuOTA1Njk4Niw0IEwzLjA5NDMwMTQxLDQgTDEuODI1NzI5OTgsOC40NCBMMjIuMTc0MjcsOC40NCBMMjAuOTA1Njk4Niw0IFogTTIuMzQsMyBMMjEuNjYsMyBMMjMuNSw5LjQ0IEwwLjUsOS40NCBMMi4zNCwzIFogTTEwLjk0NTIzNjksMTkuNTQ2ODk2MiBMMTAuOTQ1MjM2OSwxNC4zMTUxNjg4IEMxMC45NDUyMzY5LDEzLjQzNTE4MzggMTAuMTYyMzk3MywxMi43IDkuMTkyOTE4OTgsMTIuNyBDOC4yMjMyODg1MywxMi43IDcuNDQsMTMuNDM1MzM0NyA3LjQ0LDE0LjMxNTE2ODggTDcuNDQsMTkuNTQ2ODk2MiBMMTAuOTQ1MjM2OSwxOS41NDY4OTYyIFogTTYuNDQsMTQuMzE1MTY4OCBDNi40NCwxMi44Njg0MzQgNy42ODQ2MzE4NCwxMS43IDkuMTkyOTE4OTgsMTEuNyBDMTAuNzAxMTMwMywxMS43IDExLjk0NTIzNjksMTIuODY4MzcwOSAxMS45NDUyMzY5LDE0LjMxNTE2ODggTDExLjk0NTIzNjksMjAuNTQ2ODk2MiBMNi40NCwyMC41NDY4OTYyIEw2LjQ0LDE0LjMxNTE2ODggWiBNMTUuMywxNC44OCBMMTYuOTgsMTQuODggTDE2Ljk4LDEzLjIgTDE1LjMsMTMuMiBMMTUuMywxNC44OCBaIE0xNC4zLDEyLjIgTDE3Ljk4LDEyLjIgTDE3Ljk4LDE1Ljg4IEwxNC4zLDE1Ljg4IEwxNC4zLDEyLjIgWiBNMS40MiwyMC41MiBDMS4xNDM4NTc2MywyMC41MiAwLjkyLDIwLjI5NjE0MjQgMC45MiwyMC4wMiBDMC45MiwxOS43NDM4NTc2IDEuMTQzODU3NjMsMTkuNTIgMS40MiwxOS41MiBMMjIuNTgsMTkuNTIgQzIyLjg1NjE0MjQsMTkuNTIgMjMuMDgsMTkuNzQzODU3NiAyMy4wOCwyMC4wMiBDMjMuMDgsMjAuMjk2MTQyNCAyMi44NTYxNDI0LDIwLjUyIDIyLjU4LDIwLjUyIEwxLjQyLDIwLjUyIFoiIGlkPSJwYXRoLTEiPjwvcGF0aD4KICAgIDwvZGVmcz4KICAgIDxnIGlkPSJTeW1ib2xzIiBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMSIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj4KICAgICAgICA8ZyBpZD0iMDotSWNvbnMtLy1DYXRlZ29yeS0vLUltw7N2ZWlzIj4KICAgICAgICAgICAgPHBhdGggZD0iTTAsMCBMMjQsMCBMMjQsMjQgTDAsMjQgTDAsMCBaIE0wLDAgTDI0LDAgTDI0LDI0IEwwLDI0IEwwLDAgWiBNMCwwIEwyNCwwIEwyNCwyNCBMMCwyNCBMMCwwIFogTTAsMCBMMjQsMCBMMjQsMjQgTDAsMjQgTDAsMCBaIiBpZD0iQ29udGFpbmVyIj48L3BhdGg+CiAgICAgICAgICAgIDxtYXNrIGlkPSJtYXNrLTIiIGZpbGw9IndoaXRlIj4KICAgICAgICAgICAgICAgIDx1c2UgeGxpbms6aHJlZj0iI3BhdGgtMSI+PC91c2U+CiAgICAgICAgICAgIDwvbWFzaz4KICAgICAgICAgICAgPHVzZSBpZD0iTWFzayIgZmlsbD0iIzRBNEE0QSIgZmlsbC1ydWxlPSJub256ZXJvIiB4bGluazpocmVmPSIjcGF0aC0xIj48L3VzZT4KICAgICAgICAgICAgPGcgaWQ9IjA6LUZ1bmRhbWVudGFscy0vLUNvbG9yLS8tUHJpbWFyeS0vLUJsYWNrIiBtYXNrPSJ1cmwoI21hc2stMikiIGZpbGw9IiM0QTRBNEEiPgogICAgICAgICAgICAgICAgPHJlY3QgaWQ9Ik1peGluL0ZpbGwvQmxhY2siIHg9IjAiIHk9IjAiIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCI+PC9yZWN0PgogICAgICAgICAgICA8L2c+CiAgICAgICAgPC9nPgogICAgPC9nPgo8L3N2Zz4=" style="width:32px;height:32px" alt=""></span>
                                  <br> <small>Imóveis</small></a>
                          </div>
                      </div>
                        <div class="col">
                          <div class="classified_ads">
                              <a href="https://www.olx.com.br/imoveis"><span class="icon-background"><img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyB3aWR0aD0iMjRweCIgaGVpZ2h0PSIyNHB4IiB2aWV3Qm94PSIwIDAgMjQgMjQiIHZlcnNpb249IjEuMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayI+CiAgICA8IS0tIEdlbmVyYXRvcjogU2tldGNoIDQ4LjIgKDQ3MzI3KSAtIGh0dHA6Ly93d3cuYm9oZW1pYW5jb2RpbmcuY29tL3NrZXRjaCAtLT4KICAgIDx0aXRsZT54eHhoZHBpMDogSWNvbnMgLyBDYXRlZ29yeSAvIEltw7N2ZWlzPC90aXRsZT4KICAgIDxkZXNjPkNyZWF0ZWQgd2l0aCBTa2V0Y2guPC9kZXNjPgogICAgPGRlZnM+CiAgICAgICAgPHBhdGggZD0iTTMuMzQsOS41MiBMMy4zNCwxOS40OCBMMjAuNjYsMTkuNDggTDIwLjY2LDkuNTIgTDMuMzQsOS41MiBaIE0yLjM0LDguNTIgTDIxLjY2LDguNTIgTDIxLjY2LDIwLjQ4IEwyLjM0LDIwLjQ4IEwyLjM0LDguNTIgWiBNMjAuOTA1Njk4Niw0IEwzLjA5NDMwMTQxLDQgTDEuODI1NzI5OTgsOC40NCBMMjIuMTc0MjcsOC40NCBMMjAuOTA1Njk4Niw0IFogTTIuMzQsMyBMMjEuNjYsMyBMMjMuNSw5LjQ0IEwwLjUsOS40NCBMMi4zNCwzIFogTTEwLjk0NTIzNjksMTkuNTQ2ODk2MiBMMTAuOTQ1MjM2OSwxNC4zMTUxNjg4IEMxMC45NDUyMzY5LDEzLjQzNTE4MzggMTAuMTYyMzk3MywxMi43IDkuMTkyOTE4OTgsMTIuNyBDOC4yMjMyODg1MywxMi43IDcuNDQsMTMuNDM1MzM0NyA3LjQ0LDE0LjMxNTE2ODggTDcuNDQsMTkuNTQ2ODk2MiBMMTAuOTQ1MjM2OSwxOS41NDY4OTYyIFogTTYuNDQsMTQuMzE1MTY4OCBDNi40NCwxMi44Njg0MzQgNy42ODQ2MzE4NCwxMS43IDkuMTkyOTE4OTgsMTEuNyBDMTAuNzAxMTMwMywxMS43IDExLjk0NTIzNjksMTIuODY4MzcwOSAxMS45NDUyMzY5LDE0LjMxNTE2ODggTDExLjk0NTIzNjksMjAuNTQ2ODk2MiBMNi40NCwyMC41NDY4OTYyIEw2LjQ0LDE0LjMxNTE2ODggWiBNMTUuMywxNC44OCBMMTYuOTgsMTQuODggTDE2Ljk4LDEzLjIgTDE1LjMsMTMuMiBMMTUuMywxNC44OCBaIE0xNC4zLDEyLjIgTDE3Ljk4LDEyLjIgTDE3Ljk4LDE1Ljg4IEwxNC4zLDE1Ljg4IEwxNC4zLDEyLjIgWiBNMS40MiwyMC41MiBDMS4xNDM4NTc2MywyMC41MiAwLjkyLDIwLjI5NjE0MjQgMC45MiwyMC4wMiBDMC45MiwxOS43NDM4NTc2IDEuMTQzODU3NjMsMTkuNTIgMS40MiwxOS41MiBMMjIuNTgsMTkuNTIgQzIyLjg1NjE0MjQsMTkuNTIgMjMuMDgsMTkuNzQzODU3NiAyMy4wOCwyMC4wMiBDMjMuMDgsMjAuMjk2MTQyNCAyMi44NTYxNDI0LDIwLjUyIDIyLjU4LDIwLjUyIEwxLjQyLDIwLjUyIFoiIGlkPSJwYXRoLTEiPjwvcGF0aD4KICAgIDwvZGVmcz4KICAgIDxnIGlkPSJTeW1ib2xzIiBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMSIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj4KICAgICAgICA8ZyBpZD0iMDotSWNvbnMtLy1DYXRlZ29yeS0vLUltw7N2ZWlzIj4KICAgICAgICAgICAgPHBhdGggZD0iTTAsMCBMMjQsMCBMMjQsMjQgTDAsMjQgTDAsMCBaIE0wLDAgTDI0LDAgTDI0LDI0IEwwLDI0IEwwLDAgWiBNMCwwIEwyNCwwIEwyNCwyNCBMMCwyNCBMMCwwIFogTTAsMCBMMjQsMCBMMjQsMjQgTDAsMjQgTDAsMCBaIiBpZD0iQ29udGFpbmVyIj48L3BhdGg+CiAgICAgICAgICAgIDxtYXNrIGlkPSJtYXNrLTIiIGZpbGw9IndoaXRlIj4KICAgICAgICAgICAgICAgIDx1c2UgeGxpbms6aHJlZj0iI3BhdGgtMSI+PC91c2U+CiAgICAgICAgICAgIDwvbWFzaz4KICAgICAgICAgICAgPHVzZSBpZD0iTWFzayIgZmlsbD0iIzRBNEE0QSIgZmlsbC1ydWxlPSJub256ZXJvIiB4bGluazpocmVmPSIjcGF0aC0xIj48L3VzZT4KICAgICAgICAgICAgPGcgaWQ9IjA6LUZ1bmRhbWVudGFscy0vLUNvbG9yLS8tUHJpbWFyeS0vLUJsYWNrIiBtYXNrPSJ1cmwoI21hc2stMikiIGZpbGw9IiM0QTRBNEEiPgogICAgICAgICAgICAgICAgPHJlY3QgaWQ9Ik1peGluL0ZpbGwvQmxhY2siIHg9IjAiIHk9IjAiIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCI+PC9yZWN0PgogICAgICAgICAgICA8L2c+CiAgICAgICAgPC9nPgogICAgPC9nPgo8L3N2Zz4=" style="width:32px;height:32px" alt=""></span>
                                  <br> <small>Imóveis</small></a>
                          </div>
                      </div>
                        <div class="col">
                          <div class="classified_ads">
                              <a href="https://www.olx.com.br/imoveis"><span class="icon-background"><img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyB3aWR0aD0iMjRweCIgaGVpZ2h0PSIyNHB4IiB2aWV3Qm94PSIwIDAgMjQgMjQiIHZlcnNpb249IjEuMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayI+CiAgICA8IS0tIEdlbmVyYXRvcjogU2tldGNoIDQ4LjIgKDQ3MzI3KSAtIGh0dHA6Ly93d3cuYm9oZW1pYW5jb2RpbmcuY29tL3NrZXRjaCAtLT4KICAgIDx0aXRsZT54eHhoZHBpMDogSWNvbnMgLyBDYXRlZ29yeSAvIEltw7N2ZWlzPC90aXRsZT4KICAgIDxkZXNjPkNyZWF0ZWQgd2l0aCBTa2V0Y2guPC9kZXNjPgogICAgPGRlZnM+CiAgICAgICAgPHBhdGggZD0iTTMuMzQsOS41MiBMMy4zNCwxOS40OCBMMjAuNjYsMTkuNDggTDIwLjY2LDkuNTIgTDMuMzQsOS41MiBaIE0yLjM0LDguNTIgTDIxLjY2LDguNTIgTDIxLjY2LDIwLjQ4IEwyLjM0LDIwLjQ4IEwyLjM0LDguNTIgWiBNMjAuOTA1Njk4Niw0IEwzLjA5NDMwMTQxLDQgTDEuODI1NzI5OTgsOC40NCBMMjIuMTc0MjcsOC40NCBMMjAuOTA1Njk4Niw0IFogTTIuMzQsMyBMMjEuNjYsMyBMMjMuNSw5LjQ0IEwwLjUsOS40NCBMMi4zNCwzIFogTTEwLjk0NTIzNjksMTkuNTQ2ODk2MiBMMTAuOTQ1MjM2OSwxNC4zMTUxNjg4IEMxMC45NDUyMzY5LDEzLjQzNTE4MzggMTAuMTYyMzk3MywxMi43IDkuMTkyOTE4OTgsMTIuNyBDOC4yMjMyODg1MywxMi43IDcuNDQsMTMuNDM1MzM0NyA3LjQ0LDE0LjMxNTE2ODggTDcuNDQsMTkuNTQ2ODk2MiBMMTAuOTQ1MjM2OSwxOS41NDY4OTYyIFogTTYuNDQsMTQuMzE1MTY4OCBDNi40NCwxMi44Njg0MzQgNy42ODQ2MzE4NCwxMS43IDkuMTkyOTE4OTgsMTEuNyBDMTAuNzAxMTMwMywxMS43IDExLjk0NTIzNjksMTIuODY4MzcwOSAxMS45NDUyMzY5LDE0LjMxNTE2ODggTDExLjk0NTIzNjksMjAuNTQ2ODk2MiBMNi40NCwyMC41NDY4OTYyIEw2LjQ0LDE0LjMxNTE2ODggWiBNMTUuMywxNC44OCBMMTYuOTgsMTQuODggTDE2Ljk4LDEzLjIgTDE1LjMsMTMuMiBMMTUuMywxNC44OCBaIE0xNC4zLDEyLjIgTDE3Ljk4LDEyLjIgTDE3Ljk4LDE1Ljg4IEwxNC4zLDE1Ljg4IEwxNC4zLDEyLjIgWiBNMS40MiwyMC41MiBDMS4xNDM4NTc2MywyMC41MiAwLjkyLDIwLjI5NjE0MjQgMC45MiwyMC4wMiBDMC45MiwxOS43NDM4NTc2IDEuMTQzODU3NjMsMTkuNTIgMS40MiwxOS41MiBMMjIuNTgsMTkuNTIgQzIyLjg1NjE0MjQsMTkuNTIgMjMuMDgsMTkuNzQzODU3NiAyMy4wOCwyMC4wMiBDMjMuMDgsMjAuMjk2MTQyNCAyMi44NTYxNDI0LDIwLjUyIDIyLjU4LDIwLjUyIEwxLjQyLDIwLjUyIFoiIGlkPSJwYXRoLTEiPjwvcGF0aD4KICAgIDwvZGVmcz4KICAgIDxnIGlkPSJTeW1ib2xzIiBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMSIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj4KICAgICAgICA8ZyBpZD0iMDotSWNvbnMtLy1DYXRlZ29yeS0vLUltw7N2ZWlzIj4KICAgICAgICAgICAgPHBhdGggZD0iTTAsMCBMMjQsMCBMMjQsMjQgTDAsMjQgTDAsMCBaIE0wLDAgTDI0LDAgTDI0LDI0IEwwLDI0IEwwLDAgWiBNMCwwIEwyNCwwIEwyNCwyNCBMMCwyNCBMMCwwIFogTTAsMCBMMjQsMCBMMjQsMjQgTDAsMjQgTDAsMCBaIiBpZD0iQ29udGFpbmVyIj48L3BhdGg+CiAgICAgICAgICAgIDxtYXNrIGlkPSJtYXNrLTIiIGZpbGw9IndoaXRlIj4KICAgICAgICAgICAgICAgIDx1c2UgeGxpbms6aHJlZj0iI3BhdGgtMSI+PC91c2U+CiAgICAgICAgICAgIDwvbWFzaz4KICAgICAgICAgICAgPHVzZSBpZD0iTWFzayIgZmlsbD0iIzRBNEE0QSIgZmlsbC1ydWxlPSJub256ZXJvIiB4bGluazpocmVmPSIjcGF0aC0xIj48L3VzZT4KICAgICAgICAgICAgPGcgaWQ9IjA6LUZ1bmRhbWVudGFscy0vLUNvbG9yLS8tUHJpbWFyeS0vLUJsYWNrIiBtYXNrPSJ1cmwoI21hc2stMikiIGZpbGw9IiM0QTRBNEEiPgogICAgICAgICAgICAgICAgPHJlY3QgaWQ9Ik1peGluL0ZpbGwvQmxhY2siIHg9IjAiIHk9IjAiIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCI+PC9yZWN0PgogICAgICAgICAgICA8L2c+CiAgICAgICAgPC9nPgogICAgPC9nPgo8L3N2Zz4=" style="width:32px;height:32px" alt=""></span>
                                  <br> <small>Imóveis</small></a>
                          </div>
                      </div>
                        <div class="col">
                          <div class="classified_ads">
                              <a href="https://www.olx.com.br/imoveis"><span class="icon-background"><img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyB3aWR0aD0iMjRweCIgaGVpZ2h0PSIyNHB4IiB2aWV3Qm94PSIwIDAgMjQgMjQiIHZlcnNpb249IjEuMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayI+CiAgICA8IS0tIEdlbmVyYXRvcjogU2tldGNoIDQ4LjIgKDQ3MzI3KSAtIGh0dHA6Ly93d3cuYm9oZW1pYW5jb2RpbmcuY29tL3NrZXRjaCAtLT4KICAgIDx0aXRsZT54eHhoZHBpMDogSWNvbnMgLyBDYXRlZ29yeSAvIEltw7N2ZWlzPC90aXRsZT4KICAgIDxkZXNjPkNyZWF0ZWQgd2l0aCBTa2V0Y2guPC9kZXNjPgogICAgPGRlZnM+CiAgICAgICAgPHBhdGggZD0iTTMuMzQsOS41MiBMMy4zNCwxOS40OCBMMjAuNjYsMTkuNDggTDIwLjY2LDkuNTIgTDMuMzQsOS41MiBaIE0yLjM0LDguNTIgTDIxLjY2LDguNTIgTDIxLjY2LDIwLjQ4IEwyLjM0LDIwLjQ4IEwyLjM0LDguNTIgWiBNMjAuOTA1Njk4Niw0IEwzLjA5NDMwMTQxLDQgTDEuODI1NzI5OTgsOC40NCBMMjIuMTc0MjcsOC40NCBMMjAuOTA1Njk4Niw0IFogTTIuMzQsMyBMMjEuNjYsMyBMMjMuNSw5LjQ0IEwwLjUsOS40NCBMMi4zNCwzIFogTTEwLjk0NTIzNjksMTkuNTQ2ODk2MiBMMTAuOTQ1MjM2OSwxNC4zMTUxNjg4IEMxMC45NDUyMzY5LDEzLjQzNTE4MzggMTAuMTYyMzk3MywxMi43IDkuMTkyOTE4OTgsMTIuNyBDOC4yMjMyODg1MywxMi43IDcuNDQsMTMuNDM1MzM0NyA3LjQ0LDE0LjMxNTE2ODggTDcuNDQsMTkuNTQ2ODk2MiBMMTAuOTQ1MjM2OSwxOS41NDY4OTYyIFogTTYuNDQsMTQuMzE1MTY4OCBDNi40NCwxMi44Njg0MzQgNy42ODQ2MzE4NCwxMS43IDkuMTkyOTE4OTgsMTEuNyBDMTAuNzAxMTMwMywxMS43IDExLjk0NTIzNjksMTIuODY4MzcwOSAxMS45NDUyMzY5LDE0LjMxNTE2ODggTDExLjk0NTIzNjksMjAuNTQ2ODk2MiBMNi40NCwyMC41NDY4OTYyIEw2LjQ0LDE0LjMxNTE2ODggWiBNMTUuMywxNC44OCBMMTYuOTgsMTQuODggTDE2Ljk4LDEzLjIgTDE1LjMsMTMuMiBMMTUuMywxNC44OCBaIE0xNC4zLDEyLjIgTDE3Ljk4LDEyLjIgTDE3Ljk4LDE1Ljg4IEwxNC4zLDE1Ljg4IEwxNC4zLDEyLjIgWiBNMS40MiwyMC41MiBDMS4xNDM4NTc2MywyMC41MiAwLjkyLDIwLjI5NjE0MjQgMC45MiwyMC4wMiBDMC45MiwxOS43NDM4NTc2IDEuMTQzODU3NjMsMTkuNTIgMS40MiwxOS41MiBMMjIuNTgsMTkuNTIgQzIyLjg1NjE0MjQsMTkuNTIgMjMuMDgsMTkuNzQzODU3NiAyMy4wOCwyMC4wMiBDMjMuMDgsMjAuMjk2MTQyNCAyMi44NTYxNDI0LDIwLjUyIDIyLjU4LDIwLjUyIEwxLjQyLDIwLjUyIFoiIGlkPSJwYXRoLTEiPjwvcGF0aD4KICAgIDwvZGVmcz4KICAgIDxnIGlkPSJTeW1ib2xzIiBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMSIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj4KICAgICAgICA8ZyBpZD0iMDotSWNvbnMtLy1DYXRlZ29yeS0vLUltw7N2ZWlzIj4KICAgICAgICAgICAgPHBhdGggZD0iTTAsMCBMMjQsMCBMMjQsMjQgTDAsMjQgTDAsMCBaIE0wLDAgTDI0LDAgTDI0LDI0IEwwLDI0IEwwLDAgWiBNMCwwIEwyNCwwIEwyNCwyNCBMMCwyNCBMMCwwIFogTTAsMCBMMjQsMCBMMjQsMjQgTDAsMjQgTDAsMCBaIiBpZD0iQ29udGFpbmVyIj48L3BhdGg+CiAgICAgICAgICAgIDxtYXNrIGlkPSJtYXNrLTIiIGZpbGw9IndoaXRlIj4KICAgICAgICAgICAgICAgIDx1c2UgeGxpbms6aHJlZj0iI3BhdGgtMSI+PC91c2U+CiAgICAgICAgICAgIDwvbWFzaz4KICAgICAgICAgICAgPHVzZSBpZD0iTWFzayIgZmlsbD0iIzRBNEE0QSIgZmlsbC1ydWxlPSJub256ZXJvIiB4bGluazpocmVmPSIjcGF0aC0xIj48L3VzZT4KICAgICAgICAgICAgPGcgaWQ9IjA6LUZ1bmRhbWVudGFscy0vLUNvbG9yLS8tUHJpbWFyeS0vLUJsYWNrIiBtYXNrPSJ1cmwoI21hc2stMikiIGZpbGw9IiM0QTRBNEEiPgogICAgICAgICAgICAgICAgPHJlY3QgaWQ9Ik1peGluL0ZpbGwvQmxhY2siIHg9IjAiIHk9IjAiIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCI+PC9yZWN0PgogICAgICAgICAgICA8L2c+CiAgICAgICAgPC9nPgogICAgPC9nPgo8L3N2Zz4=" style="width:32px;height:32px" alt=""></span>
                                  <br> <small>Imóveis</small></a>
                          </div>
                      </div>
                    </div>
                    {{----}}
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="offer offer-default">
                               <div class="kb_li_buy_sel">
                                   <img src="{{asset('public/images/defaultImg/002.jpg')}}" alt="" width="100%">
                               </div>
                                <div class="kb_li_pri_de">
                                    <div class="offer-content">
                                        <h3 class="kb_lead">
                                            Rs. 2029.00
                                        </h3>
                                        <p>
                                            And a little description.
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="offer offer-default">
                               <div class="kb_li_buy_sel">
                                   <img src="{{asset('public/images/defaultImg/ad5.jpg')}}" alt="" width="100%">
                               </div>
                                <div class="kb_li_pri_de">
                                    <div class="offer-content">
                                        <h3 class="kb_lead">
                                            Rs. 2029.00
                                        </h3>
                                        <p>
                                            And a little description.
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="offer offer-default">
                               <div class="kb_li_buy_sel">
                                   <img src="{{asset('public/images/defaultImg/ad4.jpg')}}" alt="" width="100%">
                               </div>
                                <div class="kb_li_pri_de">
                                    <div class="offer-content">
                                        <h3 class="kb_lead">
                                            Rs. 2029.00
                                        </h3>
                                        <p>
                                            And a little description.
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="offer offer-default">
                               <div class="kb_li_buy_sel">
                                   <img src="{{asset('public/images/defaultImg/ad3.jpg')}}" alt="" width="100%">
                               </div>
                                <div class="kb_li_pri_de">
                                    <div class="offer-content">
                                        <h3 class="kb_lead">
                                            Rs. 2029.00
                                        </h3>
                                        <p>
                                            And a little description.
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="offer offer-default">
                               <div class="kb_li_buy_sel">
                                   <img src="{{asset('public/images/defaultImg/002.jpg')}}" alt="" width="100%">
                               </div>
                                <div class="kb_li_pri_de">
                                    <div class="offer-content">
                                        <h3 class="kb_lead">
                                            Rs. 2029.00
                                        </h3>
                                        <p>
                                            And a little description.
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <a href="{{url('product')}}">
                                <div class="offer offer-default">
                                    <div class="kb_li_buy_sel">
                                        <img src="{{asset('public/images/defaultImg/ad2.jpg')}}" alt="" width="100%">
                                    </div>
                                    <div class="kb_li_pri_de">
                                        <div class="offer-content">
                                            <h3 class="kb_lead">
                                                Rs. 2029.00
                                            </h3>
                                            <p>
                                                Bros nxr 150 2014 ES Bros nxr 150 2014 ES
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="offer offer-default">
                               <div class="kb_li_buy_sel">
                                   <img src="{{asset('public/images/defaultImg/ad1.jpg')}}" class="img-responsive" alt="" width="100%">
                               </div>
                                <div class="kb_li_pri_de">
                                    <div class="offer-content">
                                        <h3 class="kb_lead">
                                            Rs. 2029.00
                                        </h3>
                                        <p>
                                            And a little description.
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <!-- END Main Container -->

            <!-- Apps Modal -->
            <!-- Opens from the modal toggle button in the header -->
            <div class="modal fade" id="one-modal-apps" tabindex="-1" role="dialog" aria-labelledby="one-modal-apps" aria-hidden="true">
                <div class="modal-dialog modal-dialog-top modal-sm" role="document">
                    <div class="modal-content">
                        <div class="block block-themed block-transparent mb-0">
                            <div class="block-header bg-primary-dark">
                                <h3 class="block-title">Apps</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                        <i class="si si-close"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="block-content block-content-full">
                                <div class="row gutters-tiny">
                                    <div class="col-6">
                                        <!-- CRM -->
                                        <a class="block block-rounded block-themed bg-default" href="javascript:void(0)">
                                            <div class="block-content text-center">
                                                <i class="si si-speedometer fa-2x text-white-75"></i>
                                                <p class="font-w600 font-size-sm text-white mt-2 mb-3">
                                                    CRM
                                                </p>
                                            </div>
                                        </a>
                                        <!-- END CRM -->
                                    </div>
                                    <div class="col-6">
                                        <!-- Products -->
                                        <a class="block block-rounded block-themed bg-danger" href="javascript:void(0)">
                                            <div class="block-content text-center">
                                                <i class="si si-rocket fa-2x text-white-75"></i>
                                                <p class="font-w600 font-size-sm text-white mt-2 mb-3">
                                                    Products
                                                </p>
                                            </div>
                                        </a>
                                        <!-- END Products -->
                                    </div>
                                    <div class="col-6">
                                        <!-- Sales -->
                                        <a class="block block-rounded block-themed bg-success mb-0" href="javascript:void(0)">
                                            <div class="block-content text-center">
                                                <i class="si si-plane fa-2x text-white-75"></i>
                                                <p class="font-w600 font-size-sm text-white mt-2 mb-3">
                                                    Sales
                                                </p>
                                            </div>
                                        </a>
                                        <!-- END Sales -->
                                    </div>
                                    <div class="col-6">
                                        <!-- Payments -->
                                        <a class="block block-rounded block-themed bg-warning mb-0" href="javascript:void(0)">
                                            <div class="block-content text-center">
                                                <i class="si si-wallet fa-2x text-white-75"></i>
                                                <p class="font-w600 font-size-sm text-white mt-2 mb-3">
                                                    Payments
                                                </p>
                                            </div>
                                        </a>
                                        <!-- END Payments -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Apps Modal -->
        </div>
    </div>
@endsection