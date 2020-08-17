<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

abstract class AbsParent{
    abstract public function display();
    abstract public function get() : string;
}

class Child1 extends AbsParent{
    public function display(){
        echo 'Raghava';
    }
    public function get():string{
        return "Raghava";
    }
}
class Child2 extends AbsParent{
    public function display(){
        echo 'VuiTech';
    }
    public function get():string{
        return "Vuitech";
    }
}


function show($obj){
    $obj->display();
    echo "<br>",$obj->get(),"<br/>";
}


$c1 = new Child1();
$c2 = new Child2();

show($c1);
show($c2);