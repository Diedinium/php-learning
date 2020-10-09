<?php

$quote = "Some more quotes, just addding some more stuff here to make it clearer";

// Postive starts from beginning.
echo substr($quote, 18)."\n";
// Negative starts from end
echo substr($quote, -10)."\n";
// Specify how many characters to take.
echo substr($quote, -10, 5)."\n";
// Negative end specifies to finish at num from start/end of string
echo substr($quote, -10, -2)."\n";