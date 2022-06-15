<?php
$tacgia = "ADMIN";
$date = strval(date('d-m-y h:i:s'));
$tacvu = "XOA GIAO VIEN";

$ma = $_GET['Ma'];
$ten = $_GET['Tengv'];
require "../classes/DB.class.php";
$connect = new db();
$conn = $connect->connect();
$query = "delete from giaovien where Magv='$ma'";
mysqli_query($conn, $query);

// Cap nhat truy vet lich su
$sql_history = "INSERT INTO history (tacvu, tacgia, thoigian, doituong)
                    VALUES ('$tacvu', '$tacgia', '$date', '$ten')";
mysqli_query($conn, $sql_history);

header("location:index.php?mod=gv");
exit();
