@extends('frontend.layouts.master')
@section('content')

    <!-- Main Container -->
    <main id="main-container">
        <!--Category Slider Start-->
        <div class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="js-slider slick-nav-hover" data-dots="true" data-autoplay="true" data-arrows="true">
                        <div class="block">
                            <img class="img-fluid" src="{{url('public/frontend')}}/assets/slider/slide3.jpg" alt="">
                        </div>
                        <div class="block">
                            <img class="img-fluid" src="{{url('public/frontend')}}/assets/slider/slider5.jpg" alt="">
                        </div>
                        <div class="block">
                            <img class="img-fluid" src="{{url('public/frontend')}}/assets/slider/slide2.jpg" alt="">
                        </div>
                    </div>
                    <!-- END Slider with multiple images and center mode -->
                </div>
                <div class="col-md-12">
                    <div class="all_category">
                        <b> Category: -</b>
                        <a href="#">A</a>
                        <a href="#">B</a>
                        <a href="#">C</a>
                        <a href="#">D</a>
                        <a href="#">E</a>
                        <a href="#">F</a>
                        <a href="#">G</a>
                        <a href="#">H</a>
                        <a href="#">I</a>
                        <a href="#">J</a>
                        <a href="#">K</a>
                        <a href="#">L</a>
                        <a href="#">M</a>
                        <a href="#">N</a>
                        <a href="#">O</a>
                        <a href="#">P</a>
                        <a href="#">Q</a>
                        <a href="#">R</a>
                        <a href="#">S</a>
                        <a href="#">T</a>
                        <a href="#">U</a>
                        <a href="#">V</a>
                        <a href="#">W</a>
                        <a href="#">X</a>
                        <a href="#">Y</a>
                        <a href="#">Z</a>
                    </div>
                </div>
                <div class="col-md-9">
                    <!-- Slider with Multiple Slides/Avatars -->
                    <div class="top_feature">
                        <h4>Featured Services</h4>
                    </div>
                    <div class="block">
                        <div class="block-content">
                            <div class="js-slider text-center" data-autoplay="true" data-dots="true" data-arrows="true" data-slides-to-show="3">
                                <a href="profile.html">
                                    <div class="py-3">
                                        <img class="img-avatar" src="{{url('public/frontend')}}/assets/images/03.png" alt="">
                                        <div class="mt-2 font-w600">Marie Duncan</div>
                                        <div class="font-size-sm text-muted">Graphic Designer</div>
                                    </div>
                                </a>
                                <div class="py-3">
                                    <img class="img-avatar" src="{{url('public/frontend')}}/assets/images/04.png" alt="">
                                    <div class="mt-2 font-w600">Lori Grant</div>
                                    <div class="font-size-sm text-muted">Photographer</div>
                                </div>
                                <div class="py-3">
                                    <img class="img-avatar" src="{{url('public/frontend')}}/assets/images/05.png" alt="">
                                    <div class="mt-2 font-w600">Barbara Scott</div>
                                    <div class="font-size-sm text-muted">Web Developer</div>
                                </div>
                                <div class="py-3">
                                    <img class="img-avatar" src="{{url('public/frontend')}}/assets/images/06.png" alt="">
                                    <div class="mt-2 font-w600">Laura Carr</div>
                                    <div class="font-size-sm text-muted">Web Designer</div>
                                </div>
                                <div class="py-3">
                                    <img class="img-avatar" src="{{url('public/frontend')}}/assets/images/07.png" alt="">
                                    <div class="mt-2 font-w600">Lori Grant</div>
                                    <div class="font-size-sm text-muted">Font Designer</div>
                                </div>
                                <div class="py-3">
                                    <img class="img-avatar" src="{{url('public/frontend')}}/assets/images/08.png" alt="">
                                    <div class="mt-2 font-w600">Alice Moore</div>
                                    <div class="font-size-sm text-muted">Artist</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Slider with Multiple Slides/Avatars -->
                </div>
                <div class="col-md-3">
                    <div class="top_feature">
                        <h4>Featured Services</h4>
                    </div>
                    <!-- Tiles Slider 3 -->
                    <div class="js-slider slick-nav-hover" data-dots="true" data-autoplay="true" data-arrows="true">
                        <div class="block text-center mb-0">
                            <div class="block-content py-5">
                                <img class="img-fluid" src="{{url('public/frontend')}}/assets/images/download.jpg" alt="">
                            </div>
                        </div>
                        <div class="block text-center mb-0">
                            <div class="block-content py-5">
                                <img class="img-fluid" src="{{url('public/frontend')}}/assets/images/download.jpg" alt="">
                            </div>
                        </div>
                        <div class="block text-center bg-white mb-0">
                            <div class="block-content py-5">
                                <img class="img-fluid" src="{{url('public/frontend')}}/assets/images/download.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <!-- END Tiles Slider 3 -->
                </div>
                <!-- END Slider with Avatars -->
            </div>
        </div>
        <!-- END Avatar Sliders -->
        <!-- END Page Content -->
        <!--Category Slider Start-->
    </main>
    <!-- END Main Container -->

    @endsection