<?php 

session_start();

$d = session_destroy();

if ($d) {
  header('Location:login.php?=logout success');
}
else
{
  
}

 ?>