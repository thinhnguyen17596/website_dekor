<?php
	function prod_limit($a)
	{
		include('connect.php');
		$sql = "select * from product where p_ID<=$a";
		$run = mysqli_query($conn,$sql);
		return $run;
	}
	function prod_category($a)
	{
		include('connect.php');
		$sql= "select * from  product where category = '$a'" ;
        $run=mysqli_query($conn, $sql);
		return $run;
	}
	function prod()
	{
		include('connect.php');
		$sql= "select * from  product" ;
        $run=mysqli_query($conn, $sql);
		return $run;
	}
	function prod_prod($a)
	{
		include('connect.php');
		$sql = "select * from product where p_ID = $a";
		$run = mysqli_query($conn,$sql);
		return $run;
	}
	function prod_start($a,$b)
	{
		include('connect.php');
		$sql = "select * from product limit $a,$b";
		$run = mysqli_query($conn,$sql);
		return $run;
	}
?>