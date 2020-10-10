<?php

$names = ["Jake", "Tobi", "Isaac"];
//$count = count($names);

// Null coalascence sets value of outcome to count if it has value, or to the string if not, can be chained.
$outcome = $count ?? "Nothing in array";
echo $outcome;
