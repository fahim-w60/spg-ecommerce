<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Fastkart">
    <meta name="keywords" content="Fastkart">
    <meta name="author" content="Fastkart">
    <link rel="icon" href="{{ asset('frontend/assets/images/favicon/5.png') }}" type="image/x-icon">
    <title>@yield('title')</title>
    
    @yield('header-script')

    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">

    <!-- bootstrap css -->
    <link id="rtl-link" rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/vendors/bootstrap.css') }}">

    <!-- wow css -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.min.css') }}" />

    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/vendors/font-awesome.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('adminBackend/assets/css/main.css') }}">

    <!-- feather icon css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/vendors/feather-icon.css') }}">

    <!-- Plugin CSS file with desired skin css -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendors/ion.rangeSlider.min.css') }}">

    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/vendors/slick/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/vendors/slick/slick-theme.css') }}">

    <!-- animation css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/font-style.css') }}">

    <!-- Template css -->
    <link id="color-link" rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/style.css') }}">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>

<body class="theme-color-3 dark">

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

@yield('main')
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




    
    @yield('footer-script')


    
    <!-- latest jquery-->
    <script src="{{ asset('frontend/assets/js/jquery-3.6.0.min.js') }}"></script>

    <!-- jquery ui-->
    <script src="{{ asset('frontend/assets/js/jquery-ui.min.js') }}"></script>

    <!-- Bootstrap js-->
    <script src="{{ asset('frontend/assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap/bootstrap-notify.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap/popper.min.js') }}"></script>

    <!-- feather icon js-->
    <script src="{{ asset('frontend/assets/js/feather/feather.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/feather/feather-icon.js') }}"></script>

    <!-- Lazyload Js -->
    <script src="{{ asset('frontend/assets/js/lazysizes.min.js') }}"></script>

    <!-- Slick js-->
    <script src="{{ asset('frontend/assets/js/slick/slick.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/slick/slick-animation.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/custom-slick-animated.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/slick/custom_slick.js') }}"></script>

    <!-- Range slider js -->
    <script src="{{ asset('frontend/assets/js/ion.rangeSlider.min.js') }}"></script>

    <!-- Auto Height Js -->
    <script src="{{ asset('frontend/assets/js/auto-height.js') }}"></script>

    <!-- Lazyload Js -->
    <script src="{{ asset('frontend/assets/js/lazysizes.min.js') }}"></script>

    <!-- Quantity js -->
    <script src="{{ asset('frontend/assets/js/quantity-2.js') }}"></script>

    <!-- Fly Cart Js -->
    <script src="{{ asset('frontend/assets/js/fly-cart.js') }}"></script>

    <!-- Timer Js -->
    <script src="{{ asset('frontend/assets/js/timer1.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/timer2.js') }}"></script>

    <!-- Copy clipboard Js -->
    <script src="{{ asset('frontend/assets/js/clipboard.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/copy-clipboard.js') }}"></script>

    <!-- WOW js -->
    <script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/custom-wow.js') }}"></script>

    <!-- script js -->
    <script src="{{ asset('frontend/assets/js/script.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

   

    <script>
        $(document).ready(function(){

        $('.lang-change').click(function(e){
            e.preventDefault();
            var lang = $(this).data('lang');

            $.ajax({
                url: "{{ route('LangChange') }}",
                type: 'GET',
                data: {
                    lang: lang
                },
                success: function(response){
                   // console.log('Language changed to ' + lang);

                    location.reload();
                },
                error: function() {
                    console.error('Error changing language');
                }
            });
        });


    });

</script>
</body>

</html>