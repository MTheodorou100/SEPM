
<html>
	<style>
@import url('https://fonts.googleapis.com/css?family=Roboto&display=swap');
</style> 
	<link rel="stylesheet" href="../client/css.css">
<body>  
	<?php
   
   $servername = '35.244.97.104';
   $dbname = 'SEPMdb';
   $username = 'root';
   $password = null;
   $conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}     

$sql = "INSERT INTO tours (tourname, tourlocation)
VALUES ('$_POST[tourname]', '$_POST[location]')";
  
if ($conn->query($sql) === TRUE) {
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

  
  
#$file = fopen('tours.csv','a+'); //"w"=overwrite
#fwrite($file, $_POST['tourname']);
#fwrite($file, ",");
#fwrite($file, $_POST["location"].PHP_EOL); 
#fclose($file);
?>
	<h1>The tour has been registered!</h1>
	<p> <a href="home.html">Click here</a> to return to main directory</p>
	
</body>
</html>

