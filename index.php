<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap" rel="stylesheet">
	<title>Royal Enfield</title>
</head>
<body class="mainbody">
	<div>
		<div class="bg-pgindex">
			<div class="tabdiv"><center><img src="img/logo.png"></center></div>

			<div class="popup">
				<div>
					<div class="closebtn">&times;</div>
					<div class="logintitle">Log in</div>
					<form class="loginform" action="login.php" method="post">
						<table>
							<tr>
								<td>E-mail</td>
								<td>:</td>
								<td><input type="email" name="email" placeholder="E-mail" required></td>
							</tr>
							<tr>
								<td>Password</td>
								<td>:</td>
								<td><input type="password" name="password" placeholder="Password" required></td>
							</tr>

							<tr><td><button name="button" class="signinbtn" type="submit">Sign-in</button></td></tr>
							<tr><th class="or">OR</th></tr>
						</table>
					</form>
					<table class="loginform">
						<tr><td><button class="signupbtn" onclick="location.href='signup.php'">Create an account</button></td></tr>
					</table>
				</div>
			</div>
			<div class="bg-desinit">
				<center id="loginbutton"><button>Log-in/Sign-up</button></center>
			</div>
		</div>
	</div>
	<div class="enddiv">

		<table class="footer2">
			<tr><td colspan="3">Designed by Emmanuel Joshy</td></tr>
			<tr><td colspan="3">Follow Me @</td></tr>
			<tr><td><a href="https://www.instagram.com/__e.mmanuel__/" target="_blank"><i class="fa fa-instagram" style="font-size:32px; color: white;"></i></a></td><td><a href="https://github.com/Eman-69" target="_blank"><i class="fa fa-github" style="font-size:32px; color: white;"></i></a></td><td><a href="https://twitter.com/@emmanuel_joshy" target="_blank"><i class="fa fa-twitter" style="font-size:32px; color: white;"></i></a></td></tr>
		</table>
	</div>
	<script type="text/javascript">
		document.querySelector("#loginbutton").addEventListener("click",function(){
			document.querySelector(".popup").classList.add("active");
		});
		document.querySelector(".closebtn").addEventListener("click",function(){
			document.querySelector(".popup").classList.remove("active");
		});
	</script>
</body>
</html>