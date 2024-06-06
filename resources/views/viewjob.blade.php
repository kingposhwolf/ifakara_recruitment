@include('layouts.welcome.header')

    <div class="intro-section single-cover" id="home-section">
      
      <div class="slide-1 " style="background-image: url('{{ asset('web/img/cover_img.png') }}')">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="row justify-content-center align-items-center text-center">
                <div class="col-lg-6">
                  <h1 data-aos="fade-up" data-aos-delay="0">ICD ORGANISATION</h1>
                  <p data-aos="fade-up" data-aos-delay="100">As  Ifakara Diocese  We have different organization that manage as  ifakara </p>
                </div>

                
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
    
    <div class="site-section">
      <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="course bg-white h-100 align-self-stretch" style="">
                    
                    <figure>
                      <a href="#" class=""><img src="{{asset('web/img/catholic.jpg')}}" alt="Image" class="img-fluid"></a>
                    </figure>
                    <div class="course-inner-text py-4 px-4">
                
                      <h3><a href="https://financial.ifakaracatholicdiocese.com">GENERAL  DIOCESE SYSTEM</a></h3>
                      <p class="text-justify">A Diocese management system is a comprehensive software platform that automates administrative, and operational tasks
                        within the Diocese in general. It centralizes information between Secretary, Accountant,Audtior and Bishop,  manages facilitates  finances,
                         and supports communication between them</p>
                    </div>
                    <div class="d-flex border-top stats">
                      <div class="py-3 px-4"><span class="icon-users"></span> 19 schools</div>
                      <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span> 2</div>
                    </div>
                  </div>
            </div>
            <div class="col-lg-6">
                <div class="course bg-white h-100 align-self-stretch mt-4">
                    <figure class="m-0">
                      <a href="course-single.html"><img src="{{asset('web/img/catholic.jpg')}}" alt="Image" class="img-fluid"></a>
                    </figure>
                    <div class="course-inner-text py-4 px-4">

                      <h3><a href="https://schools.ifakaracatholicdiocese.com">SCHOOL MANAGEMENT SYSTEM</a></h3>
                      <p style="text-align: justify">A school management system is a comprehensive software platform that automates administrative, academic, and operational tasks
                         within educational institutions. It centralizes student information, manages teacher and staff records, facilitates  finances,
                          and supports communication between educators, students, and parents.
               
                      </p>
                    </div>
                    <div class="d-flex border-top stats">
                      <div class="py-3 px-4"><span class="icon-users"></span> 2,193 students</div>
                      <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span> 2</div>
                    </div>
                  </div>
            </div>

           
          
  
           
  
          </div>
          {{-- <div class="row mt-5">
            <div class="col-lg-6">

                <div class="course bg-white h-100 align-self-stretch">
                    <figure class="m-0">
                      <a href="course-single.html"><img src="{{asset('web/images/img_3.jpg')}}" alt="Image" class="img-fluid"></a>
                    </figure>
                    <div class="course-inner-text py-4 px-4">
                    
                      <h3><a href="#">JS Programming Language</a></h3>
                      <p>Lorem ipsum dolor sit amet ipsa nulla adipisicing eli. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae fugiat ea ratione cumque quisquam, fugit eveniet, 
                        nesciunt temporibus natus, a repudiandae rerum libero aut expedita quaerat adipisci nemo velit esse. </p>
                    </div>
                    <div class="d-flex border-top stats">
                      <div class="py-3 px-4"><span class="icon-users"></span> 2,193 students</div>
                      <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span> 2</div>
                    </div>
                  </div>
            </div>

            <div class="col-lg-6">

                <div class="course bg-white h-100 align-self-stretch">
                    <figure class="m-0">
                      <a href="course-single.html"><img src="{{asset('web/images/img_3.jpg')}}" alt="Image" class="img-fluid"></a>
                    </figure>
                    <div class="course-inner-text py-4 px-4">
                      
                      <h3><a href="#">JS Programming Language</a></h3>
                      <p>Lorem ipsum dolor sit amet ipsa nulla adipisicing elit. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis magnam molestiae consequuntur quasi ex facere exercitationem reiciendis tempore
                        , assumenda voluptas blanditiis, quam repellat obcaecati laboriosam veniam quos culpa, aperiam nemo? </p>
                    </div>
                    <div class="d-flex border-top stats">
                      <div class="py-3 px-4"><span class="icon-users"></span> 2,193 students</div>
                      <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span> 2</div>
                    </div>
                  </div>
            </div>
          </div> --}}
  
      </div>
    </div>


     
  @include('layouts.welcome.footer')