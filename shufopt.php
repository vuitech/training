<table>
<?php
$ques = [['This is question1?',['opt1','opt2','opt3','opt4']],
			['This is question2?',['opti1','opti2','opti3','opti4']],
			['This is question3?',['optio1','optio2','optio3','optio4']]];
$i=0;
foreach($ques as $val)
{
?>
<tr>
	<td> <?=$val[0]?></td>
</tr>
<?php
 shuffle($val[1]);
 foreach($val[1] as $opt)
	{
	?>
	<tr>
		<td><input type="radio" name="ques<?=$i?>"><?=$opt?></input></td>
	</tr>
<?php
	}
	$i++;
}
?>