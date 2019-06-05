
@extends('staff.index')
@section('body')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Edit Sub Category
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{url('admin')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li><a href="{{url('admin/company-nature')}}"><i class="fa fa-briefcase"></i> Sub Category</a></li>
                <li class="active">Edit Sub Category</li>
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
                            <h3 class="box-title">Edit Sub Category</h3>
                            <h3 class="box-title pull-right"><a href="{{url('admin/company-nature')}}" class="btn btn-primary btn-xs">Company Nature Listing</a></h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Sub Cat Name</th>
                                    <th>Cat Name</th>
                                    <th>Alphabate</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <form action="" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <tr>
                                        <td>
                                            <input type="text" name="name" class="form-control" value="{{$sub_category->name}}">
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <select name="cat_id" class="form-control select2" style="width: 100%;">
                                                    <option value="">Choose Parent Category</option>
                                                    @foreach($category as $cat)
                                                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <select name="alphabet_id" class="form-control select2" style="width: 100%;">
                                                    <option value="">Choose Alphabate</option>
                                                    @foreach($alpha as $alphabate)
                                                        <option value="{{$alphabate->id}}">{{$alphabate->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
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
            </div>


        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
