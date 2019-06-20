@extends('staff.index')
@section('body')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Product Listing
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{url('staff')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li class="active">Product Listing</li>
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
                            <h3 class="box-title" style="display: block;">Product Listing <a href="{{url('staff/add-new-suppliers')}}" class="btn btn-primary btn-xs pull-right"><i class="fa fa-plus-circle"></i> Create New Product</a></h3>
                            {{--<h3 class="box-title pull-right"><a href="{{url('admin/create-events')}}" class="btn btn-primary btn-xs">Create New Event</a></h3>--}}
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Product Name</th>
                                    <th>Choose Package</th>
                                    <th>Edit</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $key=>$product)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>{{$product->product_name}}</td>
                                        <td>
                                            @if($product->product_type=='bronze')
                                                <button class="btn btn-primary btn-xs">Bronze</button>
                                            @elseif($product->product_type=='silver')
                                                <button class="btn btn-success btn-xs">Silver</button>
                                            @elseif($product->product_type=='gold')
                                                <button class="btn btn-success btn-xs">Gold</button>
                                            @elseif($product->product_type=='diamond')
                                                <button class="btn btn-success btn-xs">Diamond</button>
                                            @elseif($product->product_type=='platinum')
                                                <button class="btn btn-success btn-xs">Platinum</button>
                                            @elseif($product->product_type=='free_listing')
                                                <button class="btn btn-success btn-xs">Free Listing</button>
                                            @else
                                                <button class="btn btn-warning btn-xs">General</button>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></a>
                                            <a href="{{url('admin/list-suppliers/suppliers_id=').$product->id.'/edit'}}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>
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