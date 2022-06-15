<?php
define('ROOT', dirname(__FILE__));
include "../includes/function.php";
session_start();
if ($_SESSION['ses_level'] != 1) {
    header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/ico/ico.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.css" rel="stylesheet" type="text/css">
    <script src="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.js" type="text/javascript"></script>
    <title>Quản trị</title>
</head>

<body style="background-color: rgb(243,244,254);">
    <nav id="navbar_top" class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">Academy</a>
            <div class="collapse navbar-collapse" id="main_nav">
            </div>
        </div>
    </nav>
    <div class="modal-body row">

        <!-- left workplace -->
        <div class="col-md-2 container border border-2" id="left-panel" style="height: 100%; background-color: white;">
            <div class="left-title">
                <h5>Công cụ Admin</h5>
            </div>
            <div class="left-panel-item"><a href="index.php?mod=hs"><button style="width: 100%;" class="btn btn-primary">Quản Lý Học Sinh</button></a></div>
            <div class="left-panel-item"><a href="index.php?mod=gv"><button style="width: 100%;" class="btn btn-primary">Quản Lý Giáo Viên</button></a></div>
            <div class="left-panel-item"><a href="index.php?mod=mh"><button style="width: 100%;" class="btn btn-primary">Quản Lý Môn Học</button></a></div>
            <div class="left-panel-item"><a href="index.php?mod=diem"><button style="width: 100%;" class="btn btn-primary">Quản Lý Điểm</button></a></div>
            <div hidden class="left-panel-item"><a href="index.php?mod=hk"><button style="width: 100%;" class="btn btn-primary">Quản Lý Học Kỳ</button></a></div>
            <div class="left-panel-item"><a href="index.php?mod=lop"><button style="width: 100%;" class="btn btn-primary">Quản Lý Lớp</button></a></div>
            <div class="left-panel-item"><a href="index.php?mod=day"><button style="width: 100%;" class="btn btn-primary">Lịch Dạy</button></a></div>
            <div class="left-panel-item"><a href="index.php?mod=hethong"><button style="width: 100%;" class="btn btn-primary">Hệ Thống</button></a></div>
            <div class="left-panel-item"><a href="index.php?mod=capnhat"><button style="width: 100%;" class="btn btn-primary">Cài Đặt</button></a></div>
            <div class="left-panel-item"><a href="index.php?mod=lichsu"><button style="width: 100%;" class="btn btn-primary">Lịch Sử</button></a></div>
            <div class="left-panel-item"><a href="index.php?mod=tongket"><button style="width: 100%;" class="btn btn-primary">Tổng kết</button></a></div>
            <div class="left-panel-item"><a href="index.php?mod=dangxuat"><button style="width: 100%;" class="btn btn-primary">Đăng Xuất</button></a></div>
        </div>

        <!-- right workplace -->
        <div class="col-md-10 border border-2 p-3" style="background-color: white;">
            <?php include "mod.php"; ?>
        </div>
    </div>

</body>

</html>

<style>
    body {
        padding: 0 4em;
    }

    #left-panel {
        background-color: rgb(247, 247, 247);
        padding: 1em 0.5em;
        margin: 0;
        height: 100%;
    }

    .mhs {
        text-align: center;
    }

    .left-panel-item {
        padding: 0.5em;
    }

    a {
        text-decoration: none;
    }

    .left-title {
        text-align: center;
    }
</style>