<!DOCTYPE html>
<html>
<head>
    <title>Divida - Editar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <!-- Logo ou nome da marca (caso tenha) -->
        <a class="navbar-brand" href="/">Quite Aqui</a>

        <!-- Botão para colapsar o menu em dispositivos móveis -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="{{ route('app.home') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('app.cliente.index') }}">Cliente</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('app.fornecedor') }}">Fornecedor</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('app.divida.index') }}">Divida</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('app.sair') }}">Sair</a></li>
            </ul>
        </div>
    </div>
</nav>


<div class="container mt-4">
    <h2>Dividas - Editar</h2>

    <!-- Novo menu abaixo do formulário -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light mt-4">
        <div class="container">
            <div class="collapse navbar-collapse" id="fornecedorMenu">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('app.divida.index') }}">Voltar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Consultar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <form method="post" action="{{ route('app.divida.update',['divida'=>$divida->id]) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="cliente_id">Código do Cliente:</label>
            <input name="cliente_id" type="text" value="{{ $divida->cliente_id ?? old('cliente_id') }}" placeholder="Código do Cliente" class="form-control" id="cliente_id" required>
            {{ $errors->has('cliente_id') ? $errors->first('cliente_id') : '' }}
        </div>
        <div class="form-group">
            <label for="fornecedor_id">Fornecedor:</label>
            <select name="fornecedor_id" class="form-control" id="fornecedor_id" required>
                <option value="">-- Selecione o Fornecedor --</option>
                @foreach($fornecedores as $fornecedor)
                    <option value="{{ $fornecedor->id }}" {{ $divida->fornecedor_id == $fornecedor->id ? 'selected' : '' }}>
                        {{ $fornecedor->nome }}
                    </option>
                @endforeach
            </select>
            @error('fornecedor_id')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="data_do_debito">Data do Débito:</label>
            <input name="data_do_debito" type="date" value="{{ $divida->data_do_debito ?? old('data_do_debito') }}"  class="form-control" id="data_do_debito" required>
            {{ $errors->has('data_do_debito') ? $errors->first('data_do_debito') : '' }}
        </div>
        <div class="form-group">
            <label for="valor_da_divida">Valor da Divida:</label>
            <input name="valor_da_divida" type="text" value="{{ $divida->valor_da_divida ?? old('valor_da_divida') }}" placeholder="R$ 0.00" class="form-control" id="valor_da_divida" required>
            {{ $errors->has('valor_da_divida') ? $errors->first('valor_da_divida') : '' }}
        </div>
        <div class="form-group">
            <label for="data_de_vencimento">Data de Vencimento:</label>
            <input name="data_de_vencimento" type="date" value="{{ $divida->data_de_vencimento ?? old('data_de_vencimento') }}"  class="form-control" id="data_de_vencimento" required>
            {{ $errors->has('data_de_vencimento') ? $errors->first('data_de_vencimento') : '' }}
        </div>
        <div class="form-group">
            <label for="valor_do_acordo">Valor do Acordo:</label>
            <input name="valor_do_acordo" type="text" value="{{ $divida->valor_do_acordo ?? old('valor_do_acordo') }}" placeholder="R$ 0.00" class="form-control" id="valor_do_acordo" required>
            {{ $errors->has('valor_do_acordo') ? $errors->first('valor_do_acordo') : '' }}
        </div>
        <div class="form-group">
            <label for="status">Status:</label><br>
            <select name="status" class="form-control" id="status" required>
                <option>-- Selecione o status --</option>
                @foreach($statusOptions as $option)
                    <option value="{{ $option }}" {{ $divida->status == $option ? 'selected' : '' }}>
                        {{ ucfirst($option) }}
                    </option>
                @endforeach
            </select>
            @error('status')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>

</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
