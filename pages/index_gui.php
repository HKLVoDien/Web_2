   <?php if (isset($_SESSION['username'])) {
    ?>
       <!-- HELLO -->
       <div id="hello" class=""><Strong class="d-block" style="color: #c40505;">Mỳ Cay Seoul</Strong>Xin chào <?php echo $_SESSION['username']; ?>
       </div>
       </div>
   <?php
    } ?>
   <!-- CAROUSEL  -->
   <section class="carousel">
       <div class="owl-carousel owl-theme">
           <div class="item">
               <a href="#"><img src="./img/img_index/Baner1 1150x460.jpg" alt="banner1"></a>
           </div>
           <div class="item">
               <a href="#"><img src="./img/img_index/banner_phu_nu.jpg" alt="banner5"></a>
           </div>
       </div>
   </section>
   <!-- ABOUT  -->
   <section class="about " id="about">
       <div class="about__content row container ">
           <div class="about__left col-5">
               <div class="title">
                   <p>
                       <img src="./img/img_index/Tenthuonghieu 182x58 .png" alt="logo">
                   </p>
                   <h3>Quán Mỳ Cay Hàn Quốc</h3>
               </div>
               <div class="content">
                   <p>
                       Công ty TNHH <span>Mì Cay Seoul</span> được thành lập năm 2016, chúng tôi đã có những bước phát
                       triển và không ngừng hoàn thiện trong việc thiết kế nhà hàng, tìm kiếm nguồn thực phẩm tươi
                       ngon, nghiên cứu công thức chế biến, đào tạo nghề, kỹ năng phục vụ và chăm sóc khách hàng.
                   </p>
                   <p>
                       Trong suốt thời gian hoạt động dến nay, công ty chúng tôi đã tư vấn, thiết kế, hỗ trợ đào tạo
                       với hơn 40 đơn vị hợp tác và nhà đầu tư.
                   </p>
               </div>
               <div class="view_more">
                   <p><a href="./index.php?quanly=gioithieu">Xem Thêm</a></p>
               </div>
           </div>
           <div class="about__right col-7">
               <div class="about__right-img row">
                   <div class="img_1 col-6">
                       <img src="./img/img_index/Seoul 201784.jpg" alt="3 món mì">
                   </div>
                   <div class="img_2 row col-6">
                       <div class="img_2-1 col-12">
                           <img src="./img/img_index/Seoul 202378.jpg" alt="đầu bếp cầm mì">
                       </div>
                       <div class="img_2-2 col-12">
                           <img src="./img/img_index/Seoul 300886.jpg" alt="lẩu">
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>
   <!-- MENU  -->
   <section class="menu container" id="menu">
       <div class="title">
           <h3>BÁN CHẠY</h3>
       </div>
       <div class="menu__content">
           <div class="nav__menu">
               <ul id="nav__menu">
                   <li class="active" onclick="allMenu()"><a href="#menu">Tất cả</a></li>
                   <li><a href="#menu" onclick="MMMenu()">Món mỳ</a></li>
                   <li><a href="#menu" onclick="MLMenu()">Món lẩu</a></li>
                   <li><a href="#menu" onclick="MTRMenu()">Món trộn</a></li>
                   <li><a href="#menu" onclick="MTHMenu()">Món thêm</a></li>
                   <li><a href="#menu" onclick="AVMenu()">Ăn vặt</a></li>
                   <li><a href="#menu" onclick="DUMenu()">Đồ uống</a></li>

               </ul>
           </div>
           <div class="menu__food">
               <div class="food__main" id="all">
                   <?php
                    $sql_pro = "SELECT * FROM product WHERE visible != 0 ORDER BY id DESC";
                    $query_pro = mysqli_query($mysqli, $sql_pro);
                    $products = mysqli_fetch_all($query_pro, MYSQLI_ASSOC);
                    $count = mysqli_num_rows($query_pro);
                    $index = 0;
                    for ($i = 0; $i < 3; $i++) {
                    ?>
                       <div class="row-1">
                           <?php
                            for ($j = 0; $j < 3; $j++) {
                                if ($index < $count) {
                                    $product = $products[$index];
                            ?>
                                   <div class="food__item-1 food__item">
                                       <div class="food__img">
                                           <a href="./index.php?quanly=sanpham&id=<?php echo $product['id'] ?>"><img src="./Admin/img/upload/img_product/<?php echo $product['thumbnail'] ?>" alt="ảnh <?php echo $product['product_name'] ?>"></a>
                                       </div>
                                       <div class="food__content">
                                           <a href="./index.php?quanly=sanpham&id=<?php echo $product['id'] ?>" class="product_name"><?php echo $product['product_name'] ?></a>
                                           <p><?php echo number_format($product['price'], 0, ',', ',') . '₫'; ?></p>
                                           <?php
                                            if (isset($_SESSION['username'])) {
                                            ?>

                                               <div class="orders ">
                                                   <a href="./index.php?quanly=sanpham&id=<?php echo $product['id'] ?>" class="btn <?php if ($product['status'] == 0)
                                                                                            echo 'disabled' ?>"><?php if ($product['status'] == 0) echo 'HẾT HÀNG';
                                                                                                            else echo 'ĐẶT MÓN'; ?> </a>
                                               </div>
                                           <?php
                                            } else {
                                            ?>
                                               <div class="orders " >
                                                   <a href="./index.php?quanly=sanpham&id=<?php echo $product['id'] ?>" class="btn  <?php if ($product['status'] == 0)
                                                                                    echo 'disabled' ?>" data-bs-toggle="modal" data-bs-target="#Modalcheck-user"><?php if ($product['status'] == 0) echo 'HẾT HÀNG';
                                                                                                        else echo 'ĐẶT MÓN'; ?></a>
                                               </div>
                                           <?php
                                            }
                                            ?>

                                       </div>
                                   </div>
                           <?php
                                }


                                $index++;
                            }
                            ?>
                       </div>
                   <?php
                    }


                    ?>

               </div>
               <div class=" food__main " id=" MM">
                   <div class="row-1">
                       <div class="food__item-1  food__item">
                           <div class="food__img">
                               <a href="./pages/Product/mlt_thapcam-product.html"><img src="./img/mi/MLTTCAM.jpg" alt="ảnh "></a>
                           </div>
                           <div class="food__content">
                               <a href="">MỲ LẨU THÁI THẬP CẨM</a>
                               <p>99,000₫</p>
                               <div class="orders" data-bs-toggle="modal" data-bs-target="#Modalcheck-user">
                                   <button href="#">ĐẶT MÓN</button>
                               </div>
                           </div>
                       </div>

                   </div>
               </div>
               <div class="food__main " id="ML">
                   <div class="row-1">
                       <p class="no--product">Không có sản phẩm nào!</p>
                   </div>
               </div>
               <div class="food__main" id="MTR">
                   <div class="row-1">
                       <div class="food__item-1 food__item">
                           <div class="food__img">
                               <a href="./pages/Product/mtr_bibimbap-product.html"><img src="./img/ComTron/BB.jpg" alt="ảnh BBB"></a>
                           </div>
                           <div class="food__content">
                               <a href="">BIBIMBAP</a>
                               <p>55,000₫</p>
                               <div class="orders" data-bs-toggle="modal" data-bs-target="#Modalcheck-user">
                                   <button href="#">ĐẶT MÓN</button>
                               </div>
                           </div>
                       </div>

                   </div>
               </div>
               <div class="food__main" id="MTH">
                   <div class="row-1">
                       <p class="no--product">Không có sản phẩm nào!</p>
                   </div>
               </div>
               <div class="food__main" id="AV">
                   <div class="row-1">
                       <div class="food__item-1  food__item">
                           <div class="food__img">
                               <a href="./pages/Product/dav_kimbap-product.html"><img src="./img/AnVat/KB.jpg" alt="ảnh "></a>
                           </div>
                           <div class="food__content">
                               <a href="">KIMBAP</a>
                               <p>45,000₫</p>
                               <div class="orders" data-bs-toggle="modal" data-bs-target="#Modalcheck-user">
                                   <button href="#">ĐẶT MÓN</button>
                               </div>
                           </div>
                       </div>
                       <div class="food__item-2  food__item">
                           <div class="food__img LTTCN">
                               <a href="./pages/Product/dav_hcc-product.html"><img src="./imG/AnVat/Hcc.jpg" alt="ảnh "></a>
                           </div>
                           <div class="food__content">
                               <a href="">HÁ CẢO CHIÊN</a>
                               <p>35,000₫</p>
                               <div class="orders" data-bs-toggle="modal" data-bs-target="#Modalcheck-user">
                                   <button href="#">ĐẶT MÓN</button>
                               </div>
                           </div>
                       </div>
                       <div class="food__item-3  food__item">
                           <div class="food__img">
                               <a href="./pages/Product/dav_TBKtruyenthong-product.html"><img src="./img/AnVat/Tokbokki/Seoul 201421.jpg" alt="ảnh "></a>
                           </div>
                           <div class="food__content">
                               <a href="">TOKBOKKI TRUYỀN THỐNG</a>
                               <p>55,000₫</p>
                               <div class="orders" data-bs-toggle="modal" data-bs-target="#Modalcheck-user">
                                   <button href="#">ĐẶT MÓN</button>
                               </div>

                           </div>
                       </div>
                   </div>
                   <div class="row-2">
                       <div class="food__item-1  food__item">
                           <div class="food__img">
                               <a href="./pages/Product/dav_bcc-product.html"><img src="./img/AnVat/BTTHS.jpg" alt="ảnh "></a>
                           </div>
                           <div class="food__content">
                               <a href="">BÁNH CUỘN CHIÊN</a>
                               <p>35,000₫</p>
                               <div class="orders" data-bs-toggle="modal" data-bs-target="#Modalcheck-user">
                                   <button href="#">ĐẶT MÓN</button>
                               </div>
                           </div>
                       </div>
                       <div class="food__item-2  food__item">
                           <div class="food__img">
                               <a href="./pages/Product/dav_TBKphomai-product.html"> <img src="./img/AnVat/Tokbokki/TBLPM.jpg" alt="ảnh "></a>
                           </div>
                           <div class="food__content">
                               <a href="">TOKBOKKI PHÔ MAI</a>
                               <p>25,000₫</p>
                               <div class="orders" data-bs-toggle="modal" data-bs-target="#Modalcheck-user">
                                   <button href="#">ĐẶT MÓN</button>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="food__main" id="DU">
                   <div class="row-1">
                       <div class="food__item-1  food__item">
                           <div class="food__img">
                               <a href="./pages/Product/du_ruousoju-product.html"><img src="./img/Nuoc/Ruousoju.jpg" alt="ảnh "></a>
                           </div>
                           <div class="food__content">
                               <a href="">RƯỢU SOJU</a>
                               <p>70,000₫</p>
                               <div class="orders" data-bs-toggle="modal" data-bs-target="#Modalcheck-user">
                                   <button href="#">ĐẶT MÓN</button>
                               </div>
                           </div>
                       </div>

                   </div>
               </div>
               <div class="menu__cart">
                   <div class="sticky-right">
                       <div class="title">Giỏ hàng</div>
                       <div class="sticky__content">
                           <div class="orders-cart" id="cart-sidebar">
                               <div class="order-cart-ajax ajax-here">
                                   <?php
                                    if (isset($_SESSION['cart_seoul'])) {
                                        $i = 0;
                                        $tongtien = 0;
                                    ?>
                                       <div class="orders-cart-item">
                                           <div class="cart-item ">
                                               <?php
                                                foreach ($_SESSION['cart_seoul'] as $cart_item) {
                                                    $thanhtien = $cart_item['soluong'] * $cart_item['giasp'];
                                                    $tongtien += $thanhtien;
                                                    $i++;
                                                ?>
                                                   <div class="simpleCart_items row">
                                                       <!-- khung chứa sp  -->
                                                       <div class="items-thumb col-4">
                                                           <img src="./admin/img/upload/img_product/<?php echo $cart_item['hinhanh'] ?>" alt="<?php echo $cart_item['tensanpham'] ?>">
                                                       </div>
                                                       <div class="items-content col-8 ">
                                                           <a href="./index.php?quanly=sanpham&id=<?php echo $cart_item['id'] ?>" class="col-12"><?php echo $cart_item['tensanpham'] ?></a>
                                                           <div class="items-price col-5"><?php echo number_format($cart_item['giasp'], 0, ',', ',') . '₫' ?></div>
                                                           <div class="items-quantity d-inline-block col-5  ">
                                                               <form method='GET' class='myform  m-0 d-inline-block' action='./pages/Handle/cart_handle.php'>
                                                                   <button type="button" class="qtyminus minus"><i class="fas fa-minus"></i></button>
                                                                   <input name="quantity" type='text' value="<?php echo $cart_item['soluong'] ?>" class="text-center qty">
                                                                   <button type="button" class="qtyplus plus"><i class="fas fa-plus"></i></button>
                                                                   <input type="hidden" value="<?php echo $cart_item['id'] ?>" name="id">
                                                               </form>
                                                           </div>
                                                           <button class="remove_items">Xoá</button>
                                                       </div>
                                                   </div>
                                               <?php
                                                }
                                                ?>
                                           </div>
                                       </div>
                                       <div class="orders-cart-bottom">
                                           <p class="subtotal">
                                               Tạm tính:
                                               <span class="order-total" id="price-temp"><?php echo number_format($tongtien, 0, ',', ',') . '₫' ?></span>
                                           </p>

                                       </div>
                                       <div class="orders-cart-total">
                                           <p>TỔNG CỘNG: <span id="price-total"><?php echo number_format($tongtien, 0, ',', ',') . '₫' ?></span></p>
                                       </div>
                                   <?php
                                    } else {
                                    ?>
                                       <div class="orders-cart-item">
                                           <div class="cart-item ">
                                               <div class="simpleCart_items row">
                                                   <h6 class="">Chưa có sản phẩm nào!</p>
                                               </div>
                                           </div>

                                       </div>
                                       <div class="orders-cart-bottom">
                                           <p class="subtotal">
                                               Tạm tính:
                                               <span class="order-total">0₫</span>
                                           </p>
                                           <p class="fee-transport">
                                               Phí vận chuyển:
                                               <span class="order-total">0₫</span>
                                           </p>
                                       </div>
                                       <div class="orders-cart-total">
                                           <p>TỔNG CỘNG: <span>0₫</span></p>
                                       </div>
                               </div>
                           <?php
                                    }
                            ?>
                           <?php if (isset($_SESSION['username'])) {
                            ?>
                               <div class="payment">
                                   <a href="./index.php?quanly=payment">THANH TOÁN</a>
                               </div>
                           <?php
                            } else {
                            ?> <div class="payment">
                                   <a href="" data-bs-toggle="modal" data-bs-target="#Modalcheck-user">THANH TOÁN</a>
                               </div>
                           <?php
                            } ?>
                           </div>


                       </div>

                   </div>

               </div>
           </div>

       </div>
       </div>

   </section>
   <!-- thư viện hỗ trợ animation  -->
   <!-- JQUERY  -->
   <script src="./node_modules/jquery/dist/jquery.min.js"></script>
   <!-- OWL CAROUSEL -->
   <script src="./js/owl.carousel.min.js"></script>
   <!-- BOOSTRAP JS  -->
   <script src="./js/bootstrap.bundle.min.js"></script>
   <!-- UTIL JS  -->
   <script src="./js/util.js"></script>
   <script>
       $('.owl-carousel').owlCarousel({
           autoplay: true,
           loop: true,
           margin: 10,
           nav: false,
           stagePadding: 150,
           autoplayHoverPause: true,
           slideTransition: 'ease-out',
           smartSpeed: 3000,
           responsive: {
               0: {
                   items: 1
               },
               500: {
                   items: 1
               },
               1000: {
                   items: 1
               }
           }
       })
   </script>
   <!-- Back to top  -->
   <a href="#" class="BackToTop cd-top text-replace js-cd-top">
       <i class="fa fa-angle-up"></i>
   </a>
   <!-- BACKTOTOP JS  -->
   <script src="./js/main-backToTop.js"></script>
   <!-- MENU JS -->
   <Script>
       // kiếm thẻ có id là mainNav
       //kiếm thẻ ul
       var paymentMethod = document.getElementById("nav__menu");
       // kiếm thẻ con li
       var listMethod = paymentMethod.getElementsByTagName("li");
       for (var i = 0; i < listMethod.length; i++) {
           // khi thẻ li đc click thì gọi hàm nó ra
           listMethod[i].addEventListener("click", function() {
               //tìm thẻ nào đang đc gắn acitve
               var current = document.querySelector("#nav__menu .active");
               // xóa class active của thẻ đang được gắn
               current.className = current.className.replace("active", "");
               // thêm class active vào thẻ li được click
               this.className += "active";
           });


       }
   </Script>
   <script>
       var listMenu = document.getElementsByClassName("food__main")
       for (var i = 1; i < listMenu.length; i++) {
           listMenu[i].style.display = "none";
       }

       function allMenu() {
           for (var i = 0; i < listMenu.length; i++) {
               listMenu[i].style.display = "none";
           }
           var x = document.getElementById("all");
           x.style.display = "block";
       }

       function MMMenu() {
           for (var i = 0; i < listMenu.length; i++) {
               listMenu[i].style.display = "none";
           }
           var x = document.getElementById("MM");
           x.style.display = "block";
       }

       function MLMenu() {
           for (var i = 0; i < listMenu.length; i++) {
               listMenu[i].style.display = "none";
           }
           var x = document.getElementById("ML");
           x.style.display = "block";
       }

       function MTRMenu() {
           for (var i = 0; i < listMenu.length; i++) {
               listMenu[i].style.display = "none";
           }
           var x = document.getElementById("MTR");
           x.style.display = "block";
       }

       function MTHMenu() {
           for (var i = 0; i < listMenu.length; i++) {
               listMenu[i].style.display = "none";
           }
           var x = document.getElementById("MTH");
           x.style.display = "block";
       }

       function AVMenu() {
           for (var i = 0; i < listMenu.length; i++) {
               listMenu[i].style.display = "none";
           }
           var x = document.getElementById("AV");
           x.style.display = "block";
       }

       function DUMenu() {
           for (var i = 0; i < listMenu.length; i++) {
               listMenu[i].style.display = "none";
           }
           var x = document.getElementById("DU");
           x.style.display = "block";
       }
   </script>
   <!-- QUANTITY JS  -->
   <script>
       // Lấy danh sách các phần tử sản phẩm
       var productItems = document.querySelectorAll('.simpleCart_items');

       // Lặp qua từng phần tử và gắn sự kiện click
       productItems.forEach(function(productItem) {
           // Lấy các phần tử con cần sử dụng trong sản phẩm hiện tại
           var quantityInput = productItem.querySelector('.qty');
           var minusButton = productItem.querySelector('.qtyminus');
           var plusButton = productItem.querySelector('.qtyplus');
           var removeButton = productItem.querySelector('.remove_items');
           // Sự kiện khi nhấn nút trừ
           minusButton.addEventListener('click', function() {
               var currentQuantity = parseInt(quantityInput.value);
               if (currentQuantity > 1) {
                   quantityInput.value = currentQuantity - 1;
                   updateQuantity();
               }
           });

           // Sự kiện khi nhấn nút cộng
           plusButton.addEventListener('click', function() {
               var currentQuantity = parseInt(quantityInput.value);
               quantityInput.value = currentQuantity + 1;
               updateQuantity();
           });
           // Sự kiện khi nhấn nút xóa
           removeButton.addEventListener('click', function() {
               var id = productItem.querySelector('input[name="id"]').value;
               // Tạo URL endpoint với các tham số truyền vào
               var url = './pages/Handle/cart_handle.php?xoa=' + encodeURIComponent(id);
               // Gửi yêu cầu AJAX
               fetch(url, {
                       method: 'GET'
                   })
                   .then(function(response) {
                       if (response.ok) {
                           // Xử lý kết quả trả về từ server nếu thành công
                           response.text().then(function(responseData) {
                               // Xử lý chuỗi văn bản
                               document.querySelector('#price-temp').innerHTML = responseData;
                               document.querySelector('#price-total').innerHTML = responseData;
                               //xóa phần tử
                               productItem.remove();
                               //reload lại trang nếu không còn sản phẩm 
                               if (responseData == '0₫') {
                                   location.reload();
                               }
                           });
                       } else {
                           // Xử lý lỗi nếu không thành công
                           alert('Lỗi xảy ra. Vui lòng thử lại sau.');
                       }
                   })
                   .catch(function(error) {
                       // Xử lý lỗi kết nối
                       alert('Lỗi kết nối. Vui lòng kiểm tra lại đường truyền mạng.');
                   });

           });
           // Hàm cập nhật số lượng và gửi form
           function updateQuantity() {
               // Lấy giá trị của các trường input
               var quantity = quantityInput.value;
               var id = productItem.querySelector('input[name="id"]').value;

               // Tạo URL endpoint với các tham số truyền vào
               var url = './pages/Handle/cart_handle.php?quantity=' + encodeURIComponent(quantity) + '&id=' + encodeURIComponent(id);

               // Gửi yêu cầu AJAX
               fetch(url, {
                       method: 'GET'
                   })
                   .then(function(response) {
                       if (response.ok) {
                           // Xử lý kết quả trả về từ server nếu thành công
                           response.json().then(function(responseData) {
                               // Xử lý kết quả JSON
                               var newTotal = responseData.newTotal;
                               var thanhtienDetail = responseData.thanhtien_detail;
                               // Xử lý chuỗi văn bản
                               document.querySelector('#price-temp').innerHTML = newTotal;
                               document.querySelector('#price-total').innerHTML = newTotal;
                           });
                       } else {
                           // Xử lý lỗi nếu không thành công
                           alert('Lỗi xảy ra. Vui lòng thử lại sau.');
                       }
                   })
                   .catch(function(error) {
                       // Xử lý lỗi kết nối
                       alert('Lỗi kết nối. Vui lòng kiểm tra lại đường truyền mạng.');
                   });
           }
       });
   </script>