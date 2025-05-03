<?php
echo "PHP data types";

//String - Collection of characters
$name = "Kiran";
echo "$name"; 
echo "</br>";

//Integer - Non decimal numbers
$income = 2000;
echo "$income"; 
echo "</br>";


//Float - Decimal numbers
$salary = 5000.55;
echo "$salary"; 
echo "</br>";

//Boolean - Can be either true or false
$x = true;
$is_friend = false;
echo var_dump($x) ;
echo "</br>";
echo var_dump($is_friend) ;
echo "</br>";


//Array - Used to store multiple values in a single variables
$friend = array("Kiran", "Bikash", "Gaurab");
echo var_dump($friend) ;
echo "</br>";
echo "$friend[2]";

//NULL - special data type in php that returns NULL value
$name = NULL;
echo var_dump($name);
?>