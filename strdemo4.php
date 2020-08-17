<?php
$str1="Raja";
$str2="Ravi";
$str3 = "Raja";
echo '<br/>', "$str1 == $str2", $str1 == $str2;
echo '<br/>', "$str1 == $str3", $str1 == $str3;

echo '<br/>',"strcmp($str1,$str2)", strcmp($str1,$str2);
echo '<br/>',"strcmp($str1,$str3)", strcmp($str1,$str3);
echo '<br/>',"strcmp($str2,$str1)", strcmp($str2,$str1);

echo '<br/>',"strtoupper($str1)", strtoupper($str1);
echo '<br/>',$str1;

$str1 = strtoupper($str1);
echo '<br/>',$str1;
$str1 = strtolower($str1);
echo '<br/>',$str1;
$str1 = ucfirst($str1);
echo '<br/>',$str1;

$str="this is a string";
echo '<br/>',ucwords($str);
echo '<br/>',strrev($str1);
echo '<br/>',str_repeat($str1,10);

$str4=str_replace('a',$str,'i');
echo '<br/>',$str;
