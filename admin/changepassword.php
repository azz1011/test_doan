>
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Thay Đổi Mât Khẩu</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">


    <link rel="stylesheet" href="../../assets/css/css/style.css">


</head>

<body>
<div class="wrap">
    <div class="avatar">
        <img src="../../assets/img/images/gv.jpg">
    </div>
    <form action="doimatkhau.php" method="post">
        <input type="password" name="txtpassgv" placeholder="mật khẩu" required>
        <div class="bar">
            <i></i>
        </div>
        <input type="password" name="txtpassgv2" placeholder="mật khẩu mới" required>
        <div class="bar">
            <i></i>
        </div>
        <input type="password" name="txtpassgv3" placeholder="nhập lại mật khẩu mới" required>
        <a href="" class="forgot_link">forgot ?</a>
        <button><input type="submit" name="gv" value="Thay đổi" /></button>
    </form>
</div>

<script src="js/index.js"></script>

</body>
</html>