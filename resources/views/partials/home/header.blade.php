<header class="main-header">
    <div class="main-header__top">
        <div class="main-header__top-inner">
            <div class="main-header__top-left">
                <ul class="list-unstyled main-header__contact-list">
                    <li>
                        <div class="icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="text">
                            <p>Beirut, Lebanon</p>
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="text">
                            <p><a href="mailto:buildwsieengineering@gmail.com">info@buildwise-engineering.com</a></p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="main-header__top-right">
                <div class="main-header__social">
                    <a href="https://www.instagram.com/mila.residence?igsh=b3VmYWZydjVqZmtj"><i
                            class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <nav class="main-menu">
        <div class="main-menu__wrapper">
            <div class="main-menu__wrapper-inner">
                <div class="main-menu__left">
                    <div class="main-menu__logo">
                        <a href="{{route('home')}}"><img src="{{ asset('assets/images/backgrounds/Asset-8a.png') }}"
                                alt=""></a>
                    </div>
                </div>
                <div class="main-menu__main-menu-box">
                    <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                    <ul class="main-menu__list">
                        <li class="current">
                            <a href="{{ route('home') }}">Home </a>
                        </li>
                        <li>
                            <a href="{{ route('about') }}">About</a>
                        </li>
                        <li class="dropdown">
                            <a href="{{ route('projects') }}">Projects</a>
                            <ul class="shadow-box">
                                <li><a href="{{ route('case.lilas001') }}">Lilas 001 &#8211; Medyar 4796</a>
                                </li>
                                <li><a href="{{ route('case.lilas002') }}">lilas&#8211;002&#8211;medyar&#8211;4797</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('gallery') }}">Gallery</a>
                        </li>
                        <li>
                            <a href="contact.html">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>

<div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->
