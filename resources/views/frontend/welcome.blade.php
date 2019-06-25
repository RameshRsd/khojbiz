@extends('frontend.layouts.master')
@section('content')

    <!-- Main Container -->
    <div class="js-slider slick-nav-hover" data-dots="true" data-autoplay="true" data-arrows="true">
        @foreach($ads as $advertise)
            <div class="block">
                <img class="img-fluid kb_banners" src="{{url('public/uploads/adverts/').'/'.$advertise->image}}" alt="">
            </div>
        @endforeach
    </div>
    <div class="container">
        <div class="row">
            <div class="khoj_search_bar" style="margin-top: -250px; z-index: 111;margin-left: 300px;">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <img class="img-fluid" src="{{url('public/images/defaultImg/logo_khoj.png')}}" alt="" style="margin-left: -30px;">
                    </div>
                </div>
                <form class="form-inline" action="{{url('search')}}" method="get">
                    <input class="form-control keyword" type="search" name="keyword" placeholder="Search" style="margin-right: -20px; width: 300px">
                    <input class="form-control search" type="search" name="location" placeholder="Search By Location" style="width: 200px">
                    <button class="btn btn-submit" type="submit">Search</button>
                </form>
            </div>
        </div>
    </div>
    <main id="container-fluid">
        <!--Category Slider Start-->
        <div class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="kb_f_pro">
                        <b> <p>Business Search by Alphabetically</p></b>
                        @php $alphas = \App\Alphabate::orderBy('name')->get(); @endphp
                        @foreach($alphas as $alpha)
                        <a href="{{url('browse-by-alphabates').'/list_'.$alpha->name}}">{{$alpha->name}}</a>
                            @endforeach
                    </div>
                </div>
                <div class="content f_k_b_li">
                    <div class="top_feature_heading">
                        <h3>Top Search </h3>
                    </div>
                    <div class="p_list">
                        <div class="row">
                            @foreach($client as $clients)
                                <div class="col-md-3">
                                    <div class="product-item" title="{{$clients->company_name}}">
                                        <div class="pi-img-wrapper">
                                            @if(is_file(public_path('uploads/banners/').'/'.$clients->banner) && file_exists(public_path('uploads/banners/').'/'.$clients->banner))
                                                <img src="{{url('public/uploads/banners/')}}/{{$clients->banner}}" class="img-responsive" alt="Berry Lace Dress">
                                            @else
                                                <img src="{{url('public/images/defaultImg/default_banner.jpg')}}" class="img-responsive" alt="Berry Lace Dress">
                                            @endif
                                            <div>
                                                <a href="{{url('').'/'.$ClientOverView = $clients->user->name}}" class="btn" title="{{$clients->company_name}}">View Details</a>
                                            </div>
                                        </div>
                                        <div class="kb_c_name">
                                            <h2 class="product_title" title="{{$clients->company_name}}"><a href="{{url('').'/'.$ClientOverView = $clients->user->name}}" title="{{$clients->company_name}}">{{str_limit($clients->company_name,80)}}</a></h2>
                                            <div class="pi-price" title="{{$clients->company_address}}"><i class="fa fa-map-marker" title="{{$clients->company_address}}"></i> {{$clients->company_address}}</div>
                                            <div class="clearfix"></div>
                                        </div>
                                        @if(date('Y-m',strtotime($clients->created_at)) == date('Y-m'))
                                        <div class="sticker sticker-new"></div>
                                            @endif
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- END Slider with Avatars -->
            </div>
        </div>
        <!--Category Slider Start-->
    <!--Category Slider Start-->
        <div class="content">
            <div class="row">
                <div class="col-md-9">
                    <div class="top_feature">
                        <h4>Featured Category</h4>
                    </div>
                    <div class="block">
                        <div class="">
                            <div class="js-slider text-center" data-autoplay="true" data-dots="true" data-arrows="true" data-slides-to-show="4">
                                @foreach($category as $categories)
                                    <a href="{{url('search?cat=').$categories->slug}}">
                                        <div class="py-3 category_icon_k">
                                            @if(is_file(public_path('uploads/icon/').'/'.$categories->icon) && file_exists(public_path('uploads/icon/').'/'.$categories->icon))
                                                <img class="img-avatar_cat" src="{{url('public/uploads/icon/').'/'.$categories->icon}}" alt="">
                                            @else
                                                <img class="img-avatar_cat" src="{{url('public/images/defaultImg/logo.png')}}" alt="">
                                            @endif
                                            <div class="mt-2 font-w600 cat_color">{{str_limit($categories->name,15)}}</div>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    {{--Product List--}}
                </div>
                <div class="col-md-3">
                    <div class="top_feature">
                        <h4>Featured Ads</h4>
                    </div>
                    <!-- Tiles Slider 3 -->
                    <div class="js-slider slick-nav-hover" data-dots="true" data-autoplay="true" data-arrows="true">
                        @foreach($side_ads as $ads)
                            <div class="block text-center mb-0">
                                <div class="ads_img_khoj">
                                    <img class="img-fluid" src="{{url('public/uploads/adverts/').'/'.$ads->image}}" alt="">
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- END Tiles Slider 3 -->
                </div>
                <!-- END Slider with Avatars -->
            </div>
        </div>
        <!--Category Slider Start-->
        {{----}}
        <div class="kb_d_ad">
            <div class="content kb_d_ad">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Tiles Slider 3 -->
                        <div class="js-slider slick-nav-hover" data-dots="true" data-autoplay="true" data-arrows="true">
                            @foreach($feature_ads as $ads)
                                <div class="block text-center mb-0">
                                    <div class="ads_img_khoj_full">
                                        <img class="img-fluid" src="{{url('public/uploads/adverts/').'/'.$ads->image}}" alt="">
                                        {{--<img class="img-fluid" src="{{url('public/uploads/adverts/').'/'.$ads->image}}" alt="">--}}
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!-- END Tiles Slider 3 -->
                    </div>
                </div>
            </div>
        </div>
        {{----}}
        {{----}}
        <div class="kb_product_f">
            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="kb_f_pro">
                            <p> <b>Manufacture By Alphabetically</b></p>
                            @php $alphas = \App\Alphabate::orderBy('name')->get(); @endphp
                            @foreach($alphas as $alpha)
                                <a href="{{url('manufacturers-browse-by-alphabet').'/list_'.$alpha->name}}">{{$alpha->name}}</a>
                            @endforeach
                        </div>
                    </div>
                    <div class="content f_k_b_li">
                        <div class="top_feature_heading">
                            <h3>Featured Manufacture</h3>
                        </div>
                        <div class="p_list">

                            <div class="row">
                                @foreach($manufacture_client as $clients)
                                    <div class="col-md-3">
                                        <div class="product-item">
                                            <div class="pi-img-wrapper">
                                                @if(is_file(public_path('uploads/manufacture/banners/').'/'.$clients->banner) && file_exists(public_path('uploads/manufacture/banners/').'/'.$clients->banner))
                                                <img class="p_list_de img-responsive" style="background-image: url('{{url('public/uploads/manufacture/banners/')}}/{{$clients->banner}}');">
                                                @else
                                                    <img src="{{url('public/images/defaultImg/002.jpg')}}" class="img-responsive" alt="{{$clients->company_name}}">
                                                @endif
                                                <div>
                                                    {{--<a href="#" class="btn">Zoom</a>--}}
                                                    <a href="{{url('').'/'.$ManufactureOverView = $clients->user->name}}" class="btn" title="{{$clients->company_name}}">View Details</a>
                                                </div>
                                            </div>
                                            <div class="kb_c_name">
                                                <h2 class="product_title" title="{{$clients->company_name}}"><a href="{{url('manufacturers').'/'.$ManufactureOverView = $clients->slug}}" title="{{$clients->company_name}}">{{str_limit($clients->company_name,80)}}</a></h2>
                                                <div class="pi-price" title="{{$clients->company_address}}"><i class="fa fa-map-marker" {{$clients->company_address}}></i> {{$clients->company_address}}</div>
                                                <div class="clearfix"></div>
                                            </div>
                                            @if(date('Y-m',strtotime($clients->created_at)) == date('Y-m'))
                                                <div class="sticker sticker-new"></div>
                                            @endif
                                        </div>
                                    </div>

                                    {{--<div class="col-md-3">--}}
                                        {{--<a href="{{url('').'/'.$ClientOverView = $clients->slug}}">--}}
                                            {{--<div class="p_list_de_im">--}}
                                                {{--@if(is_file(public_path('uploads/banners/').'/'.$clients->banner) && file_exists(public_path('uploads/banners/').'/'.$clients->banner))--}}
                                                    {{--<img class="p_list_de img-responsive" style="background-image: url('{{url('public/uploads/banners/')}}/{{$clients->banner}}');">--}}
                                                {{--@else--}}
                                                    {{--<img class="p_list_de img-responsive" style="background-image: url('{{url('public/images/defaultImg/default_banner.jpg')}}">--}}
                                                {{--@endif--}}
                                                {{--<button type="button" class="btn btn-sm btn-primary btn-block" data-toggle="popover" data-placement="top" title="Location: {{$clients->company_address}}" data-content="Contact Number: {{$clients->mobile}},{{$clients->ofc_tel_no}}">{{$clients->company_name}}</button>--}}
                                            {{--</div>--}}
                                        {{--</a>--}}
                                    {{--</div>--}}

                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{----}}
        {{----}}
        <div class="kb_product_f">
            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="kb_f_pro">
                            <p> <b>Product By Alphabetically</b></p>
                            @php $alphas = \App\Alphabate::orderBy('name')->get(); @endphp
                            @foreach($alphas as $alpha)
                                <a href="{{url('product-by-alpha').'/list_'.$alpha->name}}">{{$alpha->name}}</a>
                            @endforeach
                        </div>
                    </div>
                    <div class="content f_k_b_li">
                        <div class="top_feature_heading">
                            <h3>Featured Product</h3>
                        </div>
                        <div class="p_list">
                            <div class="row">
                                @foreach($products as $product)
                                    <div class="col-md-3">
                                        <div class="product-item">
                                            <div class="pi-img-wrapper">
                                                @if(is_file(public_path('uploads/product/feature/').'/'.$product->feature) && file_exists(public_path('uploads/product/feature/').'/'.$product->feature))
                                                    <img class="p_list_de img-responsive" style="background-image: url('{{url('public/uploads/product/feature/')}}/{{$product->feature}}');">
                                                @else
                                                    <img src="{{url('public/images/defaultImg/002.jpg')}}" class="img-responsive" alt="{{$product->company_name}}">
                                                @endif
                                                <div>
                                                    {{--<a href="#" class="btn">Zoom</a>--}}
                                                    <a href="{{url('companyinfo').'/'.$ProductOverView = $product->slug}}" class="btn" title="{{$product->product_name}}">View Details</a>
                                                </div>
                                            </div>
                                            <div class="kb_p_name">
                                                <h2 class="products_title" title="{{$product->company_name}}"><a href="{{url('manufacturers').'/'.$ManufactureOverView = $product->slug}}" title="{{$product->company_name}}" class="product_title">{{str_limit($product->product_name,80)}}</a></h2>
                                                <div class="clearfix"></div>
                                            </div>
                                            @if(date('Y-m',strtotime($product->created_at)) == date('Y-m'))
                                                <div class="sticker sticker-new"></div>
                                            @endif
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{----}}

        <div class="t_f_c_lis">
           <div class="content feature_search_kb">
               <div class="row">
                   <div class="col-md-12">
                       <div class="top_feature">
                           <h4>Find Locations</h4>
                       </div>
                       <div class="block">
                           <div class="block-content fe_cli_logo_all">
                               <form action="{{url('places')}}" method="get">
                                   <div class="row">
                                       <div class="col-5">
                                           <input type="text" class="form-control" id="place_name"  name="place_name" placeholder="Type Place Name">
                                       </div>
                                       <div class="col-5">
                                           <select type="text" class="form-control" id="place_category" name="place_category">
                                               <option value="">Choose Category..</option>
                                               @foreach($location_categories as $location_category)
                                                   <option value="{{$location_category->slug}}">{{$location_category->name}}</option>
                                                   @endforeach
                                           </select>
                                       </div>
                                       <div class="col-2">
                                           <button class="btn btn-submit pull-right" type="submit">Search</button>
                                       </div>
                                       <div class="col-md-12">
                                           <div class="kb_f_pro" style="margin-top: 10px; margin-bottom: -10px;">
                                               <b><p><strong style="color: dodgerblue">OR</strong> Short By</p> </b>
                                               @php $alphas = \App\Alphabate::orderBy('name')->get(); @endphp
                                               @foreach($alphas as $alpha)
                                                   <a href="{{url('places?short_by=').$alpha->name}}">{{$alpha->name}}</a>
                                               @endforeach
                                           </div>
                                       </div>
                                   </div>
                               </form>
                           </div>
                       </div>
                       {{--Product List--}}
                   </div>
                   <div class="content f_k_b_li">
                       <div class="top_feature_heading">
                           <h3>Top Search </h3>
                       </div>
                       <div class="p_list">

                           <div class="row">
                               @foreach($locations as $location)
                                   <div class="col-md-3">
                                       <div class="product-item">
                                           <div class="pi-img-wrapper">
                                               @if(is_file(public_path('uploads/location_image/').'/'.$location->image) && file_exists(public_path('uploads/location_image/').'/'.$location->image))
                                                   <img class="p_list_de img-responsive" style="background-image: url('{{url('public/uploads/location_image/')}}/{{$location->image}}');">
                                               @else
                                                   <img src="{{url('public/images/defaultImg/002.jpg')}}" class="img-responsive" alt="{{$location->name}}">
                                               @endif
                                               <div>
                                                   {{--<a href="#" class="btn">Zoom</a>--}}
                                                   <a href="{{url('top-location').'/'.$LocationOverView = $location->slug}}" class="btn" title="{{$location->company_name}}">View Details</a>
                                               </div>
                                           </div>
                                           <div class="kb_c_name">
                                               <h2 class="product_title" title="{{$location->name}}"><a href="{{url('top-location').'/'.$locationOverView = $location->slug}}" title="{{$location->name}}">{{str_limit($location->name,80)}}</a></h2>
                                               <div class="pi-price" title="{{$location->address}}"><i class="fa fa-map-marker" {{$location->address}}></i> {{$location->address}}</div>
                                               <div class="clearfix"></div>
                                           </div>
                                           @if(date('Y-m',strtotime($location->created_at)) == date('Y-m'))
                                               <div class="sticker sticker-new"></div>
                                           @endif
                                       </div>
                                   </div>

                                   {{--<div class="col-md-3">--}}
                                   {{--<a href="{{url('').'/'.$ClientOverView = $clients->slug}}">--}}
                                   {{--<div class="p_list_de_im">--}}
                                   {{--@if(is_file(public_path('uploads/banners/').'/'.$clients->banner) && file_exists(public_path('uploads/banners/').'/'.$clients->banner))--}}
                                   {{--<img class="p_list_de img-responsive" style="background-image: url('{{url('public/uploads/banners/')}}/{{$clients->banner}}');">--}}
                                   {{--@else--}}
                                   {{--<img class="p_list_de img-responsive" style="background-image: url('{{url('public/images/defaultImg/default_banner.jpg')}}">--}}
                                   {{--@endif--}}
                                   {{--<button type="button" class="btn btn-sm btn-primary btn-block" data-toggle="popover" data-placement="top" title="Location: {{$clients->company_address}}" data-content="Contact Number: {{$clients->mobile}},{{$clients->ofc_tel_no}}">{{$clients->company_name}}</button>--}}
                                   {{--</div>--}}
                                   {{--</a>--}}
                                   {{--</div>--}}

                               @endforeach
                           </div>
                       </div>
                   </div>
               </div>
           </div>
        </div>
        {{----}}
        <div class="kb_product_f">
            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="kb_f_pro">
                            <p> <b>Website By Alphabetically</b></p>
                            @php $alphas = \App\Alphabate::orderBy('name')->get(); @endphp
                            @foreach($alphas as $alpha)
                                <a href="{{url('web-by-alpha').'/list_'.$alpha->name}}">{{$alpha->name}}</a>
                            @endforeach
                        </div>
                    </div>
                    <div class="content f_k_b_li">
                        <div class="top_feature_heading">
                            <h3>Featured Website</h3>
                            <a href="" class="text-right">More</a>
                        </div>
                        <div class="p_list">
                            <div class="row">
                                @foreach($products as $product)
                                    <div class="col-md-3">
                                        <div class="product-item">
                                            <div class="pi-img-wrapper">
                                                @if(is_file(public_path('uploads/product/feature/').'/'.$product->feature) && file_exists(public_path('uploads/product/feature/').'/'.$product->feature))
                                                    <img class="p_list_de img-responsive" style="background-image: url('{{url('public/uploads/product/feature/')}}/{{$product->feature}}');">
                                                @else
                                                    <img src="{{url('public/images/defaultImg/002.jpg')}}" class="img-responsive" alt="{{$product->company_name}}">
                                                @endif
                                                <div>
                                                    {{--<a href="#" class="btn">Zoom</a>--}}
                                                    <a href="{{url('companyinfo').'/'.$ProductOverView = $product->slug}}" class="btn" title="{{$product->product_name}}">View Details</a>
                                                </div>
                                            </div>
                                            <div class="kb_p_name">
                                                <h2 class="products_title" title="{{$product->company_name}}"><a href="{{url('manufacturers').'/'.$ManufactureOverView = $product->slug}}" title="{{$product->company_name}}" class="product_title">{{str_limit($product->product_name,80)}}</a></h2>
                                                <div class="clearfix"></div>
                                            </div>
                                            @if(date('Y-m',strtotime($product->created_at)) == date('Y-m'))
                                                <div class="sticker sticker-new"></div>
                                            @endif
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{----}}

    </main>
    <!-- END Main Container -->

    @endsection
{{--@section('script')--}}
    {{--<script type="text/javascript">--}}
        {{--$('#place_name').autocomplete({--}}
            {{--source:'{{url('place_name')}}',--}}
            {{--minlength:1,--}}
            {{--autoFocus:true,--}}
            {{--select:function(e,ui)--}}
            {{--{--}}
                {{--$('#place_name').val(ui.item.value);--}}
            {{--}--}}
        {{--});--}}
    {{--</script>--}}

{{--@endsection--}}