@if(Auth::user())
    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li class="sidebar-search">
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                    </div>
                    <!-- /input-group -->
                </li>
                <li>
                    <a href="/admin"><i class="fa fa-dashboard fa-fw"></i> Dashboard admin</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Pro manage <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{url('admin/product/create')}}">Add new</a>
                        </li>
                        <li>
                            <a href="{{url('admin/product')}}">List</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
               
                <li>
                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Teams manage <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{url('admin/team/create')}}">Add new</a>
                        </li>
                        <li>
                            <a href="{{url('admin/team')}}">List</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>

                <li>
                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Order manage <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{url('/order')}}">Orders</a>
                        </li>
                        <li>
                            <a href="{{url('/ordered')}}">List</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
               
                <li>
                    <a href="#"><i class="fa fa-sitemap fa-fw"></i> Event Sport<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{route('event.import')}}">Impor Csv</a>
                        </li>
                        <li>
                            <a href="{{route('event.index')}}">Events</a>
                        </li>
                        <li>
                            <a href="#">Now <span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="{{route('ratio.index')}}">Update scores</a>
                                </li>
                                <li>
                                    <a href="#">Third Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level Item</a>
                                </li>
                            </ul>
                            <!-- /.nav-third-level -->
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
@endif
<!-- /.navbar-static-side -->