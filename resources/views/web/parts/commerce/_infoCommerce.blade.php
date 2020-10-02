<div class="tab-pane fade" id="tab1-5">
    <div class="restaurant-info-wrapper">
        <h3 class="title3" itemprop="headline"><span
                    class="sudo-bottom sudo-bg-red">Información</span>
            de {{ $commerce->name }}</h3>

        <iframe
                width="100%"

                height="300px"
                frameborder="0" style="border:0"
                src="https://www.google.com/maps/embed/v1/place?key=AIzaSyD7eUalpQrZ5TA9BrE5XgsudugZC7TIPYo
                                        &q={{ $commerce->address .','. $commerce->location . $commerce->province->name}}"
                allowfullscreen>
        </iframe>
        <ul class="restaurant-info-list">
            <li>
                <i class="fa fa-map-marker red-clr"></i>
                <strong>Dirección :</strong>
                <span>{{ $commerce->address }}
                    , {{ $commerce->province->name }}</span>
            </li>
            <li>
                <i class="fa fa-phone red-clr"></i>
                <strong>Teléfono :</strong>
                <span>{{ $commerce->phone }}</span>
            </li>
            <li>
                <i class="fa fa-link red-clr"></i>
                <strong>Sitio Web</strong>
                @if($commerce->web)
                    <span>{{ $commerce->web }}</span>
                @else
                    <span>Sin sitio web</span>
                @endif
            </li>
            <li>
                <i class="fa fa-facebook red-clr"></i>
                <strong>Facebook</strong>
                @if($commerce->facebook)
                    <span><a href="{{ $commerce->facebook }}"
                             target="_blank">{{ $commerce->facebook }}</a> </span>
                @else
                    <span>Sin Facebook</span>
                @endif
            </li>
            <li>
                <i class="fa fa-instagram red-clr"></i>
                <strong>Instagram</strong>
                @if($commerce->instagram)
                    <span><a href="{{ $commerce->instagram }}"
                             target="_blank">{{ $commerce->instagram }}</a> </span>
                @else
                    <span>Sin Instagram</span>
                @endif
            </li>
            <li>
                <i class="fa fa-whatsapp red-clr"></i>
                <strong>Whatsapp</strong>
                @if($commerce->phoneWsp)
                    <a class="brd-rd3" href="https://web.whatsapp.com/send?phone=549{{ $commerce->phoneWsp }}&text=Hola%2C%20te%20contacto%20desde%20guiaceliaca.com.ar%20Link-%3E%20%20https://guiaceliaca.com.ar/{{ $commerce->slug }}"
                             target="_blank">Enviar mensaje</a>
                @else
                    <span>Sin Whatsapp</span>
                @endif
            </li>
        </ul>
    </div>
</div>