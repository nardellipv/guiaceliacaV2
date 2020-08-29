<section>
    <div class="block no-padding red-bg">
        <img class="bottom-clouds-mockup" src="{{ asset('webStyle/assets/images/resource/clouds2.png') }}"
             alt="clouds2.png" itemprop="image">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-lg-12">
                    <div class="app-sec">
                        <div class="row">
                            <div class="col-md-4 hidden-sm col-md-offset-1 col-sm-4 col-sm-offset-0 col-lg-4 col-lg-offset-1">
                                <div class="app-mockup text-right overlape-110 wow fadeInUp" data-wow-delay="0.2s"><img
                                            src="{{ asset('styleWeb/assets/images/resource/chef.png') }}"
                                            alt="recomendar guiaceliaca" itemprop="image"></div>
                            </div>
                            <div class="col-md-6 col-md-offset-1 col-sm-12 col-sm-offset-0 col-lg-6 col-lg-offset-1">
                                <div class="app-info">
                                    <h4 itemprop="headline">Recomendar Guía Celíaca</h4>
                                    <p itemprop="description">Nos gustaría llegar a la mayor cantidad de locales en toda
                                        Argentina, así
                                        celíacos de todo el país
                                        podrán conocer locales cerca de sus domicilios. Si quieres ayudarnos, escribe el
                                        email del local que
                                        quieres recomendar
                                        y nosotros lo contactamos para que se registre.</p>
                                        <form class="newsletter-frm brd-rd30" method="get" action="{{ route('recommend.email') }}">
                                            @csrf
                                            <input class="brd-rd30" type="email" name="email" placeholder="Ingresar Email del local">
                                            <button class="brd-rd30 red-bg" type="submit">Enviar Invitación</button>
                                        </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>