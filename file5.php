<?php
$fname = "test.txt";

$fle = fopen($fname,"a") or die("Unable to open file");
fwrite($fle,"Sample content");
fclose($fle);