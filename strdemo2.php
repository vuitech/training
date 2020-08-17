<?php
$juice='apple';

$str1=<<<HTML
<input type="text" value="$juice"/>
HTML;

$str2="<input type='text' value='$juice'/>";

$str3 = '<input type="text" value="'.$juice.'"/>';

$str4=<<<'HTML'
<input type="text" value="
HTML;

$str4 .=$juice.'"/>';

echo $str1,"<br/>",$str2,"<br/>",$str3,"<br/>",$str4,"<br/>";
