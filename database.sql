SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web`
--
CREATE DATABASE IF NOT EXISTS `webbanhang` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `webbanhang`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
                           `id` int NOT NULL,
                           `username` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
                           `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
                           `fullname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
                           `email` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
                           `gender` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0=male, 1=female',
                           `dob` date NOT NULL,
                           `phone` varchar(11) NOT NULL,
                           `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
                           `level` varchar(255) DEFAULT NULL,
                           `activated` bit(1) DEFAULT (false),
                           `activate_token` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`id`, `username`, `password`, `fullname`, `email`, `gender`, `dob`, `phone`, `address`, `level`, `activated`, `activate_token`) VALUES
(1, 'admin', '$2y$10$UA6d8dqFhh5T1WWWNZGeDetmVrMw8rGwndxxQijdKfBdte8z4l9wm','Nguyễn Văn Biên', 'nvb221003@gmail.com', 1, '2003-04-09', '0333091697', 'Đắk Lắk', 'admin', b'1', '123456'),
(2, 'NguyenVanBien', '$2y$10$UA6d8dqFhh5T1WWWNZGeDetmVrMw8rGwndxxQijdKfBdte8z4l9wm','Nguyễn Văn Biên', 'admin@gmail.com', 1, '2003-04-09', '0333091697', 'Đắk Lắk', 'admin', b'1', '123456');
-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cate`
--

CREATE TABLE `cate` (
                           `id_cate` int(11) NOT NULL,
                           `name_cate` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
                           `date_creat` datetime,
                           `stt_cate` tinyint(4)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cate`
--

INSERT INTO `cate` (`id_cate`, `name_cate`, `date_creat`, `stt_cate`) VALUES
(1,'Điện thoại','2023-04-10',1),
(2,'Đồng hồ','2023-04-10',2),
(3,'Laptop','2023-04-10',3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
                           `id` int(11) NOT NULL,
                           `id_cate` int(11),
                           `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
                           `price` float DEFAULT NULL,
                           `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
                           `quantity` tinyint(4),
                           `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
                           `date_creat` date,
                           `stt` tinyint(4)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `id_cate`, `name`, `price`, `image`, `quantity`, `description`, `date_creat`, `stt`) VALUES
(10, 1,'Điện thoại di động iPhone X (256GB) - Chính hãng VN/A', 9100000, 'iphone10.png', 200, 'iPhone X VN/A là dòng sản phẩm cao cấp', '2023-04-10', 1),
(11, 1,'Điện thoại di động iPhone 11 (256GB) - Chính hãng VN/A', 15150000, 'iphone11.png', 200, 'iPhone 11 VN/A là dòng sản phẩm cao cấp', '2023-04-10', 1),
(12, 1,'Điện thoại di động iPhone 12 (128GB) - Chính hãng VN/A', 17150000, 'iphone12.png', 200, 'iPhone 12 VN/A là dòng sản phẩm cao cấp', '2023-04-10', 1),
(13, 1,'Điện thoại di động iPhone 13 (256GB) - Chính hãng VN/A', 20150000, 'iphone13.png', 200, 'iPhone 13 VN/A là dòng sản phẩm cao cấp', '2023-04-10', 1),
(14, 1,'Điện thoại di động iPhone 14 Pro Max (256GB) - Chính hãng VN/A', 30150000, 'iphone14.png', 200, 'iPhone 14 Pro Max VN/A là dòng sản phẩm cao cấp nhất', '2023-04-10', 1)
(15, 1,'Điện thoại di động iPhone 14 Pro Max (256GB) - Chính hãng VN/A', 30150000, 'iphone14.png', 200, 'iPhone 14 Pro Max VN/A là dòng sản phẩm cao cấp nhất', '2023-04-10', 1)
(16, 1,'Điện thoại di động iPhone 14 Pro Max (256GB) - Chính hãng VN/A', 30150000, 'iphone14.png', 200, 'iPhone 14 Pro Max VN/A là dòng sản phẩm cao cấp nhất', '2023-04-10', 1)
(17, 1,'Điện thoại di động iPhone 14 Pro Max (256GB) - Chính hãng VN/A', 30150000, 'iphone14.png', 200, 'iPhone 14 Pro Max VN/A là dòng sản phẩm cao cấp nhất', '2023-04-10', 1)
(18, 1,'Điện thoại di động iPhone 14 Pro Max (256GB) - Chính hãng VN/A', 30150000, 'iphone14.png', 200, 'iPhone 14 Pro Max VN/A là dòng sản phẩm cao cấp nhất', '2023-04-10', 1)
(19, 1,'Điện thoại di động iPhone 14 Pro Max (256GB) - Chính hãng VN/A', 30150000, 'iphone14.png', 200, 'iPhone 14 Pro Max VN/A là dòng sản phẩm cao cấp nhất', '2023-04-10', 1)
(20, 1,'Điện thoại di động iPhone 14 Pro Max (256GB) - Chính hãng VN/A', 30150000, 'iphone14.png', 200, 'iPhone 14 Pro Max VN/A là dòng sản phẩm cao cấp nhất', '2023-04-10', 1)
(14, 1,'Điện thoại di động iPhone 14 Pro Max (256GB) - Chính hãng VN/A', 30150000, 'iphone14.png', 200, 'iPhone 14 Pro Max VN/A là dòng sản phẩm cao cấp nhất', '2023-04-10', 1)
(14, 1,'Điện thoại di động iPhone 14 Pro Max (256GB) - Chính hãng VN/A', 30150000, 'iphone14.png', 200, 'iPhone 14 Pro Max VN/A là dòng sản phẩm cao cấp nhất', '2023-04-10', 1)


-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detail_oder`
--

CREATE TABLE `detail_order` (
                           `id_order` int(11) NOT NULL,
                           `id_product` int(11),
                           `price` float DEFAULT NULL,
                           `quantity` int(11),
                           `total` float,
                           `stt` tinyint(4)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `detail_oder`
--




-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
                               `id_order` int(11) NOT NULL,
                               `id_member` int(11) NOT NULL,
                               `note` varchar(255) COLLATE utf8_unicode_ci,
                               `stt_oder` int(11),
                               `date_oder` date
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order`
--



-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `reset_token`
--

CREATE TABLE `reset_token` (
                               `email` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
                               `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
                               `expire_on` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `reset_token`
--

INSERT INTO `reset_token` (`email`, `token`, `expire_on`) VALUES
                                                              ('nvb221003@gmail.com', '', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
    ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Chỉ mục cho bảng `reset_token`
--
ALTER TABLE `reset_token`
    ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `cate`
--
ALTER TABLE `cate`
    ADD PRIMARY KEY (`id_cate`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
    ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `detail_order`
--
ALTER TABLE `detail_order`
    ADD PRIMARY KEY (`id_order`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
    ADD PRIMARY KEY (`id_order`);


--
-- AUTO_INCREMENT cho bảng `account`
--
ALTER TABLE `account`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
