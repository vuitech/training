<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class MyModal{
    private $conn;
    
    public function __construct($conn){
        //echo "I'm in constructor....<br/>";
        $this->conn = $conn;
        
        //echo "Conection ",var_dump($conn),"<br/>";
    }
    public function insert($sql){
        //echo "Conection ",var_dump($this->conn),"<br/>";
        $this->conn->query($sql);
        return $this->conn->insert_id;
    }
    public function fetch($sql){
        //echo "I'm in MyModal and sql is $sql<br/>";
        $result=$this->conn->query($sql);
       // var_dump($result);
        return $result;
    }
    /*public function __destruct() {
        $this->conn->close();
    }*/
}