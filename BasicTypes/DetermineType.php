<?php

// These types of checks are useful in if statements
define('NEW_CONSTANT', "Hello world!");

$bool = true;
$string = "I'm a string";
$float = 1.234;
$regInt = 1234;

echo is_int($regInt);
echo is_string($string);
echo is_float($float);
echo is_bool($bool);

echo defined('NEW_CONSTANT');
