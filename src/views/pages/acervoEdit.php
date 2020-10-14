<?php $render('header'); ?>
<div class="body">
  <div class="body-center">
        <h2>Editar Livros no Acervo</h2>
            <form method="POST" action="<?= $base ?>/acervo/<?=$acervos[0]['id'];?>/editar">

            <label class="label-Title">Editora: </label><br/>
                <select id="editoraSelect" name="idEditora" class="select">
                    <?php foreach($editoras as $editora): ?>

                      <?php if( $acervos[0]['editoraId'] == $editoras['id']){?>

                           <option value="<?php echo $editora['id']; ?>" selected><?php echo $editora['nome']; ?></option>
                     
                           <?php }else{ ?>

                            <option value="<?php echo $editora['id']; ?>"><?php echo $editora['nome']; ?></option>
                       
                            <?php } ?>

                        <?php endforeach ?>
                       
                </select>

                
                <br/>
                <br/>

            <div class="label-float">
                <input type="text" name="titulo" placeholder=" " value="<?php echo $acervos[0]['titulo'] ?>" required>
                <label>Titulo</label>
             </div>
             <br/>
                        
            <div class="label-float">
                <input type="text" name="autor" placeholder=" " value="<?php echo $acervos[0]['autor'] ?>" >
                <label>Autor</label>
             </div>
             <br/>
            <div class="label-float">
                <input type="text" name="ano" placeholder=" " value="<?php echo $acervos[0]['ano'] ?>">
                <label>Ano</label>
             </div>
             <br/>
          
            <div class="label-float">
                <input type="text" name="preco" placeholder=" "  value="<?php echo $acervos[0]['preco'] ?>">
                <label>Preço</label>
             </div>
             <br/>
            <div class="label-float">
                <input type="text" name="quantidade" placeholder=" " value="<?php echo $acervos[0]['quantidade'] ?>">
                <label>Quantidade</label>
             </div>
             <br/>
            <label>
                <select id="tipos" name="tipo" class="select">
                    <?php  for($i = 1 ; $i <= 4;$i++){
                      if($i == $acervos[0]['tipo']){?>
                        
                        <option value="<?=$i?>" selected>Tipo <?=$i?></option> 
                        <?php }else{ ?>
                            <option value="<?=$i?>">Tipo <?=$i?></option> 
                        <?php }?>

                    <?php }?>
                </select>
                </label>
            <br/>
            <br/>
            <label>
            <input type="submit" name="salvar" value="Salvar" class="btn btn-primary">
            </label>
        </form>
    </div>
 </div>           

<?php $render('footer'); ?>
                  