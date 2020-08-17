<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class ProdctPrice{
    public $prid;
    public $pid;
    public $price;
    public $sdate;
    public $edate;
    
    public function __construct($prid,$pid,$price,$sdate,$edate) {
        $this->prid=$prid;
        $this->pid = $pid;
        $this->price=$price;
        $this->sdate=$sdate;
        $this->edate=$edate;
    }
    public function setPrid($prid){
        $this->prid=prid;
    }
}