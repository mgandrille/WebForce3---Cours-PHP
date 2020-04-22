<?php

function randomPassword() {
    $chars = [0, 1, 2, 4, 6, 'a', 'b', 'c', 'q', 'z'];
    $password = '';
    
    for ($i=0; $i < 10; $i++) {
    
        $randomIndex = array_rand($chars);
        $char = $chars[$randomIndex];
    
        $password = $password . $char;
    }
    
    return $password;
}


echo randomPassword();

?>