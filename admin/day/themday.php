<?php
session_start();
include('../genID.php');
$ma = $gv = $mon = $lop = $hk = $pc = "";
require "../../classes/day.class.php";
if (isset($_POST['ok'])) {
    $connect = new day();
    $d = $connect->allday();
    if ($_POST['txtid'] == null) {
        echo "</br>Bạn Chưa Nhập Mã Học Dạy";
    } else {
        $ma = $_POST['txtid'];
    }
    if ($_POST['txtgv'] == null) {
        echo "</br> Bạn Chưa Nhập Mã Giáo Viên";
    } else {
        $gv = $_POST['txtgv'];
    }
    if ($_POST['txtmh'] == null) {
        echo "</br> Bạn Chưa Nhập Mã Môn Học";
    } else {
        $mon = $_POST['txtmh'];
    }
    if ($_POST['txtlop'] == null) {
        echo "</br> Bạn Chưa Nhập Lớp Học";
    } else {
        $lop = $_POST['txtlop'];
    }
    if ($_POST['txthk'] == null) {
        echo "</br> Bạn Chưa Nhập Học Kỳ";
    } else {
        $hk = $_POST['txthk'];
    }
    if (isset($_POST['txtmota'])) {
        $pc = $_POST['txtmota'];
    }
    if ($ma && $gv && $hk && $lop && $pc && $mon) {
        $con = $connect->add($ma, $mon, $gv, $lop, $hk, $pc);
?>
        <script type="text/javascript">
            alert("Phân công giáo viên thành công");
            window.location = "../index.php?mod=day";
        </script>
<?php
        exit();
    }
}
?>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="body-container">
    <h1>PHÂN CÔNG DẠY</h1>
    <form action="themday.php" method="post">
        <table class="table">
            <div class="input-group mb-3" hidden>
                <span class="input-group-text">Mã phân công</span>
                <input class="form-control" type="text" name="txtid" size="25" value="<?php echo generate_id(5); ?>" />
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Giáo viên</span>
                <select class="form-select" name="txtgv">
                    <?php
                    $db = new DB();
                    $conn = $db->connect();
                    $query = "select * from giaovien where Magv='$_GET[magv]'";
                    $results = mysqli_query($conn, $query);
                    while ($data = mysqli_fetch_assoc($results)) {
                        echo "<option value='$data[Magv]'>$data[Tengv]</option>";
                        $di = $db->close();
                    }
                    ?>
                </select>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Môn học</span>
                <select class="form-select" name="txtmh">
                    <?php
                    $db = new DB();
                    $conn = $db->connect();
                    $query = "select * from monhoc where MaMonHoc = '$_GET[mamh]'";
                    $results = mysqli_query($conn, $query);
                    while ($data = mysqli_fetch_assoc($results)) {
                        echo "<option value='$data[MaMonHoc]'>$data[TenMonHoc]</option>";
                        $di = $db->close();
                    }
                    ?>
                </select>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Học kỳ</span>
                <select class="form-select" name="txthk">
                    <?php
                    $db = new DB();
                    $conn = $db->connect();
                    $query = "select * from hocky";
                    $results = mysqli_query($conn, $query);
                    while ($data = mysqli_fetch_assoc($results)) {
                        echo "<option value='$data[MaHocKy]'>$data[MaHocKy]</option>";
                        $di = $db->close();
                    }
                    ?>
                </select>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Lớp</span>
                <select class="form-select" name="txtlop">
                    <?php
                    $db = new DB();
                    $conn = $db->connect();
                    $query = "select * from lophoc";
                    $results = mysqli_query($conn, $query);
                    while ($data = mysqli_fetch_assoc($results)) {
                        echo "<option value='$data[MaLopHoc]'>$data[MaLopHoc]</option>";
                        $di = $db->close();
                    }
                    ?>
                </select>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Mô tả</span>
                <textarea class="form-control" type="text" name="txtmota" size="25" value="None"> </textarea>
            </div>
            <button class="btn btn-primary" type="submit" name="ok"> Phân công </button>
        </table>
    </form>
</body>

<style>
    .body-container {
        margin: 2% 30%;
    }

    span {
        width: 10em;
    }
</style>