<!DOCTYPE html>
<html lang="en">
<?php session_start();
include '../../database/config.php';

?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quản lý người dùng | Admin Seoul</title>

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

        .user_avatar {
            border-radius: 50%;
            width: 50px;
            height: 50px;
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
            <a href="../admin.html" class="brand-link">
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
                        <li class="nav-item">
                            <a href="#" class="nav-link ">
                                <i class="nav-icon fas fa-archive"></i>
                                <p>
                                    Sản phẩm </p>
                                <i class="fas fa-angle-left right"></i>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="./all-product.php" class="nav-link active">
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
                            <a href="./user.php" class="nav-link active">
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
                                <h1 class="m-0">Danh sách người dùng</h1>
                            </div><!-- /.col -->
                            <div class="col-sm-6">

                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <div class="row px-2 m-0">
                    <div class="col-md-12">
                        <div class="tile">
                            <div class="tile-body">
                                <div class="row element-button m-0">
                                    <div class="mr-3 mb-3">
                                        <a class="btn btn-outline-success" href="#" title="Thêm" data-bs-toggle="modal" data-bs-target="#addUserModal"><i class="fas fa-plus"></i>
                                            Thêm mới khách hàng</a>
                                    </div>
                                    <div class="mr-3 mb-3">
                                        <a class="btn btn-outline-warning  nhap-tu-file" type="button" title="Nhập"><i class="fas fa-file-upload"></i> Tải từ file</a>
                                    </div>

                                    <div class="mr-3 mb-3">
                                        <a class="btn btn-outline-primary  print-file" type="button" title="In" onclick="myApp.printTable()"><i class="fas fa-print"></i> In dữ liệu</a>
                                    </div>
                                    <div class="mr-3 mb-3">
                                        <a class="btn btn-outline-primary  print-file js-textareacopybtn" type="button" title="Sao chép"><i class="fas fa-copy"></i> Sao chép</a>
                                    </div>

                                    <div class="mr-3 mb-3">
                                        <a class="btn btn-outline-success " href="" title="In"><i class="fas fa-file-excel"></i> Xuất
                                            Excel</a>
                                    </div>
                                    <div class="mr-3 mb-3">
                                        <a class="btn btn-outline-secondary " type="button" title="Xóa" onclick="myFunction(this)"><i class="fas fa-trash-alt"></i> Xóa tất cả </a>
                                    </div>
                                </div>
                                <div class="row element-filter mx-0 mb-3">
                                    <div class="filter__left col-6 p-0">
                                        <span>Hiện</span>
                                        <select class="form-select px-3" aria-label="Default select">
                                            <option selected>10</option>
                                            <option value="1">15</option>
                                            <option value="2">20</option>
                                            <option value="3">25</option>
                                        </select>
                                        <span>sản phẩm</span>
                                    </div>
                                    <div class="filter__right col-6 p-0 text-right">
                                        <span>Tìm kiếm:</span>
                                        <input type="search" placeholder="">
                                    </div>

                                </div>
                                <table class="table table-hover table-bordered" id="sampleTable">
                                    <thead>
                                        <tr>
                                            <th width="10"><input type="checkbox" id="all"></th>
                                            <th>ID</th>
                                            <th>Avatar</th>
                                            <th>Tên người dùng</th>
                                            <th>Họ và tên</th>
                                            <th>Số điện thoại</th>
                                            <th>Địa chỉ</th>
                                            <th>Email</th>
                                            <th style="width: 8vw;">Chức năng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sql_user = "SELECT * FROM user ORDER BY id DESC";
                                        $query_user = mysqli_query($mysqli, $sql_user);
                                        while ($row_user = mysqli_fetch_array($query_user)) {

                                        ?>
                                            <tr>
                                                <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                                <td class="id_user"><?php echo $row_user['id'] ?></td>
                                                <td class="text-center"><img class="user_avatar" src="../img/user_avatar/<?php echo $row_user['avatar'] ?>" alt=""> </td>
                                                <td><?php echo $row_user['username'] ?></td>
                                                <td><?php echo $row_user['fullname'] ?></td>
                                                <td><?php echo $row_user['phone'] ?></td>
                                                <td><?php echo $row_user['address'] ?></td>
                                                <td><?php echo $row_user['email'] ?></td>
                                                <td>
                                                    <button class="btn btn-outline-danger btn-sm trash mb-2" type="button" title="Xóa" data-bs-toggle="modal" data-bs-target="#ModalRM"><i class="fas fa-trash-alt"></i>
                                                    </button>
                                                    <button class="btn btn-outline-warning btn-sm edit mb-2" type="button" title="Sửa" id="show-emp" data-bs-toggle="modal" data-bs-target="#ModalUP"><i class="fas fa-edit"></i></i></button>
                                                    <button class="btn btn-outline-info btn-sm mb-2 reset" type="button" title="reset" id="show-emp" data-bs-toggle="modal" data-bs-target="#ModalReset"><i class="fas fa-key"></i></button>
                                                    <?php
                                                    if ($row_user['is_block'] == 1) {
                                                    ?>
                                                        <button class="btn btn-outline-light btn-sm mb-2 block" type="button" title="Khoá" id="show-emp" data-bs-toggle="modal" data-bs-target="#ModalLock" data-userid="<?php echo $row_user['id']; ?>"><i class="fas fa-lock"></i></i></button>
                                                    <?php
                                                    } else {
                                                    ?>
                                                        <button class="btn btn-outline-light btn-sm mb-2 unblock" type="button" title="Mở Khoá" id="show-emp" data-bs-toggle="modal" data-bs-target="#ModalUnLock" data-userid="<?php echo $row_user['id']; ?>"><i class="fas fa-unlock"></i></i></button>
                                                    <?php
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                        <?php
                                        }

                                        ?>
                                </table>
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
            </main>
            <!-- Modal Thêm người dùng  -->
            <div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered ">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addUserModalLabel">Thêm mới người dùng</h5>
                            <button type="button" class="btn fs-5" data-bs-dismiss="modal"><i class="fas fa-times"></i></button>
                        </div>
                        <!-- Form to add user details -->
                        <form id="addUserForm">
                            <div class="modal-body">

                                <div class="mb-3">
                                    <label for="username" class="form-label">Tên người dùng</label>
                                    <input type="text" class="form-control" name="username" placeholder="Nhập tên người dùng" required>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Mật khẩu</label>
                                    <input type="password" class="form-control" name="password" placeholder="Nhập mật khẩu" required>
                                </div>
                                <div class="mb-3">
                                    <label for="fullname" class="form-label">Họ và tên</label>
                                    <input type="text" class="form-control" name="fullname" placeholder="Nhập họ và tên" required>
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Số điện thoại</label>
                                    <input type="tel" class="form-control" name="phone" placeholder="Nhập số điện thoại" required>
                                </div>
                                <div class="mb-3">
                                    <label for="address" class="form-label">Địa chỉ</label>
                                    <input type="text" class="form-control" name="address" placeholder="Nhập địa chỉ" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="Nhập email" required>
                                </div>

                            </div>
                            <input type="hidden" name="add_user" id="">
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                <button type="submit" class="btn btn-primary">Lưu</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Chỉnh sửa người dùng -->
            <div class="modal fade" id="ModalUP" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                    <div class="modal-content">



                    </div>

                </div>
            </div>
        </div>

        <!-- Modal Xoá-->
        <div class="modal fade" id="ModalRM" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered ">
                <div class="modal-content">
                    <div class="modal-header justify-content-center">
                        <h1 class="modal-title fs-6 fw-bold" id="exampleModalLabel">Cảnh báo</h1>
                    </div>
                    <div class="modal-body text-center">
                        Bạn chắc chắn muốn <strong>xoá</strong> người dùng này? </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Huỷ bỏ</button>
                        <button class=" btn btn-success remove"> Đồng ý</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal khoá người dùng -->
        <div class="modal fade" id="ModalLock" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered ">
                <div class="modal-content">
                    <div class="modal-header justify-content-center">
                        <h1 class="modal-title fs-6 fw-bold" id="exampleModalLabel">Cảnh báo</h1>
                    </div>
                    <div class="modal-body text-center">
                        Bạn chắc chắn muốn <strong>chặn</strong> người dùng này? </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Huỷ bỏ</button>
                        <button type="button" class="btn btn-success">Đồng ý</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Mở khoá người dùng -->
        <div class="modal fade" id="ModalUnLock" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered ">
                <div class="modal-content">
                    <div class="modal-header justify-content-center">
                        <h1 class="modal-title fs-6 fw-bold" id="exampleModalLabel">Cảnh báo</h1>
                    </div>
                    <div class="modal-body text-center">
                        Bạn chắc chắn muốn <strong>mở khoá</strong> người dùng này? </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Huỷ bỏ</button>
                        <button type="button" class="btn btn-success">Đồng ý</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- MODAL RESET -->
        <div class="modal fade" id="ModalReset" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered ">
                <div class="modal-content">
                    <div class="modal-header justify-content-center">
                        <h1 class="modal-title fs-6 fw-bold" id="exampleModalLabel">Cảnh báo</h1>
                    </div>
                    <div class="modal-body text-center">
                        Bạn chắc chắn muốn <strong>thiết lập lại mật khẩu</strong>của người dùng này? </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Huỷ bỏ</button>
                        <button type="button " class="btn btn-success user_reset">Đồng ý</button>
                    </div>
                </div>
            </div>
        </div>
        <!--
MODAL
-->
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


    <!-- Thêm người dùng JS -->
    <script>
        document.getElementById('addUserForm').addEventListener('submit', function(event) {
            event.preventDefault();

            var form = event.target;
            var formData = new FormData(form);

            fetch('../manage/manage_user.php', {
                    method: 'POST',
                    body: formData
                })
                .then(function(response) {
                    // Đóng modal khi đã gửi thành công
                    var modal = document.getElementById('addUserModal');
                    var modalInstance = bootstrap.Modal.getInstance(modal);
                    modalInstance.hide();
                    location.reload();
                })
                .then(function(data) {
                    // Xử lý phản hồi từ máy chủ nếu cần thiết
                    console.log(data);


                })
                .catch(function(error) {
                    console.error('Lỗi:', error);
                });
        });
    </script>
    <!-- JS DELETED -->
    <script>
        $(document).ready(function() {
            var id_user = null;

            $('.trash').click(function() {
                id_user = $(this).closest('tr').find('.id_user').text().trim();
                console.log('id_user:', id_user);
            });

            $(".remove").click(function() {
                if (id_user) {
                    var id = id_user;
                    $.ajax({
                        url: '../manage/manage_user.php',
                        type: 'GET',
                        data: {
                            id: id
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
    <!-- JS RESET -->
    <script>
        $(document).ready(function() {
            var id_user = null;

            $('.reset').click(function() {
                id_user = $(this).closest('tr').find('.id_user').text().trim();
                console.log('id_user:', id_user);
            });

            $(".user_reset").click(function() {
                if (id_user) {
                    var id = id_user
                    $.ajax({
                        url: '../manage/manage_user.php',
                        type: 'GET',
                        data: {
                            id_reset: id,
                        },
                        success: function(response) {
                            alert('Reset password thành công!');
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
        $(document).ready(function() {
            $('.edit').click(function() {
                id_user = $(this).closest('tr').find('.id_user').text().trim();
                $.post('../manage/manage_user.php', {
                        id_update: id_user
                    },
                    function(data) {
                        $('#ModalUP .modal-content').html(data);
                    });
            });
        });
    </script>
    <!-- JS BLOCK -->
    <script>
        $('.block').click(function() {
            var userId = $(this).data('userid');
            console.log('userId:', userId);
            // Thực hiện các hành động cần thiết khi khoá người dùng được chọn

        });
        $('#ModalLock .btn-success').click(function() {
            // Lấy ID người dùng được chọn từ button
            var userId = $('.block').data('userid');
            if (userId) {
                // Thực hiện các hành động để khoá người dùng với ID đã lấy được
                // Ví dụ: gửi yêu cầu AJAX để thực hiện khoá người dùng
                $.ajax({
                    url: '../manage/manage_user.php',
                    type: 'GET',
                    data: {
                        lockUserId: userId
                    },
                    success: function(response) {
                        // Xử lý phản hồi thành công từ server
                        console.log('Khoá người dùng thành công');
                        location.reload();

                        // Cập nhật giao diện nếu cần thiết
                    },
                    error: function(xhr, status, error) {
                        // Xử lý lỗi nếu có
                        console.error('Lỗi khi khoá người dùng:', error);
                    }
                });

                // Đóng modal
                $('#ModalLock').modal('hide');
            }
        });
    </script>
    <!-- JS BLOCK -->
    <script>
        $('.unblock').click(function() {
            var userId = $(this).data('userid');
            console.log('userId:', userId);
            // Thực hiện các hành động cần thiết khi khoá người dùng được chọn

        });
        $('#ModalUnLock .btn-success').click(function() {
            // Lấy ID người dùng được chọn từ button
            var userId = $('.unblock').data('userid');
            if (userId) {
                // Thực hiện các hành động để khoá người dùng với ID đã lấy được
                // Ví dụ: gửi yêu cầu AJAX để thực hiện khoá người dùng
                $.ajax({
                    url: '../manage/manage_user.php',
                    type: 'GET',
                    data: {
                        UnlockUserId: userId
                    },
                    success: function(response) {
                        // Xử lý phản hồi thành công từ server
                        console.log('Khoá người dùng thành công');
                        location.reload();
                        // Cập nhật giao diện nếu cần thiết
                    },
                    error: function(xhr, status, error) {
                        // Xử lý lỗi nếu có
                        console.error('Lỗi khi khoá người dùng:', error);
                    }
                });

                // Đóng modal
                $('#ModalLock').modal('hide');
            }
        });
    </script>

</body>

</html>