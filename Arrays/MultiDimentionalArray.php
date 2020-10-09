<?php

$multiDimentionalArray = [
    "Jake" =>
    [
        "Values1" => ["Test1", "Test2", "Test3"],
        "Values2" => ["Test1", "Test2", "Test3"],
        "Values3" => ["Test1", "Test2", "Test3"]
    ],
    "Tobi" =>
    [
        "Values1" => ["Test1", "Test2", "Test3"],
        "Values2" => ["Test1", "Test2", "Test3"],
        "Values3" => ["Test1", "Test2", "Test3"]
    ]
];

// Multi dimentional array.
print_r($multiDimentionalArray);

// Select from within array
print($multiDimentionalArray["Jake"]["Values1"][0]);