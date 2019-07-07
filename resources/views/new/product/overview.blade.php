@extends('layouts.front')
@section('content')

    <!--------------- Product Overview Control -------------->
    <div class="row">
        <div class="col-lg-8">
            <div class="content-wrapp">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="content-covered">
                            <table class="table table-bordered table-striped">
                                <tr>
                                    <th>Company Name</th>
                                    <td>
                                        {{$products->product_name}}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Contact Person</th>
                                    <td>
                                        {{$products->contact_person}}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Contact Number</th>
                                    <td>
                                        {{$products->contact_no}}
                                    </td>
                                </tr>
                                <tr>
                                    <th>E-mail</th>
                                    <td>
                                        @if(isset($products->email)){{$products->email}} @else NA @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Address</th>
                                    <td>{{$products->address}}</td>
                                </tr>
                                <tr>
                                    <th>Website</th>
                                    <td>
                                        @if(isset($products->website)){{$products->website}} @else NA @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Details</th>
                                    <td>
                                        {!! $products->product_details !!}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Our Product</th>
                                    <td>
                                        @foreach($products->suppliers_product as $products)
                                            <a class="popular-cat-text" href="#"><small>{{$products->category->name}}</small></a>
                                        @endforeach
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="content-wrapp">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="content-covered">
                            <div class="content-header">
                                <h5 class="overview-heading left">Top Products</h5>
                            </div>
                            <div class="content-main">
                                @foreach($top_product as $product)
                                <div class="media d-flex align-items-center push" style="border-bottom: 1px solid lightgrey; padding:10px;">
                                    <div class="media-body">
                                        <div class="font-w600"><a style="color: #0189cc!important;" href="{{url('companyinfo').'/'.$ProductOverView = $product->slug}}">{{$product->product_name}}</a></div>
                                        <div class="font-size-sm">{{$product->address}}</div>
                                        <div class="font-size-sm">
                                            @foreach($product->top_product as $produt)
                                                <a href="{{url('search_product?cat=').$produt->category->slug}}" class="badge badge-primary" style="color: #fff!important;">{{$produt->category->name}}</a>
                                            @endforeach
                                        </div>

                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="text-center push">
                                <button type="button" class="btn btn-sm btn-light"><a href="{{url('search_product?')}}">View More..</a></button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--------------- Product Overview Control -------------->


    @endsection