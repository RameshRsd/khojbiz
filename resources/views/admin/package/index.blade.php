@extends('admin.index')
@section('body')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Package Listing
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{url('admin')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li class="active">Package Listing</li>
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
                            <h3 class="box-title" style="display: block;">Package Listing
                                <a href="{{url('admin/add-package')}}" class="btn btn-primary btn-xs pull-right"><i class="fa fa-plus-circle"></i> Create New Package</a></h3>
                            {{--<h3 class="box-title pull-right"><a href="{{url('admin/create-events')}}" class="btn btn-primary btn-xs">Create New Event</a></h3>--}}
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Package Name</th>
                                    <th>Status</th>
                                    <th>Enter By</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($packages as $key=>$package)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>{{$package->name}}</td>
                                        <td>
                                            @if($package->status=='active')
                                                <button class="btn btn-success btn-xs">Published</button>
                                            @else
                                                <button class="btn btn-warning btn-xs">Unpublished</button>
                                                @endif
                                        </td>
                                        <td>{{$package->user->name}}</td>
                                        <td>
                                            <a href="{{url('admin/list-package').'/'.$package->id.'/edit'}}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>
                                            {{--<a href="{{url('admin/list-adverts/').$advert->id.'/delete'}}" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>--}}
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