<html>
	<head>
		<link rel="stylesheet" href="steeze.css">
        <title>
            SEPM Edit Locations
        </title>
	</head>
	<body>

		<header>
            <a href="home.html" class="home">
                Tour Manager Web App
            </a>
		</header>
		
		<header>Edit a Location</header>

		<form action="editedlocations.php" method="POST">
			<div>
				Exhibit name: <input type="text" name="Exhibit_name" id="Exhibit_name" required>
			</div>
			<div>
			X co-ordinate: <input type="number" name="x" id="x" minlength="1" required>

			</div>
			<div>
			Y co-ordinate: <input type="number" name="y" id="y" minlength="1" required>

			</div>
			<div>
			Description: <input type="text" name="Description" id="Description" required>

			</div>
			<div>
			Minimum Duration: <input type="number" name="min_duration" id="min_duration" required>

			</div>
			<div>
			Location to be edited:  
			<select name="location" class="bl-select">

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

				<option name="editl" id="editl" value="<?php echo $row["exhibitname"];?>">
					<?php echo $row["exhibitname"];?>
				</option>

				<?php
					}
					} else {
					echo "0 results";
					} 
				?>
			</select>
			</div>

			<div>
			<button type="submit" >Update Locations</button>
			</div>
		</form>



		<header>Delete a Location</header>

		<form action='delete_location.php' method="post">
			<div>
				Location to be deleted:  
				<select name="ex" class="bl-select">
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
			</div>
			<div>
				<!-- <input type="submit" name="submit" value="Delete"> -->
				<button type="submit" name="submit" value="Delete"> Delete</button>
			</div>
		</form>


	</body>
</html> 