<?php
include('configg.php');

$hoten =$_POST['hoten'];
$diachi =$_POST['diachi'];
$tknganhang =$_POST['tknganhang'];
$phanhoi =$_POST['phanhoi'];
if(isset($_POST['guithongtin'])){
    $sql_them = "INSERT INTO ttkhachhang(hoten,diachi,tknganhang,phanhoi) VALUE('".$hoten."','".$diachi."','".$tknganhang."','".$phanhoi."')";
    mysqli_query($mysqli,$sql_them);
    header('Location:page.php');
}
?>