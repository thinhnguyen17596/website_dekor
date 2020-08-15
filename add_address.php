<?php
    session_start();
    ob_start();
    include('connect.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
  <title>
    Add Address
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="active ">
            <a href="./add_address.php
          ">
              <i class="nc-icon nc-bank"></i>
              <p>ADD Address</p>
            </a>
          </li>
          <li>
            <a href="./user.php
          ">
              <i class="nc-icon nc-single-02"></i>
              <p>PRODUCT</p>
            </a>
          </li>
          <li>
            <a href="./tables.php
          ">
              <i class="nc-icon nc-tile-56"></i>
              <p>Table List</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div >
      <div class="navbar-brand" style="margin-left: 300px; margin-top: 200px; ">
        <form method="post">
          <h3>Thêm quê quán</h3>
        <input type="text" name="txtten" placeholder="Nhập tên quê quán">
        <input type="submit" name="ok" value="Thêm mới"><br>
<?php
include('connect.php');
if(isset($_POST['ok']))
{
if(empty($_POST['txtten']))
echo "chưa nhập dữ liệu";
else
{
$sql="insert into address (Address) values('".$_POST['txtten']."')";
mysqli_query ($conn, $sql);
echo 'Thêm mới thành công';
}
}
?>
      </form>
    </div>
    <div style="margin-left: 300px; margin-top: 100px; ">
        <form method="post" enctype="multipart/form-data">
          <h3> Thêm sản phẩm</h3>
        <input type="text" name="p_Name" placeholder="Nhập tên sản phẩm">
        <input type="text" name="category" placeholder="Nhập chủng loại sản phẩm">
        <input type="text" name="price" placeholder="Nhập giá sản phẩm">
        <input type="text" name="description" placeholder="Nhập mô tả sản phẩm">
        <input type="file" name="img">
        <input type="submit" name="ok_p" value="Thêm mới"><br>
        <?php
include('connect.php');
    if(isset($_POST['ok_p']))
    {
        $p_Name=$_POST["p_Name"];
        $category=$_POST["category"];
        $price=$_POST["price"];
        $description=$_POST["description"];
        // $img=$_POST["img"];
        if(empty($p_Name) || empty($category) || empty($price))
        {
            echo "Chưa nhập dữ liệu";
        }
        else
        {

            //kiem tra sản phẩm trung nhau
            $sql_name = "select * from product where p_Name ='$p_Name'";
            $run_name = mysqli_query($conn,$sql_name);
            $row=mysqli_fetch_array($run_name);
            if ($row['p_Name'] == $p_Name) echo "<script>alert('Sản phẩm đã tồn tại')</script>";
            else
                {
                      //upload anh
                        $tmp=$_FILES['img']['tmp_name'];
                        $name=$_FILES['img']['name'];
                        $upload=move_uploaded_file($tmp,'demos/portfolio/'.$name);
                        $sql="insert into product (p_Name,category,price,description,picture)
                        values('$p_Name','$category','$price','$description','$name')";
                        $run=mysqli_query($conn,$sql);

                        if($run)

                        {    

                           echo "<script>alert('Thêm mới thành công!')</script>";
                                        
                        }
                        else 
                        {
                            echo $sql;
                            echo "Không thêm mới dược!";
                        }
                    
                    
                
                } 
        }
    }
ob_end_flush();
?>
      </form>
    </div>
      



    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>
</body>

</html>
