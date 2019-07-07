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
                    <h6 class="top_employer_heading"><i class="fa fa-list"></i>Update Brochure</h6>
                </div>
                <div class="client_content">
                        <form action="" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                        <div class="row" style="margin:10px 0;">
                            <div class="col-lg-2">
                                <label for="">Choose New Brochure</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="file" class="form-control" name="file">
                            </div>
                            <div class="col-lg-2">
                                <button type="submit" class="btn btn-primary btn-sm">Update</button>
                            </div>
                        </div>
                        </form>
                </div>
            </div>
        </div>
    </div>

    @endsection