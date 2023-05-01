    <link rel="stylesheet" href="./css/cart.css">
    <!-- CART  -->
    <section class="Seoul__cart container">
        <div class="row Seoul__cart__content">
            <div class="col-9 Seoul__cart--orders">
                <h1>Giỏ hàng</h1>
                <div class="noproduct">
                    <i class="fas fa-box-open"></i>
                    <p>Bạn chưa chọn sản phẩm nào!</p> 
                    <button class="btn"> <a href="./Menu/all-menu.html">Chọn món ngay</a></button>
                </div>
                <div class="hr"></div>

            </div>

            <div class="col-3 Seoul__cart--contact">
                <div class="user--sevice">
                    <h3>Dịch vụ khách hàng</h3>
                    <p>Bạn cần sự hỗ trợ từ chúng tôi? Hãy liên hệ ngay</p>
                    <a href="tel:19003360" title="Hotline: 19003360"><i class="fas fa-phone-alt"></i>1900  3360</a>
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

    <!-- HEADER JS  -->
    <Script>
        // kiếm thẻ có id là mainNav 
        //kiếm thẻ ul
        var mainNav = document.getElementById("mainNav");
        // kiếm thẻ con li 
        var listNav = mainNav.getElementsByTagName("li");
        for (var i = 0; i < listNav.length; i++) {
            // khi thẻ li đc click thì gọi hàm nó ra
            listNav[i].addEventListener("click", function () {
                //tìm thẻ nào đang đc gắn acitve
                var current = document.querySelector("#mainNav .active");
                // xóa class active của thẻ đang được gắn
                current.className = current.className.replace("active", "");
                // thêm class active vào thẻ li được click 
                this.className += "active";
            });

        }
    </Script>
    <!-- QUANTITY JS  -->
    <script>
        jQuery(document).ready(($) => {
            $('.quantity').on('click', '.plus', function (e) {
                let $input = $(this).prev('input.qty');
                let val = parseInt($input.val());
                $input.val(val + 1).change();
            });

            $('.quantity').on('click', '.minus',
                function (e) {
                    let $input = $(this).next('input.qty');
                    var val = parseInt($input.val());
                    if (val > 1) {
                        $input.val(val - 1).change();
                    }
                });
        });
    </script>
</body>

</html>