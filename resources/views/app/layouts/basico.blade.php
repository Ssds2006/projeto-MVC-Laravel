<!DOCTYPE html>
<html>
<head>
    <title>Vamos Negociar- @yield('titulo')</title>
    <!-- Inclua os arquivos CSS e JS do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style_principal.css') }}" >

</head>
<body>
@include('app.layouts._partials.topo')

@yield('conteudo')

</body>
</html>
