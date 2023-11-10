<nav class="pcoded-navbar">
                    <div class="nav-list">
                        <div class="pcoded-inner-navbar main-menu">
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu  pcoded-trigger">
                                    <li class="{{ activeClass('dashboard/profile') }}">
                                        <a href="{{ route('profile') }}" class="waves-effect waves-dark">
                                            <span class="pcoded-micon">
                                                <i class="far fa-address-card"></i>
                                            </span>
                                            <span class="pcoded-mtext">Profile</span>
                                        </a>
                                    </li>
                                    <li class="{{ activeClass('dashboard') }}">
                                        <a href="{{ route('dashboard') }}" class="waves-effect waves-dark">
                                            <span class="pcoded-micon">
                                                <i class="feather icon-home"></i>
                                            </span>
                                            <span class="pcoded-mtext">Dashboard</span>
                                        </a>
                                    </li>
                                </li>

                                <li class="pcoded-hasmenu {{ activeClass(['dashboard/users,dashboard/users/create,dashboard/roles,dashboard/permissions'] , 'pcoded-trigger') }}">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="feather icon-users"></i></span>
                                        <span class="pcoded-mtext">Users</span>
                                    </a>
                                    <ul class="pcoded-submenu">

                                        <li class="{{ activeClass('dashboard/users') }}">
                                            <a href="{{ route('users.index') }}" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">View users</span>
                                            </a>
                                        </li>
                                        <li class="{{ activeClass('dashboard/users/create') }}">
                                            <a href="{{ route('users.create') }}" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Create a new user</span>
                                            </a>
                                        </li>
                                        <li class="{{ activeClass('dashboard/roles') }}">
                                            <a href="{{ route('roles.index') }}" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">View tasks</span>
                                            </a>
                                        </li>
                                        <li class="{{ activeClass('dashboard/permissions') }}">
                                            <a href="{{ route('permissions.index') }}" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext"Access levelا</span>
                                            </a>
                                        </li>

                                    </ul>
                                </li>



                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="feather icon-file"></i></span>
                                        <span class="pcoded-mtext">Posts</span>
                                    </a>
                                    <ul class="pcoded-submenu">

                                        <li class="">
                                            <a href="#" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">View posts</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="#" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Create post</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="#" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Drafts</span>
                                            </a>
                                        </li>

                                    </ul>
                                </li>

                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="fas fa-list-alt"></i></span>
                                        <span class="pcoded-mtext">دسته بندی ها </span>
                                    </a>
                                    <ul class="pcoded-submenu">

                                        <li class="">
                                            <a href="#" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">مشاهده دسته بندی ها</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="#" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">ایجاد دسته یندی</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="#" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">مشاهده تگ ها </span>
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="#" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">ایجاد تگ</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                        </ul>

                        </div>
                    </div>
                </nav>
