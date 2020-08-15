<?php Session_start(); ?>
<?php 
	include ('connect.php');
	$layma=$_GET['sua'];
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>edit</title>
<style>
body{width: 100%;background-color:#FFFFCC;}
.text{width:450px; height:450px; margin:auto;}
.text1{width:150px; float:left; margin:10px 10px;}
.text2{width:200px;margin:10px 10px; float:left;}
.submit{padding-top:90px; width:150px; height:60px; margin-left:200px;}
</style>
</head>
<body>
	<?php 
		$sql_select="select * from product where p_ID='$layma'";
		$run_select=mysqli_query($conn,$sql_select);
		$row_select=mysqli_fetch_array($run_select);
	?>
	
	<form method="POST" class="text" enctype="multipart/form-data">
		<?php include('connect.php'); ?>
		<div class="text1">p_Name</div>
		<div class="text2"><input type="text" name="txtten" value="<?php echo $row_select['p_Name'] ?>"></div>
		<div class="text1">Category</div>
		<div class="text2"><input type="text" name="txtlh" value="<?php echo $row_select['category'] ?>"></div>
		<div class="text1">price</div>
		<div class="text2"><input type="text" name="txtmoney" value="<?php echo $row_select['price'] ?>"></div>
		<div class="text1">Description</div>
		<div class="text2"><input  type="text" name="txtdc" value="<?php echo $row_select['description'] ?>"></input>
		</div>
		<div class="text1">Picture</div>
		<div class="text2"><input type="file" name="txtfile"></div>

		<div class="submit"><input type="submit" name="ok" value="XÁC NHẬN"></div>

	<?php
		if(isset($_POST['ok']))
		{
			$ten=$_POST['txtten'];
			$category=$_POST['txtlh'];
			$money=$_POST['txtmoney'];
			$description=$_POST['txtdc'];
			$tmp=$_FILES['txtfile']['tmp_name'];
			$name=$_FILES['txtfile']['name'];
			$upload=move_uploaded_file($tmp, 'demos/portfolio/'.$name);

			if(empty($_POST['txtten']))
				echo "chưa nhập dữ liệu";
			else
			{
				$sql="update product set p_Name='$ten',category='$category', price='$money', description='$description' where p_ID=$layma";
				$run=mysqli_query($conn, $sql);
				if($run) header ('location:tables.php');
			}
		}
	?>
</body>
</html>