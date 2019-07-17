@extends('admin.index')
@section('body')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Edit Package
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{url('admin')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li class="active">Edit Package</li>
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
                            <h3 class="box-title" style="display: block;">Edit Package <a href="{{url('admin/list-package')}}" class="btn btn-primary btn-xs pull-right"><i class="fa fa-plus-circle"></i> Package Listing</a></h3>
                            {{--<h3 class="box-title pull-right"><a href="{{url('admin/create-events')}}" class="btn btn-primary btn-xs">Create New Event</a></h3>--}}
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <form action="" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="row form-group">
                                    <div class="col-sm-7">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label for="name">Package Name</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="text" name="name" value="{{$package->name}}" class="form-control" placeholder="Package Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label for="status">Package Status</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <select name="status" id="status" class="form-control">
                                                    <option value="">Choose..</option>
                                                    <option value="active" @if($package->status =='active') selected @endif>Publised</option>
                                                    <option value="inactive" @if($package->status =='inactive') selected @endif>Unpublised</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <label for="editor1">Package Details</label>
                                                <textarea name="details" id="editor1" cols="30" rows="10" class="form-control content" placeholder="Describe about company">
                                                {{$package->details}}
                                            </textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label for="price">Package Price</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="price" value="{{$package->price}}">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary btn-sm">Update</button>
                                    </div>
                                </div>
                            </form>
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