<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Livro;

class HomeController extends Controller {

    public function index() {
        $livros = Livro::select()->execute();
        $this->render('home',[
            'livros'=>$livros
        ]);
    }
   

}