<?php

use Caster as GlobalCaster;

abstract class Perso {
    private string $name;
    private int $pv = 100;
    private $degat;
    private $protection;
    

   function __construct( string $name, int $pv, int $degat, int $protection)
   {
    $this -> name = $name;
    $this -> pv = $pv;
    $this -> degat = $degat;
    $this -> protection = $protection; 
   }
   
}


class Warrior extends Perso{
    private int $cps;
    private $def;
    private $hit;
    private int $pv = 100;
    

    public function setAtk(Warrior $atck){
       $atck -> hit += $this -> cps = random_int(20,40);
    }

    public function setProtect(Warrior $def){
        $def = $this -> def = random_int(10,19);
        return $def;
    }

    public function setAtkValue(Perso $pv){
        return $this -> pv - $this -> hit;
    }
};

class Caster extends Perso{
    private int $cps;
    private $spell;

    public function Atk($cps){

       $cps = $this -> cps = random_int(5,10);
        
    }}



    $truc = new Caster('Paule', $pv, 40, 23);

    var_dump($truc);



















// class Guerrier {

//     private int $pv = 100;
//     private int $ataque = 20;
//     private int $defenc = 10;
//     private int $degat;

//     public function Ataque(Guerrier $coup ){
//         $coup->degat = $this -> ataque;
//     }

//     public function getAtaque(){
//         return $this-> pv - $this -> degat;
//     }
// }

// $teste = new Guerrier();
// $teste2 = new Guerrier();
// $teste ->Ataque($teste2);
// echo($teste2->getAtaque());