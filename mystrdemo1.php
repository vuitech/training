<?
$str = "This is my string";

echo $str[-1];
?>
<?php
$string = 'string';
echo "The character at index -2 is $string[-2].<br/>";
$string[-3] = 'o';
echo "Changing the character at index -3 to o gives $string.<br/>";
?>
<?php
$a = "Hello ";
$b = $a . "World!"; // now $b contains "Hello World!"

$a = "Hello ";
$a .= "World!";     // now $a contains "Hello World!"
?>