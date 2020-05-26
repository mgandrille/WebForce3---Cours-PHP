<?php

require __DIR__ . '/lib/Ship.php';

$myShip = new Ship();
$myShip->name = "TIE Fighter";
$myShip->weaponPower = 100;
$myShip->spatiodriveBooster = 150;
$myShip->strength = 30;

$mySecondShip = new Ship();
$mySecondShip->name = "X-Wing Fighter";
$mySecondShip->weaponPower = 100;
$mySecondShip->spatiodriveBooster = 150;
$mySecondShip->strength = 30;

echo $myShip->getNameAndSpecs(true);
echo '<br>';
echo $myShip->getNameAndSpecs(false);
echo '<br>';

$ship1 = new Ship();
$ship1->name = "Jedi Super Greater";
$ship1->weaponPower = 150;
$ship1->spatiodriveBooster = 12;
$ship1->strength = 130;

echo $ship1->getNameAndSpecs(true);
echo '<br>';
echo $ship1->getNameAndSpecs();
echo '<br>';

$ship2 = new Ship();
$ship2->name = "Android Extra Fighter";
$ship2->weaponPower = 400;
$ship2->spatiodriveBooster = 12;
$ship2->strength = 130;

echo $ship2->getNameAndSpecs(true);
echo '<br>';
echo $ship2->getNameAndSpecs();
echo '<br>';

$ship3 = new Ship();
$ship3->name = "Cargo Jumper";
$ship3->weaponPower = 150;
$ship3->spatiodriveBooster = 12;
$ship3->strength = 130;

echo $ship3->getNameAndSpecs(true);
echo '<br>';
echo $ship3->getNameAndSpecs();
echo '<br>';

var_dump($myShip->doesThisShipHasMoreStrengthThanMe($ship1));