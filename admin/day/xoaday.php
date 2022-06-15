<?php
//require_once("ketnoiuser.php");
require "../../classes/DB.class.php";
$connect = new db();
$conn = $connect->connect();
$id = $_GET['id'];
$query = "delete from day where MaDayHoc='$id'";
$results = mysqli_query($conn, $query);

$tac_gia = "ADMIN";
$tacvu = "XOA PHAN CONG";
$date = strval(date('d-m-y h:i:s'));
// Cap nhat truy vet lich su
$sql_history = "INSERT INTO history (tacvu, tacgia, thoigian, doituong)
                        VALUES ('$tacvu', '$tac_gia', '$date', '$id')";
mysqli_query($conn, $sql_history);

header("location:../index.php?mod=day");
exit();
