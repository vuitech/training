<?php
if ( $_SERVER['REQUEST_METHOD']=='POST' )
{
	echo "Name : ", $_FILES['testfile']['name'],"<br/>";
	echo "Type : ", $_FILES['testfile']['type'],"<br/>";
	echo "Error: ", $_FILES['testfile']['error'],"<br/>";
	echo "Temp : ", $_FILES['testfile']['tmp_name'],"<br/>";
	echo "Size : ", $_FILES['testfile']['size'],"<br/>";
}
?>
<html>
	<body>
		<form action="<?=$_SERVER['PHP_SELF']?>" method="POST" enctype="multipart/form-data">
			Upload your file here: <input type="file" name="testfile"/> <input type="submit" value="submit"/>
		</form>
	</body>
</html>