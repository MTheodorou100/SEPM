<html>
<body>
    <h1>Edit a User</h1>
  
    <?php
    $servername = "sepmdb";
    $username = "root";
    $password = "null";
    $conn = new mysqli($servername, $username, $password);

    if ($con->connection_error){
        die("Connection failed: " . $conn->connection_error);
    }
    echo "Connected successfully";
    ?>

</body>
</html> 