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



    <!----------- Search Listing --------------->
    <div class="content-wrapp" id="search-listing">
        <div class="row">
            <div class="col-lg-9">
                <div class="content-covered">
                    <div class="content-header">
                        <h5 class="alphabate-heading">Top Companies<hr></h5>
                    </div>
                    <div class="content-main">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="accordion" id="accordionExample">
                                        <div class="card">
                                        <div class="card-header">
                                            <h2 class="mb-0">
                                                <button class="btn">
                                                    <h5>Filter Your Search</h5>
                                                </button>
                                            </h2>
                                        </div>
                                    </div>
                                        <form action="{{url('search')}}" method="get">
                                            {{--@if(request('page'))--}}
                                                {{--<input type="hidden" name="page" value="{{request('page')}}">--}}
                                                {{--@endif--}}
                                            <div class="card">
                                                    <div class="card-header" id="headingOne">
                                                        <h2 class="mb-0">
                                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                                Keyword
                                                            </button>
                                                        </h2>
                                                    </div>

                                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                        <div class="card-body">
                                                            <input type="text" name="keyword" class="form-control" value="{{request('keyword')}}" placeholder="Search By Keyword" onchange="javascript:this.form.submit();">
                                                        </div>
                                                    </div>
                                                </div>
                                            <div class="card">
                                                <div class="card-header" id="headingTwo">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                            Sort By Alphabate
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        @php $alphas = \App\Alphabate::orderBy('name')->get(); @endphp
                                                        @foreach($alphas as $alpha)
                                                            <li><a href="{{url('search?alphabate=').$alpha->name}}" class="alphabate @if(request('alphabate')==$alpha->name) active @endif">{{$alpha->name}}</a></li>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </form>

                                    {{--<div class="card">--}}
                                            {{--<div class="card-header" id="headingThree">--}}
                                                {{--<h2 class="mb-0">--}}
                                                    {{--<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">--}}
                                                        {{--Collapsible Group Item #3--}}
                                                    {{--</button>--}}
                                                {{--</h2>--}}
                                            {{--</div>--}}
                                            {{--<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">--}}
                                                {{--<div class="card-body">--}}
                                                    {{--Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="row">
                                    @if(count($clients)>0)
                                    @foreach($clients as $client)
                                        <div class="col-lg-6">

                                            <div class="content-manage-section">
                                                <a href="{{url('').'/'.$client->user->name}}">
                                                    <div class="content-image-thumbnail">
                                                        @if(is_file(public_path('uploads/banners/').'/'.$client->banner) && file_exists(public_path('uploads/banners/').'/'.$client->banner))
                                                            <img src="{{url('public/uploads/banners/')}}/{{$client->banner}}" class="img-width-100">
                                                        @else
                                                            <img src="{{url('public/images/defaultImg/default_banner.jpg')}}" class="img-width-100" alt="Berry Lace Dress">
                                                        @endif
                                                    </div>
                                                </a>
                                                <div class="content-details">
                                                    <div class="row">
                                                        <div class="col-3 logo-img">
                                                            @if(is_file(public_path('uploads/logos/').'/'.$client->logo) && file_exists(public_path('uploads/logos/').'/'.$client->logo))
                                                                <img src="{{url('public/uploads/logos/')}}/{{$client->logo}}" class="img-width-100">
                                                            @else
                                                                <img src="{{url('public/avatar0.jpg')}}" class="img-width-100" alt="Berry Lace Dress">
                                                            @endif
                                                        </div>
                                                        <div class="col-9 content-padding">
                                                            <ul class="content-title">
                                                                <li><a href="{{url('').'/'.$client->user->name}}" class="company_title"><i class="fa fa-building-o"></i> {{str_limit($client->company_name,20)}}</a></li>
                                                                <li><a href="#" class="company_address"><i class="fa fa-map-marked"></i> {{str_limit($client->company_address,29)}}</a></li>
                                                                @if(isset($client->client_category[0]->category->name))<li><a href="#" class="company_address"><i class="fa fa-briefcase"></i> {{str_limit($client->client_category[0]->category->name,29)}}</a></li>@endif
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                        {{$clients->appends(['alphabate'=>request('alphabate')])->appends(['keyword'=>request('keyword')])->links()}}
                                        @else
                                        <small>Record Not Found !!</small>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">

            </div>
        </div>

    </div>
    <!----------- Search Listing --------------->



@endsection