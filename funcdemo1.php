<?php
function swap($a,$b)
{
	$t=$a;
	$a=$b;
	$b=$t;
}

function swapr(&$a,&$b)
{
	$t=$a;
	$a=$b;
	$b=$t;
}

$x=10;
$y=20;

swap($x,$y);
echo '<br/>',$x,' ',$y;
swapr($x,$y);
echo '<br/>',$x,' ',$y;