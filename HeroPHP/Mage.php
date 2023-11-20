<?php

class Mage extends Hero{
    public  function __construct($name, $strength,$health,$magicPower){
        $this->name =$name;
        $this->strength =$strength;
        $this->health=$health;
        $this->magicPower=$magicPower;
    }
    function display(){
 echo " NOM: {$this->name} FORCE{$this->strength}  SANTE {$this->health}  MAGICPOWER {$this->magicPower} ";
    }
}
$mage =new Mage ("Warrior", 300, 40,"vouler");
$mage->display();
echo("<br>");

