<?php
session_start();
$ma = $_GET['cmahk'];

$tacgia = "ADMIN";
$date = strval(date('d-m-y h:i:s'));
$tacvu = "XOA LOP";

require "../../classes/DB.class.php";
$connect = new db();
$conn = $connect->connect();
$query = "delete from lophoc where MaLopHoc='$ma'";
$results = mysqli_query($conn, $query);

// Cap nhat truy vet lich su
$sql_history = "INSERT INTO history (tacvu, tacgia, thoigian, doituong)
                    VALUES ('$tacvu', '$tacgia', '$date', '$_GET[cmahk]')";
mysqli_query($conn, $sql_history);

header("location:../index.php?mod=lop");
exit();
