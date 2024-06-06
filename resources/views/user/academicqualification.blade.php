@extends('user.userhomepage')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card shadow">
                <div class="card-header">
                    <h3 style="float:left ; font-family: 'Times New Roman', Times, serif">Saved Academic Qualifications</h3>
                    <a style="float: right; margin-top: 5px; border:none; font-size:25px; color:black;" data-toggle="modal"
                        data-target=".bd-qualification-modal-lg"><i class="bi bi-plus-circle"></i></a>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Level</th>
                                <th>Name</th>
                                <th>Institution</th>
                                <th>Attachiment</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card shadow mt-5">
                <div class="card-header">
                    <h3 style="float:left ; font-family: 'Times New Roman', Times, serif">Saved Academic Transcripts</h3>
                    <a style="float: right; margin-top: 5px; border:none; font-size:25px; color:black;" data-toggle="modal"
                        data-target=".bd-transcript-modal-lg"><i class="bi bi-plus-circle"></i></a>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Level</th>
                                <th>Programme</th>
                                <th>Attachiment</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card shadow mt-5 mb-4">
                <div class="card-header">
                    <h3 style="font-family: 'Times New Roman', Times, serif">Verification Certificate</h3>
                    {{-- <a style="float: right; margin-top: 5px; border:none; font-size:25px; color:black;" data-toggle="modal"
                        data-target=".bd-certificate-modal-lg"><i class="bi bi-plus-circle"></i></a> --}}
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Level</th>
                                <th>Programme</th>
                                <th>Attachiment</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade bd-qualification-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true" style="box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <h3 class="text-center" style="font-family: 'Times New Roman', Times, serif">Add Academic Qualificatios</h3>
                <hr>
                <div class="container">
                    <form>
                        <div class="row">
                            <div class="col-6 my-3">
                                <label for="">Education Level</label>
                                <select id="Education-dropdown" class="form-control">
                                    <option value="">-- Select Education Level --</option>
                                    @foreach ($Education_levels as $data)
                                        <option value="{{ $data->id }}">
                                            {{ $data->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-6 my-3">
                                <label for="">Programme Category</label>
                                <select id="category-dropdown" class="form-control">
                                    <option value="">-- Select Eduction Level First --</option>
                                </select>
                            </div>
                            <div class="col-6 my-3">
                                <label for="">Country</label>
                                <input type="text" class="form-control" placeholder="Enter Country">
                            </div>
                            <div class="col-6 my-3">
                                <label for="">Programme Name</label>
                                <select id="name-dropdown" class="form-control">
                                </select>
                            </div>
                            <div class="col-6 my-3">
                                <label for="">Institution Name</label>
                                <input type="text" class="form-control" placeholder="Enter Institution Name">
                            </div>
                            <div class="col-6 my-3">
                                <label for="">Attach your certificate <small>(max size 2MB)</small></label>
                                <input type="file" class="form-control">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-info">Submit</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade bd-transcript-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true" style="box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <h3 class="text-center" style="font-family: 'Times New Roman', Times, serif">Add Transcript</h3>
                <hr>
                <div class="container">
                    <form>
                        <div class="row">
                            <div class="col-6 my-3">
                                <label for="">Qualifications</label>
                                <select id="Education-dropdown" class="form-control">
                                    <option value="">-- Select Qualifications --</option>
                                </select>
                            </div>
                            <div class="col-6 my-3">
                                <label for="">Attach Transcript <small>(max size 2MB)</small></label>
                                <input type="file" class="form-control">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-info">Submit</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade bd-certificate-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true" style="box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Send message</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {

            /*------------------------------------------
            --------------------------------------------
            Education Level Dropdown Change Event
            --------------------------------------------
            --------------------------------------------*/
            $('#Education-dropdown').on('change', function() {
                var idEducationLevel = this.value;
                $("#category-dropdown").html('');
                $.ajax({
                    url: "{{ url('fetcheducationcategory') }}",
                    type: "POST",
                    data: {
                        educationLevel_id: idEducationLevel,
                        _token: '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(result) {
                        $('#category-dropdown').html(
                            '<option value="">-- Select Category --</option>');
                        $.each(result.Education_categories, function(key, value) {
                            $("#category-dropdown").append('<option value="' + value
                                .id + '">' + value.name + '</option>');
                        });
                        $('#name-dropdown').html('<option value="">-- Select Name --</option>');
                    }
                });
            });

            /*------------------------------------------
            --------------------------------------------
            Program Name Dropdown Change Event
            --------------------------------------------
            --------------------------------------------*/
            $('#category-dropdown').on('change', function() {
                var idName = this.value;
                $("#name-dropdown").html('');
                $.ajax({
                    url: "{{ url('fetcheducationname') }}",
                    type: "POST",
                    data: {
                        name_id: idName,
                        _token: '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(res) {
                        $('#name-dropdown').html('<option value="">-- Select Name --</option>');
                        $.each(res.Education_names, function(key, value) {
                            $("#name-dropdown").append('<option value="' + value
                                .id + '">' + value.name + '</option>');
                        });
                    }
                });
            });

        });
    </script>
@endsection
