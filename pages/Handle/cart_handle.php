<?php
session_start();
include('../../database/config.php');
//Điền so luong
if (isset($_GET['quantity'])) {
    $id = $_GET['id'];
    $soluong = $_GET['quantity'];
    foreach ($_SESSION['cart_seoul'] as $cart_item) {
        if ($cart_item['id'] != $id) {
            $product[] = array('tensanpham' => $cart_item['tensanpham'], 'id' => $cart_item['id'], 'soluong' => $cart_item['soluong'], 'giasp' => $cart_item['giasp'], 'hinhanh' => $cart_item['hinhanh'], 'masp' => $cart_item['masp']);
            $_SESSION['cart'] = $product;
        } else {
            $tangsoluong = $soluong;
            if ($cart_item['soluong'] <= 9) {

                $product[] = array('tensanpham' => $cart_item['tensanpham'], 'id' => $cart_item['id'], 'soluong' => $tangsoluong, 'giasp' => $cart_item['giasp'], 'hinhanh' => $cart_item['hinhanh'], 'masp' => $cart_item['masp']);
            } else {
                $product[] = array('tensanpham' => $cart_item['tensanpham'], 'id' => $cart_item['id'], 'soluong' => $cart_item['soluong'], 'giasp' => $cart_item['giasp'], 'hinhanh' => $cart_item['hinhanh'], 'masp' => $cart_item['masp']);
            }
            $_SESSION['cart_seoul'] = $product;
        }
    }
    // header('Location:../../index.php?quanly=cart');
    // Trả về kết quả
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
    foreach ($_SESSION['cart_seoul'] as $cart_item) {

        if ($cart_item['id'] != $id) {
            $product[] = array('tensanpham' => $cart_item['tensanpham'], 'id' => $cart_item['id'], 'soluong' => $cart_item['soluong'], 'giasp' => $cart_item['giasp'], 'hinhanh' => $cart_item['hinhanh'], 'masp' => $cart_item['masp']);
        }

        $_SESSION['cart_seoul'] = $product;
        header('Location:../../index.php?quanly=cart');
    }
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
    // if (isset($_SESSION['cart_seoul'])) {
    //     print_r($_SESSION['cart_seoul']);
    // }
    // header('Location:../../index.php?quanly=cart');
}
//Lưu trữ thông tin vào database mỗi khi khách hàng thêm sản phẩm 
$cart = $_SESSION['cart_seoul'];
$cart_json = json_encode($cart);
$customer_id = $_SESSION['id_customer'];
$sql = "UPDATE user SET cart='$cart_json' WHERE id='$customer_id'";
mysqli_query($mysqli, $sql);
