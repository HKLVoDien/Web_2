<!DOCTYPE html>
<html lang="en">
<?php session_start();
include '../../database/config.php';

?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thêm sản phẩm | Admin Seoul</title>

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

        .tile {
            background-color: #fff;
            padding: 20px;
            border-radius: .375rem;
        }

        .tile .tile-title {
            margin-top: 0;
            margin-bottom: 30px;
            /* font-size: 20px; */
            /* text-align: center; */
            border-bottom: 2px solid #FFD43B;
            padding-bottom: 10px;
            /* border-left: 3px solid black; */
            font-weight: 700;
            padding-left: 5px;
            color: black;
        }

        .element-button {
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
            margin-bottom: 10px;
        }

        .form-control {
            width: 100%;
            padding: 0.375rem 0.75rem;
            font-size: 15px;
            line-height: 1.5;
            color: black;
            background-color: #f1f1f1;
            border: 1px solid #dadada;
        }

        .Choicefile {
            display: block;
            background: #14142B;
            border: 1px solid #fff;
            color: #fff;
            width: 150px;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
            padding: 5px 0px;
            border-radius: 5px;
            margin-top: 20px;
        }

        textarea.form-control {
            height: 90px;
        }

        .btn-sm {
            width: 100%;
        }

        .dropzone_small {
            box-sizing: border-box;
            width: 160px;
            height: 140px;
            border: 1px dashed #A4A4A4;
            border-radius: 3px;
            overflow: hidden;
        }

        .dropzone {
            box-sizing: border-box;
            width: 240px;
            height: 180px;
            border: 1px dashed #A4A4A4;
            border-radius: 3px;
            overflow: hidden;
        }

        .drop-content {
            position: relative;
            height: 100%;
            width: 100%;
        }

        .drop-content img {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 50%;
            height: 50%;
        }

        .dropzone input,
        .dropzone_small input {
            opacity: 0;
            position: absolute;
            top: 0%;
            left: 0;
            height: 100%;
            width: 100%;
        }

        .dropzone input:hover,
        .dropzone_small input:hover {
            cursor: pointer;
        }

        .btn-reset {

            background-color: #fff;
            border: 1px solid #ccc;
            color: #444;
            margin-top: 10px;
            margin-right: 5px;
            padding: 7px;
            font-size: 14px;
            border-radius: 4px;

        }

        .submit-btn {
            background-color: #428bca;
            border: 1px solid #428bca;
            color: #fff;
            margin-top: 10px;
            margin-right: 5px;
            padding: 7px;
            font-size: 14px;
            border-radius: 4px;
        }

        .box-preview-img,
        .box-preview-img_small {
            margin-top: 10px;
            display: none;
        }

        /* .box-preview-img p,
        .box-preview-img_small p {
font        } */

        .box-preview-img img {
            max-width: 240px;
            max-height: 180px;
            border: 1px solid #e5e5e5;
            margin-right: 5px;
            margin-top: 5px;
        }



        .box-preview-img_small img {
            max-width: 160px;
            max-height: 140px;
            border: 1px solid #e5e5e5;
            margin-right: 5px;
            margin-top: 5px;
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
            <a href="../admin.php" class="brand-link">
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
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link active">
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
                                    <a href="#" class="nav-link active">
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
                            <a href="" class="nav-link ">
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
            <main class="app-content ">
                <div class="app-title">
                    <ul class="app-breadcrumb breadcrumb">
                        <li class="breadcrumb-item">Danh sách sản phẩm</li>
                        <li class="breadcrumb-item"><a href="#">Thêm sản phẩm</a></li>
                    </ul>
                </div>
                <div class="row m-0 px-2">
                    <div class="col-md-12">
                        <div class="tile">
                            <h3 class="tile-title ">Thêm sản phẩm</h3>
                            <div class="tile-body">
                                <form class="row" method="POST" action="../manage/manage_product.php" enctype="multipart/form-data" id="formUpload">
                                    <div class="form-group col-md-3">
                                        <label class="control-label">Mã sản phẩm </label>
                                        <input class="form-control" type="text" placeholder="" name="product_code">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="control-label">Tên sản phẩm</label>
                                        <input class="form-control" type="text" name="product_name">
                                    </div>


                                    <!-- <div class="form-group  col-md-3">
                                        <label class="control-label">Số lượng</label>
                                        <input class="form-control" type="number">
                                    </div> -->
                                    <div class="form-group col-md-3 ">
                                        <label for="exampleSelect1" class="control-label">Tình trạng</label>
                                        <select class="form-control" id="exampleSelect1" name="status">
                                            <option>-- Chọn tình trạng --</option>
                                            <option value="1">Còn hàng</option>
                                            <option value="0">Hết hàng</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="exampleSelect1" class="control-label">Danh mục</label>
                                        <select class="form-control" id="exampleSelect1" name="category">
                                            <option>-- Chọn danh mục --</option>
                                            <?php
                                            $sql_danhmuc = "SELECT * FROM category ORDER BY id ASC";
                                            $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
                                            while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
                                            ?>
                                                <option value="<?php echo $row_danhmuc['id'] ?>">
                                                    <?php echo $row_danhmuc['name'] ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <!-- <div class="form-group col-md-3 ">
                                        <label for="exampleSelect1" class="control-label">Nhà cung cấp</label>
                                        <select class="form-control" id="exampleSelect1">
                                            <option>-- Chọn nhà cung cấp --</option>
                                            <option>Phong vũ</option>
                                            <option>Thế giới di động</option>
                                            <option>FPT</option>
                                            <option>Võ Trường</option>
                                        </select>
                                    </div> -->
                                    <div class="form-group col-md-3">
                                        <label class="control-label">Giá bán</label>
                                        <input class="form-control" type="text" name="price">
                                    </div>
                                    <!-- <div class="form-group col-md-3">
                                        <label class="control-label">Giá vốn</label>
                                        <input class="form-control" type="text">
                                    </div> -->
                                    <div class="form-group col-md-12 box-upload">
                                        <label class="control-label ">Ảnh sản phẩm </label>
                                        <i class="d-block text-gray f-1">Ảnh nhỏ</i>
                                        <div class="dropzone_small">
                                            <div class="drop-content">
                                                <img src="https://100dayscss.com/codepen/upload.svg" class="upload">
                                                <input type="file" name="img_file_small" onchange="previewImg_small(event);" id="img_file_small" accept="image/*">
                                            </div>
                                        </div>
                                        <div class="box-preview-img_small"></div>
                                        <label class="control-label mt-3">Ảnh sản phẩm </label>
                                        <i class="d-block text-gray f-1">Ảnh lớn</i>
                                        <div class="dropzone">
                                            <div class="drop-content">
                                                <img src="https://100dayscss.com/codepen/upload.svg" class="upload">
                                                <input type="file" name="img_file" onchange="previewImg(event);" id="img_file" accept="image/*">
                                            </div>
                                        </div>
                                        <div class="box-preview-img"></div>

                                        <button class="btn-reset " type="reset"><i class="fa fa-redo p-1"></i>Làm
                                            mới</button>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label class="control-label">Mô tả sản phẩm</label>
                                        <textarea class="form-control" name="description" id="mota" style="resize: none"></textarea>
                                        <script>
                                            CKEDITOR.replace('mota');
                                        </script>
                                    </div>
                                    <button class="btn btn-success mx-1" type="submit" name="add_product">Lưu lại</button>
                                    <a class="btn btn-danger" href="./all-product.php">Hủy bỏ</a>
                                </form>
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
    <script src="../../node_modules/jquery/dist/jquery.js"></script>
    <script src="../js/jquery.form.js"></script>
    <!-- JS UPLOAD IMG -->
    <script>
        // Xem hình ảnh trước khi upload
        function previewImg(event) {
            // Gán giá trị các file vào biến files
            var files = document.getElementById('img_file').files;

            // Show khung chứa ảnh xem trước
            $('#formUpload .box-preview-img').show();

            // Thêm chữ "Xem trước" vào khung
            // $('#formUpload .box-preview-img').html('<p>Xem trước</p>');

            // Dùng vòng lặp for để thêm các thẻ img vào khung chứa ảnh xem trước
            for (i = 0; i < files.length; i++) {
                // Thêm thẻ img theo i
                $('#formUpload .box-preview-img').append('<img src="" id="' + i + '">');

                // Thêm src vào mỗi thẻ img theo id = i
                $('#formUpload .box-preview-img img:eq(' + i + ')').attr('src', URL.createObjectURL(event.target.files[i]));
            }
            $('#formUpload .dropzone').hide();

        }

        function previewImg_small(event) {
            // Gán giá trị các file vào biến files
            var files = document.getElementById('img_file_small').files;

            // Show khung chứa ảnh xem trước
            $('#formUpload .box-preview-img_small').show();

            // Thêm chữ "Xem trước" vào khung
            // $('#formUpload .box-preview-img_small').html('<p>Xem trước</p>');

            // Dùng vòng lặp for để thêm các thẻ img vào khung chứa ảnh xem trước
            for (i = 0; i < files.length; i++) {
                // Thêm thẻ img theo i
                $('#formUpload .box-preview-img_small').append('<img src="" id="' + i + '">');

                // Thêm src vào mỗi thẻ img theo id = i
                $('#formUpload .box-preview-img_small img:eq(' + i + ')').attr('src', URL.createObjectURL(event.target.files[i]));
            }
            $('#formUpload .dropzone_small').hide();
        }
        // Nút reset form upload
        $('#formUpload .btn-reset').on('click', function() {
            // Làm trống khung chứa hình ảnh xem trước
            $('#formUpload .box-preview-img').html('');
            $('#formUpload .box-preview-img_small').html('');
            // Hide khung chứa hình ảnh xem trước
            $('#formUpload .box-preview-img').hide();
            $('#formUpload .box-preview-img_small').hide();

            // show khung 
            $('#formUpload .dropzone').show();
            $('#formUpload .dropzone_small').show();

        });

        // Xử lý ảnh và upload
        $('#formUpload .btn-submit').on('click', function() {
            // Gán giá trị của nút chọn tệp vào var img_file
            $img_file = $('#formUpload #img_file').val();

            // Cắt đuôi của file để kiểm tra
            $type_img_file = $('#formUpload #img_file').val().split('.').pop().toLowerCase();

            // Nếu không có ảnh nào
            if ($img_file == '') {
                // Show khung kết quả
                $('#formUpload .output').show();

                // Thông báo lỗi
                $('#formUpload .output').html('Vui lòng chọn ít nhất một file ảnh.');
            }
            // Ngược lại nếu file ảnh không hợp lệ với các đuôi bên dưới
            else if ($.inArray($type_img_file, ['png', 'jpeg', 'jpg', 'gif']) == -1) {
                // Show khung kết quả
                $('#formUpload .output').show();

                // Thông báo lỗi
                $('#formUpload .output').html('File ảnh không hợp lệ với các đuôi .png, .jpeg, .jpg, .gif.');
            }
            // Ngược lại
            else {
                // Tiến hành upload 
                $('#formUpload').ajaxSubmit({
                    // Trước khi upload
                    beforeSubmit: function() {
                        target: '#formUpload .output',

                        // Ẩn khung kết quả
                        $('#formUpload .output').hide();

                        // Show thanh tiến trình
                        $("#formUpload .progress").show();

                        // Đặt mặc định độ dài thanh tiến trình là 0
                        $("#formUpload .progress-bar").width('0');
                    },

                    // Trong quá trình upload
                    uploadProgress: function(event, position, total, percentComplete) {
                        // Kéo dãn độ dài thanh tiến trình theo % tiến độ upload
                        $("#formUpload .progress-bar").css('width', percentComplete + '%');

                        // Hiển thị con số % trên thanh tiến trình
                        $("#formUpload .progress-bar").html(percentComplete + '%');
                    },
                    // Sau khi upload xong
                    success: function() {
                        // Show khung kết quả 
                        $('#formUpload .output').show();

                        // Thêm class success vào khung kết quả
                        $('#formUpload .output').addClass('success');

                        // Thông báo thành công
                        $('#formUpload .output').html('Upload ảnh thành công.');
                    },
                    // Nếu xảy ra lỗi
                    error: function() {
                        // Show khung kết quả
                        $('#formUpload .output').show();

                        // Thông báo lỗi
                        $('#formUpload .output').html('Không thể upload ảnh vào lúc này, hãy thử lại sau.');
                    }
                });
                return false;
            }
        });
    </script>

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