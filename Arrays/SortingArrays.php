<?php

$names = array("Jake", "Tobi", "Isaac");

$names1 = [
    "Oldest" => "Rachel",
    "Youngest" => "Isaac",
    "Random" => "Test"
];

$names2 = [
    "Oldest" => "Rachel",
    "Youngest" => "Isaac",
    "Random" => "Test"
];

// Sorts by alphabet by default.
sort($names);

// Use on associative arrays, doesn't change index numbers.
asort($names1);

// Sorts by key instead of value.
ksort($names2);

print_r($names);
print_r($names1);
print_r($names2);