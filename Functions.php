<?php

$array = array("mazen", "khattab");
$fullname = "mazen khattab";
$username = "mazen";
$email = "mazenkhtab123@gmail.com";

strtolower($username); // mazen
strtoupper($username); // MAZEN
trim($username); // remove the spaces from the begain and the end of the string
str_pad($username, 10, "-"); // mazen-----
str_replace("@", "@@", $email); // mazenkhtab123@@gmail.com 
strrev($username); // nezam
str_shuffle($fullname); // nezam battahk
strlen($username); // the number of letters of mazen = 5
strpos($fullname, "k"); // get the index of k in "mazen khattab" which is the index number: 6
substr($fullname, 0, 5); // first argument: the string you want to cut, second and third: begian and end of cutting
explode(" ", $fullname); // separate the string from " " and put them in array => ["mazen", "khattab"]
implode(" ", $array); // join the array in one string => "mazen khattab" 
