<?php
require "../../classes/DB.class.php";
$connect = new db();
$conn = $connect->connect();
session_start();
?>

<body>
    <?php
    if (isset($_POST['themdiem'])) {
        $ma2 = $_POST['madiem'];
        $ma = $_POST['ma'];
        $lop = $_POST['lop'];
        $mon = $_POST['mon'];
        $hk = $_POST['hk'];

        $mieng = $_POST['diem'];
        $p1 = $_POST['diem1'];
        $p2 = $_POST['diem2'];
        $t1 = $_POST['diem3'];
        $t2 = $_POST['diem4'];
        $d = $_POST['diem5'];
        $tb = $_POST['diem6'];
        $query = "select * from diem";
        $results = mysqli_query($conn, $query);
        for ($i = 0; $i < ($row = mysqli_fetch_assoc($results)); $i++) {
            $tinh[$i] = round((($mieng[$i] + $p1[$i] + $p2[$i] + ($t1[$i] + $t2[$i]) * 2 + $d[$i] * 3) / 9), 2);
            $sql = "UPDATE diem SET 
                MaHocKy='$hk[$i]',
                MaMonHoc='$mon[$i]',
                MaHS='$ma[$i]',
                MaLopHoc='$lop[$i]',
                DiemMieng='$mieng[$i]',
                Diem15Phut1='$p1[$i]',
                Diem15Phut2='$p2[$i]',
                Diem1Tiet1='$t1[$i]',
                Diem1Tiet2='$t2[$i]',
                DiemThi='$d[$i]',
                DiemTB='$tinh[$i]' 
                WHERE MaDiem=" . $ma2[$i];
            mysqli_query($conn, $sql);
    ?>
            <script type="text/javascript">
                alert("Cập Nhật Điểm Thành Công")
                window.location = "../qlgv.php?mod=hs";
            </script>
    <?php
        }
    }
    ?>
    <table>
        <tr>
            <td></td>
            <td>Mã Học Sinh</td>
            <td>Tên Học Sinh</td>
            <td>Lớp</td>
            <td>Môn Học</td>
            <td>Học Kỳ</td>
            <td>Điểm Miệng</td>
            <td>Điểm 15 phút</td>
            <td>Điểm 15 phút</td>
            <td>Điểm 1 Tiết</td>
            <td>Điểm 1 Tiết</td>
            <td>Điểm Thi</td>
            <td>Điểm TB</td>
        </tr>
        <?php
        $query = "SELECT * FROM diem,hocsinh WHERE diem.MaHS=hocsinh.MaHS";
        $results = mysqli_query($conn, $query);
        ?>
        <form action="capnhatdiem2.php" method="post">
            <hr>
            <div>
                <div> Lớp <?php echo $_POST['day'] ?></div>
                <div> Môn<?php echo $_POST['mon'] ?></div>
                <div> Học kỳ<?php echo $_POST['hk'] ?></div>
            </div>
            <hr>
            <div>
                <div style="text-align: right;float: left">
                    <a href="../qlgv.php"><button type='button'>Trở Về</button></a>
                </div>
                <div style="text-align: right">
                    <input type="submit" name="themdiem" value="Thêm Điểm" />
                </div>
            </div>
            <hr>
            <?php
            for ($i = 1; $i <= ($row = mysqli_fetch_assoc($results)); $i++) {
                if ($row['MaLopHoc'] == $_POST['day'] && $row['MaMonHoc'] == $_POST['mon'] && $row['MaHocKy'] == $_POST['hk']) {
                    echo "<tr>"; ?>
                    <td><input style="width:90px" type="hidden" name="madiem[] ?>" value="<?php echo "$row[MaDiem]"; ?>" readonly="readonly" /></td>
                    <td><input style="width:90px" type="text" name="ma[] ?>" value="<?php echo "$row[MaHS]"; ?>" readonly="readonly" /></td>
                    <td><input style="width:200px" type="text" name="ten[] ?>" value="<?php echo "$row[TenHS]"; ?>" readonly="readonly" /></td>
                    <td><input style="width:70px" type="text" name="lop[] ?>" value="<?php echo $_POST['day'] ?>" readonly="readonly" /></td>
                    <td><input style="width:90px" type="text" name="mon[] ?>" value="<?php echo "$row[MaMonHoc]" ?>" readonly="readonly" /></td>
                    <td><input style="width:100px" type="text" name="hk[]" value="<?php echo "$row[MaHocKy]" ?>" readonly="readonly" /></td>
                    <td><input style="width:100px" type="text" name="diem[]" value="<?php echo "$row[DiemMieng]"; ?>" /></td>
                    <td><input style="width:100px" type="text" name="diem1[]" value="<?php echo "$row[Diem15Phut1]"; ?>" /></td>
                    <td><input style="width:100px" type="text" name="diem2[] ?>" value="<?php echo "$row[Diem15Phut2]"; ?>" /></td>
                    <td><input style="width:100px" type="text" name="diem3[]?>" value="<?php echo "$row[Diem1Tiet1]"; ?>" /></td>
                    <td><input style="width:100px" type="text" name="diem4[] ?>" value="<?php echo "$row[Diem1Tiet2]"; ?>" /></td>
                    <td><input style="width:100px" type="text" name="diem5[]?>" value="<?php echo "$row[DiemThi]"; ?>" /></td>
                    <td><input style="width:100px" type="text" name="diem6[] ?>" readonly="readonly" /></td>

                    </tr>
            <?php
                }
            } ?>
        </form>
    </table>
    <hr>
</body>