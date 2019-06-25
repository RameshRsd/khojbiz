@extends('frontend.layouts.master')
@section('content')
    <div class="profile_khoj_biz">
        <div class="profile_page">

        </div>
        <div id="page-container" class="page-header-fixed">

            <!-- Main Container -->
            <main id="container">
                <!-- Page Content -->
                <div class="content pro_kb_busi">
                    <div class="row">
                        <div class="col-md-8 col-xl-8">
                            <div class="profile_kb_b">
                                <!-- Hero -->
                                @if(is_file(public_path('uploads/location_image/').'/'.$locations->image) && file_exists(public_path('uploads/location_image/').'/'.$locations->image))
                                    <div class="bg-image" style="background-image: url('{{url('public/uploads/location_image/')}}/{{$locations->image}}');">
                                        @else
                                            <div class="bg-image" style="background-image: url('{{url('public/images/defaultImg/default_banner.jpg')}}');">
                                                @endif
                                                <div class="bg-black-80">
                                                    <div class="content content-full text-center">
                                                        <div class="my-3">
                                                            @if(is_file(public_path('uploads/manufacture/logos/').'/'.$locations->logo) && file_exists(public_path('uploads/manufacture/logos/').'/'.$locations->logo))
                                                                <img class="img-avatar img-avatar-thumb" src="{{url('public/uploads/manufacture/logos/').'/'.$locations->logo}}" alt="">
                                                            @else
                                                                <img class="img-avatar" src="{{url('public/images/defaultImg/logo.png')}}" alt="">
                                                            @endif
                                                        </div>
                                                        <h1 class="h2 text-white mb-0" title="{{$locations->name}}">{{$locations->name}}</h1>
                                                        <span class="text-white-75" title="{{$locations->address}}">{{$locations->address}}</span>
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
                                                    {!! $locations->details !!}
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <!-- END Updates -->
                            </div>
                            <div class="col-md-4 col-xl-4">
                                <!-- Products -->
                                <div class="block">
                                    <div class="block-header block-header-default">
                                        <h3 class="block-title">
                                            <i class="fa fa-pray text-muted mr-1"></i> Contact
                                        </h3>
                                        <div class="block-options">
                                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                                <i class="si si-refresh"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="block-content">
                                        <div class="media d-flex align-items-center push">
                                            <div class="mr-3">
                                                @if(is_file(public_path('uploads/logos/').'/'.$locations->logo) && file_exists(public_path('uploads/logos/').'/'.$locations->logo))
                                                    <img class="img-avatar img-avatar-thumb" src="{{url('public/uploads/logos/').'/'.$locations->logo}}" alt="">
                                                @else
                                                    <img class="img-avatar" src="{{url('public/images/defaultImg/logo.png')}}" alt="">
                                                @endif
                                            </div>
                                            <div class="media-body">
                                                <div class="font-w600">{{$locations->name}}</div>
                                                @if($locations->contact == 0)
                                                <div class="font-size-sm"><i class="fa fa-mobile"></i> N/A</div>
                                                @else
                                                <div class="font-size-sm"><i class="fa fa-mobile"></i> {{$locations->contact}}</div>
                                                @endif
                                                @if($locations->website == 0)
                                                <div class="font-size-sm"><i class="fa fa-map-marker"></i> N/A</div>
                                                @else
                                                <div class="font-size-sm"><i class="fa fa-map-marker"></i>{{$locations->website}}</div>
                                                    @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END Products -->
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
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d111989.57931510158!2d80.82299563646195!3d28.69938636764138!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d28.6977528!2d80.89298939999999!5e0!3m2!1sen!2snp!4v1557245584772!5m2!1sen!2snp" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                                        <div class="text-center push">
                                            <button type="button" class="btn btn-sm btn-light">View More..</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- END Contact US -->
                            </div>
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
                                    <a href="#"><i class="fa fa-eye"></i> 3232</a>
                                    <a href="#"><i class="fa fa-search"></i> 858585</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Stats -->

            </main>

            <!-- END Main Container -->
        </div>
    </div>
@endsection