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
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mb-4">Institutions</h4>

                                    <div class="row">
                                        <div class="col-sm-2">
                                            <div class="nav flex-column nav-pills nav-pills-tab" role="tablist"
                                                aria-orientation="vertical">
                                                <a class="nav-link active show mb-1" href="{{ route('institute') }}">

                                                    <span>All Instituions </span></a>


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
                                                                    data-bs-target="#exampleUpdate{{ $institution->id }}">
                                                                    <i class="mdi mdi-pencil"></i>

                                                                </button>

                                                                <button type="button"
                                                                    class="btn btn-danger btn-xs waves-effect waves-light mb-2"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleDelete{{ $institution->id }}">
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
                                                                            {{ $institution->name }}</h4>
                                                                        <p class="text-muted">@school</p>
                                                                        {{--                                         
                                                                        <button type="button" class="btn btn-success btn-xs waves-effect mb-2 waves-light">Follow</button>
                                                                        <button type="button" class="btn btn-danger btn-xs waves-effect mb-2 waves-light">Message</button> --}}

                                                                        <div class="text-start mt-3">
                                                                            <h4 class="font-13 text-uppercase">
                                                                                About: {{ $institution->name }}
                                                                            </h4>
                                                                            <p class="text-muted font-13 mb-3">
                                                                                Hi I'm Johnathn Deo,has been the
                                                                                industry's standard dummy text
                                                                                ever since the 1500s, when an
                                                                                unknown printer took a galley of
                                                                                type.
                                                                            </p>
                                                                            <p class="text-muted mb-2 font-13">
                                                                                <strong>School Email :</strong>
                                                                                <span
                                                                                    class="ms-2">{{ $institution->email }}</span>
                                                                            </p>

                                                                            <p class="text-muted mb-2 font-13">
                                                                                <strong>Mobile :</strong><span
                                                                                    class="ms-2">(+255) 123
                                                                                    1234</span></p>

                                                                            <p class="text-muted mb-2 font-13">
                                                                                <strong>Category :</strong>
                                                                                <span
                                                                                    class="ms-2">{{ $institution->category }}</span>
                                                                            </p>

                                                                            <p class="text-muted mb-1 font-13">
                                                                                <strong>Location :</strong>
                                                                                <span
                                                                                    class="ms-2">{{ $institution->location }}</span>
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

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->

   

    <!-- /.modal -->
    <div class="modal fade" id="exampleDelete{{ $institution->id }}" tabindex="-1" role="dialog"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-top modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Delete The Institution</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <span class="text-larger">
                        <h4 style="font-size:20px">Are you sure delete ?.<b>{{ $institution->name }} </b> .</h4>
                    </span>
                    <div class="modal-footer">
                        <div class="row">
                            <div class="col-md-6">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>

                            </div>
                            <div class="col-md-6">
                                <form action="{{ route('delete_institute', ['id' => $institution->id]) }}"
                                    method="POST">
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

    <div class="modal fade" id="exampleUpdate{{ $institution->id }}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-light">
                    <h4 class="modal-title" id="myCenterModalLabel">Update Information Instituions </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    

                    <h4>INSTITUTIONS INFORMATION</h4>
                    <form action="{{ route('update_institute', $institution->id) }}" method="POST" enctype="multipart/form-data"
                        class="needs-validation" novalidate id="add-institute-form">
                        @csrf
                        @method('PUT')


                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="field-1" class="form-label">Institutions Name <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="field-1" name="name" value="{{$institution->name}}"
                                        required placeholder="Malecela Secondary School">
                                    <div class="invalid-feedback">
                                        Please correct institution name.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="field-2" class="form-label">Location</label>
                                    <input type="text" parsley-trigger="change" class="form-control"
                                        name="location" id="field-2" required placeholder="Ifakara Morogoro" value="{{$institution->location}}">
                                    <div class="invalid-feedback">
                                        Please enter location.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="field-3" class="form-label">Institution Email</label>
                                    <input type="email" parsley-trigger="change" class="form-control"
                                        name="email" id="field-2" required
                                        placeholder="malecela.school@ifakaracatholic" value="{{$institution->email}}">
                                    <div class="invalid-feedback">
                                        Please enter email.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="example-select" class="form-label">Institutions Category</label>
                                    <select class="form-select" parsley-trigger="change" id="example-select"
                                        name="category">
                                        <option value="school">School</option>
                                        <option value="health">Health Institions</option>
                                        <option value="parish">Parish</option>

                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <button class="btn btn-primary btn-block"
                                    type="submit"id="submit-btn">Update Information</button>

                            </div>
                        </div>
                    </form>




                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

   

    @include('assets.js')
