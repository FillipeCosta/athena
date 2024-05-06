<div>
    <h1>Dados Pessoais</h1>
    <form wire:submit="store">
        <div class="row shadow-sm">


            <div class="col-3  mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text"  class="form-control" wire:model="nome">
            </div>


            <div class="col-3  mb-3">
                <label for="apelido" class="form-label">Apelido</label>
                <input type="text"  class="form-control" name="apelido">
                @error('apelido') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>


            <div class="col-3 mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" wire:model="email">
                @error('email') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>

            <!-- Campo Data de Nascimento -->
            <div class="col-3 mb-3">
                <label for="data_nascimento" class="form-label">Data de Nascimento</label>
                <input type="date" class="form-control" id="data_nascimento" name="data_nascimento">
                <div class="invalid-feedback">
                    Por favor, insira um nome.
                </div>
            </div>

            <!-- Campo Sexo -->
            <div class="col-3 mb-3">
                <label for="sexo" class="form-label">Sexo</label>
                <input type="text" class="form-control" id="sexo" name="sexo">
                <div class="invalid-feedback">
                    Por favor, insira um nome.
                </div>
                <div class="invalid-feedback">
                    Por favor, insira um nome.
                </div>
            </div>

            <!-- Campo Cor/Raça -->
            <div class="col-3 mb-3">
                <label for="cor_raca" class="form-label">Cor/Raça</label>
                <input type="text" class="form-control" id="cor_raca" name="cor_raca">
                <div class="invalid-feedback">
                    Por favor, insira um nome.
                </div>
            </div>

            <!-- Campo Nacionalidade -->
            <div class="col-3 mb-3">
                <label for="nacionalidade" class="form-label">Nacionalidade</label>
                <input type="text" class="form-control" id="nacionalidade" name="nacionalidade">
                <div class="invalid-feedback">
                    Por favor, insira um nome.
                </div>
            </div>

            <!-- Campo UF de Naturalidade -->
            <div class="col-3 mb-3">
                <label for="uf_naturalidade" class="form-label">UF de Naturalidade</label>
                <input type="text" class="form-control" id="uf_naturalidade" name="uf_naturalidade">
                <div class="invalid-feedback">
                    Por favor, insira um nome.
                </div>
            </div>

            <!-- Campo Naturalidade -->
            <div class="col-3 mb-3">
                <label for="naturalidade" class="form-label">Naturalidade</label>
                <input type="text" class="form-control" id="naturalidade" name="naturalidade">
                <div class="invalid-feedback">
                    Por favor, insira um nome.
                </div>
            </div>

            <!-- Campo Número do RG -->
            <div class="col-3 mb-3">
                <label for="ci_numero" class="form-label">Número do RG</label>
                <input type="text" class="form-control" id="rg_numero" name="rg_numero">
                <div class="invalid-feedback">
                    Por favor, insira um nome.
                </div>
            </div>

            <!-- Campo Órgão Emissor do RG -->
            <div class="col-3 mb-3">
                <label for="rg_orgao_emissor" class="form-label">Órgão Emissor do RG</label>
                <input type="text" class="form-control" id="rg_orgao_emissor" name="rg_orgao_emissor">
                <div class="invalid-feedback">
                    Por favor, insira um nome.
                </div>
            </div>

            <!-- Campo UF do RG -->
            <div class="col-3 mb-3">
                <label for="rg_uf" class="form-label">UF do RG</label>
                <input type="text" class="form-control" id="rg_uf" name="rg_uf">
                <div class="invalid-feedback">
                    Por favor, insira um nome.
                </div>
            </div>

            <!-- Campo Data de Emissão do RG -->
            <div class="col-3 mb-3">
                <label for="rg_data_emissao" class="form-label">Data de Emissão do RG</label>
                <input type="date" class="form-control" id="rg_data_emissao" name="rg_data_emissao">
                <div class="invalid-feedback">
                    Por favor, insira um nome.
                </div>
            </div>

            <!-- Campo CPF -->
            <div class="col-3 mb-3">
                <label for="cpf" class="form-label">CPF</label>
                <input type="text" class="form-control" id="cpf" name="cpf">
                <div class="invalid-feedback">
                    Por favor, insira um nome.
                </div>
            </div>

            <!-- Campo PIS/PASEP -->
            <div class="col-3 mb-3">
                <label for="pis_pasep" class="form-label">PIS/PASEP</label>
                <input type="text" class="form-control" id="pis_pasep" name="pis_pasep">
                <div>@error('pisPasep') {{ $message }} @enderror</div>
                <div class="invalid-feedback">
                    Por favor, insira um nome.
                </div>
            </div>

            <!-- Campo Título de Eleitor -->
            <div class="col-3 mb-3">
                <label for="titulo_eleitoral_numero" class="form-label">Título de Eleitor</label>
                <input type="text" class="form-control" id="titulo_eleitoral_numero"
                    name="titulo_eleitoral_numero">
                <div class="invalid-feedback">
                    Por favor, insira um nome.
                </div>
            </div>

            <!-- Campo Zona Eleitoral -->
            <div class="col-3 mb-3">
                <label for="zona_eleitoral" class="form-label">Zona Eleitoral</label>
                <input type="text" class="form-control" id="zona_eleitoral" name="zona_eleitoral">
                <div class="invalid-feedback">
                    Por favor, insira um nome.
                </div>
            </div>

            <!-- Campo Seção Eleitoral -->
            <div class="col-3 mb-3">
                <label for="secao_eleitoral" class="form-label">Seção Eleitoral</label>
                <input type="text" class="form-control" id="secao_eleitoral" name="secao_eleitoral">
                <div class="invalid-feedback">
                    Por favor, insira um nome.
                </div>
            </div>

            <!-- Campo Estado Civil -->
            <div class="col-3 mb-3">
                <label for="estado_civil" class="form-label">Estado Civil</label>
                <input type="text" class="form-control" id="estado_civil" name="estado_civil">
                <div class="invalid-feedback">
                    Por favor, insira um nome.
                </div>
            </div>

            <!-- Campo Nome do Cônjuge -->
            <div class="col-3 mb-3">
                <label for="nome_conjuge" class="form-label">Nome do Cônjuge</label>
                <input type="text" class="form-control" id="nome_conjuge" name="nome_conjuge">
                <div class="invalid-feedback">
                    Por favor, insira um nome.
                </div>
            </div>

            <!-- Campo Nome do Pai -->
            <div class="col-3 mb-3">
                <label for="nome_pai" class="form-label">Nome do Pai</label>
                <input type="text" class="form-control" id="nome_pai" name="nome_pai">
                <div class="invalid-feedback">
                    Por favor, insira um nome.
                </div>
            </div>

            <!-- Campo Nome da Mãe -->
            <div class="col-3 mb-3">
                <label for="nome_mae" class="form-label">Nome da Mãe</label>
                <input type="text" class="form-control" id="nome_mae" name="nome_mae">
                <div class="invalid-feedback">
                    Por favor, insira um nome.
                </div>
            </div>

        </div>
        <button type="submit" class="btn btn-success"> Enviar </button>
    </form>
</div>
