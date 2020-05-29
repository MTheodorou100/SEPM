<?php

  include("config.php");
  extract($_POST);
  
  if(isset($submit))
  {
      $rs=mysqli_query($conn,"select * from users where username='$username' and password='$password'");
      if(mysqli_num_rows($rs)<1)
      {
          $found="N";
      }
      else
      {
          $_SESSION["login"]=$user_id;
      }
  }
  if (isset($_SESSION["login"]))
  {
   }
?>
<html>
   
   <head>
      <title>Login Page</title>
   </head>
   <body>
               <form action = "home.php" method = "post">
                  <label>UserName  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit " name="submit" id="submit"/><br />
               </form>
   </body>
</html>