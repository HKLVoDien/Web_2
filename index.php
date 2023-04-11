<?php include "./includes/header.php"?>
    <!-- CAROUSEL  -->
    <section class="carousel">
        <div class="owl-carousel owl-theme">
            <div class="item">
                <a href="#"><img src="./img/img_index/Baner1 1150x460.jpg" alt="banner1"></a>
            </div>
            <div class="item">
                <a href="#"><img src="./img/img_index/banner_phu_nu.jpg" alt="banner5"></a>
            </div>
        </div>
    </section>
    <!-- ABOUT  -->
    <section class="about " id="about">
        <div class="about__content row container ">
            <div class="about__left col-5">
                <div class="title">
                    <p>
                        <img src="./img/img_index/Tenthuonghieu 182x58 .png" alt="logo">
                    </p>
                    <h3>Quán Mỳ Cay Hàn Quốc</h3>
                </div>
                <div class="content">
                    <p>
                        Công ty TNHH <span>Mì Cay Seoul</span> được thành lập năm 2016, chúng tôi đã có những bước phát
                        triển và không ngừng hoàn thiện trong việc thiết kế nhà hàng, tìm kiếm nguồn thực phẩm tươi
                        ngon, nghiên cứu công thức chế biến, đào tạo nghề, kỹ năng phục vụ và chăm sóc khách hàng.
                    </p>
                    <p>
                        Trong suốt thời gian hoạt động dến nay, công ty chúng tôi đã tư vấn, thiết kế, hỗ trợ đào tạo
                        với hơn 40 đơn vị hợp tác và nhà đầu tư.
                    </p>
                </div>
                <div class="view_more">
                    <p><a href="./pages/intro.html">Xem Thêm</a></p>
                </div>
            </div>
            <div class="about__right col-7">
                <div class="about__right-img row">
                    <div class="img_1 col-6">
                        <img src="./img/img_index/Seoul 201784.jpg" alt="3 món mì">
                    </div>
                    <div class="img_2 row col-6">
                        <div class="img_2-1 col-12">
                            <img src="./img/img_index/Seoul 202378.jpg" alt="đầu bếp cầm mì">
                        </div>
                        <div class="img_2-2 col-12">
                            <img src="./img/img_index/Seoul 300886.jpg" alt="lẩu">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- MENU  -->
    <section class="menu container" id="menu">
        <div class="title">
            <h3>BÁN CHẠY</h3>
        </div>
        <div class="menu__content">
            <div class="nav__menu">
                <ul id="nav__menu">
                    <li class="active" onclick="allMenu()"><a href="#menu">Tất cả</a></li>
                    <li><a href="#menu" onclick="MMMenu()">Món mỳ</a></li>
                    <li><a href="#menu" onclick="MLMenu()">Món lẩu</a></li>
                    <li><a href="#menu" onclick="MTRMenu()">Món trộn</a></li>
                    <li><a href="#menu" onclick="MTHMenu()">Món thêm</a></li>
                    <li><a href="#menu" onclick="AVMenu()">Ăn vặt</a></li>
                    <li><a href="#menu" onclick="DUMenu()">Đồ uống</a></li>

                </ul>
            </div>
            <div class="menu__food">
                <div class="food__main" id="all">
                    <div class="row-1">
                        <div class="food__item-1 food__item">
                            <div class="food__img">
                                <a href="./pages/Product/mtr_bibimbap-product.html"><img src="./img/ComTron/BB.jpg" alt="ảnh BBB"></a>
                            </div>
                            <div class="food__content">
                                <a href="./pages/Product/mtr_bibimbap-product.html">BIBIMBAP</a>
                                <p>55,000₫</p>
                                <div class="orders" data-bs-toggle="modal" data-bs-target="#Modalcheck-user">
                                    <button href="#">ĐẶT MÓN</button>
                                </div>
                            </div>
                        </div>
                        <div class="food__item-2  food__item">
                            <div class="food__img">
                                <a href="./pages/Product/mlt_thapcam-product.html"><img src="./img/mi/MLTTCAM.jpg" alt="ảnh "></a>
                            </div>
                            <div class="food__content">
                                <a href="">MỲ LẨU THÁI THẬP CẨM</a>
                                <p>99,000₫</p>
                                <div class="orders" data-bs-toggle="modal" data-bs-target="#Modalcheck-user">
                                    <button href="#">ĐẶT MÓN</button>
                                </div>
                            </div>
                        </div>
                        <div class="food__item-3  food__item">
                            <div class="food__img">
                                <a href="./pages/Product/dav_kimbap-product.html"><img src="./img/AnVat/KB.jpg" alt="ảnh "></a>
                            </div>
                            <div class="food__content">
                                <a href="">KIMBAP</a>
                                <p>45,000₫</p>
                                <div class="orders" data-bs-toggle="modal" data-bs-target="#Modalcheck-user">
                                    <button href="#">ĐẶT MÓN</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row-2">
                        <div class="food__item-1  food__item">
                            <div class="food__img LTTCN">
                                <a href="./pages/Product/dav_hcc-product.html"><img src="./imG/AnVat/Hcc.jpg" alt="ảnh "></a>
                            </div>
                            <div class="food__content">
                                <a href="">HÁ CẢO CHIÊN</a>
                                <p>35,000₫</p>
                                <div class="orders" data-bs-toggle="modal" data-bs-target="#Modalcheck-user">
                                    <button href="#">ĐẶT MÓN</button>
                                </div>
                            </div>
                        </div>
                        <div class="food__item-2  food__item">
                            <div class="food__img TĐ">
                                <a href="./pages/Product/du_tratraicay-product.html"><img src="./img/Nuoc/Seoul-drink03242-1.jpg" alt="ảnh "></a>
                            </div>
                            <div class="food__content">
                                <a href="">TRÀ TRÁI CÂY</a>
                                <p>30,000₫</p>
                                <div class="orders" data-bs-toggle="modal" data-bs-target="#Modalcheck-user">
                                    <button href="#">ĐẶT MÓN</button>
                                </div>
                            </div>
                        </div>
                        <div class="food__item-3  food__item">
                            <div class="food__img">
                                <a href="./pages/Product/dav_TBKtruyenthong-product.html"><img src="./img/AnVat/Tokbokki/Seoul 201421.jpg" alt="ảnh "></a>
                            </div>
                            <div class="food__content">
                                <a href="">TOKBOKKI TRUYỀN THỐNG</a>
                                <p>55,000₫</p>
                                <div class="orders" data-bs-toggle="modal" data-bs-target="#Modalcheck-user">
                                    <button href="#">ĐẶT MÓN</button>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row-3">
                        <div class="food__item-1  food__item">
                            <div class="food__img">
                                <a href="./pages/Product/dav_bcc-product.html"><img src="./img/AnVat/BTTHS.jpg" alt="ảnh "></a>
                            </div>
                            <div class="food__content">
                                <a href="">BÁNH CUỘN CHIÊN</a>
                                <p>35,000₫</p>
                                <div class="orders" data-bs-toggle="modal" data-bs-target="#Modalcheck-user">
                                    <button href="#">ĐẶT MÓN</button>
                                </div>
                            </div>
                        </div>
                        <div class="food__item-2  food__item">
                            <div class="food__img">
                                <a href="./pages/Product/dav_TBKphomai-product.html"> <img src="./img/AnVat/Tokbokki/TBLPM.jpg" alt="ảnh "></a>
                            </div>
                            <div class="food__content">
                                <a href="">TOKBOKKI PHÔ MAI</a>
                                <p>25,000₫</p>
                                <div class="orders" data-bs-toggle="modal" data-bs-target="#Modalcheck-user">
                                    <button href="#">ĐẶT MÓN</button>
                                </div>
                            </div>
                        </div>
                        <div class="food__item-3  food__item">
                            <div class="food__img">
                                <a href="./pages/Product/du_ruousoju-product.html"><img src="./img/Nuoc/Ruousoju.jpg" alt="ảnh "></a>
                            </div>
                            <div class="food__content">
                                <a href="">RƯỢU SOJU</a>
                                <p>70,000₫</p>
                                <div class="orders" data-bs-toggle="modal" data-bs-target="#Modalcheck-user">
                                    <button href="#">ĐẶT MÓN</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="food__main " id="MM">
                    <div class="row-1">
                        <div class="food__item-1  food__item">
                            <div class="food__img">
                                <a href="./pages/Product/mlt_thapcam-product.html"><img src="./img/mi/MLTTCAM.jpg" alt="ảnh "></a>
                            </div>
                            <div class="food__content">
                                <a href="">MỲ LẨU THÁI THẬP CẨM</a>
                                <p>99,000₫</p>
                                <div class="orders" data-bs-toggle="modal" data-bs-target="#Modalcheck-user">
                                    <button href="#">ĐẶT MÓN</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="food__main " id="ML">
                    <div class="row-1">
                        <p class="no--product">Không có sản phẩm nào!</p>
                    </div>
                </div>
                <div class="food__main" id="MTR">
                    <div class="row-1">
                        <div class="food__item-1 food__item">
                            <div class="food__img">
                                <a href="./pages/Product/mtr_bibimbap-product.html"><img src="./img/ComTron/BB.jpg" alt="ảnh BBB"></a>
                            </div>
                            <div class="food__content">
                                <a href="">BIBIMBAP</a>
                                <p>55,000₫</p>
                                <div class="orders" data-bs-toggle="modal" data-bs-target="#Modalcheck-user">
                                    <button href="#">ĐẶT MÓN</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="food__main" id="MTH">
                    <div class="row-1">
                        <p class="no--product">Không có sản phẩm nào!</p>
                    </div>
                </div>
                <div class="food__main" id="AV">
                    <div class="row-1">
                        <div class="food__item-1  food__item">
                            <div class="food__img">
                                <a href="./pages/Product/dav_kimbap-product.html"><img src="./img/AnVat/KB.jpg" alt="ảnh "></a>
                            </div>
                            <div class="food__content">
                                <a href="">KIMBAP</a>
                                <p>45,000₫</p>
                                <div class="orders" data-bs-toggle="modal" data-bs-target="#Modalcheck-user">
                                    <button href="#">ĐẶT MÓN</button>
                                </div>
                            </div>
                        </div>
                        <div class="food__item-2  food__item">
                            <div class="food__img LTTCN">
                                <a href="./pages/Product/dav_hcc-product.html"><img src="./imG/AnVat/Hcc.jpg" alt="ảnh "></a>
                            </div>
                            <div class="food__content">
                                <a href="">HÁ CẢO CHIÊN</a>
                                <p>35,000₫</p>
                                <div class="orders" data-bs-toggle="modal" data-bs-target="#Modalcheck-user">
                                    <button href="#">ĐẶT MÓN</button>
                                </div>
                            </div>
                        </div>
                        <div class="food__item-3  food__item">
                            <div class="food__img">
                                <a href="./pages/Product/dav_TBKtruyenthong-product.html"><img src="./img/AnVat/Tokbokki/Seoul 201421.jpg" alt="ảnh "></a>
                            </div>
                            <div class="food__content">
                                <a href="">TOKBOKKI TRUYỀN THỐNG</a>
                                <p>55,000₫</p>
                                <div class="orders" data-bs-toggle="modal" data-bs-target="#Modalcheck-user">
                                    <button href="#">ĐẶT MÓN</button>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row-2">
                        <div class="food__item-1  food__item">
                            <div class="food__img">
                                <a href="./pages/Product/dav_bcc-product.html"><img src="./img/AnVat/BTTHS.jpg" alt="ảnh "></a>
                            </div>
                            <div class="food__content">
                                <a href="">BÁNH CUỘN CHIÊN</a>
                                <p>35,000₫</p>
                                <div class="orders" data-bs-toggle="modal" data-bs-target="#Modalcheck-user">
                                    <button href="#">ĐẶT MÓN</button>
                                </div>
                            </div>
                        </div>
                        <div class="food__item-2  food__item">
                            <div class="food__img">
                                <a href="./pages/Product/dav_TBKphomai-product.html"> <img src="./img/AnVat/Tokbokki/TBLPM.jpg" alt="ảnh "></a>
                            </div>
                            <div class="food__content">
                                <a href="">TOKBOKKI PHÔ MAI</a>
                                <p>25,000₫</p>
                                <div class="orders" data-bs-toggle="modal" data-bs-target="#Modalcheck-user">
                                    <button href="#">ĐẶT MÓN</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="food__main" id="DU">
                    <div class="row-1">
                        <div class="food__item-1  food__item">
                            <div class="food__img">
                                <a href="./pages/Product/du_ruousoju-product.html"><img src="./img/Nuoc/Ruousoju.jpg" alt="ảnh "></a>
                            </div>
                            <div class="food__content">
                                <a href="">RƯỢU SOJU</a>
                                <p>70,000₫</p>
                                <div class="orders" data-bs-toggle="modal" data-bs-target="#Modalcheck-user">
                                    <button href="#">ĐẶT MÓN</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="menu__cart">
                    <div class="sticky-right">
                        <div class="title">Thông tin đơn hàng</div>
                        <div class="sticky__content">
                            <div class="orders-cart" id="cart-sidebar">
                                <div class="order-cart-ajax ajax-here">
                                    <div class="orders-cart-item">
                                        <div class="cart-item ">

                                        </div>
                                    </div>
                                    <div class="orders-cart-bottom">
                                        <p class="subtotal">
                                            Tạm tính:
                                            <span class="order-total">0₫</span>
                                        </p>
                                        <p class="fee-transport">
                                            Phí vận chuyển:
                                            <span class="order-total">0₫</span>
                                        </p>
                                    </div>
                                    <div class="orders-cart-total">
                                        <p>TỔNG CỘNG: <span>0₫</span></p>
                                    </div>
                                </div>
                                <div class="payment">
                                    <a href="" data-bs-toggle="modal" data-bs-target="#Modalcheck-user">THANH TOÁN</a>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
                <!-- Modal check-user-->
                <div class="modal fade" id="Modalcheck-user" tabindex="-1" aria-labelledby="check-user"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title " id="check-user">Bạn chưa đăng nhập!</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Bạn cần đăng nhập hoặc đăng ký tài khoản để mua hàng và thanh toán!
                            </div>
                            <div class="modal-footer justify-content-center">
                                <button type="button" class="btn btn-danger"><a href="./pages/Login.html">Đăng
                                        nhập</a></button>
                                <button type="button" class="btn btn-warning "><a href="./pages/SignUp.html">Đăng
                                        ký</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- Thong bao pupup -->
    <div class="tbpopup" id="tbpopup-1">
        <div class="tboverlay"></div>
        <div class="tbcontent">
            <div class="tbclose-btn" onclick="thongbaopopup()">&times;</div>
            <div style="font-size:30px;font-weight:bold">Xin chào</div>
            <p>Cảm ơn bạn đã ghé thăm trang web của mình, chúc bạn một ngày mới vui vẽ và tràn đầy hạnh phúc!</p>
        </div>
    </div>
    <?php include "includes/footer.php" ?>