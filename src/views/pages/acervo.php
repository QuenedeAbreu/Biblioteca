<?php $render('header'); ?>
<div class="body">
  <div class="body-center">
<h2>Paginda de Acervo</h2>
<table border="1" width="100%">
<tr>
  <th>ID</th>
  <th>Titulo</th>
  <th>Editora</th>
  <th>Autor</th>
  <th>Ano</th>
  <th>Preço</th>
  <th>Quantidade</th>
  <th>Tipo</th>
  <th>Ações</th>
</tr>
<?php foreach($acervos as $acervo): ?>
<tr>
    <td><?php echo $acervo['id'];?></td>
    <td><?php echo $acervo['titulo'];?></td>
    <td><?php echo $acervo['editoraNome'];?></td>
    <td><?php echo $acervo['autor'];?></td>
    <td><?php echo $acervo['ano'];?></td>
    <td><?php echo $acervo['preco'];?></td>
    <td><?php echo $acervo['quantidade'];?></td>
    <td><?php echo $acervo['tipo'];?></td>
    <td>
      <a href="<?=$base?>/acervo/<?=$acervo['id']; ?>/editar"> <i class="fas fa-edit"></i></a>
      <a href="<?=$base?>/acervo/<?=$acervo['id']; ?>/excluir" 
      onclick="return confirm('Deseja realmente excluir esse Titulo? ')"alt="[ Excluir ]"> <i class="fas fa-trash"></i></a>
    </td>
</tr>
<?php endforeach ?>
</table>
</div>
</div>
<?php $render('footer'); ?>