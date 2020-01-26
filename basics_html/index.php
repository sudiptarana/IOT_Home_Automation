<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html>
	<head>
	  <title>IOT_controlar</title>

	  <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	  <link rel="stylesheet" type="text/css" href="styles.css" />

	</head>

<body background="img/2.jpg">
    <center>
        <h1 style="font-family: Helvetica;color:#ffffff;"><b>&nbsp;IOT DEVICES CONTROLLER</b></h1>
    </center>

	<div class="center" style="background-image:url(img/4.jpg);">
	   <div align="center">

	   	 <p style = 'line-height: 40px;font-family: Helvetica;color: #fff;font-size: 30px;'>
           <img src = 'img/blub_red.png' height="80px" width="120px" style='vertical-align: middle' />&nbsp;&nbsp;

           <a href="test.php?state_r=1&state_g=&state_y=" class="on <?php if ($_GET["Status_r"]==1){echo ('bor');} ?>">on</a>&nbsp;&nbsp;
           <a href="test.php?state_r=2&state_g=&state_y=" class="off <?php if ($_GET["Status_r"]==2){echo ('bor');}?> ">off</a>
       </p>

        <p style = 'line-height: 40px;font-family: Helvetica;color: #fff;font-size: 30px;'>
           <img src = 'img/blub_green.png' height="100px" width="120px" style='vertical-align: middle' />&nbsp;&nbsp;

           <a href="test.php?state_r=&state_g=1&state_y=" class="on <?php if ($_GET["Status_g"]==1){echo ('bor');} ?>">on</a>&nbsp;&nbsp;
           <a href="test.php?state_r=&state_g=2&state_y=" class="off <?php if ($_GET["Status_g"]==2){echo ('bor');}?> ">off</a>
       </p>

        <p style = 'line-height: 40px;font-family: Helvetica;color: #fff;font-size: 30px;'>
           <img src = 'img/blub.png' height="80px" width="120px" style='vertical-align: middle' />&nbsp;&nbsp;

           <a href="test.php?state_r=&state_g=&state_y=1" class="on <?php if ($_GET["Status_y"]==1){echo ('bor');} ?>">on</a>&nbsp;&nbsp;
           <a href="test.php?state_r=&state_g=&state_y=2" class="off <?php if ($_GET["Status_y"]==2){echo ('bor');}?> ">off</a>
       </p>

       <br><br>

        </div>
    </div>

  <footer>&copy; it's_<span class="r"><b>R</b></span>ana</footer>

    </body>
</html>