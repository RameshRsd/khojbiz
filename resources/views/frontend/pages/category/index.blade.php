@extends('frontend.layouts.master')
@section('content')
    <div class="js-slider slick-nav-hover" data-dots="true" data-autoplay="true" data-arrows="true">
        <div class="block">
            <img class="img-fluid" src="{{url('public/uploads/list_ads/banner_ads.png')}}" alt="" width="100%">
        </div>
        <div class="block">
            <img class="img-fluid" src="{{url('public/uploads/list_ads/banner_ads.png')}}" alt="">
        </div>
    </div>
    <!-- Main Container -->
    <main id="main-container">
        <div class="content content-boxed">
            <div class="row">
                <div class="col-md-5 col-xl-4">
                    <!-- Products -->
                    <div class="block">
                        <div class="block-content">
                            @foreach($category as $clients)
                                <a href="#">
                            <div class="media d-flex align-items-center push">
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