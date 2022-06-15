<?php
$tacgia = "ADMIN";
$date = strval(date('d-m-y h:i:s'));
$tacvu = "XOA MON";

require "../../classes/monhoc.class.php";
$con = new monhoc();
$connect = new db();
$conn = $connect->connect();
$id = $_GET['id'];
$xoa = $con->xoa($id);

// Cap nhat truy vet lich su
$sql_history = "INSERT INTO history (tacvu, tacgia, thoigian, doituong)
                VALUES ('$tacvu', '$tacgia', '$date', '$_GET[id]')";
mysqli_query($conn, $sql_history);

header("location: ../index.php?mod=mh");
exit();
