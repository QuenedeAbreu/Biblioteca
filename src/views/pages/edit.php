<?php $render('header'); ?>
  <h3>Pagina de edição de livros</h3>
    <form method="POST" action="<?=$base;?>/livro/<?php echo $livro['id']?>/editar">
      <label>
      <input type="name" name="name" placeholder ="Nome" value="<?php echo $livro['nome']?>"/> 
      </label>
        <br/>
        <br/>
      <label>
      <input type="email" name="email" placeholder ="Emial" value="<?php echo $livro['email']?>"/> 
      </label>
      <br/>
      <br/>
      <input type="submit" name="editar" value="Confirmar"/> 
      
      
    </form>


<?php $render('footer');?>