<?php
$r=2;
$g=2;
$y=2;
$r=$_GET["state_r"];
$g=$_GET["state_g"];
$y=$_GET["state_y"];

if ($r==1) {}
else{
	$r=2;
}

if ($g==1) {}
else{
	$g=2;
}

if ($y==1) {}
else{
	$y=2;
}

$myfile = fopen("file", "w");
fwrite($myfile, $r.$g.$y);
fclose($myfile);

header('Location: index.php?Status_r='.$r.'&Status_g='.$g.'&Status_y='.$y);
?>