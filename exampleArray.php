<?php

$variable = 3/4;

$array = [
    "a", 
    true, 
    42, 
    $variable
];

var_dump($array);
echo $array[3];

echo "<hr>";

$user = [
    "firstname" => "john",
    "lastname"  => "doe",
    "age"       => "54",
    "job"       => "developpeur"
];

echo $user["job"];

echo "<hr>";

$users = [
    [
        "firstname" => "john",
        "lastname"  => "doe",
        "age"       => "54",
        "job"       => "developpeur"
    ],
    [
        "firstname" => "hermione",
        "lastname"  => "granger",
        "age"       => "20",
        "job"       => "magicienne"
    ]      
];

echo $users[1]["job"];

echo "<hr>";

$users = [
    "user1" => [
        "firstname" => "john",
        "lastname"  => "doe",
        "age"       => "54",
        "job"       => "developpeur"
    ],
    "user2" => [
        "firstname" => "hermione",
        "lastname"  => "granger",
        "age"       => "20",
        "job"       => "magicienne"
    ]      
];

echo $users["user2"]["firstname"];
