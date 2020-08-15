<section>
    <div class="block">
        <div style="background-image: url({{ asset('styleWeb/assets/images/topbg.jpg') }});" class="fixed-bg"></div>
        <div class="restaurant-searching style2 text-center">
            <div class="restaurant-searching-inner">
                <span>Encuentra comida <i>sin tacc</i> </span>
                <h2 itemprop="headline">en comercios adheridos.</h2>
                <form class="restaurant-search-form2 brd-rd30" method="post" action="{{ route('filter.commerce') }}">
                    @csrf
                    <input class="brd-rd30" type="text" placeholder="Nombre Comercio">
                    <button class="brd-rd30 red-bg" type="submit">Buscar</button>
                </form>
            </div>
            <img class="left-scooty-mockup" src="{{ asset('styleWeb/assets/images/img-logo.png') }}"
                 alt="guiaceliaca.com.ar" itemprop="image">
            <img class="bottom-clouds-mockup" src="{{ asset('styleWeb/assets/images/resource/clouds.png') }}"
                 alt="guia celiaca" itemprop="image">
        </div><!-- Restaurant Searching -->
    </div>
</section>