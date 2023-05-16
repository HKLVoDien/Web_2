<?php
include "../../database/config.php";

if (isset($_POST['add_product'])) {
    // Lay va day du lieu
    $tensanpham = $_POST['product_name'];
    $masp = $_POST['product_code'];
    $giasp = $_POST['price'];
    //xuly hinh anh cua product
    $hinhanh = $_FILES['img_file_small']['name'];
    $hinhanh_tmp = $_FILES['img_file_small']['tmp_name'];
    $hinhanh = time() . '_' . $hinhanh;
    //xuly hinh anh cua gallery product
    $hinhanh_gallery = $_FILES['img_file']['name'];
    $hinhanh_tmp_gallery = $_FILES['img_file']['tmp_name'];
    $hinhanh_gallery = time() . '_' . $hinhanh_gallery;
    //
    $noidung = $_POST['description'];
    $tinhtrang = $_POST['status'];
    $danhmuc = $_POST['category'];
    $datetime = new DateTime();
    $datetime_str = $datetime->format('Y-m-d H:i:s');
    //them
    $sql_them = "INSERT INTO product(product_code,category_id ,product_name,price,thumbnail,description,created_at,status) VALUE('" . $masp . "','" . $danhmuc . "','" . $tensanpham . "','" . $giasp . "','" . $hinhanh . "','" . $noidung . "','" . $datetime_str . "','" . $tinhtrang . "')";
    mysqli_query($mysqli, $sql_them);
    //Lưu hình ảnh vào folder
    move_uploaded_file($hinhanh_tmp, '../img/upload/img_product/' . $hinhanh);
    // Lấy id của sản phẩm vừa thêm vào
    $product_id = mysqli_insert_id($mysqli);
    // Lưu các hình ảnh vào bảng Gallery
    $sql = "INSERT INTO gallery(product_id, thumbnail) 
          VALUES ($product_id, '$hinhanh_gallery')";
    mysqli_query($mysqli, $sql);
    move_uploaded_file($hinhanh_tmp_gallery, '../img/upload/img_product_gallery/' . $hinhanh_gallery);
    header('Location:../pages/all-product.php');
} elseif (isset($_POST['id_update'])) {
    $id = $_POST['id_update'];
    $sql_sua_sp = "SELECT * FROM product WHERE id = $id LIMIT 1";
    $query_sua_sp = mysqli_query($mysqli, $sql_sua_sp);
    while ($dong = mysqli_fetch_array($query_sua_sp)) {
?>
        <form action="../manage/manage_product.php" method="POST" enctype="multipart/form-data">
            <div class="modal-body">
                <div class="row">
                    <div class="form-group  col-md-12">
                        <span class="thong-tin-thanh-toan">
                            <h5>Chỉnh sửa thông tin sản phẩm</h5>
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label class="control-label">Mã sản phẩm </label>
                        <input class="form-control" type="text" value="<?php echo $dong['product_code'] ?>" name="product_id_update">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="control-label">Tên sản phẩm</label>
                        <input class="form-control" type="text" required value="<?php echo $dong['product_name'] ?>" name="product_name_update">
                    </div>

                    <div class="form-group col-md-6 ">
                        <label for="exampleSelect1" class="control-label">Tình trạng sản phẩm</label>
                        <select class="form-control" id="exampleSelect1" name="status_update">
                            <?php
                            if ($dong['status'] == 1) {
                                echo '<option value="1">Còn hàng</option>';
                            } else {
                                echo '<option value="0">Hết hàng</option>';
                            }
                            if ($dong['status'] == 0) {
                                echo '<option value="1">Còn hàng</option>';
                            } else {
                                echo '<option value="0">Hết hàng</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="control-label">Giá bán</label>
                        <input class="form-control" type="text" value="<?php echo $dong['price'] ?>" name="price_update">
                    </div>
                    <div class="form-group  col-md-6">
                        <label class="control-label d-block">Ảnh sản phẩm</label>
                        <img class="" src="../img/upload/img_product/<?php echo $dong['thumbnail'] ?>" alt="" width="100%;">
                        <div class="btn_update_img" id="img_upload_small">
                            <button type="button" class="mt-1 btn btn-outline-secondary ">Thay đổi</button>
                            <input type="file" name="img_file_small_update" onchange="previewImg_small(event);" id="img_file_small" accept="image/*" class="mt-1">
                            <div class="box-preview-img_small"></div>

                        </div>

                    </div>
                    <div class="form-group  col-md-6">
                        <?php $sql_sua_gallery = "SELECT * FROM gallery WHERE product_id = $id ORDER BY id DESC ";
                        $query_sua_gallery = mysqli_query($mysqli, $sql_sua_gallery);
                        $dong_gallery = mysqli_fetch_array($query_sua_gallery) ?>
                        <label class="control-label d-block">Ảnh chi tiết</label>
                        <img class="" src="../img/upload/img_product_gallery/<?php echo $dong_gallery['thumbnail'] ?>" alt="" width="100%;">
                        <div class="btn_update_img " id="img_upload">
                            <button type="button" class="mt-1 btn btn-outline-secondary ">Thay đổi</button>
                            <input type="file" name="img_file_update" onchange="previewImg(event);" id="img_file" accept="image/*" class="mt-1">
                            <div class="box-preview-img"></div>

                        </div>

                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleSelect1" class="control-label">Danh mục</label>
                        <select class="form-control" id="exampleSelect1" name="category_id_update">
                            <?php
                            $sql_danhmuc_sp = "SELECT id, name FROM category WHERE id = " . $dong['category_id'] . " ORDER BY id ASC";
                            $query_danhmuc_sp = mysqli_query($mysqli, $sql_danhmuc_sp);
                            $row_danhmuc_sp = mysqli_fetch_assoc($query_danhmuc_sp);
                            ?>
                            <option value="<?php echo $row_danhmuc_sp['id'] ?>"><?php echo $row_danhmuc_sp['name'] ?></option>
                            <?php
                            $sql_danhmuc = "SELECT * FROM category WHERE id != " . $dong['category_id'] . " ORDER BY id ASC";
                            $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
                            while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
                            ?>
                                <option value="<?php echo $row_danhmuc['id'] ?>">
                                    <?php echo $row_danhmuc['name'] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                        <BR>

                    </div>
                    <div class="form-group col-md-12">
                        <label class="control-label">Mô tả</label>
                        <textarea class="form-control" style="resize: none" rows="10" name="description_update"><?php echo $dong['description'] ?></textarea>
                    </div>
                </div>
                <BR>
                <input type="hidden" name="id_product" value="<?php echo $id ?>">
                <button class="btn btn-success" type="submit" name="product_update">Lưu lại</button>
                <a class="btn btn-danger" data-bs-dismiss="modal" href="#">Hủy bỏ</a>
                <BR>
            </div>
        </form>
    <?php
    }
}
//Thực hiện sửa thông tin sản phẩm nếu đồng ý
elseif (isset($_POST['product_update'])) {
    //sua
    $id_product = trim($_POST['id_product']);
    $masp = trim($_POST['product_id_update']);
    $tensanpham = trim($_POST['product_name_update']);
    $tinhtrang = trim($_POST['status_update']);
    $giasp = trim($_POST['price_update']);
    $danhmuc = trim($_POST['category_id_update']);
    $noidung = trim($_POST['description_update']);
    //xuly hinh anh cua product
    $hinhanh = $_FILES['img_file_small_update']['name'];
    $hinhanh_tmp = $_FILES['img_file_small_update']['tmp_name'];
    //xuly hinh anh cua gallery product
    $hinhanh_gallery = $_FILES['img_file_update']['name'];
    $hinhanh_tmp_gallery = $_FILES['img_file_update']['tmp_name'];
    //  
    if (!empty($hinhanh)) {
        $hinhanh = time() . '_' . $hinhanh;
        $sql_update = "UPDATE product SET product_code='" . $masp . "',category_id ='" . $danhmuc . "',product_name='" . $tensanpham . "',price='" . $giasp . "',thumbnail='" . $hinhanh . "',description='" . $noidung . "',status='" . $tinhtrang . "' WHERE id='" . $id_product . "'";
        mysqli_query($mysqli, $sql_update);
        //Lưu hình ảnh vào folder
        move_uploaded_file($hinhanh_tmp, '../img/upload/img_product/' . $hinhanh);
    } else {
        $sql_update = "UPDATE product SET product_code='" . $masp . "',category_id ='" . $danhmuc . "',product_name='" . $tensanpham . "',price='" . $giasp . "',description='" . $noidung . "',status='" . $tinhtrang . "' WHERE id='" . $id_product . "'";
        mysqli_query($mysqli, $sql_update);
    }
    if (!empty($hinhanh_gallery)) {
        $hinhanh_gallery = time() . '_' . $hinhanh_gallery;
        // Lưu các hình ảnh vào bảng Gallery
        $sql = "INSERT INTO gallery(product_id, thumbnail) 
        VALUES ($id_product, '$hinhanh_gallery')";
        mysqli_query($mysqli, $sql);
        move_uploaded_file($hinhanh_tmp_gallery, '../img/upload/img_product_gallery/' . $hinhanh_gallery);
    }

    header('Location:../pages/all-product.php');
} elseif (isset($_GET['id_remove'])) {
    $id = $_GET['id_remove'];
    $sql = "SELECT * FROM product WHERE id = '$id' LIMIT 1";
    $query = mysqli_query($mysqli, $sql);
    unlink('../img/upload/img_product/' . $row['thumbnail']);

    $sql_gallery = "SELECT * FROM gallery WHERE product_id = '$id'";
    $query_gallery = mysqli_query($mysqli, $sql_gallery);
    while ($row = mysqli_fetch_array($query_gallery)) {
        unlink('../img/upload/img_product_gallery/' . $row['thumbnail']);
    }
    $sql_xoa_gallery = "DELETE FROM gallery WHERE product_id ='" . $id . "'";
    $sql_xoa = "DELETE FROM product WHERE id ='" . $id . "'";
    mysqli_query($mysqli, $sql_xoa_gallery);
    mysqli_query($mysqli, $sql_xoa);
} elseif (isset($_GET['id_hide'])) {
    $id = $_GET['id_hide'];
    $sql_update = "UPDATE product SET visible='" . 0 . "' WHERE id='" . $id . "'";
    mysqli_query($mysqli, $sql_update);
} else {
    $id = $_GET['id'];
    $sql_check_order = "SELECT * FROM product,orders_details WHERE orders_details.product_id = '$id' ";
    $query_check_order = mysqli_query($mysqli, $sql_check_order);
    if ($row_check_order = mysqli_fetch_array($query_check_order)) {
    ?>
        <div class="modal-header justify-content-center">
            <h1 class="modal-title fs-6 fw-bold" id="exampleModalLabel">Cảnh báo</h1>
        </div>
        <div class="modal-body text-center">
            Sản phẩm này đã được bán ra! Không thể xoá. Bạn có muốn ẩn sản phẩm?</div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Huỷ bỏ</button>
            <button class=" btn btn-success hide "> Đồng ý</button>
        </div>
    <?php
    } else {
    ?>
        <div class="modal-header justify-content-center">
            <h1 class="modal-title fs-6 fw-bold" id="exampleModalLabel">Cảnh báo</h1>
        </div>
        <div class="modal-body text-center">
            Sản phẩm này chưa được bán ra! Không thể xoá. Bạn có chắc <strong>XOÁ</strong> sản phẩm?</div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Huỷ bỏ</button>
            <button class=" btn btn-success remove "> Đồng ý</button>
        </div>
<?php
    }
}
