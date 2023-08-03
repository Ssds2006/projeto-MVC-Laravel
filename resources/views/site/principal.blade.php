@extends('site.layouts.basico_principal')

@section('titulo', 'Home')

    @section('conteudo')

        <div class="conteudo-destaque">
            <div class="esquerda">
                <div class="informacoes">
                    <h1>Bem vindo @if(Auth::user()) {{ Auth::user()->name }} @endif ao Quite Aqui</h1>
                    <p>Temos a solução para sua cobrança.</p>
                    <div class="chamada">
                        <img src="{{ asset('/img/check.png') }}">
                        <span class="texto-branco">Gestão completa e descomplicada</span>
                    </div>
                    <div class="chamada">
                        <img src="{{ asset('/img/check.png') }}">
                        <span class="texto-branco">Somos a empresa inteligente</span>
                    </div>
                </div>

                <div class="video">
                    <img src="{{ asset('/img/player_video.jpg') }}">
                </div>
            </div>

            <div class="direita">
                <div class="contato">
                    <h1>Contato</h1>
                    <p>Caso tenha qualquer dúvida por favor entre em contato com nossa equipe pelo formulário abaixo.</p>
                    @component('site.layouts._components.form_contato', ['motivo_contatos' => $motivo_contatos])
                    @endcomponent
                </div>
            </div>
        </div>
    @endsection

