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
			<div class="tabdiv"><img src="img/logo.png"><span class="tabspan"><a href="#motorcycles" class="tabs">Motorcycles</a></span><span class="tabspan"><a class="tabs" href="#misctable">Accessories</a></span><span class="tabspan"><a class="tabs" href="#misctable">Book a Test Ride</a></span><span class="tabspan"><a href="#misctable" class="tabs">Service</a></span><span><a href="logout.php" class="logout" name="logout">Log-out</a></span></div>
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
							<tr>
								<td><input type="checkbox" name="rememberme"><label for="rememberme">Remember me</label></td>
								<td>&nbsp</td>
								<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="">forgot password?</a></td>
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
			<div class="bg-desindex">
				<h2 class="title">Welcome to</h2>
				<h1 class="title">ROYAL ENFIELD</h1>	
			</div>
		</div>
		<div class="contentbg">
			<div class="content" id="contentid">
				<h1>Content</h1>
				<p>The Enfield Cycle Company made motorcycles, bicycles, lawnmowers and stationary engines under the name Royal Enfield out of its works based at Redditch, Worcestershire. The legacy of weapons manufacture is reflected in the logo comprising the cannon, and the motto “Made like a gun”. Use of the brand name Royal Enfield was licensed by the Crown in 1890.In 1909 Royal Enfield surprised the motorcycling world by introducing a small Motorcycle with a 2 ¼ HP V twin Motosacoche engine of Swiss origin. In 1911 the next model was powered by a 2 ¾ HP engine and boasted of the well known Enfield 2-speed gear. In 1912 came the JAP 6 HP 770 CC V twin with a sidecar combination. It was this motorcycle which made Enfield a household name. 1914 saw the 3 HP motorcycles this time with Enfield’s own engine which now had the standardised Enfield paint scheme of black enamelled parts and green tank with gold trim.</p>
			</div>
		</div>
		<div id="motorcycles">
			<div class="mototitle">Motorcycles</div>
			<table class="motorcyclestable">
				<tr>
					<td><a href="classic.html" target="_blank"><img src="img/classic350.jpg"><div>Classic 350</div></a></td>
					<td><a href="bullet.html" target="_blank"><img src="img/bullet350.jpg"><div>Bullet 350</div></a></td>
					<td><a href="meteor.html" target="_blank"><img src="img/meteor350.jpg"><div>Meteor 350</div></a></td>
				</tr>
				<tr>
					<td><a href="scram.html" target="_blank"><img src="img/scram411.jpg"><div>Scram 411</div></a></td>
					<td><a href="continentalgt.html" target="_blank"><img src="img/continentalgt650.jpg"><div>Continental GT650</div></a></td>
					<td><a href="hunter.html" target="_blank"><img src="img/hunter350.jpg"><div>Hunter 350</div></a></td>
				</tr>
				<tr>
					<td><a href="himalayan.html" target="_blank"><img src="img/himalayan411.jpg"><div>Himalayan 411</div></a></td>
					<td><a href="interceptor.html" target="_blank"><img src="img/interceptor650.jpg"><div>Interceptor 650</div></a></td>
				</tr>

			</table>
			<hr>
			<table class="misctable" id="misctable">
				<tr>
					<td colspan="2" id="acc"  style="background: url(img/acc.jpg); background-size: 100%;"><div><h1>Accessories</h1><p>Made with tough, durable materials and make you look good, on the motorcycle or off it. Inspired by a motorcycling way of life. Lets you express your love for motorcycling. Available in every Royal Enfield Showroom and authorised service centres</p>
					</div></td>
					<td id="test"  style="background: url(img/test.jpg); background-size: 100%;"><div><h1>Book a Test Ride</h1><p>Find the one that suits you best. Now available with easy finance options. Ride today.</p></div></td>
				</tr>
				<tr>
					<td id="service"  style="background: url(img/service.jpg); background-size: 100%;"><div><h1>Service</h1><p>Service now at your fingertips. Book your service at an authorised service centre</p></div></td>
					<td colspan="2" id="about"  style="background: url(img/aboutus.jpg); background-size: 100%;"><div><h1>Why this page?</h1><p>This page is been created so that people i.e The Royal Enfield lovers can review their ideas on the motorcycles. This page is just a blog is not representing the website hosted by Royal Enfield&reg.</p></div></td>
				</tr>
			</table>
		</div>		
	</div>
	<div class="enddiv">
		<table class="footer1">
			<tr><td colspan="3"><a class="footermotorcycles" href="#motorcycles">Motocycles</a></td></tr>
			<tr><td><a href="bullet.html" target="_blank">&bull;  Bullet</a></td><td><a href="meteor.html" target="_blank">&bull;  Meteor</a></td><td><a href="interceptor.html" target="_blank">&bull;  Interceptor</a></td></tr>
			<tr><td><a href="hunter.html" target="_blank">&bull;  Hunter</a></td><td><a href="classic.html" target="_blank">&bull;  Classic</a></td><td><a href="scram.html" target="_blank">&bull;  Scram</a></td></tr>
			<tr><td><a href="himalayan.html" target="_blank">&bull;  Himalayan</a></td><td><a href="continentalgt.html" target="_blank">&bull;  Continental GT</a></td></tr>
			<tr></tr>
		</table>
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