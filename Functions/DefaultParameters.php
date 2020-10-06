<?php

$authorName = "Blah blah";

bookAuthorEcho("Chris Ryan", $authorName);
bookAuthorEcho("James Hamilton", $authorName);
bookAuthorEcho($authorName, $authorName);
bookAuthorEcho($authorName);

function bookAuthorEcho($authorName, $authorName2 = "Default Value") 
{
    echo $authorName . " " . $authorName2 . "\n";
}