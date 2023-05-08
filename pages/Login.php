<link rel="stylesheet" href="./css/styleLogin.css" />
<?php
session_start();
?>
<div class="login">
	<form action="" class="seou--login" method="POST">
		<div class="container--Login">
			<div class="seoul__logo"><img src="./img/img_index/logoseoul.jpg" alt=""></div>
			<h1>Đăng nhập</h1>
			<div class="form-control">
				<input type="text" id="username" name="username" placeholder="Tên đăng nhập" />
				<span></span>
				<small></small>
			</div>
			<div class="form-control">
				<input type="password" id="password" name="password" placeholder="Mật khẩu" />
				<span></span>
				<small></small>
			</div>
			<div class="Forgotpassword">
				<div class="RemenberPassword">
					<input type="checkbox" id="content">
					<label for="content">Ghi nhớ mật khẩu</label><br>
				</div>
				<a href="forgotpassword.php">Quên mật khẩu</a>
			</div>
			<button type="submit" class="button-submit" name="login">ĐĂNG NHẬP </button>
			<div class="signup-link">Bạn mới biết đến SEOUL? <a href="index.php?quanly=signup">Đăng ký ngay</a></div>
		</div>
	</form>
</div>
<?php
if (isset($_POST['login'])) {
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$sql = "SELECT * FROM user WHERE username='" . $username . "' AND password='" . $password . "' LIMIT 1";
	$row = mysqli_query($mysqli, $sql);
	$count = mysqli_num_rows($row);
	if ($count > 0) {
		$row_data = mysqli_fetch_array($row);
		$_SESSION['username'] = $row_data['username'];
		$_SESSION['phone'] = $row_data['phone'];
		$_SESSION['id_customer'] = mysqli_insert_id($mysqli);
?>
		<div class="modalSuccess active">
			<div class="modal_inner">
				<div class="modal_header">
					<div class="icon_success">
						<i class="far fa-check-circle"></i>
					</div>
				</div>
				<div class="modal_body">
					<h4>Tuyệt vời!</h4>
					<p>Tài khoản của bạn đã đăng nhập thành công.</p>
				</div>
				<div class="modal_footer">
					<button class="btn_success">
						<a href="./index.php">Bắt đầu khám phá thôi</a>
					</button>
				</div>
			</div>
		</div>
	<?php
	} else {
	?><div class="modalfail activefail">
			<div class="modal_innerfail">
				<div class="modal_headerfail">
					<div class="iconfail">
						<i class="far fa-times-circle"></i>
					</div>
				</div>
				<div class="modal_bodyfail">
					<h4>Xin lỗi!</h4>
					<p>Bạn đã nhập sai mật khẩu.</p>
				</div>
				<div class="modal_footerfail">
					<button class="btnfail">
						<a href="./index.php?quanly=login">Mời bạn đăng nhập lại</a>
					</button>
				</div>
			</div>
		</div><?php
			}
		}
				?>


<div class="modalNoExist">
	<div class="modal_innerNoExist">
		<div class="modal_headerNoExist">
			<div class="iconNoExist">

			</div>
		</div>
		<div class="modal_bodyNoExist">
			<h4>Xin lỗi!</h4>
			<p>Tài khoản của bạn không tồn tại</p>
		</div>
		<div class="modal_footerNoExist">
			<button class="btnNoExist">
				<a href="./SignUp.html">Đăng kí ngay</a>
			</button>
		</div>
	</div>
</div>
<!-- <script src="../js/appLogin.js"></script> -->
</body>

</html>