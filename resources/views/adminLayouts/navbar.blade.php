<style>
    .main-header .profile-pic {
    width: 125px !important;
    height: 125px !important;
    -webkit-box-shadow: 0 0 3px 0 rgb(0 0 0 / 50%);
    -moz-box-shadow: 0 0 3px 0 rgb(0 0 0 / 50%);
    -ms-box-shadow: 0 0 3px 0 rgb(0 0 0 / 50%);
    -o-box-shadow: 0 0 3px 0 rgb(0 0 0 / 50%);
    box-shadow: 0 0 3px 0 rgb(0 0 0 / 50%);
}

.active-nav-link {
    background-color: #fff !important;
    color: #343a40 !important;
}

</style>

<div class="wrapper" style="min-height: auto">
    <nav class="main-header navbar navbar-expand navbar-white navbar-light horizontal-navbar">
        <ul class="navbar-nav lan-ul">
            <li class="nav-item" style="cursor: pointer;">
                <a class="nav-link text-dark" id="toggleSidebar"><i class="fas fa-bars mt-1"></i></a>
            </li>
        </ul>

        <ul class="navbar-nav logout-ul h-100">
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li class="dropdown user user-menu open">
                        <a style="cursor: pointer;" class="dropdown-toggle main-prof" data-toggle="dropdown" aria-expanded="true">
                            <img src="{{ asset('assets/images/employee.png') }}" style="height: 40px; width: 40px;" class="user-image" alt="User Image">
                            <span class="hidden-xs main-prof-name">{{ Auth::user()->name }}</span>
                        </a>
                        <ul class="dropdown-menu main-prof-dropdown">
                            <li class="user-header">
                                <img src="{{ asset('assets/images/employee.png') }}" class="img-circle profile-pic" alt="User Image">
                                <p class="text-dark">
                                    <span>{{ Auth::user()->name }}</span>
                                </p>
                            </li>
                            <li class="user-footer main-prf-btns nav-admin-data">
                                <div class="pull-left prof-btn mx-2">
                                    <a href="{ url('admin/user/profile') }}" data-toggle="modal" class="btn btn-default btn-flat" id="admin_profile">
                                        Profile
                                    </a>
                                </div>
                                <div class="pull-right prof-btn mx-2">
                                    <a href="{{ url('/admin/logout') }}" class="btn btn-default btn-flat">
                                        Logout
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </ul>
    </nav>
    <!-- side navigation bar -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <span class="brand-link text-center app-logo">
            <h4 class="brand-text font-weight-bold text-uppercase m-0">F&D Engineering</h4>
        </span>

        <!-- user information -> show for all -->
        <a href="{{ url('admin/user/profile') }}" style="text-decoration: none;">
            <div class="user-panel mt-3 pb-3 mb-3 d-flex user-panel-custom">
                <div class="image">
                    <img src="{{ asset('assets/images/employee.png') }}" class="img-circle elevation-2" alt="User Image" style="width: 3.1rem; height: 100%;">
                </div>
                <div class="info d-flex align-items-center mt-2">
                    <h6 class="d-block text-white">{{ Auth::user()->name }}</h6>
                </div>
            </div>
        </a>

        <div class="sidebar">
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                    <li class="nav-item navbar-link">
                        <a href="{{ url('/admin/dashboard') }}" class="nav-link {{ request()->is('admin/dashboard') ? 'active-nav-link' : '' }}">
                            <i class="fas fa-chart-line"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>

                    <li class="nav-item navbar-link">
                        <a href="{{ url('admin/home') }}" class="nav-link {{ request()->is('admin/home') || request()->is('admin/home/*') ? 'active-nav-link' : '' }}">
                            <i class="fas fa-home"></i>
                            <p>Home</p>
                        </a>
                    </li>

                    <li class="nav-item navbar-link">
                        <a href="{{ url('admin/slider') }}" class="nav-link {{ request()->is('admin/slider') || request()->is('admin/slider/*') ? 'active-nav-link' : '' }}">
                            <i class="fas fa-video"></i>
                            <p>Slider</p>
                        </a>
                    </li>

                    <li class="nav-item navbar-link">
                        <a href="{{ url('admin/about') }}" class="nav-link {{ request()->is('admin/about') || request()->is('admin/about/*') ? 'active-nav-link' : '' }}">
                            <i class="fas fa-address-card"></i>
                            <p>About</p>
                        </a>
                    </li>

                    <li class="nav-item navbar-link">
                        <a href="{{ url('admin/profile') }}" class="nav-link {{ request()->is('admin/profile') || request()->is('admin/profile/*') ? 'active-nav-link' : '' }}">
                            <i class="fas fa-building"></i>
                            <p>Company Profile</p>
                        </a>
                    </li>

                    <li class="nav-item navbar-link">
                        <a href="{{ url('admin/services') }}" class="nav-link {{ request()->is('admin/services') || request()->is('admin/services/*')  || request()->is('admin/service/*') ? 'active-nav-link' : '' }}">
                            <i class="fab fa-servicestack"></i>
                            <p>Services</p>
                        </a>
                    </li>

                    <li class="nav-item navbar-link">
                        <a href="{{ url('admin/projects') }}" class="nav-link {{ request()->is('admin/projects') || request()->is('admin/projects/*')  || request()->is('admin/project/*') ? 'active-nav-link' : '' }}">
                            <i class="fas fa-project-diagram"></i>
                            <p>Projects</p>
                        </a>
                    </li>

                    <li class="nav-item navbar-link">
                        <a href="{{ url('admin/projects-types') }}" class="nav-link {{ request()->is('admin/projects-types') || request()->is('admin/projects-types/*')  ? 'active-nav-link' : '' }}">
                            <i class="fab fa-r-project"></i>
                            <p>Projects Types</p>
                        </a>
                    </li>

                    <li class="nav-item navbar-link">
                        <a href="{{ url('admin/blogs') }}" class="nav-link {{ request()->is('admin/blogs') || request()->is('admin/blogs/*')  || request()->is('admin/blog/*') ? 'active-nav-link' : '' }}">
                            <i class="fas fa-blog"></i>
                            <p>Blogs</p>
                        </a>
                    </li>

                    <li class="nav-item navbar-link">
                        <a href="{{ url('admin/contacts') }}" class="nav-link {{ request()->is('admin/contacts') || request()->is('admin/contacts/*') ? 'active-nav-link' : '' }}">
                            <i class="far fa-address-card"></i>
                            <p>Contacts</p>
                        </a>
                    </li>

                    <li class="nav-item navbar-link">
                        <a href="{{ url('admin/messages') }}" class="nav-link {{ request()->is('admin/messages') || request()->is('admin/messages/*') || request()->is('admin/message/*') ? 'active-nav-link' : '' }}">
                            <i class="fas fa-comment"></i>
                            <p>Messages</p>
                        </a>
                    </li>

                    <li class="nav-item navbar-link">
                        <a href="{{ url('admin/users') }}" class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') || request()->is('admin/user/*') ? 'active-nav-link' : '' }}">
                            <i class="fas fa-user"></i>
                            <p>Admins</p>
                        </a>
                    </li>

                </ul>
            </nav>
        </div>
    </aside>
