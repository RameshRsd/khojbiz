
@extends('staff.index')
@section('body')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Create New Client
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{url('admin/list-clients')}}"><i class="fa fa-calendar-times-o"></i>Client List</a></li>
                <li class="active">Create New Client</li>
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
                            <h3 class="box-title">Create New Client</h3>
                            <h3 class="box-title pull-right" style="margin-right:5px;"><a href="{{url('admin/list-clients')}}" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> Client List</a></h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <form action="" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="" style="border-bottom: 1px solid grey;">Account Details</label>
                                    <div class="row">
                                        {{--<div class="col-md-6">--}}
                                            {{--<div class="row">--}}
                                                {{--<div class="col-md-4">--}}
                                                    {{--<div class="form-group">--}}
                                                        {{--<label>User Name</label>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                {{--<div class="col-md-8">--}}
                                                    {{--<div class="form-group">--}}
                                                        {{--<input type="text" name="name" class="form-control" placeholder="User Name">--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <input type="email" name="email" id="email-address" class="form-control emailaddress" value="{{old('email')}}" placeholder="Valid Email">
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
                                                            <option value="free_listing">Free Listing</option>
                                                            <option value="bronze">Bronze</option>
                                                            <option value="silver">Silver</option>
                                                            <option value="gold">Gold</option>
                                                            <option value="diamond">Diamond</option>
                                                            <option value="platinum">Platinum</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Password</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <input type="password" class="form-control" name="password" placeholder="password">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Re Type</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <input type="password" class="form-control" name="password_confirmation" placeholder="Re Type Password">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                                                        <input type="text" name="company_name" value="{{old('company_name')}}" class="form-control" placeholder="Full Company Name">
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
                                                            @foreach($alpha as $alphabate)
                                                                <option value="{{$alphabate->id}}">{{$alphabate->name}}</option>
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
                                                        <label>Upload Logo</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <input type="file" name="logo" class="form-control">
                                                        <i style="color:Red; font-weight: bold; font-size:11px;">(Note:Recommonded Size: Square Shape)</i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Upload Banner</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <input type="file" name="banner" class="form-control">
                                                        <i style="color:Red; font-weight: bold; font-size:11px;">(Note:Width: 280px, Height:95px)</i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label>Choose Category</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="form-group">
                                                        <select name="cat_id[]" class="form-control select2" multiple="multiple" data-placeholder="Select Category"
                                                                style="width: 100%;">
                                                            @foreach($categories as $category)
                                                                <option value="{{$category->id}}" @if($category->id == old('cat_id')) selected @endif >{{$category->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
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
                                                                <option value="{{$district->id}}"  @if($district->id == old('district_id')) selected @elseif($district->name == 'Kathmandu') selected @endif>{{$district->name}}</option>
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
                                                        <label>Address</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="company_address" value="{{old('company_address')}}" placeholder="Company Address">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Head Of Company</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="company_head" value="{{old('company_head')}}" placeholder="Name of Company Head">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Mobile No.</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="mobile"  value="{{old('mobile')}}" placeholder="Mobile No.">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Office Tel No.</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="ofc_tel_no" value="{{old('ofc_tel_no')}}" placeholder="Office Tel No.">
                                                    </div>
                                                </div>
                                            </div>
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
                                                        <input type="url" class="form-control" name="website" value="{{old('website')}}" placeholder="Exp: www.khojbiz.com">
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
                                                        <input type="text" class="form-control" name="map_link"  value="{{old('map_link')}}" placeholder="Copy Paste Map Embed link">
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
                                            <textarea name="company_profile" id="editor1" cols="30" rows="10" class="form-control content" placeholder="Describe about company">{{old('company_profile')}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="" style="border-bottom: 1px solid grey;">Tags/Keywords</label>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="text" multiple name="tag" class="form-control" value="{{old('tag')}}" placeholder="Write Tags/Keyword, Ex, Printing, Digital, Garment, Computer etc.">
                                            <i style="color:Red; font-weight: bolder;"><small>Note: These Tags/Keword are helps to find easily while searching directory.</small></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="" style="border-bottom: 1px solid grey;">Payment Status</label>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                {{--<input type="radio" name="status" value="Paid" @if(old('status') == 'Paid') checked @endif>Paid--}}
                                                <input type="radio" name="status" value="Unpaid" @if(old('status') == 'Unpaid') checked @endif>Unpaid
                                                <input type="radio" name="status"  value="Pending"  @if(old('status') == 'Pending') checked @endif >Pending
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <label for="" style="border-bottom: 1px solid grey;">Send Mail To Client ? <i>(for id & password)</i></label>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                {{--<input type="radio" name="status" value="Paid" @if(old('status') == 'Paid') checked @endif>Paid--}}
                                                <input type="radio" name="send_mail" value="Yes" required>Yes
                                                <input type="radio" name="send_mail"  value="No" required>No<br>
                                                <i>Note: If Client's Mail address Valid Then Click Yes</i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                                    </div>
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
    <script type="text/javascript">
        var path = "{{ route('email-checker') }}";
        $('input.emailaddress').typeahead({
            source:  function (query, process) {
                return $.get(path, { query: query }, function (data) {
                    return process(data);
                });
            }
        });
    </script>
@endsection