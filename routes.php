<?php

$router->get('/', 'controller/index.php');
$router->get('/about', 'controller/about.php');
$router->get('/contact', 'controller/contact.php');

$router->get('/notes', 'controller/notes/index.php');
$router->get('/note', 'controller/notes/show.php');
$router->delete('/note', 'controller/notes/destroy.php');

$router->get('/note/edit','controller/notes/edit.php');
$router->patch('/note/update','controller/notes/update.php');

$router->get('/notes/create', 'controller/notes/create.php');
$router->post('/notes/store', 'controller/notes/store.php');
