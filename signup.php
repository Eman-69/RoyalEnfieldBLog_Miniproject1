<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/signup.css">
	<title>Sign up</title>
</head>
<body>
	<div class="main">
		<div class="tabdiv">
			<img src="img/logo.png">
		</div>
		<div class="maintable">
			<form action="register.php" method="post">
				<table>
					<tr class="row"><td>Registration Form</td>
					</tr>
					<tr>
						<td>Name</td>
						<td>:</td>
						<td><input type="text" id="name" placeholder="Full Name" name="name"value="" required></td>
					</tr>
					<tr class="row">
						<td>E-mail</td>
						<td>:</td>
						<td><input type="email" name="email" id="email" placeholder="123name@example.com" value="" required></td>
					</tr>
					<tr class="row">
						<td>Mobile Number</td>
						<td>:</td>
						<td><input type="tel" name="phone" id="phone" placeholder="10-digit MobileNumber" maxlength="10" required></td>
					</tr>
					<tr class="row">
						<td>Password</td>
						<td>:</td>
						<td><input type="password" name="password" id="password" placeholder="Password" minlength="8" required></td>
					</tr>
					<tr class="row">
						<td>Confirm Password&nbsp&nbsp&nbsp&nbsp&nbsp</td>
						<td>:</td>
						<td><input type="password" name="confirmpassword" id="password" placeholder="Password" minlength="8"></td>
					</tr>
					<tr class="row">
						<td><button name="submit" type="submit">Submit</button></td>
						<td>&nbsp&nbsp&nbsp&nbsp&nbsp</td>
						<td><button type="reset">Reset</button></td>
					</tr>
				</table>
			</form>
		</div>
	</div>
</body>
</html>