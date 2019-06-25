@extends('frontend.layouts.master')
@section('content')
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{url('public/frontend')}}/assets/js/plugins/magnific-popup/magnific-popup.css">
    <div class="profile_khoj_biz">
        <div class="profile_page">

        </div>
        <div id="page-container" class="page-header-fixed">

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
                        <!-- Search Form (visible on larger screens) -->
                        <ul class="header_nav_pro">
                            @include('frontend.pages.client.pages.layouts.header')
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
                        <div class="col-md-8 col-xl-8">
                            <div class="profile_kb_b">
                                <!-- Hero -->
                                            <!-- END Hero -->
                            </div>
                                    <!-- Updates -->
                                    <ul class="timeline timeline-alt py-0">
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
                                                    <!-- Simple Gallery -->
                                                    <h2 class="content-heading">Our Gallery</h2>
                                                    <div class="row items-push js-gallery img-fluid-100">
                                                        <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
                                                            <a class="img-link img-link-zoom-in img-thumb img-lightbox" href="{{url('public/images/defaultImg/002.jpg')}}">
                                                                <img class="img-fluid" src="{{url('public/images/defaultImg/002.jpg')}}" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
                                                            <a class="img-link img-link-zoom-in img-thumb img-lightbox" href="{{url('public/images/defaultImg/ad4.jpg')}}">
                                                                <img class="img-fluid" src="{{url('public/images/defaultImg/ad4.jpg')}}" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
                                                            <a class="img-link img-link-zoom-in img-thumb img-lightbox" href="{{url('public/images/defaultImg/ad2.jpg')}}">
                                                                <img class="img-fluid" src="{{url('public/images/defaultImg/ad2.jpg')}}" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <!-- END Simple Gallery -->
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
                                                    <p>
                                                      N/A
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
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
                                            <div class="timeline-event-icon bg-info">
                                                <i class="fab fa-twitter"></i>
                                            </div>
                                            <div class="timeline-event-block block invisible" data-toggle="appear">
                                                <div class="block-header">
                                                    <h3 class="block-title">Product And Service</h3>
                                                </div>
                                                <div class="block-content">
                                                    <p>
                                                       N/A
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
                                                    <h3 class="block-title">Contact Us</h3>
                                                    <div class="block-options">
                                                        <div class="timeline-event-time block-options-item font-size-sm">
                                                            1 day ago
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="block-content">
                                                    <form action="be_forms_elements.html" method="POST" enctype="multipart/form-data" onsubmit="return false;">
                                                        <div class="row push">
                                                            <div class="col-md-12 col-xl-12">
                                                                <div class="row">
                                                                    <div class="col-md-2">
                                                                        <div class="form-group">
                                                                            <label for="example-text-input">Name</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-10">
                                                                        <input type="text" class="form-control" id="example-text-input" name="example-text-input" placeholder="entry your name">
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <div class="form-group">
                                                                            <label for="example-email-input">Email</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-10">
                                                                        <input type="email" class="form-control" id="example-email-input" name="example-email-input" placeholder="your@gmail.com">
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <div class="form-group">
                                                                            <label for="example-textarea-input">Message</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-10">
                                                                        <textarea class="form-control" id="example-textarea-input" name="example-textarea-input" rows="4" placeholder="Message.."></textarea>
                                                                    </div>
                                                                    <div class="col-md-2 col-md-3 ml-auto">
                                                                        <div class="form-group">
                                                                            <br>
                                                                            <button type="submit" class="btn btn-success btn-sm">Submit</button>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <!-- END Updates -->
                            </div>

                        @include('frontend.pages.client.pages.layouts.contact_location')
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
                                    <a href="#"><i class="fa fa-eye"></i> </a>
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