<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once 'MyModal.php';
include_once 'ProductModal2.php';
include_once 'ProductPriceModal.php';

$host = "localhost";
$username = "root";
$password = "password";
$database = "php_training";

$conn=new mysqli($host,$username,$password,$database);
if($conn->connect_errno > 0){
    die("Unable to connect....");
}
$p1 = new ProductModal($conn);
$pp1 = new ProductPriceModal($conn);

/*$result = $p1->fetch("Select * from product");
$res = $pp1->fetch("select * from product_price");
var_dump($result);
var_dump($res);*/
showTable($p1,"select product.pid,pname,price from product,product_price where product.pid = product_price.pid and product_price.edate is NULL");
showTable($pp1,"select * from product_price");
function showTable($modal,$sql){
    $result = $modal->fetch($sql);
    
    //var_dump($result);
    if($result->num_rows > 0){
        echo "<table><tr>";
        $row = $result->fetch_assoc();
        $cols = array_keys($row);
        for($i=0;$i< count($cols);$i++){
            echo "<th>$cols[$i]</th>";
        }
        echo "</tr>";
        do{
            $cols = array_keys($row);
            echo "<tr>";
            for($i=0;$i< count($cols); $i++){
                $cn = $cols[$i];
                echo "<td>",$row[$cn],"</td>";
            }
            echo "</tr>";
        }while($row = $result->fetch_assoc());
        echo '</table>';
            //var_dump($row);
            //echo '<br/>';
    }
    //
}