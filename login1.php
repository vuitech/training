
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
					<form action="loginvalidate.php" method="post">
					<table width="40%" align="right">
						<tr>
							<td colspan="2">
								<h4>Login</h4>
							</td>
						</tr>
						<tr>
							<td colspan="2" style="color:red">
								<?=$errmsg?>
							</td>
						</tr>
						<tr>
							<td><b>Username</b></td>
							<td><input type="text" name="unm"/></td>
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