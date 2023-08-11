<x-layout title="Clientes">

{{--    <a href="/clientes/criar" class="btn-btn-dark mb-2">Adicionar Clientes</a>--}}

    <a href="{{ route( 'app.cliente.create') }}" class="btn btn-dark m-3">Adicionar Clientes</a>

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
                            <a href="{{ route('app.cliente.edit', $cliente->id) }}" class="btn btn-primary btn-sm">
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


</x-layout>
