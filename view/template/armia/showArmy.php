<?php



use app\controller\DataMenuPrepare;
use app\model\fight\Fight;
use app\Router;
// var_dump($data);

$armia = new DataMenuPrepare($data);

$data = $armia->armiaConverted;

// var_dump($data);

$ar = [
    ['id' => 2, 'bonusAp' => 25, 'bonusHp' => 50],
    ['id' => 24, 'bonusAp' => 66, 'bonusHp' => 90]
];
$vr = [
    'id' => 35, 'typ' => 'rzadkie'
];

$fight = new Fight($ar, $vr);

var_dump($fight->armia);

// var_dump(Fight::class);
// var_dump(call_user_func([$fight, 'getArmia']));


// var_dump($fight->monsters);

?>


<section id="armia">
    <nav class="center">
        <ul class="first-menu-armia">
            <li class="first-sub-menu-armia first-activ">
                <span>Gwardzista</span>
                <ul class="second-menu-armia gwardzista">
                
                <li class="second-sub-menu-armia gwardzista second-activ">
                <ul class="armia-column">
                    <span>Lucznik</span>
                    <form class="armia-row">
                        <input type="radio" id="1" name="Lucznik" value="Lucznik" checked="">
                            <label for="1" class="I">I</label> <input type="radio" id="2" name="Lucznik" value="Lucznik">
                            <label for="2" class="II">II</label> <input type="radio" id="3" name="Lucznik" value="Lucznik">
                            <label for="3" class="III">III</label> <input type="radio" id="4" name="Lucznik" value="Lucznik">
                            <label for="4" class="IV">IV</label> <input type="radio" id="5" name="Lucznik" value="Lucznik">
                            <label for="5" class="V">V</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                <li class="second-sub-menu-armia gwardzista ">
                <ul class="armia-column">
                    <span>Wlocznik</span>
                    <form class="armia-row">
                        <input type="radio" id="6" name="Wlocznik" value="Wlocznik" checked="">
                            <label for="6" class="I">I</label> <input type="radio" id="7" name="Wlocznik" value="Wlocznik">
                            <label for="7" class="II">II</label> <input type="radio" id="8" name="Wlocznik" value="Wlocznik">
                            <label for="8" class="III">III</label> <input type="radio" id="9" name="Wlocznik" value="Wlocznik">
                            <label for="9" class="IV">IV</label> <input type="radio" id="10" name="Wlocznik" value="Wlocznik">
                            <label for="10" class="V">V</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                <li class="second-sub-menu-armia gwardzista ">
                <ul class="armia-column">
                    <span>Jezdziec</span>
                    <form class="armia-row">
                        <input type="radio" id="11" name="Jezdziec" value="Jezdziec" checked="">
                            <label for="11" class="I">I</label> <input type="radio" id="12" name="Jezdziec" value="Jezdziec">
                            <label for="12" class="II">II</label> <input type="radio" id="13" name="Jezdziec" value="Jezdziec">
                            <label for="13" class="III">III</label> <input type="radio" id="14" name="Jezdziec" value="Jezdziec">
                            <label for="14" class="IV">IV</label> <input type="radio" id="15" name="Jezdziec" value="Jezdziec">
                            <label for="15" class="V">V</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                <li class="second-sub-menu-armia gwardzista ">
                <ul class="armia-column">
                    <span>Bitewny Gryf</span>
                    <form class="armia-row">
                        <input type="radio" id="16" name="Bitewny Gryf" value="Bitewny Gryf" checked="">
                            <label for="16" class="V">V</label> <input type="radio" id="17" name="Bitewny Gryf" value="Bitewny Gryf">
                            <label for="17" class="VI">VI</label> <input type="radio" id="18" name="Bitewny Gryf" value="Bitewny Gryf">
                            <label for="18" class="VII">VII</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                <li class="second-sub-menu-armia gwardzista ">
                <ul class="armia-column">
                    <span>Ciezki Arbalester</span>
                    <form class="armia-row">
                        <input type="radio" id="19" name="Ciezki Arbalester" value="Ciezki Arbalester" checked="">
                            <label for="19" class="VI">VI</label> <input type="radio" id="20" name="Ciezki Arbalester" value="Ciezki Arbalester">
                            <label for="20" class="VII">VII</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                <li class="second-sub-menu-armia gwardzista ">
                <ul class="armia-column">
                    <span>Ciezki Halabardnik</span>
                    <form class="armia-row">
                        <input type="radio" id="21" name="Ciezki Halabardnik" value="Ciezki Halabardnik" checked="">
                            <label for="21" class="VI">VI</label> <input type="radio" id="22" name="Ciezki Halabardnik" value="Ciezki Halabardnik">
                            <label for="22" class="VII">VII</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                <li class="second-sub-menu-armia gwardzista ">
                <ul class="armia-column">
                    <span>Rycerz Na Koniu</span>
                    <form class="armia-row">
                        <input type="radio" id="23" name="Rycerz Na Koniu" value="Rycerz Na Koniu" checked="">
                            <label for="23" class="VI">VI</label> <input type="radio" id="24" name="Rycerz Na Koniu" value="Rycerz Na Koniu">
                            <label for="24" class="VII">VII</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                <li class="second-sub-menu-armia gwardzista ">
                <ul class="armia-column">
                    <span>Czysciciel</span>
                    <form class="armia-row">
                        <input type="radio" id="25" name="Czysciciel" value="Czysciciel" checked="">
                            <label for="25" class="I">I</label> <input type="radio" id="26" name="Czysciciel" value="Czysciciel">
                            <label for="26" class="II">II</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                <li class="second-sub-menu-armia gwardzista ">
                <ul class="armia-column">
                    <span>Egzekutor</span>
                    <form class="armia-row">
                        <input type="radio" id="27" name="Egzekutor" value="Egzekutor" checked="">
                            <label for="27" class="I">I</label> <input type="radio" id="28" name="Egzekutor" value="Egzekutor">
                            <label for="28" class="II">II</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                <li class="second-sub-menu-armia gwardzista ">
                <ul class="armia-column">
                    <span>Destruktor</span>
                    <form class="armia-row">
                        <input type="radio" id="29" name="Destruktor" value="Destruktor" checked="">
                            <label for="29" class="I">I</label> <input type="radio" id="30" name="Destruktor" value="Destruktor">
                            <label for="30" class="II">II</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                <li class="second-sub-menu-armia gwardzista ">
                <ul class="armia-column">
                    <span>Gawron</span>
                    <form class="armia-row">
                        <input type="radio" id="31" name="Gawron" value="Gawron" checked="">
                            <label for="31" class="I">I</label> <input type="radio" id="32" name="Gawron" value="Gawron">
                            <label for="32" class="II">II</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                </ul>
            </li>
            <li class="first-sub-menu-armia ">
                <span>Specjalista</span>
                <ul class="second-menu-armia specjalista">
                
                <li class="second-sub-menu-armia specjalista second-activ">
                <ul class="armia-column">
                    <span>Rycerz</span>
                    <form class="armia-row">
                        <input type="radio" id="33" name="Rycerz" value="Rycerz" checked="">
                            <label for="33" class="I">I</label> <input type="radio" id="34" name="Rycerz" value="Rycerz">
                            <label for="34" class="II">II</label> <input type="radio" id="35" name="Rycerz" value="Rycerz">
                            <label for="35" class="III">III</label> <input type="radio" id="36" name="Rycerz" value="Rycerz">
                            <label for="36" class="IV">IV</label> <input type="radio" id="37" name="Rycerz" value="Rycerz">
                            <label for="37" class="V">V</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                <li class="second-sub-menu-armia specjalista ">
                <ul class="armia-column">
                    <span>Skaut</span>
                    <form class="armia-row">
                        <input type="radio" id="38" name="Skaut" value="Skaut" checked="">
                            <label for="38" class="I">I</label> <input type="radio" id="39" name="Skaut" value="Skaut">
                            <label for="39" class="II">II</label> <input type="radio" id="40" name="Skaut" value="Skaut">
                            <label for="40" class="III">III</label> <input type="radio" id="41" name="Skaut" value="Skaut">
                            <label for="41" class="IV">IV</label> <input type="radio" id="42" name="Skaut" value="Skaut">
                            <label for="42" class="V">V</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                <li class="second-sub-menu-armia specjalista ">
                <ul class="armia-column">
                    <span>Elitarny Kusznik</span>
                    <form class="armia-row">
                        <input type="radio" id="43" name="Elitarny Kusznik" value="Elitarny Kusznik" checked="">
                            <label for="43" class="V">V</label> <input type="radio" id="44" name="Elitarny Kusznik" value="Elitarny Kusznik">
                            <label for="44" class="VI">VI</label> <input type="radio" id="45" name="Elitarny Kusznik" value="Elitarny Kusznik">
                            <label for="45" class="VII">VII</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                <li class="second-sub-menu-armia specjalista ">
                <ul class="armia-column">
                    <span>Lwi Jezdzca</span>
                    <form class="armia-row">
                        <input type="radio" id="46" name="Lwi Jezdzca" value="Lwi Jezdzca" checked="">
                            <label for="46" class="V">V</label> <input type="radio" id="47" name="Lwi Jezdzca" value="Lwi Jezdzca">
                            <label for="47" class="VI">VI</label> <input type="radio" id="48" name="Lwi Jezdzca" value="Lwi Jezdzca">
                            <label for="48" class="VII">VII</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                <li class="second-sub-menu-armia specjalista ">
                <ul class="armia-column">
                    <span>Sep</span>
                    <form class="armia-row">
                        <input type="radio" id="49" name="Sep" value="Sep" checked="">
                            <label for="49" class="V">V</label> <input type="radio" id="50" name="Sep" value="Sep">
                            <label for="50" class="VI">VI</label> <input type="radio" id="51" name="Sep" value="Sep">
                            <label for="51" class="VII">VII</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                <li class="second-sub-menu-armia specjalista ">
                <ul class="armia-column">
                    <span>Swiety Rycerz</span>
                    <form class="armia-row">
                        <input type="radio" id="52" name="Swiety Rycerz" value="Swiety Rycerz" checked="">
                            <label for="52" class="VI">VI</label> <input type="radio" id="53" name="Swiety Rycerz" value="Swiety Rycerz">
                            <label for="53" class="VII">VII</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                <li class="second-sub-menu-armia specjalista ">
                <ul class="armia-column">
                    <span>Jegier</span>
                    <form class="armia-row">
                        <input type="radio" id="54" name="Jegier" value="Jegier" checked="">
                            <label for="54" class="VI">VI</label> <input type="radio" id="55" name="Jegier" value="Jegier">
                            <label for="55" class="VII">VII</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                <li class="second-sub-menu-armia specjalista ">
                <ul class="armia-column">
                    <span>Legitymista</span>
                    <form class="armia-row">
                        <input type="radio" id="56" name="Legitymista" value="Legitymista" checked="">
                            <label for="56" class="I">I</label> <input type="radio" id="57" name="Legitymista" value="Legitymista">
                            <label for="57" class="II">II</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                <li class="second-sub-menu-armia specjalista ">
                <ul class="armia-column">
                    <span>Pojedynkowicz</span>
                    <form class="armia-row">
                        <input type="radio" id="58" name="Pojedynkowicz" value="Pojedynkowicz" checked="">
                            <label for="58" class="I">I</label> <input type="radio" id="59" name="Pojedynkowicz" value="Pojedynkowicz">
                            <label for="59" class="II">II</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                <li class="second-sub-menu-armia specjalista ">
                <ul class="armia-column">
                    <span>Bialogrzywy Husarz</span>
                    <form class="armia-row">
                        <input type="radio" id="60" name="Bialogrzywy Husarz" value="Bialogrzywy Husarz" checked="">
                            <label for="60" class="I">I</label> <input type="radio" id="61" name="Bialogrzywy Husarz" value="Bialogrzywy Husarz">
                            <label for="61" class="II">II</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                <li class="second-sub-menu-armia specjalista ">
                <ul class="armia-column">
                    <span>Krolewski Lew</span>
                    <form class="armia-row">
                        <input type="radio" id="62" name="Krolewski Lew" value="Krolewski Lew" checked="">
                            <label for="62" class="I">I</label> <input type="radio" id="63" name="Krolewski Lew" value="Krolewski Lew">
                            <label for="63" class="II">II</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                <li class="second-sub-menu-armia specjalista ">
                <ul class="armia-column">
                    <span>Bystrooki</span>
                    <form class="armia-row">
                        <input type="radio" id="64" name="Bystrooki" value="Bystrooki" checked="">
                            <label for="64" class="I">I</label> <input type="radio" id="65" name="Bystrooki" value="Bystrooki">
                            <label for="65" class="II">II</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                </ul>
            </li>
            <li class="first-sub-menu-armia ">
                <span>Korpus Inzynierow</span>
                <ul class="second-menu-armia korpus-inzynierow">
                
                <li class="second-sub-menu-armia korpus-inzynierow second-activ">
                <ul class="armia-column">
                    <span>Jednostki Obleznicze</span>
                    <form class="armia-row">
                        <input type="radio" id="66" name="Jednostki Obleznicze" value="Jednostki Obleznicze" checked="">
                            <label for="66" class="I">I</label> <input type="radio" id="67" name="Jednostki Obleznicze" value="Jednostki Obleznicze">
                            <label for="67" class="II">II</label> <input type="radio" id="68" name="Jednostki Obleznicze" value="Jednostki Obleznicze">
                            <label for="68" class="III">III</label> <input type="radio" id="69" name="Jednostki Obleznicze" value="Jednostki Obleznicze">
                            <label for="69" class="IV">IV</label> <input type="radio" id="70" name="Jednostki Obleznicze" value="Jednostki Obleznicze">
                            <label for="70" class="V">V</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                <li class="second-sub-menu-armia korpus-inzynierow ">
                <ul class="armia-column">
                    <span>Balista Obleznicza</span>
                    <form class="armia-row">
                        <input type="radio" id="71" name="Balista Obleznicza" value="Balista Obleznicza" checked="">
                            <label for="71" class="VI">VI</label> <input type="radio" id="72" name="Balista Obleznicza" value="Balista Obleznicza">
                            <label for="72" class="VII">VII</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                <li class="second-sub-menu-armia korpus-inzynierow ">
                <ul class="armia-column">
                    <span>Jozefina</span>
                    <form class="armia-row">
                        <input type="radio" id="73" name="Jozefina" value="Jozefina" checked="">
                            <label for="73" class="I">I</label> <input type="radio" id="74" name="Jozefina" value="Jozefina">
                            <label for="74" class="II">II</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                </ul>
            </li>
            <li class="first-sub-menu-armia ">
                <span>Smok</span>
                <ul class="second-menu-armia smok">
                
                <li class="second-sub-menu-armia smok second-activ">
                <ul class="armia-column">
                    <span>Szmaragdowy Smok</span>
                    <form class="armia-row">
                        <input type="radio" id="75" name="Szmaragdowy Smok" value="Szmaragdowy Smok" checked="">
                            <label for="75" class="III">III</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                <li class="second-sub-menu-armia smok ">
                <ul class="armia-column">
                    <span>Magiczny Smok</span>
                    <form class="armia-row">
                        <input type="radio" id="76" name="Magiczny Smok" value="Magiczny Smok" checked="">
                            <label for="76" class="IV">IV</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                <li class="second-sub-menu-armia smok ">
                <ul class="armia-column">
                    <span>Pustynny Pogromca</span>
                    <form class="armia-row">
                        <input type="radio" id="77" name="Pustynny Pogromca" value="Pustynny Pogromca" checked="">
                            <label for="77" class="V">V</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                <li class="second-sub-menu-armia smok ">
                <ul class="armia-column">
                    <span>Krysztalowy Smok</span>
                    <form class="armia-row">
                        <input type="radio" id="78" name="Krysztalowy Smok" value="Krysztalowy Smok" checked="">
                            <label for="78" class="VI">VI</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                <li class="second-sub-menu-armia smok ">
                <ul class="armia-column">
                    <span>Czarny Smok</span>
                    <form class="armia-row">
                        <input type="radio" id="79" name="Czarny Smok" value="Czarny Smok" checked="">
                            <label for="79" class="VII">VII</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                </ul>
            </li>
            <li class="first-sub-menu-armia ">
                <span>Elemental</span>
                <ul class="second-menu-armia elemental">
                
                <li class="second-sub-menu-armia elemental second-activ">
                <ul class="armia-column">
                    <span>Wodny Elemental</span>
                    <form class="armia-row">
                        <input type="radio" id="80" name="Wodny Elemental" value="Wodny Elemental" checked="">
                            <label for="80" class="III">III</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                <li class="second-sub-menu-armia elemental ">
                <ul class="armia-column">
                    <span>Lodowy Feniks</span>
                    <form class="armia-row">
                        <input type="radio" id="81" name="Lodowy Feniks" value="Lodowy Feniks" checked="">
                            <label for="81" class="IV">IV</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                <li class="second-sub-menu-armia elemental ">
                <ul class="armia-column">
                    <span>Plonacy Centaur</span>
                    <form class="armia-row">
                        <input type="radio" id="82" name="Plonacy Centaur" value="Plonacy Centaur" checked="">
                            <label for="82" class="V">V</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                <li class="second-sub-menu-armia elemental ">
                <ul class="armia-column">
                    <span>Rubinowy Golem</span>
                    <form class="armia-row">
                        <input type="radio" id="83" name="Rubinowy Golem" value="Rubinowy Golem" checked="">
                            <label for="83" class="VI">VI</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                <li class="second-sub-menu-armia elemental ">
                <ul class="armia-column">
                    <span>Pan Wiatru</span>
                    <form class="armia-row">
                        <input type="radio" id="84" name="Pan Wiatru" value="Pan Wiatru" checked="">
                            <label for="84" class="VII">VII</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                </ul>
            </li>
            <li class="first-sub-menu-armia ">
                <span>Olbrzym</span>
                <ul class="second-menu-armia olbrzym">
                
                <li class="second-sub-menu-armia olbrzym second-activ">
                <ul class="armia-column">
                    <span>Kamienny Gargulec</span>
                    <form class="armia-row">
                        <input type="radio" id="85" name="Kamienny Gargulec" value="Kamienny Gargulec" checked="">
                            <label for="85" class="III">III</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                <li class="second-sub-menu-armia olbrzym ">
                <ul class="armia-column">
                    <span>Wieloramienny Straznik</span>
                    <form class="armia-row">
                        <input type="radio" id="86" name="Wieloramienny Straznik" value="Wieloramienny Straznik" checked="">
                            <label for="86" class="IV">IV</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                <li class="second-sub-menu-armia olbrzym ">
                <ul class="armia-column">
                    <span>Dwuglowy Ogr</span>
                    <form class="armia-row">
                        <input type="radio" id="87" name="Dwuglowy Ogr" value="Dwuglowy Ogr" checked="">
                            <label for="87" class="V">V</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                <li class="second-sub-menu-armia olbrzym ">
                <ul class="armia-column">
                    <span>Jezdzca Troli</span>
                    <form class="armia-row">
                        <input type="radio" id="88" name="Jezdzca Troli" value="Jezdzca Troli" checked="">
                            <label for="88" class="VI">VI</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                <li class="second-sub-menu-armia olbrzym ">
                <ul class="armia-column">
                    <span>Kolos Niszczyciel</span>
                    <form class="armia-row">
                        <input type="radio" id="89" name="Kolos Niszczyciel" value="Kolos Niszczyciel" checked="">
                            <label for="89" class="VII">VII</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                </ul>
            </li>
            <li class="first-sub-menu-armia ">
                <span>Bestia</span>
                <ul class="second-menu-armia bestia">
                
                <li class="second-sub-menu-armia bestia second-activ">
                <ul class="armia-column">
                    <span>Knur Bitewny</span>
                    <form class="armia-row">
                        <input type="radio" id="90" name="Knur Bitewny" value="Knur Bitewny" checked="">
                            <label for="90" class="III">III</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                <li class="second-sub-menu-armia bestia ">
                <ul class="armia-column">
                    <span>Wrzeszczaca Meduza</span>
                    <form class="armia-row">
                        <input type="radio" id="91" name="Wrzeszczaca Meduza" value="Wrzeszczaca Meduza" checked="">
                            <label for="91" class="IV">IV</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                <li class="second-sub-menu-armia bestia ">
                <ul class="armia-column">
                    <span>Przerazajaca Mantikora</span>
                    <form class="armia-row">
                        <input type="radio" id="92" name="Przerazajaca Mantikora" value="Przerazajaca Mantikora" checked="">
                            <label for="92" class="V">V</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                <li class="second-sub-menu-armia bestia ">
                <ul class="armia-column">
                    <span>Niszczyciel Dzungli</span>
                    <form class="armia-row">
                        <input type="radio" id="93" name="Niszczyciel Dzungli" value="Niszczyciel Dzungli" checked="">
                            <label for="93" class="VI">VI</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                <li class="second-sub-menu-armia bestia ">
                <ul class="armia-column">
                    <span>Starozytny Terror</span>
                    <form class="armia-row">
                        <input type="radio" id="94" name="Starozytny Terror" value="Starozytny Terror" checked="">
                            <label for="94" class="VII">VII</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                </ul>
            </li>
            <li class="first-sub-menu-armia ">
                <span>Autorytet</span>
                <ul class="second-menu-armia autorytet">
                
                <li class="second-sub-menu-armia autorytet second-activ">
                <ul class="armia-column">
                    <span>Szybki Strzelec</span>
                    <form class="armia-row">
                        <input type="radio" id="95" name="Szybki Strzelec" value="Szybki Strzelec" checked="">
                            <label for="95" class="V">V</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                <li class="second-sub-menu-armia autorytet ">
                <ul class="armia-column">
                    <span>Skorpion</span>
                    <form class="armia-row">
                        <input type="radio" id="96" name="Skorpion" value="Skorpion" checked="">
                            <label for="96" class="V">V</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                <li class="second-sub-menu-armia autorytet ">
                <ul class="armia-column">
                    <span>Gargulec</span>
                    <form class="armia-row">
                        <input type="radio" id="97" name="Gargulec" value="Gargulec" checked="">
                            <label for="97" class="V">V</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                <li class="second-sub-menu-armia autorytet ">
                <ul class="armia-column">
                    <span>Niedzwiedz</span>
                    <form class="armia-row">
                        <input type="radio" id="98" name="Niedzwiedz" value="Niedzwiedz" checked="">
                            <label for="98" class="V">V</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                <li class="second-sub-menu-armia autorytet ">
                <ul class="armia-column">
                    <span>Jezdziec Jednorozcow</span>
                    <form class="armia-row">
                        <input type="radio" id="99" name="Jezdziec Jednorozcow" value="Jezdziec Jednorozcow" checked="">
                            <label for="99" class="V">V</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                <li class="second-sub-menu-armia autorytet ">
                <ul class="armia-column">
                    <span>Jezdziec Bykow</span>
                    <form class="armia-row">
                        <input type="radio" id="100" name="Jezdziec Bykow" value="Jezdziec Bykow" checked="">
                            <label for="100" class="V">V</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                <li class="second-sub-menu-armia autorytet ">
                <ul class="armia-column">
                    <span>Olbrzymi Zombi</span>
                    <form class="armia-row">
                        <input type="radio" id="101" name="Olbrzymi Zombi" value="Olbrzymi Zombi" checked="">
                            <label for="101" class="V">V</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                <li class="second-sub-menu-armia autorytet ">
                <ul class="armia-column">
                    <span>Jezdziec Skorpionow</span>
                    <form class="armia-row">
                        <input type="radio" id="102" name="Jezdziec Skorpionow" value="Jezdziec Skorpionow" checked="">
                            <label for="102" class="V">V</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                <li class="second-sub-menu-armia autorytet ">
                <ul class="armia-column">
                    <span>Ifrit</span>
                    <form class="armia-row">
                        <input type="radio" id="103" name="Ifrit" value="Ifrit" checked="">
                            <label for="103" class="V">V</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                <li class="second-sub-menu-armia autorytet ">
                <ul class="armia-column">
                    <span>Cyklop</span>
                    <form class="armia-row">
                        <input type="radio" id="104" name="Cyklop" value="Cyklop" checked="">
                            <label for="104" class="V">V</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                <li class="second-sub-menu-armia autorytet ">
                <ul class="armia-column">
                    <span>Jezdziec Ognistego Robaka</span>
                    <form class="armia-row">
                        <input type="radio" id="105" name="Jezdziec Ognistego Robaka" value="Jezdziec Ognistego Robaka" checked="">
                            <label for="105" class="V">V</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                <li class="second-sub-menu-armia autorytet ">
                <ul class="armia-column">
                    <span>Lowczyni</span>
                    <form class="armia-row">
                        <input type="radio" id="106" name="Lowczyni" value="Lowczyni" checked="">
                            <label for="106" class="VI">VI</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                <li class="second-sub-menu-armia autorytet ">
                <ul class="armia-column">
                    <span>Rycerz VI</span>
                    <form class="armia-row">
                        <input type="radio" id="107" name="Rycerz VI" value="Rycerz VI" checked="">
                            <label for="107" class="VI">VI</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                <li class="second-sub-menu-armia autorytet ">
                <ul class="armia-column">
                    <span>Legionista</span>
                    <form class="armia-row">
                        <input type="radio" id="108" name="Legionista" value="Legionista" checked="">
                            <label for="108" class="VI">VI</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                <li class="second-sub-menu-armia autorytet ">
                <ul class="armia-column">
                    <span>Arbalester</span>
                    <form class="armia-row">
                        <input type="radio" id="109" name="Arbalester" value="Arbalester" checked="">
                            <label for="109" class="VI">VI</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                <li class="second-sub-menu-armia autorytet ">
                <ul class="armia-column">
                    <span>Jezdziec Na Nosorozcu</span>
                    <form class="armia-row">
                        <input type="radio" id="110" name="Jezdziec Na Nosorozcu" value="Jezdziec Na Nosorozcu" checked="">
                            <label for="110" class="VI">VI</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                <li class="second-sub-menu-armia autorytet ">
                <ul class="armia-column">
                    <span>Rydwan</span>
                    <form class="armia-row">
                        <input type="radio" id="111" name="Rydwan" value="Rydwan" checked="">
                            <label for="111" class="VI">VI</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                <li class="second-sub-menu-armia autorytet ">
                <ul class="armia-column">
                    <span>Pionier</span>
                    <form class="armia-row">
                        <input type="radio" id="112" name="Pionier" value="Pionier" checked="">
                            <label for="112" class="VI">VI</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                <li class="second-sub-menu-armia autorytet ">
                <ul class="armia-column">
                    <span>Trebusz</span>
                    <form class="armia-row">
                        <input type="radio" id="113" name="Trebusz" value="Trebusz" checked="">
                            <label for="113" class="VI">VI</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                <li class="second-sub-menu-armia autorytet ">
                <ul class="armia-column">
                    <span>Zabujczy Rydwan</span>
                    <form class="armia-row">
                        <input type="radio" id="114" name="Zabujczy Rydwan" value="Zabujczy Rydwan" checked="">
                            <label for="114" class="VI">VI</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                <li class="second-sub-menu-armia autorytet ">
                <ul class="armia-column">
                    <span>Kosciany Golem</span>
                    <form class="armia-row">
                        <input type="radio" id="115" name="Kosciany Golem" value="Kosciany Golem" checked="">
                            <label for="115" class="VI">VI</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                <li class="second-sub-menu-armia autorytet ">
                <ul class="armia-column">
                    <span>Ent</span>
                    <form class="armia-row">
                        <input type="radio" id="116" name="Ent" value="Ent" checked="">
                            <label for="116" class="VI">VI</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                <li class="second-sub-menu-armia autorytet ">
                <ul class="armia-column">
                    <span>Szedu</span>
                    <form class="armia-row">
                        <input type="radio" id="117" name="Szedu" value="Szedu" checked="">
                            <label for="117" class="VI">VI</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                <li class="second-sub-menu-armia autorytet ">
                <ul class="armia-column">
                    <span>Sfinks</span>
                    <form class="armia-row">
                        <input type="radio" id="118" name="Sfinks" value="Sfinks" checked="">
                            <label for="118" class="VI">VI</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                <li class="second-sub-menu-armia autorytet ">
                <ul class="armia-column">
                    <span>Przeklety Dendroid</span>
                    <form class="armia-row">
                        <input type="radio" id="119" name="Przeklety Dendroid" value="Przeklety Dendroid" checked="">
                            <label for="119" class="VI">VI</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                <li class="second-sub-menu-armia autorytet ">
                <ul class="armia-column">
                    <span>Paskudztwo</span>
                    <form class="armia-row">
                        <input type="radio" id="120" name="Paskudztwo" value="Paskudztwo" checked="">
                            <label for="120" class="VI">VI</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                <li class="second-sub-menu-armia autorytet ">
                <ul class="armia-column">
                    <span>Arcydemon</span>
                    <form class="armia-row">
                        <input type="radio" id="121" name="Arcydemon" value="Arcydemon" checked="">
                            <label for="121" class="VI">VI</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                <li class="second-sub-menu-armia autorytet ">
                <ul class="armia-column">
                    <span>Palintona</span>
                    <form class="armia-row">
                        <input type="radio" id="122" name="Palintona" value="Palintona" checked="">
                            <label for="122" class="VII">VII</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                <li class="second-sub-menu-armia autorytet ">
                <ul class="armia-column">
                    <span>Krol Dzungli</span>
                    <form class="armia-row">
                        <input type="radio" id="123" name="Krol Dzungli" value="Krol Dzungli" checked="">
                            <label for="123" class="VII">VII</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                <li class="second-sub-menu-armia autorytet ">
                <ul class="armia-column">
                    <span>Pan Morza</span>
                    <form class="armia-row">
                        <input type="radio" id="124" name="Pan Morza" value="Pan Morza" checked="">
                            <label for="124" class="VII">VII</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                <li class="second-sub-menu-armia autorytet ">
                <ul class="armia-column">
                    <span>Pan Gromu</span>
                    <form class="armia-row">
                        <input type="radio" id="125" name="Pan Gromu" value="Pan Gromu" checked="">
                            <label for="125" class="VII">VII</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                <li class="second-sub-menu-armia autorytet ">
                <ul class="armia-column">
                    <span>Zloty Smok</span>
                    <form class="armia-row">
                        <input type="radio" id="126" name="Zloty Smok" value="Zloty Smok" checked="">
                            <label for="126" class="VII">VII</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                <li class="second-sub-menu-armia autorytet ">
                <ul class="armia-column">
                    <span>Wladca</span>
                    <form class="armia-row">
                        <input type="radio" id="127" name="Wladca" value="Wladca" checked="">
                            <label for="127" class="VII">VII</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                <li class="second-sub-menu-armia autorytet ">
                <ul class="armia-column">
                    <span>Smok Zycia</span>
                    <form class="armia-row">
                        <input type="radio" id="128" name="Smok Zycia" value="Smok Zycia" checked="">
                            <label for="128" class="VII">VII</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                <li class="second-sub-menu-armia autorytet ">
                <ul class="armia-column">
                    <span>Przeklety Smok</span>
                    <form class="armia-row">
                        <input type="radio" id="129" name="Przeklety Smok" value="Przeklety Smok" checked="">
                            <label for="129" class="VII">VII</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                <li class="second-sub-menu-armia autorytet ">
                <ul class="armia-column">
                    <span>Robak Pustynny</span>
                    <form class="armia-row">
                        <input type="radio" id="130" name="Robak Pustynny" value="Robak Pustynny" checked="">
                            <label for="130" class="VII">VII</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                <li class="second-sub-menu-armia autorytet ">
                <ul class="armia-column">
                    <span>Wladca Ognia</span>
                    <form class="armia-row">
                        <input type="radio" id="131" name="Wladca Ognia" value="Wladca Ognia" checked="">
                            <label for="131" class="VII">VII</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                <li class="second-sub-menu-armia autorytet ">
                <ul class="armia-column">
                    <span>Bliznowaty</span>
                    <form class="armia-row">
                        <input type="radio" id="132" name="Bliznowaty" value="Bliznowaty" checked="">
                            <label for="132" class="II">II</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                <li class="second-sub-menu-armia autorytet ">
                <ul class="armia-column">
                    <span>Kolos</span>
                    <form class="armia-row">
                        <input type="radio" id="133" name="Kolos" value="Kolos" checked="">
                            <label for="133" class="II">II</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                <li class="second-sub-menu-armia autorytet ">
                <ul class="armia-column">
                    <span>Goral</span>
                    <form class="armia-row">
                        <input type="radio" id="134" name="Goral" value="Goral" checked="">
                            <label for="134" class="II">II</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                <li class="second-sub-menu-armia autorytet ">
                <ul class="armia-column">
                    <span>Druzynnik</span>
                    <form class="armia-row">
                        <input type="radio" id="135" name="Druzynnik" value="Druzynnik" checked="">
                            <label for="135" class="II">II</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                <li class="second-sub-menu-armia autorytet ">
                <ul class="armia-column">
                    <span>Bukanier</span>
                    <form class="armia-row">
                        <input type="radio" id="136" name="Bukanier" value="Bukanier" checked="">
                            <label for="136" class="II">II</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                <li class="second-sub-menu-armia autorytet ">
                <ul class="armia-column">
                    <span>Beduin</span>
                    <form class="armia-row">
                        <input type="radio" id="137" name="Beduin" value="Beduin" checked="">
                            <label for="137" class="II">II</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                <li class="second-sub-menu-armia autorytet ">
                <ul class="armia-column">
                    <span>Grejs</span>
                    <form class="armia-row">
                        <input type="radio" id="138" name="Grejs" value="Grejs" checked="">
                            <label for="138" class="II">II</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                <li class="second-sub-menu-armia autorytet ">
                <ul class="armia-column">
                    <span>Ariel</span>
                    <form class="armia-row">
                        <input type="radio" id="139" name="Ariel" value="Ariel" checked="">
                            <label for="139" class="II">II</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                <li class="second-sub-menu-armia autorytet ">
                <ul class="armia-column">
                    <span>Jago</span>
                    <form class="armia-row">
                        <input type="radio" id="140" name="Jago" value="Jago" checked="">
                            <label for="140" class="II">II</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                <li class="second-sub-menu-armia autorytet ">
                <ul class="armia-column">
                    <span>Nieposkromiony</span>
                    <form class="armia-row">
                        <input type="radio" id="141" name="Nieposkromiony" value="Nieposkromiony" checked="">
                            <label for="141" class="II">II</label>
                        <input type="button" class="btn btn-radio" value="Ok">
                    </form>
                </ul>
                <hr class="hr-armia">
                </li>
                </ul>
            </li>
        </ul>
    </nav>
</section>