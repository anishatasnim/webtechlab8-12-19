<?php
	require_once('db.php');
	function validate($UserName, $Password){
		$conn = getConnection();
		$sql = "select * from employee where UserName='{$uname}' and Password='{$pass}'";
		$result = mysqli_query($conn, $sql);
		$user = mysqli_fetch_assoc($result);
		return count($user);
	}
	function register($Name,$ContactNo,$UserName,$Password){
		$conn = getConnection();
		$sql = "insert into employee values('', '{$Name}','{$ContactNo}','{$UserName}','{$Password}',0)";
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
	function getAllUser(){
		$conn = getConnection();
		$sql = "select * from employee";
		$result = mysqli_query($conn, $sql);
		$data = array();
		while ($row = mysqli_fetch_assoc($result)) {
			array_push($data, $row);
		}
		return $data;
	}
	function deleteUser($UserName){
		$conn = getConnection();
		$sql = "delete from employee where username=".$UserName;
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
?>