@extends('new.client.profile.layouts.sidebar')
@section('body')

    <div class="row">
        <div class="col-lg-12">
            @if(session('success'))
                <div class="col-sm-12">
                    <div role="alert" style="background-color:#d4edda; color:#155724; border-radius: 5px;" class="alert  alert-dismissible show">
                        <span class="btn btn-success btn-xs">Success</span> {{session('success')}}<br>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
                <div style="clear: both;"></div>
            @endif
            @if(session('job-error'))
                <div class="col-sm-12">
                    <div role="alert" style="background-color:#d4edda; color:#155724; border-radius: 5px;" class="alert  alert-dismissible show">
                        <span class="btn btn-danger btn-xs">Error</span> {{session('job-error')}}<br>
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
                        <h5 class="overview-heading left">Business Details</h5>
                    </div>
                    <div class="content-main">
                        <form action="" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label>Name</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="form-group">
                                                        <input type="text" name="company_name" value="{{$client->company_name}}" class="form-control" placeholder="Full Company Name">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Current Package</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <select name="" disabled="disabled" class="form-control select2" style="width: 100%;">
                                                            <option value="general" @if($client->client_type=='bronze') selected @endif>Bronze Package</option>
                                                            <option value="featured" @if($client->client_type=='silver') selected @endif>Silver Package</option>
                                                            <option value="sponser" @if($client->client_type=='gold') selected @endif>Gold Package</option>
                                                            <option value="sponser" @if($client->client_type=='diamond') selected @endif>Diamond Package</option>
                                                            <option value="sponser" @if($client->client_type=='Platinum') selected @endif>Platinum Package</option>
                                                            <option value="sponser" @if($client->client_type=='free_listing') selected @endif>General Package</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Upload Logo</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <img src="{{url('public/uploads/logos').'/'.$client->logo}}" alt="" style="width:50%;">
                                                        <input type="file" name="logo" class="form-control">
                                                        <i style="color:Red; font-weight: bold; font-size:11px;">(Note:Size: Square Shape)</i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Upload Long Banner</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <img src="{{url('public/uploads/banners').'/'.$client->banner}}" alt="" style="width:100%;">
                                                        <input type="file" name="banner" class="form-control">
                                                        <i style="color:Red; font-weight: bold; font-size:11px;">(Note:Width: 1200px, Height:280px)</i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Website</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <input type="url" name="website" value="{{$client->website}}" class="form-control" placeholder="Ex. https://wwww.sajhajob.com">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label>Categories</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="form-group">
                                                        <select name="cat_id[]" id="cat_id" class="form-control" multiple>                                                            <option value="">Choose Category</option>
                                                            @foreach($categories as $category)
                                                                <option value="{{$category->id}}"  @if('['.$client->id.']' == $category->getClientIds()) selected @endif>{{$category->name}}</option>
                                                                @endforeach
                                                        </select>
                                                        <!-- dribbble -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-sm">Update</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
@section('script')
    <script>
        var dd=1; $(".editor1").each(function(){ $(this).attr("id","editor1"+dd); CKEDITOR.replace( 'editor1'+dd); dd=dd+1; });
    </script>
    <script src="{{url('public/js/multiselect.js')}}"></script>

@endsection
@section('script')
@endsection
