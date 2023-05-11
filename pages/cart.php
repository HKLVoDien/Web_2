    <link rel="stylesheet" href="./css/cart.css">

    <?php
    ?>
    <!-- BREADCRUMB -->
    <section class="breadcrumb_section container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./index.php">Trang chủ</a></li>
                <li class="breadcrumb-item active" aria-current="page">Giỏ hàng</li>

            </ol>
        </nav>
    </section>
    <!-- CART  -->
    <section class="Seoul__cart container">
        <div class="row Seoul__cart__content">
            <div class="col-9 Seoul__cart--orders">
                <h1>Giỏ hàng</h1>
                <?php
                if (isset($_SESSION['cart_seoul'])) {
                    $i = 0;
                    $tongtien = 0;
                    foreach ($_SESSION['cart_seoul'] as $cart_item) {
                        $thanhtien = $cart_item['soluong'] * $cart_item['giasp'];
                        $tongtien += $thanhtien;
                        $i++;
                ?>
                        <div class="orders--items row">
                            <div class="orders--items-left col-2">
                                <div class="items--thumb">
                                    <img src="./admin/img/upload/img_product/<?php echo $cart_item['hinhanh'] ?>" alt="KIMBAP">
                                    <div class="product_qty">
                                        <form id='myform' class='quantity row m-0' method="GET" action="./pages/Handle/cart_handle.php">
                                            <a href="./pages/Handle/cart_handle.php?tru=<?php echo $cart_item['id'] ?>" class="qtyminus minus" field='quantity'><i class="fas fa-minus"></i></a>
                                            <input type="text" name="quantity" value="<?php echo $cart_item['soluong']; ?>">
                                            <input type="hidden" name="id" value="<?php echo $cart_item['id']?>">
                                            <a href="./pages/Handle/cart_handle.php?cong=<?php echo $cart_item['id'] ?>" class="qtyplus plus" field='quantity'><i class="fas fa-plus"></i></a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="orders--items-right col-10">
                                <div class="items--name"><a href="">Kimbap </a></div>
                                <div class="items--price">Đơn giá: <span><?php echo number_format($cart_item['giasp'], 0, ',', ',') . '₫'; ?></span></div>
                                <div class="items--total">Tổng: <span><?php echo number_format($thanhtien, 0, ',', ',') . '₫' ?></span></div>
                                <a href="./pages/Handle/cart_handle.php?xoa=<?php echo $cart_item['id'] ?>" class="items--remove ">Xoá</a>
                            </div>
                        </div>


                    <?php
                    }
                    ?>
                    <div class="hr"></div>
                    <div class="orders__submit row">
                        <div class="col-6"><i class="fas fa-angle-left"></i></i>
                            <a href="./index.php?quanly=thucdon&id=0">Tiếp tục chọn món </a>
                        </div>
                        <div class="orders__submit--total col-6">
                            <p class="temp--money">Tạm tính: <span><?php echo number_format($tongtien, 0, ',', ',') . '₫' ?></span></p>
                            <p class="into--money">Thành tiền: <span><?php echo number_format($tongtien, 0, ',', ',') . '₫' ?>đ</span></p>
                            <a href="./index.php?quanly=thanhtoan" class="total--pay">Thanh toán</a>
                        </div>
                    </div>
                <?php
                } else {
                ?>
                    <div class="noproduct">
                        <i class="fas fa-box-open"></i>
                        <p>Bạn chưa chọn sản phẩm nào!</p>
                        <button class="btn"> <a href="./index.php?quanly=thucdon&id=0">Chọn món ngay</a></button>
                    </div>
                <?php
                }
                ?>
                <!-- Cart null -->

            </div>


            <div class="col-3 Seoul__cart--contact">
                <div class="user--sevice">
                    <h3>Dịch vụ khách hàng</h3>
                    <p>Bạn cần sự hỗ trợ từ chúng tôi? Hãy liên hệ ngay</p>
                    <a href="tel:19003360" title="Hotline: 19003360"><i class="fas fa-phone-alt"></i>1900 3360</a>
                    <a href=""><i class="fab fa-facebook-f "></i>Chúng tôi trên Facebook</a>
                    <p>Giờ hoạt động: (04:00 - 23:00)</p>
                    <a href="">Liên hệ</a>
                </div>
                <div class="user--payment">
                    <h3>Đặt món cùng Mỳ Cay Seoul</h3>
                    <p><i class="fas fa-check"></i></i><span>Giảm giá lên tới 50%</span> - Tại tất cả cửa hàng cho hội viên mới</p>
                    <p><i class="fas fa-check"></i></i><span>Mỳ cay seoul</span> - Thổi bùng vị cay Hàn Quốc</p>
                    <p><i class="fas fa-check"></i></i><span>Miễn phí vận chuyển</span> - cho đơn hàng từ 300.000đ</p>
                    <ul>
                        <li><img src="https://bizweb.dktcdn.net/100/421/124/themes/811860/assets/cart_payment_1.svg?1617678628801" alt="Hình thức thanh toán"></li>
                        <li><img src="	https://bizweb.dktcdn.net/100/421/124/themes/811860/assets/cart_payment_2.svg?1617678628801" alt="Hình thức thanh toán"></li>
                        <li><img src="https://bizweb.dktcdn.net/100/421/124/themes/811860/assets/cart_payment_3.svg?1617678628801" alt="Hình thức thanh toán"></li>
                        <li><img src="https://bizweb.dktcdn.net/100/421/124/themes/811860/assets/cart_payment_4.svg?1617678628801" alt="Hình thức thanh toán"></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Back to top  -->
    <a href="#" class="BackToTop cd-top text-replace js-cd-top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!-- QUANTITY JS  -->
    <script>
        jQuery(document).ready(($) => {
            $('.quantity').on('click', '.plus', function(e) {
                let $input = $(this).prev('input.qty');
                let val = parseInt($input.val());
                $input.val(val + 1).change();
            });

            $('.quantity').on('click', '.minus',
                function(e) {
                    let $input = $(this).next('input.qty');
                    var val = parseInt($input.val());
                    if (val > 1) {
                        $input.val(val - 1).change();
                    }
                });
        });
    </script>