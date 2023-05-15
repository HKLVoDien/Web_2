<link rel="stylesheet" href="./css/search.css">

<!-- BREADCRUMB-->
<section class="breadcrumb_section container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./index.php">Trang chủ</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tìm kiếm</li>

        </ol>
    </nav>
</section>

<!-- SEARCH  -->
<section class="seoul__search container">
    <?php
    if (isset($_POST['search'])) {
        $tukhoa = $_POST['search'];
        $sql_pro = "SELECT * FROM product WHERE product_name LIKE '%" . $tukhoa . "%'";
        $query_pro = mysqli_query($mysqli, $sql_pro);
        $count = mysqli_num_rows($query_pro);
    ?>
        <h1>Tìm kiếm</h1>
        <p class="mb-3">Có <?php echo $count ?> kết quả phù hợp cho <strong>"<?php echo $tukhoa ?>"</strong></p>
        <div class="product__filter mb-3 row">
            <div class="filter--range col-12 ">
                <p>Khoảng giá:</p>
                <form action="" class="d-inline-block">
                    <input type="text" name="min_price" id="min_price" maxlength="13" placeholder="Từ ₫">
                    <div class="line"></div>
                    <input type="text" name="max_price" id="max_price" maxlength="13" placeholder="Đến ₫">
                    <button class="btn btn-success mx-2" type="button" onclick="applyFilter()">Áp dụng</button>
                </form>
            </div>

            <div class="filter--sort col-6 mt-3">
                <p>Danh mục:</p>
                <select id="category_select" class="form-select" aria-label="Default select example" onchange="applyFilter()">
                    <option value="0" selected>Chọn danh mục</option>
                    <?php $sql_cate = "SELECT * FROM category ORDER BY id ASC";
                    $query_cate = mysqli_query($mysqli, $sql_cate);
                    while ($row_cate = mysqli_fetch_array($query_cate)) {
                    ?>
                        <option value="<?php echo $row_cate['id']; ?>"><?php echo $row_cate['name']; ?></option>

                    <?php
                    }
                    ?>
                </select>
            </div>

            <div class="filter--sort col-6 text-end">
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
            $sql_pro = "SELECT * FROM product WHERE product_name LIKE '%" . $tukhoa . "%'";
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
                <li class="page-item active"><a class="page-link" href="./all-menu.html">1</a></li>

                <li class="page-item disabled">
                    <a class="page-link" href="./all-menu_2.html" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    <?php
    }
    ?>
</section>


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
</Script>

<!-- JS PHÂN LOẠI  -->
<script>
    function filterProducts(categoryId, keyword, minPrice, maxPrice) {
        // Gửi yêu cầu AJAX
        $.ajax({
            url: "./pages/Handle/search_handle.php",
            method: "POST",
            data: {
                category_id: categoryId,
                search_keyword: keyword,
                min_price: minPrice,
                max_price: maxPrice
            },
            success: function(response) {
                // Xử lý phản hồi từ máy chủ và cập nhật nội dung sản phẩm trên trang web
                $("#product").html(response);
            }
        });
    }

    function applyFilter() {
        // Lấy giá trị của các trường khoảng giá và danh mục
        var categoryId = $("#category_select").val();
        var minPrice = $("#min_price").val();
        var maxPrice = $("#max_price").val();
        // Gọi phương thức filterProducts với giá trị khoảng giá và danh mục đã chọn
        filterProducts(categoryId, '<?php echo $tukhoa; ?>', minPrice, maxPrice);
    }
</script>