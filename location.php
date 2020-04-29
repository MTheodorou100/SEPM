<html>
	<style>
@import url('https://fonts.googleapis.com/css?family=Roboto&display=swap');
</style> 
	<link rel="stylesheet" href="../client/css.css">
<body>  
	<?php


    
    
$file = fopen('locations.csv','a+'); //"w"=overwrite
fwrite($file, $_POST['Exhibit_name']);
fwrite($file, ",");
fwrite($file, $_POST["x"]); 
fwrite($file, ",");
fwrite($file, $_POST["x"]);
fwrite($file, ",");
fwrite($file, $_POST["Description"]);
fwrite($file, ",");
fwrite($file, $_POST["min_duration"].PHP_EOL);
fclose($file);
?>
	<h1>The location has been registered!</h1>
	<p> <a href="http://titan.csit.rmit.edu.au/~s3722979/SEPM/">Click here</a> to return to main directory</p>
	
</body>
</html>