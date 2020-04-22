<?php

/***
 * Exercice 1 : Créez une fonction "sayHello" qui affiche "Hello world!"
 */

function sayHello() {
    $texte = "Hello World !";
    return $texte;
}

echo sayHello();


echo "<hr>";
/**
 * Exercice 2 : Créez une fonction qui prend en paramètres un nom et un prénom, 
 * et affichez les dans la phrase "Bonjour John Doe !"
 */

function prenomNom($prenom, $nom) {
    return "Bonjour " . $prenom . " ". $nom . " !";
}

echo prenomNom("John", "Doe");



echo "<hr>";
/**
 * Exercice 3 : Créez une fonction qui prend deux nombres en paramètres,
 *  et qui retourne la multiplication des deux
 */

function multiplication($nombre1, $nombre2) {
    $calcul = $nombre1 * $nombre2;
    return $calcul;
}
echo "Résultat de la multiplication : " . multiplication(2, 8);



echo "<hr>";
/**
 * Exercice 4: 
 * En faites une fonction qui prend 2 paramètres :
 * 1. Une phrase
 * 2. Le mot à chercher dans la phrase
 * 
 * et qui remplace le mot cherché dans la phrase par "Jar Jar Binks"
 * 
 * (Par exemple: 
 * - paramètre 1 : la phrase "lorem ipsum dolor sit amet hello world"
 * - paramètre 2 : "hello"
 * 
 * La phrase retournée sera : "lorem ipsum dolor sit amet Jar Jar Binks world"
 */

function remplaceMot($phrase, $motRemplace) {
    return str_replace($motRemplace, "Jar Jar Binks", $phrase);
}

$phrase = "il était une fois, dans la ville de fois, un homme sans fois";

echo $phrase;
echo "<br/>";
echo remplaceMot($phrase, "fois");


echo "<hr>";
/**
 * Exercice 5:
 * Faire une fonction qui prend un array simple en paramètres (une liste)
 * 
 * Retourner une string qui contient une liste ul/li avec les éléments de la liste.
 */

function liste($liste) {
    foreach($liste as $element) {
        $elements[] = $element;
    };
    return "<ul><li>" . implode("</li><li>", $elements) . "</li><ul>";
}

$maListe = ["bijou", "caillou", "chou", "genou", "joujou", "pou", "hibou"];

echo liste($maListe);



echo "<hr>";
/**
 * Exercice 6 :
 * Faire une fonction "drunkenCapitalizer" qui prend une string en paramètres et 
 * la retourne avec des lettres minuscules/majuscules aléatoirement. 
 * 
 * Par exemple :
 * 
 * - paramètre : "hello world"
 * - retourne : "HelLo woRlD"
 * 
 * Étapes de l'algorithme :
 * 1. Trouver comment découper une string lettre par lettre, pour avoir chaque 
 *      lettre dans un tableau
 * 2. Faire une boucle dans ce tableau de lettres
 * 3. Dans la boucle: trouver comment avoir une valeur aléatoire pour gérer le 
 *      hasard. En fonction du résultat aléatoire, décider si on met le caractère 
 *      en majuscule ( strtoupper() ) ou en minuscule ( strtolower() )
 * 
 * Pour gérer le hasard, vous pouvez par exemple générer un nombre aléatoire 
 * entre 0 et 10 et dire:
 * - si je tombe sur 0 - 4 : minuscule
 * - si je tombe sur 5 - 9 : majuscule
 * 
 * 4. Dans la  boucle, quand on a changé la lettre, mettre successivement les
 *      nouvelles lettres dans un tableau
 * 5. En dehors de la boucle, transformer le tableau en string
 * 6. Retourner la string !
 */

function drunkenCapitalizer($string) {
    $decoupe = str_split($string, 1);
    $newDecoupe = "";
    for($i=0; $i < count($decoupe); $i++) {
        $aleatoire = rand(0, 5);
        if($aleatoire === 1 || $aleatoire === 4) {
            $decoupe[$i] = strtolower($decoupe[$i]);
        } 
        else if($aleatoire === 3 || $aleatoire === 5) {
            $decoupe[$i] = strtoupper($decoupe[$i]);
        }
        $newDecoupe = $newDecoupe . $decoupe[$i];
    }
    return $newDecoupe;
}

echo(drunkenCapitalizer("hello world"));


echo "<hr>";
/**
 * Exercice 7 :
 * Comme pour l'exercice 5 qui s'appliquait à une liste, faites une fonction qui 
 * prend un tableau à deux dimensions et en fait une liste ul/li :
 * 
 * Exemple  :
 *  */
$tableLegumes = [
    'été'     => [ 'aubergines', 'pêches'],
    'automne' => [ 'aubergines', 'pêches'],
    'hiver'   => [ 'aubergines', 'pêches'],
    'printemps' => [ 'aubergines', 'pêches'],
];

function legumesDeSaison($array) {
    echo "<ul>";
    foreach($array as $saison => $legumes) {
        echo "<li>" . $saison . " </li> ";
        echo "<ul>";
        foreach($legumes as $legume) {
            echo "<li>" . $legume . " </li> ";
        }
        echo "</ul>";
    }    
}

legumesDeSaison($tableLegumes);


echo "<hr>";
/**
 * Exercice 8 : Triangle de Pascal
 * Faites une fonction qui prend en paramètres un nombre "n".
 * La fonction retournera les n premières lignes du triangle de Pascal. 
 * C'est un "triangle"
 * de nombres dont les nombres inférieurs sont la somme des deux nombres 
 * du dessus :
 * https://www.w3resource.com/w3r_images/pascal-traingle.png 
 * 
 * Exemple :
 * 
 * Paramètres : n = 6
 * Résultat :
 * 
 * 1
 * 1 1
 * 1 2 1
 * 1 3 3 1
 * 1 4 6 4 1
 * 1 5 10 10 5 1
 * 
 * Les résultats seront présentés sous la forme d'un tableau de tableaux : 
 * chaque ligne serait un sous-tableau du tableau principal 
 * */

// function trianglePascal($nombre) {
//     for($i=0; $i < $nombre; $i++) {
//         $table[] = $i ;
//     }
//     var_dump($table);
//     return 1 . implode(" " , $table) . "<br/>";
// }

// echo trianglePascal(6);

// $a = 1;
// echo $a . "<br/>";
// echo $a . " " . $a . "<br/>";
// echo $a . " " . $b=$a+$a . " " . $a . "<br/>";
// echo $a . " " . $c=$a+$b . " " . $c=$a+$b . " " . $a . "<br/>";
// echo $a . " " . $d=$a+$c . " " . $e=$c+$c . " " . $d=$a+$c . " " . $a . "<br/>";

// $triangle = [
//     $ligne1 = [1],
//     $ligne2 = [],
//     $ligne3 = [],
// ];
// var_dump($triangle);
// $triangle[] = "ligne1";
// var_dump($triangle);
// $triangle[] = 1;
// var_dump($triangle);

$triangle = [
    [1], 
    [1,1]
];

for($i=2; $i < 8; $i++) {
    $ligne[] = 1;
    // var_dump($triangle);
    for($j=0; $j<$i-1 ; $j++) {
        $ligne[] = $triangle[$i-1][$j] + $triangle[$i-1][$j+1];
        // var_dump($triangle);
    }
    $ligne[] = 1;
    $triangle[] = $ligne;
    unset($ligne);
}
var_dump($triangle);



echo "<hr>";
/**
 * Exercice 9 : Fonctions récursives
 * Faites une fonction "récursive" qui va créer un ul/li pour tout tableau
 * passé en paramètres quelle que soit sa profondeur.
 * 
 * Une fonction récursive, c'est une fonction qui va s'appeler elle-même.
 */










?>