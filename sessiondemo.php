<?php
session_start();
var_dump($_SESSION);
$_SESSION['uname']="raghava";
$_SESSION['utype']="admin";
$_SESSION['somethin']='nothing';
