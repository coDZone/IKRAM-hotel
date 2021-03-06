<!-- HEADER MOBILE-->
<header class="header-mobile d-block d-lg-none">
    <div class="header-mobile__bar">
        <div class="container-fluid">
            <div class="header-mobile-inner">
                <a class="logo" href="index.html">
                    <img src="{{ asset('image/Logo.png') }}" alt="CoolAdmin" />
                </a>
                <button class="hamburger hamburger--slider" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <nav class="navbar-mobile">
        <div class="container-fluid">
            <ul class="navbar-mobile__list list-unstyled">
                <li>
                    <a href="/admin">
                        <i class="fas fa-home"></i>Accueil</a>
                </li>
                <li>
                    <a href="/gallery">
                        <i class="fa fa-photo"></i>Galerie</a>
                </li>
                <li>
                    <a href="/account">
                        <i class="fa fa-user"></i>Mon compte</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<!-- END HEADER MOBILE-->
<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <img src="{{ asset('image/Logo.png') }}" alt="Hotel IKRAM" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li>
                    <a href="/admin">
                        <i class="fas fa-home"></i>Accueil</a>
                </li>
                <li>
                    <a href="/gallery">
                        <i class="fa fa-photo"></i>Galerie</a>
                </li>
                <li>
                    <a href="/account">
                        <i class="fa fa-user"></i>Mon compte</a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->