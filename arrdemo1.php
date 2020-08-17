<?php
$myar=[100,200,300, 6=>400, 500];
var_dump($myar);

foreach($myar as $val)
	echo "<p>".$val."</p>";
	
echo '<p>0 '.$myar[0].'</p>';
echo '<p>1 '.$myar[1].'</p>';
echo '<p>2 '.$myar[2].'</p>';
echo '<p>3 '.$myar[3].'</p>';
echo '<p>4 '.$myar[4].'</p>';
echo '<p>5 '.$myar[5].'</p>';
echo '<p>6 '.$myar[6].'</p>';
echo '<p>7 '.$myar[7].'</p>';

echo count($myar);

for($i=0;$i<count($myar);$i++)
	echo "<p>".$myar[$i]."</p>";