<?php

$names = ["Jake", "Tobi", "Isaac"];

if ($names[0] === "Tobi") {
    echo "Is Tobi\n";
}
elseif (in_array("Tobi", $names, true)) {
    echo "Tobi is in the array\n";
}
else {
    echo "Tobi is not in the array\n";
}

if (count($names) <= 0) {
    echo "There are no elements in the array.\n";
}
elseif (count($names) == 1) {
    echo "There is one element in the array\n";
}
elseif (count($names) > 1) {
    echo "There are many elements in the array\n";
}