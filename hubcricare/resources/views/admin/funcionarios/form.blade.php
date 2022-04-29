<div class="form-row">

<div class="form-group col-md-12 col-sm-12">
        <label for="name">Nome do Funcionário:</label>
        <div>
            <input type="text" id="name" name="name" value="{{ isset($funcionario)? $funcionario->name: old('name') }}" class="form-control @error('name') is-invalid @enderror" placeholder="Adicione um nome paro o Funcionário...." required>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <i class="fi-circle-cross"></i><strong> {{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group col-md-12 col-sm-12">
        <label class="required" for="email">E-mail</label>
        <div>
            <input type="email" id="email" name="email" value="{{ isset($funcionario)? $funcionario->email: old('email') }}"
                class="form-control @error('email') is-invalid @enderror" placeholder="Adicione um e-mail" required>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <i class="fi-circle-cross"></i><strong> {{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group col-md-12 col-sm-12">
        <label class="required" for="phone">Whatsapp</label>
        <div>
            <input type="tel" id="phone" name="phone" value="{{ isset($funcionario)? $funcionario->phone: old('phone') }}"
                class="form-control @error('phone') is-invalid @enderror" placeholder="" required>
            @error('phone')
                <span class="invalid-feedback" role="alert">
                    <i class="fi-circle-cross"></i><strong> {{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group col-md-3 col-sm-12">
        <label for="dt_nasc">Data de Nascimento:</label>
        <div>
            <input type="date" id="dt_nasc" name="dt_nasc" value="{{ isset($funcionario) ? $funcionario->dt_nasc->format('Y-m-d') : old('dt_nasc') }}" class="form-control @error('dt_nasc') is-invalid @enderror" required>
            @error('dt_nasc')
                <span class="invalid-feedback" role="alert">
                    <i class="fi-circle-cross"></i><strong> {{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group col-md-9 col-sm-12">
        <label for="setor">Setor:</label>
        <div>
            <input type="text" id="setor" name="setor" value="{{ isset($funcionario)? $funcionario->setor: old('setor') }}" class="form-control @error('setor') is-invalid @enderror" placeholder="Adicione um Setor...." required>
            @error('setor')
                <span class="invalid-feedback" role="alert">
                    <i class="fi-circle-cross"></i><strong> {{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group col-md-6 col-sm-12">
        <label for="image">Imagem:</label>
        <input type="file" id="image" name="image" at1="image" class="form-control" accept="image/*" @if(isset($funcionario->image)) @else required @endif>
    </div>
    @if(isset($funcionario))
        <div class="form-group col-md-6 col-sm-12">
            <label for="image">Imagem Atual:</label>
            <div><img src="/storage/{{ $funcionario->image }}" alt="imagem Serviço" style="max-height: 430px; max-width: 520px; object-fit: cover;"></div>
        </div>
    @endif

    @section('script')
        <script type="text/javascript">
            $(document).ready(function() {
                $('#phone').val(phoneMask($('#phone').val()));
            });
            $("#phone").keypress(function() {
                $('#phone').val(phoneMask($('#phone').val()));
            });
            $("#phone").keydown(function() {
                $('#phone').val(phoneMask($('#phone').val()));
            });
            $("#phone").keyup(function() {
                $('#phone').val(phoneMask($('#phone').val()));
            });
        </script>
    @endsection

</div>