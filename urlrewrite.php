<html>
	<body>
		<table width="100%">
			<tr>
				<td>
					<table>
						<?php
							$str=["First","Second","Third","Fourth"];
							for($i=0;$i<4;$i++)
							{
						?>
						<tr>
							<td>
								<a href="urlrewrite.php?id=<?=$i+1?>"><?=$str[$i]?></a>
							</td>
						</tr>
							<?php } ?>
					</table>
				</td>
				<td style="height:600px">
					<?php
						$id = $_REQUEST['id'];
						if(!isset($id))
							$id=1;
					?>
					<img src="img/<?=$id?>.jpg"/>
				</td>
			</tr>
		</table>
	</body>
</html>