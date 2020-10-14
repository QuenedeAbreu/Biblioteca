<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Editora;

class EditoraController extends Controller {

    public function index() {
      $editoras=Editora::select()->execute();

       $this->render('editora',[
         'editoras' => $editoras
       ]);
    }

    public function add(){
      $this->render('editoraAdd');
    }

    public function addAction(){
      $nome = filter_input(INPUT_POST,'nome');
      if($nome){
        $data = Editora::select()->where('nome',$nome)->execute();
        if(count($data)===0){
          Editora::insert([
            'nome' =>$nome
          ])->execute();
          $this->redirect('/editora');
         exit;
        }
       
      }
      $this->redirect('/editora/add');
    }

    public function edit($args){
      $editora = Editora::select()->find($args['id']);
      $this->render('editoraEdit',[
        'editora' => $editora
      ]);
    }

    public function editAction($args){
      $nome = filter_input(INPUT_POST,'nome');
      if($nome){
        Editora::update()
        ->set('nome',$nome)
        ->where('id',$args['id'])
          ->execute();

        $this->redirect('/editora');
      }

      $this->redirect('/editora/'.$args['id'].'/editar');
    }


    public function del($args){
      Editora::delete()->where('id',$args['id'])->execute();
      $this->redirect('/editora');
    }

}