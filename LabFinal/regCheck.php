<?php
	
	require_once('functions.php');
	if(isset($_POST['submit'])){
		$Name = $_POST['Name'];
		$ContactNo=$_POST['ContactNo'];
		$UserName=$_POST['UserName'];
		$Password = $_POST['Password'];
		
		if(empty($Name) == true ||empty($ContactNo) == true || empty($UserName) == true || empty($Password) == true){
			echo "null submission!";
		}else{
			$status = register($UserName, $Password);
			if($status){
				header('Login.php?msg=success');
			}else{
				header('Registration.php?msg=dberror');
			}
		}
	}else{
		header('Registration.php');
	}
?>