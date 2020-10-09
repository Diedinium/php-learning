<?php

$multiDimentionalArray = [
    "Jake" =>
    [
        ["Test1", "Test2", "Test3"],
        ["Test1", "Test2", "Test3"],
        ["Test1", "Test2", "Test3"]
    ],
    "Tobi" =>
    [
        ["Test1", "Test2", "Test3"],
        ["Test1", "Test2", "Test3"],
        ["Test1", "Test2", "Test3"]
    ]
];

$names = [
    "Oldest" => "Rachel",
    "Youngest" => "Isaac",
    "Random" => "Test"
];

foreach ($multiDimentionalArray as $val) 
{
    foreach ($val as $array) {
        print_r($array);
        print_r("\n");
    }
}

// Foreach for associative arrays.
foreach ($names as $key => $value) {
    echo "{$key}:{$value}\n";
}