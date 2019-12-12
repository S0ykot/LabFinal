<?php 

error_reporting(0);
require_once 'functions.php';


if ($_POST['submit']) {
  $uid = $_POST['id'];
  $pass = $_POST['pass1'];
  $email = $_POST['email'];
  $name = $_POST['name'];
  $type = $_POST['type'];


$status = signup($uid,$pass,$name,$type);
if ($status) {
    header('signup.php?msg=Success'); 
}

else
{
    header('signup.php?msg=failed');
}

}

?>