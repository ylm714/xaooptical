-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2014 年 06 月 10 日 15:55
-- 服务器版本: 5.5.16
-- PHP 版本: 5.4.0beta2-dev

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `register`
--

-- --------------------------------------------------------

--
-- 表的结构 `people`
--

CREATE TABLE IF NOT EXISTS `people` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `dutyA` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `dutyB` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `dutyC` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `dutyD` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `proA` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `proB` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `proC` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `weather` varchar(5) CHARACTER SET utf8 DEFAULT NULL,
  `duty_date` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- 转存表中的数据 `people`
--

INSERT INTO `people` (`id`, `dutyA`, `dutyB`, `dutyC`, `dutyD`, `proA`, `proB`, `proC`, `weather`, `duty_date`) VALUES
(5, '马亚华', '杨玲敏', NULL, NULL, '开发网站', '', '', '晴', '2014-04-07'),
(6, '文章', '杨玲敏', NULL, NULL, '洪水', '', '', '多云', '2014-04-07'),
(7, '文章', '马伊琍', NULL, NULL, '神九', '', '', '晴', '2014-04-07'),
(8, '文章', '马伊琍', NULL, NULL, '', '', '', '晴', '2014-04-07'),
(9, '文章', '马伊琍', NULL, NULL, '', '', '', '晴', '2014-04-07'),
(10, '唐曾', '文章', NULL, NULL, '嫦娥', '', '', '多云', '2014-04-07'),
(11, 'huy', 'grfs', NULL, NULL, 'frv', '', '', '晴', '2014-04-11'),
(13, '突然', '回头', NULL, NULL, '还有', '', '', '晴', '2014-06-02');

-- --------------------------------------------------------

--
-- 表的结构 `people2`
--

CREATE TABLE IF NOT EXISTS `people2` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `dutyA` varchar(15) CHARACTER SET utf8 NOT NULL,
  `dutyB` varchar(15) CHARACTER SET utf8 NOT NULL,
  `dutyC` varchar(15) CHARACTER SET utf8 DEFAULT NULL,
  `dutyD` varchar(15) CHARACTER SET utf8 DEFAULT NULL,
  `weather` varchar(10) CHARACTER SET utf8 NOT NULL,
  `all_time` varchar(10) CHARACTER SET utf8 NOT NULL,
  `duty_date` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `people2`
--

INSERT INTO `people2` (`id`, `dutyA`, `dutyB`, `dutyC`, `dutyD`, `weather`, `all_time`, `duty_date`) VALUES
(4, '孙建涛', '党飞', '魏鹏', '徐卷廷', '晴', '6', '2014-06-09'),
(5, '党飞', '林星魁', '钟土红', '马树国', '晴', '7', '2014-06-10');

-- --------------------------------------------------------

--
-- 表的结构 `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `pro_name` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `pro_charge` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `run_time` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `run_date` varchar(15) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- 转存表中的数据 `project`
--

INSERT INTO `project` (`id`, `pro_name`, `pro_charge`, `run_time`, `run_date`) VALUES
(6, '开发网站', '寇帅', '4', '2014-04-07'),
(7, '洪水', '大禹', '6', '2014-04-07'),
(8, '神九', '金叹', '7', '2014-04-07'),
(9, '', '', '', '2014-04-07'),
(10, '', '', '', '2014-04-07'),
(11, '嫦娥', '后裔', '8', '2014-04-07'),
(12, 'frv', 'we', '3', '2014-04-11'),
(14, '还有', '突然', '6', '2014-06-02');

-- --------------------------------------------------------

--
-- 表的结构 `watchkeeper`
--

CREATE TABLE IF NOT EXISTS `watchkeeper` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `watcher` varchar(15) CHARACTER SET utf8 NOT NULL,
  `num` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `watchkeeper`
--

INSERT INTO `watchkeeper` (`id`, `watcher`, `num`) VALUES
(1, '党飞', 2),
(2, '林星魁', 1),
(3, '赵琪', 0),
(4, '钟土红', 1),
(5, '马树国', 1),
(6, '王勇', 0),
(7, '孙建涛', 1),
(8, '魏鹏', 1),
(9, '蒲广新', 0),
(10, '徐卷廷', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
