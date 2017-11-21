@if(Auth::user())
    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li>
                    <a href="/admin"><i class="fa fa-dashboard fa-fw"></i> Quản trị  </a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Sản phẩm <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{url('admin/products/create')}}">Thêm mới</a>
                        </li>
                        <li>
                            <a href="{{url('admin/products')}}">Danh sách</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>

                <li>
                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Câu lạc bộ <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{url('admin/team/create')}}">Thêm mới</a>
                        </li>
                        <li>
                            <a href="{{url('admin/team')}}">Danh sách</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>

                <li>
                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Đơn hàng <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{url('/order')}}">Danh sách</a>
                        </li>
                        <li>
                            <a href="{{url('/ordered')}}">Đã mua</a>
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