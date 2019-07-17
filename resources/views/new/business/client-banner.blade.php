<div class="col-lg-12">
    <div class="content-wrapp">
        <div class="row">
            <div class="col-lg-12">
                <div class="content-covered">
                    <header style="overflow: hidden;">
                        <div id="example2" class="slider-pro">
                            <div class="sp-slides">
                                <div class="sp-slide">
                                    @if(is_file(public_path('uploads/banners/').'/'.$client->banner) && file_exists(public_path('uploads/banners/').'/'.$client->banner))
                                        <a href="{{url('public/uploads/banners').'/'.$client->banner}}">
                                            <img class="sp-image" src="{{url('public/uploads/banners').'/'.$client->banner}}"
                                                 data-src="{{url('public/uploads/banners').'/'.$client->banner}}"
                                                 data-retina="{{url('public/uploads/banners').'/'.$client->banner}}"/>
                                        </a>
                                    @else
                                        <a href="{{url('public/images/defaultImg/default_banner.jpg')}}">
                                            <img class="sp-image" src="{{url('public/images/defaultImg/default_banner.jpg')}}"
                                                 data-src="{{url('public/images/defaultImg/default_banner.jpg')}}"
                                                 data-retina="{{url('public/images/defaultImg/default_banner.jpg')}}"/>
                                        </a>
                                    @endif

                                </div>
                                @if(count($galleries)>0)
                                    @foreach($galleries as $gallery)
                                        <div class="sp-slide">
                                            <a href="{{url('public/uploads/client-gallery').'/'.$gallery->image}}">
                                                <img class="sp-image" src="{{url('public/uploads/client-gallery').'/'.$gallery->image}}"
                                                     data-src="{{url('public/uploads/client-gallery').'/'.$gallery->image}}"
                                                     data-retina="{{url('public/uploads/client-gallery').'/'.$gallery->image}}"/>
                                            </a>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="sp-slide">
                                        <a href="{{url('public/frontend/client/default/01.jpg')}}">
                                            <img class="sp-image" src="{{url('public/frontend/client/default/01.jpg')}}"
                                                 data-src="{{url('public/frontend/client/default/01.jpg')}}"
                                                 data-retina="{{url('public/frontend/client/default/01.jpg')}}"/>
                                        </a>
                                    </div>

                                    <div class="sp-slide">
                                        <a href="{{url('public/frontend/client/default/02.jpg')}}">
                                            <img class="sp-image" src="{{url('public/frontend/client/default/02.jpg')}}"
                                                 data-src="{{url('public/frontend/client/default/02.jpg')}}"
                                                 data-retina="{{url('public/frontend/client/default/02.jpg')}}"/>
                                        </a>
                                    </div>

                                    <div class="sp-slide">
                                        <a href="{{url('public/frontend/client/default/03.jpg')}}">
                                            <img class="sp-image" src="{{url('public/frontend/client/default/03.jpg')}}"
                                                 data-src="{{url('public/frontend/client/default/03.jpg')}}"
                                                 data-retina="{{url('public/frontend/client/default/03.jpg')}}"/>
                                        </a>
                                    </div>

                                    <div class="sp-slide">
                                        <a href="{{url('public/frontend/client/default/04.jpg')}}">
                                            <img class="sp-image" src="{{url('public/frontend/client/default/04.jpg')}}"
                                                 data-src="{{url('public/frontend/client/default/04.jpg')}}"
                                                 data-retina="{{url('public/frontend/client/default/04.jpg')}}"/>
                                        </a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </header>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="content-covered overview-wraped">
                    <div class="row">
                        <div class="col-2 logo-img">
                            @if(is_file(public_path('uploads/logos/').'/'.$client->logo) && file_exists(public_path('uploads/logos/').'/'.$client->logo))
                                <img src="{{url('public/uploads/logos/')}}/{{$client->logo}}" class="img-width-100">
                            @else
                                <img src="{{url('public/avatar0.jpg')}}" class="img-width-100" alt="Berry Lace Dress">
                            @endif
                        </div>
                        <div class="col-10">
                            <ul class="overview-listing info-detail">
                                <li><b><i class="fa fa-building-o"></i> {{$client->company_name}}</b></li>
                                <li><a href="{{url('search?location=').$client->company_address}}"><i class="fa fa-map-marked"></i> {{$client->company_address}}</a></li>
                                @if(isset($client->client_category[0]->category->name))<li><a href="{{url('search?cat=').$client->client_category[0]->category->slug}}" class="company_address"><i class="fa fa-briefcase"></i> {{str_limit($client->client_category[0]->category->name,29)}}</a></li>@endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
