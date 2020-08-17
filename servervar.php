<?php
//var_dump($_SERVER);

echo $_SERVER['PHP_SELF'],"<BR/>";
echo $_SERVER['SERVER_ADDR'],"<BR/>";
echo $_SERVER['SERVER_NAME'],"<BR/>";
echo $_SERVER['REQUEST_METHOD'],"<BR/>";
echo $_SERVER['REMOTE_ADDR'],"<BR/>";
echo $_SERVER['REMOTE_HOST'],"<BR/>";
?>

<form method="post">
	<input type="submit"/>
</form>