<?php 

session_start();
require_once 'functions.php';


$flag = FALSE;

if (isset($_POST['login'])) {
  $id = $_POST['id'];
  $pass = $_POST['pass'];

  $data = auth_check($id,$pass);

  while ($row= mysqli_fetch_assoc($data)) {
    if ($row['uid']==$id AND $row['password']==$pass) {
      $_SESSION['uname']= $row['uid'];
      $_SESSION['type'] = $row['type'];
      $flag = TRUE;
    }
  }


  if ($flag) {
    header('Location:home.php');
  }
  else
  {
    header('Location:login.php?msg=Login Failed');
  }
}

 ?>