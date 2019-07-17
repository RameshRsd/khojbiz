@extends('layouts.front')
@section('content')

    <!--------------- Advert Control -------------->
    <div class="content-wrapp">

        <div class="row">
            <div class="col-lg-12">
                <div class="content-covered">
                    <div class="content-header">
                        <h5 class="alphabate-heading">Blogs<hr></h5>
                    </div>
                    <div class="content-main">
                        <div class="row">
                            @foreach($blogs as $blog)
                                <div class="col-lg-3">

                                    <div class="content-manage-section">
                                        <a href="{{url('blog').'/'.$blog->id}}">
                                            <div class="content-image-thumbnail">
                                                @if(is_file(public_path('uploads/blog').'/'.$blog->image) && file_exists(public_path('uploads/blog').'/'.$blog->image))
                                                    <img src="{{url('public/uploads/blog')}}/{{$blog->image}}" class="img-width-100">
                                                @else
                                                    <img src="{{url('public/images/defaultImg/default_banner.jpg')}}" class="img-width-100" alt="Berry Lace Dress">
                                                @endif
                                            </div>
                                        </a>
                                        <div class="content-details">
                                            <div class="row">
                                                <div class="col-12">
                                                    <ul class="content-title">
                                                        <li><a href="{{url('blog').'/'.$blog->id}}" class="company_title">{{str_limit($blog->title,23)}}</a></li>
                                                        <li>{{date('Y-m-d H:i:s',strtotime($blog->created_at))}}</li>
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

    </div>
    <!--------------- Advert Control -------------->


@endsection