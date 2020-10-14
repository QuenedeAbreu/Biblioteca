<!DOCTYPE html>
<html lang="pt-br">
  <head>
      <title>Biblioteca</title>
      <link rel="stylesheet" href="<?= $base?>/assets/css/StyleBootStrap.css" >
      <link rel="stylesheet" type="text/css" href="<?= $base?>/assets/css/style.css" >
   
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js" integrity="sha384-5h4UG+6GOuV9qXh6HqOLwZMY4mnLPraeTrjT5v07o347pj6IkfuoASuGBhfDsp3d" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.esm.min.js" integrity="sha384-Eg5XYZrb+x0FMnsSAcaUNc6vJ/6B47jQvyhan3IGKcCfko9Hq6vS3s1PviSpNbdE" crossorigin="anonymous"></script>   
   
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