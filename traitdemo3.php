<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

trait MyTrait1{
    public  $data;
    public function __construct($data){
        echo "I'm in MyTrait1::constructor<br/>";
        $this->data = $data;
    }
}
trait MyTrait2{
    public  $data2;
    /*public function __construct($data){
        echo "I'm in MyTrait2::constructor<br/>";
        $this->data2 = $data;
    }*/
}
class MyClass3{
    use MyTrait1,MyTrait2;
    
}

$m = new MyClass3("testing");

echo $m->data,"<br/>";

$m2 = new MyClass3("Tested");
$m2->data2 = "Tested value";
echo $m2->data," ", $m2->data2,"<br/>";
echo $m->data,"<br/>";