<?php
   $servername = '35.244.97.104';
   $dbname = 'SEPMdb';
   $username = 'root';
   $password = null;
   $conn = new mysqli($servername, $username, $password, $dbname);
   session_start();
   
   if (isset($_POST['submit']) != null) {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($conn,$_POST['username']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
      
      $sql = "SELECT idusers FROM users WHERE username = '$username' and password = '$password'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_register("username");
         $_SESSION['login_user'] = $username;
         
         header("location: login.php");

      }
   }
?>
<html>
   
   <head>
      <title>Login Page</title>
   </head>
   <body>
               <form action = "login.php" method = "post">
                  <label>UserName  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit " name="submit" id="submit"/><br />
               </form>
   </body>
</html>