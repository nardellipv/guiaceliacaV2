@if (count($errors) > 0)
    <div class="welcome-note yellow-bg brd-rd5">
        <h4 itemprop="headline">Por favor revise los siguientes errores</h4>
        <ul>
            @foreach ($errors->all() as $error)
                <li> {{ $error }}</li>
            @endforeach
        </ul>
        <img src="{{ asset('styleWeb/assets/images/resource/welcome-note-img.png') }}" alt="welcome-note-img.png"
             itemprop="image">
        <a class="remove-noti" href="#" title="" itemprop="url"><img
                    src="{{ asset('styleWeb/assets/images/close-icon.png') }}" alt="close-icon.png"
                    itemprop="image"></a>
    </div>
@endif