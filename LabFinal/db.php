<?php
	function getConnection(){
		$conn = mysqli_connect('localhost', 'root', '', 'webtechlabfinal');
		return $conn;
	}
?>