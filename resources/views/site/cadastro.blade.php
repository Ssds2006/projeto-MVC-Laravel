<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Usuário</title>
    <!-- Adicione os arquivos CSS do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h1>Cadastro de Usuário</h1>
    <form action="{{ route('site.cadastro.salvar') }}" method="post">
        @csrf <!-- Token CSRF para proteção contra ataques de falsificação de solicitação entre sites -->
        <div class="form-group">
            <label for="name">Nome:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="password">Senha:</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>

        <!-- Outros campos relevantes para o cadastro do usuário podem ser adicionados aqui -->

        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>

<!-- Adicione os arquivos JavaScript do Bootstrap (caso necessite de componentes interativos) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


