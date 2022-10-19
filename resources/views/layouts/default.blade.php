<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="/images/layout/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="/css/icons/bootstrap-icons.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>

<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
        <div class="container">
            <a href="/"><img src="/images/layout/logo_white.png" height="30" alt="Sis.RH"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item px-3">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link" href="{{ route('funcionarios.index') }}">Funcionários</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link" href="{{ route('cargos.index') }}">Cargos</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link" href="{{ route('departamentos.index') }}">Departamentos</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link" href="#">Usuários</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mb-4">
        @yield('conteudo')
    </div>

    <footer class="container-fluid bg-light text-center mb-3">
        <span>
            Sistema desenvolvido na disciplina de Programação Avançada do curso de Sistema de Informação<br>
            Semestre letivo: 2022.2<br>
            Centro Universitário UniRios
        </span>
    </footer>

    <script src="/js/bootstrap.bundle.min.js"></script>
</body>

</html>
