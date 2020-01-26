<?php
error_reporting(0);
$myfile = fopen("file", "r")or die("Unable to open file!");
$data=fread($myfile, filesize("file"));
fclose($myfile);


if($_GET)
{
if (!empty($_GET["state_r"])) {
	if ($_GET["state_r"]=="1"){
		$data[0]='1';
	} else if($_GET["state_r"]=="2"){
		$data[0]='2';
	}
}


if (!empty($_GET["state_g"])) {
	if ($_GET["state_g"]=="1"){
		$data[1]='1';
	}else if($_GET["state_g"]=="2"){
		$data[1]='2';
	}
}


if (!empty($_GET["state_y"])) {
	if ($_GET["state_y"]=="1"){
		$data[2]='1';
	}else if($_GET["state_y"]=="2"){
		$data[2]='2';
	}
}

$myfile = fopen("file", "w")or die("Unable to open file!");
fwrite($myfile, $data);
fclose($myfile);

}
else{
	echo'wrong request';
}
header("Location:index.php");
?>