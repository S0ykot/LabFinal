<?php

session_start();
require_once 'functions.php';

$id='';$name='';$email='';$type='';

if ($_SESSION['uname'] AND $_SESSION['type']) {

  $data = profile($_SESSION['uname'],$_SESSION['type']);
    $row = mysqli_fetch_assoc($data);
    $id = $row['uid'];
    $name = $row['name'];
    $email=$row['email'];
    $type = $row['type'];

?>

<!DOCTYPE html>
<html>
<head>
  <title>Profile</title>
</head>
<body>
  <center>
    <table border="1">
      <tr>
        <td colspan="2" align="center"> Profile</td>
      </tr>
      <tr>
        <td>ID</td>
        <td><?=$id;?></td>
      </tr>
      <tr>
        <td>NAME</td>
        <td><?=$name?></td>
      </tr>
      <tr>
        <td>EMAIL</td>
        <td><?=$email;?></td>
      </tr>
      <tr>
        <td>USER TYPE</td>
        <td><?=$type;?></td>
      </tr>
      <tr>
        <td colspan="2" align="right"><a href="home.php">Go Home</a></td>
      </tr>
    </table>
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

