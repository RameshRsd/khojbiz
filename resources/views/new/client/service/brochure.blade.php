@extends('client.service.layouts.sidebar')
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

            <div class="employer_overview">
                <div class="client_heading">
                    <h6 class="top_employer_heading"><i class="fa fa-list"></i> Brochure</h6>
                </div>
                <div class="client_content">
                    @if(count($brochures)<1)
                        <form action="" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                        <div class="row" style="margin:10px 0;">
                            <div class="col-lg-2">
                                <label for="">Choose Brochure</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="file" class="form-control" name="file">
                            </div>
                            <div class="col-lg-2">
                                <button type="submit" class="btn btn-primary btn-sm">Upload</button>
                            </div>
                        </div>
                        </form>
                    @endif
                    <table class="table">
                        <thead>
                        <tr>
                            <th>SN</th>
                            <th>Brochure</th>
                            <th>View</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($brochures as $key=>$brochure)
                        <tr>
                            <td>{{++$key}}</td>
                            <td>{{$brochure->file}}</td>
                            <td>
                                @if(isset($brochure->file))
                                    <a href="{{url('public/uploads/brochure').'/'.$brochure->file}}"><i class="fa fa-eye"></i> View Brochure</a>
                                    @else
                                    Not Found
                                @endif
                            </td>
                            <td>
                                <a href="{{url('client/service_manage/brochure').'/'.$brochure->id.'/edit'}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Update Brochure</a>
                                {{--<a href="{{url('client/service_manage/list-service').'/'.$brochures->id.'/delete'}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>--}}
                            </td>
                        </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @endsection