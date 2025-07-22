<?php

$user = array("name" => "mazen", "id" => 5, "email" => "mazenkhtab11@gmail.com");
$user["phone"] = "01023839637";


$keys = array_keys($user);

foreach($keys as $key) {
    echo "{$key}: <br>";
}


echo "<br>";


$values = array_values($user); 

foreach($user as $value) { // if i write only one variable after "as" then it will be the value 
echo "{$value} <br>";
}




foreach($user as $key => $value) {
    echo "{$key}: {$value} <br>";
}


echo "<br>";


$user = array_flip($user); // this is will file the array and change the key to be values and the values to be keys

foreach($user as $key => $value) {
    echo "{$key}: {$value} . <br>";
}