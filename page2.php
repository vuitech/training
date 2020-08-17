<html>
	<body>
		<form action="page3.php" method="GET">
			Father Name:<input type="text" name="fnme"/>
			<input type="hidden" name="nme" value="<?=$_REQUEST['nme']?>"/>
			<input type="submit" value="submit"/>
		</form>
	</body>
</html>