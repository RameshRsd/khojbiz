<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>Register - Khojbiz.com</title>

    <meta name="description" content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="OneUI">
    <meta property="og:description" content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{url('public/frontend')}}/media/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="{{url('public/frontend')}}/media/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="{{url('public/frontend')}}/media/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Fonts and OneUI framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
    <link rel="stylesheet" id="css-main" href="{{url('public/frontend')}}/assets/css/oneui.min.css">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
<!-- <link rel="stylesheet" id="css-theme" href="{{url('public/frontend')}}/css/themes/amethyst.min.css"> -->
    <!-- END Stylesheets -->
</head>
<body>
<!-- Page Container -->

<div id="page-container">

    <!-- Main Container -->
    <main id="main-container">

        <!-- Page Content -->
        <div class="hero-static">
            <div class="content">
                <div class="row justify-content-center">
                    {{--<div class="col-md-6 col-lg-6 col-xl-6">--}}
                        {{--<!-- Sign Up Block -->--}}
                        {{--<div class="block block-themed block-fx-shadow mb-0">--}}
                            {{--<div class="block-content"  style="padding:0;">--}}
                                {{--<div class="p-sm-3 px-lg-4 py-lg-5" style="padding:0;">--}}
                                    {{--<h3>Create your free Business Account</h3>--}}
                                   {{--<p> Register with basic information, Complete your profile and start applying for the job for free!</p>--}}
                                    {{--<div class="block">--}}
                                        {{--<div class="block-content">--}}
                                            {{--<!-- Activity List -->--}}
                                            {{--<ul class="nav-items mb-0">--}}
                                                {{--<li>--}}
                                                    {{--<h4 class="text-dark media py-2">--}}
                                                        {{--<div class="mr-3 ml-2">--}}
                                                            {{--<i class="si si-wallet text-success"></i>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="media-body">--}}
                                                            {{--<div class="font-w600">#1 Job Site of Nepal</div>--}}
                                                            {{--<small class="text-muted">Alexa Ranking, Google Analytics, Social Medias,  us on top!</small>--}}
                                                        {{--</div>--}}
                                                    {{--</h4>--}}
                                                {{--</li>--}}
                                                {{--<li>--}}
                                                    {{--<h4 class="text-dark media py-2">--}}
                                                        {{--<div class="mr-3 ml-2">--}}
                                                            {{--<i class="si si-wallet text-success"></i>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="media-body">--}}
                                                            {{--<div class="font-w600">#1 Job Site of Nepal</div>--}}
                                                            {{--<small class="text-muted">Social Medias, Jobseeker and Employer have always put us on top!</small>--}}
                                                        {{--</div>--}}
                                                    {{--</h4>--}}
                                                {{--</li>--}}
                                            {{--</ul>--}}
                                            {{--<!-- END Activity List -->--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<!-- END Sign Up Form -->--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!-- END Sign Up Block -->--}}
                    {{--</div>--}}
                    <div class="col-md-5 col-lg-5 col-xl-5">
                        <!-- Sign Up Block -->
                        <div class="block block-themed block-fx-shadow mb-0">
                            <div class="block-content"  style="padding:0;">
                                <div class="p-sm-3 px-lg-4 py-lg-5" style="padding:0;">
                                    <h1 class="mb-2">Khojbiz.com</h1>
                                    <p>Please fill the following details to create a new account.</p>

                                    <!-- Sign Up Form -->
                                    <!-- jQuery Validation (.js-validation-signup class is initialized in js/pages/op_auth_signup.min.js which was auto compiled from _es6/pages/op_auth_signup.js) -->
                                    <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                                    <form class="js-validation-signup" action="" method="POST">
                                        {{csrf_field()}}
                                        <div class="py-3">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="far fa-user"></i>
                                                    </span>
                                                    </div>
                                                    <input type="text" class="form-control" id="example-group2-input1" value="{{old('company_name')}}" name="company_name" placeholder="Organization Name">
                                                    {{ $errors->first('company_name') }}
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="far fa-user"></i>
                                                    </span>
                                                    </div>
                                                    <input type="text" class="form-control" id="example-group2-input1" value="{{old('username')}}" name="username" placeholder="username">
                                                    {{ $errors->first('username') }}
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fa fa-phone"></i>
                                                    </span>
                                                    </div>
                                                    <input type="text" class="form-control" id="example-group2-input1" value="{{old('ofc_tel_no')}}" name="ofc_tel_no" placeholder="Organization Contact Number">
                                                    {{$errors->first('ofc_tel_no')}}
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fa fa-envelope"></i>
                                                    </span>
                                                    </div>
                                                    <input type="text" class="form-control" id="example-group2-input1" value="{{old('email')}}" name="email" placeholder="Official Mail">
                                                    {{$errors->first('email')}}
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fa fa-key"></i>
                                                    </span>
                                                    </div>
                                                    <input type="password" class="form-control" id="example-group2-input1"  name="password" placeholder="password">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fa fa-key"></i>
                                                    </span>
                                                    </div>
                                                    <input type="password" class="form-control" id="example-group2-input1"  name="password_confirmation" placeholder="password again">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-6 col-xl-5">
                                                <button type="submit" class="btn btn-block btn-success">
                                                    <i class="fa fa-fw fa-plus mr-1"></i> Sign Up
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- END Sign Up Form -->
                                </div>
                            </div>
                        </div>
                        <!-- END Sign Up Block -->
                    </div>
                </div>
            </div>
        </div>
        <!-- END Page Content -->

    </main>
    <!-- END Main Container -->
</div>
<!-- END Page Container -->



<!--
            OneUI JS Core

            Vital libraries and plugins used in all pages. You can choose to not include this file if you would like
            to handle those dependencies through webpack. Please check out {{url('public/frontend')}}/_es6/main/bootstrap.js for more info.

            If you like, you could also include them separately directly from the {{url('public/frontend')}}/js/core folder in the following
            order. That can come in handy if you would like to include a few of them (eg jQuery) from a CDN.

            {{url('public/frontend')}}/js/core/jquery.min.js
            {{url('public/frontend')}}/js/core/bootstrap.bundle.min.js
            {{url('public/frontend')}}/js/core/simplebar.min.js
            {{url('public/frontend')}}/js/core/jquery-scrollLock.min.js
            {{url('public/frontend')}}/js/core/jquery.appear.min.js
            {{url('public/frontend')}}/js/core/js.cookie.min.js
        -->
<script src="{{url('public/frontend')}}/js/oneui.core.min.js"></script>

<!--
            OneUI JS

            Custom functionality including Blocks/Layout API as well as other vital and optional helpers
            webpack is putting everything together at {{url('public/frontend')}}/_es6/main/app.js
        -->
<script src="{{url('public/frontend')}}/js/oneui.app.min.js"></script>

<!-- Page JS Plugins -->
<script src="{{url('public/frontend')}}/js/plugins/jquery-validation/jquery.validate.min.js"></script>

<!-- Page JS Code -->
<script src="{{url('public/frontend')}}/js/pages/op_auth_signin.min.js"></script>
</body>
</html>
