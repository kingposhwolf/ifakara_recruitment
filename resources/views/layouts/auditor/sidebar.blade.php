


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
                    <a href="{{route('auditordashboard')}}">
                        <i data-feather="airplay"></i>
                        <span> Dashboards </span>
                    </a>
                    
                </li>

                <li class="menu-title mt-2">Apps</li>
              

                <li>
                    <a href="{{route('auditors_staffs')}}">
                        <i data-feather="users"></i>
                        <span> Staff </span>
                    </a>
                </li>
               

                <li>
                    <a href="#">
                        <i data-feather="users"></i>
                        <span> Applicants </span>
                    </a>
                   
                </li>

                <li>
                    <a href="#">
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