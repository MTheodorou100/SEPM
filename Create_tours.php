
<html>
<body>
    <h1>Create a new Tour</h1>
 <?php
   
   
   $servername = '35.244.69.181';
$dbname = 'SEPMdb';
$dbUser = 'root';
$dbPass = null;
$db = new mysqli($servername, $dbUser, $dbPass, $dbname);

if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}     

$sql = "SELECT exhibitname FROM locations";
$result = $db->query($sql);  
  
#if ($db->query($sql) === TRUE) {
#} else {
#  echo "Error: " . $sql . "<br>" . $db->error;
#}
 if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo " - Name: " . $row["exhibitname"]. "<br>";
  }
} else {
  echo "0 results";
} 
   
   
   
   
   # $fileHandle = fopen("locations.csv", "r");
   # while (($row = fgetcsv($fileHandle, 0, ",")) !== FALSE) {
    #    $location = $row[0];
?>
 <form action="tours.php" method="POST">

Tour name: <input type="text" name="tourname" id="tourname" required>
<br/><br/>
First location:  <select name="location" class="bl-select">

    <option value="<?php echo $row["exhibitname"];?>"><?php echo $row["exhibitname"];?></option>
<?php
#	}
?>
</select>
     <br><br/>
     <button type="submit" >Submit to register</button>
</form>
 
    
</body>
</html> 