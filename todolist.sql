-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 04, 2021 lúc 02:30 PM
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `todolist`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `work`
--

CREATE TABLE `work` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `work`
--

INSERT INTO `work` (`id`, `name`, `start`, `end`, `status`) VALUES
(1, 'PHP', '2021-01-05', '2021-01-13', 1),
(2, 'JAVA', '2021-01-06', '2021-01-12', 2),
(3, 'GOOGLE', '2021-01-05', '2021-01-14', 2),
(6, 'JAVASCRIPT', '2021-01-05', '2021-01-08', 2),
(9, 'Học lập trình JAVASCRIPT', '2021-01-05', '2021-01-08', 1),
(10, 'Đi chăn trâu', '2021-01-08', '2021-01-08', 1),
(11, 'Lập trình MVC', '2021-01-02', '2021-01-08', 1),
(13, 'Phạm Quốc Huy', '2021-01-01', '2021-01-08', 3),
(14, 'Lập trinh PHP', '2021-01-02', '2021-01-08', 1),
(18, 'Đi bộ', '2021-01-08', '2021-01-16', 3),
(22, 'Đi tắm', '2021-01-06', '2021-01-29', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `work`
--
ALTER TABLE `work`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `work`
--
ALTER TABLE `work`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
