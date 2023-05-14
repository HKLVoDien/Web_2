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
                    <button type="button" class="btn btn-danger"><a href="./index.php?quanly=login">Đăng
                            nhập</a></button>
                    <button type="button" class="btn btn-warning "><a href="./index.php?quanly=signup">Đăng
                            ký</a></button>
                </div>
            </div>
        </div>
    </div>
    <?php
    if (isset($_SESSION['username'])) {
    ?>
        <!-- ADDCART -->
        <div class="toast-container position-fixed bottom-0  p-3  toast--add">
            <div id="add--cart" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-body">
                    Sản phẩm đã được thêm vào giỏ hàng

                </div>
            </div>
        </div>
    <?php
    }
    ?>
    <!-- FOOTER  -->
    <section class="footer" id="footer">

        <div class="container">
            <div class="footer__conect">
                <p class="time">Thời gian hoạt động: <span> 09h00 - 22h00 mỗi ngày</span></p>
                <div class="footer__item">
                    <p>Kết nối Mỳ Cay Seoul:</p>
                    <a href="https://www.facebook.com/hethongmicayseoul/" target="_blank">
                        <i class="fab fa-facebook-square"></i>
                        <a href="https://www.instagram.com/heomixx1305/" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                </div>

            </div>
            <div class="footer__content">
                <div class="footer__shipper-main">
                    <div class="footer__shipper">
                        <div class="shipper">
                            <img src="./img/img_index/logo_spicy.png" alt="giao_hang">
                        </div>
                        <div class="footer__hotline">
                            <p>
                                <i class="fas fa-phone-alt"></i> <span>Hotline đặt hàng</span>
                            </p>
                            <p>19003360</p>
                        </div>
                    </div>
                </div>
                <div class="footer__blog">
                    <a href="#">
                        <p>Blog</p>
                    </a>
                    <a href="#">
                        <p>Tuyển dụng</p>
                    </a>
                    <a href="#">
                        <p>Hệ thống nhà hàng</p>
                    </a>
                </div>
                <div class="footer__buy">
                    <a href="#">
                        <p>Chính sách giao hàng</p>
                    </a>
                    <a href="#">
                        <p>Theo dõi đơn hàng</p>
                    </a>
                    <a href="#">
                        <p>Điều khoản và điều kiện</p>
                    </a>
                </div>
                <div class="footer__subscribe">
                    <a href="#">
                        <i class="fas fa-bell"></i>
                        <p>Đăng ký nhận tin</p>
                    </a>
                    <a href="#">
                        <p>Nhận thông tin sản phẩm mới nhất, tin khuyến mãi</p>
                    </a>
                    <form action="#" class="subscribe">
                        <input type="text" placeholder="Email của bạn">
                        <br>
                        <button type="submit" class="đk">ĐĂNG KÝ</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="footer__copy">
            <p>&copy; <span>2022 Công ty TNHH Mỳ Cay Seoul | Design by My Group</span> </p>
        </div>
    </section>
    <!-- HELLO & ADDCART JS -->
    <script>
        function thongbaopopup() {
            document.getElementById("hello").classList.toggle("active");

            setTimeout(function() {
                document.getElementById("hello").classList.remove("active");
            }, 3000);
        }

        // ADDCART
        var listAdd = document.getElementsByClassName('add')
        const toastLiveExample = document.getElementById('add--cart')
        for (var i = 0; i < listAdd.length; i++) {
            listAdd[i].addEventListener('click', () => {
                const toast = new bootstrap.Toast(toastLiveExample)
                toast.show()
            });
        }
    </script>
    <!-- Btn add cart -->
    <script>
        // Lấy danh sách các phần tử sản phẩm
        var productItems = document.querySelectorAll('.simpleCart_items');
    </script>