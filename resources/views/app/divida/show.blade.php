<!DOCTYPE html>
<html>
<head>
    <title>Divida - Adicionar</title>
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
    <h2> Divida </h2>

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


    <div class="container">
        <div class="row">
            <table class="col">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Cliente ID</th>
                    <th>Fornecedor ID</th>
                    <th>Data do Débito</th>
                    <th>Valor da Dívida</th>
                    <th>Data de Vencimento</th>
                    <th>Valor do Acordo</th>
                    <th>Status</th>
                </tr>

                </thead>
                <tbody>
                    <tr>
                        <td>{{ $divida->id }}</td>
                        <td>{{ $divida->cliente_id }}</td>
                        <td>{{ $divida->fornecedor_id }}</td>
                        <td>{{ $divida->data_do_debito }}</td>
                        <td>{{ $divida->valor_da_divida }}</td>
                        <td>{{ $divida->data_de_vencimento }}</td>
                        <td>{{ $divida->valor_do_acordo }}</td>
                        <td>{{ $divida->status }}</td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>

</div>


</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
