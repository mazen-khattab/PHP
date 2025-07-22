<?php
 $array = ["apple", "orange"];

 array_push($array, "banana", "coconut", "mango", "Kiwi", "Blueberry"); // add an element at the end of the array
 array_pop($array); // remove last element of the array
 array_shift($array); // remove the first element of the array 
 $array = array_reverse($array); // reverse the array 
 $count = count($array); // get you current number of element of the array

foreach($array as $food) {
    echo $food . "<br>";
}

echo $count;