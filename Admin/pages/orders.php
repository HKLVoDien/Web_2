<!DOCTYPE html>
<html lang="en">
<?php session_start();
include '../../database/config.php';

?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quản lý đơn hàng | Admin Seoul</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../../css/fontawesome-free/css/all.min.css">
    <!-- IonIcons -->
    <link rel="stylesheet" href="../css/IonIcons.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../css/adminlte.min.css">
    <style>
        .filter__right input {
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .app-content {
            background-color: #fff;
        }

        .content-wrapper {
            background-color: #fff;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="../../index.html" class="nav-link">Trang web</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Liên hệ</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Tìm kiếm" aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-bs-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <p align=" center">Không có tin nhắn mới</p>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">Xem tất cả tin nhắn</a>
                    </div>
                </li>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link " data-bs-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">3</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 phản hồi mới
                            <span class="float-right text-muted text-sm">2 ngày trước</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">Xem tất cả thông báo</a>
                    </ul>
                    <ul class="dropdown-menu">
                        <li><button class="dropdown-item" type="button">Action</button></li>
                        <li><button class="dropdown-item" type="button">Another action</button></li>
                        <li><button class="dropdown-item" type="button">Something else here</button></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="../index.php" class="brand-link">
                <img src="../../img/img_index/logo_spicy.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Admin Seoul</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <!-- <img src="../../img/img_index/Originals/logo_spicy.png" class="img-circle elevation-2" alt="User Image"> -->
                    </div>
                    <div class="info">
                        <a href="#" class="d-block"><?php if (isset($_SESSION['dangnhap_seoul'])) {
                                                        echo $_SESSION['dangnhap_seoul'];
                                                    } ?></a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Tìm kiếm" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item ">
                            <a href="../index.php" class="nav-link ">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Bảng tin </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Bài viết
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Tất cả bài viết</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Bài viết mới</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Chuyên mục</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Thẻ</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-envelope"></i>
                                <p>
                                    Hộp thư
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Chưa đọc</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Đã đọc</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Hộp thư đến</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-file"></i>
                                <p>
                                    Trang
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Cửa hàng</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Giỏ hàng</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Yêu thích</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Liên hệ </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Tài khoản</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Thanh toán</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item ">
                            <a href="#" class="nav-link ">
                                <i class="nav-icon fas fa-archive"></i>
                                <p>
                                    Sản phẩm </p>
                                <i class="fas fa-angle-left right"></i>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="./All-product.php" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Tất cả sản phẩm</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./add-product.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Thêm mới</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./category.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Danh mục</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Từ khoá</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fa fa-shopping-cart"></i>
                                <p>
                                    Quản lý đơn hàng </p>
                                <i class="fas fa-angle-left right"></i>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item ">
                                    <a href="./orders.php" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Tất cả đơn hàng</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Chưa xử lý</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Đã xử lý</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="./user.php" class="nav-link ">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                    Quản lý người dùng </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./statistical.php" class="nav-link ">
                                <i class="nav-icon fas fa-chart-bar"></i>
                                <p>
                                    Thống kê </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link ">
                                <i class="nav-icon fas fa-comment-alt"></i>
                                <p>
                                    Phản hồi </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../index.php?dangxuat=1" class="nav-link ">
                                <i class=" nav-icon fas fa-sign-out-alt"></i>>
                                <p>
                                    Đăng xuất </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Danh sách đơn hàng</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">

                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class=" card">
                        <div class=" mx-3">
                            <!-- List tác vụ -->
                            <div class="row  my-3 m-0">
                                <div class="mr-3  ">
                                    <a class="btn-order btn-outline-success btn" href="#" title="Thêm"><i class="fas fa-plus"></i>
                                        Tạo mới</a>
                                </div>
                                <div class="mr-3">
                                    <a class="btn-order btn-outline-info btn" type="button" title="Nhập" onclick="myFunction(this)"><i class="fas fa-file-upload"></i> Tải từ
                                        file</a>
                                </div>

                                <div class="mr-3">
                                    <a class="btn-order btn-outline-info btn " type="button" title="In" onclick="myApp.printTable()"><i class="fas fa-print"></i> In dữ liệu</a>
                                </div>
                                <div class="mr-3">
                                    <a class="btn-order btn-outline-warning btn js-textareacopybtn" type="button" title="Sao chép"><i class="fas fa-copy"></i> Sao
                                        chép</a>
                                </div>

                                <div class="mr-3">
                                    <a class="btn-order btn-outline-success btn" href="" title="In"><i class="fas fa-file-excel"></i> Xuất
                                        Excel</a>
                                </div>
                                <div class="mr-3">
                                    <a class="btn btn-outline-secondary " type="button" title="Xóa" onclick="myFunction(this)"><i class="fas fa-trash-alt"></i> Xóa tất cả </a>
                                </div>
                            </div>
                            <!-- /List tác vụ -->
                            <div class="row element-filter mx-0 mb-3">
                                <div class="filter__date col-6 p-0">
                                    <form action="../manage/manage_order.php" method="GET" id="form_date">
                                        <label for="datein">Từ ngày: </label>
                                        <input type="date" name="datein" id="datein">
                                        <label for="dateout">đến ngày: </label>
                                        <input type="date" name="dateout" id="dateout">
                                        <input type="submit" class="btn-secondary" value="Áp dụng">
                                    </form>
                                    <form action="../manage/manage_order.php" method="GET" id="form_zone">
                                        <label for="datein">Khu vực: </label>
                                        <select class="form-select form-select-sm mb-3" id="city" aria-label=".form-select-sm" name="customer_city" required>
                                            <option value="" selected>Chọn tỉnh thành</option>

                                        </select>

                                        <!-- <select class="form-select form-select-sm mb-3" id="district" aria-label=".form-select-sm" name="customer_district" required>
                                            <option value="" selected>Chọn quận huyện</option>
                                        </select>

                                        <select class="form-select form-select-sm mb-3" id="ward" aria-label=".form-select-sm" name="customer_ward" required>
                                            <option value="" selected>Chọn phường xã</option>

                                        </select> -->
                                        <input type="submit" class="btn-secondary" value="Áp dụng">
                                    </form>
                                </div>
                                <div class="filter__right col-6 p-0 text-right">
                                    <span>Tìm kiếm:</span>
                                    <input type="search" placeholder="">
                                </div>


                                <div class="filter__left col-6 p-0 mt-3">
                                    <span>Hiện</span>
                                    <select class="form-select px-3" aria-label="Default select">
                                        <option selected>10</option>
                                        <option value="1">15</option>
                                        <option value="2">20</option>
                                        <option value="3">25</option>
                                    </select>
                                    <span>đơn hàng</span>
                                </div>

                            </div>
                            <table class="table table-hover table-bordered" id="sampleTable">
                                <thead>
                                    <tr class="bg-light">
                                        <th width="10"><input type="checkbox" id="all"></th>
                                        <th>ID</th>
                                        <th>Khách hàng</th>
                                        <th>Ngày</th>
                                        <th>Địa chỉ</th>
                                        <th>Đơn hàng</th>
                                        <th style="width: 7vw;">Tổng</th>
                                        <th>Tình trạng</th>
                                        <th style="width: 8vw;">Tính năng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql_order = "SELECT * FROM orders ORDER BY id DESC";
                                    $query_order = mysqli_query($mysqli, $sql_order);
                                    while ($row_order = mysqli_fetch_array($query_order)) {
                                        $sql_order_detail = "SELECT orders_details.id,product.product_name, orders_details.total_money,orders_details.num FROM orders_details,product  WHERE  orders_details.order_id = '$row_order[id]'  and product.id = orders_details.product_id ORDER BY id ASC";
                                        $query_order_detail = mysqli_query($mysqli, $sql_order_detail);
                                    ?>
                                        <tr>
                                            <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                            <td class="id_order"><?php echo $row_order['id'] ?></td>
                                            <td><?php echo $row_order['fullname'] ?></td>
                                            <td><?php echo $row_order['order_date'] ?></td>
                                            <td><?php echo $row_order['address'] ?></td>
                                            <td>
                                                <?php while ($row_order_detail = mysqli_fetch_array($query_order_detail)) {
                                                ?>
                                                    <?php echo $row_order_detail['product_name'] . ', '; ?>
                                                <?php
                                                }
                                                ?>
                                            </td>
                                            <td><?php echo number_format($row_order['total_money'], 0, ',', ',') . '₫'; ?></td>
                                            <td><span class="badge  <?php
                                                                    switch ($row_order['status']) {
                                                                        case  1;
                                                                            echo 'bg-warning';
                                                                            break;
                                                                        case  2;
                                                                            echo 'bg-info';
                                                                            break;
                                                                        case  3;
                                                                            echo 'bg-primary';
                                                                            break;
                                                                        case  4;
                                                                            echo 'bg-success';
                                                                            break;
                                                                        case  5;
                                                                            echo 'bg-danger';
                                                                            break;
                                                                    }
                                                                    ?>">
                                                    <?php
                                                    switch ($row_order['status']) {
                                                        case  1;
                                                            echo 'Chưa xác nhận';
                                                            break;
                                                        case  2;
                                                            echo 'Đã xác nhận';
                                                            break;
                                                        case  3;
                                                            echo 'Đang vận chuyển';
                                                            break;
                                                        case  4;
                                                            echo 'Đã hoàn thành';
                                                            break;
                                                        case  5;
                                                            echo 'Đã huỷ';
                                                            break;
                                                    }
                                                    ?>
                                                </span>
                                            </td>
                                            <td>
                                                <!-- <button class="btn btn-outline-danger  btn-sm trash m-1" type="button" title="Xóa" data-bs-toggle="modal" data-bs-target="#ModalRM"><i class="fas fa-trash-alt"></i> </button> -->

                                                <button class="btn btn-outline-warning btn-sm edit m-1" type="button" title="Sửa" data-bs-toggle="modal" data-bs-target="#ModalUP"><i class="fa fa-edit"></i></button>
                                            </td>
                                        </tr>
                                    <?php
                                    }

                                    ?>
                                </tbody>
                            </table>
                            <!--
                                 MODAL
                                -->
                            <div class="modal fade" id="ModalUP" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                                <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                                    <div class="modal-content">

                                    </div>
                                    <div class="modal-footer">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="ModalRM" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered ">
                                <div class="modal-content">
                                    <div class="modal-header justify-content-center">
                                        <h1 class="modal-title fs-6 fw-bold" id="exampleModalLabel">Cảnh báo</h1>
                                    </div>
                                    <div class="modal-body text-center">
                                        Bạn chắc chắn muốn xoá đơn hàng này? </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Huỷ
                                            bỏ</button>
                                        <button type="button" class="btn btn-success remove">Đồng ý</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- pagination -->
                        <nav aria-label="Page navigation ">
                            <ul class="pagination justify-content-center">
                                <li class="page-item disabled">
                                    <a class="page-link " href="#" aria-label="Lùi">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Tiếp">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>


        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="container-fluid main-footer">
            <strong>Copyright &copy; 2022 <a href="https://adminlte.io">AdminSeoul</a>.</strong>

            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 0.0.0
            </div>
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="../../node_modules/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../../js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE -->
    <script src="../js/adminlte.js"></script>
    <!-- AXIOS JS -->
    <script src="../../js/axios.min.js"></script>
    <!-- OPTIONAL SCRIPTS -->
    <script src="../js/Chart.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <!-- <script src="dist/js/demo.js"></script> -->
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="../js/dashboard3.js"></script>

    <!-- JS LỌC DATE -->
    <script>
        $(document).ready(function() {
            // Lắng nghe sự kiện submit của form_date
            $('#form_date').submit(function(event) {
                event.preventDefault(); // Ngăn chặn hành vi submit mặc định của form

                // Gửi yêu cầu AJAX đến trang xử lý PHP
                $.ajax({
                    url: $(this).attr('action'), // URL của trang xử lý PHP
                    type: $(this).attr('method'), // Phương thức gửi dữ liệu (GET hoặc POST)
                    data: $(this).serialize(), // Dữ liệu gửi đi từ form

                    success: function(response) {
                        // Lấy tbody element
                        var tbody = $('#sampleTable tbody');

                        // Thay thế nội dung của tbody với dữ liệu trả về từ PHP
                        tbody.html(response);
                        // JS DELETED
                        $(document).ready(function() {
                            var id_order = null;

                            $('.trash').click(function() {
                                id_order = $(this).closest('tr').find('.id_order').text().trim();
                                console.log('id_order:', id_order);
                            });

                            $(".remove").click(function() {
                                if (id_order) {
                                    var id = id_order;
                                    $.ajax({
                                        url: '../manage/manage_order.php',
                                        type: 'GET',
                                        data: {
                                            id_order: id,
                                        },
                                        success: function(response) {
                                            location.reload();
                                        },
                                        error: function(xhr, status, error) {
                                            // Xử lý lỗi nếu có
                                            console.log(error);
                                        }
                                    });
                                }
                            });
                        });
                        // JS UPDATED
                        $('.edit').click(function() {
                            id_order = $(this).closest('tr').find('.id_order').text().trim();
                            console.log('id_order:', id_order);
                            $.post('../manage/manage_order.php', {
                                    id_update: id_order
                                },
                                function(data) {
                                    $('#ModalUP .modal-content').html(data);
                                });
                        });
                    },

                    error: function(xhr, status, error) {
                        // Xử lý lỗi nếu có
                        console.log(xhr.responseText);
                    }
                });
            });
        });
    </script>
    <!-- JS LỌC Khu vực -->
    <script>
        $(document).ready(function() {
            // Lắng nghe sự kiện submit của form_date
            $('#form_zone').submit(function(event) {
                event.preventDefault(); // Ngăn chặn hành vi submit mặc định của form
                var selectedOptionCityText = $("#city option:selected").text();
                // Gửi yêu cầu AJAX đến trang xử lý PHP
                $.ajax({
                    url: $(this).attr('action'), // URL của trang xử lý PHP
                    type: $(this).attr('method'), // Phương thức gửi dữ liệu (GET hoặc POST)
                    data: {
                        city: selectedOptionCityText,
                    }, // Dữ liệu gửi đi từ form

                    success: function(response) {
                        // Lấy tbody element
                        var tbody = $('#sampleTable tbody');

                        // Thay thế nội dung của tbody với dữ liệu trả về từ PHP
                        tbody.html(response);
                        // JS DELETED
                        $(document).ready(function() {
                            var id_order = null;

                            $('.trash').click(function() {
                                id_order = $(this).closest('tr').find('.id_order').text().trim();
                                console.log('id_order:', id_order);
                            });

                            $(".remove").click(function() {
                                if (id_order) {
                                    var id = id_order;
                                    $.ajax({
                                        url: '../manage/manage_order.php',
                                        type: 'GET',
                                        data: {
                                            id_order: id,
                                        },
                                        success: function(response) {
                                            location.reload();
                                        },
                                        error: function(xhr, status, error) {
                                            // Xử lý lỗi nếu có
                                            console.log(error);
                                        }
                                    });
                                }
                            });
                        });
                        // JS UPDATED
                        $('.edit').click(function() {
                            id_order = $(this).closest('tr').find('.id_order').text().trim();
                            console.log('id_order:', id_order);
                            $.post('../manage/manage_order.php', {
                                    id_update: id_order
                                },
                                function(data) {
                                    $('#ModalUP .modal-content').html(data);
                                });
                        });
                    },

                    error: function(xhr, status, error) {
                        // Xử lý lỗi nếu có
                        console.log(xhr.responseText);
                    }
                });
            });
        });
    </script>
    <!-- JS DELETED -->
    <script>
        $(document).ready(function() {
            var id_order = null;

            $('.trash').click(function() {
                id_order = $(this).closest('tr').find('.id_order').text().trim();
                console.log('id_order:', id_order);
            });

            $(".remove").click(function() {
                if (id_order) {
                    var id = id_order;
                    $.ajax({
                        url: '../manage/manage_order.php',
                        type: 'GET',
                        data: {
                            id_order: id,
                        },
                        success: function(response) {
                            location.reload();
                        },
                        error: function(xhr, status, error) {
                            // Xử lý lỗi nếu có
                            console.log(error);
                        }
                    });
                }
            });
        });
    </script>
    <!-- JS UPDATED -->
    <script>
        $('.edit').click(function() {
            id_order = $(this).closest('tr').find('.id_order').text().trim();
            console.log('id_order:', id_order);
            $.post('../manage/manage_order.php', {
                    id_update: id_order
                },
                function(data) {
                    $('#ModalUP .modal-content').html(data);
                });
        });
    </script>

    <!-- SELECT CITY -->
    <script>
        var citis = document.getElementById("city");
        var districts = document.getElementById("district");
        var wards = document.getElementById("ward");
        var Parameter = {
            url: "../../js/data.json",
            method: "GET",
            responseType: "application/json",
        };
        var promise = axios(Parameter);
        promise.then(function(result) {
            renderCity(result.data);
        });

        function renderCity(data) {
            for (const x of data) {
                citis.options[citis.options.length] = new Option(x.Name, x.Id);
            }
            citis.onchange = function() {
                district.length = 1;
                ward.length = 1;
                if (this.value != "") {
                    const result = data.filter(n => n.Id === this.value);

                    for (const k of result[0].Districts) {
                        district.options[district.options.length] = new Option(k.Name, k.Id);
                    }
                }
            };
            district.onchange = function() {
                ward.length = 1;
                const dataCity = data.filter((n) => n.Id === citis.value);
                if (this.value != "") {
                    const dataWards = dataCity[0].Districts.filter(n => n.Id === this.value)[0].Wards;

                    for (const w of dataWards) {
                        wards.options[wards.options.length] = new Option(w.Name, w.Id);
                    }
                }
            };
        }
    </script>
</body>

</html>