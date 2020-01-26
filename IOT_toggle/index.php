<!DOCTYPE html>
<html>
<head>
	<title>devicecontrolphp</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.switch {
  position: relative;
  display: inline-block;
  width: 90px;
  height: 34px;
}

.switch input {display:none;}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ca2222;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2ab934;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(55px);
  -ms-transform: translateX(55px);
  transform: translateX(55px);
}

/*------ ADDED CSS ---------*/
.on
{
  display: none;
}

.on, .off
{
  color: white;
  position: absolute;
  transform: translate(-50%,-50%);
  top: 50%;
  left: 50%;
  font-size: 10px;
  font-family: Verdana, sans-serif;
}

input:checked+ .slider .on
{display: block;}

input:checked + .slider .off
{display: none;}

/*--------- END --------*/

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;}
</style>
</head>

<body>
<a href="test.php?state=on" class="on <?php if ($_GET["Status"]=='on'){echo ('bor');} ?>">on</a>
<a href="test.php?state=off" class="off <?php if ($_GET["Status"]=='off'){echo ('bor');}?> ">off</a>

<label class="switch">
	<input type="checkbox" id="togBtn">
	<div class="slider round">
		<span class="on" onclick="window.location.href = 'test.php?state=on';>ON</span>
		<span class="off" onclick="window.location.href = 'test.php?state=off';>OFF</span>
	</div>
</label>

</body>
</html>