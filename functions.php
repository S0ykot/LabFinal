<?php

require_once 'db.php';

function signup(id,password,name,email,type)
{
	$conn = getConnection();
	$query = "INSERT INTO users VALUES ('','$id','$password','$name','$email','$type')";
	if (mysqli_query($conn,$query)) {
		return true;
	}
	else
	{
		return false;
	}
}


?>