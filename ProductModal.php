<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'MyModal.php';

class ProductModal extends MyModal{
    public function insertProduct($prod){
        $sql = "insert into product(pid,pname) values($prod->pid, $prod->pname)";
        $pid= $this->insert($sql);
        return $pid;
    }
    public function fetchProduct(){
        $prod = array();
        $result = $this->fetch("select * from product");
        $i=0;
        //var_dump($result);
        if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $p = new Product2($row['pid'],$row['pname']);
            $prod[$i++]=$p;
        }
        }
        return $prod;
    }
}