<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" style="margin-bottom: 0">
    <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
      <div class="top-left-part"><a class="logo" href="{{route('admin.dashboard')}}"><img src="{{ AWS3('images/logo-white.png')}}" width="50%"></a></div>
      <ul class="nav navbar-top-links navbar-left hidden-xs">
        <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a></li>
      </ul>
      <ul class="nav navbar-top-links navbar-right pull-right">
        <li>
          <form role="search" class="app-search hidden-xs">
            <input type="text" placeholder="Search..." class="form-control">
            <a href=""><i class="fa fa-search"></i></a>
          </form>
        </li>
        <li class="dropdown"> <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <img src="{{url('admin/images/users/hritik.jpg')}}" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">{{ Auth::user()->name }}</b> </a>
          <ul class="dropdown-menu dropdown-user">
            <li><a href="#"><i class="ti-user"></i> My Profile</a></li>
            <li><a href="#"><i class="ti-wallet"></i> My Balance</a></li>
            <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
            <li role="separator" class="divider"></li>
            <li style="margin-left: 22px">
              <form method="POST" action="{{ route('logout') }}">
                  @csrf
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                      this.closest('form').submit();"><i class="fa fa-power-off"></i> {{ __('Log Out') }}</a>
              </form>
            </li>
          </ul>
           
          <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
      </ul>
    </div>
    <!-- /.navbar-header -->
    <!-- /.navbar-top-links -->
    <!-- /.navbar-static-side -->
  </nav>