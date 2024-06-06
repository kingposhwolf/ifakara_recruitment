<div class="container-fluid p-4 mt-3" style="background-image: url({{ asset('web/img/cover_img.png') }}); border-radius: 5px;">
    <div class="row justify-content-center">
        <div class="col-10 m-2">
            <span>
                <h1 class="text-center"style="font-family: 'Times New Roman', Times, serif; padding-right: 5px; color:white;">
                    ICAD Employee Management System
                </h1>
            </span>
        </div>
    </div>
</div>

<nav class="navbar navbar-expand-lg navbar-light bg-light"
    style="box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;">
    <div class="container-fluid">

        <button type="button" id="sidebarCollapse" class="btn btn-info">
            <i class="fa fa-bars"></i>
            <span class="sr-only">Toggle Menu</span>
        </button>
        <button class="btn btn-light d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Notifications</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">My Applications</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('user_profile')}}">My Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Feedback</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
