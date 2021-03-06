@extends('frontend.layouts.master')
@section('content')
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
                <div class="col-md-12 col-xl-12">
                    <div class="all_category">
                        <b> Category: -</b>
                        @php $alphas = \App\Alphabate::orderBy('name')->get(); @endphp
                        @foreach($alphas as $alpha)
                            <a href="{{url('browse-by-alphabates').'/list_'.$alpha->name}}" @if($alpha_id->id == $alpha->id) class="active" @endif>{{$alpha->name}}</a>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($categories as $category)
                <div class="col-md-4">
                    <div class="media-body">
                        <div class="font-w500"><a href="{{url('search?cat=').$category->slug}}">{{$category->name}} <span class="badge badge-pill badge-info"></span></a></div>
                        {{--@foreach($category->clients as $client)--}}
                            {{--<li>{{$client->company_name}}</li>--}}
                            {{--@endforeach--}}
                    </div>
                </div>
                    @endforeach
            </div>
        </div>
    </main>
    <!-- END Main Container -->

    @endsection