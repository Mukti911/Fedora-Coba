<?php 
 ?>
<!DOCTYPE html>
<html>
<head>
 	<title>CookieSystem</title>
 	<style type="text/css">
 		body {
 			margin: 0px;
 			background-color: #fafafa;
 		}

 		.con {
 			width: 1000px;
 			margin: auto;
 			position: relative;
 			margin-top: 75px;
 			height: 500px;
 			border: 1px solid #0005;
 			border-radius: 10px;
 			background:#fff;
 		}
 	</style>
</head>
<body>
<div class="con">
	<div style="width: 500px; height: 500px; background-color: #999; background-image: url(img/bg/1.png);border-radius: 10px 0px 10px 10px; background-size: 1000px; background-repeat: no-repeat; background-position: right; float: left;">
		<div style="width: 500px; height: 500px; background-color: #0009; border-radius: 10px 0px 10px 10px; border-right: 1px solid #0007">
			<div style="width: 500px; height: 100px;">
				<img src="img/CS.png" style="width: 80px; padding: 10px; float: left;">
				<div style="float: left; width: 380px; padding: 10px; font-family: arial;">
					<h1 style="margin: 0px; color: #fff;">SMK Negeri 1 Kediri</h1>
					<h5 style="margin: 0px; color: #fff;">Jl. Veteran No.9, Mojoroto, Kota Kediri, Jawa Timur 64114</h5>
				</div>
				<div style="width: 500px; height: 50px; background-color: #f0f0f0aa; float: left; border-radius: 0px 0px 0px 10px; position: relative; top: 351px;  border-right: 1px solid #0007">
					<img src="img/CSLogo.png" style="width: 100px; padding: 10px; position: relative;">
				</div>
			</div>
		</div>
	</div>
	<div style="width: 400px; height: 400px; padding: 50px; border-radius: 0px 10px 10px 0px; background-color: #fff; float: left; font-family: arial;">
		<h1>Sign Up</h1>
		<div style="width: 400px; height: 320px;">
			<form action="proses.php" method="POST">
				<input type="text" name="Email" placeholder="Email....." style="width: 380px; margin: 10px 0px; padding: 10px; border:none;border-bottom: 1px solid #444;">
				<input type="text" name="Username" placeholder="Username....." style="width: 380px; margin: 10px 0px; padding: 10px; border:none;border-bottom: 1px solid #444;">
				<input type="text" name="Password" placeholder="Password....." style="width: 380px; margin: 10px 0px; padding: 10px; border:none;border-bottom: 1px solid #444;">
					<input type="submit" value="Daftar" name="" style="margin: 10px; background-color: #0000; border:1px solid #000; padding: 7.5px 20px; border-radius: 10px;">
				<br>
				<a href="index.php?url=login" style="float: right; top: 100px; font-size: 12px; position: relative; text-decoration: none;">Langsung Login ~></a>
			</form>
		</div>
	</div>
</div>
</body>
</html>
		