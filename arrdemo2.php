<?php
$ar=["Peter"=>35,"Sam"=>32,"Krist"=>37];

echo count($ar);

$ar=[[1,"Peter",22],[2,"Krist",23],[3,"Sam",27]];

$output = '<table border="1"><thead><tr><th>slno</th><th>Name</th><th>Age</th></tr></thead><tbody>';
foreach($ar as $val)
{
	$output .='<tr>';
	foreach($val as $v)
		$output .= '<td>'.$v.'</td>';
	$output .='</tr>';
}

echo $output;