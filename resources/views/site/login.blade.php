@extends('site.layouts.basico_contato')

@section('titulo', 'Login')

@section('conteudo')
    <div class="container contato-form">
        <div class="titulo-pagina">
            <h1>Login</h1>
        </div>

        <div class="informacao-pagina">
            <form action="{{ route('site.login') }}" method="post">
                @csrf
                <input name="usuario" value="{{ old('usuario') }}" type="text" placeholder="Usuário" class="borda-preta">
                {{ $errors->has('usuario') ? $errors->first('usuario'): ''  }}

                <input name="senha" value="{{ old('senha') }}" type="password" placeholder="Senha" class="borda-preta">
                {{ $errors->has('senha') ? $errors->first('senha'): ''  }}

                <br>
                <button type="submit" class="borda-preta" >Acessar</button>
            </form>
        </div>
    </div>

    <!-- Inclua os arquivos JS do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
@endsection

