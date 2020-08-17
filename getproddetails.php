<?php
$host="localhost";
$uname="root";
$pwd = "password";
$dbname="php_training";

$conn = new mysqli($host,$uname,$pwd,$dbname);

if($conn->connect_errno){
	echo "error";
}

$sql = "Select * from product where pname like '%".$_REQUEST['pname']."%'";
//echo $sql,"<br/>";
$result = $conn->query($sql);
//var_dump($result);
echo $result->num_rows;