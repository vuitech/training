<?php
	$a=10;
	$ref = &$a;
	
	print $ref.'<br/>';
	
	$ref = 20;
	
	print $a.$ref;
	
	var_dump($a);
	var_dump($ref);
	echo $a.$ref;
	
	$b = $a.$ref;
	var_dump($b);
	
	$out = print($a.$b);
	print($out);
	
	$out = print('');
	echo $out;