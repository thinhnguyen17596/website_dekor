<?php Session_start(); ?>


<?php
	include ('connect.php');
	$layma=$_GET['xoa'];
	echo "<h1>$layma</h1>";
	$sql="delete from register where ID='$layma'";
	$run=mysqli_query($conn, $sql);
	if($run) header('location:tables.php');
	else echo "not finish";
?>