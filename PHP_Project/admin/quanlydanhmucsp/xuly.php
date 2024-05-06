<?php
include('../../config/connect.php');
    $masanpham = $_POST['masp'];
    $tenloaisp = $_POST['tensp'];
    $gia = $_POST['gia'];
    $mota = $_POST['mota'];
    $imgURL = $_POST['anh']
    if(isset($_POST['themdanhmuc'])){
        $sql_them = "INSERT INTO sanpham(masp,tensp,gia,mota) VALUE('".$masanpham."','".$tenloaisp."','".$gia."','".$mota."','".$imgURL."')";
        mysqli_querry($mysqli,$sql_them);
        header('Location:../../index.php');
    }
?>