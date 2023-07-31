@extends('site.layouts.basico_sobre')

@section('titulo', 'Sobre Nos')

@section('conteudo')

        <div class="conteudo-pagina">
        <h1>Olá, eu sou o Super Gestão</h1>
        <p>O Super Gestão é o sistema online de controle administrativo que pode transformar e potencializar os negócios da sua empresa.</p>
        <p>Desenvolvido com a mais alta tecnologia para você cuidar do que é mais importante, seus negócios!</p>
        </div>

        <footer>
            <div class="redes-sociais">
                <h2>Redes sociais</h2>
                <img src="{{ asset('/img/facebook.png') }}">
                <img src="{{ asset('/img/linkedin.png') }}">
                <img src="{{ asset('/img/youtube.png') }}">
            </div>
            <div class="area-contato">
                <h2>Contato</h2>
                <span>(11) 3333-4444</span>
                <br>
                <span>supergestao@dominio.com.br</span>
            </div>
            <div class="localizacao">
                <h2>Localização</h2>
                <img src="{{ asset('/img/mapa.png') }}">
            </div>
        </footer>

        <!-- Inclua os arquivos JS do Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

    @endsection

