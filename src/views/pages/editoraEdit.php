<?php $render('header'); ?>
<div class="body">
  <div class="body-center">
    <h2>Editar Editoras de Livros</h2>
    <form method="POST" action="<?= $base ?>/editora/<?=$editora['id'];?>/editar">
    <div class="label-float">
      <input type="text" name="nome" placeholder=" ">
        <label>Nome da Editora</label>
      </div>
      </br>
      
      </br>
      <label>
        <input type="submit" name="enviar" value="Salvar" class="btn btn-primary">
      </label>
    </form>
  </div>
</div>

<?php $render('footer'); ?>