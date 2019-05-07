
@extends('admin.index')
@section('body')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
               Edit Candidate
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{url('admin/list-candidates')}}"><i class="fa fa-calendar-times-o"></i>Candidate List</a></li>
                <li class="active">Edit Candidate</li>
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
                            <h3 class="box-title">Edit Candidate</h3>
                            <h3 class="box-title pull-right" style="margin-right:5px;"><a href="{{url('admin/list-candidates')}}" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> Candidate List</a></h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <form action="" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="" style="border-bottom: 1px solid grey;">Personal Details</label>
                                    <div class="row">
                                        <div class="col-sm-4 col-sm-offset-4" style="text-align: center; margin-bottom:10px;">
                                            <div style="width:100px; height: 100px; margin:0 auto; overflow:hidden; border:1px solid lightgrey;">
                                                @if(is_file(public_path('uploads/candidates/').'/'.$candidate->image) && file_exists(public_path('uploads/candidates/').'/'.$candidate->image))
                                                    <img src="{{url('public/uploads/candidates').'/'.$candidate->image}}" alt="" style="width: 100%; padding:2px; background-color: #fff; border: 1px solid lightgray;">
                                                @else
                                                    <img src="{{url('public/uploads/candidates/blank.png')}}" alt="" style="width: 100%; padding:2px; background-color: #fff; border: 1px solid lightgray;">
                                                @endif
                                            </div>
                                            <label for="">Upload Photo</label>
                                            <input type="file"  name="image" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>First Name</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <input type="text" name="first_name" value="{{$candidate->first_name}}" class="form-control" placeholder="First Name">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Middle Name</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <input type="text" name="middle_name" value="{{$candidate->middle_name}}" class="form-control" placeholder="Middle Name">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Last Name</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <input type="text" name="last_name" value="{{$candidate->last_name}}" class="form-control" placeholder="Last Name">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Gender</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <select name="gender" class="form-control select2" style="width: 100%;">
                                                           <option value="">Choose..</option>
                                                           <option value="Male" @if($candidate->gender == 'Male') selected @endif>Male</option>
                                                           <option value="Female" @if($candidate->gender == 'Female') selected @endif>Female</option>
                                                           <option value="Other" @if($candidate->gender == 'Other') selected @endif>Other</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Marital Status</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <select name="marital_status" class="form-control select2" style="width: 100%;">
                                                           <option value="">Choose..</option>
                                                           <option value="Married" @if($candidate->marital_status == 'Married') selected @endif>Married</option>
                                                           <option value="Un-Married" @if($candidate->marital_status == 'Un-Married') selected @endif>Un-Married</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Date Of Birth</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <input type="date" name="dob" value="{{$candidate->dob}}" class="form-control" placeholder="Date Of Birth">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="" style="border-bottom: 1px solid grey;">Contact Details (Temporary)</label>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>District</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <select name="temp_district_id" class="form-control select2" style="width: 100%;">
                                                            <option value="">Choose..</option>
                                                            @foreach($districts as $district)
                                                                <option value="{{$district->id}}" @if($district->id == $candidate->temp_district_id) selected @endif>{{$district->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>MNP/NP/VDC</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="current_address" value="{{$candidate->current_address}}" placeholder="MNP/NP/VDC">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Tel No.</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <input type="number" class="form-control" name="telephone_no" value="{{$candidate->telephone_no}}" placeholder="Telephone no.">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="" style="border-bottom: 1px solid grey;">Contact Details (Permanent)</label>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>District</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <select name="perm_district_id" class="form-control select2" style="width: 100%;">
                                                            <option value="">Choose..</option>
                                                            @foreach($districts as $district)
                                                                <option value="{{$district->id}}" @if($district->id == $candidate->perm_district_id) selected @endif>{{$district->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>MNP/NP/VDC</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="permanent_address" value="{{$candidate->permanent_address}}" placeholder="MNP/NP/VDC">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Mobile No.</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <input type="number" class="form-control" name="mobile_number" value="{{$candidate->mobile_number}}" placeholder="Mobile Number">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="" style="border-bottom: 1px solid grey;">Career Details</label>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>1st Preference</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <select name="job_nature_id1" class="form-control select2" style="width: 100%;">
                                                            <option value="">Choose Job Nature..</option>
                                                            @foreach($job_natures as $job_nature)
                                                                <option value="{{$job_nature->id}}" @if($job_nature->id == $candidate->job_nature_id1) selected @endif>{{$job_nature->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>2nd Preference</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <select name="job_nature_id2" class="form-control select2" style="width: 100%;">
                                                            <option value="">Choose Job Nature..</option>
                                                            @foreach($job_natures as $job_nature)
                                                                <option value="{{$job_nature->id}}" @if($job_nature->id == $candidate->job_nature_id2) selected @endif>{{$job_nature->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Preference Area</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="preference_location" value="{{$candidate->preference_location}}" placeholder="Preference Location">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Job Level</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <select name="job_level_id" class="form-control select2" style="width: 100%;">
                                                            <option value="">Choose Job level..</option>
                                                            @foreach($job_levels as $job_level)
                                                                <option value="{{$job_level->id}}" @if($job_level->id == $candidate->job_level_id) selected @endif>{{$job_level->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Min. Salary</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <input type="number" name="min_salary" value="{{$candidate->min_salary}}" class="form-control" placeholder="Expected Min Salary">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Max. Salary</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <input type="number" name="max_salary" value="{{$candidate->max_salary}}" class="form-control" placeholder="Expected Max Salary">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="" style="border-bottom: 1px solid grey;">Career Plan</label>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <textarea name="career_plan" id="career_plan" cols="30" rows="10" class="form-control editor1" placeholder="Describe about your career plan">{!! $candidate->career_plan !!}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="" style="border-bottom: 1px solid grey;">Hobbies</label>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <textarea name="hobbies" id="hobbies" cols="30" rows="10" class="form-control editor1" placeholder="Describe about your hobbies">{!! $candidate->hobbies !!}</textarea>
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
    <script>
        var dd=1; $(".editor1").each(function(){ $(this).attr("id","editor1"+dd); CKEDITOR.replace( 'editor1'+dd); dd=dd+1; });
        $('.datepicker').datepicker({
            autoclose: true
        })

    </script>
@endsection