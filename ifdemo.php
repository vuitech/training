<html>
	<body>
		<h4>
			Hi Everyone! Have a 
			<?php
				$t=date("H");
				if($t>="4" && $t<"10")
					echo "good morning!";
				elseif($t>="10" && $t<"20")
					echo "nice day!";
				else
					echo "good night!";
			?>
		</h4>
	</body>
</html>