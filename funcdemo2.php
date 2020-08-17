<?php
$ar = [1,2,3,4,5];

function append(&$a,$val)
{
	$a[]=$val;
}

append($ar,10);

var_dump($ar);