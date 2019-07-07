@section('header')
    <!-- Header -->
    <header id="page-header" style="background-color: #fff;">
        <!-- Header Content -->
        <div class="content-header">
            <!-- Left Section -->
            <div class="d-flex align-items-center">
                <!-- Toggle Sidebar -->
                <!-- Apps Modal -->
                <a href="{{url('')}}">
                    <img src="{{url('public/images/defaultImg/logo_khoj.png')}}" alt="" width="100">
                </a> &nbsp;
                <!-- Opens the Apps modal found at the bottom of the page, after footer’s markup -->
                <button type="button" class="btn btn-sm btn-dual mr-2" data-toggle="modal" data-target="#one-modal-apps">
                    <i class="si si-grid"></i>
                </button>

                <!-- END Apps Modal -->

                <!-- Open Search Section (visible on smaller screens) -->

                <!-- Search Form (visible on larger screens) -->
                {{--<form class="mobile_v_kb d-none d-sm-inline-block" action="be_pages_generic_search.html" method="POST">--}}
                    {{--<div class="input-group input-group-sm">--}}
                        {{--<input type="text" class="form-control form-control-alt" placeholder="Search.." id="" name="page-header-search-input2">--}}
                        {{--<div class="input-group-append">--}}
                                    {{--<span class="input-group-text bg-body border-0">--}}
                                        {{--<i class="si si-magnifier"></i>--}}
                                    {{--</span>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</form>--}}

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
                            @if(\Illuminate\Support\Facades\Auth::user()->type == 'users')
                            <a class="dropdown-item d-flex align-items-center justify-content-between" href="{{url('users')}}">
                                <span>Profile</span>
                                <span>
                                <span class="badge badge-pill badge-success"></span>
                                <i class="si si-user ml-1"></i>
                            </span>
                            </a>
                            @elseif(\Illuminate\Support\Facades\Auth::user()->type == 'staff')
                                <a class="dropdown-item d-flex align-items-center justify-content-between" href="{{url('staff')}}" title="{{\Illuminate\Support\Facades\Auth::user()->name}}">
                                    <span title="{{\Illuminate\Support\Facades\Auth::user()->name}}">Profile</span>
                                    <span>
                                <span class="badge badge-pill badge-success">1</span>
                                <i class="si si-user ml-1"></i>
                              </span>
                                </a>
                            @elseif(\Illuminate\Support\Facades\Auth::user()->type == 'business')
                                <a class="dropdown-item d-flex align-items-center justify-content-between" href="{{url('business')}}" title="{{\Illuminate\Support\Facades\Auth::user()->name}}">
                                    <span title="{{\Illuminate\Support\Facades\Auth::user()->name}}">Profile</span>
                                    <span>
                                <span class="badge badge-pill badge-success">1</span>
                                <i class="si si-user ml-1"></i>
                              </span>
                                </a>
                                @else
                                <a class="dropdown-item d-flex align-items-center justify-content-between" href="{{url('login')}}">
                                    <span>Profile</span>
                                    <span>
                                <span class="badge badge-pill badge-success">1</span>
                                <i class="si si-user ml-1"></i>
                              </span>
                                </a>
                            @endif
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
                        <!-- END User Dropdown -->
                        <button type="button" class="btn btn-sm btn-dual ml-2" data-toggle="layout" data-action="side_overlay_toggle">
                            <i class="fa fa-registered"></i> Register
                        </button>
                @endif
                <!-- Toggle Side Overlay -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->

                <!-- END Toggle Side Overlay -->
            </div>
            <!-- END Right Section -->
        </div>
        <!-- END Header Content -->

        <!-- Header Search -->
        <div id="page-header-search" class="overlay-header bg-white">
            <div class="content-header">
                <form class="w-100" action="{{url('search')}}" method="get">
                    <div class="input-group input-group-sm">
                        <div class="input-group-prepend">
                            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                            <button type="submit" class="btn btn-danger" data-toggle="layout" data-action="header_search_off">
                                <i class="fa fa-fw fa-times-circle"></i>
                            </button>
                        </div>
                        <input type="submit" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
                    </div>
                </form>
            </div>
        </div>
        <!-- END Header Search -->

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

@endsection