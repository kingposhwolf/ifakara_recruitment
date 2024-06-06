@extends('user.userhomepage')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card shadow">
            <div class="card-header">

                <h3 style="float: left; font-family: 'Times New Roman', Times, serif">Working Experience</h3>
                <a style="float: right; margin-top: 5px; border:none; font-size:25px; color:black;" data-toggle="modal"
                    data-target=".bd-work-modal-lg"><i class="bi bi-plus-circle"></i></a>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Institution</th>
                            <th>Position</th>
                            <th>From</th>
                            <th>To</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($workingexperience as $workingexperience)
                        <tr>
                            <td>{{ $workingexperience->place }}</td>
                            <td>{{ $workingexperience->job_title }}</td>
                            <td>{{ $workingexperience->start_date }}</td>
                            <td>{{ $workingexperience->end_date }}</td>
                            <td>
                                <a href="{{ url('/workingexperience/delete_workingexperience/' . $workingexperience->id) }}"
                                    class="btn btn-danger mr-2">Delete</a>
                                <a style="color:white;" data-toggle="modal" data-target=".up-work-modal-lg" class="btn btn-info">Update</a>
                                {{--  <button class="btn btn-info">Update</button>  --}}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade bd-work-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true" style="box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <h3 class="text-center" style="font-family: 'Times New Roman', Times, serif">Add Working Experience</h3>
            <hr>
            <div class="container">
                <form action="{{ url('/workingexperience/add_workingexperience') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-6 my-3">
                            <label for="">Institution/Organization</label>
                            <input type="text" class="form-control" name="place" required>
                        </div>
                        <div class="col-6 my-3">
                            <label for="">Institution Address</label>
                            <input type="text" class="form-control" name="institute_address" required>
                        </div>
                        <div class="col-6 my-3">
                            <label for="">Job Title</label>
                            <input type="text" class="form-control" name="job_title" required>
                        </div>
                        <div class="col-6 my-3">
                            <label for="">Supervisor Name</label>
                            <input type="text" class="form-control" name="supervisor_name" required>
                        </div>
                        <div class="col-6 my-3">
                            <label for="">Supervisor Address</label>
                            <input type="text" class="form-control" name="supervisor_email" required>
                        </div>
                        <div class="col-6 my-3">
                            <label for="">Duties Responsibilities</label>
                            <input type="text" class="form-control" name="duties_responsibility" required>
                        </div>
                        <div class="col-4 my-3">
                            <label for="">Start Date</label>
                            <input type="date" class="form-control" name="start_date" required>
                        </div>
                        {{-- <div class="col-3 my-3">
                                <label for="">Is this your Current Date</label>
                                <select name="" id="" class="form-control">
                                    <option value="">No</option>
                                    <option value="">Yes</option>
                                </select>
                            </div> --}}
                        <div class="col-4 my-3">
                            <label for="">Supervisor Telephone Number</label>
                            <input type="number" class="form-control" name="supervisor_phone" required>
                        </div>
                        <div class="col-4 my-3">
                            <label for="">End Date</label>
                            <input type="date" class="form-control" name="end_date" required>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-info">Submit</button>
                        </div>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>

<div class="modal fade up-work-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true" style="box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <h3 class="text-center" style="font-family: 'Times New Roman', Times, serif">Update Working Experience</h3>
            <hr>
            <div class="container">
                <form action="{{ route('update_workingexperience', ['id' => $workingexperience->id]) }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-6 my-3">
                            <label for="">Institution/Organization</label>
                            <input type="text" class="form-control" name="place" value="{{ $workingexperience->place }}" required>
                        </div>
                        <div class="col-6 my-3">
                            <label for="">Institution Address</label>
                            <input type="text" class="form-control" name="institute_address" value="{{ $workingexperience->institute_address }}" required>
                        </div>
                        <div class="col-6 my-3">
                            <label for="">Job Title</label>
                            <input type="text" class="form-control" name="job_title" value="{{ $workingexperience->job_title }}" required>
                        </div>
                        <div class="col-6 my-3">
                            <label for="">Supervisor Name</label>
                            <input type="text" class="form-control" name="supervisor_name" value="{{ $workingexperience->supervisor_name }}" required>
                        </div>
                        <div class="col-6 my-3">
                            <label for="">Supervisor Address</label>
                            <input type="text" class="form-control" name="supervisor_email" value="{{ $workingexperience->supervisor_name }}" required>
                        </div>
                        <div class="col-6 my-3">
                            <label for="">Duties Responsibilities</label>
                            <input type="text" class="form-control" name="duties_responsibility" value="{{ $workingexperience->duties_responsibility }}" required>
                        </div>
                        <div class="col-4 my-3">
                            <label for="">Start Date</label>
                            <input type="date" class="form-control" name="start_date" value="{{ $workingexperience->start_date }}" required>
                        </div>
                        {{-- <div class="col-3 my-3">
                                <label for="">Is this your Current Date</label>
                                <select name="" id="" class="form-control">
                                    <option value="">No</option>
                                    <option value="">Yes</option>
                                </select>
                            </div> --}}
                        <div class="col-4 my-3">
                            <label for="">Supervisor Telephone Number</label>
                            <input type="number" class="form-control" name="supervisor_phone" value="{{ $workingexperience->supervisor_phone }}" required>
                        </div>
                        <div class="col-4 my-3">
                            <label for="">End Date</label>
                            <input type="date" class="form-control" name="end_date" value="{{ $workingexperience->end_date }}" required>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-info">Submit</button>
                        </div>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>
@endsection
