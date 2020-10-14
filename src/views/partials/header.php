<!DOCTYPE html>
<html lang="pt-br">
  <head>
      <title>Biblioteca</title>
      <link rel="stylesheet" href="<?= $base?>/assets/css/StyleBootStrap.css" >
      <link rel="stylesheet" type="text/css" href="<?= $base?>/assets/css/style.css" >
      <script src="<?= $base?>/assets/javaScript/javaScriptBootStrap.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="<?= $base?>/assets/javaScript/javaScriptBootStrappopper.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
      <script src="<?= $base?>/assets/javaScript/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
      <script src="<?= $base?>/assets/javaScript/all.js" crossorigin="anonymous"></script>
      <script src="<?= $base?>/assets/javaScript/javaScript.js"></script>
    </head>
  <body>
  
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    
    <span class="navbar-brand mb-0 h1">BIBLIOTECA</span>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item ">
        <a class="nav-link" href="<?=$base?>/">Home </a>
      </li>

      <li class="nav-item ">
        <a class="nav-link" href="<?=$base?>/acervo">Livros </a>
      </li>

      <li class="nav-item ">
        <a class="nav-link" href="<?=$base?>/acervo/add">Novo Livro</a>
      </li>

      <li class="nav-item ">
        <a class="nav-link" href="<?=$base?>/editora">Editoras</a>
      </li>

      <li class="nav-item ">
        <a class="nav-link" href="<?=$base?>/editora/add">Nova Editora</a>
      </li>

    

    </ul>
    <form class="form-inline my-2 my-lg-0" action="<?=$base?>" >
      <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Search" name="pesquisa">
      <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Pequisar</button>
    </form>
  </div>
</nav>
<div class="header">
  <div class="header-center">
     <h1>Biblioteca</h1>
      </div>
  </div>

  <hr/>