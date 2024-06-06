@include('assets.css')

<body class="loading"
    data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": false}, "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": true}'>

    <!-- Begin page -->
    <div id="wrapper">

        @include('layouts.secretary.header')

        <!-- ========== Left Sidebar Start ========== -->
        @include('layouts.secretary.sidebar')


        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">
                    <div class="row mt-2">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="header-title">All Staffs</h4>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- <p class="text-muted font-13 mb-4">
                                        DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction
                                        function:
                                        <code>$().DataTable();</code>.
                                    </p> --}}

                                    <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                        <thead>
                                            <tr>
                                                <th>First Name</th>
                                                <th>Middle Name</th>
                                                <th>Last Name</th>
                                                <th>Email</th>
                                                <th>Contact</th>
                                                <th>Vacant</th>
                                                <th>Institution</th>
                                                <th>Basic Salary</th>
                                                <th>Allowance Salary</th>
                                                <th>Total</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>


                                        <tbody>
                                            @if ($staffs->count() > 0)
                                                @foreach ($staffs as $staff)
                                                <tr>
                                                    <td>{{ $staff->fname }}</td>
                                                <td>{{ $staff->mname }}</td>
                                                <td> {{ $staff->lname }}</td>
                                                <td>{{ $staff->email }}</td>
                                                <td>{{ $staff->phone }}</td>
                                                <td>{{ $staff->vacant->name }}</td>
                                                <td>{{ $staff->institution->name }}</td>
                                                <td>{{ $staff->basic_salary }}</td>
                                                <td>{{ $staff->allounce_salary }}</td>
                                                <td><span class="text-danger"><b>Total :</b></span>
                                                    {{ $staff->basic_salary + $staff->allounce_salary }}</td>
                                                <td>   <a href="#"
                                                    class="action-icon"> <i
                                                        class="mdi mdi-delete"></i></a></td>

                                                </tr>
                                                
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td colspan="4">No Staff Registered.</td>
                                                </tr>
                                            @endif
                                            

                                        </tbody>
                                    </table>

                                </div> <!-- end card body-->
                            </div> <!-- end card -->
                        </div><!-- end col-->
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



    <div class="modal fade" id="custom-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-light">
                    <h4 class="modal-title" id="myCenterModalLabel">Add New Staff </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <h4>Person Information</h4>
                    <form action="{{ route('staff_registrations') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">

                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="field-4" class="form-label">First name</label>
                                    <input type="text" class="form-control" id="field-4" placeholder="first name"
                                        name="first_name">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="field-5" class="form-label">Last name</label>
                                    <input type="text" class="form-control" id="field-5" placeholder="last name"
                                        name="last_name">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="field-6" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="field-6" name="email"
                                        placeholder="email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="field-1" class="form-label">Contanct</label>
                                    <input type="interger" class="form-control" id="field-1" name="contacts"
                                        placeholder="phone number">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="field-2" class="form-label">Staff location</label>
                                    <input type="text" class="form-control" id="field-2" placeholder="location"
                                        name="location">
                                </div>
                            </div>
                        </div>

                        <h4>Job Information</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="example-select" class="form-label">Job title</label>
                                    <select class="form-select" id="example-select" name="job_id">
                                    
                                            <option value="1">Human Resoucres</option>
                                        

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="field-2" class="form-label">Contract</label>
                                    <input type="file" class="form-control" id="field-2" placeholder="file"
                                        name="staff_contract">
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Register Staff</button>
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
