<link rel="stylesheet" href="./css/product.css">

<!-- PRODUCT -->
<?php
//Truy vấn danh sách danh mục 
$sql_cate = "SELECT * FROM category ORDER BY id ASC";
$query_cate = mysqli_query($mysqli, $sql_cate);
if ($_GET['id'] == 0) {
    $sql_pro = "SELECT * FROM product   ORDER BY id DESC";
    $query_pro = mysqli_query($mysqli, $sql_pro);
    //get ten danh muc
    $sql_cate = "SELECT * FROM category ORDER BY id ASC";
    $query_cate = mysqli_query($mysqli, $sql_cate);
?>
    <!-- BREADCRUMB -->
    <section class="breadcrumb_section container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./index.php">Trang chủ</a></li>
                <li class="breadcrumb-item"><a href="#">Thực đơn</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tất cả sản phẩm</li>
            </ol>
        </nav>
    </section>
    <section class="product container">
        <h1>Thực đơn</h1>
        <div class="row cate-slider mb-4">
            <div class="col-6"><a href="#" title="Khuyến mãi khổng lồ"> <img src="./img/Banner(Design)/Banner_19.jpg" alt=""></a>
            </div>
            <div class="col-6"><a href="#" title="Khuyến mãi khổng lồ"> <img src="./img/Banner(Design)/Banner_21.jpg" alt=""></a>
            </div>
        </div>
        <div class="product_tags mb-4">
            <a class="btn btn-outline-secondary active" role="button" href="#" type="Tất cả">Tất cả</a>
            <?php
            while ($row_title = mysqli_fetch_array($query_cate)) {
            ?>
                <a class="btn btn-outline-secondary" role="button" href="./index.php?quanly=thucdon&id=<?php echo $row_title['id'] ?>"> <?php echo $row_title['name'] ?></a>
            <?php
            }
            ?>
        </div>
        <div class="product__filter mb-2 text-end">
            <div class="filter--sort ">
                <p>Sắp xếp theo:</p>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Mặc định</option>
                    <option value="1">Bán chạy</option>
                    <option value="2">Giá tăng dần</option>
                    <option value="3">Giá giảm dần</option>
                    <option value="4">Từ A-Z</option>
                    <option value="5">Từ Z-A</option>
                </select>
            </div>

        </div>
        <div class="row product_content" id="product">
            <?php
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
                            <a href="#" class="btn 
                        <?php if ($row_pro['status'] == 0)
                            echo 'disabled' ?>" data-bs-toggle="modal" data-bs-target="#Modalcheck-user"><?php if ($row_pro['status'] == 0) echo 'Hết hàng';
                                                                                                            else echo 'Đặt món'; ?> </a>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>

        </div>
        <!-- Modal check-user-->
        <div class="modal fade" id="Modalcheck-user" tabindex="-1" aria-labelledby="check-user" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title " id="check-user">Bạn chưa đăng nhập!</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Bạn cần đăng nhập hoặc đăng ký tài khoản để mua hàng và thanh toán!
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-danger"><a href="../../pages/Login.html">Đăng
                                nhập</a></button>
                        <button type="button" class="btn btn-warning "><a href="../../pages/SignUp.html">Đăng
                                ký</a></button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Load more -->
        <!-- <div class="col-12 text-center">
                <a href="#" id="loadMore">Xem thêm</a>
            </div> -->

        <!-- PAGINATION  -->
        <nav aria-label="Page navigation " class="product__pagination">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="page-item active" aria-current="page"><a class="page-link" href="#product">1</a></li>
                <li class="page-item "><a class="page-link" href="./all-menu_2.html">2</a></li>
                <li class="page-item">
                    <a class="page-link" href="./all-menu_2.html" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </section>
<?php
} else {

    $sql_pro = "SELECT * FROM product  WHERE product.category_id='$_GET[id]' ORDER BY id DESC";
    $query_pro = mysqli_query($mysqli, $sql_pro);
    //get ten danh muc
    $sql_cate_detail = "SELECT * FROM category WHERE id='$_GET[id]'ORDER BY id ASC";
    $query_cate_detail = mysqli_query($mysqli, $sql_cate_detail);
    $row_title_detail = mysqli_fetch_array($query_cate_detail);

?>
    <!-- BREADCRUMB -->
    <section class="breadcrumb_section container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./index.php">Trang chủ</a></li>
                <li class="breadcrumb-item"><a href="index.php?quanly=thucdon&id=0">Thực đơn</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $row_title_detail['name'] ?></li>
            </ol>
        </nav>
    </section>
    <section class="product container">
        <h1><?php echo $row_title_detail['name'] ?></h1>
        <div class="row cate-slider mb-4">
            <div class="col-6"><a href="#" title="Khuyến mãi khổng lồ"> <img src="./img/Banner(Design)/Banner_19.jpg" alt=""></a>
            </div>
            <div class="col-6"><a href="#" title="Khuyến mãi khổng lồ"> <img src="./img/Banner(Design)/Banner_21.jpg" alt=""></a>
            </div>
        </div>
        <div class="product_tags mb-4">
            <a class="btn btn-outline-secondary" role="button" href="index.php?quanly=thucdon&id=0" type="Tất cả">Tất cả</a>
            <?php
            while ($row_title = mysqli_fetch_array($query_cate)) {
            ?>
                <a class="btn btn-outline-secondary <?php if ($row_title['id'] == $_GET['id']) echo 'active' ?>" role="button" href="./index.php?quanly=thucdon&id=<?php echo $row_title['id'] ?>"> <?php echo $row_title['name'] ?></a>
            <?php
            }
            ?>
        </div>
        <div class="product__filter mb-2 text-end">
            <div class="filter--sort ">
                <p>Sắp xếp theo:</p>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Mặc định</option>
                    <option value="1">Bán chạy</option>
                    <option value="2">Giá tăng dần</option>
                    <option value="3">Giá giảm dần</option>
                    <option value="4">Từ A-Z</option>
                    <option value="5">Từ Z-A</option>
                </select>
            </div>

        </div>
        <div class="row product_content" id="product">
            <?php
            while ($row_pro = mysqli_fetch_array($query_pro)) {
            ?>
                <div class="col-3 product_content_items">
                    <div class="card">
                        <div class="product_content__img"><a href="index.php?quanly=sanpham&id=<?php echo $row_pro['id'] ?>">
                                <img src="./admin/img/upload/img_product/<?php echo $row_pro['thumbnail'] ?>" class="card-img-top" alt="..."></a>
                        </div>
                        <div class="card-body ">
                            <h5 class="card-title"><?php echo $row_pro['product_name'] ?></h5>
                            <p class="card-text"><?php echo $row_pro['price'] ?>₫</p>
                            <a href="#" class="btn 
                            <?php if ($row_pro['status'] == 0)
                                echo 'disabled' ?>" data-bs-toggle="modal" data-bs-target="#Modalcheck-user"><?php if ($row_pro['status'] == 0) echo 'Hết hàng';
                                                                                                                else echo 'Đặt món'; ?> </a>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>

        </div>
        <!-- Modal check-user-->
        <div class="modal fade" id="Modalcheck-user" tabindex="-1" aria-labelledby="check-user" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title " id="check-user">Bạn chưa đăng nhập!</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Bạn cần đăng nhập hoặc đăng ký tài khoản để mua hàng và thanh toán!
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-danger"><a href="../../pages/Login.html">Đăng
                                nhập</a></button>
                        <button type="button" class="btn btn-warning "><a href="../../pages/SignUp.html">Đăng
                                ký</a></button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Load more -->
        <!-- <div class="col-12 text-center">
                    <a href="#" id="loadMore">Xem thêm</a>
                </div> -->

        <!-- PAGINATION  -->
        <nav aria-label="Page navigation " class="product__pagination">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="page-item active" aria-current="page"><a class="page-link" href="#product">1</a></li>
                <li class="page-item "><a class="page-link" href="./all-menu_2.html">2</a></li>
                <li class="page-item">
                    <a class="page-link" href="./all-menu_2.html" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </section>
<?php
}
?>
<!-- Back to top  -->
<a href="#" class="BackToTop cd-top text-replace js-cd-top">
    <i class="fa fa-angle-up"></i>
</a>
<!-- JQUERY  -->
<script src="./node_modules/jquery/dist/jquery.min.js"></script>
<!-- BOOSTRAP JS  -->
<script src="./js/bootstrap.bundle.min.js"></script>
<!-- UTIL JS  -->
<script src="./js/util.js"></script>
<!-- BACKTOTOP JS  -->
<script src="./js/main-backToTop.js"></script>