<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <title>@yield('title')</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    </head>

    <body>
    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-warning">
            <a class="navbar-brand" href="#">Logo</a>
            <!-- Botao Navbar -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Links Navbar -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Welcome <span class="sr-only">(Página atual)</span></a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="{{route('categories.index')}}">Categorias</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="{{route('products.index')}}">Produtos <span class="sr-only">(Página atual)</span></a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="{{route('clients.index')}}">Clientes <span class="sr-only">(Página atual)</span></a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="{{route('providers.index')}}">Fornecedores <span class="sr-only">(Página atual)</span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>


