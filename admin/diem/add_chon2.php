<?php
session_start();
$ma_gv = $_SESSION['ses_Magv'];
$ten_gv = $_SESSION['ses_Tengv'];
$date = strval(date('d-m-y h:i:s'));
$tacvu = "THEM DIEM";
require "../../classes/DB.class.php";
$connect = new db();
$conn = $connect->connect();
?>

<head>
    <link rel="shortcut icon" href="assets/ico/ico.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Thêm điểm</title>
</head>

<body style="margin: 0 5.5em; border: 1px solid black; box-shadow: 5px 5px 10px;">
    <br>
    <h1>NHẬP ĐIỂM</h1>
    <form action="add_chon2.php" method="post">
        <div class="body-container">
            <label for="day">Danh sách Lớp</label>
            <select name="day" class="form-select">
                <?php
                $query = "SELECT * FROM day WHERE Magv='$ma_gv'";
                $results = mysqli_query($conn, $query);
                while ($data = mysqli_fetch_assoc($results)) {
                    echo "<option value='$data[MaLopHoc]'>$data[MaLopHoc]</option>";
                    $_SESSION['malop'] = $data['MaLopHoc'];
                }
                ?>
            </select>
            <label for="mon">Danh sách Môn</label>
            <select name="mon" class="form-select">
                <?php
                $query2 = "select * from giaovien where Magv='$ma_gv'";
                $results2 = mysqli_query($conn, $query2);
                while ($data2 = mysqli_fetch_assoc($results2)) {
                    echo "<option value='$data2[MaMonHoc]'>$data2[MaMonHoc]</option>";
                    $_SESSION['mamon'] = $data2['MaMonHoc'];
                }
                ?>

            </select>
            <label for="hk">Danh sách Học kỳ</label>
            <select name="hk" class="form-select">
                <?php
                $query3 = "select * from hocky";
                $results3 = mysqli_query($conn, $query3);
                while ($data3 = mysqli_fetch_assoc($results3)) {
                    echo "<option value='$data3[MaHocKy]'>$data3[MaHocKy]</option>";
                    $_SESSION['mahk'] = $data3['MaHocKy'];
                }
                ?>
            </select>
            <br>
            <div class="btn-container">
                <button class="btn btn-primary" type="button" onclick="window.location.href='http://localhost/qld/admin/qlgv.php?mod=hs'">Trở về</button>
                <button type="submit" class="btn btn-primary" name="add">Chọn thông tin</button>
            </div>
        </div>
    </form>

    <?php
    $dayhoc = $monhoc = $hk = "";
    if (isset($_POST['add'])) {
        $dayhoc = $_POST['day'];
        $monhoc = $_POST['mon'];
        $hk = $_POST['hk'];

        // Cap nhat truy vet lich su
        $sql_history = "INSERT INTO history (tacvu, tacgia, thoigian)
                                VALUES ('$tacvu', '$ten_gv', '$date')";
        mysqli_query($conn, $sql_history);

        if ($dayhoc && $monhoc && $hk) {
            //header('location:add_diem.php');
            // $ma=$lop=$hk=$mon=$mieng=$p1=$p2=$t1=$t2=$d="";
            if (isset($_POST['themdiem'])) {
                $query = "SELECT * FROM hocsinh";
                $results = mysqli_query($conn, $query);
                for ($i = 1; $i < ($row = mysqli_fetch_assoc($results)); $i++) {
                    //if ($row['MaLopHoc'] == $_POST['day']) {
                    $ma = $_POST["ma$i"];
                    $lop = $_POST["lop$i"];
                    $mon = $_POST["mon$i"];
                    $hk = $_POST["hk$i"];
                    $diem = "/^[0-1-2-3-4-5-6-7-8-9-10]$/";
                    if (preg_match($diem, $_POST["diem$i"])) {
                        $mieng = $_POST["diem$i"];
                    } else {
    ?>
                        <script type="text/javascript">
                            alert("Điểm Miệng không hợp lệ");
                            window.location = "add_diemhs.php";
                        </script>
                    <?php
                        exit();
                    }
                    $diem1 = "/^[0-1-2-3-4-5-6-7-8-9-10]$/";
                    if (preg_match($diem1, $_POST["diem1$i"])) {
                        $p1 = $_POST["diem1$i"];
                    } else {
                    ?>
                        <script type="text/javascript">
                            alert("Điểm 15 phút lần 1 không hợp lệ");
                            window.location = "add_diemhs.php";
                        </script>
                    <?php
                        exit();
                    }
                    $p22 = "/^[0-1-2-3-4-5-6-7-8-9-10]$/";
                    if (preg_match($p22, $_POST["diem2$i"])) {
                        $p2 = $_POST["diem2$i"];
                    } else {
                    ?>
                        <script type="text/javascript">
                            alert("Điểm 15 phút lần 2 không hợp lệ");
                            window.location = "add_diemhs.php";
                        </script>
                    <?php
                        exit();
                    }
                    $t11 = "/^[0-1-2-3-4-5-6-7-8-9-10]$/";
                    if (preg_match($t11, $_POST["diem3$i"])) {
                        $t11 = $_POST["diem3$i"];
                    } else {
                    ?>
                        <script type="text/javascript">
                            alert("Điểm 45 phút lần không hợp lệ");
                            window.location = "add_diemhs.php";
                        </script>
                    <?php
                        exit();
                    }
                    $t22 = "/^[0-1-2-3-4-5-6-7-8-9-10]$/";
                    if (preg_match($t22, $_POST["diem4$i"])) {
                        $t2 = $_POST["diem4$i"];
                    } else {
                    ?>
                        <script type="text/javascript">
                            alert("Điểm 45 phút lần 2 không hợp lệ");
                            window.location = "add_diemhs.php";
                        </script>
                    <?php
                        exit();
                    }
                    $dt = "/^[0-1-2-3-4-5-6-7-8-9-10]$/";
                    if (preg_match($dt, $_POST["diem5$i"])) {
                        $d = $_POST["diem5$i"];
                    } else {

                    ?>
                        <script type="text/javascript">
                            alert("Điểm Thi không hợp lệ");
                            window.location = "add_diemhs.php";
                        </script>

        <?php
                        exit();
                    }

                    $tinh = 0;
                    $tinh = ($mieng + $p1 + $p2 + ($t1 + $t2) * 2 + $d * 3) / 9;

                    // $tb = $_POST["diem6$i"];

                    $sql = "insert into diem(MaHocKy,MaMonHoc,MaHS,MaLopHoc,DiemMieng,Diem15Phut1,Diem15Phut2,Diem1Tiet1,Diem1Tiet2,DiemThi,DiemTB )
 							values('" . $hk . "','" . $mon . "','" . $ma . "','" . $lop . "','" . $mieng . "','" . $p1 . "','" . $p2 . "','" . $t1 . "','" . $t2 . "','" . $d . "','" . $tinh . "')";
                    $results1 = mysqli_query($conn, $sql);
                    header('location:add_diemhs.php');

                    //}
                }
            }
        }
        ?>
        <div id="info-container">
            <table>
                <tr>
                    <td class="info-name"> Lớp </td>
                    <td class="info-space-between"></td>
                    <td> <?php echo $_POST['day'] ?> </td>
                </tr>
                <tr>
                    <td class="info-name"> Môn </td>
                    <td class="info-space-between"></td>
                    <td> <?php echo $_POST['mon'] ?> </td>
                </tr>
                <tr>
                    <td class="info-name"> Học kỳ </td>
                    <td class="info-space-between"></td>
                    <td> <?php echo $_POST['hk'] ?> </td>
                </tr>
            </table>
        </div>
        <br>
        <div id="grade-table">
            <table class="table table-striped" style="width: 100%;">
                <tr style="font-weight: bold">
                    <td>Mã HS</td>
                    <td>Tên học sinh</td>
                    <td>Lớp</td>
                    <td>Môn</td>
                    <td>Học Kỳ</td>
                    <td>Điểm Miệng</td>
                    <td>15 phút</td>
                    <td>15 phút</td>
                    <td>1 Tiết</td>
                    <td>1 Tiết</td>
                    <td>Điểm Thi</td>
                </tr>
                <?php
                $query = "SELECT * FROM hocsinh";
                $results = mysqli_query($conn, $query);
                ?>
                <form method="POST" action="add_diemhs.php  ">
                    <?php
                    for ($i = 1; $i <= ($row = mysqli_fetch_assoc($results)); $i++) {
                        if ($row['MaLopHoc'] == $_POST['day']) {
                    ?>
                            <td><input class="form-control" style="width:90px" type="text" name="ma<?php echo $i; ?>" value="<?php echo "$row[MaHS]"; ?>" readonly="readonly" /></td>
                            <td><input class="form-control" style="width:200px" type="text" name="ten<?php echo $i; ?>" value="<?php echo "$row[TenHS]"; ?>" readonly="readonly" /></td>
                            <td><input class="form-control" style="width:70px" type="text" name="lop<?php echo $i; ?>" value="<?php echo $_POST['day'] ?>" readonly="readonly" /></td>
                            <td><input class="form-control" style="width:90px" type="text" name="mon<?php echo $i; ?>" value="<?php echo $_POST['mon'] ?>" readonly="readonly" /></td>
                            <td><input class="form-control" style="width:100px" type="text" name="hk<?php echo $i; ?>" value="<?php echo $_POST['hk'] ?>" readonly="readonly" /></td>
                            <td><input class="form-control" class="form-control" style="width:100px" type="number" name="diem<?php echo $i; ?>" min="0" max="10" /></td>
                            <td><input class="form-control" style="width:100px" type="number" name="diem1<?php echo $i; ?>" min="0" max="10" /></td>
                            <td><input class="form-control" style="width:100px" type="number" name="diem2<?php echo $i; ?>" min="0" max="10" /></td>
                            <td><input class="form-control" style="width:100px" type="number" name="diem3<?php echo $i; ?>" min="0" max="10" /></td>
                            <td><input class="form-control" style="width:100px" type="number" name="diem4<?php echo $i; ?>" min="0" max="10" /></td>
                            <td><input class="form-control" style="width:100px" type="number" name="diem5<?php echo $i; ?>" min="0" max="10" /></td>
                            </tr>
                    <?php

                        }
                    } ?>
                    <div class="btn-container">
                        <button class="btn btn-primary" name="themdiem" type="submit">Thêm điểm</button>
                    </div>
                </form>
            </table>
        </div>
    <?php
    }
    ?>

    <!-- excel -->
    <?php
    // require_once('D:/school/tools/xampp/htdocs/qld/classesPHPExcel/PHPExcel.php');
    // if (isset($_POST['upload']) ? count($_POST['upload']) : 0) {
    //     $file = $_FILES['file']['tmp_name'];
    // }
    ?>

</body>

<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>

<style>
    .body-container {
        margin: 2% 30%;
        border: 1px solid black;
        border-radius: 0.4em;
        box-shadow: 5px 5px 10px;
        padding: 1em;
    }

    h1 {
        text-align: center;
    }

    span {
        width: 10em;
    }

    ma_gv {
        text-decoration: none;
        color: white;
    }

    #info-container {
        display: flex;
        justify-content: center;
        border-radius: 0.4em;
        box-shadow: 5px 5px 10px;
        margin: 0 30%;
        padding: 1em;
    }

    #info-container table td {
        font-weight: bold;
    }

    .info-name {
        text-align: right;
    }

    .info-space-between {
        width: 2em;
    }

    .btn-container {
        display: flex;
        justify-content: space-evenly;
        margin-bottom: 1em;
    }

    label {
        font-weight: bold;
    }

    .excel-container {
        float: right;
        margin-bottom: 1em;

    }

    .excel-container input {
        width: 13em;
    }
</style>