<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
            <span class="icofont-close js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>

<nav class="site-nav">
    <div class="container">
        <div class="site-navigation">
            <a href="index.html" class="logo m-0">Tour <span class="text-primary">.</span></a>

            <ul class="js-clone-nav d-none d-lg-inline-block text-left site-menu float-right">
                <li class="{{ Request::path() == '/' ? 'active' : '' }}"><a href="/">Home</a></li>
                <li class="{{ Request::path() == 'about' ? 'active' : '' }}"><a href="/about">About</a></li>
                <li class="has-children {{ Request::path() == 'getPackageType/' ? 'active' : '' }}">
                    <a href="">Packages</a>
                    <ul class="dropdown">
                        <li><a href="/getPackageType/{{ 'Family Holiday' }}">Family Holiday</a></li>
                        <li><a href="/getPackageType/{{ 'Beach Holiday' }}">Beach Holiday</a></li>
                        <li><a href="/getPackageType/{{ 'Safari Tour' }}">Safari Tour</a></li>
                        <li><a href="/getPackageType/{{ 'Honeymoon' }}">Honeymoon</a></li>
                    </ul>
                </li>
                <li class="{{ Request::path() == 'contact' ? 'active' : '' }}"><a href="/contact">Contact Us</a></li>
                @guest
                    <li><a href="/login">Sign In</a></li>
                @else
                    <li class="{{ Request::path() == 'bookings' ? 'active' : '' }}"><a href="/myBookings">My Bookings</a></li>
                    <li><a href="/logout">Logout</a></li>
                @endguest
            </ul>

            <a href="#"
                class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none light"
                data-toggle="collapse" data-target="#main-navbar">
                <span></span>
            </a>

        </div>
    </div>
</nav>
