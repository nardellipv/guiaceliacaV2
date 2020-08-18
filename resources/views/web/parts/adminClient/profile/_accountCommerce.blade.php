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
                                    @include('web.parts.adminClient.profile._asideProfile')
                                    <div class="col-md-8 col-sm-12 col-lg-8">
                                        <div class="tab-content">
                                            <div class="tab-pane fade in active" id="dashboard">
                                                <div class="tabs-wrp account-settings brd-rd5">
                                                    <h4 itemprop="headline">Perfil</h4>
                                                    <div class="account-settings-inner">
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12 col-lg-12">
                                                                <div class="profile-info-form-wrap">
                                                                        <div class="row mrg20">
                                                                            <div class="col-md-5 col-sm-5 col-lg-5">
                                                                                <label>Nombre</label>
                                                                                 {{ $user->name }}
                                                                            </div>
                                                                            <div class="col-md-5 col-sm-5 col-lg-5">
                                                                                <label>Apellido </label>
                                                                                {{ $user->lastname }}
                                                                            </div>
                                                                            <div class="col-md-5 col-sm-5 col-lg-5">
                                                                                <label>Provincia</label>
                                                                                @if($user->type == 'OWNER')
                                                                                    {{ $commerce->province->name }}
                                                                                @else
                                                                                    Solo para Cuentas Comercio
                                                                                    <i class="set-privacy fa fa-lock"></i>
                                                                                @endif
                                                                            </div>
                                                                            <div class="col-md-5 col-sm-5 col-lg-5">
                                                                                <label>Tipo de cuenta </label>
                                                                                {{ $user->type == 'OWNER' ? 'Cuenta Comercio' : 'Cuenta Cliente'}}
                                                                            </div>
                                                                        </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @if(Auth::user()->type == 'OWNER')
                                             @include('web.parts.adminClient.profile._profile-commerce')
                                             @include('web.parts.adminClient.profile._product')
                                             @include('web.parts.adminClient.profile._promotion')
                                             @include('web.parts.adminClient.profile._message')
                                             @include('web.parts.adminClient.profile._comments')
                                            @endif
                                             @include('web.parts.adminClient.profile._personalSetting')
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