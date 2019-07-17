<!doctype html>
<html lang="en">
<head>
    @if(isset($title))
    <title>{{$title}}</title>
    @else
    <title>khojbiz.com - Local Search Engine</title>
    @endif

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


        <meta property="og:url" content="{{url()->current()}}">
        @if(isset($image))
            <meta property="og:image" content="{{url('').$image}}">
        @else
            <meta property="og:image" content="">
        @endif

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="shortcut icon" href="{{asset('public/images/defaultImg/logo.png')}}">

        <!-- Bootstrap CSS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <link rel="stylesheet" href="{{url('public/css/custom.css')}}">
    <link rel="stylesheet" href="{{url('public/css/style.css')}}">
    <link rel="stylesheet" href="{{url('public/css/button.css')}}">
    <link rel="stylesheet" href="{{url('public/css/responsive.css')}}">
    <link rel="stylesheet" href="{{url('public/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{url('public/bootstrap/css/bootstrap.min.css')}}">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/f9dfcdd6a8.js"></script>
        <!-- Bootstrap CSS -->
        <script src="https://cdn.ckeditor.com/4.11.4/standard-all/ckeditor.js"></script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-142513897-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-142513897-1');
        </script>

        @yield('style')

</head>
<body>

    <div class="header-section">
        <div class="container-fluid">
            <!-------- Navbar ------------------------------->
            <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
                <a class="navbar-brand" href="{{url('')}}">
                    <img src="{{url('public/files/khojbiz_logo.png')}}" alt="" style="width: 200px;">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                @if(\Illuminate\Support\Facades\Auth::check())
                    @if(\Illuminate\Support\Facades\Auth::user()->type == 'client')
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    @else
                    <div class="collapse navbar-collapse only-for-none-auth" id="navbarSupportedContent">
                    @endif
                @else
                <div class="collapse navbar-collapse only-for-none-auth" id="navbarSupportedContent">
                @endif
                        <ul class="navbar-nav">
                        @if(\Illuminate\Support\Facades\Auth::check())
                            @if(\Illuminate\Support\Facades\Auth::user()->type=='staff')
                                <li class="nav-item margin-right-custom">
                                    <a class="nav-link" href="{{url('staff/create-client')}}">Add Business</a>
                                </li>
                            @elseif(\Illuminate\Support\Facades\Auth::user()->type=='admin')
                                <li class="nav-item margin-right-custom">
                                    <a class="nav-link" href="{{url('admin/create-client')}}">Add Business</a>
                                </li>
                            @elseif(\Illuminate\Support\Facades\Auth::user()->type=='client')
                                <li class="nav-item">
                                    <a class="nav-link @if(request()->segment('2')=='') active @endif" href="{{url('client')}}"><i class="fa fa-dashboard"></i> Dashboard</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link @if(request()->segment('2')=='edit-profile') active @endif" href="{{url('client/edit-profile/business-details')}}"><i class="fa fa-edit"></i> Edit Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link @if(request()->segment('2')=='service-manage') active @endif" href="{{url('client/service-manage/list-service')}}"><i class="fa fa-server"></i> Service Manage</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link @if(request()->segment('2')=='gallery-manage') active @endif" href="{{url('client/gallery-manage/list-images')}}"><i class="fa fa-server"></i> Galleries</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link @if(request()->segment('2')=='notice') active @endif" href="{{url('client/notice/list-notice')}}"><i class="fa fa-info"></i> Notices</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link @if(request()->segment('2')=='enquiry') active @endif" href="{{url('client/enquiry')}}"><i class="fa fa-question-circle"></i> Query From Visitors</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link @if(request()->segment('1')==\Illuminate\Support\Facades\Auth::user()->name) active @endif" href="{{url('').'/'.\Illuminate\Support\Facades\Auth::user()->name}}"><i class="fa fa-eye"></i> Profile Overview</a>
                                </li>

                            @endif
                            <li class="nav-item dropdown margin-right-custom">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Account
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <ul>
                                        <li><a href="{{url('login')}}">Dashboard</a></li>
                                        <li>Update Account</li>
                                        <li><a href="{{url('logout')}}">Logout</a></li>
                                    </ul>
                                </div>
                            </li>
                        @else
                            <li class="nav-item margin-right-custom">
                                <a class="nav-link btn btn-secondary-custom" href="{{url('login')}}">Add Business</a>
                            </li>
                            <li class="nav-item dropdown margin-right-custom">
                                <a class="nav-link dropdown-toggle btn btn-primary-custom" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Login
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <form action="{{url('login')}}" method="post">{{csrf_field()}}
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h6>Login Form</h6><hr>
                                            </div>
                                            <div class="col-12">
                                                <label for="">Username/Email</label>
                                            </div>
                                            <div class="col-12 margin-bottom">
                                                <input type="text" name="email" class="form-control" placeholder="Username OR Email">
                                            </div>
                                            <div class="col-12">
                                                <label for="">Password</label>
                                            </div>
                                            <div class="col-12 margin-bottom">
                                                <input type="password" name="password" class="form-control" placeholder="Password">
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary btn-sm">Login</button>
                                                <small>Forgot Password? <a href="">Click Here</a></small>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item margin-right-custom">
                                <a class="nav-link btn btn-secondary-custom" href="{{url('client-area')}}">Register</a>
                            </li>
                        @endif
                    </ul>
                </div>
            </nav>
            <!-------- Navbar ------------------------------->
        </div>
    </div>

    <div class="content-section">
        <div class="container-fluid">
            @yield('content')
        </div>
    </div>


    <!--------------- Footer Control -------------->

    <div class="footer-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-4">
                            <ul>
                                <li><img src="{{url('public/files/khojbiz_logo_footer.png')}}" alt=""></li>
                                <li>
                                    <p>
                                        {{str_limit('Khojbiz.com is a latest venture into the local business search in Nepal. Khojbiz.com is a business information portal where local businesses can list themselves so that general public can locate the right business for their needs conveniently and quickly.This portal does not limit itself to merely online business directory and goes far beyond just that, with more opportunities for businesses to find consumers and more capacity at consumers end to select the product and more importantly the providers. Not only is Khojbiz easier mode of business search for consumers but we are also an effective platform for businesses to shout out loud to their potential buyers that they are there.',255)}}
                                    </p>
                                    <a href="#"><small>Read More..</small></a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-4">
                            <div class="row">
                                <div class="col-lg-12">
                                    <ul>
                                        <li>
                                            <h6>Usefull Links</h6>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-6">
                                    <ul class="footer-tags">
                                        <li><a href="#"><small>Free Listing</small></a></li>
                                        <li><a href="#"><small>Emergency Number</small></a></li>
                                        <li><a href="#"><small>Buying & Selling</small></a></li>
                                        <li><a href="#"><small>Buy Directory</small></a></li>
                                        <li><a href="#"><small>E-Catalogue</small></a></li>
                                        <li><a href="#"><small>For Advertise</small></a></li>
                                    </ul>
                                </div>
                                <div class="col-6">
                                    <ul class="footer-tags">
                                        <li><a href="#"><small>Book An Appointment</small></a></li>
                                        <li><a href="#"><small>Privacy Policy</small></a></li>
                                        <li><a href="#"><small>Terms & Conditions</small></a></li>
                                        <li><a href="#"><small>FAQ</small></a></li>
                                        <li><a href="#"><small>Feedback</small></a></li>
                                        <li><a href="#"><small>Get Enquiry</small></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <ul>
                                <li><h6>Contact Information</h6></li>
                                <li><h6><i class="fa fa-building-o"></i> Asian Technology Pvt. Ltd.</h6></li>
                                <li><i class="fa fa-map-marked"></i> Kalimati, Kathmandu, Nepal</li>
                                <li><i class="fa fa-envelope-o"></i> info@khojbiz.com</li>
                                <li><i class="fa fa-phone"></i> +977-9862592420</li>
                                <li style="margin:10px 0;"></li>
                                <li><h6>For Advertisement</h6></li>
                                <li><i class="fa fa-envelope-o"></i> advertise@khojbiz.com</li>
                                <li><i class="fa fa-phone"></i> +977-9862592420</li>
                            </ul>
                        </div>
                    </div>
                    <hr>
                    <center>
                        <h6>Disclaimers</h6>
                        All the information on this website - khojbiz.com - is published in good faith and for general information purpose only. khojbiz.com does not make any warranties about the completeness, reliability and accuracy of this information. Any action you take upon the information you find on this website (khojbiz.com), is strictly at your own risk. khojbiz.com will not be liable for any losses and/or damages in connection with the use of our website.
                        <br>
                        From our website, you can visit other websites by following hyperlinks to such external sites. While we strive to provide only quality links to useful and ethical websites, we have no control over the content and nature of these sites. These links to other websites do not imply a recommendation for all the content found on these sites. Site owners and content may change without notice and may occur before we have the opportunity to remove a link which may have gone 'bad'.
                        <br>
                        Please be also aware that when you leave our website, other sites may have different privacy policies and terms which are beyond our control. Please be sure to check the Privacy Policies of these sites as well as their "Terms of Service" before engaging in any business or uploading any information.
                    </center>
                    <hr>
                    <center>Copyright ©{{date('Y')}} All rights reserved | Asian Technology Pvt. Ltd</center>
                    <hr>
                </div>
            </div>
        </div>
    </div>
    <!--------------- Footer Control -------------->

    @yield('script')

    <script src="http://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

    <script src="{{url('public/js/custom.js')}}"></script>
    <script src="{{url('public/js/ajax/homepage.js')}}"></script>
    <!------ Bootstrap JS ------->
    <script src="{{url('public/bootstrap/js/bootstrap.js')}}"></script>
    <script src="{{url('public/bootstrap/js/bootstrap.min.js')}}"></script>
<!------ Bootstrap JS ------->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

    {{--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/5d15baf636eab9721119a6ae/default';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
    <!--End of Tawk.to Script-->

</body>
<script>
    Laravel = {
        'url': '{{url("")}}'
    };
</script>

</html>