<?php
session_start();
require "../../classes/monhoc.class.php";
$con = new monhoc();
$connect = new db();
$conn = $connect->connect();
$id = $_GET['id'];

$tacgia = "ADMIN";
$date = strval(date('d-m-y h:i:s'));
$tacvu = "SUA MON HOC";

if (isset($_POST['edit_mon'])) {
    // Lay data
    $data['TenMonHoc'] = isset($_POST['name']) ? $_POST['name'] : '';
    $data['MaMonHoc'] = isset($_POST['id']) ? $_POST['id'] : '';
    $errors = array();
    if (empty($data['TenMonHoc'])) {
        $errors['TenMonHoc'] = 'Chưa nhập tên môn học';
    }
    if (empty($data['MaMonHoc'])) {
        $errors['MaMonHoc'] = 'Chưa nhập mã môn học';
    }
    // Neu ko co loi thi insert
    if (!$errors) {
        $mon = $con->edit($data['MaMonHoc'], $data['TenMonHoc']);
        // Cap nhat truy vet lich su
        $sql_history = "INSERT INTO history (tacvu, tacgia, thoigian, doituong)
                    VALUES ('$tacvu', '$tacgia', '$date', '$_POST[name]')";
        mysqli_query($conn, $sql_history);
        // Trở về trang danh sách
        header("location:../index.php?mod=mh");
    }
}
?>
<?php
$data = $con->selectmon($id);
?>
<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="body-container">
    <h1>Sửa Môn Học </h1>
    <form method="post" action="suamon.php?id=<?php echo $data['MaMonHoc']; ?>">
        <table class="table">
            <div class="input-group mb-3">
                <span class="input-group-text">Mã Môn Học</span>
                <input class="form-control" type="text" name="id" value="<?php echo $data['MaMonHoc']; ?>" />
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Tên Môn Học</span>
                <input class="form-control" type="text" name="name" value="<?php echo $data['TenMonHoc']; ?>" />
                <?php if (!empty($errors['TenMonHoc'])) echo $errors['TenMonHoc']; ?>
            </div>
            <button class="btn btn-primary" type="submit" name="edit_mon"> Lưu thay đổi </button>
        </table>
    </form>
</body>

</html>

<style>
    .body-container {
        margin: 2% 30%;
        border: 1px solid black;
        border-radius: 0.4em;
        box-shadow: 5px 5px 10px;
        padding: 1em;
    }

    span {
        width: 10em;
    }

    a {
        text-decoration: none;
        color: white;
    }
</style>