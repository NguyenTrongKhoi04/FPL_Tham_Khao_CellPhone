

CREATE TABLE `account` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `phone` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `accountType` int(11) NOT NULL DEFAULT 0,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `idAccount` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO account VALUES("10","0123456789","$2y$10$icJRulaq9sP5OmBpx2/lie7tt0.URbCz5zjeKC35mYc8KYx/kYlr.","1","","6","2020-10-26 06:55:03","2020-10-26 06:55:03");
INSERT INTO account VALUES("11","0987654321","$2y$10$DMAx5Seb75jcSxHdmuAEAOCk2GvXEC99su4J.mt8TBm9SfJsGshke","1","","7","2020-10-26 06:56:23","2020-10-26 06:56:23");
INSERT INTO account VALUES("12","19001900","$2y$10$ug6LDU4rHomaxTe0THa3tO73DCwNrODz5JwOeDv1gLqVc8MZyTgEW","2","","4","2020-10-26 06:58:40","2020-10-26 06:58:40");
INSERT INTO account VALUES("13","19001009","$2y$10$2Zw5g9FDMxfFdDgNH.CbjOoeElSFlco8Feta4X8NMa6VRoCqSyZeu","2","","5","2020-10-26 07:01:41","2020-10-26 07:01:41");



CREATE TABLE `accountant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nameManager` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nameStaff` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `idStaff` int(11) NOT NULL,
  `sex` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `idUniversity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO accountant VALUES("4","Hoàng Hải Long","Nguyễn Văn B","1","Boy","$2y$10$UiZb9RPoJiIi/eT.Emmqw.9U1MYtk4Zx6H8S9W72nSoExYj.y7OC.","099999999","6","2020-10-26 07:08:08","2020-10-26 07:08:08");



CREATE TABLE `bank` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `effectiveYear` date DEFAULT NULL,
  `active` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `policy` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `TransactionInformation` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `moneyTransferMethod` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sendMessage` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO bank VALUES("4","Agribank","uploads/bank/KY156DETGWCIHJUQSM7P/1604760715.jpg","100 Nguyễn Chí Thanh, Hà Nội","","","","","","","KY156DETGWCIHJUQSM7P","2020-10-26 06:58:40","2020-11-07 14:51:55");
INSERT INTO bank VALUES("5","VNPT","uploads/bank/JD62VPWXYKLA9G4QERMZ/1603696388.jpg","100 Sơn Tây, Hà Nội","","","","","","","JD62VPWXYKLA9G4QERMZ","2020-10-26 07:01:41","2020-10-26 07:13:08");



CREATE TABLE `enterprise` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `jobrecruitmentInformation` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;




CREATE TABLE `interestrate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tenor` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `interestrates` float NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`,`tenor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;




CREATE TABLE `loanrecords` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idAccount` int(11) NOT NULL,
  `pay` float NOT NULL,
  `money` float NOT NULL,
  `interestRate` float NOT NULL,
  `effectiveDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `expirationDate` timestamp NULL DEFAULT NULL,
  `idbankaccept` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO loanrecords VALUES("3","1","6050000","5000000","20","2020-10-26 07:12:54","2021-10-26 07:12:54","5","2020-10-26 07:12:54","2020-10-26 07:12:54");



CREATE TABLE `loanrequest` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `accountNumber` int(11) NOT NULL,
  `money` float NOT NULL,
  `reasonforloaning` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `universityApproved` int(11) NOT NULL DEFAULT 0,
  `enterpriseApproved` int(11) NOT NULL DEFAULT 0,
  `pay` float NOT NULL,
  `iduniveraccept` int(11) NOT NULL,
  `idbankaccept` int(11) NOT NULL DEFAULT 0,
  `tenor` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT current_timestamp(),
  `interestRate` float NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO loanrequest VALUES("16","1","5000000","Tại các bến xe, quy định đeo khẩu trang được chấp hành khá nghiêm túc. Tại các bến xe lớn như: Bến xe Giáp Bát, Mỹ Đình, Nước ngầm, hành khách khi vào bến mua vé, lên xe cơ bản đều đeo khẩu trang, trường hợp không có sẽ được các nhân viên trong bến nhắc nhở. Tất cả lái, phụ xe hành khách liên tỉnh khi vào bến, xuất bến đều đeo khẩu trang. Nhiều xe còn chuẩn bị khẩu trang để phát cho hành khách nếu sơ ý quên.

Theo ông Trịnh Hoài Nam, Phó Giám đốc Bến xe Nước ngầm, ngay sau khi UBND thành phố có chỉ đạo, bến xe đã trang bị nước sát khuẩn, lắp đặt biển báo, yêu cầu hành khách mỗi khi ra, vào bến phải đeo khẩu trang và vệ sinh tay. Nếu phát hiện trường hợp không chấp hành, tổ bảo vệ sẽ không cho vào bến và báo cáo lực lượng chức năng xử lý theo quy định.","1","1","6050000","6","5","12 tháng","20","2020-10-26 07:09:52","2020-10-26 07:12:54");
INSERT INTO loanrequest VALUES("19","5","5000000","Vay tiền thuê nhà jbbhjkhgfxfcgfgbhjjnmk jbbhjkhgfxfcgfgbhjjnmk jbbhjkhgfxfcgfgbhjjnmk jbbhjkhgfxfcgfgbhjjnmk jbbhjkhgfxfcgfgbhjjnmk jbbhjkhgfxfcgfgbhjjnmk jbbhjkhgfxfcgfgbhjjnmk jbbhjkhgfxfcgfgbhjjnmk jbbhjkhgfxfcgfgbhjjnmk jbbhjkhgfxfcgfgbhjjnmk","0","0","0","0","0","12 tháng","0","2020-11-02 02:52:33","2020-11-02 02:52:33");
INSERT INTO loanrequest VALUES("20","5","2000000","Chuẩn bị dụng cụ học tập","0","0","0","0","0","12 tháng","0","2020-11-02 02:52:52","2020-11-02 02:52:52");
INSERT INTO loanrequest VALUES("21","5","7000000","Nộp tiền học phí","0","0","0","0","0","12 tháng","0","2020-11-02 02:53:36","2020-11-02 02:53:36");
INSERT INTO loanrequest VALUES("26","5","7000000","Nộp tiền học phí","0","0","0","0","0","12 tháng","0","2020-11-02 05:15:24","2020-11-02 05:15:24");
INSERT INTO loanrequest VALUES("30","5","8000000","lý do khác","0","0","0","0","0","12 tháng","0","2020-11-02 05:19:39","2020-11-02 05:19:39");
INSERT INTO loanrequest VALUES("31","11","4000000","Tôi muốn mua xe máy","0","0","0","0","0","12 tháng","0","2020-11-09 05:57:00","2020-11-09 05:57:00");
INSERT INTO loanrequest VALUES("33","11","5000000","Vay tiền thuê njbbhjkhgfxfcgfgbhjjnmk jbbhjkhgfxfcgfgbhjjnmk jbbhjkhgfxfcgfgbhjjnmk jbbhjkhgfxfcgfgbhjjnmk jbbhjkhgfxfcgfgbhjjnmk jbbhjkhgfxfcgfgbhjjnmk jbbhjkhgfxfcgfgbhjjnmk jbbhjkhgfxfcgfgbhjjnmk jbbhjkhgfxfcgfgbhjjnmk jbbhjkhgfxfcgfgbhjjnmk hà","0","0","0","0","0","12 tháng","0","2020-11-09 06:04:10","2020-11-09 06:04:10");
INSERT INTO loanrequest VALUES("34","11","5000000","Vay tiền thuê nhà jbbhjkhgfxfcgfgbhjjnmk jbbhjkhgfxfcgfgbhjjnmk jbbhjkhgfxfcgfgbhjjnmk jbbhjkhgfxfcgfgbhjjnmk jbbhjkhgfxfcgfgbhjjnmk jbbhjkhgfxfcgfgbhjjnmk jbbhjkhgfxfcgfgbhjjnmk jbbhjkhgfxfcgfgbhjjnmk jbbhjkhgfxfcgfgbhjjnmk jbbhjkhgfxfcgfgbhjjnmk","0","0","0","0","0","6 tháng","0","2020-11-09 06:06:44","2020-11-09 06:06:44");
INSERT INTO loanrequest VALUES("35","11","9000000","thích thì vay thôi","1","0","9360000","6","0","3 tháng","4","2020-11-09 06:07:12","2020-11-09 06:08:23");
INSERT INTO loanrequest VALUES("37","1","8000000","jbbhjkhgfxfcgfgbhjjnmk jbbhjkhgfxfcgfgbhjjnmk jbbhjkhgfxfcgfgbhjjnmk jbbhjkhgfxfcgfgbhjjnmk jbbhjkhgfxfcgfgbhjjnmk jbbhjkhgfxfcgfgbhjjnmk jbbhjkhgfxfcgfgbhjjnmk jbbhjkhgfxfcgfgbhjjnmk jbbhjkhgfxfcgfgbhjjnmk jbbhjkhgfxfcgfgbhjjnmk","0","0","0","0","0","4","0","2020-11-22 08:52:44","2020-11-22 08:52:44");



CREATE TABLE `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_receiver` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO message VALUES("16","5fa66384e3afed14f0001b6d","","Chưa đủ kì học","2","2020-11-09 05:37:29","2020-11-09 05:37:29");
INSERT INTO message VALUES("19","5fa67613e3afed0ae0001103","","Học lực, sức khỏe, thời gian học đủ điều kiện","2","2020-11-09 05:55:18","2020-11-09 05:55:18");
INSERT INTO message VALUES("20","5f9674bae3afed1908005bb6","","thích thì nhích","2","2020-11-16 16:54:39","2020-11-16 16:54:39");
INSERT INTO message VALUES("23","5f9674bae3afed1908005bb6","thích thì nhích","thích thì nhích Ý thức Giao thông của người Lào khiến người Việt phải xấu hổ
Những điều thú vị về đất nước Lào Ý thức Giao thông của người Lào khiến người Việt phải xấu hổ
Những điều thú vị về đất nước Lào Ý thức Giao
 thông của người Lào khiến người Việt phải xấu hổ
Những điều thú vị về đất nước Lào Ý thức Giao thông c
ủa người Lào khiến người Việt phải xấu hổ
Những điều thú vị về đất nước Lào Ý thức Giao t
hông của người Lào khiến người Việt phải xấu hổ
Những điều thú vị về đất nước Lào Ý th Ý thức 
Giao thông của người Lào khiến người Việt phải xấu hổ
Những điều thú vị về đất nước Lào Ý thức Gi
ao thông của người Lào khiến người Việt phải xấu hổ
Những điều thú vị về đất nước Lào    Ý thức
 Giao thông của người Lào khiến người Việt phải xấu hổ
Những điều thú vị về đất nước Lào   Ý thức Gia
o thông của người Lào khiến người Việt phải xấu hổ
Những điều thú vị về đất nước Lào  Ý thức Giao
 thông của người Lào khiến người Việt phải xấu hổ
Những điều thú vị về đất nước L","3","2020-11-16 16:54:39","2020-11-16 16:54:39");
INSERT INTO message VALUES("24","5f9674bae3afed1908005bb6","thích thì nhích 33","<p><strong>&quot;Đại dịch Covid-19 chứng minh d&ugrave; kh&oacute; khăn, thử th&aacute;ch rất nhiều, ch&uacute;ng ta kh&ocirc;ng đầu h&agrave;ng m&agrave; lu&ocirc;n t&igrave;m c&aacute;ch vươn l&ecirc;n. Đ&oacute; l&agrave; bản chất con người Việt Nam, kh&ocirc;ng bao giờ chịu khuất phục trước kẻ th&ugrave; hay trước thi&ecirc;n tai, dịch bệnh&quot;, PGS. TS Nguyễn Viết Th&ocirc;ng ph&acirc;n t&iacute;ch.</strong></p>

<p>Từ năm 2014, Nghị quyết 33 của Ban chấp h&agrave;nh Trung ương về x&acirc;y dựng v&agrave; ph&aacute;t triển văn h&oacute;a, con người Việt Nam để đ&aacute;p ứng y&ecirc;u cầu ph&aacute;t triển bền vững đất nước đ&atilde; đề ra nhiều mục ti&ecirc;u cụ thể.</p>

<p>Đ&oacute; l&agrave; ho&agrave;n thiện c&aacute;c chuẩn mực gi&aacute; trị văn h&oacute;a v&agrave; con người Việt Nam; x&acirc;y dựng m&ocirc;i trường văn h&oacute;a l&agrave;nh mạnh, ph&ugrave; hợp với bối cảnh ph&aacute;t triển kinh tế thị trường định hướng x&atilde; hội chủ nghĩa v&agrave; hội nhập q","3","2020-11-16 16:54:39","2020-11-16 16:54:39");



CREATE TABLE `messageloan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_receiver` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `idloanrequest` int(11) NOT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO messageloan VALUES("16","5fa66384e3afed14f0001b6d","0","","Chưa đủ kì học","2020-11-09 05:37:29","2020-11-09 05:37:29");
INSERT INTO messageloan VALUES("19","5fa67613e3afed0ae0001103","0","","Học lực, sức khỏe, thời gian học đủ điều kiện","2020-11-09 05:55:18","2020-11-09 05:55:18");
INSERT INTO messageloan VALUES("20","5f9674bae3afed1908005bb6","0","","thích thì nhích","2020-11-16 16:54:39","2020-11-16 16:54:39");
INSERT INTO messageloan VALUES("23","5f9674bae3afed1908005bb6","37","thích thì nhích","thích thì nhích Ý thức Giao thông của người Lào khiến người Việt phải xấu hổ
Những điều thú vị về đất nước Lào Ý thức Giao thông của người Lào khiến người Việt phải xấu hổ
Những điều thú vị về đất nước Lào Ý thức Giao
 thông của người Lào khiến người Việt phải xấu hổ
Những điều thú vị về đất nước Lào Ý thức Giao thông c
ủa người Lào khiến người Việt phải xấu hổ
Những điều thú vị về đất nước Lào Ý thức Giao t
hông của người Lào khiến người Việt phải xấu hổ
Những điều thú vị về đất nước Lào Ý th Ý thức 
Giao thông của người Lào khiến người Việt phải xấu hổ
Những điều thú vị về đất nước Lào Ý thức Gi
ao thông của người Lào khiến người Việt phải xấu hổ
Những điều thú vị về đất nước Lào    Ý thức
 Giao thông của người Lào khiến người Việt phải xấu hổ
Những điều thú vị về đất nước Lào   Ý thức Gia
o thông của người Lào khiến người Việt phải xấu hổ
Những điều thú vị về đất nước Lào  Ý thức Giao
 thông của người Lào khiến người Việt phải xấu hổ
Những điều thú vị về đất nước L","2020-11-16 16:54:39","2020-11-16 16:54:39");
INSERT INTO messageloan VALUES("24","5f9674bae3afed1908005bb6","16","thích thì nhích 33","<p><strong>&quot;Đại dịch Covid-19 chứng minh d&ugrave; kh&oacute; khăn, thử th&aacute;ch rất nhiều, ch&uacute;ng ta kh&ocirc;ng đầu h&agrave;ng m&agrave; lu&ocirc;n t&igrave;m c&aacute;ch vươn l&ecirc;n. Đ&oacute; l&agrave; bản chất con người Việt Nam, kh&ocirc;ng bao giờ chịu khuất phục trước kẻ th&ugrave; hay trước thi&ecirc;n tai, dịch bệnh&quot;, PGS. TS Nguyễn Viết Th&ocirc;ng ph&acirc;n t&iacute;ch.</strong></p>

<p>Từ năm 2014, Nghị quyết 33 của Ban chấp h&agrave;nh Trung ương về x&acirc;y dựng v&agrave; ph&aacute;t triển văn h&oacute;a, con người Việt Nam để đ&aacute;p ứng y&ecirc;u cầu ph&aacute;t triển bền vững đất nước đ&atilde; đề ra nhiều mục ti&ecirc;u cụ thể.</p>

<p>Đ&oacute; l&agrave; ho&agrave;n thiện c&aacute;c chuẩn mực gi&aacute; trị văn h&oacute;a v&agrave; con người Việt Nam; x&acirc;y dựng m&ocirc;i trường văn h&oacute;a l&agrave;nh mạnh, ph&ugrave; hợp với bối cảnh ph&aacute;t triển kinh tế thị trường định hướng x&atilde; hội chủ nghĩa v&agrave; hội nhập q","2020-11-16 16:54:39","2020-11-16 16:54:39");



CREATE TABLE `pay` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tradingcode` int(11) NOT NULL,
  `daytrading` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `idAccount` int(11) NOT NULL,
  `money` float NOT NULL,
  `content` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;




CREATE TABLE `receipts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `transactionNumber` int(11) NOT NULL,
  `effectiveDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `idAccount` int(11) NOT NULL,
  `money` float NOT NULL,
  `content` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;




CREATE TABLE `requestjob` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `jobApplication` varchar(10000) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO requestjob VALUES("13","5f9674bae3afed1908005bb6","avsdvdsvs","<p>akjdv<span style="font-size:24px">jksd</span><strong><span style="font-size:24px">bjk</span>vbjksdvnsdv</strong></p>","2020-11-23 09:08:46","2020-11-23 09:08:46");
INSERT INTO requestjob VALUES("24","5f9674bae3afed1908005bb6","Đơn xin việc của long","<h1 style="text-align:center"><strong>Cộng h&ograve;a x&atilde; hội chủ nghĩa VN<br />
Độc lập - Tự do - Hạnh ph&uacute;c</strong></h1>

<p><em><strong>K&iacute;nh gửi: Bố t&ocirc;i!</strong></em></p>

<p>&nbsp;</p>","2020-11-29 16:37:19","2020-11-30 06:22:12");
INSERT INTO requestjob VALUES("25","5f9674bae3afed1908005bb6","Đơn xin việc của long Hoàng","<!-- Mẫu đơn xin việc -->
<p style="text-align:center"><span style="font-size:14px"><strong>CỘNG H&Ograve;A X&Atilde; HỘI CHỦ NGHĨA VIỆT NAM<br />
ĐỘC LẬP - TỰ DO - HẠNH PH&Uacute;C<br />
____________________________________________</strong></span></p>

<p style="text-align:center">&nbsp;</p>

<p style="text-align:center"><span style="font-size:20px"><strong>ĐƠN XIN VIỆC</strong></span></p>

<p style="text-align:center"><span style="font-size:18px"><strong>K&iacute;nh gửi:...........................................................................................................................................</strong></span></p>

<p><span style="font-size:16px">T&ocirc;i t&ecirc;n l&agrave;: ..................................................................................................................................................................</span></p>

<p><span style="font-size:16px">Chứng minh thư số: ..................................................................................................................................................</span></p>

<p><span style="font-size:16px">Ng&agrave;y sinh: .................................................................................................................................................................</span></p>

<p><span style="font-size:16px">Địa chỉ: ......................................................................................................................................................................</span></p>

<p><span style="font-size:16px">Số điện thoại: ............................................................................................................................................................</span></p>

<p><span style="font-size:16px">Đang học tại: .............................................................................................................................................................</span></p>

<p><span style="font-size:16px">Lớp: ...........................................................................................................................................................................</span></p>

<p><span style="font-size:16px">C&ocirc;ng việc muốn ứng tuyển: .......................................................................................................................................................................................</span></p>

<p><span style="font-size:16px">.......................................................................................................................................................................................</span></p>

<p><span style="font-size:16px">.......................................................................................................................................................................................</span></p>

<p><span style="font-size:16px">.............................</span></p>

<p><span style="font-size:16px">Khả năng của bản th&acirc;n: .....................................................................................................................................................................................</span></p>

<p><span style="font-size:16px">.....................................................................................................................................................................................</span></p>

<p><span style="font-size:16px">.....................................................................................................................................................................................</span></p>

<p><span style="font-size:16px">Thời gian c&oacute; thể l&agrave;m(full time or part time): ...........................................................................................................................................................</span></p>

<p><span style="font-size:16px">Mong muốn của bản th&acirc;n: </span></p>

<p><span style="font-size:16px">...................................................................................................................................................................................</span></p>

<p><span style="font-size:16px">....................................................................................................................................................................................</span></p>

<p><span style="font-size:16px">....................................................................................................................................................................................</span></p>

<p><span style="font-size:16px">.......................</span></p>

<p><span style="font-size:16px">Nguy&ecirc;n vọng về nơi l&agrave;m việc: ....................................................................................................................................................................................</span></p>

<p><span style="font-size:16px">....................................................................................................................................................................................</span></p>

<p><span style="font-size:16px">.....................................................................</span></p>

<p><span style="font-size:16px">Mức lương mong muốn (tr&ecirc;n th&aacute;ng): ...................................................................................................................................................................................</span></p>

<p style="text-align:center"><span style="font-size:16px">Ng&agrave;y....th&aacute;ng......,năm........</span></p>

<p style="text-align:center"><span style="font-size:16px"><strong>&nbsp; &nbsp;Người l&agrave;m đơn<br />
(K&yacute; t&ecirc;n)</strong></span></p>

<p style="text-align:center"><span style="font-size:14px">____________<br />
___________________________</span></p>
<!-- /Mẫu đơn xin việc -->","2020-11-30 06:22:35","2020-11-30 06:22:35");



CREATE TABLE `studentatm` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_account` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id_student` int(11) NOT NULL,
  `accountType` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `bank` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;




CREATE TABLE `studentwork` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nameManager` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sex` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `idStaff` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `nameStaff` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `idUniversity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO studentwork VALUES("10","Hoàng Hải Long","Boy","1","Nguyễn Văn A","038899999","$2y$10$SoQ4iLDy5jO/qofiBZHbbeG1q5MlNsWfModkEbIVDJ1S1LgsZ1SPi","6","2020-10-26 07:07:17","2020-10-26 07:07:17");
INSERT INTO studentwork VALUES("11","Hoàng Long","Boy","23","Hoàng Long","0123456789","$2y$10$RF8t/jPDCqB93ATNZOzyzOfN1BoFTY.yHx0aNpTcXjzjUIEuGk0XW","6","2020-11-30 07:29:15","2020-11-30 07:29:26");



CREATE TABLE `university` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `universitycode` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `totalStudent` int(11) NOT NULL,
  `foundedYear` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO university VALUES("6","Đại học Bách Khoa","uploads/university/HVMX5P3Y0REF7ABLQOZD/1606724903.jpg","BKA","110 Lê Thanh Nghị, Hà Nội","0","2020-10-21","HVMX5P3Y0REF7ABLQOZD","2020-10-26 06:55:03","2020-11-30 08:28:23");
INSERT INTO university VALUES("7","Đại học Giao thông vận tải","","GHA","100 Cầu Giấy, Cầu Giấy, Hà Nội","0","","B6UZX4V1CSFI2QEH5MKT","2020-10-26 06:56:22","2020-10-26 06:56:22");



CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` int(11) NOT NULL DEFAULT 0,
  `last_login` timestamp NULL DEFAULT NULL,
  `first_name` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `pic` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO users VALUES("2","admin@admin.com","$2y$10$3px4GYoIha9rqD5z6em/Hu95CAJjqjnF7x0um9m4BQwLH6j21rQVW","1","","Hoàng","Long","2020-05-28 18:33:11","2020-05-28 18:33:11","","uploads/admin/ABC/1603526127.jpg","ABC","Việt Nam","Hà Nội","100 Kim Ngưu, Hai Bà Trưng , Hà Nội");

