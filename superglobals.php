<?php
$test="test string";

function func()
{
	$x = 10;
	$GLOBALS['x']=$x; 
	echo $GLOBALS['x'];
}
//var_dump($GLOBALS);

echo $GLOBALS['test'];

//Note: for referring to global variables we need not to used $ symbol

