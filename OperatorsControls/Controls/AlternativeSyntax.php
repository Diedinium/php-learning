<?php
$count = 5;

// Can use : and end[x] best for use within HTML as it's much easier to visually understand than curly brackets.
for ($i=0; $i < $count; $i++) : 
    echo "Looped\n"; 
endfor;