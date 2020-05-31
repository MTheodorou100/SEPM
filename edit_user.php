<html>
    <head>
        <link rel="stylesheet" href="steeze.css">
        <title>
            SEPM Edit Users
        </title>
    </head>
    <body>
        <header>
            <a href="home.html" class="home">
                Tour Manager Web App
            </a>
        </header>
        <header>Edit a User</header>
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
            $conn -> close();
        ?>
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
                    <th>AccType</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>

                <?php while( $contact = mysqli_fetch_array( $contacts ) ) : ?>

                    <tr>
                        <td class="userid" id="userid"><?php echo $contact['idusers']; ?></td>
                        <td class="username" id="username-<?php echo $contact['username'];?>"><?php echo $contact['username']; ?></td>
                        <td class="password" id="password"><?php echo $contact['password']; ?></td>
                        <td class="acctype" id="acctype"><?php echo $contact['acctype']; ?></td>
                        <td class="edit-user">
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
                
        <script>
            function edit(button) {
                var x = document.getElementById("username")
                if (x.contentEditable == "true") {
                    x.contentEditable = "false";
                    button.innerHTML = "Edit";
                } else {
                    x.contentEditable = "true";
                    button.innerHTML = "Save";
                }
                var y = document.getElementById("password")
                if (y.contentEditable == "true") {
                    y.contentEditable = "false";
                    button.innerHTML = "Edit";
                } else {
                    y.contentEditable = "true";
                    button.innerHTML = "Save";
                }
            }
        </script>
        
    </body>
</html> 