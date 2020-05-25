
<html>
<body>
    <h1>Create a new Tour</h1>
  
   <form action="tours.php" method="POST">

Tour name: <input type="text" name="tourname" id="tourname" required>
<br/><br/>
First location:  <select name="location" class="bl-select">

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
  
$array = array();  
#if ($db->query($sql) === TRUE) {
#} else {
#  echo "Error: " . $sql . "<br>" . $db->error;
#}
 if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo " - Name: " . $row["exhibitname"]. "<br>";
    $array =$row["exhibitname"];
    ?>
        <option value="<?php echo $row["exhibitname"];?>"><?php echo $row["exhibitname"];?></option>
<?php
  }
} else {
  echo "0 results";
} 
   ?>
   


</select>
     <br><br/>
     <button type="submit" >Submit to register</button>
</form>
 
    
</body>
</html> 