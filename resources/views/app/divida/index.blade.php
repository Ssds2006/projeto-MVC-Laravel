<!DOCTYPE html>
<html>
<head>
    <title>Dividas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style_editar.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <!-- Logo ou nome da marca (caso tenha) -->
        <a class="navbar-brand" href="/">Vamos Negociar</a>

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
    <h2>Dividas - Listar</h2>

    <!-- Novo menu abaixo do formulário -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light mt-4">
        <div class="container">
            <div class="collapse navbar-collapse" id="fornecedorMenu">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('app.divida.create') }}">Novo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Consultar</a>
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
                    <th>ID da Divida</th>
                    <th>Cliente ID</th>
{{--                    <th>Fornecedor ID</th>--}}
                    <th>Fornecedor</th>
                    <th>Data do Débito</th>
                    <th>Valor da Dívida</th>
                    <th>Data de Vencimento</th>
                    <th>Valor do Acordo</th>
                    <th>Status</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>

                </thead>
                <tbody>
                @foreach( $dividas as $divida )
                    <tr>
                        <td>{{ $divida->id }}</td>
                        <td>{{ $divida->cliente_id }}</td>
{{--                        <td>{{ $divida->fornecedor_id }}</td>--}}
                        <td>{{ $divida->fornecedor->nome }}</td>
                        <td>{{ $divida->data_do_debito }}</td>
                        <td>{{ $divida->valor_da_divida }}</td>
                        <td>{{ $divida->data_de_vencimento }}</td>
                        <td>{{ $divida->valor_do_acordo }}</td>
                        <td>{{ $divida->status }}

{{--                            <select name="status">--}}
{{--                                <option value="">Todos</option>--}}
{{--                                <option value="pendente">Pendente</option>--}}
{{--                                <option value="em_negociacao">Em Negociação</option>--}}
{{--                                <option value="quitado">Quitado</option>--}}
{{--                            </select>--}}

                        </td>
                        <td><a href="{{ route('app.divida.show', $divida->id) }}">Visualizar</a></td>
                        <td>
                            <form id="form_{{$divida->id}}" method="post" action="{{ route('app.divida.destroy' , ['divida'=>$divida->id]) }}">
                                @method('DELETE')
                                @csrf

                            <a href="#" onclick="document.getElementById('form_{{$divida->id}}').submit()">Excluir</a>
                            </form>
                        </td>
                        <td><a href="{{ route('app.divida.edit', $divida->id) }}">Editar</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>

</div>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    // Coloque aqui o seu código JavaScript, caso haja alguma lógica adicional para o formulário.
</script>

</body>
</html>

