<?php 

// Faire une liste ul>li avec les éléments suivants :
$saisons1 = ["été", "automne", "printemps", "hiver"];

echo "<ul>";
foreach($saisons1 as $saison) {
    echo "<li>" . $saison . "</li>";
}
echo "</ul>";

// Faire une liste ul>li avec les éléments suivants 
// (afficher "clé: valeur")
$aubergines = [
    "quantité" => 12,
    "prix" => 5
];

echo "<hr>";
echo "<ul>";
foreach($aubergines as $quantite => $valeur) {
    echo "<li>" . $quantite . " : " . $valeur . "</li>";
}
echo "</ul>";

// Faire une liste ul>li qui affiche aubergines et tomates
// Faire un autre ul>li (à l'intérieur du premier) qui affiche 
// quantité et prix pour aubergines et tomates
$ete = [
    "aubergines" => [
        "quantité" => 12,
        "prix" => 5
    ],
    "tomates" => [
        "quantité" => 10,
        "prix" => 6
    ]
];

echo "<hr>";
echo "<ul>";
foreach ($ete as $legume => $informations) {
    echo "<li>" . $legume . " </li> ";
    echo "<ul>";
    foreach ($informations as $info => $valeur) {
        echo "<li>" . $info . " : " . $valeur . "</li>";
    }
    echo "</ul>";
}
echo "</ul>";


// Afficher la liste des saisons, puis des légumes de chaque saison,  
// puis des caractéristiques de chaque légume
// dans plusieurs ul>li successifs
$saisons = [
    "été" => [
        "aubergines" => [
            "quantité" => 12,
            "prix" => 5
        ],
        "tomates" => [
            "quantité" => 10,
            "prix" => 6
        ]
    ],
    "automne" => [
        "pommes de terre" => [
            "quantité" => 12,
            "prix" => 5
        ],
        "carottes" => [
            "quantité" => 10,
            "prix" => 6
        ]
    ],
    "hiver" => [
        "avocats" => [
            "quantité" => 12,
            "prix" => 5
        ],
        "pêches" => [
            "quantité" => 10,
            "prix" => 6
        ]
    ]
];

echo "<hr>";
echo "<ul>";
foreach($saisons as $saison => $informations1) {
    echo "<li>" . $saison . " </li> ";
    echo "<ul>";
    foreach ($informations1 as $legume => $informations2) {
        echo "<li>" . $legume . " </li> ";
        echo "<ul>";
        foreach ($informations2 as $info => $valeur) {
            echo "<li>" . $info . " : " . $valeur . "</li>";
        }
        echo "</ul>";
    }
    echo "</ul>";    
}
