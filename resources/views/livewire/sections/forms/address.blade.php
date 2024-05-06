<div>

    <form wire:submit="store">

        <div class="row shadow-sm">
            <legend class="mb-3"> <span class="number"> 3 </span> Dados Residenciais </legend>

            <div class="col-3 mb-3">
                <label for="estado_id" class="form-label">Estado</label>
                <select name="estado_id" id="" class="form-select">
                    @foreach ($estados as $item)
                        <option value="{{ $item->id }}"> {{ $item->codigo }} </option>
                    @endforeach
                </select>
            </div>

            <div class="col-3 mb-3">
                <label for="endereco" class="form-label">Endereço</label>
                <input type="text" class="form-control" id="endereco" name="endereco">
            </div>

            <div class="col-3 mb-3">
                <label for="bairro" class="form-label">Bairro</label>
                <input type="text" class="form-control" id="bairro" name="bairro">
            </div>

            <div class="col-3 mb-3">
                <label for="cidade" class="form-label">Cidade</label>
                <input type="text" class="form-control" id="cidade" name="cidade">
            </div>

            <div class="col-3 mb-3">
                <label for="uf_residencia" class="form-label">UF de Residência</label>
                <input type="text" class="form-control" id="uf_residencia" name="uf_residencia">
            </div>

            <div class="col-3 mb-3">
                <label for="cep" class="form-label">CEP</label>
                <input type="text" class="form-control" id="cep" name="cep">
            </div>

            <div class="col-3 mb-3">
                <label for="telefone_residencial" class="form-label">Telefone Residencial</label>
                <input type="text" class="form-control" id="telefone_residencial" name="telefone_residencial">
            </div>

            <div class="col-3 mb-3">
                <label for="telefone_celular" class="form-label">Telefone Celular</label>
                <input type="text" class="form-control" id="telefone_celular" name="telefone_celular">
            </div>

            <div class="col-3 mb-3">
                <label for="telefone_comercial" class="form-label">Telefone Comercial</label>
                <input type="text" class="form-control" id="telefone_comercial" name="telefone_comercial">
            </div>
        </div>

        <button class="btn btn-success" type="submit">
            Enviar
        </button>


    </form>

</div>
