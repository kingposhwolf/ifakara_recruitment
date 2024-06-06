<!DOCTYPE html>
<html>

<head>
    @include('user.include.head')

</head>

<body>
    <div class="container my-3">
        <div class="card" style="box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;">

            @include('layouts.welcome.header')

            <div class="card-body">
                <div class="row justify-content-center mt-2">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card"
                            style="box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;">
                            <div class="card-header text-center">
                                <h2 style="font-family: 'Times New Roman', Times, serif">Post Details</h2>
                            </div>

                            <div class="card-body">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <table class="table table-bordered table-striped dataTable no-footer">
                                                {{-- <thead>
                                                    <tr>
                                                        <th>Description</th>
                                                        <th>Closing Date</th>
                                                    </tr>
                                                </thead> --}}
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <p>POST</p>
                                                            
                                                        </td>
                                                        <td>
                                                            <p>ASSISTANT LIBRARIAN TRAINEE (HEALTH INFORMATION SYSTEMS) - 1 POST</p>
                                                            
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>EMPLOYER</p>
                                                        </td>
                                                        <td>
                                                            <p>The University of Dodoma (UDOM)</p>
                                                            
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>APPLICATION TIMELINE:</p>
                                                        </td>
                                                        <td>
                                                            <p>2023-05-11 2023-05-24</p>
                                                            
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>JOB SUMMARY</p>
                                                        </td>
                                                        <td>
                                                            <p>N/A</p>
                                                            
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>DUTIES AND RESPONSIBILITIES</p>
                                                        </td>
                                                        <td>
                                                            <ul>
                                                                <li>This is a training post; the staff is required to undergo a Master’s Degree training program.</li>
                                                                <li>Undergo an induction course in pedagogic skills for those who had none before.</li>
                                                                <li>Understudy senior members, including attending lectures, seminars, tutorials and practical training.</li>
                                                                <li>To conduct tutorials, seminars and practicals.</li>
                                                                <li>Assist in research, consultancies and outreach activities.</li>
                                                                <li>To perform any other duties that the relevant authorities may assign</li>
                                                            </ul>
                                                            
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>QUALIFICATION AND EXPERIENCE</p>
                                                        </td>
                                                        <td>
                                                            <p>An applicant must be a holder of a Bachelor of Science in Health Information Systems with a minimum GPA of 3.8 in the first Degree from any recognized Institution.</p>
                                                            
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <a href="#">Apply</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                </div>
            </div>

            @include('layouts.welcome.footer')
