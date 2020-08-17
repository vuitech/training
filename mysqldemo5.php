<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

echo "Oupput from mysqldemo5.php";
$host="localhost";
$uname="root";
$pwd = "password";
$dbname="php_training";

//$conn = new mysqli($host,$uname,$pwd,$dbname);
//$conn = mysqli_connect($host, $uname, $pwd, $dbname);      
try{
$conn = new PDO("mysql:host=$host;dbname=$dbname",$uname,$pwd);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//if($conn->connect_errno)
/*if(!$conn)
    die("Connection Error ". mysqli_connect_error());  //$conn->connect_errno
*/

$sql="INSERT INTO product(pid,pname) VALUES(NULL,'Sony')";
$conn->exec($sql);
$pid = $conn->lastInsertId();
echo 'Product data inserted successfully and the new pid is '.$pid;
$sql2="INSERT INTO product_price(prid,pid,price,sdate) VALUES(NULL,$pid,45000,'2020-07-21')";
$conn->exec($sql2);
echo 'Product price details inserted successfully';
//if($conn->query($sql) === TRUE)
/*if(mysqli_query($conn, $sql))
{
    //$pid=$conn->insert_id;
    $pid = mysqli_insert_id($conn);
    echo 'Product data inserted successfully and the new pid is '.$pid;
    $sql2="INSERT INTO product_price(prid,pid,price,sdate) VALUES(NULL,$pid,15000,'2020-07-21')";
    if(mysqli_query($conn, $sql2)){
        echo 'Product price details inserted successfully';
    }
}*/

}catch(PDOException $pe){
    echo "Exception ".$pe->getMessage();
}

