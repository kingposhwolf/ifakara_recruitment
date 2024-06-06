@include('assets.css')

<body class="loading"
    data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": false}, "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": true}'>

    <!-- Begin page -->
    <div id="wrapper">

        @include('layouts.hr.header')


        @include('layouts.hr.sidebar')

        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">



                    <div class="row mt-3">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mb-4">Vacants</h4>

                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="nav flex-column nav-pills nav-pills-tab" id="v-pills-tab"
                                                role="tablist" aria-orientation="vertical">
                                                <a class="nav-link active show mb-1" id="v-pills-home-tab"
                                                    data-bs-toggle="pill" href="#v-pills-home" role="tab"
                                                    aria-controls="v-pills-home" aria-selected="true">
                                                    <span> All Vacants </span>
                                                </a>
                                               


                                                <a class="nav-link mb-1" id="v-pills-settings-tab" data-bs-toggle="pill"
                                                    href="#v-pills-settings" role="tab"
                                                    aria-controls="v-pills-settings" aria-selected="false">
                                                    Received CV
                                                </a>
                                            </div>
                                        </div>
                                        <!-- end col-->
                                        <div class="col-sm-9">
                                            <div class="tab-content pt-0">
                                                <div class="tab-pane fade active show" id="v-pills-home" role="tabpanel"
                                                    aria-labelledby="v-pills-home-tab">
                                                    <div class="">
                                                        <div class="">
                                                            <div class="row justify-content-between mb-2">
                                                                <div class="col-auto">

                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="text-sm-end">
                                                                        <button type="button"
                                                                            class="btn btn-primary waves-effect waves-light mb-2"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#register-vacant-modal">Register
                                                                            Vacant
                                                                        </button>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="card">
                                                                        <div class="card-body">

                                                                            <table id="basic-datatable"
                                                                                class="table dt-responsive nowrap w-100">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th>Vacant Name</th>
                                                                                        <th>Vacant Location</th>
                                                                                        <th>Vacant Positon</th>
                                                                                        <th>Created</th>
                                                                                        <th>Action</th>

                                                                                    </tr>
                                                                                </thead>


                                                                                <tbody>
                                                                                    @if (!empty($vacants))
                                                                                        @foreach ($vacants as $vacant)
                                                                                            <tr>
                                                                                                <td>{{ $vacant->name }}
                                                                                                </td>
                                                                                                <td>{{ $vacant->location }}
                                                                                                </td>
                                                                                                <td>{{ $vacant->position_name }}
                                                                                                </td>
                                                                                                <td>{{ $vacant->created_at }}
                                                                                                </td>
                                                                                                <td>
                                                                                                    <a href="{{route('show_vacant', $vacant->id)}}" class="btn  btn-info btn-xs">
                                                                                                       <i class="fas fa-eye"></i>
                                                                                                    </a>
                                                                                                                                                                                               
                                                                                                </td>

                                                                                            </tr>
                                                                                        @endforeach
                                                                                    @else
                                                                                        <tr>
                                                                                            <td colspan="7">No posts
                                                                                                found.</td>
                                                                                        </tr>
                                                                                    @endif



                                                                                </tbody>
                                                                            </table>

                                                                        </div> <!-- end card body-->
                                                                    </div> <!-- end card -->
                                                                </div><!-- end col-->
                                                            </div>


                                                            <!-- end row-->
                                                        </div>
                                                        <!-- end card-body-->
                                                    </div>
                                                </div>
                                               

                                                
                                                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                                                    aria-labelledby="v-pills-settings-tab">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="row justify-content-between mb-2">
                                                                <div class="col-auto">
                                                                    <form>
                                                                        <div class="mb-2">
                                                                            <label for="inputPassword2"
                                                                                class="visually-hidden">Search</label>
                                                                            <input type="search" class="form-control"
                                                                                id="inputPassword2"
                                                                                placeholder="Search...">
                                                                        </div>
                                                                    </form>
                                                                </div>


                                                            </div>

                                                            <div class="table-responsive">
                                                                <table
                                                                    class="table table-centered table-nowrap table-hover mb-0">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Basic Info</th>
                                                                            <th>Phone</th>
                                                                            <th>EmailBDB</th>
                                                                            <th>Company</th>
                                                                            <th>Created Date</th>
                                                                            <th style="width: 82px;">Action</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>


                                                                        {{-- <tr>
                                                                            <td class="table-user">
                                                                                <img src="../assets/images/users/user-4.jpg"
                                                                                    alt="table-user"
                                                                                    class="me-2 rounded-circle">
                                                                                <a href="javascript:void(0);"
                                                                                    class="text-body fw-semibold">Paul
                                                                                    J. Friend</a>
                                                                            </td>
                                                                            <td>
                                                                                937-330-1634
                                                                            </td>
                                                                            <td>
                                                                                pauljfrnd@jourrapide.com
                                                                            </td>
                                                                            <td>
                                                                                Vine Corporation
                                                                            </td>
                                                                            <td>
                                                                                07/07/2018
                                                                            </td>
                                                                            <td>
                                                                                <a href="javascript:void(0);"
                                                                                    class="action-icon"> <i
                                                                                        class="mdi mdi-square-edit-outline"></i></a>
                                                                                <a href="javascript:void(0);"
                                                                                    class="action-icon"> <i
                                                                                        class="mdi mdi-delete"></i></a>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td class="table-user">
                                                                                <img src="../assets/images/users/user-3.jpg"
                                                                                    alt="table-user"
                                                                                    class="me-2 rounded-circle">
                                                                                <a href="javascript:void(0);"
                                                                                    class="text-body fw-semibold">Bryan
                                                                                    J. Luellen</a>
                                                                            </td>
                                                                            <td>
                                                                                215-302-3376
                                                                            </td>
                                                                            <td>
                                                                                bryuellen@dayrep.com
                                                                            </td>
                                                                            <td>
                                                                                Blue Motors
                                                                            </td>
                                                                            <td>
                                                                                09/12/2018
                                                                            </td>
                                                                            <td>
                                                                                <a href="javascript:void(0);"
                                                                                    class="action-icon"> <i
                                                                                        class="mdi mdi-square-edit-outline"></i></a>
                                                                                <a href="javascript:void(0);"
                                                                                    class="action-icon"> <i
                                                                                        class="mdi mdi-delete"></i></a>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td class="table-user">
                                                                                <img src="../assets/images/users/user-3.jpg"
                                                                                    alt="table-user"
                                                                                    class="me-2 rounded-circle">
                                                                                <a href="javascript:void(0);"
                                                                                    class="text-body fw-semibold">Kathryn
                                                                                    S. Collier</a>
                                                                            </td>
                                                                            <td>
                                                                                828-216-2190
                                                                            </td>
                                                                            <td>
                                                                                collier@jourrapide.com
                                                                            </td>
                                                                            <td>
                                                                                Arcanetworks
                                                                            </td>
                                                                            <td>
                                                                                06/30/2018
                                                                            </td>
                                                                            <td>
                                                                                <a href="javascript:void(0);"
                                                                                    class="action-icon"> <i
                                                                                        class="mdi mdi-square-edit-outline"></i></a>
                                                                                <a href="javascript:void(0);"
                                                                                    class="action-icon"> <i
                                                                                        class="mdi mdi-delete"></i></a>
                                                                            </td>
                                                                        </tr> --}}




                                                                    </tbody>
                                                                </table>
                                                            </div>



                                                        </div>
                                                        <!-- end card-body-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col-->
                                    </div>
                                    <!-- end row-->
                                </div>
                            </div>
                            <!-- end card-->
                        </div>

                        <!-- end col -->


                    </div>
                    <!-- end row -->

                </div>
                <!-- container -->

            </div>
            <!-- content -->

            <!-- Footer Start -->
            @include('layouts.hr.footer')
            <!-- end Footer -->

        </div>



    </div>
    <!-- END wrapper -->


    <!-- Modal -->
    <div class="modal fade" id="post-vacant-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-light">
                    <h4 class="modal-title" id="myCenterModalLabel">Publish a vacant to applicants </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">

                    <h4>VACANTS INFORMATION</h4>
                    <form action="{{ route('publish_vacant') }}" method="POST" enctype="multipart/form-data"
                        class="needs-validation" novalidate>
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="example-select" class="form-label"> Vacant Title <span
                                            class="text-danger">*</span></label>
                                    <select class="form-select" id="example-select" name="vacant_id" required>
                                        @foreach ($vacants as $vacant)
                                            <option value="{{ $vacant->id }}">{{ $vacant->name }}</option>
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
                                        <option value="IT">IT</option>
                                        <option value="economics">Economics</option>
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
                                        @foreach ($institutions as $institution)
                                            <option value="{{ $institution->id }}">{{ $institution->name }}</option>
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
                                        id="field-2" required>
                                    <div class="invalid-feedback">
                                        Please enter application date.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="field-3" class="form-label">Enddate Application</label>
                                    <input type="date" class="form-control" name="end_date" id="field-2"
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
                                    <select class="form-select" id="example-select" name="education_level_id"
                                        required>
                                        @foreach ($education_levels as $education_level)
                                            <option value="{{ $education_level->id }}">{{ $education_level->name }}
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
                                    <select class="form-select" id="example-select" name="education_category_id"
                                        required>
                                        @foreach ($education_categories as $education_category)
                                            <option value="{{ $education_category->id }}">
                                                {{ $education_category->name }}</option>
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
                                    <select class="form-select" id="example-select" name="education_name_id"
                                        required>
                                        @foreach ($education_names as $education_name)
                                            <option value="{{ $education_name->id }}">{{ $education_name->name }}
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

                                        <option value="18">18</option>
                                        <option value="20 - 30">20 - 30</option>
                                        <option value="30 - 40">30 - 40</option>
                                        <option value="40 - 50">40 - 50</option>
                                        <option value="50>">50 above</option>


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

                                        <option value="1">None</option>
                                        <option value="1 year">1 year</option>
                                        <option value="2 years">2 years</option>
                                        <option value="3 years">3 years</option>
                                        <option value="4 years">4 years</option>


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

                                        <option value="None">None</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Both">Both</option>


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
                                    <textarea name="summary" id="" cols="15" rows="5" class="form-control" required></textarea>
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
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
  

    <div class="modal fade" id="register-vacant-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-light">
                    <h4 class="modal-title" id="myCenterModalLabel">Registration for Job Information </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                            aria-label="Close"></button>
                        <span class="fw-bold text-danger">Please consider this:</span> Creating a job and its
                        corresponding position now will save time when you need to publish a similar job again. This
                        way, it will be stored in the database of the system, reducing the time required for future job
                        postings
                    </div>
                    <h4>JOB INFORMATION</h4>
                    <form action="{{ route('vacant_registration') }}" method="POST" enctype="multipart/form-data"
                        class="needs-validation" novalidate>
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="field-1" class="form-label">Job Title <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="field-1" name="name"
                                        required placeholder="job title">
                                    <div class="invalid-feedback">
                                        Please provide a vacant title.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="field-2" class="form-label">Location</label>
                                    <input type="text" class="form-control" name="location" id="field-2"
                                        required placeholder="singida">
                                    <div class="invalid-feedback">
                                        Please provide a vacant location.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="field-3" class="form-label">Job Description <span
                                            class="text-danger">*</span></label>
                                    <textarea name="description" id="" cols="15" rows="5" class="form-control" required></textarea>
                                    <div class="invalid-feedback">
                                        Please provide a summry description.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="field-3" class="form-label">More Description Document <span
                                            class="text-danger">*</span></label>
                                    <input type="file" class="form-control" name="job_file" id="field-2"
                                        required>
                                    <div class="invalid-feedback">
                                        Please provide a description file.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h4>JOB POSITION</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-12">
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="field-4" class="form-label">Position Name</label>
                                            <input type="text" class="form-control" name="position_name" required
                                                id="field-4" placeholder="first name">
                                            <div class="invalid-feedback">
                                                Please provide a position name.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="field-6" class="form-label">More Description Document</label>
                                            <input type="file" class="form-control" id="field-6" required
                                                name="position_file">
                                            <div class="invalid-feedback">
                                                Please provide a positon file.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="field-5" class="form-label">Position Discription</label>
                                    <textarea name="position_description" id="" cols="10" rows="5" class="form-control" required></textarea>
                                    <div class="invalid-feedback">
                                        Please provide a positon description.
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4 d-grid">
                                <button class="btn btn-primary btn-block" type="submit">Register Vacant</button>

                            </div>
                            <div class="col-md-4"></div>
                        </div>


                    </form>
                </div>

            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>


    @include('assets.js')
