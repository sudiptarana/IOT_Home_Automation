<!DOCTYPE html>

 	<head>
	<title>Homework3</title>
    </head>

    <style type="text/css">
        header,footer{
            background-color: black;
            color: yellow;
            padding: 25px;
            text-align: center;
            font-size: 30px;
            margin-left:20px;
            margin-right: 20px;
        }
      
        .box{
            font-size: 20px;
            display: inline-block;
            width: 40%;
            text-align: left;
            padding-left: 50px;
            padding-top: 20px;
        }
          .item{
            font-size: 200%;
            display: inline-block;
            width: 50%;
        }
        .white{
            color: red;
        }
        .pull-left{
            float: left;
        }
        .clear{
            clear: both;
        }

        h3,p{
            display: inline-block;
        }
    </style>


    <body bgcolor="yellow">

        <header style="  margin-top:30px;">
            <span>
                <span class="white">M</span>y <span class="white">I</span>d <span class="white">C</span>ARD
            </span>
        </header>

        <div style="border: 10px solid black;margin-left:20px;margin-right: 20px;">
            <div class="box pull-left">
                <img src="img/admin-logo.png" width="60%" height="60%">
            </div>
            
            <?php
            $name= $_GET["name"];
            $stream= $_GET["stream"];
            $college= $_GET["college"];
            ?>
                <div class="item pull-left">
                <div ><h3><b>NAME : </b></h3>&nbsp&nbsp<p><?php echo $name; ?> </p></div>
                <div ><h3><b>STREAM : </b></h3>&nbsp&nbsp<p><?php echo $stream; ?></p></div>
                <div ><h3><b>COLLEGE : </b></h3>&nbsp&nbsp<p><?php echo $college; ?></p></div>
            </div>
            <div class="clear"></div>
        </div>
        <footer>&copy; it's_<span class="white"><b>R</b></span>ana</footer>
 	</body>
</html>		