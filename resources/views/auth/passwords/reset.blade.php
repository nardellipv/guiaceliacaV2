@extends('layouts.main')

@section('content')
    <section>
        <div class="block top-padd30">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="login-register-wrapper">
                            <div class="row">
                                <div class="col-md-6 col-sm-12 col-lg-6 col-md-offset-3">
                                    <div class="sign-popup-wrapper brd-rd5">
                                        <div class="sign-popup-inner brd-rd5">
                                            <div class="sign-popup-title text-center">
                                                <h4 itemprop="headline">Recuperar contraseña</h4>
                                            </div>
                                            <form class="sign-form" method="POST" action="{{ route('password.update') }}">
                                                @csrf
                                                <input type="hidden" name="token" value="{{ $token }}">
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                                                        <input id="email" type="email"
                                                               class="brd-rd3 @error('email') is-invalid @enderror"
                                                               name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                                                    </div>

                                                    <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                                                        <input id="password" type="password"
                                                               class="brd-rd3 @error('password') is-invalid @enderror"
                                                               name="password" required autocomplete="new-password">
                                                        @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>

                                                    <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                                                        <input id="password-confirm" type="password"
                                                               class="brd-rd3"
                                                               name="password_confirmation" required autocomplete="new-password">
                                                    </div>

                                                    <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                                                        <button class="red-bg brd-rd3" type="submit">{{ __('Recuperar') }}</button>
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
