-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th7 29, 2018 lúc 10:02 AM
-- Phiên bản máy phục vụ: 5.7.21
-- Phiên bản PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_banhang`
--

-- --------------------------------------------------------

INSERT INTO `bill_detail` (`id`, `id_bill`, `id_product`, `quantity`, `unit_price`, `created_at`, `updated_at`) VALUES
(1, 1, 4, 1, 160000.00, '2017-07-22 21:46:05', '2017-07-22 21:46:05'),
(2, 2, 6, 1, 200000.00, '2018-07-21 00:29:31', '2018-07-21 00:29:31'),
(3, 2, 11, 1, 200000.00, '2018-07-21 00:29:31', '2018-07-21 00:29:31'),
(4, 3, 27, 1, 120000.00, '2018-07-21 00:20:07', '2018-07-21 00:20:07'),
(5, 3, 28, 1, 100000.00, '2018-07-21 00:20:07', '2018-07-21 00:20:07'),
(6, 3, 12, 1, 300000.00, '2018-07-21 00:20:07', '2018-07-21 00:20:07');

INSERT INTO `bills` (`id`, `id_customer`, `date_order`, `total`, `note`, `created_at`, `updated_at`) VALUES
(1, 3, '2018-07-23', 160000.00, 'k', '2017-07-22 21:46:05', '2018-07-22 21:46:05'),
(2, 4, '2018-07-21', 400000.00, 'Vui lòng giao hàng trước 5h', '2018-07-21 00:29:31', '2018-07-21 00:29:31'),
(3, 5, '2018-07-21', 520000.00, 'Vui lòng chuyển đúng hạn', '2018-07-21 00:20:07', '2018-07-21 00:20:07');

INSERT INTO `customer` (`id`, `name`, `gender`, `email`, `address`, `phone_number`, `note`, `created_at`, `updated_at`) VALUES
(5, 'phúc', 'Nam', 'phuc96@gmail.com', 'Lê Thị Riêng, Quận 1', '234567890', 'không chú', '2018-07-21 00:16:09', '2018-07-21 00:16:09'),
(4, 'Khoa', 'Nam', 'khoa@gmail.com', 'Lê thị riêng', '1234567890', 'Vui lòng chuyển đúng hạn', '2018-07-21 00:20:07', '2018-07-21 00:20:07'),
(3, 'Hương', 'Nữ', 'huongnguyen96@gmail.com', 'Lê Thị Riêng, Quận 1', '23456789', 'Vui lòng giao hàng trước 5h', '2018-07-21 00:29:31', '2018-07-21 00:29:31'),
(2, 'phi', 'nam', 'phi@gmail.com', 'Lê thị riêng', '9923435', 'k', '2018-07-22 21:46:05', '2018-07-22 21:46:05'),
(1, 'lan', 'Nữ', 'lan@gmail.com', 'quận 2', '01283483', 'e', '2018-07-24 00:14:32', '2018-07-24 00:14:32');

INSERT INTO `products` (`id`, `name`, `id_type`, `description`, `unit_price`, `image`, `unit`, `new`, `created_at`, `updated_at`) VALUES
(1, 'Bánh Crepe Sầu riêng', 5, 'Bánh crepe sầu riêng nhà làm', 150000.00, '1430967449-pancake-sau-rieng-6.jpg', 'hộp', 1, '2016-10-25 20:00:16', '2016-10-24 15:11:00'),
(2, 'Bánh Crepe Chocolate', 5, 'Bánh nhà làm', 180000.00, 'crepe-chocolate.jpg', 'hộp', 1, '2016-10-25 20:00:16', '2016-10-24 15:11:00'),
(3, 'Bánh Crepe Sầu riêng - Chuối', 5, 'Bánh nhà làm', 150000.00, 'crepe-chuoi.jpg', 'hộp', 0, '2016-10-25 20:00:16', '2016-10-24 15:11:00'),
(4, 'Bánh Crepe Đào', 5, 'Bánh nhà làm', 160000.00, 'crepe-dao.jpg', 'hộp', 0, '2016-10-25 20:00:16', '2016-10-24 15:11:00'),
(5, 'Bánh Crepe Dâu', 5, 'Bánh nhà làm', 160000.00, 'crepedau.jpg', 'hộp', 0, '2016-10-25 20:00:16', '2016-10-24 15:11:00'),
(6, 'Bánh Crepe Pháp', 5, 'Bánh nhà làm', 200000.00, 'crepe-phap.jpg', 'hộp', 0, '2016-10-25 20:00:16', '2016-10-24 15:11:00'),
(7, 'Bánh Crepe Táo', 5, 'Bánh nhà làm', 160000.00, 'crepe-tao.jpg', 'hộp', 1, '2016-10-25 20:00:16', '2016-10-24 15:11:00'),
(8, 'Bánh Crepe Trà xanh', 5, 'Bánh nhà làm', 160000.00, 'crepe-traxanh.jpg', 'hộp', 0, '2016-10-25 20:00:16', '2016-10-24 15:11:00'),
(9, 'Bánh Crepe Sầu riêng và Dứa', 5, 'Bánh nhà làm', 160000.00, 'saurieng-dua.jpg', 'hộp', 0, '2016-10-25 20:00:16', '2016-10-24 15:11:00'),
(10, 'Bánh Gato Trái cây Việt Quất', 3, 'Bánh nhà làm', 250000.00, '544bc48782741.png', 'cái', 0, '2016-10-11 19:00:00', '2016-10-26 19:24:00'),
(11, 'Bánh sinh nhật rau câu trái cây', 3, 'Bánh nhà làm', 200000.00, '1111.jpg', 'cái', 0, '2016-10-11 19:00:00', '2016-10-26 19:24:00'),
(12, 'Bánh kem Chocolate Dâu', 3, 'Bánh nhà làm', 300000.00, 'banh kem sinh nhat.jpg', 'cái', 1, '2016-10-11 19:00:00', '2016-10-26 19:24:00'),
(13, 'Bánh kem Dâu III', 3, 'Bánh nhà làm', 300000.00, 'Banh-kem.jpg', 'cái', 0, '2016-10-11 19:00:00', '2016-10-26 19:24:00'),
(14, 'Bánh kem Dâu I', 3, 'Bánh nhà làm', 350000.00, 'banhkem-dau.jpg', 'cái', 1, '2016-10-11 19:00:00', '2016-10-26 19:24:00'),
(15, 'Bánh trái cây II', 3, 'Bánh nhà làm', 150000.00, 'banhtraicay.jpg', 'hộp', 0, '2016-10-11 19:00:00', '2016-10-26 19:24:00'),
(16, 'Apple Cake', 3, 'Bánh nhà làm', 250000.00, 'Fruit-Cake_7979.jpg', 'cai', 0, '2016-10-11 19:00:00', '2016-10-26 19:24:00'),
(17, 'Bánh ngọt nhân cream táo', 2, 'Bánh nhà làm', 180000.00, '20131108144733.jpg', 'hộp', 0, '2016-10-12 19:20:00', '2016-10-18 20:20:00'),
(18, 'Bánh Chocolate Trái cây', 2, 'Bánh nhà làm', 150000.00, 'Fruit-Cake_7976.jpg', 'hộp', 1, '2016-10-12 19:20:00', '2016-10-18 20:20:00'),
(19, 'Bánh Chocolate Trái cây II', 2, 'Bánh nhà làm', 150000.00, 'Fruit-Cake_7981.jpg', 'hộp', 0, '2016-10-12 19:20:00', '2016-10-18 20:20:00'),
(20, 'Peach Cake', 2, 'Bánh nhà làm', 160000.00, 'Peach-Cake_3294.jpg', 'cái', 0, '2016-10-12 19:20:00', '2016-10-18 20:20:00'),
(21, 'Bánh bông lan trứng muối I', 1, 'Bánh nhà làm', 160000.00, 'banhbonglantrung.jpg', 'hộp', 1, '2016-10-12 19:20:00', '2016-10-18 20:20:00'),
(22, 'Bánh bông lan trứng muối II', 1, 'Bánh nhà làm', 180000.00, 'banhbonglantrungmuoi.jpg', 'hộp', 0, '2016-10-12 19:20:00', '2016-10-18 20:20:00'),
(23, 'Bánh French', 1, 'Bánh nhà làm', 180000.00, 'banh-man-thu-vi-nhat-1.jpg', 'hộp', 0, '2016-10-12 19:20:00', '2016-10-18 20:20:00'),
(24, 'Bánh mì Australia', 1, 'Bánh nhà làm', 80000.00, 'dung-khoai-tay-lam-banh-gato-man-cuc-ngon.jpg', 'hộp', 0, '2016-10-12 19:20:00', '2016-10-18 20:20:00'),
(25, 'Bánh mặn thập cẩm', 1, 'Bánh nhà làm', 50000.00, 'Fruit-Cake.png', 'hộp', 0, '2016-10-12 19:20:00', '2016-10-18 20:20:00'),
(26, 'Bánh Muffins trứng', 1, '', 100000.00, 'maxresdefault.jpg', 'hộp', 0, '2016-10-12 19:20:00', '2016-10-18 20:20:00'),
(27, 'Bánh Scone Peach Cake', 1, '', 120000.00, 'Peach-Cake_3300.jpg', 'hộp', 1, '2016-10-12 19:20:00', '2016-10-18 20:20:00'),
(28, 'Bánh mì Loaf I', 1, '', 100000.00, 'sli12.jpg', 'hộp', 0, '2016-10-12 19:20:00', '2016-10-18 20:20:00'),
(29, 'Bánh kem Chocolate Dâu I', 4, '', 380000.00, 'sli12.jpg', 'cái', 1, '2016-10-12 19:20:00', '2016-10-18 20:20:00'),
(30, 'Bánh kem Trái cây I', 4, '', 380000.00, 'Fruit-Cake.jpg', 'cái', 0, '2016-10-12 19:20:00', '2016-10-18 20:20:00'),
(31, 'Bánh kem Trái cây II', 4, '', 380000.00, 'Fruit-Cake_7971.jpg', 'cái', 0, '2016-10-12 19:20:00', '2016-10-18 20:20:00'),
(32, 'Bánh kem Doraemon', 4, '', 280000.00, 'p1392962167_banh74.jpg', 'cái', 1, '2016-10-12 19:20:00', '2016-10-18 20:20:00'),
(33, 'Bánh kem Caramen Pudding', 4, '', 280000.00, 'Caramen-pudding636099031482099583.jpg', 'cái', 1, '2016-10-12 19:20:00', '2016-10-18 20:20:00'),
(34, 'Bánh kem Chocolate Fruit', 4, '', 320000.00, 'chocolate-fruit636098975917921990.jpg', 'cái', 1, '2016-10-12 19:20:00', '2016-10-18 20:20:00'),
(35, 'Bánh kem Coffee Chocolate GH6', 4, '', 320000.00, 'COFFE-CHOCOLATE636098977566220885.jpg', 'cái', 0, '2016-10-12 19:20:00', '2016-10-18 20:20:00'),
(36, 'Bánh kem Mango Mouse', 4, '', 320000.00, 'mango-mousse-cake.jpg', 'cái', 1, '2016-10-12 19:20:00', '2016-10-18 20:20:00'),
(37, 'Bánh kem Matcha Mouse', 4, '', 350000.00, 'MATCHA-MOUSSE.jpg', 'cái', 0, '2016-10-12 19:20:00', '2016-10-18 20:20:00'),
(38, 'Bánh kem Flower Fruit', 4, '', 350000.00, 'flower-fruits636102461981788938.jpg', 'cái', 0, '2016-10-12 19:20:00', '2016-10-18 20:20:00'),
(39, 'Bánh kem Strawberry Delight', 4, '', 350000.00, 'strawberry-delight636102445035635173.jpg', 'cái', 0, '2016-10-12 19:20:00', '2016-10-18 20:20:00'),
(40, 'Bánh kem Raspberry Delight', 4, '', 350000.00, 'raspberry.jpg', 'cái', 0, '2016-10-12 19:20:00', '2016-10-18 20:20:00'),
(41, 'Beefy Pizza', 6, 'Thịt bò xay, ngô, sốt BBQ, phô mai mozzarella', 150000.00, '40819_food_pizza.jpg', 'cái', 0, '2016-10-12 19:20:00', '2016-10-18 20:20:00'),
(42, 'Hawaii Pizza', 6, 'Sốt cà chua, ham , dứa, pho mai mozzarella', 120000.00, 'hawaiian paradise_large-900x900.jpg', 'cái', 1, '2016-10-12 19:20:00', '2016-10-18 20:20:00'),
(43, 'Smoke Chicken Pizza', 6, 'Gà hun khói,nấm, sốt cà chua, pho mai mozzarella.', 120000.00, 'chicken black pepper_large-900x900.jpg', 'cái', 0, '2016-10-12 19:20:00', '2016-10-18 20:20:00'),
(44, 'Sausage Pizza', 6, 'Xúc xích klobasa, Nấm, Ngô, sốtcà chua, pho mai Mozzarella.', 120000.00, 'pizza-miami.jpg', 'cái', 0, '2016-10-12 19:20:00', '2016-10-18 20:20:00'),
(45, 'Ocean Pizza', 6, 'Tôm , mực, xào cay,ớt xanh, hành tây, cà chua, phomai mozzarella.', 120000.00, 'seafood curry_large-900x900.jpg', 'cái', 0, '2016-10-12 19:20:00', '2016-10-18 20:20:00'),
(46, 'All Meaty Pizza', 6, 'Ham, bacon, chorizo, pho mai mozzarella.', 140000.00, 'all1).jpg', 'cái', 0, '2016-10-12 19:20:00', '2016-10-18 20:20:00'),
(47, 'Tuna Pizza', 6, 'Cá Ngừ, sốt Mayonnaise,sốt càchua, hành tây, pho mai Mozzarella', 140000.00, '54eaf93713081_-_07-germany-tuna.jpg', 'cái', 0, '2016-10-12 19:20:00', '2016-10-18 20:20:00'),
(48, 'Bánh su kem nhân dừa', 7, '', 120000.00, 'maxresdefault.jpg', 'cái', 0, '2016-10-12 19:20:00', '2016-10-18 20:20:00'),
(49, 'Bánh su kem sữa tươi', 7, '', 120000.00, 'sukem.jpg', 'cái', 0, '2016-10-12 19:20:00', '2016-10-18 20:20:00'),
(50, 'Bánh su kem sữa tươi chiên giòn', 7, '', 150000.00, '1434429117-banh-su-kem-chien-20.jpg', 'hộp', 0, '2016-10-12 19:20:00', '2016-10-18 20:20:00'),
(51, 'Bánh su kem dâu sữa tươi', 7, '', 150000.00, 'sukemdau.jpg', 'hộp', 0, '2016-10-12 19:20:00', '2016-10-18 20:20:00'),
(52, 'Bánh su kem bơ sữa tươi', 7, '', 150000.00, 'He-Thong-Banh-Su-Singapore-Chewy-Junior.jpg', 'hộp', 0, '2016-10-12 19:20:00', '2016-10-18 20:20:00'),
(53, 'Bánh su kem nhân trái cây sữa tươi', 7, '', 150000.00, 'foody-banh-su-que-635930347896369908.jpg', 'hộp', 1, '2016-10-12 19:20:00', '2016-10-18 20:20:00'),
(54, 'Bánh su kem cà phê', 7, '', 150000.00, 'banh-su-kem-ca-phe-1.jpg', 'hộp', 0, '2016-10-12 19:20:00', '2016-10-18 20:20:00'),
(55, 'Bánh su kem phô mai', 7, '', 150000.00, '50020041-combo-20-banh-su-que-pho-mai-9.jpg', 'hộp', 0, '2016-10-12 19:20:00', '2016-10-18 20:20:00'),
(56, 'Bánh su kem sữa tươi chocolate', 7, '', 150000.00, 'combo-20-banh-su-que-kem-sua-tuoi-phu-socola.jpg', 'hộp', 1, '2016-10-12 19:20:00', '2016-10-18 20:20:00'),
(57, 'Bánh Macaron Pháp', 2, 'Thưởng thức macaron, người ta có thể tìm thấy từ những hương vị truyền thống như mâm xôi, chocolate, cho đến những hương vị mới như nấm và trà xanh. Macaron với vị giòn tan của vỏ bánh, béo ngậy ngọt ngào của phần nhân, với vẻ ngoài đáng yêu và nhiều màu sắc đẹp mắt, đây là món bạn không nên bỏ qua khi khám phá nền ẩm thực Pháp.', 200000.00, 'Macaron9.jpg', '', 0, '2016-10-26 10:00:00', '2016-10-11 10:00:00'),
(58, 'Bánh Tiramisu - Italia', 2, 'Chỉ cần cắn một miếng, bạn sẽ cảm nhận được tất cả các hương vị đó hòa quyện cùng một chính vì thế người ta còn ví món bánh này là Thiên đường trong miệng của bạn', 200000.00, '234.jpg', '', 0, '2016-10-26 10:00:00', '2016-10-11 10:00:00'),
(59, 'Bánh Táo - Mỹ', 2, 'Bánh táo Mỹ với phần vỏ bánh mỏng, giòn mềm, ẩn chứa phần nhân táo thơm ngọt, điểm chút vị chua dịu của trái cây quả sẽ là một lựa chọn hoàn hảo cho những tín đồ bánh ngọt trên toàn thế giới.', 200000.00, '1234.jpg', '', 0, '2016-10-26 10:00:00', '2016-10-11 10:00:00'),
(60, 'Bánh Cupcake - Anh Quốc', 6, 'Những chiếc cupcake có cấu tạo gồm phần vỏ bánh xốp mịn và phần kem trang trí bên trên rất bắt mắt với nhiều hình dạng và màu sắc khác nhau. Cupcake còn được cho là chiếc bánh mang lại niềm vui và tiếng cười như chính hình dáng đáng yêu của chúng.', 150000.00, 'cupcake.jpg', 'cái', 1, NULL, NULL),
(61, 'Bánh Sachertorte', 6, 'Sachertorte là một loại bánh xốp được tạo ra bởi loại&nbsp;chocholate&nbsp;tuyệt hảo nhất của nước Áo. Sachertorte có vị ngọt nhẹ, gồm nhiều lớp bánh được làm từ ruột bánh mì và bánh sữa chocholate, xen lẫn giữa các lớp bánh là mứt mơ. Món bánh chocholate này nổi tiếng tới mức thành phố Vienna của Áo đã ấn định&nbsp;tổ chức một ngày Sachertorte quốc gia, vào 5/12 hằng năm', 250000.00, '111.jpg', 'cái', 0, NULL, NULL);

INSERT INTO `slide` (`id`, `link`, `image`, `created_at`, `updated_at`) VALUES
(1, '', 'banner1.jpg', NULL, NULL),
(2, '', 'banner2.jpg', NULL, NULL),
(3, '', 'banner3.jpg', NULL, NULL),
(4, '', 'banner4.jpg', NULL, NULL);

INSERT INTO `type_product` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Bánh mặn', 'Nếu từng bị mê hoặc bởi các loại tarlet ngọt thì chắn chắn bạn không thể bỏ qua những loại tarlet mặn. Ngoài hình dáng bắt mắt, lớp vở bánh giòn giòn cùng với nhân mặn như thịt gà, nấm, thị heo ,… của bánh sẽ chinh phục bất cứ ai dùng thử.', 'banh-man-thu-vi-nhat-1.jpg', NULL, NULL),
(2, 'Bánh ngọt', 'Bánh ngọt là một loại thức ăn thường dưới hình thức món bánh dạng bánh mì từ bột nhào, được nướng lên dùng để tráng miệng. Bánh ngọt có nhiều loại, có thể phân loại dựa theo nguyên liệu và kỹ thuật chế biến như bánh ngọt làm từ lúa mì, bơ, bánh ngọt dạng bọt biển. Bánh ngọt có thể phục vụ những mục đính đặc biệt như bánh cưới, bánh sinh nhật, bánh Giáng sinh, bánh Halloween..', '20131108144733.jpg', '2016-10-11 19:16:15', '2016-10-12 18:38:35'),
(3, 'Bánh trái cây', 'Bánh trái cây, hay còn gọi là bánh hoa quả, là một món ăn chơi, không riêng gì của Huế nhưng khi \"lạc\" vào mảnh đất Cố đô, món bánh này dường như cũng mang chút tinh tế, cầu kỳ và đặc biệt. Lấy cảm hứng từ những loại trái cây trong vườn, qua bàn tay khéo léo của người phụ nữ Huế, món bánh trái cây ra đời - ngọt thơm, dịu nhẹ làm đẹp lòng biết bao người thưởng thức.', 'banhtraicay.jpg', '2016-10-17 17:33:33', '2016-10-15 00:25:27'),
(4, 'Bánh kem', 'Với người Việt Nam thì bánh ngọt nói chung đều hay được quy về bánh bông lan – một loại tráng miệng bông xốp, ăn không hoặc được phủ kem lên thành bánh kem. Tuy nhiên, cốt bánh kem thực ra có rất nhiều loại với hương vị, kết cấu và phương thức làm khác nhau chứ không chỉ đơn giản là “bánh bông lan” chung chung đâu nhé!', 'banhkem.jpg', '2016-10-25 20:29:19', '2016-10-25 19:22:22'),
(5, 'Bánh crepe', 'Crepe là một món bánh nổi tiếng của Pháp, nhưng từ khi du nhập vào Việt Nam món bánh đẹp mắt, ngon miệng này đã làm cho biết bao bạn trẻ phải “xiêu lòng”', 'crepe.jpg', '2016-10-27 21:00:00', '2016-10-26 21:00:23'),
(6, 'Bánh Pizza', 'Pizza đã không chỉ còn là một món ăn được ưa chuộng khắp thế giới mà còn được những nhà cầm quyền EU chứng nhận là một phần di sản văn hóa ẩm thực châu Âu. Và để được chứng nhận là một nhà sản xuất pizza không hề đơn giản. Người ta phải qua đủ mọi các bước xét duyệt của chính phủ Ý và liên minh châu Âu nữa… tất cả là để đảm bảo danh tiếng cho món ăn này.', 'pizza.jpg', '2016-10-25 10:19:00', NULL),
(7, 'Bánh su kem', 'Bánh su kem là món bánh ngọt ở dạng kem được làm từ các nguyên liệu như bột mì, trứng, sữa, bơ.... đánh đều tạo thành một hỗn hợp và sau đó bằng thao tác ép và phun qua một cái túi để định hình thành những bánh nhỏ và cuối cùng được nướng chín. Bánh su kem có thể thêm thành phần Sô cô la để tăng vị hấp dẫn. Bánh có xuất xứ từ nước Pháp.', 'sukemdau.jpg', '2016-10-25 10:19:00', NULL);


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
