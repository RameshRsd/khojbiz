@extends('staff.index')
@section('body')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Client Listing
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{url('login')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li class="active">Client Listing</li>
            </ol>
            <div class="box-header">
                <form action="" method="get">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="">Company Name</label>
                            <input type="text" name="search_company_name" value="{{request('search_company_name')}}" onchange="javascript:this.form.submit();" class="form-control" placeholder="Search By Company Name">
                        </div>
                        <div class="col-md-6"></div>
                    </div>
                </form>
            </div>

        </section>

        <!-- Main content -->
        <section class="content container-fluid">
            <div style="clear: both;"></div>
            @if(session('error'))
                <div class="col-sm-12">
                    <div role="alert" style="background-color:#d4edda; color:#155724; border-radius: 5px;" class="alert  alert-dismissible show">
                        <span class="btn btn-danger btn-xs">Error</span> {{session('error')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
                <div style="clear: both;"></div>
            @endif
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
                            <h3 class="box-title" style="display: block;">Client Listing <a href="{{url('staff/create-client')}}" class="btn btn-primary btn-xs pull-right"><i class="fa fa-plus-circle"></i> Create New</a></h3>
                            {{--<h3 class="box-title pull-right"><a href="{{url('admin/create-events')}}" class="btn btn-primary btn-xs">Create New Event</a></h3>--}}
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table  class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Nature</th>
                                    <th>Contact</th>
                                    <th>Type</th>
                                    <th>Email</th>
                                    <th>PW</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($clients as $key=>$client)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>{{$client->company_name}}<br>
                                            @if($client->status=='Paid')
                                                <small class="btn btn-success btn-xs">Paid</small>
                                            @elseif($client->status=='Unpaid')
                                                <small class="btn btn-danger btn-xs">Unpaid</small>
                                            @else
                                                <small class="btn btn-warning btn-xs">Pending</small>
                                            @endif
                                        </td>
                                        <td>{{$client->company_address}}, {{$client->country->name}}</td>
                                        <td>{{$client->name}}</td>
                                        <td>{{$client->mobile}}</td>
                                        <td>
                                            @if($client->client_type=='bronze')
                                                <button class="btn btn-primary btn-xs">Bronze</button>
                                                @elseif($client->client_type=='silver')
                                                <button class="btn btn-success btn-xs">Silver</button>
                                                @elseif($client->client_type=='gold')
                                                <button class="btn btn-success btn-xs">Gold</button>
                                                @elseif($client->client_type=='diamond')
                                                <button class="btn btn-success btn-xs">Diamond</button>
                                                @elseif($client->client_type=='platinum')
                                                <button class="btn btn-success btn-xs">Platinum</button>
                                            @else
                                                <button class="btn btn-warning btn-xs">Free Listing</button>
                                            @endif
                                        </td>
                                        <td>{{$client->user->email}}</td>
                                        <td>{{$client->password}}</td>
                                        <td>
                                            <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></a>
                                            <a href="{{url('staff/list-clients/client_id=').$client->id.'/edit'}}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                <tr>
                                    <td colspan="9">{{$clients->links()}}</td>
                                </tr>
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