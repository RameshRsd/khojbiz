@extends('new.client.notice.layouts.sidebar')
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
                        <h5 class="overview-heading left">Notice List</h5>
                    </div>
                    <div class="content-main">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>SN</th>
                                <th>Notice Title</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($notices as $key=>$notice)
                                <tr>
                                    <td>{{++$key}}</td>
                                    <td>{{$notice->name}}</td>
                                    <td>
                                        @if($notice->status=='public')
                                            <button class="btn btn-success btn-sm">Public</button>
                                        @else
                                            <button class="btn btn-warning btn-sm">Draft</button>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{url('client/notice/list-notice').'/'.$notice->id.'/edit'}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> View/Edit</a>
                                        <a href="{{url('client/notice/list-notice').'/'.$notice->id.'/delete'}}" onclick="return confirm('Are you sure to delete this record?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
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