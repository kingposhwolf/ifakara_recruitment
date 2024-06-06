@extends('user.userhomepage')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card shadow">
                <div class="card-header">
                    <h3 style="float:left ; font-family: 'Times New Roman', Times, serif">Professional Qualifications</h3>
                    <a style="float: right; margin-top: 5px; border:none; font-size:25px; color:black;" data-toggle="modal"
                        data-target=".bd-profesional-modal-lg"><i class="bi bi-plus-circle"></i></a>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Level</th>
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
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade bd-profesional-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true" style="box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <h3 class="text-center" style="font-family: 'Times New Roman', Times, serif">Add Professional Qualificatios
                </h3>
                <hr>
                <div class="container">
                    <form>
                        <div class="row">
                            <div class="col-6 my-3">
                                <label for="">Country</label>
                                <select id="" class="form-control">
                                    <option value="">-- Select Country --</option>
                                </select>
                            </div>
                            <div class="col-6 my-3">
                                <label for="">Institution Name</label>
                                <select id="" class="form-control">
                                    <option value="">-- Select Institution Name --</option>
                                </select>
                            </div>
                            <div class="col-6 my-3">
                                <label for="">Course Name</label>
                                <select id="" class="form-control">
                                    <option value="">-- Select Course Name --</option>
                                </select>
                            </div>
                            <div class="col-3 my-3">
                                <label for="">Year From</label>
                                <select id="name-dropdown" class="form-control">
                                </select>
                            </div>
                            <div class="col-3 my-3">
                                <label for="">To</label>
                                <input type="text" class="form-control" placeholder="">
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
@endsection
