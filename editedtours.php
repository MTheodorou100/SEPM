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

$sql = "UPDATE tours SET tourname='$_POST[tourname]', xcord='$_POST[location]' WHERE tourname='$_POST[tour]';";
  
if ($db->query($sql) === TRUE) {
} else {
  echo "Error: " . $sql . "<br>" . $db->error;
}

    
    
#$file = fopen('locations.csv','a+'); //"w"=overwrite
#fwrite($file, $_POST['Exhibit_name']);
#fwrite($file, ",");
#fwrite($file, $_POST["x"]); 
#fwrite($file, ",");
#fwrite($file, $_POST["x"]);
#fwrite($file, ",");
#fwrite($file, $_POST["Description"]);
#fwrite($file, ",");
#fwrite($file, $_POST["min_duration"].PHP_EOL);
#fclose($file);
?>
	<h1>The Tour has been registered!</h1>
	<p> <a href="home.html">Click here</a> to return to main directory</p>
	
</body>
</html>