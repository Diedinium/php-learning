<?php

$stringSplit = "Here is my string to split, with a comma";

// Splits into sections 8 long, apparenlty can't split by something useful though, like spaces or commas...
$varArray = str_split($stringSplit, 8);

print_r($varArray);