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
(1, 'admin', '$2y$10$UA6d8dqFhh5T1WWWNZGeDetmVrMw8rGwndxxQijdKfBdte8z4l9wm','Nguyễn Văn Biên', 'nvb221003@gmail.com', 1, '2003-04-09', '0333091697', 'Đắk Lắk', 'admin', b'1', '123456');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
                           `id` int NOT NULL,
                           `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
                           `price` int DEFAULT NULL,
                           `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
                           `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `description`, `image`) VALUES
                                                                          (1, 'iPhone XS MAX 64GB', 24490000, 'Hàng xách tay chính hãng', 'iphone-6s-128gb-hong-1-400x450.png'),
                                                                          (2, 'Samsung Galaxy J7 Plus', 12990000, 'Bao test bào xài 6 tháng', 'samsung-galaxy-j7-plus-1-400x460.png'),
                                                                          (3, 'iPhone 7 Plus 128GB Black', 14490000, 'Hàng cũ mới 99%', 'iphone-7-plus-128gb-de-400x460.png'),
                                                                          (4, 'Oppo F3 Plus', 7990000, 'Hàng chợ Bà Chiểu', 'oppo-f3-plus-1-1-400x460.png');

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
                                                              ('mvmanh@gmail.com', '', 0),
                                                              ('mvmanh@it.tdt.edu.vn', '', 0);

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
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
    ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `reset_token`
--
ALTER TABLE `reset_token`
    ADD PRIMARY KEY (`email`);

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
    MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
