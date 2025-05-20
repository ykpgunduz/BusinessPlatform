<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

        <a href="index.html" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="img/logo.png" alt=""> -->
            <h1 class="sitename">LOGO</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ route('home') }}" class="{{ Request::routeIs('home') ? 'active' : '' }}">Anasayfa</a></li>
                <li><a href="{{ route('about') }}" class="{{ Request::routeIs('about') ? 'active' : '' }}">Hakkımızda</a></li>
                <li><a href="{{ route('services') }}" class="{{ Request::routeIs('services') ? 'active' : '' }}">Faaliyetlerimiz</a></li>
                <li><a href="{{ route('projects') }}" class="{{ Request::routeIs('projects') ? 'active' : '' }}">Projelerimiz</a></li>
                <li><a href="{{ route('blog') }}" class="{{ Request::routeIs('blog') ? 'active' : '' }}">Blog</a></li>
                <li class="dropdown"><a href="#"><span>Daha Fazla</span> <i
                            class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="#">Dropdown 1</a></li>
                        <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i
                                    class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="#">Deep Dropdown 1</a></li>
                                <li><a href="#">Deep Dropdown 2</a></li>
                                <li><a href="#">Deep Dropdown 3</a></li>
                                <li><a href="#">Deep Dropdown 4</a></li>
                                <li><a href="#">Deep Dropdown 5</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Dropdown 2</a></li>
                        <li><a href="#">Dropdown 3</a></li>
                        <li><a href="#">Dropdown 4</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('contact') }}" class="{{ Request::routeIs('contact') ? 'active' : '' }}">İletişim</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

    </div>
</header>
