-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th10 27, 2021 lúc 09:22 AM
-- Phiên bản máy phục vụ: 10.4.8-MariaDB
-- Phiên bản PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bandienmay`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `email`, `password`) VALUES
(2, 'Minh', 'minh@123', '202cb962ac59075b964b07152d234b70'),
(5, 'thanh', 'thanh@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(7, 'admin\r\n', 'thanh@123', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_baiviet`
--

CREATE TABLE `tbl_baiviet` (
  `baiviet_id` int(11) NOT NULL,
  `danhmuc_id` int(11) NOT NULL,
  `baiviet_image` varchar(50) NOT NULL,
  `tenbaiviet` varchar(50) NOT NULL,
  `tomtat` text NOT NULL,
  `noidung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_baiviet`
--

INSERT INTO `tbl_baiviet` (`baiviet_id`, `danhmuc_id`, `baiviet_image`, `tenbaiviet`, `tomtat`, `noidung`) VALUES
(1, 3, 'phone1.jpg', 'Ra mắt GALAXY S21 FE', 'Trên trang Twitter cá nhân, Jon Prosser đã tiết lộ thời gian diễn ra sự kiện Unpacked. Sản phẩm sẽ ra mắt trong sự kiện lần này chính là Galaxy S21 FE sẽ được tổ chức vào ngày 4/1/2022.', 'Bên cạnh đó, Samsung sẽ trang bị cho Galaxy S21 FE viên pin lên đến 4.370 mAh và có sạc nhanh 25 W giúp nâng cao trải nghiệm người dùng. Mặt trước của thiết bị được cho là có camera selfie 32 MP, còn mặt sau có ba camera: Chính 32 MP + góc siêu rộng 12 MP + tele 8 MP.\r\n\r\nGalaxy S21 FE dự kiến ​​sở hữu màn hình AMOLED Infinity-O Full HD+ 6.4 inch, hỗ trợ tốc độ làm tươi 120 Hz, dùng chip Snapdragon 888 hoặc Exynos 2100 (tùy thuộc vào thị trường).\r\n\r\nBạn dự đoán Galaxy S21 FE sẽ có giá bán bao nhiêu?'),
(2, 3, 'phone2.jpg', 'Đánh giá Điện thoại Xiaomi 11T 5G', 'Điện thoại Xiaomi 11T 5G – cao cấp nhưng ZenBook UX325 có màn hình OLED tân tiến. Đi kèm với nó là độ phân giải FullHD nhưng đừng vì vậy mà nghĩ rằng nó chưa đủ “tầm” để sánh với màn hình cao cấp.', 'Mẫu Ultrabook này được ASUS đầu tư khá hoàn hảo. Sản phẩm được trang bị con chip Intel Core i5 cùng card đồ hoạ Intel Iris XE, RAM 8GB RAM LPDDR4x bus 4266 MHz chạy Dual Channel và bộ nhớ SSD 512GB m.2 NVMe. Các thông số này tuy không phải đỉnh nhất nhưng lại rất hài hòa khi kết hợp cùng nhau, cho hiệu năng phục vụ tốt các nhu cầu từ giải trí đến làm việc.\r\n\r\nĐặc biệt là card đồ hoạ Intel Iris XE G7 mạnh gấp 3 lần nếu đặt lên bàn cân so sánh với Intel Ultra HD620 đời cũ. Dung lượng pin laptop là 67Wh. '),
(3, 3, 'phone3.jpg', 'Ra mắt OPPO RENO7 SERIES', 'Dòng điện thoại được tiết lộ sẽ có 4 phiên bản màu sắc. Dựa trên hình ảnh được leaker chia sẻ có thể thấy khung viền của thiết bị được làm phẳng với bốn góc máy bo cong, còn cụm camera sau nhìn khác biệt hẳn so với dòng Reno6.', 'Theo ảnh teaser được leaker @yabhishekhd dẫn lại từ một nguồn nổi tiếng trên Weibo, OPPO Reno7 5G series dự kiến sẽ trình làng tại Trung Quốc vào ngày 25/11, lúc 17 giờ (theo giờ Việt Nam).\r\n\r\nThời gian: Từ 17:00 - 19:00, ngày 25/11\r\nĐịa điểm: Trung Quốc'),
(4, 3, 'phone4.jpg', 'Oppo thay đổi thiết kế mới sau 6 năm', 'Chắc chắn hơn bao giờ hết nhờ độ bền chuẩn quân đội, laptop Asus Zenbook UX325EA (KG363T) sở hữu kiểu dáng tinh tế cùng hiệu năng tối ưu nhờ CPU Intel thế hệ 11, giúp bạn xử lý nhanh gọn và chính xác mọi tác vụ.', 'Laptop được trang bị chip Intel Core i5 Tiger Lake 1135G7 giúp bạn hoàn thành công việc nhanh chóng, từ các tác vụ văn phòng như word, excel,... đến các công việc sáng tạo, đồ họa khác với tốc độ CPU 2.40 GHz và đạt tối đa đến 4.2 GHz nhờ Turbo Boost.\r\n\r\nĐem đến khả năng xử lý hình ảnh sắc nét lên đến chuẩn 8K nhờ card đồ họa tích hợp Intel Iris Xe Graphics, đáp ứng mọi nhu cầu của người dùng với những trải nghiệm chân thật cùng các tựa game hấp dẫn hay thỏa sức sáng tạo với các ứng dụng đồ họa như Photoshop, Ai, Lightroom,...\r\n\r\nRAM 8 GB LPDDR4X (On board) với tốc độ bus RAM 4267 MHz cho bạn sự đa nhiệm khi có thể mở nhiều ứng dụng cùng lúc và chuyển đổi qua lại một cách mượt mà.'),
(5, 2, 'laptop1.jpg', 'Ra mắt laptop mà hình OLED công nghệ 6K', 'Phiên bản laptop Asus này được chế tác từ kim loại nguyên khối, sở hữu trọng lượng nhẹ chỉ 1.14 kg và mỏng 13.9 mm, trở thành người bạn đồng hành lý tưởng, cùng đồng hành với bạn trên mọi chuyến đi, phục vụ tốt mọi nhu cầu của bạn.', 'Đàm thoại tốt hơn nhờ công nghệ khử nhiễu âm thanh tích hợp AI với khả năng tách tiếng ồn không mong muốn từ ngoại cảnh ra khỏi giọng nói con người, đem đến âm thanh trong trẻo, nâng cao hiệu suất công việc.\r\n\r\nAsus Zenbook UX325EA (KG363T) là phiên bản laptop mỏng nhẹ, cao cấp, với hiệu năng mạnh mẽ, là sự lựa chọn lí tưởng cho hầu hết tất cả mọi người.'),
(6, 2, 'laptop2.jpg', '5 cách kiểm tra cấu hình laptop', 'Sẽ có nhiều lúc bạn cần kiểm tra, check lại thông tin về cấu hình chiếc laptop mình đang dùng (mua máy mới, mua máy đã qua sử dụng, kiểm tra để nâng cấp, lắp thiết bị ngoại vi,…). Nhưng bạn không biết xem như thế nào?', 'Có rất nhiều trường hợp chúng ta cần kiểm tra thông tin cấu hình bên trong của laptop nói riêng và máy tính nói chung. Trong các tình huống sau thì bạn rất cần phải check thử:\r\n\r\nKhi mới mua laptop, đặc biệt là khi mua máy cũ để biết thông tin từ người bán có chính xác hay không và kiểm tra chất lượng của máy. Nếu máy có vấn đề thì chúng ta sẽ nắm được để trao đổi lại với người bán, tránh thiệt thòi cho bản thân.\r\nKhi muốn nâng cấp máy lên để dùng các ứng dụng hay game mới hay đơn giản là muốn tăng hiệu suất sử dụng. Biết được thông số hiện tại như thế nào thì việc nâng cấp mới dễ dàng và chính xác.\r\nKhi muốn kiểm tra máy có đang hoạt động tốt không, nhất là khi thấy có dấu hiệu bất thường như giật, lag, chậm khi dùng. Việc này có thể giúp bạn quyết định có nên nâng cấp laptop lên hay không.\r\nNgoài ra, ngay cả khi không có nhu cầu đặc biệt, việc kiểm tra thông tin laptop định kỳ cũng không bao giờ thừa. Xem thông tin giúp người dùng hiểu rõ về chiếc laptop đồng hành mình mỗi ngày trong cả công việc lẫn nhu cầu giải trí. Kiểm tra định kỳ có thể giúp bạn phát hiện sớm các vấn đề cần nâng cấp.'),
(7, 2, 'laptop3.jpg', 'Cách sử dụng laptop kéo dài tuổi thọ pin', 'Chắc chắn hơn bao giờ hết nhờ độ bền chuẩn quân đội, laptop Asus Zenbook UX325EA (KG363T) sở hữu kiểu dáng tinh tế cùng hiệu năng tối ưu nhờ CPU Intel thế hệ 11, giúp bạn xử lý nhanh gọn và chính xác mọi tác vụ.', 'Laptop được trang bị chip Intel Core i5 Tiger Lake 1135G7 giúp bạn hoàn thành công việc nhanh chóng, từ các tác vụ văn phòng như word, excel,... đến các công việc sáng tạo, đồ họa khác với tốc độ CPU 2.40 GHz và đạt tối đa đến 4.2 GHz nhờ Turbo Boost. Đem đến khả năng xử lý hình ảnh sắc nét lên đến chuẩn 8K nhờ card đồ họa tích hợp Intel Iris Xe Graphics, đáp ứng mọi nhu cầu của người dùng với những trải nghiệm chân thật cùng các tựa game hấp dẫn hay thỏa sức sáng tạo với các ứng dụng đồ họa như Photoshop, Ai, Lightroom,... RAM 8 GB LPDDR4X (On board) với tốc độ bus RAM 4267 MHz cho bạn sự đa nhiệm khi có thể mở nhiều ứng dụng cùng lúc và chuyển đổi qua lại một cách mượt mà.'),
(8, 2, 'laptop4.jpg', 'ASUS ZenBook OLED UX325 phù hợp cho các bạn trẻ', 'Là máy tính tầm trung – cao cấp nhưng ZenBook UX325 có màn hình OLED tân tiến. Đi kèm với nó là độ phân giải FullHD nhưng đừng vì vậy mà nghĩ rằng nó chưa đủ “tầm” để sánh với màn hình cao cấp.', 'Mẫu Ultrabook này được ASUS đầu tư khá hoàn hảo. Sản phẩm được trang bị con chip Intel Core i5 cùng card đồ hoạ Intel Iris XE, RAM 8GB RAM LPDDR4x bus 4266 MHz chạy Dual Channel và bộ nhớ SSD 512GB m.2 NVMe. Các thông số này tuy không phải đỉnh nhất nhưng lại rất hài hòa khi kết hợp cùng nhau, cho hiệu năng phục vụ tốt các nhu cầu từ giải trí đến làm việc. Đặc biệt là card đồ hoạ Intel Iris XE G7 mạnh gấp 3 lần nếu đặt lên bàn cân so sánh với Intel Ultra HD620 đời cũ. Dung lượng pin laptop là 67Wh.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`) VALUES
(3, 'Máy giặt'),
(4, 'Điện thoại'),
(5, 'Tivi và Đồ dùng'),
(13, 'Laptop'),
(14, 'Camera');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmuctin`
--

CREATE TABLE `tbl_danhmuctin` (
  `danhmuctin_id` int(11) NOT NULL,
  `tendanhmuc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmuctin`
--

INSERT INTO `tbl_danhmuctin` (`danhmuctin_id`, `tendanhmuc`) VALUES
(2, 'Máy tính'),
(3, 'Điện thoại');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_donhang`
--

CREATE TABLE `tbl_donhang` (
  `donhang_id` int(11) NOT NULL,
  `sanpham_id` int(11) NOT NULL,
  `khachhang_id` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `mahang` varchar(50) NOT NULL,
  `ngaythang` timestamp NOT NULL DEFAULT current_timestamp(),
  `status_donhang` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_donhang`
--

INSERT INTO `tbl_donhang` (`donhang_id`, `sanpham_id`, `khachhang_id`, `soluong`, `mahang`, `ngaythang`, `status_donhang`) VALUES
(47, 7, 24, 3, '355', '2021-09-06 14:46:30', 0),
(48, 1, 24, 3, '355', '2021-09-06 14:46:30', 0),
(49, 41, 24, 22, '8390-2021-11-27-04-13-38', '2021-11-27 03:13:38', 0),
(50, 40, 24, 14, '8390-2021-11-27-04-13-38', '2021-11-27 03:13:38', 0),
(51, 37, 24, 5, '8390-2021-11-27-04-13-38', '2021-11-27 03:13:38', 0),
(52, 43, 24, 1, '8390-2021-11-27-04-13-38', '2021-11-27 03:13:38', 0),
(53, 38, 24, 3, '6852-2021-11-27-06-25-46', '2021-11-27 05:25:46', 0),
(54, 39, 24, 1, '6852-2021-11-27-06-25-46', '2021-11-27 05:25:46', 0),
(55, 42, 24, 1, '6852-2021-11-27-06-25-46', '2021-11-27 05:25:46', 0),
(56, 44, 24, 1, '6852-2021-11-27-06-25-46', '2021-11-27 05:25:46', 0),
(57, 43, 24, 1, '6852-2021-11-27-06-25-46', '2021-11-27 05:25:46', 0),
(58, 45, 24, 1, '6852-2021-11-27-06-25-46', '2021-11-27 05:25:46', 0),
(59, 42, 24, 1, '333-2021-11-27-09-07-20', '2021-11-27 08:07:20', 2),
(60, 39, 24, 1, '333-2021-11-27-09-07-20', '2021-11-27 08:07:20', 2),
(61, 38, 24, 1, '333-2021-11-27-09-07-20', '2021-11-27 08:07:20', 2),
(62, 44, 24, 1, '333-2021-11-27-09-07-20', '2021-11-27 08:07:20', 2),
(63, 43, 24, 1, '333-2021-11-27-09-07-20', '2021-11-27 08:07:20', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_giaodich`
--

CREATE TABLE `tbl_giaodich` (
  `giaodich_id` int(11) NOT NULL,
  `khachhang_id` int(11) NOT NULL,
  `sanpham_id` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `magiaodich` varchar(50) NOT NULL,
  `ngaythang` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status_giaodich` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_giaodich`
--

INSERT INTO `tbl_giaodich` (`giaodich_id`, `khachhang_id`, `sanpham_id`, `soluong`, `magiaodich`, `ngaythang`, `status_giaodich`) VALUES
(4, 20, 7, 1, '587', '2021-09-04 15:49:52', 2),
(5, 20, 4, 2, '587', '2021-09-04 15:49:52', 2),
(6, 21, 6, 1, '599', '2021-09-02 12:56:49', 0),
(7, 24, 7, 2, '784', '2021-09-06 09:57:15', 2),
(16, 24, 6, 3, '72', '2021-09-06 10:26:21', 2),
(17, 24, 4, 3, '72', '2021-09-06 10:26:21', 2),
(18, 24, 6, 3, '695', '2021-09-06 13:43:38', 2),
(19, 24, 3, 3, '695', '2021-09-06 13:43:38', 2),
(20, 24, 7, 3, '355', '2021-09-06 14:46:30', 0),
(21, 24, 1, 3, '355', '2021-09-06 14:46:30', 0),
(22, 24, 41, 22, '8390-2021-11-27-04-13-38', '2021-11-27 03:13:38', 0),
(23, 24, 40, 14, '8390-2021-11-27-04-13-38', '2021-11-27 03:13:38', 0),
(24, 24, 37, 5, '8390-2021-11-27-04-13-38', '2021-11-27 03:13:38', 0),
(25, 24, 43, 1, '8390-2021-11-27-04-13-38', '2021-11-27 03:13:38', 0),
(26, 24, 38, 3, '6852-2021-11-27-06-25-46', '2021-11-27 05:25:46', 0),
(27, 24, 39, 1, '6852-2021-11-27-06-25-46', '2021-11-27 05:25:46', 0),
(28, 24, 42, 1, '6852-2021-11-27-06-25-46', '2021-11-27 05:25:46', 0),
(29, 24, 44, 1, '6852-2021-11-27-06-25-46', '2021-11-27 05:25:46', 0),
(30, 24, 43, 1, '6852-2021-11-27-06-25-46', '2021-11-27 05:25:46', 0),
(31, 24, 45, 1, '6852-2021-11-27-06-25-46', '2021-11-27 05:25:46', 0),
(32, 24, 42, 1, '333-2021-11-27-09-07-20', '2021-11-27 08:14:44', 2),
(33, 24, 39, 1, '333-2021-11-27-09-07-20', '2021-11-27 08:14:44', 2),
(34, 24, 38, 1, '333-2021-11-27-09-07-20', '2021-11-27 08:14:44', 2),
(35, 24, 44, 1, '333-2021-11-27-09-07-20', '2021-11-27 08:14:44', 2),
(36, 24, 43, 1, '333-2021-11-27-09-07-20', '2021-11-27 08:14:44', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_giohang`
--

CREATE TABLE `tbl_giohang` (
  `giohang_id` int(11) NOT NULL,
  `tensanpham` varchar(100) NOT NULL,
  `sanpham_id` int(11) NOT NULL,
  `giasanpham` varchar(50) NOT NULL,
  `hinhanh` varchar(50) NOT NULL,
  `soluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_khachhang`
--

CREATE TABLE `tbl_khachhang` (
  `khachhang_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `giaohang` int(11) NOT NULL DEFAULT 0,
  `note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_khachhang`
--

INSERT INTO `tbl_khachhang` (`khachhang_id`, `name`, `phone`, `address`, `email`, `password`, `giaohang`, `note`) VALUES
(21, 'Minh123', '09092889912', 'Ben Tre', 'minh1@123', '202cb962ac59075b964b07152d234b70', 1, 'nhanh'),
(22, 'Huyền', '0909286629', 'Cần Thơ', 'huyen@123', '202cb962ac59075b964b07152d234b70', 0, 'None'),
(23, 'Ngân', '0909286688', 'Bến Tre', 'ngan@123', '202cb962ac59075b964b07152d234b70', 0, 'None'),
(24, 'Hoà', '12345678', 'Chợ lách', 'hoa@123', '202cb962ac59075b964b07152d234b70', 0, 'None');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `sanpham_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sanpham_name` varchar(255) NOT NULL,
  `sanpham_chitiet` text NOT NULL,
  `sanpham_mota` text NOT NULL,
  `sanpham_gia` varchar(100) NOT NULL,
  `sp_khuyenmai` varchar(100) NOT NULL,
  `sanpham_active` int(11) NOT NULL DEFAULT 0,
  `sanpham_hot` int(11) NOT NULL DEFAULT 0,
  `sanpham_soluong` int(11) NOT NULL,
  `sanpham_image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`sanpham_id`, `category_id`, `sanpham_name`, `sanpham_chitiet`, `sanpham_mota`, `sanpham_gia`, `sp_khuyenmai`, `sanpham_active`, `sanpham_hot`, `sanpham_soluong`, `sanpham_image`) VALUES
(16, 4, 'Điện thoại LG', 'Máy có một hiệu năng hoàn toàn mạnh mẽ đáp ứng tốt nhiều nhu cầu đến từ người dùng và mang trong mình một thiết kế đầy vuông vức, sang trọng.', 'iPhone 12 Pro Max sở hữu diện mạo mới mới với khung viền được vát thẳng và mạnh mẽ như trên iPad Pro 2020', '350', '320', 1, 0, 12, 'phone1.jpg'),
(21, 4, 'Samsung Galaxy J7', 'Máy có một hiệu năng hoàn toàn mạnh mẽ đáp ứng tốt nhiều nhu cầu đến từ người dùng và mang trong mình một thiết kế đầy vuông vức, sang trọng.', 'iPhone 12 Pro Max sở hữu diện mạo mới mới với khung viền được vát thẳng và mạnh mẽ như trên iPad Pro 2020', '250', '220', 1, 0, 12, 'phone2.jpg'),
(22, 4, 'OPPO A37f', 'Máy có một hiệu năng hoàn toàn mạnh mẽ đáp ứng tốt nhiều nhu cầu đến từ người dùng và mang trong mình một thiết kế đầy vuông vức, sang trọng.', 'iPhone 12 Pro Max sở hữu diện mạo mới mới với khung viền được vát thẳng và mạnh mẽ như trên iPad Pro 2020', '300', '290', 1, 0, 23, 'phone3.jpg'),
(23, 4, 'Infinix Hot S3', 'Máy có một hiệu năng hoàn toàn mạnh mẽ đáp ứng tốt nhiều nhu cầu đến từ người dùng và mang trong mình một thiết kế đầy vuông vức, sang trọng.', 'iPhone 12 Pro Max sở hữu diện mạo mới mới với khung viền được vát thẳng và mạnh mẽ như trên iPad Pro 2020', '300', '290', 1, 0, 12, 'phone4.jpg'),
(24, 4, 'Moto X4 (6 GB)', 'Máy có một hiệu năng hoàn toàn mạnh mẽ đáp ứng tốt nhiều nhu cầu đến từ người dùng và mang trong mình một thiết kế đầy vuông vức, sang trọng.', 'iPhone 12 Pro Max sở hữu diện mạo mới mới với khung viền được vát thẳng và mạnh mẽ như trên iPad Pro 2020', '240', '233', 1, 0, 32, 'phone5.jpg'),
(25, 4, 'iVooMi i Series', 'Máy có một hiệu năng hoàn toàn mạnh mẽ đáp ứng tốt nhiều nhu cầu đến từ người dùng và mang trong mình một thiết kế đầy vuông vức, sang trọng.', 'iPhone 12 Pro Max sở hữu diện mạo mới mới với khung viền được vát thẳng và mạnh mẽ như trên iPad Pro 2020', '260', '249', 1, 0, 12, 'phone6.jpg'),
(26, 13, 'Dell Vostro Laptop', 'Máy có một hiệu năng hoàn toàn mạnh mẽ đáp ứng tốt nhiều nhu cầu đến từ người dùng và mang trong mình một thiết kế đầy vuông vức, sang trọng.', 'iPhone 12 Pro Max sở hữu diện mạo mới mới với khung viền được vát thẳng và mạnh mẽ như trên iPad Pro 2020', '260', '252', 1, 0, 3, 'lap1.jpg'),
(27, 13, 'Acer Laptop', 'Máy có một hiệu năng hoàn toàn mạnh mẽ đáp ứng tốt nhiều nhu cầu đến từ người dùng và mang trong mình một thiết kế đầy vuông vức, sang trọng.', 'iPhone 12 Pro Max sở hữu diện mạo mới mới với khung viền được vát thẳng và mạnh mẽ như trên iPad Pro 2020', '260', '240', 1, 0, 5, 'lap2.jpg'),
(28, 13, 'Lenovo ', 'Máy có một hiệu năng hoàn toàn mạnh mẽ đáp ứng tốt nhiều nhu cầu đến từ người dùng và mang trong mình một thiết kế đầy vuông vức, sang trọng.', 'iPhone 12 Pro Max sở hữu diện mạo mới mới với khung viền được vát thẳng và mạnh mẽ như trên iPad Pro 2020', '320', '300', 1, 0, 7, 'lap3.jpg'),
(29, 5, 'Sony 80 cm (32 inches)', 'Máy có một hiệu năng hoàn toàn mạnh mẽ đáp ứng tốt nhiều nhu cầu đến từ người dùng và mang trong mình một thiết kế đầy vuông vức, sang trọng.', 'iPhone 12 Pro Max sở hữu diện mạo mới mới với khung viền được vát thẳng và mạnh mẽ như trên iPad Pro 2020', '340', '320', 1, 0, 4, 'tv1.jpg'),
(30, 5, 'Artis Speaker', 'Máy có một hiệu năng hoàn toàn mạnh mẽ đáp ứng tốt nhiều nhu cầu đến từ người dùng và mang trong mình một thiết kế đầy vuông vức, sang trọng.', 'iPhone 12 Pro Max sở hữu diện mạo mới mới với khung viền được vát thẳng và mạnh mẽ như trên iPad Pro 2020', '399', '349', 1, 0, 2, 'tv2.jpg'),
(31, 5, 'Philips Speakers', 'Máy có một hiệu năng hoàn toàn mạnh mẽ đáp ứng tốt nhiều nhu cầu đến từ người dùng và mang trong mình một thiết kế đầy vuông vức, sang trọng.', 'iPhone 12 Pro Max sở hữu diện mạo mới mới với khung viền được vát thẳng và mạnh mẽ như trên iPad Pro 2020', '300', '249', 1, 0, 4, 'tv3.jpg'),
(34, 5, 'Microwave Oven', 'Máy có một hiệu năng hoàn toàn mạnh mẽ đáp ứng tốt nhiều nhu cầu đến từ người dùng và mang trong mình một thiết kế đầy vuông vức, sang trọng.', 'iPhone 12 Pro Max sở hữu diện mạo mới mới với khung viền được vát thẳng và mạnh mẽ như trên iPad Pro 2020', '300', '280', 1, 0, 4, 'tv4.jpg'),
(35, 5, 'Boat Rockerz Headset', 'Máy có một hiệu năng hoàn toàn mạnh mẽ đáp ứng tốt nhiều nhu cầu đến từ người dùng và mang trong mình một thiết kế đầy vuông vức, sang trọng.', 'iPhone 12 Pro Max sở hữu diện mạo mới mới với khung viền được vát thẳng và mạnh mẽ như trên iPad Pro 2020', '320', '350', 1, 0, 2, 'tv5.jpg'),
(36, 5, 'LG Boom Blast Speaker', 'Máy có một hiệu năng hoàn toàn mạnh mẽ đáp ứng tốt nhiều nhu cầu đến từ người dùng và mang trong mình một thiết kế đầy vuông vức, sang trọng.', 'iPhone 12 Pro Max sở hữu diện mạo mới mới với khung viền được vát thẳng và mạnh mẽ như trên iPad Pro 2020', '200', '180', 1, 0, 5, 'tv6.jpg'),
(37, 14, 'Nikon Camera', 'Máy có một hiệu năng hoàn toàn mạnh mẽ đáp ứng tốt nhiều nhu cầu đến từ người dùng và mang trong mình một thiết kế đầy vuông vức, sang trọng.', 'iPhone 12 Pro Max sở hữu diện mạo mới mới với khung viền được vát thẳng và mạnh mẽ như trên iPad Pro 2020', '230', '200', 1, 0, 0, 'cam1.jpg'),
(38, 14, 'Canon Knight V', 'Máy có một hiệu năng hoàn toàn mạnh mẽ đáp ứng tốt nhiều nhu cầu đến từ người dùng và mang trong mình một thiết kế đầy vuông vức, sang trọng.', 'iPhone 12 Pro Max sở hữu diện mạo mới mới với khung viền được vát thẳng và mạnh mẽ như trên iPad Pro 2020', '230', '200', 1, 0, 1, 'cam2.jpg'),
(39, 14, 'Fujikama X8 Pro', 'Máy có một hiệu năng hoàn toàn mạnh mẽ đáp ứng tốt nhiều nhu cầu đến từ người dùng và mang trong mình một thiết kế đầy vuông vức, sang trọng.', 'iPhone 12 Pro Max sở hữu diện mạo mới mới với khung viền được vát thẳng và mạnh mẽ như trên iPad Pro 2020', '230', '200', 1, 0, 3, 'cam3.jpg'),
(40, 14, 'Canon Flash R759', 'Máy có một hiệu năng hoàn toàn mạnh mẽ đáp ứng tốt nhiều nhu cầu đến từ người dùng và mang trong mình một thiết kế đầy vuông vức, sang trọng.', 'iPhone 12 Pro Max sở hữu diện mạo mới mới với khung viền được vát thẳng và mạnh mẽ như trên iPad Pro 2020', '230', '200', 1, 0, -9, 'cam4.jpg'),
(41, 14, 'YangZing NanoFluton', 'Máy có một hiệu năng hoàn toàn mạnh mẽ đáp ứng tốt nhiều nhu cầu đến từ người dùng và mang trong mình một thiết kế đầy vuông vức, sang trọng.', 'iPhone 12 Pro Max sở hữu diện mạo mới mới với khung viền được vát thẳng và mạnh mẽ như trên iPad Pro 2020', '230', '200', 1, 0, -17, 'cam5.jpg'),
(42, 14, 'Yokozakj M2 Black', 'Máy có một hiệu năng hoàn toàn mạnh mẽ đáp ứng tốt nhiều nhu cầu đến từ người dùng và mang trong mình một thiết kế đầy vuông vức, sang trọng.', 'iPhone 12 Pro Max sở hữu diện mạo mới mới với khung viền được vát thẳng và mạnh mẽ như trên iPad Pro 2020', '230', '200', 1, 0, 3, 'cam6.jpg'),
(43, 13, 'Dell Vostro Laptop', 'Máy có một hiệu năng hoàn toàn mạnh mẽ đáp ứng tốt nhiều nhu cầu đến từ người dùng và mang trong mình một thiết kế đầy vuông vức, sang trọng.', 'iPhone 12 Pro Max sở hữu diện mạo mới mới với khung viền được vát thẳng và mạnh mẽ như trên iPad Pro 2020', '260', '252', 1, 0, 0, 'lap4.jpg'),
(44, 13, 'Acer Laptop', 'Máy có một hiệu năng hoàn toàn mạnh mẽ đáp ứng tốt nhiều nhu cầu đến từ người dùng và mang trong mình một thiết kế đầy vuông vức, sang trọng.', 'iPhone 12 Pro Max sở hữu diện mạo mới mới với khung viền được vát thẳng và mạnh mẽ như trên iPad Pro 2020', '260', '240', 1, 0, 3, 'lap5.jpg'),
(45, 13, 'Lenovo ', 'Máy có một hiệu năng hoàn toàn mạnh mẽ đáp ứng tốt nhiều nhu cầu đến từ người dùng và mang trong mình một thiết kế đầy vuông vức, sang trọng.', 'iPhone 12 Pro Max sở hữu diện mạo mới mới với khung viền được vát thẳng và mạnh mẽ như trên iPad Pro 2020', '320', '300', 1, 0, 6, 'lap6.jpg'),
(46, 3, 'Máy giặt Panasonic', 'Máy có một hiệu năng hoàn toàn mạnh mẽ đáp ứng tốt nhiều nhu cầu đến từ người dùng và mang trong mình một thiết kế đầy vuông vức, sang trọng.', 'iPhone 12 Pro Max sở hữu diện mạo mới mới với khung viền được vát thẳng và mạnh mẽ như trên iPad Pro 2020', '320', '300', 1, 1, 10, 'wm2.jpg'),
(47, 3, 'Máy giặt Samsung', 'Máy có một hiệu năng hoàn toàn mạnh mẽ đáp ứng tốt nhiều nhu cầu đến từ người dùng và mang trong mình một thiết kế đầy vuông vức, sang trọng.', 'iPhone 12 Pro Max sở hữu diện mạo mới mới với khung viền được vát thẳng và mạnh mẽ như trên iPad Pro 2020', '7000000', '5900000', 1, 1, 10, 'wm3.jpg'),
(48, 3, 'Máy giặt LG', 'Máy có một hiệu năng hoàn toàn mạnh mẽ đáp ứng tốt nhiều nhu cầu đến từ người dùng và mang trong mình một thiết kế đầy vuông vức, sang trọng.', 'iPhone 12 Pro Max sở hữu diện mạo mới mới với khung viền được vát thẳng và mạnh mẽ như trên iPad Pro 2020', '7000000', '5900000', 1, 1, 10, 'wm4.jpg'),
(49, 3, 'Máy giặt AQUA', 'Máy có một hiệu năng hoàn toàn mạnh mẽ đáp ứng tốt nhiều nhu cầu đến từ người dùng và mang trong mình một thiết kế đầy vuông vức, sang trọng.', 'iPhone 12 Pro Max sở hữu diện mạo mới mới với khung viền được vát thẳng và mạnh mẽ như trên iPad Pro 2020', '7000000', '5900000', 1, 1, 10, 'wm1.jpg'),
(50, 3, 'Máy giặt Electronux', 'Máy có một hiệu năng hoàn toàn mạnh mẽ đáp ứng tốt nhiều nhu cầu đến từ người dùng và mang trong mình một thiết kế đầy vuông vức, sang trọng.', 'iPhone 12 Pro Max sở hữu diện mạo mới mới với khung viền được vát thẳng và mạnh mẽ như trên iPad Pro 2020', '7000000', '5900000', 1, 1, 10, 'wm5.jpg'),
(51, 3, 'Máy giặt Panasonic', 'Máy có một hiệu năng hoàn toàn mạnh mẽ đáp ứng tốt nhiều nhu cầu đến từ người dùng và mang trong mình một thiết kế đầy vuông vức, sang trọng.', 'iPhone 12 Pro Max sở hữu diện mạo mới mới với khung viền được vát thẳng và mạnh mẽ như trên iPad Pro 2020', '7000000', '5900000', 1, 1, 10, 'wm6.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `slider_id` int(11) NOT NULL,
  `slider_image` varchar(100) NOT NULL,
  `slider_caption` text NOT NULL,
  `slider_active` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_slider`
--

INSERT INTO `tbl_slider` (`slider_id`, `slider_image`, `slider_caption`, `slider_active`) VALUES
(1, 'b1.png', 'slider khuyến mãi', 1),
(2, 'b2.png', 'slider 50%', 1),
(3, 'b3.png', '', 1),
(4, 'b4.png', '', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_views`
--

CREATE TABLE `tbl_views` (
  `view_id` int(11) NOT NULL,
  `view` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_views`
--

INSERT INTO `tbl_views` (`view_id`, `view`) VALUES
(1, 20);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Chỉ mục cho bảng `tbl_baiviet`
--
ALTER TABLE `tbl_baiviet`
  ADD PRIMARY KEY (`baiviet_id`);

--
-- Chỉ mục cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `tbl_danhmuctin`
--
ALTER TABLE `tbl_danhmuctin`
  ADD PRIMARY KEY (`danhmuctin_id`);

--
-- Chỉ mục cho bảng `tbl_donhang`
--
ALTER TABLE `tbl_donhang`
  ADD PRIMARY KEY (`donhang_id`);

--
-- Chỉ mục cho bảng `tbl_giaodich`
--
ALTER TABLE `tbl_giaodich`
  ADD PRIMARY KEY (`giaodich_id`);

--
-- Chỉ mục cho bảng `tbl_giohang`
--
ALTER TABLE `tbl_giohang`
  ADD PRIMARY KEY (`giohang_id`);

--
-- Chỉ mục cho bảng `tbl_khachhang`
--
ALTER TABLE `tbl_khachhang`
  ADD PRIMARY KEY (`khachhang_id`);

--
-- Chỉ mục cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`sanpham_id`);

--
-- Chỉ mục cho bảng `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Chỉ mục cho bảng `tbl_views`
--
ALTER TABLE `tbl_views`
  ADD PRIMARY KEY (`view_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `tbl_baiviet`
--
ALTER TABLE `tbl_baiviet`
  MODIFY `baiviet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `tbl_danhmuctin`
--
ALTER TABLE `tbl_danhmuctin`
  MODIFY `danhmuctin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tbl_donhang`
--
ALTER TABLE `tbl_donhang`
  MODIFY `donhang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT cho bảng `tbl_giaodich`
--
ALTER TABLE `tbl_giaodich`
  MODIFY `giaodich_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `tbl_giohang`
--
ALTER TABLE `tbl_giohang`
  MODIFY `giohang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT cho bảng `tbl_khachhang`
--
ALTER TABLE `tbl_khachhang`
  MODIFY `khachhang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `sanpham_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT cho bảng `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tbl_views`
--
ALTER TABLE `tbl_views`
  MODIFY `view_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
