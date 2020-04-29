
<html>
	<style>
@import url('https://fonts.googleapis.com/css?family=Roboto&display=swap');
</style> 
	<link rel="stylesheet" href="../client/css.css">
<body>  
	<?php


    
    
$file = fopen('users.csv','a+'); //"w"=overwrite
fwrite($file, $_POST['username']);
fwrite($file, ",");
fwrite($file, $_POST["password"]); 
fwrite($file, ",");
fwrite($file, $_POST["account"].PHP_EOL);
fclose($file);
?>
	<h1>The user has been registered!</h1>
	<p> <a href="http://titan.csit.rmit.edu.au/~s3722979/SEPM/">Click here</a> to return to main directory</p>
	
</body>
</html>

