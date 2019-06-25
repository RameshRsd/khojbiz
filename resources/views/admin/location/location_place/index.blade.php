@extends('admin.index')
@section('body')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Location/Places
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{url('staff')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li class="active">Location/Places</li>
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
                            <h3 class="box-title" style="display: block;">Location/Places <a href="{{url('admin/create-location')}}" class="btn btn-primary btn-xs pull-right"><i class="fa fa-plus-circle"></i> Create New</a></h3>
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
                                    <th>Contact</th>
                                    <th>Status</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($locations as $key=>$location)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>{{$location->name}}</td>
                                        <td>
                                            @if(isset($location->district->name))
                                                {{$location->district->name}}
                                                @endif
                                            {{$location->address}}
                                        </td>
                                        <td>{{$location->contact}}</td>
                                        <td>
                                            @if($location->status==0)
                                                <button class="btn btn-warning btn-xs">Draft</button>
                                                @else
                                                <button class="btn btn-primary btn-xs">Published</button>
                                            @endif
                                        </td>
                                        <td>
                                            @if(is_file(public_path('uploads/location_image/').'/'.$location->image) && file_exists(public_path('uploads/location_image/').'/'.$location->image))
                                                <img src="{{url('public/uploads/location_image').'/'.$location->image}}" alt="" style="width:100px;">
                                                @else
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{url('admin/locations').'/'.$location->id.'/edit'}}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>
                                            <a href="" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure to delete this record?')"><i class="fa fa-trash"></i></a>
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