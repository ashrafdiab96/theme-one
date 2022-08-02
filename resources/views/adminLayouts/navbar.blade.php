<div class="wrapper" style="min-height: 1200px;">
    <nav class="main-header navbar navbar-expand navbar-white navbar-light horizontal-navbar p-0">
        <ul class="navbar-nav lan-ul">
            <li class="nav-item" style="cursor: pointer;">
                <a class="nav-link text-dark"><i class="fas fa-bars mt-1"></i></a>
            </li>
        </ul>

        <ul class="navbar-nav notifi-ul">

        </ul>

        <ul class="navbar-nav logout-ul h-100">
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li class="dropdown user user-menu open">
                        <a style="cursor: pointer;" class="dropdown-toggle main-prof" data-toggle="dropdown" aria-expanded="true">
                            <img src="" class="user-image main-prof-img" alt="User Image">
                            {{-- <img v-else :src="noImg" class="user-image main-prof-img rounded-circle" alt="User Image"> --}}
                            <span class="hidden-xs main-prof-name">Username</span>
                        </a>
                        <ul class="dropdown-menu main-prof-dropdown">
                            <li class="user-header">
                                <img class="img-circle" alt="User Image">
                                {{-- <img v-else :src="noImg" class="user-image main-prof-img rounded-circle" alt="User Image"> --}}
                                <p class="text-white">
                                    <span>Username</span>
                                </p>
                            </li>
                            <li class="user-footer main-prf-btns">
                                <div class="pull-left prof-btn">
                                    <a href="{name: 'user.personal_profile'}" data-toggle="modal" class="btn btn-default btn-flat" id="admin_profile">
                                        Profile
                                    </a>
                                </div>
                                <div class="pull-right prof-btn">
                                    <a class="btn btn-default btn-flat">Logout</a>
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
        <a href="#" class="brand-link text-center app-logo">
            <h4 class="brand-text font-weight-light text-uppercase">F&D</h4>
        </a>

        <!-- user information -> show for all -->
        <a href="#" style="text-decoration: none;">
            <div class="user-panel mt-3 pb-3 mb-3 d-flex user-panel-custom">
                <div class="image">
                    <img src="" class="img-circle elevation-2" alt="User Image" style="width: 3.1rem; height: 100%;">
                </div>
                <div class="info d-flex align-items-center mt-2">
                    <h6 class="d-block text-white">Username</h6>
                </div>
            </div>
        </a>

        <div class="sidebar">
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                    <li class="nav-item navbar-link">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                <span>Home</span>
                            </p>
                        </a>
                    </li>

                    <li class="nav-item navbar-link">
                        <a href="#" class="nav-link text-capitalize">
                            <i class="nav-icon fa fa-calendar"></i>
                            <p>Test</p>
                        </a>
                    </li>

                </ul>
            </nav>
        </div>
    </aside>
