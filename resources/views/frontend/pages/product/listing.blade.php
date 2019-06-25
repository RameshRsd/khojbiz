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
    <br>
    <div class="js-slider slick-nav-hover" data-dots="true" data-autoplay="true" data-arrows="true">
        @foreach($feature_ads as $ads)
            <div class="block text-center mb-0">
                <div class="ads_img_khoj">
                    <img class="img-fluid" src="{{url('public/uploads/adverts/').'/'.$ads->image}}" alt="">
                    {{--<img class="img-fluid" src="{{url('public/uploads/adverts/').'/'.$ads->image}}" alt="">--}}
                </div>
            </div>
        @endforeach
    </div>
    <!-- Main Container -->
    <main id="main-container">
        <div class="content alfa_li_dd">
            <div class="row">
                <div class="col-md-8 col-xl-8">
                    {{--Search--}}
                    <form class="example" action="" method="get">
                        <input type="text" placeholder="Search.." value="{{request('keyword')}}" name="keyword">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                    <br>
                   {{----}}
                    <div class="suppliers_de_kb">
                        @foreach($products as $product)
                            <div class="sup_de_kb">
                                <div class="sup_kb_c_detail">
                                    <li><a href="{{url('companyinfo').'/'.$ProductOverView = $product->slug}}" title="{{$product->product_name}}"><h2 class="sup_kb_c" style="color: #0189cc;" title="{{$product->product_name}}">
                                                {{$product->product_name}}
                                            </h2></a></li>
                                        <li><a href="{{url('search?keyword=').$product->address}}" title="{{$product->address}}"><i class="fa fa-map-marker"></i>  {{$product->address}}</a></li>
                                        <li class="cat_tag_kb"><i class="fa fa-angle-right"></i>
                                                @foreach($product->suppliers_product_limit as $produt)
{{--                                                <a href="{{url('search_product?cat=').$produt->category->slug}}"><span class="badge badge-success @if(request('cat')) @if(request('cat')==$produt->category->slug) badge badge-info @endif @endif">{{$produt->category->name}}</span></a>--}}
                                                <a class="cat_tag @if(request('cat')) @if(request('cat')==$produt->category->slug) active_kb @endif @endif" href="{{url('search_product?cat=').$produt->category->slug}}" title="{{$produt->category->name}}"> {{$produt->category->name}}, &nbsp</a>
                                            @endforeach
                                        </li>
                                    <a href="{{url('companyinfo').'/'.$ProductOverView = $product->slug}}" class="badge badge-success" title="View more -> {{$product->product_name}}">View More</a>
                                </div>

                            </div>
                            @endforeach
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">
                                <i class="fa fa-briefcase text-muted mr-1"></i> Top Products
                            </h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                    <i class="si si-refresh"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            @foreach($top_product as $product)
                                <div class="media d-flex align-items-center push">
                                    <div class="media-body">
                                        <div class="font-w600" style="color: #0189cc;"><a href="{{url('companyinfo').'/'.$ProductOverView = $product->slug}}">{{$product->product_name}}</a></div>
                                        <div class="font-size-sm">{{$product->address}}</div>
                                        <div class="font-size-sm">
                                            @foreach($product->top_product as $produt)
                                                <a href="{{url('search_product?cat=').$produt->category->slug}}" class="badge badge-primary" style="color: #fff!important;">{{$produt->category->name}}</a>
                                            @endforeach
                                        </div>

                                    </div>
                                </div>
                            @endforeach
                            <div class="text-center push">
                                <button type="button" class="btn btn-sm btn-light">View More..</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- END Main Container -->

    @endsection