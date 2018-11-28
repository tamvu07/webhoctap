-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2018 at 01:36 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webhoctap`
--

-- --------------------------------------------------------

--
-- Table structure for table `bocauhoi`
--

CREATE TABLE `bocauhoi` (
  `MaCauHoi` int(11) NOT NULL,
  `MaDeThi` int(11) NOT NULL,
  `MaMonHoc` int(11) NOT NULL,
  `NoiDungCauHoi` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `A` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `B` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `C` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `D` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DapAn` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bocauhoi`
--

INSERT INTO `bocauhoi` (`MaCauHoi`, `MaDeThi`, `MaMonHoc`, `NoiDungCauHoi`, `A`, `B`, `C`, `D`, `DapAn`) VALUES
(2, 1, 1, '        I have studied English ........eight months. \r\n    ', 'for', 'since', 'by', 'in ', 'for'),
(8, 1, 1, 'A good clock always keeps … time.', 'accurate', 'serious', 'certain', 'true', 'accurate'),
(9, 1, 1, 'She has … a lot of money in her new job.', ' found', 'done', 'earned', 'gained', 'earned'),
(10, 1, 1, 'Would you … my opening the windows now ?', 'concern', 'worry', 'mind', 'want', 'mind'),
(11, 1, 1, 'We can ....the difficulty without too much effort.', 'get off', 'get away', 'get through', 'get over', 'get over'),
(12, 1, 1, ' ….. people go to the movies now than ten years ago.', 'Fewer', 'Few', 'Lesser', ' Less', 'Fewer'),
(13, 1, 1, ' We don’t know the … of the game.', 'laws', 'rules', 'customs', 'facts', 'rules'),
(14, 1, 1, 'We had to use our neighbour’s telephone because ours was …..', ' out of order', 'off duty', 'out of work', 'off work', 'out of order'),
(15, 1, 1, ' It was … a boring speech that I fell asleep.', 'so', 'very', ' such', 'too', 'such'),
(16, 1, 1, 'What he says makes no … to me.', 'matter', 'sense', 'truth', 'reason', 'sense');

-- --------------------------------------------------------

--
-- Table structure for table `dethi`
--

CREATE TABLE `dethi` (
  `MaMonHoc` int(11) NOT NULL,
  `MaDeThi` int(11) NOT NULL,
  `ThoiGian` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dethi`
--

INSERT INTO `dethi` (`MaMonHoc`, `MaDeThi`, `ThoiGian`) VALUES
(1, 1, 90),
(1, 2, 90),
(1, 3, 90);

-- --------------------------------------------------------

--
-- Table structure for table `giangvien`
--

CREATE TABLE `giangvien` (
  `GiangVienID` int(11) NOT NULL,
  `TaiKhoanID` int(11) NOT NULL,
  `MaMonHoc` int(11) DEFAULT NULL,
  `MaDeThi` int(11) DEFAULT NULL,
  `TenGiangVien` varchar(100) CHARACTER SET utf8 NOT NULL,
  `MatKhau` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `giangvien`
--

INSERT INTO `giangvien` (`GiangVienID`, `TaiKhoanID`, `MaMonHoc`, `MaDeThi`, `TenGiangVien`, `MatKhau`) VALUES
(1, 3, 1, 1, 'giang vien 1', '123'),
(3, 4, 1, 2, 'giang vien 2', '123'),
(4, 3, 1, 3, 'giang vien 3', '123');

-- --------------------------------------------------------

--
-- Table structure for table `hocvien`
--

CREATE TABLE `hocvien` (
  `HocVienID` int(11) NOT NULL,
  `TaiKhoanID` int(11) NOT NULL,
  `MaMonHoc` int(11) NOT NULL,
  `TenHocVien` varchar(20) CHARACTER SET utf8 NOT NULL,
  `MatKhau` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Avatar` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hocvien`
--

INSERT INTO `hocvien` (`HocVienID`, `TaiKhoanID`, `MaMonHoc`, `TenHocVien`, `MatKhau`, `Email`, `Avatar`) VALUES
(1, 1, 1, 'tam 1', '1', 'tam1@gmail.com', NULL),
(2, 2, 1, 'tam 2', '1', 'tam2@gmail.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ketqua`
--

CREATE TABLE `ketqua` (
  `MaDeThi` int(11) NOT NULL,
  `MaMonHoc` int(11) NOT NULL,
  `HocVienID` int(11) NOT NULL,
  `Diem` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `monhoc`
--

CREATE TABLE `monhoc` (
  `MaMonHoc` int(11) NOT NULL,
  `TenMonHoc` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `BaiGiang` text COLLATE utf8_unicode_ci,
  `DeThi` int(11) DEFAULT NULL,
  `Clip` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `monhoc`
--

INSERT INTO `monhoc` (`MaMonHoc`, `TenMonHoc`, `BaiGiang`, `DeThi`, `Clip`) VALUES
(1, 'tieng anh', '<h2>3 Loại&nbsp;<a href=\"http://kenhtuyensinh.vn/cau-dieu-kien\" title=\"câu điều kiện trong tiếng anh\">c&acirc;u điều kiện trong tiếng anh</a></h2>\r\n\r\n<h3>(1) C&acirc;u điều kiện loại I</h3>\r\n\r\n<p><strong>Kh&aacute;i niệm về c&acirc;u điều kiện loại 1</strong></p>\r\n\r\n<ul>\r\n	<li><em>C&acirc;u điều kiện loại I c&ograve;n được gọi l&agrave; c&acirc;u điều kiện c&oacute; thực ở hiện tại.</em></li>\r\n	<li><em>Điều kiện c&oacute; thể xảy ra ở hiện tại hoặc tương lai.</em></li>\r\n</ul>\r\n\r\n<h3>Cấu tr&uacute;c - C&ocirc;ng thức&nbsp;<a href=\"http://kenhtuyensinh.vn/cau-dieu-kien\" title=\"câu điều kiện loại 1 \">c&acirc;u điều kiện loại 1</a></h3>\r\n\r\n<table border=\"1\" cellpadding=\"0\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p>If + S + V (hiện tại), S + will + V (nguy&ecirc;n mẫu)</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>IF + Chủ ngữ 1 + Động từ chia ở th&igrave; hiện tại đơn + Bổ ngữ, Chủ ngữ 2 + WILL + Động từ nguy&ecirc;n mẫu + Bổ ngữ (nếu c&oacute;).</p>\r\n\r\n<p>N&oacute;i c&aacute;ch kh&aacute;c, ở c&acirc;u điều kiện loại 1, mệnh đề IF d&ugrave;ng th&igrave; hiện tại đơn, mệnh đề ch&iacute;nh d&ugrave;ng th&igrave; tương lai đơn.</p>\r\n\r\n<ul>\r\n	<li><em>Chủ ngữ 1 v&agrave; chủ ngữ 2 c&oacute; thể tr&ugrave;ng nhau. Bổ ngữ c&oacute; thể kh&ocirc;ng c&oacute;, t&ugrave;y &yacute; nghĩa của c&acirc;u. Mệnh đề IF v&agrave; mệnh đề ch&iacute;nh c&oacute; thể đứng trước hay sau đều được.</em></li>\r\n	<li><em>Trong c&acirc;u điều kiện loại I, động từ của mệnh đề điều kiện chia ở th&igrave; hiện tại đơn, c&ograve;n động từ trong mệnh đề ch&iacute;nh chia ở th&igrave; tương lai đơn. V&iacute; dụ:</em></li>\r\n</ul>\r\n\r\n<p>If you come into my garden, my dog will bite you. (Nếu anh v&agrave;o vườn của t&ocirc;i, con ch&oacute; của t&ocirc;i sẽ cắn anh đ&oacute;.)</p>\r\n\r\n<p>If it is sunny, I will go fishing. (Nếu trời nắng tốt, t&ocirc;i sẽ đi c&acirc;u c&aacute;.)</p>\r\n\r\n<h3>C&aacute;ch d&ugrave;ng c&acirc;u điều kiện loại 1:</h3>\r\n\r\n<p>C&acirc;u điều kiện loại 1 c&ograve;n c&oacute; thể được gọi l&agrave; c&acirc;u điều kiện hiện tại c&oacute; thể c&oacute; thật. Ta sử dụng c&acirc;u điều kiện loại 1 để đặt ra một điều kiện c&oacute; thể thực hiện được trong hiện tại v&agrave; n&ecirc;u kết quả c&oacute; thể xảy ra.&nbsp;<a href=\"http://kenhtuyensinh.vn/ngu-phap-tieng-anh\" title=\"ngữ pháp tiếng anh\">ngữ ph&aacute;p tiếng anh</a></p>\r\n\r\n<h3>(2) C&acirc;u điều kiện loại II</h3>\r\n\r\n<p>Kh&aacute;i niệm về c&acirc;u điều kiện loại 2:</p>\r\n\r\n<ul>\r\n	<li><em>C&acirc;u điều kiện loại II c&ograve;n được gọi l&agrave; c&acirc;u điều kiện kh&ocirc;ng c&oacute; thực ở hiện tại.</em></li>\r\n	<li><em>Điều kiện kh&ocirc;ng thể xảy ra ở hiện tại hoặc tương lai, điều kiện chỉ l&agrave; một giả thiết, một ước muốn tr&aacute;i ngược với thực trạng hiện tại.</em></li>\r\n</ul>\r\n\r\n<h3>Cấu tr&uacute;c c&acirc;u điều kiện loại 2</h3>\r\n\r\n<table border=\"1\" cellpadding=\"0\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"vertical-align:top\">\r\n			<p>If + S + V (qu&aacute; khứ), S + would + V (nguy&ecirc;n mẫu)</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>- Trong c&acirc;u điều kiện loại II, động từ của mệnh đề điều kiện chia ở bang th&aacute;i c&aacute;ch (past subjunctive), động từ của mệnh đề ch&iacute;nh chia ở th&igrave; điều kiện hiện tại (simple conditional). Ch&uacute; &yacute;: B&agrave;ng th&aacute;i c&aacute;ch (Past subjunctive) l&agrave; h&igrave;nh thức chia động từ giống hệt như th&igrave; qu&aacute; khư đơn, ri&ecirc;ng động từ &ldquo;to be&rdquo; th&igrave; d&ugrave;ng &ldquo;were&rdquo; cho tất cả c&aacute;c ng&ocirc;i.</p>\r\n\r\n<p>V&iacute; dụ:</p>\r\n\r\n<ul>\r\n	<li><em>If I were a bird, I would be very happy. (Nếu t&ocirc;i l&agrave; một con chim, t&ocirc;i sẽ rất hạnh ph&uacute;c.)&nbsp;&nbsp;&nbsp;&nbsp; &lt;= t&ocirc;i kh&ocirc;ng thể l&agrave; chim được</em></li>\r\n	<li><em>If I had a million USD, I would buy that car. (Nếu t&ocirc;i c&oacute; một triệu đ&ocirc; la, t&ocirc;i sẽ mua chiếc xe đ&oacute;.)&nbsp;&nbsp;&nbsp;&nbsp; &lt;= hiện tại t&ocirc;i kh&ocirc;ng c&oacute;</em></li>\r\n</ul>\r\n\r\n<h3>(3) C&acirc;u điều kiện loại III</h3>\r\n\r\n<p>Kh&aacute;i niệm về c&acirc;u điều kiện loại 3:</p>\r\n\r\n<ul>\r\n	<li><em>C&acirc;u điều kiện loại III l&agrave; c&acirc;u điều kiện kh&ocirc;ng c&oacute; thực trong qu&aacute; khứ.</em></li>\r\n	<li><em>Điều kiện kh&ocirc;ng thể xảy ra trong qu&aacute; khứ, chỉ mang t&iacute;nh ước muốn trong qu&aacute; khứ, một giả thiết tr&aacute;i ngược với thực trạng ở qu&aacute; khứ.</em></li>\r\n</ul>\r\n\r\n<h3>Cấu tr&uacute;c c&acirc;u điều kiện loại 3</h3>\r\n\r\n<table border=\"1\" cellpadding=\"0\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p>If + S + had + P.P (qu&aacute; khứ ph&acirc;n từ), S + would + have + P.P</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>- Trong c&acirc;u điều kiện loại III, động từ của mệnh đề điều kiện chia ở qu&aacute; khứ ph&acirc;n từ, c&ograve;n động từ của mệnh đề ch&iacute;nh chia ở điều kiện ho&agrave;n th&agrave;nh (perfect conditional). V&iacute; dụ:</p>\r\n\r\n<blockquote>\r\n<ul>\r\n	<li><em>If he had come to see me yesterday, I would have taken him to the movies. (Nếu h&ocirc;m qua n&oacute; đến thăm t&ocirc;i th&igrave; t&ocirc;i đ&atilde; đưa n&oacute; đi xem phim rồi.)</em></li>\r\n	<li><em>If I hadn&rsquo;t been absent yesterday, I would have met him. (Nếu h&ocirc;m qua t&ocirc;i kh&ocirc;ng vắng mặt th&igrave; t&ocirc;i đ&atilde; gặp mặt anh ta rồi.)</em></li>\r\n</ul>\r\n</blockquote>\r\n\r\n<h2>N&Acirc;NG CAO:</h2>\r\n\r\n<h2>1. C&acirc;u Điều Kiện Diễn Tả Th&oacute;i Quen Hoặc Một Sự Thật Hiển Nhi&ecirc;n</h2>\r\n\r\n<p>C&acirc;u điều kiện n&agrave;y diễn tả một th&oacute;i quen, một h&agrave;nh động thường xuy&ecirc;n xảy ra nếu điều kiện được đ&aacute;p ứng, hoặc diễn tả một sự thật hiễn nhi&ecirc;n, một kết quả tất yếu xảy ra.&nbsp;<a href=\"http://kenhtuyensinh.vn/hoc-tieng-anh\" title=\"học tiếng anh\">học tiếng anh</a></p>\r\n\r\n<p>Cấu tr&uacute;c:&nbsp;<strong>If + S + V (hiện tại), S + V (hiện tại)</strong></p>\r\n\r\n<ul>\r\n	<li>Tất cả động từ trong c&acirc;u (mệnh đề ch&iacute;nh v&agrave; mệnh đề điều kiện) đều được chia ở th&igrave; hiện tại đơn.</li>\r\n	<li>Nếu diễn tả th&oacute;i quen, trong mệnh đề ch&iacute;nh thường xuất hiện th&ecirc;m: often, usually, or always. V&iacute; dụ:\r\n	<ul>\r\n		<li>I often drink milk if I do not sleep at night. (T&ocirc;i thường uống sữa nếu như t&ocirc;i thức trắng đ&ecirc;m.)</li>\r\n		<li>I usually walk to school if I have enough time. (T&ocirc;i thường đi bộ đến trường nếu t&ocirc;i c&oacute; thời gian.)</li>\r\n		<li>If you heat ice, it turns to water. (Nếu bạn l&agrave;m n&oacute;ng nước đ&aacute;, n&oacute; sẽ chảy ra.)</li>\r\n		<li>If we are cold, we shiver. (Nếu bị lạnh, ch&uacute;ng ta sẽ run l&ecirc;n.)</li>\r\n	</ul>\r\n	</li>\r\n</ul>\r\n\r\n<h3>2. C&acirc;u điều kiện Hỗn hợp:</h3>\r\n\r\n<p>Trong tiếng Anh c&oacute; nhiều c&aacute;ch kh&aacute;c nhau được d&ugrave;ng diễn tả điều kiện trong mệnh đề chỉ điều kiện với &quot;If&quot;. Ngo&agrave;i 3 loại ch&iacute;nh n&ecirc;u tr&ecirc;n, một số loại sau cũng được sử dụng trong giao tiếp v&agrave; ng&ocirc;n ngữ viết:V&iacute; dụ: If he worked harder at school, he would be a student now. (He is not a student now) If I had taken his advice, I would be rich now.</p>\r\n\r\n<h3>3. C&acirc;u điều kiện ở dạng đảo.</h3>\r\n\r\n<p>Trong tiếng Anh c&acirc;u điều kiện loại 2/3, Type 2 v&agrave; Type 3 thường được d&ugrave;ng ở dạng đảo.</p>\r\n\r\n<p>V&iacute; dụ: Were I the president, I would build more hospitals. Had I taken his advice, I would be rich now.</p>\r\n\r\n<p><strong>Đ</strong><strong>ả</strong><strong>o ng</strong><strong>ữ</strong><strong>&nbsp;c</strong><strong>ủ</strong><strong>a c&acirc;u</strong>&nbsp;<strong>đi</strong><strong>ề</strong><strong>u ki</strong><strong>ệ</strong><strong>n</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>1.Đảo ngữ c&acirc;u điều kiện loại 1: Should + S + Vo, S + Will +Vo</strong></p>\r\n\r\n<ul>\r\n	<li>If he has free time, he&rsquo;ll play tennis. =&gt; Should he have free time, he&rsquo;ll play tennis</li>\r\n</ul>\r\n\r\n<p><strong>2. Đảo ngữ c&acirc;u điều kiện loại 2: Were + S + to + Vo, S + Would + Vo</strong></p>\r\n\r\n<ul>\r\n	<li>If I learnt Russian, I would read a Russian book. =&gt; Were I to learn Russian, I would read a Russian book</li>\r\n</ul>\r\n\r\n<p><strong>3. Đảo ngữ c&acirc;u điều kiện loại 3: Had + S + V3/Ved, S + Would have + V3/Ved</strong></p>\r\n\r\n<ul>\r\n	<li>If he had trained hard, he would have won the match. =&gt;&nbsp; Had he trained hard, he would have won the match.</li>\r\n</ul>\r\n\r\n<p><strong>If not = Unless.</strong></p>\r\n\r\n<p>- Unless cũng thường được d&ugrave;ng trong c&acirc;u điều kiện - l&uacute;c đ&oacute; Unless = If not. V&iacute; dụ:</p>\r\n\r\n<ul>\r\n	<li><em>Unless we start at once, we will be late.</em></li>\r\n	<li><em>If we don&#39;t start at once we will be late.</em></li>\r\n	<li><em>Unless you study hard, you won&#39;t pass the exams.</em></li>\r\n	<li><em>If you don&#39;t study hard, you won&#39;t pass the exams.</em></li>\r\n</ul>\r\n\r\n<h2>Một số biến thể của c&acirc;u điều kiện:</h2>\r\n\r\n<p>Sau đ&acirc;y l&agrave; biến thể c&oacute; thể c&oacute; của c&aacute;c cụm động từ trong c&aacute;c vế của c&acirc;u điều kiện loại I:</p>\r\n\r\n<p>GIẢ ĐỊNH C&Oacute; THẬT (Real conditions)<br />\r\n<strong>LOẠI I</strong><br />\r\n<br />\r\nA. Biến thể của cụm động từ trong mệnh đề ch&iacute;nh (main clause)</p>\r\n\r\n<p>- Đối với trường hợp muốn nhấn mạnh t&iacute;nh c&oacute; thể xảy ra sự việc<br />\r\n<strong>If + present simple, ... may/might + V-inf.</strong><br />\r\nEx. If the weather&nbsp;gets&nbsp;worse, the flight&nbsp;may/might&nbsp;be delayed.</p>\r\n\r\n<p>- Đối với trường hợp thể hiện sự đồng &yacute;, cho ph&eacute;p, gợi &yacute;<br />\r\n<strong>If + present simple, ... may/can + V-inf.</strong><br />\r\nEx. If it&nbsp;stops&nbsp;raining, we&nbsp;can&nbsp;go out.</p>\r\n\r\n<p>- Đối với c&acirc;u gợi &yacute;, khuy&ecirc;n răn, đề nghị hoặc y&ecirc;u cầu nhưng nhấn mạnh về h&agrave;nh động<br />\r\n<strong>If + present simple, ... would like to/must/have to/should... + V-inf.</strong><br />\r\nEx. If you&nbsp;go&nbsp;to the library today, I&nbsp;would like to go&nbsp;with you.<br />\r\nIf you&nbsp;want&nbsp;to lose weight, you&nbsp;should do&nbsp;some exercise.</p>\r\n\r\n<p>- Đối với trường hợp muốn diễn tả hậu quả tất yếu của điều kiện đặt ra theo quy luật hoặc th&oacute;i quen<br />\r\n<strong>If + present simple, present simple.</strong><br />\r\nEx. If you&nbsp;eat&nbsp;this poisonous fruit, you&nbsp;die&nbsp;at once.<br />\r\nIf you&nbsp;boil&nbsp;water, it&nbsp;turns&nbsp;to vapor.</p>\r\n\r\n<p>- Đối với trường hợp c&oacute; thể xảy ra trong tương lai v&agrave; nhấn mạnh trạng th&aacute;i diễn ra/ho&agrave;n th&agrave;nh của sự việc<br />\r\n<strong>If + present simple, future continuous/future perfect.</strong><br />\r\nEx. If we&nbsp;leave&nbsp;Hanoi&nbsp;for&nbsp;Hue&nbsp;today, we&nbsp;shall be staying&nbsp;in&nbsp;Hue&nbsp;tomorrow.&nbsp;<br />\r\nIf you&nbsp;do&nbsp;your home work right now, you&nbsp;will have finished&nbsp;it in 2 hours&#39; time.</p>\r\n\r\n<p>- Đối với c&acirc;u mệnh lệnh (chủ ngữ ẩn ở mệnh đề ch&iacute;nh)<br />\r\n<strong>If + present simple, (do not) V-inf.</strong><br />\r\nEx. If you are hungry, go to a restaurant.<br />\r\nIf you feel cold, don&#39;t open the door.</p>\r\n\r\n<p>- Đối với c&acirc;u khuy&ecirc;n răn, trong trường hợp n&agrave;y kh&ocirc;ng thực sự l&agrave; một c&acirc;u điều kiện bởi &quot;if&quot; mang nghĩa như &quot;as, since, because&quot;<br />\r\n<strong>If + present simple, why do (not) + V-inf.</strong><br />\r\nEx. If you like the movie, why don&#39;t you go to the cinema?</p>\r\n\r\n<p>B. Biến thể của cụm động từ trong mệnh đề điều kiện (if-clause)</p>\r\n\r\n<p>- Đối với trường hợp đang xảy ra ngay trong hiện tại<br />\r\n<strong>If + present continuous, simple future.</strong><br />\r\nEx. If he is working, I won&#39;t disturb him.<br />\r\nIf you are doing exercises, I shall wait.<br />\r\nIf I am playing a nice game, don&#39;t put me to bed.(tương đương simple future)</p>\r\n\r\n<p>- Đối với trường hợp kh&ocirc;ng chắc về thời gian của điều kiện c&oacute; thật m&agrave; nhấn mạnh t&iacute;nh ho&agrave;n tất của n&oacute;<br />\r\n<strong>If + present perfect, simple future.</strong><br />\r\nEx. If you have finished your homework, I shall ask for your help.</p>\r\n\r\n<p>- Đối với c&acirc;u gợi &yacute; nhưng nhấn mạnh về điều kiện<br />\r\n<strong>If + would like to + V-inf, ... will/can/must/nothing + V-inf.</strong><br />\r\nEx. If you would like to go to the library today, I can/will go with you.</p>\r\n\r\n<p>- Đối với c&acirc;u đề nghị, gợi &yacute;, b&agrave;y tỏ &yacute; kiến mang t&iacute;nh lịch sự<br />\r\n<strong>If + can/may/must/have to/should/be going to + V-inf, simple future.</strong><br />\r\nEx. If I can help you, I will.<br />\r\nIf I may get into the room now, I shan&#39;t feel cold.<br />\r\nIf I must/have to take the oral test, I shall feel afraid.<br />\r\nIf you are going to go to University, you must study hard before an entrance examination.<br />\r\nIf you should see her tomorrow, please tell her to phone me at once. (tương đương probably)</p>\r\n\r\n<p>Lưu &yacute;: Trong c&acirc;u &quot;<strong>if + subject + should + V-inf.&quot;,&nbsp;</strong>should c&oacute; thể được đưa l&ecirc;n đầu c&acirc;u thay &quot;if&quot;<br />\r\n<strong>Should + V-inf., simple future.</strong><br />\r\nEx. Should you see him on the way home from work, please tell him to call on me</p>\r\n\r\n<p>Tương tự như vậy, ta c&oacute; một số biến thể &iacute;t phổ biến hơn của cụm động từ đối với GIẢ ĐỊNH KH&Ocirc;NG C&Oacute; THỰC (unreal conditions loại II v&agrave; III), tuỳ v&agrave;o việc muốn nhấn mạnh v&agrave; trạng th&aacute;i diễn tiến hay ho&agrave;n th&agrave;nh của sự việc trong mệnh đề điều kiện hoặc sự việc trong mệnh đề ch&iacute;nh.</p>\r\n\r\n<p><strong>LOẠI II.</strong><br />\r\n<br />\r\nA. Mệnh đề ch&iacute;nh (main clause)</p>\r\n\r\n<p><strong>- If + past simple, ... would/should/could/might/had to/ought to + be V-ing.</strong><br />\r\nEx. If we left&nbsp;Hanoi&nbsp;for&nbsp;Hue&nbsp;this morning, we would be staying in&nbsp;Hue&nbsp;tomorrow.</p>\r\n\r\n<p><strong>- If + past simple, past simple</strong>. (việc đ&atilde; xảy ra)<br />\r\nEx. If the goalkeeper didn&#39;t catch the ball, they lost.</p>\r\n\r\n<p><strong>- If + past simple, ... would be + V-ing.</strong><br />\r\nEx. If I were on holiday with him, I would/might be touring&nbsp;Italy&nbsp;now.</p>\r\n\r\n<p>- If d&ugrave;ng như &quot;as, since, because&quot; c&oacute; thể kết hợp với động từ ở nhiều th&igrave; kh&aacute;c nhau trong mệnh đề ch&iacute;nh v&agrave; kh&ocirc;ng thực sự l&agrave; một c&acirc;u điều kiện.<br />\r\nEx. If you knew her troubles, why didn&#39;t you tell me?</p>\r\n\r\n<p>B. Mệnh đề phụ (if-clause)</p>\r\n\r\n<p><strong>- If + past continuous, ... would/could + V-inf.</strong><br />\r\nEx. If we were studying English in&nbsp;London&nbsp;now, we could speak English much better.</p>\r\n\r\n<p><strong>- If + past perfect, ... would/could + V-inf.</strong><br />\r\nEx. If you had taken my advice, you would be a millionaire now.</p>\r\n\r\n<p><strong>LOẠI III</strong><br />\r\n<br />\r\nA. Mệnh đề ch&iacute;nh (main clause)</p>\r\n\r\n<p><strong>- If + past perfect, ... could/might + present perfect.</strong><br />\r\nEx. If we had found him earlier, we could have saved his life.</p>\r\n\r\n<p><strong>- If + past perfect, present perfect continuous.</strong><br />\r\nEx. If you had left&nbsp;Hanoi&nbsp;for&nbsp;Haiphong&nbsp;last Saturday, you would have been swimming in Doson last Sunday.</p>\r\n\r\n<p><strong>- If + past perfect, ... would + V-inf.</strong><br />\r\nEx. If she had followedmy advice, she would be richer now.<br />\r\nIf you had taken the medicine yesterday, you would be better now.</p>\r\n\r\n<p>B. Mệnh đề phụ (if-clause)</p>\r\n\r\n<p><strong>- If + past perfect continuous, ... would + present perfect.</strong><br />\r\nEx. If it hadn&#39;t been raining the whole week, I would have finished the laundry</p>\r\n\r\n<p>C&aacute;c trường hợp d&ugrave;ng &quot;wish&quot; th&igrave; cũng tương tự, chia l&agrave;m 3 loại, c&aacute;ch d&ugrave;ng như bạn NHH đ&atilde; n&oacute;i ở tr&ecirc;n v&agrave; c&oacute; 1 số biến thể tương tự nh&eacute;.</p>\r\n\r\n<p>Đối với trường hợp &quot;if&quot; được sử dụng như một li&ecirc;n từ d&ugrave;ng để bắt đầu một mệnh đề phụ trạng ngữ chỉ điều kiện về thời gian, l&uacute;c n&agrave;y &quot;if = when&quot;. Vậy &quot;if&quot; v&agrave; &quot;when&quot; kh&aacute;c nhau thế n&agrave;o?</p>\r\n\r\n<p>- WHEN: được d&ugrave;ng khi diễn tả một điều g&igrave; đ&oacute; chắc chắn xảy ra.<br />\r\nEx. I am going to do some shopping today. When I go shopping, I&#39;ll buy you some coffee.</p>\r\n\r\n<p>- IF: được d&ugrave;ng khi diễn tả một điều kh&ocirc;ng chắc chắn (c&oacute; thể hoặc kh&ocirc;ng thể) xảy ra trong tương lai.<br />\r\nEx. I may go shopping today. If I go shopping, I&#39;ll buy you some coffee.</p>\r\n\r\n<p><strong><em>Lưu &yacute;:</em></strong>&nbsp;Động từ ch&iacute;nh trong mệnh đề phụ trạng ngữ bắt đầu bằng &quot;when&quot; hoặc &quot;if&quot; lu&ocirc;n ở th&igrave; present simple mặc d&ugrave; h&agrave;nh động sẽ xảy ra trong tương lai.<br />\r\nEx. When/If he arrives tomorrow, I&#39;ll tell him about it</p>\r\n', 1, 1),
(2, 'lap trinh', '<p>&lt;h2&gt;3 Loại&amp;nbsp;&lt;a href=&quot;http://kenhtuyensinh.vn/cau-dieu-kien&quot; title=&quot;c&acirc;u điều kiện trong tiếng anh&quot;&gt;c&amp;acirc;u điều kiện trong tiếng anh&lt;/a&gt;&lt;/h2&gt;</p>\r\n\r\n<p>&lt;h3&gt;(1) C&amp;acirc;u điều kiện loại I&lt;/h3&gt;</p>\r\n\r\n<p>&lt;p&gt;&lt;strong&gt;Kh&amp;aacute;i niệm về c&amp;acirc;u điều kiện loại 1&lt;/strong&gt;&lt;/p&gt;</p>\r\n\r\n<p>&lt;ul&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;li&gt;&lt;em&gt;C&amp;acirc;u điều kiện loại I c&amp;ograve;n được gọi l&amp;agrave; c&amp;acirc;u điều kiện c&amp;oacute; thực ở hiện tại.&lt;/em&gt;&lt;/li&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;li&gt;&lt;em&gt;Điều kiện c&amp;oacute; thể xảy ra ở hiện tại hoặc tương lai.&lt;/em&gt;&lt;/li&gt;<br />\r\n&lt;/ul&gt;</p>\r\n\r\n<p>&lt;h3&gt;Cấu tr&amp;uacute;c - C&amp;ocirc;ng thức&amp;nbsp;&lt;a href=&quot;http://kenhtuyensinh.vn/cau-dieu-kien&quot; title=&quot;c&acirc;u điều kiện loại 1 &quot;&gt;c&amp;acirc;u điều kiện loại 1&lt;/a&gt;&lt;/h3&gt;</p>\r\n\r\n<p>&lt;table border=&quot;1&quot; cellpadding=&quot;0&quot; cellspacing=&quot;0&quot;&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;tbody&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&lt;tr&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&lt;td&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&lt;p&gt;If + S + V (hiện tại), S + will + V (nguy&amp;ecirc;n mẫu)&lt;/p&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&lt;/td&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&lt;/tr&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;/tbody&gt;<br />\r\n&lt;/table&gt;</p>\r\n\r\n<p>&lt;p&gt;IF + Chủ ngữ 1 + Động từ chia ở th&amp;igrave; hiện tại đơn + Bổ ngữ, Chủ ngữ 2 + WILL + Động từ nguy&amp;ecirc;n mẫu + Bổ ngữ (nếu c&amp;oacute;).&lt;/p&gt;</p>\r\n\r\n<p>&lt;p&gt;N&amp;oacute;i c&amp;aacute;ch kh&amp;aacute;c, ở c&amp;acirc;u điều kiện loại 1, mệnh đề IF d&amp;ugrave;ng th&amp;igrave; hiện tại đơn, mệnh đề ch&amp;iacute;nh d&amp;ugrave;ng th&amp;igrave; tương lai đơn.&lt;/p&gt;</p>\r\n\r\n<p>&lt;ul&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;li&gt;&lt;em&gt;Chủ ngữ 1 v&amp;agrave; chủ ngữ 2 c&amp;oacute; thể tr&amp;ugrave;ng nhau. Bổ ngữ c&amp;oacute; thể kh&amp;ocirc;ng c&amp;oacute;, t&amp;ugrave;y &amp;yacute; nghĩa của c&amp;acirc;u. Mệnh đề IF v&amp;agrave; mệnh đề ch&amp;iacute;nh c&amp;oacute; thể đứng trước hay sau đều được.&lt;/em&gt;&lt;/li&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;li&gt;&lt;em&gt;Trong c&amp;acirc;u điều kiện loại I, động từ của mệnh đề điều kiện chia ở th&amp;igrave; hiện tại đơn, c&amp;ograve;n động từ trong mệnh đề ch&amp;iacute;nh chia ở th&amp;igrave; tương lai đơn. V&amp;iacute; dụ:&lt;/em&gt;&lt;/li&gt;<br />\r\n&lt;/ul&gt;</p>\r\n\r\n<p>&lt;p&gt;If you come into my garden, my dog will bite you. (Nếu anh v&amp;agrave;o vườn của t&amp;ocirc;i, con ch&amp;oacute; của t&amp;ocirc;i sẽ cắn anh đ&amp;oacute;.)&lt;/p&gt;</p>\r\n\r\n<p>&lt;p&gt;If it is sunny, I will go fishing. (Nếu trời nắng tốt, t&amp;ocirc;i sẽ đi c&amp;acirc;u c&amp;aacute;.)&lt;/p&gt;</p>\r\n\r\n<p>&lt;h3&gt;C&amp;aacute;ch d&amp;ugrave;ng c&amp;acirc;u điều kiện loại 1:&lt;/h3&gt;</p>\r\n\r\n<p>&lt;p&gt;C&amp;acirc;u điều kiện loại 1 c&amp;ograve;n c&amp;oacute; thể được gọi l&amp;agrave; c&amp;acirc;u điều kiện hiện tại c&amp;oacute; thể c&amp;oacute; thật. Ta sử dụng c&amp;acirc;u điều kiện loại 1 để đặt ra một điều kiện c&amp;oacute; thể thực hiện được trong hiện tại v&amp;agrave; n&amp;ecirc;u kết quả c&amp;oacute; thể xảy ra.&amp;nbsp;&lt;a href=&quot;http://kenhtuyensinh.vn/ngu-phap-tieng-anh&quot; title=&quot;ngữ ph&aacute;p tiếng anh&quot;&gt;ngữ ph&amp;aacute;p tiếng anh&lt;/a&gt;&lt;/p&gt;</p>\r\n\r\n<p>&lt;h3&gt;(2) C&amp;acirc;u điều kiện loại II&lt;/h3&gt;</p>\r\n\r\n<p>&lt;p&gt;Kh&amp;aacute;i niệm về c&amp;acirc;u điều kiện loại 2:&lt;/p&gt;</p>\r\n\r\n<p>&lt;ul&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;li&gt;&lt;em&gt;C&amp;acirc;u điều kiện loại II c&amp;ograve;n được gọi l&amp;agrave; c&amp;acirc;u điều kiện kh&amp;ocirc;ng c&amp;oacute; thực ở hiện tại.&lt;/em&gt;&lt;/li&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;li&gt;&lt;em&gt;Điều kiện kh&amp;ocirc;ng thể xảy ra ở hiện tại hoặc tương lai, điều kiện chỉ l&amp;agrave; một giả thiết, một ước muốn tr&amp;aacute;i ngược với thực trạng hiện tại.&lt;/em&gt;&lt;/li&gt;<br />\r\n&lt;/ul&gt;</p>\r\n\r\n<p>&lt;h3&gt;Cấu tr&amp;uacute;c c&amp;acirc;u điều kiện loại 2&lt;/h3&gt;</p>\r\n\r\n<p>&lt;table border=&quot;1&quot; cellpadding=&quot;0&quot; cellspacing=&quot;0&quot;&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;tbody&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&lt;tr&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&lt;td style=&quot;vertical-align:top&quot;&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&lt;p&gt;If + S + V (qu&amp;aacute; khứ), S + would + V (nguy&amp;ecirc;n mẫu)&lt;/p&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&lt;/td&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&lt;/tr&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;/tbody&gt;<br />\r\n&lt;/table&gt;</p>\r\n\r\n<p>&lt;p&gt;- Trong c&amp;acirc;u điều kiện loại II, động từ của mệnh đề điều kiện chia ở bang th&amp;aacute;i c&amp;aacute;ch (past subjunctive), động từ của mệnh đề ch&amp;iacute;nh chia ở th&amp;igrave; điều kiện hiện tại (simple conditional). Ch&amp;uacute; &amp;yacute;: B&amp;agrave;ng th&amp;aacute;i c&amp;aacute;ch (Past subjunctive) l&amp;agrave; h&amp;igrave;nh thức chia động từ giống hệt như th&amp;igrave; qu&amp;aacute; khư đơn, ri&amp;ecirc;ng động từ &amp;ldquo;to be&amp;rdquo; th&amp;igrave; d&amp;ugrave;ng &amp;ldquo;were&amp;rdquo; cho tất cả c&amp;aacute;c ng&amp;ocirc;i.&lt;/p&gt;</p>\r\n\r\n<p>&lt;p&gt;V&amp;iacute; dụ:&lt;/p&gt;</p>\r\n\r\n<p>&lt;ul&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;li&gt;&lt;em&gt;If I were a bird, I would be very happy. (Nếu t&amp;ocirc;i l&amp;agrave; một con chim, t&amp;ocirc;i sẽ rất hạnh ph&amp;uacute;c.)&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; &amp;lt;= t&amp;ocirc;i kh&amp;ocirc;ng thể l&amp;agrave; chim được&lt;/em&gt;&lt;/li&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;li&gt;&lt;em&gt;If I had a million USD, I would buy that car. (Nếu t&amp;ocirc;i c&amp;oacute; một triệu đ&amp;ocirc; la, t&amp;ocirc;i sẽ mua chiếc xe đ&amp;oacute;.)&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; &amp;lt;= hiện tại t&amp;ocirc;i kh&amp;ocirc;ng c&amp;oacute;&lt;/em&gt;&lt;/li&gt;<br />\r\n&lt;/ul&gt;</p>\r\n\r\n<p>&lt;h3&gt;(3) C&amp;acirc;u điều kiện loại III&lt;/h3&gt;</p>\r\n\r\n<p>&lt;p&gt;Kh&amp;aacute;i niệm về c&amp;acirc;u điều kiện loại 3:&lt;/p&gt;</p>\r\n\r\n<p>&lt;ul&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;li&gt;&lt;em&gt;C&amp;acirc;u điều kiện loại III l&amp;agrave; c&amp;acirc;u điều kiện kh&amp;ocirc;ng c&amp;oacute; thực trong qu&amp;aacute; khứ.&lt;/em&gt;&lt;/li&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;li&gt;&lt;em&gt;Điều kiện kh&amp;ocirc;ng thể xảy ra trong qu&amp;aacute; khứ, chỉ mang t&amp;iacute;nh ước muốn trong qu&amp;aacute; khứ, một giả thiết tr&amp;aacute;i ngược với thực trạng ở qu&amp;aacute; khứ.&lt;/em&gt;&lt;/li&gt;<br />\r\n&lt;/ul&gt;</p>\r\n\r\n<p>&lt;h3&gt;Cấu tr&amp;uacute;c c&amp;acirc;u điều kiện loại 3&lt;/h3&gt;</p>\r\n\r\n<p>&lt;table border=&quot;1&quot; cellpadding=&quot;0&quot; cellspacing=&quot;0&quot;&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;tbody&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&lt;tr&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&lt;td&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&lt;p&gt;If + S + had + P.P (qu&amp;aacute; khứ ph&amp;acirc;n từ), S + would + have + P.P&lt;/p&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&lt;/td&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&lt;/tr&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;/tbody&gt;<br />\r\n&lt;/table&gt;</p>\r\n\r\n<p>&lt;p&gt;- Trong c&amp;acirc;u điều kiện loại III, động từ của mệnh đề điều kiện chia ở qu&amp;aacute; khứ ph&amp;acirc;n từ, c&amp;ograve;n động từ của mệnh đề ch&amp;iacute;nh chia ở điều kiện ho&amp;agrave;n th&amp;agrave;nh (perfect conditional). V&amp;iacute; dụ:&lt;/p&gt;</p>\r\n\r\n<p>&lt;blockquote&gt;<br />\r\n&lt;ul&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;li&gt;&lt;em&gt;If he had come to see me yesterday, I would have taken him to the movies. (Nếu h&amp;ocirc;m qua n&amp;oacute; đến thăm t&amp;ocirc;i th&amp;igrave; t&amp;ocirc;i đ&amp;atilde; đưa n&amp;oacute; đi xem phim rồi.)&lt;/em&gt;&lt;/li&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;li&gt;&lt;em&gt;If I hadn&amp;rsquo;t been absent yesterday, I would have met him. (Nếu h&amp;ocirc;m qua t&amp;ocirc;i kh&amp;ocirc;ng vắng mặt th&amp;igrave; t&amp;ocirc;i đ&amp;atilde; gặp mặt anh ta rồi.)&lt;/em&gt;&lt;/li&gt;<br />\r\n&lt;/ul&gt;<br />\r\n&lt;/blockquote&gt;</p>\r\n\r\n<p>&lt;h2&gt;N&amp;Acirc;NG CAO:&lt;/h2&gt;</p>\r\n\r\n<p>&lt;h2&gt;1. C&amp;acirc;u Điều Kiện Diễn Tả Th&amp;oacute;i Quen Hoặc Một Sự Thật Hiển Nhi&amp;ecirc;n&lt;/h2&gt;</p>\r\n\r\n<p>&lt;p&gt;C&amp;acirc;u điều kiện n&amp;agrave;y diễn tả một th&amp;oacute;i quen, một h&amp;agrave;nh động thường xuy&amp;ecirc;n xảy ra nếu điều kiện được đ&amp;aacute;p ứng, hoặc diễn tả một sự thật hiễn nhi&amp;ecirc;n, một kết quả tất yếu xảy ra.&amp;nbsp;&lt;a href=&quot;http://kenhtuyensinh.vn/hoc-tieng-anh&quot; title=&quot;học tiếng anh&quot;&gt;học tiếng anh&lt;/a&gt;&lt;/p&gt;</p>\r\n\r\n<p>&lt;p&gt;Cấu tr&amp;uacute;c:&amp;nbsp;&lt;strong&gt;If + S + V (hiện tại), S + V (hiện tại)&lt;/strong&gt;&lt;/p&gt;</p>\r\n\r\n<p>&lt;ul&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;li&gt;Tất cả động từ trong c&amp;acirc;u (mệnh đề ch&amp;iacute;nh v&amp;agrave; mệnh đề điều kiện) đều được chia ở th&amp;igrave; hiện tại đơn.&lt;/li&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;li&gt;Nếu diễn tả th&amp;oacute;i quen, trong mệnh đề ch&amp;iacute;nh thường xuất hiện th&amp;ecirc;m: often, usually, or always. V&amp;iacute; dụ:<br />\r\n&nbsp;&nbsp; &nbsp;&lt;ul&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&lt;li&gt;I often drink milk if I do not sleep at night. (T&amp;ocirc;i thường uống sữa nếu như t&amp;ocirc;i thức trắng đ&amp;ecirc;m.)&lt;/li&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&lt;li&gt;I usually walk to school if I have enough time. (T&amp;ocirc;i thường đi bộ đến trường nếu t&amp;ocirc;i c&amp;oacute; thời gian.)&lt;/li&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&lt;li&gt;If you heat ice, it turns to water. (Nếu bạn l&amp;agrave;m n&amp;oacute;ng nước đ&amp;aacute;, n&amp;oacute; sẽ chảy ra.)&lt;/li&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&lt;li&gt;If we are cold, we shiver. (Nếu bị lạnh, ch&amp;uacute;ng ta sẽ run l&amp;ecirc;n.)&lt;/li&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;/ul&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;/li&gt;<br />\r\n&lt;/ul&gt;</p>\r\n\r\n<p>&lt;h3&gt;2. C&amp;acirc;u điều kiện Hỗn hợp:&lt;/h3&gt;</p>\r\n\r\n<p>&lt;p&gt;Trong tiếng Anh c&amp;oacute; nhiều c&amp;aacute;ch kh&amp;aacute;c nhau được d&amp;ugrave;ng diễn tả điều kiện trong mệnh đề chỉ điều kiện với &amp;quot;If&amp;quot;. Ngo&amp;agrave;i 3 loại ch&amp;iacute;nh n&amp;ecirc;u tr&amp;ecirc;n, một số loại sau cũng được sử dụng trong giao tiếp v&amp;agrave; ng&amp;ocirc;n ngữ viết:V&amp;iacute; dụ: If he worked harder at school, he would be a student now. (He is not a student now) If I had taken his advice, I would be rich now.&lt;/p&gt;</p>\r\n\r\n<p>&lt;h3&gt;3. C&amp;acirc;u điều kiện ở dạng đảo.&lt;/h3&gt;</p>\r\n\r\n<p>&lt;p&gt;Trong tiếng Anh c&amp;acirc;u điều kiện loại 2/3, Type 2 v&amp;agrave; Type 3 thường được d&amp;ugrave;ng ở dạng đảo.&lt;/p&gt;</p>\r\n\r\n<p>&lt;p&gt;V&amp;iacute; dụ: Were I the president, I would build more hospitals. Had I taken his advice, I would be rich now.&lt;/p&gt;</p>\r\n\r\n<p>&lt;p&gt;&lt;strong&gt;Đ&lt;/strong&gt;&lt;strong&gt;ả&lt;/strong&gt;&lt;strong&gt;o ng&lt;/strong&gt;&lt;strong&gt;ữ&lt;/strong&gt;&lt;strong&gt;&amp;nbsp;c&lt;/strong&gt;&lt;strong&gt;ủ&lt;/strong&gt;&lt;strong&gt;a c&amp;acirc;u&lt;/strong&gt;&amp;nbsp;&lt;strong&gt;đi&lt;/strong&gt;&lt;strong&gt;ề&lt;/strong&gt;&lt;strong&gt;u ki&lt;/strong&gt;&lt;strong&gt;ệ&lt;/strong&gt;&lt;strong&gt;n&lt;/strong&gt;&lt;/p&gt;</p>\r\n\r\n<p>&lt;p&gt;&amp;nbsp;&lt;/p&gt;</p>\r\n\r\n<p>&lt;p&gt;&lt;strong&gt;1.Đảo ngữ c&amp;acirc;u điều kiện loại 1: Should + S + Vo, S + Will +Vo&lt;/strong&gt;&lt;/p&gt;</p>\r\n\r\n<p>&lt;ul&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;li&gt;If he has free time, he&amp;rsquo;ll play tennis. =&amp;gt; Should he have free time, he&amp;rsquo;ll play tennis&lt;/li&gt;<br />\r\n&lt;/ul&gt;</p>\r\n\r\n<p>&lt;p&gt;&lt;strong&gt;2. Đảo ngữ c&amp;acirc;u điều kiện loại 2: Were + S + to + Vo, S + Would + Vo&lt;/strong&gt;&lt;/p&gt;</p>\r\n\r\n<p>&lt;ul&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;li&gt;If I learnt Russian, I would read a Russian book. =&amp;gt; Were I to learn Russian, I would read a Russian book&lt;/li&gt;<br />\r\n&lt;/ul&gt;</p>\r\n\r\n<p>&lt;p&gt;&lt;strong&gt;3. Đảo ngữ c&amp;acirc;u điều kiện loại 3: Had + S + V3/Ved, S + Would have + V3/Ved&lt;/strong&gt;&lt;/p&gt;</p>\r\n\r\n<p>&lt;ul&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;li&gt;If he had trained hard, he would have won the match. =&amp;gt;&amp;nbsp; Had he trained hard, he would have won the match.&lt;/li&gt;<br />\r\n&lt;/ul&gt;</p>\r\n\r\n<p>&lt;p&gt;&lt;strong&gt;If not = Unless.&lt;/strong&gt;&lt;/p&gt;</p>\r\n\r\n<p>&lt;p&gt;- Unless cũng thường được d&amp;ugrave;ng trong c&amp;acirc;u điều kiện - l&amp;uacute;c đ&amp;oacute; Unless = If not. V&amp;iacute; dụ:&lt;/p&gt;</p>\r\n\r\n<p>&lt;ul&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;li&gt;&lt;em&gt;Unless we start at once, we will be late.&lt;/em&gt;&lt;/li&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;li&gt;&lt;em&gt;If we don&amp;#39;t start at once we will be late.&lt;/em&gt;&lt;/li&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;li&gt;&lt;em&gt;Unless you study hard, you won&amp;#39;t pass the exams.&lt;/em&gt;&lt;/li&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;li&gt;&lt;em&gt;If you don&amp;#39;t study hard, you won&amp;#39;t pass the exams.&lt;/em&gt;&lt;/li&gt;<br />\r\n&lt;/ul&gt;</p>\r\n\r\n<p>&lt;h2&gt;Một số biến thể của c&amp;acirc;u điều kiện:&lt;/h2&gt;</p>\r\n\r\n<p>&lt;p&gt;Sau đ&amp;acirc;y l&amp;agrave; biến thể c&amp;oacute; thể c&amp;oacute; của c&amp;aacute;c cụm động từ trong c&amp;aacute;c vế của c&amp;acirc;u điều kiện loại I:&lt;/p&gt;</p>\r\n\r\n<p>&lt;p&gt;GIẢ ĐỊNH C&amp;Oacute; THẬT (Real conditions)&lt;br /&gt;<br />\r\n&lt;strong&gt;LOẠI I&lt;/strong&gt;&lt;br /&gt;<br />\r\n&lt;br /&gt;<br />\r\nA. Biến thể của cụm động từ trong mệnh đề ch&amp;iacute;nh (main clause)&lt;/p&gt;</p>\r\n\r\n<p>&lt;p&gt;- Đối với trường hợp muốn nhấn mạnh t&amp;iacute;nh c&amp;oacute; thể xảy ra sự việc&lt;br /&gt;<br />\r\n&lt;strong&gt;If + present simple, ... may/might + V-inf.&lt;/strong&gt;&lt;br /&gt;<br />\r\nEx. If the weather&amp;nbsp;gets&amp;nbsp;worse, the flight&amp;nbsp;may/might&amp;nbsp;be delayed.&lt;/p&gt;</p>\r\n\r\n<p>&lt;p&gt;- Đối với trường hợp thể hiện sự đồng &amp;yacute;, cho ph&amp;eacute;p, gợi &amp;yacute;&lt;br /&gt;<br />\r\n&lt;strong&gt;If + present simple, ... may/can + V-inf.&lt;/strong&gt;&lt;br /&gt;<br />\r\nEx. If it&amp;nbsp;stops&amp;nbsp;raining, we&amp;nbsp;can&amp;nbsp;go out.&lt;/p&gt;</p>\r\n\r\n<p>&lt;p&gt;- Đối với c&amp;acirc;u gợi &amp;yacute;, khuy&amp;ecirc;n răn, đề nghị hoặc y&amp;ecirc;u cầu nhưng nhấn mạnh về h&amp;agrave;nh động&lt;br /&gt;<br />\r\n&lt;strong&gt;If + present simple, ... would like to/must/have to/should... + V-inf.&lt;/strong&gt;&lt;br /&gt;<br />\r\nEx. If you&amp;nbsp;go&amp;nbsp;to the library today, I&amp;nbsp;would like to go&amp;nbsp;with you.&lt;br /&gt;<br />\r\nIf you&amp;nbsp;want&amp;nbsp;to lose weight, you&amp;nbsp;should do&amp;nbsp;some exercise.&lt;/p&gt;</p>\r\n\r\n<p>&lt;p&gt;- Đối với trường hợp muốn diễn tả hậu quả tất yếu của điều kiện đặt ra theo quy luật hoặc th&amp;oacute;i quen&lt;br /&gt;<br />\r\n&lt;strong&gt;If + present simple, present simple.&lt;/strong&gt;&lt;br /&gt;<br />\r\nEx. If you&amp;nbsp;eat&amp;nbsp;this poisonous fruit, you&amp;nbsp;die&amp;nbsp;at once.&lt;br /&gt;<br />\r\nIf you&amp;nbsp;boil&amp;nbsp;water, it&amp;nbsp;turns&amp;nbsp;to vapor.&lt;/p&gt;</p>\r\n\r\n<p>&lt;p&gt;- Đối với trường hợp c&amp;oacute; thể xảy ra trong tương lai v&amp;agrave; nhấn mạnh trạng th&amp;aacute;i diễn ra/ho&amp;agrave;n th&amp;agrave;nh của sự việc&lt;br /&gt;<br />\r\n&lt;strong&gt;If + present simple, future continuous/future perfect.&lt;/strong&gt;&lt;br /&gt;<br />\r\nEx. If we&amp;nbsp;leave&amp;nbsp;Hanoi&amp;nbsp;for&amp;nbsp;Hue&amp;nbsp;today, we&amp;nbsp;shall be staying&amp;nbsp;in&amp;nbsp;Hue&amp;nbsp;tomorrow.&amp;nbsp;&lt;br /&gt;<br />\r\nIf you&amp;nbsp;do&amp;nbsp;your home work right now, you&amp;nbsp;will have finished&amp;nbsp;it in 2 hours&amp;#39; time.&lt;/p&gt;</p>\r\n\r\n<p>&lt;p&gt;- Đối với c&amp;acirc;u mệnh lệnh (chủ ngữ ẩn ở mệnh đề ch&amp;iacute;nh)&lt;br /&gt;<br />\r\n&lt;strong&gt;If + present simple, (do not) V-inf.&lt;/strong&gt;&lt;br /&gt;<br />\r\nEx. If you are hungry, go to a restaurant.&lt;br /&gt;<br />\r\nIf you feel cold, don&amp;#39;t open the door.&lt;/p&gt;</p>\r\n\r\n<p>&lt;p&gt;- Đối với c&amp;acirc;u khuy&amp;ecirc;n răn, trong trường hợp n&amp;agrave;y kh&amp;ocirc;ng thực sự l&amp;agrave; một c&amp;acirc;u điều kiện bởi &amp;quot;if&amp;quot; mang nghĩa như &amp;quot;as, since, because&amp;quot;&lt;br /&gt;<br />\r\n&lt;strong&gt;If + present simple, why do (not) + V-inf.&lt;/strong&gt;&lt;br /&gt;<br />\r\nEx. If you like the movie, why don&amp;#39;t you go to the cinema?&lt;/p&gt;</p>\r\n\r\n<p>&lt;p&gt;B. Biến thể của cụm động từ trong mệnh đề điều kiện (if-clause)&lt;/p&gt;</p>\r\n\r\n<p>&lt;p&gt;- Đối với trường hợp đang xảy ra ngay trong hiện tại&lt;br /&gt;<br />\r\n&lt;strong&gt;If + present continuous, simple future.&lt;/strong&gt;&lt;br /&gt;<br />\r\nEx. If he is working, I won&amp;#39;t disturb him.&lt;br /&gt;<br />\r\nIf you are doing exercises, I shall wait.&lt;br /&gt;<br />\r\nIf I am playing a nice game, don&amp;#39;t put me to bed.(tương đương simple future)&lt;/p&gt;</p>\r\n\r\n<p>&lt;p&gt;- Đối với trường hợp kh&amp;ocirc;ng chắc về thời gian của điều kiện c&amp;oacute; thật m&amp;agrave; nhấn mạnh t&amp;iacute;nh ho&amp;agrave;n tất của n&amp;oacute;&lt;br /&gt;<br />\r\n&lt;strong&gt;If + present perfect, simple future.&lt;/strong&gt;&lt;br /&gt;<br />\r\nEx. If you have finished your homework, I shall ask for your help.&lt;/p&gt;</p>\r\n\r\n<p>&lt;p&gt;- Đối với c&amp;acirc;u gợi &amp;yacute; nhưng nhấn mạnh về điều kiện&lt;br /&gt;<br />\r\n&lt;strong&gt;If + would like to + V-inf, ... will/can/must/nothing + V-inf.&lt;/strong&gt;&lt;br /&gt;<br />\r\nEx. If you would like to go to the library today, I can/will go with you.&lt;/p&gt;</p>\r\n\r\n<p>&lt;p&gt;- Đối với c&amp;acirc;u đề nghị, gợi &amp;yacute;, b&amp;agrave;y tỏ &amp;yacute; kiến mang t&amp;iacute;nh lịch sự&lt;br /&gt;<br />\r\n&lt;strong&gt;If + can/may/must/have to/should/be going to + V-inf, simple future.&lt;/strong&gt;&lt;br /&gt;<br />\r\nEx. If I can help you, I will.&lt;br /&gt;<br />\r\nIf I may get into the room now, I shan&amp;#39;t feel cold.&lt;br /&gt;<br />\r\nIf I must/have to take the oral test, I shall feel afraid.&lt;br /&gt;<br />\r\nIf you are going to go to University, you must study hard before an entrance examination.&lt;br /&gt;<br />\r\nIf you should see her tomorrow, please tell her to phone me at once. (tương đương probably)&lt;/p&gt;</p>\r\n\r\n<p>&lt;p&gt;Lưu &amp;yacute;: Trong c&amp;acirc;u &amp;quot;&lt;strong&gt;if + subject + should + V-inf.&amp;quot;,&amp;nbsp;&lt;/strong&gt;should c&amp;oacute; thể được đưa l&amp;ecirc;n đầu c&amp;acirc;u thay &amp;quot;if&amp;quot;&lt;br /&gt;<br />\r\n&lt;strong&gt;Should + V-inf., simple future.&lt;/strong&gt;&lt;br /&gt;<br />\r\nEx. Should you see him on the way home from work, please tell him to call on me&lt;/p&gt;</p>\r\n\r\n<p>&lt;p&gt;Tương tự như vậy, ta c&amp;oacute; một số biến thể &amp;iacute;t phổ biến hơn của cụm động từ đối với GIẢ ĐỊNH KH&amp;Ocirc;NG C&amp;Oacute; THỰC (unreal conditions loại II v&amp;agrave; III), tuỳ v&amp;agrave;o việc muốn nhấn mạnh v&amp;agrave; trạng th&amp;aacute;i diễn tiến hay ho&amp;agrave;n th&amp;agrave;nh của sự việc trong mệnh đề điều kiện hoặc sự việc trong mệnh đề ch&amp;iacute;nh.&lt;/p&gt;</p>\r\n\r\n<p>&lt;p&gt;&lt;strong&gt;LOẠI II.&lt;/strong&gt;&lt;br /&gt;<br />\r\n&lt;br /&gt;<br />\r\nA. Mệnh đề ch&amp;iacute;nh (main clause)&lt;/p&gt;</p>\r\n\r\n<p>&lt;p&gt;&lt;strong&gt;- If + past simple, ... would/should/could/might/had to/ought to + be V-ing.&lt;/strong&gt;&lt;br /&gt;<br />\r\nEx. If we left&amp;nbsp;Hanoi&amp;nbsp;for&amp;nbsp;Hue&amp;nbsp;this morning, we would be staying in&amp;nbsp;Hue&amp;nbsp;tomorrow.&lt;/p&gt;</p>\r\n\r\n<p>&lt;p&gt;&lt;strong&gt;- If + past simple, past simple&lt;/strong&gt;. (việc đ&amp;atilde; xảy ra)&lt;br /&gt;<br />\r\nEx. If the goalkeeper didn&amp;#39;t catch the ball, they lost.&lt;/p&gt;</p>\r\n\r\n<p>&lt;p&gt;&lt;strong&gt;- If + past simple, ... would be + V-ing.&lt;/strong&gt;&lt;br /&gt;<br />\r\nEx. If I were on holiday with him, I would/might be touring&amp;nbsp;Italy&amp;nbsp;now.&lt;/p&gt;</p>\r\n\r\n<p>&lt;p&gt;- If d&amp;ugrave;ng như &amp;quot;as, since, because&amp;quot; c&amp;oacute; thể kết hợp với động từ ở nhiều th&amp;igrave; kh&amp;aacute;c nhau trong mệnh đề ch&amp;iacute;nh v&amp;agrave; kh&amp;ocirc;ng thực sự l&amp;agrave; một c&amp;acirc;u điều kiện.&lt;br /&gt;<br />\r\nEx. If you knew her troubles, why didn&amp;#39;t you tell me?&lt;/p&gt;</p>\r\n\r\n<p>&lt;p&gt;B. Mệnh đề phụ (if-clause)&lt;/p&gt;</p>\r\n\r\n<p>&lt;p&gt;&lt;strong&gt;- If + past continuous, ... would/could + V-inf.&lt;/strong&gt;&lt;br /&gt;<br />\r\nEx. If we were studying English in&amp;nbsp;London&amp;nbsp;now, we could speak English much better.&lt;/p&gt;</p>\r\n\r\n<p>&lt;p&gt;&lt;strong&gt;- If + past perfect, ... would/could + V-inf.&lt;/strong&gt;&lt;br /&gt;<br />\r\nEx. If you had taken my advice, you would be a millionaire now.&lt;/p&gt;</p>\r\n\r\n<p>&lt;p&gt;&lt;strong&gt;LOẠI III&lt;/strong&gt;&lt;br /&gt;<br />\r\n&lt;br /&gt;<br />\r\nA. Mệnh đề ch&amp;iacute;nh (main clause)&lt;/p&gt;</p>\r\n\r\n<p>&lt;p&gt;&lt;strong&gt;- If + past perfect, ... could/might + present perfect.&lt;/strong&gt;&lt;br /&gt;<br />\r\nEx. If we had found him earlier, we could have saved his life.&lt;/p&gt;</p>\r\n\r\n<p>&lt;p&gt;&lt;strong&gt;- If + past perfect, present perfect continuous.&lt;/strong&gt;&lt;br /&gt;<br />\r\nEx. If you had left&amp;nbsp;Hanoi&amp;nbsp;for&amp;nbsp;Haiphong&amp;nbsp;last Saturday, you would have been swimming in Doson last Sunday.&lt;/p&gt;</p>\r\n\r\n<p>&lt;p&gt;&lt;strong&gt;- If + past perfect, ... would + V-inf.&lt;/strong&gt;&lt;br /&gt;<br />\r\nEx. If she had followedmy advice, she would be richer now.&lt;br /&gt;<br />\r\nIf you had taken the medicine yesterday, you would be better now.&lt;/p&gt;</p>\r\n\r\n<p>&lt;p&gt;B. Mệnh đề phụ (if-clause)&lt;/p&gt;</p>\r\n\r\n<p>&lt;p&gt;&lt;strong&gt;- If + past perfect continuous, ... would + present perfect.&lt;/strong&gt;&lt;br /&gt;<br />\r\nEx. If it hadn&amp;#39;t been raining the whole week, I would have finished the laundry&lt;/p&gt;</p>\r\n\r\n<p>&lt;p&gt;C&amp;aacute;c trường hợp d&amp;ugrave;ng &amp;quot;wish&amp;quot; th&amp;igrave; cũng tương tự, chia l&amp;agrave;m 3 loại, c&amp;aacute;ch d&amp;ugrave;ng như bạn NHH đ&amp;atilde; n&amp;oacute;i ở tr&amp;ecirc;n v&amp;agrave; c&amp;oacute; 1 số biến thể tương tự nh&amp;eacute;.&lt;/p&gt;</p>\r\n\r\n<p>&lt;p&gt;Đối với trường hợp &amp;quot;if&amp;quot; được sử dụng như một li&amp;ecirc;n từ d&amp;ugrave;ng để bắt đầu một mệnh đề phụ trạng ngữ chỉ điều kiện về thời gian, l&amp;uacute;c n&amp;agrave;y &amp;quot;if = when&amp;quot;. Vậy &amp;quot;if&amp;quot; v&amp;agrave; &amp;quot;when&amp;quot; kh&amp;aacute;c nhau thế n&amp;agrave;o?&lt;/p&gt;</p>\r\n\r\n<p>&lt;p&gt;- WHEN: được d&amp;ugrave;ng khi diễn tả một điều g&amp;igrave; đ&amp;oacute; chắc chắn xảy ra.&lt;br /&gt;<br />\r\nEx. I am going to do some shopping today. When I go shopping, I&amp;#39;ll buy you some coffee.&lt;/p&gt;</p>\r\n\r\n<p>&lt;p&gt;- IF: được d&amp;ugrave;ng khi diễn tả một điều kh&amp;ocirc;ng chắc chắn (c&amp;oacute; thể hoặc kh&amp;ocirc;ng thể) xảy ra trong tương lai.&lt;br /&gt;<br />\r\nEx. I may go shopping today. If I go shopping, I&amp;#39;ll buy you some coffee.&lt;/p&gt;</p>\r\n\r\n<p>&lt;p&gt;&lt;strong&gt;&lt;em&gt;Lưu &amp;yacute;:&lt;/em&gt;&lt;/strong&gt;&amp;nbsp;Động từ ch&amp;iacute;nh trong mệnh đề phụ trạng ngữ bắt đầu bằng &amp;quot;when&amp;quot; hoặc &amp;quot;if&amp;quot; lu&amp;ocirc;n ở th&amp;igrave; present simple mặc d&amp;ugrave; h&amp;agrave;nh động sẽ xảy ra trong tương lai.&lt;br /&gt;<br />\r\nEx. When/If he arrives tomorrow, I&amp;#39;ll tell him about it&lt;/p&gt;<br />\r\n&nbsp;</p>\r\n', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `ID` int(11) NOT NULL,
  `HoTen` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `MatKhau` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `NguoiDung` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`ID`, `HoTen`, `Email`, `MatKhau`, `NguoiDung`) VALUES
(1, 'tam 1', 'vuminhtam.sdb@gmail.com', '202cb962ac59075b964b07152d234b70', 1),
(2, 'tam 2', 'vuminhtam2.sdb@gmail.com', '202cb962ac59075b964b07152d234b70', 1),
(3, 'giang vien 1', 'giangvien1.@gmail.com', '202cb962ac59075b964b07152d234b70', 2),
(4, 'giang vien 2', 'giangvien2.@gmail.com', '202cb962ac59075b964b07152d234b70', 2),
(5, 'tam 3', 'vuminhtam3.sdb@gmail.com', '202cb962ac59075b964b07152d234b70', 1),
(6, 'tam 11', 'vuminhtam11.sdb@gmail.com', '202cb962ac59075b964b07152d234b70', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bocauhoi`
--
ALTER TABLE `bocauhoi`
  ADD PRIMARY KEY (`MaCauHoi`),
  ADD KEY `MaMonHoc` (`MaMonHoc`),
  ADD KEY `MaDeThi` (`MaDeThi`);

--
-- Indexes for table `dethi`
--
ALTER TABLE `dethi`
  ADD PRIMARY KEY (`MaMonHoc`,`MaDeThi`),
  ADD KEY `fk_madethi` (`MaDeThi`);

--
-- Indexes for table `giangvien`
--
ALTER TABLE `giangvien`
  ADD PRIMARY KEY (`GiangVienID`),
  ADD UNIQUE KEY `MaDeThi` (`MaDeThi`),
  ADD KEY `MaMonHoc` (`MaMonHoc`),
  ADD KEY `TaiKhoanID` (`TaiKhoanID`);

--
-- Indexes for table `hocvien`
--
ALTER TABLE `hocvien`
  ADD PRIMARY KEY (`HocVienID`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD KEY `TaiKhoanID` (`TaiKhoanID`),
  ADD KEY `MaMonHoc` (`MaMonHoc`);

--
-- Indexes for table `ketqua`
--
ALTER TABLE `ketqua`
  ADD PRIMARY KEY (`MaDeThi`,`MaMonHoc`,`HocVienID`),
  ADD KEY `HocVienID` (`HocVienID`);

--
-- Indexes for table `monhoc`
--
ALTER TABLE `monhoc`
  ADD PRIMARY KEY (`MaMonHoc`),
  ADD UNIQUE KEY `TenMonHoc` (`TenMonHoc`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bocauhoi`
--
ALTER TABLE `bocauhoi`
  MODIFY `MaCauHoi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `giangvien`
--
ALTER TABLE `giangvien`
  MODIFY `GiangVienID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hocvien`
--
ALTER TABLE `hocvien`
  MODIFY `HocVienID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `monhoc`
--
ALTER TABLE `monhoc`
  MODIFY `MaMonHoc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bocauhoi`
--
ALTER TABLE `bocauhoi`
  ADD CONSTRAINT `bocauhoi_ibfk_1` FOREIGN KEY (`MaMonHoc`) REFERENCES `monhoc` (`MaMonHoc`),
  ADD CONSTRAINT `bocauhoi_ibfk_2` FOREIGN KEY (`MaDeThi`) REFERENCES `dethi` (`MaDeThi`);

--
-- Constraints for table `dethi`
--
ALTER TABLE `dethi`
  ADD CONSTRAINT `fk_madethi` FOREIGN KEY (`MaDeThi`) REFERENCES `giangvien` (`MaDeThi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_monhoc` FOREIGN KEY (`MaMonHoc`) REFERENCES `monhoc` (`MaMonHoc`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `giangvien`
--
ALTER TABLE `giangvien`
  ADD CONSTRAINT `giangvien_ibfk_1` FOREIGN KEY (`MaMonHoc`) REFERENCES `monhoc` (`MaMonHoc`),
  ADD CONSTRAINT `giangvien_ibfk_2` FOREIGN KEY (`TaiKhoanID`) REFERENCES `taikhoan` (`ID`);

--
-- Constraints for table `hocvien`
--
ALTER TABLE `hocvien`
  ADD CONSTRAINT `hocvien_ibfk_1` FOREIGN KEY (`TaiKhoanID`) REFERENCES `taikhoan` (`ID`),
  ADD CONSTRAINT `hocvien_ibfk_2` FOREIGN KEY (`MaMonHoc`) REFERENCES `monhoc` (`MaMonHoc`);

--
-- Constraints for table `ketqua`
--
ALTER TABLE `ketqua`
  ADD CONSTRAINT `ketqua_ibfk_1` FOREIGN KEY (`HocVienID`) REFERENCES `hocvien` (`HocVienID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
