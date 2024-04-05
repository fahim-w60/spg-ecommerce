<div class="page-header">
    <div class="header-wrapper m-0">
        <div class="header-logo-wrapper p-0">
            <div class="logo-wrapper">
                <a href="index.html">
                    <img class="img-fluid main-logo" src="{{ asset('adminBackend/assets/images/logo/1.png') }}" alt="logo">
                    <img class="img-fluid white-logo" src="{{ asset('adminBackend/assets/images/logo/1-white.png') }}" alt="logo">
                </a>
            </div>
            <div class="toggle-sidebar">
                <i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i>
                <a href="index.html">
                    <img src="{{ asset('adminBackend/assets/images/logo/1.png') }}" class="img-fluid" alt="">
                </a>
            </div>
        </div>

        <form class="form-inline search-full" action="javascript:void(0)" method="get">
            <div class="form-group w-100">
                <div class="Typeahead Typeahead--twitterUsers">
                    <div class="u-posRelative">
                        <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text"
                            placeholder="Search Fastkart .." name="q" title="" autofocus>
                        <i class="close-search" data-feather="x"></i>
                        <div class="spinner-border Typeahead-spinner" role="status">
                            <span class="sr-only">Loooooooooading...</span>
                        </div>
                    </div>
                    <div class="Typeahead-menu"></div>
                </div>
            </div>
        </form>
        <div class="nav-right col-6 pull-right right-header p-0">
            <ul class="nav-menus">
                <li>
                    <span class="header-search">
                        <i class="ri-search-line"></i>
                    </span>
                </li>
                <li class="onhover-dropdown">
                    <div class="notification-box">
                        <i class="ri-notification-line"></i>
                        <span class="badge rounded-pill badge-theme">4</span>
                    </div>
                    <ul class="notification-dropdown onhover-show-div">
                        <li>
                            <i class="ri-notification-line"></i>
                            <h6 class="f-18 mb-0">Notitications</h6>
                        </li>
                        <li>
                            <p>
                                <i class="fa fa-circle me-2 font-primary"></i>Delivery processing <span
                                    class="pull-right">10 min.</span>
                            </p>
                        </li>
                        <li>
                            <p>
                                <i class="fa fa-circle me-2 font-success"></i>Order Complete<span
                                    class="pull-right">1 hr</span>
                            </p>
                        </li>
                        <li>
                            <p>
                                <i class="fa fa-circle me-2 font-info"></i>Tickets Generated<span
                                    class="pull-right">3 hr</span>
                            </p>
                        </li>
                        <li>
                            <p>
                                <i class="fa fa-circle me-2 font-danger"></i>Delivery Complete<span
                                    class="pull-right">6 hr</span>
                            </p>
                        </li>
                        <li>
                            <a class="btn btn-primary" href="javascript:void(0)">Check all notification</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <div class="mode">
                        <i class="ri-moon-line"></i>
                    </div>
                </li>
                <li class="profile-nav onhover-dropdown pe-0 me-0">
                    <div class="media profile-media">
                        <img class="user-profile rounded-circle" src="{{ Auth::User()->photo ? asset(Auth::User()->photo) : asset('adminBackend\assets\images\profile\No_image.svg.png') }}" alt="">
                        <div class="user-name-hide media-body">
                            <span>Emay Walter</span>
                            <p class="mb-0 font-roboto">Admin<i class="middle ri-arrow-down-s-line"></i></p>
                        </div>
                    </div>
                    <ul class="profile-dropdown onhover-show-div">
                        <li>
                            <a href="{{ route('all.user.list.admin') }}">
                                <i data-feather="users"></i>
                                <span>Users</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('all.vendor.list.admin') }}">
                                <i data-feather="users"></i>
                                <span>Vendors</span>
                            </a>
                        </li>
                        <li>
                            <a href="order-list.html">
                                <i data-feather="archive"></i>
                                <span>Orders</span>
                            </a>
                        </li>
                        
                        <li>
                            <a href="{{ route('admin.profile') }}">
                                <i data-feather="settings"></i>
                                <span>Profile Settings</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.password') }}">
                                <i data-feather="lock"></i>
                                <span>Change Password</span>
                            </a>
                        </li>
                        
                        <li>
                            <form action="{{ route('logout') }}" id="logOutForm" method="POST">
                                @csrf
                            </form>
                            <a href="#" onclick="document.getElementById('logOutForm').submit(); return false;">
                                <i data-feather="log-out"></i>
                                <span>Log out</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>