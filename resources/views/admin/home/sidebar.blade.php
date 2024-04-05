<div class="sidebar-wrapper">
    <div id="sidebarEffect"></div>
    <div>
        <div class="logo-wrapper logo-wrapper-center">
            <a href="index.html" data-bs-original-title="" title="">
                <img class="img-fluid for-white" src="{{ asset('adminBackend/assets/images/logo/full-white.png') }}" alt="logo">
            </a>
            <div class="back-btn">
                <i class="fa fa-angle-left"></i>
            </div>
            <div class="toggle-sidebar">
                <i class="ri-apps-line status_toggle middle sidebar-toggle"></i>
            </div>
        </div>
        <div class="logo-icon-wrapper">
            <a href="index.html">
                <img class="img-fluid main-logo main-white" src="{{ asset('adminBackend/assets/images/logo/logo.png') }}" alt="logo">
                <img class="img-fluid main-logo main-dark" src="{{ asset('adminBackend/assets/images/logo/logo-white.png') }}"
                    alt="logo">
            </a>
        </div>
        @php
    
 $current_url =Route::current()->getName();

@endphp
        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow">
                <i data-feather="arrow-left"></i>
            </div>

            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn"></li>

                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title link-nav" href="index.html">
                            <i class="ri-home-line"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                   @can('product.menu')
                        <li class="sidebar-list">
                            <a class="linear-icon-link sidebar-link sidebar-title {{ ($current_url=='product.index') ||  ($current_url=='product.create') ? 'active' : '' }}" href="javascript:void(0)">
                                <i class="ri-store-3-line"></i>
                                <span>Product</span>
                            </a>
                            <ul class="sidebar-submenu">
                                <li>
                                    @can('product.list')
                                    <a class="{{ ($current_url=='product.create')  ? 'active' : '' }}" href="{{ route('product.create') }}">Prodcts @php 
                                    echo $current_url;
                                        @endphp</a>
                                    @endcan
                                </li>

                                <li>
                                    @can('product.add')
                                        <a href="{{ route('product.index') }}">Add New Products</a>
                                    @endcan
                                </li>
                            </ul>
                        </li>
                    @endcan

                    @can('category.menu')
                        <li class="sidebar-list">
                            <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                                <i class="ri-list-check-2"></i>
                                <span>Category</span>
                            </a>
                            <ul class="sidebar-submenu">
                                @can('category.list')
                                    <li>
                                        <a href="{{ route('admin.category.list') }}">Category List</a>
                                    </li>
                                @endcan
                                @can('category.add')
                                    <li>
                                        <a href="{{ route('admin.category') }}">Add New Category</a>
                                    </li>
                                @endcan
                            </ul>
                        </li>
                    @endcan

                    @can('subcategory.menu')
                        <li class="sidebar-list">
                            <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                                <i class="ri-list-check-2"></i>
                                <span>Subcategory</span>
                            </a>
                            <ul class="sidebar-submenu">
                                @can('subcategory.list')
                                    <li>
                                        <a href="{{  route('subcategory.create') }}">Subcategory List</a>
                                    </li>
                                @endcan
                                @can('subcategory.add')
                                    <li>
                                        <a href="{{ route('subcategory.index') }}">Add New Subcategory</a>
                                    </li>
                                @endcan
                            </ul>
                        </li>
                    @endcan
                    
                    @can('brand.menu')
                        <li class="sidebar-list">
                            <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                                <i class="ri-list-settings-line"></i>
                                <span>Brands</span>
                            </a>
                            <ul class="sidebar-submenu">
                                @can('brand.list')
                                    <li>
                                        <a href="{{ route('all.brand.list.admin') }}">Brands List</a>
                                    </li>
                                @endcan
                                @can('brand.add')
                                    <li>
                                        <a href="{{ route('admin.brand') }}">Add New Brand</a>
                                    </li>
                                @endcan
                            </ul>
                        </li>
                    @endcan

                    @can('attribute_set.menu')
                        <li class="sidebar-list">
                            <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                                <i class="ri-list-settings-line"></i>
                                <span>Attribute Set</span>
                            </a>
                            <ul class="sidebar-submenu">
                                @can('attribute_set.list')
                                <li>
                                    <a href="{{ route('attributeSet.create') }}">Attribute Set List</a>
                                </li>
                                @endcan
                                @can('attribute_set.add')
                                <li>
                                    <a href="{{ route('attributeSet.index') }}">Add Attribute Set</a>
                                </li>
                                @endcan
                            </ul>
                        </li>
                    @endcan
                    
                    @can('attribute.menu')
                        <li class="sidebar-list">
                            <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                                <i class="ri-list-settings-line"></i>
                                <span>Attributes</span>
                            </a>
                            <ul class="sidebar-submenu">
                                @can('attribute.list')
                                <li>
                                    <a href="{{ route('attribute.create') }}">Attributes List</a>
                                </li>
                                @endcan
                                @can('attribute.add')
                                <li>
                                    <a href="{{ route('attribute.index') }}">Add Attributes</a>
                                </li>
                                @endcan
                            </ul>
                        </li>
                    @endcan

                    @can('admin_user.menu')
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                            <i class="ri-user-3-line"></i>
                            <span>Admin users</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li>
                                <a href="{{ route('adminUser.index') }}">All admin users</a>
                            </li>
                            <li>
                                <a href="{{ route('adminUser.create') }}">Add new admin user</a>
                            </li>
                        </ul>
                    </li>
                    @endcan

                    @can('role.menu')
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                            <i class="ri-user-3-line"></i>
                            <span>Roles</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li>
                                <a href="{{ route('roles.create') }}">Create Role</a>
                            </li>
                            <li>
                                <a href="{{ route('roles.index') }}">All roles</a>
                            </li>
                            {{-- <li>
                                <a href="{{ route('addRoleInPermission') }}">Add Roles in Permission</a>
                            </li>
                             --}}
                        </ul>
                    </li>
                    @endcan

                    @can('permission.menu')
                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                                <i class="ri-user-3-line"></i>
                                <span>Permissions</span>
                            </a>
                            <ul class="sidebar-submenu">
                                <li>
                                    <a href="{{ route('permission.create') }}">Create permission</a>
                                </li>
                                <li>
                                    <a href="{{ route('permission.index') }}">All permission</a>
                                </li>
                            </ul>
                        </li>
                    @endcan

                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title link-nav" href="media.html">
                            <i class="ri-price-tag-3-line"></i>
                            <span>Media</span>
                        </a>
                    </li>

                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                            <i class="ri-archive-line"></i>
                            <span>Orders</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li>
                                <a href="order-list.html">Order List</a>
                            </li>
                            <li>
                                <a href="order-detail.html">Order Detail</a>
                            </li>
                            <li>
                                <a href="order-tracking.html">Order Tracking</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-list">
                        <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                            <i class="ri-focus-3-line"></i>
                            <span>Localization</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li>
                                <a href="translation.html">Translation</a>
                            </li>

                            <li>
                                <a href="currency-rates.html">Currency Rates</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-list">
                        <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                            <i class="ri-price-tag-3-line"></i>
                            <span>Coupons</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li>
                                <a href="coupon-list.html">Coupon List</a>
                            </li>

                            <li>
                                <a href="create-coupon.html">Create Coupon</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title link-nav" href="taxes.html">
                            <i class="ri-price-tag-3-line"></i>
                            <span>Tax</span>
                        </a>
                    </li>

                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title link-nav" href="product-review.html">
                            <i class="ri-star-line"></i>
                            <span>Product Review</span>
                        </a>
                    </li>

                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title link-nav" href="support-ticket.html">
                            <i class="ri-phone-line"></i>
                            <span>Support Ticket</span>
                        </a>
                    </li>

                    <li class="sidebar-list">
                        <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                            <i class="ri-settings-line"></i>
                            <span>Settings</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li>
                                <a href="profile-setting.html">Profile Setting</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title link-nav" href="reports.html">
                            <i class="ri-file-chart-line"></i>
                            <span>Reports</span>
                        </a>
                    </li>

                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title link-nav" href="list-page.html">
                            <i class="ri-list-check"></i>
                            <span>List Page</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="right-arrow" id="right-arrow">
                <i data-feather="arrow-right"></i>
            </div>
        </nav>
    </div>
</div>