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
    <title>On-demand last-mile delivery</title>

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

    <!-- Header Start -->
    <header class="header-3">
        <div class="top-nav sticky-header sticky-header-2">
            <div class="container-fluid-lg">
                <div class="row">
                    <div class="col-12">
                        <div class="navbar-top">
                            <button class="navbar-toggler d-xl-none d-block p-0 me-3" type="button"
                                data-bs-toggle="offcanvas" data-bs-target="#primaryMenu">
                                <span class="navbar-toggler-icon">
                                    <i class="iconly-Category icli"></i>
                                </span>
                            </button>
                            <a href="index.html" class="web-logo nav-logo">
                                <img src="{{ asset('frontend/assets/images/logo/4.png') }}" class="img-fluid blur-up lazyload" alt="">
                            </a>

                            <div class="search-full">
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i data-feather="search" class="font-light"></i>
                                    </span>
                                    <input type="text" class="form-control search-type" placeholder="Search here..">
                                    <span class="input-group-text close-search">
                                        <i data-feather="x" class="font-light"></i>
                                    </span>
                                </div>
                            </div>

                            <div class="middle-box">
                                <div class="center-box">
                                    <div class="location-box-2">
                                        <button class="btn location-button" data-bs-toggle="modal"
                                            data-bs-target="#locationModal">
                                            <i class="iconly-Location icli"></i>
                                            <span>Location</span>
                                            <i class="fa-solid fa-angle-down down-arrow"></i>
                                        </button>
                                    </div>

                                    <div class="searchbar-box-2 input-group d-xl-flex d-none">
                                        <button class="btn search-icon" type="button">
                                            <i class="iconly-Search icli"></i>
                                        </button>
                                        <input type="text" class="form-control"
                                            placeholder="Search for products, styles,brands...">
                                        <button class="btn search-button" type="button">Search</button>
                                    </div>
                                </div>
                            </div>

                            <div class="rightside-menu support-sidemenu">
                                <div class="support-box">
                                    <div class="support-image">
                                        <img src="{{ asset('frontend/assets/images/icon/support.png') }}" class="img-fluid blur-up lazyload"
                                            alt="">
                                    </div>
                                    <div class="support-number">
                                        <h2>(123) 456 7890</h2>
                                        <h4>24/7 Support Center</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12 position-relative">
                    <div class="main-nav nav-left-align">
                        <div class="main-nav navbar navbar-expand-xl navbar-light navbar-sticky p-0">
                            <div class="offcanvas offcanvas-collapse order-xl-2" id="primaryMenu">
                                <div class="offcanvas-header navbar-shadow">
                                    <h5>Menu</h5>
                                    <button class="btn-close lead" type="button" data-bs-dismiss="offcanvas"
                                        aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body">
                                    <ul class="navbar-nav">
                                        
                                        
                                        

                                        

                                        <li class="nav-item dropdown dropdown-mega">
                                            <a class="nav-link dropdown-toggle ps-xl-2 ps-0" href="javascript:void(0)"
                                                data-bs-toggle="dropdown">Mega Menu</a>

                                            <div class="dropdown-menu dropdown-menu-2 dropdown-menu-left">
                                                <div class="row">
                                                    <div class="dropdown-column col-xl-3">
                                                        <h5 class="dropdown-header">Daily Vegetables</h5>
                                                        <a class="dropdown-item" href="shop-left-sidebar.html">Beans &
                                                            Brinjals</a>

                                                        <a class="dropdown-item" href="shop-left-sidebar.html">Broccoli
                                                            & Cauliflower</a>

                                                        <a href="shop-left-sidebar.html" class="dropdown-item">Chilies,
                                                            Garlic, Lemon & Ginger</a>

                                                        <a class="dropdown-item" href="shop-left-sidebar.html">Cut
                                                            Vegetables & Salads</a>

                                                        <a class="dropdown-item" href="shop-left-sidebar.html">Gourd,
                                                            Cucumber & Pumpkin</a>

                                                        <a class="dropdown-item" href="shop-left-sidebar.html">Herbs &
                                                            Sprouts</a>

                                                        <a href="demo-personal-portfolio.html"
                                                            class="dropdown-item">Lettuce
                                                            & Leafy</a>
                                                    </div>

                                                    <div class="dropdown-column col-xl-3">
                                                        <h5 class="dropdown-header">Baby Tender</h5>
                                                        <a class="dropdown-item" href="shop-left-sidebar.html">Beans &
                                                            Brinjals</a>

                                                        <a class="dropdown-item" href="shop-left-sidebar.html">Broccoli
                                                            & Cauliflower</a>

                                                        <a class="dropdown-item" href="shop-left-sidebar.html">Chilies,
                                                            Garlic, Lemon & Ginger</a>

                                                        <a class="dropdown-item" href="shop-left-sidebar.html">Cut
                                                            Vegetables & Salads</a>

                                                        <a class="dropdown-item" href="shop-left-sidebar.html">Gourd,
                                                            Cucumber & Pumpkin</a>

                                                        <a class="dropdown-item" href="shop-left-sidebar.html">Onions,
                                                            Potatoes & Tomatoes</a>

                                                        <a href="shop-left-sidebar.html" class="dropdown-item">Peas &
                                                            Corn</a>
                                                    </div>

                                                    <div class="dropdown-column col-xl-3">
                                                        <h5 class="dropdown-header">Exotic Vegetables</h5>
                                                        <a class="dropdown-item" href="shop-left-sidebar.html">Asparagus
                                                            & Artichokes</a>

                                                        <a class="dropdown-item" href="shop-left-sidebar.html">Avocados
                                                            & Peppers</a>

                                                        <a class="dropdown-item" href="shop-left-sidebar.html">Broccoli
                                                            & Zucchini</a>

                                                        <a class="dropdown-item" href="shop-left-sidebar.html">Celery,
                                                            Fennel & Leeks</a>

                                                        <a class="dropdown-item" href="shop-left-sidebar.html">Chilies &
                                                            Lime</a>
                                                    </div>

                                                    <div class="dropdown-column dropdown-column-img col-3"></div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="javascript:void(0)"
                                                data-bs-toggle="dropdown">Blog</a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="blog-detail.html">Blog Detail</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="blog-grid.html">Blog Grid</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="blog-list.html">Blog List</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="nav-item dropdown new-nav-item">
                                            <label class="new-dropdown">New</label>
                                            <a class="nav-link dropdown-toggle" href="javascript:void(0)"
                                                data-bs-toggle="dropdown">Pages</a>
                                            <ul class="dropdown-menu">
                                                <li class="sub-dropdown-hover">
                                                    <a class="dropdown-item" href="javascript:void(0)">Email
                                                        Template <span class="new-text"><i
                                                                class="fa-solid fa-bolt-lightning"></i></span></a>
                                                    <ul class="sub-menu">
                                                        <li>
                                                            <a
                                                                href="../email-templete/abandonment-email.html">Abandonment</a>
                                                        </li>
                                                        <li>
                                                            <a href="../email-templete/offer-template.html">Offer
                                                                Template</a>
                                                        </li>
                                                        <li>
                                                            <a href="../email-templete/order-success.html">Order
                                                                Success</a>
                                                        </li>
                                                        <li>
                                                            <a href="../email-templete/reset-password.html">Reset
                                                                Password</a>
                                                        </li>
                                                        <li>
                                                            <a href="../email-templete/welcome.html">Welcome
                                                                template</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="sub-dropdown-hover">
                                                    <a class="dropdown-item" href="javascript:void(0)">Invoice
                                                        Template <span class="new-text"><i
                                                                class="fa-solid fa-bolt-lightning"></i></span></a>
                                                    <ul class="sub-menu">
                                                        <li>
                                                            <a href="../invoice/invoice-1.html">Invoice 1</a>
                                                        </li>

                                                        <li>
                                                            <a href="../invoice/invoice-2.html">Invoice 2</a>
                                                        </li>

                                                        <li>
                                                            <a href="../invoice/invoice-3.html">Invoice 3</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="404.html">404</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="about-us.html">About Us</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="cart.html">Cart</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="contact-us.html">Contact</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="checkout.html">Checkout</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="coming-soon.html">Coming Soon</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="compare.html">Compare</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="faq.html">Faq</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="order-success.html">Order
                                                        Success</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="order-tracking.html">Order
                                                        Tracking</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="otp.html">OTP</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="search.html">Search</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="user-dashboard.html">User
                                                        Dashboard</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="wishlist.html">Wishlist</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="javascript:void(0)"
                                                data-bs-toggle="dropdown">Seller</a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="seller-become.html">Become a
                                                        Seller</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="seller-dashboard.html">Seller
                                                        Dashboard</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="seller-detail.html">Seller Detail</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="seller-detail-2.html">Seller Detail
                                                        2</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="seller-grid.html">Seller Grid</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="seller-grid-2.html">Seller Grid 2</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="rightside-menu">
                            <ul class="option-list-2">
                                <li>
                                    <a href="javascript:void(0)" class="header-icon search-box search-icon">
                                        <i class="iconly-Search icli"></i>
                                    </a>
                                </li>

                                <li>
                                    <a href="compare.html" class="header-icon">
                                        <small class="badge-number badge-light">2</small>
                                        <i class="iconly-Swap icli"></i>
                                    </a>
                                </li>

                                <li class="onhover-dropdown">
                                    <a href="javascript:void(0)" class="header-icon swap-icon">
                                        <i class="iconly-Heart icli"></i>
                                    </a>

                                    <div class="onhover-div">
                                        <ul class="cart-list">
                                            <li>
                                                <div class="drop-cart">
                                                    <a href="product-left-thumbnail.html" class="drop-image">
                                                        <img src="{{ asset('frontend/assets/images/vegetable/product/1.png') }}"
                                                            class="blur-up lazyload" alt="">
                                                    </a>

                                                    <div class="drop-contain">
                                                        <a href="product-left-thumbnail.html">
                                                            <h5>Fantasy Crunchy Choco Chip Cookies</h5>
                                                        </a>
                                                        <h6><span>1 x</span> $80.58</h6>
                                                        <button class="close-button">
                                                            <i class="fa-solid fa-xmark"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="drop-cart">
                                                    <a href="product-left-thumbnail.html" class="drop-image">
                                                        <img src="{{ asset('frontend/assets/images/vegetable/product/2.png') }}"
                                                            class="blur-up lazyload" alt="">
                                                    </a>

                                                    <div class="drop-contain">
                                                        <a href="product-left-thumbnail.html">
                                                            <h5>Peanut Butter Bite Premium Butter Cookies 600 g</h5>
                                                        </a>
                                                        <h6><span>1 x</span> $25.68</h6>
                                                        <button class="close-button">
                                                            <i class="fa-solid fa-xmark"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>

                                        <div class="price-box">
                                            <h5>Price :</h5>
                                            <h4 class="theme-color fw-bold">$106.58</h4>
                                        </div>

                                        <div class="button-group">
                                            <a href="cart.html" class="btn btn-sm cart-button">View Cart</a>
                                            <a href="checkout.html" class="btn btn-sm cart-button theme-bg-color
                                                    text-white">Checkout</a>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <a href="cart.html" class="header-icon bag-icon">
                                        <small class="badge-number badge-light">2</small>
                                        <i class="iconly-Bag-2 icli"></i>
                                    </a>
                                </li>
                            </ul>

                            <a href="user-dashboard.html" class="user-box">
                                <span class="header-icon">
                                    <i class="iconly-Profile icli"></i>
                                </span>
                                <div class="user-name">
                                    <h6 class="text-content">My Account</h6>
                                    <h4 class="mt-1">Jennifer V. Ward</h4>
                                </div>
                            </a>

                            <a target="_blank" class="btn mobile-app d-xxl-flex d-none"
                                href="https://play.google.com/store/games?utm_source=apac_med&utm_medium=hasem&utm_content=Oct0121&utm_campaign=Evergreen&pcampaignid=MKT-EDR-apac-in-1003227-med-hasem-py-Evergreen-Oct0121-Text_Search_BKWS-BKWS%7CONSEM_kwid_43700065205026415_creativeid_535350509927_device_c&gclid=Cj0KCQjw8uOWBhDXARIsAOxKJ2H1K3VqdJFHodt0-XSnQzcuOuTP-s2aPBE6lG0QVOf8D5cJBsB-DxQaAkNAEALw_wcB&gclsrc=aw.ds">
                                <div class="mobile-image">
                                    <img src="{{ asset('frontend/assets/images/icon/mobile.png') }}" class="img-fluid blur-up lazyload"
                                        alt="">
                                </div>

                                <div class="mobile-name">
                                    <h4>Download App</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
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

    <!-- Home Section Start -->
    <section class="home-section pt-2">
        <div class="container-fluid-lg">
            <div class="row g-4">
                <div class="col-xl-8 ratio_65">
                    <div class="home-contain h-100">
                        <div class="h-100">
                            <img src="{{ asset('frontend/assets/images/vegetable/banner/1.jpg') }}" class="bg-img blur-up lazyload" alt="">
                        </div>
                        <div class="home-detail p-center-left w-75">
                            <div>
                                <h6>Exclusive offer <span>30% Off</span></h6>
                                <h1 class="text-uppercase">Stay home & delivered your <span class="daily">Daily
                                        Needs</span></h1>
                                <p class="w-75 d-none d-sm-block">Vegetables contain many vitamins and minerals that are
                                    good for your health.</p>
                                <button onclick="location.href = 'shop-left-sidebar.html';"
                                    class="btn btn-animation mt-xxl-4 mt-2 home-button mend-auto">Shop Now <i
                                        class="fa-solid fa-right-long icon"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 ratio_65">
                    <div class="row g-4">
                        <div class="col-xl-12 col-md-6">
                            <div class="home-contain">
                                <img src="{{ asset('frontend/assets/images/vegetable/banner/2.jpg') }}" class="bg-img blur-up lazyload"
                                    alt="">
                                <div class="home-detail p-center-left home-p-sm w-75">
                                    <div>
                                        <h2 class="mt-0 text-danger">45% <span class="discount text-title">OFF</span>
                                        </h2>
                                        <h3 class="theme-color">Nut Collection</h3>
                                        <p class="w-75">We deliver organic vegetables & fruits</p>
                                        <a href="shop-left-sidebar.html" class="shop-button">Shop Now <i
                                                class="fa-solid fa-right-long"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-12 col-md-6">
                            <div class="home-contain">
                                <img src="{{ asset('frontend/assets/images/vegetable/banner/3.jpg') }}" class="bg-img blur-up lazyload"
                                    alt="">
                                <div class="home-detail p-center-left home-p-sm w-75">
                                    <div>
                                        <h3 class="mt-0 theme-color fw-bold">Healthy Food</h3>
                                        <h4 class="text-danger">Organic Market</h4>
                                        <p class="organic">Start your daily shopping with some Organic food</p>
                                        <a href="shop-left-sidebar.html" class="shop-button">Shop Now <i
                                                class="fa-solid fa-right-long"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home Section End -->

    <!-- Banner Section Start -->
    <section class="banner-section banner-small ratio_65">
        <div class="container-fluid-lg">
            <div class="slider-4-banner no-arrow slick-height">
                <div>
                    <div class=" banner-contain-3 hover-effect">
                        <a href="javascript:void(0)">
                            <img src="{{ asset('frontend/assets/images/grocery/banner/2.jpg') }}" class="bg-img blur-up lazyload" alt="">
                        </a>
                        <div class="banner-detail p-center-left w-75 banner-p-sm mend-auto">
                            <div>
                                <h5 class="fw-light mb-2">50% Discount</h5>
                                <h4 class="fw-bold mb-0">Summer Ice Cream</h4>
                                <button onclick="location.href = 'shop-left-sidebar.html';"
                                    class="btn shop-now-button mt-3 ps-0 mend-auto theme-color fw-bold">Shop Now <i
                                        class="fa-solid fa-chevron-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="banner-contain-3 hover-effect">
                        <a href="javascript:void(0)">
                            <img src="{{ asset('frontend/assets/images/grocery/banner/3.jpg') }}" class="img-fluid bg-img" alt="">
                        </a>
                        <div class="banner-detail p-center-left w-75 banner-p-sm mend-auto">
                            <div>
                                <h5 class="fw-light mb-2">Today Special</h5>
                                <h4 class="fw-bold mb-0">Fruits Juice Series</h4>
                                <button onclick="location.href = 'shop-left-sidebar.html';"
                                    class="btn shop-now-button mt-3 ps-0 mend-auto theme-color fw-bold">Shop Now <i
                                        class="fa-solid fa-chevron-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="banner-contain-3 hover-effect">
                        <a href="javascript:void(0)">
                            <img src="{{ asset('frontend/assets/images/grocery/banner/4.jpg') }}" class="blur-up lazyload bg-img" alt="">
                        </a>
                        <div class="banner-detail p-center-left w-75 banner-p-sm mend-auto">
                            <div>
                                <h5 class="fw-light mb-2">Combo Offer</h5>
                                <h4 class="fw-bold mb-0">Eat Healthy Be Healthy </h4>
                                <button onclick="location.href = 'shop-left-sidebar.html';"
                                    class="btn shop-now-button mt-3 ps-0 mend-auto theme-color fw-bold">Shop Now <i
                                        class="fa-solid fa-chevron-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="banner-contain-3 hover-effect">
                        <a href="javascript:void(0)">
                            <img src="{{ asset('frontend/assets/images/grocery/banner/5.jpg') }}" class="blur-up lazyload bg-img" alt="">
                        </a>
                        <div class="banner-detail p-center-left w-75 banner-p-sm mend-auto">
                            <div>
                                <h5 class="fw-light mb-2">Amazing Deals</h5>
                                <h4 class="fw-bold mb-0">As Fresh As Fruit </h4>
                                <button onclick="location.href = 'shop-left-sidebar.html';"
                                    class="btn shop-now-button mt-3 ps-0 mend-auto theme-color fw-bold">Shop Now <i
                                        class="fa-solid fa-chevron-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->

    <!-- Category Section Start -->
    <section class="category-section-3">
        <div class="container-fluid-lg">
            <div class="title">
                <h2>Shop By Categories</h2>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="category-slider-1 arrow-slider wow fadeInUp">
                        <div>
                            <div class="category-box-list">
                                <a href="shop-left-sidebar.html" class="category-name">
                                    <h4>Fashion</h4>
                                    <h6>25 items</h6>
                                </a>
                                <div class="category-box-view">
                                    <a href="shop-left-sidebar.html">
                                        <img src="{{ asset('frontend/assets/images/grocery/category/1.png') }}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>
                                    <button onclick="location.href = 'shop-left-sidebar.html';" class="btn shop-button">
                                        <span>Shop Now</span>
                                        <i class="fas fa-angle-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="category-box-list">
                                <a href="shop-left-sidebar.html" class="category-name">
                                    <h4>Beauty</h4>
                                    <h6>20 items</h6>
                                </a>
                                <div class="category-box-view">
                                    <a href="shop-left-sidebar.html">
                                        <img src="{{ asset('frontend/assets/images/grocery/category/2.png') }}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>
                                    <button onclick="location.href = 'shop-left-sidebar.html';" class="btn shop-button">
                                        <span>Shop Now</span>
                                        <i class="fas fa-angle-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="category-box-list">
                                <a href="shop-left-sidebar.html" class="category-name">
                                    <h4>Accessories</h4>
                                    <h6>14 items</h6>
                                </a>
                                <div class="category-box-view">
                                    <a href="shop-left-sidebar.html">
                                        <img src="{{ asset('frontend/assets/images/grocery/category/3.png') }}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>
                                    <button onclick="location.href = 'shop-left-sidebar.html';" class="btn shop-button">
                                        <span>Shop Now</span>
                                        <i class="fas fa-angle-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="category-box-list">
                                <a href="shop-left-sidebar.html" class="category-name">
                                    <h4>Health</h4>
                                    <h6>43 items</h6>
                                </a>
                                <div class="category-box-view">
                                    <a href="shop-left-sidebar.html">
                                        <img src="{{ asset('frontend/assets/images/grocery/category/4.png') }}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>
                                    <button onclick="location.href = 'shop-left-sidebar.html';" class="btn shop-button">
                                        <span>Shop Now</span>
                                        <i class="fas fa-angle-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="category-box-list">
                                <a href="shop-left-sidebar.html" class="category-name">
                                    <h4>Stationery</h4>
                                    <h6>23 items</h6>
                                </a>
                                <div class="category-box-view">
                                    <a href="shop-left-sidebar.html">
                                        <img src="{{ asset('frontend/assets/images/grocery/category/5.png') }}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>
                                    <button onclick="location.href = 'shop-left-sidebar.html';" class="btn shop-button">
                                        <span>Shop Now</span>
                                        <i class="fas fa-angle-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="category-box-list">
                                <a href="shop-left-sidebar.html" class="category-name">
                                    <h4>Baby care</h4>
                                    <h6>54 items</h6>
                                </a>
                                <div class="category-box-view">
                                    <a href="shop-left-sidebar.html">
                                        <img src="{{ asset('frontend/assets/images/grocery/category/6.png') }}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>
                                    <button onclick="location.href = 'shop-left-sidebar.html';" class="btn shop-button">
                                        <span>Shop Now</span>
                                        <i class="fas fa-angle-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="category-box-list">
                                <a href="shop-left-sidebar.html" class="category-name">
                                    <h4>Electronics</h4>
                                    <h6>32 items</h6>
                                </a>
                                <div class="category-box-view">
                                    <a href="shop-left-sidebar.html">
                                        <img src="{{ asset('frontend/assets/images/grocery/category/7.png') }}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>
                                    <button onclick="location.href = 'shop-left-sidebar.html';" class="btn shop-button">
                                        <span>Shop Now</span>
                                        <i class="fas fa-angle-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="category-box-list">
                                <a href="shop-left-sidebar.html" class="category-name">
                                    <h4>Sports</h4>
                                    <h6>29 items</h6>
                                </a>
                                <div class="category-box-view">
                                    <a href="shop-left-sidebar.html">
                                        <img src="{{ asset('frontend/assets/images/grocery/category/8.png') }}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>
                                    <button onclick="location.href = 'shop-left-sidebar.html';" class="btn shop-button">
                                        <span>Shop Now</span>
                                        <i class="fas fa-angle-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="category-box-list">
                                <a href="shop-left-sidebar.html" class="category-name">
                                    <h4>Fashion</h4>
                                    <h6>25 items</h6>
                                </a>
                                <div class="category-box-view">
                                    <a href="shop-left-sidebar.html">
                                        <img src="{{ asset('frontend/assets/images/grocery/category/1.png') }}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>
                                    <button onclick="location.href = 'shop-left-sidebar.html';" class="btn shop-button">
                                        <span>Shop Now</span>
                                        <i class="fas fa-angle-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Category Section End -->

    <!-- Product Fruit & Vegetables Section Start -->
    <section class="product-section-3">
        <div class="container-fluid-lg">
            <div class="title">
                <h2>Fruits & Vegetables</h2>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="slider-7_1 arrow-slider img-slider">
                        <div>
                            <div class="product-box-4 wow fadeInUp">
                                <div class="product-image product-image-2">
                                    <a href="product-left-thumbnail.html">
                                        <img src="{{ asset('frontend/assets/images/grocery/product/fruits-vegetables/1.png') }}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="javascript:void(0)" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name text-title">Bell pepper</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>

                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus"
                                                    data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus"
                                                    data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.05s">
                                <div class="product-image product-image-2">
                                    <a href="product-left-thumbnail.html">
                                        <img src="{{ asset('frontend/assets/images/grocery/product/fruits-vegetables/2.png') }}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="javascript:void(0)" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name text-title">Eggplant</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus"
                                                    data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus"
                                                    data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="product-image product-image-2">
                                    <a href="product-left-thumbnail.html">
                                        <img src="{{ asset('frontend/assets/images/grocery/product/fruits-vegetables/3.png') }}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="javascript:void(0)" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name text-title">Potato</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus"
                                                    data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus"
                                                    data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.15s">
                                <div class="product-image product-image-2">
                                    <a href="product-left-thumbnail.html">
                                        <img src="{{ asset('frontend/assets/images/grocery/product/fruits-vegetables/4.png') }}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="javascript:void(0)" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name text-title">Onion</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus"
                                                    data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus"
                                                    data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.2s">
                                <div class="product-image product-image-2">
                                    <a href="product-left-thumbnail.html">
                                        <img src="{{ asset('frontend/assets/images/grocery/product/fruits-vegetables/5.png') }}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="javascript:void(0)" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name text-title">Baby Chili</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus"
                                                    data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus"
                                                    data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.25s">
                                <div class="product-image product-image-2">
                                    <a href="product-left-thumbnail.html">
                                        <img src="{{ asset('frontend/assets/images/grocery/product/fruits-vegetables/6.png') }}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="javascript:void(0)" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name text-title">Broccoli</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus"
                                                    data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus"
                                                    data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="product-image product-image-2">
                                    <a href="product-left-thumbnail.html">
                                        <img src="{{ asset('frontend/assets/images/grocery/product/fruits-vegetables/7.png') }}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="javascript:void(0)" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name text-title">Apple</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus"
                                                    data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus"
                                                    data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.35s">
                                <div class="product-image product-image-2">
                                    <a href="product-left-thumbnail.html">
                                        <img src="{{ asset('frontend/assets/images/grocery/product/fruits-vegetables/8.png') }}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="javascript:void(0)" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name text-title">Strawberry</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus"
                                                    data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus"
                                                    data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Fruit & Vegetables Section End -->

    <!-- Banner Section Start -->
    <section class="bank-section overflow-hidden">
        <div class="container-fluid-lg">
            <div class="title">
                <h2>Bank & Wallet Offers</h2>
            </div>
            <div class="slider-bank-3 arrow-slider slick-height">
                <div>
                    <div class="bank-offer">
                        <div class="bank-header">
                            <div class="bank-left w-100">
                                <div class="bank-image">
                                    <img src="{{ asset('frontend/assets/images/grocery/bank/name/1.png') }}" class="img-fluid" alt="">
                                </div>
                                <div class="bank-name">
                                    <h2>GET 10% OFF</h2>
                                    <h5 class="discount text-content">When you spend $20</h5>
                                    <h5 class="valid text-content">Valid for 30 days</h5>
                                </div>
                            </div>

                            <div class="bank-right w-100">
                                <img src="{{ asset('frontend/assets/images/grocery/bank/price/1.svg') }}" class="img-fluid" alt="">
                            </div>
                        </div>

                        <div class="bank-footer bank-footer-1">
                            <h4>Code :
                                <input id="clipboardexample" value="MULTICART" />
                            </h4>
                            <button type="button" class="bank-coupon btn" id="copyText" data-clipboard-action="copy"
                                data-clipboard-target="#clipboardexample">Copy Code</button>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="bank-offer">
                        <div class="bank-header">
                            <div class="bank-left w-100">
                                <div class="bank-image">
                                    <img src="{{ asset('frontend/assets/images/grocery/bank/name/2.png') }}" class="img-fluid" alt="">
                                </div>
                                <div class="bank-name">
                                    <h2 class="bank-offer-2">GET 10% OFF</h2>
                                    <h5 class="discount text-content">When you spend $20</h5>
                                    <h5 class="valid text-content">Valid for 30 days</h5>
                                </div>
                            </div>

                            <div class="bank-right w-100">
                                <img src="{{ asset('frontend/assets/images/grocery/bank/price/2.svg') }}" class="img-fluid" alt="">
                            </div>
                        </div>

                        <div class="bank-footer bank-footer-2">
                            <h4>Code :
                                <input id="clipboardexample1" value="MULTICART" />
                            </h4>
                            <button class="bank-coupon btn" id="copyText1">Copy Code</button>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="bank-offer">
                        <div class="bank-header">
                            <div class="bank-left w-100">
                                <div class="bank-image">
                                    <img src="{{ asset('frontend/assets/images/grocery/bank/name/3.png') }}" class="img-fluid" alt="">
                                </div>
                                <div class="bank-name">
                                    <h2 class="bank-offer-3">GET 10% OFF</h2>
                                    <h5 class="discount text-content">When you spend $20</h5>
                                    <h5 class="valid text-content">Valid for 30 days</h5>
                                </div>
                            </div>

                            <div class="bank-right w-100">
                                <img src="{{ asset('frontend/assets/images/grocery/bank/price/3.svg') }}" class="img-fluid" alt="">
                            </div>
                        </div>

                        <div class="bank-footer bank-footer-3">
                            <h4>Code :
                                <input id="clipboardexample2" value="MULTICART" />
                            </h4>
                            <button class="bank-coupon btn" id="copyText2">Copy Code</button>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="bank-offer">
                        <div class="bank-header">
                            <div class="bank-left w-100">
                                <div class="bank-image">
                                    <img src="{{ asset('frontend/assets/images/grocery/bank/name/1.png') }}" class="img-fluid" alt="">
                                </div>
                                <div class="bank-name">
                                    <h2>GET 10% OFF</h2>
                                    <h5 class="discount text-content">When you spend $20</h5>
                                    <h5 class="valid text-content">Valid for 30 days</h5>
                                </div>
                            </div>

                            <div class="bank-right w-100">
                                <img src="{{ asset('frontend/assets/images/grocery/bank/price/1.svg') }}" class="img-fluid" alt="">
                            </div>
                        </div>

                        <div class="bank-footer bank-footer-1">
                            <h4>Code :
                                <input id="clipboardexample3" value="MULTICART" />
                            </h4>
                            <button class="bank-coupon btn" id="copyText3">Copy Code</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->

    <!-- Deal Section Start -->
    <section class="product-section product-section-3">
        <div class="container-fluid-lg">
            <div class="title">
                <h2>Top Selling Items</h2>
            </div>
            <div class="row g-sm-4 g-3">
                <div class="col-xxl-4 col-lg-5 order-lg-2">
                    <div class="product-bg-image wow fadeInUp">
                        <div class="product-title product-warning">
                            <h2>Special Offer</h2>
                        </div>

                        <div class="product-box-4 product-box-3 rounded-0">
                            <div class="deal-box">
                                <div class="circle-box">
                                    <div class="shape-circle">
                                        <img src="{{ asset('frontend/assets/images/grocery/circle.svg') }}" class="blur-up lazyload" alt="">
                                        <div class="shape-text">
                                            <h6>Hot <br> Deal</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="top-selling-slider product-arrow">
                                <div>
                                    <div class="product-image">
                                        <a href="product-left-thumbnail.html">
                                            <img src="{{ asset('frontend/assets/images/grocery/deal/big.png') }}"
                                                class="img-fluid product-image blur-up lazyload" alt="">
                                        </a>

                                        <ul class="option">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#view">
                                                    <i class="iconly-Show icli"></i>
                                                </a>
                                            </li>
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                <a href="javascript:void(0)" class="notifi-wishlist">
                                                    <i class="iconly-Heart icli"></i>
                                                </a>
                                            </li>
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                <a href="compare.html">
                                                    <i class="iconly-Swap icli"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="product-detail text-center">
                                        <ul class="rating justify-content-center">
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star"></i>
                                            </li>
                                        </ul>
                                        <a href="product-left-thumbnail.html">
                                            <h3 class="name w-100 mx-auto text-center">Unisex Small Trolley
                                                Suitcase</h3>
                                        </a>
                                        <h3 class="price theme-color d-flex justify-content-center">
                                            $65.21<del class="delete-price">$71.25</del>
                                        </h3>
                                        <div class="progress custom-progressbar">
                                            <div class="progress-bar" style="width: 79%" role="progressbar"
                                                aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <h5 class="text-content">Solid : <span class="text-dark">30 items</span>
                                            <span class="ms-auto text-content">Hurry up offer end in</span></h5>

                                        <div class="timer timer-2 ms-0 my-4" id="clockdiv-1" data-hours="1"
                                            data-minutes="2" data-seconds="3">
                                            <ul class="d-flex justify-content-center">
                                                <li>
                                                    <div class="counter">
                                                        <div class="days">
                                                            <h6></h6>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="counter">
                                                        <div class="hours">
                                                            <h6></h6>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="counter">
                                                        <div class="minutes">
                                                            <h6></h6>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="counter">
                                                        <div class="seconds">
                                                            <h6></h6>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="product-image">
                                        <a href="product-left-thumbnail.html">
                                            <img src="{{ asset('frontend/assets/images/grocery/deal/big.png') }}"
                                                class="img-fluid product-image blur-up lazyload" alt="">
                                        </a>

                                        <ul class="option">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#view">
                                                    <i class="iconly-Show icli"></i>
                                                </a>
                                            </li>
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                <a href="javascript:void(0)" class="notifi-wishlist">
                                                    <i class="iconly-Heart icli"></i>
                                                </a>
                                            </li>
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                <a href="compare.html">
                                                    <i class="iconly-Swap icli"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="product-detail text-center">
                                        <ul class="rating justify-content-center">
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star"></i>
                                            </li>
                                        </ul>
                                        <a href="product-left-thumbnail.html">
                                            <h3 class="name w-100 mx-auto text-center text-title">Unisex Small Trolley
                                                Suitcase</h3>
                                        </a>
                                        <h3 class="price theme-color d-flex justify-content-center">
                                            $65.21<del class="delete-price">$71.25</del>
                                        </h3>
                                        <div class="progress custom-progressbar">
                                            <div class="progress-bar" style="width: 41%" role="progressbar"
                                                aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <h5 class="text-content">Solid : <span class="text-dark">30 items</span>
                                            <span class="ms-auto text-content">Hurry up offer end in</span></h5>

                                        <div class="timer timer-2 ms-0 my-4" id="clockdiv-2" data-hours="1"
                                            data-minutes="2" data-seconds="3">
                                            <ul class="d-flex justify-content-center">
                                                <li>
                                                    <div class="counter">
                                                        <div class="days">
                                                            <h6></h6>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="counter">
                                                        <div class="hours">
                                                            <h6></h6>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="counter">
                                                        <div class="minutes">
                                                            <h6></h6>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="counter">
                                                        <div class="seconds">
                                                            <h6></h6>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-8 col-lg-7 order-lg-1">
                    <div class="slider-5_2 img-slider">
                        <div>
                            <div class="product-box-4 wow fadeInUp">
                                <div class="product-image product-image-2">
                                    <a href="product-left-thumbnail.html">
                                        <img src="{{ asset('frontend/assets/images/grocery/deal/1.png') }}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="javascript:void(0)" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name text-title">Potato Chips</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus"
                                                    data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus"
                                                    data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.05s">
                                <div class="product-image product-image-2">
                                    <a href="product-left-thumbnail.html">
                                        <img src="{{ asset('frontend/assets/images/grocery/deal/2.png') }}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="javascript:void(0)" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name text-title">Body Lotion</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus"
                                                    data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus"
                                                    data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp">
                                <div class="product-image product-image-2">
                                    <a href="product-left-thumbnail.html">
                                        <img src="{{ asset('frontend/assets/images/grocery/deal/3.png') }}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="javascript:void(0)" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name text-title">Nithara Coffee</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus"
                                                    data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus"
                                                    data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.05s">
                                <div class="product-image product-image-2">
                                    <a href="product-left-thumbnail.html">
                                        <img src="{{ asset('frontend/assets/images/grocery/deal/4.png') }}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="javascript:void(0)" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name text-title">Cow Ghee</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus"
                                                    data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus"
                                                    data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp">
                                <div class="product-image product-image-2">
                                    <a href="product-left-thumbnail.html">
                                        <img src="{{ asset('frontend/assets/images/grocery/deal/5.png') }}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="javascript:void(0)" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name text-title">Fresh Cilantro</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus"
                                                    data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus"
                                                    data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.05s">
                                <div class="product-image product-image-2">
                                    <a href="product-left-thumbnail.html">
                                        <img src="{{ asset('frontend/assets/images/grocery/deal/6.png') }}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="javascript:void(0)" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name text-title">Sandwich Bread</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus"
                                                    data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus"
                                                    data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp">
                                <div class="product-image product-image-2">
                                    <a href="product-left-thumbnail.html">
                                        <img src="{{ asset('frontend/assets/images/grocery/deal/7.png') }}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="javascript:void(0)" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name text-title">Popcorn</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus"
                                                    data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus"
                                                    data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.05s">
                                <div class="product-image product-image-2">
                                    <a href="product-left-thumbnail.html">
                                        <img src="{{ asset('frontend/assets/images/grocery/deal/5.png') }}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="javascript:void(0)" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name text-title">Fresh Cilantro</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus"
                                                    data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus"
                                                    data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp">
                                <div class="product-image product-image-2">
                                    <a href="product-left-thumbnail.html">
                                        <img src="{{ asset('frontend/assets/images/grocery/deal/8.png') }}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="javascript:void(0)" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name text-title">Fresh Eggs</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus"
                                                    data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus"
                                                    data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.05s">
                                <div class="product-image product-image-2">
                                    <a href="product-left-thumbnail.html">
                                        <img src="{{ asset('frontend/assets/images/grocery/deal/9.png') }}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="javascript:void(0)" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name text-title">Tomato Ketchup</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus"
                                                    data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus"
                                                    data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Deal Section End -->

    <!-- Offer Section Start -->
    <section class="offer-section">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="offer-box hover-effect">
                        <h2><span>FREE GIFT ANY ORDER</span> 70% oFF</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Offer Section End -->


    <!-- Product Breakfast & Dairy Section Start -->
    <section class="product-section-4">
        <div class="container-fluid-lg">
            <div class="title">
                <h2>Breakfast & Dairy</h2>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="slider-7_1 arrow-slider img-slider">
                        <div>
                            <div class="product-box-4 wow fadeInUp">
                                <div class="product-image product-image-2">
                                    <a href="product-left-thumbnail.html">
                                        <img src="{{ asset('frontend/assets/images/grocery/product/breakfast/1.png') }}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="javascript:void(0)" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name text-title">Bell pepper</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus"
                                                    data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus"
                                                    data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.05s">
                                <div class="product-image product-image-2">
                                    <a href="product-left-thumbnail.html">
                                        <img src="{{ asset('frontend/assets/images/grocery/product/breakfast/2.png') }}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="javascript:void(0)" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name text-title">Grassmilk</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus"
                                                    data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus"
                                                    data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="product-image product-image-2">
                                    <a href="product-left-thumbnail.html">
                                        <img src="{{ asset('frontend/assets/images/grocery/product/breakfast/3.png') }}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="javascript:void(0)" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name text-title">Kellogg's choco </h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus"
                                                    data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus"
                                                    data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.15s">
                                <div class="product-image product-image-2">
                                    <a href="product-left-thumbnail.html">
                                        <img src="{{ asset('frontend/assets/images/grocery/product/breakfast/4.png') }}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="javascript:void(0)" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name text-title">Paneer</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus"
                                                    data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus"
                                                    data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.2s">
                                <div class="product-image product-image-2">
                                    <a href="product-left-thumbnail.html">
                                        <img src="{{ asset('frontend/assets/images/grocery/product/breakfast/5.png') }}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="javascript:void(0)" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name text-title">Bournvita</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus"
                                                    data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus"
                                                    data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.25s">
                                <div class="product-image product-image-2">
                                    <a href="product-left-thumbnail.html">
                                        <img src="{{ asset('frontend/assets/images/grocery/product/breakfast/6.png') }}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="javascript:void(0)" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name text-title">Tulsi</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus"
                                                    data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus"
                                                    data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="product-image product-image-2">
                                    <a href="product-left-thumbnail.html">
                                        <img src="{{ asset('frontend/assets/images/grocery/product/breakfast/7.png') }}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="javascript:void(0)" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name text-title">Kellogg's Muesli</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus"
                                                    data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus"
                                                    data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.35s">
                                <div class="product-image product-image-2">
                                    <a href="product-left-thumbnail.html">
                                        <img src="{{ asset('frontend/assets/images/grocery/product/breakfast/8.png') }}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="javascript:void(0)" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name text-title">Low Fat Milk</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus"
                                                    data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus"
                                                    data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Breakfast & Dairy Section End -->

    <!-- Banner Section Start -->
    <section class="ratio_60">
        <div class="container-fluid-lg">
            <div class="row g-3">
                <div class="col-xxl-3 col-sm-6">
                    <a href="shop-left-sidebar.html" class="banner-contain-2 hover-effect">
                        <img src="{{ asset('forntend/assets/images/cake/banner/5.jpg') }}" class="bg-img blur-up lazyload" alt="">
                        <div class="banner-detail p-top-left">
                            <div>
                                <div class="banner-detail-box mb-md-3 mb-1">
                                    <h6 class="text-danger">5% OFF</h6>
                                    <h4 class="mt-2">New Items</h4>
                                    <h6 class="mt-2 text-content">Daily Essentials</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-xxl-3 col-sm-6">
                    <a href="shop-left-sidebar.html" class="banner-contain-2 hover-effect">
                        <img src="{{ asset('forntend/assets/images/cake/banner/6.jpg') }}" class="bg-img blur-up lazyload" alt="">
                        <div class="banner-detail p-top-left">
                            <div>
                                <div class="banner-detail-box mb-md-3 mb-1">
                                    <h6 class="text-danger">5% OFF</h6>
                                    <h4 class="mt-2">Save More</h4>
                                    <h6 class="mt-2 text-content">Fresh Toast Rusk</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-xxl-3 col-sm-6">
                    <a href="shop-left-sidebar.html" class="banner-contain-2 hover-effect">
                        <img src="{{ asset('forntend/assets/images/cake/banner/7.jpg') }}" class="bg-img blur-up lazyload" alt="">
                        <div class="banner-detail p-top-left">
                            <div>
                                <div class="banner-detail-box mb-md-3 mb-1">
                                    <h6 class="text-danger">5% OFF</h6>
                                    <h4 class="mt-2">Fresh Every Day!</h4>
                                    <h6 class="mt-2 text-content">Delivered @ Home</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-xxl-3 col-sm-6">
                    <a href="shop-left-sidebar.html" class="banner-contain-2 hover-effect">
                        <img src="{{ asset('forntend/assets/images/cake/banner/8.jpg') }}" class="bg-img blur-up lazyload" alt="">
                        <div class="banner-detail p-top-left">
                            <div>
                                <div class="banner-detail-box mb-md-3 mb-1">
                                    <h6 class="text-danger">5% OFF</h6>
                                    <h4 class="mt-2">Hot Deals</h4>
                                    <h6 class="mt-2 text-content">Fresh Cake</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->

    <!-- Product Chemist Store Section Start -->
    <section class="product-section">
        <div class="container-fluid-lg">
            <div class="title">
                <h2>Chemist Store</h2>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="slider-7_1 arrow-slider img-slider">
                        <div>
                            <div class="product-box-4 wow fadeInUp">
                                <div class="product-image product-image-2">
                                    <a href="product-left-thumbnail.html">
                                        <img src="{{ asset('frontend/assets/images/grocery/product/chemist/1.png') }}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="javascript:void(0)" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name text-title">Hand Sanitizer</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus"
                                                    data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus"
                                                    data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.05s">
                                <div class="product-image product-image-2">
                                    <a href="product-left-thumbnail.html">
                                        <img src="{{ asset('frontend/assets/images/grocery/product/chemist/2.png') }}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="javascript:void(0)" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name text-title">Cotton Balls</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus"
                                                    data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus"
                                                    data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="product-image product-image-2">
                                    <a href="product-left-thumbnail.html">
                                        <img src="{{ asset('frontend/assets/images/grocery/product/chemist/3.png') }}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="javascript:void(0)" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name text-title">Vicks VapoRub</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus"
                                                    data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus"
                                                    data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.15s">
                                <div class="product-image product-image-2">
                                    <a href="product-left-thumbnail.html">
                                        <img src="{{ asset('frontend/assets/images/grocery/product/chemist/4.png') }}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="javascript:void(0)" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name text-title">Dettol Antiseptic</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus"
                                                    data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus"
                                                    data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.2s">
                                <div class="product-image product-image-2">
                                    <a href="product-left-thumbnail.html">
                                        <img src="{{ asset('frontend/assets/images/grocery/product/chemist/5.png') }}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="javascript:void(0)" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name text-title">Ear Buds</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus"
                                                    data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus"
                                                    data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.25s">
                                <div class="product-image product-image-2">
                                    <a href="product-left-thumbnail.html">
                                        <img src="{{ asset('frontend/assets/images/grocery/product/chemist/6.png') }}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="javascript:void(0)" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name text-title">Eno Lemon</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus"
                                                    data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus"
                                                    data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="product-image product-image-2">
                                    <a href="product-left-thumbnail.html">
                                        <img src="{{ asset('frontend/assets/images/grocery/product/chemist/7.png') }}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="javascript:void(0)" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name text-title">Savlon Antiseptic</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus"
                                                    data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus"
                                                    data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.35s">
                                <div class="product-image product-image-2">
                                    <a href="product-left-thumbnail.html">
                                        <img src="{{ asset('frontend/assets/images/grocery/product/chemist/8.png') }}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="javascript:void(0)" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name text-title">Strawberry</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus"
                                                    data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus"
                                                    data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Chemist Store Section End -->

    <!-- Banner Section Start -->
    <section class="banner-section">
        <div class="container-fluid-lg">
            <div class="row gy-lg-0 gy-3">
                <div class="col-lg-6">
                    <div class="banner-contain-3 hover-effect">
                        <div>
                            <img src="{{ asset('frontend/assets/images/grocery/banner/6.jpg') }}" class="bg-img blur-up lazyload" alt="">
                            <div
                                class="banner-detail banner-detail-2 text-dark p-center-left w-75 banner-p-sm position-relative mend-auto">
                                <div>
                                    <h2 class="text-great fw-normal text-danger">50% special offer</h2>
                                    <h3 class="mb-1 fw-bold">Chocolate Shake Back in <br class="d-sm-block d-none">
                                        Stock</h3>
                                    <h4 class="text-content">Offer Of the Week!</h4>
                                    <button class="btn btn-md theme-bg-color text-white mt-sm-3 mt-1 fw-bold mend-auto"
                                        onclick="location.href = 'shop-left-sidebar.html';">Shop Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="banner-contain-3 hover-effect">
                        <img src="{{ asset('frontend/assets/images/grocery/banner/7.jpg') }}" class="bg-img blur-up lazyload" alt="">
                        <div
                            class="banner-detail banner-detail-2 text-dark p-center-left w-75 banner-p-sm position-relative mend-auto">
                            <div>
                                <h2 class="text-great fw-normal text-danger">Special hot sale</h2>
                                <h3 class="mb-1 fw-bold">Healthy & Fresh Cool <br> Breakfast</h3>
                                <h4 class="text-content">Choose a Nutritious & Healthy Breakfast.</h4>
                                <button class="btn btn-md theme-bg-color text-white mt-sm-3 mt-1 fw-bold mend-auto"
                                    onclick="location.href = 'shop-left-sidebar.html';">Shop Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->

    <!-- Product Drinks Section Start -->
    <section class="product-section">
        <div class="container-fluid-lg">
            <div class="title">
                <h2>Drinks</h2>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="slider-7_1 arrow-slider img-slider">
                        <div>
                            <div class="product-box-4 wow fadeInUp">
                                <div class="product-image product-image-2">
                                    <a href="product-left-thumbnail.html">
                                        <img src="{{ asset('frontend/assets/images/grocery/product/drink/1.png') }}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="javascript:void(0)" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name text-title">Monster</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus"
                                                    data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus"
                                                    data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.05s">
                                <div class="product-image product-image-2">
                                    <a href="product-left-thumbnail.html">
                                        <img src="{{ asset('frontend/assets/images/grocery/product/drink/2.png') }}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="javascript:void(0)" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name text-title">Red Bull</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus"
                                                    data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus"
                                                    data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="product-image product-image-2">
                                    <a href="product-left-thumbnail.html">
                                        <img src="{{ asset('frontend/assets/images/grocery/product/drink/3.png') }}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="javascript:void(0)" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name text-title">Ginger ale</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus"
                                                    data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus"
                                                    data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.15s">
                                <div class="product-image product-image-2">
                                    <a href="product-left-thumbnail.html">
                                        <img src="{{ asset('frontend/assets/images/grocery/product/drink/4.png') }}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="javascript:void(0)" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name text-title">Spike</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus"
                                                    data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus"
                                                    data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.2s">
                                <div class="product-image product-image-2">
                                    <a href="product-left-thumbnail.html">
                                        <img src="{{ asset('frontend/assets/images/grocery/product/drink/5.png') }}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="javascript:void(0)" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name text-title">Mati Sparklng</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus"
                                                    data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus"
                                                    data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.25s">
                                <div class="product-image product-image-2">
                                    <a href="product-left-thumbnail.html">
                                        <img src="{{ asset('frontend/assets/images/grocery/product/drink/6.png') }}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="javascript:void(0)" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name text-title">Fanta</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus"
                                                    data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus"
                                                    data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="product-image product-image-2">
                                    <a href="product-left-thumbnail.html">
                                        <img src="{{ asset('frontend/assets/images/grocery/product/drink/7.png') }}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="javascript:void(0)" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name text-title">Coca Cola</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus"
                                                    data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus"
                                                    data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.35s">
                                <div class="product-image product-image-2">
                                    <a href="product-left-thumbnail.html">
                                        <img src="{{ asset('frontend/assets/images/grocery/product/drink/8.png') }}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="javascript:void(0)" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name text-title">Sprite</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus"
                                                    data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus"
                                                    data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Drinks Section End -->

    <!-- Product Grocery & Staples Section Start -->
    <section class="product-section">
        <div class="container-fluid-lg">
            <div class="title">
                <h2>Grocery & Staples</h2>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="slider-7_1 arrow-slider img-slider">
                        <div>
                            <div class="product-box-4 wow fadeInUp">
                                <div class="product-image product-image-2">
                                    <a href="product-left-thumbnail.html">
                                        <img src="{{ asset('frontend/assets/images/grocery/product/grocery/1.png') }}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="javascript:void(0)" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name text-title">Chakki Atta</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus"
                                                    data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus"
                                                    data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.05s">
                                <div class="product-image product-image-2">
                                    <a href="product-left-thumbnail.html">
                                        <img src="{{ asset('frontend/assets/images/grocery/product/grocery/2.png') }}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="javascript:void(0)" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name text-title">Fresh Rice</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus"
                                                    data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus"
                                                    data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="product-image product-image-2">
                                    <a href="product-left-thumbnail.html">
                                        <img src="{{ asset('frontend/assets/images/grocery/product/grocery/3.png') }}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="javascript:void(0)" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name text-title">Saffola oli</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus"
                                                    data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus"
                                                    data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.15s">
                                <div class="product-image product-image-2">
                                    <a href="product-left-thumbnail.html">
                                        <img src="{{ asset('frontend/assets/images/grocery/product/grocery/4.png') }}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="javascript:void(0)" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name text-title">Cow Ghee</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus"
                                                    data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus"
                                                    data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.2s">
                                <div class="product-image product-image-2">
                                    <a href="product-left-thumbnail.html">
                                        <img src="{{ asset('frontend/assets/images/grocery/product/grocery/5.png') }}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="javascript:void(0)" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name text-title">Icing Sugar</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus"
                                                    data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus"
                                                    data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.25s">
                                <div class="product-image product-image-2">
                                    <a href="product-left-thumbnail.html">
                                        <img src="{{ asset('frontend/assets/images/grocery/product/grocery/6.png') }}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="javascript:void(0)" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name text-title">Roasted Rava</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus"
                                                    data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus"
                                                    data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="product-image product-image-2">
                                    <a href="product-left-thumbnail.html">
                                        <img src="{{ asset('frontend/assets/images/grocery/product/grocery/7.png') }}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="javascript:void(0)" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name text-title">Maida</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus"
                                                    data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus"
                                                    data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.35s">
                                <div class="product-image product-image-2">
                                    <a href="product-left-thumbnail.html">
                                        <img src="{{ asset('frontend/assets/images/grocery/product/grocery/8.png') }}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="javascript:void(0)" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name text-title">kabuli Chana</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus"
                                                    data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus"
                                                    data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Grocery & Staples Section End -->

    <!-- Banner Section Start -->
    <section class="banner-section">
        <div class="container-fluid-lg">
            <div class="row gy-lg-0 gy-3">
                <div class="col-lg-8">
                    <div class="banner-contain-3 h-100 pt-sm-5 hover-effect">
                        <img src="{{ asset('frontend/assets/images/grocery/banner/8.png') }}" class="bg-img blur-up lazyload" alt="">
                        <div
                            class="banner-detail banner-p-sm p-center-right position-relative banner-minus-position banner-detail-deliver">
                            <div>
                                <h3 class="fw-bold banner-contain">Safe Delivery to the door</h3>
                                <h4 class="mb-sm-3 mb-2 delivery-contain">Make money on your terms. Anytime and anyhow.
                                </h4>
                                <ul class="banner-list">
                                    <li>
                                        <div class="delivery-box">
                                            <div class="check-icon">
                                                <i class="fa-solid fa-check"></i>
                                            </div>

                                            <div class="check-contain">
                                                <h5>Get live order tracking</h5>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="delivery-box">
                                            <div class="check-icon">
                                                <i class="fa-solid fa-check"></i>
                                            </div>

                                            <div class="check-contain">
                                                <h5>Get latest feature updates</h5>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <button class="btn theme-bg-color text-white mt-sm-4 mt-3 fw-bold"
                                    onclick="location.href = 'shop-left-sidebar.html';">Read More</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="banner-contain-3 pt-lg-4 h-100 hover-effect">
                        <a href="javascript:void(0)">
                            <img src="{{ asset('frontend/assets/images/grocery/banner/9.jpg') }}"
                                class="img-fluid social-image blur-up lazyload w-100" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->

    <!-- Product Personal Care Section Start -->
    <section class="product-section">
        <div class="container-fluid-lg">
            <div class="title">
                <h2>Personal Care</h2>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="slider-7_1 arrow-slider img-slider">
                        <div>
                            <div class="product-box-4 wow fadeInUp">
                                <div class="product-image product-image-2">
                                    <a href="product-left-thumbnail.html">
                                        <img src="{{ asset('frontend/assets/images/grocery/product/personal-care/1.png') }}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="javascript:void(0)" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name text-title">Dove men care</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus"
                                                    data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus"
                                                    data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.05s">
                                <div class="product-image product-image-2">
                                    <a href="product-left-thumbnail.html">
                                        <img src="{{ asset('frontend/assets/images/grocery/product/personal-care/2.png') }}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="javascript:void(0)" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name text-title">Santoor</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus"
                                                    data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus"
                                                    data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="product-image product-image-2">
                                    <a href="product-left-thumbnail.html">
                                        <img src="{{ asset('frontend/assets/images/grocery/product/personal-care/3.png') }}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="javascript:void(0)" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name text-title">Hand Wash</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus"
                                                    data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus"
                                                    data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.15s">
                                <div class="product-image product-image-2">
                                    <a href="product-left-thumbnail.html">
                                        <img src="{{ asset('frontend/assets/images/grocery/product/personal-care/4.png') }}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="javascript:void(0)" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name text-title">Whisper</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus"
                                                    data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus"
                                                    data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.2s">
                                <div class="product-image product-image-2">
                                    <a href="product-left-thumbnail.html">
                                        <img src="{{ asset('frontend/assets/images/grocery/product/personal-care/5.png') }}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="javascript:void(0)" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name text-title">Whisper</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus"
                                                    data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus"
                                                    data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.25s">
                                <div class="product-image product-image-2">
                                    <a href="product-left-thumbnail.html">
                                        <img src="{{ asset('frontend/assets/images/grocery/product/personal-care/6.png') }}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="javascript:void(0)" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name text-title">Hair Color</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus"
                                                    data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus"
                                                    data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="product-image product-image-2">
                                    <a href="product-left-thumbnail.html">
                                        <img src="{{ asset('frontend/assets/images/grocery/product/personal-care/7.png') }}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="javascript:void(0)" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name text-title">Face Wash</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus"
                                                    data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus"
                                                    data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.35s">
                                <div class="product-image product-image-2">
                                    <a href="product-left-thumbnail.html">
                                        <img src="{{ asset('frontend/assets/images/grocery/product/personal-care/8.png') }}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="javascript:void(0)" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name text-title">Hair Oil</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus"
                                                    data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus"
                                                    data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Personal Care Section End -->

    <!-- Product Kitchen & Dining Needs Section Start -->
    <section class="product-section">
        <div class="container-fluid-lg">
            <div class="title">
                <h2>Kitchen & Dining Needs</h2>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="slider-7_1 arrow-slider img-slider">
                        <div>
                            <div class="product-box-4 wow fadeInUp">
                                <div class="product-image product-image-2">
                                    <a href="product-left-thumbnail.html">
                                        <img src="{{ asset('frontend/assets/images/grocery/product/kichen/1.png') }}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="javascript:void(0)" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name text-title">Pressure Cooker</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus"
                                                    data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus"
                                                    data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.05s">
                                <div class="product-image product-image-2">
                                    <a href="product-left-thumbnail.html">
                                        <img src="{{ asset('frontend/assets/images/grocery/product/kichen/2.png') }}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="javascript:void(0)" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name text-title">Cup</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus"
                                                    data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus"
                                                    data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="product-image product-image-2">
                                    <a href="product-left-thumbnail.html">
                                        <img src="{{ asset('frontend/assets/images/grocery/product/kichen/3.png') }}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="javascript:void(0)" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name text-title">Blender</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus"
                                                    data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus"
                                                    data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.15s">
                                <div class="product-image product-image-2">
                                    <a href="product-left-thumbnail.html">
                                        <img src="{{ asset('frontend/assets/images/grocery/product/kichen/4.png') }}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="javascript:void(0)" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name text-title">Cutting Board</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus"
                                                    data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus"
                                                    data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.2s">
                                <div class="product-image product-image-2">
                                    <a href="product-left-thumbnail.html">
                                        <img src="{{ asset('frontend/assets/images/grocery/product/kichen/5.png') }}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="javascript:void(0)" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name text-title">Colander</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus"
                                                    data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus"
                                                    data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.25s">
                                <div class="product-image product-image-2">
                                    <a href="product-left-thumbnail.html">
                                        <img src="{{ asset('frontend/assets/images/grocery/product/kichen/6.png') }}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="javascript:void(0)" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name text-title">Utensils</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus"
                                                    data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus"
                                                    data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="product-image product-image-2">
                                    <a href="product-left-thumbnail.html">
                                        <img src="{{ asset('frontend/assets/images/grocery/product/kichen/7.png') }}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="javascript:void(0)" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name text-title">Jug</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus"
                                                    data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus"
                                                    data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.35s">
                                <div class="product-image product-image-2">
                                    <a href="product-left-thumbnail.html">
                                        <img src="{{ asset('frontend/assets/images/grocery/product/kichen/8.png') }}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="javascript:void(0)" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name text-title">Microwave</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus"
                                                    data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus"
                                                    data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Kitchen & Dining Needs Section End -->

    <!-- Blog Section Start -->
    <section class="blog-section">
        <div class="container-fluid-lg">
            <div class="title title-4">
                <h2>Blog</h2>
            </div>

            <div class="slider-3-blog arrow-slider slick-height">
                <div>
                    <div class=" blog-box ratio_45">
                        <div class="blog-box-image">
                            <a href="blog-detail.html">
                                <img src="{{ asset('frontend/assets/images/grocery/blog/1.jpg') }}" class="blur-up lazyload bg-img" alt="">
                            </a>
                        </div>

                        <div class="blog-detail">
                            <label>Conversion rate optimization</label>
                            <a href="blog-detail.html">
                                <h3>Best selling bag online market place...</h3>
                            </a>
                            <h5 class="text-content">Anil Viradiya - MARCH 9, 2022</h5>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="blog-box ratio_45">
                        <div class="blog-box-image">
                            <a href="blog-detail.html">
                                <img src="{{ asset('frontend/assets/images/grocery/blog/2.jpg') }}" class="blur-up lazyload bg-img" alt="">
                            </a>
                        </div>

                        <div class="blog-detail">
                            <label>Email Marketing</label>
                            <a href="blog-detail.html">
                                <h3>Best selling bag online market place...</h3>
                            </a>
                            <h5 class="text-content">Anil Viradiya - MARCH 9, 2022</h5>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="blog-box ratio_45">
                        <div class="blog-box-image">
                            <a href="blog-detail.html">
                                <img src="{{ asset('frontend/assets/images/grocery/blog/3.jpg') }}" class="blur-up lazyload bg-img" alt="">
                            </a>
                        </div>

                        <div class="blog-detail">
                            <label>Conversion rate optimization</label>
                            <a href="blog-detail.html">
                                <h3>Best selling bag online market place...</h3>
                            </a>
                            <h5 class="text-content">Anil Viradiya - MARCH 9, 2022</h5>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="blog-box ratio_45">
                        <div class="blog-box-image">
                            <a href="blog-detail.html">
                                <img src="{{ asset('frontend/assets/images/grocery/blog/1.jpg') }}" class="blur-up lazyload bg-img" alt="">
                            </a>
                        </div>

                        <div class="blog-detail">
                            <label>Conversion rate optimization</label>
                            <a href="blog-detail.html">
                                <h3>Best selling bag online market place...</h3>
                            </a>
                            <h5 class="text-content">Anil Viradiya - MARCH 9, 2022</h5>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="blog-box ratio_45">
                        <div class="blog-box-image">
                            <a href="blog-detail.html">
                                <img src="{{ asset('frontend/assets/images/grocery/blog/3.jpg') }}" class="blur-up lazyload bg-img" alt="">
                            </a>
                        </div>

                        <div class="blog-detail">
                            <label>Conversion rate optimization</label>
                            <a href="blog-detail.html">
                                <h3>Best selling bag online market place...</h3>
                            </a>
                            <h5 class="text-content">Anil Viradiya - MARCH 9, 2022</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

    <!-- Service Section Start -->
    <section class="service-section section-b-space">
        <div class="container-fluid-lg">
            <div class="row g-3 row-cols-xxl-5 row-cols-lg-3 row-cols-md-2">
                <div>
                    <div class="service-contain-2">
                        <svg class="icon-width">
                            <use xlink:href="../assets/svg/svg/service-icon-4.svg#shipping"></use>
                        </svg>
                        <div class="service-detail">
                            <h3>Free Shipping</h3>
                            <h6 class="text-content">Free Shipping world wide</h6>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="service-contain-2">
                        <svg class="icon-width">
                            <use xlink:href="../assets/svg/svg/service-icon-4.svg#service"></use>
                        </svg>
                        <div class="service-detail">
                            <h3>24 x 7 Service</h3>
                            <h6 class="text-content">Online Service For 24 x 7</h6>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="service-contain-2">
                        <svg class="icon-width">
                            <use xlink:href="../assets/svg/svg/service-icon-4.svg#pay"></use>
                        </svg>
                        <div class="service-detail">
                            <h3>Online Pay</h3>
                            <h6 class="text-content">Online Payment Avaible</h6>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="service-contain-2">
                        <svg class="icon-width">
                            <use xlink:href="../assets/svg/svg/service-icon-4.svg#offer"></use>
                        </svg>
                        <div class="service-detail">
                            <h3>Festival Offer</h3>
                            <h6 class="text-content">Super Sale Upto 50% off</h6>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="service-contain-2">
                        <svg class="icon-width">
                            <use xlink:href="../assets/svg/svg/service-icon-4.svg#return"></use>
                        </svg>
                        <div class="service-detail">
                            <h3>100% Original</h3>
                            <h6 class="text-content">100% Money Back</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service Section End -->

    <!-- Footer Start -->
    <footer class="section-t-space footer-section-2 footer-color-2">
        <div class="container-fluid-lg">
            <div class="main-footer">
                <div class="row g-md-4 gy-sm-5">
                    <div class="col-xxl-3 col-xl-4 col-sm-6">
                        <a href="index.html" class="foot-logo theme-logo">
                            <img src="{{ asset('frontend/assets/images/logo/4.png') }}" class="img-fluid blur-up lazyload" alt="">
                        </a>
                        <p class="information-text information-text-2">it is a long established fact that a reader will
                            be distracted by the readable content.</p>
                        <ul class="social-icon">
                            <li class="light-bg">
                                <a href="https://www.facebook.com/" class="footer-link-color">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="light-bg">
                                <a href="https://accounts.google.com/signin/v2/identifier?flowName=GlifWebSignIn&flowEntry=ServiceLogin"
                                    class="footer-link-color">
                                    <i class="fab fa-google"></i>
                                </a>
                            </li>
                            <li class="light-bg">
                                <a href="https://twitter.com/i/flow/login" class="footer-link-color">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li class="light-bg">
                                <a href="https://www.instagram.com/" class="footer-link-color">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li class="light-bg">
                                <a href="https://in.pinterest.com/" class="footer-link-color">
                                    <i class="fab fa-pinterest-p"></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-xxl-2 col-xl-4 col-sm-6">
                        <div class="footer-title">
                            <h4 class="text-white">About Fastkart</h4>
                        </div>
                        <ul class="footer-list footer-contact footer-list-light">
                            <li>
                                <a href="about-us.html" class="light-text">About Us</a>
                            </li>
                            <li>
                                <a href="contact-us.html" class="light-text">Contact Us</a>
                            </li>
                            <li>
                                <a href="term_condition.html" class="light-text">Terms & Coditions</a>
                            </li>
                            <li>
                                <a href="careers.html" class="light-text">Careers</a>
                            </li>
                            <li>
                                <a href="blog-list.html" class="light-text">Latest Blog</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-xxl-2 col-xl-4 col-sm-6">
                        <div class="footer-title">
                            <h4 class="text-white">Useful Link</h4>
                        </div>
                        <ul class="footer-list footer-list-light footer-contact">
                            <li>
                                <a href="order-success.html" class="light-text">Your Order</a>
                            </li>
                            <li>
                                <a href="user-dashboard.html" class="light-text">Your Account</a>
                            </li>
                            <li>
                                <a href="order-tracking.html" class="light-text">Track Orders</a>
                            </li>
                            <li>
                                <a href="wishlist.html" class="light-text">Your Wishlist</a>
                            </li>
                            <li>
                                <a href="faq.html" class="light-text">FAQs</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-xxl-2 col-xl-4 col-sm-6">
                        <div class="footer-title">
                            <h4 class="text-white">Categories</h4>
                        </div>
                        <ul class="footer-list footer-list-light footer-contact">
                            <li>
                                <a href="vegetables-demo.html" class="light-text">Fresh Vegetables</a>
                            </li>
                            <li>
                                <a href="spice-demo.html" class="light-text">Hot Spice</a>
                            </li>
                            <li>
                                <a href="bags-demo.html" class="light-text">Brand New Bags</a>
                            </li>
                            <li>
                                <a href="bakery-demo.html" class="light-text">New Bakery</a>
                            </li>
                            <li>
                                <a href="grocery-demo.html" class="light-text">New Grocery</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-xxl-3 col-xl-4 col-sm-6">
                        <div class="footer-title">
                            <h4 class="text-white">Store infomation</h4>
                        </div>
                        <ul class="footer-address footer-contact">
                            <li>
                                <a href="javascript:void(0)" class="light-text">
                                    <div class="inform-box flex-start-box">
                                        <i data-feather="map-pin"></i>
                                        <p>Fastkart Demo Store, Demo store india 345 - 659</p>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)" class="light-text">
                                    <div class="inform-box">
                                        <i data-feather="phone"></i>
                                        <p>Call us: 123-456-7890</p>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)" class="light-text">
                                    <div class="inform-box">
                                        <i data-feather="mail"></i>
                                        <p>Email Us: Support@Fastkart.com</p>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)" class="light-text">
                                    <div class="inform-box">
                                        <i data-feather="printer"></i>
                                        <p>Fax: 123456</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="sub-footer sub-footer-lite section-b-space section-t-space">
                <div class="left-footer">
                    <p class="light-text">2022 Copyright By Themeforest Powered By Pixelstrap</p>
                </div>

                <ul class="payment-box">
                    <li>
                        <img src="{{ asset('frontend/assets/images/icon/paymant/visa.png') }}" class="blur-up lazyload" alt="">
                    </li>
                    <li>
                        <img src="{{ asset('frontend/assets/images/icon/paymant/discover.png') }}" alt="" class="blur-up lazyload">
                    </li>
                    <li>
                        <img src="{{ asset('frontend/assets/images/icon/paymant/american.png') }}" alt="" class="blur-up lazyload">
                    </li>
                    <li>
                        <img src="{{ asset('frontend/assets/images/icon/paymant/master-card.png') }}" alt="" class="blur-up lazyload">
                    </li>
                    <li>
                        <img src="{{ asset('frontend/assets/images/icon/paymant/giro-pay.png') }}" alt="" class="blur-up lazyload">
                    </li>
                </ul>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

    <!-- Quick View Modal Box Start -->
    <div class="modal fade theme-modal view-modal" id="view" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header p-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row g-sm-4 g-2">
                        <div class="col-lg-6">
                            <div class="slider-image">
                                <img src="{{ asset('frontend/assets/images/product/category/1.jpg') }}" class="img-fluid blur-up lazyload"
                                    alt="">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="right-sidebar-modal">
                                <h4 class="title-name">Peanut Butter Bite Premium Butter Cookies 600 g</h4>
                                <h4 class="price">$36.99</h4>
                                <div class="product-rating">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <span class="ms-2">8 Reviews</span>
                                    <span class="ms-2 text-danger">6 sold in last 16 hours</span>
                                </div>

                                <div class="product-detail">
                                    <h4>Product Details :</h4>
                                    <p>Candy canes sugar plum tart cotton candy chupa chups sugar plum chocolate I love.
                                        Caramels marshmallow icing dessert candy canes I love soufflé I love toffee.
                                        Marshmallow pie sweet sweet roll sesame snaps tiramisu jelly bear claw. Bonbon
                                        muffin I love carrot cake sugar plum dessert bonbon.</p>
                                </div>

                                <ul class="brand-list">
                                    <li>
                                        <div class="brand-box">
                                            <h5>Brand Name:</h5>
                                            <h6>Black Forest</h6>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="brand-box">
                                            <h5>Product Code:</h5>
                                            <h6>W0690034</h6>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="brand-box">
                                            <h5>Product Type:</h5>
                                            <h6>White Cream Cake</h6>
                                        </div>
                                    </li>
                                </ul>

                                <div class="select-size">
                                    <h4>Cake Size :</h4>
                                    <select class="form-select select-form-size">
                                        <option selected>Select Size</option>
                                        <option value="1.2">1/2 KG</option>
                                        <option value="0">1 KG</option>
                                        <option value="1.5">1/5 KG</option>
                                        <option value="red">Red Roses</option>
                                        <option value="pink">With Pink Roses</option>
                                    </select>
                                </div>

                                <div class="modal-button">
                                    <button onclick="location.href = 'cart.html';"
                                        class="btn btn-md add-cart-button icon">Add
                                        To Cart</button>
                                    <button onclick="location.href = 'product-left.html';"
                                        class="btn theme-bg-color view-button icon text-white fw-bold btn-md">
                                        View More Details</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quick View Modal Box End -->

   

    <!-- Location Modal Start -->
    <div class="modal location-modal fade theme-modal" id="locationModal" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Choose your Delivery Location</h5>
                    <p class="mt-1 text-content">Enter your address and we will specify the offer for your area.</p>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="location-list">
                        <div class="search-input">
                            <input type="search" class="form-control" placeholder="Search Your Area">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </div>

                        <div class="disabled-box">
                            <h6>Select a Location</h6>
                        </div>

                        <ul class="location-select custom-height">
                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Alabama</h6>
                                    <span>Min: $130</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Arizona</h6>
                                    <span>Min: $150</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>California</h6>
                                    <span>Min: $110</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Colorado</h6>
                                    <span>Min: $140</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Florida</h6>
                                    <span>Min: $160</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Georgia</h6>
                                    <span>Min: $120</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Kansas</h6>
                                    <span>Min: $170</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Minnesota</h6>
                                    <span>Min: $120</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>New York</h6>
                                    <span>Min: $110</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Washington</h6>
                                    <span>Min: $130</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Location Modal End -->

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
</body>

</html>