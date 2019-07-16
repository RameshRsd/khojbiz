@extends('layouts.front')
@section('content')


    <div class="content-wrapp login">
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                <div class="content-covered login">
                    <div class="content-header">
                        <h3 class="block-title">Register</h3><hr>
                        @if($errors->any())
                            <div class="col-sm-12">
                                <div role="alert" style="background-color:#d4edda; color:#155724; border-radius: 5px;" class="alert  alert-dismissible show">
                                    @foreach($errors->all() as $error)
                                        {{$error}}<br>
                                    @endforeach
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                            <div style="clear: both;"></div>
                        @endif

                    </div>
                    <div class="content-main">
                        <form class="js-validation-signin" action="{{url('register')}}" method="post">
                            {{csrf_field()}}
                            <div class="py-3">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fa fa-briefcase"></i>
                                                    </span>
                                        </div>
                                        <select name="package_id" id="package_id" class="form-control" required>
                                            <option value="">Choose Package..</option>
                                            @foreach($packages as $package)
                                                <option value="{{$package->id}}" @if(request('package_id') == $package->id) selected @endif>{{$package->name}}</option>
                                                @endforeach
                                        </select>
                                        {{ $errors->first('company_nature') }}
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="far fa-building"></i>
                                                    </span>
                                        </div>
                                        <input type="text" class="form-control" id="example-group2-input1" value="{{old('company_name')}}" name="company_name" placeholder="Company Full Name">
                                        {{ $errors->first('company_name') }}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="far fa-building"></i>
                                                    </span>
                                        </div>
                                        <select name="company_nature" id="company_nature" class="form-control" required>
                                            <option value="">Choose Company Type..</option>
                                            <option value="business">Service Business</option>
                                            <option value="manufacture">Manufacturer Company</option>
                                        </select>
                                        {{ $errors->first('company_nature') }}
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
                                        <input type="text" class="form-control" id="example-group2-input1" value="{{old('ofc_tel_no')}}" name="ofc_tel_no" placeholder="Contact Number">
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
                                        <input type="text" class="form-control" id="example-group2-input1" value="{{old('email')}}" name="email" placeholder="Valid Email" required>
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
                                        <input type="password" class="form-control" id="example-group2-input1"  name="password" placeholder="Password" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fa fa-key"></i>
                                                    </span>
                                        </div>
                                        <input type="password" class="form-control" id="example-group2-input1"  name="password_confirmation" placeholder="Re-Type Password" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6 col-xl-5">
                                    <button type="submit" class="btn btn-block btn-success">
                                        <i class="fa fa-fw fa-plus mr-1"></i> Submit
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