<?php $render('header'); ?>
  <h3>Pagina de adição de livros</h3>
    <form method="POST" action="<?=$base;?>/novo">
      <label>
      <input type="name" name="name" placeholder ="Nome"/> 
      </label>
        <br/>
        <br/>
      <label>
      <input type="email" name="email" placeholder ="Emial"/> 
      </label>
      <br/>
      <br/>
      <input type="submit" name="enviar" value="Confirmar"/> 
      
      
    </form>


<?php $render('footer');?>