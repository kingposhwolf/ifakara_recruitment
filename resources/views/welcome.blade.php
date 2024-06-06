@include('layouts.welcome.header')


<div class="intro-section" id="home-section">

    <div class="slide-1" style="background-image: url('{{ asset('web/img/cover_img.png') }}');"
        data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <h1 data-aos="fade-up" data-aos-delay="100" style="font-weight: bold;">IFAKARA DIOCESE
                                PORTAL</h1>
                            <p class="mb-4" data-aos="fade-up" data-aos-delay="200">With the aim of
                                improving
                                perfomance and staffs workign in a digital world as diocese.</p>
                            <p data-aos="fade-up" data-aos-delay="300"><a href="#" class="btn  py-3 px-5 btn-pill"
                                    style="background-color: #001D23; color:#FF6F0F;">Register to apply Job</a></p>

                        </div>
                        <div class="col-lg-5 mt-5" data-aos="fade-up" data-aos-delay="500">
                            <div class="py-1"
                                style="background-color: #fff; border-radius:10px; box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;">
                                <form action="{{ route('login') }}" method="post" class="form-box">
                                    @csrf
                                    <h3 class="h4 text-black text-center" style="font-weight: 900;">Login Here
                                    </h3>
                                    <div class="mt-5">
                                        <div class="form-group">
                                            <label for="email"
                                                style="font-size: 15px;">{{ __('Email Address') }}</label>
                                            <input type="email"
                                                class="form-control  @error('email') is-invalid @enderror"
                                                placeholder="Enter your email addresss" required name="email">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="password" style="font-size: 15px">{{ __('Password') }}</label>
                                            <input type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                placeholder="Enter  your password" name="password" required>
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-check">

                                            <label class="form-check-label" for="flexCheckDefault"
                                                style="font-size: 15px">
                                                <input class="form-check-input mt-1" name="remember" type="checkbox"
                                                    value="" id="flexCheckDefault" {{ old('remember') ? 'checked' : '' }}>{{ __('Remember Me') }}
                                            </label>
                                        </div>

                                    </div>

                                    <button class="btn btn-primary btn-block btn-pill mt-3"
                                        type="submit">{{ __('Login') }}</button>
                                </form>
                                <div class="mt-1" style="">
                                    <p class="text-center">
                                        @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}"
                                                style="font-size: 13px; font-weight:600;">
                                                {{ __('Forgot Your Password?') }}</a>
                                        @endif
                                    </p>


                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>


<div class="site-section courses-title" id="courses-section" style="background-color: #fff">
    <div class="container">
        <div class="row mb-5 justify-content-center">
            <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="">
                <h2 class="section-title" style="color: #000">Vacancies Categories</h2>
            </div>
        </div>
    </div>
</div>

<div class="site-section courses-entry-wrap" data-aos="fade-up" data-aos-delay="100">

    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8 d-flex flex-column align-items-center">
            <!-- Success Message -->
            {{-- @if (session('success'))
            <div id="success-alert" class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif

            <!-- Error Message -->
            @if (session('error'))
            <div id="error-alert" class="alert alert-danger">
                {{ session('error') }}
            </div>
            @endif --}}

            <!-- Cancel Button -->
        </div>
        <div class="col-lg-2"></div>
    </div>

    <div class="container">

        <div class="row mt-3">
            @if ($posts->isEmpty())
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="alert alert-info text-center">
                        There are no posts available at the moment.
                    </div>
                </div>

                <div class="col-md-1"></div>
            @else
                @foreach ($posts as $post)
                    <div class="col-lg-4">
                        <div class="course bg-white h-100 align-self-stretch"
                            style=" box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;">

                            <div class="course-inner-text py-4 px-4">
                                <span class="course-price">{{ $post->created_at->format('Y-m-d') }}</span>
                                <div class="meta"><span class="icon-clock-o"></span><b class="text-success">
                                        {{ $post->application_date }}</b> | <b class="text-success">Open</b></div>
                                <h3><a href="" style="color: #FF6F0F">{{ $post->vacant_category }}</a></h3>
                                <p style="text-align: justify">
                                    {{ Illuminate\Support\Str::limit(strip_tags($post->summary), 100) }}</p>

                            </div>
                            <div class="d-flex border-top stats">
                                <div class="py-3 px-4" style="color: #FF6F0F; font-weight:600"><a
                                        href="{{ route('postdeatail', $post->id) }}"><span
                                            class="icon-sign-in"></span> View More</a></div>
                                <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-sign-in"></span> 2
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
            {{-- <div class="col-lg-4">
                        <div class="course bg-white h-100 align-self-stretch"
                            style=" box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;">

                            <div class="course-inner-text py-4 px-4">
                                <span class="course-price">1</span>
                                <div class="meta"><span class="icon-clock-o"></span>4 Lessons / 12 week</div>
                                <h3><a href="#"  style="color: #FF6F0F; font-weight:700">IT and Telecoms</a></h3>
                                <p>Lorem ipsum dolor sit amet ipsa nulla adipisicing elit. </p>
                            </div>
                            <div class="d-flex border-top stats">
                                <div class="py-3 px-4" style="color: #FF6F0F; font-weight:600"><span class="icon-sign-in"></span> Apply Now</div>
                                <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chart"></span> 2
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="course bg-white h-100 align-self-stretch"
                            style=" box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;">

                            <div class="course-inner-text py-4 px-4">
                                <span class="course-price">9</span>
                                <div class="meta"><span class="icon-clock-o"></span>4 Lessons / 12 week</div>
                                <h3><a href="#"  style="color: #FF6F0F; font-weight:700">Healthcare and Pharmaceutical </a></h3>
                                <p>Lorem ipsum dolor sit amet ipsa nulla adipisicing elit. </p>
                            </div>
                            <div class="d-flex border-top stats">
                                <div class="py-3 px-4" style="color: #FF6F0F; font-weight:600"><span class="icon-sign-in"></span> Apply Now</div>
                                <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chart"></span> 2
                                </div>
                            </div>
                        </div>

                    </div> --}}




        </div>
        {{-- <div class="row mt-5">
                    <div class="col-md-4">
                        <div class="course bg-white h-100 align-self-stretch"
                            style=" box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;">

                            <div class="course-inner-text py-4 px-4">
                                <span class="course-price">2</span>
                                <div class="meta"><span class="icon-clock-o"></span>4 Lessons / 12 week</div>
                                <h3><a href="#" style="color: #FF6F0F; font-weight:700">HR & Administration</a></h3>
                                <p>Lorem ipsum dolor sit amet ipsa nulla adipisicing elit. </p>
                            </div>
                            <div class="d-flex border-top stats">
                                <div class="py-3 px-4" style="color: #FF6F0F; font-weight:600"><span class="icon-sign-in"></span> Apply Now</div>
                                <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chart"></span> 2
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="course bg-white h-100 align-self-stretch"
                            style=" box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;">

                            <div class="course-inner-text py-4 px-4">
                                <span class="course-price">10</span>
                                <div class="meta"><span class="icon-clock-o"></span>4 Lessons / 12 week</div>
                                <h3><a href="#"  style="color: #FF6F0F; font-weight:700">Socaials Studys and Arts</a></h3>
                                <p>Lorem ipsum dolor sit amet ipsa nulla adipisicing elit. </p>
                            </div>
                            <div class="d-flex border-top stats">
                                <div class="py-3 px-4" style="color: #FF6F0F; font-weight:600"><span class="icon-sign-in"></span> Apply Now</div>
                                <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chart"></span> 2
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="course bg-white h-100 align-self-stretch"
                            style=" box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;">

                            <div class="course-inner-text py-4 px-4">
                                <span class="course-price">9</span>
                                <div class="meta"><span class="icon-clock-o"></span>4 Lessons / 12 week</div>
                                <h3><a href="#" style="color: #FF6F0F; font-weight:700">Science Studies and Technincian</a></h3>
                                <p>Lorem ipsum dolor sit amet ipsa nulla adipisicing elit. </p>
                            </div>
                            <div class="d-flex border-top stats">
                                <div class="py-3 px-4" style="color: #FF6F0F; font-weight:600"><span class="icon-sign-in"></span> Apply Now</div>
                                <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chart"></span> 2
                                </div>
                            </div>
                        </div>
                        </div>

                </div> --}}

    </div>
</div>




@include('layouts.welcome.footer')
