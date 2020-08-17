<?php
$fname="test.txt";
echo $fname." is readable ".is_readable($fname)."<br/>";
echo $fname." is wriable ".is_writable($fname)."<br/>";
if(is_writable($fname))
	$file = fopen("test.txt","w");
	echo "Waiting to perform file operations";
else
	echo "Unable to create file please chech your permissions";
