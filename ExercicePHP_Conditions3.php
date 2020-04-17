<?php

/**
 * Créer deux variables : 
 * $time   // Temps en secondes pour finir la partie
 * $coins  // Pièces acquises pendant la partie
 * 
 * 
 * Le joueur marque des points en cumulant les 3 éléments suivants :
 * 
 * temps < 120s : 200 points
 * temps >= 120s et < 180s : 100 points
 * temps >= 180s : 50 points
 * 
 * coins <= 10 : un point par coin acquise
 * coins > 10 et <= 20 : 1,5 point par coin acquise
 * coins > 20 : 2 points par coin acquise
 */

$time = 150;
$coins = 10;
$pointsTemps = 0;
$pointsCoins = 0;

if ($time < 120 ) {
    $pointsTemps = $pointsTemps + 200;
}
elseif ($time >=120 OR $time < 180 ) {
    $pointsTemps = $pointsTemps + 100; 
}
else {
    $pointsTemps = $pointsTemps + 50;
}

if ($coins <= 10 ) {
    $pointsCoins = $pointsCoins + $coins;
}
elseif ($coins >10 OR $coins <= 20 ) {
    $pointsCoins = $pointsCoins + $coins * 1.5; 
}
else {
    $pointsCoins = $pointsCoins + $coins * 2;
}

$points = $pointsTemps + $pointsCoins;
var_dump($points);

?>