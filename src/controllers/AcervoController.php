<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Acervo;
use \src\models\Editora;

class AcervoController extends Controller {

    public function index() {
     $acervo = Acervo::select('acervos.*,editoras.nome as editoraNome')->join('editoras','editoras.id','=','acervos.idEditora')->get();
    
       $this->render('acervo',[
         'acervos'=>$acervo
       ]);
    }

    public function add(){
      $editoras=Editora::select()->execute();
      $this->render('acervoAdd',[
          'editoras'=>$editoras
      ]);

    }
    public function addAction(){
      $idEditora = filter_input(INPUT_POST,'idEditora');
      $titulo = filter_input(INPUT_POST,'titulo');
      $autor = filter_input(INPUT_POST,'autor');
      $ano = filter_input(INPUT_POST,'ano');
      $preco = filter_input(INPUT_POST,'preco');
      $quantidade = filter_input(INPUT_POST,'quantidade');
      $tipo = filter_input(INPUT_POST,'tipo');

        if($idEditora && $titulo && $autor && $ano && $preco && $quantidade && $tipo){
            $data = Acervo::select()
            ->where('titulo',$titulo)
            ->where('autor',$autor)
            ->where('tipo',$tipo)
            ->execute();
          if(count($data)===0){
            Acervo::insert([
              'idEditora'=>$idEditora,
              'titulo'=>$titulo,
              'autor'=>$autor,
              'ano'=>$ano,
              'preco'=>$preco,
              'quantidade'=>$quantidade,
              'tipo'=>$tipo 
            ])->execute();
            $this->redirect('/acervo');
            exit;
          }


        }
        $this->redirect('/acervo/add');

    }

    public function edit($args){
      $acervo = Acervo::select('acervos.*,editoras.nome as editoraNome')
      ->join('editoras','editoras.id','=','acervos.idEditora')
      ->where('acervos.id',$args['id'])->get();

       $editoras=Editora::select()->execute();
      
      $this->render('acervoEdit',[
        'acervos'=>$acervo,
        'editoras'=>$editoras
      ]);

    }

    public function editAction($args){
      $idEditora = filter_input(INPUT_POST,'idEditora');
      $titulo = filter_input(INPUT_POST,'titulo');
      $autor = filter_input(INPUT_POST,'autor');
      $ano = filter_input(INPUT_POST,'ano');
      $preco = filter_input(INPUT_POST,'preco');
      $quantidade = filter_input(INPUT_POST,'quantidade');
      $tipo = filter_input(INPUT_POST,'tipo');
      if($idEditora && $titulo && $autor && $ano && $preco && $quantidade && $tipo){
          Acervo::update()
          ->set('idEditora',$idEditora)
          ->set('titulo',$titulo)
          ->set('autor',$autor)
          ->set('ano',$ano)
          ->set('preco',$preco)
          ->set('quantidade',$quantidade)
          ->set('tipo',$tipo)
          ->where('id',$args['id'])
          ->execute();
          $this->redirect('/acervo');
          exit;
      }
      
      $this->redirect('/acervo/'.$args['id'].'/editar');
    }


    public function del($args){
      Acervo::delete()->where('id',$args['id'])->execute();
      $this->redirect('/acervo');
    }

}