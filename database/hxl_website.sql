-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2024-01-17 04:22:28
-- 伺服器版本： 10.4.32-MariaDB
-- PHP 版本： 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `hxl_website`
--

-- --------------------------------------------------------

--
-- 資料表結構 `music`
--

CREATE TABLE `music` (
  `music_id` int(11) NOT NULL,
  `music_name` varchar(255) DEFAULT NULL,
  `music_file` varchar(255) DEFAULT NULL,
  `music_upload_datetime` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `music`
--

INSERT INTO `music` (`music_id`, `music_name`, `music_file`, `music_upload_datetime`, `user_id`) VALUES
(2, '拍手歌', '拍手歌.mp3', '2024-01-16 16:09:03', 1),
(3, '思念是一種病', '張震嶽蔡健雅 - 思念是一種病.mp3', '2024-01-17 03:09:37', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `website_picture`
--

CREATE TABLE `website_picture` (
  `pic_id` int(11) NOT NULL,
  `pic_date` date DEFAULT NULL,
  `pic_name` varchar(80) DEFAULT NULL,
  `user_id` int(50) DEFAULT NULL,
  `pic_content` text DEFAULT NULL,
  `pic_location` varchar(255) DEFAULT NULL,
  `pic_category` varchar(70) NOT NULL COMMENT '圖片分類',
  `pic_filename` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `website_picture`
--

INSERT INTO `website_picture` (`pic_id`, `pic_date`, `pic_name`, `user_id`, `pic_content`, `pic_location`, `pic_category`, `pic_filename`) VALUES
(4, '0000-00-00', '御坂美琴', 1, 'bilibili', '學員都市', '動漫圖片', '59689446(.png'),
(6, '0000-00-00', '女孩', 1, '女僕', '日本', '動漫圖片', '0f314738-1891-8896-4a73-c2a06cb07cb0.png'),
(7, '0000-00-00', '學生女孩', 1, '當初晨曦映窗前，\r\n微風輕舞起花瓣。\r\n女學子臨書桌，\r\n夢想在心間綻放。\r\n\r\n知識的種子在心田，\r\n勇敢地發芽、茁壯成林。\r\n她如春花嬌艷盛放，\r\n思考的光芒在眼瞳中閃爍。\r\n\r\n書卷中是她的舞臺，\r\n思索是她的舞蹈。\r\n她揮灑著筆墨的音符，\r\n在知識的大海中遨遊。\r\n\r\n堅持的力量是她的心靈，\r\n她努力奮鬥，追逐夢的光。\r\n學海無涯，她乘風破浪，\r\n勇敢地踏上知識的彼岸。\r\n\r\n女學生，智慧的花朵，\r\n懷抱著未來的種種期許。\r\n她的笑容是陽光的溫暖，\r\n她的青春是詩篇的悠揚。\r\n\r\n在學海中她翱翔，\r\n在書香中她綻放。\r\n女學生，生命的旋律，\r\n奏響了她獨特的音符。\r\n\r\n未來的路上有風有雨，\r\n她將走出屬於自己的軌跡。\r\n女學生，讓我們一同歡唱，\r\n她們的故事，是詩的韻律。', '日本', '動漫圖片', '73436041_p0_master1200.jpg'),
(8, '0000-00-00', '女孩', 1, '', '日本', '動漫圖片', '74318310_p0_master1200.jpg'),
(9, '0000-00-00', '女孩', 1, '', '', '動漫圖片', '91675733_p0_master1200.jpg'),
(10, '0000-00-00', '女孩', 2, '', '', '動漫圖片', '96637720_p0_master1200.jpg'),
(11, '0000-00-00', '女孩', 2, '', '', '動漫圖片', '99748884_p0_master1200.jpg'),
(12, '0000-00-00', '女孩', 2, '', '', '動漫圖片', '100808045_p0_master1200.jpg'),
(13, '0000-00-00', '女孩', 2, '', '', '動漫圖片', '106130169_p0_master1200.jpg'),
(17, '0000-00-00', '小水鴨展翅', 1, '', '關渡自然公園', '動物攝影', 'DSC00329.JPG'),
(20, '2023-12-31', '這什麼', 1, '我也不知道', '圓山花博', '風景攝影', 'DSC00747.JPG'),
(22, '2023-11-19', '黑鳶飛行', 1, 'ｓｏｎｙ攝影體驗會', '基隆港', '動物攝影', 'DSC04517.JPG'),
(25, '2023-10-22', '帝雉', 1, '黑長尾雉', '阿里山小笠原觀景台', '動物攝影', 'DSC07818.jpg'),
(26, '2023-10-22', '帝雉', 1, '黑長尾雉', '阿里山小笠原觀景台', '動物攝影', 'DSC07897.jpg'),
(27, '2022-06-08', '紅冠水雞戰爭', 1, '水雞英雄', '大安森林公園', '動物攝影', 'DSC08005.JPG'),
(28, '0000-00-00', '小波奇', 1, '', '日本', '動漫圖片', 'oEAAceIYcXExntjA9b1CLiATgCDUABAIclkJEf~noop.jpeg'),
(29, '0000-00-00', '女孩', 1, '', '', '動漫圖片', 'osA3bbeffQGLeLSLAfwAQds7dQYgmAEIcRAYHL~noop.jpeg'),
(30, '0000-00-00', '亞絲娜', 1, '', '', '動漫圖片', 'yasna09665789.png'),
(31, '0000-00-00', '紅鶴沙龍照', 1, '多佛朗明哥交纏', '台北市立動物園', '動物攝影', 'DSC08290.JPG'),
(32, '0000-00-00', '黑鳶飛行', 1, '', '基隆港', '動物攝影', 'DSC09751-2.JPG'),
(33, '0000-00-00', '動物之美', 1, '', '', '動物攝影', 'pexels-pixabay-47547.jpg'),
(34, '0000-00-00', '黑臉鵐', 1, '', '五股區', '動物攝影', 'DSC09792.JPG'),
(35, '0000-00-00', '世界之美', 1, '', '', '風景攝影', 'pexels-trace-hudson-2574656.jpg'),
(36, '0000-00-00', '褐頭焦鶯', 1, '', '五股區', '動物攝影', 'DSC09852.JPG'),
(37, '0000-00-00', '水母', 1, '', '', '動物攝影', 'pexels-pawel-kalisinski-1076758.jpg'),
(38, '2023-06-15', '貓咪', 1, '', '', '動物攝影', 'pexels-pixabay-45201.jpg'),
(39, '0000-00-00', '彩色鬥魚', 1, '', '', '動物攝影', 'pexels-chevanon-photography-325045.jpg'),
(40, '0000-00-00', '野狼', 1, '', '', '動物攝影', 'pexels-pixabay-2361.jpg'),
(41, '0000-00-00', '世界之美', 1, '', '', '動物攝影', 'pexels-pixabay-219906.jpg'),
(42, '0000-00-00', '女孩', 1, '', '', '人物攝影', 'pexels-巧克力饼干-19699869.jpg'),
(43, '0000-00-00', '貓咪', 1, '', '', '動物攝影', 'pexels-anderson-martins-3885948.jpg'),
(44, '0000-00-00', '老鷹', 1, '', '', '動物攝影', 'pexels-frank-cone-3908080.jpg'),
(46, '0000-00-00', '女孩', 1, '', '', '動漫圖片', '22ccaf2e93ac524d7901f2c3cdeccfc6.jpg'),
(47, '0000-00-00', '女孩', 1, '', '', '動漫圖片', 'bbe46578ea87a56cd13c4cef3dbe19e3.jpg'),
(48, '0000-00-00', '女孩', 1, '', '', '動漫圖片', 'c3707d6c96f69a505d65d13a7895d727.jpg'),
(49, '0000-00-00', '女孩', 1, '', '', '動漫圖片', 'd05f268f3b0678f3c19ba8bfc305c5d6.jpg'),
(50, '0000-00-00', '女孩', 1, '', '', '動漫圖片', 'ef035e9530a6934772b4fa9cdb7de40b.jpg'),
(51, '0000-00-00', '女孩', 1, '', '', '動漫圖片', '5337ca9a5220a624f1a4d3005132935e.jpg'),
(52, '0000-00-00', '御坂', 1, '人氣傲嬌', '', '動漫圖片', '0bbv8lckvukgslfi4o00mncrv9vznuy.png'),
(53, '0000-00-00', '御', 1, '常台盤電擊公主', '', '動漫圖片', '9d2722eddba44db0a25761d977ce838c.png'),
(54, '2024-01-02', '御坂美琴', 1, '超科學電磁砲\r\n\r\n電擊傲嬌', '', '動漫圖片', 'EbsQmwKXgAAhEEN.jpg'),
(56, '0000-00-00', '刀劍神域', 1, '', '艾恩格朗特', '動漫圖片', '1361540056-1845015440_n.jpg'),
(57, '0000-00-00', '女孩', 1, '', '', '動漫圖片', 'anime-new-year-2020-wallpaper-2560x1600_7.jpg'),
(58, '0000-00-00', '新月橋', 1, '', '新莊區', '風景攝影', 'DSC08627.jpg'),
(59, '0000-00-00', '台灣之美', 1, '', '嘉義', '風景攝影', 'CTHSvurn8c6.jpg'),
(60, '0000-00-00', '世界之美', 1, '', '', '風景攝影', 'pexels-johannes-plenio-1435075.jpg'),
(61, '0000-00-00', '台灣之美', 1, '', '', '風景攝影', 'pexels-timo-volz-1717859.jpg'),
(62, '0000-00-00', '世界之美', 1, '', '', '風景攝影', '2lhrl7p39ccg44880ocgooccwrx23jy-1000x664.jpg'),
(63, '0000-00-00', '御坂美琴', 1, '', '', '動漫圖片', 'E0RJcsLVUAEgk2r.jpg'),
(64, '0000-00-00', '御坂美琴', 1, '', '', '動漫圖片', 'uKT2I0H.jpg'),
(65, '0000-00-00', '藍色寶石複眼', 1, '小蜻蜓大複眼', '', '微距攝影', 'david_chambon.jpg'),
(66, '0000-00-00', '世界之美', 1, '', '', '風景攝影', 'pexels-pixabay-33582.jpg'),
(67, '2022-06-14', '由比濱結依', 1, '', '日本', '動漫圖片', '133654.jpg'),
(68, '0000-00-00', '果青', 1, '搞錯了', '', '動漫圖片', 'X7tX2sL.jpg'),
(69, '2023-02-28', '雷姆', 1, '這誰', '', '動漫圖片', '9c60aff8527d9ce2a30fb3a2d6ad3259.jpg'),
(70, '0000-00-00', '白貓', 1, '西絲蒂娜', '', '動漫圖片', 'd5b6ab087bd406543cdad7ac68973963.png'),
(71, '2017-06-16', '不起眼的女主角培育法', 1, '', '', '動漫圖片', '1DbWrFIn8BJpmNx2eSUomtLPhPH.jpg'),
(72, '0000-00-00', '幾何建築', 1, '', '', '風景攝影', 'pexels-henry-&-co-2628393.jpg'),
(73, '0000-00-00', '馬術師', 1, '騎馬奔馳', '', '人物攝影', 'pexels-morteza-akhnia-19791865.jpg'),
(74, '0000-00-00', '加藤惠', 1, '', '', '動漫圖片', '5bbfe0928a0631b504fe0cb96a8fde38.jpg'),
(75, '0000-00-00', '咖啡廳', 1, '', '', '動漫圖片', '891b20becba7ea489b8269c5e891f0bf.jpg'),
(76, '0000-00-00', '莓香', 1, '', '', '動漫圖片', 'thumb-1920-1295231.jpg'),
(77, '0000-00-00', '女孩們', 1, '', '', '動漫圖片', 'F895D458D702w600h410.jpeg'),
(78, '2024-01-14', '由比濱結依', 1, '', '', '動漫圖片', 'PuywmhAl.jpg'),
(79, '0000-00-00', '高捷少女', 1, '', '', '動漫圖片', '822905.jpg'),
(80, '0000-00-00', '吸血姬插圖', 1, '', '', '動漫圖片', '0073YlnVgy1hj6h8s89sfj30rs0elk3m.jpg'),
(81, '2024-01-03', '世界之美', 1, '世界美照', '歐洲', '風景攝影', 'pexels-tobi-620337.jpg'),
(82, '2023-08-19', '七美雙心石滬', 1, '澎湖景點', '', '風景攝影', 'DSC02647.jpg'),
(83, '0000-00-00', '吉丁蟲', 1, '', '澎湖', '微距攝影', 'DSC02718.jpg'),
(84, '0000-00-00', '鳳頭燕鷗', 1, '海鷗飛翔', '澎湖', '動物攝影', 'DSC02883.jpg'),
(85, '0000-00-00', '大稻埕夕陽', 1, '大稻埕馬頭', '大稻埕', '風景攝影', 'DSC09065-2.JPG'),
(86, '0000-00-00', '小橘子', 1, '日本歌鴝', '野柳', '動物攝影', 'DSC09996.JPG'),
(87, '0000-00-00', '鳳頭燕鷗', 1, '海鷗飛行', '澎湖', '動物攝影', 'DSC0254577.jpg'),
(88, '0000-00-00', '車軌', 1, '', '板橋區', '風景攝影', 'DSC0535044.jpg'),
(89, '0000-00-00', '吸血姬將軍', 1, '\\可瑪麗/\\可瑪麗/\\可瑪麗/\\可瑪麗/\\可瑪麗/\\可瑪麗/', '', '動漫圖片', '20230725200230325.jpg'),
(90, '0000-00-00', '泳裝派對', 1, '', '', '動漫圖片', '20230725200216567.jpg'),
(91, '0000-00-00', '吸血姬', 1, '', '', '動漫圖片', 'ICI5W5p.jpg'),
(92, '0000-00-00', '吸血姬', 1, '', '', '動漫圖片', '016-02.jpg'),
(93, '0000-00-00', '可瑪莉', 1, '', '', '動漫圖片', 'btefmemxt1oeeuu8l2stfkxtujaeokzfqwyo50w3.jpg'),
(94, '0000-00-00', '可瑪莉將軍', 1, '', '', '動漫圖片', 'F-NqII7aAAAzjKT.jpg'),
(95, '2018-08-28', '兒童', 1, '', '德國', '人物攝影', 'pexels-janko-ferlic-590471.jpg'),
(96, '2019-09-10', '極簡攝影的精隨', 1, '', '', '風景攝影', 'pexels-pixabay-268533.jpg'),
(97, '0000-00-00', '紅衣女性森林', 1, '', '', '人物攝影', 'pexels-kourosh-qaffari-1921168.jpg'),
(98, '0000-00-00', '蒼鷺', 1, '精彩瞬間', '', '動物攝影', '13-best-bird-photography-by-christopher.jpg'),
(99, '0000-00-00', '栗喉蜂虎', 1, '', '', '動物攝影', 'bird_photography_02.jpg'),
(100, '0000-00-00', '欸，你看那邊', 1, '有趣的鳥兒們', '', '動物攝影', '61543b14dafd71d73a28d02d89265025.jpg'),
(101, '0000-00-00', '土撥鼠驚訝', 1, '嚇死了', '', '動物攝影', 'original.jpg'),
(102, '2023-01-21', '孤獨搖滾', 1, '', '日本', '動漫圖片', '202302161043126335.jpg'),
(103, '0000-00-00', '女孩', 1, '', '', '動圖', 'fc9ee60300bb4e23b750cf87a6199a36.gif'),
(105, '0000-00-00', '女孩', 1, '', '', '動圖', 'Medea-Lily-FGO.gif'),
(106, '0000-00-00', '女孩', 1, '', '', '動圖', '0022565965956256fugu.gif'),
(107, '0000-00-00', '000222000222', 1, '', '', '動圖', '61QJ8xL.gif');

-- --------------------------------------------------------

--
-- 資料表結構 `website_pic_likes`
--

CREATE TABLE `website_pic_likes` (
  `like_id` int(11) NOT NULL,
  `user_id` int(50) NOT NULL,
  `pic_id` int(11) NOT NULL,
  `like_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `website_pic_likes`
--

INSERT INTO `website_pic_likes` (`like_id`, `user_id`, `pic_id`, `like_time`) VALUES
(5, 1, 27, '2024-01-14 08:26:35'),
(7, 1, 51, '2024-01-14 09:10:46'),
(14, 1, 8, '2024-01-14 14:30:30'),
(23, 1, 17, '2024-01-14 14:39:09'),
(29, 1, 4, '2024-01-14 14:43:54'),
(30, 1, 36, '2024-01-14 15:12:38'),
(31, 1, 37, '2024-01-14 15:35:13'),
(33, 1, 81, '2024-01-15 01:21:34'),
(34, 1, 44, '2024-01-15 01:28:05');

-- --------------------------------------------------------

--
-- 資料表結構 `website_user`
--

CREATE TABLE `website_user` (
  `user_id` int(11) NOT NULL,
  `user_account` varchar(80) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_password` varchar(20) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_phone` varchar(20) NOT NULL,
  `user_admin` varchar(20) NOT NULL,
  `user_birthday` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `website_user`
--

INSERT INTO `website_user` (`user_id`, `user_account`, `user_name`, `user_password`, `user_email`, `user_phone`, `user_admin`, `user_birthday`) VALUES
(1, 'liushuan', '劉希玄', 'lss125690', 'liuss1945@gmail.com', '0966632251', '1', '2002-06-24'),
(2, 'manman2', '麵麵', '987654', 'manman2@gmail.com', '0912456798', '0', '2019-06-18');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `music`
--
ALTER TABLE `music`
  ADD PRIMARY KEY (`music_id`);

--
-- 資料表索引 `website_picture`
--
ALTER TABLE `website_picture`
  ADD PRIMARY KEY (`pic_id`),
  ADD KEY `pic_user_id` (`user_id`);

--
-- 資料表索引 `website_pic_likes`
--
ALTER TABLE `website_pic_likes`
  ADD PRIMARY KEY (`like_id`),
  ADD KEY `user_id_F` (`user_id`),
  ADD KEY `pic_id_F` (`pic_id`);

--
-- 資料表索引 `website_user`
--
ALTER TABLE `website_user`
  ADD PRIMARY KEY (`user_id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `music`
--
ALTER TABLE `music`
  MODIFY `music_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `website_picture`
--
ALTER TABLE `website_picture`
  MODIFY `pic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `website_pic_likes`
--
ALTER TABLE `website_pic_likes`
  MODIFY `like_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `website_user`
--
ALTER TABLE `website_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 已傾印資料表的限制式
--

--
-- 資料表的限制式 `website_picture`
--
ALTER TABLE `website_picture`
  ADD CONSTRAINT `pic_user_id` FOREIGN KEY (`user_id`) REFERENCES `website_user` (`user_id`);

--
-- 資料表的限制式 `website_pic_likes`
--
ALTER TABLE `website_pic_likes`
  ADD CONSTRAINT `pic_id_F2` FOREIGN KEY (`pic_id`) REFERENCES `website_picture` (`pic_id`),
  ADD CONSTRAINT `user_id_F` FOREIGN KEY (`user_id`) REFERENCES `website_user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
