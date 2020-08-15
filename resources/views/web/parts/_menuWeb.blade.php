<header class="stick">
    <div class="topbar">
        <div class="container">
            <div class="topbar-register">
                <a class="log-popup-btn" href="#" title="Login" itemprop="url">Ingresar</a> / <a class="sign-popup-btn"
                                                                                                 href="#"
                                                                                                 title="Register"
                                                                                                 itemprop="url">Registrarse</a>
            </div>
            <div class="social1">
                <a href="https://www.facebook.com/guiaceliaca" title="Facebook" itemprop="url" target="_blank"><i
                            class="fa fa-facebook-square"></i></a>
                <a href="https://www.instagram.com/guiaceliaca/" title="instagram" itemprop="url" target="_blank"><i
                            class="fa fa-instagram"></i></a>
            </div>
        </div>
    </div><!-- Topbar -->
    <div class="logo-menu-sec">
        <div class="container">
            <div class="logo"><h1 itemprop="headline"><a href="index-2.html" title="Home" itemprop="url"><img
                                src="{{ asset('styleWeb/assets/images/img-logo.png') }}" alt="guiaceliaca"
                                itemprop="image" style="width: 40%; margin-top: -10px"></a></h1></div>
            <nav>
                <div class="menu-sec">
                    <ul>
                        <li class="menu-item-has-children"><a href="{{ url('/') }}" title="INICIO" itemprop="url"><span
                                        class="red-clr">Home Page</span>Inicio</a>
                        </li>
                        <li class="menu-item-has-children"><a href="{{ route('list.blog') }}" title="BLOG"
                                                              itemprop="url"><span class="red-clr">Novedades</span>Blog</a>
                        </li>
                        <li class="menu-item-has-children"><a href="{{ route('list.recipes') }}" title="RECETAS"
                                                              itemprop="url"><span class="red-clr">Cocina Rica</span>Recetas</a>
                        </li>
                        <li><a href="{{ route('contact') }}" title="CONTACTO" itemprop="url"><span class="red-clr">Contactenos</span>Contacto</a>
                        </li>
                        <li class="menu-item-has-children"><a href="#" title="AYUDA" itemprop="url"><span
                                        class="red-clr">Términos</span>Ayuda</a>
                            <ul class="sub-dropdown">
                                <li><a href="{{ route('term') }}" title="TERMINOS Y CONDICIONES" itemprop="url">Términos
                                        y condiciones</a></li>
                                <li><a href="{{ route('policity') }}" title="PRIVACIDAD" itemprop="url">Política de
                                        privacidad</a></li>
                            </ul>
                        </li>
                    </ul>
                    <a class="red-bg brd-rd4" href="{{ route('register') }}" title="REGISTRAR COMERCIO" itemprop="url">REGISTRAR
                        COMERCIO</a>
                </div>
            </nav><!-- Navigation -->
        </div>
    </div><!-- Logo Menu Section -->
</header><!-- Header -->