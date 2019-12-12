<?php

session_start();
require_once 'functions.php';

if ($_SESSION['uname'] AND $_SESSION['type']) {
	
	$data = users_details();


?>


<center>
	
	<table border="1">
		<tr>
			<th colspan="4">Users</th>
		</tr>
		<tr>
			<th>ID</th>
			<th>NAME</th>
			<th>EMAIL</th>
			<th>TYPE</th>
		</tr>

		<?php

		while ($row=mysqli_fetch_assoc($data)) {
			echo "

			<tr>
			<td>".$row['uid']."</td>
			<td>".$row['name']."</td>
			<td>".$row['email']."</td>
			<td>".$row['type']."</td>

			<tr>
			";
		}

		?>

		<tr><td colspan="4" align="right"><a href="home.php">Go Home</a></td></tr>
	</table>


</center>


<?php 

}
else
{
	header('Location:login.php?msg=Must login for aceess');
}


 ?>