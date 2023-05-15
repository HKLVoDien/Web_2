<?php
session_start();
include('../../database/config.php');
if (isset($_POST['category_id'])) {
    // Xử lý yêu cầu lọc sản phẩm theo danh mục và khoảng giá
    $category_id = $_POST['category_id'];
    $search_keyword = $_POST['search_keyword'];
    $min_price = $_POST['min_price'];
    $max_price = $_POST['max_price'];
    $sql_pro = "SELECT * FROM product WHERE product_name LIKE '%" . $search_keyword . "%' ";
    // Áp dụng bộ lọc danh mục (nếu đã chọn)
    if ($category_id != 0) {
        // Thêm điều kiện vào truy vấn SQL để lọc theo danh mục
        $sql_pro .= " AND category_id = $category_id";
    }
    // Áp dụng bộ lọc khoảng giá (nếu đã nhập)
    if ($min_price != '' && $max_price != '') {
        // Thêm điều kiện vào truy vấn SQL để lọc theo khoảng giá
        $sql_pro .= " AND price BETWEEN $min_price AND $max_price";
    }

    $query_pro = mysqli_query($mysqli, $sql_pro);
    while ($row_pro = mysqli_fetch_array($query_pro)) {
?>
        <div class="col-3 product_content_items">
            <div class="card">
                <div class="product_content__img"><a href="index.php?quanly=sanpham&id=<?php echo $row_pro['id'] ?>">
                        <img src="./admin/img/upload/img_product/<?php echo $row_pro['thumbnail'] ?>" class="card-img-top" alt="..."></a>
                </div>
                <div class="card-body ">
                    <h5 class="card-title"><?php echo $row_pro['product_name'] ?></h5>
                    <p class="card-text"><?php echo number_format($row_pro['price'], 0, ',', ',') . '₫'; ?></p>
                    <?php
                    if (isset($_SESSION['username'])) {
                    ?>

                        <a href="./index.php?quanly=sanpham&id=<?php echo $row_pro['id'] ?>" class="btn 
                     <?php if ($row_pro['status'] == 0)
                            echo 'disabled' ?>"><?php if ($row_pro['status'] == 0) echo 'Hết hàng';
                                                else echo 'Đặt món'; ?> </a>
                    <?php
                    } else {
                    ?>
                        <a href="#" class="btn 
                    <?php if ($row_pro['status'] == 0)
                            echo 'disabled' ?>" data-bs-toggle="modal" data-bs-target="#Modalcheck-user"><?php if ($row_pro['status'] == 0) echo 'Hết hàng';
                                                                                                            else echo 'Đặt món'; ?> </a>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
<?php
    }
}
