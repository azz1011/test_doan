<?php
$mahs = $_GET['cmahs'];
$tacgia = "ADMIN";
$date = strval(date('d-m-y h:i:s'));
$tacvu = "XOA HOC SINH";
require "../../classes/DB.class.php";
$connect = new db();
$conn = $connect->connect();
$query = "delete from hocsinh where MaHS='$mahs'";
$results = mysqli_query($conn, $query);

// Cap nhat truy vet lich su
$sql_history = "INSERT INTO history (tacvu, tacgia, thoigian, doituong)
                        VALUES ('$tacvu', '$tacgia', '$date', '$mahs')";
mysqli_query($conn, $sql_history);

header("location:../index.php?mod=hs");
exit();
