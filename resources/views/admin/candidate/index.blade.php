@extends('admin.index')
@section('body')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Candidate Listing
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{url('admin')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li class="active">Candidate Listing</li>
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
                            <h3 class="box-title" style="display: block;">Candidate Listing</h3>
                            {{--<h3 class="box-title pull-right"><a href="{{url('admin/create-events')}}" class="btn btn-primary btn-xs">Create New Event</a></h3>--}}
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Photo</th>
                                    <th>Full Name</th>
                                    <th>Temp.Address</th>
                                    <th>Mobile</th>
                                    <th>1st Job Prefered</th>
                                    <th>Location</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($candidates as $key=>$candidate)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>
                                            @if(is_file(public_path('uploads/candidates/').'/'.$candidate->image) && file_exists(public_path('uploads/candidates/').'/'.$candidate->image))
                                                <img src="{{url('public/uploads/candidates').'/'.$candidate->image}}" alt="" style="width: 60px; padding:2px; background-color: #fff; border: 1px solid lightgray; border-radius: 100%;">
                                                @else
                                                <img src="{{url('public/uploads/candidates/blank.png')}}" alt="" style="width: 60px; padding:2px; background-color: #fff; border: 1px solid lightgray; border-radius: 100%;">
                                            @endif
                                        </td>
                                        <td>{{$candidate->first_name}} {{$candidate->last_name}}</td>
                                        <td>{{$candidate->current_address}} @if(isset($candidate->temp_district->name)){{$candidate->temp_district->name}}@endif</td>
                                        <td>{{$candidate->mobile_number}}</td>
                                        <td>@if(isset($candidate->first_job_nature->name)){{$candidate->first_job_nature->name}}@endif</td>
                                        <td>{{$candidate->preference_location}}</td>
                                        <td>
                                            <a href="" class="btn btn-warning btn-xs"><i class="fa fa-eye"></i></a>
                                            <a href="{{url('admin/list-candidates/candidate_id=').$candidate->id.'/edit'}}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>
                                            <a href="" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
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