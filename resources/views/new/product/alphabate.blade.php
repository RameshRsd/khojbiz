@extends('layouts.front')
@section('content')

    <!--------------- Advert Control -------------->
    <div class="content-wrapp">
        <div class="row">
            <div class="col-lg-12">
                <div class="content-covered">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            @foreach($feature_ads as $key=>$feature_ad)
                                @if($key==0)
                                    <div class="carousel-item active">
                                        <img src="{{url('public/uploads/adverts/').'/'.$feature_ad->image}}" class="d-block w-100" alt="...">
                                    </div>
                                @else
                                    <div class="carousel-item">
                                        <img src="{{url('public/uploads/adverts/').'/'.$feature_ad->image}}" class="d-block w-100" alt="...">
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--------------- Advert Control -------------->


    <!--------------- Alphabate Control -------------->
    <div class="content-wrapp">
        <div class="row">
            <div class="col-lg-12">
                <div class="content-covered">
                    <div class="content-header">
                        <h5 class="alphabate-heading">Sort By Alphabet<br><small>Top Prducts Companies</small></h5>
                    </div>
                    <div class="content-main">
                        <ul>
                            @foreach($alphas as $alpha)
                                <li><a href="{{url('product-by-alpha').'/list_'.$alpha->name}}" class="alphabate @if($alpha_id->id == $alpha->id) active @endif">{{$alpha->name}}</a></li>
                            @endforeach

                        </ul>
                    </div>
                    <hr>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="row">
                    @foreach($categories as $category)
                        <div class="col-md-4">
                            <div class="media-body">
                                <div class="font-w500"><a href="{{url('search_product?cat=').$category->slug}}" class="alphabate"><i class="fa fa-check-circle"></i> {{str_limit($category->name,45)}} <span class="badge badge-pill badge-info"></span></a></div>
                                {{--@foreach($category->clients as $client)--}}
                                {{--<li>{{$client->company_name}}</li>--}}
                                {{--@endforeach--}}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!--------------- Alphabate Control -------------->

@endsection