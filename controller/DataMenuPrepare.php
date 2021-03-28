<?php

namespace app\controller;

class DataMenuPrepare{
    public $armiaConverted = [];
    private $armia;

    public function __construct(array $data){
        $this->armia = $data;
        $this->createAsocArray();
    }

    private function createAsocArray() : void{
        if (!empty($this->armia)) {
            foreach ($this->armia as $value) {
                $this->armiaConverted[$value['typ']][ $value['nazwa']][$value['lvl']] = $value['idarmia']; 
            }
        }
    }
}
