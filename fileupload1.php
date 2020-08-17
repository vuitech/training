<?php
if ( $_SERVER['REQUEST_METHOD']=='POST' )
	var_dump($_FILES);
?>
<html>
	<body>
		<form action="<?=$_SERVER['PHP_SELF']?>" method="POST" enctype="multipart/form-data">
			Upload your file here: <input type="file" name="testfile"/> <input type="submit" value="submit"/>
		</form>
	</body>
</html>