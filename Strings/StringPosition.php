<?php

$quote = "Here is my string, here is string again.";

$stringPosition = strpos($quote, "string", 12);

echo "String found at position: ".$stringPosition."\n";

// Is case senstive - doesn't print
echo strpos($quote, "S");