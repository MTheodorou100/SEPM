 <!DOCTYPE html>
<html>
<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($conn,"select username from user where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql, MYSQL_ASSOC);
   
   $login_session = $row['username'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
      die();
   }
?>
<body>

<h1>Login</h1>
<p>Welcome to the login page, enter your username and password below</p><br>
    
<form action="login.php" method="post">
    
 <label for="uname">Username:</label><br>   
 <input type="text" id="uname" name="uname"><br><br>   
    
 <label for="pword">Password:</label><br>   
 <input type="password" id="pword" name="pword"><br>
 <br>
    
 <input type="submit" value="Login">
    
    
</form>    

</body>
</html>