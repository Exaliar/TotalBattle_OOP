<?php

// 1. Fabryka Monster, Player  dane tablica ID.
//  a. Random atak, Kto atakuje jako pierwszy
// 2. Fabryka Jednostek Monsters, Armia - armia dane bonusy AP HP
// 3. Zbiór metod kogo atakować



namespace app\model\fight;


use app\model\database\GetUnitArmyFromDatabase;
use app\model\database\GetUnitMonstersFromDatabase;
use app\Router;
// use app\model\fight\Armia;
// use app\model\fight\Monster;

class Fight{

    private $preArmia;
    public $armia;
    private $preMonsters;
    public $monsters;
    // public $router;

    public function __construct(array $armiaId, array $monstersId){
        // $this->router = $router;
        $this->preArmia = new GetUnitArmyFromDatabase($armiaId);
        $this->armia = $this->preArmia->getArmia();
        $this->preMonsters = new GetUnitMonstersFromDatabase($monstersId);
        $this->monsters = $this->preMonsters->getMonsters();
    }

    public function getArmia() : array{
        return $this->armia;
    }

    public function getMonsters() : array{
        return $this->monsters;
    }
    // public       'idpotwory' => int 4
    // 'lvl' => int 2
    // 'nazwa' => string 'Jezdziec Mrocznych Ogarow' (length=25)
    // 'typ1' => string 'Jezdziec' (length=8)
    // 'typ2' => null
    // 'typ3' => null
    // 'sila' => int 1100
    // 'zycie' => int 3300
    // 'bonus_ile1' => string '40' (length=2)
    // 'bonus_komu1' => string 'Dalekosiezna' (length=12)
    // 'bonus_ile2' => null
    // 'bonus_komu2' => null
    // 'bonus_ile3' => null
    // 'bonus_komu3' => null
    // 'ile_jednostek' => int 160000
    // 'odbyty_atak' => int 1
    // 'zycie_walka' => int 528000000
    // 'atak_sila' => int 176000000

    // 'idarmia' => int 134
    // 'nazwa' => string 'Goral' (length=5)
    // 'lvl' => int 2
    // 'typ' => string 'Autorytet' (length=9)
    // 'typ1' => string 'Dalekosiezna' (length=12)
    // 'typ2' => null
    // 'typ3' => null
    // 'sila' => int 11000
    // 'zycia' => int 33000
    // 'bonus_ile1' => int 1333
    // 'bonus_komu1' => string 'Piechota' (length=8)
    // 'bonus_ile2' => int 1717
    // 'bonus_komu2' => string 'Latajaca' (length=8)
    // 'bonus_ile3' => null
    // 'bonus_komu3' => null
    // 'ile_jednostek' => int 15555
    // 'odbyty_atak' => int 1
    // 'bonus_zycia' => float 1087.5
    // 'bonus_ataku' => int 1194
    // 'atak_sila' => float 2214098700
    // 'zycie_walka' => float 6095615625
}