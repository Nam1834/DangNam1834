<!DOCTYPE html>
<html lang="en">
<head>
<title>Page Title</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
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
                <li><a href="dangky.php">Đăng Ký Thành Viên </a></li> 
              </ul></li>
        </ul>
      </div> 
    </section>

<h2>Bạn hãy điền thông tin cá nhân</h2>

<div class="container">
  <form action="xuly.php" method="POST">
    <label for="fname">Họ và tên: </label>
    <input type="text" name="hoten" placeholder="Your name..">

    <label for="lname">Địa chỉ</label>
    <input type="text" name="diachi" placeholder="Address..">

    <label for="country">Tài khoản ngân hàng</label>
    <input type="text" name="tknganhang" placeholder="Number..">
    <label for="subject">Subject</label>
    <textarea id="subject" name="phanhoi" placeholder="Tài khoản thành viên" style="height:200px"></textarea>

    <input type="submit" name="guithongtin" value="Gửi thông tin">
  </form>
</div>

</body>
</html>
