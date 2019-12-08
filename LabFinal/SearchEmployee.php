<?php
	
	require_once('db.php');
	$term = $_POST['key'];
	$con = getConnection();
	$sql = "select UserName from employee where UserName like '%{$term}'";
	$result = mysqli_query($con, $sql);
	$row = "";
	while($data = mysqli_fetch_assoc($result)){
		$row .= $data['UserName']."|";
	}
	echo $row;
?>