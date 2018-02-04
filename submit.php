<?php
	echo "Hello Hi";
	$servername = "localhost";
	$username = "root";
	$password = "";
	try {
		$conn = new PDO("mysql:host=$servername;dbname=arcis", $username, $password);
		// set the PDO error mode to exception
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		echo "Connected successfully <br>";
		$name = $_GET['person_name'];
		$email = $_GET['person_email'];
		$subject = $_GET['subject'];
		$message = $_GET['person_message'];
		$sql = "insert into Queries values('$name','$email','$subject','$message')";
		// echo $sql;
		$conn->exec($sql);
		header('Location:http://localhost/arcis/cont.html');
	 }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>
