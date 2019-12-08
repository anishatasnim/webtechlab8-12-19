<?php
	session_start();
	require_once('functions.php');
	//define(name, value)
	
	if(isset($_POST['submit'])){
		$UserName = $_POST['uname'];
		$Password = $_POST['pass'];
		if(empty($UserName) == true || empty($Password) == true){
			echo "null submission!";
		}else{
			$count = validate($UserName, $Password);
			if($count > 0){
				
				$_SESSION['uname'] = $UserName;
				$_SESSION['pass'] = $Password;
				setcookie("uname", $UserName, time()+3600, "/");
			    header('adminhome.php');
			}else{
				echo "invalid username/password";
			}
		}
	}else{
		header('Login.php');
	}
?>