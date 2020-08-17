<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once 'Product.php';

$p = new Product();

echo $p->get(),"<br/>";
$p->setPid(1);
$p->setPname("Samsung Galexy S7");

echo $p->get();