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
                                <h5 class="overview-heading left"><i class="fa fa-magic"></i> Manage Gallery</h5>
                            </div>
                            <div class="content-main">
                                <ul class="navbar-sidbar">
                                    <a href="{{url('client/gallery-manage/list-images')}}"><li class="nav_title @if(request()->segment('3') =='list-images') active @endif"><i class="fa fa-list"></i> Galleries</li></a>
                                    <a href="{{url('client/gallery-manage/new-images')}}"><li class="nav_title @if(request()->segment('3') =='new-images') active @endif"><i class="fa fa-plus-circle"></i> Add New Images</li></a>
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