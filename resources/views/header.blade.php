<nav class="row navbar navbar-expand transparent px-3" id="sticky-header">
         <div class="col-lg-2">
            <div class="logo-container">
               <a href="{{ route('home')}}">
                  <img src="{{ asset('web/images/logo-white.png') }}" alt="logo" class="transparent-icon" width="120">
                  <img src="{{ asset('web/images/logo.png') }}" alt="logo" class="normal-icon" width="120">
               </a>
             </div>
         </div>
         <div class="col-lg-8 ">
            <div class="nav-item-container">
               <ul class="navbar-nav text-center justify-content-center">
                  <li class="nav-item">
                     <a class="nav-link {{(Request::is('/*')) ? 'active' : ''}}" href="{{ route("home") }}">Home</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link {{(Request::is('industry*')) ? 'active' : ''}}" href="{{ route("industry") }}">Industry Vertical</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link {{(Request::is('report*')) ? 'active' : ''}}" href="{{ route("report") }}">Report Hub</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link {{(Request::is('partner*')) ? 'active' : ''}}" href="{{ route("partner") }}">Partner With Us</a>
                  </li>
                  <li class="nav-item about-us">
                     <a class="nav-link {{(Request::is('about*') || Request::is('career*') || Request::is('team*')) ? 'active' : ''}}" href="{{ route("about") }}">About Us</a>
                     <ul class="ps-0 career-team-dropdown text-center">
                        <li>
                           <a class="nav-link" href="{{ route("career") }}">Career</a>
                        </li>
                        <li>
                           <a class="nav-link" href="{{ route("team") }}">Team</a>
                        </li>
                     </ul>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link {{(Request::is('contact*')) ? 'active' : ''}}" href="{{ route("contact") }}">Contact Us</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link {{(Request::is('blog*')) ? 'active' : ''}}" href="{{ route("blog") }}">Blogs</a>
                  </li>
                  {{-- <li class="nav-item">
                     <a class="nav-link {{(Request::is('news*')) ? 'active' : ''}}" href="{{ route("news") }}">News</a>
                  </li> --}}
               </ul>
             </div>
         </div>
         <div class="col-lg-2">
            <div class="header-search-bar">
               <form method="get" action="{{ route('report') }}">
                  <div class="form-group">
                     <input class="form-control header-search-bar-input" name="search" placeholder="Search Here..." type="text" >
                     <button type="submit header-search-bar-btn"><i class="fas fa-search"></i></button>
                  </div>   
               </form>
            </div>
         </div>
      </nav>