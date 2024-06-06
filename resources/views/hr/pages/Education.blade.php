@include('assets.css')

<body class="loading" data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": false}, "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": true}'>

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
                                    <h4 class="header-title mb-4">Education Level</h4>

                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="nav flex-column nav-pills nav-pills-tab" id="v-pills-tab"
                                                role="tablist" aria-orientation="vertical">
                                                <a class="nav-link active show mb-1" id="v-pills-home-tab"
                                                    data-bs-toggle="pill" href="#v-pills-home" role="tab"
                                                    aria-controls="v-pills-home" aria-selected="true">
                                                    <span> All Education level </span>
                                                </a>

                                                <a class="nav-link mb-1" id="v-pills-messages-tab" data-bs-toggle="pill"
                                                    href="#v-pills-messages" role="tab"
                                                    aria-controls="v-pills-messages" aria-selected="false">
                                                    Categoried
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
                                                                            data-bs-target="#position-modal">Add New Education level
                                                                            </button>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <div class="table-responsive">
                                                                <table
                                                                    class="table table-centered table-nowrap table-hover mb-0">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Education level </th>
                                                                            <th>Education Name</th>
                                                                            <th>Education Category</th>
                                                                                        <th style="width: 82px;">Action</th>
                                                                        </tr>
                                                                    </thead>
                                                                    {{-- <tbody>
                                                                        @if (!empty($posts))
                                                                            @foreach ($posts as $post)
                                                                            <tr>

                                                                                <td>
                                                                                    937-330-1634
                                                                                </td>
                                                                                <td>
                                                                                    pauljfrnd@jourrapide.com
                                                                                </td>
                                                                                <td>
                                                                                    {{$post->job_location}}
                                                                                </td>
                                                                                <td>
                                                                                    {{$post->application_date}}
                                                                                </td>
                                                                                <td>
                                                                                    {{$post->deadline_date}}
                                                                                </td>
                                                                                <td>
                                                                                    <span class="btn btn-success width-xs btn-sm">active</span>
                                                                                </td>
                                                                                <td>
                                                                                    <a href="javascript:void(0);"
                                                                                        class="action-icon"> <i
                                                                                            class="mdi mdi-square-edit-outline"></i></a>
                                                                                    <a href="javascript:void(0);"
                                                                                        class="action-icon"> <i
                                                                                            class="mdi mdi-delete"></i></a>
                                                                                </td>
                                                                            </tr>                                                                            @endforeach
                                                                        @else
                                                                            <tr>
                                                                                <td colspan="7">No posts found.</td>
                                                                            </tr>
                                                                        @endif
                                                                    </tbody> --}}

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
                                                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                                    aria-labelledby="v-pills-profile-tab">
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

                                                                        <tr>
                                                                            <td class="table-user">
                                                                                <img src="../assets/images/users/user-1.jpg"
                                                                                    alt="table-user"
                                                                                    class="me-2 rounded-circle">
                                                                                <a href="javascript:void(0);"
                                                                                    class="text-body fw-semibold">Timothy
                                                                                    Kauper</a>
                                                                            </td>
                                                                            <td>
                                                                                (216) 75 612 706
                                                                            </td>
                                                                            <td>
                                                                                thykauper@rhyta.com
                                                                            </td>
                                                                            <td>
                                                                                Boar Records
                                                                            </td>
                                                                            <td>
                                                                                09/08/2020

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
                                                                                <img src="../assets/images/users/user-5.jpg"
                                                                                    alt="table-user"
                                                                                    class="me-2 rounded-circle">
                                                                                <a href="javascript:void(0);"
                                                                                    class="text-body fw-semibold">Zara
                                                                                    Raws</a>
                                                                            </td>
                                                                            <td>
                                                                                (02) 75 150 655
                                                                            </td>
                                                                            <td>
                                                                                austin@dayrep.com
                                                                            </td>
                                                                            <td>
                                                                                Bearings
                                                                            </td>
                                                                            <td>
                                                                                07/15/2018
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
    <div class="modal fade" id="position-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-light">
                    <h4 class="modal-title" id="myCenterModalLabel">Add Education Level</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <div class="card-body">

                            <div id="progressbarwizard">

                                <ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-3">
                                    <li class="nav-item">
                                        <a href="#account-2" data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                            <i class="mdi mdi-account-circle me-1"></i>
                                            <span class="d-none d-sm-inline">Education Level</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#profile-tab-2" data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                            <i class="mdi mdi-face-profile me-1"></i>
                                            <span class="d-none d-sm-inline">Education Category</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#finish-2" data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                            <i class="mdi mdi-checkbox-marked-circle-outline me-1"></i>
                                            <span class="d-none d-sm-inline">Education Program</span>
                                        </a>
                                    </li>
                                </ul>

                                <div class="tab-content b-0 mb-0 pt-0">

                                    <div id="bar" class="progress mb-3" style="height: 7px;">
                                        <div class="bar progress-bar progress-bar-striped progress-bar-animated bg-success"></div>
                                    </div>

                                    <div class="tab-pane" id="account-2">
                                        <form action="">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="row mb-3">
                                                        {{-- <label class="col-md-3 col-form-label" for="userName1">Education Level</label> --}}
                                                        <div class="col-md-12">
                                                            <input type="text" class="form-control" id="userName1" name="userName1" placeholder="PHD">
                                                        </div>
                                                    </div>
                                                </div> <!-- end col -->
                                            </div>

                                            <div class="row">
                                                <div class="col-md-8">
                                                </div>
                                                <div class="col-md-4 d-grid">
                                                    <button class="btn btn-primary btn-block">Next</button>
                                                </div>
                                            </div>
                                        </form>
                                      <!-- end row -->
                                    </div>

                                    <div class="tab-pane" id="profile-tab-2">
                                        <form action="" method="post">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="row mb-12">
                                                        <div class="col-md-9">
                                                            <input type="text" id="name1" name="name1" class="form-control" placeholder="IT">
                                                        </div>
                                                    </div>

                                                </div> <!-- end col -->
                                            </div>
                                        </form>
                                       <!-- end row -->
                                    </div>

                                    <div class="tab-pane" id="finish-2">
                                        <form action="" method="post">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="row mb-3">
                                                        <div class="col-md-12">
                                                            <input type="text" id="name1" name="name1" placeholder="Bsc of Human Resources " class="form-control">
                                                        </div>
                                                    </div>

                                                </div> <!-- end col -->
                                            </div>
                                        </form>

                                    </div>
                                </div>
                                <ul class="list-inline mb-0 wizard">
                                    <li class="previous list-inline-item">
                                        <a href="javascript: void(0);" class="btn btn-secondary">Previous</a>
                                    </li>
                                    <li class="next list-inline-item float-end">
                                        <a href="javascript: void(0);" class="btn btn-secondary">Next</a>
                                    </li>
                                </ul>

                                <!-- tab-content -->
                            </div> <!-- end #progressbarwizard-->



                    </div>


                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->




    @include('assets.js')
