@csrf
<div class="container mt-5">
    <div class="row mb-2">
        <div class="mb-2 col-sm-5">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" maxlength="70" id="nome"
                value="{{ $cliente->nome ?? old('nome') }}">
        </div>
        <div class="mb-2 col-sm-5">
            <label for="endereco">Endereço</label>
            <input type="text" class="form-control" name="endereco" maxlength="70" id="endereco"
                value="{{ $cliente->endereco ?? old('endereco') }}">
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-sm-5">
            <label for="bairro">Bairro</label>
            <input type="text" class="form-control" name="bairro" maxlength="30" id="bairro"
                value="{{ $cliente->bairro ?? old('bairro') }}">
        </div>
        <div class="col-sm-5">
            <label for="cidade">Cidade</label>
            <input type="text" class="form-control" name="cidade" maxlength="30" id="cidade"
                value="{{ $cliente->cidade ?? old('cidade') }}">
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-sm-5">
            <label for="uf">UF</label>
            <input type="text" class="form-control" name="uf" maxlength="12" id="uf"
                value="{{ $cliente->uf ?? old('uf') }}">
        </div>
        <div class="col-sm-5">
            <label for="cep">CEP</label>
            <input type="text" class="form-control" name="cep" maxlength="12" id="cep"
                value="{{ $cliente->CEP ?? old('cep') }}">
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-sm-5">
            <label for="cpf">CPF</label>
            <input type="text" class="form-control" name="cpf" maxlength="16" id="cpf"
                value="{{ $cliente->CPF ?? old('cpf') }}">
        </div>
        <div class="col-sm-5">
            <label for="telefone">Telefone</label>
            <input type="text" class="form-control" name="telefone" maxlength="16" id="telefone"
                value="{{ $cliente->telefone ?? old('telefone') }}">
        </div>
    </div>
</div>

<button type="submit" class="btn btn-primary btn-lg">Gravar Registro</button>
