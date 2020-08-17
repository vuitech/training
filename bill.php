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

$sql = "SELECT * FROM product";

$result = $conn->query($sql);

//var_dump($result);
//$row=array();

?>


<html>
    <head>
        <script type="text/javascript">
            function selectpid(pid){
                //alert(pid);
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function(){
                    document.getElementById("price").value=this.responseText;
                };
                xmlhttp.open("GET","pricehistory.php?pid="+pid);
                xmlhttp.send();
            }
            function qtychanged(qty){
                //alert(qty);
                price = document.getElementById("price").value;
                document.getElementById("amount").value = qty*price;
            }
        </script>
    </head>
    <body>
        <table>
            <tr>
                <td>Product Name</td><td>Quantity</td><td>Price</td><td>Amount</td>
            </tr>
            <tr>
                <td>
                    <select name="pid" id="pid" onchange="selectpid(this.value)">
                        <option value="0">Select Product</option>
                        <?php
                            var_dump($result);
                            while($row=$result->fetch_assoc())
                            {
                                var_dump($row);
                                ?>
                        <option value="<?=$row['pid']?>"><?=$row['pname']?></option>   
                        <?php    }
                        ?>
                    </select>
                </td>
                <td>
                    <input type="text" name="qty" id="qty" onkeyup="qtychanged(this.value)"/>
                </td>
                <td>
                    <input type="text" name="price" id="price" readonly="readonly"/>
                </td>
                <td>
                    <input type="text" name="amount" id="amount" readonly="readonly"/>
                </td>
            </tr>
        </table>
    </body>
</html>