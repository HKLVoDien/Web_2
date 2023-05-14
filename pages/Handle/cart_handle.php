<?php
session_start();
include('../../database/config.php');
//Thay đổi số lượng và tổng tiền tất cả sản phẩm trong giỏ
if (isset($_GET['quantity'])) {
    $id = $_GET['id'];
    $soluong = $_GET['quantity'];
    $thanhtien_detail = 0;
    foreach ($_SESSION['cart_seoul'] as $cart_item) {
        if ($cart_item['id'] != $id) {
            $product[] = array('tensanpham' => $cart_item['tensanpham'], 'id' => $cart_item['id'], 'soluong' => $cart_item['soluong'], 'giasp' => $cart_item['giasp'], 'hinhanh' => $cart_item['hinhanh'], 'masp' => $cart_item['masp']);
            $_SESSION['cart_seoul'] = $product;
        } else {
            $tangsoluong = $soluong;
            $product[] = array('tensanpham' => $cart_item['tensanpham'], 'id' => $cart_item['id'], 'soluong' => $tangsoluong, 'giasp' => $cart_item['giasp'], 'hinhanh' => $cart_item['hinhanh'], 'masp' => $cart_item['masp']);
            $_SESSION['cart_seoul'] = $product;
            $thanhtien_detail =  $product[count($product) - 1]['giasp'] * $product[count($product) - 1]['soluong'];
        }
    }
    $tongtien = 0;
    foreach ($_SESSION['cart_seoul'] as $cart_item) {
        $thanhtien = $cart_item['soluong'] * $cart_item['giasp'];
        $tongtien += $thanhtien;
    }
    $response = array(
        'newTotal' => number_format($tongtien, 0, ',', ',') . '₫',
        'thanhtien_detail' => number_format($thanhtien_detail, 0, ',', ',') . '₫'
    );

    // Chuyển đổi đối tượng thành chuỗi JSON
    $jsonResponse = json_encode($response);

    // Trả về kết quả
    echo $jsonResponse;
}
//them so luong
// if (isset($_GET['cong'])) {
//     $id = $_GET['cong'];
//     foreach ($_SESSION['cart_seoul'] as $cart_item) {
//         if ($cart_item['id'] != $id) {
//             $product[] = array('tensanpham' => $cart_item['tensanpham'], 'id' => $cart_item['id'], 'soluong' => $cart_item['soluong'], 'giasp' => $cart_item['giasp'], 'hinhanh' => $cart_item['hinhanh'], 'masp' => $cart_item['masp']);
//             $_SESSION['cart'] = $product;
//         } else {
//             $tangsoluong = $cart_item['soluong'] + 1;
//             if ($cart_item['soluong'] <= 9) {

//                 $product[] = array('tensanpham' => $cart_item['tensanpham'], 'id' => $cart_item['id'], 'soluong' => $tangsoluong, 'giasp' => $cart_item['giasp'], 'hinhanh' => $cart_item['hinhanh'], 'masp' => $cart_item['masp']);
//             } else {
//                 $product[] = array('tensanpham' => $cart_item['tensanpham'], 'id' => $cart_item['id'], 'soluong' => $cart_item['soluong'], 'giasp' => $cart_item['giasp'], 'hinhanh' => $cart_item['hinhanh'], 'masp' => $cart_item['masp']);
//             }
//             $_SESSION['cart_seoul'] = $product;
//         }
//     }
//     // header('Location:../../index.php?quanly=cart');
// }

// //tru so luong
// if (isset($_GET['tru'])) {
//     $id = $_GET['tru'];
//     foreach ($_SESSION['cart_seoul'] as $cart_item) {
//         if ($cart_item['id'] != $id) {
//             $product[] = array('tensanpham' => $cart_item['tensanpham'], 'id' => $cart_item['id'], 'soluong' => $cart_item['soluong'], 'giasp' => $cart_item['giasp'], 'hinhanh' => $cart_item['hinhanh'], 'masp' => $cart_item['masp']);
//             $_SESSION['cart'] = $product;
//         } else {
//             $giamsoluong = $cart_item['soluong'] - 1;
//             if ($cart_item['soluong'] > 1) {

//                 $product[] = array('tensanpham' => $cart_item['tensanpham'], 'id' => $cart_item['id'], 'soluong' => $giamsoluong, 'giasp' => $cart_item['giasp'], 'hinhanh' => $cart_item['hinhanh'], 'masp' => $cart_item['masp']);
//             } else {
//                 $product[] = array('tensanpham' => $cart_item['tensanpham'], 'id' => $cart_item['id'], 'soluong' => $cart_item['soluong'], 'giasp' => $cart_item['giasp'], 'hinhanh' => $cart_item['hinhanh'], 'masp' => $cart_item['masp']);
//             }
//             $_SESSION['cart_seoul'] = $product;
//         }
//     }
//     // header('Location:../../index.php?quanly=cart');
// }
//xoa san pham
if (isset($_SESSION['cart_seoul']) && isset($_GET['xoa'])) {
    $id = $_GET['xoa'];
    $product = array();
    foreach ($_SESSION['cart_seoul'] as $cart_item) {

        if ($cart_item['id'] != $id) {
            $product[] = array('tensanpham' => $cart_item['tensanpham'], 'id' => $cart_item['id'], 'soluong' => $cart_item['soluong'], 'giasp' => $cart_item['giasp'], 'hinhanh' => $cart_item['hinhanh'], 'masp' => $cart_item['masp']);
        }
        //Nếu xóa sản phẩm cuối cùng
        if (empty($product)) {
            unset($_SESSION['cart_seoul']);
        } else {
            $_SESSION['cart_seoul'] = $product;
        }
    }
    $tongtien = 0;
    if (isset($_SESSION['cart_seoul']))
        foreach ($_SESSION['cart_seoul'] as $cart_item) {
            $thanhtien = $cart_item['soluong'] * $cart_item['giasp'];
            $tongtien += $thanhtien;
        }
    $newTotal = $tongtien;
    echo number_format($newTotal, 0, ',', ',') . '₫';
}
// //xoa tat ca
// if (isset($_GET['xoatatca']) && $_GET['xoatatca'] == 1) {
//     unset($_SESSION['cart']);
//     header('Location:../../index.php?quanly=giohang');
// }
//them sanpham vao gio hang
if (isset($_POST['add_cart'])) {
    // session_destroy();
    $id = $_GET['id_product'];
    $soluong = $_POST['qty'];
    $sql = "SELECT * FROM product WHERE id
        ='" . $id . "' LIMIT 1";
    $query = mysqli_query($mysqli, $sql);
    $row = mysqli_fetch_array($query);
    if ($row) {
        $new_product = array(array('tensanpham' => $row['product_name'], 'id' => $id, 'soluong' => $soluong, 'giasp' => $row['price'], 'hinhanh' => $row['thumbnail'], 'masp' => $row['product_code']));
        //kiem tra session gio hang ton tai
        if (isset($_SESSION['cart_seoul'])) {
            $found = false;
            foreach ($_SESSION['cart_seoul'] as $cart_item) {
                //neu du lieu trung
                if ($cart_item['id'] == $id) {
                    $product[] = array('tensanpham' => $cart_item['tensanpham'], 'id' => $cart_item['id'], 'soluong' => $cart_item['soluong'] + $soluong, 'giasp' => $cart_item['giasp'], 'hinhanh' => $cart_item['hinhanh'], 'masp' => $cart_item['masp']);
                    $found = true;
                } else {
                    //neu du lieu khong trung
                    $product[] = array('tensanpham' => $cart_item['tensanpham'], 'id' => $cart_item['id'], 'soluong' => $cart_item['soluong'], 'giasp' => $cart_item['giasp'], 'hinhanh' => $cart_item['hinhanh'], 'masp' => $cart_item['masp']);
                }
            }
            if ($found == false) {
                //lien ket du lieu new_product voi product
                $_SESSION['cart_seoul'] = array_merge($product, $new_product);
            } else {
                $_SESSION['cart_seoul'] = $product;
            }
        } else {
            $_SESSION['cart_seoul'] = $new_product;
        }
    }
    echo count($_SESSION['cart_seoul']);
    // if (isset($_SESSION['cart_seoul'])) {
    //     print_r($_SESSION['cart_seoul']);
    // }
    // header('Location:../../index.php?quanly=cart');
}
//Lưu trữ thông tin vào database mỗi khi khách hàng thêm sản phẩm
if (isset($_SESSION['cart_seoul'])) {
    $cart = $_SESSION['cart_seoul'];
    $cart_json = json_encode($cart);
    $customer_id = $_SESSION['id_customer'];
    $sql = "UPDATE user SET cart='$cart_json' WHERE id='$customer_id'";
    mysqli_query($mysqli, $sql);
} else {
    $customer_id = $_SESSION['id_customer'];
    $sql = "UPDATE user SET cart= null WHERE id='$customer_id'";
    mysqli_query($mysqli, $sql);
}
