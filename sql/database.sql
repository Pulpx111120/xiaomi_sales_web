-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2021 at 11:01 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quanlybanhang`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitietdathang`
--

CREATE TABLE `chitietdathang` (
  `SoDonDH` varchar(5) NOT NULL,
  `MSHH` varchar(5) NOT NULL,
  `SoLuong` tinyint(4) DEFAULT NULL,
  `GiaDatHang` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dathang`
--

CREATE TABLE `dathang` (
  `SoDonDH` varchar(5) NOT NULL,
  `MSKH` varchar(5) DEFAULT NULL,
  `MSNV` varchar(5) DEFAULT NULL,
  `NgayDH` datetime DEFAULT NULL,
  `TrangThai` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hanghoa`
--

CREATE TABLE `hanghoa` (
  `MSHH` varchar(5) NOT NULL,
  `TenHH` varchar(50) NOT NULL,
  `Gia` int(11) NOT NULL,
  `SoLuongHang` tinyint(4) NOT NULL,
  `MaNhom` varchar(5) NOT NULL,
  `Hinh` varchar(50) NOT NULL,
  `MoTaHH` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hanghoa`
--

INSERT INTO `hanghoa` (`MSHH`, `TenHH`, `Gia`, `SoLuongHang`, `MaNhom`, `Hinh`, `MoTaHH`) VALUES
('C1', 'Flying camera Unmanned aerial aircraft drone', 11990000, 20, '06', 'Untitled-7-06.jpg', '    1 chiếc Mi Mi Drone 4K\r\n    Bộ điều khiển RC\r\n    Máy ảnh\r\n    1 pin\r\n    Cáp USB\r\n    Hướng dẫn sử dụng \r\n    Cánh quạt \r\n    Sạc tường \r\n'),
('C2', 'CAMERA QIHOO 360 D801 1080P NGOÀI TRỜI', 1890000, 12, '06', 'd801-scaled.jpg', 'D801 phiên bản camera ngoài trời kế tiếp của Qihoo 360 với nhiều tính năng nâng cấp vượt trội so với phiên bản trước như: góc nhìn tăng lên 120° , báo động bằng âm thanh và ánh sáng phát ra trực tiếp.'),
('C3', 'Camera Thông Minh Xiaomi 1080P', 449000, 50, '06', 'camera_ip.jpg', 'Nếu bạn đang tìm kiếm 1 chiếc camera thông minh, có thể hoạt động linh hoạt ở trong nhà lẫn ngoài trời, bên cạnh đó có kích thước nhỏ gọn, được trang bị nhiều tính năng nổi bật nhưng lại có giá thành.'),
('DT1', 'Điện Thoại Xiaomi Redmi Note 7 Pro', 5000000, 50, '01', '13.jpg', 'Điện thoại thông minh Redmi Note 7 Pro được ra mắt vào tháng 2 năm 2019. Điện thoại đi kèm màn hình cảm ứng 6,30 inch với độ phân giải 1080×2340 pixel với mật độ điểm ảnh 409 pixel mỗi inch (ppi).'),
('DT10', 'Điện Thoại Xiaomi Redmi Go', 1790000, 40, '01', '10.jpg', 'Redmi Go Điện thoại đi kèm màn hình cảm ứng 5,00 inch với độ phân giải 720×1280 pixel và tỷ lệ khung hình 16: 9.'),
('DT11', 'Điện Thoại Pocophone F1', 7350000, 50, '01', '11.jpg', 'Chiếc điện thoại Xiaomi này được biết đến là chiếc smartphone giá rẻ nhất thị trường sở hữu con chip Snapdragon 845 8 nhân, con chip mạnh mẽ nhất trong năm 2018 của thế giới Android.'),
('DT12', 'Điện Thoại Xiaomi Mi 9 SE', 6780000, 22, '01', '12.jpg', 'Điện thoại thông minh Xiaomi Mi 9 SE được ra mắt vào tháng 2 năm 2019. Điện thoại đi kèm màn hình cảm ứng 5,97 inch với độ phân giải 1080×2340 pixel với mật độ điểm ảnh 432 pixel mỗi inch (ppi).'),
('DT2', 'Điện Thoại Xiaomi Mi 10 Pro 5G', 17299000, 50, '01', '2.jpg', 'Xiaomi vừa cho ra mắt mẫu Mi 10 tại thị trường Trung Quốc. Đây là chiếc smartphone cao cấp mới nhất của hãng. So với phiên bản tiền nhiệm, Mi 10 có nhiều thay đổi về thiết kế.'),
('DT3', 'Điện Thoại Xiaomi Mi CC9 Pro', 15000000, 30, '01', '3.jpg', '5 Camera: 108 MP + 5 MP (telephoto, zoom 5X) + 12 MP (telephoto, zoom 2X) + 20 MP (ultrawide) + 2 MP (macro camera)'),
('DT4', 'Điện Thoại Xiaomi Black Shark', 9690000, 70, '01', '4.jpg', 'Xiaomi Black Shark có ngoại hình khác biệt hoàn toàn với tất cả những thiết bị của hãng từ trước tới nay. Cũng dễ hiểu bởi đây là một smartphone dành cho các game thủ.'),
('DT5', 'Điện Thoại Xiaomi Mi 8 Pro', 12390000, 11, '01', '5.jpg', 'Mi 8 Pro trong màn hình quét vân tay hoạt hình như đặc trưng trên trang sản phẩm có thể không có sẵn ra khỏi\r\nhộp cho điện thoại được bán trong lô ban đầu và sẽ được bổ sung sau này.'),
('DT6', 'Điện Thoại Xiaomi Redmi K30 5G', 6599000, 15, '01', '6.jpg', 'Redmi K30 có màn hình 6,67 inch, với camera selfie kép đục lỗ giống Galaxy S10+. Tỷ lệ khung hình 20:9, độ phân giải fullHD+ và tần số 120Hz. Màn hình được bảo vệ bởi kính cường lực Corning Gorilla Gl'),
('DT7', 'Điện Thoại Xiaomi Redmi K30', 6150000, 18, '01', '7.jpg', 'Phiên bản Redmi K30 vừa ra mắt được trang bị chip xử lý Snapdragon 765, hỗ trợ mạng di động 5G. Trong khi đó, Redmi xác nhận sẽ có một phiên bản 4G ra mắt trong thời gian tới.'),
('DT8', 'Điện Thoại Xiaomi Redmi 8', 3050000, 70, '01', '8.jpg', 'Thiết kế nguyên khối, màn hình giọt nước'),
('DT9', 'Điện Thoại Xiaomi Redmi 7 Chính Hãng Xiaomi', 1200000, 20, '01', '9.jpg', 'Điện thoại thông minh Xiaomi Redmi 7 được ra mắt vào tháng 3 năm 2019. Điện thoại đi kèm màn hình cảm ứng 6,26 inch với độ phân giải 720×1520 pixel với mật độ điểm ảnh 269 pixel / inch (ppi).'),
('LP1', 'Laptop Xiaomi Mi Notebook Air 2019 13.3″', 20990000, 12, '02', '14.jpg', 'Hệ điều hành:\r\nCPU Windows 10 Home : Intel Core i7-8550U, Quad Core, tối đa 4.0 GHz\r\nChủ đề: 4\r\nBộ nhớ cache ba cấp: 8MB\r\nLoại đồ họa: NVIDIA GeForce MX250\r\nDung lượng đồ họa:\r\nRAM 2G GDDR5 : 8GB DDR4'),
('LP2', 'Laptop Xiaomi RedmiBook Pro 14 Inch', 17990000, 23, '02', '15.jpg', 'Xiaomi Redmibook có nhiều tính năng tuyệt vời. Powered by Intel 8 Gen NVIDIA GeForce MX250 bộ xử lý quad , và được trang bị với một 14 inch FHD màn hình, nó mang đến cho bạn hiệu suất mạnh mẽ.'),
('LP3', 'Laptop Xiaomi Gaming 15.6″', 33490000, 50, '02', '16.jpg', 'Thương hiệu: Xiaomi \r\nBộ nhớ đệm: 9MB \r\nCore: 2.2GHz, \r\nCPU Hexa Core : Intel Core i7-8750H \r\nCPU Thương hiệu: Intel \r\nGraphics Dung lượng: \r\nChipset đồ họa 6G : NVIDIA GeForce GTX1060 '),
('LP4', 'Laptop Xiaomi Mi Notebook Pro 15.6″', 27490000, 19, '02', '17.jpg', 'Xiaomi Mi Notebook Pro là một máy tính xách tay hiệu quả về chi phí, hỗ trợ làm mờ vân tay . Được trang bị màn hình FHD 15,6 inch , mang lại hình ảnh và video sống động. Được trang bị bộ xử lý Intel C'),
('LP5', 'Laptop Xiaomi Mi Notebook Air 12.5″', 13790000, 100, '02', '18.jpg', 'CPU: Intel Core m3-8100Y, Lõi kép, tối đa 3,4 GHz\r\n\r\nĐược trang bị hiệu năng tốt hơn, cung cấp nhiều năng lượng cho đa nhiệm và cung cấp nhiên liệu cho các trò chơi và phim thông thường.'),
('M1', 'Ổ Cứng Xiaomi Cat Drive Shareable Cloud Storage 1T', 1990000, 20, '07', 'Untitled-5-10.jpg', 'Ổ cứng dung lượng lớn loại TB, lưu trữ tập trung của điện thoại di động, máy tính, Pad và các tệp, ảnh và video trên thiết bị thông minh khác. Và tự động sắp xếp để tránh thiếu bộ nhớ quý giá.'),
('M2', 'Router Wifi Redmi AC2100 6 Anten', 749000, 12, '07', 'redmi_ac2100.jpg', 'Sở hữu cấu hình khủng, bộ nhớ dung lượng lớn cùng các trang bị hiện đại, Router Wifi Redmi AC2100 sẽ là lựa chọn đáp ứng tốt cho nhu cầu truy cập internet mật độ cao trong từ môi trường doanh nghiệp.'),
('P1', 'Sạc Dự Phòng 10000mAh Gen 3 Bản Sạc Nhanh 2019', 399000, 50, '05', 'sạc-dự-phòng.jpg', 'Model: PLM13ZM\r\nDung lượng pin: 37Wh 3.7V 10000mAh\r\nDung lượng đáp ứng: 5500mAh (5.1V/2.6A)\r\nGiao diện input: micro USB/USB-C\r\nGiao diện output: USB-A'),
('P2', 'Pin Tiểu Cầu Vồng Xiaomi Rainbow Battery ZI7 AAA', 99000, 124, '05', 'Untitled-9dry-05.jpg', 'Rainbow, 10 màu khác nhau trong tay bạn. Đó là một bộ sưu tập giá trị lớn; một món quà đàng hoàng, cao cấp; một tác phẩm nghệ thuật khắc cẩn thận và đẹp. '),
('P3', 'Củ Sạc Nhanh Kiêm Sạc Dự Phòng Xiaomi Powerbank', 499000, 119, '05', 'Untitled-4-05.jpg', 'Dung lượng 5000mAh\r\nSạc đa giao thức nhanh.\r\nĐầu ra 2 cổng USB.'),
('SK1', 'Tăm Nước Vệ Sinh Răng Miệng DR-BEI F3', 799000, 47, '08', 'f3.jpg', 'Việc sử dụng tăm nước vệ sinh răng miệng DR-BEI F3 hàng ngày sẽ giúp loại bỏ các mảng bám, mảnh vụn thức ăn còn sót lại trong khoang miệng, đặc biệt là các kẽ răng.'),
('SK2', 'Cân Điện Tử Thông Minh Xiaomi Body Composition', 599000, 30, '08', 'cân_gen2_2019.jpg', 'Cân điện tử thông minh Xiaomi Body Composition Scale 2  (2019) trang bị không thể thiếu cho mỗi gia đình. Nếu bạn đang tìm kiếm một người bạn đồng hành hoàn hảo với chỉ số cân nặng và tỷ lệ cơ thể.'),
('SK3', ' Add to Wishlist Máy tập chạy bộ Xiaomi Amazfit Ai', 13490000, 30, '08', 'airrun.jpg', 'Đồng thời, máy chạy bộ gia đình Amazfit AirRun đã được phát hành cùng ngày, cũng có các chức năng của dây đai siêu lớn, thiết kế tối giản và hiện đại, hộp âm thanh tùy chỉnh JBL, liên kết thiết bị đeo'),
('TN1', 'Micro Karaoke Kèm Loa Bluetooth Hoho X3', 599000, 88, '04', 'mic_x3-1.jpg', 'Bạn đang tìm kiếm một chiếc micro karaoke Bluetooth nhằm thỏa mãn niềm đam mê ca hát của mình và gia đình. Bạn yêu cầu cao hơn ở thiết kế và chất lượng âm thanh ổn định mà sản phẩm mang lại.'),
('TN2', 'Tai Nghe Bluetooth True Wireless QCY T5', 599000, 50, '04', 'miW-01-01.jpg', 'Tai nghe Bluetooth Xiaomi QCY-T5 chuẩn kháng nước IPX5 vì vậy bạn có thể chạy bộ và tập luyện dưới mưa. Tai nghe chỉ nặng 4,38 gram với kích thước nhỏ gọn của vỏ cho phép bạn luôn mang theo bên mình.'),
('TN3', 'Polar Bee Bluetooth Interphone', 699000, 20, '04', 'é-01.jpg', 'Trọng lượng (g) 13\r\nMàu Đen\r\nKích thước 42,2 x 56,3 x 25,8 mm\r\nThời gian hoạt động (h)7 h\r\nLoại thiết bị Tai nghe Bluetooth'),
('TN4', 'Tai Nghe 1MORE HD MK801 Big HeadPhone', 1200000, 61, '04', 'Untitled-3-11.jpg', 'MK801 Over-Ears của chúng tôi cung cấp âm thanh chất lượng phòng thu với mức giá cạnh tranh nhất. Thiết kế gọn nhẹ nhưng bền bỉ của chúng tạo ra trải nghiệm nghe mạnh mẽ và minh bạch.'),
('TV1', 'Tivi Xiaomi E55A Tràn Màn Hình', 11490000, 10, '03', 'ffhdf-01.jpg', 'Tivi Xiaomi Tivi Xiaomi E55A tràn màn hình với thiết kế viền màn hình siêu mỏng, đơn giản mà cực kì bắt mắt giúp không gian nhà của bạn trở nên đẹp và hoàn mỹ hơn. Chân đế chữ V chắc chắn.'),
('TV2', 'Tivi Xiaomi E65A Tràn Màn Hình', 15990000, 49, '03', 'ccc-01.jpg', 'Tivi Xiaomi Tivi Xiaomi E65A tràn màn hình với thiết kế viền màn hình siêu mỏng, đơn giản mà cực kì bắt mắt giúp không gian nhà của bạn trở nên đẹp và hoàn mỹ hơn. Chân đế chữ V chắc chắn.'),
('TV3', 'Tivi Xiaomi 75″ TV 4S', 22990000, 12, '03', 'dfbdfgdf-01.jpg', 'Phiên bản Trung Quốc Bản gốc Xiaomi TV 4S 75 inch 4K HDR Patch Hệ thống giọng nói thông minh Điều khiển từ xa bằng giọng nói Giao diện phong phú '),
('TV4', 'Tivi Xiaomi 75″ TV 4', 34990000, 80, '03', 'ffhdf-01 (2).jpg', 'Xiaomi Mi Smart TV 4 75 Inch Không dây AI Thông minh Truyền hình bằng giọng nói 4K HDR 2GB + 32GB RAM');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `MSKH` varchar(5) NOT NULL,
  `HoTenKH` varchar(50) NOT NULL,
  `DiaChi` varchar(50) NOT NULL,
  `SoDienThoai` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `MSNV` varchar(5) NOT NULL,
  `HoTenNV` varchar(50) NOT NULL,
  `ChucVu` varchar(50) NOT NULL,
  `DiaChi` varchar(50) NOT NULL,
  `SoDienThoai` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`MSNV`, `HoTenNV`, `ChucVu`, `DiaChi`, `SoDienThoai`) VALUES
('admin', 'admin', 'Admin', 'Cần Thơ', '0123456789');

-- --------------------------------------------------------

--
-- Table structure for table `nhomhanghoa`
--

CREATE TABLE `nhomhanghoa` (
  `MaNhom` varchar(5) NOT NULL,
  `TenNhom` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nhomhanghoa`
--

INSERT INTO `nhomhanghoa` (`MaNhom`, `TenNhom`) VALUES
('01', 'Điện Thoại'),
('02', 'Laptop'),
('03', 'Smart Tivi'),
('04', 'Loa & Tai Nghe'),
('05', 'Pin & Sạc Dự Phòng'),
('06', 'Camera'),
('07', 'Thiết Bị Mạng'),
('08', 'Thiết Bị Cho Sức Khỏe'),
('09', 'Phụ Kiện Khác');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitietdathang`
--
ALTER TABLE `chitietdathang`
  ADD PRIMARY KEY (`SoDonDH`,`MSHH`),
  ADD KEY `MSHH` (`MSHH`);

--
-- Indexes for table `dathang`
--
ALTER TABLE `dathang`
  ADD PRIMARY KEY (`SoDonDH`),
  ADD KEY `MSKH` (`MSKH`),
  ADD KEY `MSNV` (`MSNV`);

--
-- Indexes for table `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD PRIMARY KEY (`MSHH`),
  ADD KEY `MaNhom` (`MaNhom`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MSKH`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`MSNV`);

--
-- Indexes for table `nhomhanghoa`
--
ALTER TABLE `nhomhanghoa`
  ADD PRIMARY KEY (`MaNhom`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitietdathang`
--
ALTER TABLE `chitietdathang`
  ADD CONSTRAINT `chitietdathang_ibfk_1` FOREIGN KEY (`MSHH`) REFERENCES `hanghoa` (`MSHH`);

--
-- Constraints for table `dathang`
--
ALTER TABLE `dathang`
  ADD CONSTRAINT `dathang_ibfk_1` FOREIGN KEY (`SoDonDH`) REFERENCES `chitietdathang` (`SoDonDH`),
  ADD CONSTRAINT `dathang_ibfk_2` FOREIGN KEY (`SoDonDH`) REFERENCES `chitietdathang` (`SoDonDH`),
  ADD CONSTRAINT `dathang_ibfk_3` FOREIGN KEY (`MSKH`) REFERENCES `khachhang` (`MSKH`),
  ADD CONSTRAINT `dathang_ibfk_4` FOREIGN KEY (`MSNV`) REFERENCES `nhanvien` (`MSNV`);

--
-- Constraints for table `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD CONSTRAINT `hanghoa_ibfk_1` FOREIGN KEY (`MaNhom`) REFERENCES `nhomhanghoa` (`MaNhom`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
