<link rel="stylesheet" href="./css/product-detail.css">
<?php
$sql_chitiet = "SELECT product.*, category.name AS category_name,gallery.thumbnail AS gallery_thumbnail FROM product,category,gallery WHERE product.category_id=category.id AND product.id= '$_GET[id]' AND product.id = gallery.product_id LIMIT 1";
$query_chitiet = mysqli_query($mysqli, $sql_chitiet);
while ($row_chitiet = mysqli_fetch_array($query_chitiet)) {
?>
    <!-- BREADCRUMB -->
    <section class="breadcrumb_section container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./index.php">Trang chủ</a></li>
                <li class="breadcrumb-item"><a href="./index.php?quanly=thucdon&id=0">Thực đơn</a></li>
                <li class="breadcrumb-item"><a href="./index.php?quanly=thucdon&id=<?php echo $row_chitiet['category_id'] ?>"><?php echo $row_chitiet['category_name'] ?></a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $row_chitiet['product_name'] ?></li>
            </ol>
        </nav>
    </section>
    <!-- PRODUCT -->
    <section class="product_details my-3 container ">
        <div class="product_details_content row">
            <div class="col-6 product_details_img">
                <div id="product_details_img" class="carousel slide carousel-fade" data-bs-ride="false">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#product_details_img" data-bs-slide-to="0" class="active b-img" aria-current="true" aria-label="Slide 1"><img src="./admin/img/upload/img_product/<?php echo $row_chitiet['thumbnail'] ?>" alt=""></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="./admin/img/upload/img_product_gallery/<?php echo $row_chitiet['gallery_thumbnail'] ?>" class="d-block w-100" alt="img_bibimbap-bo" data-bs-toggle="modal" data-bs-target="#modal-img">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 product_details_info">
                <form action="./pages/Handle/cart_handle.php?id_product=<?php echo $row_chitiet['id'] ?>" method="post">

                    <h3><?php echo $row_chitiet['product_name'] ?></h3>
                    <p>Mã sản phẩm: <span><?php echo $row_chitiet['product_code'] ?></span></p>
                    <p>Danh mục: <span><?php echo $row_chitiet['category_name'] ?></span></p>
                    <span class="price"><span><?php echo number_format($row_chitiet['price'], 0, ',', ',') . '₫'; ?></span>
                        <div class="product_qty">
                            <div>
                                <p class="text-dark">Số lượng:</p>
                            </div>
                            <div class="qty row m-0">
                                <button class="qtyminus" aria-hidden="true">&minus;</button>
                                <input name="qty" id="qty" min="1" max="20" step="1" value="1" class="text-center">
                                <button class="qtyplus" aria-hidden="true">&plus;</button>
                            </div>
                        </div>
                        <?php
                        if (isset($_SESSION['username'])) {
                        ?> <button type="submit" name="add_cart" class="btn add btn-orders <?php if ($row_chitiet['status'] == 0)
                                                                                                echo 'disabled' ?>"><?php if ($row_chitiet['status'] == 0) echo 'Hết hàng';
                                                                                                                    else echo 'Đặt món'; ?> </button>
                        <?php
                        } else {
                        ?>
                            <button type="submit" name="add_cart" class="btn add btn-orders <?php if ($row_chitiet['status'] == 0)
                                                                                                echo 'disabled' ?>" data-bs-toggle="modal" data-bs-target="#Modalcheck-user"><?php if ($row_chitiet['status'] == 0) echo 'Hết hàng';
                                                                                                                                                                                else echo 'Đặt món'; ?> </button>

                        <?php
                        }
                        ?>
                        <div class="product_tag" id="#readmore">
                            <h4>
                                Thông tin chi tiết
                            </h4>
                            <div class="product_tag-read">
                                <p>
                                    <?php echo $row_chitiet['description'] ?>
                                    <button class="read-more">Xem thêm</button>
                                </p>

                            </div>

                        </div>
                </form>
            </div>
            <!-- Modal -->
            <div class="product_details_img-modal">
                <div class="modal fade" id="modal-img" tabindex="-1" aria-labelledby="imgModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-fullscreen">
                        <div class="modal-content ">
                            <div class="modal-header">
                                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"> <i class="fas fa-times"></i></button>
                            </div>
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div id="carousel-modal-img" class="carousel slide" data-bs-ride="false" data-bs-wrap="false">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="./admin/img/upload/img_product_gallery/<?php echo $row_chitiet['gallery_thumbnail'] ?>" class="d-block" alt="...">
                                            </div>
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carousel-modal-img" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carousel-modal-img" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- SALE  -->
    <section class="Sale container">
        <div class="sale-title"> <a title="Bạn cũng có thể muốn">Bạn cũng có thể muốn</a></div>
        <div class="owl-carousel  ">
            <?php $sql_pro = "SELECT * FROM product WHERE id != '$_GET[id]' AND status =1 ORDER BY id ASC";
            $query_pro = mysqli_query($mysqli, $sql_pro);
            $i = 0;
            while ($row_pro = mysqli_fetch_array($query_pro)) {
                $i++;
                if ($i == 10) {
                    break;
                }
            ?>
                <div class="product_content_items">
                    <div class="card">
                        <div class="product_content__img">
                            <a href="index.php?quanly=sanpham&id=<?php echo $row_pro['id'] ?>">
                                <img src="./admin/img/upload/img_product/<?php echo $row_pro['thumbnail'] ?>" class="card-img-top" alt="hình-AVTC">
                            </a>
                        </div>
                        <div class="card-body ">
                            <h5 class="card-title"><?php echo $row_pro['product_name'] ?></h5>
                            <p class="card-text"><?php echo number_format($row_pro['price'], 0, ',', ',') . '₫'; ?></p>
                            <?php
                            if (isset($_SESSION['username'])) {
                            ?>
                                <a href="./index.php?quanly=sanpham&id=<?php echo $row_pro['id'] ?>" class="btn">Đặt món</a>
                            <?php
                            } else {
                            ?>
                                <a href="./index.php?quanly=sanpham&id=<?php echo $product['id'] ?>" class="btn  <?php if ($product['status'] == 0)
                                                                                                                        echo 'disabled' ?>" data-bs-toggle="modal" data-bs-target="#Modalcheck-user"><?php if ($product['status'] == 0) echo 'HẾT HÀNG';
                                                                                                                                                                                                        else echo 'ĐẶT MÓN'; ?></a>
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
    </section>

<?php
}
?>
<!-- JQUERY  -->
<script src="./node_modules/jquery/dist/jquery.min.js"></script>
<!-- BOOSTRAP JS  -->
<script src="./js/bootstrap.bundle.min.js"></script>
<!-- UTIL JS  -->
<script src="./js/util.js"></script>
<!-- BACKTOTOP JS  -->
<script src="./js/main-backToTop.js"></script>
<!-- OWLCAROUSEL JS  -->
<script src="./js/owl.carousel.min.js"></script>
<script>
    $(document).ready(function() {
        $(".owl-carousel").owlCarousel();
    });
    $('.owl-carousel').owlCarousel({
        loop: false,
        margin: 24,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    })
</script>
<!-- QUANTITY JS  -->
<script>
    var input = document.querySelector('#qty');
    var btnminus = document.querySelector('.qtyminus');
    var btnplus = document.querySelector('.qtyplus');

    if (input !== undefined && btnminus !== undefined && btnplus !== undefined && input !== null && btnminus !== null && btnplus !== null) {

        var min = Number(input.getAttribute('min'));
        var max = Number(input.getAttribute('max'));
        var step = Number(input.getAttribute('step'));

        function qtyminus(e) {
            var current = Number(input.value);
            var newval = (current - step);
            if (newval < min) {
                newval = min;
            } else if (newval > max) {
                newval = max;
            }
            input.value = Number(newval);
            e.preventDefault();
        }

        function qtyplus(e) {
            var current = Number(input.value);
            var newval = (current + step);
            if (newval > max) newval = max;
            input.value = Number(newval);
            e.preventDefault();
        }

        btnminus.addEventListener('click', qtyminus);
        btnplus.addEventListener('click', qtyplus);

    } // End if test
</script>
<!-- read more JS  -->
<script>
    $(document).ready(function() {
        $(".read-more").click(function() {
            $(this).prev().toggle();
            $(this).siblings('.dots').toggle();
            if ($(this).text() == 'Xem thêm') {
                $(this).text('Ẩn bớt');
            } else {
                $(this).text('Xem thêm');

            }
        });
    });
</script>