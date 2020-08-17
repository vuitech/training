<?php
$email="(raghava@vui-tech.com)";
$email="<raghava@vui-tech.com>";
$email="raghava at vui-tech dot com";
$email="raghav@raj@vui-tech.com.in.au";
$semail = filter_var($email,FILTER_SANITIZE_EMAIL);

if(!filter_var($email,FILTER_VALIDATE_EMAIL))
{
	echo $email." is not a valid email";
}
else
	echo $email." is a valid email";
echo "<br/>";
if(!filter_var($semail,FILTER_VALIDATE_EMAIL))
{
	echo $semail." is not a valid email";
}
else
	echo $semail." is a valid email";

?>