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
                       @include('business.layouts.header')
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
                           @include('business.layouts.aside')
                        </div>
                        <div class="col-md-9 col-xl-9">
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
            </main>
            <!-- END Main Container -->
        </div>
    </div>
@endsection