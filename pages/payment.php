<link rel="stylesheet" href="./css/payment.css">
<!-- BREADCRUMB-->
<section class="breadcrumb_section container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./index.php">Trang chủ</a></li>
            <li class="breadcrumb-item"><a href="./index.php?quanly=cart">Giỏ hàng</a></li>
            <li class="breadcrumb-item active" aria-current="page">Thanh toán</li>

        </ol>
    </nav>
</section>
<!-- PAYMENT  -->
<section class="payment container">
    <form class="payment--form" method="post" action="./pages/Handle/payment_handle.php" id="payment_form">
        <div class="payment__content row">
            <div class="payment__content__left col-6">
                <h3>Thông tin giao hàng</h3>
                <?php
                $id_customer = $_SESSION['id_customer'];
                $sql = "SELECT * FROM user WHERE id='" . $id_customer . "' LIMIT 1";
                $row = mysqli_query($mysqli, $sql);
                $row_data = mysqli_fetch_array($row);
                ?>
                <!-- Họ tên  -->
                <label for="payment__receiver"><i class="fas fa-user"></i>Họ tên</label>
                <input type="text" id="payment__receiver" required placeholder="Tên người nhận hàng" value="<?php echo $row_data['fullname'] ?>" name="customer_name">
                <!-- Điện thoại  -->
                <label for="payment--phone"><i class="fas fa-phone-volume"></i>Điện thoại</label>
                <input type="tel" name="customer_phone" id="payment--phone" required pattern="(84|0[3|5|7|8|9])+([0-9]{8})\b" placeholder="Số điện thoại người nhận hàng" value="<?php echo $row_data['phone'] ?>">
                <!-- Địa chỉ  -->
                <label for="payment--adr"><i class="far fa-address-card"></i></i>Địa chỉ</label>
                <div>

                    <select class="form-select form-select-sm mb-3" id="city" aria-label=".form-select-sm" name="customer_city" required>
                        <option value="" selected>Chọn tỉnh thành</option>

                    </select>

                    <select class="form-select form-select-sm mb-3" id="district" aria-label=".form-select-sm" name="customer_district" required>
                        <option value="" selected>Chọn quận huyện</option>
                    </select>

                    <select class="form-select form-select-sm mb-3" id="ward" aria-label=".form-select-sm" name="customer_ward" required>
                        <option value="" selected>Chọn phường xã</option>

                    </select>
                    <input type="text" id="payment--adr" required placeholder="Địa chỉ nhận hàng" name="custome_address">

                </div>
                <!-- <input type="checkbox" id="payment--defaul">
                <label for="payment--defaul"> Sử dụng thông tin mặc
                    định <i class="far fa-question-circle">
                        <div class="more-info">Thông tin về họ tên, số điện thoại, địa chỉ mà bạn lưu trong tài
                            khoản (nếu có) </div>
                    </i> </label> -->
                <!-- Ghi chú  -->
                <label for="payment--note"><i class="far fa-comment"></i></i>Ghi chú</label>
                <textarea type="text" name="customer_note" id="payment--note" rows="3" placeholder="Ghi yêu cầu của bạn tại đây."></textarea>
                <!-- Button trigger modal -->
                <button type="submit" class="payment--button" name="payment_button">
                    Đặt hàng
                </button>
            </div>
            <div class="payment__content__right col-6">
                <h3>Phương thức thanh toán</h3>
                <label>Chọn phương thức:</label>
                <div class="btn-group" id="payment__method" role="group" aria-label="Basic radio toggle button group">
                    <input type="radio" name="btnradio" id="btnradio1" autocomplete="off" checked value="visa">
                    <label class="btn active" for="btnradio1"><img src="./img/cart_payment_1.svg" alt="Hình thức thanh toán"></label>
                    <div class="payment__method--visa payment__method">
                        <p>Phương thức hiện tại không khả dụng.</p>
                    </div>
                    <input type="radio" class="" name="btnradio" id="btnradio2" autocomplete="off" value="mastercard">
                    <label class="btn " for="btnradio2"><img src="./img/cart_payment_2.svg" alt="Hình thức thanh toán"></label>
                    <div class="payment__method--master payment__method">
                        <p>Phương thức hiện tại không khả dụng.</p>
                    </div>
                    <input type="radio" class="" name="btnradio" id="btnradio3" autocomplete="off" value="bank">
                    <label class="btn " for="btnradio3"><img src="./img/cart_payment_3.svg" alt="Hình thức thanh toán"></label>
                    <div class="payment__method--bank payment__method">
                        <p>1. Ngân hàng TMCP Á Châu ACB
                            <br>
                            STK: 23189651
                            <br>
                            Chủ Tài Khoản: LE ANH NAM
                            <br>
                            Nội dung: SĐT + họ tên
                            <br>
                            <br>
                            2. Ngân hàng TMCP Ngoại thương Việt Nam Vietcombank - CN Tây Hà Nội
                            <br>
                            STK: 069100099999
                            <br>
                            Chủ Tài Khoản: LE ANH NAM
                            <br>
                            Nội dung: SĐT + họ tên
                            <br>
                            <br>
                            Chi phí vận chuyển và thời gian vận chuyển sẽ được nhân viên gọi điện xác nhận!
                            <br>Thông tin chi
                            tiết đơn hàng sẽ được chúng tôi gửi về email của bạn!
                            <br>
                            <span>Lưu ý:</span>
                            <br>
                            SAU KHI CHUYỂN KHOẢN XONG, NHÂN VIÊN CỦA MỲ CAY SEOUL SẼ GỌI CHO BẠN ĐỂ XÁC NHẬN. NẾU KHÔNG
                            NHẬN ĐƯỢC CUỘC GỌI QUÁ 15 PHÚT, XIN HÃY GỌI <span>HOTLINE:19003360 </span>
                            <br>
                        </p>
                    </div>

                    <input type="radio" class="" name="btnradio" id="btnradio4" autocomplete="off" value="cash">
                    <label class="btn " for="btnradio4"><img src="./img/cart_payment_4.svg" alt="Hình thức thanh toán"></label>
                    <div class="payment__method--money payment__method">
                        <p>Quý khách chỉ phải thanh toán khi nhận được hàng - Chi phí vận chuyển và thời gian vận chuyển
                            sẽ được nhân viên gọi điện xác nhận!
                            <br> <br>Thông tin chi tiết đơn hàng sẽ được chúng tôi gửi về email của bạn!
                            <br><br>
                            Để đảm bảo giải quyết các vấn đề phát sinh về đơn hàng một cách minh bạch, quý khách vui
                            lòng quay lại video khi mở hàng.
                            <br> <br>

                            Trong trường hợp shop gửi thiếu hàng, hỏng hàng, sai hàng quý khách vui lòng phản hồi và
                            gửi lại video cho shop để kiểm chứng, cửa hàng sẽ tiến hành bù hoàn sau khi đã xác nhận.
                            <br> <br>

                            Trường hợp không có video bóc hàng shop xin TỪ CHỐI giải quyết.
                        </p>
                    </div>



                </div>
            </div>

        </div>
    </form>

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
<!-- AXIOS JS -->
<script src="./js/axios.min.js"></script>
<!-- BACKTOTOP JS  -->
<script src="./js/main-backToTop.js"></script>
<!-- PAYMENT JS  -->
<Script>
    // kiếm thẻ có id là mainNav 
    //kiếm thẻ ul
    var paymentMethod = document.getElementById("payment__method");
    // kiếm thẻ con li 
    var listMethod = paymentMethod.getElementsByTagName("label");
    for (var i = 0; i < listMethod.length; i++) {
        // khi thẻ li đc click thì gọi hàm nó ra
        listMethod[i].addEventListener("click", function() {
            //tìm thẻ nào đang đc gắn acitve
            var current = document.querySelector("#payment__method .active");
            // xóa class active của thẻ đang được gắn
            current.className = current.className.replace("active", "");
            // thêm class active vào thẻ li được click 
            this.className += "active";

        });


    }
</Script>
<!-- PAYMENT_FORM -->
<script>
    $("#payment_form").on("submit", function(event) {
        event.preventDefault(); // Ngăn chặn việc gửi form một cách thông thường

        // Lấy các giá trị từ các trường input trong form
        var receiver = $("#payment__receiver").val();
        var phone = $("#payment--phone").val();
        var city = $("#city").val();
        var selectedOptionCityText = $("#city option:selected").text();
        var selectedOptionDistrictText = $("#district option:selected").text();
        var selectedOptionWardText = $("#ward option:selected").text();
        var address = $("#payment--adr").val();
        var note = $("#payment--note").val();
        var paymentMethod = $("input[name='btnradio']:checked").val();
        var fullAddress = address + ', ' + selectedOptionWardText + ', ' + selectedOptionDistrictText + ', ' + selectedOptionCityText;
        // Tạo đối tượng dữ liệu form
        const formData = new FormData();
        formData.append("customer_name", receiver);
        formData.append("customer_phone", phone);
        formData.append("customer_city", city);
        formData.append("customer_address", fullAddress);
        formData.append("customer_note", note);
        formData.append("payment_method", paymentMethod);

        fetch("./pages/Handle/payment_handle.php", {
                method: "POST",
                body: formData
            })
            .then(response => {
                if (response.ok) {
                    window.location.href = "./index.php?quanly=thanks";
                } else {
                    throw new Error("Đã xảy ra lỗi. Mã lỗi: " + response.status);
                }
            })
            .then(data => {
                alert(data.customer_name);
            })
            .catch(error => {
                console.error("Đã xảy ra lỗi: " + error.message);
            });
    });
</script>


<!-- SELECT CITY -->
<script>
    var citis = document.getElementById("city");
    var districts = document.getElementById("district");
    var wards = document.getElementById("ward");
    var Parameter = {
        url: "./js/data.json",
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