-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2022 at 03:51 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
drop database if exists phim;

create database phim;

use phim;
--
-- Database: `phim`
--

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(11) NOT NULL,
  `tennguoidanhgia` varchar(50) NOT NULL,
  `danhgia` text NOT NULL,
  `idphim` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `binhluan`
--

INSERT INTO `binhluan` (`id`, `tennguoidanhgia`, `danhgia`, `idphim`) VALUES
(70, 'user123', 'phim hay', 8),
(71, 'user123', 'phim hay quá :3 é é', 8),
(72, 'user123', 'Nice!!!', 7),
(73, 'user123', 'phim hay quá', 26),
(74, 'user123', 'phim hay quá :3', 26),
(75, 'tanhung123', 'phim hay quá :3', 19),
(76, 'tanhung123', 'phim hay sdsa', 26);

-- --------------------------------------------------------

--
-- Table structure for table `chitietxemphim`
--

CREATE TABLE `chitietxemphim` (
  `id` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idphim` int(11) NOT NULL,
  `ngayxem` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chitietxemphim`
--

INSERT INTO `chitietxemphim` (`id`, `iduser`, `idphim`, `ngayxem`) VALUES
(1, 50, 11, '16-12-22'),
(2, 51, 8, '16-12-22'),
(3, 51, 9, '16-12-22'),
(13, 0, 8, '16-12-22'),
(14, 0, 8, '16-12-22'),
(15, 53, 9, '17-12-22'),
(16, 0, 26, '17-12-22'),
(17, 58, 26, '18-12-22'),
(18, 58, 19, '18-12-22');

-- --------------------------------------------------------

--
-- Table structure for table `danhgia`
--

CREATE TABLE `danhgia` (
  `id` int(11) NOT NULL,
  `tennguoidanhgia` varchar(50) NOT NULL,
  `idphim` int(11) NOT NULL,
  `sosao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `danhgia`
--

INSERT INTO `danhgia` (`id`, `tennguoidanhgia`, `idphim`, `sosao`) VALUES
(16, 'user123', 26, 4),
(17, 'user123', 27, 4),
(18, 'user123', 3, 4),
(19, 'user123', 6, 5),
(20, 'tanhung123', 19, 4);

-- --------------------------------------------------------

--
-- Table structure for table `phim`
--

CREATE TABLE `phim` (
  `id` int(11) NOT NULL,
  `tenphim` varchar(50) NOT NULL,
  `theloai` varchar(50) NOT NULL,
  `quocgia` varchar(50) NOT NULL,
  `tuoi` int(11) NOT NULL,
  `dienvien` varchar(100) NOT NULL,
  `daodien` varchar(50) NOT NULL,
  `ngaychieu` varchar(50) NOT NULL,
  `thoiluong` int(11) NOT NULL,
  `noidung` text NOT NULL,
  `trangthai` int(11) NOT NULL,
  `banner` varchar(50) NOT NULL,
  `anhphim` varchar(50) NOT NULL,
  `trailer` varchar(50) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `phim`
--

INSERT INTO `phim` (`id`, `tenphim`, `theloai`, `quocgia`, `tuoi`, `dienvien`, `daodien`, `ngaychieu`, `thoiluong`, `noidung`, `trangthai`, `banner`, `anhphim`, `trailer`, `link`) VALUES
(1, 'Bloodshot', 'Hành Động', 'Mỹ', 16, 'Vin Diesel, Eiza González', 'Dave Wilson', '11/3/2020', 110, '  Ray Garrison là một sĩ quan cấp cao đã hy sinh trong một trận chiến. Thế nhưng, anh được tái sinh bằng công nghệ cao, giúp Ray sở hữu sức mạnh siêu nhiên và khả năng phục hồi nhanh chóng. Vận dụng những kỹ năng mới, anh săn lùng gã đàn ông đã giết vợ mình. Thế nhưng, khi sự thật dần hé mở, Ray nhận ra rằng không phải mọi thứ đều đáng tin. Ngay cả chính bản thân anh. ', 0, 'phim3.jpg', 'anhphim1.jpg', 'https://www.youtube.com/embed/2xmqGklHWLI', 'https://autoembed.to/movie/imdb/tt1634106'),
(2, 'Onward', 'Hoạt Hình', 'Mỹ', 12, 'Tom Holland, Chris Pratt', 'Dan Scanlon', '6/3/2020', 103, 'Lấy bối cảnh vùng ngoại ô một thế giới kỳ ảo, hai anh em yêu tinh tuổi teen bắt đầu hành trình khám phá xem, liệu rằng đâu đó ngoài kia có còn tồn tại ma thuật không?', 0, 'phim1.jpg', 'anhphim9.jpg', 'https://www.youtube.com/embed/gn5QmllRCn4', 'https://autoembed.to/movie/imdb/tt7146812'),
(3, 'Wonder Woman 1984', 'Hành động, Phiêu lưu, Giả Tưởng', 'Mỹ', 13, 'Gal Gadot, Pedro Pascal, Chris Pine', 'Dan Scanlon', '5/6/2020', 110, 'Phần tiếp theo của bộ phim siêu anh hùng Wonder Woman năm 2017.', 0, 'phim8.png', 'anhphim2.png', 'https://www.youtube.com/embed/sfM7_JLk-84', 'https://autoembed.to/movie/imdb/tt7126948'),
(4, 'Bones and All', 'Tình cảm, Giả tưởng', 'Mỹ', 18, 'Taylor Russell, Timothée Chalamet, Michael Stuhlba', 'Luca Guadagnino', '18/11/2022', 131, 'Bộ phim xoay quanh hai nhân vật trẻ tuổi: Maren (Taylor Russell) và Lee (Timothée Chalamet). Lee là mối tình đầu của Maren. Cả hai sống bên lề xã hội nước Mỹ những năm 80, cùng rong ruổi trên một hành trình dài và kỳ lạ. Chuyến hành trình của cả hai không chỉ có tự do, lãng mạn, sự cô đơn lẩn khuất, mà còn là căng thẳng, kịch tính. Bởi Lee là một chàng trai đẹp mã và… ăn thịt người.', 0, 'bonesandall1.jpg', 'bonesandall0.jpg', 'https://www.youtube.com/embed/pjMt1MIk2EA', 'https://autoembed.to/movie/imdb/tt10168670'),
(5, 'Moonlight', 'Tình cảm, Gia đình', 'Mỹ', 16, 'Mahershala Ali, Naomie Harris, Trevante Rhodes', 'Barry Jenkins', '21/10/2016', 110, 'Phim Ánh Trăng chuyển thể từ vở kịch In Moonlight Black Boys Look Blue (tạm dịch: Những chàng trai da đen buồn bã dưới ánh trăng) của nhà biên kịch mới nổi Tarell Alvin McCraney, bộ phim Moonlight do đạo diễn Barry Jenkins thực hiện là ba lát cắt trong cuộc đời đầy biến cố của Chiron: từ nhóc là “Little” nhỏ bé ít nói (Alex Hibbert), tới cậu học sinh nhạy cảm Chiron (Ashton Sanders), và cuối cùng là chàng thanh niên trải đời “Black”.', 0, 'moonlight.jpg', 'moonlight0.jpg', 'https://www.youtube.com/embed/9NJj12tJzqc', 'https://autoembed.to/movie/imdb/tt4975722'),
(6, 'Prey', 'Hành động, Giả tưởng, Phiêu lưu', 'Mỹ', 16, 'Amber Midthunder, Dakota Beavers, Dane DiLiegro', 'Dan Trachtenberg', '5/8/2022', 99, 'Bộ phim lấy bối cảnh 300 trước tại vùng đồng bằng Nam Hoa Kỳ. Tại đây, một sinh vật ngoại lai đến từ ngoài vũ trụ đổ bộ xuống Trái Đất đe dọa cuộc sống của một bộ tộc cổ xưa. Naru, một nữ chiến binh lành nghề, phải dùng mọi kỹ năng của mình để tồn tại cũng như bảo vệ ngôi làng trước mối hiểm họa mà cô chưa từng hiểu biết.', 0, 'prey1.jpg', 'prey0.jpg', 'https://www.youtube.com/embed/wZ7LytagKlc', 'https://autoembed.to/movie/imdb/tt11866324'),
(7, 'Thor: Love and Thunder', 'Hành động, Giả tưởng, Phiêu lưu', 'Mỹ', 13, 'Chris Hemsworth, Natalie Portman, Christian Bale', 'Taika Waititi', '6/7/2022', 118, 'Thor đi vào một cuộc hành trình không giống như bất cứ cuộc phiêu lưu anh ấy từng phải đối mặt, một cuộc tìm kiếm sự bình yên bên trong tâm hồn của vị Thần Sấm. Nhưng việc nghỉ hưu của anh ta bị gián đoạn bởi một kẻ giết người nổi tiếng liên thiên hà được gọi là Gorr the God Butcher, kẻ đang huỷ diệt sự sống của các vị thần. Để chống lại mối đe dọa, Thor nhờ đến sự giúp đỡ của Vua Valkyrie, Korg và bạn gái cũ Jane Foster, người bỗng nhiên sử dụng được chiếc búa Mjolnir ngon lành cành đào một cách khó hiểu. ', 0, 'thor31.jpg', 'thor30.jpg', 'https://www.youtube.com/embed/Go8nTmfrQd8', 'https://autoembed.to/movie/imdb/tt10648342'),
(8, 'Black Widow', 'Hành động, Giả Tưởng, Phiêu lưu', 'Mỹ', 13, 'Scarlett Johansson, Florence Pugh, Rachel Weisz', 'Cate Shortland', '1/5/2020', 110, 'Phim là cuộc hành trình độc lập của một trong những chiến binh xuất sắc nhất hội Avengers - Black Widow, lần này đối thủ của cô là một ác nhân bí ẩn đầy mưu mô!', 0, 'phim7.jpg', 'anhphim7.jpg', 'https://www.youtube.com/embed/ybji16u608U', 'https://autoembed.to/movie/imdb/tt3480822'),
(9, 'The Northman', 'Hành động, Giả tưởng, Phiêu lưu', 'Mỹ', 16, 'Alexander Skarsgård, Nicole Kidman, Claes Bang', 'Robert Eggers', '7/4/2022', 137, 'Chiến Binh Phương Bắc là bộ phim sử thi hành động kể về một hoàng tử trẻ người Viking trong hành trình trả thù cho cái chết của cha anh.', 0, 'thenorthman1.jpg', 'thenorthman0.jpg', 'https://www.youtube.com/embed/oMSdFM12hOw', 'https://autoembed.to/movie/imdb/tt11138512'),
(10, 'Everything Everywhere All at Once', 'Hành động, Gia đình, Tình cảm', 'Mỹ', 16, 'Michelle Yeoh, Stephanie Hsu, Jamie Lee Curtis', 'Dan Kwan, Daniel Scheinert', '24/3/2022', 139, 'Một người nhập cư gốc Trung Quốc già nua bị cuốn vào một cuộc phiêu lưu điên cuồng, nơi cô ấy một mình có thể cứu thế giới bằng cách khám phá các vũ trụ khác kết nối với nhiều thực tại mà cô đang sống.', 0, 'EEAAO1.jpg', 'EEAAO0.jpg', 'https://www.youtube.com/embed/wxN1T1uxQ2g', 'https://autoembed.to/movie/imdb/tt6710474'),
(11, 'Minions: The Rise of Gru', 'Hoạt Hình', 'Mỹ', 12, 'Steve Carell, Pierre Coffin, Alan Arkin', 'Kyle Balda', '3/7/2020', 110, 'Minions - Những Quả Chuối Vàng biết đi sẽ trở lại trong câu chuyện chưa kể về tuổi thơ của Gru - cậu bé mười hai tuổi mơ được trở thành ác nhân xuất sắc nhất thế giới.', 0, 'phim12.jpg', 'anhphim6.jpg', 'https://www.youtube.com/embed/54yAKyNkK7w', 'https://autoembed.to/movie/imdb/tt5113044'),
(12, 'No Time to Die', 'Hành động, Gia đình, Tình cảm', 'Mỹ', 16, 'Daniel Craig, Ana de Armas, Rami Malek', 'Cary Joji Fukunaga', '29/9/2021', 163, 'Bộ phim thứ 25 về thương hiệu điệp viên nổi danh 007 sẽ được tiếp nối sau khi Bond rời khỏi tổ chức và về sống tại Jamaica. Tuy nhiên, chuỗi ngày bình yên đó chẳng kéo dài được bao lâu khi một người bạn cũ tại CIA Felix Leiter bất ngờ tìm đến để nhờ sự trợ giúp của anh trong nhiệm vụ giải cứu một tiến sỹ khoa học bị bắt cóc.', 0, 'notimetodie1.jpg', 'notimetodie0.jpg', 'https://www.youtube.com/embed/BIhNsAtPbPI', 'https://autoembed.to/movie/imdb/tt2382320'),
(13, 'The Last Duel', 'Hành động, Gia đình, Tình cảm', 'Mỹ', 18, 'Matt Damon, Adam Driver, Jodie Comer', 'Ridley Scott', '13/10/2021', 153, 'The Last Duel dựa trên một câu chuyện có thật trong lịch sử tại Pháp vào thế kỷ 14. Xoay quanh câu chuyện về Jean de Carrouges một vị hiệp sĩ có cô vợ là Marguerite, cô ta đã buộc tội vị bạn thân chí cốt của Jean là Jacques Le Gris một bá tước đã cưỡng bức nàng. Thế nhưng Jacques lại không thừa nhận tội danh của mình. Và vụ án được xử lý qua loa, khiến cho danh dự và cuộc hôn nhân của Marguerite bị tổn thương. Do đó vị vua Charles IV đã quyết định ra một cuộc đối tay đôi theo đúng nghịa đen kẻ chiến thắng là kẻ vô tội. Nhưng nếu kẻ bị buộc tội chiến thắng, Marguerite sẽ bị thiêu sống vì tội khai man.', 0, 'thelastduel1.jpg', 'thelastduel0.jpg', 'https://www.youtube.com/embed/mgygUwPJvYk', 'https://autoembed.to/movie/imdb/tt4244994'),
(14, 'Titane', 'Ly kì, Giả tưởng, Tình cảm', 'Pháp', 18, 'Vincent Lindon, Agathe Rousselle', 'Julia Ducournau', '14/7/2021', 108, 'Nhân vật chính của Titane là Alexia – cô gái gặp biến cố từ khi gia đình bị tai nạn ô tô. Chấn thương từ vụ tai nạn khiến cô phải gắn một chiếc đĩa titan vào đầu. Sau khi hồi phục, cô tách biệt cha mẹ để dành tình yêu cho xe hơi.', 0, 'titane1.jpg', 'titane0.jpg', 'https://www.youtube.com/embed/Q5_w2W5G9OM', 'https://autoembed.to/movie/imdb/tt10944760'),
(15, 'Tenet', 'Hành động, Giả tưởng, Phiêu lưu', 'Mỹ', 16, 'John David Washington, Robert Pattinson, Elizabeth Debicki', 'Christopher Nolan', '22/8/2020', 150, 'Hai nhân vật được một tổ chức bí ẩn chiêu mộ, sử dụng một thứ được gọi là “Tenet” - được cho là “có thể mở ra những cửa đúng” và “vài cửa sai”, nhằm ngăn chặn Thế chiến thứ III từ trước khi nó xảy ra. Thay vì du hành thời gian, phương pháp nó hoạt động là “nghịch đảo” những gì đã có.', 0, 'tenet1.jpg', 'tenet0.jpg', 'https://www.youtube.com/embed/AZGcmvrTX9M', 'https://autoembed.to/movie/imdb/tt6723592'),
(16, 'Spider-Man: Into the Spider-Verse', 'Hoạt hình, Hành động', 'Mỹ', 12, 'Shameik Moore, Jake Johnson, Hailee Steinfeld', 'Bob Persichetti', '7/12/2018', 117, 'Miles Morales (hay còn được gọi là Người nhện đen – Black Spider-Man) sở hữu sức mạnh tương tự như của Spider-Man nguyên thủy, bắt nguồn từ vết cắn của một con nhện được tạo ra bởi kẻ thù của Spider-Man, Norman Osborn, trong nỗ lực nhân đôi những khả năng phi thường đó.Tuy nhiên, không ai biết rằng cậu chính là Người Nhện, người anh hùng bí ẩn bảo vệ cho Brooklyn khỏi bọn trộm cướp. Trong lần gặp gỡ “tiền bối” Peter Parker, Miles Morales phát hiện ra thế giới mà cậu đang sống đang phải đối mặt với những kẻ thù mới đến từ một thực tại song song mang tên Spider-Verse. Liệu các Người Nhện có thể cứu lấy thế giới của mình?', 0, 'intothespiderverse1.jpg', 'intothespiderverse0.jpg', 'https://www.youtube.com/embed/cqGjhVJWtEg', 'https://autoembed.to/movie/imdb/tt4633694'),
(17, 'Blade Runner 2049', 'Hành động, Giả tưởng, Phiêu lưu', 'Mỹ', 16, 'Ryan Gosling, Harrison Ford, Ana de Armas', 'Denis Villeneuve', '6/10/2017', 163, '35 năm sau ngày phần đầu tiên ra mắt, Blade Runner trở lại với những gương mặt mới, câu chuyện mới, đầy hứa hẹn vẫn sẽ giữ được cái “chất” khiến thương hiệu này trở thành tác phẩm kinh điển trong lịch sử điện ảnh.\r\nBlade Runner lấy bối cảnh thế giới tương lai, nơi ô nhiễm môi trường, khủng hoảng lương thực khiến cuộc sống của con người trở thành địa ngục. Để thoát khỏi diệt vong, nhân loại tiến hành khai phá các hành tinh khác trong vũ trụ để thành lập thuộc địa. Họ sử dụng người nhân bản do Eldon Tyrell chế tạo làm nguồn lao động chính. Người nhân bản được tạo ra rất giống với con người, có cảm xúc, suy nghĩ nhưng có tuổi thọ nhất định ở một số phiên bản.', 0, 'blade-runner-20491.jpg', 'blade-runner-20490.jpg', 'https://www.youtube.com/embed/gCcx85zbxz4', 'https://autoembed.to/movie/imdb/tt1856101'),
(18, 'Guillermo del Toro\'s Pinocchio', 'Hoạt hình, Gia đình', 'Mỹ', 12, '', 'Guillermo del Toro', '9/11/2022', 121, 'Guillermo del Toro, nhà làm phim đoạt giải Oscar, tái dựng câu chuyện kinh điển về con rối gỗ sống dậy trong câu chuyện nhạc kịch kiểu tĩnh vật đầy ấn tượng này.', 0, 'pinocchio1.jpg', 'pinocchio0.jpg', 'https://www.youtube.com/embed/Od2NW1sfRdA', 'https://autoembed.to/movie/imdb/tt1488589'),
(19, 'Wolfwalkers', 'Hoạt hình, Gia đình', 'PhápAi-len', 12, 'Honor Kneafsey, Eva Whittaker, Sean Bean', 'Tomm Moore', '26/10/1020', 102, 'Trong một thời kỳ nơi tồn tại đầy dẫy ma thuật, khi sói bị coi là ma quỷ và ác quỷ thì cần được thuần hóa, một thợ săn học việc trẻ, Robyn, đến Ireland cùng với cha cô để quét sạch bầy sói cuối cùng. Nhưng khi Robyn cứu một cô gái bản địa hoang dã, Mebh tình bạn của họ đã đưa cô đến khám phá thế giới của những WOLFWALKERS và biến cô thành chính thứ mà cha cô có nhiệm vụ tiêu diệt.', 0, 'wolfwalkers1.jpg', 'wolfwalkers0.jpg', 'https://www.youtube.com/embed/d_Z_tybgPgg', 'https://autoembed.to/movie/imdb/tt5198068'),
(20, 'Isle of Dogs', 'Hoạt hình, Gia đình, Hài', 'Mỹ, Nhật Bản', 12, 'Bryan Cranston, Koyu Rankin, Edward Norton', 'Wes Anderson', '23/3/2018', 101, 'Ở thế giới xã hội giả tưởng đặt bối cảnh tại thành phố Megasaki, Nhật Bản, khi tất cả loài chó bị \"trục xuất\" đến một hòn đảo hoang vì cho rằng chúng mang mầm bệnh nguy hiểm. Câu chuyện của bộ phim mở ra khi cậu bé Atari Kobayashi 12 tuổi vô tình lạc mất chú chó cưng tên Spot và cậu bắt đầu cuộc hành trình đi tìm kiếm người bạn thân này của mình.', 0, 'isleofdogs1.jpg', 'isleofdogs0.jpg', 'https://www.youtube.com/embed/fx1-RXrKKBk', 'https://autoembed.to/movie/imdb/tt5104604'),
(21, 'Song of the Sea', 'Hoạt hình, Gia đình', 'Mỹ', 12, 'David Rawle, Brendan Gleeson, \r\nLisa Hannigan', 'Tomm Moore', '6/9/2014', 94, 'Dựa trên câu chuyện về Selkie - sinh vật huyền thoại của Ireland, ban đầu là hải cẩu, sau đó lột bộ da hóa thành người. Bộ phim kể về hai anh em Ben và Saoirse, sống ở ngọn hải đăng trên đảo cùng với bố.\r\n\r\nNgười mẹ đã bỏ đi sau khi sinh Saoirse. Khi Saoirse phát hiện chiếc vỏ sò mà mẹ tặng cho anh trai, âm thanh cô bé thổi đã dẫn lối cô tới bí mật kỳ diệu mà mẹ cô giấu kín. Đêm nọ, Saoirse tìm thấy một chiếc áo khoác được cất trong một chiếc hòm, cô bé khoác lên mình và hòa mình vào biển cả. Người bà chứng kiến cháu mình dạt vào bờ, cho rằng nơi sinh sống hiện tại rất nguy hiểm nên đã đưa hai anh em tới thành phố.', 0, 'SOTS1.jpg', 'SOTS0.jpg', 'https://www.youtube.com/embed/VrhoOzW8oF8', 'https://autoembed.to/movie/imdb/tt1865505'),
(22, 'The Tale of The Princess Kaguya', 'Hoạt hình, Gia đình', 'Nhật Bản', 12, 'Chloë Grace Moretz, James Caan, Mary Steenburgen', ' Isao Takahata', '23/11/2013', 137, 'Phim Nàng tiên trong ống tre (Truyền thuyết về Công chúa Kaguya) là một phim hoạt hình của Studio Ghibli, xoay quanh cuộc đời của cô gái bí ẩn Kaguya. Ở nơi sơn cước của nước Nhật cổ xa xăm nọ có lão tiều phu chuyên nghề đốn tre rừng mang ra chợ bán. Một hôm lão tìm thấy một nàng công chúa trong búp măng mọc trái mùa.', 0, 'TTOTPK1.jpg', 'TTOTPK0.jpg', 'https://www.youtube.com/embed/W71mtorCZDw', 'https://autoembed.to/movie/imdb/tt2576852'),
(23, 'Fantastic Mr. Fox', 'Hoạt hình, Gia đình, Hài', 'Mỹ', 12, 'George Clooney, Meryl Streep, Bill Murray', 'Wes Anderson', '23/10/2009', 86, 'Câu truyện kể về ông Cáo phải vất bỏ lại sau lưng những chuỗi ngày phiêu lưu lang bạc bắt gà, trộm rượu thời trai trẻ để làm những việc ông ta cần làm, 1 người chồng,1 người cha. Nhưng bản năng hoang dại đã không thể ngăn cản ông thực hiện 1 phi vụ cuối cùng, đột kích trang tại của 3 tên nông dân xấu tính, hợm hĩnh nhất vùng: Boggis, Bunce và Bean.', 0, 'mrfox1.jpg', 'mrfox0.jpg', 'https://www.youtube.com/embed/n2igjYFojUo', 'https://autoembed.to/movie/imdb/tt0432283'),
(24, 'Coraline', 'Hoạt hình, Gia đình, Hài', 'Mỹ', 12, 'Dakota Fanning, Teri Hatcher, John Hodgman', 'Henry Selick', '5/2/2009', 100, 'Coraline là một cô bé mới lớn sống trong một căn hộ lớn, lớn tới mức cô nhiều lúc đi lạc trong đó. Coraline thông minh, thích khám phá mọi điều và chẳng bao giờ giận dỗi lâu, nhưng có một điều khiến cô hết sức phiền lòng là không ai trừ bố mẹ và mấy con chuột gọi đúng tên cô. Và vào một ngày mưa tầm tã, Coraline chẳng còn việc gì làm nên cô bé bắt đầu đếm các thứ có màu xanh trong nhà, đếm số lượng các cửa sổ, đếm các cánh cửa… Và, cô thấy có một cánh cửa như bị khảm vào tường - mẹ cô giải thích rằng đó vốn là cánh cửa thông sang phòng khác, khi khu căn hộ vẫn còn là một ngôi nhà lớn, chưa chia thành nhiều hộ nhỏ. Nhưng bà đã nhầm... Cánh cửa đó không thông sang căn phòng nào cả, nó thông sang cả một thế giới khác. Và Coraline đã bước vào đó, được đón chào nồng nhiệt. Ở đó, thậm chí ai cũng có thể gọi đúng tên cô bé là Coraline (chứ không phải là Caroline), cô có một Bố Khác, Mẹ Khác - giống hệt bố mẹ cô, chỉ khác mỗi một chỗ là mắt họ làm bằng cúc áo - và ai cũng ra sức chiều chuộng cô bé... Nhưng, sự rắc rối bắt đầu khi Mẹ Khác tìm mọi cách giữ cô lại thế giới bí mật đó, không muốn cô trở về thế giới bình thường...', 0, 'coraline1.jpg', 'coraline0.jpg', 'https://www.youtube.com/embed/m9bOpeuvNwY', 'https://autoembed.to/movie/imdb/tt0327597'),
(25, 'Ratatouille', 'Hoạt hình, Gia đình', 'Mỹ', 12, 'Brad Garrett, Lou Romano, Patton Oswalt', 'Brad Bird', '22/6/2007', 110, 'Remy là một chú chuột có lòng yêu thích ẩm thực và mong muốn được đến Paris để thực hiện ước mơ trở thành đầu bếp nổi tiếng. Tuy bị gia đình ngăn cản nhưng cuối cùng Remy cũng đặt chân được đến kinh đô ánh sáng và bắt đầu cuộc phiêu lưu của mình.\r\n\r\nTại đây, Remy quen Linguini - cậu con trai của thần tượng đồng thời là bếp trưởng nổi tiếng của nhà hàng Gusteau. Remy và Linguini trở thành cặp bài trùng trong việc chế biến các món ăn mới lạ, đồng thời chứng mình quan niệm của Gusteau: \"Ai cũng có thể nấu ăn ngon\".', 0, 'ratatouille1.jpg', 'ratatouille0.jpg', 'https://www.youtube.com/embed/NgsQ8mVkN8w', 'https://autoembed.to/movie/imdb/tt0382932'),
(26, 'Spirited Away', 'Hoạt hình, Gia đình', 'Nhật Bản', 12, 'Daveigh Chase, Suzanne Pleshette, Miyu Irino', ' Hayao Miyazaki', '20/7/2001', 124, 'Câu chuyện kể về cô bé bướng bỉnh Chihiro. Gia đình của Chihiro chuyển từ thành phố về quê sinh sống, và Chihiro chẳng thích thú tí nào với sự thay đổi này.\r\n\r\nBố của Chihiro là một tay lái xe tệ hại và có một trí nhớ \"quá tồi\", ông đã lái xe lạc đường đến một thành phố bị bỏ hoang, không bóng người. Bị cuốn hút bởi mùi vị thơm ngon của thức ăn, bố mẹ của Chihiro bắt đầu \"thưởng thức\", nhưng kết quả họ bị biến thành những con heo mập. Còn thành phố không người kia, sau khi trời tối, tất cả sống dậy, những bóng ma bắt đầu xuất hiện và hoạt động. Cô bé bướng bỉnh phải làm gì để cứu bố mẹ mình và thoát khỏi đây?', 0, 'spiritedaway1.jpg', 'spiritedaway0.jpg', 'https://www.youtube.com/embed/ByXuk9QqQkk', 'https://autoembed.to/movie/imdb/tt0245429'),
(27, 'Hacksaw Ridge', 'Hành động, Phiêu lưu', 'Mỹ', 18, 'Andrew Garfield, Sam Worthington, Luke Bracey', 'Mel Gibson', '7/10/2016', 139, 'Hacksaw Ridge 2016 kể lại cuộc đời của nhân vật có thật Desmond T. Doss (Andrew Garfield) - người lính từ chối cầm súng vì lý do tôn giáo. Nhưng ông vẫn trở thành anh hùng khi là một quân y, cứu sống 75 đồng đội trong cuộc chiến đẫm máu tại xứ sở hoa anh đào trong thời kỳ Thế chiến thứ II.', 0, 'hr1.jpg', 'hr0.jpg', 'https://www.youtube.com/embed/s2-1hz1juBI', 'https://autoembed.to/movie/imdb/tt2119532'),
(28, 'The Avengers', 'Hành động, Giả tưởng, Phiêu lưu', 'Mỹ', 12, 'Robert Downey Jr., Chris Evans, Scarlett Johansson, Jeremy Renner', 'Joss Whedon', '25/4/2012', 142, 'Marvel’s The Avengers là bộ phim giả tưởng kể về một nhóm siêu anh hùng với những khả năng đặc biệt, họ bao gồm: Người Sắt, Thor, Captain America, và Người Khổng Lồ được gọi chung với cái tên SHIELD. Mục đích của SHIELD là nhằm bảo vệ Trái đất khỏi âm mưu hủy hoại của những thế lực xấu từ ngoài địa cầu mà kẻ cầm đầu là Loki. Marvel’s The Avengers Là một trong những phim được mong đợi nhất hè 2012, phim quy tụ dàn diễn viên đẹp với những cảnh quay sống động đã mang về cho nhà sản xuất hơn 1 tỷ USD. Nếu bạn đã từng là Fan của những siêu phẩm như: Spider-Man, Batman thì Marvel’s The Avengers quả là một bộ phim khó có thể bỏ qua.', 0, 'avengers1.jpg', 'avengers0.jpg', 'https://www.youtube.com/embed/eOrNdBpGMv8', 'https://autoembed.to/movie/imdb/tt0848228');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sdt` int(11) NOT NULL,
  `role` int(3) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user`, `email`, `sdt`, `role`, `pass`) VALUES
(0, 'an danh', 'andanh@gmail.com', 908765123, -1, 'dkdkdkslmdslms'),
(40, 'admin123', 'nchithanh9999@gmail.com', 934071454, 2, '4152a9e49732b2c4e2ab19d704f64d1e5ea3b08e'),
(49, 'user123', 'user@gmail.com', 868439463, 1, '7501d5eb4497b15183c9e579e3eb5b30331c5690'),
(50, 'thung', 'tanhung12@gmail.com', 707206301, 1, '017ece082779c82cc992d37f85593b8bd458fe61'),
(51, 'thung123', 'tanhung12@gmail.com', 707206301, 1, 'cb4c71999498cad50780e8d8ae9244077c25c933'),
(53, 'thung1', 'aaa@student.tdtu.edu.vn', 707206301, 1, '1ce1a9dbe3dd212675618d10a2ab20cad2de80b2'),
(54, 'sa', 'tanhung12@gmail.com', 707206301, 1, '0bef1835e61bd012b31feab12632f6f35dd0420d'),
(55, 'sa1', 'tanhung12@gmail.com', 707206301, 1, 'e7e9555d4a5e16927b7b14941e8b538e1465fa07'),
(57, 'admin', 'admin@gmail.com', 707206301, 2, '413d985a3f649ce48bbbe2db86c13902eb2fbb2b'),
(58, 'tanhung123', '52000052@student.tdtu.edu.vn', 707206302, 1, '38e713f6385dbe2740e77defaa7aa1624a584a6b'),
(59, 'abc', '23122002hung@gmail.com', 707206301, 1, '1c0b9cd119977f2da4bd2e020f0e2ba5ffec636c');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `danhgiaphim_phim` (`idphim`);

--
-- Indexes for table `chitietxemphim`
--
ALTER TABLE `chitietxemphim`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iduser` (`iduser`),
  ADD KEY `idphim` (`idphim`);

--
-- Indexes for table `danhgia`
--
ALTER TABLE `danhgia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phim`
--
ALTER TABLE `phim`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user` (`user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `chitietxemphim`
--
ALTER TABLE `chitietxemphim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `danhgia`
--
ALTER TABLE `danhgia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `phim`
--
ALTER TABLE `phim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`idphim`) REFERENCES `phim` (`id`),
  ADD CONSTRAINT `binhluan_ibfk_2` FOREIGN KEY (`idphim`) REFERENCES `phim` (`id`);

--
-- Constraints for table `chitietxemphim`
--
ALTER TABLE `chitietxemphim`
  ADD CONSTRAINT `chitietxemphim_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `chitietxemphim_ibfk_2` FOREIGN KEY (`idphim`) REFERENCES `phim` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
