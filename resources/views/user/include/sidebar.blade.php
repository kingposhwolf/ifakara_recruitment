<nav id="sidebar" class="active">
    <div class="p-4 pt-1">
<p class="text-center text-black fw-bold" style="font-size: 25px; font-family:'Times New Roman', Times, serif;">{{ Auth::user()->name }}</p>
<hr>
      {{-- <a href="#" class="img logo rounded-circle mb-3" style="background-image: url(style/admin/images/logo.jpg);"></a> --}}
<ul class="list-unstyled components mb-5">
  <li>
      <a href="{{ route('dashboard') }}">
      <span class="icon"><i class="fas fa-home"></i></span>
    <span class="item">Dashboard</span>
    </a>
  </li>
  <li>
  <a href="{{ route('personaldetails') }}">
    <span class="icon"><i class="fa fa-user" aria-hidden="true"></i></span>
    <span class="item">Personal Details</span>
  </a>
  </li>
  <li>
  <a href="{{ route('academicqualifications') }}">
    <span class="icon"><i class="fa fa-graduation-cap" aria-hidden="true"></i></span>
    <span class="item">Academic Qualifications</span>
  </a>
  </li>
<li>
  <a href="{{ route('professionalqualification') }}">
    <span class="icon"><i class="fa fa-star-o" aria-hidden="true"></i></span>
    <span class="item">Professional Qualifications</span>
  </a>
  </li>
<li>
  <a href="{{ route('workingexperience') }}">
    <span class="icon"><i class="fa fa-building-o" aria-hidden="true"></i></span>
    <span class="item">Working Experience</span>
  </a>
  </li>
<li>
  <a href="{{ route('trainingandworkshop') }}">
    <span class="icon"><i class="fas fa-cog"></i></span>
    <span class="item">Traning And Workshop</span>
  </a>
  </li>
<li>
  <a href="{{ route('onlinecourse') }}">
    <span class="icon"><i class="fas fa-chart-line"></i></span>
    <span class="item">Online Course Attended</span>
  </a>
  </li>
<li>
  <a href="{{ route('computerliterancy') }}">
    <span class="icon"><i class="fas fa-desktop"></i></span>
    <span class="item">Computer Literacy</span>
  </a>
  </li>
<li>
    <li>
        <a href="{{ route('languageproficiency') }}">
          <span class="icon"><i class="fas fa-desktop"></i></span>
          <span class="item">Language Proficiency</span>
        </a>
        </li>
      <li>
  <a href="{{ route('referees') }}">
    <span class="icon"><i class="fas fa-user-shield"></i></span>
    <span class="item">Referees</span>
  </a>
  </li>
<li>
  <a href="{{ route('otherattachiment') }}">
    <span class="icon"><i class="fa fa-paperclip" aria-hidden="true"></i></span>
    <span class="item">Other Attachiment</span>
  </a>
  
  </li>
</ul>

{{-- <div class="footer">
    <p> Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0.
               Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
               Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0.</p>
</div> --}}

</div>
</nav>