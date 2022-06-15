<?php
require "../classes/DB.class.php";
$connect = new db();
$conn = $connect->connect();

// $query = "SELECT MaHS, MaHocKy, sum(DiemTB) AS DiemHK
//           FROM diem
//           WHERE MaHocKy = 'HK1'
//           GROUP BY MaHS, MaHocKy";
// $results = mysqli_query($conn, $query);

$query = "SELECT * FROM temp_tongket_hk1 WHERE MaHocKy = 'HK1'";
$results = mysqli_query($conn, $query);

for ($i = 0; $i < ($row = mysqli_fetch_assoc($results)); $i++) {
  $sql = "UPDATE tongket 
          SET tb_hk1 = '$row[DiemHK]' 
          WHERE MaHS = '$row[MaHS]'";
  mysqli_query($conn, $sql);
}

$query = "SELECT * FROM temp_tongket_hk2 WHERE MaHocKy = 'HK2'";
$results = mysqli_query($conn, $query);

for ($i = 0; $i < ($row = mysqli_fetch_assoc($results)); $i++) {
  $sql = "UPDATE tongket 
          SET tb_hk2 = '$row[DiemHK]' 
          WHERE MaHS = '$row[MaHS]'";
  mysqli_query($conn, $sql);
}

$query = "SELECT MaHS, tb_hk1, tb_hk2 FROM tongket";
$results = mysqli_query($conn, $query);

for ($i = 0; $i < ($row = mysqli_fetch_assoc($results)); $i++) {
  $ca_nam = round((($row['tb_hk1'] + $row['tb_hk2'] * 2) / 3), 2);
  $sql = "UPDATE tongket 
          SET ca_nam = '$ca_nam' 
          WHERE MaHS = '$row[MaHS]'";
  mysqli_query($conn, $sql);
}

$query = "SELECT MaHS, ca_nam, hocluc  FROM tongket";
$results = mysqli_query($conn, $query);

for ($i = 0; $i < ($row = mysqli_fetch_assoc($results)); $i++) {
  if ($row['ca_nam'] < 5) {
    $hoc_luc = "Yếu";
  } else if ($row['ca_nam'] < 6.5) {
    $hoc_luc = "Trung Bình";
  } else if ($row['ca_nam'] < 8) {
    $hoc_luc = "Khá";
  } else if ($row['ca_nam'] <= 10) {
    $hoc_luc = "Giỏi";
  } else {
    $hoc_luc = "Chưa đủ điều kiện xét";
  }
  $sql = "UPDATE tongket 
          SET hocluc = '$hoc_luc' 
          WHERE MaHS = '$row[MaHS]'";
  mysqli_query($conn, $sql);
}

?>



<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tổng kết điểm</title>
</head>

<body>
  <h1>Tổng kết điểm</h1>
  <table class="table table-striped" id="dataTable">
    <thead>
      <tr>
        <td>STT</td>
        <td>Mã Học Sinh</td>
        <td>Lớp</td>
        <td>Học kỳ 1</td>
        <td>Học kỳ 2</td>
        <td>Cả năm</td>
        <td>Học lực</td>
        <td>Năm học</td>
      </tr>
    </thead>
    <tbody>
      <?php
      $query = "SELECT * FROM tongket";
      $stt = 0;
      $results = mysqli_query($conn, $query);
      for ($i = 0; $i < ($row = mysqli_fetch_assoc($results)); $i++) {
        $stt++; ?>
        <tr>
          <td><?php echo $stt ?></td>
          <td><?php echo $row['MaHS'] ?></td>
          <td><?php echo $row['khoi'] ?></td>
          <td><?php echo $row['tb_hk1'] ?></td>
          <td><?php echo $row['tb_hk2'] ?></td>
          <td><?php echo $row['ca_nam'] ?></td>
          <td><?php echo $row['hocluc'] ?></td>
          <td><?php echo $row['namhoc'] ?></td>
          <!-- <td><a href='hocsinh/sua_hs.php?cmahs=<?php echo $row['MaHS'] ?>'><button class='btn btn-success'>Sửa</button></a></td>
          <td><a href='hocsinh/xoa_hs.php?cmahs=<?php echo $row['MaHS'] ?>' onclick='return XacNhan();'><button class='btn btn-danger'>Xóa</button></a></td> -->
        </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</body>

<script type="text/javascript">
  function XacNhan() {
    if (!window.confirm('Bạn có chắc không')) {
      return false;
    }
  }
</script>

</html>

<style>
  .ds-lop-container {
    display: flex;
  }
</style>

<script>
  var myTable = document.querySelector("#dataTable");
  var dataTable = new DataTable(myTable);
</script>
</body>