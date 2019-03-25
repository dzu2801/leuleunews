-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th3 14, 2019 lúc 03:07 PM
-- Phiên bản máy phục vụ: 10.1.38-MariaDB
-- Phiên bản PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `leuleunews`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `CateName` varchar(250) COLLATE utf8_vietnamese_ci NOT NULL,
  `CateDescription` varchar(500) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `CateColor` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `CateStatus` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `CateName`, `CateDescription`, `CateColor`, `CateStatus`) VALUES
(1, 'SMARTPHONE', 'Tin tức mới nhất về mảng điện thoại thông minh', 'light-coral cat_name', 0),
(2, 'LAPTOP & PC', 'Tin tức mới nhất về mảng điện laptop và Pc', 'blue-dark cat_name', 1),
(3, 'SMART HOME ', 'giới thiệu sản phẩm nhà thông minh', 'glod cat_name', 1),
(4, 'CAR & MOTO', NULL, 'red cat_name', 1),
(5, 'REVIEW', NULL, 'light-coral cat_name', 1),
(6, 'NETWORK SECURITY', NULL, 'blue-dark cat_name', 1),
(7, 'ELECTRONIC DEVICES', NULL, 'glod cat_name', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `CmtID` int(11) NOT NULL,
  `CmtUser` varchar(50) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `CmtEmail` varchar(50) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `CmtContent` varchar(350) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `CmtDate` datetime DEFAULT NULL,
  `CmtStatus` tinyint(1) DEFAULT NULL,
  `PostID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `content` varchar(300) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `MDate` date NOT NULL,
  `status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `options`
--

CREATE TABLE `options` (
  `OptID` int(11) NOT NULL,
  `OptName` varchar(100) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `OptValue` varchar(100) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `OptStatus` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `options`
--

INSERT INTO `options` (`OptID`, `OptName`, `OptValue`, `OptStatus`) VALUES
(1, 'hotline', '0378035875 - 0901010709', 1),
(2, 'logoweb', 'uploads/leuleu2.png', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `PostName` varchar(500) COLLATE utf8_vietnamese_ci NOT NULL,
  `PostDescription` varchar(150) COLLATE utf8_vietnamese_ci NOT NULL,
  `PostContent` varchar(10000) COLLATE utf8_vietnamese_ci NOT NULL,
  `PostPhoto` varchar(250) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `PostDate` date DEFAULT NULL,
  `PostView` int(11) DEFAULT NULL,
  `CateID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `posts`
--
INSERT INTO `posts` (`id`, `PostName`, `PostDescription`, `PostContent`, `PostPhoto`, `PostDate`, `PostView`, `CateID`) VALUES
(2, 'Mercedes-Benz nâng cấp V-Class 2019 với hộp số 9 cấp, bổ sung tính năng, giá từ 41.500 USD', '', 'Bên cạnh những mẫu xe thuộc phân khúc SUV và Sedan thì Mercedes-Benz còn mang đến triển lãm Geneva chiếc V-Class bản nâng cấp 2019. Đây là mẫu xe thuộc phân khúc MPV hạng sang, thích hợp cho những gia đình có nhiều thành viên hoặc dùng để đi du lịch dài ngày. \r\nV-Class 2019 thuộc thế hệ thứ 3 ra mắt lần đầu năm 2014 và đây là bản nâng cấp giữa đời facelift chứ không phải nâng cấp toàn diện. Những điểm mới ở thiết kế xe bao gồm cản trước thiết kế lại với các hốc hút gió mở rộng, lưới tản nhiệt sắc nét hơn và cụm đèn pha LED thon gọn hơn. \r\nKhách hàng có thể tùy chọn phiên bản AMG Line với những chi tiết ngoại thất nhấn mạnh vào phong cách thể thao. Mercedes bổ sung cho V-Class 2019 một số màu sơn ngoại thất mới như xám kim loại và đỏ đồng kim loại, đi cùng là 2 kiểu thiết kế vành xe mới có kích cỡ 18 và 19\". \r\nNội thất của V-Class 2019 về cơ bản không có thay đổi nào lớn so với trước đây, chỉ có một chi tiết mới là cửa gió điều hòa phong cách thể thao giống như A-Class, CLA-Class hay AMG GT 4 Door. Mercedes bổ sung thêm chất liệu bọc ghế da mới là Tartufo, hai chất liệu da Lugano và Nappa với hai màu đen, be vẫn là trang bị tiêu chuẩn. \r\nLà một chiếc MPV hạng sang nên hàng ghế sau của V-Class 2019 tập trung tối đa cho sự thoải mái, sang trọng. Mức độ tiện nghi của nó có thể sánh ngang với chiếc sedan đầu bảng S-Class nhờ 4 ghế ngồi thương gia, lưng ghế có thể ngả hoàn toàn, hỗ trợ massage và thông hơi trên phiên bản Exclusive. Ngoài ra, khách hàng còn có thể chọn các phiên bản Marco Polo hay Marco Polo Horizon, được thiết kế với những tiện nghi như bàn làm việc, giường ngủ, bồn rửa, bếp nấu để phục vụ những chuyến du lịch dài ngày. ', '4586807_HOME-2020-mercedes-v-class.jpg', '2019-03-10', 1, 4),
(3, 'HiFiMAN Ananda BT tai nghe không dây mới mức giá 1200 USD', '', 'HiFiMAN vừa giới thiệu phiên bản Bluetooth của chiếc tai nghe Ananda, mẫu tai nghe Planar Magnetic fullsize cực kỳ dễ kéo với trở kháng 25 Ohm và độ nhạy 103dB. Cái giá cho sự thoải mái do không có dây là 200usd. Một điều thú vị anh em có thể quan tâm là Anada BT có thể chơi được cả ba chuẩn âm thanh Bluetooth cao cấp nhất hiện nay là aptX aptX HD của Qualcomm, LHDC của Huawei, và AAC của Apple.\r\nĐể có thêm tính năng không dây, cũng như một mạch khuếch đại ở mỗi bên tai nối trực tiếp lên driver planar của tai nghe Ananda các bạn cần phải chi thêm 200 USD. Phần nhận tín hiệu không dây của tai nghe sử dụng một chip tích hợp hỗ trợ chuẩn aptX HD của Qualcomm, LHDC của Huawei, và AAC của Apple. Mặc dù ở thông cáo báo chí của hãng giới thiệu sẽ hỗ trợ phương thức truyền tải nhạc lossless không dây lên đến 24/96kHz, tuy nhiên mình vẫn không hiểu truyền tải tín hiệu như thế nào bởi vì hiện nay chưa có một codec hay chuẩn bluetooth nào có băng thông để truyền như vậy.\r\n\r\nChiếc tai nghe không dây Ananda BT cũng có một điểm thú vị là ngoại trừ việc kết nối không dây, người dùng cũng có thể kết nối trực tiếp với máy tính thông qua cổng USB. Cổng USB type-C không chỉ dùng để sạc pin tai nghe, mà còn có thể truyền tải dữ liệu âm thanh lên đến 24bit/192kHz từ Mac hoặc PC. Điều này giúp người dùng có thể bỏ qua các thiết bị DAC/Amp hoặc máy nghe nhạc, tối ưu hóa trải nghiệm dành cho người dùng. Thời lượng pin của tai nghe Ananda BT cũng khá tốt lên đến 13,5 giờ liên tục.\r\n\r\nMức giá dự kiến của Ananda-BT vào khoảng 1200 USD và sẽ bắt đầu được giao đến tay người nghe vào cuối tháng này.', '4584758_Tinhte_Hifiman_Ananda_BT.jpg', '2019-03-10', 2, 7),
(4, 'Ứng dụng thư giãn Calm được tích hợp trực tiếp vào Samsung Health', '', 'Hôm nay, Samsung đã chính thức hợp tác với Calm để tích hợp ứng dụng này thẳng Samsung Health. Việc tích hợp Calm vào trong Samsung Health giúp mang đến sự tiện lợi, nhanh chóng cho những ai muốn thư giãn cũng như hít thở ngồi thiền. \r\nViệc tích hợp vào Samsung Health đồng nghĩa với việc Calm sẽ có mặt trên các thiết bị của Samsung đang chạy Android Pie OS bao gồm cả chiếc Galaxy S10 mới nhất. Người dùng chỉ cần đăng nhập tài khoản Calm của mình vào trong ứng dụng Samsung Health là có thể sử dụng mà không cần phải download thêm ứng dụng Calm. Bên cạnh tích hợp vào Samsung Health, chiếc Galaxy Watch mới nhất cũng sẽ được tích hợp Calm. Hiện tính năng này chỉ mới có mặt ở một số thị trường như: Australia, Hong Kong, India, New Zealand, Philippines, Singapore, South Africa, U.S., U.K. và Ireland. Các khu vực còn lại sẽ sớm được cập nhật.', '4582528_cover_tinhte_samsung_healthing_calm.png', '2019-03-11', 1, 1),
(5, 'Samsung hé lộ mẫu ốp lưng dành riêng cho Galaxy Fold', '', 'Để chuẩn bị bán ra chiếc Galaxy Fold, Samsung dường như sắp ra mắt phụ kiện ốp lưng cho chiếc smartphone đặc biệt này.\r\n\r\nGalaxy Fold là smartphone có màn hình gập đầu tiên của Samsung, với thiết kế đặc biệt vì vậy nó cũng sẽ cần có một phụ kiện đặc biệt đi kèm.\r\nTheo Sammobile, ốp lưng dành cho chiếc Galaxy Fold sẽ có 2 màu sắc để người dùng lựa chọn là Đen và Trắng. Ốp lưng này sẽ có thiết kế để bảo vệ toàn bộ mặt sau của điện thoại này và được khoét một lỗ ở phía trước để chừa phần màn hình mặt trước.\r\n\r\nTất nhiên phụ kiện cho một chiếc smartphone đặc biệt này sẽ cũng có giá đặc biệt khi nguồn tin còn cho biết nó có giá khá đắt với mức giá không dưới 50 USD (khoảng 1.1 triệu đồng).\r\n\r\nHiểu được điều này nên các nhà sản xuất phụ kiện chắc chắn sẽ ra mắt mẫu ốp lưng cho Fold với mức giá “dễ chịu” hơn. Và trước đó chúng ta đã từng được nghe thấy thông tin một nhà sản xuất phụ kiện Spigen đã đưa ra một ý tưởng thiết kế về chiếc ốp lưng cho chiếc Galaxy Fold của Samsung, được làm từ silicon và nhựa có giá 20 USD ( tầm 464.000 đồng).', 'case-galaxy-fold-2-696x392.jpg', '2019-03-10', 1, 1),
(6, 'Vivo V15 Pro trình làng với giá chưa đến 10 triệu đồng', '', 'Vivo vừa chính thức ra mắt smartphone V15 Pro tại Ấn Độ với giá bán chỉ khoảng 9,4 triệu đồng với nhiều điểm nổi bật như camera selfie 32 MP bật lên.\r\n\r\nNhờ thiết kế camera selfie bật lên, V15 Pro có thể loại bỏ sự cần thiết của notch trên màn hình trước, giúp giải quyết những khó chịu mà người dùng gặp phải như trên nhiều smartphone khác. Sản phẩm bắt đầu được bán vào ngày 20/2 trên trang web vivo.com (đặt trước) trước khi lên kệ vào ngày 6/3.\r\n\r\nVivo V15 Pro có thiết kế mặt kính phía trước và sau với khung kim loại ở giữa. Đặc biệt là mặt sau của smartphone này có một dải màu kép với một số ánh sáng lấp lánh để thêm sức hấp dẫn.\r\nMáy có màn hình AMOLED 6,32 inch độ phân giải Full HD+. Viền trên được thiết kế cực mỏng nhưng vẫn có thể chứa loa thoại trên điện thoại, còn phần cằm ở phía dưới cùng. Trong khi đó phần màn hình được tích hợp hệ thống cảm biến vân tay dưới màn hình thế hệ thứ 5.\r\n\r\nVivo V15 Pro trang bị chip Snapdragon 675 kết hợp với 6GB RAM và 128GB bộ nhớ trong. Đó là lựa chọn duy nhất giúp đơn giản hóa việc chọn mua sản phẩm của người dùng. Máy chạy Android 9 Pie với giao diện người dùng Funtouch OS của Vivo, tích hợp pin 3.700 mAh và hỗ trợ sạc nhanh qua cổng USB-C.', 'vivo-nex-10.jpg', '2019-03-11', 2, 1),
(7, 'Nokia 9 PureView – sự trở lại hoàn hảo của thương hiệu PureView', '', 'Nokia 9 PureView cuối cùng đã chính thức trình làng, và đây là cách mà HMD Global đã làm rất tốt khi hồi sinh thương hiệu PureView được yêu thích.\r\n\r\nThay vì mang đến các cảm biến độ phân giải khủng, HMD đã chọn tích hợp cho Nokia 9 PureView hệ thống camera 5 ống kính theo những cách tiếp cận khác biệt thông qua sự hợp tác với Light – công ty nổi tiếng với máy ảnh L16 đa ống kính.\r\n\r\nNhững thành quả đầu tiên của sự hợp tác đó là một Nokia 9 PureView hết sức ấn tượng. Trong số các cụm cảm biến ở mặt sau của điện thoại thì có 2 cảm biến màu và 3 cảm biến đơn sắc, với mỗi cảm biến 12 MP được ghép nối với ống kính f/1.8.\r\n\r\nKhi chụp ảnh, cả năm cảm biến sẽ chụp hình cùng một lúc. “Phép thuật” của Light và Nokia là sử dụng các mức phơi sáng khác nhau trên mỗi cảm biến, sau đó hợp nhất các khung hình đó thành một hình ảnh duy nhất cuối cùng. Người dùng có thể tạo ra JPEG hoặc ảnh RAW DNG để xử lý sau đó một cách linh hoạt hơn cũng như nhiều dữ liệu chuyên sâu hơn. Adobe sẽ cung cấp các cấu hình ống kính Lightroom đặc biệt để xử lý các ảnh chụp Nokia 9 PureView.\r\nMỗi camera có cùng độ dài tiêu cự và trường nhìn. Không giống như Galaxy S10 – có zoom quang, ống kính thông thường và siêu rộng – điện thoại mới của Nokia chỉ chụp được một loại hình ảnh duy nhất. Nếu bạn muốn phóng to thì sẽ phải tiến gần hơn, bởi zoom số hoặc crop sẽ làm mất dữ liệu hình ảnh.\r\n\r\nVề cấu hình, Nokia 9 PureView không ngang tầm với các flagship khác của năm 2019 bởi nó chỉ sử dụng chip Snapdragon 845 cũ thay vì 855, cũng như khả năng chống nước IP67 thay vì IP68. Tuy nhiên mức RAM 6GB và bộ nhớ trong 128GB, cùng màn hình P-OLED 5,9 inch làm chúng trở thành thiết bị Nokia cao cấp thực sự từ HMD.\r\n\r\nĐiện thoại cũng không còn jack cắm tai nghe 3.5 mm, tuy nhiên sở hữu cảm biến vân tay (quang học) dưới màn hình. Máy chạy hệ điều hành Android Go dựa trên nền tảng 9.0 Pie. Tất cả được đặt trong lớp vỏ Midnight Blue, kính cường lực Gorilla Glass 5 với sạc không dây Qi.', '2-7-696x463.jpg', '2019-03-11', 1, 1),
(8, 'Nokia 6.2 trang bị camera selfie đục lỗ, ra mắt vào tháng tới\r\n', '', 'Một thông tin rò rỉ mới cho biết rằng một thiết bị Nokia trang bị camera selfie đục lỗ tương tự Galaxy A8s của Samsung sắp sửa được ra mắt.\r\n\r\nThiết bị mang tên Nokia 6.2 này sẽ trở thành smartphone thứ hai của Nokia được trang bị camera selfie dạng đục lỗ trên màn hình như Nokia 8.1 Plus trong các tin đồn trước đó. Thông tin mới được xác nhận bởi tài khoản Twitter có tên Nokia Leaks, cho biết chiếc điện thoại Nokia 6.2 (hoặc Nokia 6 (2019) này sẽ đi kèm camera đục lỗ vốn là xu hướng dành cho các OEM Android kể từ cuối năm 2018.\r\n\r\nHMD được biết đến sẽ công bố một số thiết bị tại MWC 2019, và Nokia 6 được làm mới có thể xuất hiện tại triển lãm. Tuy nhiên, rò rỉ cũng đề cập rằng Trung Quốc sẽ là thị trường khởi động dành cho smartphone này, và một tweet tiếp theo đề cập rằng thiết bị này sẽ đến thị trường Mỹ.\r\n\r\nNgoài camera selfie đục lỗ, Nokia 6.2 được cho là có chipset Snapdragon 632 tầm trung, RAM 4 GB hoặc 6 GB, camera kép 16 megapixel và công nghệ âm thanh OZO độc quyền của Nokia cho âm thanh không gian ấn tượng.\r\nHMD Global đã ra mắt hơn 20 smartphone kể từ khi được cấp phép chính thức từ Microsoft vào năm 2016, và công ty này đang thực hiện một số bước tiến tốt trong không gian Android OEM kể từ đó. Nếu các thiết bị được đồn đại trở thành hiện thực, đó sẽ là một thành tựu ấn tượng cho công ty vốn luôn bắt kịp công nghệ cùng tung ra bản cập nhật kịp thời làm và làm hài lòng thị trường với giá thân thiện.', '1-8-696x392.jpg', '2019-03-10', 1, 1),
(9, 'HMD Global sẽ ra mắt Nokia 7.1 tại sự kiện ở Ấn Độ vào ngày 6/12?', '', 'HMD Global vừa gửi thư mời cho một sự kiện do công ty tổ chức ở Ấn Độ vào ngày 6/12, chỉ 1 ngày sau khi công ty tổ chức sự kiện ở Dubai.\r\n\r\nTheo các tin đồn, ít nhất 1 trong số 3 chiếc smartphone mà HMD ra mắt tại Dubai sẽ được trình diễn tại sự kiện ở Ấn Độ sau đó, nhiều khả năng nó sẽ là Nokia 7.1. Tuy nhiên cũng có thể Nokia 7.1 Plus sẽ xuất hiện như gợi ý từ các nguồn tin gần đây.\r\n\r\nLưu ý rằng Nokia 7.1 Plus được cho là phiên bản toàn cầu của Nokia X7 chỉ có ở Trung Quốc, nhưng nhiều khả năng sản phẩm sẽ mang tên gọi Nokia 8.1. Điều này làm cho mọi thứ trở nên khó hiểu hơn.\r\n\r\nNokia 7.1 được công bố lần đầu tiên vào tháng trước và hiện có sẵn ở một số thị trường quốc tế. Nó có màn hình cảm ứng 5,84 inch độ phân giải 1080 x 2280 pixel cho tỷ lệ hiển thị 19:9, chip Snapdragon 636, RAM 3 GB hoặc 4 GB, bộ nhớ trong 32 GB hoặc 64 GB có thể mở rộng và pin 3.060 mAh.\r\n\r\nPhía sau điện thoại được đi kèm camera 12 MP kết hợp cảm biến độ sâu 5 MP, trong khi mặt trước là camera 8 MP cho khả năng chụp ảnh selfie. Điện thoại chạy trên nền tảng Android 8.1 Oreo và sẵn sàng cập nhật lên Android 9 Pie.\r\n\r\nMặt khác, Nokia X7 có màn hình 6,18 inch lớn hơn với độ phân giải tương tự, tích hợp chip Snapdragon 710, RAM 4 GB/6 GB, bộ nhớ trong 64 GB/128 GB, camera kép phía sau 12 MP + 13 MP, camera selfie 20 MP và pin 3.500 mAh. Máy chạy Android 8.1 Oreo khi phát hành.', '1-28-696x434.jpg', '2019-03-10', 1, 1),
(10, '6 mẫu xe “mới toanh” vừa về thị trường Việt năm 2018', '', 'Dù vẫn còn nhiều tranh cãi về chính sách và những khó khăn trước mắt của xe nhập khẩu. Nhưng thị trường ô tô trong 2 tháng đầu năm 2018 sôi động hơn với sự góp mặt của hàng loạt mẫu xe mới.\r\n\r\nNăm 2018 là mốc đánh dấu nhiều thay đổi lớn của thị trường ô tô với những tác động lớn từ thuế nhập khẩu và hàng loạt các chính sách mới có hiệu lực. Doanh số thị trường ô tô trong tháng 1 dù là tháng cận Tết nhưng không như mong đợi. Dù vậy thị trường ô tô vẫn sôi động với sự góp mặt của nhiều mẫu xe mới.\r\n\r\nChỉ trong chưa đầy 2 tháng, nhiều mẫu xe mới đã được ra mắt và chốt giá bán tại thị trường Việt Nam. Trong đó phải kể đến các mẫu xe hot như Honda CR-V, Mitsubishi Oulander lắp ráp trong nước hay mẫu xe giá rẻ Suzuki Celerio.\r\nỒn ào, gây tranh cãi chắc chắn phải kể đến sự xuất hiện của Honda CR-V. Honda CR-V phiên bản 5+2 chính thức ra mắt thị trường cuối tháng 11 năm ngoái và cũng chuyển sang nhập khẩu thay vì lắp ráp. Theo đúng dự kiến khách hàng tại Việt Nam có thể nhận được xe vào tháng 1/2018. Tuy nhiên, giá bán của Honda CR-V 2018 đã chính thức được Honda Việt Nam công bố hôm 9/1 lại cao hơn mức giá dự kiến.\r\n\r\nTheo đó, mẫu Honda CR-V 7 chỗ có giá 1,256 tỷ đồng cho phiên bản L, cao hơn dự kiến khoảng 150 triệu đồng. Thêm đó, thông tin từ phía Honda cho hay, hãng này chỉ nhập được một lô hàng với số lượng 750 chiếc Honda CR-V được nhập khẩu về trong nước trong 2017 để kịp đến tay khách hàng.\r\n\r\nDù giá bán cao hơn nhiều so với dự kiến, nhưng lượng xe nhập về đã được các đại lý Honda ô tô bán ra gần hết. Cụ thể, Honda đã bán ra 737 xe trong tháng đầu tiên, gần hết lượng xe nhập khẩu về Việt Nam.', '837B63CA-1EC3-4B1F-B96B-9A74DF813BE8.jpeg', '2019-03-10', 1, 4),
(11, 'Ford Ranger Đạt Doanh Số Kỷ Lục tại Châu Á – Thái Bình Dương', '', 'Chiếc xe bán tải Ford Ranger đạt doanh số kỷ lục chưa từng có tại Châu Á – Thái Bình Dương trong năm 2017 – tiếp tục dẫn đầu phân khúc xe bán tải cỡ vừa vốn rất cạnh tranh tại khu vực này. Theo đó, doanh số bán lẻ đã tăng 22% so với năm trước, đạt mức 134.100 xe.\r\n\r\nNăm 2017 đánh dấu một năm đầy bước ngoặt với doanh số kỷ lục xuyên suốt cả năm của Ranger tại Úc, New Zealand, Philippines, Đài Loan, Thái Lan và Việt Nam.\r\n\r\nKết thúc năm 2017, dòng xe Ranger cũng là chiếc xe bán tải bán chạy nhất Việt Nam, Đài Loan, Campuchia, Myanmar và New Caledonia, cũng là chiếc xe bán chạy hàng đầu tại New Zealand năm thứ ba liên tiếp.\r\n\r\nNăm 2017, Ranger cũng dẫn đầu phân khúc xe bán tải năm thứ tư liên tiếp tại Việt Nam.\r\nDoanh số của Ford Ranger tại Thái Lan dẫn đầu khu vực Châu Á – Thái Bình Dương, tăng 44,5% tương đương với con số kỷ lục 44.452 xe, góp phần nâng cao thị phần của phân khúc xe bán tải tăng 3%, tương đương với 12,2%.\r\n\r\nTại Úc, doanh số của Ford Ranger tăng gần 16%, tương đương với 42.728 xe, tiếp tục duy trì vị thế là dòng xe 4×4 bán chạy nhất quốc gia này.\r\n\r\nRanger cũng đạt doanh số kỷ lục và tiếp tục là chiếc xe bán tải bán chạy nhất Việt Nam năm thứ tư liên tiếp, chiếm 56% toàn phân khúc, với doanh số tăng 6%, tương đương với 14.926 xe.', 'Ranger-1-696x464.jpg', '2019-03-10', 1, 4),
(12, 'Môtô điện Eva EsseEsse9 – cổ điển nhưng hiện đại', '', '\r\nMẫu xe pha trộn nét hoài cổ của dòng retro và hiện đại từ streetfighter đã có mặt tại triển lãm CES 2018 khiến nhiều người xem thích thú.\r\n\r\n\r\n\r\nEnergica, nhà sản xuất môtô điện từ Ý, vừa trình làng Eva EsseEsse9 tại Mỹ. Đây là mẫu xe môtô điện đầu tiên của hãng theo phong cách retro hoài cổ vẫn đang chiếm lĩnh thị trường hiện nay.\r\n\r\n\r\n\r\nEva EsseEsse9 là phiên bản cải tiến cho mẫu môtô điện Eva trước của hãng. Nó vẫn giữ nguyên kiểu đèn pha tròn và yên xe tương tự như các mẫu cafe racer cổ điển. Tuy nhiên, với thân góc cạnh kết hợp những nét đặc thù của một chiếc streetfighter, mẫu môtô này đã vô cùng nổi bật tại buổi triển lãm.\r\n\r\n\r\n\r\nXe có môtơ điện AC tích hợp nam châm vĩnh cửu sản sinh công suất 109 mã lực. Tốc độ tối đa của xe là 200 km/h. Năng lượng được cung cấp từ bộ pin Li-Po công suất 11,7 kWh có thể sạc đầy 85% trong 30 phút.\r\n\r\n', 'Eva_EsseEsse9_3.jpg', '2019-03-10', 1, 4),
(13, 'HP Pavilion x360 – mẫu laptop “quyền năng” cho phái đẹp', '', 'HP Pavilion x360 là mẫu laptop đa năng gọn nhẹ, hỗ trợ bút cảm ứng cùng với ngoài hình sang trọng trở thành sự lựa chọn không thể tuyệt vời hơn dành cho phái đẹp, khi thời điểm mua sắm cuối năm đang cận kề.\r\n\r\nHP Pavilion x360 là mẫu laptop đa dụng có thiết kế mỏng nhẹ và tính năng ấn tượng trong phân khúc. Máy có màu vàng champagne thời trang, tinh tế của một thiết bị dành cho nữ nhân viên văn phòng hoặc sinh viên, học sinh. Đối với đối tượng người dùng thường xuyên đi công tác, làm việc ngoài văn phòng như tham dự các sự kiện, họp báo hay các chuyến công tác xa thì thật sự thiết bị laptop gọn nhẹ rất cần thiết.\r\nVới trọng lượng chỉ 1,59kg, HP Pavilion x360 khá nhẹ, người dùng có thể dễ dàng để vào balo, túi làm việc nhỏ nhắn của chị em. Với trọng lượng nhẹ nhàng nên khi đeo trên vai hoặc trong tư thế đặt trên chân soạn thảo văn bản cũng trở nên nhẹ nhàng hơn. Kích thước cũng khá gọn nhẹ, nên dễ dàng xoay sở ở những nơi có không gian hẹp và đông người. Độ dày của thiết bị chưa đến 20mm nên khi để trong balo hay cặp làm việc cũng không chiếm quá nhiều diện tích và tiết kiệm không gian để chứa thêm các vật phẩm cần thiết khác.\r\nBên cạnh đó, với phái đẹp, laptop không chỉ là một thiết bị phục vụ các công việc văn phòng mà còn là một món trang sức thời trang. Hình thức đóng vai trò không nhỏ trong sự lựa chọn của nữ giới bên cạnh các tính năng được trang bị.\r\nHP Pavilion x360 hỗ trợ khá nhiều cổng kết nối bao gồm: 1 cổng USB-C cho tốc độ truyền tải dữ liệu nhanh lên đến 5Gbps, 2 cổng USB-A, 1 cổng HDMI, 1 jack 3.5, tương đối đầy đủ với một mẫu laptop đa dụng gọn nhẹ như HP Pavilion x360.', 'image002-696x476.gif', '2019-03-11', 1, 2),
(14, 'ASUS ra mắt siêu phẩm laptop gaming ROG Mothership và loạt laptop gaming GeForce RTX', '', 'Tại sự kiện CES 2019, ASUS đã gây ấn tượng khi ra mắt mẫu laptop gaming cao cấp ROG Mothership GZ700 và một loạt laptop gaming trang bị GeForce RTX.\r\n\r\nROG Mothership – Thay đổi cách mạng chơi game\r\nVề thiết kế, ROG Mothership GZ700 hoàn toàn định nghĩa lại thiết kế của một chiếc laptop gaming. Thay vì sử dụng phong cách truyền thống, ROG Mothership đặt các linh kiện phía sau màn hình và sử dụng thân máy dạng dứng. việc này giúp cho hệ thống tản nhiệt có thể dễ dàng làm mát hơn thay vị cách đặt nằm như trước đây. Vì vậy mà ASUS tự tin trang bị bộ xử lý Core i9-8950HK và card đồ hoạ Nvidia GeForce RTX 2080 mạnh mẽ nhất hiện nay.\r\n\r\nNgoài ra ROG Mothership GZ700 còn trang bị thôn số cấu hình khủng với trang bị màn hình IPS 17,3 inch tần số quét 144 Hz, tốc độ phản hồi 3 ms và công nghệ G-Sync. Không dừng lại ở đó, ổ cứng 1,5 TB của máy là sự kết hợp 3 SSD chạy RAID0 với tốc độ đọc kỷ lục 8700 MB/s.\r\n\r\nHệ thống bàn phím có thể gập lại và tháo rời, đem lại khả năng tuỳ biến cực cao cho các bạn game thủ.\r\nTiếp bước thành công của series Zephyrus, Zephyrus S GX701 đem lại cho game thủ sự lựa chọn laptop gaming siêu di động mà vẫn sở hữu hiệu năng mạnh mẽ. Điểm khác biệt so với các thế hệ trước là ở kích thước màn hình được tăng lên 17,3 inch so với mức tiêu chuẩn 15,6 inch, màn hình vẫn giữ tần số quét 144 Hz, tốc độ phản hồi 3 ms và công nghệ G-Sync và tấm nền IPS chất lượng cao.\r\n\r\nVề cấu hình, ZEPHYRUS S GX701 sở hữu bộ vi xử lý Intel Core i7-8750H thế hệ 8 và GPU NVIDIA GeForce RTX tùy chọn lên đến 2080 Max-Q. Hệ thống tản nhiệt khí động lực chủ động AAS cung cấp thêm khe hở dưới đáy máy, giúp tăng thêm luồng khí lưu thông nhằm duy trì hiệu suất cao nhất cho các thành phần linh kiện.\r\n\r\nNgoài ra máy còn có hệ thống đèn bàn phím RGB có thể tùy chỉnh theo từng phím (per-key), game thủ có thể dễ dàng tùy chỉnh độ sáng và màu sắc, cũng như hiệu ứng phù hợp cho từng nhu cầu sử dụng khác nhau.', 'asus-ces-2019-3-696x398.jpg', '2019-03-12', 1, 2),
(15, 'Xiaomi ra mắt Mi Laptop Air 13,3 inch tại thị trường Việt Nam', '', 'Xiaomi chính thức ra mắt Mi Laptop Air 13,3 inch, mẫu laptop di động với độ mỏng và cân nặng nhẹ nhất trên thị trường hiện nay.\r\n\r\nHôm qua (ngày 3/7) Công ty công nghệ toàn cầu Xiaomi đã chính thức công bố mẫu laptop Mi Laptop Air 13,3 inch mới nhất tại thị trường Việt Nam.\r\n\r\nMi Laptop Air 13,3 inch là một trong những mẫu laptop mang tính di động cao với độ mỏng và cân nặng nhẹ nhất trên thị trường hiện nay. Ngoài ra, nhờ trang bị card đồ họa rời cùng ổ SSD có khả năng mở rộng, Mi Laptop Air 13,3” mang đến trải nghiệm tốt hơn cho người dùng so với hầu hết các mẫu laptop di động truyền thống.\r\nMi Laptop Air 13,3 inch sở hữu thiết kế tối giản với độ dày chỉ 14,8mm và nặng 1,3kg. Màn hình HD 13,3 inch  với kính Gorilla cùng viền rất mỏng, chỉ 5,59mm, góp phần làm tăng thêm vẻ sang trọng cho sản phẩm. Máy còn được trang bị bàn phím chuẩn với các phím màu đen cùng đèn nền giúp người dùng có thể dễ dàng thao tác ngay cả khi ánh sáng yếu.\r\nNgoài thiết kế thanh lịch và siêu nhẹ, chiếc laptop của Xiaomi cũng cực kỳ mạnh mẽ. Trang bị vi xử lý thế hệ 8 mới nhất của Intel – Kaby Lake Refresh Core i5-8250U với 4 nhân xung dịp tối đa 3,4GHz, cùng bộ nhớ ram DDR4 8GB.\r\n\r\nChiếc laptop 13,3 inch  của Xiaomi còn trang bị card đồ họa rời – NVIDIA MX 150 với bộ nhớ 2GB GDDR5 – rất hiếm khi xuất hiện trên những mẫu laptop mỏng nhẹ. Với hệ thống tản nhiệt tích hợp những cánh quạt kim loại siêu mỏng cùng ống đồng dẫn nhiệt lớn, người dùng hoàn toàn có thể tận hưởng những tựa game mới trên chiếp laptop mới này.\r\n\r\nBên cạnh đó, Mi Laptop Air 13,3inch được Xiaomi trang bị ổ SSD PCIe 256GB cho tốc độ truy xuất nhanh gấp 3 lần chuẩn SATA thông thường. Với khe SSD mở rộng, người dùng có thể tăng dung lượng bộ nhớ tùy theo ý thích.\r\n\r\nCài đặt sẵn Windows 10 Home, Mi Laptop Air 13,3 inch sử dụng bàn rê cảm ứng lớn (110 x 67m) với độ chính xác cao. Bề mặt nhẵn bóng của bàn di mang đến cảm giác mượt mà, chính xác khi rê chuột, đồng thời hỗ trợ cảm ứng đa điểm để cuộn, phóng hoặc chuyển đổi giữa các phần mềm. Cảm biến vân tay được đặt ở góc bên phải của bàn di, giúp người dùng mở khóa máy một cách nhanh chóng và tiện lợi.\r\n\r\nÂm thanh trên Mi Laptop Air 13,3 inch khá ấn tượng  với hai loa tùy chỉnh trên có công suất 2Wx2 được phát triển bởi nhà sản xuất chuyên nghiệp của Áo – AKG. Ngoài ra, chất lượng âm thanh còn được tăng cường bởi công nghệ âm thanh vòm Dolby Audio Premium, hỗ trợ hiệu ứng âm thanh vòm trên máy tính và tai nghe với khả năng phát âm thanh Hi-Fi 24kHz và 48kHz.\r\n\r\nVới viên pin 40Wh, Mi Laptop Air 13,3 inch có thể phục vụ người dùng trong vòng 9,5 tiếng sau một lần sạc. Việc hỗ trợ công nghệ sạc nhanh 1C, cũng giúp Mi Laptop Air 13,3 inch có thể sạc được 50% chỉ sau 30 phút.', '180703-Mi-Laptop-Air-13443-01-696x465.jpg', '2019-03-12', 4, 2),
(16, 'Intel chính thức ra mắt bộ xử lý Core i9 mạnh nhất cho laptop', '', 'Với loạt bộ xử lý Core thế hệ thứ 8 cho laptop mới nhất, Intel tập trung vào việc mang lại hiệu suất siêu khủng giống như trên máy tính để bàn.\r\n\r\nChỉ cần nhìn vào bộ xử lý 6 lõi mới nhất Core i9-8950HK, bạn có thể ấn tượng khi công ty đã lần đầu tiên tung ra một bộ xử lý trên lõi tứ đến với máy tính xách tay, hứa hẹn mạng đến hiệu suất làm việc “điên cuồng”.\r\n\r\nIntel cho biết bộ xử lý di động Core i9 nhanh hơn 29% so với Core i7 thế hệ thứ 7 khi nói đến hiệu năng chung, nâng trải nghiệm chơi Total War: Warhammer II tốt hơn 41%, và khả năng chỉnh sửa video 4K trong Adobe Premiere Pro nhanh hơn 59%.\r\nĐương nhiên đây không phải là bộ vi xử lý mà hầu hết người tiêu dùng cần. Nó đi kèm tính năng tăng tốc Turbo Boost đơn nhân lên đến 4,8 GHz và là bộ xử lý mở hoàn toàn, do đó bạn thực sự có thể ép xung nó một cách dễ dàng. Bên cạnh đó bạn cũng có thể lựa chọn các CPU thế hệ thứ 8 khác, bao gồm Core i7-8750H và 8850H, cũng được mở khóa một phần.\r\n\r\nNgoài ra, Intel cũng tung ra dòng CPU thế hệ thứ 8 mới được nhắm tới các dòng máy tính xách tay và máy tính để bàn hiện nay. Chúng bao gồm các bộ xử lý Core i3 và i5 mới, cũng như Core i7 với tính năng Turbo Boost cho tốc độ làm việc lên đến 4,5 GHz. Ở lĩnh vực máy tính để bàn, người dùng cũng có thể lựa chọn các phiên bản năng lượng thấp hơn đáp ứng nhu cầu gia đình, bao gồm Core i3 và i5, với nhiều trong số này đi kèm đến 6 lõi xử lý.', '1490026367_windows-10-creators-update-final-pc-01-696x392.jpg', '2019-03-11', 3213, 2),
(17, 'Dell OptiPlex 5050 – PC tối ưu cho văn phòng', '', 'Nói đến PC mọi người thường nghĩ đến những chiếc case máy tính với cấu hình khủng, giá cao, với dàn LED đủ màu để người dùng có thể đua xe và chơi game với fps cao nhất. Tuy nhiên thực tế thì ngoài mảng gaming màu mỡ này, nhiều hãng vẫn còn tiếp tục sản xuất những mẫu PC phục vụ cho môi trường doanh nghiệp, nổi bật trong số đó chính là ông lớn Dell. Vậy chiếc PC dành cho doanh nghiệp có gì khác so với PC gaming?\r\n\r\nThiết kế\r\nDell Optiplex 5050 MT sở hữu một ngoài hình cực kì lịch lãm với lớp sơn đen tuyền. Chiếm 60% mặt trước máy là mặt lưới với hình cắt kim cương vừa tạo điểm nhấn, vừa giúp cung cấp tối đa lượng gió mát vào case giúp giảm nhiệt. Phần diện tích còn lại ở mặt trước là nơi bố trí nút nguồn, 2 cổng USB 3.1, 2 cổng USB 2.0, 1 jack tai nghe/mic hỗn hợp và 1 ổ DVD. Sang tới mặt bên, Dell trang bị 4 miếng đệm cao su ở 4 góc giúp bạn có thể thoải mái lựa chọn cách đặt case ngang hay dọc tùy theo môi trường sử dụng. Thường ở doanh nghiệp thì bộ phận IT thường chọn cách để case nằm ngang trên bàn, sau đó màn hình LCD sẽ đặt ngay phía trên. Đấy là cách đặt case mình thấy rất hợp lý, vừa tiết kiệm diện tích, lại vừa có thể nâng màn hình LCD ngang tầm mắt giúp người dùng có tư thế ngồi tốt hơn, bảo về cho cổ và cột sống sau nhiều giờ làm việc.\r\n\r\n\r\n\r\nỞ phía mặt sau, chúng ta lại thấy được sự hào phóng của Dell với 1 loạt cổng kết nối. Có thêm 4 cổng USB 3.1, 2 cổng USB 2.0, 1 cổng LAN RJ45, 1 cổng line out cho âm thanh. Đặc biệt nhất là tận 5 cổng xuất hình ảnh bao gồm 2 cổng Display Port 1.2, 1 cổng HDMI 1.4, 1 công DVI và 1 cổng VGA. Đây là lần đầu tiên mình thấy một chiếc case có đầy đủ cổng xuất hình ảnh đến vậy, điều này giúp đảm bảo máy có thể tương thích với mọi loại màn hình hiện có trên thị trường, giúp giảm thiểu chi phí mua màn hình mới cho doanh nghiệp. Ngoài ra thì còn có 1 khe thông gió cho quạt 12cm thông thường với lưới mắt lưới hình vuông, phía dưới có thêm 1 khe thông gió tương tự nữa, phục vụ thông gió cho bộ nguồn.\r\n\r\n\r\n\r\nXét về ngoại hình thì đây là 1 case có thiết kế đẹp, hợp lý, lịch lãm mà không hề nhàm chán. Điểm mà mình không hài lòng duy nhất về ngoại hình có lẽ là kích thước: máy có kích thước 15.4 x 27.4 x 35cm, trọng lượng khoảng 8kg. So với các case thông thường mà bạn hay build thì đây là case không quá to, tuy nhiên với nhu cầu làm việc văn phòng yêu cầu cấu hình không cao hay nâng cấp quá nhiều về sau này thì việc sở hữu case với kích thước này là chưa thực sự tối ưu. Dell cũng có những dòng Optiplex tương tự với case kích thước nhỏ hơn, thậm chí có thể gắn luôn vào mặt sau màn hình, cực kì tiết kiệm diện tích mà lại đẹp. Bù lại thì việc nâng cấp máy về sau sẽ gặp khó khăn hơn, tản nhiệt cũng không thể bằng so với case kích cỡ tiêu chuẩn.\r\n\r\nPhần cứng\r\nBây giờ ta sẽ tiếp tục mở máy để xem thiết kế mặt trong. Trái tim của hệ thống là CPU Intel Core i5-7500, RAM 4GB, ổ cứng 1TB với hệ điều hành Fedora chạy trên nền Linux. i5 7500 là chiếc CPU thế hệ thứ 7 với tên gọi Kaby Lake được sản xuất trên tiến trình 14nm, chip có 4 lõi 4 luồng, bộ nhớ đệm 6MB hoạt động ở xung nhịp 3.4 GHz, turbo boost với mức xung 3.8 GHz. Đi kèm với cpu i5 là chip VGA tích hợp Intel HD630 với khả năng xuất hình ảnh 4k tần số 60Hz. Bộ khung cho máy hoạt động ổn định chính là bo mạch chủ sử dụng chipset Q270. Đây là chipset Intel sản xuất riêng cho môi trường doanh nghiệp, nó mạnh ngang dòng Z270 – dòng chipset mạnh nhất cho người dùng.', 'IMG_5438-696x538.jpg', '2019-03-11', 1, 2),
(18, 'Asus trình làng laptop sử dụng chip Snapdragon 835 Mobile PC', '', 'Tại sự kiện Qualcomm Snapdragon Tech Summit vừa diễn ra tạo Hawaii vừa qua, Asus đã trình làng chiếc laptop NovaGo (TP370) sử dụng chip Snapdraong 835 Mobile PC đầu tiên trên thế giới. \r\n\r\nĐây là mẫu laptop 2 trong 1 có khả năng xoay gập có thiết kế khá mỏng, bên cạnh chip Snapdragon 835 Mobile PC, máy còn được tích hợp modem Gigabit Snapdragon X16 LTE cho tốc độ truyền tải có tốc độ nhanh tương tự như Wi-Fi.\r\n\r\nMáy chạy phiên bản hệ điều hành Microsoft Windows 10 S, RAM trên máy có dung lượng  8GB, bộ nhớ 256 GB UFS 2.0, về khả năng kết nối máy được tích hợp 2 cổng USB 3.1 Gen 1 Type A và một cổng HDMI. Máy còn có khe lắm SIM bao gồm eSIM và Nano SIM.\r\n\r\nMáy sở hữu màn hình có kích thước 13,3 inch, màn hình này có thể cảm ứng và hỗ trợ bút cảm ứng. NovaGo có thời lượng pin lên đến 22 tiếng và hơn 30 ngày chờ. Máy có khả năng phản hồi ngay lập tức như smartphone.\r\n\r\nAsus NovaGo phiên bản 4GB RAM/64GB UFS 2.0 sẽ có mức giá 599 USD và 8GB RAM/256GB UFS 2.0 sẽ có giá 799 USD.', 'asus-novago-hands-on-4-696x392.jpg', '2019-03-11', 1, 2);


--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`CmtID`),
  ADD KEY `PostID` (`PostID`);

--
-- Chỉ mục cho bảng `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`OptID`);

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `CateID` (`CateID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `options`
--
ALTER TABLE `options`
  MODIFY `OptID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `Comments_ibfk_1` FOREIGN KEY (`PostID`) REFERENCES `posts` (`id`);

--
-- Các ràng buộc cho bảng `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `Posts_ibfk_1` FOREIGN KEY (`CateID`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
