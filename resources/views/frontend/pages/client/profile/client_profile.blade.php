@extends('frontend.layouts.master')
@section('content')
    <div class="profile_khoj_biz">
        <div class="profile_page">

        </div>
        <div id="page-container" class="page-header-fixed">
            <!-- Side Overlay-->

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
                            <img src="{{url('public/images/defaultImg/logo_khoj.png')}}" alt="" width="80">
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
                                    <span class="badge badge-primary badge-pill">0</span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0 border-0 font-size-sm" aria-labelledby="page-header-notifications-dropdown">
                                    <div class="p-2 bg-primary text-center">
                                        <h5 class="dropdown-header text-uppercase text-white">Notifications</h5>
                                    </div>
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
                                            <a class="nav-link d-flex justify-content-between align-items-center " href="">
                                                    <span>
                                                        <i class="fa fa-fw fa-inbox mr-1"></i> About Us
                                                    </span>
                                                <span class="badge badge-pill badge-secondary">0    </span>
                                            </a>
                                        </li>
                                        <li class="nav-item my-1">
                                            <a class="nav-link d-flex justify-content-between align-items-center" href="{{url('client/profile')}}">
                                                    <span>
                                                        <i class="fa fa-fw fa-star mr-1"></i> Profile
                                                    </span>
                                                <span class="badge badge-pill badge-secondary">0</span>
                                            </a>
                                        </li>
                                        <li class="nav-item my-1">
                                            <a class="nav-link d-flex justify-content-between align-items-center" href="javascript:void(0)">
                                                    <span>
                                                        <i class="fa fa-fw fa-paper-plane mr-1"></i> Product & Service
                                                    </span>
                                                <span class="badge badge-pill badge-secondary">0</span>
                                            </a>
                                        </li>
                                        <li class="nav-item my-1">
                                            <a class="nav-link d-flex justify-content-between align-items-center" href="javascript:void(0)">
                                                    <span>
                                                        <i class="fa fa-fw fa-pencil-alt mr-1"></i> Add Your Image
                                                    </span>
                                                <span class="badge badge-pill badge-secondary">0</span>
                                            </a>
                                        </li>
                                        <li class="nav-item my-1">
                                            <a class="nav-link d-flex justify-content-between align-items-center" href="javascript:void(0)">
                                                    <span>
                                                        <i class="fa fa-fw fa-folder mr-1"></i> Contact Details
                                                    </span>
                                                <span class="badge badge-pill badge-secondary">0</span>
                                            </a>
                                        </li>
                                        <li class="nav-item my-1">
                                            <a class="nav-link d-flex justify-content-between align-items-center" href="javascript:void(0)">
                                                    <span>
                                                        <i class="fa fa-fw fa-trash-alt mr-1"></i> Trash
                                                    </span>
                                                <span class="badge badge-pill badge-secondary">0</span>
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

                                    @if(isset($client->map_link))
                                        <style>
                                            iframe{
                                                width:100%;
                                            }
                                        </style>
                                        {!! $client->map_link !!}
                                    @else
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d111989.57931510158!2d80.82299563646195!3d28.69938636764138!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d28.6977528!2d80.89298939999999!5e0!3m2!1sen!2snp!4v1557245584772!5m2!1sen!2snp" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                                        <div class="text-center push">
                                            <button type="button" class="btn btn-sm btn-light">View More..</button>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <!-- END Contact US -->
                        </div>
                        <style>textarea {
                                -webkit-box-sizing: border-box;
                                -moz-box-sizing: border-box;
                                box-sizing: border-box;

                                width: 100%;
                            }</style>
                        <div class="col-md-9 col-xl-9">
                            <div class="profile_kb_b">
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
                                                    <form action="">
                                                        <textarea></textarea>

                                                    </form>

                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <!-- END Updates -->
                            </div>
                        </div>
                    </div>

            </main>
        </div>
    </div>
@endsection