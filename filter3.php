<?php
$age = $_POST['age'];

$option = array(
			'options'=> array(
				'min_range'=>10,
				'max_range'=>60
			));
			
if(filter_var($age,FILTER_VALIDATE_INT,$option)!=FALSE)
{
	echo $age." is a valid age";
}
else{
	echo $age." is invalid age";
?>
<html>
<body>
<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
Age : <input type="text" name="age"/>
<input type="submit"/>
</form>
</body>
</html>
<?php }?>