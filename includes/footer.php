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
    <!-- thư viện hỗ trợ animation  -->
    <script src="./node_modules/jquery/dist/jquery.min.js"></script>

    <script src="./js/owl.carousel.min.js"></script>
    <script>
        $('.owl-carousel').owlCarousel({
            autoplay: true,
            loop: true,
            margin: 10,
            nav: false,
            stagePadding: 150,
            autoplayHoverPause: true,
            slideTransition: 'ease-out',
            smartSpeed: 3000,
            responsive: {
                0: {
                    items: 1
                },
                500: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        })
    </script>
    <!-- Back to top  -->
    <a href="#" class="BackToTop cd-top text-replace js-cd-top">
        <i class="fa fa-angle-up"></i>
    </a>
    <script src="./js/util.js"></script>
    <script src="./js/main-backToTop.js"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <!-- MENU JS -->
    <Script>
        // kiếm thẻ có id là mainNav 
        //kiếm thẻ ul
        var paymentMethod = document.getElementById("nav__menu");
        // kiếm thẻ con li 
        var listMethod = paymentMethod.getElementsByTagName("li");
        for (var i = 0; i < listMethod.length; i++) {
            // khi thẻ li đc click thì gọi hàm nó ra
            listMethod[i].addEventListener("click", function () {
                //tìm thẻ nào đang đc gắn acitve
                var current = document.querySelector("#nav__menu .active");
                // xóa class active của thẻ đang được gắn
                current.className = current.className.replace("active", "");
                // thêm class active vào thẻ li được click 
                this.className += "active";
            });


        }
    </Script>
    <script>
        var listMenu = document.getElementsByClassName("food__main")
        for (var i = 1; i < listMenu.length; i++) {
            listMenu[i].style.display = "none";
        }
        function allMenu() {
            for (var i = 0; i < listMenu.length; i++) {
                listMenu[i].style.display = "none";
            }
            var x = document.getElementById("all");
            x.style.display = "block";
        }
        function MMMenu() {
            for (var i = 0; i < listMenu.length; i++) {
                listMenu[i].style.display = "none";
            }
            var x = document.getElementById("MM");
            x.style.display = "block";
        }
        function MLMenu() {
            for (var i = 0; i < listMenu.length; i++) {
                listMenu[i].style.display = "none";
            }
            var x = document.getElementById("ML");
            x.style.display = "block";
        }
        function MTRMenu() {
            for (var i = 0; i < listMenu.length; i++) {
                listMenu[i].style.display = "none";
            }
            var x = document.getElementById("MTR");
            x.style.display = "block";
        }
        function MTHMenu() {
            for (var i = 0; i < listMenu.length; i++) {
                listMenu[i].style.display = "none";
            }
            var x = document.getElementById("MTH");
            x.style.display = "block";
        }
        function AVMenu() {
            for (var i = 0; i < listMenu.length; i++) {
                listMenu[i].style.display = "none";
            }
            var x = document.getElementById("AV");
            x.style.display = "block";
        }
        function DUMenu() {
            for (var i = 0; i < listMenu.length; i++) {
                listMenu[i].style.display = "none";
            }
            var x = document.getElementById("DU");
            x.style.display = "block";
        }
    </script>
    <!-- QUANTITY JS  -->
    <script>       jQuery(document).ready(($) => {
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
        $(function abc() {
      $(".trash").on("click", function () {
        swal({
          title: "Cảnh báo",
          text: "Bạn có chắc chắn là muốn xóa sản phẩm này?",
          buttons: ["Hủy bỏ", "Đồng ý"],
        })
          .then((willDelete) => {
            if (willDelete) {
              swal("Đã xóa thành công.!", {

              });
            }
          });
      });
    });
    oTable = $('#sampleTable').dataTable();
    $('#all').click(function (e) {
      $('#sampleTable tbody :checkbox').prop('checked', $(this).is(':checked'));
      e.stopImmediatePropagation();
    });
    </script>
    <!-- POPUP JS  -->
    <!-- js thong bao popup -->
    <script>
        function thongbaopopup() {
            document.getElementById("tbpopup-1").classList.toggle("active");
        }
    </script>
</body>

</html>