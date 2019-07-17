@extends('layouts.front')
@section('content')

    <!--------------- Advert Control -------------->
    <div class="content-wrapp">

        <div class="row">
            <div class="col-lg-12">
                <div class="content-covered">
                    <div class="content-header" style="text-align: left;">
                        <div class="nav-head">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{url('')}}">Home</a></li>
                                    <li class="breadcrumb-item"><a href="{{url('blogs')}}">Blogs</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">{{$blog->title}}</li>
                                </ol>
                            </nav>
                            <hr>
                        </div>
                        <h5>{{$blog->title}}</h5>
                        <i class="fa fa-calendar-times-o"> {{date('Y-m-d H:i:s',strtotime($blog->created_at))}}</i>
                        <hr>
                    </div>
                    <div class="content-main">
                        <div class="row">
                            <div class="col-lg-12">
                                @if(is_file(public_path('uploads/blog').'/'.$blog->image) && file_exists(public_path('uploads/blog').'/'.$blog->image))
                                    <img src="{{url('public/uploads/blog')}}/{{$blog->image}}" class="img-width-100">
                                @else
                                    <img src="{{url('public/images/defaultImg/default_banner.jpg')}}" class="img-width-100" alt="Berry Lace Dress">
                                @endif
                            </div>
                            <div class="col-lg-12" style="margin-top:15px;">
                                {!! $blog->details !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--------------- Advert Control -------------->


@endsection