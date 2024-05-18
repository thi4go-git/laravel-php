<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAYOUT 01</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/layout01.css') }}">
</head>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">
        <!-- Header -->
        <nav class="main-header navbar navbar-expand navbar-green navbar-light">
            <a class="navbar-brand text-white" href="#">
                <strong>Arquivos WEB</strong>
            </a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Outro Link</a>
                </li>
            </ul>
        </nav>

        <!-- Corpo da Página -->
        <div class="content-wrapper">
            <div class="content">
                <div class="container">
                    <h1 class="mt-5">Processar Arquivos</h1>
                    <!-- Aqui será renderizado o conteúdo da página -->
                    @yield('conteudo-body')
                </div>
            </div>
        </div>

        <footer class="main-footer bg-muted text-white text-center">
            <img src="{{ asset('img/logo-rodape.png') }}" alt="Imagem rodape">
        </footer>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>