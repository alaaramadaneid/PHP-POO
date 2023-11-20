<?php
require "Mage.php";
require "superman.php";
require "Warrior.php";



 class Hero{
    public $name;

    public $strength;

    public $health;

    public $weapon;

    public $magicPower;

    public  function __construct($name, $strength,$health){
        $this->name =$name;
        $this->strength =$strength;
        $this->health=$health;
    }
    function display(){
        echo " NOM: {$this->name} FORCE {$this->strength}  SANTE {$this->health}  ";
    }
 }
 $hero =new Hero("Noah", 100, 10);
 $hero->display();
 echo("<br>");

 

