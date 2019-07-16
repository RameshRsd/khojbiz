@extends('admin.index')
@section('body')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Feature Wise Package Listing
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{url('admin')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li class="active">Feature Wise  Listing</li>
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
                            <h3 class="box-title" style="display: block;">Feature Wise  Listing
                                <button type="button"  class="btn btn-primary btn-xs pull-right" data-toggle="modal" data-target="#modal-success">
                                    <i class="fa fa-plus-circle"></i> Add New Feature
                                </button>
                            </h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Feature</th>
                                    <th>Package Name</th>
                                    <th>Status</th>
                                    <th>Enter By</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($f_packages as $key=>$f_package)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>{{$f_package->details}}</td>
                                        <td>{{$f_package->package->name}}</td>
                                        <td>
                                            @if($f_package->open=='Yes')
                                                <button class="btn btn-success btn-xs">Published</button>
                                            @else
                                                <button class="btn btn-warning btn-xs">Unpublished</button>
                                                @endif
                                        </td>
                                        <td>{{$f_package->user->name}}</td>
                                        <td>
                                            <button type="button"  class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal-success{{$f_package->id}}">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <div class="modal modal-success fade" id="modal-success{{$f_package->id}}">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title">Edit Feature</h4>
                                                </div>
                                                <form action="{{url('admin/package-feature').'/'.$f_package->id.'/update'}}" method="post">
                                                    {{csrf_field()}}
                                                    <div class="modal-body">
                                                        <div class="row form-group">
                                                            <div class="col-lg-4">
                                                                <label for="package_id">Choose Package</label>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <select name="package_id" id="package_id" class="form-control">
                                                                    <option value="">Choose Pacakge</option>
                                                                    @foreach($packages as $package)
                                                                        <option value="{{$package->id}}" @if($f_package->package_id==$package->id) selected @endif>{{$package->name}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col-lg-4">
                                                                <label for="details">Feature</label>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <input type="text" name="details" id="details" value="{{$f_package->details}}" class="form-control" placeholder="Feature Title" required>
                                                            </div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col-lg-4">
                                                                <label for="Status">Status</label>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <input type="radio" name="status" value="Yes" @if($f_package->open=='Yes') checked @endif> Active
                                                                <input type="radio" name="status" value="No" @if($f_package->open=='No') checked @endif> Inactive
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-outline">Update</button>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
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
            <div class="modal modal-success fade" id="modal-success">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Add New Feature</h4>
                        </div>
                        <form action="" method="post">
                            {{csrf_field()}}
                            <div class="modal-body">
                                <div class="row form-group">
                                    <div class="col-lg-4">
                                        <label for="package_id">Choose Package</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <select name="package_id" id="package_id" class="form-control">
                                            <option value="">Choose Pacakge</option>
                                            @foreach($packages as $package)
                                                <option value="{{$package->id}}" @if(old('package_id')==$package->id) selected @endif>{{$package->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-lg-4">
                                        <label for="details">Feature</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" name="details" id="details" value="{{old('details')}}" class="form-control" placeholder="Feature Title" required>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-lg-4">
                                        <label for="Status">Status</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="radio" name="status" value="Yes" @if(old('status')=='Yes' || old('status') =='') checked @endif> Active
                                        <input type="radio" name="status" value="No" @if(old('status')=='No') checked @endif> Inactive
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-outline">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->

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