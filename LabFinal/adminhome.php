<?php
	if(isset($_COOKIE['username'])){
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>

	<h1>Welcome Home! <?=$_COOKIE['username']?></h1> 
	
	<a href="Registraton.php">Add Employee</a> | 
	<a href="update.php">Update Employee Information</a> | 
	<a href="SearchEmployee.php">Search Employee</a>  
	<a href="logout.php">Log Out</a>

</body>	
</html>


<?php		
	}else{
		header('location: Login.php');
	}
?>