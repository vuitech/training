<?php
$fname="test.txt";
echo $fname." is readable ".is_readable($fname)."<br/>";
echo $fname." is wriable ".is_writable($fname)."<br/>";
$file = fopen("test.txt","w") or die("Unable to create file please check your permissions");
echo "Waiting to perform file operations<br/>";
echo "End of program";
