<?php

fruits = array(‘apple’,’banana’,’mango’);

var_dump($fruit);
$i=0;
foreach($fruit as $value)
{
	echo "<br/>fruit[{$i}]={$value}";
	$i++;
}
foreach($fruit as $key=>$value)
	echo '<br/>fruit['.$key.'] = '.$value.'';
	
$state=['ap','tn','ts','ka'];

foreach($state as $value)
	echo "<br/>$value";