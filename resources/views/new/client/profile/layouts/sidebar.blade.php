@extends('layouts.front')
@section('style')
    <link rel="stylesheet" href="{{url('public/css/multiselect.css')}}">
@endsection
@section('content')

    <!--------------- Overview section -------------->
    <div class="row">
        <div class="col-lg-3">
            <div class="row">
                <div class="col-lg-12">
                    <div class="content-wrapp">
                        <div class="content-covered">
                            <div class="content-header">
                                <h5 class="overview-heading left"><i class="fa fa-magic"></i> Manage Company Details</h5>
                            </div>
                            <div class="content-main">
                                <ul class="navbar-sidbar">
                                <a href="{{url('client/edit-profile/business-details')}}"><li class="nav_title @if(request()->segment('3') =='business-details') active @endif"><i class="fa fa-edit"></i> Business Details</li></a>
                                <a href="{{url('client/edit-profile/contact-details')}}"><li class="nav_title @if(request()->segment('3') =='contact-details') active @endif"><i class="fa fa-envelope-o"></i> Contact Details</li></a>
                                <a href="{{url('client/edit-profile/about-company')}}"><li class="nav_title @if(request()->segment('3') =='about-company') active @endif"><i class="fa fa-edit"></i> About Company</li></a>
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

