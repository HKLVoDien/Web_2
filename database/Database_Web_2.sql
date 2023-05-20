-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 20, 2023 lúc 08:14 AM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `database_web_2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `is_block` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `fullname`, `email`, `phone`, `address`, `username`, `password`, `is_block`) VALUES
(1, 'Lê Văn Hoàn', 'hoankl222@gmail.com', '03549856796', 'Nhị bình 22, ấp 1, xã nhị bình, huyện Hóc Môn', 'admin', 'admin123', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1001, 'Mì kim chi'),
(1002, 'Mì lẩu thái '),
(1003, 'Lẩu kim chi'),
(1004, 'Lẩu thái '),
(1005, 'Món trộn'),
(1006, 'Đồ uống'),
(1007, 'Đồ ăn vặt'),
(1008, 'Món thêm');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `thumbnail` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `gallery`
--

INSERT INTO `gallery` (`id`, `product_id`, `thumbnail`) VALUES
(97, 10001, '1684180416_BBB.jpg'),
(98, 10002, '1684180516_AVTC.jpg'),
(99, 10003, '1684180593_MKCB.jpg'),
(100, 10004, '1684180664_LTHSL.jpg'),
(101, 10005, '1684180726_NETAO.jpg'),
(102, 10006, '1684180800_TBHS.jpg'),
(103, 10007, '1684180859_MKCBM.jpg'),
(104, 10008, '1684180906_MKCC.jpg'),
(105, 10009, '1684181047_BCXtm.jpg'),
(106, 10010, '1684181112_MKCTCAM.jpg'),
(107, 10011, '1684181182_TOMTM.jpg'),
(108, 10012, '1684181228_MLTB.jpg'),
(110, 10014, '1684202630_MLTG.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `fullname` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  `order_date` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `total_money` int(11) DEFAULT NULL,
  `payment_methods` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `fullname`, `phone`, `address`, `note`, `order_date`, `status`, `total_money`, `payment_methods`) VALUES
(4, 6, 'Lê Văn Hoàn', '0354986796', 'Nhị Bình 22, Phường Phúc Xá, Quận Ba Đình, Thành phố Hà Nội', '', '2023-05-16 03:14:19', 4, 320000, 'cash'),
(5, 10, 'Nguyễn Minh Thành', '0972953139', 'dsadasdasda, Phường 6, Quận Gò Vấp, Thành phố Hồ Chí Minh', '', '2023-05-15 09:13:56', 1, 133000, 'cash'),
(6, 11, 'Hoàng Mạnh Hà', '0916607700', 'Nhị Bình 22, Phường Nhật Tân, Quận Tây Hồ, Thành phố Hà Nội', '', '2023-05-16 10:09:33', 2, 209000, 'bank');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders_details`
--

CREATE TABLE `orders_details` (
  `id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `num` int(11) DEFAULT NULL,
  `total_money` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `orders_details`
--

INSERT INTO `orders_details` (`id`, `order_id`, `product_id`, `price`, `num`, `total_money`) VALUES
(8, 4, 10001, 55000, 2, 110000),
(9, 4, 10004, 210000, 1, 210000),
(10, 5, 10012, 34000, 1, 34000),
(11, 5, 10002, 99000, 1, 99000),
(12, 6, 10005, 55000, 2, 110000),
(13, 6, 10002, 99000, 1, 99000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_code` varchar(100) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(350) NOT NULL,
  `price` int(11) NOT NULL,
  `thumbnail` varchar(500) NOT NULL,
  `description` longtext NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `status` tinyint(11) DEFAULT NULL,
  `visible` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `product_code`, `category_id`, `product_name`, `price`, `thumbnail`, `description`, `created_at`, `updated_at`, `status`, `visible`) VALUES
(10001, 'MT001', 1005, 'Bibimbap Bò', 55000, '1684180416_BBB.jpg', 'Bibimbap bò là món cơm trộn của người Hàn Quốc với những nguyên liệu cơ bản như thịt bò xào mềm ngọt, trứng chiên lòng đào hấp dẫn, phần rau củ chín tới, tất cả hòa quyện tạo nên hương vị cực ngon miệng và hấp dẫn cho món ăn.\r\nMón ăn có sự hài hòa về màu sắc món ăn, cân bằng giữa rau và thịt sẽ giúp cho tiêu hóa và duy trì cân bằng cơ thể.\r\n\r\nMột trong những lí do mà người ta ăn bibimbap một lần là lại muốn ăn nữa, ngoài bởi vì hương vị đó còn là vì đây là món ăn có lợi cho sức khỏe. Với rất nhiều rau củ được trộn lẫn mang đến nguồn dinh dưỡng đầy đủ, không chỉ vậy món ăn chỉ sử dụng những nguyên liệu tự nhiên chứ không phải những nguyên liệu gia công nên rất tốt cho sức khỏe.\r\n', '2023-05-15 21:53:36', NULL, 1, 1),
(10002, 'MT002', 1007, 'Thập cẩm', 99000, '1684180516_AVTC.jpg', 'Chiên sản phẩm trong dầu đến khi giòn và có màu vàng ươm là bạn đã có thể thoải mái thưởng thức. Nhìn qua bên ngoài đã thấy vô cùng bắt mắt với từng cuốn bánh nhỏ xinh được bao bọc bằng mì Kataifi - Một loại mì mới lần đầu có mặt tại Việt Nam. Khi ăn miếng đầu tiên, bạn sẽ cảm nhận được ngay phần nhân chả cá dai thơm, tôm tươi hòa quyện với vị ngọt của các loại rau củ như bắp cải, cà rốt, hành lá, tất cả sẽ mang lại sự hài hòa tuyệt vời khi ăn.\r\nNgoài việc là một món ăn ngon, Tam tơ hải sản còn mang ý nghĩa là sự gắn bó, đoàn kết. Với bên trong là nhân cá, tôm, rau củ mang ý nghĩa gắn kết từ đất liền đến biển cả. Bên ngoài là lớp áo bằng sợi mì như những sợi tơ vàng óng ánh dệt nên những thành công lớn. ...\r\n', '2023-05-15 21:55:16', NULL, 1, 1),
(10003, 'MT003', 1001, 'Mì kim chi bò', 34000, '1684180593_MKCB.jpg', 'Những buổi sáng trời trở lạnh, bạn có thể chủ động thay thế các món ăn sáng quen thuộc bằng những tô mì thịt bò kim chi nóng hổi và ngon xuất sắc này. Các bạn cũng biết rồi đấy, có hai thứ không thể thiếu trên bàn ăn của người Hàn đó là cơm nóng và kim chi.\r\nĐa số các món ăn trong văn hóa ẩm thực của Hàn Quốc đều có kim chi, và đây cũng là lí do mà người ta hay gọi Hàn Quốc là xứ sở kim chi hay đất nước kim chi đó các bạn. Còn Việt Nam mình thì có món nào đặc trưng nè, đố các bạn đấy và hãy comment trong phần đánh giá nhé! ...\r\n', '2023-05-15 21:56:33', NULL, 0, 1),
(10004, 'MT004', 1004, 'Lẩu thái hải sản', 210000, '1684180664_LTHSL.jpg', 'Những buổi sáng trời trở lạnh, bạn có thể chủ động thay thế các món ăn sáng quen thuộc bằng những tô mì thịt bò kim chi nóng hổi và ngon xuất sắc này. Các bạn cũng biết rồi đấy, có hai thứ không thể thiếu trên bàn ăn của người Hàn đó là cơm nóng và kim chi.\r\nĐa số các món ăn trong văn hóa ẩm thực của Hàn Quốc đều có kim chi, và đây cũng là lí do mà người ta hay gọi Hàn Quốc là xứ sở kim chi hay đất nước kim chi đó các bạn. Còn Việt Nam mình thì có món nào đặc trưng nè, đố các bạn đấy và hãy comment trong phần đánh giá nhé! ...', '2023-05-15 21:57:44', NULL, 1, 1),
(10005, 'MT005', 1006, 'Nước ép táo', 55000, '1684180726_NETAO.jpg', 'Những buổi sáng trời trở lạnh, bạn có thể chủ động thay thế các món ăn sáng quen thuộc bằng những tô mì thịt bò kim chi nóng hổi và ngon xuất sắc này. Các bạn cũng biết rồi đấy, có hai thứ không thể thiếu trên bàn ăn của người Hàn đó là cơm nóng và kim chi.\r\nĐa số các món ăn trong văn hóa ẩm thực của Hàn Quốc đều có kim chi, và đây cũng là lí do mà người ta hay gọi Hàn Quốc là xứ sở kim chi hay đất nước kim chi đó các bạn. Còn Việt Nam mình thì có món nào đặc trưng nè, đố các bạn đấy và hãy comment trong phần đánh giá nhé! ...', '2023-05-15 21:58:46', NULL, 1, 0),
(10006, 'MT006', 1007, 'Tokbokki hải sản', 55000, '1684180800_TBHS.jpg', 'Những buổi sáng trời trở lạnh, bạn có thể chủ động thay thế các món ăn sáng quen thuộc bằng những tô mì thịt bò kim chi nóng hổi và ngon xuất sắc này. Các bạn cũng biết rồi đấy, có hai thứ không thể thiếu trên bàn ăn của người Hàn đó là cơm nóng và kim chi.\r\nĐa số các món ăn trong văn hóa ẩm thực của Hàn Quốc đều có kim chi, và đây cũng là lí do mà người ta hay gọi Hàn Quốc là xứ sở kim chi hay đất nước kim chi đó các bạn. Còn Việt Nam mình thì có món nào đặc trưng nè, đố các bạn đấy và hãy comment trong phần đánh giá nhé! ...', '2023-05-15 22:00:00', NULL, 1, 1),
(10007, 'MT007', 1001, 'Mì kim chi bò mỹ', 49000, '1684180859_MKCBM.jpg', 'Những buổi sáng trời trở lạnh, bạn có thể chủ động thay thế các món ăn sáng quen thuộc bằng những tô mì thịt bò kim chi nóng hổi và ngon xuất sắc này. Các bạn cũng biết rồi đấy, có hai thứ không thể thiếu trên bàn ăn của người Hàn đó là cơm nóng và kim chi.\r\nĐa số các món ăn trong văn hóa ẩm thực của Hàn Quốc đều có kim chi, và đây cũng là lí do mà người ta hay gọi Hàn Quốc là xứ sở kim chi hay đất nước kim chi đó các bạn. Còn Việt Nam mình thì có món nào đặc trưng nè, đố các bạn đấy và hãy comment trong phần đánh giá nhé! ...', '2023-05-15 22:00:59', NULL, 1, 1),
(10008, 'MT008', 1001, 'Mì kim chi cá', 45000, '1684180906_MKCC.jpg', 'Những buổi sáng trời trở lạnh, bạn có thể chủ động thay thế các món ăn sáng quen thuộc bằng những tô mì thịt bò kim chi nóng hổi và ngon xuất sắc này. Các bạn cũng biết rồi đấy, có hai thứ không thể thiếu trên bàn ăn của người Hàn đó là cơm nóng và kim chi.\r\nĐa số các món ăn trong văn hóa ẩm thực của Hàn Quốc đều có kim chi, và đây cũng là lí do mà người ta hay gọi Hàn Quốc là xứ sở kim chi hay đất nước kim chi đó các bạn. Còn Việt Nam mình thì có món nào đặc trưng nè, đố các bạn đấy và hãy comment trong phần đánh giá nhé! ...', '2023-05-15 22:01:46', NULL, 1, 1),
(10009, 'MT009', 1008, 'Bắp cải xanh thêm', 9000, '1684181047_BCXtm.jpg', 'Những buổi sáng trời trở lạnh, bạn có thể chủ động thay thế các món ăn sáng quen thuộc bằng những tô mì thịt bò kim chi nóng hổi và ngon xuất sắc này. Các bạn cũng biết rồi đấy, có hai thứ không thể thiếu trên bàn ăn của người Hàn đó là cơm nóng và kim chi.\r\nĐa số các món ăn trong văn hóa ẩm thực của Hàn Quốc đều có kim chi, và đây cũng là lí do mà người ta hay gọi Hàn Quốc là xứ sở kim chi hay đất nước kim chi đó các bạn. Còn Việt Nam mình thì có món nào đặc trưng nè, đố các bạn đấy và hãy comment trong phần đánh giá nhé!', '2023-05-15 22:04:07', NULL, 1, 1),
(10010, 'MT0010', 1001, 'Mì kim chi thập cẩm', 54000, '1684181112_MKCTCAM.jpg', 'Những buổi sáng trời trở lạnh, bạn có thể chủ động thay thế các món ăn sáng quen thuộc bằng những tô mì thịt bò kim chi nóng hổi và ngon xuất sắc này. Các bạn cũng biết rồi đấy, có hai thứ không thể thiếu trên bàn ăn của người Hàn đó là cơm nóng và kim chi.\r\nĐa số các món ăn trong văn hóa ẩm thực của Hàn Quốc đều có kim chi, và đây cũng là lí do mà người ta hay gọi Hàn Quốc là xứ sở kim chi hay đất nước kim chi đó các bạn. Còn Việt Nam mình thì có món nào đặc trưng nè, đố các bạn đấy và hãy comment trong phần đánh giá nhé! ...\r\n', '2023-05-15 22:05:12', NULL, 1, 1),
(10011, 'MT0011', 1008, 'Tôm thêm', 7000, '1684181182_TOMTM.jpg', 'Những buổi sáng trời trở lạnh, bạn có thể chủ động thay thế các món ăn sáng quen thuộc bằng những tô mì thịt bò kim chi nóng hổi và ngon xuất sắc này. Các bạn cũng biết rồi đấy, có hai thứ không thể thiếu trên bàn ăn của người Hàn đó là cơm nóng và kim chi. Đa số các món ăn trong văn hóa ẩm thực của Hàn Quốc đều có kim chi, và đây cũng là lí do mà người ta hay gọi Hàn Quốc là xứ sở kim chi hay đất nước kim chi đó các bạn. Còn Việt Nam mình thì có món nào đặc trưng nè, đố các bạn đấy và hãy comment trong phần đánh giá nhé! ...', '2023-05-15 22:06:22', NULL, 0, 1),
(10012, 'MT0012', 1002, 'Mì lẩu thái bò', 34000, '1684181228_MLTB.jpg', 'Những buổi sáng trời trở lạnh, bạn có thể chủ động thay thế các món ăn sáng quen thuộc bằng những tô mì thịt bò kim chi nóng hổi và ngon xuất sắc này. Các bạn cũng biết rồi đấy, có hai thứ không thể thiếu trên bàn ăn của người Hàn đó là cơm nóng và kim chi. Đa số các món ăn trong văn hóa ẩm thực của Hàn Quốc đều có kim chi, và đây cũng là lí do mà người ta hay gọi Hàn Quốc là xứ sở kim chi hay đất nước kim chi đó các bạn. Còn Việt Nam mình thì có món nào đặc trưng nè, đố các bạn đấy và hãy comment trong phần đánh giá nhé! ...', '2023-05-15 22:07:08', NULL, 1, 1),
(10014, 'MT0013', 1002, 'Mì lẩu thái gà', 30000, '1684202630_MKCG.jpg', 'Những buổi sáng trời trở lạnh, bạn có thể chủ động thay thế các món ăn sáng quen thuộc bằng những tô mì thịt bò kim chi nóng hổi và ngon xuất sắc này. Các bạn cũng biết rồi đấy, có hai thứ không thể thiếu trên bàn ăn của người Hàn đó là cơm nóng và kim chi.\r\nĐa số các món ăn trong văn hóa ẩm thực của Hàn Quốc đều có kim chi, và đây cũng là lí do mà người ta hay gọi Hàn Quốc là xứ sở kim chi hay đất nước kim chi đó các bạn. Còn Việt Nam mình thì có món nào đặc trưng nè, đố các bạn đấy và hãy comment trong phần đánh giá nhé! ...\r\n', '2023-05-16 04:03:50', NULL, 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `avatar` varchar(500) NOT NULL DEFAULT 'avatar.jpg',
  `fullname` varchar(50) DEFAULT NULL,
  `email` varchar(150) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `cart` text DEFAULT NULL,
  `is_block` tinyint(4) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `avatar`, `fullname`, `email`, `phone`, `address`, `city`, `username`, `password`, `cart`, `is_block`) VALUES
(6, 'avatar.jpg', 'abc', 'hoanzin135@gmail.com', '0354986796', 'duong bui cong trung', 0, 'hoankl456', 'dde6e7ee2694d45cb0af5bd76e52ef0c', '[{\"tensanpham\":\"Bibimbap Bu00f2\",\"id\":\"10001\",\"soluong\":\"2\",\"giasp\":\"55000\",\"hinhanh\":\"1684180416_BBB.jpg\",\"masp\":\"MT001\"},{\"tensanpham\":\"Lu1ea9u thu00e1i hu1ea3i su1ea3n\",\"id\":\"10004\",\"soluong\":\"7\",\"giasp\":\"210000\",\"hinhanh\":\"1684180664_LTHSL.jpg\",\"masp\":\"MT004\"}]', 1),
(10, 'avatar.jpg', 'Lê Văn Thành', 'chodien@gmail.com', '0972953139', '', 0, 'hoanflinhs', 'ecb97ffafc1798cd2f67fcbc37226761', '[{\"tensanpham\":\"Bu1eafp cu1ea3i xanh thu00eam\",\"id\":\"10009\",\"soluong\":\"1\",\"giasp\":\"9000\",\"hinhanh\":\"1684181047_BCXtm.jpg\",\"masp\":\"MT009\"}]', 1),
(11, 'avatar.jpg', 'Hoàng Mạnh Hà', 'hoankl222@gmail.com', '0916607700', 'duong bui cong trung', 0, 'hoangha', 'e10adc3949ba59abbe56e057f20f883e', '[{\"tensanpham\":\"Nu01b0u1edbc u00e9p tu00e1o\",\"id\":\"10005\",\"soluong\":\"2\",\"giasp\":\"55000\",\"hinhanh\":\"1684180726_NETAO.jpg\",\"masp\":\"MT005\"},{\"tensanpham\":\"Thu1eadp cu1ea9m\",\"id\":\"10002\",\"soluong\":\"1\",\"giasp\":\"99000\",\"hinhanh\":\"1684180516_AVTC.jpg\",\"masp\":\"MT002\"}]', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `orders_details`
--
ALTER TABLE `orders_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1019;

--
-- AUTO_INCREMENT cho bảng `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `orders_details`
--
ALTER TABLE `orders_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10017;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `gallery`
--
ALTER TABLE `gallery`
  ADD CONSTRAINT `gallery_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Các ràng buộc cho bảng `orders_details`
--
ALTER TABLE `orders_details`
  ADD CONSTRAINT `orders_details_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `orders_details_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
