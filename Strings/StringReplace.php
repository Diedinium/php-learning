<?php

$quote = "Running out of ideas for these strings now..";

// count is passed by reference
$quote = str_replace("out", "outa", $quote, $count);

echo $quote.$count;