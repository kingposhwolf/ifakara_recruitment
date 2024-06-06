{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    <form method="POST" action="">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                       
                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" >

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                  
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}




@include('layouts.welcome.header')

<div class="intro-section single-cover" id="home-section" style="background-color: #fff">

    <div class="slide-1 " data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="row justify-content-center align-items-center text-center">
                        <div class="col-lg-6">
                            <h1 data-aos="fade-up" data-aos-delay="0" style="color: black">Account Registration </h1>
                          
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6 mb-5">
                <div style="box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;">
                    <form  action="{{ route('password.update') }}" method="post" class="form-box">
                        @csrf

                        <h3 class="h4 text-black text-center" style="font-weight: 900;">{{ __('Reset Password') }}
                        </h3>
                        <input type="hidden" name="token" value="{{ $token }}">
                        <div class="mt-5">
                            
                            <div class="form-group">
                                <label for="email" style="font-size: 15px;">{{ __('Email Address') }}</label>
                                <input type="email" class="form-control  @error('email') is-invalid @enderror"
                                    placeholder="Enter your email addresss" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>


                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <div class="form-group">
                                <label for="password" style="font-size: 15px">{{ __('Password') }}</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                    placeholder="Enter  your password" name="password"  required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                   @enderror

                            </div>

                            <div class="form-group">
                                <label for="password" style="font-size: 15px;"> {{ __('Confirm Password') }}</label>
                                <input type="password" class="form-control  @error('email') is-invalid @enderror"
                                    placeholder="confirm your password" required name="password_confirmation">

                                    @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
    
                           
    
                        </div>
    
                        <button class="btn btn-primary btn-block btn-pill mt-3" type="submit">  {{ __('Reset Password') }}<button>
                    </form>

                </div>
                


            </div>
        
           
        </div>
    </div>
</div>



@include('layouts.welcome.footer')

