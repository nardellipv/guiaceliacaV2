<div class="tab-pane fade" id="products">
    <div class="tabs-wrp brd-rd5">
        <h4 itemprop="headline">Crear Producto</h4>
        <div class="profile-info-form-wrap">
            <form class="profile-info-form" method="post" action="{{ route('product.create') }}" enctype="multipart/form-data">
                @csrf
                <div class="row mrg20">
                    <div class="col-md-6 col-sm-6 col-lg-6">
                        <label>Nombre <sup>*</sup></label>
                        <input class="brd-rd3" type="text" placeholder="Nombre" name="name"
                               value="{{ old('name') }}" required>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6">
                        <label>Categoría <sup>*</sup></label>
                        <div class="select-wrp">
                            <select name="category_id" required>
                                <option value="">-- Categorías --</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6">
                        <label>Precio <sup>*</sup></label>
                        <input class="brd-rd3" type="number" name="price" id="price"
                               placeholder="Precio" value="{{ old('price') }}" required >
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6">
                        <div class="profile-img-upload-btn">
                            <label class="fileContainer brd-rd5 yellow-bg">
                                Subir Imágen
                                <input id="profile-upload" type="file" name="photo"/>
                            </label>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <label>Sobre el producto <sup>*</sup></label>
                        <textarea class="brd-rd3" id="description" name="description"
                                 placeholder="Información del producto" required>{{ old('description') }}</textarea>
                    </div>
                    <div class="rite-meta">
                        <button type="submit" title="" class="view-more" style="margin: 0px 10px 20px 0px;">Crear
                            Producto
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
                    <th>Precio</th>
                    <th>Acción</th>
                </tr>
                </thead>
                <tbody>
                @forelse($products as $product)
                    <tr>
                        <td>
                            @if (!$product->photo)
                                <img src="{{ asset('styleWeb/assets/images/img-logo-grande.png') }}"
                                     width="75%">
                            @else
                                <img src="{{ asset('users/images/' . Auth::user()->id . '/producto/100x100-'. $product->photo) }}">
                            @endif

                        </td>
                        <td>{{ Str::limit($product->name,30) }}</td>
                        <td class="hidden-xs">{{ Str::limit($product->description, 50) }}</td>
                        <td class="hidden-xs">$ {{ $product->price }}</td>
                        <td><a href="{{ route('product.deleteAction', $product) }}"><i class="icon fa fa-trash" style="color: red"></i></a></td>
                    </tr>
                    @empty
                        <h4>No se ha creado ningún producto. Le recomendamos mostar sus productos a los visitantes del sitio.</h4>
                    @endforelse
                </tbody>
            </table>
        </div><!-- Statement Table -->
    </div>
</div>