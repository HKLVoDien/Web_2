<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mỳ Cay</title>
    <!-- FONT AWESOME  -->
    <link rel="stylesheet" href="./css/fontawesome-free/css/all.min.css">
    <!-- FONT GOOGLE  -->
    <link href="https://fonts.googleapis.com/css2?family=Mulish&display=swap" rel="stylesheet">
    <!-- OWL CAROUSEL  -->
    <link rel="stylesheet" href="./css/owl.carousel.min.css">
    <link rel="stylesheet" href="./css/owl.theme.default.min.css">
    <!-- BOOSTRAP -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <!-- CSS  -->
    <link rel="stylesheet" href="./css/index.css">
  
</head>

<body>
    <!-- HEADER  -->
    <header>
        <div class="header__content container-xl ">
            <div class="header__logo">
                <div class="logo">
                    <a href="index.html"><img src="./img/img_index/Tenthuonghieu 182x58 .png" alt="logo"></a>
                </div>
            </div>
            <nav class="header__menu">
                <ul class="menu menu-1" id="mainNav">
                    <li class="active"><a href="#">TRANG CHỦ</a></li>
                    <li><a href="./pages/Menu/all-menu.html">THỰC ĐƠN</a></li>
                    <li><a href="./pages/intro.html">GIỚI THIỆU</a></li>
                    <li><a href="./pages/contact.html">LIÊN HỆ</a></li>
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
                        <a href="./pages/Login.html">
                            <i class="fa fa-user"></i>
                        </a>
                        <a href="./pages/cart.html">
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