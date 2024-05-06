<?php
include('configg.php');

    if(isset($_POST['dangky'])){
        $tenkhachhang = $_POST['hovaten'];
        $email = $_POST['email'];
        $dienthoai = $_POST['dienthoai'];
        $matkhau = md5($_POST['matkhau']);
        $diachi = $_POST['diachi'];
               
        $sql_dangky = mysqli_query($mysqli,"INSERT INTO tbl_dangky(tenkhachhang,email,diachi,sodienthoai,matkhau) VALUE('".$tenkhachhang."','".$email."','".$diachi."','".$dienthoai."','".$matkhau."')");     
      }
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="dangky.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
<link rel="stylesheet" href="menu.css">
<link rel="stylesheet" href="login.css">
<link rel="stylesheet" href="footer.css">
<link rel="stylesheet" href="thongtin.css">
<link rel="stylesheet" href="ttkhachhang.css">
</head>
<body>
<section id="header">
      <a href="#"><img src="hinh/logo.png" class="logo" alt=""></a>
      <div>
        <ul id="navbar">
            <li><a href="home.php">HOME</a></li>
            <li><a href="shop.php">SHOP</a>
            <li><a href="about.php">ABOUT</a></li>
            <li><a href="collab.php">COLLAB'S</a></li>  
            <li><a href="user.php"><i class="fa-solid fa-user"></i></a>
              <ul class="sub-menu">
                <li><a href="">Đăng Ký Thành Viên </a></li> 
              </ul></li>
        </ul>
      </div> 
    </section>

<form action="" method="POST">
  <div class="container">
    <h1>Đăng ký thành viên</h1>
    <hr>

    <label for="email"><b>Họ và tên</b></label>
    <input type="text" placeholder="Name" name="hovaten" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="email"><b>Địa chỉ</b></label>
    <input type="text" placeholder="Enter Address" name="diachi" required>

    <label for="email"><b>Số điện thoại</b></label>
    <input type="text" placeholder="Enter Phone Numbers" name="dienthoai" required>

    <label for="psw"><b>Mật khẩu</b></label>
    <input type="password" placeholder="Enter Password" name="matkhau" required>

    <hr>

    <a href="page.php"><button type="submit" name="dangky" class="registerbtn">Đăng ký</button></a>
  </div>
  
  <div class="container signin">
    <p>Nếu bạn đã có tài khoản? <a href="dangnhap.php">Đăng nhập</a>.</p>
  </div>
</form>

</body>
</html>
