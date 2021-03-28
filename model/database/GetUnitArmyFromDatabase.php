<?php

namespace app\model\database;

use app\Database;

class GetUnitArmyFromDatabase {

    private $db; 
    private $idArmia;

    public function __construct(array $idArmia){
        $this->db = new Database;
        $this->idArmia = $idArmia;
    }

    public function getArmia() : array {

        $armyUnits = array();

        foreach($this->idArmia as $value){

            $unit = [];

            foreach ($value as $key => $val) {

                if ($key == 'id') {
                    $unit = $this->db->getData("SELECT * FROM armia WHERE idarmia=$val");
                }
                if ($key == 'bonusAp') {
                    $unit[0][$key] = $val;
                }
                if ($key == 'bonusHp') {
                    $unit[0][$key] = $val;
                }
                
            }

            $armyUnits[] = $unit[0];
            
        }

        return $armyUnits;
    }



}