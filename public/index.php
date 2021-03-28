<?php

require_once __DIR__.'/../vendor/autoload.php';

use app\Router;
use app\Database;
use app\controller\MainControler;

 $db =     new Database;
 $router = new Router($db);

 $router->get('/', [MainControler::class , 'home']);
 $router->get('/home', [MainControler::class , 'home']);
 $router->get('/calculatorNew', [MainControler::class , 'calculatorNew']);
 $router->get('/calculatorOld', [MainControler::class , 'calculatorOld']);
 $router->get('/forum', [MainControler::class , 'forum']);
 $router->get('/about', [MainControler::class , 'about']);

 $router->resolve();