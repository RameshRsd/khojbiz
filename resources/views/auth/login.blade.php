@extends('layouts.front')
@section('content')


<div class="content-wrapp login">
    <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
            <div class="content-covered login">
                <div class="content-header">
                    <h3 class="block-title">Sign In</h3>
                    <div class="block-options">
                        <a class="btn-block-option font-size-sm" href="{{ url('password/reset') }}">Forgot Password?</a>
                        <a class="btn-block-option" href="op_auth_signup.html" data-toggle="tooltip" data-placement="left" title="New Account">
                            <i class="fa fa-user-plus"></i>
                        </a>
                        @if(session('success'))
                            <div class="col-sm-12">
                                <div role="alert" style="background-color:#d4edda; color:#155724; border-radius: 5px;" class="alert  alert-dismissible show">
                                    {{session('success')}}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                            <div style="clear: both;"></div>
                        @endif

                    </div>
                </div>
                <div class="content-main">
                    <form class="js-validation-signin" action="{{route('login')}}" method="post">
                        {{csrf_field()}}
                        <div class="py-3">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-alt form-control-lg" id="login-username" name="email" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-alt form-control-lg" id="login-password" name="password" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="login-remember" name="login-remember">
                                    <label class="custom-control-label font-w400" for="login-remember">Remember Me</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 col-xl-5">
                                <button type="submit" class="btn btn-block btn-primary">
                                    <i class="fa fa-fw fa-sign-in-alt mr-1"></i> Sign In
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection