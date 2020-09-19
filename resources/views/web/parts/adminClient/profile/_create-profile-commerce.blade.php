@extends('layouts.main')

@section('content')
    <section>
        <div class="block less-spacing gray-bg top-padd30">
            <div class="container">
                <div class="row">
                    @include('alerts.error')
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="sec-box">
                            <div class="dashboard-tabs-wrapper">
                                <div class="row">
                                    <div class="tab-content">
                                        <div class="tabs-wrp account-settings brd-rd5">
                                            <h4 itemprop="headline">Perfil Comercial</h4>
                                            <form class="profile-info-form" method="post"
                                                  action="{{ route('store.accountCommerce') }}"
                                                  enctype="multipart/form-data">
                                                @csrf
                                                <div class="account-settings-inner">
                                                    <div class="row">
                                                        <div class="col-md-4 col-sm-4 col-lg-4">
                                                            <div class="profile-info text-center">
                                                                <div class="profile-thumb brd-rd50">
                                                                    <img id="profile-display"
                                                                         src="{{ asset('styleWeb/assets/images/img-logo-grande.png') }}"
                                                                         alt="profile-img1.jpg" itemprop="image">
                                                                </div>
                                                                <div class="profile-img-upload-btn">
                                                                    <label class="fileContainer brd-rd5 yellow-bg">
                                                                        Cambiar Imágen
                                                                        <input id="profile-upload" type="file"
                                                                               name="photo"/>
                                                                    </label>
                                                                </div>
                                                                <p itemprop="description">Imagenes jpg, png. Menos de
                                                                    1MB.</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8 col-sm-8 col-lg-8">
                                                            <div class="profile-info-form-wrap">

                                                                <div class="row mrg20">
                                                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                                                        <label>Nombre del Comercio <sup>*</sup></label>
                                                                        <input class="brd-rd3" type="text" name="name"
                                                                               placeholder="Nombre Comercio"
                                                                               value="{{ old('name') }}" required>
                                                                    </div>
                                                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                                                        <label>Sobre el Comercio <sup>*</sup></label>
                                                                        <textarea class="brd-rd3" id="about"
                                                                                  name="about"
                                                                                  required>{{ old('about') }}</textarea>
                                                                    </div>
                                                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                                                        <label>Dirección <sup>*</sup></label>
                                                                        <input class="brd-rd3" type="text"
                                                                               name="address"
                                                                               placeholder="Dirección"
                                                                               value="{{ old('address') }}" required>
                                                                    </div>
                                                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                                                        <label>Teléfono <sup>*</sup></label>
                                                                        <input class="brd-rd3" type="text" name="phone"
                                                                               placeholder="Teléfono"
                                                                               value="{{ old('phone') }}">
                                                                    </div>
                                                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                                                        <label>Whatsapp</label>
                                                                        <input class="brd-rd3" type="text" name="phoneWsp"
                                                                               placeholder="Whatsapp (sin 0 ni 15)"
                                                                               value="{{ old('phoneWsp') }}">
                                                                    </div>
                                                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                                                        <label>Provincia <sup>*</sup></label>
                                                                        <div class="select-wrp">
                                                                            <select name="province_id" required>
                                                                                <option value="">-- Elegir Provincia
                                                                                    --
                                                                                </option>
                                                                                @foreach($provinces as $province)
                                                                                    <option value="{{ $province->id }}">{{ $province->name }}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                                                        <h4>Caracteristicas</h4>
                                                                        <h6 class="text-muted">Agregar
                                                                            Caracteristicas</h6>
                                                                        @foreach($characteristics as $characteristic)
                                                                            <div class="col-md-6 col-sm-6 col-lg-6">
                                        <span class="check-box"><input type="checkbox" name="characteristic_id[]"
                                                                       id="characteristic-{{ $characteristic->id }}"
                                                                       value="{{ $characteristic->id }}"><label
                                                    for="characteristic-{{ $characteristic->id }}">
                                                <span>{{ $characteristic->name }}</span></label></span>
                                                                            </div>
                                                                        @endforeach
                                                                    </div>

                                                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                                                        <h4>Medios de Pagos</h4>

                                                                        <h6 class="text-muted">Agregar Medios de
                                                                            pagos</h6>
                                                                        @foreach($payments as $payment)
                                                                            <div class="col-md-6 col-sm-6 col-lg-6">
                                        <span class="check-box"><input type="checkbox" name="payment_id[]"
                                                                       id="payment-{{ $payment->id }}"
                                                                       value="{{ $payment->id }}"><label
                                                    for="payment-{{ $payment->id }}">
                                                <span>{{ $payment->name }}</span></label></span>
                                                                            </div>
                                                                        @endforeach
                                                                    </div>

                                                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                                                        <label>Facebook </label>
                                                                        <input class="brd-rd3" type="text"
                                                                               name="facebook"
                                                                               placeholder="Facebook"
                                                                               value="{{ old('facebook') }}">
                                                                    </div>
                                                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                                                        <label>Instagram</label>
                                                                        <input class="brd-rd3" type="text"
                                                                               name="instagram"
                                                                               placeholder="instagram"
                                                                               value="{{ old('instagram') }}">
                                                                    </div>

                                                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                                                        <label>Pagina Web</label>
                                                                        <input class="brd-rd3" type="text" name="web"
                                                                               placeholder="Web"
                                                                               value="{{ old('web') }}">
                                                                    </div>
                                                                </div>
                                                                <br><br><br>
                                                                <div class="col-md-8 col-sm-8 col-lg-8">
                                                                    <div class="loc-srch">
                                                                        <button class="brd-rd3 red-bg block"
                                                                                type="submit">Crear Comercio
                                                                        </button>
                                                                    </div>
                                                                </div><div class="col-md-4 col-sm-4 col-lg-4">
                                                                    <div class="loc-srch">
                                                                        <a href="{{ route('profile') }}" class="btn btn-reverse signin-button"
                                                                                type="submit">Volver
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection