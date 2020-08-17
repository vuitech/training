<?php

function func()
{
	$foo="xyz";
	echo $foo,'<br/>';
	echo $GLOBALS['foo'];
	$GLOBALS['abc']='raghava';
}
$foo="abc";
func();


echo '<br/>output ',$abc;

/*
1. ambiguity in between local and global variables
2. to share a value in a function to other functions in the program.
*/
?>
<a href="globals-3.php">Next</a>
<form action="globals-3.php">
<input type="submit"/>
</form>

