<form action="{{ $action }}" method="post">
    @csrf
    @if($update)
        @method('PUT')
    @endif
    @if($update)
        @method('PUT')
    @endif
    @if($update)
        @method('PUT')
    @endif
    <div class="mb-3" >
        <label for="nome" class="form-label">Nome</label>
        <input type="text" id="nome" name="nome" class="form-control"
               @isset($nome)value="{{ $nome }}"@endisset>

        <label for="cpf" class="form-label">CPF</label>
        <input type="number" id="cpf" name="cpf" class="form-control"
               @isset($cpf)value="{{ $cpf }}"@endisset>

        <label for="telefone" class="form-label">Telefone</label>
        <input type="number" id="telefone" name="telefone" class="form-control"
               @isset($telefone)value="{{ $telefone }}"@endisset>
    </div>

    <div class="mb-3" >
        <label for="data_do_debito" class="form-label">Data do Debito</label>
        <input type="date" id="data_do_debito" name="data_do_debito" class="form-control"
               @isset($nome)value="{{ $nome }}"@endisset>

        <label for="valor_da_divida" class="form-label">Valor da Divida</label>
        <input type="number" id="valor_da_divida" name="valor_da_divida" step="0.01" class="form-control"
               @isset($cpf)value="{{ $cpf }}"@endisset>

        <label for="data_de_vencimento" class="form-label">Data de Vencimento</label>
        <input type="date" id="data_de_vencimento" name="data_de_vencimento" class="form-control"
               @isset($nome)value="{{ $nome }}"@endisset>

        <label for="valor_do_acordo" class="form-label">Valor do Acordo</label>
        <input type="number" id="valor_do_acordo" name="valor_do_acordo" step="0.01" class="form-control"
               @isset($cpf)value="{{ $cpf }}"@endisset>

        <label for="fornecedor" class="form-label">Fornecedor</label>
        <input type="text" id="fornecedor" name="fornecedor" class="form-control"
               @isset($nome)value="{{ $nome }}"@endisset>
    </div>

    <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
