<?php
$juice='apple';

echo "$juice is the onlu juice available<br/>";

echo 'This
is 
my
string 
literal
one\n
He said, "This is Raju\'s Pen. He likes $juice"';

echo '<br/>';

echo "This 
is 
my
double quoted 
string\n
He said, \"This is Raju's Pen\. He likes $juice\"";
echo '<br/>';

echo <<<RAG
This is
my
heredoc
string\n
He said, "This is Raju's Pen. He likes $juice";
RAG;
echo '<br/>';
echo <<<'RAG'
This is
my
nowdoc
string\n
He said, "This is Raju's Pen. He likes $juice"';
RAG;
echo '
<input type="text" value="'.$juice.'"/>';
echo "<input type=\"text\" value=\"$juice\"/>";
echo <<<HTML
<input type="text" value="$juice"/>
HTML;
echo <<<'HTML'
<input type="text" value="
HTML;
echo $juice;
echo <<<'HTML'
"/>
HTML;
?>