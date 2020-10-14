<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Acervo;
use \src\models\Editora;


class HomeController extends Controller {

    public function index() {
        if(!empty($_GET['pesquisa'])){
            $pesquisa=trim($_GET['pesquisa']);

            $acervo = Acervo::select('acervos.*,editoras.*')
            ->join('editoras','editoras.id','=','acervos.idEditora')
            ->where('titulo','like','%'.$pesquisa.'%')
            ->get();
        }else{
            
            
            $acervo = Acervo::select('acervos.*,editoras.*')
            ->join('editoras','editoras.id','=','acervos.idEditora')
            ->get();
    }   
  

       $this->render('home',[
           'acervos' =>$acervo
       ]);
    }

}