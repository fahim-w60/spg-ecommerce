 <header class="header-3 pb-md-1 pb-0">
    <div class="header-top custom-gray-bg">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-xxl-3 d-xxl-block d-none">
                    <div class="top-left-header">
                        <i class="iconly-Location icli text-white"></i>
                        <span class="text-white">1418 Riverwood Drive, CA 96052, US</span>
                    </div>
                </div>

                <div class="col-xxl-6 col-lg-9 d-lg-block d-none">
                    <div class="header-offer">
                        <div class="notification-slider">
                            <div>
                                <div class="timer-notification">
                                    <h6><strong class="me-1">Welcome to Fastkart!</strong>Wrap new offers/gift
                                        every signle day on Weekends.<strong class="ms-1">New Coupon Code: Fast024
                                        </strong>

                                    </h6>
                                </div>
                            </div>

                            <div>
                                <div class="timer-notification">
                                    <h6>Something you love is now on sale!
                                        <a href="shop-left-sidebar.html" class="text-white">Buy Now
                                            !</a>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <ul class="about-list right-nav-about">
                        <li class="right-nav-list">
                            <div class="dropdown theme-form-select">
                                <button class="btn dropdown-toggle" type="button" id="select-language" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span>{{ __('messages.language') }}</span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="select-language">
                                    <li>
                                        <a class="dropdown-item lang-change"  href="#" data-lang="en"  id="english">
                                            <img src="{{ asset('frontend/assets/images/country/united-kingdom.png') }}" class="img-fluid blur-up lazyload" alt="">
                                            <span>English</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item lang-change"  href="#" data-lang="bn" id="bangla">
                                            <img src="{{ asset('frontend/assets/images/country/Bangladesh.svg') }}" class="img-fluid blur-up lazyload" alt="">
                                            <span>Bangla</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                
            </div>
        </div>
    </div>
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
                                        <span>{{ __('messages.position') }}</span>
                                        <i class="fa-solid fa-angle-down down-arrow"></i>
                                    </button>
                                </div>

                                <div class="searchbar-box-2 input-group d-xl-flex d-none">
                                    <button class="btn search-icon" type="button">
                                        <i class="iconly-Search icli"></i>
                                    </button>
                                    <input type="text" class="form-control"
                                        placeholder="{{ __('messages.search.placeholder') }}">
                                    <button class="btn search-button" type="button">{{ __('messages.search') }}</button>
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



    <div class="container-fluid-lg mt-3">
        <div class="row">
            <div class="col-12">
                <div class="header-nav">
                    <div class="header-nav-left">
                        <button class="dropdown-category">
                            <i data-feather="align-left"></i>
                            <span>All Categories</span>
                        </button>

                        <div class="category-dropdown">
                            <div class="category-title">
                                <h5>Categories</h5>
                                <button type="button" class="btn p-0 close-button text-content">
                                    <i class="fa-solid fa-xmark"></i>
                                </button>
                            </div>

                            

                           <ul class="category-list">
                                @forelse($parent_categories as $cat_key=>$c_val)
                                <li class="onhover-category-list">
                                    <a href="javascript:void(0)" class="category-name">
                                        <img src="{{ $c_val->image }}" alt="">
                                        <h6>{{ $c_val->name ?? ''  }}</h6>
                                    @if(!$c_val->hasChild->isEmpty())
                                        <i class="fa-solid fa-angle-right"></i>
                                    @endif
                                    </a>
                                    @if(!$c_val->hasChild->isEmpty())
                                    <div class="onhover-category-box"> 
                                         {{-- <div class="list-2">
                                            <div class="category-title-box">
                                                <a href="javascript:void(0)" class="category-name">
                                                    <img src="../assets/svg/1/vegetable.svg" alt="">
                                                    <h6>Vegetables & Fruit</h6>
                                                </a>
                                            </div>
                                            <ul>
                                                <li>
                                                    <a href="javascript:void(0)" class="category-name">
                                                        <img src="../assets/svg/1/vegetable.svg" alt="">
                                                        <h6>Vegetables & Fruit</h6>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="category-name">
                                                        <img src="../assets/svg/1/vegetable.svg" alt="">
                                                        <h6>Vegetables & Fruit</h6>
                                                    </a>
                                                </li>
                                               
                                            </ul>
                                        </div> --}}

                                        {{-- <div class="list-2">
                                            <div class="category-title-box">
                                                <a href="javascript:void(0)" class="category-name">
                                                    <img src="../assets/svg/1/vegetable.svg" alt="">
                                                    <h6>Vegetables & Fruit</h6>
                                                </a>
                                            </div>
                                            <ul>
                                                <li>
                                                    <a href="javascript:void(0)" class="category-name">
                                                        <img src="../assets/svg/1/vegetable.svg" alt="">
                                                        <h6>Vegetables & Fruit</h6>
                                                       
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="category-name">
                                                        <img src="../assets/svg/1/vegetable.svg" alt="">
                                                        <h6>Vegetables & Fruit</h6>
                                                       
                                                    </a>
                                                </li>
                                            </ul>
                                        </div> --}}
                                       {!! getChildCategoryHTML($c_val->id) !!}
                                    </div>
                                    @endif
                                </li>
                                @empty
                                @endforelse
                            </ul> 
                            
                        </div>
                    </div>

                    <div class="header-nav-middle">
                        <div class="main-nav navbar navbar-expand-xl navbar-light navbar-sticky">
                            <div class="offcanvas offcanvas-collapse order-xl-2" id="primaryMenu">
                                <div class="offcanvas-header navbar-shadow">
                                    <h5>Menu</h5>
                                    <button class="btn-close lead" type="button" data-bs-dismiss="offcanvas"
                                        aria-label="Close"></button>
                                </div>
                                {{-- <div class="offcanvas-body">
                                    <ul class="navbar-nav">
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="javascript:void(0)"
                                                data-bs-toggle="dropdown">Home</a>

                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="index.html">Kartshop</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="index-2.html">Sweetshop</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="index-3.html">Organic</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="index-4.html">Supershop</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="index-5.html">Classic shop</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="index-6.html">Furniture</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="index-7.html">Search Oriented</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="index-8.html">Category Focus</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="index-9.html">Fashion</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="javascript:void(0)"
                                                data-bs-toggle="dropdown">Shop</a>

                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="shop-category-slider.html">Shop
                                                        Category Slider</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="shop-category.html">Shop
                                                        Category Sidebar</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="shop-banner.html">Shop Banner</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="shop-left-sidebar.html">Shop Left
                                                        Sidebar</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="shop-list.html">Shop List</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="shop-right-sidebar.html">Shop
                                                        Right Sidebar</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="shop-top-filter.html">Shop Top
                                                        Filter</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div> --}}
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

                        @if(auth()->check())    
                            <li class="onhover-dropdown">
                                <a href="javascript:void(0)" class="header-icon swap-icon">
                                    <i class="iconly-Profile icli"></i>
                                </a>
                                <div class="onhover-div onhover-div-login">
                                    <ul class="user-box-name">
                                        <li>
                                            <a href="">Login</a>
                                        </li>
                                        <li>
                                            <a href="">Manage Account</a>
                                            <a href="">My Orders</a>
                                            <a href="">My Returns</a>
                                            <a href="">My Reviews</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        @endif    
                       
                        @if(auth()->check())
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: inline;">
                                @csrf
                                <button type="submit" class="btn btn-md mx-2" style="background-color: #239698; color: #ffffff;">
                                    Logout
                                </button>
                            </form>
                            
                        @else                         
                            <a href="{{ route('login') }}" class="btn btn-md mx-2" style="background-color: #239698; color: #ffffff;">
                            {{ __('messages.login') }}</a>
                            <a href="{{ route('register') }}" class="btn btn-md" style="background-color: #239698; color: #ffffff;">{{ __('messages.register') }}</a>
                        @endif    
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>