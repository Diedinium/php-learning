<?php

$names = array("Jake", "Tobi", "Isaac");

// Unset allows specific item to be removed from array. Index does not change.
unset($names[1], $names[2]);

print_r($names);