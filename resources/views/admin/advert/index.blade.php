@extends('admin.index')
@section('body')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Adverts Listing
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{url('admin')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li class="active">Adverts Listing</li>
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
                            <h3 class="box-title" style="display: block;">Adverts Listing <a href="{{url('admin/create-advets')}}" class="btn btn-primary btn-xs pull-right"><i class="fa fa-plus-circle"></i> Create New Adverts</a></h3>
                            {{--<h3 class="box-title pull-right"><a href="{{url('admin/create-events')}}" class="btn btn-primary btn-xs">Create New Event</a></h3>--}}
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Company</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Adverts Type</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($adverts as $key=>$advert)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>{{$advert->organization}}</td>
                                        <td>
                                            <img src="{{url('public/uploads/adverts').'/'.$advert->image}}" alt="" style="width:150px;">
                                        </td>
                                        <td>
                                            @if($advert->status=='active')
                                                <button class="btn btn-success btn-xs">Active</button>
                                            @else
                                                <button class="btn btn-warning btn-xs">Inative</button>
                                                @endif
                                        </td>
                                        <td>
                                            @if($advert->type=='feature')
                                                <button class="btn btn-success btn-xs">Featured</button>
                                            @elseif($advert->type=='top')
                                                <button class="btn btn-primary btn-xs">Top</button>
                                            @else
                                                <button class="btn btn-warning btn-xs">General</button>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{url('admin/list-adverts/advert_id=').$advert->id.'/edit'}}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>
                                            <a href="{{url('admin/list-adverts/advert_id=').$advert->id.'/delete'}}" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
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