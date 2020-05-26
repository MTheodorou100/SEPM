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
$query = mysqli_query($conn, "DELETE FROM users WHERE username='$_POST[username]' LIMIT 1");

//sends the query to delete the entry