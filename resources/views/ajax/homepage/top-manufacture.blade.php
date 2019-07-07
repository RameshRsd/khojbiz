<div class="row">
    <div class="col-lg-12">
        <div class="content-covered">
            <div class="content-header">
                <h5 class="alphabate-heading">Top Manufacture Companies <hr></h5>
            </div>
            <div class="content-main">
                <div class="row">
                    @foreach($clients as $client)
                        <div class="col-lg-3">

                                <div class="content-manage-section">
                                    <a href="{{url('').'/'.$client->user->name}}">
                                    <div class="content-image-thumbnail">
                                        @if(is_file(public_path('uploads/manufacture/banners/').'/'.$client->banner) && file_exists(public_path('uploads/manufacture/banners/').'/'.$client->banner))
                                            <img src="{{url('public/uploads/manufacture/banners/')}}/{{$client->banner}}" class="img-width-100">
                                        @else
                                            <img src="{{url('public/images/defaultImg/default_banner.jpg')}}" class="img-width-100" alt="Berry Lace Dress">
                                        @endif
                                    </div>
                                    </a>
                                    <div class="content-details">
                                        <div class="row">
                                            <div class="col-3 logo-img">
                                                @if(is_file(public_path('uploads/manufacture/logos/').'/'.$client->logo) && file_exists(public_path('uploads/manufacture/logos/').'/'.$client->logo))
                                                    <img src="{{url('public/uploads/manufacture/logos/')}}/{{$client->logo}}" class="img-width-100">
                                                @else
                                                    <img src="{{url('public/avatar0.jpg')}}" class="img-width-100" alt="Berry Lace Dress">
                                                @endif
                                            </div>
                                            <div class="col-9 content-padding">
                                                <ul class="content-title">
                                                    <li><a href="{{url('').'/'.$client->user->name}}" class="company_title"><i class="fa fa-building-o"></i> {{str_limit($client->company_name,23)}}</a></li>
                                                    <li><a href="{{url('search-manufacture?location=').$client->company_address}}" class="company_address"><i class="fa fa-map-marked"></i> {{str_limit($client->company_address,29)}}</a></li>
                                                    @if(count($client->client_category)>0)<li><a href="#" class="company_address"><i class="fa fa-briefcase"></i> {{str_limit($client->client_category[0]->category->name,29)}}</a></li>@endif
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
