
@extends('staff.index')
@section('body')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Client Wise Category
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{url('admin/list-clients')}}"><i class="fa fa-calendar-times-o"></i>Client Wise Category</a></li>
                <li class="active">Create Client Wise Category</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">
            <div style="clear: both;"></div>
            @if(session('success'))
                <div class="col-sm-12">
                    <div role="alert" style="background-color:#d4edda; color:#155724; border-radius: 5px;" class="alert  alert-dismissible show">
                        <span class="btn btn-success btn-xs">Success</span> Successfully
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
                            <h3 class="box-title">Client Wise Category</h3>
                            <h3 class="box-title pull-right" style="margin-right:5px;"><a href="{{url('admin/list-clients')}}" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> List Client Wise Category</a></h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <form action="" method="post">
                                {{csrf_field()}}
                                <table class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>Client</th>
                                        <th>Category</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <form action="" method="post">
                                        {{csrf_field()}}
                                        <tr>
                                            <td>
                                                <select name="client_id" id="" class="form-control">
                                                    @foreach($client as $clients)
                                                        <option value="{{$clients->id}}">{{$clients->company_name}}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td>
                                                <select name="cat_id[]" class="form-control select2" multiple="multiple" data-placeholder="Select Category"
                                                        style="width: 100%;">
                                                    @foreach($categories as $faculties)
                                                        <option value="{{$faculties->id}}">{{$faculties->name}}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td>
                                                <button type="submit" class="btn btn-primary btn-sm">Create</button>
                                            </td>
                                        </tr>
                                    </form>
                                    </tbody>
                                </table>
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
@section('script')

@endsection