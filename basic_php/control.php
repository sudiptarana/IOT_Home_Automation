<!DOCTYPE html>
<html>
<head>
	<title>Control Panel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <style type="text/css">
    	.b{
    		padding: 20px;
    	}
    	.btn {
       cursor: pointer;
       }

    </style>
</head>
<body>
	<div class="b">
	 <button type="button" class="btn btn-danger" onclick="window.location.href = 'test.php?state=on';"> ON </button>
	  <button type="button" class="btn btn-warning" onclick="window.location.href = 'test.php?state=off';">OFF</button>
	</div>
</body>
</html>