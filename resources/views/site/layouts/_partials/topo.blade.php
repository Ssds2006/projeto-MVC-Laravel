<div class="gradiente-fundo"></div>

<nav class="navbar navbar-expand-lg navbar-light custom-navbar"> <!-- Adicionado a classe "custom-navbar" -->
    <div class="container-fluid">
        <!-- Logo ou nome da marca (caso tenha) -->
        <a class="navbar-brand" href="/">Quite Aqui</a>

        <!-- Botão para colapsar o menu em dispositivos móveis -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('site.index') }}">Principal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('site.sobrenos') }}">Sobre Nós</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('site.contato') }}">Contato</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
