<?php
session_start();
include('../../database/config.php');
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)) {
    // header('Location:../../index.php?quanly=cart');

    $customer_id = $_SESSION['id_customer'];
    $customer_name = $_POST['customer_name'];
    $customer_phone = $_POST['customer_phone'];
    $customer_city = $_POST['customer_city'];
    $customer_address = $_POST['customer_address'];
    $customer_note = $_POST['customer_note'];
    $payment_method = $_POST['payment_method'];
    // Đặt múi giờ thành múi giờ mong muốn
    date_default_timezone_set('Asia/Ho_Chi_Minh');

    // Lấy thời gian hiện tại
    $currentTime = date('Y-m-d H:i:s');

    $total_money = 0;
    if (isset($_SESSION['cart_seoul']))
        foreach ($_SESSION['cart_seoul'] as $cart_item) {
            $thanhtien = $cart_item['soluong'] * $cart_item['giasp'];
            $total_money += $thanhtien;
        }
    $insert_ordes = "INSERT INTO orders(user_id,fullname,phone,address,note,order_date,status,total_money,payment_methods) VALUE('" . $customer_id . "','" . $customer_name . "','" . $customer_phone . "','" . $customer_address . "','" . $customer_note . "','" . $currentTime . "',1,'" . $total_money . "','" . $payment_method . "')";
    $cart_query = mysqli_query($mysqli, $insert_ordes);
    if ($cart_query) {
        $orders_id = mysqli_insert_id($mysqli);
        //them gio hang chi tiet
        foreach ($_SESSION['cart_seoul'] as $key => $value) {
            $id_product = $value['id'];
            $num = $value['soluong'];
            $price = $value['giasp'];
            $total_money_detail = $num * $price;

            $insert_order_details = "INSERT INTO orders_details(order_id,product_id,price,num,total_money) VALUE('" . $orders_id . "','" . $id_product . "','" . $price . "','" . $num . "','" . $total_money_detail . "')";
            mysqli_query($mysqli, $insert_order_details);
        }
    }
    unset($_SESSION['cart_seoul']);
}
