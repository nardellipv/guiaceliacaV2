@extends('layouts.main')

@section('title', 'Registro en Guía Celíaca')

@section('og:url', 'https://guiaceliaca.com.ar/register')
@section('og:description', 'Registrate Gratis y ofrece tus productos sin TACC')

@section('content')
    <section>
        <div class="block top-padd30 gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="sec-box">
                            <h4>Registrarse</h4>
                            <div class="reservation-tabs-wrapper">
                                <form class="restaurant-info-form brd-rd5" method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="row mrg20">
                                        <div class="col-md-6 col-sm-6 col-lg-6">
                                            <label>Nombre <sup>*</sup></label>
                                            <input class="brd-rd3 @error('name') is-invalid @enderror"
                                            name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                                            type="text" placeholder="Nombre">
                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                         </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-lg-6">
                                            <label>Apellido <sup>*</sup></label>
                                            <input class="brd-rd3 @error('lastname') is-invalid @enderror" type="text"
                                                   name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname"
                                                   autofocus placeholder="Apellido">
                                            @error('lastname')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                         </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-lg-12">
                                            <label>Email <sup>*</sup></label>
                                            <input class="brd-rd3 @error('email') is-invalid @enderror" type="text"
                                                   name="email"
                                                   placeholder="Email" value="{{ old('email') }}" required autocomplete="email">
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                         </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-lg-6">
                                            <label>Contraseña <sup>*</sup></label>
                                            <input class="brd-rd3 @error('password') is-invalid @enderror"
                                                   type="password"
                                                   name="password"
                                                   placeholder="Password" required autocomplete="new-password">
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                          </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-lg-6">
                                            <label>Repetir Contraseña <sup>*</sup></label>
                                            <input class="brd-rd3" type="password" name="password_confirmation"
                                                   required autocomplete="new-password" placeholder="Repetir password">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                        <div class="check-box">
                                            <input type="checkbox" id="agrement" checked>
                                            <label for="agrement">Leí politicas de privacidad</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                        <div class="step-buttons">
                                            <button class="brd-rd3 red-bg" type="submit" title="" itemprop="url">Registrarse</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
