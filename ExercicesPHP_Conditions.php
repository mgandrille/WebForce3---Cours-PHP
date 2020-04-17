https://github.com/tomsihap/php-mysql-pdo-poo-course/blob/master/01-PHP/PHP-02-conditions.md

<?php

//Exercice 1

$age = 39;

if ( $age >= 18 ) {
    var_dump("Vous êtes majeur");
}
else {
    var_dump("Vous êtes mineur");
}

// Exercice 2
$isEasy = False;

if ($isEasy === True ) {
    var_dump("C'est facile !");
}
else {
    var_dump("C'est difficile !");
}

echo ($isEasy) ? 'C\'est facile !' : 'C\'est difficile !';

//Exercice 3
$age = 7 ;
$gender = "Homme";

if ( $age >= 18 AND $gender == "Homme" ) {
    var_dump("Vous êtes un homme et vous êtes majeur");
}
elseif ( $age < 18 AND $gender == "Homme" ) {
    var_dump("Vous êtes un homme et vous êtes mineur");
}
elseif ( $age >= 18 AND $gender == "Femme" ) {
    var_dump("Vous êtes une femme et vous êtes majeure");
}
else {
    var_dump("Vous êtes une femme et vous êtes mineure");
}

//Exercice 4
$magnitude = 7;

switch ($magnitude) {
    case 1 :
        var_dump("Micro-séisme impossible à ressentir.");
    break;
    case 2 :
        var_dump("Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.");
    break;
    case 3 :
        var_dump("Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.");
    break;
    case 4 :
        var_dump("Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.");
    break;
    case 5 :
        var_dump("Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.");
    break;
    case 6 :
        var_dump("Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.");
    break;
    case 7 :
        var_dump("Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.");
    break;
    case 8 :
        var_dump("Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.");
    break;
    case 9 :
        var_dump("Séisme capable de tout détruire sur une très vaste zone.");
    break;
}

//Exercice 5
$type = 'fire';

if ($type == 'fire') {
    echo 'Vous avez choisi Salamèche.';
}
else {
    'Vous avez choisi Bulbizarre ou Carapuce !';
}

// Exercice 6
if ( $age >= 18 ) {
    echo 'Tu es majeur';
}
else {
    echo "Tu n'es pas majeur";
}

// Exercice 7
$isOk = True;

if ( $isOk === False ) {
    echo "c'est pas bon !!!";
} 
else {
    echo "c'est ok !!";
}

// Exrecice 8
if ( $isOk ) {
    echo "c'est ok !!";
} 
else {
    echo "c'est pas bon !!!";
}