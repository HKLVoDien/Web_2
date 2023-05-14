<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cảm ơn</title>
    <!-- FONT AWESOME  -->
    <link rel="stylesheet" href="../css/fontawesome-free/css/all.min.css">
    <!-- FONT GOOGLE  -->
    <link href="https://fonts.googleapis.com/css2?family=Mulish&display=swap" rel="stylesheet">
    <!-- BOOSTRAP -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- CSS  -->
    <link rel="stylesheet" href="../css/header-footer.css">
    <link rel="stylesheet" href="../css/thanks.css">

</head>

<body>
    <!-- HEADER  -->
    <header>
        <div class="header__content container-xl ">
            <div class="header__logo">
                <div class="logo">
                    <a href="./user-index.html"><img src="../img/img_index/Tenthuonghieu 182x58 .png" alt="logo"></a>
                </div>
            </div>
            <nav class="header__menu">
                <ul class="menu menu-1" id="mainNav">
                    <li class=""><a href="user-index.html">TRANG CHỦ</a></li>
                    <li><a href="./Menu/all-menu.html">THỰC ĐƠN</a></li>
                    <li><a href="./intro.html">GIỚI THIỆU</a></li>
                    <li><a href="./contact.html">LIÊN HỆ</a></li>
                </ul>
            </nav>
            <div class="header__tool d-flex align-items-center ">
                <form class="input-group" action="./search.html" method="post">
                    <input type="text" class="form-control" placeholder="Tìm món ăn..."
                        aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button type="submit" id="button-addon2" class="header__search--button "><i
                            class="fas fa-search"></i></button>
                </form>

                <div class="header__flag " data-bs-toggle="modal" data-bs-target="#notifyModal">
                    <div class="flag-item1 ">
                        <a href="#">
                            <img src="../img/img_index/flag-vn.png" alt="flag_VN">
                        </a>
                    </div>
                    <div class="flag-item2 ">
                        <a href="#">
                            <img src="../img/img_index/flag-en.png" alt="flag_EN">
                        </a>
                    </div>

                </div>

                <div class="header__icon">
                    <div class="icon">
                        <div class="account">
                            <img src="../img/img_index/avatar.jpg" alt="">
                            <ul class="list-group">
                                <li class="list-group-item"><a href="./user-file.html"><i class="fas fa-user"></i>Hồ
                                        sơ</a></li>
                                <li class="list-group-item"><a href="./user-file.html"><i
                                            class="fas fa-utensils"></i>Đơn hàng</a></li>
                                <li class="list-group-item"><a href="./user-help.html"><i
                                            class="fas fa-question-circle"></i>Hỗ trợ</a>
                                </li>
                                <li class="list-group-item"><a href="../index.html"><i
                                            class="fas fa-sign-out-alt"></i>Đăng xuất</a></li>
                            </ul>
                        </div>
                        <a href="./user-cart.html">
                            <i class="fa fa-shopping-basket basket">
                                <span class="notify-cart">2</span>
                            </i>
                        </a>

                    </div>
                </div>

            </div>
        </div>

    </header>
    <!-- Modal -->
    <div class="modal fade" id="notifyModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 text-danger" id="exampleModalLabel">Thông báo</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Chức năng đang cập nhật!
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB-->
    <section class="breadcrumb_section container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                <li class="breadcrumb-item active" aria-current="page">Cảm ơn</li>

            </ol>
        </nav>
    </section>

    <!-- THANK YOU  -->
    <section class="thanks">
        <div class="container">
            <h2>Đặt hàng thành công!</h2>
            <p class="lead">Cảm ơn bạn đã đặt hàng! Đơn hàng của bạn đang được xử lý.</p>
            <hr>
            <p>Cần hỗ trợ? <a href="./contact.html">Liên hệ</a></p>
            <div class="thanks__btn lead
            ">
                <button> <a href="./user-file.html">Xem đơn hàng</a></button>
                <button><a href="./user-index.html">Trang chủ</a></button>
            </div>
        </div>
    </section>

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
                            <img src="../img/img_index/logo_spicy.png" alt="giao_hang">
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
    <!-- Back to top -->
    <a href="#" class="BackToTop cd-top text-replace js-cd-top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!-- JQUERY  -->
    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <!-- BOOSTRAP JS  -->
    <script src="../js/bootstrap.bundle.min.js"></script>
    <!-- UTIL JS  -->
    <script src="../js/util.js"></script>
    <!-- BACKTOTOP JS  -->
    <script src="../js/main-backToTop.js"></script>

</body>

</html>