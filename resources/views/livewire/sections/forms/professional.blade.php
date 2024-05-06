<div>
    <div class="row shadow-sm">
        <legend class="mb-3"> <span class="number"> 1 </span> Dados Profissionais </legend>
        <hr>

        <div class="col-3 mb-3">
            <label for="matricula" class="form-label">Matrícula</label>
            <input type="text" required class="form-control" name="matricula">
            <div class="invalid-feedback">
                Por favor, insira uma matrícula.
            </div>
        </div>

        <div class="col-3 mb-3">
            <label for="admissao" class="form-label">Data de Admissão</label>
            <input type="date" class="form-control" name="dt_admissao">
            <div class="invalid-feedback">
                Por favor, insira uma data de admissão.
            </div>
        </div>

        <div class="col-3 mb-3">
            <label for="cargo" class="form-label">Cargo</label>
            <input type="text" required class="form-control" name="cargo">
            <div class="invalid-feedback">
                Por favor, insira um cargo.
            </div>
        </div>

        <div class="col-3 mb-3">
            <label for="funcao" class="form-label">Função</label>
            <input type="text" required class="form-control" name="funcao">
            <div class="invalid-feedback">
                Por favor, insira uma função.
            </div>
        </div>

        <div class="col-3 mb-3">
            <label for="funcao" class="form-label">Nivel E.P</label>
            <input type="text" required class="form-control" name="nivel_ep">
            <div class="invalid-feedback">
                Por favor, insira uma função.
            </div>
        </div>

        <div class="col-3 mb-3">
            <label for="basic-url" class="form-label"> Regime </label>
            <select name="idRegime" class="form-select" id="">
                <option value="40">40h</option>
                <option value="30">30h</option>
                <option value="20">20h</option>
            </select>
            <div class="invalid-feedback">
                Por favor, insira um regime.
            </div>
        </div>


        <div class="col-3 mb-3">
            <label for="salario_referencia" class="form-label">Referência Salarial</label>
            <input type="text" required class="form-control" name="salario_referencia">
            <div class="invalid-feedback">
                Por favor, insira um Referência Salarial.
            </div>
        </div>

        <div class="col-3 mb-3">
            <label for="carga_horaria_semanal" class="form-label">Carga Horária Semanal</label>
            <input type="number" class="form-control" name="carga_horaria_semanal">
            <div class="invalid-feedback">
                Por favor, insira uma Carga Horária Semanal.
            </div>
        </div>

        <div class="col-3 mb-3">
            <label for="basic-url" class="form-label"> Pessoa com Deficiência? </label>
            <select name="pcd" class="form-select" id="">
                <option value="1">Sim</option>
                <option value="0">Não</option>
            </select>
            <div class="invalid-feedback">
                Por favor, insira uma pessoa com deficiência.
            </div>
        </div>

        <div class="col-3 mb-3">
            <label for="reducao_carga_horaria" class="form-label">Redução Carga Horária</label>
            <input type="number" class="form-control" name="reducao_carga_horaria">
            <div class="invalid-feedback">
                Por favor, insira uma redução de carga horária.
            </div>
        </div>

        <div class="col-3 mb-3">
            <label for="basic-url" class="form-label"> Readaptado? </label>
            <select name="readaptado" class="form-select" id="">
                <option value="1">Sim</option>
                <option value="0">Não</option>
            </select>
            <div class="invalid-feedback">
                Por favor, insira uma pessoa com deficiência.
            </div>
        </div>


        <div class="col-3 mb-3">
            <label for="admissao" class="form-label">Lotado na CREC em:</label>
            <input type="date" class="form-control" name="admissao">
            <div class="invalid-feedback">
                Por favor, insira uma data de Lotação.
            </div>
        </div>

        <div class="col-3 mb-3">
            <label for="basic-url" class="form-label"> Lotação </label>
            <select name="lotacao" class="form-select" id="">
                <option value="1">Definitiva</option>
                <option value="2">Provisória</option>
                <option value="3">Ex-Ofício</option>
                <option value="4">Professor Subistituto</option>
                <option value="5">Estagiário</option>
            </select>
            <div class="invalid-feedback">
                Por favor, insira uma lotação.
            </div>
        </div>
    </div>
