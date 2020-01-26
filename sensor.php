<?php
error_reporting(0);
$myfile = fopen("file2", "a")or die("Unable to open file!");
fwrite($myfile, $_GET["data"].',');
fclose($myfile);
echo "success";

if(!empty($_GET)){
	if (!empty($_GET["data"])) {
		if(is_numeric($_GET["data"])){
			echo"success";
		}else{
			echo "Numbers only";
		}

	} else{
		echo "Incorrect input";
	}

}

else{
		echo "wrong API";
	}
?>