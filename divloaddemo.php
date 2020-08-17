<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div id="div1" style="width: 100%;background: orange;color:white;border:1px solid navy"></div>
        <div id="div2" style="width: 100%;background: white;color:navy;border:1px solid navy"></div>
        <div id="div3" style="width: 100%;background: green;color:white;border:1px solid navy"></div>
        <input type="button" id="btn1" value="Load div1">
        <input type="button" id="btn2" value="Load div2">
        <input type="button" id="btn3" value="Load div3">
    </body>
</html>
<script type="text/javascript">
    $('#div1').load('mysqldemo3.php');
    $('#div2').load('mysqldemo4.php');
    $('#div3').load('mysqldemo5.php');
    $("#btn1").click(function(){
        $('#div1').load('mysqldemo3.php');
    });
    $("#btn2").click(function(){
        $('#div2').load('mysqldemo4.php');
    });
    $("#btn3").click(function(){
        $('#div3').load('mysqldemo5.php');
    });
</script>