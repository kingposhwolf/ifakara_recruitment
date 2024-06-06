{{-- <!DOCTYPE html>
<html lang="en">
@include('layouts.include.users.head')
<body class="active">
   
    <div class="wrapper">
        <div class="section">
            <div class="top_navbar">
                <p>Ifakara Dioceses Recruitment Portal</p>
            </div>
            <div class="top_navbar_hamburger">
                <div class="hamburger">
                    <a href="#">
                        <i class="fas fa-bars"></i>
                    </a>
                </div>
                <div class="items">
                    <a href="" class="button">home</a>
                    <a href="" class="button">Notifications</a>
                    <a href="" class="button">Vacancies</a>
                    <a href="" class="button">My Applications</a>
                    <a href="" class="button">Register To Job Alerts</a>
                    <a href="" class="button">Change Password</a>
                    <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();" class="button">Logout</a>
                    <a href="" class="button">Feedback</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
                
            </div>
            <div class="main">
                <div class="container-fluid" style="border-style:ridge; margin-right: 15px; padding: 15px; width: 100%;">
                    @yield('content')
                </div>
            </div>
             
        </div>
       
        @include('layouts.include.users.sidebar')
        
    </div>
  <script>
       var hamburger = document.querySelector(".hamburger");
	hamburger.addEventListener("click", function(){
		document.querySelector("body").classList.toggle("active");
	})
  </script>
</body>
</html> --}}


@include('assets.css')
<!-- body start -->

<body class="loading" data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": false}, "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": true}'>

    <!-- Begin page -->
    <div id="wrapper">

       @include('layouts.include.users.head')

        <!-- ========== Left Sidebar Start ========== -->
        @include('layouts.include.users.sidebar')
        <!-- Left Sidebar End -->


        <div class="content-page">
            <div class="content">

                @yield('content')

            </div>
            <!-- content -->

            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> &copy;  <a href="">Ifakara Catholica Diocese</a>
                        </div>
                        <div class="col-md-6">
                            <div class="text-md-end footer-links d-none d-sm-block">
                                <a href="javascript:void(0);">About Us</a>
                                <a href="javascript:void(0);">Help</a>
                                <a href="javascript:void(0);">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->

        </div>


    </div>
    <!-- END wrapper -->


@include('assets.js')