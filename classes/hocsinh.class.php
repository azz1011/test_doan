<?php
require 'DB.class.php';
class hocsinh extends DB
{
    function allhs($id)
    {
        $con = $this->connect();
        $sql = "select * from hocsinh where MaLopHoc='{$id}'";
        $query = mysqli_query($con, $sql);
        $result = array();
        if ($query) {
            while ($row = mysqli_fetch_assoc($query)) {
                $result[] = $row;
            }
        }
        return $result;
    }

    function allhs2($id)
    {
        $con = $this->connect();
        $sql = "select * from hocsinh where MaHS='{$id}'";
        $query = mysqli_query($con, $sql);
        $result = array();
        if ($query) {
            while ($row = mysqli_fetch_assoc($query)) {
                $result[] = $row;
            }
        }
        return $result;
    }

    function selecths($id)
    {
        $con = $this->connect();
        $mysql = "select * from hocsinh where MaHS='$id'";
        $query = mysqli_query($con, $mysql);
        $result = array();
        if (mysqli_num_rows($query) > 0) {
            $row = mysqli_fetch_assoc($query);
            $result = $row;
        }
        return $result;
    }
    function  add($id, $lop, $ten, $gt, $ngs, $ns, $dt, $htc, $htm, $pw)
    {
        $tacgia = "ADMIN";
        $date = strval(date('d-m-y h:i:s'));
        $tacvu = "THEM HOC SINH";
        $con = $this->connect();

        // them hoc sinh
        $sql_themhs = "INSERT INTO hocsinh(MaHS,MaLopHoc,TenHS,GioiTinh,NgaySinh,noisinh,dantoc,hotencha,hotenme,passwordhs)
        VALUES('$id','$lop','$ten','$gt','$ngs','$ns','$dt','$htc','$htm','$pw')";
        $query = mysqli_query($con, $sql_themhs);

        // Cap nhat truy vet lich su
        $sql_history = "INSERT INTO history (tacvu, tacgia, thoigian, doituong)
                    VALUES ('$tacvu', '$tacgia', '$date', '$id')";
        mysqli_query($con, $sql_history);

        return $query;
    }

    function edit($id, $lop, $ten, $gt, $ngs, $ns, $dt, $htc, $htm, $pw)
    {
        $con = $this->connect();
        $sql = "update hocsinh set
        MaLopHoc='$lop',
        TenHS='$ten',
        GioiTinh='$gt',  
        NgaySinh='$ngs',
        noisinh='$ns',
        dantoc='$dt',
        hotencha='$htc',
        hotenme='$htm',
        passwordhs='$pw',
        where MaHS='$id'";
        $query = mysqli_query($con, $sql);
        return $query;
    }

    function alllop()
    {
        $con = $this->connect();
        $sql = "select * from lophoc";
        $query = mysqli_query($con, $sql);
        $result = array();
        if ($query) {
            while ($row = mysqli_fetch_assoc($query)) {
                $result[] = $row;
            }
        }
        return $result;
    }

    function autoAddDiem($m, $malop)
    {
        $namhoc = (date("Y") - 1) . "-" . date("Y");
        $con = $this->connect();
        $sql1 = "INSERT INTO diem (MaDiem, MaHocKy, NamHoc, MaMonHoc, MaHS, MaLopHoc, DiemMieng, Diem15Phut1, Diem15Phut2, Diem1Tiet1, Diem1Tiet2, DiemThi, DiemTB) 
        VALUES (NULL, 'HK1', '$namhoc', 'TOAN', '$m', '$malop', '0', '0', '0', '0', '0', '0', '0')";
        $sql2 = "INSERT INTO diem (MaDiem, MaHocKy, NamHoc, MaMonHoc, MaHS, MaLopHoc, DiemMieng, Diem15Phut1, Diem15Phut2, Diem1Tiet1, Diem1Tiet2, DiemThi, DiemTB) 
        VALUES (NULL, 'HK1', '$namhoc', 'VAN', '$m', '$malop', '0', '0', '0', '0', '0', '0', '0')";
        $sql3 = "INSERT INTO diem (MaDiem, MaHocKy, NamHoc, MaMonHoc, MaHS, MaLopHoc, DiemMieng, Diem15Phut1, Diem15Phut2, Diem1Tiet1, Diem1Tiet2, DiemThi, DiemTB) 
        VALUES (NULL, 'HK1', '$namhoc', 'VL', '$m', '$malop', '0', '0', '0', '0', '0', '0', '0')";
        $sql4 = "INSERT INTO diem (MaDiem, MaHocKy,NamHoc, MaMonHoc, MaHS, MaLopHoc, DiemMieng, Diem15Phut1, Diem15Phut2, Diem1Tiet1, Diem1Tiet2, DiemThi, DiemTB) 
        VALUES (NULL, 'HK1', '$namhoc', 'TA', '$m', '$malop', '0', '0', '0', '0', '0', '0', '0')";
        $sql5 = "INSERT INTO diem (MaDiem, MaHocKy,NamHoc, MaMonHoc, MaHS, MaLopHoc, DiemMieng, Diem15Phut1, Diem15Phut2, Diem1Tiet1, Diem1Tiet2, DiemThi, DiemTB) 
        VALUES (NULL, 'HK1', '$namhoc', 'LS', '$m', '$malop', '0', '0', '0', '0', '0', '0', '0')";
        $sql6 = "INSERT INTO diem (MaDiem, MaHocKy, NamHoc, MaMonHoc, MaHS, MaLopHoc, DiemMieng, Diem15Phut1, Diem15Phut2, Diem1Tiet1, Diem1Tiet2, DiemThi, DiemTB) 
        VALUES (NULL, 'HK1', '$namhoc', 'IT', '$m', '$malop', '0', '0', '0', '0', '0', '0', '0')";
        $sql7 = "INSERT INTO diem (MaDiem, MaHocKy, NamHoc, MaMonHoc, MaHS, MaLopHoc, DiemMieng, Diem15Phut1, Diem15Phut2, Diem1Tiet1, Diem1Tiet2, DiemThi, DiemTB) 
        VALUES (NULL, 'HK1', '$namhoc', 'HH', '$m', '$malop', '0', '0', '0', '0', '0', '0', '0')";
        $sql8 = "INSERT INTO diem (MaDiem, MaHocKy, NamHoc, MaMonHoc, MaHS, MaLopHoc, DiemMieng, Diem15Phut1, Diem15Phut2, Diem1Tiet1, Diem1Tiet2, DiemThi, DiemTB) 
        VALUES (NULL, 'HK1', '$namhoc', 'GDCD', '$m', '$malop', '0', '0', '0', '0', '0', '0', '0')";
        $sql9 = "INSERT INTO diem (MaDiem, MaHocKy, NamHoc, MaMonHoc, MaHS, MaLopHoc, DiemMieng, Diem15Phut1, Diem15Phut2, Diem1Tiet1, Diem1Tiet2, DiemThi, DiemTB) 
        VALUES (NULL, 'HK1', '$namhoc', 'CN', '$m', '$malop', '0', '0', '0', '0', '0', '0', '0')";

        $sql10 = "INSERT INTO diem (MaDiem, MaHocKy,  NamHoc,MaMonHoc, MaHS, MaLopHoc, DiemMieng, Diem15Phut1, Diem15Phut2, Diem1Tiet1, Diem1Tiet2, DiemThi, DiemTB) 
        VALUES (NULL, 'HK2', '$namhoc','TOAN', '$m', '$malop', '0', '0', '0', '0', '0', '0', '0')";
        $sql11 = "INSERT INTO diem (MaDiem, MaHocKy,  NamHoc,MaMonHoc, MaHS, MaLopHoc, DiemMieng, Diem15Phut1, Diem15Phut2, Diem1Tiet1, Diem1Tiet2, DiemThi, DiemTB) 
        VALUES (NULL, 'HK2', '$namhoc','VAN', '$m', '$malop', '0', '0', '0', '0', '0', '0', '0')";
        $sql12 = "INSERT INTO diem (MaDiem, MaHocKy,  NamHoc,MaMonHoc, MaHS, MaLopHoc, DiemMieng, Diem15Phut1, Diem15Phut2, Diem1Tiet1, Diem1Tiet2, DiemThi, DiemTB) 
        VALUES (NULL, 'HK2','$namhoc', 'VL', '$m', '$malop', '0', '0', '0', '0', '0', '0', '0')";
        $sql13 = "INSERT INTO diem (MaDiem, MaHocKy,  NamHoc,MaMonHoc, MaHS, MaLopHoc, DiemMieng, Diem15Phut1, Diem15Phut2, Diem1Tiet1, Diem1Tiet2, DiemThi, DiemTB) 
        VALUES (NULL, 'HK2', '$namhoc','TA', '$m', '$malop', '0', '0', '0', '0', '0', '0', '0')";
        $sql14 = "INSERT INTO diem (MaDiem, MaHocKy,  NamHoc,MaMonHoc, MaHS, MaLopHoc, DiemMieng, Diem15Phut1, Diem15Phut2, Diem1Tiet1, Diem1Tiet2, DiemThi, DiemTB) 
        VALUES (NULL, 'HK2', '$namhoc','LS', '$m', '$malop', '0', '0', '0', '0', '0', '0', '0')";
        $sql15 = "INSERT INTO diem (MaDiem, MaHocKy,  NamHoc,MaMonHoc, MaHS, MaLopHoc, DiemMieng, Diem15Phut1, Diem15Phut2, Diem1Tiet1, Diem1Tiet2, DiemThi, DiemTB) 
        VALUES (NULL, 'HK2', '$namhoc','IT', '$m', '$malop', '0', '0', '0', '0', '0', '0', '0')";
        $sql16 = "INSERT INTO diem (MaDiem, MaHocKy,  NamHoc,MaMonHoc, MaHS, MaLopHoc, DiemMieng, Diem15Phut1, Diem15Phut2, Diem1Tiet1, Diem1Tiet2, DiemThi, DiemTB) 
        VALUES (NULL, 'HK2', '$namhoc','HH', '$m', '$malop', '0', '0', '0', '0', '0', '0', '0')";
        $sql17 = "INSERT INTO diem (MaDiem, MaHocKy, NamHoc, MaMonHoc, MaHS, MaLopHoc, DiemMieng, Diem15Phut1, Diem15Phut2, Diem1Tiet1, Diem1Tiet2, DiemThi, DiemTB) 
        VALUES (NULL, 'HK2','$namhoc', 'GDCD', '$m', '$malop', '0', '0', '0', '0', '0', '0', '0')";
        $sql18 = "INSERT INTO diem (MaDiem, MaHocKy, NamHoc, MaMonHoc, MaHS, MaLopHoc, DiemMieng, Diem15Phut1, Diem15Phut2, Diem1Tiet1, Diem1Tiet2, DiemThi, DiemTB) 
        VALUES (NULL, 'HK2','$namhoc', 'CN', '$m', '$malop', '0', '0', '0', '0', '0', '0', '0')";

        mysqli_query($con, $sql1);
        mysqli_query($con, $sql2);
        mysqli_query($con, $sql3);
        mysqli_query($con, $sql4);
        mysqli_query($con, $sql5);
        mysqli_query($con, $sql6);
        mysqli_query($con, $sql7);
        mysqli_query($con, $sql8);
        mysqli_query($con, $sql9);
        mysqli_query($con, $sql10);
        mysqli_query($con, $sql11);
        mysqli_query($con, $sql12);
        mysqli_query($con, $sql13);
        mysqli_query($con, $sql14);
        mysqli_query($con, $sql15);
        mysqli_query($con, $sql16);
        mysqli_query($con, $sql17);
        mysqli_query($con, $sql18);

        $sql = "INSERT INTO tongket (MaHS, khoi, namhoc)
                    VALUES('$m', '$malop', '$namhoc')";
        mysqli_query($con, $sql);
    }
}
