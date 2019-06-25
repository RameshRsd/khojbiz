<div class="col-md-4 col-xl-4">
    <!-- Products -->
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">
                <i class="fa fa-pray text-muted mr-1"></i> Contact
            </h3>
            <div class="block-options">
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                    <i class="si si-refresh"></i>
                </button>
            </div>
        </div>
        <div class="block-content">
            <div class="media d-flex align-items-center push">
                <div class="mr-3">
                    <i class="si si-control-end fa-1x"></i>
                </div>
                <div class="media-body">
                    <div class="font-w600">{{$client->company_name}}</div>
                    <div class="font-size-sm">{{$client->company_address}}</div>
                </div>
            </div>
            <div class="media d-flex align-items-center push">
                <div class="mr-3">
                    @if(is_file(public_path('uploads/logos/').'/'.$client->logo) && file_exists(public_path('uploads/logos/').'/'.$client->logo))
                        <img class="img-avatar img-avatar-thumb" src="{{url('public/uploads/logos/').'/'.$client->logo}}" alt="">
                    @else
                        <img class="img-avatar" src="{{url('public/images/defaultImg/logo.png')}}" alt="">
                    @endif
                </div>
                <div class="media-body">
                    <div class="font-w600">{{$client->company_head}}</div>
                    @if(isset($client->mobile)) <div class="font-size-sm"><i class="fa fa-mobile"></i> {{$client->mobile}}</div> @endif
                    @if(isset($client->ofc_tel_no))<div class="font-size-sm"><i class="fa fa-phone"></i> {{$client->ofc_tel_no}}</div>@endif
                    <div class="font-size-sm"><i class="fa fa-envelope"></i> {{$client->user->email}}</div>
                    @if($client->website)<div class="font-size-sm"><i class="fa fa-map-marker"></i> {{$client->website}}</div>@endif
                </div>
            </div>
        </div>
    </div>
    <!-- END Products -->
    <!-- Contact us -->
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">
                <i class="fa fa-briefcase text-muted mr-1"></i> Location
            </h3>
            <div class="block-options">
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                    <i class="si si-refresh"></i>
                </button>
            </div>
        </div>
        <div class="block-content">
            <style>
                iframe{
                    width:100%;
                }
            </style>
            @if(isset($client->map_link))
                {!! $client->map_link !!}
            @else
                <iframe src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d111989.57931510158!2d80.82299563646195!3d28.69938636764138!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d28.6977528!2d80.89298939999999!5e0!3m2!1sen!2snp!4v1557245584772!5m2!1sen!2snp" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                <div class="text-center push">
                    <button type="button" class="btn btn-sm btn-light">View More..</button>
                </div>

            @endif
        </div>
    </div>
    <!-- END Contact US -->
</div>
