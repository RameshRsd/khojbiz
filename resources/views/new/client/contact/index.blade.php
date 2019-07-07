@extends('layouts.front')
@section('content')
    <!--------------- Overview section -------------->
    <div class="row">
        <div class="col-lg-8">
            <div class="row">
                <div class="col-lg-12">
                    <div class="content-wrapp">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="content-covered">
                                    <div class="content-header">
                                        <h5 class="overview-heading left">Querty From Visitors</h5>
                                    </div>
                                    <div class="content-main">
                                        <table class="table table-bordered table-striped">
                                            <thead>
                                            <tr>
                                                <th>SN</th>
                                                <th>Messages By</th>
                                                <th>Mobile</th>
                                                <th>Email</th>
                                                <th>Details</th>
                                                <th>Date</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($queries as $key=>$notice)
                                                <tr>
                                                    <td>{{++$key}}</td>
                                                    <td>{{$notice->name}}</td>
                                                    <td>{{$notice->mobile}}</td>
                                                    <td>{{$notice->email}}</td>
                                                    <td>{{$notice->details}}</td>
                                                    <td>{{date('d,M,Y',strtotime($notice->created_at))}}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
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
                            <div class="content-main">
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
                                            <div class="col-3">
                                                @if(is_file(public_path('uploads/logos/').'/'.$client->logo) && file_exists(public_path('uploads/logos/').'/'.$client->logo))
                                                    <img src="{{url('public/uploads/logos/')}}/{{$client->logo}}" class="img-width-100">
                                                @else
                                                    <img src="{{url('public/avatar0.jpg')}}" class="img-width-100" alt="Berry Lace Dress">
                                                @endif
                                            </div>
                                            <div class="col-9">
                                                <ul class="content-title">
                                                    <li><a href="{{url('').'/'.$client->user->name}}" class="company_title"><i class="fa fa-building-o"></i> {{$client->company_name}}</a></li>
                                                    <li><a href="{{url('search?location=').$client->company_address}}" class="company_address"><i class="fa fa-map-marked"></i> {{$client->company_address}}</a></li>
                                                    @if(count($client->client_category)>0)<li><a href="{{url('search?cat=').$client->client_category[0]->category->slug}}" class="company_address"><i class="fa fa-briefcase"></i> {{str_limit($client->client_category[0]->category->name,29)}}</a></li>@endif
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--------------- Overview section -------------->
    @endsection