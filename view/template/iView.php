<?php

namespace app\view\template;


interface iView {

    public function render(array $model) : string;

}