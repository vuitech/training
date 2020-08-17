<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Product{
    private $pid;
    private $pname;
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