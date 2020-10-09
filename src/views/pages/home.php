<?php $render('header'); ?>

<table border ="1" width="100%">
  <tr>
    <th>ID</th>
    <th>NOME</th>
    <th>E-MAIL</th>
    <th>AÇÕES</th>
  </tr>
  <?php foreach($livros as $livro):?>
    <tr>
    <td><?php echo $livro['id'] ?></td>
    <td><?php echo $livro['nome'] ?></td>
    <td><?php echo $livro['email'] ?></td>
    <td>
    <a href="<?=$base?>/livro/<?php echo $livro['id'] ?>/editar" ><img src="<?=$base?>/assets/images/document.png" class="img_list" alt="[ editar ]"></a>
     <a href="<?=$base?>/livro/<?php echo $livro['id'] ?>/excluir"  onclick="return confirm('Deseja relmente excluir esse livro?')"><img src="<?=$base?>/assets/images/trash.png" class="img_list" alt="[ excluir ]"></a></td>
  </tr>
  <?php endforeach ?>
</table>
<?php $render('footer');?>