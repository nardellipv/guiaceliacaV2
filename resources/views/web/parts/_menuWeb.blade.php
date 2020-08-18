<header class="stick">
    <div class="topbar">
        <div class="container">
            <div class="topbar-register">
                @if(Auth::check())
                    <a href="{{ route('profile') }}" title="Login" itemprop="url"><i
                                class="fa fa-user"></i> Hola, {{ Auth::user()->name }}</a>
                @else
                    <a class="log-popup-btn" href="#" title="Login" itemprop="url">Ingresar</a>
                @endif
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
            <div class="logo"><h1 itemprop="headline"><a href="{{ url('/') }}" title="Home" itemprop="url"><img
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
                    @if(Auth::guest())
                        <a class="red-bg brd-rd4" href="{{ route('register') }}"
                           title="REGISTRARSE" itemprop="url">REGISTRARSE</a>
                    @else
                        @if(Auth::user()->type != 'OWNER')
                            <a class="red-bg brd-rd4" href="{{ route('create.accountCommerce') }}"
                               title="REGISTRAR COMERCIO" itemprop="url">REGISTRAR COMERCIO</a>
                        @endif
                    @endif
                </div>
            </nav>
        </div>
    </div>
</header>