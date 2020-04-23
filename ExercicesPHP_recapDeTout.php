<?php
/**
 * Variables
 * https://gist.github.com/tomsihap/6583f017ca858ae74d9221a51f82ba63
 */

$texte = "Hello World";
echo $texte;
var_dump($texte);

$string = "ceci est une chaine de caractères";
echo $string;
var_dump($string);

$integer = 17;
echo $integer;
var_dump($integer);

$booleen = true;
echo $booleen;
var_dump($booleen);

$float = 3.14;
echo $float;
var_dump($float);

$nouvelleVariable = $integer + 42;
echo $nouvelleVariable;
var_dump($nouvelleVariable);

$booleen = null;
echo $booleen;
var_dump($booleen);

const EXAMPLE_CONSTANT = "test";
echo EXAMPLE_CONSTANT;
var_dump(EXAMPLE_CONSTANT);

$nombre1 = 7;
$nombre2 = 13;
$somme = $nombre1 + $nombre2;
echo "La somme de " . $nombre1 . " et " . $nombre2 . " est de " . $somme;
echo "<br/>";
$soustraction = $nombre1 - $nombre2;
echo "La soustraction de " . $nombre1 . " et " . $nombre2 . " est de " . $soustraction;
echo "<br/>";
$division = $nombre1 / $nombre2;
echo "La division de " . $nombre1 . " et " . $nombre2 . " est de " . $division;
echo "<br/>";
$multiplication = $nombre1 * $nombre2;
echo "La multiplication de " . $nombre1 . " et " . $nombre2 . " est de " . $multiplication;
echo "<br/>";
$modulo = $nombre1 % $nombre2;
echo "Le modulo de " . $nombre1 . " par " . $nombre2 . " est de " . $modulo;
echo "<br/>";

echo "<br/>";

$float1 = 5.5372158;
$float2 = 2.6941046;
$floatDivision = $float1 / $float2;
echo "La division de " . $float1 . " et " . $float2 . " est de " . $floatDivision;
echo "<br/>";
$arrondiMath = round($floatDivision, 3);
echo "L'arrondi mathématique est : " . $arrondiMath;
echo "<br/>";
$arrondiSuperieur = ceil($floatDivision);
echo "L'arrondi suppérieur est : " . $arrondiSuperieur;
echo "<br/>";
$arrondiInferieur = floor($floatDivision);
echo "L'arrondi inférieur est : " . $arrondiInferieur;
echo "<br/>";
echo "<br/>";

echo "J'ajoute +1 à " . $nombre1 . " : ";
$nombre1 = $nombre1 +1;
echo $nombre1;
echo "<br/>";
echo "J'ajoute +1 à " . $nombre1 . " : ";
$nombre1 += 1;
echo $nombre1;
echo "<br/>";
echo "J'ajoute +1 à " . $nombre1 . " : ";
$nombre1++;
echo $nombre1;
echo "<br/>";
echo "<br/>";

echo "J'enlève 1 à " . $nombre1 . " : ";
$nombre1 = $nombre1 -1;
echo $nombre1;
echo "<br/>";
echo "J'enlève 1 à " . $nombre1 . " : ";
$nombre1 -= 1;
echo $nombre1;
echo "<br/>";
echo "J'enlève 1 à " . $nombre1 . " : ";
$nombre1--;
echo $nombre1;
echo "<br/>";
echo "<br/>";

$string1 = "Ceci est la 1ère string";
$string2 = "Ceci est la 2ème string";
$concatenationString = $string1 . " / " . $string2;
echo $concatenationString;
echo "<br/>";
echo "<br/>";

$nom = "Bond";
$prenom = "James";
$codeAgent = 7;
$bonjour = "Bonjour agent 00". $codeAgent . ", ou devrais-je dire agent " .
            $nom . " , " . $prenom . " " . $nom . " !";
echo $bonjour;
echo "<br/>";
echo "<br/>";

echo str_replace("agent", "étudiant", $bonjour);
echo "<br/>";

echo "La phrase contient " . strlen($bonjour) . " caractères";
echo "<br/>";
echo "Les 4 premiers caractères sont : " . substr($bonjour, 0, 4);
echo "<br/>";
echo "Les caractères 4 à 7 sont : " . substr($bonjour, 3, 4);
echo "<br/>";

echo "En majuscule la phrase est : " . strtoupper($bonjour);
echo "<br/>";
echo "En minuscule la phrase est : " . strtolower($bonjour);

echo "<hr>";
/**
 * Conditions
 * https://gist.github.com/tomsihap/6583f017ca858ae74d9221a51f82ba63
 */

$heure = 14;
if($heure > 7 && $heure < 20) {
    echo "bonne journée !";
}
else {
    echo "bonne soirée !";
}
echo "<br/>";

$heure = date('H');
if($heure > 7 && $heure < 20) {
    echo "bonne journée !";
}
else {
    echo "bonne soirée !";
}
echo "<br/>";



?>