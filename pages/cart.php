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
                                        <form class='quantity row m-0 myform' method="GET" action="./pages/Handle/cart_handle.php">
                                            <button class="qtyminus minus" type="button"><i class="fas fa-minus"></i></button>
                                            <input type="text" name="quantity" value="<?php echo $cart_item['soluong']; ?>" class="qty">
                                            <input type="hidden" name="id" value="<?php echo $cart_item['id'] ?>">
                                            <button class="qtyplus plus" type="button"><i class="fas fa-plus"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="orders--items-right col-10">
                                <div class="items--name"><a href=""><?php echo $cart_item['tensanpham'] ?> </a></div>
                                <div class="items--price">Đơn giá: <span><?php echo number_format($cart_item['giasp'], 0, ',', ',') . '₫'; ?></span></div>
                                <div class="items--total">Tổng: <span id="items_total_<?php echo $cart_item['id'] ?>"><?php echo number_format($thanhtien, 0, ',', ',') . '₫' ?></span></div>
                                <button href="" class="items--remove ">Xoá</button>
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
                            <p class="temp--money ">Tạm tính: <span id="price-temp"><?php echo number_format($tongtien, 0, ',', ',') . '₫' ?></span></p>
                            <p class="into--money">Thành tiền: <span id="price-total"><?php echo number_format($tongtien, 0, ',', ',') . '₫' ?></span></p>
                            <a href="./index.php?quanly=payment" class="total--pay">Thanh toán</a>
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
        // Lấy danh sách các phần tử sản phẩm
        var productItems = document.querySelectorAll('.orders--items');
        
        // Lặp qua từng phần tử và gắn sự kiện click
        productItems.forEach(function(productItem) {
            // Lấy các phần tử con cần sử dụng trong sản phẩm hiện tại
            var quantityInput = productItem.querySelector('.qty');
            var minusButton = productItem.querySelector('.qtyminus');
            var plusButton = productItem.querySelector('.qtyplus');
            var removeButton = productItem.querySelector('.items--remove');
            var id = productItem.querySelector('input[name="id"]').value;
            // Sự kiện khi nhấn nút trừ
            minusButton.addEventListener('click', function() {
                var currentQuantity = parseInt(quantityInput.value);
                if (currentQuantity > 1) {
                    quantityInput.value = currentQuantity - 1;
                    updateQuantity();
                }
            });

            // Sự kiện khi nhấn nút cộng
            plusButton.addEventListener('click', function() {
                var currentQuantity = parseInt(quantityInput.value);
                quantityInput.value = currentQuantity + 1;
                updateQuantity();
            });
            // Sự kiện khi nhấn nút xóa
            removeButton.addEventListener('click', function() {
                // Tạo URL endpoint với các tham số truyền vào
                var url = './pages/Handle/cart_handle.php?xoa=' + encodeURIComponent(id);
                // Gửi yêu cầu AJAX
                fetch(url, {
                        method: 'GET'
                    })
                    .then(function(response) {
                        if (response.ok) {
                           // Xử lý kết quả trả về từ server nếu thành công
                           response.text().then(function(responseData) {
                               // Xử lý chuỗi văn bản
                               document.querySelector('#price-temp').innerHTML = responseData;
                               document.querySelector('#price-total').innerHTML = responseData;
                               //xóa phần tử
                               productItem.remove();
                               //reload lại trang nếu không còn sản phẩm 
                               if (responseData == '0₫') {
                                   location.reload();
                               }
                            });
                        } else {
                            // Xử lý lỗi nếu không thành công
                            alert('Lỗi xảy ra. Vui lòng thử lại sau.');
                        }
                    })
                    .catch(function(error) {
                        // Xử lý lỗi kết nối
                        alert('Lỗi kết nối. Vui lòng kiểm tra lại đường truyền mạng.');
                    });

            });
            // Hàm cập nhật số lượng và gửi form
            function updateQuantity() {
                // Lấy giá trị của các trường input
                var quantity = quantityInput.value;
                var id = productItem.querySelector('input[name="id"]').value;

                // Tạo URL endpoint với các tham số truyền vào
                var url = './pages/Handle/cart_handle.php?quantity=' + encodeURIComponent(quantity) + '&id=' + encodeURIComponent(id);

                // Gửi yêu cầu AJAX
                fetch(url, {
                        method: 'GET'
                    })
                    .then(function(response) {
                        if (response.ok) {
                            // Xử lý kết quả trả về từ server nếu thành công
                            response.json().then(function(responseData) {
                                // Xử lý kết quả JSON
                                var newTotal = responseData.newTotal;
                                var thanhtienDetail = responseData.thanhtien_detail;
                                // Xử lý chuỗi văn bản
                                document.querySelector('#price-temp').innerHTML = newTotal;
                                document.querySelector('#price-total').innerHTML = newTotal;
                                document.querySelector('#items_total_'+id).innerHTML = thanhtienDetail;
                            });
                        } else {
                            // Xử lý lỗi nếu không thành công
                            alert('Lỗi xảy ra. Vui lòng thử lại sau.');
                        }
                    })
                    .catch(function(error) {
                        // Xử lý lỗi kết nối
                        alert('Lỗi kết nối. Vui lòng kiểm tra lại đường truyền mạng.');
                    });
            }
        });
    </script>