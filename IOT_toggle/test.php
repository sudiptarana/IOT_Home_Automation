<?php
$a=$_GET["state"];
$myfile = fopen("file", "w");
fwrite($myfile, $a);
fclose($myfile);

header('Location: indx.php?Status='.$a);
?>