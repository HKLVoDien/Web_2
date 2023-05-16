<!DOCTYPE html>
<html lang="en">
<?php session_start();
include '../../database/config.php';

?>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sản phẩm | Admin Seoul</title>

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

    .btn_update_img {
      position: relative;
      /* max-width: 90px; */
      text-align: center;
    }

    .btn_update_img input {
      opacity: 0;
      position: absolute;
      top: 0%;
      left: 0;
      height: 100%;
      width: 100%;

    }

    .btn_update_img input:hover {
      cursor: pointer;
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
      width: 100%;
      height: 100%;
      border: 1px solid #e5e5e5;
      margin-right: 5px;
      margin-top: 5px;
    }



    .box-preview-img_small img {
      width: 100%;
      height: 100%;
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
                <h1 class="m-0">Danh sách sản phẩm</h1>
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
                    <a class="btn btn-outline-success " href="./add-product.php" title="Thêm"><i class="fas fa-plus"></i>
                      Tạo mới sản phẩm</a>
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
                <?php
                $sql_lietke_sp = "SELECT *, product.id as product_id FROM product,category WHERE product.category_id =category.id AND git  visible != 0 ORDER BY product.id asc";
                $query_lietke_sp = mysqli_query($mysqli, $sql_lietke_sp);
                ?>
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                      <th width="10"><input type="checkbox" id="all"></th>
                      <th>Id</th>
                      <th>Mã sản phẩm</th>
                      <th>Tên sản phẩm</th>
                      <th>Ảnh</th>
                      <!-- <th>Số lượng</th> -->
                      <th>Tình trạng</th>
                      <th>Giá tiền</th>
                      <th>Danh mục</th>
                      <th>Chức năng</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    while ($row = mysqli_fetch_array($query_lietke_sp)) {
                    ?>
                      <tr>
                        <td width="10"><input type="checkbox" name="check1" value="1"></td>
                        <td class="id_product"><?php echo $row['product_id'] ?></td>
                        <td><?php echo $row['product_code'] ?> </td>
                        <td><?php echo $row['product_name'] ?></td>
                        <td><img src="../img/upload/img_product/<?php echo $row['thumbnail'] ?>" alt="" width="100px;"></td>
                        <!-- <td>40</td> -->
                        <td><?php
                            if ($row['status'] == 1) {
                              echo '<span class="badge bg-success">Còn hàng</span>';
                            } else {
                              echo '<span class="badge bg-danger">Hết hàng</span>';
                            }
                            ?></td>
                        <td><?php echo $row['price'] ?></td>
                        <td><?php echo $row['name'] ?></td>
                        <td><button class="btn btn-outline-danger btn-sm trash" type="button" title="Xóa" data-bs-toggle="modal" data-bs-target="#ModalRM"><i class="fas fa-trash-alt"></i>
                          </button>
                          <button class="btn btn-outline-warning btn-sm edit" type="button" title="Sửa" id="show-emp" data-bs-toggle="modal" data-bs-target="#ModalUP" data-id="<?php echo $row['product_id']; ?>"><i class="fas fa-edit"></i></button>

                        </td>
                      </tr>

                    <?php
                    }


                    ?>
                  </tbody>
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
      <!--
  MODAL
-->
      <div class="modal fade" id="ModalUP" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">

            <div class="modal-body">
              <div class="row">
                <div class="form-group  col-md-12">
                  <span class="thong-tin-thanh-toan">
                    <h5>Chỉnh sửa thông tin sản phẩm</h5>
                  </span>
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-6">
                  <label class="control-label">Mã sản phẩm </label>
                  <input class="form-control" type="text" value="MT002">
                </div>
                <div class="form-group col-md-6">
                  <label class="control-label">Tên sản phẩm</label>
                  <input class="form-control" type="text" required value="Ăn Vặt Thập cẩm">
                </div>

                <div class="form-group col-md-6 ">
                  <label for="exampleSelect1" class="control-label">Tình trạng sản phẩm</label>
                  <select class="form-control" id="exampleSelect1">
                    <option>Còn hàng</option>
                    <option>Hết hàng</option>
                    <option>Đang nhập hàng</option>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label class="control-label">Giá bán</label>
                  <input class="form-control" type="text" value="99.000đ">
                </div>
                <div class="form-group  col-md-6">
                  <label class="control-label d-block">Ảnh</label>
                  <img class="d-block mb-2" src="../../img/AnVat/AVTC.jpg" alt="" width="100%;">
                  <input type="button" value="Chỉnh sửa">
                  <input type="button" value="Xoá ảnh">
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleSelect1" class="control-label">Danh mục</label>
                  <select class="form-control" id="exampleSelect1">
                    <option>Đồ ăn vặt</option>
                    <option>Mì kim chi</option>
                    <option>Mì lẩu thái</option>
                    <option>Lẩu kim chi</option>
                    <option>Lẩu thái</option>
                    <option>Món trộn</option>
                    <option>Đồ uống</option>
                    <option>Món thêm</option>
                  </select>
                  <BR>
                  <a href="#" style=" float: right;
                  font-weight: 600;
                  color: #ea0000;">Chỉnh sửa sản phẩm nâng cao</a>
                </div>

              </div>
              <BR>
              <button class="btn btn-success" type="button">Lưu lại</button>
              <a class="btn btn-danger" data-bs-dismiss="modal" href="#">Hủy bỏ</a>
              <BR>
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
  <script src="../../node_modules/jquery/dist/jquery.js"></script>
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
  <!-- JS DELETED -->
  <script>
    $(document).ready(function() {
      var id_product = null;

      $('.trash').click(function() {
        id_product = $(this).closest('tr').find('.id_product').text().trim();
        console.log('id_product:', id_product);
        if (id_product) {
          var id = id_product;
          $.ajax({
            url: '../manage/manage_product.php',
            type: 'GET',
            data: {
              id: id
            },
            success: function(response) {
              $('#ModalRM .modal-content').html(response);
              $(".remove").click(function() {
                if (id_product) {
                  console.log('id_product:', id_product);

                  var id = id_product;
                  $.ajax({
                    url: '../manage/manage_product.php',
                    type: 'GET',
                    data: {
                      id_remove: id
                    },
                    success: function(response) {
                      location.reload();
                    }
                  });
                }
              });
              $(".hide").click(function() {
                if (id_product) {
                  console.log('id_product:', id_product);

                  var id = id_product;
                  $.ajax({
                    url: '../manage/manage_product.php',
                    type: 'GET',
                    data: {
                      id_hide: id
                    },
                    success: function(response) {
                      location.reload();
                    }
                  });
                }
              });
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
        var id = $(this).data('id');
        $.post('../manage/manage_product.php', {
            id_update: id
          },
          function(data) {
            $('#ModalUP .modal-content').html(data);
          });
      });
    });
  </script>
  <!-- JS UPLOAD IMG -->
  <script>
    // Xem hình ảnh trước khi upload
    function previewImg(event) {
      // Gán giá trị các file vào biến files
      var files = document.getElementById('img_file').files;

      // Show khung chứa ảnh xem trước
      $('#img_upload .box-preview-img').show();

      // Thêm chữ "Xem trước" vào khung
      $('#img_upload .box-preview-img').html('<p>Xem trước</p>');

      // Dùng vòng lặp for để thêm các thẻ img vào khung chứa ảnh xem trước
      for (i = 0; i < files.length; i++) {
        // Thêm thẻ img theo i
        $('#img_upload .box-preview-img').append('<img src="" id="' + i + '">');

        // Thêm src vào mỗi thẻ img theo id = i
        $('#img_upload .box-preview-img img:eq(' + i + ')').attr('src', URL.createObjectURL(event.target.files[i]));
      }

    }

    function previewImg_small(event) {
      // Gán giá trị các file vào biến files
      var files = document.getElementById('img_file_small').files;

      // Show khung chứa ảnh xem trước
      $('#img_upload_small .box-preview-img_small').show();

      // Thêm chữ "Xem trước" vào khung
      $('#img_upload_small .box-preview-img_small').html('<p>Xem trước</p>');

      // Dùng vòng lặp for để thêm các thẻ img vào khung chứa ảnh xem trước
      for (i = 0; i < files.length; i++) {
        // Thêm thẻ img theo i
        $('#img_upload_small .box-preview-img_small').append('<img src="" id="' + i + '">');

        // Thêm src vào mỗi thẻ img theo id = i
        $('#img_upload_small .box-preview-img_small img:eq(' + i + ')').attr('src', URL.createObjectURL(event.target.files[i]));
      }
    }
  </script>
</body>

</html>