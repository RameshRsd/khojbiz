@extends('layouts.front')
@section('content')
    <!--------------- Overview section -------------->
    <div class="row">
        <div class="col-lg-3">
            <div class="row">
                <div class="col-lg-12">
                    <div class="content-wrapp">
                        <div class="content-covered">
                            <div class="content-header">
                                <h5 class="overview-heading left"><i class="fa fa-magic"></i> Manage Notice</h5>
                            </div>
                            <div class="content-main">
                                <ul class="navbar-sidbar">
                                    <a href="{{url('client/notice/list-notice')}}"><li class="nav_title @if(request()->segment('3') =='list-notice') active @endif"><i class="fa fa-info"></i> Notice</li></a>
                                    <a href="{{url('client/notice/new-notice')}}"><li class="nav_title @if(request()->segment('3') =='new-notice') active @endif"><i class="fa fa-plus-circle"></i> Add New Notice</li></a>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-9">
            @yield('body')
        </div>
    </div>
    <!--------------- Overview section -------------->

@endsection