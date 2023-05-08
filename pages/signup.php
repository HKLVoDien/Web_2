<link rel="stylesheet" href="./css/styleSignUp.css" />

<form action="./pages/Handle/signup_handle.php" class="signup" method="POST">
	<div class="container--singnup">
		<div class="seoul__logo"><img src="../img/img_index/logoseoul.jpg" alt=""></div>
		<h1>Đăng ký</h1>
		<div class="form-control">
			<input type="text" id="username" name="username" placeholder="Tên đăng nhập" />
			<span></span>
			<small></small>
		</div>
		<div class="form-control">
			<input type="address" id="address" name="address" placeholder="Địa chỉ" />
			<span></span>
			<small></small>
		</div>
		<div class="form-control">
			<input type="phone" name="phone" id="phone" placeholder="Số điện thoại" />
			<span></span>
			<small></small>
		</div>
		<div class="form-control">
			<input type="password" id="password" name="password" placeholder="Mật khẩu" />
			<span></span>
			<small></small>
		</div>
		<div class="form-control">
			<input type="password" id="password-confirm" placeholder="Xác nhận mật khẩu" />
			<span></span>
			<small></small>
		</div>
		<button type="submit" class="button-submit" name="signup">ĐĂNG KÝ</button>
		<div class="signup-link">Bạn đã có tài khoản? <a href="./index.php?quanly=login">Đăng nhập ngay</a></div>
	</div>
</form>

<div class="modal--seoul ">
	<div class="modal_inner">
		<div class="modal_header">
			<div class="icon_success">
				<i class="far fa-check-circle"></i>
			</div>
		</div>
		<div class="modal_body">
			<h4 class="mt-5">Đăng kí thành công!</h4>
		</div>
		<div class="modal_footer">
			<button class="btn_success">
				<a>Đăng nhập ngay nào</a>
			</button>
		</div>
	</div>
</div>
<script src="./js/appSignUp.js"></script>

</body>

</html>