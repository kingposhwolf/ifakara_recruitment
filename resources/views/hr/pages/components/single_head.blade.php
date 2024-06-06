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
                                                <a class="nav-link active show mb-1" href="{{ route('head_institute') }}">

                                                    <span>Head  Instituions </span></a>


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
                                                                    data-bs-target="#exampleUpdate{{ $headinstitution->id }}">
                                                                    <i class="mdi mdi-pencil"></i>

                                                                </button>

                                                                <button type="button"
                                                                    class="btn btn-danger btn-xs waves-effect waves-light mb-2"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleDelete{{ $headinstitution->id }}">
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
                                                                            {{ $headinstitution->fname }}</h4>
                                                                        <p class="text-muted">@HeadofSchool</p>
                                                                        {{--                                         
                                                                        <button type="button" class="btn btn-success btn-xs waves-effect mb-2 waves-light">Follow</button>
                                                                        <button type="button" class="btn btn-danger btn-xs waves-effect mb-2 waves-light">Message</button> --}}

                                                                        <div class="text-start mt-3">
                                                                            <h4 class="font-13 text-uppercase">
                                                                                About Head of Instition
                                                                            </h4>
                                                                            <p class="text-muted font-13 mb-3">
                                                                                Hi I'm Johnathn Deo,has been the
                                                                                industry's standard dummy text
                                                                                ever since the 1500s, when an
                                                                                unknown printer took a galley of
                                                                                type.
                                                                            </p>
                                                                            <p class="mb-2 font-13">
                                                                                <strong>Full Name :</strong>
                                                                                <span
                                                                                    class="ms-2"><b>{{ $headinstitution->fname }} {{$headinstitution->mname}} {{ $headinstitution->lname }} </b></span>
                                                                            </p>

                                                                            <p class=" mb-2 font-13">
                                                                                <strong>Mobile :</strong><span
                                                                                    class="ms-2"><b>{{ $headinstitution->contact }}</b> </span></p>

                                                                            <p class=" mb-2 font-13">
                                                                                <strong>Instituion name :</strong>
                                                                                <span
                                                                                    class="ms-2"><b>{{ $headinstitution->institution->name}}</b></span>
                                                                            </p>

                                                                            <p class="mb-1 font-13">
                                                                                <strong>Location :</strong>
                                                                                <span
                                                                                    class="ms-2"><b>{{ $headinstitution->institution->category }}</b></span>
                                                                            </p>

                                                                            <p class="mb-1 font-13">
                                                                                <strong>Registered Date :</strong>
                                                                                <span
                                                                                    class="ms-2"><b>{{ $headinstitution->created_at }}</b></span>
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
    <div class="modal fade" id="exampleDeletehead{{ $headinstitution->id }}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-top modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Delete The Institution</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <span class="text-larger">
                        <h4 style="font-size:20px">Are you sure delete ?.<b>{{ $headinstitution->fname }} {{$headinstitution->lname}}</b> .</h4>
                    </span>
                    <div class="modal-footer">
                        <div class="row">
                            <div class="col-md-6">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>

                            </div>
                            <div class="col-md-6">
                                <form action="{{ route('delete_head_institute', ['id' => $headinstitution->id]) }}"
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


    
    <div class="modal fade" id="exampleUpdatehead{{$headinstitution->id}}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-light">
                    <h4 class="modal-title" id="myCenterModalLabel">Assign Head of Institions </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <h4>Person Information</h4>
                    <form action="{{ route('update_head_institute', $headinstitution->id) }}" method="post" enctype="multipart/form-data"
                        class="needs-validation" novalidate>
                        @csrf
                        @method('PUT')
                        <div class="row">

                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="field-4" class="form-label">First name <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="field-4" required
                                        placeholder="first name" name="fname" value="{{$headinstitution->fname}}">
                                    <div class="invalid-feedback">
                                        Please enter a your first name.
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="field-1" class="form-label">Middle name</label>
                                    <input type="text" class="form-control" id="field-1" name="mname"
                                        required placeholder="middle name"value={{$headinstitution->mname}} >
                                    <div class="invalid-feedback">
                                        Please enter a your middle name.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="field-5" class="form-label">Last name</label>
                                    <input type="text" class="form-control" id="field-5" required
                                        placeholder="last name" name="lname" value="{{$headinstitution->lname}}">
                                    <div class="invalid-feedback">
                                        Please enter a your last name.
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="row">
                            {{-- <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="field-6" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="field-6" name="email"
                                        placeholder="email">
                                </div>
                            </div> --}}
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="field-1" class="form-label">Contanct</label>
                                    <input type="number" class="form-control" id="field-1" name="contact"
                                        required placeholder="phone number" name="{{$headinstitution->contact}}">
                                    <div class="invalid-feedback">
                                        Please enter a your phone number.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">

                                <div class="mb-3">
                                    <label for="example-select" class="form-label">Institutions Name</label>
                                    {{-- {{$institutions}} --}}
                                    <select class="form-select" id="example-select" name="institute_id">
                                        @foreach ($institution as $institution)
                                            <option value="{{ $institution->id }}">{{ $institution->name }}</option>
                                        @endforeach



                                    </select>
                                </div>
                            </div>
                        </div>



                        <button type="submit" class="btn btn-primary btn-block">Assign</button>
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
