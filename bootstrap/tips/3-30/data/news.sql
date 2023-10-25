-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
-- 生成日期： 2023-03-13 14:43:08
-- 服务器版本： 8.0.12
-- PHP 版本： 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `my2022`
--

-- --------------------------------------------------------

--
-- 表的结构 `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `new` varchar(500) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `author` varchar(50) NOT NULL,
  `djcs` int(11) NOT NULL,
  `shzt` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `news`
--

INSERT INTO `news` (`id`, `title`, `new`, `picture`, `time`, `author`, `djcs`, `shzt`) VALUES
(1, '工程学院新闻', '工程学院新闻', 'w1.png', '20211101', '陈老师', 3, 0),
(2, '工程学院新闻新闻新闻新闻新闻', '工程学院新闻', 'w2.png', '20211102', '陈老师', 5, 0),
(3, '工程学院新闻', '工程学院新闻', 'w3.png', '20211103', '陈老师', 2, 0),
(4, '工程学院新闻', '工程学院新闻', 'w4.png', '20211104', '陈老师', 6, 0),
(5, '工程学院新闻', '工程学院新闻', '5.jpg', '20211105', '陈老师', 1, 0),
(6, '工程学院新闻', '工程学院新闻', '6.jpg', '20211106', '陈老师', 2, 0),
(7, '工程学院新闻', '工程学院新闻', '7.jpg', '20211107', '陈老师', 3, 0),
(8, '工程学院新闻新闻新闻新闻新闻新闻', '工程学院新闻', '8.jpg', '20211108', '陈老师', 5, 0),
(12, 'tt', 'tt', '', '2021-11-04 08:51:30', 'admin', 2, 0),
(13, 'yy', 'yy', '', '2021-11-04 08:52:08', 'admin', 2, 0),
(14, 'yy', '用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离。', '', '2021-11-04 08:53:37', 'admin', 2, 0),
(15, 'aaaaaaaa', '用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离。', '2.jpg', '2022-09-08 16:28:52', 'admin', 1, 0),
(16, '2022bbbbbbbbbbbb', '用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离。', 'b.jpg', '202220907', 'bb', 6, 1),
(17, '陈老师20221018', '22', '1.jpg', '2022-10-13 16:46:17', 'admin', 4, 0);

--
-- 转储表的索引
--

--
-- 表的索引 `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
