<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$myar = Array(
    "Raja"=>32,
    "Ravi"=>26,
    "Kiran"=>29,
    "Madhu"=>22
);

var_dump($myar);

$json = json_encode($myar);

echo '<br/>',$json;

$str='{"slno":101, "name":"Raja", "age":23}';

echo '<br/>',$str;
echo '<br/>', json_encode($str);