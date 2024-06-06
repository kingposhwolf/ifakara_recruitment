@include('assets.css')

<body class="loading"
    data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": false}, "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": true}'>

    <!-- Begin page -->
    <div id="wrapper">

        @include('layouts.hr.header')


        @include('layouts.hr.sidebar')



        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">

                    <div class="row mt-3">
                        <div class="col-md-6 col-xl-4">
                            <div class="widget-rounded-circle card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-lg rounded-circle bg-light">
                                                <i class="fe-list font-26 avatar-title text-primary"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-end">
                                                <h3 class="text-dark mt-1"><span data-plugin="counterup">200</span></h3>
                                                <p class="text-muted mb-1 text-truncate">Number of Applicants</p>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->
                                </div>
                            </div> <!-- end widget-rounded-circle-->
                        </div> <!-- end col-->

                        <div class="col-md-6 col-xl-4">
                            <div class="widget-rounded-circle card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-lg rounded-circle bg-light">
                                                <i class="fe-check-square font-26 avatar-title text-success"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-end">
                                                <h3 class="text-dark mt-1"><span>{{ $post->application_date }}</span>
                                                </h3>
                                                <p class="text-muted mb-1 text-truncate">Application Date</p>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->
                                </div>
                            </div> <!-- end widget-rounded-circle-->
                        </div> <!-- end col-->

                        <div class="col-md-6 col-xl-4">
                            <div class="widget-rounded-circle card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-lg rounded-circle bg-light">
                                                {{-- <i data-feather="plus-square"></i> --}}

                                                <i class="fe-plus-square font-26 avatar-title text-info"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-end">
                                                <h3 class="text-dark mt-1"><span>
                                                        {{ $post->end_date }}</span></h3>
                                                <p class="text-muted mb-1 text-truncate">End date</p>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->
                                </div>
                            </div> <!-- end widget-rounded-circle-->
                        </div> <!-- end col-->


                    </div>
                    <div class="row">

                        <div class="col-lg-6 col-xl-4">
                            <div class="card">

                                <div class="card-body">
                                    <h4 class="text-center text-primary bg-light p-2">Post Information</h4>

                                    <div class=" mb-3">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p><span>Vacant Required: </span>
                                                    <b> {{ $post->vacant->name }}</b>
                                                </p>
                                                <p><span>Gender:</span> <b>{{ $post->gender }}</b></p>
                                                <div class="">
                                                    <p><span>Starting Application:</span>
                                                        <b>{{ $post->application_date }}</b></p>
                                                    <p>Post Status: <b class="text-success">active</b></p>
                                                    <p>Post Description: <b>{{ $post->summary }}</b></p>
                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                    {{-- <h5 class="mb-3 mt-4 text-uppercase bg-light p-2"><i
                                            class="mdi mdi-account-circle me-1"></i> Personal Information</h5>
                                    <div class="">
                                        <h4 class="font-13 text-uppercase">About Me :</h4>

                                        <h4 class="font-13 mb-1">Name :</h4>
                                        <p class="mb-3"> {{$post->fname}} {{$post->mname}} {{$post->lname}}</p>
                                        <h4 class="font-13 mb-1">Email : <b>{{$post->email}}</b></h4>

                                        <h4 class="font-13 mb-1">Contact :<b>{{$post->phone}}</b></h4>

                                        <h4 class="font-13 mb-1">Company :<b>{{ $post->institution  ->name }}</b></h4>



                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-6">
                            <div class="card d-block">
                                <div class="card-body">
                                    <div class="dropdown float-end">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="dripicons-dots-3 btn btn-primary" style="font-size:20px"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item btn btn-secondary"
                                                data-bs-toggle="modal"
                                                data-bs-target="#exampleUpdate{{ $post->id }}"><i
                                                    class="mdi mdi-pencil me-1"></i>Edit post</a>
                                            <a href="javascript:void(0);"
                                                class="dropdown-item  btn btn-danger"data-bs-toggle="modal"
                                                data-bs-target="#exampleDelete{{ $post->id }}"><i
                                                    class="mdi mdi-delete me-1"></i>Delete</a>

                                        </div>
                                    </div>
                                    <h5 class="mt-0 font-20">
                                        Job Title: <b>{{ $post->vacant->name }}</b>
                                    </h5>

                                    <h5>Job Description:</h5>



                                    <p class="mb-4 text-justify">
                                        {{ $post->vacant->description }}
                                    </p>

                                    <div class="mb-4">
                                        <h5>Position: <b>{{ $post->vacant->position_name }}</b></h5>
                                        <div class="">
                                            <h5>Position Description</h5>
                                            <p class="text-justify">{{ $post->vacant->position_description }}</p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="mb-4">
                                                <h5>Staff Contract Date</h5>
                                                <p>{{ $post->created_at }} <small class="text-muted">1:00 PM</small>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-4">
                                                <h5>End Date</h5>
                                                <p>{{ $post->end_date }}<small class="text-muted">1:00 PM</small></p>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-4">
                                                <h5>Staff Performance</h5>
                                                <p class="text-success"><b>ACCEPTED</b></p>
                                            </div>
                                        </div>
                                    </div>



                                </div>

                            </div>


                        </div>



                    </div>


                </div>

            </div>

            @include('layouts.hr.footer')


        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->


    </div>

    <!-- /.modal -->
    <div class="modal fade" id="exampleDelete{{ $post->id }}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-top modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Delete The post</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <span class="text-larger">
                        <h4 style="font-size:20px">Are you sure delete ?.<b>{{ $post->vacant->name }}
                            </b></h4>
                    </span>
                    <div class="modal-footer">
                        <div class="row">
                            <div class="col-md-6">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>

                            </div>
                            <div class="col-md-6">
                                <form action="{{ route('delete_post', ['id' => $post->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-block">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

    <div class="modal fade" id="exampleUpdate{{ $post->id }}" tabindex="-1" role="dialog"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-light">
                    <h4 class="modal-title" id="myCenterModalLabel">Update the Staff Details </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <h4>Person Information</h4>
                    <form action="{{ route('update_post', $post->id) }}" method="post"
                        enctype="multipart/form-data" class="needs-validation" novalidate>
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="example-select" class="form-label"> Vacant Title <span
                                            class="text-danger">*</span></label>
                                            <select class="form-select" id="example-select" name="vacant_id" required>
                                                @foreach ($vacant as $v)
                                                    <option value="{{ $v->id }}" {{ $v->id == $post->vacant_id ? 'selected' : '' }}>
                                                        {{ $v->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                    <div class="invalid-feedback">
                                        Please select vacant title.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="example-select" class="form-label"> Vacant Category</label>
                                    <select class="form-select" id="example-select" name="vacant_category" required>
                                        <option value="IT and Telecom" {{ $post->vacant_category == 'IT and Telecom' ? 'selected' : '' }}>IT and Telecom</option>
                                        <option value="Accounting and Auditing" {{ $post->vacant_category == 'Accounting and Auditing' ? 'selected' : '' }}>Accounting and Auditing</option>
                                        <option value="Healthcare and Pharmaceutical" {{ $post->vacant_category == 'Healthcare and Pharmaceutical' ? 'selected' : '' }}>Healthcare and Pharmaceutical</option>
                                        <option value="Socials Studies and Arts" {{ $post->vacant_category == 'Socials Studies and Arts' ? 'selected' : '' }}>Socials Studies and Arts</option>
                                        <option value="HR & Administration" {{ $post->vacant_category == 'HR & Administration' ? 'selected' : '' }}>HR & Administration</option>
                                        <option value="Science Studies and Technician" {{ $post->vacant_category == 'Science Studies and Technician' ? 'selected' : '' }}>Science Studies and Technician</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please select category.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="example-select" class="form-label"> Institutions</label>
                                    <select class="form-select" id="example-select" name="institution_id" required>
                                        @foreach ($institution as $inst)
                                            <option value="{{ $inst->id }}" {{ $inst->id == $post->institution_id ? 'selected' : '' }}>
                                                {{ $inst->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">
                                        Please select institution.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="field-3" class="form-label">Application Date <span>*</span></label>
                                    <input type="date" class="form-control" name="application_date"
                                        id="field-2" value="{{ $post->application_date }}" required>
                                    <div class="invalid-feedback">
                                        Please enter application date.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="field-3" class="form-label">Enddate Application</label>
                                    <input type="date" class="form-control" name="end_date" id="field-2" value="{{ $post->end_date }}"
                                        required>
                                    <div class="invalid-feedback">
                                        Please enter end date applications.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h4>ACCADEMIC QUALIFICATION</h4>
                        <div class="row">

                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="example-select" class="form-label"> Education Level</label>
                                    <select class="form-select" id="example-select" name="education_level_id" required>
                                        @foreach ($education_level as $level)
                                            <option value="{{ $level->id }}" {{ $level->id == $post->education_level_id ? 'selected' : '' }}>
                                                {{ $level->name }}
                                            </option>
                                        @endforeach
                                    </select>

                                    <div class="invalid-feedback">
                                        Please choose a education Level.
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="example-select" class="form-label"> Education Category</label>
                                    <select class="form-select" id="example-select" name="education_category_id" required>
                                        @foreach ($education_categorie as $category)
                                            <option value="{{ $category->id }}" {{ $category->id == $post->education_category_id ? 'selected' : '' }}>
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>

                                    <div class="invalid-feedback">
                                        Please choose a education category.
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="example-select" class="form-label">Education Program</label>
                                    <select class="form-select" id="example-select" name="education_name_id" required>
                                        @foreach ($education_name as $name)
                                            <option value="{{ $name->id }}" {{ $name->id == $post->education_name_id ? 'selected' : '' }}>
                                                {{ $name->name }}
                                            </option>
                                        @endforeach
                                    </select>

                                    <div class="invalid-feedback">
                                        Please choose a education name.
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <h4>OTHER QUALIFICATION</h4>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="field-3" class="form-label">Applicant Age</label>
                                    <select class="form-select" id="example-select" name="age_range" required>
                                        <option value="18" {{ $post->age_range == '18' ? 'selected' : '' }}>18</option>
                                        <option value="20 - 35" {{ $post->age_range == '20 - 35' ? 'selected' : '' }}>20 - 35</option>
                                        <option value="36 - 45" {{ $post->age_range == '36 - 45' ? 'selected' : '' }}>36 - 45</option>
                                        <option value="46 - 50" {{ $post->age_range == '46 - 50' ? 'selected' : '' }}>46 - 50</option>
                                        <option value="50 above" {{ $post->age_range == '50 above' ? 'selected' : '' }}>50 above</option>
                                    </select>

                                    <div class="invalid-feedback">
                                        Please choose a age range.
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="field-3" class="form-label">Applicant Experience</label>
                                    <select class="form-select" id="example-select" name="year_experience" required>
                                        <option value="None" {{ $post->year_experience == 'None' ? 'selected' : '' }}>None</option>
                                        <option value="1 year" {{ $post->year_experience == '1 year' ? 'selected' : '' }}>1 year</option>
                                        <option value="2 years" {{ $post->year_experience == '2 years' ? 'selected' : '' }}>2 years</option>
                                        <option value="3 years" {{ $post->year_experience == '3 years' ? 'selected' : '' }}>3 years</option>
                                        <option value="4 years" {{ $post->year_experience == '4 years' ? 'selected' : '' }}>4 years</option>
                                    </select>

                                    <div class="invalid-feedback">
                                        Please choose a Experience.
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="field-3" class="form-label">Applicant Gender</label>
                                    <select class="form-select" id="example-select" name="gender" required>
                                        <option value="None" {{ $post->gender == 'None' ? 'selected' : '' }}>None</option>
                                        <option value="Male" {{ $post->gender == 'Male' ? 'selected' : '' }}>Male</option>
                                        <option value="Female" {{ $post->gender == 'Female' ? 'selected' : '' }}>Female</option>
                                    </select>

                                    <div class="invalid-feedback">
                                        Please choose your gender.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-md-8">
                                <div class="mb-3">
                                    <label for="field-5" class="form-label">Summary Over view</label>
                                    <textarea name="summary" id="" cols="15" rows="5" class="form-control" required>{{ $post->summary }}</textarea>
                                    <div class="invalid-feedback">
                                        Please fill the Summary.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2"></div>
                        </div>


                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4 d-grid">
                                <button class="btn btn-primary" type="submit">Post Vacant</button>

                            </div>
                            <div class="col-md-4"></div>
                        </div>
                    </form>


                </div>
                {{-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div> --}}
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>




    @include('assets.js')
