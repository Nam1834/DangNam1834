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
<link rel="stylesheet" href="camon.css">
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

    <div id="heroo">
        <h2>CARA'S Store</h2>
        <h1>Cảm ơn bạn đã chọn sản phẩm 
            của chúng tôi</h1>
        <p>♥Sự ủng hộ của bạn là động lực của chúng tôi♥</p>
      </div>
<a href="shop.php"><button class="normal">Tiếp tục lựa chọn sản phẩm</button></a>

<footer class="section-p1">
  <div class="col">
      <img class="logo" src="hinh/logo.png" alt="">
      <h4>Contact</h4>
      <p><strong>Giám Đốc/CEO: </strong> Đỗ Tùng Lâm </p>
      <p><strong>Addres: </strong> Đại Học Văn Lang Cơ Sở 3, Đường Đặng Thuỳ Trâm</p>
      <p><strong>Hotline: </strong> 0978992802</p>
      <p><strong>Time: </strong> 7h sáng - 5h chiều, Thứ 2 - Thứ 6</p>
      <div class="follow">
          <h4>Follow Cara on: </h4>
          <div class="icon">
              <i class="fab fa-facebook-f"></i>
              <i class="fab fa-twitter"></i>
              <i class="fab fa-instagram"></i>
              <i class="fab fa-youtube"></i>
          </div>
      </div>
  </div>

  <div class="col">
      <h4>About</h4>
      <a href="#">About Us</a>
      <a href="#">Delivery Information</a>
      <a href="#">Privacy Policy</a>
      <a href="#">Term & Condition</a>
      <a href="#">Contact Us</a>
  </div>

  <div class="col">
      <h4>My Account</h4>
      <a href="#">Sign In</a>
      <a href="#">View Cart</a>
      <a href="#">Track My Order</a>
      <a href="#">Help</a>
  </div>

  <div class="col install">
      <h4>Install App</h4>
      <p>From App Store or Google Play</p>
      <div class="row">
          <img src="hinh/app.jpg" alt="">
          <img src="hinh/play.jpg" alt="">
      </div>
      <p>Another Payment Getways</p>
      <img src="hinh/pay.png" alt="">
  </div>

  <div class="copyright">
      <p>©2022, Tech2 etc - HTML CSS Ecommerce Template</p>
  </div>
</footer>

 
<div id="backtop">
  <i class="fa-solid fa-angle-up"></i>
</div>



<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
<script>
  $(document).ready(function() {
    $(window).scroll(function() {
      if ($(this).scrollTop()) {
          $('#backtop').fadeIn(); 
      } else {
          $('#backtop').fadeOut();
      }
    });
    $("#backtop").click(function(){
      $('html, body').animate({
          scrollTop: 0
        }, 1000) ;
    });
  });  
</script>
  <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
    <script>
      $(document).ready(function(){
        $('.sub-menu').parent('li').addClass('has-child')
      });
  </script>


</body>
</html>