-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2014 年 04 月 07 日 20:27
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
  `proA` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `proB` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `proC` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `weather` varchar(5) CHARACTER SET utf8 DEFAULT NULL,
  `duty_date` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `people`
--

INSERT INTO `people` (`id`, `dutyA`, `dutyB`, `proA`, `proB`, `proC`, `weather`, `duty_date`) VALUES
(1, '李连杰', '成龙', '开发网站', NULL, NULL, '晴', '2014-04-04'),
(2, '成龙', '周星驰', '网站开发', NULL, NULL, '晴', '2014-04-05'),
(3, '成龙', '琳琳', '网站开发', NULL, NULL, NULL, '2014-04-03'),
(4, '成龙', '哥哥', NULL, NULL, NULL, NULL, '2014-04-02'),
(5, '马亚华', '杨玲敏', '开发网站', '', '', '晴', '2014-04-07'),
(6, '文章', '杨玲敏', '洪水', '', '', '多云', '2014-04-07'),
(7, '文章', '马伊琍', '神九', '', '', '晴', '2014-04-07'),
(8, '文章', '马伊琍', '', '', '', '晴', '2014-04-07'),
(9, '文章', '马伊琍', '', '', '', '晴', '2014-04-07'),
(10, '唐曾', '文章', '嫦娥', '', '', '多云', '2014-04-07');

-- --------------------------------------------------------

--
-- 表的结构 `people2`
--

CREATE TABLE IF NOT EXISTS `people2` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `dutyA` varchar(20) CHARACTER SET utf8 NOT NULL,
  `dutyB` varchar(20) CHARACTER SET utf8 NOT NULL,
  `weather` varchar(10) CHARACTER SET utf8 NOT NULL,
  `all_time` varchar(10) CHARACTER SET utf8 NOT NULL,
  `duty_date` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `people2`
--

INSERT INTO `people2` (`id`, `dutyA`, `dutyB`, `weather`, `all_time`, `duty_date`) VALUES
(1, '文章', '马伊琍', '晴', '6', '2014-04-07'),
(2, '周星星', '文章', '晴', '7', '2014-04-07'),
(3, '文章', '姚笛', '晴', '3', '2014-04-07');

-- --------------------------------------------------------

--
-- 表的结构 `people3`
--

CREATE TABLE IF NOT EXISTS `people3` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `dutyA` varchar(20) CHARACTER SET utf8 NOT NULL,
  `dutyB` varchar(20) CHARACTER SET utf8 NOT NULL,
  `weather` varchar(10) CHARACTER SET utf8 NOT NULL,
  `all_time` varchar(10) CHARACTER SET utf8 NOT NULL,
  `duty_date` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `people3`
--

INSERT INTO `people3` (`id`, `dutyA`, `dutyB`, `weather`, `all_time`, `duty_date`) VALUES
(1, '文章', '马伊琍', '晴', '9', '2014-04-07'),
(2, '文章', '姚笛', '晴', '5', '2014-04-07');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- 转存表中的数据 `project`
--

INSERT INTO `project` (`id`, `pro_name`, `pro_charge`, `run_time`, `run_date`) VALUES
(1, '开发网站', '张丹', '2', '2014-04-04'),
(2, '共和国刚', '黄世仁', '3', '2014-04-04'),
(3, '让他', '马景涛', '3', '2014-04-05'),
(4, '开发网站', '李丹', '4', '2014-04-03'),
(5, '让他', '马景涛', '1', '2014-04-02'),
(6, '开发网站', '寇帅', '4', '2014-04-07'),
(7, '洪水', '大禹', '6', '2014-04-07'),
(8, '神九', '金叹', '7', '2014-04-07'),
(9, '', '', '', '2014-04-07'),
(10, '', '', '', '2014-04-07'),
(11, '嫦娥', '后裔', '8', '2014-04-07');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
