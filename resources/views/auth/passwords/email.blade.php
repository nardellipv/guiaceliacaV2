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
                                    @if (session('status'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('status') }}
                                        </div>
                                    @endif
                                    <div class="sign-popup-wrapper brd-rd5">
                                        <div class="sign-popup-inner brd-rd5">
                                            <div class="sign-popup-title text-center">
                                                <h4 itemprop="headline">Recuperar contraseña</h4>
                                            </div>
                                            <form class="sign-form" method="POST" action="{{ route('password.email') }}">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                                                        <input id="email" type="email"
                                                               class="brd-rd3 @error('email') is-invalid @enderror"
                                                               name="email" value="{{ old('email') }}" required
                                                               autocomplete="email" autofocus
                                                               placeholder="EMail">
                                                        @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                                                        <button class="red-bg brd-rd3" type="submit">{{ __('Enviar Link') }}</button>
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
