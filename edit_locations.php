
<html>
<body>
    <h1>Edit a Tour</h1>
  
   <form action="editedlocations.php" method="POST">
Exhibit name: <input type="text" name="Exhibit_name" id="Exhibit_name" required>
<br/><br/>
X co-ordinate: <input type="number" name="x" id="x" minlength="1" required>
<br/><br/>
Y co-ordinate: <input type="number" name="y" id="y" minlength="1" required>
<br/><br/>
Description: <input type="text" name="Description" id="Description" required>
<br/><br/>
Minimum Duration: <input type="number" name="min_duration" id="min_duration" required>
  <br><br/>
     Location to be edited:  <select name="location" class="bl-select">
 <?php

   $servername = '35.244.97.104';
    $dbname = 'SEPMdb';
    $username = 'root';
    $password = null;
    $conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
  die("Connection failed: " . $db->connect_error);
}     

$sql = "SELECT exhibitname FROM locations";
$result = $conn->query($sql);  
  
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
        <option name="editl" id="editl" value="<?php echo $row["exhibitname"];?>"><?php echo $row["exhibitname"];?></option>
<?php
  }
} else {
  echo "0 results";
} 
   ?>
   


</select>
     <br><br/>
     <button type="submit" >Update Locations</button>
</form>
<br></br>
<br></br>
<br></br>
  <h2>Delete a Location</h2>

    <form action='delete_location.php' method="post">
        Location to be deleted:  <select name="ex" class="bl-select">
<?php
      
         $servername = '35.244.97.104';
    $dbname = 'SEPMdb';
    $username = 'root';
    $password = null;
    $conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
  die("Connection failed: " . $db->connect_error);
}     

$sql = "SELECT exhibitname FROM locations";
$result = $conn->query($sql);  
       if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo " - Name: " . $row["exhibitname"]. "<br>";
    $array =$row["exhibitname"];
    ?>
        <option name="editl" id="editl" value="<?php echo $row["exhibitname"];?>"><?php echo $row["exhibitname"];?></option>
<?php
  }
} else {
  echo "0 results";
} 
   ?>
      </select>
        <input type="submit" name="submit" value="Delete">
    </form>
 
    
</body>
</html> 