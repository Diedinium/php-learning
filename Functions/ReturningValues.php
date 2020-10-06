<?php

$authorName = "Blah blah";

bookAuthorEcho("Chris Ryan", $authorName);
bookAuthorEcho("James Hamilton", $authorName);
bookAuthorEcho($authorName, $authorName);
bookAuthorEcho($authorName);
echo getAuthor();

$author = getAuthor();

echo getAuthor();

function bookAuthorEcho($authorName, $authorName2 = "Default Value") 
{
    echo $authorName . " " . $authorName2 . "\n";
}

function getAuthor() 
{
    return "Charles Dickens\n";
}