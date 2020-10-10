<?php

$increment = 5;

// Double plus to increment.
$increment++;

// Double minus to decrement.
$increment--;
// When on left, removes value before doing anything else with the variable.
$increment = --$increment + 5;

echo $increment.PHP_EOL;