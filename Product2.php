<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Product2{
    private $pid;
    private $pname;
    
    public function __construct($pid=0,$pname="NONE"){
        $this->pid=$pid;
        $this->pname=$pname;
    }
    public function __destruct() {
        echo "Destroying object with $this->pid and $this->name";
    }
    public function setPid($pid){
        $this->pid = $pid;
    }
    public function getPid(){
        return $this->pid;
    }
    public function setPname($pname){
        $this->pname = $pname;
    }
    public function getPname(){
        return $this->pname;
    }
    public function get(){
        return $this->pid." ".$this->pname;
    }
}