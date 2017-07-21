<header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">TCSCRM</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="/adminlte/#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="/adminlte/#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="/adminlte/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                        <span class="hidden-xs">{{\Auth::guard("web")->user()->name}}</span>
                    </a>
                    <ul class="dropdown-menu" style="min-width: 95px;width:95px;right: 0%;">
                        <!-- User image -->
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div>
                                <a href="/logout" class="btn btn-default btn-block">登出</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>