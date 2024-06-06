@extends('user.userhomepage')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card shadow">
                <div class="card-header">
                    <h2 style="font-family: 'Times New Roman', Times, serif">Personal Profile</h2>
                </div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-lg-4">
                            <h5 class="mt-5 text-uppercase bg-light p-2 text-center" style="margin-top: 100%;"><i
                                    class="mdi mdi-account-circle me-1"></i>
                                Personal Information</h5>
                            <!-- end card-->
                        </div>
                        <div class="col-lg-8">
                            <form action="{{ route('update_profile') }}" method="POST" enctype="multipart/form-data"
                                class="needs-validation" novalidate>
                                @csrf
                                <div class="row">
                                    <div class="col-md-3 d-flex align-items-center mb-3 text-center justify-content-center mt-2">
                                        <img class="mt-3"
                                         src="{{ asset('/public/images/' . Auth::user()->profile_image) }}"
                                            width="100" height="100" alt="Profile Image">
                                    </div>

                                    <div class="col-md-9 mt-3">
                                        <label for="image">Profile Image</label>
                                        <input type="file" class="form-control" name="profile_image"
                                            placeholder="Select your profile picture" required>
                                        <div class="invalid-feedback">
                                            If you want to update fill this...
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col-md-6">
                                        <label for="name" class="label">name</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ Auth::user()->name }}" value="human Resource">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="name" class="label">Eamil</label>
                                        <input type="email" class="form-control" name="email"
                                            value=" {{ Auth::user()->email }}">
                                    </div>


                                </div>
                                <div class="row">
                                    <div class="col-md-3 mt-3">
                                        <button type="submit" class="btn btn-warning .d-grid btn-block">Save</button>

                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>


                    <hr>

                    <div class="row">
                        <div class="col-lg-4">
                            <h5 class="mt-5 text-uppercase bg-light p-2 text-center" style="margin-top: 100%;"><i
                                    class="mdi-lock-plus-outline me-1"></i>Update Password</h5>
                            <!-- end card-->
                        </div>
                        <div class="col-lg-8">
                            <form action="{{ route('update_password') }}" method="POST" enctype="multipart/form-data"
                                class="needs-validation" novalidate>
                                @csrf
                                <div class="row col-md-12 mt-3">
                                    <label for="image">Current Password</label>
                                    <input type="password" class="form-control" name="current_password" required
                                        placeholder="Enter your current passoword">
                                    <div class="invalid-feedback">
                                        fill the current password
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <label for="name" class="label">New Password</label>
                                        <input type="Password" class="form-control" name="password" required>
                                        <div class="invalid-feedback">
                                            Enter the new password
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="name" class="label">Confirm
                                            Password</label>
                                        <input type="password" class="form-control" name="password" required>
                                        <div class="invalid-feedback">
                                            Confirm password
                                        </div>
                                    </div>


                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <button type="submit" class="btn btn-warning mt-3 btn-block">Save</button>
                                    </div>
                                </div>



                            </form>

                        </div>
                    </div>






                </div>
                <div class="card-footer">

                </div>
            </div>
        </div>
    </div>
@endsection
