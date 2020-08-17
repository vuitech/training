<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace myns;

echo "Testing";

function myfunction($msg){
    echo "<h3>$msg</h3>";
}

class MyClass{
    public function showBanner($msg){
        echo "<h1>$msg</h1>";
    }
}