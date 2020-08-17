<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once 'namespacedemo1.php';
include_once 'TraitDemo1.php';

use myns as ns1;

ns1\myfunction("hello");

$m = new ns1\MyClass();
$m1 = new Myclass();


$m->showBanner("VuiTech Solutions");
$m1->show();
