@extends('new.client.gallery.layouts.sidebar')
@section('body')

    <div class="row">
        <div class="col-lg-12">
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
                        <h5 class="overview-heading left">Add New Images</h5>
                    </div>
                    <div class="content-main">
                        <form action="" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="col-lg-12">
                                    <label for="details">Image Group Name</label>
                                    <input type="text"  name="name"  class="form-control" placeholder="Write image group name">
                                </div>
                                <div class="col-lg-12">
                                    <label for="details">Choose Multiple Images</label>
                                    <input type="file" id="file-multiple-input" name="title[]" multiple="" class="form-control-file">
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
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
@endsection