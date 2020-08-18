<div class="col-md-4 col-sm-12 col-lg-4">
    <div class="profile-sidebar brd-rd5 wow fadeIn" data-wow-delay="0.2s">
        <div class="profile-sidebar-inner brd-rd5">
            <div class="user-info red-bg">
                @if (!$user->picture)
                    <img class="brd-rd50 img-responsive" src="{{ asset('styleWeb/assets/images/img-logo-grande.png') }}" width="30%"
                         itemprop="image">
                @else
                    <img class="brd-rd50" src="{{ asset('users/images/' . $user->id . '/perfil/512x512-'. $user->picture) }}" alt="user-avatar.jpg"
                         itemprop="image">
                @endif
                <div class="user-info-inner">
                    <h5 itemprop="headline"><a href="#" title="" itemprop="url">{{ $user->name }}</a></h5>
                    <span><a href="#" title="" itemprop="url">{{ $user->email }}</a></span>
                    <a class="brd-rd3 sign-out-btn yellow-bg" href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                       title="" itemprop="url"><i
                                class="fa fa-sign-out"></i> Salir</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
            <ul class="nav nav-tabs">
                <li class="active"><a href="#dashboard" data-toggle="tab"><i class="fa fa-dashboard"></i> DASHBOARD</a></li>
                @if(Auth::user()->type == 'OWNER')
                <li><a href="#profile-commerce" data-toggle="tab"><i class="fa fa-building"></i> Perfil Comercial</a></li>
                <li><a href="#products" data-toggle="tab"><i class="fa fa-cart-plus"></i> Productos</a></li>
                <li><a href="#promotion" data-toggle="tab"><i class="fa fa-ticket"></i> Promociones</a></li>
                <li><a href="#messages" data-toggle="tab"><i class="fa fa-envelope"></i> Mensajes <span class="badge">{{ $countMessage }}</span></a></li>
                <li><a href="#comments" data-toggle="tab"><i class="fa fa-comment"></i> Comentarios <span class="badge">{{ $countComment }}</span></a></li>
                @endif
                <li><a href="#personal-setting" data-toggle="tab"><i class="fa fa-cog"></i> Datos Personales</a></li>
            </ul>
        </div>
    </div>
</div>