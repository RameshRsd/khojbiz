<div class="col-lg-4">
    <div class="content-wrapp">
        <div class="row">
            <div class="col-lg-12">
                <div class="content-covered">
                    <div class="content-header">
                        <h5 class="overview-heading">Map/Location</h5>
                    </div>
                    <div class="content-main">
                        @if(isset($client->map_link))
                            {!! $client->map_link !!}
                        @else
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.609443762013!2d85.29854621506188!3d27.698463482795606!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1920d9df3e31%3A0xa170e3082e86566c!2sAsian+Technology+Pvt.+Ltd.!5e0!3m2!1sen!2snp!4v1562136322765!5m2!1sen!2snp" width="600" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="content-covered">
                    <div class="content-header">
                        <h5 class="overview-heading">Contact Details</h5>
                    </div>
                    <div class="content-main">
                        <ul class="overview-listing">
                            <li><b><i class="fa fa-building-o"></i> {{$client->company_name}}</b></li>
                            <li><a href="{{url('search?location=').$client->company_address}}"><i class="fa fa-map-marked"></i> {{$client->company_address}}</a></li>
                            @if(isset($client->ofc_tel_no))<li><b><i class="fa fa-phone"></i> {{$client->ofc_tel_no}}</b></li>@endif
                            @if($client->user->email)<li><b><i class="fa fa-envelope-o"></i> {{$client->user->email}}</b></li>@endif
                            @if($client->website)<li><a href="{{$client->website}}" target="_blank"><i class="fa fa-globe"></i> Visit Website</a></li>@endif
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="content-covered">
                    <div class="content-header">
                        <h5 class="overview-heading">Get Enquiry</h5>
                    </div>
                    <div class="content-main">
                        @if(session('contact-success'))
                            <span class="btn btn-success btn-sm">Success</span> {{session('contact-success')}}<hr>
                        @endif
                        @if($errors->any())
                            @foreach($errors->all() as $error)
                                <span class="btn btn-danger btn-sm">Error</span> {{$error}}<br>
                            @endforeach
                            <hr>
                        @endif

                        <form action="{{url('client/get_enquiry').'/'.$client->id}}" method="post">
                            {{csrf_field()}}
                            <div class="row form-group">
                                <div class="col-lg-12">
                                    <label for="">Full Name</label>
                                    <input type="text" class="form-control" name="name" required placeholder="Full Name">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-lg-6">
                                    <label for="">Mobile No.</label>
                                    <input type="text" class="form-control" name="mobile" required placeholder="Mobile Number">
                                </div>
                                <div class="col-lg-6">
                                    <label for="">Email</label>
                                    <input type="text" class="form-control" name="email" required placeholder="Email Address">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-lg-12">
                                    <label for="">Leave Your Message</label>
                                    <textarea name="details" class="form-control" id="" required></textarea>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-warning btn-sm form-control">Send Quiry</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
