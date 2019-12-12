<?php

require_once 'db.php';

function signup($id,$password,$name,$email,$type)
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


function auth_check($username,$password)
{
  $conn = getConnection();
  $query = "SELECT * FROM users WHERE uid='{$username}' AND password='{$password}'";
  $result = mysqli_query($conn,$query);

  return $result;
}


function profile($username,$type)
{
  $conn = getConnection();
  $query = "SELECT * FROM users WHERE uid='{$username}' AND type='{$type}'";
  $result = mysqli_query($conn,$query);
}

?>