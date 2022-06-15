<?php
require "../classes/DB.class.php";
$connect = new db();
$conn = $connect->connect();
if (isset($_POST['khoacapnhat'])) {
  $query = "UPDATE giaovien SET quyen_han = 'NOTUPDATE'";
  mysqli_query($conn, $query);
} elseif (isset($_POST['mocapnhat'])) {
  $query = "UPDATE giaovien SET quyen_han = 'UPDATE'";
  mysqli_query($conn, $query);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hệ thống</title>
</head>

<body>
  <h1>Hệ thống</h1>
  <form method="post">
    <button class="btn btn-primary" name="khoacapnhat">Khóa cập nhật điểm</button>
    <button class="btn btn-primary" name="mocapnhat">Mở khóa cập nhật điểm</button>
  </form>
</body>

</html>