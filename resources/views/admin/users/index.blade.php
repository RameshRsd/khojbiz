@extends('admin.index')
@section('body')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                User Management
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{url('admin')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li class="active">User Management</li>
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
                            <h3 class="box-title">User Listing</h3>
                            {{--<h3 class="box-title pull-right"><a href="{{url('admin/create-events')}}" class="btn btn-primary btn-xs">Create New Event</a></h3>--}}
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>User Name</th>
                                    <th>ID</th>
                                    <th>PW</th>
                                    <th>User Type (Role)</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $key=>$user)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>{{$user->name}} @if(isset($user->client)) <b>({{$user->client->company_name}})</b> @endif</td>
                                        <td>{{$user->email}}</td>
                                        <td>
                                            @if(isset($user->client))
                                                {{$user->client->password}}
                                                @elseif(isset($user->staff))
                                                {{$user->staff->password}}
                                            @endif
                                        </td>
                                        <td>
                                            @if($user->type=='admin')
                                                <button class="btn btn-success btn-xs">Admin</button>
                                            @elseif($user->type=='candidate')
                                                <button class="btn btn-warning btn-xs">Candidate</button>
                                            @elseif($user->type=='client')
                                                <button class="btn btn-primary btn-xs">Client</button>
                                            @elseif($user->type=='users')
                                                <button class="btn btn-info btn-xs">User</button>
                                                @else
                                                <button class="btn btn-secondary btn-xs">Staff</button>
                                            @endif
                                        </td>
                                        <td>
                                            @if($user->status=='active')
                                                <form action="{{url('admin/user_account_update').'/'.$user->id}}" method="post">
                                                    {{csrf_field()}}
                                                    <input type="hidden" name="status" value="inactive">
                                                    <button type="submit" class="btn btn-success btn-xs" title="Click here to In-Active">Active</button>
                                                </form>
                                                @else
                                                <form action="{{url('admin/user_account_update').'/'.$user->id}}" method="post">
                                                    {{csrf_field()}}
                                                    <input type="hidden" name="status" value="active">
                                                    <button type="submit" class="btn btn-warning btn-xs">In-Active</button>
                                                </form>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>
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