@extends('layouts.main')

@section('content')
    <section>
        <div class="block less-spacing gray-bg top-padd30">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        @include('alerts.error')
                        <div class="sec-box">
                            <div class="contact-info-sec text-center">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <div class="contact-info-box">
                                            <i class="fa fa-map-marker"></i>
                                            <h5 itemprop="headline">Dirección</h5>
                                            <p itemprop="description">Las Heras, Mendoza, Argentina</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <div class="contact-info-box">
                                            <i class="fa fa-envelope"></i>
                                            <h5 itemprop="headline">EMAIL</h5>
                                            <p itemprop="description">info@guiaceliaca.com.ar</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="contact-form-wrapper text-center">
                                <div class="contact-form-inner">
                                    <h3 itemprop="headline">Si tienes alguna pregunta, duda o sugerencia, por favor
                                        Contactanos</h3>
                                    <form method="post" action="{{ route('MailContactToSite') }}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12 col-sm-6 col-lg-12">
                                                <input id="name" type="text" name="name" placeholder="Nombre"
                                                       value="{{ old('name') }}" required>
                                            </div>
                                            <div class="col-md-12 col-sm-6 col-lg-12">
                                                <input id="email" type="email" name="email" placeholder="Email"
                                                       value="{{ old('email') }}"
                                                       required>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-lg-12">
                                                <input type="text" name="subject" placeholder="Asunto"
                                                       value="{{ old('subject') }}" required>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-lg-12">
                                                <textarea id="comments" name="messageText" placeholder="Mensaje"
                                                          required>{{ old('messageText') }}</textarea>
                                                {!! htmlFormSnippet() !!}
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-lg-12">
                                                <button class="brd-rd2" id="submit" type="submit">Enviar Mensaje
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div><!-- Contact Form Wrapper -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection