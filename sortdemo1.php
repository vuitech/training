<?php
$ar=[2,9,78,4,56,78,74,92];
sort($ar);
print_r($ar);
rsort($ar);
print_r($ar);

$aar=["Raja"=>22,"Ravi"=>27,"Mohan"=>22,"Vijay"=>28,"Kishna"=>27, "Raja"=>28];

asort($aar);
echo '<br/><br/>';
print_r($aar);
arsort($aar);
echo '<br/><br/>';
print_r($aar);
ksort($aar);
echo '<br/><br/>';
print_r($aar);
krsort($aar);
echo '<br/><br/>';
print_r($aar);
