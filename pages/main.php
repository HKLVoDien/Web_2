<div class="main">
    <div class="maincontent"></div>
    <?php if (isset($_GET['quanly'])) {
        $tam = $_GET['quanly'];
    } else {
        $tam = '';
    }
    if ($tam == 'thucdon') {
        include "./pages/all-menu.php";
    } elseif ($tam == 'sanpham') {
        include "./pages/product_detail.php";
    } elseif ($tam == 'gioithieu') {
        include "./pages/intro.php";
    } elseif ($tam == 'lienhe') {
        include "./pages/contact.php";
    } elseif ($tam == 'user') {
        include "./pages/login.php";
    } elseif ($tam == 'cart') {
        include "./pages/cart.php";
    } else {

        include 'index_gui.php';
    }
    ?>

</div>