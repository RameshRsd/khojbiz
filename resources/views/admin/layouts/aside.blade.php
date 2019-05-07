@section('aside')

    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

            <!-- Sidebar user panel (optional) -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{url('public/avatar0.jpg')}}" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>{{\Illuminate\Support\Facades\Auth::user()->name}}</p>
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
                <li class="header">USER MANAGEMENT</li>
                <!-- Optionally, you can add icons to the links -->
                <li class="treeview @if(request()->segment('2')=='users') active menu-open @endif">
                    <a href="#"><i class="fa fa-user"></i> <span>Users</span>
                        <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{url('admin/users')}}"><i class="fa fa-circle-o"></i> All Users</a></li>
                    </ul>
                </li>
                <li class="header">CLIENT/CANDIDATE MANAGEMENT</li>
                <li class="treeview  <?php if(request()->segment('2') =='list-clients' || request()->segment('2') =='create-client' || request()->segment('2') =='claim-listing' || request()->segment('2') =='company-nature'){ echo 'active menu-open' ;} ?>">
                    <a href="#"><i class="fa fa-home"></i> <span>Clients</span>
                        <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class=" <?php if(request()->segment('2') =='list-clients'){ echo 'active' ;} ?>"><a href="{{url('admin/list-clients')}}"><i class="fa fa-circle-o"></i> Client Listing</a></li>
                        <li class="<?php if(request()->segment('2') =='create-client'){ echo 'active' ;} ?>"><a href="{{url('admin/create-client')}}"><i class="fa fa-circle-o"></i> Create New Client</a></li>
                        <li class="<?php if(request()->segment('2') =='claim-listing'){ echo 'active' ;} ?>"><a href="{{url('admin/claim-listing')}}"><i class="fa fa-circle-o"></i> Claim Listing <span style="padding:5px; font-size: 10px; color:deepskyblue;">(10)</span></a></li>
                        <li class="<?php if(request()->segment('2') =='company-nature'){ echo 'active' ;} ?>"><a href="{{url('admin/company-nature')}}"><i class="fa fa-circle-o"></i> Company Nature</a></li>
                    </ul>
                </li>
                <li class="treeview  <?php if(request()->segment('2') =='list-events' || request()->segment('2') =='event-request'  || request()->segment('2') =='create-event' || request()->segment('2') =='categories'){ echo 'active menu-open' ;} ?>">
                    <a href="#"><i class="fa fa-calendar-times-o"></i> <span>Event & Training</span>
                        <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class=" <?php if(request()->segment('2') =='list-events'){ echo 'active' ;} ?>"><a href="{{url('admin/list-events')}}"><i class="fa fa-circle-o"></i> Event Listing</a></li>
                        <li class="<?php if(request()->segment('2') =='create-event'){ echo 'active' ;} ?>"><a href="{{url('admin/create-event')}}"><i class="fa fa-circle-o"></i> Create New Event</a></li>
                        <li class="<?php if(request()->segment('2') =='event-request'){ echo 'active' ;} ?>"><a href="{{url('admin/event-request')}}"><i class="fa fa-circle-o"></i> Event Request <span style="padding:5px; font-size: 10px; color:deepskyblue;">(10)</span></a></li>
                        <li class="<?php if(request()->segment('2') =='categories'){ echo 'active' ;} ?>"><a href="{{url('admin/categories')}}"><i class="fa fa-circle-o"></i> Categories</a></li>
                    </ul>
                </li>
                <li class="treeview  <?php if(request()->segment('2') =='list-candidates' || request()->segment('2') =='list-religion'){ echo 'active menu-open' ;} ?>">
                    <a href="#"><i class="fa fa-user-circle-o"></i> <span>Candidates</span>
                        <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class=" <?php if(request()->segment('2') =='list-candidates'){ echo 'active' ;} ?>"><a href="{{url('admin/list-candidates')}}"><i class="fa fa-circle-o"></i> Candidate Listing</a></li>
                    </ul>
                </li>
                <li class="header">ADVERTISEMENT MANAGEMENT</li>
                <li class="treeview  <?php if(request()->segment('2') =='list-advets' || request()->segment('2') =='advets-request'  || request()->segment('2') =='create-advets'){ echo 'active menu-open' ;} ?>">
                    <a href="#"><i class="fa fa-adn"></i><span>Advertisement</span>
                        <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class=" <?php if(request()->segment('2') =='list-advets'){ echo 'active' ;} ?>"><a href="{{url('admin/list-advets')}}"><i class="fa fa-circle-o"></i> Ads Listing</a></li>
                        <li class="<?php if(request()->segment('2') =='create-advets'){ echo 'active' ;} ?>"><a href="{{url('admin/create-advets')}}"><i class="fa fa-circle-o"></i> Create New Ads</a></li>
                        <li class="<?php if(request()->segment('2') =='advets-request'){ echo 'active' ;} ?>"><a href="{{url('admin/advets-request')}}"><i class="fa fa-circle-o"></i> Ads Request <span style="padding:5px; font-size: 10px; color:deepskyblue;">(10)</span></a></li>
                    </ul>
                </li>
                <li class="header">LOCATION MANAGEMENT</li>
                <li class="treeview  <?php if(request()->segment('2') =='countries' || request()->segment('2') =='states' || request()->segment('2') =='district'){ echo 'active menu-open' ;} ?>">
                    <a href="#"><i class="fa fa-flag-checkered"></i> <span>Country/State/District</span>
                        <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class=" <?php if(request()->segment('2') =='countries'){ echo 'active' ;} ?>"><a href="{{url('admin/countries')}}"><i class="fa fa-circle-o"></i> Countries</a></li>
                        <li class=" <?php if(request()->segment('2') =='states'){ echo 'active' ;} ?>"><a href="{{url('admin/states')}}"><i class="fa fa-circle-o"></i> States</a></li>
                        <li class=" <?php if(request()->segment('2') =='district'){ echo 'active' ;} ?>"><a href="{{url('admin/district')}}"><i class="fa fa-circle-o"></i> District</a></li>
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
                        <li class=" <?php if(request()->segment('2') =='contacts'){ echo 'active' ;} ?>"><a href="{{url('admin/contacts')}}"><i class="fa fa-circle-o"></i> Contacts</a></li>
                    </ul>
                </li>
            </ul>
            <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>


@endsection