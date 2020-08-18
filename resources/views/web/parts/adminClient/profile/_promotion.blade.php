<div class="tab-pane fade" id="promotion">
    <div class="tabs-wrp brd-rd5">
        <h4 itemprop="headline">Crear Promoción</h4>
        <div class="profile-info-form-wrap">
            <form class="profile-info-form" method="post" action="{{ route('store.promotion') }}"
                  enctype="multipart/form-data">
                @csrf
                <div class="row mrg20">
                    <div class="col-md-6 col-sm-6 col-lg-6">
                        <label>Nombre <sup>*</sup></label>
                        <input class="brd-rd3" type="text" placeholder="Nombre" name="name"
                               value="{{ old('name') }}" required>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6">
                        <label>Descripción <sup>*</sup></label>
                        <input class="brd-rd3" type="text" placeholder="descripción"
                               name="text"
                               value="{{ old('text') }}" required>
                    </div>
                </div>
                <div class="row mrg20">
                    <div class="col-md-6 col-sm-6 col-lg-6">
                        <label>Descuento <sup>*</sup></label>
                        <input class="brd-rd3" type="text" name="percentage" id="price"
                               placeholder="Porcentaje Descuento" value="{{ old('percentage') }}">
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6">
                        <label>Fecha Fin <sup>*</sup></label>
                        <input class="brd-rd3" type="date" name="end_date" id="date"
                               placeholder="Fecha Fin" value="{{ old('end_date') }}" required>
                    </div>
                    <div class="rite-meta">
                        <button type="submit" title="" class="view-more" style="margin: 0px 10px 20px 0px;">Crear
                            Promoción
                        </button>
                    </div>
                </div>
            </form>
        </div>

        <div class="statement-table">
            <table>
                <thead>
                <tr>
                    <th>Imágen</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Porcentaje</th>
                    <th>Acción</th>
                </tr>
                </thead>
                <tbody>
                @forelse($promotions as $promotion)
                    <tr>
                        <td>
                            <img
                                    src="{{ asset('users/images/' . Auth::user()->id . '/voucher/' . $promotion->percentage .'-'. $promotion->end_date .'.jpg') }}"
                                    width="75%">

                        </td>
                        <td>{{ Str::limit($promotion->name,30) }}</td>
                        <td>{{ $promotion->text }}</td>
                        <td><span class="red-clr">{{ $promotion->percentage }}%</span></td>
                        <td>
                            <a class="detail-link brd-rd50" href="{{ route('delete.promotion', $promotion) }}" title=""
                               itemprop="url"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                @empty
                    <h4>No se ha creado ninguna promoción.</h4>
                @endforelse
                </tbody>
            </table>
        </div><!-- Statement Table -->
    </div>
</div>