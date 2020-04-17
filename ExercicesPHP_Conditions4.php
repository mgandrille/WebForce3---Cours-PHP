<?php

/**
 * Écrire avec des conditions, un programme prenant un ensemble de trois notes sur 20, par exemple :
 * 
 * $maths = 18;
 * $anglais = 12;
 * $histoire = 9;
 * 
 * 
 * - Si une des note est inférieure à 6, affichez "La note ** est éliminatoire." (** étant la valeur de la note)
 * - Si la moyenne est dans l'intervalle [18:20], affichez "Mention très bien !"
 * - Si la moyenne est dans l'intervalle [15:18[, affichez "Mention bien !" 
 * - Si la moyenne est dans l'intervalle [10:15[, affichez "Mention assez bien !" 
 * - Dans tous les cas, affichez la moyenne.
 */

$maths = 9;
$anglais = 10;
$histoire = 10;

if ($maths <6) {
    echo "La note de Maths (" . $maths . " / 20) est éliminatoire.
    <br>
    Vous n'avez pas votre Bac !";
}
elseif ($anglais < 6) {
    echo "La note d'Anglais (" . $anglais . " / 20) est éliminatoire.
    <br>
    Vous n'avez pas votre Bac !";
} 
elseif ($histoire <6) {
    echo "La note d'Histoire (" . $histoire . " / 20) est éliminatoire.
    <br>
    Vous n'avez pas votre Bac !";
}
else {
    $moyenne = round (($maths + $anglais + $histoire) / 3 , 2);

    echo "Votre moyenne est de " . $moyenne . " / 20 .
        <br>
        Vous avez eu votre Bac, ";
    if ($moyenne >= 10 && $moyenne < 15) {
        echo "Mention assez bien !";
    }
    elseif ($moyenne >= 15 && $moyenne < 18) {
        echo "Mention bien !";
    }
    elseif ($moyenne >= 18 && $moyenne <= 20) {
        echo "Mention très bien !";
    }
    else {
        echo "Sans mention";
    }
}


?>