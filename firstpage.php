<?php
//include "heading.php";
//require "another.php";
include_once "heading.php";
?>

<div style="height:500px;background-color:orange;color:red">
This is my body content. <?php echo $db_name,$user_name, $password;?>
</div>

<?php
include "footer.php"?>