-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
-- 生成日期： 2022-10-11 09:00:51
-- 服务器版本： 5.7.26
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
-- 表的结构 `ip`
--

CREATE TABLE `ip` (
  `id` int(11) NOT NULL,
  `voteip` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `leaveword`
--

CREATE TABLE `leaveword` (
  `id` int(10) NOT NULL,
  `username` varchar(10) NOT NULL,
  `qq` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `homepage` varchar(50) NOT NULL,
  `face` varchar(20) NOT NULL,
  `leave_title` varchar(50) NOT NULL,
  `leave_contents` text NOT NULL,
  `leave_time` varchar(20) NOT NULL,
  `ip` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=gb2312;

--
-- 转存表中的数据 `leaveword`
--

INSERT INTO `leaveword` (`id`, `username`, `qq`, `email`, `homepage`, `face`, `leave_title`, `leave_contents`, `leave_time`, `ip`) VALUES
(1, 'fsdffsd', 0, '', '', '3.gif', 'sdfsdf', 'adsfdsf', 'dfdsfds', ''),
(2, '12321', 0, '', '', '1.gif', '23', '23213', '2132', ''),
(3, 'eferwer', 0, '', '', '4.gif', '2432', '213123', '23', ''),
(4, '12321', 0, '', '', '1.gif', '23', '23213', '2132', ''),
(5, 'eferwer', 0, '', '', '4.gif', '2432', '213123', '23', ''),
(6, '2', 2, '2', 'http://2', '1.gif', '22', '22', '2017-04-24 16:55:53', '::1'),
(7, 'a', 2, 'a', 'http://a', '1.gif', 'a', 'a', '2017-04-24 16:57:11', '::1'),
(8, 'zzz', 1212, '12323@126.com', 'http://', '1.gif', 'fdgdfg', 'fdgdfgdfgdf\r\nftyty', '2018-09-18 10:14:48', '::1'),
(9, '11111111', 11111, '1111', 'http://111', '19.gif', '1111111111', '1111111111111\r\n1\r\n1\r\n1\r\n1\r\n1\r\n', '2018-09-19 15:04:27', '::1'),
(10, '9999', 9999, '9999', 'http://9999', '7.gif', '99999', '9999999', '2018-09-19 15:05:22', '::1'),
(11, 'aaaa', 22221212, '121212', 'http://12213', '2.gif', '测试', '我的测试', '2018-09-19 15:08:32', '::1'),
(12, '1232', 3432, '34', 'http://34', '1.gif', '34', '324', '2021-11-04 09:06:44', '::1'),
(13, '123', 123, '11', 'http://', '3.gif', '22', '22', '2021-11-04 09:08:22', '::1'),
(14, '1232', 213, '34', 'http://', '1.gif', 'ddd', 'dd', '2021-11-04 09:10:19', '::1'),
(15, '20211108', 222, '12', 'http://1232', '1.gif', '陈老师', '陈老师\r\n陈老师\r\n陈老师', '2021-11-08 10:57:08', '::1'),
(16, '1111111', 111111, '111', 'http://11', '1.gif', '11111', '1111', '2021-11-08 10:58:49', '::1'),
(17, '陈老师', 111, '11', 'http://11', '7.gif', '我的的留言', '我的的留言测试', '2021-11-15 08:08:17', '::1');

-- --------------------------------------------------------

--
-- 表的结构 `link`
--

CREATE TABLE `link` (
  `id` int(11) NOT NULL,
  `url` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `time` varchar(100) NOT NULL,
  `zuozhe` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `link`
--

INSERT INTO `link` (`id`, `url`, `name`, `time`, `zuozhe`) VALUES
(1, 'www.baidu.com', '百度', '20211021', '陈老师'),
(2, 'www.163.com', '网易', '20211021', '陈老师'),
(3, 'www.baidu1.com', '百度1', '20211021', '陈老师'),
(4, 'www.1631.com', '网易1', '20211021', '陈老师'),
(5, 'www.swvtc.cn', '汕尾职业技术学院', '20220929', '陈'),
(6, 'www.swvtc.cn', '汕尾职业技术学院1', '20220930', '陈1'),
(7, 'www.shanwei.gov.cn', '汕尾职业技术学院', '20220931', '陈');

-- --------------------------------------------------------

--
-- 表的结构 `lppic`
--

CREATE TABLE `lppic` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `pic` varchar(200) NOT NULL,
  `URL` varchar(200) NOT NULL,
  `author` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `lppic`
--

INSERT INTO `lppic` (`id`, `name`, `pic`, `URL`, `author`, `time`) VALUES
(1, '轮播图片1', '1.jpg', 'www.111.com', 'admin', '20211025'),
(2, '轮播图片2', '2.jpg', 'www.222.com', 'admin', '20211025'),
(3, '轮播图片3', '3.jpg', 'www.333.com', 'admin', '20211025'),
(4, '轮播图片4', '4.jpg', 'www.444.com', 'admin', '20211025');

-- --------------------------------------------------------

--
-- 表的结构 `lyb_admin`
--

CREATE TABLE `lyb_admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `beizhu` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `lyb_admin`
--

INSERT INTO `lyb_admin` (`id`, `name`, `pwd`, `beizhu`) VALUES
(1, '1', '1', '1'),
(2, '2', '2', '2');

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
(1, '工程学院新闻', '工程学院新闻', 'w1.png', '20211101', '陈老师', 2, 0),
(2, '工程学院新闻新闻新闻新闻新闻', '工程学院新闻', 'w2.png', '20211102', '陈老师', 4, 0),
(3, '工程学院新闻', '工程学院新闻', 'w3.png', '20211103', '陈老师', 1, 0),
(4, '工程学院新闻', '工程学院新闻', 'w4.png', '20211104', '陈老师', 5, 0),
(5, '工程学院新闻', '工程学院新闻', '5.jpg', '20211105', '陈老师', 1, 0),
(6, '工程学院新闻', '工程学院新闻', '6.jpg', '20211106', '陈老师', 2, 0),
(7, '工程学院新闻', '工程学院新闻', '7.jpg', '20211107', '陈老师', 2, 0),
(8, '工程学院新闻新闻新闻新闻新闻新闻', '工程学院新闻', '8.jpg', '20211108', '陈老师', 4, 0),
(12, 'tt', 'tt', '', '2021-11-04 08:51:30', 'admin', 2, 0),
(13, 'yy', 'yy', '', '2021-11-04 08:52:08', 'admin', 2, 0),
(14, 'yy', '用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离。', '', '2021-11-04 08:53:37', 'admin', 1, 0),
(15, 'aaaaaaaa', '用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离。', '2.jpg', '2022-09-08 16:28:52', 'admin', 0, 0),
(16, 'bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb', '用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离。', 'b.jpg', '202220907', 'bb', 1, 1);

-- --------------------------------------------------------

--
-- 表的结构 `news1`
--

CREATE TABLE `news1` (
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
-- 转存表中的数据 `news1`
--

INSERT INTO `news1` (`id`, `title`, `new`, `picture`, `time`, `author`, `djcs`, `shzt`) VALUES
(1, '工程学院新闻', '工程学院新闻', '1.jpg', '20211101', '陈老师', 0, 0),
(2, '工程学院新闻', '工程学院新闻', '2.jpg', '20211102', '陈老师', 0, 0),
(3, '工程学院新闻', '工程学院新闻', '3.jpg', '20211103', '陈老师', 0, 0),
(4, '工程学院新闻', '工程学院新闻', '4.jpg', '20211104', '陈老师', 0, 0),
(5, '工程学院新闻', '工程学院新闻', '5.jpg', '20211105', '陈老师', 0, 0),
(6, '工程学院新闻', '工程学院新闻', '6.jpg', '20211106', '陈老师', 0, 0),
(7, '工程学院新闻', '工程学院新闻', '7.jpg', '20211107', '陈老师', 0, 0),
(8, '工程学院新闻', '工程学院新闻', '8.jpg', '20211108', '陈老师', 0, 0),
(12, 'tt', 'tt', '', '2021-11-04 08:51:30', 'admin', 0, 0),
(13, 'yy', 'yy', '', '2021-11-04 08:52:08', 'admin', 0, 0),
(14, 'yy', 'yy', '', '2021-11-04 08:53:37', 'admin', 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `news2`
--

CREATE TABLE `news2` (
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
-- 转存表中的数据 `news2`
--

INSERT INTO `news2` (`id`, `title`, `new`, `picture`, `time`, `author`, `djcs`, `shzt`) VALUES
(1, '工程学院新闻', '工程学院新闻', '1.jpg', '20211101', '陈老师', 0, 0),
(2, '工程学院新闻', '工程学院新闻', '2.jpg', '20211102', '陈老师', 0, 0),
(3, '工程学院新闻', '工程学院新闻', '3.jpg', '20211103', '陈老师', 0, 0),
(4, '工程学院新闻', '工程学院新闻', '4.jpg', '20211104', '陈老师', 0, 0),
(5, '工程学院新闻', '工程学院新闻', '5.jpg', '20211105', '陈老师', 0, 0),
(6, '工程学院新闻', '工程学院新闻', '6.jpg', '20211106', '陈老师', 0, 0),
(7, '工程学院新闻', '工程学院新闻', '7.jpg', '20211107', '陈老师', 0, 0),
(8, '工程学院新闻', '工程学院新闻', '8.jpg', '20211108', '陈老师', 0, 0),
(12, 'tt', 'tt', '', '2021-11-04 08:51:30', 'admin', 0, 0),
(13, 'yy', 'yy', '', '2021-11-04 08:52:08', 'admin', 0, 0),
(14, 'yy', 'yy', '', '2021-11-04 08:53:37', 'admin', 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `news3`
--

CREATE TABLE `news3` (
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
-- 转存表中的数据 `news3`
--

INSERT INTO `news3` (`id`, `title`, `new`, `picture`, `time`, `author`, `djcs`, `shzt`) VALUES
(1, '工程学院新闻', '工程学院新闻', '1.jpg', '20211101', '陈老师', 0, 0),
(2, '工程学院新闻', '工程学院新闻', '2.jpg', '20211102', '陈老师', 0, 0),
(3, '工程学院新闻', '工程学院新闻', '3.jpg', '20211103', '陈老师', 0, 0),
(4, '工程学院新闻', '工程学院新闻', '4.jpg', '20211104', '陈老师', 0, 0),
(5, '工程学院新闻', '工程学院新闻', '5.jpg', '20211105', '陈老师', 0, 0),
(6, '工程学院新闻', '工程学院新闻', '6.jpg', '20211106', '陈老师', 0, 0),
(7, '工程学院新闻', '工程学院新闻', '7.jpg', '20211107', '陈老师', 0, 0),
(8, '工程学院新闻', '工程学院新闻', '8.jpg', '20211108', '陈老师', 0, 0),
(12, 'tt', 'tt', '', '2021-11-04 08:51:30', 'admin', 0, 0),
(13, 'yy', 'yy', '', '2021-11-04 08:52:08', 'admin', 0, 0),
(14, 'yy', 'yy', '', '2021-11-04 08:53:37', 'admin', 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `news4`
--

CREATE TABLE `news4` (
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
-- 转存表中的数据 `news4`
--

INSERT INTO `news4` (`id`, `title`, `new`, `picture`, `time`, `author`, `djcs`, `shzt`) VALUES
(1, '工程学院新闻', '工程学院新闻', 'w1.png', '20211101', '陈老师', 2, 0),
(2, '工程学院新闻新闻新闻新闻新闻', '工程学院新闻', 'w2.png', '20211102', '陈老师', 4, 0),
(3, '工程学院新闻', '工程学院新闻', 'w3.png', '20211103', '陈老师', 1, 0),
(4, '工程学院新闻', '工程学院新闻', 'w4.png', '20211104', '陈老师', 5, 0),
(5, '工程学院新闻', '工程学院新闻', '5.jpg', '20211105', '陈老师', 1, 0),
(6, '工程学院新闻', '工程学院新闻', '6.jpg', '20211106', '陈老师', 2, 0),
(7, '工程学院新闻', '工程学院新闻', '7.jpg', '20211107', '陈老师', 2, 0),
(8, '工程学院新闻新闻新闻新闻新闻新闻', '工程学院新闻', '8.jpg', '20211108', '陈老师', 4, 0),
(12, 'tt', 'tt', '', '2021-11-04 08:51:30', 'admin', 2, 0),
(13, 'yy', 'yy', '', '2021-11-04 08:52:08', 'admin', 2, 0),
(14, 'yy', '用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离。', '', '2021-11-04 08:53:37', 'admin', 1, 0),
(15, 'aaaaaaaa', '用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离。', '2.jpg', '2022-09-08 16:28:52', 'admin', 0, 0),
(16, 'bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb', '用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离用line-height属性就可已解决下划线与文字之间的距离。', 'b.jpg', '202220907', 'bb', 1, 1);

-- --------------------------------------------------------

--
-- 表的结构 `pic`
--

CREATE TABLE `pic` (
  `id` int(11) NOT NULL,
  `picname` varchar(200) NOT NULL,
  `pic` varchar(200) NOT NULL,
  `auther` varchar(200) NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `pic`
--

INSERT INTO `pic` (`id`, `picname`, `pic`, `auther`, `time`) VALUES
(1, '图片1', 'p1.jpg', '陈老师', '20211009'),
(2, '图片2', 'p2.jpg', '陈老师', '20211009'),
(3, '图片3', 'p3.jpg', '陈老师', '20211009'),
(4, '图片4', 'p4.jpg', '陈老师', '20211009'),
(5, '图片5', 'p5.jpg', '陈老师', '20211009'),
(6, '图片6', 'p6.jpg', '陈老师', '20211009'),
(7, '图片7', 'p7.jpg', '陈老师', '20211009'),
(8, '图片8', 'p8.jpg', '陈老师', '20211009'),
(9, '图片9', 'p9.jpg', '陈老师', '20211009'),
(10, '图片10', 'p10.jpg', '陈老师', '20211009'),
(11, '图片11', 'p11.jpg', '陈老师', '20211009'),
(12, '图片12', 'p12.jpg', '陈老师', '20211009'),
(13, '图片13', 'p13.jpg', '陈老师', '20211009'),
(14, '图片14', 'p14.jpg', '陈老师', '20211009'),
(15, '图片15', 'p15.jpg', '陈老师', '20211009'),
(16, '图片16', 'p16.jpg', '陈老师', '20211009'),
(17, '图片17', 'p17.jpg', '陈老师', '20211009'),
(18, '图片18', 'p18.jpg', '陈老师', '20211009'),
(19, '图片19', 'p19.jpg', '陈老师', '20211009'),
(20, '图片20', 'p20.jpg', '陈老师', '20211009'),
(21, '图片21', 'p21.jpg', '陈老师', '20211009'),
(22, '图片22', 'p22.jpg', '陈老师', '20211009'),
(23, '图片23', 'p23.jpg', '陈老师', '20211009'),
(24, '图片24', 'p24.jpg', '陈老师', '20211009'),
(25, '图片25', 'p25.jpg', '陈老师', '20211009'),
(26, '图片26', 'p26.jpg', '陈老师', '20211009'),
(27, '图片27', 'p27.jpg', '陈老师', '20211009'),
(28, '图片28', 'p28.jpg', '陈老师', '20211009');

-- --------------------------------------------------------

--
-- 表的结构 `record`
--

CREATE TABLE `record` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `start_time` varchar(200) NOT NULL,
  `end_time` varchar(200) NOT NULL,
  `ip` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `record`
--

INSERT INTO `record` (`id`, `name`, `start_time`, `end_time`, `ip`) VALUES
(1, '1', '2021-10-25 08:28:21', '2021-10-25 08:32:19', '::1'),
(5, '1', '2021-11-01 08:47:52', '2021-11-01 08:47:56', '::1'),
(2, '1', '2021-11-01 08:18:38', '2021-11-01 08:18:42', '::1'),
(4, '1', '2021-11-01 08:40:35', '2021-11-01 08:47:28', '::1'),
(6, '1', '2021-11-01 08:48:28', '2021-11-01 08:48:33', '::1'),
(7, '1', '2021-11-01 08:48:46', '2021-11-01 08:48:50', '::1'),
(8, '1', '2021-11-04 08:02:10', '2021-11-04 10:17:46', '::1'),
(9, '1', '2021-11-08 08:24:09', '2021-11-08 09:00:33', '::1'),
(10, '1', '2022-09-08 16:28:30', '2022-09-08 16:29:05', '::1');

-- --------------------------------------------------------

--
-- 表的结构 `reply`
--

CREATE TABLE `reply` (
  `id` int(10) NOT NULL,
  `leaveid` int(10) NOT NULL,
  `leaveuser` varchar(20) NOT NULL,
  `reply_contents` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=gb2312;

--
-- 转存表中的数据 `reply`
--

INSERT INTO `reply` (`id`, `leaveid`, `leaveuser`, `reply_contents`) VALUES
(6, 6, 'aaa', 'dfdfdf'),
(8, 8, '888', '888888'),
(9, 13, '123', 'dfdfd'),
(10, 15, '20211108', '可以了'),
(11, 17, '陈老师', '我的回复测试');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `auther` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `name`, `password`, `auther`) VALUES
(1, '1', 'a79455853f4242b927e82b7033e29250', '123'),
(2, '2', '2', '2'),
(3, '33333333333333333', '33', '33'),
(4, '44444444444444444', '44', '44'),
(5, '5', '5', 'a'),
(6, '6', '6', 'a'),
(7, '7', '7', 'a'),
(8, '8', '8', 'a'),
(9, '9', '9', 'a'),
(11, '11', '11', 'a'),
(12, '12', '12', 'a'),
(13, '13', '13', 'a'),
(14, '14', '14', 'a'),
(15, '15', '15', 'a'),
(16, '16', '16', 'a'),
(17, '17', '17', 'a');

-- --------------------------------------------------------

--
-- 表的结构 `user1`
--

CREATE TABLE `user1` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `auther` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `user1`
--

INSERT INTO `user1` (`id`, `name`, `password`, `auther`) VALUES
(1, '1', '6d282d8ce4385323555627940f31ec2b', '1'),
(2, '2', '8425984ef40df7004c5565c4d14e4123', '2'),
(3, '3', '3d20b0e4461c1d194632baa0e83c2f70', '3'),
(4, '4', '095545d9faf9b6ac1f1f2d26cbe036b9', '4');

-- --------------------------------------------------------

--
-- 表的结构 `vote`
--

CREATE TABLE `vote` (
  `id` int(11) NOT NULL,
  `item` varchar(200) NOT NULL,
  `vote` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `vote`
--

INSERT INTO `vote` (`id`, `item`, `vote`) VALUES
(1, '是否喜欢我的网站?', '9'),
(2, '我是网络技术专业的学生', '6'),
(3, '我是汕尾职业技术学院的工程学院', '2');

--
-- 转储表的索引
--

--
-- 表的索引 `ip`
--
ALTER TABLE `ip`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `leaveword`
--
ALTER TABLE `leaveword`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `link`
--
ALTER TABLE `link`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `lppic`
--
ALTER TABLE `lppic`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `lyb_admin`
--
ALTER TABLE `lyb_admin`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `news1`
--
ALTER TABLE `news1`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `news2`
--
ALTER TABLE `news2`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `news3`
--
ALTER TABLE `news3`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `news4`
--
ALTER TABLE `news4`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `pic`
--
ALTER TABLE `pic`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `record`
--
ALTER TABLE `record`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `reply`
--
ALTER TABLE `reply`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `user1`
--
ALTER TABLE `user1`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `vote`
--
ALTER TABLE `vote`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `ip`
--
ALTER TABLE `ip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 使用表AUTO_INCREMENT `leaveword`
--
ALTER TABLE `leaveword`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- 使用表AUTO_INCREMENT `link`
--
ALTER TABLE `link`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- 使用表AUTO_INCREMENT `lppic`
--
ALTER TABLE `lppic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用表AUTO_INCREMENT `lyb_admin`
--
ALTER TABLE `lyb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用表AUTO_INCREMENT `pic`
--
ALTER TABLE `pic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- 使用表AUTO_INCREMENT `record`
--
ALTER TABLE `record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- 使用表AUTO_INCREMENT `reply`
--
ALTER TABLE `reply`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- 使用表AUTO_INCREMENT `vote`
--
ALTER TABLE `vote`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
