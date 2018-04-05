-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 04, 2018 lúc 01:42 PM
-- Phiên bản máy phục vụ: 10.1.30-MariaDB
-- Phiên bản PHP: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `catalog`
--

CREATE TABLE `catalog` (
  `id_catalog` int(11) NOT NULL,
  `name_catalog` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `id_quanngon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `catalog`
--

INSERT INTO `catalog` (`id_catalog`, `name_catalog`, `id_quanngon`) VALUES
(1, 'Món ăn truyền thống', 0),
(2, 'Món ăn giới trẻ', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chude`
--

CREATE TABLE `chude` (
  `id_chude` int(11) NOT NULL,
  `name_chude` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `review_chude` varchar(3000) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `image` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `href` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chude`
--

INSERT INTO `chude` (`id_chude`, `name_chude`, `review_chude`, `image`, `href`) VALUES
(1, 'Top món ăn ngon phải thử khi đến Hà Nội', 'review - món ăn Hà Nội', 'https://znews-photo-td.zadn.vn/w1024/Uploaded/jaroin/2017_01_05/hanh_sady.jpg', 'https://news.zing.vn/top-10-mon-an-ngon-phai-thu-khi-den-ha-noi-post711345.html'),
(2, 'Tiệm bánh kem ngon tại Hà Nội', 'bánh kem - Hà Nội', 'http://banhsinhnhatbadinh.iri.vn/uploads/kh_gianhang/406/images/b%C3%A1nh%20kem%20b%C3%A1nh%20sinh%20nh%E1%BA%ADt%20(25).jpg', 'http://toplist.vn/top-list/tiem-banh-sinh-nhat-ngon-va-chat-luong-nhat-ha-noi-12541.htm'),
(3, 'Ê răng với những món kem Hà Nội', 'Kem - Hà Nội', 'https://images.foody.vn/res/g18/179783/s800/foody-kem-trang-tien-tran-hung-dao-585-635870550896689885.jpg', 'https://lozi.vn/dinhquynh/30-quan-kem-ngon-tuyet-khong-the-khong-den-tai-ha-noi-1410012808635?utm_campaign=copy'),
(4, 'Những món ăn nhất định phải ăn ít nhất một lần trong đời', 'món ăn - review', 'https://tea-2.lozi.vn/v1/images/resized/kem-oc-que-144038-1456499727?w=480&type=o', 'https://lozi.vn/chamsockhachhanghanoi/30-mon-an-viet-nen-nem-thu-it-nhat-mot-lan-trong-doi-1404115807151?utm_campaign=copy'),
(5, 'Những quán \"buffet trái cây\" khiến giới trẻ thích mê', 'review - buffet trái cây', 'https://images.foody.vn/res/g20/190816/s800/foody-trai-cay-to-muc-thoai-mai-497-635844927678750653.jpg', 'https://www.foody.vn/bai-viet/hcm-diem-mat-nhung-quan-buffet-trai-cay-khien-gioi-tre-chao-dao-3132'),
(6, 'Những quán trà sữa được giới trẻ yêu thích vì có \"view\" đẹp', 'Review - trà sữa', 'http://1.bp.blogspot.com/-N7mh8kSVm2U/VJfhg_1KPtI/AAAAAAAAB7s/-sLISdL7I_o/s1600/7.jpg', 'https://www.foody.vn/bai-viet/me-nhu-dieu-do-6-quan-tra-sua-background-chat-ngay-ngat-ngay-sai-gon-12065');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id_Product` int(11) NOT NULL,
  `name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `review` varchar(3000) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `image_link` varchar(500) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `id_quanngon` int(11) NOT NULL,
  `id_catalog` int(11) NOT NULL,
  `view` int(11) NOT NULL DEFAULT '0',
  `href` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id_Product`, `name`, `review`, `address`, `image_link`, `id_quanngon`, `id_catalog`, `view`, `href`) VALUES
(1, 'DingTea', 'Nhắc đến trà sữa Đài Loan ngon nhất Hà Nội, Ding Tea là cái tên không thể bỏ qua. Sức hấp dẫn của thương hiệu này không chỉ đến từ hương vị trà thuần chất, không bị lẫn với bất kì loại trà sữa nào mà còn bởi Ding Tea Menu vô cùng đa dạng và phong phú. \r\nTrà sữa Ding Tea được đánh giá là gần giống nhất với hương vị trà sữa Đài Loan, đậm đà gây nghiện. Mỗi hương vị trà sữa lại có mùi và hương vị khác nhau, rõ rệt hương hoa quả tự nhiên, ngọt thanh chứ không sắc như khi dùng hương liệu. Dù nhiều loại nhưng khách quen vẫn yêu thích hương vị hồng trà sữa hay trà sữa socola hơn cả bởi hồng trà thanh, mát, đậm mùi trà xanh, trà sữa socola hơi đắng lại ngòn ngọt nơi đầu lưỡi.\r\n', '98 Vũ Trọng Phụng, Thanh Xuân Trung, Thanh Xuân, Hà Nội', 'https://images.foody.vn/res/g19/188127/s800/foody-ding-tea-to-hieu-588-636540377533021565.jpg', 1, 2, 0, 'dingtea.php'),
(2, 'Bánh trôi Tàu', 'Bánh trôi tàu luôn là một trong những món ăn đắt hàng nhất trong mùa đông giá rét. Với nước đường ngọt lịm và thơm mùi gừng, bánh trôi nhân vừng đen hoặc đậu xanh thơm lừng, bánh trôi tàu nóng hổi luôn làm cho những ngày mùa đông ấm áp hơn. Ngon dã man luôn.', 'Hàng Điếu, Hoàn Kiếm, Hà Nội', 'https://media.foody.vn/res/g14/132781/s800/foody-che-banh-troi-tau-hang-dieu-464-635860293121615949.jpg', 0, 1, 0, 'banhtroitau.php'),
(3, 'Bánh mỳ que', 'Bánh mì này có hình dáng thon dài giống một dạng que dài (kích cỡ có nhiều loại, ở Việt Nam thông dụng loại cỡ 2 ngón tay, dài khoảng 30 cm), bên trong bánh mì có quét pate, xịt tương ớt, nhồi thịt chà bông nên khi ăn vào thì giòn mềm và vị bùi của patê, cảm giác nóng giòn và có vị cay. Bánh mì que nổi tiếng bởi loại bột bánh mì và công thức làm bánh đặc biệt có độ giòn xốp đặc trưng. Bánh có hương vị pate thơm lừng và béo. Loại pate này được làm thủ công, khi ăn, vị cay của ớt quyện cùng pate làm nức mũi người ăn.\r\n', '8B, Ngô Quyền, P. Lý Thái Tổ, Q. Hoàn Kiếm, Lý Thái Tổ, Hoàn Kiếm, Hà Nội', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT7wegl-rR4IuKSCtrYIpx3xmrIaa26a95m4bIdDQBrgYaRpf9CEA', 0, 2, 0, 'banhmyque.php'),
(4, 'Chuối nếp nướng', 'Ttrái chuối nướng be bé, xinh xinh, không thon dài mà cũng không ú nu, dẹp dep. Chuối nếp nướng ngon là những trái có màu nâu giòn của lớp nếp ngoài, màu trắng mềm của lớp nếp trong, màu vàng vừa chín tới của trái chuối không hề nhũn.\r\n người ta đã vắt nước cốt dừa trộn lẫn trong nếp, nên ăn không cần chan thêm nước cốt dừa, bởi, những tinh tuý mùi vị đã trộn lẫn vào nhau. Khi lớp lá chuối bên ngoài trở nên giòn rụm, thì cũng là lúc lớp vỏ nếp ngả vàng nâu sẫm bốc mùi thơm nức trộn lẫn giữa vị ngọt thanh của chuối, béo của dừa, và cả hương khét khét thơm thơm dìu dịu của lá chuối. ', 'số 1 Hàng Đường, Hàng Đào, Hoàn Kiếm, Hà Nội', 'http://nuongthom.net/wp-content/uploads/2016/09/1475171415_419_M%C3%A1t-tr%E1%BB%9Di-v%C3%A0o-b%E1%BA%BFp-l%C3%A0m-chu%E1%BB%91i-b%E1%BB%8Dc-n%E1%BA%BFp-n%C6%B0%E1%BB%9Bng-si%C3%AAu-ngon.jpg', 0, 2, 0, 'chuoinepnuong.php'),
(5, 'Bánh đúc nóng', 'Bánh đúc dẻo quánh, chìm trong lớp nước chan trong vắt, đậm đà. Nhân bánh đúc gồm thịt băm xào cùng mộc nhĩ, chút rau mùi thái nhỏ, hành phi thơm nức mũi. Ăn lúc còn nóng hôi hổi vào tầm chiều chiều thì quả là tuyệt cú mèo luôn.\r\n', '8 Lê Ngọc Hân, Ngô Thì Nhậm, Hai Bà Trưng, Hà Nội', 'https://upvinalo.com/04092015/vinalo-1441326109hTuL0FFZ.jpeg', 0, 1, 0, 'banhducnong.php'),
(6, 'Cháo sườn', 'Cháo sườn là một món ăn khá quen thuộc đối với mỗi chúng ta, rất giản dị lại bổ dưỡng thơm ngon hấp dẫn vô cùng. Cháo sườn có thể phù hợp với bất kì độ tuổi nào từ người lớn đến trẻ em đều rất thích hợp, chỉ cần một chút sườn non cộng với một chút gạo nếp, thêm quẩy và gia vị vào là ngon tuyệt vời luôn rồi.\r\n', '26 Trần Xuân Soạn, Ngô Thì Nhậm, Hai Bà Trưng, Hà Nội', 'https://media.foody.vn/res/g27/260741/s800/foody-chao-suon-thuy-khue-186-636159486020552608.jpg', 0, 1, 0, 'chaosuon.php'),
(7, 'Gỏi cuốn', 'Trong ẩm thực Việt, có lẽ chẳng món ăn nào “dễ chịu” như gỏi cuốn.\r\nDùng làm thức ăn nhẹ cũng được, mà ăn no căng bụng cũng không ngấy!\r\nGỏi cuốn tôm là món ăn phổ biến, dễ làm và dễ ăn. Các cuốn được gói khéo léo, phô bày được những nguyên liệu màu sắc bên trong như màu đỏ của tôm, màu hồng nhạt Gỏi cuốn từ lâu đã trở thành món ăn không thể thiếu trong thực đơn của các nhà hàng Việt tại trời Tây. Người Pháp thì gọi gỏi cuốn là “Rouleaux de Printemps” – những cuốn gỏi của mùa xuân. Có lẽ là do sự kết hợp sắc màu thú vị của gỏi cuốn. Cắn một miếng gỏi cuốn, cảm nhận vị dai của bánh tráng, vị béo đậm đà của thịt ba rọi trộn lẫn vị ngọt của tôm luộc, thêm một chút mặn mà của nước chấm, cái mát lạnh, cay nồng nơi đầu lưỡi của rau sống tạo thành một bản hợp tấu làm dậy lên các cung bậc vị giác.\r\n', '60 Nguyễn Lương Bằng, Chợ Dừa, Đống Đa, Hà Nội', 'https://monchay.com/wp-content/uploads/2012/09/goi-cuon-chaydsfsdgsdg.jpg', 0, 1, 0, 'goicuon.php'),
(8, 'Cơm cuộn GimBap', 'Gimbap là món ăn truyền thống ở Hàn Quốc, món ăn này thể hiện sự khéo léo của người đầu bếp và mang ý nghĩa sự sum họp, đầy đủ và may mắn nhất. Gimbap có các nguyên liệu chính là cơm dẻo, rau củ, thịt bò, cà rốt, cá ngừ, trứng… sau đó được cuốn thành hình chiếc nem với vỏ là rong biển khô, sau đó chấm kèm với nước tương hoặc ăn kèm với dưa kimchi cay nồng hấp dẫn.\r\nTrên khắp đường phố Hàn Quốc, đây là món ăn vặt nổi tiếng ở Hàn Quốc. Món ăn truyền thống ngon hấp dẫn Hàn Quốc này có mặt khắp nơi từ nhà hàng, quán ăn tới xe đẩy đồ ăn trên đường phố Hàn Quốc, mọi người thường chọn món này trong các dịp picnic rất tiện.\r\n', '83 Đào Tấn, Ngọc Khánh, Ba Đình, Hà Nội', 'https://media.foody.vn/res/g5/46945/s800/foody-gimbab-han-quoc-83-dao-tan-926-636404885257563036.jpg', 0, 2, 0, 'gimbap.php'),
(9, 'Cơm cháy Ninh Bình', 'Là một trong những món ăn đặc sản ẩm thực nổi tiếng của Ninh Bình. Tổ chức Kỷ Lục Châu Á đã chính thức công nhận cơm cháy Ninh Bình là món ngon kỷ lục châu Á trong danh sách 10 món đặc sản nổi tiếng của Việt Nam. Cơm cháy được chế biến bằng cách nấu cơm rồi ép lại thành bánh, sấy khô rồi rán (chiên) giòn. Thành phần đóng vai trò quan trọng tạo nên hương vị đặc trưng cho món ăn là nước sốt. Cơm cháy ăn với loại nước sốt nào sẽ có hương vị của nước sốt ấy. Nước sốt dùng trong món cơm cháy Ninh Bình được chế biến từ tim, cật lợn (heo) và nước hầm thịt dê. Trong khi đó, nước sốt cơm cháy hải sản được chế biến từ nhiều loài hải sản khác nhau như tôm, cua bể, mực, tu hài, sò cùng với một số gia vị đặc biệt. Một yêu cầu quan trọng là các nguyên liệu hải sản này vẫn còn tươi sống. Nước sốt hải sản có màu đỏ tươi của cà chua và mùi thơm, vị ngọt của hải sản dùng chấm với cơm cháy khi ăn. Món cơm cháy hải sản chất lượng phải đạt một vài tiêu chí như giòn, hương vị thơm ngon, không gây ngán.', '11 ngõ 2, Bằng B, Hoàng Liệt, Hoàng Mai, Hà Nội', 'https://static.mytour.vn/upload_images/Image/Location/28_3_2016/com-chay-thit-de-ninh-binh-mytour-6.jpg', 0, 1, 0, 'comchayninhbinh.php'),
(10, 'Mỳ Quảng', 'Đây là món ăn được ví như cái “hồn” của ẩm thực Quảng Nam, đến miền Trung nắng gió mà không thử món này thì thật là đáng tiếc lắm đấy. Sẽ không khó để tìm thấy địa điểm ăn mì Quảng vì đâu đâu ở nơi này từ trong ngõ ngách cho tới chợ búa, làng mạc, đến khu phố nhộn nhịp, người ta có thể dễ dàng thưởng thức được tô mì thơm ngon với tôm, thịt heo tươi thái lát hay thịt gà xé miếng nhỏ, vị beo béo của dầu, hương thơm của đậu phộng, nước lèo sánh, ngọt đủ thấm và không thể thiếu bánh đa vừng giòn ngậy ăn kèm với các loại rau sống như xà lách, diếp cá, húng, rau mùi, bắp chuối,… Dù bận gì thì đã đến đây là phải thưởng thức bằng được món ăn tinh túy này nhé!\r\n', '1A Tràng Tiền, Phan Chu Trinh, Hoàn Kiếm, Hà Nội', 'https://images.foody.vn/res/g14/132827/s800/foody-mi-quang-hoi-an-yersin-792-636393769860749080.jpg', 0, 1, 0, 'myquang.php'),
(11, 'Tái dê Ninh Bình', 'Nếu du khách đến đất cố đô mà chưa ăn món thịt dê thì coi như chưa biết thấu đáo về Ninh Bình. Có rất nhiều món được chế biến từ thịt dê rất hấp dẫn như: Dê áp chảo, dê nướng, dê quay, dê hấp, tiết canh dê,… Món tái dê có thịt ngọt và giòn, ăn với các loại rau thơm như lá đinh lăng, lá mơ, lá sung… vị bùi bùi ngấm vào tận tâm can của người thưởng thức.\r\n', '74 ngõ 360, Xã Đàn, Đống Đa, Hà Nội', 'https://media.tripnow.vn/res/g19/184393/t800/foody-quan-de--315-635958304514751218.jpg', 0, 1, 0, 'taide.php'),
(12, 'Cơm âm phủ huế', 'Cơm âm phủ Huế là một trong những món ăn đại diện tiêu biểu về nghệ thuật chế biến đậm nét văn hóa ẩm thực Huế. Với hương vị hài hòa cùng lối bài trí phảng phất nét cung đình, cơm âm phủ Huế làm cho thực khách được thưởng thức một món ăn hoàn hảo không chỉ ngon mà còn rất đẹp mắt bởi nghệ thuật bày trí.\r\n', '3A Láng Hạ, Quận Đống Đa, Hà Nội', 'https://media.foody.vn/res/g8/72010/s/foody-nha-hang-mon-hue-vo-van-ngan-981-635492516513610816.jpg', 0, 1, 0, 'comamphu.php');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quanngon`
--

CREATE TABLE `quanngon` (
  `id_quanngon` int(11) NOT NULL,
  `name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `review` varchar(3000) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `href` varchar(100) CHARACTER SET ucs2 COLLATE ucs2_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `quanngon`
--

INSERT INTO `quanngon` (`id_quanngon`, `name`, `review`, `image`, `address`, `href`) VALUES
(2, 'Trà sữa ToCoToCo', 'Trà sữa TocoToco là thương hiệu của Công ty TNHH TM và DV Taco, được thành lập 2013. Công ty luôn mong muốn mang tới cho khách hàng những dịch vụ cùng những sản phẩm tươi ngon và mát lành nhất. Chính vì thế, nguồn nguyên liệu từ trà, sữa, các loại thạch, trân châu đều được Nhà hàng tự tay chế biến từ nguồn nguyên liệu tự nhiên và đảm bảo cho sức khỏe của người tiêu dùng.\r\n', 'https://thegioitrasua.com/public/media/branch/tra-sua-tocotoco-157-nguyen-van-cu-quan-long-bien-ha-noi-ab740c8aabe53602b316424feccf0630.jpg', '137 Tây Sơn, Quang Trung, Đống Đa, Hà Nội', 'tocotoco.php'),
(3, 'Nhà hàng KFC', 'KFC là cụm từ viết tắt của Kentucky Fried Chicken - Gà Rán Kentucky, một trong các thương hiệu thuộc Tập đoàn Yum Brands Inc (Hoa Kỳ). KFC chuyên về các sản phẩm gà rán và nướng, với các món ăn kèm theo và các loại sandwiches chế biến từ thịt gà tươi. Hiện nay đang có hơn 20.000 nhà hàng KFC tại 109 quốc gia \r\nKFC nổi tiếng thế giới với công thức chế biến gà rán truyền thống Original Recipe, được tạo bởi cùng một công thức pha trộn bí mật 11 loại thảo mộc và gia vị khác nhau do Đại tá Harland Sanders hoàn thiện hơn nửa thế kỷ trước. Ngoài thực đơn gà rán, KFC còn đa dạng hóa sản phẩm tạo nên thực đơn vô cùng phong phú dành cho người tiêu dùng trên toàn thế giới có thể thưởng thức hơn 300 món ăn khác nhau từ món gà nướng tại thị trường Việt Nam cho tới sandwich cá hồi tại Nhật Bản. ', 'https://www.marrybaby.vn/wp-content/uploads/2014/06/14/he-thong-cua-hang-kfc-3.jpg', 'Tòa nhà Kinh Đô, 292 Tây Sơn, Trung Liệt, Đống Đa, Hà Nội', 'KFC.php'),
(4, 'Nhà hàng FoodCenter', 'XUÝT XOA LẨU PATTAYA – CHỈ 150K/NGƯỜI\r\nNgoài Phuket, Pattaya dường như là 1 điểm đến không thể bỏ qua trong hành trình ghé thăm xứ sở Chùa Vàng với những đặc sản nổi tiếng như Gỏi đu đủ ba khía, Súp Tom Yum, Lẩu Pattaya… khiến các du khách phải mê mẩn ngay từ lần đầu thưởng thức.\r\nNếu chưa có cơ hội ghé thăm đất nước Thái Lan thì nhà hàng Sawasdee chính là hiện thân của một “Thái Lan thu nhỏ giữa lòng Hà Nội”- Nơi bạn có thể thưởng thức những món ăn “real Thai” trong một không gian đậm chất chùa Vàng với những bức phù điêu mô phỏng các vị thần linh thiêng và cả lời chào “Sawasdee!” đến từ nước Thái.', 'https://media.foody.vn/res/g21/208950/s800/foody-food-center-kim-ma-404-636225324763347304.jpg', '85 Thái Hà, Trung Liệt, Đống Đa, Hà Nội', 'foodcenter.php'),
(5, 'Đồ nướng Thượng Đình', 'Lẩu nướng là một loại hình ăn uống khá mới mẻ và sáng tạo trong vài năm gần đây với sự xuất hiện của rất nhiều nhà hàng lẩu nướng từ sang trọng cho đến các quán nướng bình dân vỉa hè.\r\nTrời lành lạnh được ngồi quay quần bên bếp nướng ấm áp, tự tay gắp thức ăn đặt lên bếp, lật qua lật lại vài ba lần là đã được thưởng thức những miếng nướng vừa đậm đà vừa thơm ngon. \r\n', 'http://www.adamsapa.vn/wp-content/uploads/2016/12/mon-an-doc-dao-sapa.jpg', 'Thượng Đình, Thanh Xuân, Hà Nội', 'donuong.php'),
(6, 'Cơm Ngũ Vị', 'Các món cơm đảo đùi gà ngũ vị và cơm xá xíu trứng ốp rất ngon\r\nBò lúc lắc mềm , ngon không hề bị dai . Rau + kim chi vừa miệng Canh hầm xương với khoai tây kèm theo cũng đậm mùi xương rất thơm Tất cả sẽ hoàn hảo nếu cơm ngon.\r\n', 'https://images.foody.vn/res/g15/149683/s800/foody-com-ngu-vi-khuong-trung-moi-938-636533599205802448.jpg', 'Khương Trung, Thanh Xuân, Hà Nội', 'comnguvi.php'),
(7, 'Bánh xèo Cô Hai', 'Những chiếc bánh xèo miền Trung với lớp vỏ giòn tan, lớp nhân tôm giá hấp dẫn cùng với nước chấm cay cay, chua chua đặc biệt tạo nên hương vị khó cưỡng. Cuối tuần là dịp thích hợp để chiêu đãi cả nhà món bánh xèo thơm ngon đấy các bạn.\r\n', 'http://product.hstatic.net/1000103608/product/bx-rau-mam.jpg', '126 Hầm chui Thanh Xuân, Thượng Đình, Thanh Xuân, Hà Nội', 'banhxeo.php'),
(8, 'Bánh tôm Tây Hồ', 'Bánh tôm Hồ Tây là một trong các món ăn nổi tiếng của Hà Nội. Chúng được làm từ nguyên liệu là những con tôm càng sông hay tôm càng Hồ Tây đặc trưng.Tôm (nước ngọt) hồ Tây bọc bột mì cho vào chảo mỡ nóng già ngập bánh cho chín tới. Khi bánh phồng lên và ngả màu vàng có bốc mùi thơm ngậy. Gắp bánh gác lên hai que đũa xếp ngang chảo cho ráo mỡ.\r\nĂn bánh nóng cùng với nước chấm vị chua, ngọt và cay, thêm chút dưa góp (đu đủ và cà rốt thái nhỏ ngâm giấm).\r\nBánh tôm giòn, mềm và ngọt, ăn cùng rau xà lách, có thể thêm bún rối và rất hợp với bia.', 'http://gl.amthuc365.vn/thumbnails/800/600///uploads/content/56f875d897b1a69c8e3af710ac96b738.jpg', '1 Thanh Niên, Trúc Bạch, Ba Đình, Hà Nội', 'banhtom.php'),
(9, 'Vua tào phớ', 'Tào phớ thường được bắt gặp vào mùa hè, do đây là một đồ ăn \"mát, giải nhiệt\". Một đầu quang gánh treo một chiếc chạn nhỏ đủ đựng dăm bảy chiếc bát, với một bình nước đường và một xô nhỏ nước tráng. Đầu kia là thùng đựng tào phớ. Thùng đựng tào phớ thường được làm bằng gỗ ghép đóng đai. Tào phớ đựng trong thùng còn nóng hàng giờ. Người bán hớt từng lát tào phớ vào bát bằng một miếng tôn nhỏ, đồ dùng để hớt xưa thường gặp là một mảnh vỏ trai to, sáng và óng ánh lớp xà cừ, nước đường pha vừa miệng, ướp hoa nhài tươi (thả trực tiếp vào bình đựng). Nước đường ấy chan ngập bát tào phớ. Người ăn có thể húp một hơi, cũng có thể dùng thìa dầm nhẹ tào phớ ra rồi xúc ăn. \r\n', 'http://toplist.vn/images/800px/tao-pho-dau-tam-hat-snack-rounds-so-19a-ngo-9-tran-quoc-hoan-cau-giay-40750.jpg', '50 Thái Hà, Đống Đa, Hà Nội', 'taopho.php'),
(10, 'Bánh cuốn Bà Hoành', 'Bánh cuốn Hà Nội có sự khác biệt so với hầu hết các loại bánh cuốn từ bánh cuốn đến nước chấm. Từ lâu, người Hải Phòng đã sử dụng nước chấm được pha chế từ nước ninh xương ống lợn, được nêm với nước mắm nguyên chất Cát Hải và gia vị. Bánh cuốn Hải Phòng cũng khá cầu kỳ từ những khâu lựa chọn nguyên liệu làm bánh cuốn, loại gạo trước đây thường được dùng là gạo Mộc Tuyền. Gạo cho ra loại bột khi lên bánh có mùi thơm của gạo đậm hơn so với các loại gạo khác. Bánh mềm nhưng dai hơn hẳn. Bánh được ăn kèm với hai loại chả quế và viên, nước chấm mắm hầm xương đã tạo nên sự khác biệt. Khi thưởng thức, thực khách sẽ cảm nhận được mùi thơm từ nước chấm, hương vị đậm đà chất biển nhưng có chút ngọt nhẹ nhàng khiến cho người ăn dễ chịu.', 'http://toplist.vn/images/800px/banh-cuon-ba-hoanh-5663.jpg', '66 Tô Hiến Thành, Bùi Thị Xuân, Hoàn Kiếm, Hà Nội', 'banhcuon.php');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `noidung` varchar(3000) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `image` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `href` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `review`
--

INSERT INTO `review` (`id`, `name`, `noidung`, `image`, `address`, `href`) VALUES
(1, 'DingTea', 'Nhắc đến trà sữa Đài Loan ngon nhất Hà Nội, Ding Tea là cái tên không thể bỏ qua. Sức hấp dẫn của thương hiệu này không chỉ đến từ hương vị trà thuần chất, không bị lẫn với bất kì loại trà sữa nào mà còn bởi Ding Tea Menu vô cùng đa dạng và phong phú.  Trà sữa Ding Tea được đánh giá là gần giống nhất với hương vị trà sữa Đài Loan, đậm đà gây nghiện. Mỗi hương vị trà sữa lại có mùi và hương vị khác nhau, rõ rệt hương hoa quả tự nhiên, ngọt thanh chứ không sắc như khi dùng hương liệu. Dù nhiều loại nhưng khách quen vẫn yêu thích hương vị hồng trà sữa hay trà sữa socola hơn cả bởi hồng trà thanh, mát, đậm mùi trà xanh, trà sữa socola hơi đắng lại ngòn ngọt nơi đầu lưỡi.', 'https://images.foody.vn/res/g19/188127/s800/foody-ding-tea-to-hieu-588-636540377533021565.jpg', '98 Vũ Trọng Phụng, Thanh Xuân Trung, Thanh Xuân, Hà Nội', 'dingtea.php'),
(2, 'Bánh trôi Tàu', 'Bánh trôi tàu luôn là một trong những món ăn đắt hàng nhất trong mùa đông giá rét. Với nước đường ngọt lịm và thơm mùi gừng, bánh trôi nhân vừng đen hoặc đậu xanh thơm lừng, bánh trôi tàu nóng hổi luôn làm cho những ngày mùa đông ấm áp hơn. Ngon dã man luôn.', 'https://media.foody.vn/res/g14/132781/s800/foody-che-banh-troi-tau-hang-dieu-464-635860293121615949.jpg', 'Hàng Điếu, Hoàn Kiếm, Hà Nội', 'banhtroitau.php'),
(3, 'Bánh mỳ que', 'Bánh mì này có hình dáng thon dài giống một dạng que dài (kích cỡ có nhiều loại, ở Việt Nam thông dụng loại cỡ 2 ngón tay, dài khoảng 30 cm), bên trong bánh mì có quét pate, xịt tương ớt, nhồi thịt chà bông nên khi ăn vào thì giòn mềm và vị bùi của patê, cảm giác nóng giòn và có vị cay. Bánh mì que nổi tiếng bởi loại bột bánh mì và công thức làm bánh đặc biệt có độ giòn xốp đặc trưng. Bánh có hương vị pate thơm lừng và béo. Loại pate này được làm thủ công, khi ăn, vị cay của ớt quyện cùng pate làm nức mũi người ăn.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT7wegl-rR4IuKSCtrYIpx3xmrIaa26a95m4bIdDQBrgYaRpf9CEA', '8B, Ngô Quyền, P. Lý Thái Tổ, Q. Hoàn Kiếm, Lý Thái Tổ, Hoàn Kiếm, Hà Nội', 'banhmyque.php'),
(4, 'Chuối nếp nướng', 'Ttrái chuối nướng be bé, xinh xinh, không thon dài mà cũng không ú nu, dẹp dep. Chuối nếp nướng ngon là những trái có màu nâu giòn của lớp nếp ngoài, màu trắng mềm của lớp nếp trong, màu vàng vừa chín tới của trái chuối không hề nhũn.  người ta đã vắt nước cốt dừa trộn lẫn trong nếp, nên ăn không cần chan thêm nước cốt dừa, bởi, những tinh tuý mùi vị đã trộn lẫn vào nhau. Khi lớp lá chuối bên ngoài trở nên giòn rụm, thì cũng là lúc lớp vỏ nếp ngả vàng nâu sẫm bốc mùi thơm nức trộn lẫn giữa vị ngọt thanh của chuối, béo của dừa, và cả hương khét khét thơm thơm dìu dịu của lá chuối.', 'http://nuongthom.net/wp-content/uploads/2016/09/1475171415_419_M%C3%A1t-tr%E1%BB%9Di-v%C3%A0o-b%E1%BA%BFp-l%C3%A0m-chu%E1%BB%91i-b%E1%BB%8Dc-n%E1%BA%BFp-n%C6%B0%E1%BB%9Bng-si%C3%AAu-ngon.jpg', 'Địa chỉ: số 1 Hàng Đường, Hàng Đào, Hoàn Kiếm, Hà Nội', 'chuoinepnuong.php'),
(5, 'Bánh đúc nóng', 'Bánh đúc dẻo quánh, chìm trong lớp nước chan trong vắt, đậm đà. Nhân bánh đúc gồm thịt băm xào cùng mộc nhĩ, chút rau mùi thái nhỏ, hành phi thơm nức mũi. Ăn lúc còn nóng hôi hổi vào tầm chiều chiều thì quả là tuyệt cú mèo luôn.', 'https://upvinalo.com/04092015/vinalo-1441326109hTuL0FFZ.jpeg\r\n', '8 Lê Ngọc Hân, Ngô Thì Nhậm, Hai Bà Trưng, Hà Nội', 'banhducnong.php'),
(6, 'Cháo sườn\r\n', 'Cháo sườn là một món ăn khá quen thuộc đối với mỗi chúng ta, rất giản dị lại bổ dưỡng thơm ngon hấp dẫn vô cùng. Cháo sườn có thể phù hợp với bất kì độ tuổi nào từ người lớn đến trẻ em đều rất thích hợp, chỉ cần một chút sườn non cộng với một chút gạo nếp, thêm quẩy và gia vị vào là ngon tuyệt vời luôn rồi.', 'https://media.foody.vn/res/g27/260741/s800/foody-chao-suon-thuy-khue-186-636159486020552608.jpg', '26 Trần Xuân Soạn, Ngô Thì Nhậm, Hai Bà Trưng, Hà Nội', 'chaosuon.php');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `star`
--

CREATE TABLE `star` (
  `id` int(11) NOT NULL,
  `id_post` int(11) NOT NULL,
  `ip` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `rate` int(11) NOT NULL,
  `dt_rated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `star`
--

INSERT INTO `star` (`id`, `id_post`, `ip`, `rate`, `dt_rated`) VALUES
(3, 1, '::1', 5, '2018-04-03 23:45:24');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `admin` int(11) DEFAULT NULL,
  `user_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `full_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ip_rate` varchar(11) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `admin`, `user_name`, `password`, `full_name`, `ip_rate`) VALUES
(1, 4697, 'tmc', '4297f44b13955235245b2497399d7a93', 'Tran Manh Chung', ''),
(2, NULL, 'DTH', '4297f44b13955235245b2497399d7a93', 'DO THI HIEN', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id_catalog`);

--
-- Chỉ mục cho bảng `chude`
--
ALTER TABLE `chude`
  ADD PRIMARY KEY (`id_chude`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_Product`);

--
-- Chỉ mục cho bảng `quanngon`
--
ALTER TABLE `quanngon`
  ADD PRIMARY KEY (`id_quanngon`);

--
-- Chỉ mục cho bảng `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `star`
--
ALTER TABLE `star`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id_catalog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `chude`
--
ALTER TABLE `chude`
  MODIFY `id_chude` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id_Product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `quanngon`
--
ALTER TABLE `quanngon`
  MODIFY `id_quanngon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `star`
--
ALTER TABLE `star`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
