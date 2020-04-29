
<html>
<body>
    <h1>Create a new Tour</h1>
 
 <form action="tours.php" method="POST">

Tour name: <input type="text" name="tourname" id="tourname" required>
<br/><br/>
First location:  <select name="location" class="bl-select">
<?php
    $fileHandle = fopen("locations.csv", "r");
    while (($row = fgetcsv($fileHandle, 0, ",")) !== FALSE) {
        $location = $row[0];
?>
    <option value="<?php echo $location;?>"><?php echo $location;?></option>
<?php
	}
?>
</select>
     <br><br/>
     <button type="submit" >Submit to register</button>
</form>
 
    
</body>
</html> 