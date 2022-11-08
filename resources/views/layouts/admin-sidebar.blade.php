<!--APP-SIDEBAR-->
<div class="sticky">
    <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
    <div class="app-sidebar">
        <div class="side-header">
            <a class="header-brand1" href="/">
                <img src="../admin/images/brand/logo.png" class="header-brand-img desktop-logo" alt="logo">
                <img src="../admin/images/brand/logo-1.png" class="header-brand-img toggle-logo" alt="logo">
                <img src="../admin/images/brand/logo-2.png" class="header-brand-img light-logo" alt="logo">
                <img src="../admin/images/brand/logo-3.png" class="header-brand-img light-logo1" alt="logo">
            </a>
            <!-- LOGO -->
        </div>
        <div class="main-sidemenu">
            <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                    width="24" height="24" viewBox="0 0 24 24">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                </svg></div>
            <ul class="side-menu">
                <li class="sub-category">
                    <h3>Main</h3>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link {{ Request::path() == 'dashboard' ? 'active' : '' }}"
                        data-bs-toggle="slide" href="/dashboard"><i class="side-menu__icon fe fe-home"></i><span
                            class="side-menu__label">Dashboard</span></a>
                </li>
                <li class="sub-category">
                    <h3>Pages</h3>
                </li>
                <li
                    class="slide {{ Request::path() == 'users/create' || Request::path() == 'users' ? 'is-expanded' : '' }}">
                    <a class="side-menu__item {{ Request::path() == 'users/create' || Request::path() == 'users' ? 'active' : '' }}"
                        data-bs-toggle="slide" href="javascript:void(0)">
                        <i class="side-menu__icon ri-user-4-line"></i><span class="side-menu__label">Users</span>
                        <i class="angle fe fe-chevron-right"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Users</a></li>
                        <li><a href="/users" class="slide-item {{ Request::path() == 'users' ? 'active' : '' }}"> All
                                Users</a>
                        </li>
                        <li><a href="/users/create"
                                class="slide-item {{ Request::path() == 'users/create' ? 'active' : '' }}"> New User</a>
                        </li>
                    </ul>
                </li>
                <li
                    class="slide {{ Request::path() == 'destinations/create' || Request::path() == 'destinations' ? 'is-expanded' : '' }}">
                    <a class="side-menu__item {{ Request::path() == 'destinations/create' || Request::path() == 'destinations' ? 'active' : '' }}"
                        data-bs-toggle="slide" href="javascript:void(0)">
                        <i class="side-menu__icon ri-user-4-line"></i><span class="side-menu__label">destinations</span>
                        <i class="angle fe fe-chevron-right"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Destinations</a></li>
                        <li><a href="/destinations"
                                class="slide-item {{ Request::path() == 'destinations' ? 'active' : '' }}"> All
                                Destinations</a>
                        </li>
                        <li><a href="/destinations/create"
                                class="slide-item {{ Request::path() == 'destinations/create' ? 'active' : '' }}"> New
                                Destination</a>
                        </li>
                    </ul>
                </li>
                <li
                    class="slide {{ Request::path() == 'packages/create' || Request::path() == 'packages' ? 'is-expanded' : '' }}">
                    <a class="side-menu__item {{ Request::path() == 'destinations/create' || Request::path() == 'destinations' ? 'active' : '' }}"
                        data-bs-toggle="slide" href="javascript:void(0)">
                        <i class="side-menu__icon ri-user-4-line"></i><span class="side-menu__label">Packages</span>
                        <i class="angle fe fe-chevron-right"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">packages</a></li>
                        <li><a href="/packages" class="slide-item {{ Request::path() == 'packages' ? 'active' : '' }}">
                                All
                                Packages</a>
                        </li>
                        <li><a href="/packages/create"
                                class="slide-item {{ Request::path() == 'packages/create' ? 'active' : '' }}"> New
                                Package</a>
                        </li>
                    </ul>
                </li>
                <li class="slide {{ Request::path() == 'bookings' ? 'is-expanded' : '' }}">
                    <a class="side-menu__item {{ Request::path() == 'bookings' ? 'active' : '' }}"
                        data-bs-toggle="slide" href="javascript:void(0)">
                        <i class="side-menu__icon ri-user-4-line"></i><span class="side-menu__label">Bookings</span>
                        <i class="angle fe fe-chevron-right"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">bookings</a></li>
                        <li><a href="/bookings" class="slide-item {{ Request::path() == 'bookings' ? 'active' : '' }}">
                                All
                                Bookings</a>
                        </li>
                    </ul>
                </li>
        </div>
    </div>
    <!--/APP-SIDEBAR-->
</div>
