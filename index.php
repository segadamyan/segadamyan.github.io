<!DOCTYPE html>
<html>
<head>
	<title>Randomize AM</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
</head>
<body>
	<div class="main">
		<div class="header">
			<a href="https://segadamyan.github.io/index.html"><img src="images/logo.png" class="logo"></a>
			<div>
				<p class="text">Randomize AM</p>
				<p id="text">Ստացեք գաղտաբառ 2 վայրկյանում․</p>	
			</div>
		</div>
		<div class="content">
			<form action="https://segadamyan.github.io/randomize.php" metod="GET" class="ardyunq">
				<br>Երկարությունը:
				<select name="length">
				 	<option value="4">4</option>
				  	<option value="6">6</option>
				  	<option value="8">8</option>
				  	<option value="10">10</option>
				</select> <br><br>
				<input type="radio" name="password" value="password" checked>Գաղտնաբառ
				<input type="radio" name="password" value="pin">Պին կոդ
				<input type="radio" name="password" value="other">Խառը <br><br>
				<input type="checkbox" name="Bword">Օգտագործել մեծատառեր<br>(* չի աշխատում պինի հետ)

				<input type="submit" value="Ստանալ" class="button">
			</form>
		</div>
		<div class="footer">
			<div class="info">06.2017</div>
			<div class="info" id="name">Կայքը՝ Սերգեյ Ադամյանի</div>
		</div>
	</div>	
</body>
</html>