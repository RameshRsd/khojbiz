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
    <!-- Main Container -->
    <main id="main-container">
        <div class="content alfa_li_dd">
            <div class="row">
                <div class="col-md-7 col-xl-8">
                    {{--Search--}}
                    <form class="example" action="/action_page.php">
                        <input type="text" placeholder="Search.." name="search">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                    <br>
                    {{--Search end--}}
                    <!-- Updates -->
                    <ul class="timeline timeline-alt py-0">
                        @foreach($clients as $client)
                        <li class="timeline-event">
                                <div class="timeline-event-icon bg-modern">
                                    <i class="fa fa-briefcase"></i>
                                </div>
                                <div class="timeline-event-block block invisible" data-toggle="appear">
                                    <div class="a_li_d">
                                        <div class="row">
                                            <div class="col-2 l_a_lo">
                                                @if(is_file(public_path('uploads/logos/').'/'.$client->logo) && file_exists(public_path('uploads/logos/').'/'.$client->logo))
                                                    <img class="img-avatar" src="{{url('public/uploads/logos/').'/'.$client->logo}}" alt="">
                                                @else
                                                    <img class="img-avatar" src="{{url('public/images/defaultImg/logo.png')}}" alt="">
                                                @endif
                                            </div>
                                            <div class="col-10 l_a_c_l">
                                                <ul>
                                                    <li><h2 class="a_li_d_p">
                                                            {{$client->company_name}}
                                                        </h2></li>
                                                    <li> Information / Computer / Technology</li>
                                                    <li> <i class="fa fa-user"></i> <b>{{$client->company_head}}, {{$client->mobile}}</b></li>
                                                    <li><i class="fa fa-map-marker"></i>  {{$client->company_address}}</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="a_li_d_i_fo_con">
                                       <h6><b><i class="fa fa-phone"></i> {{$client->ofc_tel_no}}</b>
                                        <a href="#"><i class="fa fa-envelope"></i> {{$client->user->email}}</a>
                                        <a href="#"><i class="fa fa-globe"></i> {{$client->website}}</a>
                                        <a class="view_profile_a" href="{{url('profile')}}"> View Profile</a>
                                       </h6>
                                    </div>
                                    <div class="a_li_d_i_bot">
                                        <a href="#"><i class="fa fa-location-arrow"></i> Like Us</a>
                                        <a href="#">Claimed</a>
                                        <a href="#"><i class="fa fa-envelope"></i> Send SMS</a>
                                        <a href="#">Improve Listing</a>
                                        <a href="#"><i class="fa fa-eye"></i> 3232</a>
                                        <a href="#"><i class="fa fa-search"></i> 858585</a>
                                    </div>
                                </div>
                            </li>
                            @endforeach

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
                        <div class="block-content">
                            @foreach($top_clients as $clients)
                                <a href="#">
                            <div class="media d-flex align-items-center push">
                                <div class="mr-3">
                                    @if(is_file(public_path('uploads/logos/').'/'.$clients->logo) && file_exists(public_path('uploads/logos/').'/'.$clients->logo))
                                        <img class="img-avatar" src="{{url('public/uploads/logos/').'/'.$clients->logo}}" alt="">
                                    @else
                                        <img class="img-avatar" src="{{url('public/images/defaultImg/logo.png')}}" alt="">
                                    @endif
                                </div>
                                <div class="media-body">
                                    <div class="font-w600">Janata Bank ATM Balaju Branch</div>
                                    <div class="font-size-sm">Kathmandu Nepal</div>
                                </div>
                            </div>
                                </a>
                            @endforeach
                            <div class="text-center push">
                                <button type="button" class="btn btn-sm btn-light">View More..</button>
                            </div>
                        </div>
                    </div>
                    <!-- END Products -->
                </div>
            </div>
        </div>
    </main>
    <!-- END Main Container -->

    @endsection