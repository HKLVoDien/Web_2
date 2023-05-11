<?php
session_start();
include '../../database/config.php';

if (isset($_POST['username'])&&isset($_POST['phone'])&&isset($_POST['password'])&&isset($_POST['email'])) {
	echo '<p style="color:green">Bạn đã đăng ký thành công</p>';
	$username = $_POST['username'];
	$phone = $_POST['phone'];
	$password =md5( $_POST['password']);
	$email = $_POST['email'];
	$sql_info = "INSERT INTO user(email,phone,username,password) VALUE('" . $email . "','" . $phone . "','" . $username . "','" . $password . "')";
	$sql_signin = mysqli_query($mysqli, $sql_info);
	if ($sql_signin) {
		// echo '<p style="color:green">Bạn đã đăng ký thành công</p>';
		// $_SESSION['username'] = $username;
		// $_SESSION['phone'] = $phone;
		// $_SESSION['id_customer'] = mysqli_insert_id($mysqli);
		header('Location:../../index.php?quanly=login'); 
 
	}
}
