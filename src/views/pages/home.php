<?php $render('header'); ?>

<div class="body">
  <div class="body-center">
  
<!--<?php  print_r($acervos);?>-->
<div class="cards">
<?php foreach ($acervos as $acervo):?>
 
  <div class="card border-primary mb-3 " style="max-width: 18rem;">
        <div class="card-header">
          <h5 class="card-title text-primary">
           <?= $acervo['titulo'];?>
          </h5>
        </div>
        <div class="card-body text-primary">
          <p class="card-text">Editora: <?= $acervo['editoraNome'];?></p>
          <p class="card-text">Ano: <?= $acervo['ano'];?></p>
          <p class="card-text">Autor: <?= $acervo['autor'];?></p>
        </div>
      </div>
    
      <?php endforeach?>
      </div>
  </div>
</div>

