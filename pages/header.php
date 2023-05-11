<?php
session_start();
if (isset($_GET['dangxuat']) && $_GET['dangxuat'] == 1) {
    unset($_SESSION['cart_seoul']);
    unset($_SESSION['username']);
}
?>

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

                <li class=" <?php if ($_GET['quanly'] == '') echo 'active' ?>"><a href="index.php">TRANG CHỦ</a></li>
                <li class=" <?php if ($_GET['quanly'] == 'thucdon' || $_GET['quanly'] == 'sanpham') echo 'active' ?>"><a href="index.php?quanly=thucdon&id=0">THỰC ĐƠN</a></li>
                <li class=" <?php if ($_GET['quanly'] == 'gioithieu') echo 'active' ?>"><a href="index.php?quanly=gioithieu">GIỚI THIỆU</a></li>
                <li class=" <?php if ($_GET['quanly'] == 'lienhe') echo 'active' ?>"><a href="index.php?quanly=lienhe">LIÊN HỆ</a></li>
            </ul>
        </nav>
        <div class="header__tool d-flex align-items-center ">
            <form class="input-group" action="./pages/search.html" method="post">
                <input type="text" class="form-control" placeholder="Tìm món ăn..." aria-label="Recipient's username" aria-describedby="button-addon2">
                <button type="submit" id="button-addon2" class="header__search--button "><i class="fas fa-search"></i></button>
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
                    <?php
                    if (isset($_SESSION['username'])) {
                        $sql = "SELECT * FROM user WHERE id = '$_SESSION[id_customer]' LIMIT 1";
                        $row = mysqli_query($mysqli, $sql);
                        $row_user = mysqli_fetch_assoc($row);
                    ?>

                        <div class="account">
                            <img src="./Admin/img/user_avatar/<?php echo $row_user['avatar'] ?>" alt="">
                            <ul class="list-group">
                                <li class="list-group-item"><a href="./user-file.php"><i class="fas fa-user"></i>Hồ
                                        sơ</a></li>
                                <li class="list-group-item"><a href="./user-file.php"><i class="fas fa-utensils"></i>Đơn hàng</a></li>
                                <li class="list-group-item"><a href="./user-help.php"><i class="fas fa-question-circle"></i>Hỗ trợ</a>
                                </li>
                                <li class="list-group-item"><a href="./index.php?dangxuat=1"><i class="fas fa-sign-out-alt"></i>Đăng xuất</a></li>
                            </ul>
                        </div>
                        <a href="./index.php?quanly=cart">
                            <i class="fa fa-shopping-basket basket">
                                <span class="notify-cart"><?php $i = 0;
                                                            if (isset($_SESSION['cart_seoul']))
                                                                foreach ($_SESSION['cart_seoul'] as $cart_item)
                                                                    $i++;
                                                            echo $i ?></span>
                            </i>
                        </a>
                    <?php
                    } else {
                    ?>
                        <a href="index.php?quanly=login">
                            <i class="fa fa-user"></i>
                        </a>
                        <a href="index.php?quanly=cart">
                            <i class="fa fa-shopping-basket basket">
                                <span class="notify-cart">0</span>
                            </i>
                        </a>
                    <?php
                    }

                    ?>
                </div>
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