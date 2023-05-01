
    <!-- BREADCRUMB-->
    <section class="breadcrumb_section container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../index.html">Trang chủ</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tìm kiếm</li>

            </ol>
        </nav>
    </section>
    <!-- SEARCH  -->
    <section class="seoul__search container">
        <h1>Tìm kiếm</h1>
        <p class="mb-3">Có 3 kết quả phù hợp cho <strong>"tok"</strong></p>
        <div class="product__filter mb-3 row">
            <div class="filter--range col-6 ">
                <p>Khoảng giá:</p>
                <form action="" class="d-inline-block">
                    <input type="text" maxlength="13" placeholder="Từ ₫">
                    <div class="line"></div>
                    <input type="text" maxlength="13" placeholder="Đến ₫">
                </form>
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
            <div class="col-3 product_content_items">
                <div class="card">
                    <div class="product_content__img"><a href="./Product/dav_TBKhaisan-product.html"><img
                                src="../img/AnVat/Tokbokki/TBHS.jpg" class="card-img-top" alt="..."></a>
                    </div>
                    <div class="card-body ">
                        <h5 class="card-title">tokbokki hải sản</h5>
                        <p class="card-text">55,000₫</p>
                        <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#Modalcheck-user">Đặt món</a>
                    </div>
                </div>
            </div>
            <div class="col-3 product_content_items">
                <div class="card">
                    <div class="product_content__img"><a href="./Product/dav_TBKtruyenthong-product.html"><img
                                src="../img/AnVat/Tokbokki/Seoul 201421.jpg" class="card-img-top" alt="..."></a>
                    </div>
                    <div class="card-body ">
                        <h5 class="card-title">Tokbokki truyền thống</h5>
                        <p class="card-text">99,000₫</p>
                        <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#Modalcheck-user">Đặt món</a>
                    </div>
                </div>
            </div>
            <div class="col-3 product_content_items">
                <div class="card">
                    <div class="product_content__img"><a href="./Product/dav_TBKphomai-product.html"><img
                                src="../img/AnVat/Tokbokki/TBLPM.jpg" class="card-img-top" alt="..."></a>
                    </div>
                    <div class="card-body ">
                        <h5 class="card-title">Tokbokki phô mai</h5>
                        <p class="card-text">25,000₫</p>
                        <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#Modalcheck-user">Đặt món</a>
                    </div>
                </div>
            </div>
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
    </section>


    <!-- Back to top  -->
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
    <!-- PAYMENT JS  -->
    <Script>
        // kiếm thẻ có id là mainNav 
        //kiếm thẻ ul
        var paymentMethod = document.getElementById("payment__method");
        // kiếm thẻ con li 
        var listMethod = paymentMethod.getElementsByTagName("label");
        for (var i = 0; i < listMethod.length; i++) {
            // khi thẻ li đc click thì gọi hàm nó ra
            listMethod[i].addEventListener("click", function () {
                //tìm thẻ nào đang đc gắn acitve
                var current = document.querySelector("#payment__method .active");
                // xóa class active của thẻ đang được gắn
                current.className = current.className.replace("active", "");
                // thêm class active vào thẻ li được click 
                this.className += "active";

            });


        }
    </Script>