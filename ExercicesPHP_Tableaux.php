<?php

/**
 * 3. a. Déclarez un tableau simple :
 * => "tomates", "navets", "carottes", "oignons"
 * 3. b. Affichez dans un var_dump la valeur "carottes".
 */

$array = [ "tomates", "navets", "carottes", "oignons"];

echo $array[2];

echo "<hr>";
/**
 * 4. a. Déclarez un tableau associatif, qui contient des noms de légumes en clés (ceux-ci dessus par exemple), et  en valeur le prix du légume.
 * 4. b. Affichez dans un var_dump la valeur du prix du 3ème légume.
 */

$array = [ 
    "tomates"   => 5, 
    "navets"    => 6, 
    "carottes"  => 4, 
    "oignons"   => 2
];

echo $array["carottes"];

echo "<hr>";
/**
 * 5. a. Déclarez un tableau multi-dimentionnel, qui contient des saisons, 
 * lesquelles contiennent des 2 légumes, 
 * lesquels contiennent les clés "quantité" et "prix"
 * 5. b. Affichez dans un var_dump le prix du premier légume d'été.
 */

$saison = [
    "printemps" => [
        "asperge" => [
            "quantité"  => 10,
            "prix"      => 2
        ],
        "chou-fleur" => [
            "quantité"  => 50,
            "prix"      => 2.5
        ],
    ],
    "été"=> [
        "carotte" => [
            "quantité"  => 20,
            "prix"      => 3
        ],
        "concombre"=> [
            "quantité"  => 55,
            "prix"      => 1.5
        ],
    ],
    "automne"=> [
        "betterave"   => [
            "quantité"  => 32,
            "prix"      => 2.2
        ],
        "brocoli"=> [
            "quantité"  => 15,
            "prix"      => 2.8
        ],
    ],
    "hiver"=> [
        "citrouille"   => [
            "quantité"  => 12,
            "prix"      => 1.8
        ],
        "topinambour"=> [
            "quantité"  => 70,
            "prix"      => 1.3
        ],
    ],
];

echo $saison["été"]["carotte"]["prix"];

echo "<hr>";


/**
 * -Ajouter au tableau $saisons une nouvelle saison (par exemple "nouvelle saison")
 *  - À la nouvelle saison,  rajoutez un légume
 * - Au nouveau légume, rajoutez une quantité et un prix
 */

$saisons = [
    "été" => [
        "aubergines" => [
            "quantité" => 12,
            "prix" => 5
        ],
    ],
];

var_dump($saisons);

$saisons["été"]["tomates"]["quantité"] = 10;
$saisons["été"]["tomates"]["prix"] = 6;

$saisons["automne"]["pommes de terre"]["quantité"] = 12;
$saisons["automne"]["pommes de terre"]["prix"] = 5;
$saisons["automne"]["carottes"]["quantité"] = 10;
$saisons["automne"]["carottes"]["prix"] = 6;

$saisons["hiver"]["avocats"]["quantité"] = 12;
$saisons["hiver"]["avocats"]["prix"] = 5;
$saisons["hiver"]["peches"]["quantité"] = 10;
$saisons["hiver"]["peches"]["prix"] = 6;

$saisons["printemps"]["bananes"]["quantité"] = 12;
$saisons["printemps"]["bananes"]["prix"] = 5;
$saisons["printemps"]["noix"]["quantité"] = 10;
$saisons["printemps"]["noix"]["prix"] = 6;

var_dump($saisons);


/**
 * Rajoutez à un légume un champ "prix total", 
 * qui sera le résultat de sa quantité * son prix
 */ 

$prixTotal = $saisons["été"]["tomates"]["quantité"] * $saisons["été"]["tomates"]["prix"];
echo $prixTotal;

$saisons["été"]["tomates"]["prix total"] = $prixTotal ; 
var_dump($saisons);
