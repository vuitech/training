<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Product3{
    private $pid;
    private $pname;
    private $pPrice;
    
    public function __construct($pid=0,$pname="NONE",$pPrice=NULL){
        $this->pid=$pid;
        $this->pname=$pname;
        $this->pPrice = $pPrice;
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
    public function getPPrice(){
        return $this->pPrice;
    }
}