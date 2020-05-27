<?php
$servername = '35.244.97.104';
$dbname = 'SEPMdb';
$username = 'root';
$password = null;
$conn = new mysqli($servername, $username, $password, $dbname);

if (!$conn){
    die("Connection failed: " . $conn->connection_error);
    echo "not connected";
}
//Define the query
$query = mysqli_query($conn, "DELETE FROM tours WHERE tourname='$_POST[xe]' LIMIT 1");
?>
	<h1>The Tour has deleted!</h1>
	<p> <a href="home.html">Click here</a> to return to main directory</p>