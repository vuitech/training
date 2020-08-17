<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'ProductModal.php';
include_once 'Product2.php';
include_once 'ProductPriceModal.php';
include_once 'ProdctPrice.php';

$host = "localhost";
$username = "root";
$password = "password";
$database = "php_training";

$conn=new mysqli($host,$username,$password,$database);
if($conn->connect_errno > 0){
    die("Unable to connect....");
}
$prodM = new ProductModal($conn);
$priceM = new ProductPriceModal($conn);
$prod = $prodM->fetchProduct();
?>

<html>
    <body>
        <table>
            <tr>
                <td>Slno</td>
                <td>Product Name</td>
                <td>Price</td>
            </tr>
            <?php
                $i=1;
                foreach($prod as $p){
            ?>
            <tr>
                <td><?=$i++?></td>
                <td><?=$p->getPname() ?></td>
                <td>
                    <?php
                    $price = $priceM->fetchPrice($p->getPid());
                    echo $price[0]->price;
                    ?>
                </td>
            </tr>
                <?php } ?>
        </table>
    </body>
</html>