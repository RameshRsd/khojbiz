@section('aside')

    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

            <!-- Sidebar user panel (optional) -->
            <div class="user-panel">
                <div class="pull-left image">
                    @php
                        $photo=\App\Staff::where('user_id',\Illuminate\Support\Facades\Auth::user()->id)->firstOrFail();
                    @endphp
                    @if(is_file(public_path('uploads/staff/photo/').'/'.$photo->photo) && file_exists(public_path('uploads/staff/photo/').'/'.$photo->photo))
                        <img class="img-circle" src="{{url('public/uploads/staff/photo/').'/'.$photo->photo}}" alt="">
                    @else
                        <img src="{{url('public/avatar0.jpg')}}" class="user-image" alt="User Image">
                    @endif
                </div>
                <div class="pull-left info">
                    <p>{{$photo->f_name}} {{$photo->l_name}} ddd</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>

            <!-- search form (Optional) -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
                </div>
            </form>
            <!-- /.search form -->

            <!-- Sidebar Menu -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">Client/Manufacture Management</li>
                <li class="treeview  <?php if(request()->segment('2') =='list-manufacture' || request()->segment('2') =='create-manufacture' || request()->segment('2') =='claim-listing' || request()->segment('2') =='company-nature'|| request()->segment('2') =='add-category'|| request()->segment('2') =='add-sub-category'|| request()->segment('2') =='category-wise-client'){ echo 'active menu-open' ;} ?>">
                    <a href="#"><i class="fa fa-home"></i> <span>Clients</span>
                        <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class=" <?php if(request()->segment('2') =='list-clients'){ echo 'active' ;} ?>"><a href="{{url('staff/list-clients')}}"><i class="fa fa-circle-o"></i> Client Listing</a></li>
                        <li class="<?php if(request()->segment('2') =='create-client'){ echo 'active' ;} ?>"><a href="{{url('staff/create-client')}}"><i class="fa fa-circle-o"></i> Create New Client</a></li>
                        <li class="<?php if(request()->segment('2') =='claim-listing'){ echo 'active' ;} ?>"><a href="{{url('staff/claim-listing')}}"><i class="fa fa-circle-o"></i> Claim Listing <span style="padding:5px; font-size: 10px; color:deepskyblue;">(10)</span></a></li>
                        <li class="<?php if(request()->segment('2') =='company-nature'){ echo 'active' ;} ?>"><a href="{{url('staff/company-nature')}}"><i class="fa fa-circle-o"></i> Company Nature</a></li>
                        <li class="<?php if(request()->segment('2') =='add-category'){ echo 'active' ;} ?>"><a href="{{url('staff/add-category')}}"><i class="fa fa-circle-o"></i> Add Category</a></li>
                        <li class="<?php if(request()->segment('2') =='add-sub-category'){ echo 'active' ;} ?>"><a href="{{url('staff/add-sub-category')}}"><i class="fa fa-circle-o"></i> Add Sub Category</a></li>
                        <li class="<?php if(request()->segment('2') =='category-wise-client'){ echo 'active' ;} ?>"><a href="{{url('staff/category-wise-client')}}"><i class="fa fa-circle-o"></i>Category Wise Client</a></li>
                    </ul>
                </li>
                <li class="treeview  <?php if(request()->segment('2') =='list-clients' || request()->segment('2') =='create-client' || request()->segment('2') =='claim-listing' || request()->segment('2') =='company-nature'|| request()->segment('2') =='add-category'|| request()->segment('2') =='add-sub-category'|| request()->segment('2') =='category-wise-client'){ echo 'active menu-open' ;} ?>">
                    <a href="#"><i class="fa fa-home"></i> <span>Manufacture Clients</span>
                        <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class=" <?php if(request()->segment('2') =='list-manufacture'){ echo 'active' ;} ?>"><a href="{{url('staff/list-manufacture')}}"><i class="fa fa-circle-o"></i> Manufactures Listing</a></li>
                        <li class="<?php if(request()->segment('2') =='create-manufacture'){ echo 'active' ;} ?>"><a href="{{url('staff/create-manufacture')}}"><i class="fa fa-circle-o"></i> Create New Manufacture</a></li>
                        <li class="<?php if(request()->segment('2') =='claim-listing'){ echo 'active' ;} ?>"><a href="{{url('staff/claim-listing')}}"><i class="fa fa-circle-o"></i> Claim Listing <span style="padding:5px; font-size: 10px; color:deepskyblue;">(10)</span></a></li>
                        <li class="<?php if(request()->segment('2') =='company-nature'){ echo 'active' ;} ?>"><a href="{{url('staff/company-nature')}}"><i class="fa fa-circle-o"></i> Company Nature</a></li>
                        <li class="<?php if(request()->segment('2') =='add-category'){ echo 'active' ;} ?>"><a href="{{url('staff/add-category')}}"><i class="fa fa-circle-o"></i> Add Category</a></li>
                        <li class="<?php if(request()->segment('2') =='add-sub-category'){ echo 'active' ;} ?>"><a href="{{url('staff/add-sub-category')}}"><i class="fa fa-circle-o"></i> Add Sub Category</a></li>
                        <li class="<?php if(request()->segment('2') =='category-wise-client'){ echo 'active' ;} ?>"><a href="{{url('staff/category-wise-client')}}"><i class="fa fa-circle-o"></i>Category Wise Client</a></li>
                    </ul>
                </li>
                <li class="header">CONTACT</li>
                <li class="treeview  <?php if(request()->segment('2') =='contacts'){ echo 'active menu-open' ;} ?>">
                    <a href="#"><i class="fa fa-envelope"></i> <span>Contacts</span>
                        <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class=" <?php if(request()->segment('2') =='contacts'){ echo 'active' ;} ?>"><a href="{{url('staff/contacts')}}"><i class="fa fa-circle-o"></i> Contacts</a></li>
                    </ul>
                </li>
            </ul>
            <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>


@endsection