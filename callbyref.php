<?php
function swap(&$a,&$b)
{
	$t = $a;
	$a = $b;
	$b = $t;
}

$x=10;
$y=20;

swap($x,$y);

echo $x,' ',$y;