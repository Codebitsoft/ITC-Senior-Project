<?php include 'database_connect.php'; ?>

<?php

//create variables
$userName = $_POST['username'];
$userPass = $_POST['pass'];

//execute query
mysqli_query($conn, "INSERT INTO users (username, password) VALUES ('$userName', '$userPass')");
if(mysqli_affected_rows($conn) > 0){
	echo "<p>Account added</p>";
	//echo "<a href="index.html">Home</a>";
} else {
	echo "Account not added <br>";
	echo mysqli_error($conn);
}
?>

<html>
	<body>
		<p><a href="index.php">Go back home</a></p>
	</body>
</html>