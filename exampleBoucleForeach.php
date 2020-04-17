<?php

$nombresPairs = [2, 4, 6, 8];
var_dump($nombresPairs);
foreach($nombresPairs as $nombre) {
    echo $nombre;
    echo "<br>";
}
foreach ($nombresPairs as $i => $nombre) {
    echo $i . ": " . $nombre;
    echo "<br>";
}
$user = [
    "firstname" => "john",
    "lastname"  => "doe",
    "age"       => "54",
    "job"       => "developpeur"
];
echo "<hr>";
echo "<ul>";
foreach($user as $carac => $valeur) {
    echo "<li><strong>" . $carac . "</strong> : " . $valeur . "</li>";
}
echo "</ul>";

?>