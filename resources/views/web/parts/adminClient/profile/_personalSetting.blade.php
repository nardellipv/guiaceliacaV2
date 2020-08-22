<div class="tab-pane fade" id="personal-setting">
    <div class="tabs-wrp account-settings brd-rd5">
        <h4 itemprop="headline">Datos personales</h4>
        <div class="account-settings-inner">
            <form class="profile-info-form" method="post" action="{{ route('profile.update', $user) }}"
                  enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-lg-4">
                        <div class="profile-info text-center">
                            <div class="profile-thumb brd-rd50">
                                @if (!$user->logo)
                                    <img id="profile-display"
                                         src="{{ asset('styleWeb/assets/images/img-logo-grande.png') }}"
                                         alt="profile-img1.jpg" itemprop="image">
                                @else
                                    <img id="profile-display"
                                         src="{{ asset('users/images/' . $user->id . '/perfil/512x512-'. $user->picture) }}"
                                         alt="profile-img1.jpg" itemprop="image">
                                @endif
                            </div>
                            <div class="profile-img-upload-btn">
                                <label class="fileContainer brd-rd5 yellow-bg">
                                    Cambiar Imágen
                                    <input id="profile-upload" type="file" name="photo"/>
                                </label>
                            </div>
                            <p itemprop="description">Imagenes jpg, png. Menos de 1MB.</p>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8 col-lg-8">
                        <div class="profile-info-form-wrap">

                            <div class="row mrg20">
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <label>Nombre <sup>*</sup></label>
                                    <input class="brd-rd3" type="text" name="name"
                                           placeholder="Nombre"
                                           value="{{ $user->name }}">
                                </div>
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <label>Apellido <sup>*</sup></label>
                                    <input class="brd-rd3" type="text" name="lastname"
                                           placeholder="Apellido"
                                           value="{{ $user->lastname }}">
                                </div>
                            </div>
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <label>Provincia <sup>*</sup></label>
                                    @if($user->type == 'OWNER')
                                        <div class="select-wrp">
                                            <select class="select-wrp" name="province_id">
                                                @if($commerce->province_id)
                                                    <option value="">{{ $commerce->province->name }}</option>
                                                @else
                                                    <option value="">-- Elegir Provincia --</option>
                                                @endif
                                                @foreach($provinces as $province)
                                                    <option value="{{ $province->id }}">{{ $province->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    @else
                                        Solo para Cuentas Comercio
                                    @endif
                                </div>
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <label>Tipo de cuenta <sup>*</sup><i class="set-privacy fa fa-lock"></i></label>
                                    <input class="brd-rd3" type="text"
                                           value="{{ $user->type == 'OWNER' ? 'Cuenta Comercio' : 'Cuenta Cliente' }}"
                                           readonly>
                                </div>

                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <label>Email <sup>*</sup><i class="set-privacy fa fa-lock"></i></label>
                                    <input class="brd-rd3" type="text" value="{{ $user->email }}" readonly>
                                </div>

                                <div class="row mrg20">
                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                        <label>Resetear Contraseña </label>
                                        <input class="brd-rd3" type="password" name="password"
                                               placeholder="Contraseña">
                                    </div>
                                </div>
                            <br><br><br>
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <div class="loc-srch">
                                    <button class="brd-rd3 red-bg block" type="submit">Actualizar Datos</button>
                                </div>
                            </div>
                        </div>
                </div>
                </div>
            </form>
        </div>
    </div>
</div>
