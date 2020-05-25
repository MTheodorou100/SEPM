
<html>
	<style>
@import url('https://fonts.googleapis.com/css?family=Roboto&display=swap');
</style> 
	<link rel="stylesheet" href="../client/css.css">
<body>  
	<?php
$servername = '35.244.97.104';
$dbname = 'SEPMdb';
$dbUser = 'root';
$dbPass = null;
$db = new mysqli($servername, $dbUser, $dbPass, $dbname);

if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}     

$sql = "INSERT INTO users (username, password, acctype)
VALUES ('$_POST[username]', '$_POST[password]', '$_POST[account]')";
  
if ($db->query($sql) === TRUE) {
} else {
  echo "Error: " . $sql . "<br>" . $db->error;
}
  

#$file = fopen('users.csv','a+'); //"w"=overwrite
#fwrite($file, $_POST['username']);
#fwrite($file, ",");
#fwrite($file, $_POST["password"]); 
#fwrite($file, ",");
#fwrite($file, $_POST["account"].PHP_EOL);
#fclose($file);
?>
	<h1>The user has been registered!</h1>
	<p> <a href="home.html">Click here</a> to return to main directory</p>
	
</body>
</html>

