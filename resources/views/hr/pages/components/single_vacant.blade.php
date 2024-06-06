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
                                        <div class="col-sm-2">
                                            <div class="nav flex-column nav-pills nav-pills-tab" id="v-pills-tab"
                                                role="tablist" aria-orientation="vertical">
                                                <a class="nav-link active show mb-1" href="{{route('jobs')}}">
                                                    <span> All Vacants </span>
                                                </a>
                                                          
                                            </div>
                                        </div>
                                        <!-- end col-->
                                        <div class="col-sm-10">
                                            <div class="">
                                                <div class="">
                                                    <div class="row justify-content-between mb-2">
                                                        <div class="col-sm-6"></div>
                                                        <div class="col-sm-6">
                                                            <div class="text-sm-end">
                                                                <button type="button"
                                                                    class="btn btn-primary  btn-xs waves-effect waves-light mb-2"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal{{ $vacant->id }}">
                                                                    <i class="mdi mdi-pencil"></i>

                                                                </button>

                                                                <button type="button"
                                                                    class="btn btn-danger btn-xs waves-effect waves-light mb-2"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleDelete{{ $vacant->id }}">
                                                                    <i class="mdi mdi-delete"></i>

                                                                </button>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="container-fluid">
                                                        <div class="row">
                                                            <div class="col-lg-10 col-md-10 col-xl-10">
                                                                <div class="card text-center">
                                                                    <div class="card-body">
                                                                        {{-- <img src="../assets/images/users/user-1.jpg" class="rounded-circle avatar-lg img-thumbnail"
                                                                        alt="profile-image"> --}}

                                                                        <h4 class="mb-0">
                                                                            {{ $vacant->name }}</h4>
                                                                        <p class="text-muted">@school</p>
                                                                        {{--                                         
                                                                        <button type="button" class="btn btn-success btn-xs waves-effect mb-2 waves-light">Follow</button>
                                                                        <button type="button" class="btn btn-danger btn-xs waves-effect mb-2 waves-light">Message</button> --}}

                                                                        <div class="text-start mt-3">
                                                                            <h4 class="font-13 text-uppercase">
                                                                                About: {{ $vacant->name }}
                                                                            </h4>
                                                                            <p class="text-muted font-13 mb-3">
                                                                               {{$vacant->description}}
                                                                            </p>
                                                                            <p class="text-muted mb-2 font-13">
                                                                                <strong>Job Position :</strong>
                                                                                <span
                                                                                    class="ms-2">{{ $vacant->position_name }}</span>
                                                                            </p>

                                                                            <p class="text-muted mb-2 font-13">
                                                                                <strong>Mobile :</strong><span
                                                                                    class="ms-2">(+255) 123
                                                                                    1234</span></p>

                                                                            <p class="text-muted mb-2 font-13">
                                                                                <strong>Position Description :</strong>
                                                                                <span
                                                                                    class="ms-2">{{ $vacant->position_description }}</span>
                                                                            </p>

                                                                            <p class="text-muted mb-1 font-13">
                                                                                <strong>Location :</strong>
                                                                                <span
                                                                                    class="ms-2">{{ $vacant->location }}</span>
                                                                            </p>
                                                                        </div>


                                                                    </div>
                                                                </div> <!-- end card -->


                                                            </div> <!-- end col-->


                                                        </div>


                                                        <!-- end row -->

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
    
    <!-- /.modal -->
    <div class="modal fade" id="exampleDelete{{ $vacant->id }}" tabindex="-1" role="dialog"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-top modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>{{ $vacant->name }}</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <span class="text-larger">
                        <h4 style="font-size:20px">Are you sure delete ?.<b>{{ $vacant->name }}</b></h4>
                    </span>
                    <div class="modal-footer">
                        <div class="row">
                            <div class="col-md-6">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>

                            </div>
                            <div class="col-md-6">
                                <form action="{{ route('delete_vacant', $vacant->id) }}" method="POST"
                                    enctype="multipart/form-data" class="needs-validation" novalidate>
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-primary btn-block" type="submit">Delete</button>


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

    <div class="modal fade" id="exampleModal{{ $vacant->id }}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-light">
                    <h4 class="modal-title" id="myCenterModalLabel">Registration for Job Information </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">

                    <h4>JOB INFORMATION</h4>
                    <form action="{{ route('vacant_update', $vacant->id) }}" method="POST"
                        enctype="multipart/form-data" class="needs-validation" novalidate>
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="field-1" class="form-label">Job Title <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="field-1" name="name"
                                        value="{{ $vacant->name }}" required placeholder="job title">
                                    <div class="invalid-feedback">
                                        Please provide a vacant title.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="field-2" class="form-label">Location</label>
                                    <input type="text" class="form-control" name="location" id="field-2"
                                        value="{{ $vacant->location }}" required placeholder="singida">
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
                                    <textarea name="description" id="" cols="15" rows="5" value="{{ $vacant->description }}"
                                        class="form-control" required></textarea>
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
                                        value="{{ $vacant->job_file }}" required>
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
                                                id="field-4" placeholder="first name"
                                                value="{{ $vacant->position_name }}">
                                            <div class="invalid-feedback">
                                                Please provide a position name.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="field-6" class="form-label">More Description Document</label>
                                            <input type="file" class="form-control" id="field-6" required
                                                name="position_file" value="{{ $vacant->position_file }}">
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
                                    <textarea name="position_description" id="" cols="15" rows="5" class="form-control" required
                                        name="{{ $vacant->position_description }}"></textarea>
                                    <div class="invalid-feedback">
                                        Please provide a positon description.
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4 d-grid">
                                <button class="btn btn-primary btn-block" type="submit">Update Vacant</button>

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
