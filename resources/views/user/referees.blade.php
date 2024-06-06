@extends('user.userhomepage')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card shadow">
            <div class="card-header">

                <h3 style="float:left; font-family: 'Times New Roman', Times, serif">Referees</h3>
                <a style="float: right; margin-top: 5px; border:none; font-size:25px; color:black;" data-toggle="modal"
                    data-target=".bd-referes-modal-lg"><i class="bi bi-plus-circle"></i></a>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Institution</th>
                            <th>Title</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $data)
                        <tr>
                            <td>{{ $data->full_name }}</td>
                            <td>{{ $data->place }}</td>
                            <td>{{ $data->title }}</td>
                            <td>
                                <a href="{{ url('/referees/delete_referees/' . $data->id) }}"
                                    class="btn btn-danger mr-2">Delete</a>
                                <button class="btn btn-info">Update</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade bd-referes-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true" style="box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <h3 class="text-center" style="font-family: 'Times New Roman', Times, serif">Referees</h3>
            <hr>
            <div class="container">
                <form action="{{ url('/referees/add_referees') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-6 my-3">
                            <label for="">Referee Full Name</label>
                            <input type="text" class="form-control" name="full_name" required>
                        </div>
                        <div class="col-6 my-3">
                            <label for="">Title</label>
                            <input type="text" class="form-control" name="title" required>
                        </div>
                        <div class="col-6 my-3">
                            <label for="">Institution/Organization</label>
                            <input type="text" class="form-control" name="place" required>
                        </div>
                        <div class="col-6 my-3">
                            <label for="">Email Address</label>
                            <input type="text" class="form-control" name="email" required>
                        </div>
                        <div class="col-6 my-3">
                            <label for="">Telephone Number</label>
                            <input type="text" class="form-control" name="phone" required>
                        </div>
                        <div class="col-6 my-3">
                            <label for="">Address</label>
                            <input type="text" class="form-control" name="addres" required>
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
@endsection