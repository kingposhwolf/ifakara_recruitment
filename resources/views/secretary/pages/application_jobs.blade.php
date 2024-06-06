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
                    <div class="row mt-4">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="header-title">Applicants</h4>
                                            </div>
                                        </div>
                                    </div>


                                    <table id="datatable-buttons"
                                        class="table table-striped dt-responsive nowrap w-100 mt-4">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>


                                        <tbody>

                                            <tr>
                                                <td>Unity Butler</td>
                                                <td>Marketing Designer</td>
                                                <td>San Francisco</td>
                                                <td>47</td>
                                                <td>2009/12/09</td>
                                                <td>$85,675</td>
                                                <td> <a href="#position-modal" class="action-icon"
                                                        data-bs-toggle="modal" data-bs-target="#position-modal"><i class="fa fa-eye" aria-hidden="true"></i>

                                                    </a></td>
                                            </tr>



                                            <tr>
                                                <td>Cara Stevens</td>
                                                <td>Sales Assistant</td>
                                                <td>New York</td>
                                                <td>46</td>
                                                <td>2011/12/06</td>
                                                <td>$145,600</td>
                                                <td> <a href="#position-modal" class="action-icon"
                                                    data-bs-toggle="modal" data-bs-target="#position-modal"><i class="fa fa-eye" aria-hidden="true"></i>

                                                </a></td>
                                            </tr>

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



    <!-- Modal -->
    <div class="modal fade" id="position-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-light">
                    <h4 class="modal-title" id="myCenterModalLabel">Applicants Previews </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <h4>Person Details</h4>
                    <div class="row">

                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="field-4" class="form-label text-info">First name</label>
                                {{-- <input type="text" class="form-control" id="field-4" placeholder="first name"> --}}
                                <h5 class="text-small">MAJALIWA</h5>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="field-5" class="form-label text-info">Last name</label>
                                {{-- <input type="text" class="form-control" id="field-5" placeholder="last name"> --}}
                                <h5>MAJALIWA</h5>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="field-6" class="form-label text-info">Email</label>
                                {{-- <input type="email" class="form-control" id="field-6" placeholder="email"> --}}
                                <h5>majaiwe@gmail.com</h5>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="field-1" class="form-label text-info">Contanct</label>
                                {{-- <input type="text" class="form-control" id="field-1"placeholder="phonenumber"> --}}
                                <h5>03973453093</h5>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="field-2" class="form-label text-info">CV</label>
                                <h5>MAJALIWA MAJLIWA CV <a href="http://"> <i class="fa fa-download"
                                            aria-hidden="true"></i>
                                    </a></h5>
                            </div>
                        </div>
                    </div>
                    <hr class="text-warning">
                    <h4>Job Appliced</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="field-1" class="form-label text-blue">Job Title</label>
                                {{-- <input type="text" class="form-control" id="field-1" placeholder="job title"> --}}
                                <h5>Teacher</h5>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="field-2" class="form-label text-blue">Job Categoris</label>
                                {{-- <input type="file" class="form-control" id="field-2" placeholder="file"> --}}
                                <h5>Accademic Teacher</h5>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="field-3" class="form-label text-blue">Job Description</label>
                                {{-- <textarea class="form-control" id="field-7" placeholder="Write something about job"></textarea> --}}

                                <p style="text-align: justify">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Accusantium voluptatibus suscipit commodi officia corrupti odio doloribus quos
                                    voluptatum iusto modi, laborum maiores in praesentium aliquid rem quae sed aperiam
                                    nihil!</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Requitment</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <div class="modal fade" id="custom-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-light">
                    <h4 class="modal-title" id="myCenterModalLabel">Add New Staff </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">

                    <div class="row">

                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="field-4" class="form-label">First name</label>
                                <input type="text" class="form-control" id="field-4" placeholder="first name">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="field-5" class="form-label">Last name</label>
                                <input type="text" class="form-control" id="field-5" placeholder="last name">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="field-6" class="form-label">Email</label>
                                <input type="email" class="form-control" id="field-6" placeholder="email">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="field-1" class="form-label">Contanct</label>
                                <input type="text" class="form-control" id="field-1"
                                    placeholder="phone number">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="field-2" class="form-label">Staff location</label>
                                <input type="text" class="form-control" id="field-2" placeholder="location">
                            </div>
                        </div>
                    </div>

                    <h4>Job Information</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="field-1" class="form-label">Job Title</label>
                                <input type="text" class="form-control" id="field-1" placeholder="job title">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="field-2" class="form-label">Contract</label>
                                <input type="file" class="form-control" id="field-2" placeholder="file">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="field-3" class="form-label">Job Description</label>
                                <textarea class="form-control" id="field-7" placeholder="Write something about job"></textarea>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
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

    
    <!-- Modal -->
    <div class="modal fade" id="position-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-light">
                    <h4 class="modal-title" id="myCenterModalLabel">Applicants Previews </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <h4>Person Details</h4>
                    <div class="row">

                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="field-4" class="form-label text-info">First name</label>
                                {{-- <input type="text" class="form-control" id="field-4" placeholder="first name"> --}}
                                <h5 class="text-small">MAJALIWA</h5>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="field-5" class="form-label text-info">Last name</label>
                                {{-- <input type="text" class="form-control" id="field-5" placeholder="last name"> --}}
                                <h5>MAJALIWA</h5>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="field-6" class="form-label text-info">Email</label>
                                {{-- <input type="email" class="form-control" id="field-6" placeholder="email"> --}}
                                <h5>majaiwe@gmail.com</h5>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="field-1" class="form-label text-info">Contanct</label>
                                {{-- <input type="text" class="form-control" id="field-1"placeholder="phonenumber"> --}}
                                <h5>03973453093</h5>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="field-2" class="form-label text-info">CV</label>
                                <h5>MAJALIWA MAJLIWA CV <a href="http://"> <i class="fa fa-download"
                                            aria-hidden="true"></i>
                                    </a></h5>
                            </div>
                        </div>
                    </div>
                    <hr class="text-warning">
                    <h4>Job Appliced</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="field-1" class="form-label text-blue">Job Title</label>
                                {{-- <input type="text" class="form-control" id="field-1" placeholder="job title"> --}}
                                <h5>Teacher</h5>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="field-2" class="form-label text-blue">Job Categoris</label>
                                {{-- <input type="file" class="form-control" id="field-2" placeholder="file"> --}}
                                <h5>Accademic Teacher</h5>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="field-3" class="form-label text-blue">Job Description</label>
                                {{-- <textarea class="form-control" id="field-7" placeholder="Write something about job"></textarea> --}}

                                <p style="text-align: justify">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Accusantium voluptatibus suscipit commodi officia corrupti odio doloribus quos
                                    voluptatum iusto modi, laborum maiores in praesentium aliquid rem quae sed aperiam
                                    nihil!</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Requitment</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->


    @include('assets.js')
