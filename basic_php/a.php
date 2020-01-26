
<?php
/* 
$a=34;
$b=" happy";
echo $a.$b;
echo $_GET["data"];

//----system var multiply----//
$var1= $_GET["a"];
$var2= $_GET["b"];
echo "<h1>".($var1*$var2)."</h1>";

//----True-False----//
$var1= $_GET["a"];
$var2= $_GET["b"];

if($var1>$var2)
	echo "<h1>True".$var1."</h1>";
else
	echo "<h1>False</h1>";
*/

//--- for loop to multiple any no--//
$a=$_GET["num"];
?>

<style type="text/css">
	.g{
		color: green;
	}
	.r{
		color: red;
	}
	.y{
		color: yellow;
	}
	.b{
		color: blue;
	}
	.o{
		color: orange;
	}
</style>

<?php
for ($i=1; $i <11; $i++) { 
	echo  '<span class="g">'.$a.'</span>
		   <span class="r">X</span>
		   <span class="y">'.$i.'</span>
		   <span class="b">=</span>
		   <span class="o">'.$a*$i.'<br></span>';

}


?>



