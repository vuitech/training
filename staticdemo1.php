<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class StaticDemo{
    public static $name="VuiTech";
    
    public static function displayBanner($msg){
        echo "<h1>$msg</h1>";
    }
}

$s1 = new StaticDemo();
$s2 = new StaticDemo();

echo StaticDemo::$name,"<br/>";
//echo $s1->name,' and ', $s2->name,"</br>";

StaticDemo::displayBanner("Vuitech Solution");

$s1->displayBanner("Nellore");