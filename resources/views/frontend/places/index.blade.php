@extends('frontend.layouts.master')
@section('content')
    <style>
        form.example input[type=text] {
            padding: 10px;
            font-size: 17px;
            border: 1px solid grey;
            float: left;
            width: 80%;
            background: #fff;
        }

        form.example button {
            float: left;
            width: 20%;
            padding: 10px;
            background: #2196F3;
            color: white;
            font-size: 17px;
            border: 1px solid grey;
            border-left: none;
            cursor: pointer;
        }

        form.example button:hover {
            background: #0b7dda;
        }

        form.example::after {
            content: "";
            clear: both;
            display: table;
        }
    </style>
    <div class="js-slider slick-nav-hover" data-dots="true" data-autoplay="true" data-arrows="true">
        <div class="block alfa_ads">
            <img class="img-fluid" src="{{url('public/uploads/list_ads/banner_ads.png')}}" alt="">
        </div>
        <div class="block alfa_ads">
            <img class="img-fluid" src="{{url('public/uploads/list_ads/banner_ads.png')}}" alt="">
        </div>
    </div>
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
    <main id="main-container">
        <div class="content alfa_li_dd">
            <div class="row">
                <div class="col-md-7 col-xl-8">
                    {{--Search--}}
                    <form action="{{url('places')}}" method="get">
                        <div class="row">
                            <div class="col-5">
                                <input type="text" class="form-control" id="place_name" value="{{request('place_name')}}" onchange="javascript:this.form.submit();" name="place_name" placeholder="Type Place Name">
                            </div>
                            <div class="col-4">
                                <select type="text" class="form-control" id="place_category" onchange="javascript:this.form.submit();" name="place_category">
                                    <option value="">Choose Category..</option>
                                    @foreach($location_categories as $location_category)
                                        <option value="{{$location_category->slug}}" @if(request('place_category')==$location_category->slug) selected @endif>{{$location_category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-3">
                                <select type="text" class="form-control" id="short_by" onchange="javascript:this.form.submit();" name="short_by">
                                    <option value="">Short By</option>
                                    @foreach($alpho_shorts as $alpho_short)
                                        <option value="{{$alpho_short->name}}" @if(request('short_by')==$alpho_short->name) selected @endif>{{$alpho_short->name}} (Short By)</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </form>
                    <br>
                    {{--Search end--}}
                    <!-- Updates -->
                    <ul class="timeline timeline-alt py-0">
                        @if(count($places)>0)
                        @foreach($places as $place)
                        <li class="timeline-event">
                                <div class="timeline-event-icon bg-modern">
                                    <i class="fa fa-map"></i>
                                </div>
                                <div class="timeline-event-block block invisible" data-toggle="appear">
                                    <div class="a_li_d">
                                        <div class="row listing_wrap">
                                            <div class="col-4">
                                                @if(is_file(public_path('uploads/location_image/').'/'.$place->image) && file_exists(public_path('uploads/location_image/').'/'.$place->image))
                                                    <img  src="{{url('public/uploads/location_image/').'/'.$place->image}}" alt="" style="width: 100%;">
                                                @else
                                                    <img  src="{{url('public/images/defaultImg/logo.png')}}" alt="">
                                                @endif

                                            </div>
                                            <div class="col-8 l_a_c_l">
                                                <ul>
                                                    <li><h2 class="a_li_d_p">
                                                            <a >{{$place->name}}</a>
                                                        </h2></li>
                                                    <li><i class="fa fa-building"></i>
                                                    <a href="{{url('places?place_category=').$place->category->slug}}" class="cat_kb_b">{{$place->category->name}}</a>
                                                    </li>
                                                    <li><a href="{{url('places?place_location=').$place->address}}"><i class="fa fa-map-marker"></i>  {{$place->address}}</a></li>
                                                    <li><i class="fa fa-phone"></i> {{$place->contact}}</li>
                                                    <li><a href="{{$place->website}}" target="_blank"><i class="fa fa-globe"></i> {{$place->website}}</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="a_li_d_i_bot">
                                        <a href="#"><i class="fa fa-thumbsup"></i> Like</a>
                                        <a href="#"><i class="fa fa-comment"></i> Review</a>
                                        <a href="#"><i class="fa fa-eye"></i> 3232</a>
                                    </div>
                                </div>

                                <div  id="my_detail" style="display: none;">
                                    <div class="timeline-event-block block invisible" data-toggle="appear">
                                        <div class="a_li_d">
                                            <div class="row">
                                                <div class="col-12 l_a_c_l">
                                                    <ul>
                                                        <li><h2 class="a_li_d_p">
                                                                <a>{{$place->name}}</a>
                                                            </h2></li>
                                                        <li><i class="fa fa-building"></i>
                                                            <a href="{{url('places?place_category=').$place->category->slug}}" class="cat_kb_b">{{$place->category->name}}</a>
                                                        </li>
                                                        <li><a href="{{url('places?place_location=').$place->address}}"><i class="fa fa-map-marker"></i>  {{$place->address}}</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                            @else
                            <li  class="timeline-event" style="text-align: center; color:Red;">
                                Record Not Found !!
                            </li>
                        @endif
                    </ul>
                    <!-- END Updates -->
                </div>
                <div class="col-md-5 col-xl-4">
                    <!-- Products -->
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">
                                <i class="fa fa-briefcase text-muted mr-1"></i> Top Search
                            </h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                    <i class="si si-refresh"></i>
                                </button>
                            </div>
                        </div>

                    </div>
                    <!-- END Products -->

                    <!-- Ratings -->
                    <!-- END Ratings -->

                    <!-- Followers -->

                    <!-- END Followers -->
                </div>
            </div>
        </div>
    </main>
    <!-- END Main Container -->

    @endsection