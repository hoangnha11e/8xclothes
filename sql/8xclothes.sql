-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 05, 2025 lúc 02:09 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `8xclothes`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phanloai`
--

CREATE TABLE `phanloai` (
  `idphanloai` int(10) NOT NULL,
  `tenphanloai` varchar(20) NOT NULL,
  `nhomphanloai` varchar(255) NOT NULL,
  `hinhanhphanloai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `phanloai`
--

INSERT INTO `phanloai` (`idphanloai`, `tenphanloai`, `nhomphanloai`, `hinhanhphanloai`) VALUES
(20, 'Áo phông/thun', 'Áo', 'ms-1-compressed-d05c4775-25ae-432d-90e3-699aa981534b.png'),
(21, 'Áo nỉ/hoodie', 'Áo', '8.png'),
(22, 'Áo khoác', 'Áo', 'ms2-1.png'),
(24, 'Áo len', 'Áo', '1.png'),
(25, 'Quần jeans', 'Quần', '1 (3).png'),
(26, 'Quần nỉ', 'Quần', '1 (2).png'),
(27, 'Quần âu', 'Quần', 'mt3-compressed-1.png'),
(30, 'Quần short', 'Quần', '4757421287a23afc63b3.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `idsanpham` int(11) NOT NULL,
  `tenphanloai` varchar(255) NOT NULL,
  `tensanpham` varchar(255) NOT NULL,
  `masanpham` varchar(255) NOT NULL,
  `giasanpham` decimal(11,2) NOT NULL,
  `mausanpham` varchar(255) NOT NULL,
  `sizesanpham` varchar(255) NOT NULL,
  `soluongsanpham` int(11) NOT NULL,
  `motasanpham` text NOT NULL,
  `hinhanhsanpham` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`idsanpham`, `tenphanloai`, `tensanpham`, `masanpham`, `giasanpham`, `mausanpham`, `sizesanpham`, `soluongsanpham`, `motasanpham`, `hinhanhsanpham`) VALUES
(61, 'Áo phông/thun', 'Zip Polo Shirt', 'APT00001', 20.00, 'Đen,Trắng,Đỏ', 'S,M,L', 60, 'Form basic mới. Graphic được decal mặt trước áo, mặt sau được in logo dập nổi. Logo NOW in nổi ở tay áo. Chất liệu: Cotton 2 chiều.', 'mt-red-compressed.png'),
(62, 'Áo phông/thun', 'Puff N Tee', 'APT00002', 29.00, 'Đen,Trắng,Đỏ', 'S,M,L', 35, 'Form basic mới. Graphic được decal mặt trước áo, mặt sau được in logo dập nổi. Logo NOW in nổi ở tay áo. Chất liệu: Cotton 2 chiều', '01-red-compressed.png'),
(63, 'Áo phông/thun', 'Patch Tee', 'APT00003', 33.00, 'Đen,Trắng,Xanh', 'S,L,XL', 28, 'Form basic mới. Graphic được in kéo lụa mặt trước áo, mặt sau được in logo dập nổi. Logo NOW thêu nổi ở tay áo, Logo thân áo. Chất liệu: Cotton 2 chiều', 'ms-10-compressed-5.png'),
(64, 'Áo phông/thun', 'Town Tee', 'APT00004', 34.00, 'Đen,Trắng,Xanh', 'S,M,XL', 23, 'Form basic mới. Graphic được in kéo lụa mặt trước áo, mặt sau được in logo dập nổi. Logo NOW thêu nổi ở tay áo, Logo thân áo. Chất liệu: Cotton 2 chiều', 'mt-9-compressed-2.png'),
(65, 'Áo nỉ/hoodie', 'Clownz Corduroy Hood Jacket', 'ANH00001', 39.00, 'Đen,Trắng,Xanh', 'S,M,L', 54, 'Cảm hứng thiết kế : khóa 2 chiều tiện lợi, chất liệu nhung tăm, có thêm lót 1 lớp vải gió giúp áo không bị quá nặng nhưng vẫn rất ấm áp, phù hợp với thời tiết mùa xuân. Với kiểu dáng thiết kế basic, mặt trước được thêu chữ ClownZ tinh tế.', '3-4-16843b42-3fd4-4a5e-a269-62c0f31b0dde.png'),
(66, 'Áo nỉ/hoodie', 'Clownz Grunge Smiley Hoodie', 'ANH00002', 35.00, 'Đen,Trắng,Xanh', 'S,M,XL', 54, 'Mẫu hoodie đầu tiên trong mùa F/W 2024 của ClownZ, sử dụng vải nỉ bông 400gsm đc giặt wash và xử lý bề mặt tạo nên hiệu ứng đặc biệt, kết hợp với hình in overprint ấn tượng ở cả mặt trước và sau của áo. Phối màu nâu wash trendy đi cùng với màu đen của mực in tạo ra vibe grunge cá tính mà ko kém phần thời trang và dễ phối đồ.', 'dsc-5991.png'),
(67, 'Áo nỉ/hoodie', 'Clownz Number 2 Hoodie', 'ANH00003', 45.00, 'Đen,Trắng,Đỏ', 'S,L,XL', 65, 'Cảm hứng thiết kế : Mẫu hoodie với cảm hứng từ con số 2 trong số 22 của ClownZ, với chi tiết số 2 được xuất hiện ấn tượng, được thêu đáp bằng vải pheo trên phần thân trước. Đi kèm là các chi tiết hình in ở mặt trước và sau của áo, phối cùng màu với màu của số. Số 2 là một con số giàu ý nghĩa, thường gắn liền với các khái niệm như sự cân bằng, hài hòa, hợp tác và mối quan hệ song song. Và với 2 phối màu đen và xám tiêu cực dễ phối, chắc chắn đây sẽ là một sản phẩm độc đáo trong tủ đồ của các bạn trong mùa đông năm nay', 'dsc02087-copy.png'),
(69, 'Áo nỉ/hoodie', 'Clownz Basic 4 Life Hoodie - The Fun', 'ANH00004', 40.00, 'Đen,Trắng,Đỏ', 'S,M,L', 56, 'Chất vải nỉ bông 300 gsm với handfeel mềm mại, giống như có 1 lớp nhung ở trên bề mặt, mặt sau được cào bông, đảm bảo giữ ấm tốt nhất cho người sử dụng. ClownZ tin rằng đây sẽ là chất liệu phù hợp nhất đối với dòng basic hoodie này của bọn mình, chứng minh qua rất nhiều mùa Fall Winter trước đây.', '4-ff2326b0-62e2-4e20-89e9-f48ccb43629b.png'),
(70, 'Áo khoác', 'Button Windbreaker Jacket', 'AKH00001', 45.00, 'Đen,Trắng,Xanh', 'S,L,XL', 46, 'Form boxy. Branding được in ở mặt trước và sau của áo. Khoá kéo zip. Logo NOW, có dây rút ở thân áo. Chất liệu: Dù và lớp lót lưới.', 'mt-10-compressed-2.png'),
(72, 'Áo khoác', 'Nylon Puffer Jacket', 'AKH00003', 99.00, 'Đen,Trắng,Đỏ', 'S,L', 11, 'Khi mùa lạnh đến gần, Ngôi nhà sử dụng các vật liệu thủ công chất lượng cao, với kết cấu mềm mại và khả năng giữ ấm. Chiếc áo khoác phồng vừa vặn thông thường này được làm từ chất liệu nylon nhẹ có in họa tiết Gucci dạng pixel trên toàn thân. Mũ trùm đầu có thể tháo rời đi kèm dây rút để tăng tính linh hoạt về kiểu dáng.', '794825_Z8BTD_4032_001_100_0000_Light-Nylon-puffer-jacket.png'),
(73, 'Áo khoác', 'Reversible Gg Ripstop Nylon Jacket', 'AKH00002', 99.00, 'Đen,Trắng', 'M,L', 20, 'Bộ sưu tập Cruise 2024 dành cho nam giới mang phong cách hiện đại. Được làm từ nylon ripstop GG màu đen và xám, chiếc áo khoác hai mặt khi làm nhiệm vụ này để lộ mũ trùm đầu ẩn và miếng vá bằng da.', '770276_Z8BPL_1043_001_100_0000_Light-Reversible-GG-ripstop-nylon-jacket.png'),
(74, 'Áo khoác', 'Wool Jacket With Gg Shadow', 'AKH00004', 99.00, 'Đen,Trắng,Đỏ', 'M,L,XL', 8, 'Giám đốc sáng tạo Sabato De Sarno tái tạo lại tủ quần áo thiết yếu của nam giới cho bộ sưu tập Thu Đông 2024, với tính dễ mặc và vừa vặn trở thành tuyên bố quan trọng. Được chế tác từ len đỏ và trắng Gucci Rosso Ancora, chiếc áo khoác này có chữ lồng GG với hiệu ứng quang học gợi nhớ di sản của House.', '803984_ZARR8_6320_001_100_0000_Light-Wool-jacket-with-GG-Shadow.png'),
(75, 'Áo len', 'Wool Sweater With Gg Intarsia', 'ALE00001', 66.00, 'Đen,Trắng,Xanh', 'S,M,L,XL', 46, '\r\nLấy cảm hứng từ chữ lồng của người sáng lập Guccio Gucci, họa tiết GG tiếp tục là xu hướng được yêu thích nhất của Ngôi nhà. Được chế tác từ chất liệu len dệt kim mềm mại, chiếc áo len cổ tròn này để lộ lớp áo intarsia GG toàn thân táo bạo với nhiều sắc thái xanh nước biển và xanh lam khác nhau.', '770509_XKDSJ_4735_001_100_0000_Light-Wool-sweater-with-GG-intarsia.png'),
(76, 'Áo len', '1 / 6  Embroidered Wool Cashmere Sweater', 'ALE00002', 66.00, 'Đen,Trắng,Xanh', 'S,M,XL', 45, '\r\nNhững món đồ kinh điển như đồ dệt kim mềm mại và áo sơ mi polo xuyên suốt bộ sưu tập Cruise 2025 nổi bật với những chi tiết tinh tế nâng tầm vẻ ngoài thường ngày. Chiếc áo len cổ tròn này được làm từ len cashmere dệt kim và có họa tiết thêu Double G.', '815007_XKEK4_1078_001_100_0000_Light-Embroidered-wool-cashmere-sweater.png'),
(77, 'Áo len', 'Embroidered Wool Knit Sweater', 'ALE00003', 88.00, 'Đen,Trắng,Xanh', 'S,M,L', 65, '\r\nMã nhà của Gucci tiếp tục phát triển cho mùa giải mới trên các mẫu áo thi đấu. Chiếc áo len này được chế tác từ len dệt kim và được tạo điểm nhấn bằng hình thêu dệt kim của Gucci.', '811405_XKEKO_1200_001_100_0000_Light-Embroidered-wool-knit-sweater.png'),
(78, 'Áo len', 'Wool Cashmere Argyle Knit Cardigan', 'ALE00004', 35.00, 'Đen,Trắng,Xanh', 'L,XL', 35, 'Những món đồ kinh điển như đồ dệt kim mềm mại và áo sơ mi polo xuyên suốt bộ sưu tập Cruise 2025 nổi bật với những chi tiết tinh tế nâng tầm vẻ ngoài thường ngày. Chiếc áo len cổ chữ V này được làm bằng len cashmere argyle đan với chi tiết intarsia của Gucci.', '806194_XKEKX_1093_001_100_0000_Light-Wool-cashmere-argyle-knit-cardigan.png'),
(79, 'Áo phông/thun', 'Friends Tee', 'APT00005', 33.00, 'Đen,Trắng,Đỏ', 'S,M,XL', 22, 'Form basic mới. Graphic được in kéo lụa mặt trước áo, mặt sau được in logo dập nổi. Logo NOW thêu nổi ở tay áo, Logo thân áo. Chất liệu: Cotton 2 chiều', 'mt-9-compressed (1).png'),
(80, 'Áo phông/thun', 'Glowing Logo Tee', 'APT00006', 22.00, 'Đen,Trắng,Xanh', 'S,M,L', 30, 'Form basic mới. Graphic được in kéo lụa mặt trước áo, mặt sau được in logo dập nổi. Logo NOW thêu nổi ở tay áo, Logo thân áo. Chất liệu: Cotton 2 chiều', 'mt-8-compressed-3.png'),
(81, 'Áo phông/thun', 'Zoo Park Tee', 'APT00007', 25.00, 'Đen,Trắng,Xanh', 'S,M,XL', 35, 'Form basic mới. Graphic được in kéo lụa mặt trước áo, mặt sau được in logo dập nổi. Logo NOW thêu nổi ở tay áo, Logo thân áo. Chất liệu: Cotton 2 chiều', 'mt-1-compressed-b71faef5-dd3f-4983-87ab-6b0f7f0f5af6.png'),
(82, 'Áo phông/thun', 'Uranus Tee', 'APT00008', 36.00, 'Đen,Trắng,Xanh', 'S,M,L', 47, 'Form basic mới. Graphic được in kéo lụa mặt trước áo. Logo NOW thêu nổi ở tay áo, Logo thân áo. Chất liệu: Cotton 2 chiều', 'mt-5-compressed-1.png'),
(83, 'Áo nỉ/hoodie', 'Printed Cotton Jersey Hooded Sweatshirt', 'ANH00005', 99.00, 'Đen,Trắng,Đỏ', 'S,L,XL', 17, 'Mã nhà của Gucci tiếp tục phát triển cho mùa giải mới trên các mẫu áo thi đấu. Chiếc áo nỉ vừa vặn thông thường này được trình bày trong một chiếc áo thun cotton nhiều lớp màu bạc và được xác định bằng hình in Gucci Interlocking G và Web.', '788771_XJG1X_1275_001_100_0000_Light-Printed-cotton-jersey-hooded-sweatshirt.png'),
(84, 'Áo nỉ/hoodie', 'Embroidered Jersey Hooded Sweatshirt', 'ANH00006', 34.00, 'Đen,Trắng,Xanh', 'S,M,L', 45, 'Mã nhà của Gucci tiếp tục phát triển cho mùa giải mới trên các mẫu áo thi đấu. Chiếc áo nỉ trùm đầu cỡ lớn này được chế tác từ áo jersey cotton và để lộ hình thêu Gucci Interlocking G và Web với pha lê dán nhiệt.', '811358_XJG37_1056_001_100_0000_Light-Embroidered-jersey-hooded-sweatshirt.png'),
(85, 'Áo nỉ/hoodie', 'Cotton Jersey Hooded Sweatshirt', 'ANH00007', 88.00, 'Đen,Trắng,Xanh', 'M,L,XL', 43, 'Mã nhà của Gucci tiếp tục phát triển cho mùa giải mới trên các mẫu áo thi đấu. Chiếc áo nỉ có mũ trùm đầu này được làm bằng vải jersey cotton chải kỹ và được xác định bằng đường viền Web màu xanh lá cây và màu đỏ cũng như hình thêu Gucci.', '768444_XJG2X_1160_001_100_0000_Light-Cotton-jersey-hooded-sweatshirt.png'),
(86, 'Áo nỉ/hoodie', 'Printed Jersey Zip Sweatshirt', 'ANH00008', 88.00, 'Đen,Trắng,Đỏ', 'S,M,XL', 88, 'Lấy cảm hứng từ chữ lồng của người sáng lập Guccio Gucci, họa tiết GG tiếp tục là xu hướng được yêu thích nhất của Ngôi nhà. Chiếc áo nỉ có mũ trùm đầu vừa vặn này được làm từ vải jersey viscose và nổi bật với họa tiết in đàn GG trên khắp cơ thể. Chi tiết vòng lặp Web màu xanh lá cây và màu đỏ hoàn thiện hình bóng.', '819275_XJG2I_1000_001_100_0000_Light-Printed-jersey-zip-sweatshirt.png');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `phanloai`
--
ALTER TABLE `phanloai`
  ADD PRIMARY KEY (`idphanloai`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`idsanpham`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `phanloai`
--
ALTER TABLE `phanloai`
  MODIFY `idphanloai` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `idsanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
