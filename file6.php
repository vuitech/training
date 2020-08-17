<?php
$f1="test.txt";
$f2="new.txt";

$fh1 = fopen($f1,"r") or die("Unable to open file");
$fh2 = fopen($f2,"w") or die("Unable to create file");

while(!feof($fh1))
{
	$str = fgets($fh1);
	fputs($fh2,$str);
}

fclose($fh1);
fclose($fh2);