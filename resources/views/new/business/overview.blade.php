@extends('layouts.front')
@section('style')
    <link rel="stylesheet" type="text/css" href="{{url('public/frontend/client')}}/dist/css/slider-pro.min.css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="{{url('public/frontend/client')}}/libs/fancybox/jquery.fancybox.css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="{{url('public/frontend/client')}}/css/examples.css" media="screen"/>
@endsection
@section('script')
    <script type="text/javascript" src="{{url('public/frontend/client')}}/libs/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="{{url('public/frontend/client')}}/dist/js/jquery.sliderPro.min.js"></script>
    <script type="text/javascript" src="{{url('public/frontend/client')}}/libs/fancybox/jquery.fancybox.pack.js"></script>

    <script type="text/javascript">
        $( document ).ready(function( $ ) {
            $( '#example2' ).sliderPro({
                width: 300,
                height: 300,
                visibleSize: '100%',
                forceSize: 'fullWidth',
                autoSlideSize: true
            });

            // instantiate fancybox when a link is clicked
            $( ".slider-pro" ).each(function(){
                var slider = $( this );

                slider.find( ".sp-image" ).parent( "a" ).on( "click", function( event ) {
                    event.preventDefault();

                    if ( slider.hasClass( "sp-swiping" ) === false ) {
                        var sliderInstance = slider.data( "sliderPro" ),
                            isAutoplay = sliderInstance.settings.autoplay;

                        $.fancybox.open( slider.find( ".sp-image" ).parent( "a" ), {
                            index: $( this ).parents( ".sp-slide" ).index(),
                            afterShow: function() {
                                if ( isAutoplay === true ) {
                                    sliderInstance.settings.autoplay = false;
                                    sliderInstance.stopAutoplay();
                                }
                            },
                            afterClose: function() {
                                if ( isAutoplay === true ) {
                                    sliderInstance.settings.autoplay = true;
                                    sliderInstance.startAutoplay();
                                }
                            }

                        });
                    }
                });
            });
        });
    </script>
@endsection

@section('content')

    <!--------------- Overview section -------------->
    <div class="row">
        <div class="col-lg-8">
            <div class="row">

                @include('new.business.client-banner')

                <div class="col-lg-12">
                    <div class="content-wrapp">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="content-covered">
                                    <div class="content-header">
                                        <h5 class="overview-heading left">About Us</h5>
                                    </div>
                                    <div class="content-main">
                                        {!! $client->company_profile !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="content-wrapp">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="content-covered">
                                    <div class="content-header">
                                        <h5 class="overview-heading left">Our Services</h5>
                                    </div>
                                    <div class="content-main">
                                        <div class="row">
                                            @foreach($services as $service)
                                            <div class="col-lg-4">
                                                <div class="content-manage-section">
                                                    <div class="content-details cient-services">
                                                        <div class="row">
                                                            {{--<div class="col-3">--}}
                                                            {{--<img src="{{url('public/images/defaultImg/default_banner.jpg')}}" class="img-width-100" alt="Berry Lace Dress">--}}
                                                            {{--</div>--}}
                                                            <div class="col-12">
                                                                <ul class="content-title">
                                                                    <li><a href="{{url('').'/'.$client->user->name.'/view-service='.$service->id}}" class="company_title"> {{$service->name}}</a></li>
                                                                    <li>
                                                                        <p>
                                                                            {{str_limit($service->details,90)}},
                                                                            <a href="{{url('').'/'.$client->user->name.'/view-service='.$service->id}}">Read More..</a>
                                                                        </p>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                                @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="content-wrapp">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="content-covered">
                                    <div class="content-header">
                                        <h5 class="overview-heading left">Notice</h5>
                                    </div>
                                    <div class="content-main">
                                        <div class="row">
                                            @foreach($notices as $notice)
                                                <div class="col-lg-4">
                                                    <div class="content-manage-section">
                                                        <div class="content-details cient-services">
                                                            <div class="row">
                                                                {{--<div class="col-3">--}}
                                                                {{--<img src="{{url('public/images/defaultImg/default_banner.jpg')}}" class="img-width-100" alt="Berry Lace Dress">--}}
                                                                {{--</div>--}}
                                                                <div class="col-12">
                                                                    <ul class="content-title">
                                                                        <li><a href="{{url('').'/'.$client->user->name.'/view-notice='.$notice->id}}" class="company_title"> {{$notice->name}}</a></li>
                                                                        <li>
                                                                            <p>
                                                                                {{str_limit($notice->details,90)}},
                                                                                <a href="{{url('').'/'.$client->user->name.'/view-notice='.$notice->id}}">Read More..</a>
                                                                            </p>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        @include('new.business.right-sidebar')

    </div>
    <!--------------- Overview section -------------->


@endsection