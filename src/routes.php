<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/novo','LivrosCotroller@add');
$router->post('/novo','LivrosCotroller@addAction');

$router->get('/livro/{id}/editar','LivrosCotroller@edit');
$router->post('/livro/{id}/editar','LivrosCotroller@editAction');

$router->get('/livro/{id}/excluir','LivrosCotroller@del');
