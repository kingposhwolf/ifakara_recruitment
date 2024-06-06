@include('assets.css')



<body class="loading"
    data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": false}, "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": true}'>
    <div id="loader">
        <div class="loader"></div>
    </div>

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

                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row justify-content-between mb-2">
                                        <div class="col-auto">
                                            
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="text-sm-end">
                                                <button type="button"
                                                    class="btn btn-primary waves-effect waves-light mb-2"
                                                    data-bs-toggle="modal" data-bs-target="#custom-modal">Add New
                                                    Uploads
                                                </button>
                                            </div>
                                        </div>

                                    </div>


                                    <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Description</th>
                                                <th>Upload Date</th>
                                                <th>Action</th>


                                            </tr>
                                        </thead>


                                        <tbody>
                                            @if (!empty($uploads))
                                                @foreach ($uploads as $upload)
                                                    <tr>
                                                        <td>{{ $upload->title }}
                                                        </td>
                                                        <td>{{ $upload->upload_descriptions }}
                                                        </td>
                                                        <td>{{ $upload->upload_date }}</td>

                                                        <td>
                                                         
                                                            <span>
                                                                <form
                                                                    action="{{ route('uploads_destroy', ['id' => $upload->id]) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit"
                                                                        class="btn btn-danger btn-xs"><i
                                                                            class="mdi mdi-delete"></i></button>
                                                                </form>
                                                            </span>

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
                                <!-- end card-body-->
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
    <div class="modal fade" id="custom-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-light">
                    <h4 class="modal-title" id="myCenterModalLabel">Add New Uploads </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <form action="{{ route('uploads_documents') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="row">

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="field-4" class="form-label">Title</label>
                                    <input type="text" name="title" class="form-control" id="field-4"
                                        placeholder="document title">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="field-5" class="form-label">Upload Date</label>
                                    <input type="date" name="upload_date" class="form-control" id="field-5"
                                        placeholder="last name">
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="field-1" class="form-label">Document</label>
                                    <input type="file" name="document" class="form-control" id="field-1"
                                        placeholder="phone number">
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="field-3" class="form-label">Upload Description</label>
                                    <textarea class="form-control" name="upload_descriptions" id="field-7" placeholder="Write something about job"></textarea>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Upload </button>

                    </form>


                </div>
                {{--                <div class="modal-footer"> --}}
                {{--                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> --}}
                {{--                </div> --}}
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <script>
        document.getElementById('myForm').addEventListener('submit', function(event) {
            // Show the loader when the form is submitted
            document.getElementById('loader').style.display = 'block';
        });
    </script>

    @include('assets.js')
