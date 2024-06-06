
@include('assets.css')
<!-- body start -->

<body class="loading" data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": false}, "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": true}'>

    <!-- Begin page -->
    <div id="wrapper">

     @include('layouts.auditor.header')

        <!-- ========== Left Sidebar Start ========== -->
        @include('layouts.auditor.sidebar')
        <!-- Left Sidebar End -->


        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                   
                    <!-- end page title -->

                    <div class="row mt-4">
                        <div class="col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-sm bg-blue rounded">
                                                <i class="fe-aperture avatar-title font-22 text-white"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-end">
                                                <h3 class="text-dark my-1"><span data-plugin="counterup">12,145</span></h3>
                                                <p class="text-muted mb-1 text-truncate">Total Staff</p>
                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                            <!-- end card-->
                        </div>
                        <!-- end col -->

                        <div class="col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-sm bg-success rounded">
                                                <i class="fe-shopping-cart avatar-title font-22 text-white"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-end">
                                                <h3 class="text-dark my-1"><span data-plugin="counterup">1576</span></h3>
                                                <p class="text-muted mb-1 text-truncate">Job Post</p>
                                            </div>
                                        </div>
                                    </div>
                                  
                                </div>
                            </div>
                            <!-- end card-->
                        </div>
                        <!-- end col -->

                        <div class="col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-sm bg-warning rounded">
                                                <i class="fe-bar-chart-2 avatar-title font-22 text-white"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-end">
                                                <h3 class="text-dark my-1"><span data-plugin="counterup">8947</span></h3>
                                                <p class="text-muted mb-1 text-truncate">Hiring</p>
                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                            <!-- end card-->
                        </div>
                        <!-- end col -->

                        <div class="col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-sm bg-info rounded">
                                                <i class="fe-cpu avatar-title font-22 text-white"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-end">
                                                <h3 class="text-dark my-1"><span data-plugin="counterup">178</span></h3>
                                                <p class="text-muted mb-1 text-truncate">Uploads</p>
                                            </div>
                                        </div>
                                    </div>
                                  
                                </div>
                            </div>
                            <!-- end card-->
                        </div>
                        <!-- end col -->
                    </div>
                    
                    <div class="row">
                  
                        <div class="col-xl-6 col-md-6 col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-widgets">
                                        <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                                        <a data-bs-toggle="collapse" href="#cardCollpase5" role="button" aria-expanded="false" aria-controls="cardCollpase5"><i class="mdi mdi-minus"></i></a>
                                        <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                                    </div>
                                    <h4 class="header-title mb-0">Most Job Posted</h4>

                                    <div id="cardCollpase5" class="collapse pt-3 show">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-centered mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>Job Title </th>
                                                        <th>Category</th>
                                                        <th>Position</th>
                                                        <th>Application End Date</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>ASOS Ridley High Waist</td>
                                                        <td>$79.49</td>
                                                        <td>82</td>
                                                        <td>$6,518.18</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Marco Lightweight Shirt</td>
                                                        <td>$128.50</td>
                                                        <td>37</td>
                                                        <td>$4,754.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Half Sleeve Shirt</td>
                                                        <td>$39.99</td>
                                                        <td>64</td>
                                                        <td>$2,559.36</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Lightweight Jacket</td>
                                                        <td>$20.00</td>
                                                        <td>184</td>
                                                        <td>$3,680.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Marco Shoes</td>
                                                        <td>$28.49</td>
                                                        <td>69</td>
                                                        <td>$1,965.81</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ASOS Ridley High Waist</td>
                                                        <td>$79.49</td>
                                                        <td>82</td>
                                                        <td>$6,518.18</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Half Sleeve Shirt</td>
                                                        <td>$39.99</td>
                                                        <td>64</td>
                                                        <td>$2,559.36</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Lightweight Jacket</td>
                                                        <td>$20.00</td>
                                                        <td>184</td>
                                                        <td>$3,680.00</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- end table responsive-->
                                    </div>
                                    <!-- collapsed end -->
                                </div>
                                <!-- end card-body -->
                            </div>
                            <!-- end card-->
                        </div>
                        <!-- end col -->

                        <div class="col-xl-6 col-md-6 col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-widgets">
                                        <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                                        <a data-bs-toggle="collapse" href="#cardCollpase4" role="button" aria-expanded="false" aria-controls="cardCollpase5"><i class="mdi mdi-minus"></i></a>
                                        <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                                    </div>
                                    <h4 class="header-title mb-0">Staff and Employee</h4>

                                    <div id="cardCollpase4" class="collapse pt-3 show">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-centered mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>Staff Name</th>
                                                        <th>Email</th>
                                                        <th>Posstion</th>
                                                        <th>Location</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>ASOS Ridley High Waist</td>
                                                        <td>$79.49</td>
                                                        <td>82</td>
                                                        <td>$6,518.18</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Marco Lightweight Shirt</td>
                                                        <td>$128.50</td>
                                                        <td>37</td>
                                                        <td>$4,754.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Half Sleeve Shirt</td>
                                                        <td>$39.99</td>
                                                        <td>64</td>
                                                        <td>$2,559.36</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Lightweight Jacket</td>
                                                        <td>$20.00</td>
                                                        <td>184</td>
                                                        <td>$3,680.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Marco Shoes</td>
                                                        <td>$28.49</td>
                                                        <td>69</td>
                                                        <td>$1,965.81</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ASOS Ridley High Waist</td>
                                                        <td>$79.49</td>
                                                        <td>82</td>
                                                        <td>$6,518.18</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Half Sleeve Shirt</td>
                                                        <td>$39.99</td>
                                                        <td>64</td>
                                                        <td>$2,559.36</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Lightweight Jacket</td>
                                                        <td>$20.00</td>
                                                        <td>184</td>
                                                        <td>$3,680.00</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- end table responsive-->
                                    </div>
                                    <!-- collapsed end -->
                                </div>
                                <!-- end card-body -->
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

            @include('layouts.hr.footer')

        </div>


    </div>
    <!-- END wrapper -->

   



@include('assets.js')