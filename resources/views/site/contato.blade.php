@extends('site.layouts.basico_contato')

@section('titulo', 'Contato')

@section('conteudo')

    <div class="container contato-form">
        <h1>Entre em contato conosco</h1>
        @component('site.layouts._components.form_contato', ['motivo_contatos' => $motivo_contatos])
        @endcomponent
        <br>
        <p>Nosso tempo médio de resposta é de 48 horas</p>
    </div>

    <!-- Inclua os arquivos JS do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
@endsection
