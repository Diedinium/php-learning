<?php

$names1 = [
    "Oldest" => "Rachel",
    "Youngest" => "Isaac",
    "Random" => "Test"
];

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

echo count($names1)."\n";

echo count($multiDimentionalArray, COUNT_RECURSIVE);
