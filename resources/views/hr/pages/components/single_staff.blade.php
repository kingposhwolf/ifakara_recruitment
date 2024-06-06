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
                                                <h3 class="text-dark mt-1"><span
                                                        data-plugin="counterup">{{ $staff->basic_salary }}</span></h3>
                                                <p class="text-muted mb-1 text-truncate">Basic Salary</p>
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
                                                <h3 class="text-dark mt-1"><span
                                                        data-plugin="counterup">{{ $staff->allounce_salary }}</span>
                                                </h3>
                                                <p class="text-muted mb-1 text-truncate">Allowance Salary</p>
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
                                                <h3 class="text-dark mt-1"><span data-plugin="counterup">
                                                        {{ $staff->basic_salary + $staff->allounce_salary }}</span></h3>
                                                <p class="text-muted mb-1 text-truncate">Total</p>
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
                                    <div class=" mb-3">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="avatar-lg rounded-circle bg-light">
                                                    <i class="fe-user font-26 avatar-title text-info"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h4 class="mt-0 mb-1">{{ $staff->fname }} {{ $staff->lname }}</h4>
                                                <p class="text-muted"></p>
                                                <p class="text-muted"><i class="mdi mdi-office-building"></i>
                                                    {{ $staff->institution  ->name }} </p>

                                                <div class="">

                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                    <h5 class="mb-3 mt-4 text-uppercase bg-light p-2"><i
                                            class="mdi mdi-account-circle me-1"></i> Personal Information</h5>
                                    <div class="">
                                        <h4 class="font-13 text-uppercase">About Me :</h4>

                                        <h4 class="font-13 mb-1">Name :</h4>
                                        <p class="mb-3"> {{$staff->fname}} {{$staff->mname}} {{$staff->lname}}</p>
                                        <h4 class="font-13 mb-1">Email : <b>{{$staff->email}}</b></h4>

                                        <h4 class="font-13 mb-1">Contact :<b>{{$staff->phone}}</b></h4>

                                        <h4 class="font-13 mb-1">Company :<b>{{ $staff->institution  ->name }}</b></h4>



                                    </div>
                                </div>
                            </div>
                            <!-- end card-->
                        </div>
                        <div class="col-xl-8 col-lg-6">
                            <!-- project card -->
                            <div class="card d-block">
                                <div class="card-body">
                                    <div class="dropdown float-end">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="dripicons-dots-3 btn btn-primary" style="font-size:20px"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item btn btn-secondary"  data-bs-toggle="modal" data-bs-target="#exampleUpdate{{ $staff->id }}"><i
                                                    class="mdi mdi-pencil me-1"></i>Edit staff</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item  btn btn-danger"data-bs-toggle="modal" data-bs-target="#exampleDelete{{ $staff->id }}"><i
                                                    class="mdi mdi-delete me-1"></i>Delete</a>
                                            <!-- item-->

                                        </div>
                                    </div>
                                    <!-- project title-->
                                    <h5 class="mt-0 font-20">
                                        Job Title: <b>{{$staff->vacant->name}}</b>
                                    </h5>

                                    <h5>Job Description:</h5>



                                    <p class="mb-4 text-justify">
                                        {{ $staff->vacant->description }}
                                    </p>

                                    <div class="mb-4">
                                        <h5>Position: <b>{{$staff->vacant->position_name}}</b></h5>
                                        <div class="">
                                            <h5>Position Description</h5>
                                            <p class="text-justify">{{$staff->vacant->position_description}}</p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="mb-4">
                                                <h5>Staff  Contract Date</h5>
                                                <p>{{$staff->created_at}} <small class="text-muted">1:00 PM</small></p>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-4">
                                                <h5>End Date</h5>
                                                <p>{{$staff->end_date}}<small class="text-muted">1:00 PM</small></p>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-4">
                                                <h5>Staff Performance</h5>
                                                <p class="text-success"><b>ACCEPTED</b></p>
                                            </div>
                                        </div>
                                    </div>



                                </div> <!-- end card-body-->

                            </div> <!-- end card-->


                        </div> <!-- end col -->



                    </div>
                    <!-- end row -->

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


    <div class="modal fade" id="exampleDelete{{ $staff->id }}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-top modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Delete  The staff</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <span class="text-larger">
                        <h4 style="font-size:20px">Are you sure delete ?.<b>{{ $staff->fname }} {{$staff->lname}}</b> as the {{ $staff->vacant->name }} in {{ $staff->institution->name }}.</h4>
                    </span>
                    <div class="modal-footer">
                        <div class="row">
                            <div class="col-md-6">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>

                            </div>
                            <div class="col-md-6">
                                <form action="{{ route('staff_delete', ['id' => $staff->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-block">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

     <div class="modal fade" id="exampleUpdate{{ $staff->id }}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-light">
                    <h4 class="modal-title" id="myCenterModalLabel">Update the Staff Details </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <h4>Person Information</h4>
                    <form action="{{ route('staff_update',$staff->id) }}" method="post" enctype="multipart/form-data"
                        class="needs-validation" novalidate>
                        @csrf
                        @method('PUT')
                        <div class="row">

                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="field-4" class="form-label">First name</label>
                                    <input type="text" class="form-control" id="field-4" placeholder="first name"
                                        required name="fname" value="{{$staff->fname}}">
                                    <div class="invalid-feedback">
                                        Please enter your first name.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="field-4" class="form-label">Middle name</label>
                                    <input type="text" class="form-control" id="field-4" placeholder="middle  name"
                                        required name="mname" value="{{$staff->mname}}">
                                    <div class="invalid-feedback">
                                        Please enter your middile name.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="field-5" class="form-label">Last name</label>
                                    <input type="text" class="form-control" id="field-5" required
                                        placeholder="last name" name="lname" value="{{$staff->lname}}">
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
                                        required placeholder="email" value="{{$staff->email}}">
                                    <div class="invalid-feedback">
                                        Please enter your email
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="field-1" class="form-label">Contanct</label>
                                    <input type="number" class="form-control" id="field-1" name="phone"
                                        required placeholder="phone number" value="{{$staff->phone}}">
                                    <div class="invalid-feedback">
                                        Please enter your phone number.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="example-select" class="form-label"> Institions</label>
                                    <select class="form-select" id="example-select" name="institution_id">
                                        @foreach ($institution as $institution)
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
                                        @foreach ($vacant as $vacant)
                                            <option value="{{ $vacant->id }}">{{ $vacant->name }}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="field-2" class="form-label">Contract</label>
                                    <input type="file" class="form-control" id="field-2" placeholder="file"
                                        name="staff_contract" value="{{$staff->staff_contract}}">
                                    <div class="invalid-feedback">
                                        Please enter a staff contract.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="field-2" class="form-label">End of Contract <span>*</span></label>
                                    <input type="date" class="form-control" id="field-2" placeholder="file"
                                        required name="end_date" value="{{$staff->end_date}}">
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
                                        placeholder="20000 Tsh/=" name="basic_salary" value="{{$staff->basic_salary}}">
                                    <div class="invalid-feedback">
                                        Please fill staff basic Salary.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="field-2" class="form-label">Allaonce</label>
                                    <input type="number" class="form-control" id="field-2" placeholder="300000"
                                        required name="allounce_salary"value="{{$staff->allounce_salary}}">
                                    <div class="invalid-feedback">
                                        Please fill staff allounce Salary.
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4 d-grid">
                                <button type="submit" class="btn btn-primary">Update Staff</button>

                            </div>
                            <div class="col-md-4"></div>
                        </div>
                    </form>


                </div>

            </div>
        </div>
    </div>

    {{-- <div class="modal fade" id="custom-modal" tabindex="-1" role="dialog" aria-hidden="true">
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
                                    <input type="text" class="form-control" id="field-4" placeholder="first name"
                                        required name="fname">
                                    <div class="invalid-feedback">
                                        Please enter your first name.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="field-4" class="form-label">Middle name</label>
                                    <input type="text" class="form-control" id="field-4" placeholder="middle  name"
                                        required name="mname">
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

            </div>
        </div>
    </div>  --}}
    <!-- Modal -->
    {{-- <div class="modal fade" id="uploads-modal" tabindex="-1" role="dialog" aria-hidden="true">
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
    </div> --}}
    <!-- /.modal -->


    @include('assets.js')
