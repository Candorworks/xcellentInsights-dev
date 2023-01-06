<div class="navbar-default sidebar nicescroll" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
                    </span>
                </div>
                <!-- /input-group -->
            </li>
            <!-- <li class="nav-small-cap">Main Menu</li> -->
            <li> 
                <a href="{{ route('admin.dashboard') }}" class="waves-effect {{Request::is('admin/dashboard') ? 'active' : ''}}">
                    <i class="glyphicon glyphicon-fire fa-fw"></i> Dashboard
                </a> 
            </li>
            {{-- @canany(['role-list','role-create'])
                <li>
                    <a href="#" class="waves-effect"><i class="ti-menu fa-fw"></i> Role Manager<span
                            class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level">
                        @can('role-create')
                            <li>
                                <a href="{{ route('roles.create') }}" class="@if (Route::currentRouteName() == 'roles.create') active @endif">Add Role</a>
                            </li>
                        @endcan
                        @can('role-list')
                            <li>
                                <a href="{{ route('roles.index') }}" class="@if (Route::currentRouteName() == 'roles.index' || Route::currentRouteName() == 'roles.edit') active @endif">Role List</a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @canany(['permissions-list','permissions-create'])
            <li>
                <a href="#" class="waves-effect">
                    <i class="ti-menu fa-fw"></i> Permission Manager<span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    @can('permissions-create')
                    <li>
                        <a href="{{ route('permissions.create') }}" class="@if (Route::currentRouteName() == 'permissions.create') active @endif">Add Permission</a>
                    </li>
                    @endcan
                    @can('permissions-list')
                    <li>
                        <a href="{{ route('permissions.index') }}" class="@if (Route::currentRouteName() == 'permissions.index' || Route::currentRouteName() == 'permissions.edit') active @endif">Permission List</a>
                    </li>
                    @endcan
                </ul>
            </li>
            @endcan --}}
            @canany(['subadmin-list','subadmin-create'])
            <li>
                <a href="#" class="waves-effect"><i class="fa fa-users fa-fw"></i> SubAdmin Manager<span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    @can('subadmin-create')
                    <li>
                        <a href="{{ route('subadmin.create') }}" class="{{Request::is('admin/subadmin/create') ? 'active' : ''}}">Add Sub Admin</a></li>
                    @endcan
                    @can('subadmin-list')
                    <li>
                        <a href="{{ route('subadmin.index') }}" class="{{Request::is('admin/subadmin') ? 'active' : ''}}">Sub Admin List</a>
                    </li>
                    @endcan
                </ul>
            </li>
            @endcan
            @canany(['category-list','category-create'])
            <li>
                <a href="#" class="waves-effect">
                    <i class="fa fa-list-alt fa-fw"></i> Category Manager<span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    @can('category-create')
                    <li>
                        <a href="{{ route('category.create') }}" class="{{ Request::is('admin/category/create') ? 'active' : '' }}">Add Category</a>
                    </li>
                    @endcan
                    @can('category-list')
                    <li>
                        <a href="{{ route('category.index') }}" class="{{ Request::is('admin/category') ? 'active' : '' }}">Category List</a>
                    </li>
                    @endcan
                </ul>
            </li>
            @endcan
            @canany(['publisher-list','publisher-create'])
            <li>
                <a href="#" class="waves-effect">
                    <i class="fa fa-user fa-fw"></i> Publisher Manager<span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    @can('publisher-create')
                    <li>
                        <a href="{{ route('publisher.create') }}" class="{{ Request::is('admin/publisher/create') ? 'active' : '' }}">Add Publisher</a>
                    </li>
                    @endcan
                    @can('publisher-list')
                    <li>
                        <a href="{{ route('publisher.index') }}" class="{{ Request::is('admin/publisher') ? 'active' : '' }}">Publisher List</a>
                    </li>
                    @endcan
                </ul>
            </li>
            @endcan
            @canany(['career-list','jobs-create','jobs-list'])
            <li>
                <a href="#" class="waves-effect">
                    <i class="fa fa-briefcase fa-fw"></i> Career Manager<span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    @can('career-list')
                    <li>
                        <a href="{{ route('career.list') }}" class="{{Request::is('admin/career/list') ? 'active' : ''}}">Career Manage</a>
                    </li>
                    @endcan
                    @can('jobs-create')
                    <li>
                        <a href="{{ route('jobs.create') }}" class="{{Request::is('admin/jobs/create') ? 'active' : ''}}">Add Jobs</a>
                    </li>
                    @endcan
                    @can('jobs-list')
                    <li>
                        <a href="{{ route('jobs.index') }}" class="{{Request::is('admin/jobs') ? 'active' : ''}}">Jobs List</a>
                    </li>
                    @endcan
                </ul>
            </li>
            @endcan
            @canany(['report-list', 'report-create', 'report-bulk-report'])
            <li>
                <a href="#" class="waves-effect">
                    <i class="ti-files fa-fw"></i> Report Manager<span class="fa arrow"></span>
                    {{-- <span class="label label-rouded label-purple pull-right">13</span> --}}
                </a>
                <ul class="nav nav-second-level">
                    @can('report-list')
                    <li>
                        <a href="{{ route('reports.index') }}" class="{{Request::is('admin/reports') ? 'active' : ''}}">Report List</a>
                    </li>
                    @endcan
                    @can('report-create')
                    <li>
                        <a href="{{ route('reports.create') }}" class="{{Request::is('admin/reports/create') ? 'active' :''}}">Add Report</a>
                    </li>
                    @endcan
                    @can('report-bulk-report')
                    <li>
                        <a href="{{ route('admin.report.bulkReports') }}" class="{{Request::is('admin/report/bulkReports') ? 'active' : ''}}">Bulk Reports</a>
                    </li>
                    @endcan
                </ul>
            </li>
            @endcan
            @canany(['discount-create','discount-list'])
            <li>
                <a href="#" class="waves-effect">
                    <i class="fa fa-tags fa-fw"></i> Discount <span class="fa arrow"></span>
                    {{-- <span class="label label-rouded label-purple pull-right">13</span> --}}
                </a>
                <ul class="nav nav-second-level">
                    @can('discount-create')
                    <li>
                        <a href="{{ route('admin.discount.add') }}" class="{{Request::is('admin/discount/add') ? 'active' : ''}}">Add Discount Report</a>
                    </li>
                    @endcan
                    @can('discount-list')
                    <li>
                        <a href="{{ route('admin.discount.list') }}" class="{{Request::is('admin/discount/list') ? 'active' : ''}}">Discount Report List</a>
                    </li>
                    @endcan
                </ul>
            </li>
            @endcan
            @canany(['lead-reportsRelated','lead-partner','lead-forms'])
            <li>
                <a href="#" class="waves-effect">
                    <i class="ti-user fa-fw"></i> Lead Manager<span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    @can('lead-reportsRelated')
                    <li>
                        <a href="{{ route('lead.reportsRelated') }}" class="{{Request::is('admin/lead/reports') ? 'active' : ''}}"> Report Leads</a>
                    </li>
                    @endcan
                    @can('lead-partner')
                    <li>
                        <a href="{{ route('lead.partner') }}" class="{{Request::is('admin/lead/partner') ? 'active' : ''}}"> Partner Leads</a>
                    </li>
                    @endcan
                    @can('lead-forms')
                    <li>
                        <a href="{{ route('lead.forms') }}" class="{{Request::is('admin/lead/forms') ? 'active' : ''}}"> Forms Leads </a>
                    </li>
                    @endcan
                </ul>
            </li>
            @endcan
            @canany(['order-list','active-orders','trashed-orders'])
            <li>
                <a href="#" class="waves-effect">
                    <i class=" ti-shopping-cart-full"></i> Order<span class="fa arrow"></span>
                </a>
                 <ul class="nav nav-second-level">
                    @can('order-list')
                    <li>
                        <a href="{{ route('admin.order.list') }}" class="{{Request::is('admin/order/list') ? 'active' : ''}}">Order List</a>
                    </li>
                    @endcan

                    @canany(['active-orders'])
                    <li>
                        <a href="{{ route('admin.orderlist.active') }}" class="{{Request::is('admin/order/active/list') ? 'active' : ''}}"> Active Orders
                        </a>
                    </li>
                    @endcan

                    @canany(['trashed-orders'])
                    <li>
                        <a href="{{ route('admin.orderlist.inactive') }}" class="{{Request::is('admin/order/inactive/list') ? 'active' : ''}}"> Trashed Orders
                        </a>
                    </li>
                    @endcan
                </ul>
            </li>
            @endcan
            @can('newsletter-list')
            <li>
                <a href="{{ route('newsletter') }}" class="{{Request::is('admin/newsletter/list') ? 'active' : ''}}"> 
                    <i class=" ti-email" style="margin-right:7px;"></i> News Letter List
                </a>
            </li>
            @endcan
            <!-- Add Blogs nav here -->
            @canany(['blog-create','blog-list'])
            <li>
                <a href="#" class="waves-effect">
                    <i class="fa-solid fa-blog" style="margin-right:7px;"></i> Blogs & News<span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    @canany(['blog-create'])
                    <li>
                        <a href="{{ route('admin.blogs-news.create') }}" class="{{Request::is('admin/blogs-news/create') ? 'active' : ''}}"> Add Blogs/News</a>
                    </li>
                    @endcan

                    @canany(['blog-list'])
                    <li>
                        <a href="{{ route('admin.blogs-news.index') }}" class="{{Request::is('admin/blogs-news') ? 'active' : ''}}"> Blogs/News List </a>
                    </li>
                    @endcan
                </ul>
            </li>
            @endcan

            <!-- RSS Feed nav here -->
            @canany(['rss-feed-create','rss-feed-list'])
            <li>
                <a href="#" class="waves-effect">
                    <i class="fa fa-rss" aria-hidden="true" style=" margin-right:7px;"></i> RSS Feed<span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    @canany(['rss-feed-create'])
                    <li>
                        <a href="{{ route('rss.create') }}" class="{{Request::is('admin/rss/create') ? 'active' : ''}}"> Add RSS </a>
                    </li>
                    @endcan

                    @canany(['rss-feed-list'])
                    <li>
                        <a href="{{ route('rss.index') }}" class="{{Request::is('admin/rss') ? 'active' : ''}}"> RSS List </a>
                    </li>
                    @endcan
                </ul>
            </li>
            @endcan
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>