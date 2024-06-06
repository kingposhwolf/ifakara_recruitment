@extends('user.userhomepage')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card shadow">
            <div class="card-header">
              <h3 style="float: left;font-family: 'Times New Roman', Times, serif">Computer Literacy</h3>
              <a style="float: right; margin-top: 5px; border:none; font-size:25px; color:black;" data-toggle="modal"
                        data-target=".bd-computer-modal-lg"><i class="bi bi-plus-circle"></i></a>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>Skill</th>
                        <th>Proficiency</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
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

<div class="modal fade bd-computer-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true" style="box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <h3 class="text-center" style="font-family: 'Times New Roman', Times, serif">Add Computer Literacy</h3>
                <hr>
                <div class="container">
                    <form>
                        <div class="row">
                            <div class="col-6 my-3">
                                <label for="">Is this your Current Date</label>
                                <select name="" id="" class="form-control">
                                    <option value="">MS Excell</option>
                                    <option value="">MS Powerpoint</option>
                                    <option value="">MS Word</option>
                                </select>
                            </div>
                            
                            <div class="col-6 my-3">
                                <label for="">Attach your certificate (optional)</label>
                                <input type="File" class="form-control">
                            </div>
                            
                            <div class="col-6 my-3">
                                 <label for="">Skills</label><br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio1" value="option1">
                                    <label class="form-check-label" for="inlineRadio1">Very Good</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">Good</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio3" value="option3">
                                    <label class="form-check-label" for="inlineRadio3">Fair</label>
                                </div>
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