<?php

$str="This is my string";
echo $str[0];
echo $str[-1];
$str[10] ='Y' ;
echo $str;

$str2='another string';

$str3 = $str.'. '.$str2.'.';

echo '<br/>',$str3;

echo '<br/>', substr($str3, 9);
echo '<br/>', substr($str3, 11,6);
echo '<br/>', strpos($str3,'Y');
echo '<br/>', stripos($str3,'Y');

$str3[strpos($str3,'Y')]=' ';
echo '<br/>',$str3;

