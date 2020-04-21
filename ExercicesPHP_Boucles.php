<?php
/**
* Faire une boucle (for ou while) qui affiche

*  
* *  
* * *  
* * * *  
* * * * *

*/

for ($i=1; $i < 6; $i++) {
    echo str_repeat("* ", $i);
    echo "<br/>";
}


echo "<hr>";
/**
 * Afficher chaque données du tableau suivant avec 
 * une boucle For
 */
$array = [2, 5, 8, 9, 13, 14, 18];

for($i=0; $i < count($array) ; $i++) {
    echo $array[$i];
    echo "<br/>";
}

echo "<hr>";
/**
 * Le tableau précédent représente la liste des puissances des chevaux d'une 
 * course hippique.
 * L'organisateur souhaite trouver les deux chevaux dont la puissance 
 * est la plus proche pour faire une course équilibréee.
 * Faites une boucle et utilisez des variables pour trouver l'intervalle 
 * le plus petit possible !
 * 
 * (Ex: dans le tableau de l'exercice précédent, les chevaux les plus 
 * proches sont 8 et 9, 13 et 14. L'intervalle le plus petit est de "1", 
 * Il faut afficher "1".)
 */

 // var_dump(array_count_values($array));
$j = 0;
$ecartMini = 100;

for($i=0; $i < count($array) ; $i++) {
    $ecart = $array[$i] - $j;
    // echo "Il y a un écart de <strong>". ($ecart) . "</strong> entre les chevaux " . $j . " et " . $array[$i];
    if ($ecart < $ecartMini) {
        $ecartMini = $ecart;
        $cheval = [
            "cheval1" => $j,
            "cheval2" => $array[$i]   
        ];
    }  
    if ($ecart === $ecartMini) {
        $cheval[] = [
            "cheval1" => $j,
            "cheval2" => $array[$i]   
        ] ;
    }
    $j = $array[$i];
    // echo "<br/>";
}

// var_dump($cheval);
echo "L'écart mini est de <strong> " . $ecartMini . "</strong><br/>";
echo "On le retrouve pour les chevaux : <br/>";

for($i=0; $i < (count($cheval) - 2) ; $i++) {
    echo $cheval[$i]["cheval1"] . " et " . $cheval[$i]["cheval2"];
    echo "<br/>";
}


echo "<hr>";
/**
 * Additionner les nombres de 1 à 50 (1+2+3+4...+49+50)
 */

$nombreFinal = 0;

for($i=1 ; $i <=50 ; $i++) {
    $nombreFinal = $nombreFinal + $i;
}
echo $nombreFinal;

echo "<hr>";
/**
 *
 * Afficher le schéma suivant (étoiles de 1 à 5 puis de 5 à 1)
 * 
 * * 
 * * * 
 * * * * 
 * * * * * 
 * * * * * 
 * * * * 
 * * * 
 * * 
 * 
 */ 

for ($i=1; $i < 6; $i++) {
    echo str_repeat("* ", $i);
    echo "<br/>";
}
for ($i=5; $i > 0; $i--) {
    echo str_repeat("* ", $i);
    echo "<br/>";
}


echo "<hr>";
/**
 * Boucle dans une boucle:
 * 
 * Afficher grâce à deux boucles imbriquées la liste 
 * des tables de multiplication :
 * 
 * 1*1
 * 1*2
 * 1*3
 * ...
 * 1*9
 * 2*1
 * 2*2
 * ...
 * 2*9
 * ...
 * 9*1
 * 9*2
 * ...
 * 9*9
 */

for($i=1; $i < 10; $i++) {
    echo "Table de multiplication de " . $i . " : <br/>";
    for($j=1; $j <= 10; $j++) {
        echo $i . " x " . $j . " = " . $i*$j ."<br/>";
    };
    echo "<br/>";
}

echo '<table border="1">';
for($i=1; $i < 10; $i++) {
    echo "<tr>";
    echo "<td>" . $i . "</td>";
    for($j=1; $j <= 10; $j++) {
        echo "<td>" . $i*$j ."</td>";
    };
    echo "</tr>";
}
echo "</table>";


echo "<hr>";
/**
 * À partir du code suivant, créer un échiquier (un tableau qui alterne des cases noire/blanches sur les lignes et les colonnes)
 */
echo "<table border='1'>";
    for ($i = 1; $i <= 8; $i++) {
        echo "<tr>";
        if($i%2 === 0) {
            for ($j = 1; $j <= 8; $j++) {
                if($j%2 === 0) {
                    echo "<td height=30px width=30px style='background-color: black;'></td>";
                }
                else {
                    echo "<td height=30px width=30px style='background-color: white;'></td>";
                }
            }
        }
        else {
            for ($j = 1; $j <= 8; $j++) {
                if($j%2 === 0) {
                    echo "<td height=30px width=30px style='background-color: white;'></td>";
                }
                else {
                    echo "<td height=30px width=30px style='background-color: black;'></td>";
                }
            }
        }
        echo "</tr>";
    }
echo "</table>";

echo "<br/>";
//solution optimisée
echo "<table border='1'>";
    for ($i = 1; $i <= 8; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= 8; $j++) {
            $total = $i + $j;
            if($total%2 === 0){
                echo "<td height=30px width=30px style='background-color: black; color: white;'>".$total."</td>";
            }else{
                echo "<td height=30px width=30px style='background-color: white;'>".$total."</td>";
            }
        }
        echo "</tr>";
    }
echo "</table>";


echo "<hr>";
/**
 * Écrire une boucle qui affiche des nombres de 1 à 100.
 * - Si un nombre est divisible par 3, afficher "Fizz" à la place
 * - Si un nombre est divisible par 5, afficher "Buzz" à la place
 * - Si un nombre est divisible par 3 et par 5, afficher "FizzBuzz" à la place
 */

for($nombre = 1; $nombre <=100; $nombre++) {
    if($nombre%3 === 0 && $nombre%5 === 0) {
        echo "FizzBuzz <br/>";
    } 
    else if($nombre%5 === 0) {
        echo "Buzz <br/>";
    }
    else if($nombre%3 === 0) {
        echo "Fizz <br/>";
    } 
    else {
        echo $nombre . "<br/>";
    }
}


?>