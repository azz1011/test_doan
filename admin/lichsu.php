<?php
require "../includes/config.php";
?>

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.css" rel="stylesheet" type="text/css">
  <script src="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.js" type="text/javascript"></script>
</head>

<h1>Truy vết</h1>
<table class="table table-striped" id="dataTable">
  <thead>
    <tr>
      <td>STT</td>
      <td>Tác vụ</td>
      <td>Tác giả</td>
      <td>Thời gian</td>
      <td>Đối tượng</td>
    </tr>
  </thead>
  <tbody>
    <?php
    require "../classes/lichsu.class.php";
    $connection = new lichsu();
    $con = $connection->allquery();
    $stt = 0;
    foreach ($con as $row) {
      $stt++; ?>
      <tr>
        <td><?php echo $stt ?></td>
        <td><?php echo $row['tacvu'] ?></td>
        <td><?php echo $row['tacgia'] ?> </td>
        <td><?php echo $row['thoigian'] ?></td>
        <td><?php echo $row['doituong'] ?> </td>
      </tr>
    <?php
    }
    ?>
  </tbody>
</table>

<script>
  var myTable = document.querySelector("#dataTable");
  var dataTable = new DataTable(myTable);
</script>