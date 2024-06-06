
@include('assets.css')
<!-- body start -->

<body class="loading" data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": false}, "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": true}'>

    <!-- Begin page -->
    <div id="wrapper">

     @include('layouts.hr.header')

        <!-- ========== Left Sidebar Start ========== -->
        @include('layouts.hr.sidebar')
        <!-- Left Sidebar End -->


        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
              \
                    <!-- end page title -->

                    <div class="row">
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
                                                <h3 class="text-dark my-1"><span data-plugin="counterup">{{ $totalStaffs }}</span></h3>
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
                                                <h3 class="text-dark my-1"><span data-plugin="counterup">{{$totalPosts}}</span></h3>
                                                <p class="text-muted mb-1 text-truncate">Job posts</p>
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
                                                <h3 class="text-dark my-1"><span data-plugin="counterup">0</span></h3>
                                                <p class="text-muted mb-1 text-truncate">Hiaring</p>
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
                                                <h3 class="text-dark my-1"><span data-plugin="counterup">{{$totalUploads}}</span></h3>
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
                                    <h4 class="header-title mb-0">Most vacants Posted</h4>

                                    <div id="cardCollpase5" class="collapse pt-3 show">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-centered mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>Job Title </th>
                                                        <th>Category</th>
                                                        <th>Location</th>
                                                        <th>Application End Date</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @if ($posts->count() > 0)
                                                    @foreach ($posts as $post)
                                                        <tr>
                                                            <td>{{ $post->vacant->name }}</td>
                                                            <td>{{ $post->vacant_category }}</td>
                                                            <td>{{ $post->vacant->location }}</td>
                                                            <td class="text-danger">{{ $post->end_date }}</td>
                                                        </tr>
                                                    @endforeach
                                                @else
                                                    <tr>
                                                        <td colspan="4" class="text-bold text-primary">No data available.</td>
                                                    </tr>
                                                @endif
                                                
                                                   
                                                    
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
                                        <canvas id="salaryChart"></canvas>
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

            <!-- Footer Start -->
           @include('layouts.hr.footer')
            <!-- end Footer -->

        </div>


    </div>
    <!-- END wrapper -->

   



@include('assets.js')
<script>
    document.addEventListener('DOMContentLoaded', function() {
      var staffData = [
        @foreach ($staffs as $staff)
        {
          name: "{{ $staff->fname }} {{ $staff->lname }}",
          allowance: {{ $staff->allounce_salary }},
          basic: {{ $staff->basic_salary }},
          total: {{ $staff->basic_salary + $staff->allounce_salary }}
        },
        @endforeach
      ];
  
      // Check if data is available
      if (staffData.length === 0) {
        var ctx = document.getElementById('salaryChart').getContext('2d');
        ctx.font = "20px Arial";
        ctx.fillText("No data available", 10, 50);
        return;
      }
  
      var labels = staffData.map(function(staff) {
        return staff.name;
      });
  
      var allowances = staffData.map(function(staff) {
        return staff.allowance;
      });
  
      var basics = staffData.map(function(staff) {
        return staff.basic;
      });
  
      var totals = staffData.map(function(staff) {
        return staff.total;
      });
  
      var ctx = document.getElementById('salaryChart').getContext('2d');
      new Chart(ctx, {
        type: 'bar',
        data: {
          labels: labels,
          datasets: [{
              label: 'Allowance',
              data: allowances,
              backgroundColor: 'rgba(75, 192, 192, 0.8)',
              borderColor: 'rgba(75, 192, 192, 1)',
              borderWidth: 1
            },
            {
              label: 'Basic Salary',
              data: basics,
              backgroundColor: 'rgba(255, 99, 132, 0.8)',
              borderColor: 'rgba(255, 99, 132, 1)',
              borderWidth: 1
            },
            {
              label: 'Total Salary',
              data: totals,
              backgroundColor: 'rgba(54, 162, 235, 0.8)',
              borderColor: 'rgba(54, 162, 235, 1)',
              borderWidth: 1
            }
          ]
        },
        options: {
          scales: {
            x: {
              grid: {
                display: false
              }
            },
            y: {
              beginAtZero: true,
              ticks: {
                precision: 0
              },
              title: {
                display: true,
                text: 'Salary'
              }
            }
          },
          plugins: {
            legend: {
              position: 'bottom',
              labels: {
                boxWidth: 12
              }
            },
            tooltip: {
              mode: 'index',
              intersect: false,
              callbacks: {
                label: function(context) {
                  return context.dataset.label + ': ' + context.formattedValue;
                }
              }
            }
          }
        }
      });
    });
  </script>
  


<!-- END wrapper -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>