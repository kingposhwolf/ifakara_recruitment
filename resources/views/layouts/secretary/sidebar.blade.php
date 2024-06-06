
{{-- 
<nav class="navbar navbar-expand-md navbar-light fixed-top bg-white shadow-lg">
    <div class="container">
        <a class="navbar-brand logo" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
            <img src="{{ asset('style/admin/images/ifakarachurch.jpg') }}" width="100" height="70" class="d-inline-block align-top" alt="" style="border-radius: 10px;">
        </a>
        <ul class="navbar-nav me-auto">
            <h3 class="title">Ajira Katika Jimbo Katoliki La Ifakara </h3>
        </ul>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
       
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
    
            <ul class="navbar-nav ms-auto">
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">{{ __('Home') }}</a>
                            <a class="dropdown-item" href="#">{{ __('Notifications') }}</a>
                            <a class="dropdown-item" href="#">{{ __('My Applications') }}</a>
                            <a class="dropdown-item" href="#">{{ __('Change Password') }}</a>
                            <a class="dropdown-item" href="#">{{ __('Feedback') }}</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

 --}}


 <div class="left-side-menu">

    <div class="h-100" data-simplebar>

        <!-- User box -->
        <div class="user-box text-center">
            <img src="../assets/images/users/user-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle avatar-md">
            <div class="dropdown">
                @if (Route::has('register'))
                                
                <a href="javascript: void(0);" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block" data-bs-toggle="dropdown"> {{ Auth::user()->name }}</a>
                @endif
                <div class="dropdown-menu user-pro-dropdown">

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-user me-1"></i>
                        <span>My Account</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-settings me-1"></i>
                        <span>Settings</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-lock me-1"></i>
                        <span>Lock Screen</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-log-out me-1"></i>
                        <span>Logout</span>
                    </a>

                </div>
            </div>
            <p class="text-muted">Admin Head</p>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul id="side-menu">

                <li class="menu-title">Navigation</li>

                <li>
                    <a href="{{route('gsdashboard')}}">
                        <i data-feather="airplay"></i>
                        <span> Dashboards </span>
                    </a>
                    
                </li>

                <li class="menu-title mt-2">Apps</li>

               

                <li>
                    <a href="{{route('staffs')}}">
                        <i data-feather="users"></i>
                        <span> Staff </span>
                    </a>
                </li>

                <li>
                    <a href="{{route('job_position')}}">
                        <i data-feather="message-square"></i>
                        <span>Vacants </span>
                    </a>
                </li>

                <li>
                    <a href="{{route('jobs_applications')}}">
                        <i data-feather="users"></i>
                        <span> Applicants </span>
                    </a>
                   
                </li>

                <li>
                    <a href="{{route('job_requitment')}}">
                        <i data-feather="users"></i>
                        <span> Requitiment </span>
                    </a>
                    
                </li>

                

                
            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>