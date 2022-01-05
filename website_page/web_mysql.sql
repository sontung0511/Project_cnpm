-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 05, 2022 lúc 02:53 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web_mysql`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`, `admin_status`) VALUES
(1, 'tungadmin', 'c4ca4238a0b923820dcc509a6f75849b', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `id_cart` int(11) NOT NULL,
  `id_khachhang` int(11) NOT NULL,
  `code_cart` varchar(10) NOT NULL,
  `cart_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart`
--

INSERT INTO `tbl_cart` (`id_cart`, `id_khachhang`, `code_cart`, `cart_status`) VALUES
(1, 14, '9461', 0),
(2, 14, '9355', 0),
(3, 14, '880', 1),
(4, 14, '9563', 1),
(5, 14, '9056', 1),
(6, 14, '1387', 1),
(7, 14, '3794', 1),
(8, 14, '9216', 1),
(9, 14, '7097', 1),
(10, 14, '4199', 1),
(11, 15, '7513', 1),
(12, 18, '5060', 1),
(13, 18, '5674', 1),
(14, 18, '2676', 1),
(15, 18, '9687', 1),
(16, 18, '2230', 1),
(17, 18, '6452', 1),
(18, 18, '7084', 1),
(19, 18, '6581', 1),
(20, 18, '7554', 1),
(21, 18, '1846', 1),
(22, 18, '59', 1),
(23, 18, '5683', 1),
(24, 18, '207', 1),
(25, 18, '2967', 1),
(26, 18, '4909', 1),
(27, 18, '3300', 1),
(28, 18, '4418', 1),
(29, 18, '9647', 1),
(30, 18, '2649', 1),
(31, 18, '1969', 1),
(32, 18, '2590', 1),
(33, 18, '343', 1),
(34, 18, '9722', 1),
(35, 18, '9268', 1),
(36, 18, '9023', 1),
(37, 18, '5038', 1),
(38, 18, '9267', 1),
(39, 18, '254', 1),
(40, 18, '5262', 1),
(41, 18, '3007', 1),
(42, 18, '6753', 1),
(43, 18, '9940', 1),
(44, 18, '3268', 1),
(45, 18, '5932', 1),
(46, 18, '9281', 1),
(47, 18, '4545', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart_details`
--

CREATE TABLE `tbl_cart_details` (
  `id_cart_details` int(11) NOT NULL,
  `code_cart` varchar(10) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `soluongmua` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart_details`
--

INSERT INTO `tbl_cart_details` (`id_cart_details`, `code_cart`, `id_sanpham`, `soluongmua`) VALUES
(1, '9461', 14, 1),
(2, '9355', 14, 1),
(3, '880', 25, 1),
(4, '7513', 22, 3),
(5, '5060', 20, 1),
(6, '59', 24, 1),
(7, '59', 22, 3),
(8, '4418', 22, 1),
(9, '4418', 24, 1),
(10, '5262', 22, 1),
(11, '5262', 24, 1),
(12, '5262', 21, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_dangky`
--

CREATE TABLE `tbl_dangky` (
  `id_dangky` int(11) NOT NULL,
  `tenkhachhang` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `diachi` varchar(200) NOT NULL,
  `dienthoai` varchar(20) NOT NULL,
  `matkhau` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_dangky`
--

INSERT INTO `tbl_dangky` (`id_dangky`, `tenkhachhang`, `email`, `diachi`, `dienthoai`, `matkhau`) VALUES
(14, 'tunghason', 'tungson@gmail.com', '87 tran hu', '10984891', '25f9e794323b453885f5181f1b624d0b'),
(15, 'ha ', 'tung123', '68 tran phu', '0909090', 'e10adc3949ba59abbe56e057f20f883e'),
(16, 'DuongHoaManh', 'manh@gmail.com', '67 tran phu', '095889111', 'e10adc3949ba59abbe56e057f20f883e'),
(17, 'DuongHoaManh', 'admin@gmail.com', '68 tran phu', '0909090', 'e10adc3949ba59abbe56e057f20f883e'),
(18, 'tungsonha', 'tung@gmail.com', '68 tran phu', '1234567', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `tendanhmuc` varchar(250) NOT NULL,
  `thutu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`id_danhmuc`, `tendanhmuc`, `thutu`) VALUES
(6, 'sắc đẹp', 2),
(9, 'tiêu hóa', 3),
(11, 'huyết áp', 5),
(12, 'Dầu', 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `id_sanpham` int(11) NOT NULL,
  `tensanpham` varchar(250) NOT NULL,
  `masp` varchar(50) NOT NULL,
  `giasp` varchar(100) NOT NULL,
  `soluong` varchar(50) NOT NULL,
  `hinhanh` varchar(50) NOT NULL,
  `tomtat` tinytext NOT NULL,
  `noidung` text NOT NULL,
  `tinhtrang` int(11) NOT NULL,
  `id_danhmuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`id_sanpham`, `tensanpham`, `masp`, `giasp`, `soluong`, `hinhanh`, `tomtat`, `noidung`, `tinhtrang`, `id_danhmuc`) VALUES
(16, 'Alipas mới 30VQ', '1', '750000', '30 viên/hộp', '1641349599_sap-n-500x500.jpg', 'Nam giới trên 18 tuổi. Người mong muốn nâng cao sinh lực, cải thiện chức năng và phong độ nam giới, nâng cao sức khỏe toàn thân.', 'Bảo quản: Nơi khô ráo, thoáng mát, nhiệt độ dưới 30 độ C, tránh ẩm và ánh nắng mặt trời, để xa tầm tay trẻ em.\r\n\r\nThông tin về công dụng sản phẩm công bố theo giấy phép SĐK: 8545/2020/ĐKSP.\r\n\r\nNhà sản xuất: St. Paul Brands - 11842 Monarch Street, Garden Grove, CA 92841, U.S.A.\r\n\r\nNhập khẩu và phân phối: Công ty cổ phần Dược phẩm ECO\r\n\r\nĐịa chỉ: 148 Hoàng Hoa Thám, P.12, Q. Tân Bình, TP. Hồ Chí Minh.', 1, 6),
(17, 'Viên Uống Collagen Youtheory +Biotin', '2', '690000', '390 Viên/hộp', '1641349702_collagen.jpg', 'Bổ sung collagen và vitamin C cho cơ thể, bù đắp lượng collagen bị thiếu hụt trong cơ thể, hỗ trợ làm đẹp da, Biotin hỗ trợ nuôi dưỡng tóc và móng.\r\n\r\n- Ngăn ngừa và cải thiện các dấu hiệu lão hóa da', 'Collagen là một trong những protein quan trọng không thể thiếu của cơ thể, đóng vai trò quan trọng trong quá trình hình thành các sụn và liên kết các tế bào. Collagen có rất nhiều trong xương, sụn, dây chằng, gây, mạch máu,… và đặc biệt là ở da. Chính vì thế, khi cơ thể không tổng hợp, sản sinh đủ lượng collagen cần thiết có thể dẫn đến các vấn đề về da và sức khỏe.\r\n\r\nViên Uống Collagen Youtheory +Biotin 390 Viên Type 1,2&3 Từ Mỹ thuộc dòng sản phẩm thực phẩm chức năng dạng viên dễ uống có chứa các Collagen nguyên chất giúp cải thiện được làn da lẫn cải thiện sức khỏe người dùng ngay từ bên trong. Viên uống Collagen có bổ sung thêm Biotin - dưỡng chất quan trọng nuôi dưỡng tóc và móng. Sản phẩm với hàng chính hãng từ Mỹ với độ tin cậy cao.', 1, 6),
(18, 'Sữa Ong Chúa Healthy Care Royal Jelly', '3', '790000', '365 Viên', '1641349781_suaongchua.jpg', 'Sữa ong chúa là chất dịch tiết ra từ những con ong thợ, sữa ong chúa chứa khoảng 60% đến 70% nước, 12 đến 15% protein, 10% tới 16% đường, 3% đến 6% chất béo và 2-3% vitamin, muối và các axit amin. Vì thế', '', 1, 9),
(19, 'Viên Uống Giảm Cân Detox Slimming Capsules ', '4', '890000', '2 lọ(40viên)', '1641349993_giamcan.jpg', '-Giúp giảm cân nhanh chóng.\r\n\r\n- Giảm cảm giác thèm ăn, đánh tan mỡ thừa.\r\n\r\n- Không gây tăng cân trở lại, chuyển hóa mỡ thừa thành năng lượng.\r\n\r\n- Bổ sung Vitamin làm đẹp da, ngăn ngừa nhăn da.', 'iảm cân bằng phương pháp detox được rất nhiều người áp dụng thành công và hiện vẫn đang đứng đầu xu hướng giảm cân. Tuy nhiên, không phải ai cũng đủ kiên nhẫn và thời gian để chuẩn bị các thực phẩm detox để thực hiện mỗi ngày, chính vì thế, rất nhiều người đã bỏ cuộc giữa chừng.', 1, 9),
(20, 'Nhau Thai Cừu Golden Health Placenta', '5', '970000', '100 Viên', '1641350216_nhauthai.jpg', '- Với những dưỡng chất quý giá, nhau thai cừu giúp làm mờ vết tàn nhang, vết nám, vết thâm.\r\n\r\n- Giữ ẩm hiệu quả, giúp làm giảm nếp nhăn, cho bạn làn da tươi trẻ đầy sức sống.\r\n\r\n- Nhau thai cừu gi?', 'Trong mỗi viên nang nhau thai cừu có chứa: \r\n\r\nTinh chất nhau thai cừu tươi nguyên chất:  (50000mg)\r\n\r\nVitis Vinifera hạt giống trích xuất equiv. để khô (1200mg)\r\n\r\nAcid ascorbic (vitamin C, 50mg)\r\n\r\n', 1, 6),
(21, 'Viên uống Anti Gray 7050', '6', '335000', '200 viên/hộp', '1641350433_gray.jpg', 'Hỗ trợ bổ sung dưỡng chất bị thiếu hụt giúp cải thiện tình trạng tóc bạc sớm.\r\nHỗ trợ tái tạo những sắc tố tóc không hoạt động hoặc hư tổn, hỗ trợ tăng cường dưỡng chất giúp mái tóc c?', 'ống 2 viên mỗi ngày, sau ăn\r\nKhông dùng cho phụ nữ có thai và cho con bú, người dưới 18 tuổi nếu không có chỉ định của bác sĩ\r\nBảo quản nơi khô ráo thoáng mát, để xa tầm tay trẻ em', 1, 6),
(22, 'Thực phẩm chức năng hạ áp ích Nhân', '7', '110000', '200 viên/hộp', '1641350542_huyetapcu.jpg', 'Hạ Áp Ích Nhân có thành phần các vị thuốc trong bài thuốc có tác dụng hạ huyết áp, giúp hạ huyết áp, duy trì ổn định huyết áp, phòng ngừa hình thành cục máu đông gây tắc mạch, ngăn ngừa biến ch?', 'Hỗ trợ làm giảm các triệu chứng khó chịu của tăng huyết áp: Mất ngủ, đau đầu, ù tai, hoa mắt, chóng mặt.\r\nHỗ trợ giảm thiểu nguy cơ tai biến và phục hồi các di chứng sau tai biến mạch máu não.\r\n', 1, 11),
(23, 'X-Tabi ', '9', '320000', '20 ống/hộp', '1641350651_xtabi.jpg', 'Hỗ trợ hạ huyết áp, điều trị huyết áp cao\r\nHỗ trợ làm tan các cục máu đông\r\nHỗ trợ phục hồi sau tai biến mạch máu não do nghẽn mạch.\r\nHỗ trợ hoạt huyết, hỗ trợ làm bền thành mạch máu, hỗ t', 'Ngày uống 2 lần, mỗi lần 2 ống sau khi ăn.\r\nNên uống đều đặn theo lộ trình 1 đến 3 tháng để có kết quả tốt nhất.\r\nX-tabi là sản phẩm có nguồn gốc từ thiên nhiên nên an toàn và không có tác dụng phụ. Với các cơn tăng huyết áp đột ngột, bạn có thể sử dụng 1 lúc lên đến 6 ống để hoạt huyết, giúp giảm nguy cơ tai biến mạch máu não.', 1, 11),
(24, 'Thực phẩm chức năng BoniOxy1', '10', '1565000', '200 viên/hộp', '1641350775_xxxx.jpg', 'Sử dụng BoniOxy1 giúp làm giãn mạch máu, tăng tuần hoàn máu, hạ huyết áp, hạ lipid và cholesterol máu, ngăn ngừa xơ vữa động mạch.\r\nGiúp làm hạ đường huyết, hạ cholesterol máu, giảm LDL.\r\nCải thiện tu?', 'Ức chế sự ngưng tụt tiểu cầu, làm tan huyết khối. Giúp hồi phục trí nhớ và vận động sau tai biến mạch máu não, nhồi máu cơ tim.', 1, 11),
(25, 'Bios Life C', '11', '1390000', '30 gói/hộp', '1641350859_bios-life-c-197190.jpg', 'Bios Life C là sản phẩm hỗ trợ hữu hiệu cho những người gặp phải các vấn đề về huyết áp.\r\nMột số tác dụng khác như hỗ trợ hoạt động tim mạch, điều hoà lượng Cholesterol trong cơ thể, góp ph??', 'Guar Gum, Phytosterols (Beta-sitosterol, Campesterol, Stigmasterol), Gum Arabic, Locust Bean Gum, đường Maltodextrin, hương cam, Pectin, sợi yến mạch, bột cam, Citric Acid, Calcium Carbonate, Ascorbic Acid, Beta-carotene, Beta-glucans, Sucralose, Niacinamide, D-Alpha Tocopheryl Acetate, cúc Morifolium, Cyanocobalamin, Policosanol, Zinc Gluconate, Pyridoxine HCL, Riboflavin, Folic Acid, Biotin, Thiamin HCL, Chromium', 1, 11),
(26, 'Dầu Nóng Hàn Quốc Antiphlamine ', '12', '85000', '20ml/chai', '1641388835_a.jpg', '– Giảm đau xương sống và các khớp tay, chân, cổ… cho người cao tuổi, người lao động nặng hay người chơi thể thao.\r\n\r\n– Hỗ trợ trị viêm xương, giảm đau xương, đau cơ và tê buốt tay chân\r\n\r\n– Gi?', '– Methylsalicylate (200mg): giúp giảm đau, sát khuẩn và cho mạch máu lưu thông tốt hơn.\r\n\r\n– Menthol (60mg): giúp giảm đau nhanh, mạnh và chống viêm hiệu quả\r\n\r\n– Thêm các thành phần tác dược điều hương, tá dược màu, tá dược độn, tá dược trơn, chất giữ ẩm…', 1, 12),
(27, ' Cao Xạ Đen Hòa Bình', '13', '300000', '100ml/bình', '1641388931_cao-xa-den.jpg', 'Hỗ trợ phòng ngừa và hỗ trợ điều trị Ung thư\r\nHỗ trợ phòng ngừa và hỗ trợ điều trị Ung thư', 'Những người vừa trải qua một cuộc đại phẫu thuật, sức đề kháng kém, hấp thụ dinh dưỡng không tốt nên sử dụng cao xạ đen.\r\nNhững người thường xuyên di chuyển, công tác, không có nhiều thời gian đun sắc xạ đen.', 1, 12);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_shipping`
--

CREATE TABLE `tbl_shipping` (
  `id_shipping` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `note` varchar(200) NOT NULL,
  `id_dangky` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_shipping`
--

INSERT INTO `tbl_shipping` (`id_shipping`, `name`, `phone`, `address`, `note`, `id_dangky`) VALUES
(1, 'Duong Hoa Manh', '091149501', 'Tra Vinh', 'dadada', 0),
(2, 'Duong Hoa Manh', '0911420295', '123139', 'ade', 17),
(3, 'Duong Hoa Manh', '0911420295', '123139', 'ade', 17);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Chỉ mục cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Chỉ mục cho bảng `tbl_cart_details`
--
ALTER TABLE `tbl_cart_details`
  ADD PRIMARY KEY (`id_cart_details`);

--
-- Chỉ mục cho bảng `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  ADD PRIMARY KEY (`id_dangky`);

--
-- Chỉ mục cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Chỉ mục cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`id_sanpham`);

--
-- Chỉ mục cho bảng `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  ADD PRIMARY KEY (`id_shipping`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT cho bảng `tbl_cart_details`
--
ALTER TABLE `tbl_cart_details`
  MODIFY `id_cart_details` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  MODIFY `id_dangky` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  MODIFY `id_shipping` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
