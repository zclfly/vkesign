-- phpMyAdmin SQL Dump
-- version 3.3.8.1
-- http://www.phpmyadmin.net
--
-- 主机:
-- 生成日期: 2015 年 08 月 19 日 19:04
-- 服务器版本: 5.5.23
-- PHP 版本: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `vkesign`
--

-- --------------------------------------------------------

--
-- 表的结构 `lecture`
--

CREATE TABLE IF NOT EXISTS `lecture` (
  `lecture_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `course_name` varchar(40) NOT NULL,
  `lecture_time` datetime NOT NULL,
  `location` varchar(30) NOT NULL,
  `presenter` varchar(20) NOT NULL,
  `total_capacity` smallint(5) unsigned NOT NULL,
  `spare_capacity` smallint(5) unsigned NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`lecture_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='讲座信息' AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- 表的结构 `signlist`
--

CREATE TABLE IF NOT EXISTS `signlist` (
  `sign_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `lecture_id` int(10) unsigned NOT NULL,
  `student_name` varchar(30) NOT NULL,
  `student_number` varchar(8) NOT NULL,
  `wx_openid` char(28) NOT NULL,
  PRIMARY KEY (`sign_id`),
  UNIQUE KEY `wx_openid` (`wx_openid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='报名' AUTO_INCREMENT=275 ;
