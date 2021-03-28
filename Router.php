<?php

namespace app;

use app\Database;

class Router {

    public $getRoutes = [];
    public $postRoutes = [];

    public $db;

    public function __construct(Database $db){
        $this->db = $db;
    }

    public function get($url, $fn){
        $this->getRoutes[$url] = $fn;
    }
    
    public function post($url, $fn){
        $this->postRoutes[$url] = $fn;
    }

    public function resolve(){
        
        $curentUrl = $_SERVER['PATH_INFO'] ?? '/';
        $method = $_SERVER['REQUEST_METHOD'];

        if ($method === 'GET') {
            $fn = $this->getRoutes[$curentUrl] ?? null;
        } else {
            $fn = $this->postRoutes[$curentUrl] ?? null;
        }

        if ($fn !== null) {
            call_user_func($fn, $this);
        } else {
            echo 'Page not found';
        }
    }

    public function renderView(array $render){
        ob_start();
        foreach ($render as $view => $data) {
            include_once __DIR__."/view/$view.php"; // in each View is data varible required.
        }
        $content = ob_get_clean();
        include_once __DIR__."/view/_layout.php";  // _layout need content to load.
    }
}