<?php
function coffee_maker($coffee=array("cappucciano"),$maker=NULL)
{
	$device = is_null($maker)?"hands":$maker;
	if(!is_array($coffee))
		echo "<br/>Invlid usage of the function";
	else
		echo "<br/>Making a cup of $coffee with $device";
}


coffee_maker();
coffee_maker("teapot");
coffee_maker(array("cappucciano","lavazza"),"teapot");