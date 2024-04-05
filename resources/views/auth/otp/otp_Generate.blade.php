<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Fastkart">
    <meta name="keywords" content="Fastkart">
    <meta name="author" content="Fastkart">
    <link rel="icon" href="{{ asset('frontend/assets/images/favicon/1.png') }}" type="image/x-icon">
    <title>OTP</title>

    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- bootstrap css -->
    <link id="rtl-link" rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/vendors/bootstrap.css') }}">

    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/vendors/font-awesome.css') }}">

    <!-- feather icon css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/vendors/feather-icon.css') }}">

    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/vendors/slick/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/vendors/slick/slick-theme.css') }}">

    <!-- Iconly css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/bulk-style.css') }}">

    <!-- Template css -->
    <link id="color-link" rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/style.css') }}">
</head>

<body>

    <!-- Loader Start -->
    <div class="fullpage-loader">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
    <!-- Loader End -->

    <!-- Header Start -->
    @include('frontend.home.header');
    <!-- Header End -->

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
                        <h2>OTP</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="index.html">
                                        <i class="fa-solid fa-house"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item active">OTP</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @if(session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <!-- Breadcrumb Section End -->

    <!-- log in section start -->
    <section class="log-in-section otp-section section-b-space">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-xxl-6 col-xl-5 col-lg-6 d-lg-block d-none ms-auto">
                    <div class="image-contain">
                        <img src="{{ asset('frontend/assets/images/inner-page/otp.png') }}" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-xxl-4 col-xl-5 col-lg-6 col-sm-8 mx-auto">
                    <div class="d-flex align-items-center justify-content-center h-100">
                        <div class="log-in-box">
                            <form method="post" action="{{ route('otp.getlogin') }}">
                                @csrf 
                                <div class="log-in-title">
                                    <h3 class="text-title">Please enter the one-time password to verify your account</h3>
                                    <h5 class="text-content">A code has been sent to <span>{{ $phone }}</span></h5>
                                    <h5 id="clock" style="text-align: right;">03:00</h5>
                                </div>
                
                                <div id="otp" class="inputs d-flex flex-row justify-content-center">
                                    <input class="text-center form-control rounded" type="text" id="first" name="first" maxlength="1" placeholder="*">
                                    <input class="text-center form-control rounded" type="text" id="second" name="second" maxlength="1" placeholder="*">
                                    <input class="text-center form-control rounded" type="text" id="third" name="third" maxlength="1" placeholder="*">
                                    <input class="text-center form-control rounded" type="text" id="fourth" name="fourth" maxlength="1" placeholder="*">
                                    <input class="text-center form-control rounded" type="text" id="fifth" name="fifth" maxlength="1" placeholder="*">
                                    <input class="text-center form-control rounded" type="text" id="sixth" name="sixth" maxlength="1" placeholder="*">
                                </div>
                                <input type="hidden" name="phone" value="{{ $phone }}">
                
                                {{-- <div class="send-box pt-4">
                                    <h5>Didn't get the code? <a href="javascript:void(0)" class="theme-color fw-bold">Resend It</a></h5>
                                </div> --}}
                    
                
                                <button class="btn btn-animation w-100 mt-3" type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- log in section end -->

    <!-- Footer Section Start -->
    @include('frontend.home.footer')
    <!-- Footer Section End -->

    <!-- Tap to top start -->
    <div class="theme-option">
        <div class="back-to-top">
            <a id="back-to-top" href="#">
                <i class="fas fa-chevron-up"></i>
            </a>
        </div>
    </div>
    <!-- Tap to top end -->

    <!-- Bg overlay Start -->
    <div class="bg-overlay"></div>
    <!-- Bg overlay End -->

    <!-- latest jquery-->
    <script src="{{ asset('frontend/assets/js/jquery-3.6.0.min.js') }}"></script>

    <!-- Bootstrap js-->
    <script src="{{ asset('frontend/assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap/popper.min.js') }}"></script>

    <!-- otp js-->
    <script src="{{ asset('frontend/assets/js/otp.js') }}"></script>

    <!-- Slick js-->
    <script src="{{ asset('frontend/assets/js/slick/slick.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/slick/slick-animation.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/slick/custom_slick.js') }}"></script>

    <!-- feather icon js-->
    <script src="{{ asset('frontend/assets/js/feather/feather.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/feather/feather-icon.js') }}"></script>

    <!-- Lazyload Js -->
    <script src="{{ asset('frontend/assets/js/lazysizes.min.js') }}"></script>

    <!-- script js -->
    <script src="{{ asset('frontend/assets/js/script.js') }}"></script>
    <script>
        
        let timeInSeconds = 3 * 60;
    
        
        const intervalId = setInterval(function () {
            
            const minutes = Math.floor(timeInSeconds / 60);
            const seconds = timeInSeconds % 60;
    
            
            document.getElementById('clock').textContent = `${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;
    
         
            timeInSeconds--;
    
         
            if (timeInSeconds < 0) {
                clearInterval(intervalId);
                document.getElementById('clock').textContent = '0:00';
                
            }
        }, 1000); 
    </script>
</body>

</html>