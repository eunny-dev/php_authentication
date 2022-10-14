<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db   = "newton_decor";

$conn = mysqli_connect('localhost', 'root', '', 'newton_decor');

if (!$conn) {
	//die("Connection failed: %s\n" .$connect-error() );

} else {

	//echo"Database connected successfully";

	
	// get the post records
	$txtName = $_POST['name'];
	$txtPhone = $_POST['number'];
	$txtEmail = $_POST['email'];
	$txtMessage = $_POST['subject'];
	$txtlocation = $_POST['location'];

	// database insert SQL code
	$sql = "INSERT INTO `contact` (`id`, `name`, `phone`, `email`,`Message`, `location`) 
		VALUES ('', '$txtName',  '$txtPhone','$txtEmail', '$txtMessage', '$txtlocation')";

	// insert in database 
	$rs = mysqli_query($conn, $sql);
	mysqli_close($conn);

	if ($rs) {
		//echo "Contact Records Inserted";
		header("Location:index.html");
	}
}
