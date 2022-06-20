<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Title -->
	<title>Login Page </title>

	<style>
		label {
			width: 100%;
			max-width: 100px;
			display: inline-block;
			text-align: right;
		}

		div {
			margin-top: 1em;
		}
	</style>

</head>
<center>
<body>
 <form action="auth/login.php" method="post">
	<div>
		<h2>Simple Login Script Demo</h2>
	</div>	
	<div>
		 <label>Email</label>
		<input type="text" name="email">
	</div>
	<div>
		<label>Password</label>
		<input type="password" name="password">
	</div>
	<div>
		<input type='submit' value="Login" style="margin-left: 105px;">
	</div>
	<input type="hidden" name="submitted" value="1">
</form>


</body>
</center>
</html>
