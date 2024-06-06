@include('layouts.welcome.header')

<div class="intro-section single-cover" id="home-section">

    <div class="slide-1 " style="background-image: url('{{ asset('web/img/cover_img.png') }}')">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="row justify-content-center align-items-center text-center">
                        <div class="col-lg-6">
                            <h1 data-aos="fade-up" data-aos-delay="0">JOB Description</h1>
                            <p data-aos="fade-up" data-aos-delay="100">As Ifakara Diocese We have different organization
                                that manage as ifakara </p>
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

            <div class="col-lg-12">
                <div class="course bg-white h-100 align-self-stretch mt-4">
                    {{-- <figure class="m-0">
                      <a href="course-single.html"><img src="{{asset('web/img/catholic_history.jpg')}}" alt="Image" class="img-fluid"></a>
                    </figure> --}}
                    <div class="course-inner-text py-4 px-4">

                        <h3><b>Job Title: {{ $post->vacant->name }}</h3>

                        <p style="text-align: justify"> {{ $post->vacant->description }}

                        </p>
                        <h3><b>Position:</b> {{ $post->vacant->position_name }}</h3>
                        <p style="text-align: justify"> <span> Position Description:
                            </span>{{ $post->vacant->position_description }}</p>

                        <a href="{{asset('/storage/'. $post->vacant->job_file)}}" class="text-danger" style="font-weight: 700">Download Job Description</a>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="text-center">JOB QUALIFICATION</h3>
                            <hr>
                            <p class="m-3 text-justify"> <span><b>Education Level</b></span>
                                A bachelor's degree in accounting, finance, business administration, or a related field is typically required. A master's degree or relevant professional certifications (such as  Cpa) {{ $post->education_categorie }}.
                            </p>
                            {{-- <p class="m-3 text-justify"> <span>Education Level</span>{{ $post->education_level }} with
                                Education name {{ $post->education_categorie }} and Program {{ $post->education_name }}
                            </p> --}}
                        </div>
                        <div class="col-md-6">

                            <h3 class="text-center">Other Requiments</h3>
                            <hr>

                            <div class="d-flex align-items-center custom-icon-wrap mb-3">
                                <span class="custom-icon-inner ml-3">
                                    <span class="icon icon-graduation-cap"></span>
                                </span>
                                <div>
                                    <h3 class="m-1"><b>Applicant Age:</b> {{ $post->age_range }}</h3>
                                </div>
                            </div>
                            <div class="d-flex align-items-center custom-icon-wrap mb-3">
                                <span class="custom-icon-inner ml-3">
                                    <span class="icon icon-graduation-cap"></span>
                                </span>
                                <div>
                                    <h3 class="m-1"><b>Experience:</b> {{ $post->year_experience }}</h3>
                                </div>
                            </div>

                            <div class="d-flex align-items-center custom-icon-wrap mb-3">
                                <span class="custom-icon-inner ml-3">
                                    <span class="icon icon-graduation-cap"></span>
                                </span>
                                <div>
                                    <h3 class="m-1"><b>Gender:</b>{{ $post->gender }}</h3>
                                </div>
                            </div>



                        </div>

                        <div class="col-md-12">
                            <p class="m-3"><b>Post Summay:</b> {{ $post->summary }}</p>

                            <p class="m-3">Application End Date:<span
                                    class="text-danger">{{ $post->end_date }}</span></p>
                        </div>

                    </div>

                    <div class="border-top stats">

                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <a href="#" class="text-center mt-3 btn btn-info btn-block px-2"
                                    data-toggle="modal"data-target="#applyModal" style="background-color: #001D23">Apply Now</a>
                            </div>
                            <div class="col-md-4"></div>
                        </div> <!-- Replace your "Apply Now" button with this code -->


                        {{-- <h3 class="text-center"><span class="icon-users"></span>Apply Now</h3> --}}
                    </div>
                </div>
            </div>

            <!-- The Modal -->
            <div class="modal fade" id="applyModal">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <p>
                            <h4 class="modal-title" style="color: black; font-size:15px"><b>Job title:</b>{{ $post->vacant->name }}
                            </h4>
                            <h4 class="modal-title ml-5" style="color: black; font-size:15px"><b>Position:</b> {{ $post->vacant->position_name }}</h4>
                            </p>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <form action="{{route('post')}}" method="post" class="form"  enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="first name" class="form-label"> First Name</label>
                                            <input type="text" class="form-control form-control-sm"
                                                placeholder="Your First name" required name="firstName">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="first name" class="form-label"> Second Name</label>
                                            <input type="text" class="form-control form-control-sm"
                                                placeholder="Your second name" required name="secondName">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="first name" class="form-label">Email</label>
                                            <input type="email" class="form-control form-control-sm"
                                                placeholder="Your Email" required name="email">
                                            <span class="text-warning">*Enter the valid email*</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="phone" class="form-label">Phone number</label>
                                            <input type="Number" class="form-control form-control-sm"
                                                placeholder="phone number" required name="phone">
                                            <span class="text-warning">* Enter the available number *</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="cover">Cover Letter <span
                                                    class="text-danger">*</span></label>
                                            <input type="file" class="form-control form-control-sm" name="coverLetter">
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="cover">Your Job</label>
                                            <input type="text" class="form-control form-control-sm" readonly disabled style="font-weight: bold; color: #333;" placeholder="{{ $post->vacant->name }}">
                                            <input type="hidden" name="vacant_id" id="vacant_id" value="{{ $post->vacant->id }}">
                                        </div>
                                        
                                        

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="cover">CV <span class="text-danger">*</span></label>
                                            <input type="file" class="form-control form-control-sm" required name="cv">
                                            <span class="text-warning">* Include with your certificate in the same
                                                documents *</span>

                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-4">
                                        <button class="btn btn-primary btn-block" type="submit"
                                            style="background-color: #001D23">Send</button>
                                    </div>
                                    <div class="col-md-4"></div>
                                </div>
                            </form>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <!-- Add a submit button or other action buttons here if needed -->
                        </div>
                       
                        
                    </div>
                </div>
            </div>



        </div>


    </div>
</div>



@include('layouts.welcome.footer')
