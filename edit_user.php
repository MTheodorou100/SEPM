<html>
<body>
    <h1>Edit a User</h1>
    
   Select User: <select name="users" class="dropbtn">

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

    $sql = mysqli_query($conn, "SELECT username FROM users");
    

    $array = array(); 

    if ($sql->num_rows > 0) {
        while($row = $sql->fetch_assoc()) {
            echo " <option value=\user1\">" . $row['username'] . "</option>";
            $array =$row["username"];
          }
        } else {
          echo "0 results";
    }
    ?>
    </select>
</body>
</html> 