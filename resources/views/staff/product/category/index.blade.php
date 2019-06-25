@extends('staff.index')
@section('body')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Add New Product
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{url('admin')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li class="active">Category</li>
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

                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Add New Product</h3>
                            {{--<h3 class="box-title pull-right"><a href="{{url('admin/create-events')}}" class="btn btn-primary btn-xs">Create New Event</a></h3>--}}
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th>Alphabet Name</th>
                                    <th>Product Icon</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <form action="" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <tr>
                                        <td>
                                            <input type="text" name="name" class="form-control" placeholder="Product Category name">
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <select name="alphabet_id" class="form-control select2" style="width: 100%;">
                                                    <option value="">Choose Alphabet</option>
                                                    @foreach($alpha as $alphabet)
                                                        <option value="{{$alphabet->id}}">{{$alphabet->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <input type="file" name="icon" class="form-control">
                                        </td>
                                        <td>
                                            <button type="submit" class="btn btn-primary btn-sm">Create</button>
                                        </td>
                                    </tr>
                                </form>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Product Listing</h3>
                            {{--<h3 class="box-title pull-right"><a href="{{url('admin/create-events')}}" class="btn btn-primary btn-xs">Create New Event</a></h3>--}}
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Product Name</th>
                                    <th>Alphabet</th>
                                    <th>Slug</th>
                                    <th>Icon</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($category as $key=>$categories)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>{{$categories->name}}</td>
                                        <td>{{$categories->name}}</td>
                                        <td>{{$categories->slug}}</td>
                                        <td><img src="{{url('public/uploads/buy_sell/icon/').'/'.$categories->icon}}" alt="" width="25"></td>
                                       @if($categories->status == 'draft')
                                        <td>
                                            <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal-success{{$categories->id}}"><i class="fa fa-edit"></i></button>
                                        </td>
                                           @else
                                            <td>
                                                <p><i class="fa fa-check-square"></i></p>
                                            </td>
                                           @endif
                                    </tr>
                                    @if($categories->status == 'draft')
                                    <div class="modal modal-success fade" id="modal-success{{$categories->id}}">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <form action="{{url('staff/add-product-category/cat_id=').$categories->id.'/edit'}}" method="post" enctype="multipart/form-data">
                                                    {{csrf_field()}}
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title">Edit Product</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label for=""> Product name</label>
                                                            <input type="text" name="name" class="form-control" value="{{$categories->name}}">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for=""> Choose Alphabet</label>
                                                                <select name="alphabet_id" class="form-control select2" style="width: 100%;">
                                                                    <option value="">Choose Alphabet</option>
                                                                    @foreach($alpha as $alphabet)
                                                                        <option value="{{$alphabet->id}}" @if($alphabet->id == $categories->alphabet_id) selected @endif>{{$alphabet->name}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <label for="">Choose Icon</label>
                                                            <input type="file" name="icon" class="form-control">
                                                        </div>
                                                        <div class="col-md-2">
                                                            <img src="{{url('public/uploads/buy_sell/icon/').'/'.$categories->icon}}" alt="" style="width: 100%;background-color: #fff;padding: 5px;">
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-outline">Update</button>
                                                </div>
                                                </form>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    @endif
                                    <!-- /.modal -->
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