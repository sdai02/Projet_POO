<?php


class Guerrier {

    private int $pv = 100;
    private int $ataque = 20;
    private int $defenc = 10;
    private int $degat;

    public function Ataque(Guerrier $coup ){
        $coup->degat = $this -> ataque;
    }

    public function getAtaque(){
        return $this-> pv - $this -> degat;
    }
}

$teste = new Guerrier();
$teste2 = new Guerrier();
$teste ->Ataque($teste2);
echo($teste2->getAtaque());











?>