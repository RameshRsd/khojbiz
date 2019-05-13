@section('aside')
        <!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>Khojbiz - Local Search Engine</title>

    <meta name="description" content="Khoj-Biz - Local Search Engine">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Khoj-Biz - Local Search Engine &amp; World">
    <meta property="og:site_name" content="OneUI">
    <meta property="og:description" content="Khoj-Biz - Local Search Engine">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{url('public/frontend')}}/assets/media/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="{{url('public/frontend')}}/assets/media/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="{{url('public/frontend')}}/assets/media/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{url('public/frontend')}}/assets/js/plugins/slick-carousel/slick.css">
    <link rel="stylesheet" href="{{url('public/frontend')}}/assets/js/plugins/slick-carousel/slick-theme.css">
    <!-- Stylesheets -->
    <!-- Fonts and OneUI framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
    <link rel="stylesheet" id="css-main" href="{{url('public/frontend')}}/assets/css/oneui.min.css">
    <link rel="stylesheet"  href="{{url('public/frontend')}}/assets/css/costum.css">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/amethyst.min.css"> -->
    <!-- END Stylesheets -->
</head>
<body>
<div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed">

<!-- Side Overlay-->
    <aside id="side-overlay" class="font-size-sm">
        <!-- Side Header -->
        <div class="content-header border-bottom">
            <!-- User Avatar -->
            <a class="img-link mr-1" href="javascript:void(0)">
                <img class="img-avatar img-avatar32" src="{{url('public/frontend')}}/assets/media/avatars/avatar10.jpg" alt="">
            </a>
            <!-- END User Avatar -->

            <!-- User Info -->
            <div class="ml-2">
                <a class="link-fx text-dark font-w600" href="javascript:void(0)">Adam McCoy</a>
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
                            <i class="fa fa-fw fa-coffee text-gray mr-1"></i> Overview
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#so-sales">
                            <i class="fa fa-fw fa-chart-line text-gray mr-1"></i> Sales
                        </a>
                    </li>
                </ul>
                <div class="block-content tab-content overflow-hidden">
                    <!-- Overview Tab -->
                    <div class="tab-pane pull-x fade fade-left show active" id="so-overview" role="tabpanel">
                        <!-- Activity -->
                        <div class="block">
                            <div class="block-header block-header-default">
                                <h3 class="block-title">Recent Activity</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                        <i class="si si-refresh"></i>
                                    </button>
                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                                </div>
                            </div>
                            <div class="block-content">
                                <!-- Activity List -->
                                <ul class="nav-items mb-0">
                                    <li>
                                        <a class="text-dark media py-2" href="javascript:void(0)">
                                            <div class="mr-3 ml-2">
                                                <i class="si si-wallet text-success"></i>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-w600">New sale ($15)</div>
                                                <div class="text-success">Admin Template</div>
                                                <small class="text-muted">3 min ago</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="text-dark media py-2" href="javascript:void(0)">
                                            <div class="mr-3 ml-2">
                                                <i class="si si-pencil text-info"></i>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-w600">You edited the file</div>
                                                <div class="text-info">
                                                    <i class="fa fa-file-text"></i> Documentation.doc
                                                </div>
                                                <small class="text-muted">15 min ago</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="text-dark media py-2" href="javascript:void(0)">
                                            <div class="mr-3 ml-2">
                                                <i class="si si-close text-danger"></i>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-w600">Project deleted</div>
                                                <div class="text-danger">Line Icon Set</div>
                                                <small class="text-muted">4 hours ago</small>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <!-- END Activity List -->
                            </div>
                        </div>
                        <!-- END Activity -->

                        <!-- Online Friends -->
                        <div class="block">
                            <div class="block-header block-header-default">
                                <h3 class="block-title">Online Friends</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                        <i class="si si-refresh"></i>
                                    </button>
                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                                </div>
                            </div>
                            <div class="block-content">
                                <!-- Users Navigation -->
                                <ul class="nav-items mb-0">
                                    <li>
                                        <a class="media py-2" href="javascript:void(0)">
                                            <div class="mr-3 ml-2 overlay-container overlay-bottom">
                                                <img class="img-avatar img-avatar48" src="{{url('public/frontend')}}/assets/media/avatars/avatar3.jpg" alt="">
                                                <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-success"></span>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-w600">Helen Jacobs</div>
                                                <div class="font-w400 text-muted">Copywriter</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="media py-2" href="javascript:void(0)">
                                            <div class="mr-3 ml-2 overlay-container overlay-bottom">
                                                <img class="img-avatar img-avatar48" src="{{url('public/frontend')}}/assets/media/avatars/avatar10.jpg" alt="">
                                                <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-success"></span>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-w600">Ryan Flores</div>
                                                <div class="font-w400 text-muted">Web Developer</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="media py-2" href="javascript:void(0)">
                                            <div class="mr-3 ml-2 overlay-container overlay-bottom">
                                                <img class="img-avatar img-avatar48" src="{{url('public/frontend')}}/assets/media/avatars/avatar8.jpg" alt="">
                                                <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-success"></span>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-w600">Susan Day</div>
                                                <div class="font-w400 text-muted">Web Designer</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="media py-2" href="javascript:void(0)">
                                            <div class="mr-3 ml-2 overlay-container overlay-bottom">
                                                <img class="img-avatar img-avatar48" src="{{url('public/frontend')}}/assets/media/avatars/avatar3.jpg" alt="">
                                                <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-warning"></span>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-w600">Sara Fields</div>
                                                <div class="font-w400 text-muted">Photographer</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="media py-2" href="javascript:void(0)">
                                            <div class="mr-3 ml-2 overlay-container overlay-bottom">
                                                <img class="img-avatar img-avatar48" src="{{url('public/frontend')}}/assets/media/avatars/avatar15.jpg" alt="">
                                                <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-warning"></span>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-w600">Adam McCoy</div>
                                                <div class="font-w400 text-muted">Graphic Designer</div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <!-- END Users Navigation -->
                            </div>
                        </div>
                        <!-- END Online Friends -->

                        <!-- Quick Settings -->
                        <div class="block mb-0">
                            <div class="block-header block-header-default">
                                <h3 class="block-title">Quick Settings</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                                </div>
                            </div>
                            <div class="block-content">
                                <!-- Quick Settings Form -->
                                <form action="be_pages_dashboard.html" method="POST" onsubmit="return false;">
                                    <div class="form-group">
                                        <p class="font-w600 mb-2">
                                            Online Status
                                        </p>
                                        <div class="custom-control custom-switch mb-1">
                                            <input type="checkbox" class="custom-control-input" id="so-settings-check1" name="so-settings-check1" checked>
                                            <label class="custom-control-label" for="so-settings-check1">Show your status to all</label>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <p class="font-w600 mb-2">
                                            Auto Updates
                                        </p>
                                        <div class="custom-control custom-switch mb-1">
                                            <input type="checkbox" class="custom-control-input" id="so-settings-check2" name="so-settings-check2" checked>
                                            <label class="custom-control-label" for="so-settings-check2">Keep up to date</label>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <p class="font-w600 mb-1">
                                            Application Alerts
                                        </p>
                                        <div class="custom-control custom-switch mb-1">
                                            <input type="checkbox" class="custom-control-input" id="so-settings-check3" name="so-settings-check3" checked>
                                            <label class="custom-control-label" for="so-settings-check3">Email Notifications</label>
                                        </div>
                                        <div class="custom-control custom-switch mb-1">
                                            <input type="checkbox" class="custom-control-input" id="so-settings-check4" name="so-settings-check4" checked>
                                            <label class="custom-control-label" for="so-settings-check4">SMS Notifications</label>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <p class="font-w600 mb-1">
                                            API
                                        </p>
                                        <div class="custom-control custom-switch mb-1">
                                            <input type="checkbox" class="custom-control-input" id="so-settings-check5" name="so-settings-check5" checked>
                                            <label class="custom-control-label" for="so-settings-check5">Enable access</label>
                                        </div>
                                    </div>
                                </form>
                                <!-- END Quick Settings Form -->
                            </div>
                        </div>
                        <!-- END Quick Settings -->
                    </div>
                    <!-- END Overview Tab -->

                    <!-- Sales Tab -->
                    <div class="tab-pane pull-x fade fade-right" id="so-sales" role="tabpanel">
                        <div class="block mb-0">
                            <!-- Stats -->
                            <div class="block-content">
                                <div class="row items-push pull-t">
                                    <div class="col-6">
                                        <div class="font-w700 text-uppercase">Sales</div>
                                        <a class="link-fx font-size-h3 font-w300" href="javascript:void(0)">22.030</a>
                                    </div>
                                    <div class="col-6">
                                        <div class="font-w700 text-uppercase">Balance</div>
                                        <a class="link-fx font-size-h3 font-w300" href="javascript:void(0)">$4.589,00</a>
                                    </div>
                                </div>
                            </div>
                            <!-- END Stats -->

                            <!-- Today -->
                            <div class="block-content block-content-full block-content-sm bg-body-light">
                                <div class="row">
                                    <div class="col-6">
                                        <span class="font-w600 text-uppercase">Today</span>
                                    </div>
                                    <div class="col-6 text-right">
                                        <span class="ext-muted">$996</span>
                                    </div>
                                </div>
                            </div>
                            <div class="block-content">
                                <ul class="nav-items push">
                                    <li>
                                        <a class="text-dark media py-2" href="javascript:void(0)">
                                            <div class="mr-3 ml-2">
                                                <i class="fa fa-fw fa-circle text-success"></i>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-w600">New sale! + $249</div>
                                                <small class="text-muted">3 min ago</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="text-dark media py-2" href="javascript:void(0)">
                                            <div class="mr-3 ml-2">
                                                <i class="fa fa-fw fa-circle text-success"></i>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-w600">New sale! + $129</div>
                                                <small class="text-muted">50 min ago</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="text-dark media py-2" href="javascript:void(0)">
                                            <div class="mr-3 ml-2">
                                                <i class="fa fa-fw fa-circle text-success"></i>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-w600">New sale! + $119</div>
                                                <small class="text-muted">2 hours ago</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="text-dark media py-2" href="javascript:void(0)">
                                            <div class="mr-3 ml-2">
                                                <i class="fa fa-fw fa-circle text-success"></i>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-w600">New sale! + $499</div>
                                                <small class="text-muted">3 hours ago</small>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- END Today -->

                            <!-- Yesterday -->
                            <div class="block-content block-content-full block-content-sm bg-body-light">
                                <div class="row">
                                    <div class="col-6">
                                        <span class="font-w600 text-uppercase">Yesterday</span>
                                    </div>
                                    <div class="col-6 text-right">
                                        <span class="text-muted">$765</span>
                                    </div>
                                </div>
                            </div>
                            <div class="block-content">
                                <ul class="nav-items push">
                                    <li>
                                        <a class="text-dark media py-2" href="javascript:void(0)">
                                            <div class="mr-3 ml-2">
                                                <i class="fa fa-fw fa-circle text-success"></i>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-w600">New sale! + $249</div>
                                                <small class="text-muted">26 hours ago</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="text-dark media py-2" href="javascript:void(0)">
                                            <div class="mr-3 ml-2">
                                                <i class="fa fa-fw fa-circle text-danger"></i>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-w600">Product Purchase - $50</div>
                                                <small class="text-muted">28 hours ago</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="text-dark media py-2" href="javascript:void(0)">
                                            <div class="mr-3 ml-2">
                                                <i class="fa fa-fw fa-circle text-success"></i>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-w600">New sale! + $119</div>
                                                <small class="text-muted">29 hours ago</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="text-dark media py-2" href="javascript:void(0)">
                                            <div class="mr-3 ml-2">
                                                <i class="fa fa-fw fa-circle text-danger"></i>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-w600">Paypal Withdrawal - $300</div>
                                                <small class="text-muted">37 hours ago</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="text-dark media py-2" href="javascript:void(0)">
                                            <div class="mr-3 ml-2">
                                                <i class="fa fa-fw fa-circle text-success"></i>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-w600">New sale! + $129</div>
                                                <small class="text-muted">39 hours ago</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="text-dark media py-2" href="javascript:void(0)">
                                            <div class="mr-3 ml-2">
                                                <i class="fa fa-fw fa-circle text-success"></i>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-w600">New sale! + $119</div>
                                                <small class="text-muted">45 hours ago</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="text-dark media py-2" href="javascript:void(0)">
                                            <div class="mr-3 ml-2">
                                                <i class="fa fa-fw fa-circle text-success"></i>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-w600">New sale! + $499</div>
                                                <small class="text-muted">46 hours ago</small>
                                            </div>
                                        </a>
                                    </li>
                                </ul>

                                <!-- More -->
                                <div class="text-center">
                                    <a class="btn btn-sm btn-light" href="javascript:void(0)">
                                        <i class="fa fa-arrow-down mr-1"></i> Load More..
                                    </a>
                                </div>
                                <!-- END More -->
                            </div>
                            <!-- END Yesterday -->
                        </div>
                    </div>
                    <!-- END Sales Tab -->
                </div>
            </div>
            <!-- END Side Overlay Tabs -->
        </div>
        <!-- END Side Content -->
    </aside>
    <!-- END Side Overlay -->

    <!-- Sidebar -->
    <nav id="sidebar" aria-label="Main Navigation">
        <!-- Side Header -->
        <div class="content-header bg-white-5">
            <!-- Logo -->
            <a class="font-w600 text-dual" href="index.html">
                <i class="fa fa-circle-notch text-primary"></i>
                <span class="smini-hide">
                            <span class="font-w700 font-size-h5">Khoj</span> <span class="font-w400">Biz</span>
                        </span>
            </a>
            <!-- END Logo -->

            <!-- Options -->
            <div>
                <!-- Color Variations -->
                <div class="dropdown d-inline-block ml-3">
                    <a class="text-dual font-size-sm" id="sidebar-themes-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
                        <i class="si si-drop"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right font-size-sm smini-hide border-0" aria-labelledby="sidebar-themes-dropdown">
                        <!-- Color Themes -->
                        <!-- Layout API, functionality initialized in Template._uiHandleTheme() -->
                        <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="default" href="#">
                            <span>Default</span>
                            <i class="fa fa-circle text-default"></i>
                        </a>
                        <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="assets/css/themes/amethyst.min.css" href="#">
                            <span>Amethyst</span>
                            <i class="fa fa-circle text-amethyst"></i>
                        </a>
                        <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="assets/css/themes/city.min.css" href="#">
                            <span>City</span>
                            <i class="fa fa-circle text-city"></i>
                        </a>
                        <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="assets/css/themes/flat.min.css" href="#">
                            <span>Flat</span>
                            <i class="fa fa-circle text-flat"></i>
                        </a>
                        <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="assets/css/themes/modern.min.css" href="#">
                            <span>Modern</span>
                            <i class="fa fa-circle text-modern"></i>
                        </a>
                        <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="assets/css/themes/smooth.min.css" href="#">
                            <span>Smooth</span>
                            <i class="fa fa-circle text-smooth"></i>
                        </a>
                        <!-- END Color Themes -->

                        <div class="dropdown-divider"></div>

                        <!-- Sidebar Styles -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <a class="dropdown-item" data-toggle="layout" data-action="sidebar_style_light" href="#">
                            <span>Sidebar Light</span>
                        </a>
                        <a class="dropdown-item" data-toggle="layout" data-action="sidebar_style_dark" href="#">
                            <span>Sidebar Dark</span>
                        </a>
                        <!-- Sidebar Styles -->

                        <div class="dropdown-divider"></div>

                        <!-- Header Styles -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <a class="dropdown-item" data-toggle="layout" data-action="header_style_light" href="#">
                            <span>Header Light</span>
                        </a>
                        <a class="dropdown-item" data-toggle="layout" data-action="header_style_dark" href="#">
                            <span>Header Dark</span>
                        </a>
                        <!-- Header Styles -->
                    </div>
                </div>
                <!-- END Themes -->

                <!-- Close Sidebar, Visible only on mobile screens -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <a class="d-lg-none text-dual ml-3" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
                    <i class="fa fa-times"></i>
                </a>
                <!-- END Close Sidebar -->
            </div>
            <!-- END Options -->
        </div>
        <!-- END Side Header -->

        <!-- Side Navigation -->
        <div class="content-side content-side-full">
            <ul class="nav-main">
                <li class="nav-main-item">
                    <a class="nav-main-link" href="be_pages_dashboard.html">
                        <i class="nav-main-link-icon si si-speedometer"></i>
                        <span class="nav-main-link-name"> Agriculture & Veterin.</span><i class="fa fa-angle-right"></i>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link" href="be_pages_dashboard.html">
                        <i class="nav-main-link-icon si si-speedometer"></i>
                        <span class="nav-main-link-name"> Clothing & Accessories </span><i class="fa fa-angle-right"></i>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link" href="be_pages_dashboard.html">
                        <i class="nav-main-link-icon si si-speedometer"></i>
                        <span class="nav-main-link-name"> Medical & Hospital</span><i class="fa fa-angle-right"></i>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link" href="be_pages_dashboard.html">
                        <i class="nav-main-link-icon si si-speedometer"></i>
                        <span class="nav-main-link-name">Lap</span><i class="fa fa-angle-right"></i>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link" href="be_pages_dashboard.html">
                        <i class="nav-main-link-icon si si-speedometer"></i>
                        <span class="nav-main-link-name">Food & Beverages</span><i class="fa fa-angle-right"></i>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link" href="be_pages_dashboard.html">
                        <i class="nav-main-link-icon si si-speedometer"></i>
                        <span class="nav-main-link-name">Real Estate</span><i class="fa fa-angle-right"></i>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link" href="be_pages_dashboard.html">
                        <i class="nav-main-link-icon si si-speedometer"></i>
                        <span class="nav-main-link-name">Tourism & Hospitality</span><i class="fa fa-angle-right"></i>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link" href="be_pages_dashboard.html">
                        <i class="nav-main-link-icon si si-speedometer"></i>
                        <span class="nav-main-link-name">Restaurants</span><i class="fa fa-angle-right"></i>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link" href="be_pages_dashboard.html">
                        <i class="nav-main-link-icon si si-speedometer"></i>
                        <span class="nav-main-link-name">Online Shoping </span><i class="fa fa-angle-right"></i>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link" href="be_pages_dashboard.html">
                        <i class="nav-main-link-icon si si-speedometer"></i>
                        <span class="nav-main-link-name">Auto Care </span><i class="fa fa-angle-right"></i>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link" href="be_pages_dashboard.html">
                        <i class="nav-main-link-icon si si-speedometer"></i>
                        <span class="nav-main-link-name">Hotel Book</span><i class="fa fa-angle-right"></i>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link" href="be_pages_dashboard.html">
                        <i class="nav-main-link-icon si si-speedometer"></i>
                        <span class="nav-main-link-name">Baby Care</span><i class="fa fa-angle-right"></i>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link" href="be_pages_dashboard.html">
                        <i class="nav-main-link-icon si si-speedometer"></i>
                        <span class="nav-main-link-name">Books</span><i class="fa fa-angle-right"></i>
                    </a>
                </li>
            </ul>
        </div>
        <!-- END Side Navigation -->
    </nav>
    <!-- END Sidebar -->

@endsection