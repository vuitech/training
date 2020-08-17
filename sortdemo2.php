<?php
$states=['ap'=>'Andhra Pradesh','kr'=>'Karnataka','kl'=>'Kerala','ts'=>'Telangana','tn'=>'Tamilnadu'];
ksort($states);
?>
<form action="sortdemo1.php">
<select name="state">
	<option value="">Select the state </option>
	<?php 
		foreach($states as $key => $val)
		{
	?>
		<option value="<?=$key?>"><?=$val?> </option>
	<?php
		}
	?>
</select>
<input type="submit" value="submit"/>
</form>