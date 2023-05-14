-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 14, 2023 lúc 04:11 PM
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
(64, 55, '1683358447_BBB.jpg'),
(65, 57, ''),
(85, 58, '1683375880_Ruousoju.jpg'),
(86, 58, '1683380546_Seoul-drink03242-1.jpg'),
(87, 58, '1683380606_'),
(88, 58, '1683380797_NETAO.jpg'),
(89, 58, '1683380846_'),
(90, 58, '1683381106_Seoul-drink03242-1.jpg'),
(91, 58, '1683381113_'),
(92, 58, '1683381501_NETAO.jpg'),
(93, 58, '1683381530_Seoul-drink03242-1.jpg'),
(94, 58, '1683381541_NETAO.jpg'),
(96, 60, '1683790154_AVTC.jpg');

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
(1, 5, 'le van hoan', '0354986796', 'dwadawada, Phường Phúc Xá, Quận Ba Đình, Thành phố Hà Nội', '', '2023-05-14 17:54:59', 1, 1153000, 'visa'),
(2, 5, 'Hà Nguyễn', '0354986796', 'duawda, Thị trấn Pác Miầu, Huyện Bảo Lâm, Tỉnh Cao Bằng', '', '2023-05-14 17:58:23', 1, 1153000, 'visa');

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
(1, 1, 58, 565000, 2, 1130000),
(2, 1, 57, 23000, 1, 23000),
(3, 2, 58, 565000, 2, 1130000),
(4, 2, 57, 23000, 1, 23000);

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
  `status` tinyint(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `product_code`, `category_id`, `product_name`, `price`, `thumbnail`, `description`, `created_at`, `updated_at`, `status`) VALUES
(55, 'MT101', 1002, 'A', 565005, '1683358447_BB.jpg', 'Đoạn code này lấy thông tin về file ảnh được chọn từ thẻ input có tên là img_file_small_update, lưu tên file vào biến $hinhanh và lưu đường dẫn tạm thời của file vào biến $hinhanh_tmp. Sau đó, nó sử dụng hàm time() để thêm một đoạn thời gian vào trước tên file để tránh bị trùng lặp tên file khi có nhiều người dùng upload cùng một tên file. Do đó, đoạn code này không xung đột với các đoạn code khác.Đoạn code này lấy thông tin về file ảnh được chọn từ thẻ input có tên là img_file_small_update, lưu tên file vào biến $hinhanh và lưu đường dẫn tạm thời của file vào biến $hinhanh_tmp. Sau đó, nó sử dụng hàm time() để thêm một đoạn thời gian vào trước tên file để tránh bị trùng lặp tên file khi có nhiều người dùng upload cùng một tên file. Do đó, đoạn code này không xung đột với các đoạn code khác.', '2023-05-06 09:34:07', NULL, 0),
(57, 'MT1010', 1001, 'abn', 23000, '1683365975_BB.jpg', '', '2023-05-06 11:39:35', NULL, 1),
(58, 'MT1010', 1004, 'daqq', 565000, '1683381541_Nuocgao.jpg', '', '2023-05-06 11:42:14', NULL, 1),
(60, 'MT1010', 1007, 'Abc', 11111111, '1683790154_AVTC.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima odit, hic ab consectetur delectus vel natus ratione a ipsum, sit nam animi voluptate fugit sunt quam ea iure. Ipsa, dicta?\r\nTenetur ex eos, molestiae maiores iste delectus veniam laboriosam minus earum qui assumenda ea ullam minima. Hic natus, necessitatibus facere quam corporis, molestiae harum iure nostrum, vel corrupti quia est.\r\nConsequatur, debitis repellat sed officiis id quaerat quas labore vero maiores aut. Soluta, reiciendis quidem corrupti totam cupiditate sunt eveniet itaque sed quam molestiae, unde, nemo quod! Vitae, qui quasi?\r\nRem fugiat sint excepturi dolore perferendis? Veritatis quaerat ducimus, reiciendis rem nihil adipisci error, aperiam repellat reprehenderit quo consectetur quam consequuntur, ut accusantium labore ratione blanditiis eligendi optio tempora libero!\r\nAutem, totam eligendi reprehenderit non saepe, officiis sunt voluptatem mollitia quam aliquam sit ratione! Accusantium, asperiores! Perspiciatis consequuntur laudantium fugit tempore dicta ad facilis error temporibus. Voluptatum labore nam porro?\r\nModi similique nulla repudiandae totam alias, optio obcaecati a dolor, labore ipsum asperiores distinctio impedit accusamus consequatur mollitia eaque nemo placeat incidunt magni nam quia nisi, error animi ut. Inventore!\r\nDolor non, amet perferendis dolorem eum quia officia natus harum voluptatum aspernatur eius, molestiae quas debitis quae corrupti obcaecati optio maxime iste! Saepe sed consequuntur corporis ratione. Consequatur, qui eos?\r\nOdio, sunt. Voluptas voluptatem quos, cumque sunt accusamus natus expedita? Officiis dolor, quis suscipit qui debitis, laborum ipsa molestiae voluptas alias, quia possimus perspiciatis nostrum ad voluptate fugiat est mollitia?\r\nQuas nulla sint esse optio iste! Ut exercitationem cum facilis accusamus ipsum tenetur, est nulla iure ullam iusto obcaecati magnam dolor ipsa fugiat. Sunt excepturi cum quis officiis ipsa libero.\r\nOptio nam alias reprehenderit eaque nihil laudantium debitis, quos ab aperiam explicabo voluptates soluta? Voluptates delectus corporis quibusdam, reprehenderit dignissimos, necessitatibus quae aspernatur incidunt, libero impedit optio dolores odit! Nulla!\r\nIste necessitatibus recusandae natus possimus est libero nihil autem sit unde modi consequatur, voluptas dicta eius incidunt corporis earum, tenetur nam facilis reprehenderit suscipit. Saepe veritatis corrupti autem? Nesciunt, amet!\r\nFuga aliquid ullam ipsum quasi, facilis doloremque recusandae. Accusamus porro autem architecto, voluptates excepturi explicabo voluptatibus repellendus error distinctio qui, necessitatibus at? Hic et velit necessitatibus doloremque sapiente facilis qui.\r\nNulla quas vitae dignissimos nobis unde magni vero possimus voluptatum nostrum tempora! Quasi ad ipsam excepturi dolorum dignissimos labore, laboriosam laudantium voluptatem ipsum sequi accusantium quod officiis quia accusamus adipisci.\r\nMaiores cum ad quam porro animi culpa quis eligendi, distinctio ipsum inventore, ipsa error dicta asperiores unde corrupti beatae veniam harum cupiditate impedit illum at odit corporis. Optio, cupiditate doloremque?\r\nIpsam praesentium odit, voluptatum, beatae dicta assumenda nemo vel maxime ex omnis obcaecati! Illum illo sint soluta rem voluptatem dicta praesentium, quod itaque consectetur in tempore delectus nulla eos animi.', '2023-05-11 09:29:14', NULL, 1);

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
(4, 'avatar.jpg', NULL, 'hoankl222@gmail.com', '0354986796', '', 0, '3121411075', '481a4883778afa7ec63b70f163f737e6', '[{\"tensanpham\":\"abn\",\"id\":\"57\",\"soluong\":\"10\",\"giasp\":\"23000\",\"hinhanh\":\"1683365975_BB.jpg\",\"masp\":\"MT1010\"}]', 1),
(5, 'avatar.jpg', 'Lê Văn Hoàn', 'hoanzin135@gmail.com', '0354986796', '', 0, 'hoankl456', 'ecb97ffafc1798cd2f67fcbc37226761', '[{\"tensanpham\":\"daqq\",\"id\":\"58\",\"soluong\":\"2\",\"giasp\":\"565000\",\"hinhanh\":\"1683381541_Nuocgao.jpg\",\"masp\":\"MT1010\"},{\"tensanpham\":\"abn\",\"id\":\"57\",\"soluong\":\"1\",\"giasp\":\"23000\",\"hinhanh\":\"1683365975_BB.jpg\",\"masp\":\"MT1010\"}]', 1);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1018;

--
-- AUTO_INCREMENT cho bảng `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `orders_details`
--
ALTER TABLE `orders_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
