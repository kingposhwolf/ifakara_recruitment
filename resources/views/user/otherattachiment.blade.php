@extends('user.userhomepage')
@section('content')
    <!-- Your existing content here -->

    <!-- Display success or error messages -->
    @if(session('status'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('status') }}
            <button type="button" class="close" data-dismiss="alert">&times;</button>
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show">
            {{ session('error') }}
            <button type="button" class="close" data-dismiss="alert">&times;</button>
        </div>
    @endif

    <!-- Display validation errors -->
    @if($errors->any())
        <div class="alert alert-danger alert-dismissible fade show">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="close" data-dismiss="alert">&times;</button>
        </div>
    @endif

    <!-- Your existing content here -->


    <div class="row justify-content-center">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card shadow">
                <div class="card-header">
                    <h3 style="float:left,; font-family: 'Times New Roman', Times, serif">Other Attachment</h3>
                    <a style="float: right; margin-top: 5px; border:none; font-size:25px; color:black;" data-toggle="modal"
                       data-target=".bd-other-modal-lg"><i class="bi bi-plus-circle"></i></a>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Attachment</th>
                            <th>View</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($otherAttachments as $otherAttachment)
                            <tr>
                                <td>{{ $otherAttachment->attachiment_type }}</td>
                                <td>
                                    @if ($otherAttachment->attachiment)
                                        <a href="{{ asset('storage/documents/'.$otherAttachment->attachiment) }}" target="_blank">View</a>
                                    @else
                                        No attachment
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ url('/otherattachiment/delete_otherattachiment/' . $otherAttachment->id) }}" class="btn btn-danger mr-2">Delete</a>
                                    <!-- Add data attributes to store the attachment ID and type -->
                                    <a style="color:white;" data-toggle="modal" data-target=".up-other-modal-lg" class="btn btn-info update">Update</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

    <div class="modal fade bd-other-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true" style="box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <h3 class="text-center" style="font-family: 'Times New Roman', Times, serif">Add Other Attachments</h3>
                <hr>
                <div class="container">
                    <form action="{{ route('add_otherattachiment') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-6 my-3">
                                <label for="">Attachment type</label>
                                <select name="attachiment_type" id="" class="form-control">
                                    <option value="Birth Certificate">Birth Certificate</option>
                                    <option value="Curriculm">Curriculm</option>
                                    <option value="Deed Poll/Affidavit">Deed Poll/Affidavit</option>
                                    <option value="Reccomendation Letter">Reccomendation Letter</option>
                                    <option value="Other Document">Other Document</option>
                                </select>
                            </div>

                            <div class="col-6 my-3">
                                <label for="">Attachiment</label>
                                <input type="file" name="document" class="form-control" required>
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

    <div class="modal fade up-other-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true" style="box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <h3 class="text-center" style="font-family: 'Times New Roman', Times, serif">Update Other Attachments</h3>
                <hr>
                <div class="container">
                    <form action="{{ route('update_otherattachiment', ['id' => $otherAttachments[0]->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-6 my-3">
                                <label for="">Attachment type</label>
                                <select name="attachiment_type" id="" class="form-control">
                                    <option value="Birth Certificate" {{ $otherAttachments[0]->attachiment_type === 'Birth Certificate' ? 'selected' : '' }}>Birth Certificate</option>
                                    <option value="Curriculm" {{ $otherAttachments[1]->attachiment_type === 'Curriculm' ? 'selected' : '' }}>Curriculm</option>
                                    <option value="Deed Poll/Affidavit" {{ $otherAttachments[0]->attachiment_type === 'Deed Poll/Affidavit' ? 'selected' : '' }}>Deed Poll/Affidavit</option>
                                    <option value="Reccomendation Letter" {{ $otherAttachments[0]->attachiment_type === 'Reccomendation Letter' ? 'selected' : '' }}>Reccomendation Letter</option>
                                    <option value="Other Document" {{ $otherAttachments[0]->attachiment_type === 'Other Document' ? 'selected' : '' }}>Other Document</option>
                                </select>
                            </div>

                            <div class="col-6 my-3">
                                <label for="">Attachiment</label>
                                <input type="file" name="document" class="form-control">
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
    {{--  </div>  --}}

    <script>
        // Auto dismiss alerts after 5 seconds
        $(".alert").fadeTo(5000, 500).slideUp(500, function(){
            $(".alert").alert('close');
        });

        // Close alert when close button is clicked
        $(".close").click(function(){
            $(this).parent().fadeTo(500, 0).slideUp(500);
        });

        $(document).on("click", ".update", function () {
            var id = $(this).data('id');
            var type = $(this).data('type');

        });
    </script>
@endsection
