<div class="form-row">
    <div class="form-group col-md-12 col-sm-12">
        <label for="name">Nome do Produto:</label>
        <div>
            <input type="text" id="name" name="name" value="{{ isset($product)? $product->name: old('name') }}" class="form-control @error('name') is-invalid @enderror" placeholder="Adicione um nome paro o projeto...." required>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <i class="fi-circle-cross"></i><strong> {{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group col-md-12 col-sm-12">
        <label for="description">Descrição:</label>
        <div>
            <textarea id="description" name="description" class="ckeditor form-control @error('description') is-invalid @enderror" placeholder="Adiciona uma descrição" required>{{ isset($product)? $product->description: old('description') }}</textarea>
            @error('description')
                <span class="invalid-feedback" role="alert">
                    <i class="fi-circle-cross"></i><strong> {{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group col-md-6">
        <label for="productcategorie_id">Categorias para o Produto:</label>
        <select id="productcategorie_id" name="productcategorie_id" class="form-control" required>
            <option> ->> Selecione uma Categoria <<- </option>
            @isset($categories)
                @foreach ($categories as $categorie)
                    <option
                        @if(isset($product) && $product->productcategorie_id == $categorie->id)
                            selected
                        @endif
                        value="{{$categorie->id}}">{{$categorie->categorie}}</option>
                @endforeach
            @endisset
        </select>
    </div>

    <div class="form-group col-md-6 col-sm-12">
        <label for="image">Imagem:</label>
        <input type="file" id="image" name="image" at1="image" class="form-control" accept="image/*" @if(isset($product->image)) @else required @endif>
    </div>
    @if(isset($product))
        <div class="form-group col-md-6 col-sm-12">
            <label for="image">Imagem Atual:</label>
            <div><img src="/storage/{{ $product->image }}" alt="imagem Serviço" style="max-height: 430px; max-width: 520px; object-fit: cover;"></div>
        </div>
     @endif
</div>