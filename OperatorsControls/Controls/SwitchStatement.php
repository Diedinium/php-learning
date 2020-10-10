<?php

$names = ["Jake", "Tobi", "Isaac", "Rachel"];
$count = count($names);

switch ($count) {
    case 0:
        echo "There are no elements in the array\n";
        break;
    case 1:
        echo "There is one element in the array\n";
        break;
    case 3:
        echo "There are 3 elements in the array\n";
        break;
    default:
        echo "There are {$count} elemetns in the array\n";
        break;
}

switch (5 <=> 4) {
    case 1:
        echo "Greater than\n";
        break;
    case 0:
        echo "Equal\n";
        break;
    case -1:
        echo "Less than\n";
        break;
}
