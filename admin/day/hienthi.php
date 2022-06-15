<?php
require "../classes/day.class.php";
$con = new day();
$day = $con->allday();
?>
<script type="text/javascript">
    function XacNhan() {
        if (!window.confirm('Bạn có chắc không?')) {
            return false;
        }
    }
</script>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.css" rel="stylesheet" type="text/css">
    <script src="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.js" type="text/javascript"></script>
</head>

<body>
    <h1>Phân Công Dạy</h1>
    <table class="table table-striped" id="dataTable">
        <tr>
            <td>Mã Lịch Dạy</td>
            <td>Mã Giáo Viên</td>
            <td>Dạy Môn</td>
            <td>Mã Lớp Học</td>
            <td>Mã Học Kỳ</td>
            <td>Mô tả</td>
            <td>Sửa</td>
            <td></td>
            <td></td>
        </tr>
        <?php
        foreach ($day as $item) { ?>
            <tr>
                <td><?php echo $item['MaDayHoc']; ?></td>
                <td><?php echo $item['Magv']; ?></td>
                <td><?php echo $item['MaMonHoc']; ?></td>
                <td><?php echo $item['MaLopHoc']; ?></td>
                <td><?php echo $item['MaHocKy']; ?></td>
                <td><?php echo $item['MoTaPhanCong']; ?></td>
                <td><?php echo "<a href='#?id=$item[MaMonHoc]'><button class='btn btn-success' type='button'>Sửa</button></a>"; ?></td>
                <td> <?php echo "<a href='day/xoaday.php?id=$item[MaDayHoc]' onclick='return XacNhan();'><button class='btn btn-danger' type='button'>Xóa</button></a>"; ?>
                </td>
            </tr>
        <?php } ?>
        <br />
    </table>

    <script>
        var myTable = document.querySelector("#dataTable");
        var dataTable = new DataTable(myTable);
    </script>