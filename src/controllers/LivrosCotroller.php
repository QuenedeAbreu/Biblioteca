<?php 
  namespace src\controllers;
  use \core\Controller;
  use \src\models\Livro;

  class LivrosCotroller extends Controller{
    public function add(){
      $this->render('addLivros');
    }

    public function addAction(){
      $name = filter_input(INPUT_POST,'name');
      $email = filter_input(INPUT_POST,'email');
      if($name && $email){
        //verifica se ja existe o email cadastrado.
          $data = Livro::select()->where('email',$email)->execute();
          if(count($data)=== 0){
            Livro::insert([
              'nome'=>$name,
              'email'=>$email
            ])->execute();
             $this->redirect('/');
          }
      }
      $this->redirect('/novo');
    }

    public function edit($args){
      $livro = Livro::select()->find($args['id']);
     
      $this->render('edit',[
       'livro' => $livro
      ]);
    }
    public function editAction($args){
      $name = filter_input(INPUT_POST,'name');
      $email = filter_input(INPUT_POST,'email');
      if($name && $email){
        Livro::update()
            ->set('nome',$name)
            ->set('email',$email)
            ->where('id',$args['id'])
          ->execute();
          $this->redirect('/');
      }
      $this->redirect('/livro/'.$args['id'].'/edit');
    }


    public function del($args){
    try{ 
      Livro::delete()->where('id',$args['id'])->execute();
      $this->redirect('/');
    }catch(Exception $error){
        print_r($error);
    }
    }
  }