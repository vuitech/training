<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

trait mytrait{
    public function show(){
        echo "I'm in mytrait::show()";
    }
    public abstract function message($msg);
}

class MyClass{
    use mytrait;
    public function message($msg){
        echo "I'm in MyClass::message and the message is $msg";
    }
}

$m = new MyClass();
$m->message("Test");
$m->show();