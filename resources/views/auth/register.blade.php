@extends('frontend.master-dashboard')
@section('title')
    Fastkart Ecommerce || Registration
@endsection

@section('main')
<!-- header area start -->
@include('frontend.home.header')
<!-- header area end -->

<!-- mobile fix menu start -->
<div class="mobile-menu d-md-none d-block mobile-cart">
    <ul>
        <li class="active">
            <a href="index.html">
                <i class="iconly-Home icli"></i>
                <span>Home</span>
            </a>
        </li>

        <li class="mobile-category">
            <a href="javascript:void(0)">
                <i class="iconly-Category icli js-link"></i>
                <span>Category</span>
            </a>
        </li>

        <li>
            <a href="search.html" class="search-box">
                <i class="iconly-Search icli"></i>
                <span>Search</span>
            </a>
        </li>

        <li>
            <a href="wishlist.html" class="notifi-wishlist">
                <i class="iconly-Heart icli"></i>
                <span>My Wish</span>
            </a>
        </li>

        <li>
            <a href="cart.html">
                <i class="iconly-Bag-2 icli fly-cate"></i>
                <span>Cart</span>
            </a>
        </li>
    </ul>
</div>
<!-- mobile fix menu end -->

    <!-- Breadcrumb Section Start -->
    <section class="breadscrumb-section pt-0">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="breadscrumb-contain">
                        <h2>Register</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="index.html">
                                        <i class="fa-solid fa-house"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item active">Register</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- log in section start -->
    <section class="log-in-section section-b-space">
        <div class="container-fluid-lg w-100">
            <div class="row">
                <div class="col-xxl-6 col-xl-5 col-lg-6 d-lg-block d-none ms-auto">
                    <div class="image-contain">
                        <img src="{{ asset('frontend/assets/images/inner-page/sign-up.png') }}" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-xxl-4 col-xl-5 col-lg-6 col-sm-8 mx-auto">
                    <div class="log-in-box">
                        <div class="log-in-title">
                            <h3>Welcome To Fastkart</h3>
                            <h4>Create New Account</h4>
                        </div>

                        <div class="input-box">
                            <form class="row g-4 re" id="registrationForm" action="{{ route('register') }}" method="POST">
                                @csrf
                                <div class="col-12">
                                    <div class="form-floating theme-form-floating">
                                        <input type="text" name="name" class="form-control @if($errors->has('name')) is-invalid @endif" id="fullname" placeholder="Full Name">
                                        <label for="fullname">Full Name</label>
                                        @if($errors->has('name'))
                                            <span class="error invalid-feedback">{!! $errors->first('name') !!}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating theme-form-floating">
                                        <input type="email" name="email" class="form-control @if($errors->has('email')) is-invalid @endif" id="email" placeholder="Email Address">
                                        <label for="email">Email Address</label>
                                        @if($errors->has('email'))
                                            <span class="error invalid-feedback">{!! $errors->first('email') !!}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-floating theme-form-floating">
                                        <input type="tel" name="phone" class="form-control @if($errors->has('phone')) is-invalid @endif" id="phone" placeholder="Phone Number">
                                        <label for="tel">Phone Number</label>
                                        @if($errors->has('phone'))
                                            <span class="error invalid-feedback">{!! $errors->first('phone') !!}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-floating theme-form-floating">
                                        <input type="password" name="password" pattern="(?=.*[A-Za-z])(?=.*\d).{6,}" 
                                            class="form-control @if($errors->has('password')) is-invalid @endif" id="password"
                                            placeholder="Password" oninput="validatePassword()" required>
                                        <label for="password">Password</label>
                                        @if($errors->has('password'))
                                            <span class="error invalid-feedback">{!! $errors->first('password') !!}</span>
                                        @endif
                                        <p id="passwordError" style="color: red;"></p>
                                    </div>
                                </div>
                                

                                {{-- <div class="col-12">
                                    <div class="forgot-box">
                                        <div class="form-check ps-0 m-0 remember-box">
                                            <input class="checkbox_animated check-box @if($errors->has('password')) is-invalid @endif" name="checkbox" type="checkbox"
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">I agree with
                                                <span>Terms</span> and <span>Privacy</span></label>
                                        </div>
                                        @if($errors->has('checkbox'))
                                            <span class="error invalid-feedback">{!! $errors->first('checkbox') !!}</span>
                                        @endif
                                    </div>    
                                </div> --}}

                                <div class="col-12">
                                    <button class="btn btn-animation w-100" type="submit">Sign Up</button>
                                </div>
                            </form>
                        </div>

                        <div class="other-log-in">
                            <h6>or</h6>
                        </div>

                        <div class="log-in-button">
                            <ul>
                                <li>
                                    <a href="{{ route('google.auth') }}"
                                        class="btn google-button w-100">
                                        <img src="{{ asset('frontend/assets/images/inner-page/google.png') }}" class="blur-up lazyload"
                                            alt="">
                                        Continue with Google
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('facebook.auth') }}" class="btn google-button w-100">
                                        <img src="{{ asset('frontend/assets/images/inner-page/facebook.png') }}" class="blur-up lazyload"
                                            alt=""> Continue with Facebook
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="other-log-in">
                            <h6></h6>
                        </div>

                        <div class="sign-up-box">
                            <h4>Already have an account?</h4>
                            <a href="{{ route('login') }}">Log In</a>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-7 col-xl-6 col-lg-6"></div>
            </div>
        </div>
    </section>
    <!-- log in section end -->

    <!-- Tap to top start -->
    <div class="theme-option">
        <div class="back-to-top">
            <a id="back-to-top" href="#">
                <i class="fas fa-chevron-up"></i>
            </a>
        </div>
    </div>
    <!-- Tap to top end -->

    <!-- Footer Section Start -->
    @include('frontend.home.footer')
    <!-- Footer Section End -->

    <!-- Location Modal Start -->
    @include('frontend.home.locationModal')
    <!-- Location Modal End -->

    @section('footer-script')
    <script>
        function validatePassword() {
            // Get the password value
            var password = document.getElementById('password').value;
    
            // Password validation conditions
            var hasLetter = /[a-zA-Z]/.test(password);
            var hasNumber = /\d/.test(password);
            var hasMinimumLength = password.length >= 6;
    
            // Check if all conditions are met
            if (hasLetter && hasNumber && hasMinimumLength) {
                // Clear any previous error messages
                document.getElementById('passwordError').innerHTML = '';
            } else {
                // Display an error message
                document.getElementById('passwordError').innerHTML = 'Password must be at least 6 characters long and contain both letters and numbers.';
                event.preventDefault();
            }
        }
    </script>
    @endsection
@endsection





















