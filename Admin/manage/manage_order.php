<?php
include "../../database/config.php";
// Lay va day du lieu
if (isset($_POST['id_update'])) {
    $id = $_POST['id_update'];
    $sql_edit_user = "SELECT * FROM orders WHERE id = $id LIMIT 1";
    $query_edit_user = mysqli_query($mysqli, $sql_edit_user);
    while ($dong = mysqli_fetch_array($query_edit_user)) {
        $sql_order_detail = "SELECT orders_details.id,product.product_name, orders_details.total_money,orders_details.num, orders_details.product_id FROM orders_details,product  WHERE  orders_details.order_id = '$dong[id]'  and product.id = orders_details.product_id ORDER BY id ASC";
        $query_order_detail = mysqli_query($mysqli, $sql_order_detail);
?>
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Chi tiết đơn hàng</h1>
            <button type="button" class="btn fs-5" data-bs-dismiss="modal"><i class="fas fa-times"></i></button>
        </div>
        <!-- Nội dung form chỉnh sửa -->
        <form action="../manage/manage_order.php" method="POST">

            <div class="modal-body">

                <div class="row">

                    <div class="form-group  col-md-4">
                        <label class="control-label">ID đơn hàng</label>
                        <input class="form-control" type="text" value="<?php echo $dong['id']; ?>" readonly>
                    </div>
                    <div class="form-group  col-md-4">
                        <label class="control-label">Tên khách hàng</label>
                        <input class="form-control" type="text" value="<?php echo $dong['fullname']; ?>" readonly>
                    </div>
                    <div class="form-group  col-md-4">
                        <label class="control-label">Số điện thoại khách
                            hàng</label>
                        <input class="form-control" type="number" value="<?php echo $dong['phone']; ?>" readonly>
                    </div>
                    <div class="form-group  col-md-4">
                        <label class="control-label">Địa chỉ khách hàng</label>
                        <input class="form-control" type="text" value="<?php echo $dong['address']; ?>" readonly>
                    </div>
                    <div class="form-group  col-md-4">
                        <label class="control-label">Ngày làm đơn hàng</label>
                        <input class="form-control" type="text" value="<?php echo $dong['order_date']; ?>" readonly>
                    </div>
                    <div class="form-group  col-md-4">
                        <label class="control-label">Tên sản phẩm</label>
                        <input class="form-control" type="text" value="<?php
                                                                        while ($row_order_detail = mysqli_fetch_array($query_order_detail)) {
                                                                            echo $row_order_detail['product_name'] . ', ';
                                                                        }
                                                                        ?>" readonly>
                    </div>
                    <div class="form-group  col-md-4">
                        <label class="control-label">Mã sản phẩm</label>
                        <input class="form-control" type="text" value="<?php
                                                                        mysqli_data_seek($query_order_detail, 0); // Đặt con trỏ về đầu kết quả
                                                                        while ($row_order_detail = mysqli_fetch_array($query_order_detail)) {
                                                                            echo $row_order_detail['product_id'] . ', ';
                                                                        }
                                                                        ?>" readonly>
                    </div>
                    <div class="form-group  col-md-4">
                        <label class="control-label">Số lượng</label>
                        <input class="form-control" type="text" value="<?php
                                                                        mysqli_data_seek($query_order_detail, 0); // Đặt con trỏ về đầu kết quả
                                                                        while ($row_order_detail = mysqli_fetch_array($query_order_detail)) {
                                                                            echo $row_order_detail['product_name'] . ' (';
                                                                            echo $row_order_detail['num'] . ') , ';
                                                                        }
                                                                        ?>" readonly>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleSelect1" class="control-label">Tình
                            trạng</label>
                        <select class="form-control" id="exampleSelect1" name="order_status">
                            <option value="01" <?php if ($dong['status'] == 1) echo 'selected'; ?>>Chưa xác nhận</option>
                            <option value="02" <?php if ($dong['status'] == 2) echo 'selected'; ?>>Đã xác nhận</option>
                            <option value="03" <?php if ($dong['status'] == 3) echo 'selected'; ?>>Đang vận chuyển</option>
                            <option value="04" <?php if ($dong['status'] == 4) echo 'selected'; ?>>Đã hoàn thành</option>
                            <option value="05" <?php if ($dong['status'] == 5) echo 'selected'; ?>>Đã hủy</option>
                        </select>
                    </div>
                    <div class="form-group  col-md-12">
                        <label class="control-label">Ghi chú đơn hàng</label>
                        <textarea class="form-control" rows="4" readonly></textarea>
                    </div>

                </div>
                <input type="hidden" name="id_order" value="<?php echo $id ?>">
                <button class="btn btn-success" type="submit" name="order_update">Lưu lại</button>
                <a class="btn btn-danger" data-bs-dismiss="modal" href="#">Hủy
                    bỏ</a>
            </div>
            </div>
        </form>


<?php
    }
} elseif (isset($_POST['order_update'])) {
    $id_order = $_POST['id_order'];
    $status = trim($_POST['order_status']);
    $sql_update = "UPDATE orders SET status='" . $status . "' WHERE id='" . $id_order . "'";
    mysqli_query($mysqli, $sql_update);
    header('Location:../pages/orders.php');
} else {
    $id = $_GET['id'];
    $sql_xoa = "DELETE FROM user WHERE id ='" . $id . "'";
    mysqli_query($mysqli, $sql_xoa);
}
