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
                <li class="treeview  <?php if(request()->segment('2') =='list-clients' || request()->segment('2') =='create-client' || request()->segment('2') =='category-wise-client'){ echo 'active menu-open' ;} ?>">
                    <a href="#"><i class="fa fa-home"></i> <span>Business Clients</span>
                        <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class=" <?php if(request()->segment('2') =='list-clients'){ echo 'active' ;} ?>"><a href="{{url('staff/list-clients')}}"><i class="fa fa-circle-o"></i> Client Listing</a></li>
                        <li class="<?php if(request()->segment('2') =='create-client'){ echo 'active' ;} ?>"><a href="{{url('staff/create-client')}}"><i class="fa fa-circle-o"></i> Create New Client</a></li>
                        <li class="<?php if(request()->segment('2') =='category-wise-client'){ echo 'active' ;} ?>"><a href="{{url('staff/category-wise-client')}}"><i class="fa fa-circle-o"></i>Category Wise Client</a></li>
                    </ul>
                </li>
                <li class="treeview  <?php if(request()->segment('2') =='list-manufacturers' || request()->segment('2') =='create-manufacture' || request()->segment('2') =='category-wise-manufacture'){ echo 'active menu-open' ;} ?>">
                    <a href="#"><i class="fa fa-home"></i> <span>Manufacture Clients</span>
                        <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class=" <?php if(request()->segment('2') =='list-manufacturers'){ echo 'active' ;} ?>"><a href="{{url('staff/list-manufacturers')}}"><i class="fa fa-circle-o"></i> Manufactures Listing</a></li>
                        <li class="<?php if(request()->segment('2') =='create-manufacture'){ echo 'active' ;} ?>"><a href="{{url('staff/create-manufacture')}}"><i class="fa fa-circle-o"></i> Create New Manufacture</a></li>
                        <li class="<?php if(request()->segment('2') =='category-wise-manufacture'){ echo 'active' ;} ?>"><a href="{{url('staff/category-wise-client')}}"><i class="fa fa-circle-o"></i>Category Wise Client</a></li>
                    </ul>
                </li>
                <li class="treeview  <?php if(request()->segment('2') =='list-suppliers' || request()->segment('2') =='add-new-suppliers' || request()->segment('2') =='claim-suppliers' || request()->segment('2') =='add-product-category'|| request()->segment('2') =='add-sub-category'|| request()->segment('2') =='product-wise-suppliers'){ echo 'active menu-open' ;} ?>">
                    <a href="#"><i class="fa fa-home"></i> <span>Product </span>
                        <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class=" <?php if(request()->segment('2') =='list-suppliers'){ echo 'active' ;} ?>"><a href="{{url('staff/list-suppliers')}}"><i class="fa fa-circle-o"></i> Suppliers Listing</a></li>
                        <li class="<?php if(request()->segment('2') =='add-new-suppliers'){ echo 'active' ;} ?>"><a href="{{url('staff/add-new-suppliers')}}"><i class="fa fa-circle-o"></i> Add New Suppliers</a></li>
                        <li class="<?php if(request()->segment('2') =='claim-suppliers'){ echo 'active' ;} ?>"><a href="{{url('staff/claim-suppliers')}}"><i class="fa fa-circle-o"></i> Claim Listing Suppliers <span style="padding:5px; font-size: 10px; color:deepskyblue;">(10)</span></a></li>
                        <li class="<?php if(request()->segment('2') =='add-product-category'){ echo 'active' ;} ?>"><a href="{{url('staff/add-product-category')}}"><i class="fa fa-circle-o"></i> Add Product</a></li>
                        <li class="<?php if(request()->segment('2') =='product-wise-suppliers'){ echo 'active' ;} ?>"><a href="{{url('staff/product-wise-suppliers')}}"><i class="fa fa-circle-o"></i>Product Wise Suppliers</a></li>
                    </ul>
                </li>
                <li class="treeview  <?php if(request()->segment('2') =='locations' || request()->segment('2') =='create-location'){ echo 'active menu-open' ;} ?>">
                    <a href="#"><i class="fa fa-map"></i> <span>Location/Places</span>
                        <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class=" <?php if(request()->segment('2') =='locations'){ echo 'active' ;} ?>"><a href="{{url('staff/locations')}}"><i class="fa fa-circle-o"></i> Location/Places</a></li>
                        <li class="<?php if(request()->segment('2') =='create-location'){ echo 'active' ;} ?>"><a href="{{url('staff/create-location')}}"><i class="fa fa-circle-o"></i> Create New</a></li>
                        <li class=" <?php if(request()->segment('2') =='location-categories'){ echo 'active' ;} ?>"><a href="{{url('staff/locations-categories')}}"><i class="fa fa-circle-o"></i> Location Categories</a></li>
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