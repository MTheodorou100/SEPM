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
    $conn -> close();
    ?>
    </select>
    <?php
    $conn2 = new mysqli($servername, $username, $password, $dbname);
    $contacts = mysqli_query($conn2, "SELECT * FROM users ORDER BY idusers ASC");
  
    if( mysqli_num_rows( $contacts ) > 0 )
    ?>

    <table id="user-list">
        <thead>
            <tr>
                <th>User ID</th>
                <th>Username</th>
                <th>Password</th>
                <th>Account Type</th>
  <th>Delete</th>
            </tr>
        </thead>
        <tbody>

        <?php while( $contact = mysqli_fetch_array( $contacts ) ) : ?>



            <tr>
                <td class="userid"><?php echo $contact['idusers']; ?></td>
                <td class="username"><?php echo $contact['username']; ?></td>
                <td class="password"><?php echo $contact['password']; ?></td>
                <td class="acctype"><?php echo $contact['acctype']; ?></td>
                <td class="contact-delete">
    <form action='delete.php?name="<?php echo $contact['username']; ?>"' method="post">
        <input type="hidden" name="username" value="<?php echo $contact['username']; ?>">
        <input type="submit" name="submit" value="Delete">
    </form>
</td>                
            </tr>

        <?php endwhile; ?>

        </tbody>
    </table>
</body>
</html> 