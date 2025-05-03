<?php

$name = "Kiran";
echo "My name is $name and the length of my name is " . strlen($name);
echo "</br>";
$sen = "This is Kiran";
echo "</br>";
echo "The length is " . strlen($sen);
echo "</br>";
echo "Now the length is " . str_word_count($sen);
echo "</br>";


echo strrev($sen);
?>