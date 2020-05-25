<html>
<body>
    <h1>Edit a User</h1>
    
   Select User: <select name="users" class="dropbtn">Users</select>

    <?php
    $servername = '35.244.97.104';
    $dbname = 'SEPMdb';
    $username = 'root';
    $password = null;
    $conn = new mysqli($servername, $username, $password, $dbname);

    if (!$conn){
        die("Connection failed: " . $conn->connection_error);
    }

    $sql = "SELECT username FROM users";
    $result = $db->query($sql);

    $array = array(); 

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo " - Name: " . $row["username"]. "<br>";
            $array =$row["username"];
            ?>
                <option value="<?php echo $row["username"];?>"><?php echo $row["username"];?></option>
        <?php
          }
        } else {
          echo "0 results";
        } 
           ?>
    }
    ?>

</body>
</html> 