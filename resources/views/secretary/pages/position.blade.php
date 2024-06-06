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
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mb-4">VACANTS</h4>

                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="nav flex-column nav-pills nav-pills-tab" id="v-pills-tab"
                                                role="tablist" aria-orientation="vertical">
                                                <a class="nav-link active show mb-1" id="v-pills-home-tab"
                                                    data-bs-toggle="pill" href="#v-pills-home" role="tab"
                                                    aria-controls="v-pills-home" aria-selected="true">
                                                    <span>Vacants </span>
                                                </a>
                                                <a class="nav-link mb-1" id="v-pills-profile-tab" data-bs-toggle="pill"
                                                    href="#v-pills-profile" role="tab"
                                                    aria-controls="v-pills-profile" aria-selected="false">
                                                    Posts
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
                                                            <div class="col-md-6"></div>
                        
                                                                <div class="col-sm-6">
                                                                    <div class="text-sm-end">
                                                                        <button type="button"
                                                                            class="btn btn-primary waves-effect waves-light mb-2"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#job-registration">Vacant Registration
                                                                            </button>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <div class="table-responsive">
                                                                <table id="basic-datatable" class="table dt-responsive nowrap w-100">
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
                                                                                    <a href="javascript:void(0);"
                                                                                        class="action-icon">
                                                                                        <i
                                                                                            class="mdi mdi-square-edit-outline"></i></a>
                                                                                    <a href="javascript:void(0);"
                                                                                        class="action-icon">
                                                                                        <i
                                                                                            class="mdi mdi-delete"></i></a>
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
                                                            </div>

                                                           

                                                        </div>
                                                        <!-- end card-body-->
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                                    aria-labelledby="v-pills-profile-tab">
                                                    <div class="">
                                                        <div class="">
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
                                                                <div class="col-sm-6">
                                                                    <div class="text-sm-end">
                                                                        <button type="button"
                                                                            class="btn btn-primary waves-effect waves-light mb-2"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#post-vacant-modal">Publish vacants
                                                                            </button>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <div class="table-responsive">
                                                                <table
                                                                    class="table table-centered table-nowrap table-hover mb-0">
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
                                                                        
                                                                        @forelse ($posts as $post)
                                                                        <tr>
                                                                            <td>{{ $post->vacant->name }}</td>
                                                                            <td>{{ $post->vacant_category }}</td>
                                                                            <td>{{ $post->vacant->location }}</td>
                                                                            <td>{{ $post->end_date }}</td>
                                                                            <td>Phd</td>
                                                                            <td>economics</td>
                                                                            <td>
                                                                                <span><b>Gender:</b>{{ $post->gender }}</span>
                                                                                <span><b>Experience:</b>{{ $post->year_experience }}</span>
                                                                                <span><b>Age:</b>{{ $post->age_range }}</span>
                                                                            </td>
                                                                            <td>
                                                                                <span class="btn btn-success btn-xs text-white">Active</span>
                                                                            </td>
                                                                            <td>
                                                                                <a href="javascript:void(0);" class="action-icon">
                                                                                    <i class="mdi mdi-square-edit-outline"></i>
                                                                                </a>
                                                                                <a href="javascript:void(0);" class="action-icon">
                                                                                    <i class="mdi mdi-delete"></i>
                                                                                </a>
                                                                            </td>
                                                                        </tr>
                                                                    @empty
                                                                        <tr>
                                                                            <td colspan="9">No data available</td>
                                                                        </tr>
                                                                    @endforelse

                                                                     
                                                                            
                                                    


                                                                    </tbody>
                                                                </table>
                                                            </div>

                                                            <ul
                                                                class="pagination pagination-rounded justify-content-end mb-0 mt-2">
                                                                <li class="page-item">
                                                                    <a class="page-link" href="javascript: void(0);"
                                                                        aria-label="Previous">
                                                                        <span aria-hidden="true">«</span>
                                                                        <span class="visually-hidden">Previous</span>
                                                                    </a>
                                                                </li>
                                                                <li class="page-item active"><a class="page-link"
                                                                        href="javascript: void(0);">1</a></li>
                                                                <li class="page-item"><a class="page-link"
                                                                        href="javascript: void(0);">2</a>
                                                                </li>
                                                                <li class="page-item"><a class="page-link"
                                                                        href="javascript: void(0);">3</a>
                                                                </li>
                                                                <li class="page-item"><a class="page-link"
                                                                        href="javascript: void(0);">4</a>
                                                                </li>
                                                                <li class="page-item"><a class="page-link"
                                                                        href="javascript: void(0);">5</a>
                                                                </li>
                                                                <li class="page-item">
                                                                    <a class="page-link" href="javascript: void(0);"
                                                                        aria-label="Next">
                                                                        <span aria-hidden="true">»</span>
                                                                        <span class="visually-hidden">Next</span>
                                                                    </a>
                                                                </li>
                                                            </ul>

                                                        </div>
                                                        <!-- end card-body-->
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                                    aria-labelledby="v-pills-messages-tab">
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
                                                                            <th>Email</th>
                                                                            <th>Company</th>
                                                                            <th>Created Date</th>
                                                                            <th style="width: 82px;">Action</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
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
                                                                        </tr>




                                                                    </tbody>
                                                                </table>
                                                            </div>

                                                            <ul
                                                                class="pagination pagination-rounded justify-content-end mb-0 mt-2">
                                                                <li class="page-item">
                                                                    <a class="page-link" href="javascript: void(0);"
                                                                        aria-label="Previous">
                                                                        <span aria-hidden="true">«</span>
                                                                        <span class="visually-hidden">Previous</span>
                                                                    </a>
                                                                </li>
                                                                <li class="page-item active"><a class="page-link"
                                                                        href="javascript: void(0);">1</a></li>
                                                                <li class="page-item"><a class="page-link"
                                                                        href="javascript: void(0);">2</a>
                                                                </li>
                                                                <li class="page-item"><a class="page-link"
                                                                        href="javascript: void(0);">3</a>
                                                                </li>
                                                                <li class="page-item"><a class="page-link"
                                                                        href="javascript: void(0);">4</a>
                                                                </li>
                                                                <li class="page-item"><a class="page-link"
                                                                        href="javascript: void(0);">5</a>
                                                                </li>
                                                                <li class="page-item">
                                                                    <a class="page-link" href="javascript: void(0);"
                                                                        aria-label="Next">
                                                                        <span aria-hidden="true">»</span>
                                                                        <span class="visually-hidden">Next</span>
                                                                    </a>
                                                                </li>
                                                            </ul>

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
                                                                            <th>Email</th>
                                                                            <th>Company</th>
                                                                            <th>Created Date</th>
                                                                            <th style="width: 82px;">Action</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
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
                                                                        </tr>




                                                                    </tbody>
                                                                </table>
                                                            </div>

                                                            <ul
                                                                class="pagination pagination-rounded justify-content-end mb-0 mt-2">
                                                                <li class="page-item">
                                                                    <a class="page-link" href="javascript: void(0);"
                                                                        aria-label="Previous">
                                                                        <span aria-hidden="true">«</span>
                                                                        <span class="visually-hidden">Previous</span>
                                                                    </a>
                                                                </li>
                                                                <li class="page-item active"><a class="page-link"
                                                                        href="javascript: void(0);">1</a></li>
                                                                <li class="page-item"><a class="page-link"
                                                                        href="javascript: void(0);">2</a>
                                                                </li>
                                                                <li class="page-item"><a class="page-link"
                                                                        href="javascript: void(0);">3</a>
                                                                </li>
                                                                <li class="page-item"><a class="page-link"
                                                                        href="javascript: void(0);">4</a>
                                                                </li>
                                                                <li class="page-item"><a class="page-link"
                                                                        href="javascript: void(0);">5</a>
                                                                </li>
                                                                <li class="page-item">
                                                                    <a class="page-link" href="javascript: void(0);"
                                                                        aria-label="Next">
                                                                        <span aria-hidden="true">»</span>
                                                                        <span class="visually-hidden">Next</span>
                                                                    </a>
                                                                </li>
                                                            </ul>

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
    <div class="modal fade" id="job-registration" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-light">
                    <h4 class="modal-title" id="myCenterModalLabel">Create Job </h4>
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
                    <form action="{{ route('job_registrations') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="field-1" class="form-label">Job Title</label>
                                    <input type="text" class="form-control" id="field-1" name="job_name"
                                        placeholder="job title">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="field-2" class="form-label">Location</label>
                                    <input type="text" class="form-control" name="job_location" id="field-2"
                                        placeholder="singida">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="field-3" class="form-label">Job Description</label>
                                    <textarea class="form-control" id="field-7" name="job_description" placeholder="Write something about job"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="field-3" class="form-label">More Discription Document</label>
                                    <input type="file" class="form-control" name="job_file" id="field-2">
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
                                            <input type="text" class="form-control" name="position_name"
                                                id="field-4" placeholder="first name">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="field-6" class="form-label">More Description Document</label>
                                            <input type="file" class="form-control" id="field-6"
                                                name="position_file" placeholder="email">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="field-5" class="form-label">Position Discription</label>
                                    <textarea name="position_description" id="" cols="15" rows="5" class="form-control"></textarea>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <button class="btn btn-primary btn-block" type="submit">Register</button>

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
  <div class="modal fade" id="post-vacant-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-light">
                <h4 class="modal-title" id="myCenterModalLabel">Publish a vacant to applicants </h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">

                <h4>VACANTS INFORMATION</h4>
                <form action="{{ route('job_registrations') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="example-select" class="form-label"> Vacant Title</label>
                                <select class="form-select" id="example-select" name="job_id">
                                    {{-- @foreach ($jobs as $job)
                                        <option value="{{ $job->id }}">{{ $job->job_name }}</option>
                                    @endforeach --}}

                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="example-select" class="form-label"> Vacant Category</label>
                                <select class="form-select" id="example-select" name="job_id">
                                    {{-- @foreach ($jobs as $job)
                                        <option value="{{ $job->id }}">{{ $job->job_name }}</option>
                                    @endforeach --}}

                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="example-select" class="form-label"> Institions</label>
                                <select class="form-select" id="example-select" name="job_id">
                                    {{-- @foreach ($jobs as $job)
                                        <option value="{{ $job->id }}">{{ $job->job_name }}</option>
                                    @endforeach --}}

                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="field-3" class="form-label">Application Date</label>
                                <input type="date" class="form-control" name="job_file" id="field-2">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="field-3" class="form-label">Enddate Application</label>
                                <input type="date" class="form-control" name="job_file" id="field-2">
                            </div>
                        </div>
                    </div>
                    <h4>ACCADEMIC QUALIFICATION</h4>
                    <div class="row">

                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="example-select" class="form-label"> Education Level</label>
                                <select class="form-select" id="example-select" name="job_id">
                                    {{-- @foreach ($jobs as $job)
                                        <option value="{{ $job->id }}">{{ $job->job_name }}</option>
                                    @endforeach --}}

                                </select>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="example-select" class="form-label"> Education Category</label>
                                <select class="form-select" id="example-select" name="job_id">
                                    {{-- @foreach ($jobs as $job)
                                        <option value="{{ $job->id }}">{{ $job->job_name }}</option>
                                    @endforeach --}}

                                </select>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="example-select" class="form-label">Education Program</label>
                                <select class="form-select" id="example-select" name="job_id">
                                    {{-- @foreach ($jobs as $job)
                                        <option value="{{ $job->id }}">{{ $job->job_name }}</option>
                                    @endforeach --}}

                                </select>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <h4>OTHER QUALIFICATION</h4>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="field-3" class="form-label">Applicant Age</label>
                                <select class="form-select" id="example-select" name="job_id">

                                    <option value="1">18</option>
                                    <option value="2">20 - 30</option>
                                    <option value="3">30 - 40</option>
                                    <option value="4">40 - 50</option>
                                    <option value="5">50 above</option>


                                </select>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="field-3" class="form-label">Applicant Experience</label>
                                <select class="form-select" id="example-select" name="job_id">

                                    <option value="1">None</option>
                                    <option value="2">1 year</option>
                                    <option value="3">2 years</option>
                                    <option value="4">3 years</option>
                                    <option value="5">4 years</option>


                                </select>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="field-3" class="form-label">Applicant Gender</label>
                                <select class="form-select" id="example-select" name="job_id">

                                    <option value="1">None</option>
                                    <option value="2">Male</option>
                                    <option value="3">Female</option>
                                    <option value="4">Both</option>


                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-8">
                            <div class="mb-3">
                                <label for="field-5" class="form-label">Summary Over view</label>
                                <textarea name="position_description" id="" cols="15" rows="5" class="form-control"></textarea>
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
<!-- /.modal -->

  
    <!-- Modal -->
    <div class="modal fade" id="uploads-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header bg-light">
                    <h4 class="modal-title" id="myCenterModalLabel">Uploads </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <form action="" method="post" >
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
