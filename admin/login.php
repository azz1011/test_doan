<?php
require '../classes/DB.class.php';
session_start();
$connect = new DB();
$con = $connect->connect();
if (isset($_POST['ok'])) {
	if ($_POST['txtuser'] == null) {
?>
		<script type="text/javascript">
			alert("Bạn Chưa Nhập Tên Tài Khoản.");
			window.location = "login.php";
		</script>
	<?php
		exit();
	} else {
		$u = $_POST['txtuser'];
	}
	if ($_POST['txtpass'] == null) {
	?>
		<script type="text/javascript">
			alert("Bạn Chưa Nhập Mật Khẩu.Vui lòng Nhập Mật Khẩu!");
			window.location = "login.php";
		</script>
		<?php
		exit();
	} else {
		$p = $_POST['txtpass'];
	}
	if ($u && $p) {

		//require("../includes/config.php");

		$query = "select * from user where username='$u' and password='$p'";
		$query1 = "select * from giaovien where Magv='$u' and passwordgv='$p'";
		$query2 = "select * from hocsinh where MaHS='$u' and passwordhs='$p'";
		$results = mysqli_query($con, $query);
		$results1 = mysqli_query($con, $query1);
		$results2 = mysqli_query($con, $query2);
		if ($numrows = mysqli_num_rows($results) == 1) {
		?>
		
<?php
			$data = mysqli_fetch_assoc($results);
			$_SESSION['ses_username'] = $data['username'];
			$_SESSION['ses_level'] = $data['level'];
			$_SESSION['ses_userid'] = $data['userid'];
			$_SESSION['password'] = $data['password'];
			header("location:index.php");
			exit();
		}
		if ($numrows = mysqli_num_rows($results1) == 1) {
			?>
				
	<?php
			
				$data = mysqli_fetch_assoc($results1);
			if ($data['status'] = '-1'){
				$query = "update giaovien set status ='1' where Magv='$u'";
				$results = mysqli_query($con, $query);
				header("location:changepassword.php");

			}
			if ($data['status'] = '1'){
				$_SESSION['ses_Magv'] = $data['Magv'];
				$_SESSION['ses_Tengv'] = $data['Tengv'];
				$_SESSION['ses_Quyenhan'] = $data['quyen_han'];
				$_SESSION['ses_passwordgv'] = $data['passwordgv'];
				header("location:qlgv.php");
				exit();
			}
		if ($numrows = mysqli_num_rows($results2) == 1) {
				?>
				
		<?php
				$data = mysqli_fetch_assoc($results2);
				$_SESSION['ses_MaHS'] = $data['MaHS'];
				$_SESSION['ses_TenHS'] = $data['TenHS'];
				$_SESSION['ses_passwordhs'] = $data['passwordhs'];
				header("location:qlhs.php");
				exit();
			}

}
}
}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>QUẢN TRỊ VIÊN</title>
	<link rel="shortcut icon" href="assets/ico/ico.ico" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
	<div class="body-container">
		<h1 style="text-align: center;">ĐĂNG NHẬP QUẢN TRỊ ACADEMY</h1>
		<form action="login.php" method="post">
			<div class="form-outline mb-4 form-floating">
				<input class="form-control" type="text" name="txtuser" placeholder="Tên tài khoản" id="floatingAdminName" required>
				<label for="floatingAdminName">Tên đăng nhập</label>
			</div>
			<div class="form-outline mb-4 form-floating">
				<input class="form-control" type="password" name="txtpass" placeholder="Mật Khẩu" id="floatingAdminPass" required>
				<label for="">Mật khẩu</label>
			</div>
			<button class="btn btn-primary btn-block form-control" type="submit" name="ok">Đăng nhập</button>
		</form>
	</div>
</body>

<style>
	.body-container {
		margin: 10% 30%;
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

</html>