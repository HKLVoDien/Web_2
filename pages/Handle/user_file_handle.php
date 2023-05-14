<?php
session_start();
include('../../database/config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['new_fullname'])) {
    $newFullname = $_POST['new_fullname'];

    // Cập nhật thông tin full name trong cơ sở dữ liệu
    $updateQuery = "UPDATE user SET fullname = '$newFullname' WHERE id = '$_SESSION[id_customer]'";
    $result = mysqli_query($mysqli, $updateQuery);

    header('Location: ../../index.php?quanly=user_file');
}
?>
