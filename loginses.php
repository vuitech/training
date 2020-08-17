<?php
session_start();
if(isset($_SESSION['uname']))
	header("Location:dashboard.php");

if($_SERVER['REQUEST_METHOD']=="POST")
{
$uname = $_REQUEST['unm'];
$pwd = $_REQUEST['pwd'];
$errmsg="<ul>";
if(empty(trim($uname)))
	$errmsg .="<li>Username must be entered</li>";
else
	if(empty(trim($pwd)))
		$errmsg .="<li>Password must be entered</li>";
	else
		if(($uname == "raja" || $uname=='ravi' || $uname == 'kiran') && $pwd == "password"){
			$errmsg ="<span style='color:green'>Successfully Logged in</sapn>";
			$_SESSION['uname']=$uname;
			switch($uname)
			{
				case 'raja':
					$_SESSION['utype']='superadmin';
					break;
				case 'ravi':
					$_SESSION['utype']='admin';
					break;
				case 'kiran':
					$_SESSION['utype']='user';
					break;
			}
			header("Location:dashboard.php");
		}
		else
			$errmsg .="</li>Either user name or password is not correct</li>";
$errmsg .="</ul>";
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
					<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
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