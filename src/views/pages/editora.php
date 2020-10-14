<?php $render('header'); ?>
<div class="body">
  <div class="body-center">
      <h2>Paginda de Editoras</h2>
      <table border="1" width="100%">
      <tr>
        <th>ID</th>
        <th>Nome da Editora</th>
        <th>Ações</th>
      </tr>
      <?php foreach($editoras as $editora): ?>
      <tr>
          <td><?php echo $editora['id'];?></td>
          <td><?php echo $editora['nome'];?></td>
          <td>
            <a href="<?=$base?>/editora/<?=$editora['id']; ?>/editar"> <i class="fas fa-edit"></i></a>
            <a href="<?=$base?>/editora/<?=$editora['id']; ?>/excluir" 
            onclick="return confirm('Deseja realmente excluir essa editora? ')"> <i class="fas fa-trash"></i></a>
          </td>
      </tr>
      <?php endforeach ?>
      </table>
  </div>
</div>
<?php $render('footer'); ?>