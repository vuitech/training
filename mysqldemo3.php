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

//$conn = new mysqli($host,$uname,$pwd,$dbname);
$conn = mysqli_connect($host, $uname, $pwd, $dbname);       

/*if($conn->connect_errno)
    die("Connection Error ".$conn->connect_errno);
*/
if(!$conn){
    die("Connection Error ". mysqli_connect_errno());
}

$sql = "SELECT * FROM `product`, `product_price` where product.pid = product_price.pid and edate is NULL";
$result = mysqli_query($conn,$sql);

//var_dump($result);
if(mysqli_num_rows($result)>0){
    echo "<table>";
    echo "<tr><th>Product Name</th><th>Price</th></tr>";
    echo "<tbody>";
    while($row=mysqli_fetch_assoc($result)){
        //var_dump($row);
        echo "<tr><td>".$row['pname']."</td><td>".$row['price']."</td></tr>";
    }
    echo "</tbody></table>";
}
