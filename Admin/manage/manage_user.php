<?php
include "../../database/config.php";
// Lay va day du lieu

if (isset($_POST['add_user'])) {
    $username = $_POST['username'];
    $fullname = $_POST['fullname'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password);
    $sql_add = "INSERT INTO user(fullname,email,phone,address,username,password) VALUE ('" . $fullname . "','" . $email . "','" . $phone . "','" . $address . "','" . $username . "','" . $password . "')";
    mysqli_query($mysqli, $sql_add);
} elseif (isset($_POST['id_update'])) {
    $id = $_POST['id_update'];
    $sql_edit_user = "SELECT * FROM user WHERE id = $id LIMIT 1";
    $query_edit_user = mysqli_query($mysqli, $sql_edit_user);
    while ($dong = mysqli_fetch_array($query_edit_user)) {
?>
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Chỉnh sửa thông tin người dùng</h1>
            <button type="button" class="btn fs-5" data-bs-dismiss="modal"><i class="fas fa-times"></i></button>
        </div>
        <!-- Nội dung form chỉnh sửa -->
        <form action="../manage/manage_user.php" method="POST">
            <div class="modal-body">

                <div class="mb-3">
                    <label for="username" class="form-label">Tên người dùng:</label>
                    <input type="text" class="form-control" id="username" name="username" required value="<?php echo $dong['username'] ?>">
                </div>
                <div class="mb-3">
                    <label for="fullname" class="form-label">Họ và tên:</label>
                    <input type="text" class="form-control" id="fullname" name="fullname" required value="<?php echo $dong['fullname'] ?>">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Số điện thoại :</label>
                    <input type="tel" class="form-control" id="phone" name="phone" required value="<?php echo $dong['phone'] ?>">
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Địa chỉ :</label>
                    <input type="tel" class="form-control" id="address" name="address" required value="<?php echo $dong['address'] ?>">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required value="<?php echo $dong['email'] ?>">
                </div>

                <input type="hidden" name="id_user" value="<?php echo $id ?>">
                <div class=" modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Huỷ bỏ</button>
                    <button type="submit" name="user_update" class=" btn btn-success remove">Lưu</button>
                </div>
        </form>


<?php
    }
} elseif (isset($_POST['user_update'])) {
    $id_user = $_POST['id_user'];
    $username = trim($_POST['username']);
    $fullname = trim($_POST['fullname']);
    $phone = trim($_POST['phone']);
    $address = trim($_POST['address']);
    $email = trim($_POST['email']);
    $sql_update = "UPDATE user SET fullname='" . $fullname . "',email ='" . $email . "',phone='" . $phone . "',address='" . $address . "',username='" . $username . "' WHERE id='" . $id_user . "'";
    mysqli_query($mysqli, $sql_update);
    header('Location:../pages/user.php');
} elseif (isset($_GET['id_reset'])) {
    $id_user = $_GET['id_reset'];
    $sql_phone = "SELECT phone FROM user WHERE id = $id_user LIMIT 1";
    $query_phone = mysqli_query($mysqli, $sql_phone);
    $row = mysqli_fetch_array($query_phone);
    $pass = md5($row['phone']);
    $sql_update = "UPDATE user SET password ='" . $pass . "' WHERE id='" . $id_user . "'";
    mysqli_query($mysqli, $sql_update);
} elseif (isset($_GET['lockUserId'])) {
    $id_user = $_GET['lockUserId'];

    $sql_update = "UPDATE user SET is_block ='" . 0 . "' WHERE id='" . $id_user . "'";
    mysqli_query($mysqli, $sql_update);
} elseif (isset($_GET['UnlockUserId'])) {
    $id_user = $_GET['UnlockUserId'];
    $sql_update = "UPDATE user SET is_block ='" . 1 . "' WHERE id='" . $id_user . "'";
    mysqli_query($mysqli, $sql_update);
} else {
    $id = $_GET['id'];
    $sql_xoa = "DELETE FROM user WHERE id ='" . $id . "'";
    mysqli_query($mysqli, $sql_xoa);
}
