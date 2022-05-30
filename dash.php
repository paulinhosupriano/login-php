<?php
require_once('load.php');

if (!isAuth()) {
  setMessage("Favor identifique-se.", 'warning');
  redirect('index.php');
}

isLogoff();

?>
<!doctype html>
<html lang="pt-br" class="h-100">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Painel de Administração</title>

  <link href="assets/bootstrap-5.2.0/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="assets/css/dash.css" rel="stylesheet">
</head>

<body class="d-flex h-100 text-center text-white bg-dark">

  <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="mb-auto">
      <div>
        <h3 class="float-md-start mb-0">PAINEL</h3>
        <nav class="nav nav-masthead justify-content-center float-md-end">
          <a class="nav-link fw-bold py-1 px-0 active" aria-current="page" href="#">Home</a>
          <a class="nav-link fw-bold py-1 px-0" href="#">Sobre</a>
          <a class="nav-link fw-bold py-1 px-0" href="#">Contato</a>
          <a class="nav-link fw-bold py-1 px-0" href="?sair=true">Sair</a>
        </nav>
      </div>
    </header>

    <main class="px-3">
      <h1>Seja bem vindo!</h1>
      <p class="lead">Painel de Administração.</p>
      <p class="lead">
        <a href="https://www.facebook.com/paulinhosupriano" target="_blank" class="btn btn-lg btn-secondary fw-bold border-white bg-white">Conhecer o desenvolvedor</a>
      </p>
    </main>

    <footer class="mt-auto text-white-50">
      <p>Cover template for <a href="https://getbootstrap.com/" class="text-white">Bootstrap</a></p>
    </footer>
  </div>
</body>
</html>