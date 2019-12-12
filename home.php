<?php
error_reporting(0);
session_start();

if ($_SESSION['uname'] AND $_SESSION['type']=='admin') {


?>




<html>
<head>
  <title>Home</title>
</head>
<body>
<center>
    <h1>Welcome <?=$_SESSION['uname'];?></h1>
    <a href="profile.php">Profile</a><br>
    <a href="changepass.php">Change Password</a><br>
    <a href="viewusers.php">View Users</a><br>
    <a href="logout.php">Logout</a>
</center>
</body>
</html>


<?php

}
elseif ($_SESSION['uname'] AND $_SESSION['type']=='user') 

{


?>



<html>
<head>
  <title>Home</title>
</head>
<body>
<center>
    <h1>Welcome <?=$_SESSION['uname'];?></h1>
    <a href="profile.php">Profile</a><br>
    <a href="changepass.php">Change Password</a><br>
    <a href="logout.php">Logout</a>
</center>
</body>
</html>



<?php
}
else
{
  header('Location:login.php?msg=Must login for aceess');
}

?>