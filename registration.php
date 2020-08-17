
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
				<?php
					if($_SERVER['REQUEST_METHOD']=="GET")
					{
					?>
					<form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
					<table width="100%" align="center">
						<tr>
							<td colspan="2">
								<h4>Registration</h4>
							</td>
						</tr>
						<tr>
							<td colspan="2" style="color:red">
								<?=$errmsg?>
							</td>
						</tr>
						<tr>
							<td><b>Name</b></td>
							<td><input type="text" name="nme"/></td>
						</tr>
						<tr>
							<td><b>Address</b></td>
							<td><textarea name="addr"></textarea></td>
						</tr>
						<tr>
							<td><b>Gender</b></td>
							<td>
								<input type="radio" name="sex" value="male">Male<br/>
								<input type="radio" name="sex" value="femal"/>Female
							</td>
						</tr>
						<tr>
							<td><b>Interests</b></td>
							<td>
								<input type="checkbox" name="int1" value="Watch">Watching TV<br/>
								<input type="checkbox" name="int2" value="Book"/>Reading books
							</td>
						</tr>
						<tr>
							<td><b>Hightest Qualification</b></td>
							<td>
								<select name="qual">
									<option value="0">Select the qualification</option>
									<option value="1">PhD.,</option>
									<option value="2">PG</option>
									<option value="3">UG</option>
								</select>
							</td>
						</tr>
						<tr>
							<td><b>Password</b></td>
							<td><input type="password" name="pwd"/></td>
						</tr>
						<tr>
							<td colspan="2" align="center">
								<input type="submit" value="Login"/>
							</td>
						</tr>
					</table>
					</form>
					<?php
					}
					else{
						
					?>
					<table width="100%" align="center">
						<tr>
							<td colspan="2">
								<h4>Registration</h4>
							</td>
						</tr>
						<tr>
							<td colspan="2" style="color:red">
							</td>
						</tr>
						<tr>
							<td><b>Name</b></td>
							<td><?=$_POST["nme"]?></td>
						</tr>
						<tr>
							<td><b>Address</b></td>
							<td><?=$_POST["addr"]?></td>
						</tr>
						<tr>
							<td><b>Gender</b></td>
							<td>
								<?=$_POST["sex"]?>
							</td>
						</tr>
						<tr>
							<td><b>Interests</b></td>
							<td>
								<?=$_POST["int1"]?>,<?=$_POST["int2"]?>
							</td>
						</tr>
						<tr>
							<td><b>Hightest Qualification</b></td>
							<td>
								<?=$_POST["qual"]?>
							</td>
						</tr>
						<tr>
							<td><b>Password</b></td>
							<td><?=$_POST["pwd"]?></td>
						</tr>
						<tr>
							<td colspan="2" align="center">
								<input type="submit" value="Login"/>
							</td>
						</tr>
					</table>
					<?php
					}
					?>
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