<?php
function callme($par1=10,$par2="xyz")
{
	echo '<br/>',$par1,' ',$par2;
}

callme();
callme(20);
callme("abc");
callme(30,"mno");
callme("pqr",40);