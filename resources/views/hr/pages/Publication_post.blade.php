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
                    <div class="row mt-2">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h2 class="header-title mb-4">Publications Vacants</h2>
                                    <div class="row justify-content-between mb-2">
                                        <div class="col-sm-6">


                                        </div>
                                        <div class="col-sm-6">
                                            <div class="text-sm-end">
                                                <button type="button"
                                                    class="btn btn-primary waves-effect waves-light mb-2"
                                                    data-bs-toggle="modal" data-bs-target="#post-vacant-modal">publish
                                                    vacant
                                                </button>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="table-responsive">
                                        <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                            <thead>
                                                <tr>
                                                    <th>Post Name</th>
                                                    <th>Post category</th>
                                                    <th>Location</th>
                                                    <th>Application Date</th>
                                                    <th>Education Level</th>
                                                    <th>Education Program</th>
                                                    <th>Others</th>
                                                    <th>status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>



                                            <tbody>
                                                @if (is_iterable($posts) && count($posts) > 0)
                                                    @foreach ($posts as $post)
                                                    <tr>
                                                        <td>{{ $post->vacant->name }}</td>
                                                        <td>{{ $post->vacant_category }}</td>
                                                        <td>{{ $post->vacant->location }}</td>
                                                        <td>{{ $post->end_date }}</td>
                                                        <td>{{ $post->educationLevel->name }}</td>
                                                        <td>{{ $post->educationName->name }}</td>
                                                        <td>
                                                            <span><b>Gender:</b> {{ $post->gender }}</span>
                                                            <span><b>Experience:</b>
                                                                {{ $post->year_experience }}</span>
                                                            <span><b>Age:</b> {{ $post->age_range }}</span>
                                                        </td>
                                                        <td>
                                                            <span class="btn btn-xs text-white {{ $post->status === 'Active' ? 'btn-success' : 'btn-danger' }}">
                                                                {{ $post->status }}
                                                            </span>

                                                        </td>
                                                        <td>
                                                            <a href="{{route('show_post',$post->id)}}" class="btn btn-info btn-xs"><i
                                                                class="mdi mdi-eye"></i></a>
                                                            {{-- <button type="button"
                                                                class="btn btn-success waves-effect waves-light mb-2"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#exampleUpdate{{ $post->id }}"></button>
                                                            <button type="button"
                                                                class="btn btn-danger waves-effect waves-light mb-2"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#exampleDelete{{ $post->id }}"><i
                                                                    class="mdi mdi-delete"></i></button> --}}
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                @else
                                                    <tr>
                                                        <td colspan="9">No posts found.</td>
                                                    </tr>
                                                @endif

                                            </tbody>
                                        </table>
                                    </div>



                                </div>

                                <!-- end card-body-->
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <canvas id="salaryChart"></canvas>

                        </div>
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

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->


    </div>




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
                                        <option value="IT and Telecom">IT and  Telecom</option>
                                        <option value="Accounting and Auditing">Accounting and Auditing</option>
                                        <option value="Healthcare and Pharmaceutical ">Healthcare and Pharmaceutical </option>
                                        <option value="Socials Studys and Arts"> Socials Studys and Arts</option>
                                        <option value="HR & Administration">HR & Administration</option>
                                        <option value="Science Studies and Technincian">Science Studies and Technincian</option>



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
                                        <option value="20 - 30">20 - 35</option>
                                        <option value="30 - 40">36 - 45</option>
                                        <option value="40 - 50">46 - 50</option>
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
                                        {{-- <option value="Both">Both</option> --}}


                                    </select>
                                    <div class="invalid-feedback">
                                        Please choose your gender.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="field-5" class="form-label">Summary Over view</label>
                                    <textarea name="summary" id="" cols="10" rows="10" class="form-control" required></textarea>
                                    <div class="invalid-feedback">
                                        Please fill the Summary.
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="col-md-2"></div> --}}
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
    <!-- Modal -->
    <div class="modal fade" id="uploads-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header bg-light">
                    <h4 class="modal-title" id="myCenterModalLabel">Uploads </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <form action="" method="post">
                        <div class="row">
                            <div class="mb-3">
                                <label for="field-4" class="form-label">Title</label>
                                <input type="text" class="form-control" id="field-4"
                                    placeholder="position name">
                            </div>
                            <div class="mb-3">
                                <label for="field-5" class="form-label">Document</label>
                                <input type="file" class="form-control" id="field-5"
                                    placeholder="positon name">
                            </div>



                            <div class="mb-3">
                                <label for="field-3" class="form-label">Description</label>
                                <textarea class="form-control" id="field-7" placeholder="Write something about job"></textarea>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                            <div class="col-md-3"></div>
                            <div class="col-md-3 justify-content-end">
                                <button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>

                    </form>


                </div>

            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->


    @include('assets.js')
