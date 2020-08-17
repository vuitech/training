<?php

var_dump($_COOKIE);
echo $_COOKIE;
if(!isset($_COOKIE['mycookie']))
	setcookie("mycookie","test",time()+(30*86400));
else
	//setcookie("mycookie","testing",time()+(30*86400));
	setcookie("mycookie","",time()-3600);