@extends('layouts.front')
@section('content')

    <!-------- Banner Section ------------------>
    <div class="banner-section">
        <div class="row">
            <div class="col-lg-12">
                <div class="site-banner">
                    <img src="{{url('public/uploads/default-banner.jpg')}}" alt="" class="img-width-100">
                    <div class="search-controller">
                        <form action="{{url('search')}}" method="get">
                            <div class="row">
                                <div class="col-5">
                                    <input type="text" name="keyword" class="form-control" placeholder="Keyword">
                                </div>
                                <div class="col-4">
                                    <input type="text" name="location" class="form-control" placeholder="Location">
                                </div>
                                <div class="col-3">
                                    <button type="submit" class="form-control btn btn-primary">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-------- Banner Section ------------------>


    <!-------- Business Service Section ------------------>

    <div class="content-wrapp">
        <div class="row">
            <div class="col-lg-12">
                <div class="content-covered">
                    <div class="content-header">
                        <h5 class="alphabate-heading">Sort By Alphabet<br><small>Top Companies</small></h5>
                    </div>
                    <div class="content-main">
                        <ul>
                            @foreach($alphas as $alpha)
                                <li><a href="{{url('browse-by-alphabates').'/list_'.$alpha->name}}" class="alphabate">{{$alpha->name}}</a></li>
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content-wrapp" id="top-companies">

    </div>

    <!-------- Business Service Section ------------------>


    <!-------- Manufacture Section ------------------>

    <div class="content-wrapp">
        <div class="row">
            <div class="col-lg-12">
                <div class="content-covered">
                    <div class="content-header">
                        <h5 class="alphabate-heading">Sort By Alphabet<br><small>Top Manufacture Companies</small></h5>
                    </div>
                    <div class="content-main">
                        <ul>
                            @foreach($alphas as $alpha)
                                <li><a href="{{url('manufacturers-browse-by-alphabet').'/list_'.$alpha->name}}" class="alphabate">{{$alpha->name}}</a></li>
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content-wrapp" id="top-manufacture-companies">
    </div>

    <!-------- Manufacture Section ------------------>


    <!-------- Manufacture Section ------------------>

    <div class="content-wrapp">
        <div class="row">
            <div class="col-lg-12">
                <div class="content-covered">
                    <div class="content-header">
                        <h5 class="alphabate-heading">Sort By Alphabet<br><small>Top Products</small></h5>
                    </div>
                    <div class="content-main">
                        <ul>
                            @foreach($alphas as $alpha)
                                <li><a href="{{url('product-by-alpha').'/list_'.$alpha->name}}" class="alphabate">{{$alpha->name}}</a></li>
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content-wrapp" id="top-products">
    </div>

    <!-------- Manufacture Section ------------------>


    <!------------- Popular Search ------------------->
    <div class="content-wrapp popular-search" id="popular_category-ajax">
    </div>
    <!------------- Popular Search ------------------->

@endsection