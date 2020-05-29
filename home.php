 <!DOCTYPE html>
<html>
<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['login'];
   
   $ses_sql = mysqli_query($conn,"select username from user where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql, MYSQL_ASSOC);
   
   $login_session = $row['username'];
   if(!isset($_SESSION['login_user'])){
    header("location:login.php");
    echo ($login_session);
    die();
 }
   
?>
<body>

<h1>Tour Manager Web App Index</h1>
<p><a href="logger.php">Login</a></p>
<p>Select the Following Options</p>
 <p><a href="register.html">Create Accounts</a></p> 
 <p><a href="Add_location.html">Create Locations</a></p>
 <p><a href="Create_tours.php">Create Tours</a></p>
	<br><br>
 <p><a href="edit_user.php">Edit Users</a></p> 
 <p><a href="edit_locations.php">Edit Locations</a></p> 
	<p><a href="edit_locations.php">Edit Tours</a></p> 
</body>
</html> 