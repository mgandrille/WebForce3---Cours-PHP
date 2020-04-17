<?php

// Mettre en ternaire la condition suivante :

// if ($panier > 0) {
//     if ($panier > 100) {
//         echo "vous avez une commande qui dépasse 100 eur, vous avez une promo";
//     }
//     else {
//         echo "vous avez une commande en cours";
//     }
// }
// else {
//     echo "votre panier est vide";
// }

$panier = 200;

echo ($panier > 0) ? (($panier > 100) ? "vous avez une commande qui dépasse 100 eur, vous avez une promo" : "vous avez une commande en cours" ) : "votre panier est vide";