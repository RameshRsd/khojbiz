@extends('admin.index')
@section('body')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Client Listing
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{url('admin')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li class="active">Client Listing</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">
            <div style="clear: both;"></div>
            @if(session('success'))
                <div class="col-sm-12">
                    <div role="alert" style="background-color:#d4edda; color:#155724; border-radius: 5px;" class="alert  alert-dismissible show">
                        <span class="btn btn-success btn-xs">Success</span> {{session('success')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
                <div style="clear: both;"></div>
            @endif
            @if($errors->any())
                <div class="col-sm-12">
                    <div role="alert" style="background-color:#d4edda; color:#155724; border-radius: 5px;" class="alert  alert-dismissible show">
                        @foreach($errors->all() as $error)
                            <span class="btn btn-danger btn-xs">Error</span> {{$error}}<br>
                        @endforeach
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
                <div style="clear: both;"></div>
            @endif
            <div class="row">
                <!-- /.col -->
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title" style="display: block;">Client Listing <a href="{{url('admin/create-client')}}" class="btn btn-primary btn-xs pull-right"><i class="fa fa-plus-circle"></i> Create New</a></h3>
                            {{--<h3 class="box-title pull-right"><a href="{{url('admin/create-events')}}" class="btn btn-primary btn-xs">Create New Event</a></h3>--}}
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    {{--<th>Nature</th>--}}
                                    <td>Post By</td>
                                    <th>Contact</th>
                                    <th>Type</th>
                                    <th>Email</th>
                                    <th>PW</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($clients as $key=>$client)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>{{$client->company_name}}</td>
                                        <td>{{$client->company_address}}</td>
                                        {{--<td>--}}
                                            {{--<div class="input-group-btn btn-sm">--}}
                                                {{--<button type="button" class="btn btn-warning btn-xs dropdown-toggle" data-toggle="dropdown">Action--}}
                                                    {{--<span class="fa fa-caret-down"></span></button>--}}
                                                {{--<ul class="dropdown-menu">--}}
                                                    {{--<li><a href="{{url('admin').'/'.$client->user->name.'/edit-about'}}">About Us</a></li>--}}
                                                    {{--<li><a href="#">Profile</a></li>--}}
                                                    {{--<li><a href="#">Product & Service</a></li>--}}
                                                    {{--<li><a href="#">Image Gallery</a></li>--}}
                                                    {{--<li><a href="{{url('admin/list-clients/client_id=').$client->id.'/edit_contact'}}">Contact Us</a></li>--}}
                                                {{--</ul>--}}
                                            {{--</div>--}}
                                        {{--</td>--}}
                                        <td>@if($client->staff->name) {{$client->staff->name}} @else admin @endif</td>
                                        <td>{{$client->mobile}}</td>
                                        <td>
                                            @if($client->client_type=='sponser')
                                                <button class="btn btn-primary btn-xs">Sponser</button>
                                                @elseif($client->client_type=='featured')
                                                <button class="btn btn-success btn-xs">Featured</button>
                                            @else
                                                <button class="btn btn-warning btn-xs">General</button>
                                            @endif
                                        </td>
                                        <td>{{$client->user->email}}</td>
                                        <td>{{$client->password}}</td>
                                        <td>
                                            <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></a>
                                            <a href="{{url('admin/list-clients/client_id=').$client->id.'/edit'}}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


@endsection
@section('style')
    <style>
        #example1 .general{
            background-color: lightgrey;
        }
        #example1 .featured{
            background-color: green;
        }
    </style>
@endsection