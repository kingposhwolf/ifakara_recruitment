
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
            <p class="text-muted">{{ Auth::user()->name }}</p>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <ul id="side-menu">
                <li class="menu-title">Navigation</li>
                <li>
                    <a href="{{ route('dashboard') }}">
                        <i data-feather="airplay"></i>
                          <span> Dashboards </span>
                    </a>
                    
                </li>

                <li class="menu-title mt-2">Apps</li>

                <li>
                    <a href="{{ route('personaldetails') }}">
                        <i data-feather="calendar"></i>
                        <span> Personal Details </span>
                    </a>
                </li>

                <li>
                    <a href="apps-chat.html">
                        <i data-feather="message-square"></i>
                        <span> Academic Qualifications </span>
                    </a>
                </li>

                <li>
                    <a href="#sidebarEcommerce">
                        <i data-feather="shopping-cart"></i>
                        <span> Professional Qualifications </span>
                     
                    </a>
                    
                </li>

                <li>
                    <a href="#sidebarCrm" data-bs-toggle="collapse">
                        <i data-feather="users"></i>
                        <span> Working Experience </span>
                       
                    </a>
                   
                </li>

                <li>
                    <a href="#sidebarEmail">
                        <i data-feather="mail"></i>
                        <span> Traning And Workshop </span>
                        
                    </a>
                  
                </li>

                <li>
                    <a href="apps-social-feed.html">
                        <i data-feather="rss"></i>
                        <span> Online Course Attatended </span>
                    </a>
                </li>

                <li>
                    <a href="apps-companies.html">
                        <i data-feather="activity"></i>
                        <span> Computer Literancy </span>
                    </a>
                </li>

                <li>
                    <a href="#sidebarProjects">
                        <i data-feather="briefcase"></i>
                        <span> Referees </span>
                      
                    </a>
                   
                </li>

                <li>
                    <a href="#sidebarTasks" >
                        <i data-feather="clipboard"></i>
                        <span> Other Attachiment </span>
                
                    </a>
                   
                </li>

                
            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>