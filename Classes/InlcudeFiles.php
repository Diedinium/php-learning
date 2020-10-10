<?php

// Include does not throw if file is not found.
include_once 'Person.php';
// Require throws if it failes to open the file.
require_once 'Author.php';

$myAuthor = Author::createAuthor("Mark", "Twain", 55, "Mark Twain");

print_r($myAuthor);

echo $myAuthor->returnCompleteName();