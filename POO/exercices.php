<?php

class Personnage {
    public $name;
    public $strength = 0;
    public $power = 0;

    public function __construct($newName, $newStrength = null, $newPower = null) {
        $this->name = $newName;

        if($newStrength) {
            $this->strength = $newStrength;
        }
// ecriture ternaire : $this->strength = ($strength) ? $strength : null ;
// depuis php7 : $this->strength = $strength ?? this->strength ;
        if($newPower) {
            $this->power = $newPower;
        }
    }

    public function getName() {
        return "Le nom du personnage est " . $this->name;
    }

    public function getNameAndSpecs($longString = false) {
        if ($longString === false) {
            return "Le nom du personnage est " . $this->name . " (il possède une force de  " . $this->power . " et une résistance de " . $this->strength . ")." ;
        }
        else {
            return $this->getName();
        }
    }

}

$merlin = new Personnage("Merlin L'Enchanteur", 50, 100);
// $merlin->name = "Merlin L'Enchanteur";
// $merlin->strength = 50;
// $merlin->power = 100;

var_dump($merlin);

$arthur = new Personnage("Arthur");
var_dump($arthur);

var_dump($merlin->getName());
var_dump($arthur->getNameAndSpecs());
var_dump($arthur->getNameAndSpecs(true));
