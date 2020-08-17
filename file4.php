<?php
$fname="test.txt";
$fle=fopen($fname,"r") or die("File does not exists");
$fs = filesize($fname);
echo "Size of the file is $fs <br/>";
$content = fread($fle,$fs);
echo $content."<br/>";

var_dump(file($fname));
echo "<br/>";
fseek($fle,0,SEEK_SET);
echo fgets($fle);
