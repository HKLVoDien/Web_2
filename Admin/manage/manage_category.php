<?php
include "../../database/config.php";
// Lay va day du lieu

if (isset($_POST['creat_category'])) {
    $tendanhmuc = $_POST['namecategory'];
    $sql_them = "INSERT INTO category(name) VALUE ('" . $tendanhmuc . "')";
    mysqli_query($mysqli, $sql_them);
    header('Location:../pages/category.php');
}
//Lệnh lấy id và xuất thông tin của danh mục cần sửa
elseif (isset($_POST['id_update'])) {
    $id = $_POST['id_update'];
    $sql_sua_danhmucsp = "SELECT * FROM category WHERE id = $id LIMIT 1";
    $query_sua_danhmucsp = mysqli_query($mysqli, $sql_sua_danhmucsp);
    while ($dong = mysqli_fetch_array($query_sua_danhmucsp)) {
?>
        <form action="../manage/manage_category.php" method="POST">
            <div class="modal-body">
                <div class="row">
                    <div class="form-group col-md-12">
                        <span class="thong-tin-thanh-toan">
                            <h5>Chỉnh sửa thông tin danh mục</h5>
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label class="control-label">Tên danh mục</label>
                        <input class="form-control" type="text" required value="<?php echo $dong['name'] ?>" name="update_tendanhmuc">
                    </div>
                </div>
                <BR>
                <input type="hidden" name="id_category" value="<?php echo $id ?>">
                <button class="btn btn-success" type="submit" name="update_category">Lưu lại</button>
                <a class="btn btn-danger" data-bs-dismiss="modal" href="#">Hủy bỏ</a>
                <BR>
            </div>
        </form>
<?php
    }
}
//Thực hiện sửa thông tin danh mục nếu đồng ý
elseif (isset($_POST['update_category'])) {
    //sua
    $id_category = trim($_POST['id_category']);
    $tendanhmuc = trim($_POST['update_tendanhmuc']);
    $sql_update = "UPDATE category SET name='".$tendanhmuc."' WHERE id='".$id_category."'";
    mysqli_query($mysqli, $sql_update);

    header('Location:../pages/category.php');
} else {
    $id = $_GET['id'];
    $sql_xoa = "DELETE FROM category WHERE id ='" . $id . "'";
    mysqli_query($mysqli, $sql_xoa);
    header('Location:../pages/category.php');
}
