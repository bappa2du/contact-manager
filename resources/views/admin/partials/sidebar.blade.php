<aside class="left-side sidebar-offcanvas">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="assets/admin/img/26115.jpg" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>Hello, {{Auth::user()->name}}</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                <span class="input-group-btn">
                    <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="{{Request::is('super-admin/dashboard')?'active':''}}">
                <a href="{{action('Admin\DashboardController@get_index')}}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            <li class="{{Request::is('super-admin/user')?'active':''}}">
                <a href="{{action('Admin\UserController@get_index')}}">
                    <i class="fa fa-users"></i> <span>User List</span>
                </a>
            </li>

            <li>
                <a href="{{action('Admin\ContactController@get_index')}}">
                    <i class="fa fa-globe"></i> <span>Contact List</span>
                </a>
            </li>

            <li>
                <a href="simple.html">
                    <i class="fa fa-smile-o"></i> <span>Roles</span>
                </a>
            </li>

             <li>
                <a href="simple.html">
                    <i class="fa fa-unlock"></i> <span>Permission</span>
                </a>
            </li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>