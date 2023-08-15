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
    <h2>Clientes - Listar</h2>

    <!-- Novo menu abaixo do formulário -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light mt-4">
        <div class="container">
            <div class="collapse navbar-collapse" id="fornecedorMenu">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('app.cliente.create') }}">Novo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Consultar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



{{--    <a href="/clientes/criar" class="btn-btn-dark mb-2">Adicionar Clientes</a>--}}

{{--    <a href="{{ route( 'app.cliente.create') }}" class="btn btn-dark m-3">Adicionar Clientes</a>--}}

    @isset($mensagemSucesso)
    <div class="alert alert-success">
        {{ $mensagemSucesso }}
    </div>
    @endisset

{{--<ul  class="list-group d-flex justify-content-between ">--}}
{{--    @foreach($clientes as $cliente)--}}
{{--        <li class="list-group-item d-flex justify-content-between align-items-center">--}}
{{--            {{ $cliente->nome }} {{ $cliente->cpf }} {{ $cliente->telefone }}--}}

{{--            <span class="d-flex">--}}
{{--                <a href="{{ route('clientes.edit' , $cliente->id) }}" class="btn btn-primary btn-sm">--}}
{{--                    Editar--}}
{{--                </a>--}}

{{--                <form action="{{ route('clientes.destroy' , $cliente->id) }}" method="post" class="ms-2">--}}
{{--                    @csrf--}}
{{--                        @method('DELETE')--}}
{{--                    <button class="btn btn-danger btn-sm">--}}
{{--                        Excluir--}}
{{--                    </button>--}}
{{--                </form>--}}
{{--            </span>--}}
{{--        </li>--}}


{{--        <li class="list-group-item d-flex justify-content-between align-items-center">--}}
{{--            <table class="table">--}}
{{--                <tr>--}}
{{--                    <th>Nome</th>--}}
{{--                    <th>CPF</th>--}}
{{--                    <th>Telefone</th>--}}
{{--                    <th>Ações</th>--}}
{{--                </tr>--}}
{{--                <tr>--}}
{{--                    <td>{{ $cliente->nome }}</td>--}}
{{--                    <td>{{ $cliente->cpf }}</td>--}}
{{--                    <td>{{ $cliente->telefone }}</td>--}}
{{--                    <td>--}}
{{--                        <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-primary btn-sm">--}}
{{--                            Editar--}}
{{--                        </a>--}}
{{--                        <form action="{{ route('clientes.destroy', $cliente->id) }}" method="post" class="d-inline">--}}
{{--                            @csrf--}}
{{--                            @method('DELETE')--}}
{{--                            <button class="btn btn-danger btn-sm">--}}
{{--                                Excluir--}}
{{--                            </button>--}}
{{--                        </form>--}}
{{--                    </td>--}}
{{--                </tr>--}}
{{--            </table>--}}
{{--        </li>--}}

{{--    @endforeach--}}
{{--</ul>--}}
    @isset($clientes)
    <ul class="list-group d-flex justify-content-between">
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <table class="table">
                <tr>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Telefone</th>
                    <th>Ações</th>
                </tr>
                @foreach($clientes as $cliente)
                    <tr>
                        <td>
                            <a href="{{ route('app.divida.index',$cliente->id) }}">
                                {{ $cliente->nome }}
                            </a>
                        </td>
                        <td>{{ $cliente->cpf }}</td>
                        <td>{{ $cliente->telefone }}</td>
                        <td>
                            <a href="{{ route('app.cliente.edit', ['cliente' => $cliente]) }}" class="btn btn-primary btn-sm">
                                Editar
                            </a>
                            <form action="{{ route('clientes.destroy', $cliente->id) }}" method="post" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm">
                                    Excluir
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </li>
    </ul>
    @endisset




    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        // Coloque aqui o seu código JavaScript, caso haja alguma lógica adicional para o formulário.
    </script>

</body>
</html>
