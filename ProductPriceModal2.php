<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once 'MyModal.php';
include_once 'ProdctPrice.php';

class ProductPriceModal extends MyModal{
    public function insertProduct($prod){
        $sql = "insert into product_price(prid,pid,price,sdate,edate) values($prod->prid, $prod->pid,$prod->price,$prod->sdate,$prod->edate)";
        $pid= $this->insert($sql);
        return $pid;
    }
    public function fetchPrice($pid=0,$edate=NULL){
        $prod = array();
        $sql = "select * from product_price where 1";
        if($pid!=0)
            $sql .=" and pid=$pid";
        if($edate==NULL)
            $sql .=" and edate is NULL";
        else
            $sql .=" and edate = $edate";
        //echo $sql;
        $result = $this->fetch($sql);
        $i=0;
        //var_dump($result);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $p = new ProdctPrice($row['prid'],$row['pid'],$row['price'],$row['sdate'],$row['edate']);
                //echo $p->price;
                $prod[$i++]=$p;
            }
        }
        return $prod;
    }
}