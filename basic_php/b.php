<!DOCTYPE html> -->
<html>
<head>
	<title></title>
</head>


<?php
//php control started
if($_GET["css"]=="1"){
?>

<style type="text/css">
	.ok{
		color: green;
	}
	.notok{
		color: red;
	}
</style>

<?php
}
//php control ended
?>


<body>
	<h1>
		hi my name is 
		<?php  echo '<span class="ok">Rana</span>';  ?>
	</h1>
	<h1 class="notok">
		hi my name is <?php echo "Rana"; ?>
	</h1>

</body>
</html>