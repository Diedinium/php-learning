<?php

// How to set up an array that uses strings instead of a zero based index

$names = [
    "Oldest" => "Rachel",
    "Youngest" => "Isaac",
    "Test"
];

print_r($names);

print($names["Youngest"]);