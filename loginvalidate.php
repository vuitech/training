<?php
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
		if($uname == "admin" && $pwd == "password"){
			$errmsg ="<span style='color:green'>Successfully Logged in</sapn>";
			header("Location:dashboard.php");
		}
		else
			$errmsg .="</li>Either user name or password is not correct</li>";
$errmsg .="</ul>";
}

echo $errmsg;
?>
<br/>
<a href="login.php">Please Re-Login</a>