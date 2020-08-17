<?php
$uname = $_REQUEST["uname"];
$pwd = $_REQUEST["pwd"]
?>
<html>
<body>
	<table width="100%" border="0">
		<tr>
			<td width="70%">
				&nbsp;
			</td>
			<td bgcolor="lightgray">
				<form>
					<table width="100%" border='0' cellspacing="5" cellpadding="5">
						<tr>
							<td>
								User name
							</td>
							<td>
								<input type="text" name="uname"/>
							</td>
						</tr>
						<tr>
							<td>
								password
							</td>
							<td>
								<input type="password" name="pwd"/>
							</td>
						</tr>
						<tr>
							<td colspan="2" align="center">
								<input type="submit" value="submit"/>
							</td>
						</tr>
					</table>
				</form>
			</td>
		</tr>
	</table>
	<?php
		echo "Username : $uname and Password : $pwd<br/>";
		
		var_dump ($_REQUEST);
		echo '<br/>';
		var_dump($_POST);
	?>
</body>
</html>