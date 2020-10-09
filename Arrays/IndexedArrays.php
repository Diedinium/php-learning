<?php

// All arrays in PHP are key value pairs, in this case the "keys" are the usual zero based index.

// Two basic ways to declare an indexed array
$names = array("Jake", "Tobi", "Isaac");
$secondNames = ["Hall", "Biddle"];
// Arrays here are not like in C#, can just check any value in there...
$multiType = ["Jake", 21, true, 52525.24];

print_r($names);
print_r($secondNames);
print_r($multiType);