<?php
	function getConnection(){
		$conn = mysqli_connect('localhost', 'root', '', 'LabFinal');
		return $conn;
	}
?>