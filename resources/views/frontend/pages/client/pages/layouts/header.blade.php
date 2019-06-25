<li>
    <a class="nav-link d-flex justify-content-between align-items-center  @if(request()->segment('2') =='about-us') active @endif " href="{{url($client->user->name.'/'.'about-us')}}">
        About Us
    </a>
</li>
<li>
    <a class="nav-link d-flex justify-content-between align-items-center  @if(request()->segment('2') =='profile') active @endif" href="{{url($client->user->name.'/'.'profile')}}">Profile </a>
</li>
<li>
    <a class="nav-link d-flex justify-content-between align-items-center @if(request()->segment('2') =='product-and-service') active @endif" href="{{url($client->user->name.'/'.'product-and-service')}}">Product & Service</a>
</li>
<li>
    <a class="nav-link d-flex justify-content-between align-items-center @if(request()->segment('2') =='image-gallery') active @endif" href="{{url($client->user->name.'/'.'image-gallery')}}">Image Gallery </a>
</li>
<li>
    <a class="nav-link d-flex justify-content-between align-items-center @if(request()->segment('2') =='contact-us') active @endif" href="{{url($client->user->name.'/'.'contact-us')}}">Contact Us </a>
</li>