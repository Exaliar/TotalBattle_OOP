<?php

namespace app\controller;

use app\Router;
// use app\controller\MainControler;

use app\controller\TopMenuController;

class MainControler{

    public function home(Router $router){

        $topMenu = new TopMenuController;
        echo $topMenu->getHtml();

        $data = array();
        // var_dump(get_class_methods(MainControler::class));
        $data['template/armia/showArmy'] =                       $router->db->getData("SELECT idarmia, lvl, nazwa, typ FROM armia");
        // $data['monsters/showMonsters']['zwykle'] =      $router->db->getData("SELECT * FROM zwykle");
        // $data['monsters/showMonsters']['rzadkie'] =     $router->db->getData("SELECT * FROM rzadkie");
        // $data['monsters/showMonsters']['heroiczne'] =   $router->db->getData("SELECT * FROM heroiczne");
        // $data['monsters/showMonsters']['inne'] =        $router->db->getData("SELECT * FROM inne");
        
        $router->renderView($data);
    }

    public function calculatorNew(){
        echo 'New Kalk Page';
    }

    public function calculatorOld(){
        echo 'Old Kalk Page';
    }

    public function forum(){
        echo 'Forum Page';
    }

    public function about(){
        echo 'About Page';
    }
}