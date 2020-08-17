<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$host="localhost";
$uname="root";
$pwd = "password";
$dbname="php_training";

$conn = new mysqli($host,$uname,$pwd,$dbname);
        
if($conn->connect_errno)
    die("Connection Error ".$conn->connect_errno);

$sql = "SELECT * FROM `product_price` where pid={$_REQUEST['pid']} and edate is NULL";

$result = $conn->query($sql);

//var_dump($result);
if($result->num_rows>0){
    $row=$result->fetch_assoc();
    echo $row['price'];
}
else
    echo 'NULL';