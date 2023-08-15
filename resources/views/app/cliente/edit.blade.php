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
    <h2>Clientes - Editar</h2>

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

{{--<x-layout title="Editar Cliente  '{!! $cliente->nome !!}  ' "  >--}}
{{--    colocando {!! variavel que deseja !!} retira qualquer sintase do html da variavel que foi chamada--}}
{{--<x-layout title="Editar Cliente  '{{ $cliente->nome }}' "  >--}}
{{--    <x-clientes.form :action="route('clientes.update', $cliente->id)" :nome="$cliente->nome" :cpf="$cliente->cpf" :telefone="$cliente->telefone" :update="true" />--}}
    <x-clientes.form :action="route('clientes.update', ['cliente' => $cliente->id])"
                     :nome="$cliente->nome" :cpf="$cliente->cpf" :telefone="$cliente->telefone" :update="true" />
{{--</x-layout>--}}



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        // Coloque aqui o seu código JavaScript, caso haja alguma lógica adicional para o formulário.
    </script>

</body>
</html>


