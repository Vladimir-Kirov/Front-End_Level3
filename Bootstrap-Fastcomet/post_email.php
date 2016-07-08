<?php

require "config.php";
// print "Bravo";

// Create connection
$connect = mysqli_connect($host, $username, $password, $dbname);


// Check connection
if (mysqli_connect_errno()) {
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
}

$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comment'];

$sql = "INSERT INTO contacts (name, email, comment) VALUES ('$name', '$email', '$comment')";

$result = mysqli_query($connect, $sql);

if($result) {
	print "Your request has been sent successfully!";
}
else {
	print "Your request was not sent!";
}

?>