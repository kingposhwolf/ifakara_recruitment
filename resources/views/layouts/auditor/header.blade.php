

   <!-- Topbar Start -->
   <div class="navbar-custom">
    <div class="container-fluid">
        <ul class="list-unstyled topnav-menu float-end mb-0">

         

            <li class="dropdown notification-list topbar-dropdown">
                <a class="nav-link dropdown-toggle waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <i class="fe-bell noti-icon"></i>
                    <span class="badge bg-danger rounded-circle noti-icon-badge">9</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-lg">

                    <!-- item-->
                    <div class="dropdown-item noti-title">
                        <h5 class="m-0">
                            <span class="float-end">
                        <a href="" class="text-dark">
                            <small>Clear All</small>
                        </a>
                    </span>Notification
                        </h5>
                    </div>

                   

                    <!-- All-->
                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                View all
                <i class="fe-arrow-right"></i>
            </a>

                </div>
            </li>

            <li class="dropdown notification-list topbar-dropdown">
                <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <img src="../assets/images/users/user-1.jpg" alt="user-image" class="rounded-circle">
                    <span class="pro-user-name ms-1">
                        {{ Auth::user()->name }} <i class="mdi mdi-chevron-down"></i> 
               </span>
                </a>
                <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                    <!-- item-->
                    <div class="dropdown-header noti-title">
                        <h6 class="text-overflow m-0 text-muted">Manage Profile </h6>
                    </div>

                    <!-- item-->
                    <a href="{{route('profile_gs')}}" class="dropdown-item notify-item">
                        <i class="fe-user"></i>
                        <span>My Profile</span>
                    </a>


                    <!-- item-->
                  

                    <div class="dropdown-divider"></div>

                    <!-- item-->
                    <a href="{{ route('logout') }}" 
                              onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"
                                class="dropdown-item notify-item">
                        <i class="fe-log-out"></i>
                        <span>{{ route('logout') }}</span>
                      
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>

                </div>
            </li>

        </ul>

        <!-- LOGO -->
        <div class="logo-box">
            <a href="index.html" class="logo logo-dark text-center">
                <span class="logo-sm">
            <img src="../assets/images/logo-sm.png" alt="" height="22">
            <!-- <span class="logo-lg-text-light">UBold</span> -->
                </span>
                <span class="logo-lg">
            <img src="../assets/images/logo-dark.png" alt="" height="20">
            <!-- <span class="logo-lg-text-light">U</span> -->
                </span>
            </a>

            <a href="index.html" class="logo logo-light text-center">
                <span class="logo-sm">
            {{-- <img src="../assets/images/logo-sm.png" alt="" height="22"> --}}
        </span>
                <span class="logo-lg">
            {{-- <img src="../assets/images/logo-light.png" alt="" height="20"> --}}
        </span>
            </a>
        </div>

        <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
            <li>
                <button class="button-menu-mobile waves-effect waves-light">
            <i class="fe-menu"></i>
        </button>
            </li>

            <li>
                <!-- Mobile menu toggle (Horizontal Layout)-->
                <a class="navbar-toggle nav-link" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </li>

          
         
        </ul>
        <div class="clearfix"></div>
    </div>
</div>
