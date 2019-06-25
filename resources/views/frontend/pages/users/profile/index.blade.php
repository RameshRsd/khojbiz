@extends('frontend.layouts.master')
@section('content')
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
                            <span class="font-w700 font-size-h5">{{$client->company_name}}</span>
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
                       {{----}}
                       {{----}}
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
                <div class="content pro_kb_busi">
                    <div class="row">
                        <div class="col-md-3 col-xl-3">
                            <!-- Profile -->
                            <div class="block">
                                <div class="block-header block-header-default">
                                    <h3 class="block-title">Update Your Profile</h3>
                                </div>
                                <div class="block-content">
                                    <ul class="nav nav-pills flex-column font-size-sm push">
                                        <li class="nav-item my-1">
                                            <a class="nav-link d-flex justify-content-between align-items-center " href="{{url('users/about-us')}}">
                                                    <span>
                                                        <i class="fa fa-fw fa-inbox mr-1"></i> About Us
                                                    </span>
                                                <span class="badge badge-pill badge-secondary">3</span>
                                            </a>
                                        </li>
                                        <li class="nav-item my-1">
                                            <a class="nav-link d-flex justify-content-between align-items-center" href="javascript:void(0)">
                                                    <span>
                                                        <i class="fa fa-fw fa-star mr-1"></i> Profile
                                                    </span>
                                                <span class="badge badge-pill badge-secondary">48</span>
                                            </a>
                                        </li>
                                        <li class="nav-item my-1">
                                            <a class="nav-link d-flex justify-content-between align-items-center" href="javascript:void(0)">
                                                    <span>
                                                        <i class="fa fa-fw fa-paper-plane mr-1"></i> Product & Service
                                                    </span>
                                                <span class="badge badge-pill badge-secondary">1480</span>
                                            </a>
                                        </li>
                                        <li class="nav-item my-1">
                                            <a class="nav-link d-flex justify-content-between align-items-center" href="javascript:void(0)">
                                                    <span>
                                                        <i class="fa fa-fw fa-pencil-alt mr-1"></i> Add Your Image
                                                    </span>
                                                <span class="badge badge-pill badge-secondary">2</span>
                                            </a>
                                        </li>
                                        <li class="nav-item my-1">
                                            <a class="nav-link d-flex justify-content-between align-items-center" href="javascript:void(0)">
                                                    <span>
                                                        <i class="fa fa-fw fa-folder mr-1"></i> Contact Details
                                                    </span>
                                                <span class="badge badge-pill badge-secondary">1987</span>
                                            </a>
                                        </li>
                                        <li class="nav-item my-1">
                                            <a class="nav-link d-flex justify-content-between align-items-center" href="javascript:void(0)">
                                                    <span>
                                                        <i class="fa fa-fw fa-trash-alt mr-1"></i> Trash
                                                    </span>
                                                <span class="badge badge-pill badge-secondary">10</span>
                                            </a>
                                        </li>
                                        <li class="nav-item my-1">
                                            <a class="nav-link d-flex justify-content-between align-items-center" href="javascript:void(0)">
                                                    <span>
                                                        <i class="fa fa-fw fa-trash-alt mr-1"></i> Add Your Business
                                                    </span>
                                                <span class="badge badge-pill badge-secondary">10</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- END Profile -->
                            <!-- Contact us -->
                            <div class="block">
                                <div class="block-header block-header-default">
                                    <h3 class="block-title">
                                        <i class="fa fa-briefcase text-muted mr-1"></i> Location
                                    </h3>
                                    <div class="block-options">
                                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                            <i class="si si-refresh"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d111989.57931510158!2d80.82299563646195!3d28.69938636764138!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d28.6977528!2d80.89298939999999!5e0!3m2!1sen!2snp!4v1557245584772!5m2!1sen!2snp" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                                    <div class="text-center push">
                                        <button type="button" class="btn btn-sm btn-light">View More..</button>
                                    </div>
                                </div>
                            </div>
                            <!-- END Contact US -->
                        </div>
                        <div class="col-md-6 col-xl-6">
                            <div class="profile_kb_b">
                                <!-- Hero -->
                                @if(is_file(public_path('uploads/banners/').'/'.$client->banner) && file_exists(public_path('uploads/banners/').'/'.$client->banner))
                                    <div class="bg-image" style="background-image: url('{{url('public/uploads/banners/')}}/{{$client->banner}}');">
                                        @else
                                            <div class="bg-image" style="background-image: url('{{url('public/images/defaultImg/default_banner.jpg')}}');">
                                                @endif
                                                <div class="bg-black-80">
                                                    <div class="content content-full text-center">
                                                        <div class="my-3">
                                                            @if(is_file(public_path('uploads/manufacture/logos/').'/'.$client->logo) && file_exists(public_path('uploads/manufacture/logos/').'/'.$client->logo))
                                                                <img class="img-avatar img-avatar-thumb" src="{{url('public/uploads/manufacture/logos/').'/'.$client->logo}}" alt="">
                                                            @else
                                                                <img class="img-avatar" src="{{url('public/images/defaultImg/logo.png')}}" alt="">
                                                            @endif
                                                        </div>
                                                        <h1 class="h2 text-white mb-0" title="{{$client->company_name}}">{{$client->company_name}}</h1>
                                                        <span class="text-white-75" title="{{$client->company_address}}">{{$client->company_address}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END Hero -->
                                    </div>
                                    <!-- Updates -->
                                    <ul class="timeline timeline-alt py-0">
                                        <li class="timeline-event">
                                            <div class="timeline-event-icon bg-default">
                                                <i class="fa fa-database"></i>
                                            </div>
                                            <div class="timeline-event-block block invisible" data-toggle="appear">
                                                <div class="block-header">
                                                    <h3 class="block-title">About Us</h3>
                                                    <div class="block-options">
                                                    </div>
                                                </div>
                                                <div class="block-content">
                                                    {!! $client->company_profile !!}
                                                </div>
                                            </div>
                                        </li>
                                        <li class="timeline-event">
                                            <div class="timeline-event-icon bg-modern">
                                                <i class="fa fa-briefcase"></i>
                                            </div>
                                            <div class="timeline-event-block block invisible" data-toggle="appear">
                                                <div class="block-header">
                                                    <h3 class="block-title">Profile</h3>
                                                </div>
                                                <div class="block-content block-content-full">
                                                    <p class="font-w600 mb-2">
                                                        3 New Products were added!
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="timeline-event">
                                            <div class="timeline-event-icon bg-info">
                                                <i class="fab fa-twitter"></i>
                                            </div>
                                            <div class="timeline-event-block block invisible" data-toggle="appear">
                                                <div class="block-header">
                                                    <h3 class="block-title">Product And Service</h3>
                                                </div>
                                                <div class="block-content">
                                                    <p class="font-w600 mb-2">
                                                        + 1150 Followers
                                                    </p>
                                                    <p>
                                                        You’re getting more and more followers, keep it up!
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="timeline-event">
                                            <div class="timeline-event-icon bg-smooth">
                                                <i class="fa fa-database"></i>
                                            </div>
                                            <div class="timeline-event-block block invisible" data-toggle="appear">
                                                <div class="block-header">
                                                    <h3 class="block-title">Image Gallery</h3>
                                                    <div class="block-options">
                                                        <div class="timeline-event-time block-options-item font-size-sm">
                                                            1 day ago
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="block-content">
                                                    <p class="font-w600 mb-2">
                                                        Database backup completed!
                                                    </p>
                                                    <p>
                                                        Download the <a href="javascript:void(0)">latest backup</a>.
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <!-- END Updates -->
                            </div>
                        </div>
                    </div>
                    <!-- END Page Content -->
                    <!-- Stats -->
                    <div class="bg-white border-bottom">
                        <div class="content content-boxed">
                            <div class="row items-push text-center">
                                <div class="pro_kd_a">
                                    <a href="#"><i class="fa fa-location-arrow"></i> Like Us</a>
                                    <a href="#">Claimed</a>
                                    <a href="#"><i class="fa fa-envelope"></i> Send SMS</a>
                                    <a href="#">Improve Listing</a>
                                    <a href="#"><i class="fa fa-eye"></i> 3232</a>
                                    <a href="#"><i class="fa fa-search"></i> 858585</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Stats -->

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