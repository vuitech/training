<?php

$x =10;
$y = 20;

function func()
{
	$GLOBALS['z']=$GLOBALS['x']+$GLOBALS['y'];
	echo 'ouput',$GLOBALS['x']+$GLOBALS['y'],"<br/>";
}
func();
echo 'another ouput',$GLOBALS['z'];

