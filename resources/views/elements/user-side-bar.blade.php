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
                            <a href="{{route('user_account')}}"><i class="fa fa-dashboard fa-fw"></i>Quản lý</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Sản phẩm<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('products.create')}}"> <i class="glyphicon glyphicon-plus"></i> Thêm</a>
                                </li>
                                <li>
                                    <a href="{{route('products.home')}}"> <i class="glyphicon glyphicon-th"></i> Danh sách</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="glyphicon glyphicon-pencil"></i> Đơn hàng <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/ordered"><i class="glyphicon glyphicon-edit glyphicon glyphicon-th"></i> Khách đặt </a>
                                </li>
                                <li>
                                    <a href="/order"></i><i class="glyphicon glyphicon-edit"></i> Của tôi </a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-soccer-ball-o"></i> Cá nhân <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ route('user_account') }}"><i class="glyphicon glyphicon glyphicon-user"></i>Thông tin</a>
                                </li>
                                <li>
                                    <a href="{{ route('user_charge') }}"><i class="glyphicon glyphicon glyphicon-user"></i>Tài khoản</a>
                                </li>
                                <li>
                                    <a href="###">Third Level <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="####">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="##">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="##">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="##">Third Level Item</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-soccer-ball-o"></i> Interesting <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/events/today">Today</a>
                                </li>
                                <li>
                                    <a href="##">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="##">Third Level <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="##">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="##">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="##">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="##">Third Level Item</a>
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