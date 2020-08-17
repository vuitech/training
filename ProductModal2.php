<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'MyModal.php';
include_once 'ProdctPrice.php';
include_once 'Product3.php';

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
            $presult = $this->fetch("select * from product_price where pid={$row['pid']} and edate is NULL");
            if($presult->num_rows>0){
                $prow = $result->fetch_assoc();
                $pPrice = new ProductPrice($row['prid'],$row['pid'],$row['price'],$row['sdate'],$row['edate']);
                $p = new Product3($row['pid'],$row['pname'],$pPrice);
            }
            else
                $p = new Product3($row['pid'],$row['pname']);
            
            $prod[$i++]=$p;
        }
        }
        return $prod;
    }
}