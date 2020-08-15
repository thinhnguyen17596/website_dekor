<?php
    	$server = 'localhost';
		$user = 'root';
		$pass = '';
		$data = 'dekor1';
		$conn = mysqli_connect($server,$user,$pass,$data) or die ('Not connect');
		mysqli_query($conn,'set names "utf8"');
?>
