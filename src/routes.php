<?php
use core\Router;

$router = new Router();
//Rotas home
$router->get('/', 'HomeController@index');


//rota de acervo
$router->get('/acervo','AcervoController@index');
$router->get('/acervo/add','AcervoController@add');
$router->post('/acervo/add','AcervoController@addAction');

//Rotas de Edição 
$router->get('/acervo/{id}/editar','AcervoController@edit');
$router->post('/acervo/{id}/editar','AcervoController@editAction');

//Rota de Exclusão 
$router->get('/acervo/{id}/excluir','AcervoController@del');

//rota da Editora
$router->get('/editora','EditoraController@index');
$router->get('/editora/add','EditoraController@add');
$router->post('/editora/add','EditoraController@addAction');
//Rotas de Edição 
$router->get('/editora/{id}/editar','EditoraController@edit');
$router->post('/editora/{id}/editar','EditoraController@editAction');
//Rota de Exclusão 
$router->get('/editora/{id}/excluir','EditoraController@del');
