<?php include 'payment_process_dbconnect.php'; ?>

<?php

//create variables
$firstname = $_POST["firstname"];
$email = $_POST["email"];
$address = $_POST["address"];
$city = $_POST["city"];
$state = $_POST["state"];
$zip = $_POST["zip"];
$cardname = $_POST["cardname"];
$cardnumber = $_POST["cardnumber"];
$expmonth = $_POST["expmonth"];
$expyear = $_POST["expyear"];
$cvv = $_POST["cvv"];

//execute query
mysqli_query($conn, "INSERT INTO payment (firstname, email, address, city, state, zip, cardname, cardnumber, expmonth, expyear, cvv) VALUES ('$firstname', '$email', '$address', '$city', '$state', '$zip', '$cardname', '$cardnumber', '$expmonth', '$expyear', '$cvv')");
if(mysqli_affected_rows($conn) > 0){
	echo "<p>Card details saved for future use</p>";
	//echo "<a href="index.html">Home</a>";
} else {
	echo "Card details not saved <br>";
	echo mysqli_error($conn);
}
?>

<html>
	<body>
		<p><a href="warrantyprocess.php">Get Your Warranty!</a></p>
	</body>
</html>