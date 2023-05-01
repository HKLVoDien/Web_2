
    <!-- HEADER  -->
    <header>
        <div class="header__content container-xl ">
            <div class="header__logo">
                <div class="logo">
                    <a href="index.php"><img src="./img/img_index/Tenthuonghieu 182x58 .png" alt="logo"></a>
                </div>
            </div>
            <nav class="header__menu">
                <ul class="menu menu-1" id="mainNav">
                    <li class="active"><a href="index.php">TRANG CHỦ</a></li>
                    <li><a href="index.php?quanly=thucdon">THỰC ĐƠN</a></li>
                    <li><a href="index.php?quanly=gioithieu">GIỚI THIỆU</a></li>
                    <li><a href="index.php?quanly=lienhe">LIÊN HỆ</a></li>
                </ul>   
            </nav>
            <div class="header__tool d-flex align-items-center ">
                <form class="input-group" action="./pages/search.html" method="post">
                    <input type="text" class="form-control" placeholder="Tìm món ăn..."
                        aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button type="submit" id="button-addon2" class="header__search--button "><i
                            class="fas fa-search"></i></button>
                </form>

                <div class="header__flag " data-bs-toggle="modal" data-bs-target="#notifyModal">
                    <div class="flag-item1 ">
                        <a href="#">
                            <img src="./img/img_index/flag-vn.png" alt="flag_VN">
                        </a>
                    </div>
                    <div class="flag-item2 ">
                        <a href="#">
                            <img src="./img/img_index/flag-en.png" alt="flag_EN">
                        </a>
                    </div>

                </div>

                <div class="header__icon">
                    <div class="icon">
                        <a href="index.php?quanly=user">
                            <i class="fa fa-user"></i>
                        </a>
                        <a href="index.php?quanly=cart">
                            <i class="fa fa-shopping-basket basket">
                                <span class="notify-cart">0</span>
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