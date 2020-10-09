<?php

$names = array("Jake", "Tobi", "Isaac");

array_push($names, "Names");

// Adds another value to the array. Square brackets are prefered, as creates array if it is not yet populated with any values.
$names["nice"] = "Rachel";

print_r($names);