<?php
$ar = array(1,2,3,4,5);
print_r($ar);
var_dump($ar);
echo '<br/>';
unset($ar[0]);
print_r($ar);
echo '<br/>';
$ar[0]=7;
print_r($ar);
$ar[] = 8;
echo '<br/>';
print_r($ar);

$an = array("first"=>1,"second"=>2);
$an[]=3;
echo '<br/>';
print_r($an);
$an[69]=59;
$an[]=60;
echo '<br/>';
print_r($an);

foreach($ar as $k=>$v)
	unset($ar[$k]);
	
echo '<br/><br/>';
print_r($ar);

$ar[]=10;
echo '<br/>';
print_r($ar);

$ar = array_values($ar);
echo '<br/>';
print_r($ar);

$an = array_values($an);
echo '<br/>';
print_r($an);
