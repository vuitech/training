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
try{
    //$conn = new mysqli($host,$uname,$pwd,$dbname);
    //$conn = mysqli_connect($host, $uname, $pwd, $dbname);       
    $conn = new PDO("mysql:host=$host;dbname=$dbname",$uname,$pwd);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    /*if($conn->connect_errno)
        die("Connection Error ".$conn->connect_errno);
    */
   /* if(!$conn){
        die("Connection Error ". mysqli_connect_errno());
    }*/

    $sql = "SELECT * FROM `product`, `product_price` where product.pid = product_price.pid and edate is NULL";
    //$result = mysqli_query($conn,$sql);
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetchAll();
    
    //var_dump($result);
    $json="[";
    foreach($result as $row){
        $json.= "{pname:'".$row['pname']."',price:'".$row['price']."'},";
    }
    $json.="]";
    /*if(mysqli_num_rows($result)>0){
        echo "<table>";
        while($row=mysqli_fetch_assoc($result)){
            //var_dump($row);
            echo "<tr><td>".$row['pname']."</td><td>".$row['price']."</td></tr>";
        }
        echo "</table";
    }*/

?>

<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript">
            var p=<?=($json)?>;
            document.write(p);
        </script>
    </head>
    <body>
        <div id="content">
            <table>
                <thead>
                <tr>
                    <th>Slno</th>
                    <th>Product Name</th>
                    <th>Price</th>
                </tr>
                </thead>
                <tbody>
                    
                <script type="text/javascript">
                    /*i=1;
                    for(prod in p){
                        document.write("<tr><td>"+(i)+prod+"</td>");
                        document.write("<td>"+prod["pname"]+"</td>");
                        document.write("<td>"+prod.price+"</td></tr>");
                        i++; 
                    }*/
                    for(i=0;i<p.length;i++){
                        document.write("<tr><td>"+(i+1)+"</td>");
                        document.write("<td>"+p[i]["pname"]+"</td>");
                        document.write("<td>"+p[i].price+"</td></tr>");
                    }
                </script>
                    
                </tbody>
            </table>
            
        </div>
    </body>
</html>
<?php
}catch(PDOException $pex){
    echo "Error ".$pex->message();
}
?>