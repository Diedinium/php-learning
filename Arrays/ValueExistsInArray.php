<?php

$names = array("Jake", "Tobi", "Isaac");

if (in_array("Tobi", $names, true)) {
    echo "Value is in array";
}
else {
    echo "Value does not exist";
}