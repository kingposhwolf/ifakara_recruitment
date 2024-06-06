@extends('user.userhomepage')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card shadow">
            <div class="card-header">
                <h3 style="float: left; font-family: 'Times New Roman', Times, serif">Training & Workshop Attended</h3>
                <a style="float: right; margin-top: 5px; border:none; font-size:25px; color:black;" data-toggle="modal"
                    data-target=".bd-workshop-modal-lg"><i class="bi bi-plus-circle"></i></a>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Training Name</th>
                            <th>Institution</th>
                            <th>Certificate</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $data)
                        <tr>
                            <td>{{ $data->training_name}}</td>
                            <td>{{ $data->institute_name}}</td>
                            <td>{{ $data->training_discription}}</td>
                            <td></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade bd-workshop-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true" style="box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <h3 class="text-center" style="font-family: 'Times New Roman', Times, serif">Add Training & Workshop
                Attended</h3>
            <hr>
            <div class="container">
                <form action="{{ url('/trainingandworkshop/add_trainingandworkshop') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-6 my-3">
                            <label for="">Training Name</label>
                            <input type="text" class="form-control" name="training_name">
                        </div>
                        <div class="col-6 my-3">
                            <label for="">Institution</label>
                            <input type="text" class="form-control" name="institute_name">
                        </div>
                        <div class="col-6 my-3">
                            <label for="">Training Description</label>
                            <input type="text" class="form-control" name="training_discription">
                        </div>
                        <div class="col-6 my-3">
                            <label for="">Attach your certificate (optional)</label>
                            <input type="File" class="form-control" name="">
                        </div>

                        <div class="col-6 my-3">
                            <label for="">Start Date</label>
                            <input type="date" class="form-control" name="start_date">
                        </div>

                        <div class="col-6 my-3">
                            <label for="">End Date</label>
                            <input type="date" class="form-control" name="end_date">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-info">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection