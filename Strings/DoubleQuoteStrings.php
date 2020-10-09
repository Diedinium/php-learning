<?php
// Double quote strings are evaluated.
$dollar = "dollar";

$sampleString = "Boss makes a $dollar, I make a dime; that's why I shit on company time\n";

echo $sampleString;

$var = 2;

// Use curly brackets for specifying variales
echo "{$var}nd place\n";

// Concatenation
echo $var."nd place\n";
// Apostrophes are ok in double quote strings. Double quotes need to be escaped by \
echo "\"St Patrick's day\"";