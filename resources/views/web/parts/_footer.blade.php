<footer>
    <div class="block top-padd80 bottom-padd80 dark-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-lg-12">
                    <div class="footer-data">
                        <div class="row">
                            <div class="col-md-3 col-sm-6 col-lg-3" style="margin-top: -36px;">
                                <div class="logo"><h1 itemprop="headline"><a href="{{ url('/') }}" title="Home"
                                                                             itemprop="url"><img
                                                    src="{{ asset('styleWeb/assets/images/img-logo.png') }}"
                                                    alt="logo.png" itemprop="image"></a></h1></div>
                                <p itemprop="description">Una forma fácil de ubicar locales celiacos cerca de tu
                                    domicilio y poder contactarlos de forma aún mas fácil.</p>
                                <div class="social2">
                                    <a class="brd-rd50" href="https://www.facebook.com/guiaceliaca" title="Facebook"
                                       itemprop="url" target="_blank"><i
                                                class="fa fa-facebook"></i></a>
                                    <a class="brd-rd50" href="https://www.instagram.com/guiaceliaca/"
                                       title="Instagram" itemprop="url" target="_blank"><i
                                                class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-lg-3">
                                <div class="widget information_links wow fadeIn" data-wow-delay="0.2s">
                                    <h4 class="widget-title" itemprop="headline">Links utiles</h4>
                                    <ul>
                                        <li><a href="{{ route('term') }}" title="" itemprop="url">Términos y Condiciones</a></li>
                                        <li><a href="{{ route('policity') }}" title="" itemprop="url">Política de privacidad</a></li>
                                        <li><a href="{{ route('contact') }}" title="" itemprop="url">Contacto</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-lg-3">
                                <div class="widget customer_care wow fadeIn" data-wow-delay="0.3s">
                                    <h4 class="widget-title" itemprop="headline">Mantenete en contacto</h4>
                                    <ul>
                                        <li><i class="fa fa-map-marker"></i> Mendoza, Argentina</li>
                                        <li><i class="fa fa-envelope"></i> info@guiaceliaca.com.ar</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-lg-3">
                                <div class="widget get_in_touch wow fadeIn" data-wow-delay="0.4s">
                                    <h4 class="widget-title" itemprop="headline">NewsLetters</h4>
                                    <form class="newsletter-frm brd-rd30" method="post" action="{{ route('newsletter.add') }}">
                                        @csrf
                                        <input class="brd-rd30" type="email" name="email" placeholder="Ingresar Emaill">
                                        <button class="brd-rd30 red-bg" type="submit"><i class="fa fa-envelope-o"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div><!-- Footer Data -->
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="bottom-bar dark-bg text-center">
    <div class="container">
        <p itemprop="description"><a target="_blank" href="https://mikant.com.ar">Copyright {{ date('Y') }} <b>MikAnt</b> | All Rights Reserved |
                Designed By MikAnt</a></p>
    </div>
</div><!-- Bottom Bar -->