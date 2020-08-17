<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        $host="localhost";
        $uname="root";
        $pwd = "password";
        $dbname="php_training";
        /*
        //MySQLi OOP
        $conn = new mysqli($host,$uname,$pwd,$dbname);
        
        if($conn->connect_errno)
            die("Connection Error ".$conn->connect_errno);
        //MySQLi Procedural approach
        
        $conn = mysqli_connect($host,$uname,$pwd,$dbname);
        
        if(!$conn)
            die("Connection Error ".mysqli_connect_error());*/
        //PDO
        //dbstring="<dbserver>:host=<hostname>;dbname=<dbname>"
        try{
            $conn = new PDO("mysql:host=$host;dbname=$dbname",$uname,$pwd);
            
            //setting the pdo error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            echo "Successfully connected using mysqli Object";
        }catch(PDOException $pex){
            die("Connection Error ".$pex->getMessage());
        }
        ?>
    </body>
</html>
