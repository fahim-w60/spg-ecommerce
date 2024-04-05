@extends('frontend.master-dashboard')
@section('title')
    Fastkart Ecommerce 
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

<!-- Home Section Start -->
@include('frontend.body.homeSection')
<!-- Home Section End -->

<!-- Banner Section Start -->
@include('frontend.body.bannerSection')
<!-- Banner Section End -->

<!-- Category Section Start -->
@include('frontend.body.categorySection')
<!-- Category Section End -->


<!-- Second Banner Section Start -->
@include('frontend.body.secondBannerSection')
<!-- Second Banner Section End -->

<!-- Product Fruit & Vegetables Section Start -->
@include('frontend.body.fruitAndVegSection')
<!-- Product Fruit & Vegetables Section End -->

<!-- Top selling Section Start -->
@include('frontend.body.topSellingSection')
<!-- Top selling Section End -->

<!-- Offer Section Start -->
{{-- <section class="offer-section">
    <div class="container-fluid-lg">
        <div class="row">
            <div class="col-12">
                <div class="offer-box hover-effect">
                    <h2><span>FREE GIFT ANY ORDER</span> 70% oFF</h2>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- Offer Section End -->


<!-- Product Breakfast & Dairy Section Start -->
@include('frontend.body.breakfastAndDairy')
<!-- Product Breakfast & Dairy Section End -->

<!-- Banner Section Start -->
<section class="ratio_60">
    <div class="container-fluid-lg">
        <div class="row g-3">
            <div class="col-xxl-3 col-sm-6 col-md-6">
                <a href="shop-left-sidebar.html" class="banner-contain-2 hover-effect">
                    <img src="{{ asset('frontend\banner-image\banner-2.png') }}">
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

            <div class="col-xxl-3 col-sm-6 col-md-6">
                <a href="shop-left-sidebar.html" class="banner-contain-2 hover-effect">
                    <img src="{{ asset('frontend\banner-image\banner-2.png') }}">
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

            <div class="col-xxl-3 col-sm-6 col-md-6">
                <a href="shop-left-sidebar.html" class="banner-contain-2 hover-effect">
                    <img src="{{ asset('frontend\banner-image\banner-2.png') }}">
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

            <div class="col-xxl-3 col-sm-6 col-md-6">
                <a href="shop-left-sidebar.html" class="banner-contain-2 hover-effect">
                    <img src="{{ asset('frontend\banner-image\banner-2.png') }}">
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
@include('frontend.body.chemistSection')
<!-- Product Chemist Store Section End -->

<!-- Banner Section Start -->
<section class="banner-section">
    <div class="container-fluid-lg">
        <div class="row gy-lg-0 gy-3">
            <div class="col-lg-6">
                <div class="banner-contain-3 hover-effect">
                    <div>
                        <img src="{{ asset('frontend\banner-image\banner-2.png') }}" class="" alt="">
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
                    <img src="{{ asset('frontend\banner-image\banner-2.png') }}" class="" alt="">
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
@include('frontend.body.drinkSection')
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
@include('frontend.body.personalCareSection')
<!-- Product Personal Care Section End -->

<!-- Product Kitchen & Dining Needs Section Start -->
@include('frontend.body.kitchenSection')
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
@include('frontend.home.footer')
<!-- Footer End -->

<!-- Quick View Modal Box Start -->
@include('frontend.home.quickviewModal')
<!-- Quick View Modal Box End -->



<!-- Location Modal Start -->
@include('frontend.home.locationModal')
<!-- Location Modal End -->
@endsection
