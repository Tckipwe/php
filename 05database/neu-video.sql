-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2016 年 04 月 04 日 12:45
-- 服务器版本: 5.1.53
-- PHP 版本: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `neu-video`
--

-- --------------------------------------------------------

--
-- 表的结构 `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `adminid` int(11) NOT NULL AUTO_INCREMENT,
  `adminname` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`adminid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `admins`
--

INSERT INTO `admins` (`adminid`, `adminname`, `password`) VALUES
(1, 'xuexuan', '123'),
(2, 'danny', '123');

-- --------------------------------------------------------

--
-- 表的结构 `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(600) NOT NULL,
  `cdate` datetime NOT NULL,
  `uid` int(11) NOT NULL,
  `vid` int(11) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `comments`
--

INSERT INTO `comments` (`cid`, `content`, `cdate`, `uid`, `vid`) VALUES
(1, '不错', '2016-04-02 00:00:00', 1, 0),
(2, '好', '2016-04-02 00:00:00', 2, 0);

-- --------------------------------------------------------

--
-- 表的结构 `levels`
--

CREATE TABLE IF NOT EXISTS `levels` (
  `lid` int(11) NOT NULL AUTO_INCREMENT,
  `vid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  PRIMARY KEY (`lid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 转存表中的数据 `levels`
--


-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` tinyint(4) NOT NULL,
  `birthdate` date NOT NULL,
  `hobby` varchar(50) NOT NULL,
  `degree` tinyint(4) NOT NULL,
  `intro` text NOT NULL,
  `pic` varchar(30) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`uid`, `uname`, `password`, `gender`, `birthdate`, `hobby`, `degree`, `intro`, `pic`) VALUES
(1, 'xuexuan', '546338039', 1, '1995-01-23', '读书', 0, '我是学生', '');

-- --------------------------------------------------------

--
-- 表的结构 `videos`
--

CREATE TABLE IF NOT EXISTS `videos` (
  `vid` int(11) NOT NULL AUTO_INCREMENT,
  `videoname` varchar(30) NOT NULL,
  `tid` varchar(50) NOT NULL,
  `pic` varchar(30) NOT NULL,
  `intro` varchar(2000) NOT NULL,
  `uploaddate` datetime NOT NULL,
  `uploadadmin` int(11) NOT NULL,
  `hittimes` int(11) NOT NULL,
  `downtimes` int(11) NOT NULL,
  `address` varchar(200) NOT NULL,
  PRIMARY KEY (`vid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `videos`
--

INSERT INTO `videos` (`vid`, `videoname`, `tid`, `pic`, `intro`, `uploaddate`, `uploadadmin`, `hittimes`, `downtimes`, `address`) VALUES
(1, '疯狂动物城', '3', '', '迪士尼最新动画电影', '2016-04-01 00:00:00', 1, 0, 1, '');

-- --------------------------------------------------------

--
-- 表的结构 `videotype`
--

CREATE TABLE IF NOT EXISTS `videotype` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `typename` varchar(20) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `videotype`
--

INSERT INTO `videotype` (`tid`, `typename`) VALUES
(1, '电影'),
(2, '电视剧'),
(3, '动画片'),
(4, '原创');
