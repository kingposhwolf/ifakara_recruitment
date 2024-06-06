



@include('layouts.welcome.header')

{{-- <div class="intro-section single-cover" id="home-section" style="background-color: #fff">

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
</div> --}}

<div class="site-section">
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-3"></div>
            <div class="col-lg-6 mb-5">
                @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <div style="box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;">
                    <form  action="{{ route('password.email') }}" method="post" class="form-box">
                        @csrf
                        <h3 class="h4 text-black text-center" style="font-weight: 900;">{{ __('Reset Password') }}
                        </h3>
                        <div class="mt-5">
                          
                            <div class="form-group">
                                <label for="email" style="font-size: 15px;">{{ __('Email Address') }}</label>
                                <input type="email" class="form-control  @error('email') is-invalid @enderror"
                                    placeholder="Enter your email addresss"  name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                         
                          
    
                        </div>
    
                        <button class="btn btn-primary btn-block btn-pill mt-3" type="submit"> {{ __('Send Password Reset Link') }}
                        </button>
                    </form>

                </div>
                


            </div>
        
           
        </div>
    </div>
</div>



@include('layouts.welcome.footer')
