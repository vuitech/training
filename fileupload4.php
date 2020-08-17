<!-- Not to allow Duplicates -->
<?php
if ( $_SERVER['REQUEST_METHOD']=='POST' )
{
	$target_dir="uploads/";
	$target_file=$target_dir.$_FILES['testfile']['name'];
	$uploadable = true;
	if(file_exists($target_file))
	{
		echo "File already exists....<br/>";
		$uploadable=false;
	}
	if($uploadable){
		move_uploaded_file($_FILES['testfile']['tmp_name'],$target_file);
		echo "<a href='$target_file' download>Download {$_FILES['testfile']['name']}</a>";
	}
}
?>
<html>
	<body>
		<form action="<?=$_SERVER['PHP_SELF']?>" method="POST" enctype="multipart/form-data">
			Upload your file here: <input type="file" name="testfile"/> <input type="submit" value="submit"/>
		</form>
	</body>
</html>