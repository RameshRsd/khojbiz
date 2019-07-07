<div class="row">
    <div class="col-lg-12">
        <div class="content-covered">
            <div class="content-header">
                <h5 class="alphabate-heading">Top Products Companies <hr></h5>
            </div>
            <div class="content-main">
                <div class="row">
                    @foreach($clients as $client)
                        <div class="col-lg-3">

                                <div class="content-manage-section">
                                    <a href="{{url('companyinfo').'/'.$client->slug}}">
                                    <div class="content-image-thumbnail">
                                        @if(is_file(public_path('uploads/product/feature').'/'.$client->feature) && file_exists(public_path('uploads/product/feature/').'/'.$client->feature))
                                            <img src="{{url('public/uploads/product/feature/')}}/{{$client->feature}}" class="img-width-100">
                                        @else
                                            <img src="{{url('public/images/defaultImg/default_banner.jpg')}}" class="img-width-100" alt="Berry Lace Dress">
                                        @endif
                                    </div>
                                    </a>
                                    <div class="content-details">
                                        <div class="row">
                                            <div class="col-12">
                                                <ul class="content-title">
                                                    <li><a href="{{url('companyinfo').'/'.$client->slug}}" class="company_title"><i class="fa fa-building-o"></i> {{str_limit($client->product_name,23)}}</a></li>
                                                    <li><a href="#" class="company_address"><i class="fa fa-map-marked"></i> {{str_limit($client->address,29)}}</a></li>
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
