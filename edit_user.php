<html>
<body>
    <h1>Edit a User</h1>
  
   <form action="tours.php" method="POST">

Select User:  <select name="user" class="bl-select">

 <?php
   
   
   $servername = '35.244.97.104';
$dbname = 'sepmdb';
$dbUser = 'root';
$dbPass = null;
$db = new mysqli($servername, $dbUser, $dbPass, $dbname);

if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}     

$sql = "SELECT username FROM users";
$result = $db->query($sql);  
  
$array = array();  
#if ($db->query($sql) === TRUE) {
#} else {
#  echo "Error: " . $sql . "<br>" . $db->error;
#}
 if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo " - Name: " . $row["user"]. "<br>";
    $array =$row["user"];
    ?>
        <option value="<?php echo $row["user"];?>"><?php echo $row["user"];?></option>
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