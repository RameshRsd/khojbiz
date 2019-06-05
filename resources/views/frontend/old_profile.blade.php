@extends('frontend.layouts.master')
@section('content')
<div class="profile_khoj_biz">
    <!-- Hero -->
    <div class="js-slider slick-nav-hover" data-dots="true" data-autoplay="true" data-arrows="true">
        <div class="profile_list_img block">
            @if(is_file(public_path('uploads/banners/').'/'.$client->banner) && file_exists(public_path('uploads/banners/').'/'.$client->banner))
                <img class="img-fluid" src="{{url('public/uploads/banners/').'/'.$client->banner}}" alt="" width="100%" height="200px">
            @else
                <img class="img-fluid" src="{{url('public/uploads/list_ads/banner_ads.png')}}" alt="" width="100%">
            @endif
        </div>
    </div>
    <!-- END Hero -->
    <div class="content content-full text-center">
        <div class="my-3">
            @if(is_file(public_path('uploads/logos/').'/'.$client->logo) && file_exists(public_path('uploads/logos/').'/'.$client->logo))
                <img class="img-avatar img-avatar-thumb" src="{{url('public/uploads/logos/').'/'.$client->logo}}" alt="">
            @else
                <img class="img-avatar" src="{{url('public/images/defaultImg/logo.png')}}" alt="">
            @endif
        </div>
        <h1 class="h2 text-white mb-0">{{$client->company_name}}</h1>
        <span class="text-white">{{$client->company_address}}</span>
    </div>
</div>
    <!-- Main Container -->
    <main id="container">
        <!-- Page Content -->
        <div class="content">
            <div class="row">
                <div class="col-md-9">
                        <!-- Results -->
                        <div class="block">
                            <ul class="nav nav-tabs nav-tabs-block" data-toggle="tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#about-us">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#profile">Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#product-service">Product & Service</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#search-photos">Image Gallery</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#search-photos">Contact Us</a>
                                </li>
                            </ul>
                            <div class="block-content tab-content overflow-hidden">
                                <!-- Projects -->
                                <div class="tab-pane fade fade-up show active" id="about-us" role="tabpanel">
                                    <div class="font-size-h4 font-w600 p-2 mb-4 border-left border-4x border-primary bg-body-light">
                                        <span class="text-primary font-w700">About</span>Us <mark class="text-danger"></mark>
                                    </div>
                                    {!! $client->company_profile !!}
                                </div>
                                <!-- END Projects -->

                                <!-- Users -->
                                <div class="tab-pane fade fade-up" id="profile" role="tabpanel">
                                    <div class="font-size-h4 font-w600 p-2 mb-4 border-left border-4x border-primary bg-body-light">
                                        <span class="text-primary font-w700">Pro</span>file
                                    </div>
                                   <p>
                                      Update...
                                   </p>
                                </div>
                                <!-- END Users -->

                                <!-- Classic -->
                                <div class="tab-pane fade fade-up" id="product-service" role="tabpanel">
                                    <div class="font-size-h4 font-w600 p-2 mb-4 border-left border-4x border-primary bg-body-light">
                                        <span class="text-primary font-w700">Up</span>da<mark class="text-danger">te ..</mark>
                                    </div>
                                    <div class="row py-3">
                                        <div class="col-lg-6">
                                            <h4 class="h5 mb-1">
                                                <a href="javascript:void(0)">{{$client->company_name}}</a>
                                            </h4>
                                            <div class="font-size-sm text-success mb-1">{{$client->website}}</div>
                                            <p class="font-size-sm text-muted">
                                                {!! $client->company_profile !!}
                                            </p>
                                        </div>
                                        <div class="col-lg-6">
                                            <h4 class="h5 mb-1">
                                                <a href="javascript:void(0)">{{$client->company_name}}</a>
                                            </h4>
                                            <div class="font-size-sm text-success mb-1">{{$client->website}}</div>
                                            <p class="font-size-sm text-muted">
                                                {!! $client->company_profile !!}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- END Classic -->

                                <!-- Photos -->
                                <div class="tab-pane fade fade-up" id="search-photos" role="tabpanel">
                                    <div class="font-size-h4 font-w600 p-2 mb-4 border-left border-4x border-primary bg-body-light">
                                        <span class="text-primary font-w700">85</span> photos found for <mark class="text-danger">wallpaper</mark>
                                    </div>
                                    <div class="row gutters-tiny push">
                                        <div class="col-md-6 col-lg-4 col-xl-3 push">
                                            <img class="img-fluid" src="assets/media/photos/photo1.jpg" alt="">
                                        </div>
                                        <div class="col-md-6 col-lg-4 col-xl-3 push">
                                            <img class="img-fluid" src="assets/media/photos/photo2.jpg" alt="">
                                        </div>
                                        <div class="col-md-6 col-lg-4 col-xl-3 push">
                                            <img class="img-fluid" src="assets/media/photos/photo6.jpg" alt="">
                                        </div>
                                        <div class="col-md-6 col-lg-4 col-xl-3 push">
                                            <img class="img-fluid" src="assets/media/photos/photo21.jpg" alt="">
                                        </div>
                                        <div class="col-md-6 col-lg-4 col-xl-3 push">
                                            <img class="img-fluid" src="assets/media/photos/photo22.jpg" alt="">
                                        </div>
                                        <div class="col-md-6 col-lg-4 col-xl-3 push">
                                            <img class="img-fluid" src="assets/media/photos/photo9.jpg" alt="">
                                        </div>
                                        <div class="col-md-6 col-lg-4 col-xl-3 push">
                                            <img class="img-fluid" src="assets/media/photos/photo23.jpg" alt="">
                                        </div>
                                        <div class="col-md-6 col-lg-4 col-xl-3 push">
                                            <img class="img-fluid" src="assets/media/photos/photo24.jpg" alt="">
                                        </div>
                                        <div class="col-md-6 col-lg-4 col-xl-3 push">
                                            <img class="img-fluid" src="assets/media/photos/photo25.jpg" alt="">
                                        </div>
                                        <div class="col-md-6 col-lg-4 col-xl-3 push">
                                            <img class="img-fluid" src="assets/media/photos/photo27.jpg" alt="">
                                        </div>
                                        <div class="col-md-6 col-lg-4 col-xl-3 push">
                                            <img class="img-fluid" src="assets/media/photos/photo28.jpg" alt="">
                                        </div>
                                        <div class="col-md-6 col-lg-4 col-xl-3 push">
                                            <img class="img-fluid" src="assets/media/photos/photo30.jpg" alt="">
                                        </div>
                                    </div>
                                    <nav aria-label="Photos Search Navigation">
                                        <ul class="pagination pagination-sm">
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:void(0)" tabindex="-1" aria-label="Previous">
                                                    Prev
                                                </a>
                                            </li>
                                            <li class="page-item active">
                                                <a class="page-link" href="javascript:void(0)">1</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:void(0)">2</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:void(0)">3</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:void(0)">4</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:void(0)" aria-label="Next">
                                                    Next
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <!-- END Photos -->
                            </div>
                        </div>
                        <!-- END Results -->
                    </div>
                    <!-- END Advanced Gallery -->
                <div class="col-md-3">
                    <div class="block">
                        <div class="block-content">
                            <div class="media d-flex align-items-center push">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d111989.57931510158!2d80.82299563646195!3d28.69938636764138!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d28.6977528!2d80.89298939999999!5e0!3m2!1sen!2snp!4v1557245584772!5m2!1sen!2snp" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                            <div class="text-center push">
                                <button type="button" class="btn btn-sm btn-light">View More..</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Page Content -->
        <!-- New Message Modal -->
        <div class="modal fade" id="one-inbox-new-message" tabindex="-1" role="dialog" aria-labelledby="one-inbox-new-message" aria-hidden="true">
            <div class="modal-dialog modal-dialog-top" role="document">
                <div class="modal-content">
                    <form action="be_pages_generic_inbox.html" method="POST" onsubmit="return false;">
                        <div class="block block-themed block-transparent mb-0">
                            <div class="block-header bg-primary">
                                <h3 class="block-title">
                                    <i class="fa fa-pencil-alt mr-1"></i> New Message
                                </h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                        <i class="fa fa-fw fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="block-content">
                                <div class="form-group">
                                    <label for="message-email">Email</label>
                                    <input class="form-control" type="email" id="message-email" name="message-email">
                                </div>
                                <div class="form-group">
                                    <label for="message-subject">Subject</label>
                                    <input class="form-control" type="text" id="message-subject" name="message-subject">
                                </div>
                                <div class="form-group">
                                    <label for="message-msg">Message</label>
                                    <textarea class="form-control" id="message-msg" name="message-msg" rows="6"></textarea>
                                    <div class="form-text text-muted font-size-sm">Feel free to use common tags: &lt;blockquote&gt;, &lt;strong&gt;, &lt;em&gt;</div>
                                </div>
                                <div class="form-group">

                                </div>
                            </div>
                            <div class="block-content block-content-full text-right border-top">
                                <button type="button" class="btn btn-sm btn-link mr-2" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-sm btn-primary">
                                    <i class="fa fa-paper-plane mr-1"></i> Send Message
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- END New Message Modal -->

    </main>
    <!-- END Main Container -->

    @endsection