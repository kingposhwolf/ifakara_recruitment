@extends('user.userhomepage')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card shadow">
                <div class="card-header">
                    <h2 style="font-family: 'Times New Roman', Times, serif">Personal Details</h2>
                    <a style="float: right; margin-top: 5px; border:none; font-size:25px; color:black;" data-toggle="modal"
                        data-target=".bd-qualification-modal-lg"><i class="bi bi-plus-circle"></i></a>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Particular</th>
                                <th scope="col">Value</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Full Name</td>
                                <td>{{ $personalDetails->full_name }}</td>
                            </tr>
                            <tr>
                                <td>Gender</td>
                                <td>{{ $personalDetails->gender }}</td>
                            </tr>
                            <tr>
                                <td>Date of Birth</td>
                                <td>{{ $personalDetails->date_of_birth }}</td>
                            </tr>
                            <tr>
                                <td>Originality</td>
                                <td>{{ $personalDetails->originality }}</td>
                            </tr>
                            <tr>
                                <td>Place of Birth</td>
                                <td>{{ $personalDetails->place_of_birth }}</td>
                            </tr>
                            <tr>
                                <td>Marital Status</td>
                                <td>{{ $personalDetails->morital_status }}</td>
                            </tr>
                            <tr>
                                <td>Disability</td>
                                <td>{{ $personalDetails->disability }}</td>
                            </tr>
                            <tr>
                                <td>Country of Resident</td>
                                <td>{{ $personalDetails->country_of_residence }}</td>
                            </tr>
                            <tr>
                                <td>Current Resident Region</td>
                                <td>{{ $personalDetails->current_residence_region }}</td>
                            </tr>
                            <tr>
                                <td>Current Resident District</td>
                                <td>{{ $personalDetails->current_residence_district }}</td>
                            </tr>
                            <tr>
                                <td>Mobile (eg: 255710125458) </td>
                                <td>{{ $personalDetails->mobile }}</td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="modal fade bd-qualification-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true" style="box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <h3 class="text-center" style="font-family: 'Times New Roman', Times, serif">Personal Details</h3>
                <hr>
                <div class="container">
                    <form action="{{ route('add_personaldetails') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-6 my-3">
                                <label for="">Full Name</label>
                                <input type="text" class="form-control" placeholder="Enter Full Name" name="full_name" value="{{ $personalDetails->full_name }}" required>
                            </div>
                            <div class="col-6 my-3">
                                <label for="gender">Gender</label>
                                <select class="form-select" id="example-select" name="gender" required>
                                    <option value="None" {{ $personalDetails->gender === 'None' ? 'selected' : '' }}>None</option>
                                    <option value="Male" {{ $personalDetails->gender === 'Male' ? 'selected' : '' }}>Male</option>
                                    <option value="Female" {{ $personalDetails->gender === 'Female' ? 'selected' : '' }}>Female</option>
                                </select>
                            </div>

                            <div class="col-6 my-3">
                                <label for="">Date of Birth</label>
                                <input type="date" class="form-control" name="date_of_birth" id="field-2" value="{{ $personalDetails->date_of_birth }}" required>
                            </div>
                            <div class="col-6 my-3">
                                <label for="marital_status">Marital Status</label>
                                <select class="form-select" id="marital_status" name="morital_status" required>
                                    <option value="">-- Select Marital Status --</option>
                                    <option value="Single" {{ $personalDetails->morital_status === 'Single' ? 'selected' : '' }}>Single</option>
                                    <option value="Married" {{ $personalDetails->morital_status === 'Married' ? 'selected' : '' }}>Married</option>
                                    <option value="Divorced" {{ $personalDetails->morital_status === 'Divorced' ? 'selected' : '' }}>Divorced</option>
                                    <option value="Widowed" {{ $personalDetails->morital_status === 'Widowed' ? 'selected' : '' }}>Widowed</option>
                                    <option value="Separated" {{ $personalDetails->morital_status === 'Separated' ? 'selected' : '' }}>Separated</option>
                                </select>
                            </div>

                            <div class="col-6 my-3">
                                <label for="disability">Disability</label>
                                <select class="form-select" id="disability" name="disability" required>
                                    <option value="">-- Select Disability Status --</option>
                                    <option value="None" {{ $personalDetails->disability === 'None' ? 'selected' : '' }}>None</option>
                                    <option value="Physical Disability" {{ $personalDetails->disability === 'Physical Disability' ? 'selected' : '' }}>Physical Disability</option>
                                    <option value="Visual Impairment" {{ $personalDetails->disability === 'Visual Impairment' ? 'selected' : '' }}>Visual Impairment</option>
                                    <option value="Hearing Impairment" {{ $personalDetails->disability === 'Hearing Impairment' ? 'selected' : '' }}>Hearing Impairment</option>
                                    <option value="Intellectual Disability" {{ $personalDetails->disability === 'Intellectual Disability' ? 'selected' : '' }}>Intellectual Disability</option>
                                    <!-- Add more options as needed -->
                                </select>
                            </div>

                            <div class="col-6 my-3">
                                <label for="">Country of Resident</label>
                                <input type="text" class="form-control" placeholder="Enter Country of Resident" name="country_of_residence" value="{{ $personalDetails->country_of_residence }}" required>
                            </div>
                            <div class="col-6 my-3">
                                <label for="">Current Resident Region</label>
                                <input type="text" class="form-control" placeholder="Enter Current Resident Region" name="current_residence_region" value="{{ $personalDetails->current_residence_region }}" required>
                            </div>
                            <div class="col-6 my-3">
                                <label for="">Current Resident District</label>
                                <input type="text" class="form-control" placeholder="Enter Current Resident District" name="current_residence_district" value="{{ $personalDetails->current_residence_district }}" required>
                            </div>
                            <div class="col-6 my-3">
                                <label for="">Mobile (eg: 255710125458)</label>
                                <input type="tel" class="form-control" id="phone" name="mobile" placeholder="Enter your phone number" value="{{ $personalDetails->mobile }}" required>
                            </div>
                            <div class="col-6 my-3">
                                <label for="">Originality</label>
                                <input type="text" class="form-control" placeholder="Enter Nationality" name="originality" value="{{ $personalDetails->originality }}" required>
                            </div>
                            <div class="col-6 my-3">
                                <label for="">Place of Birth</label>
                                <input type="text" class="form-control" placeholder="Enter Place of Birth" name="place_of_birth" value="{{ $personalDetails->place_of_birth }}" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-info">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
                    <script>
                    $(document).ready(function() {
                        $("td[contenteditable=true]").blur(function() {
                            var tableName = $(this).closest('table').attr('id');
                            var rowIndex = $(this).closest('tr').index();
                            var cellIndex = $(this).index();
                            var newValue = $(this).text();
                            $('#' + tableName + ' tr:eq(' + rowIndex + ') td:eq(' + cellIndex + ')').html(newValue);
                        });
                    });
                </script>
                </div>
            </div>
        </div>
    </div>
@endsection
