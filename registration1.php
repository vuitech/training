<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script>
function validate()
{
	valid=true;
	var nme=$('#txtnme').val();
	var addr=$('#txtaddr').val();
	var pwd=$('#txtpwd').val();
	var qual=$('#selqual').val();
	//alert("name"+nme+" adddress"+addr+" password"+pwd);
	if(nme.trim().length==0)
	{
		valid=false;
		$('#errnme').show();
	}
	else
		$('#errnme').hide();
	return false;
}
</script>
<?php
	$success=false;
	$errmsg="<ul>";
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		$success=true;
		$nme=$_POST["nme"];
		$addr = $_POST["addr"];
		$sex = $_POST["sex"];
		$int1 = $_POST["int1"];
		$int2 = $_POST["int2"];
		$pwd = $_POST["pwd"];
		$qual = $_POST["qual"];
		if(empty(trim($nme))){
			$errmsg .="<li>Name is required</li>";
			$success=false;
		}
		if(empty(trim($addr))){
			$errmsg .="<li>Address is required</li>";
			$success=false;
		}
		if(empty(trim($sex))){
			$errmsg .="<li>Gender is required</li>";
			$success=false;
		}
		if(empty(trim($int1)) && empty(trim($int2))){
			$errmsg .="<li>Atleas one interest must be selected...</li>";
			$success=false;
		}
		if(empty(trim($pwd))){
			$errmsg .="<li>Password is required</li>";
			$success=false;
		}
		if($qual == '0'){
			$errmsg .="<li>Qualification is required</li>";
			$success=false;
		}
	}
?>
<html>
	<body>
		<table width="100%">
			<tr>
				<td colspan="2" style="height:100px; bgcolor:orange;color:navy;text-align:center">
					<h1>VuiTech Solutions Pvt Ltd.,</h1>
				</td>
			</tr>
			<tr>
				<td style="width:20%;height:400px;bgcolor:navy;color:navy">
				</td>
				<td align="right">
				
					<form action="<?=$_SERVER['PHP_SELF']?>" method="POST" id="frmreg" onsubmit="return validate()">
					<table width="100%" align="center">
						<tr>
							<td colspan="2">
								<h4>Registration</h4>
							</td>
						</tr>
						<tr>
							<td colspan="2" style="color:red">
								<?echo !$success?$errmsg:"" ?>
							</td>
						</tr>
						<tr>
							<td><b>Name</b></td>
							<td>
								<?php 
									if($success)
										echo $nme;
									else{
										?>
								<input type="text" name="nme" id="txtnme" value="<?=$nme?>"/>
									<?php } ?>
								<span id="errnme" style="color:red;display:none">Name is required</span>
							</td>
						</tr>
						<tr>
							<td><b>Address</b></td>
							<td>
								<?php 
									if($success)
										echo $addr;
									else{
										?>
								<textarea name="addr" id="txtaddr"></textarea>
									<?php } ?>
								<span id="erraddr" style="color:red;display:none">Address is required</span>
							</td>
						</tr>
						<tr>
							<td><b>Gender</b></td>
							<td>
								<?php 
									if($success)
										echo $sex;
									else{
										?>
								<input type="radio" name="sex" id="rdsex" value="male">Male<br/>
								<input type="radio" name="sex" id="rdsex" value="femal"/>Female
									<?php } ?>
								<span id="errgen" style="color:red;display:none">Gender is required</span>
							</td>
						</tr>
						<tr>
							<td><b>Interests</b></td>
							<td>
								<?php 
									if($success)
										echo $int1," " , $int2;
									else{
										?>
								<input type="checkbox" name="int1" id="chkint1" value="Watch">Watching TV<br/>
								<input type="checkbox" name="int2" id="chkint2" value="Book"/>Reading books
									<?php } ?>
								<span id="errint" style="color:red;display:none">Interests is required</span>
							</td>
						</tr>
						<tr>
							<td><b>Hightest Qualification</b></td>
							<td>
							<?php 
									if($success){
										switch($qual){
											case "1":
												echo "PhD.,";
												break;
											case "2":
												echo "PG";
												break;
											case "3":
												echo "UG";
												break;
										}
									}
									else{
										?>
								<select name="qual" id="selqual">
									<option value="0">Select the qualification</option>
									<option value="1">PhD.,</option>
									<option value="2">PG</option>
									<option value="3">UG</option>
								</select>
								<?php 
									} ?>
								<span id="errqual" style="color:red;display:none">Qualificaiton is required</span>
							</td>
						</tr>
						<tr>
							<td><b>Password</b></td>
							<td>
								<?php 
									if($success)
										echo $pwd;
									else{
										?>
								<input type="password" name="pwd" id="txtpwd"/>
									<?php } ?>
								<span id="errpwd" style="color:red;display:none">Password is required</span>
							</td>
						</tr>
						<tr>
							<td colspan="2" align="center">
								<?php 
									if(!$success){
										?>
								
								<input type="submit" value="Login" id="btnsubmit"/>
								<?php } ?>
									
							</td>
						</tr>
					</table>
					</form>
				</td>
			</tr>
			<tr>
				<td colspan="2" style="height:50px;bgcolor:green;color:navy;text-align:center">
					&copy;all rights reserved.
				</td>
			</tr>
		</table>
	</body>
</html>