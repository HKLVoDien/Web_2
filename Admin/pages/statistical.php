<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thống kê | Admin Seoul</title>

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

        .tile .tile-title {
            margin-top: 0;
            margin-bottom: 30px;
            font-size: 20px;
            /* text-align: center; */
            border-bottom: 2px solid #FFD43B;
            padding-bottom: 10px;
            /* border-left: 3px solid black; */
            padding-left: 5px;
            color: black;
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
                    <a href="../../index.php" class="nav-link">Trang web</a>
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
                        <!-- <img src="../../img/img_index/Originals/logo_spicy.png" class="img-circle elevation-2"
                            alt="User Image"> -->
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
                        <li class="nav-item">
                            <a href="#" class="nav-link ">
                                <i class="nav-icon fas fa-archive"></i>
                                <p>
                                    Sản phẩm </p>
                                <i class="fas fa-angle-left right"></i>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="./All-product.php" class="nav-link active">
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
                        <li class="nav-item">
                            <a href="#" class="nav-link ">
                                <i class="nav-icon fa fa-shopping-cart"></i>
                                <p>
                                    Quản lý đơn hàng </p>
                                <i class="fas fa-angle-left right"></i>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="./orders.php" class="nav-link">
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
                            <a href="./statistical.php" class="nav-link active">
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
                            <a href="../index.html?dangxuat=1" class="nav-link ">
                                <i class=" nav-icon fas fa-sign-out-alt"></i></i>
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
            <main class="app-content">
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0">Thống kê</h1>
                            </div><!-- /.col -->
                            <div class="col-sm-6">

                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <div class="statistical__filter p-3">
                    <form action="">
                        <label for="filter__select">Thống kê: </label>
                        <select name="filter__select" id="filter__select" class="mr-3">
                            <option value="">Tất cả</option>
                            <option value="">Doanh số</option>
                            <option value="">Sản phẩm bán chạy</option>
                            <option value="">Nhân viên</option>
                            <option value="">Đơn hàng</option>
                        </select>
                        <label for="product">Loại sản phẩm: </label>
                        <select name="" id="product" class="mr-3">
                            <option value="">Tất cả</option>
                            <option value="">Mì kim chi</option>
                            <option value="">Mì lẩu thái</option>
                            <option value="">Lẩu kim chi</option>
                            <option value="">Lẩu thái</option>
                            <option value="">Đồ uống</option>
                            <option value="">Món trộn</option>
                            <option value="">Món thêm</option>
                        </select>
                        <label for="filter__date">Từ</label>
                        <input type="date" id="filter__date">
                        <label for="filter__dateout">đến</label>
                        <input type="date" id="filter__dateout ">
                        <label for="date__or">hoặc</label>
                        <select name="" id="date__or">
                            <option value="">-- Chọn khoảng thời gian --</option>
                            <option value="">Tuần nay</option>
                            <option value="">Tháng nay</option>
                            <option value="">3 tháng nay</option>
                            <option value="">6 tháng nay</option>
                            <option value="">Năm nay</option>
                        </select>
                        <button type="submit" class="btn btn-success mx-auto mt-3 d-block">Thống kê</button>
                    </form>
                </div>
                <div class="row px-2 m-0">
                    <div class="col-md-12">
                        <div class="tile">
                            <div>
                                <h3 class="tile-title">SẢN PHẨM BÁN CHẠY</h3>
                            </div>
                            <div class="tile-body">
                                <table class="table table-hover table-bordered" id="sampleTable">
                                    <thead>
                                        <tr>
                                            <th>Mã sản phẩm</th>
                                            <th>Tên sản phẩm</th>
                                            <th>Giá tiền</th>
                                            <th>Danh mục</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>MT003</td>
                                            <td>Mì kim chi bò</td>
                                            <td>34.000 đ</td>
                                            <td>Mì kim chi</td>
                                        </tr>
                                        <tr>
                                            <td>MT002</td>
                                            <td>Ăn Vặt Thập cẩm </td>
                                            <td>99.000 đ</td>
                                            <td>Ăn vặt</td>
                                        </tr>
                                        <tr>
                                            <td>MT007</td>
                                            <td> Mỳ kim chi bò mỹ</td>
                                            <td>49.000đ</td>
                                            <td>Mì kim chi</td>
                                        </tr>
                                        <tr>
                                            <td>MT009</td>
                                            <td>Bắp cải xanh thêm</td>
                                            <td>7.000 đ</td>
                                            <td>Món thêm</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row px-2 m-0">
                    <div class="col-md-12">
                        <div class="tile">
                            <div>
                                <h3 class="tile-title">TỔNG ĐƠN HÀNG</h3>
                            </div>
                            <div class="tile-body">
                                <table class="table table-hover table-bordered" id="sampleTable">
                                    <thead>
                                        <tr>
                                            <th>ID đơn hàng</th>
                                            <th>Khách hàng</th>
                                            <th>Đơn hàng</th>
                                            <th>Số lượng</th>
                                            <th>Tổng tiền</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>MD0837</td>
                                            <td>Triệu Thanh Phú</td>
                                            <td>Mỳ kim chi hải sản, Mỳ kim chi cá, Mỳ kim chi bò mỹ</td>
                                            <td>3 sản phẩm</td>
                                            <td>400.000 đ đ</td>
                                        </tr>
                                        <tr>
                                            <td>MD0836</td>
                                            <td>Nguyễn Thị Ngọc Cẩm</td>
                                            <td>Mỳ lẩu thái gà, Mỳ kim chi cá, Kim châm</td>
                                            <td>3 sản phẩm</td>
                                            <td>650.000 đ đ</td>
                                        </tr>
                                        <tr>
                                            <td>MD0877</td>
                                            <td>Đặng Hoàng Phúc</td>
                                            <td>Mỳ lẩu thái đặc biệt,Cá viên</td>
                                            <td>2 sản phẩm</td>
                                            <td>550.000 đđ</td>
                                        </tr>
                                        <tr>
                                            <th colspan="4">Tổng cộng:</th>
                                            <td>1.600.000 đ</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row px-2 m-0">
                    <div class="col-md-12">
                        <div class="tile">
                            <div>
                                <h3 class="tile-title">SẢN PHẨM ĐÃ HẾT</h3>
                            </div>
                            <div class="tile-body">
                                <table class="table table-hover table-bordered" id="sampleTable">
                                    <thead>
                                        <tr>
                                            <th>Mã sản phẩm</th>
                                            <th>Tên sản phẩm</th>
                                            <th>Ảnh</th>
                                            <th>Số lượng</th>
                                            <th>Tình trạng</th>
                                            <th>Giá tiền</th>
                                            <th>Danh mục</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>MD003</td>
                                            <td>Mỳ kim chi bò</td>
                                            <td><img src="../../img/Mi/MKCB.jpg" alt="" width="100px;"></td>
                                            <td>0</td>
                                            <td><span class="badge bg-danger">Hết hàng</span></td>
                                            <td>34.000 đ</td>
                                            <td>Mì kim chi</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row px-2 m-0">
                    <div class="col-md-12">
                        <div class="tile">
                            <div>
                                <h3 class="tile-title">NHÂN VIÊN MỚI</h3>
                            </div>
                            <div class="tile-body">
                                <table class="table table-hover table-bordered" id="sampleTable">
                                    <thead>
                                        <tr>
                                            <th>Họ và tên</th>
                                            <th>Địa chỉ</th>
                                            <th>Ngày sinh</th>
                                            <th>Giới tính</th>
                                            <th>SĐT</th>
                                            <th>Chức vụ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Hồ Thị Thanh Ngân</td>
                                            <td>155-157 Trần Quốc Thảo, Quận 3, Hồ Chí Minh </td>
                                            <td>12/02/1999</td>
                                            <td>Nữ</td>
                                            <td>0926737168</td>
                                            <td>Bán hàng</td>
                                        </tr>
                                        <tr>
                                            <td>Trần Khả Ái</td>
                                            <td>6 Nguyễn Lương Bằng, Tân Phú, Quận 7, Hồ Chí Minh</td>
                                            <td>22/12/1999</td>
                                            <td>Nữ</td>
                                            <td>0931342432</td>
                                            <td>Bán hàng</td>
                                        </tr>
                                        <tr>
                                            <td>Nguyễn Đặng Trọng Nhân</td>
                                            <td>59C Nguyễn Đình Chiểu, Quận 3, Hồ Chí Minh </td>
                                            <td>23/07/1996</td>
                                            <td>Nam</td>
                                            <td>0846881155</td>
                                            <td>Dịch vụ</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row px-2 m-0">
                    <div class="col-md-6">
                        <div class="tile">
                            <h3 class="tile-title">DỮ LIỆU HÀNG THÁNG</h3>
                            <div class="position-relative mb-4">
                                <canvas id="visitors-chart" height="200"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="tile">
                            <h3 class="tile-title">THỐNG KÊ DOANH SỐ</h3>
                            <div class="embed-responsive embed-responsive-16by9">
                                <canvas class="embed-responsive-item" id="barChartDemo"></canvas>
                            </div>
                        </div>
                    </div>
                </div>


            </main>
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
    <!-- OPTIONAL SCRIPTS -->
    <script src="../js/Chart.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <!-- <script src="dist/js/demo.js"></script> -->
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="../js/dashboard3.js"></script>
</body>

</html>