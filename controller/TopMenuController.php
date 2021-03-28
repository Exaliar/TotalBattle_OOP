<?php 


namespace app\controller;

use app\view\template\TopMenuView;
use app\controller\iController;


class TopMenuController implements iController{

    private $view;

    public function __construct(){

        $this->view = new TopMenuView;

    }

    public function getHtml() : string {

        return $this->view->render();

    }

}