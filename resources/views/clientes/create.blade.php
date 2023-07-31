<x-layout title="Novo Cliente">

{{--    <x-clientes.form :action="route('clientes.store')" :nome="old('nome')" :cpf="old('cpf')" :telefone="old('telefone')" :update="false" />--}}

{{--    <form action="/clientes/salvar" method="post">--}}
{{---------------------------------------------------------------}}
{{--    apagar essa informaçõ pois será substituida pela tag x-clientes.form --}}
{{--    <form action="{{ route('clientes.store') }}" method="post">--}}
{{--        @csrf--}}
{{--        <div class="mb-3" >--}}
{{--            <label for="nome" class="form-label">Nome</label>--}}
{{--            <input type="text" id="nome" name="nome" class="form-control">--}}
{{--            <label for="cpf" class="form-label">CPF</label>--}}
{{--            <input type="number" id="cpf" name="cpf" class="form-control">--}}
{{--            <label for="telefone" class="form-label">Telefone</label>--}}
{{--            <input type="number" id="telefone" name="telefone" class="form-control">--}}
{{--        </div>--}}
{{----}}
{{--        <button type="submit" class="btn btn-primary">Cadastrar</button>--}}
{{--    </form>--}}

    <form action="{{ route('clientes.store') }}" method="post">
        @csrf

        <div class="mb-3" >
            <label for="nome" class="form-label">Nome</label>
            <input type="text"
                   autofocus
                   id="nome"
                   name="nome"
                   class="form-control"
                   value="{{ old('nome') }}">

            <label for="cpf" class="form-label">CPF</label>
            <input type="number"
                   id="cpf"
                   name="cpf"
                   class="form-control"
                   value="{{ old('cpf') }}">

            <label for="telefone" class="form-label">Telefone</label>
            <input type="number"
                   id="telefone"
                   name="telefone"
                   class="form-control"
                   value="{{ 'telefone' }}">
        </div>

{{--        <div class="mb-3" >--}}
{{--            <label for="data_do_debito" class="form-label">Data do Debito</label>--}}
{{--            <input type="date"--}}
{{--                   id="data_do_debito"--}}
{{--                   name="data_do_debito"--}}
{{--                   class="form-control"--}}
{{--                   value="{{ old('data_do_debito') }}">--}}

{{--            <label for="valor_da_divida" class="form-label">Valor da Divida</label>--}}
{{--            <input type="number"--}}
{{--                   id="valor_da_divida"--}}
{{--                   name="valor_da_divida"--}}
{{--                   step="0.01"--}}
{{--                   class="form-control"--}}
{{--                   value="{{ old('valor_da_divida') }}">--}}

{{--            <label for="data_de_vencimento" class="form-label">Data de Vencimento</label>--}}
{{--            <input type="date"--}}
{{--                   id="data_de_vencimento"--}}
{{--                   name="data_de_vencimento"--}}
{{--                   class="form-control"--}}
{{--                   value="{{ old('data_de_vencimento') }}">--}}

{{--            <label for="valor_do_acordo" class="form-label">Valor do Acordo</label>--}}
{{--            <input type="number"--}}
{{--                   id="valor_do_acordo"--}}
{{--                   name="valor_do_acordo"--}}
{{--                   step="0.01"--}}
{{--                   class="form-control"--}}
{{--                   value="{{ old('valor_do_acordo') }}">--}}

{{--            <label for="fornecedor" class="form-label">Fornecedor</label>--}}
{{--            <input type="text"--}}
{{--                   id="fornecedor"--}}
{{--                   name="fornecedor"--}}
{{--                   class="form-control"--}}
{{--                   value="{{ old('fornecedor') }}">--}}
{{--        </div>--}}

{{--        <div class="mb-3">--}}
{{--            <h3>Dívidas</h3>--}}
{{--            <div class="divida">--}}
{{--                <div class="mb-3">--}}
{{--                    <label for="data_do_debito" class="form-label">Data do Debito</label>--}}
{{--                    <input type="date"--}}
{{--                           id="data_do_debito"--}}
{{--                           name="data_do_debito[]"--}}
{{--                           class="form-control"--}}
{{--                           value="{{ old('data_do_debito') }}">--}}

{{--                    <label for="valor_da_divida" class="form-label">Valor da Divida</label>--}}
{{--                    <input type="number"--}}
{{--                           id="valor_da_divida"--}}
{{--                           name="valor_da_divida[]"--}}
{{--                           step="0.01"--}}
{{--                           class="form-control"--}}
{{--                           value="{{ old('valor_da_divida') }}">--}}

{{--                    <label for="data_de_vencimento" class="form-label">Data de Vencimento</label>--}}
{{--                    <input type="date"--}}
{{--                           id="data_de_vencimento"--}}
{{--                           name="data_de_vencimento[]"--}}
{{--                           class="form-control"--}}
{{--                           value="{{ old('data_de_vencimento') }}">--}}

{{--                    <label for="valor_do_acordo" class="form-label">Valor do Acordo</label>--}}
{{--                    <input type="number"--}}
{{--                           id="valor_do_acordo"--}}
{{--                           name="valor_do_acordo[]"--}}
{{--                           step="0.01"--}}
{{--                           class="form-control"--}}
{{--                           value="{{ old('valor_do_acordo') }}">--}}

{{--                    <label for="fornecedor" class="form-label">Fornecedor</label>--}}
{{--                    <input type="text"--}}
{{--                           id="fornecedor"--}}
{{--                           name="fornecedor[]"--}}
{{--                           class="form-control"--}}
{{--                           value="{{ old('fornecedor') }}">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

        <button type="submit" class="btn btn-secondary">Adicionar Dívida</button>

        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>

</x-layout>
