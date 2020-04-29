
<html>
	<style>
@import url('https://fonts.googleapis.com/css?family=Roboto&display=swap');
</style> 
	<link rel="stylesheet" href="../client/css.css">
<body>  
	<?php
   
$file = fopen('tours.csv','a+'); //"w"=overwrite
fwrite($file, $_POST['tourname']);
fwrite($file, ",");
fwrite($file, $_POST["location"].PHP_EOL); 
fclose($file);
?>
	<h1>The tour has been registered!</h1>
	<p> <a href="http://titan.csit.rmit.edu.au/~s3722979/SEPM/">Click here</a> to return to main directory</p>
	
</body>
</html>

