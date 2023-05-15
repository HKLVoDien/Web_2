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
                        <textarea class="form-control" rows="4" readonly><?php echo $dong['note']; ?></textarea>
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
}
//Lọc đơn hàng bằng ngày
elseif (isset($_GET['datein']) && isset($_GET['dateout'])) {
    // Lấy giá trị ngày từ biểu mẫu
    $datein = $_GET['datein'];
    $dateout = $_GET['dateout'];

    // Thực hiện truy vấn cơ sở dữ liệu với điều kiện ngày
    $sql_order = "SELECT * FROM orders WHERE DATE(order_date) BETWEEN '$datein' AND '$dateout' ORDER BY id DESC";
    $query_order = mysqli_query($mysqli, $sql_order);

    while ($row_order = mysqli_fetch_array($query_order)) {
        // Xử lý các thông tin đơn hàng
        $sql_order_detail = "SELECT orders_details.id,product.product_name, orders_details.total_money,orders_details.num FROM orders_details,product  WHERE  orders_details.order_id = '$row_order[id]'  and product.id = orders_details.product_id ORDER BY id ASC";
        $query_order_detail = mysqli_query($mysqli, $sql_order_detail);
    ?>
        <tr>
            <td width="10"><input type="checkbox" name="check1" value="1"></td>
            <td class="id_order"><?php echo $row_order['id'] ?></td>
            <td><?php echo $row_order['fullname'] ?></td>
            <td><?php echo $row_order['order_date'] ?></td>
            <td>
                <?php while ($row_order_detail = mysqli_fetch_array($query_order_detail)) {
                ?>
                    <?php echo $row_order_detail['product_name'] . ', '; ?>
                <?php
                }
                ?>
            </td>
            <td><?php echo number_format($row_order['total_money'], 0, ',', ',') . '₫'; ?></td>
            <td><span class="badge  <?php
                                    switch ($row_order['status']) {
                                        case  1;
                                            echo 'bg-warning';
                                            break;
                                        case  2;
                                            echo 'bg-info';
                                            break;
                                        case  3;
                                            echo 'bg-primary';
                                            break;
                                        case  4;
                                            echo 'bg-success';
                                            break;
                                        case  5;
                                            echo 'bg-danger';
                                            break;
                                    }
                                    ?>">
                    <?php
                    switch ($row_order['status']) {
                        case  1;
                            echo 'Chưa xác nhận';
                            break;
                        case  2;
                            echo 'Đã xác nhận';
                            break;
                        case  3;
                            echo 'Đang vận chuyển';
                            break;
                        case  4;
                            echo 'Đã hoàn thành';
                            break;
                        case  5;
                            echo 'Đã huỷ';
                            break;
                    }
                    ?>
                </span>
            </td>
            <td><button class="btn btn-outline-danger  btn-sm trash m-1" type="button" title="Xóa" data-bs-toggle="modal" data-bs-target="#ModalRM"><i class="fas fa-trash-alt"></i> </button>
                <button class="btn btn-outline-warning btn-sm edit m-1" type="button" title="Sửa" data-bs-toggle="modal" data-bs-target="#ModalUP"><i class="fa fa-edit"></i></button>
            </td>
        </tr>
    <?php
    }
} //Lọc đơn hàng bằng khu vực
elseif (isset($_GET['city'])) {
    // Lấy giá khu vực ngày từ biểu mẫu
    $city = $_GET['city'];

    // Thực hiện truy vấn cơ sở dữ liệu với điều kiện ngày
    $sql_order = "SELECT * FROM orders WHERE address LIKE '%$city%' ORDER BY id DESC";
    $query_order = mysqli_query($mysqli, $sql_order);

    while ($row_order = mysqli_fetch_array($query_order)) {
        // Xử lý các thông tin đơn hàng
        $sql_order_detail = "SELECT orders_details.id,product.product_name, orders_details.total_money,orders_details.num FROM orders_details,product  WHERE  orders_details.order_id = '$row_order[id]'  and product.id = orders_details.product_id ORDER BY id ASC";
        $query_order_detail = mysqli_query($mysqli, $sql_order_detail);
    ?>
        <tr>
            <td width="10"><input type="checkbox" name="check1" value="1"></td>
            <td class="id_order"><?php echo $row_order['id'] ?></td>
            <td><?php echo $row_order['fullname'] ?></td>
            <td><?php echo $row_order['order_date'] ?></td>
            <td><?php echo $row_order['address'] ?></td>
            <td>
                <?php while ($row_order_detail = mysqli_fetch_array($query_order_detail)) {
                ?>
                    <?php echo $row_order_detail['product_name'] . ', '; ?>
                <?php
                }
                ?>
            </td>
            <td><?php echo number_format($row_order['total_money'], 0, ',', ',') . '₫'; ?></td>
            <td><span class="badge  <?php
                                    switch ($row_order['status']) {
                                        case  1;
                                            echo 'bg-warning';
                                            break;
                                        case  2;
                                            echo 'bg-info';
                                            break;
                                        case  3;
                                            echo 'bg-primary';
                                            break;
                                        case  4;
                                            echo 'bg-success';
                                            break;
                                        case  5;
                                            echo 'bg-danger';
                                            break;
                                    }
                                    ?>">
                    <?php
                    switch ($row_order['status']) {
                        case  1;
                            echo 'Chưa xác nhận';
                            break;
                        case  2;
                            echo 'Đã xác nhận';
                            break;
                        case  3;
                            echo 'Đang vận chuyển';
                            break;
                        case  4;
                            echo 'Đã hoàn thành';
                            break;
                        case  5;
                            echo 'Đã huỷ';
                            break;
                    }
                    ?>
                </span>
            </td>
            <td><button class="btn btn-outline-danger  btn-sm trash m-1" type="button" title="Xóa" data-bs-toggle="modal" data-bs-target="#ModalRM"><i class="fas fa-trash-alt"></i> </button>
                <button class="btn btn-outline-warning btn-sm edit m-1" type="button" title="Sửa" data-bs-toggle="modal" data-bs-target="#ModalUP"><i class="fa fa-edit"></i></button>
            </td>
        </tr>
<?php
    }
} else {
    $id = $_GET['id_order'];
    $sql_xoa_detail = "DELETE FROM orders_details WHERE order_id ='" . $id . "'";
    mysqli_query($mysqli, $sql_xoa_detail);
    $sql_xoa = "DELETE FROM orders WHERE id ='" . $id . "'";
    mysqli_query($mysqli, $sql_xoa);
}
