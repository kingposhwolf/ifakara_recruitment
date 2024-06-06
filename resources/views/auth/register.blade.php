
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
                    <form  action="{{ route('register') }}" method="post" class="form-box">
                        @csrf
                        <h3 class="h4 text-black text-center" style="font-weight: 900;">Register Here
                        </h3>
                        <div class="mt-5">
                            <div class="form-group">
                                <label for="name" style="font-size: 15px;">{{ __('Name') }}</label>
                                <input type="name" class="form-control  @error('email') is-invalid @enderror"
                                    placeholder="Enter your fill name" required name="name">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email" style="font-size: 15px;">{{ __('Email Address') }}</label>
                                <input type="email" class="form-control  @error('email') is-invalid @enderror"
                                    placeholder="Enter your email addresss" required name="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password" style="font-size: 15px">{{ __('Password') }}</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                    placeholder="Enter  your password" name="password" required>
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
    
                            <div class="form-check">
                               
                                <label class="form-check-label" for="flexCheckDefault" style="font-size: 15px">
                                    <input class="form-check-input mt-1" name="remember" type="checkbox" value=""  id="flexCheckDefault"> I accept Terms and Conditions
                                </label>
                            </div>
    
                        </div>
    
                        <button class="btn btn-primary btn-block btn-pill mt-3" type="submit">{{ __('Register') }}</button>
                    </form>

                </div>
                


            </div>
        
           
        </div>
    </div>
</div>



@include('layouts.welcome.footer')
