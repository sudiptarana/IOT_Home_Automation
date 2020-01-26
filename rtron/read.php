<?php
$x = fopen("file", "r");
$a=fread($x, filesize("file"));
echo $a;
fclose($x);
?>