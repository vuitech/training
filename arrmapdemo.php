<?php

function length($str)
{
	return strlen($str);
}

function display($str)
{
	echo "<b>$str</b><br/>";
}

$strings=['One',"str2","string3","mystring4"];

$length = array_map("length",$strings);

var_dump($length);

array_map("display",$strings);