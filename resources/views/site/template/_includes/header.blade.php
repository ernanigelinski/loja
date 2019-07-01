<!DOCTYPE html>
<html>
    <head>
    <title>@yield('title')</title>
        <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
    <header>
    <nav>
    <div class="nav-wrapper deep-orange">
      <a href="#!" class="brand-logo">Loja</a>
      <a href="#" data-target="mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="/">Welcome</a></li>
        <li><a href="{{route('products.index')}}">Produtos</a></li>
      </ul>
    </div>
  </nav>

  <ul class="sidenav" id="mobile">
  <li><a href="/">Home</a></li>
        <li><a href="{{route('products.index')}}">Produtos</a></li>
  </ul>
    </header>


