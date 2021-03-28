<?php

namespace app\model\database;

use app\Database;

class GetUnitMonstersFromDatabase {

    private $db; 
    private $idMonsters; // id=>id, typ=> typ

    public function __construct(array $idMonsters){
        $this->db = new Database();
        $this->idMonsters = $idMonsters;
    }

    public function getMonsters() : array {

        $monstersUnits = array();
        $prepareMonsters = array();
        $int = $this->idMonsters['id'];

        // if (filter_var($int, FILTER_VALIDATE_INT)) {
        //     echo("Variable is an integer");
        // } else {
        //     echo("Variable is not an integer");
        // }
        

        switch ($this->idMonsters['typ']) {
            case 'zwykle':
                // $prepareMonsters = $this->db->getData("SELECT * FROM zwykle WHERE idzwykly=$this->idMonsters['id']");
                break;
            
            case 'rzadkie':
                // $prepareMonsters = $this->db->getData("SELECT * FROM rzadkie WHERE idrzadki=$this->idMonsters['id']");
                break;

            case 'heroiczne':
                $prepareMonsters = $this->db->getData('SELECT * FROM heroiczne');
                break;

            case 'inne':
                $prepareMonsters = $this->db->getData('SELECT * FROM inne');
                break;
        }

        return $prepareMonsters;
        // return $monstersUnits;
    }



}