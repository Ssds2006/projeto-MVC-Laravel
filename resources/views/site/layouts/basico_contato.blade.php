<!DOCTYPE html>
<html>
<head>
    <title>Quite Aqui- @yield('titulo')</title>
    <!-- Inclua os arquivos CSS e JS do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset( 'css/style_contato.css') }}">

</head>
<body>
@include('site.layouts._partials.topo')

@yield('conteudo')

</body>
</html>
