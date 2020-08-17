<?php
	setcookie("login","true",time()-(60));
	header("Location:login.php");