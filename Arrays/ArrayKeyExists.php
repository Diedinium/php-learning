<?php

$names = array("Jake", "Tobi", "Isaac");

$names1 = [
    "Oldest" => "Rachel",
    "Youngest" => "Isaac",
    "Test"
];

if (array_key_exists("Oldest", $names1)) {
    echo "Oldest key exists\n";
}

print_r($names[1]."\n");
print_r($names1["Youngest"]);