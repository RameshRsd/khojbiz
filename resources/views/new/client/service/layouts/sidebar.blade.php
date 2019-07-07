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
                                <h5 class="overview-heading left"><i class="fa fa-magic"></i> Manage Services</h5>
                            </div>
                            <div class="content-main">
                                <ul class="navbar-sidbar">
                                    <a href="{{url('client/service-manage/list-service')}}"><li class="nav_title @if(request()->segment('3') =='list-service') active @endif"><i class="fa fa-list"></i> List Services</li></a>
                                    <a href="{{url('client/service-manage/new-service')}}"><li class="nav_title @if(request()->segment('3') =='new-service') active @endif"><i class="fa fa-plus-circle"></i> Add New Service</li></a>
                                    {{--<a href="{{url('client/service_manage/brochure')}}"><li class="nav_title @if(request()->segment('3') =='brochure') active @endif"><i class="fa fa-file"></i> Brochure</li></a>--}}
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