
@extends('admin.index')
@section('body')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
               Edit Client
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{url('admin/list-clients')}}"><i class="fa fa-calendar-times-o"></i>Client List</a></li>
                <li class="active">Edit Client</li>
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
                            <h3 class="box-title">Edit Client</h3>
                            <h3 class="box-title pull-right" style="margin-right:5px;"><a href="{{url('admin/list-clients')}}" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> Client List</a></h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <form action="" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="col-md-12">
                                    <label for="" style="border-bottom: 1px solid grey;">Business Details</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Company Name</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <input type="text" name="company_name" class="form-control" value="{{$client->company_name}}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Alphabate Name</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <select name="alpha_id" class="form-control select2" style="width: 100%;">
                                                            <option value="">Choose Alphabate</option>
                                                            @foreach($alpha as $alphabates)
                                                                <option value="{{$alphabates->id}}" @if($alphabates->id == $client->cat_id)selected @endif>{{$alphabates->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Package Details</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <select name="client_type" id="client_type" class="form-control select2" style="width: 100%;">
                                                            <option value="bronze" @if($client->client_type=='bronze') selected @endif>Bronze</option>
                                                            <option value="silver" @if($client->client_type=='silver') selected @endif>Silver</option>
                                                            <option value="gold" @if($client->client_type=='gold') selected @endif>Gold</option>
                                                            <option value="diamond" @if($client->client_type=='diamond') selected @endif>Diamond</option>
                                                            <option value="platinum" @if($client->client_type=='platinum') selected @endif>Platinum</option>
                                                            <option value="free_listing" @if($client->client_type=='free_listing') selected @endif>Free Listing</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Address</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="company_address" value="{{$client->company_address}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Head Of Company</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="company_head" value="{{$client->company_head}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Mobile No.</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <input type="number" class="form-control" name="mobile" value="{{$client->mobile}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Office Tel No.</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <input type="number" class="form-control" name="ofc_tel_no" value="{{$client->ofc_tel_no}}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Upload Logo</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <img src="{{url('public/uploads/logos').'/'.$client->logo}}" alt="" style="width:64px; height: 64px;">
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="form-group">
                                                        <input type="file" name="logo" class="form-control">
                                                        <i style="color:Red; font-weight: bold; font-size:11px;">(Note:Recommonded Size: Square Shape)</i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Upload Banner</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <img src="{{url('public/uploads/banners').'/'.$client->banner}}" alt="" style="width:100%;">
                                                        <input type="file" name="banner" class="form-control">
                                                        <i style="color:Red; font-weight: bold; font-size:11px;">(Note:Width: 280px, Height:95px)</i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="" style="border-bottom: 1px solid grey;">Contact Details</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>District</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <select name="district_id" class="form-control select2" style="width: 100%;">
                                                            @foreach($districts as $district)
                                                                <option value="{{$district->id}}" @if($district->name == $district->id) selected @endif>{{$district->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">

                                        </div>
                                        <div class="col-md-6">

                                        </div>
                                        <div class="col-md-6">

                                        </div>
                                        <div class="col-md-6">

                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Website</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <input type="url" class="form-control" name="website" value="{{$client->website}}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Location Map Link</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="map_link" value="{{$client->map_link}}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="" style="border-bottom: 1px solid grey;">Short Description</label>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <textarea name="company_profile" id="editor1" cols="30" rows="10" class="form-control content">{{$client->company_profile}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-sm form-control">Submit</button>
                                    </div>
                                </div>
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