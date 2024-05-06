<!DOCTYPE html>
<html lang="en">
    <head>  
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width , initial-scale=1.0">
        <link rel="stylesheet" href="css/admincss.css">
        <title>Admincp</title>
    </head>  
    <body>
        <h3>Welcome to Admincp</h3>
        <ul class="admincp_list">
            <li><a href="index.php?action=quanlydanhmucsanpham">Quản lý danh mục sản phẩm</a></li>
            <li><a href="index.php?action=quanlysanpham">Quản lý sản phẩm</a></li>
            <li><a href="index.php?action=quanlybaiviet">Quản lý bài viết</a></li>
            <li><a href="index.php?action=quanlydanhmucbaiviet">Quản lý danh mục bài viết</a></li>
        </ul>


        <div class="clear"></div>
        <div class="main">
            <?php
                if(isset($_GET['action'])){
                    $tam = $_GET['action'];
                }else{
                    $tam = '';
                }
                if($tam=='quanlydanhmucsanpham'){
                    include("quanlydanhmucsp/them.php");
                }else{
                    include("quanlydanhmucsp/dashboard.php");
                }
            ?>
        </div>

    </body>
</html>