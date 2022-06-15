<?php
require "DB.class.php";
class day extends DB
{
    function allday()
    {
        $con = $this->connect();
        $sql = "select * from day";
        $query = mysqli_query($con, $sql);
        $result = array();
        if ($query) {
            while ($row = mysqli_fetch_assoc($query)) {
                $result[] = $row;
            }
        }
        return $result;
    }
    function selectday($id)
    {
        $con = $this->connect();
        $sql = "select * from day where MaDayHoc='$id'";
        $query = mysqli_query($con, $sql);
        $result = array();
        if (mysqli_num_rows($query) > 0) {
            $row = $query;
            $result = $row;
        }
        return $result;
    }

    function add($id, $mon, $gv, $lop, $hk, $mota)
    {
        $tacgia = "ADMIN";
        $date = strval(date('d-m-y h:i:s'));
        $tacvu = "PHAN CONG GIAO VIEN";
        $con = $this->connect();
        $sql = "INSERT INTO `day`(`MaDayHoc`, `MaMonHoc`, `Magv`, `MaLopHoc`, `MaHocKy`, `MoTaPhanCong`) VALUES ('$id','$mon','$gv','$lop','$hk','$mota')";
        $query = mysqli_query($con, $sql);

        // Cap nhat truy vet lich su
        $sql_history = "INSERT INTO history (tacvu, tacgia, thoigian, doituong)
                        VALUES ('$tacvu', '$tacgia', '$date', '$gv')";
        mysqli_query($con, $sql_history);

        return $query;
    }
}
