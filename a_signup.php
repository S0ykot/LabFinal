<?php 

require_once 'functions.php';


if (isset($_POST['submit'])) {
  $uid = $_POST['id'];
  $pass = $_POST['pass1'];
  $email = $_POST['email'];
  $name = $_POST['name'];
  $type = $_POST['type'];


if (empty($uid) || empty($pass) || empty($email) || empty($name) || empty($type)) {
  
}
else
{
        $status = signup($uid,$pass,$name,$email,$type);
      if ($status) {
          header('location:signup.php?msg=Success'); 
      }

      else
      {
          header('location:signup.php?msg=failed');
      }
}

}

?>