<?php
include('configg.php');
      session_start();
      if(isset($_POST['dangnhap']))  {
        $email = $_POST['email'];
        $matkhau = md5($_POST['matkhau']);
        $sql = "SELECT * FROM tbl_dangky email='".$email."' AND matkhau='".$matkhau."' ";
        $row = mysqli_query($mysqli,$sql);
        $count = mysqli_num_rows($row);
        if($count > 0){
          $row_data = mysqli_fetch_array($row);
          $_SESSION['dangky'] = $row_data['tenkhachhang'];
          header("Location: page.php");
        }else{
          echo 'mật khẩu hoặc email sai, vui long nhập lại !';
        }  
      }
?>

<!DOCTYPE html>
<html lang="en  ">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="login.css">
</head>
<body>

<form action="" method="post" style="max-width:500px;margin:auto">
  <h2>Đăng nhập</h2>

  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" name="email" type="text" placeholder="Email" >
  </div>
  
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" name="matkhau" type="password" placeholder="Mật khẩu" >
  </div>

  <button type="submit" name="dangnhap" class="btn">Register</button>
</form>

</body>
</html>
