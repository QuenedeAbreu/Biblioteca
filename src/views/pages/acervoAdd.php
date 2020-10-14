<?php $render('header'); ?>
<div class="body">
  <div class="body-center">
        <h2>Adicionar Livros no Acervo</h2>
            <form method="POST" action="<?= $base ?>/acervo/add" class="saber">

            <label class="label-Title">Editora: </label><br/>
                <select id="editoraSelect" name="idEditora" class="select">
                    <?php foreach($editoras as $editora): ?>
                    <option value="<?php echo $editora['id'] ?>"><?php echo $editora['nome'] ?></option>
                    <?php endforeach ?>
                </select>
                
                <br/>
                <br/>                       
            <div class="label-float">
                <input type="text" name="titulo" placeholder=" " required>
                <label>Titulo</label>
             </div>
             <br/>    
            <div class="label-float">
                <input type="text" name="autor" placeholder=" " >
                <label>Autor</label>
             </div>

             <br/>
            <div class="label-float">
                <input type="text" name="ano" placeholder=" " >
                <label>Ano</label>
             </div>
             <br/>
            <div class="label-float">
                <input type="text" name="preco" placeholder=" " >
                <label>Preço</label>
             </div>
             <br/>
            <div class="label-float">
                <input type="text" name="quantidade" placeholder=" " >
                <label>Quantidade</label>
             </div>
             <br/>
            <label>
                <select id="tipos" name="tipo" class="select">
                <?php  for($i = 1 ; $i <= 4;$i++){?>
                      <option value="<?=$i?>">Tipo <?=$i?></option> 
                    <?php }?>
                </select>
                </label>
            <br/>
           <label>
            
            <input type="submit" name="salvar" value="Salvar" class="btn btn-primary btn-grande"/>
                </label>
        </form>
    </div>
 </div>   
              

<?php $render('footer'); ?>