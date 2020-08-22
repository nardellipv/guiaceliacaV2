<div class="responsive-header">
    <div class="responsive-logomenu">
        <div class="logo"><h1 itemprop="headline"><a href="{{ url('/') }}" title="Home" itemprop="url"><img
                            src="{{ asset('styleWeb/assets/images/img-logo.png') }}" alt="guiaceliaca" itemprop="image"
                            style="width: 80%"></a></h1></div>
        <span class="menu-btn yellow-bg brd-rd4"><i class="fa fa-align-justify"></i></span>
    </div>
    <div class="responsive-menu">
        <span class="menu-close red-bg brd-rd3"><i class="fa fa-close"></i></span>
        <div class="menu-lst">
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
                <li><a href="{{ route('contact') }}" title="CONTACTO" itemprop="url"><span
                                class="red-clr">Contactenos</span>Contacto</a>
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
        </div>
        @if(Auth::guest())
            <div class="topbar-register">
                <a href="{{ route('login') }}" title="Login" itemprop="url">Ingresar</a> / <a
                                                                                                 href="{{ route('register') }}" title="Register"
                                                                                                 itemprop="url">Registrarse</a>
            </div>
        @else
            @if(Auth::user()->type != 'OWNER')
                <a class="red-bg brd-rd4" href="{{ route('create.accountCommerce') }}"
                   title="REGISTRAR COMERCIO" itemprop="url">REGISTRAR COMERCIO</a>
            @endif
        @endif
    </div><!-- Responsive Menu -->
</div><!-- Responsive Header -->