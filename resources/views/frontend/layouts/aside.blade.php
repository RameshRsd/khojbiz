@section('aside')
        <!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    @if(isset($title))
        <title>{!! $title !!}</title>
        @else
    <title>Khojbiz - Local Search Engine</title>
    @endif

    <meta name="description" content="Khoj-Biz - Local Search Engine">
    <meta name="author" content="khojbiz.com">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    @if(isset($title))
    <meta property="og:title" content="{{$title}}">
    @else
    <meta property="og:title" content="Khoj-Biz - Local Search Engine &amp; World">
    @endif

    @if(isset($discription))
    <meta property="og:description" content="{!! $discription !!}">
    @else
    <meta property="og:description" content="Khoj-Biz - Local Search Engine">
    @endif
    @if(isset($title))
        <meta property="og:site_name" content="{{$title}}">
    @else
        <meta property="og:site_name" content="Khojbiz">
        @endif
    <meta property="og:type" content="website">


    <meta property="og:url" content="">
    @if(isset($image))
    <meta property="og:image" content="{{url('').$image}}">
    @else
    <meta property="og:image" content="">
    @endif

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    @yield('style')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

    <link rel="shortcut icon" href="{{url('public/frontend')}}/assets/media/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="{{url('public/frontend')}}/assets/media/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="{{url('public/frontend')}}/assets/media/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->
    <!-- Page JS Plugins CSS -->

    <link rel="stylesheet" href="{{url('public/frontend')}}/assets/js/plugins/slick-carousel/slick.css">
    <link rel="stylesheet" href="{{url('public/frontend')}}/assets/js/plugins/slick-carousel/slick-theme.css">
    <!-- Stylesheets -->
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{url('public/frontend')}}/assets/js/plugins/magnific-popup/magnific-popup.css">
    <!-- Fonts and OneUI framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
    <link rel="stylesheet" id="css-main" href="{{url('public/frontend')}}/assets/css/oneui.min.css">
    <link rel="stylesheet"  href="{{url('public/frontend')}}/assets/css/costum.css">
    <link rel="stylesheet" href="{{url('public/frontend')}}/assets/js/plugins/select2/css/select2.min.css">
</head>
<body>
<div id="page-container" class="page-header-fixed">

    <!-- Side Overlay-->
    <aside id="side-overlay" class="font-size-sm">
        <!-- Side Header -->
        <div class="content-header border-bottom">
            <!-- User Avatar -->
            <a class="img-link mr-1" href="javascript:void(0)">
                <img class="img-avatar img-avatar32" src="assets/media/avatars/avatar10.jpg" alt="">
            </a>
            <!-- END User Avatar -->

            <!-- User Info -->
            <div class="ml-2">
                <a class="link-fx text-dark font-w600" href="javascript:void(0)">Register</a>
            </div>
            <!-- END User Info -->

            <!-- Close Side Overlay -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <a class="ml-auto btn btn-sm btn-dual" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_close">
                <i class="fa fa-fw fa-times text-danger"></i>
            </a>
            <!-- END Close Side Overlay -->
        </div>
        <!-- END Side Header -->

        <!-- Side Content -->
        <div class="content-side">
            <!-- Side Overlay Tabs -->
            <div class="block block-transparent pull-x pull-t">
                <ul class="nav nav-tabs nav-tabs-alt nav-justified" data-toggle="tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#so-overview">
                            <i class="fa fa-fw fa-coffee text-gray mr-1"></i> Business
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#so-sales">
                            <i class="fa fa-fw fa-chart-line text-gray mr-1"></i> Manufacture
                        </a>
                    </li>
                </ul>
                <div class="block-content tab-content overflow-hidden">
                    <!-- Overview Tab -->
                    <div class="tab-pane pull-x fade fade-left show active" id="so-overview" role="tabpanel">
                        <!-- Activity -->
                        <div class="block">
                            <div class="block-content">
                               <div class="login_kb_re" style="text-align: center">
                                   <h4 class="btn btn-primary"><i class="fa fa-user"></i> <a href="{{url('business/register')}}">Register</a></h4>
                               </div>
                            </div>
                        </div>
                        <!-- END Activity -->
                    </div>
                    <!-- END Overview Tab -->

                    <!-- Sales Tab -->
                    <div class="tab-pane pull-x fade fade-right" id="so-sales" role="tabpanel">
                        <div class="block mb-0">
                            <!-- Stats -->
                            <div class="block-content">
                                <div class="login_kb_re" style="text-align: center">
                                    <h4 class="btn btn-primary"><i class="fa fa-user"></i> <a href="{{url('manufacture/register')}}">Register</a></h4>
                                </div>
                            </div>
                            <!-- END Stats -->
                        </div>
                    </div>
                    <!-- END Sales Tab -->
                </div>
            </div>
            <!-- END Side Overlay Tabs -->
        </div>
        <!-- END Side Content -->
    </aside>

    <!-- END Sidebar -->

@endsection