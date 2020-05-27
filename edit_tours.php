
<html>
<body>
    <h1>Edit new Tour</h1>
  
   <form action="editedtours.php" method="POST">
Select Tour to modify: <select name="tour" id="tour" class="bl-select">
	   
	   <?php

   $servername = '35.244.97.104';
    $dbname = 'SEPMdb';
    $username = 'root';
    $password = null;
    $conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
  die("Connection failed: " . $db->connect_error);
}     

$sql = "SELECT tourname FROM tours";
$result = $conn->query($sql);  
  
$array = array();  
#if ($db->query($sql) === TRUE) {
#} else {
#  echo "Error: " . $sql . "<br>" . $db->error;
#}
 if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   # echo " - Name: " . $row["tourname"]. "<br>";
   # $array =$row["exhibitname"];
    ?>
        <option value="<?php echo $row["tourname"];?>"><?php echo $row["tourname"];?></option>
<?php
  }
} else {
  echo "0 results";
} 
   ?>
	   </select>
	   <br><br/>
	   
	   
	   
Tour name: <input type="text" name="tourname" id="tourname" required>
<br/><br/>
First location:  <select name="location" class="bl-select">


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
        <option value="<?php echo $row["exhibitname"];?>"><?php echo $row["exhibitname"];?></option>
<?php
  }
} else {
  echo "0 results";
} 
   ?>
   


</select>
     <br><br/>
     <button type="submit" >Modify Tour</button>
</form>
<br></br>
<br></br>
  <h2>Delete a Tour</h2>

    <form action='delete_tour.php' method="post">
        Location to be deleted:  <select name="xe" class="bl-select">
    
</body>
</html> 