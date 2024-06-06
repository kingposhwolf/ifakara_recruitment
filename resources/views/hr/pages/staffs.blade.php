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
                                    <h2 class="header-title mb-4">All Staffs</h2>
                                    <div class="row justify-content-between mb-2">
                                        <div class="col-sm-6">


                                        </div>
                                        <div class="col-sm-6">
                                            <div class="text-sm-end">
                                                <button type="button"
                                                    class="btn btn-primary waves-effect waves-light mb-2"
                                                    data-bs-toggle="modal" data-bs-target="#custom-modal">Add New
                                                    Staff</button>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="table-responsive">
                                        <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                            <thead>
                                                <tr>
                                                    <th>First Name</th>
                                                    <th>Middle Name</th>
                                                    <th>Last Name</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    <th>Job Information</th>
                                                    <th>Instition</th>
                                                    <th>Basic Salary</th>
                                                    <th>Allowance Salary</th>
                                                    <th>Total</th>
                                                    <th>Contract Time line</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>


                                            <tbody>
                                                @foreach ($staffs as $staff)
                                                    <tr>
                                                        <td>{{ $staff->fname }}</td>
                                                        <td> {{ $staff->lname }}</td>
                                                        <td>{{ $staff->mname }}</td>
                                                        <td>{{ $staff->email }}</td>
                                                        <td>{{ $staff->phone }}</td>
                                                        <td>{{ $staff->vacant->name }}</td>
                                                        <td>{{ $staff->institution->name }}</td>
                                                        <td>{{ $staff->basic_salary }}</td>
                                                        <td>{{ $staff->allounce_salary }}</td>
                                                        <td><span><b>Total :</b></span>
                                                            {{ $staff->basic_salary + $staff->allounce_salary }}</td>
                                                        <td class="text-success">{{ $staff->end_date }}</td>
                                                        <td>

                                                            <a href="{{ route('single_staff', $staff->id) }}"><i
                                                                    class="mdi mdi-eye"></i></a>

                                                            {{-- <button type="button"
                                                                class="btn btn-success waves-effect waves-light mb-2"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#exampleUpdate{{ $staff->id }}"><i
                                                                    class="mdi mdi-eye"></i>

                                                            </button> --}}




                                                        </td>
                                                    </tr>
                                                @endforeach

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


    <div class="modal fade" id="custom-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-light">
                    <h4 class="modal-title" id="myCenterModalLabel">Add New Staff </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <h4>Person Information</h4>
                    <form action="{{ route('staff_registration') }}" method="post" enctype="multipart/form-data"
                        class="needs-validation" novalidate>
                        @csrf
                        <div class="row">

                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="field-4" class="form-label">First name</label>
                                    <input type="text" class="form-control" id="field-4"
                                        placeholder="first name" required name="fname">
                                    <div class="invalid-feedback">
                                        Please enter your first name.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="field-4" class="form-label">Middle name</label>
                                    <input type="text" class="form-control" id="field-4"
                                        placeholder="middle  name" required name="mname">
                                    <div class="invalid-feedback">
                                        Please enter your middile name.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="field-5" class="form-label">Last name</label>
                                    <input type="text" class="form-control" id="field-5" required
                                        placeholder="last name" name="lname">
                                    <div class="invalid-feedback">
                                        Please enter your last name.
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="field-6" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="field-6" name="email"
                                        required placeholder="email">
                                    <div class="invalid-feedback">
                                        Please enter your email
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="field-1" class="form-label">Contanct</label>
                                    <input type="number" class="form-control" id="field-1" name="phone"
                                        required placeholder="phone number">
                                    <div class="invalid-feedback">
                                        Please enter your phone number.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="example-select" class="form-label"> Institions</label>
                                    <select class="form-select" id="example-select" name="institution_id">
                                        @foreach ($institutions as $institution)
                                            <option value="{{ $institution->id }}">{{ $institution->name }}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="example-select" class="form-label"> Staff Gender</label>
                                    <select class="form-select" id="example-select" name="gender" required>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please choose your gender.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h4>Job Information</h4>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="example-select" class="form-label">Job title</label>
                                    <select class="form-select" id="example-select" name="vacant_id">
                                        @foreach ($vacants as $vacant)
                                            <option value="{{ $vacant->id }}">{{ $vacant->name }}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="field-2" class="form-label">Contract</label>
                                    <input type="file" class="form-control" id="field-2" placeholder="file"
                                        required name="staff_contract">
                                    <div class="invalid-feedback">
                                        Please enter a staff contract.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="field-2" class="form-label">End of Contract <span>*</span></label>
                                    <input type="date" class="form-control" id="field-2" placeholder="file"
                                        required name="end_date">
                                    <div class="invalid-feedback">
                                        Please enter endtime.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h4>Gross Salaries</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="example-select" class="form-label">Basic </label>
                                    <input type="number" class="form-control" id="field-2" required
                                        placeholder="20000 Tsh/=" name="basic_salary">
                                    <div class="invalid-feedback">
                                        Please fill staff basic Salary.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="field-2" class="form-label">Allaonce</label>
                                    <input type="number" class="form-control" id="field-2" placeholder="300000"
                                        required name="allounce_salary">
                                    <div class="invalid-feedback">
                                        Please fill staff allounce Salary.
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4 d-grid">
                                <button type="submit" class="btn btn-primary">Register Staff</button>

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
