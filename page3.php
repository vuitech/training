<html>
	<body>
		<form action="page4.php" method="GET">
			Email:<input type="text" name="email"/>
			<input type="hidden" name="nme" value="<?=$_REQUEST['nme']?>"/>
			<input type="hidden" name="fnme" value="<?=$_REQUEST['fnme']?>"/>
			<input type="submit" value="submit"/>
		</form>
	</body>
</html>