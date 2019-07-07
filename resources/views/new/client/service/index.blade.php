@extends('new.client.service.layouts.sidebar')
@section('body')

    <div class="row">
        <div class="col-lg-12">
        @if(session('success'))
                <div class="col-lg-12">
                    <div role="alert" style="background-color:#d4edda; color:#155724; border-radius: 5px;" class="alert  alert-dismissible show">
                        <span class="btn btn-success btn-xs">Success</span> {{session('success')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
                <div style="clear: both;"></div>
            @endif
        @if(session('error'))
                <div class="col-lg-12">
                    <div role="alert" style="background-color:#d4edda; color:#155724; border-radius: 5px;" class="alert  alert-dismissible show">
                        <span class="btn btn-danger btn-xs">Error</span> {{session('error')}}
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


            <div class="content-wrapp">
                <div class="content-covered">
                    <div class="content-header">
                        <h5 class="overview-heading left">List Services</h5>
                    </div>
                    <div class="content-main">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>SN</th>
                                <th>Title</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($services as $key=>$client_service)
                                <tr>
                                    <td>{{++$key}}</td>
                                    <td>{{$client_service->name}}</td>
                                    <td>
                                        <a href="{{url('client/service-manage/list-service').'/'.$client_service->id.'/edit'}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                        <a href="{{url('client/service-manage/list-service').'/'.$client_service->id.'/delete'}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this record?')"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>

    @endsection