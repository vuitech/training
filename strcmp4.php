<?php
$str1="Raja";
$str2="Ravi";
$str3 = "Raja";
echo '<br/>', $str1 == $str2;
echo '<br/>', $str1 == $str3;
echo '<br/>', $str1 === $str3;
echo '<br/>', $str1 === $str2;
echo '<br/>', strcmp($str1,$str2);
echo '<br/>', strcmp($str1,$str3);