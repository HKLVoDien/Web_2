<link rel="stylesheet" href="./css/user-file.css">

<!-- BREADCRUMB -->
<section class="breadcrumb_section container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./index.php">Trang chủ</a></li>
            <li class="breadcrumb-item active" aria-current="page">Hồ sơ</li>
        </ol>
    </nav>
</section>
<!-- FILE USER  -->
<section class="file container">
    <h1>Hồ sơ</h1>
    <?php
    $sql_user = "SELECT * FROM user  WHERE id ='$_SESSION[id_customer]' LIMIT 1";
    $query_user = mysqli_query($mysqli, $sql_user);
    $row_user = mysqli_fetch_array($query_user);
    ?>
    <div class="row file__content">
        <div class="file__left col-3">
            <div class="img__file d-flex align-items-center">
                <img src="./admin/img/user_avatar/<?php echo $row_user['avatar'] ?>" alt="avatar">
                <p><?php echo $row_user['username'] ?></p>
            </div>
            <ul class="list__tool" id="list__tool">
                <li class="active" onclick="file()"><i class="fas fa-user"></i>Hồ sơ</li>
                <li class="" onclick="order()"><i class="fas fa-utensils"></i>Đơn hàng</li>
                <li class="" onclick="help()"><i class="fas fa-question-circle"></i>Hỗ trợ</li>
            </ul>
        </div>
        <div class="file__right col-9" id="file__right">
            <div class="tool hoso row justify-content-end" id="file">
                <div class="hoso--label col-2">
                    <p>Tên tài khoản</p>
                    <p>Họ và tên</p>
                    <p>Email</p>
                    <p>Số điện thoại</p>
                    <p>Địa chỉ</p>

                </div>
                <div class="hoso-info col-6 ">
                    <p><?php echo $row_user['username'] ?></p>
                    <p id="fullname"><?php echo $row_user['fullname'] ?><i class="far fa-edit edit-button"></i></p>
                    <p><?php echo $row_user['email'] ?><i class="far fa-edit" data-bs-toggle="modal" data-bs-target="#notifyModal"></i></p>
                    <p>*******<?php echo substr($row_user['phone'], -3) ?><i class="far fa-edit" data-bs-toggle="modal" data-bs-target="#notifyModal"></i></p>

                    <p><?php echo $row_user['address'] ?><i class="far fa-edit edit_address-button" ></i></p>

                    </p>
                </div>
                <div class="hoso--img col-4">
                    <img src="./admin/img/user_avatar/<?php echo $row_user['avatar'] ?>" alt="">
                    <button data-bs-toggle="modal" data-bs-target="#notifyModal">Thay đổi</button>
                </div>
            </div>
            <!-- Modal chỉnh sửa full name -->
            <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                <div class="modal-dialog ">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabel">Chỉnh sửa Họ và tên</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="./pages/Handle/user_file_handle.php">
                                <div class="mb-3">
                                    <label for="new_fullname" class="form-label">Họ và tên:</label>
                                    <input type="text" class="form-control" id="new_fullname" name="new_fullname" value="<?php echo $row_user['fullname']; ?>" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Lưu</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal chỉnh sửa Địa chỉ -->
            <div class="modal fade" id="editModal_address" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                <div class="modal-dialog ">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabel">Chỉnh sửa địa chỉ</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="./pages/Handle/user_file_handle.php">
                                <div class="mb-3">
                                    <label for="new_fullname" class="form-label">Họ và tên:</label>
                                    <input type="text" class="form-control" id="new_fullname" name="new_fullname" value="<?php echo $row_user['fullname']; ?>" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Lưu</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tool donhang" id="order">
                <select class="form-select donhang-select" aria-label="Default select example">
                    <option selected>Trạng thái</option>
                    <option value="1">Đã hoàn thành</option>
                    <option value="2">Đang vận chuyển</option>
                    <option value="3">Đã huỷ</option>
                    <option value="4">Đang xử lý</option>
                    <option value="5">Chưa xử lý</option>

                </select>
                <table class="table">
                    <thead class="table">
                        <tr>
                            <th scope="col">Mã đơn hàng</th>
                            <th scope="col">Sản phẩm</th>
                            <th scope="col">Tổng tiền</th>
                            <th scope="col">Trạng thái</th>
                            <th scope="col">Chi tiết</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">DH044</th>
                            <td>Mì lẩu thái bò </td>
                            <td>34,000₫</td>
                            <td>
                                <div class=" tr tr__xl">Đang xử lý</div>
                            </td>
                            <td><i class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#detail-order_1"></i>
                            </td>

                        </tr>
                        <tr>
                            <th scope="row">DH034</th>
                            <td>Mì kim chi bò mỹ, Tôm thêm</td>
                            <td>56,000₫</td>
                            <td>
                                <div class=" tr tr__dag">Đang vận chuyển</div>
                            </td>
                            <td><i class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#detail-order_2"></i>
                            </td>

                        </tr>
                        <tr>
                            <th scope="row">DH022</th>
                            <td>Lẩu kim chi bạch tuộc</td>
                            <td>239,000₫</td>
                            <td>
                                <div class=" tr tr__dh">Đã huỷ</div>
                            </td>
                            <td><i class="fas fa-eye " data-bs-toggle="modal" data-bs-target="#detail-order_3"></i>
                            </td>

                        </tr>
                        <tr>
                            <th scope="row">DH017</th>
                            <td>Lẩu thái hải sản</td>
                            <td>210,000₫</td>
                            <td>
                                <div class=" tr tr__dg">Đã hoàn thành</div>
                            </td>
                            <td><i class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#detail-order_4"></i>
                            </td>

                        </tr>
                    </tbody>

                </table>
                <!-- Modal chi tiết đơn hàng-->
                <div class="modal fade" id="detail-order_1" tabindex="-1" aria-labelledby="detail-orderModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header border-0">
                                <h1 class="modal-title fs-5 fw-normal" id="detail-orderModalLabel">Đơn hàng:
                                    <strong>DH044</strong>
                                </h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body ">
                                <div class="row">
                                    <table class="table ">
                                        <thead class="table ">
                                            <tr>
                                                <th scope="col">Ngày đặt</th>
                                                <th scope="col">Sản phẩm</th>
                                                <th scope="col">Đơn giá</th>
                                                <th scope="col">Số lượng</th>
                                                <th scope="col">Tổng tiền</th>
                                                <th scope="col">Trạng thái</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row" class="fw-normal">
                                                    <p>17:46</p>
                                                    <p>9/12/2022</p>
                                                </th>
                                                <td>
                                                    <p>Mì lẩu thái bò</p>
                                                </td>
                                                <td>34,000₫</td>
                                                <td>
                                                    <p>1</p>
                                                </td>
                                                <td>34,000₫</td>
                                                <td>
                                                    <div class=" tr tr__xl">Đang xử lý</div>
                                                </td>

                                            </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="modal-footer border-0">
                                <p class="fs-5">Thành tiền: <span class="fw-bold text-danger">34,000₫</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="detail-order_2" tabindex="-1" aria-labelledby="detail-orderModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header border-0">
                                <h1 class="modal-title fs-5 fw-normal" id="detail-orderModalLabel">Đơn hàng:
                                    <strong>DH034</strong>
                                </h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body ">
                                <div class="row">
                                    <table class="table ">
                                        <thead class="table ">
                                            <tr>
                                                <th scope="col">Ngày đặt</th>
                                                <th scope="col">Sản phẩm</th>
                                                <th scope="col">Đơn giá</th>
                                                <th scope="col">Số lượng</th>
                                                <th scope="col">Tổng tiền</th>
                                                <th scope="col">Trạng thái</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row" class="fw-normal">
                                                    <p>08:46</p>
                                                    <p>6/12/2022</p>
                                                </th>
                                                <td>
                                                    <p>Mì kim chi bò mỹ </p>
                                                    <p>Tôm thêm</p>

                                                </td>
                                                <td>
                                                    <p>49,000₫</p>
                                                    <p>7,000₫</p>
                                                </td>
                                                <td>
                                                    <p>1</p>
                                                    <p>1</p>
                                                </td>
                                                <td>
                                                    <p>49,000₫</p>
                                                    <p>7,000₫</p>
                                                </td>
                                                <td>
                                                    <div class=" tr tr__dag">Đang vận chuyển</div>
                                                </td>

                                            </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="modal-footer border-0">
                                <p class="fs-5">Thành tiền: <span class="fw-bold text-danger">56,000₫</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="detail-order_3" tabindex="-1" aria-labelledby="detail-orderModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header border-0">
                                <h1 class="modal-title fs-5 fw-normal" id="detail-orderModalLabel">Đơn hàng:
                                    <strong>DH022</strong>
                                </h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body ">
                                <div class="row">
                                    <table class="table ">
                                        <thead class="table ">
                                            <tr>
                                                <th scope="col">Ngày đặt</th>
                                                <th scope="col">Sản phẩm</th>
                                                <th scope="col">Đơn giá</th>
                                                <th scope="col">Số lượng</th>
                                                <th scope="col">Tổng tiền</th>
                                                <th scope="col">Trạng thái</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row" class="fw-normal">
                                                    <p>12:46</p>
                                                    <p>03/12/2022</p>
                                                </th>
                                                <td>
                                                    <p>Lẩu kim cho bạch tuộc</p>

                                                </td>
                                                <td>
                                                    <p>239,000₫</p>
                                                </td>
                                                <td>
                                                    <p>1</p>
                                                </td>
                                                <td>
                                                    <p>239,000₫</p>
                                                </td>
                                                <td>
                                                    <div class=" tr tr__dh">Đã huỷ</div>
                                                </td>

                                            </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="modal-footer border-0">
                                <p class="fs-5">Thành tiền: <span class="fw-bold text-danger">239,000₫</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="detail-order_4" tabindex="-1" aria-labelledby="detail-orderModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header border-0">
                                <h1 class="modal-title fs-5 fw-normal" id="detail-orderModalLabel">Đơn hàng:
                                    <strong>DH017</strong>
                                </h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body ">
                                <div class="row">
                                    <table class="table ">
                                        <thead class="table ">
                                            <tr>
                                                <th scope="col">Ngày đặt</th>
                                                <th scope="col">Sản phẩm</th>
                                                <th scope="col">Đơn giá</th>
                                                <th scope="col">Số lượng</th>
                                                <th scope="col">Tổng tiền</th>
                                                <th scope="col">Trạng thái</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row" class="fw-normal">
                                                    <p>10:06</p>
                                                    <p>03/12/2022</p>
                                                </th>
                                                <td>
                                                    <p>Lẩu thái hải sản</p>

                                                </td>
                                                <td>
                                                    <p>210,000₫</p>
                                                </td>
                                                <td>
                                                    <p>1</p>
                                                </td>
                                                <td>
                                                    <p>210,000₫</p>
                                                </td>
                                                <td>
                                                    <div class=" tr tr__dg">Đã hoàn thành</div>
                                                </td>

                                            </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="modal-footer border-0">
                                <p class="fs-5">Thành tiền: <span class="fw-bold text-danger">210,000₫</span></p>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- END Modal chi tiết đơn hàng-->

            </div>
            <div class="tool hotro fs-6" id="help">Chức năng hiện tại chưa khả dụng!</div>
        </div>
    </div>
    <?php
    ?>
</section>

<!-- Back to top  -->
<a href="#" class="BackToTop cd-top text-replace js-cd-top">
    <i class="fa fa-angle-up"></i>
</a>
<!-- JQUERY  -->
<script src="./node_modules/jquery/dist/jquery.min.js"></script>
<!-- BOOSTRAP JS  -->
<script src="./js/bootstrap.bundle.min.js"></script>
<!-- UTIL JS  -->
<script src="./js/util.js"></script>
<!-- BACKTOTOP JS  -->
<script src="./js/main-backToTop.js"></script>
<!-- FILE  -->
<script>
    var tool = document.getElementById("list__tool");
    var list__tool = tool.getElementsByTagName("li");
    for (var i = 0; i < list__tool.length; i++) {
        list__tool[i].addEventListener("click", function() {
            //tìm thẻ nào đang đc gắn acitve
            var current = document.querySelector("#list__tool .active");
            // xóa class active của thẻ đang được gắn
            current.className = current.className.replace("active", "");
            // thêm class active vào thẻ li được click 
            this.className += "active";



        });
    }
    var content = document.getElementById("file__right");
    var list_content = content.getElementsByClassName("tool");

    for (var i = 1; i < list_content.length; i++) {
        list_content[i].style.display = "none";
    }

    function file() {
        for (var i = 1; i < list_content.length; i++) {
            list_content[i].style.display = "none";
        }
        var x = document.getElementById("file");
        x.style.display = "flex";
    }

    function order() {
        for (var i = 0; i < list_content.length; i++) {
            list_content[i].style.display = "none";
        }
        var x = document.getElementById("order");
        x.style.display = "block";
    }

    function help() {
        for (var i = 0; i < list_content.length; i++) {
            list_content[i].style.display = "none";
        }
        var x = document.getElementById("help");
        x.style.display = "block";
    }
</script>

<script>
    $(document).ready(function() {
        // Xử lý khi nút chỉnh sửa được click
        $(".edit-button").on("click", function() {
            // Hiển thị modal chỉnh sửa
            $("#editModal").modal("show");
        });
         // Xử lý khi nút chỉnh sửa được click
         $(".edit_address-button").on("click", function() {
            // Hiển thị modal chỉnh sửa
            $("#editModal_address").modal("show");
        });
    });
</script>