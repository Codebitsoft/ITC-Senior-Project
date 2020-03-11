<html>

<head>
	<title> Forgot Password </title>
	<style></style>
</head>

<body>
	<div class="container">
		<div class="header">
			<h1> Forgot Password </h1>
			<div class="nav">
				<a href="index.php">Home</a>
			</div>
		</div>
		
		<div class="main">
			<form action="#" method="post">
				<p>
                <label for="username"><b>Username:</b></label>
                <input type="text" placeholder="user123 or user@domain.com" name="username" required>
                </p>
				
				<p>
                <label for="pass"><b>Password:</b></label>
                <input type="password" placeholder="At most 16 chars" name="pass" maxlength="16" required>
                </p>
				
                <input type="submit" value="Get New Password">
			</form>
		</div>
	</div>
</body>

</html>