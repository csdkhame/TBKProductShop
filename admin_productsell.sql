-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- โฮสต์: localhost
-- เวลาในการสร้าง: 
-- รุ่นของเซิร์ฟเวอร์: 5.0.51
-- รุ่นของ PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- ฐานข้อมูล: `admin_productsell`
-- 

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `web_detail`
-- 

CREATE TABLE `web_detail` (
  `i_id` int(5) NOT NULL auto_increment,
  `s_object` varchar(150) NOT NULL,
  `i_id_item` int(10) NOT NULL,
  `i_id_county` int(10) NOT NULL,
  `i_update_utf8` int(1) NOT NULL default '0',
  PRIMARY KEY  (`i_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- dump ตาราง `web_detail`
-- 


-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `web_imagine`
-- 

CREATE TABLE `web_imagine` (
  `i_id` int(10) NOT NULL auto_increment,
  `i_img_cover` tinyint(4) NOT NULL default '0',
  `i_id_item` int(10) NOT NULL,
  `s_name` varchar(150) NOT NULL,
  `d_last_update` datetime NOT NULL,
  `i_deleted` tinyint(4) NOT NULL default '0',
  PRIMARY KEY  (`i_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

-- 
-- dump ตาราง `web_imagine`
-- 

INSERT INTO `web_imagine` VALUES (1, 0, 1, '2.jpg', '2017-06-30 07:12:15', 1);
INSERT INTO `web_imagine` VALUES (2, 0, 2, 'recirprocity-design-competition3.jpg', '2017-06-30 07:20:31', 1);
INSERT INTO `web_imagine` VALUES (3, 0, 2, 'recirprocity-design-competition1.jpg', '2017-06-30 07:20:34', 1);
INSERT INTO `web_imagine` VALUES (4, 0, 2, 'recirprocity-design-competition2.jpg', '2017-06-30 07:20:36', 1);
INSERT INTO `web_imagine` VALUES (5, 0, 2, 'recirprocity-design-competition3.jpg', '2017-06-30 07:20:38', 1);
INSERT INTO `web_imagine` VALUES (6, 0, 1, 'recirprocity-design-competition3.jpg', '2017-06-30 07:12:15', 0);
INSERT INTO `web_imagine` VALUES (7, 0, 1, 'recirprocity-design-competition1.jpg', '2017-06-30 07:12:15', 0);
INSERT INTO `web_imagine` VALUES (8, 1, 1, 'recirprocity-design-competition2.jpg', '2017-06-30 07:12:15', 0);
INSERT INTO `web_imagine` VALUES (9, 0, 1, 'recirprocity-design-competition3.jpg', '2017-06-30 07:12:15', 0);
INSERT INTO `web_imagine` VALUES (10, 1, 2, 'applogo.png', '2017-06-30 07:20:16', 0);
INSERT INTO `web_imagine` VALUES (11, 0, 2, '8.jpg', '2017-06-30 07:20:16', 0);
INSERT INTO `web_imagine` VALUES (12, 0, 2, '9.jpg', '2017-06-30 07:20:16', 0);
INSERT INTO `web_imagine` VALUES (14, 0, 2, '7.jpg', '2017-06-30 08:03:00', 0);
INSERT INTO `web_imagine` VALUES (15, 0, 2, '2.jpg', '2017-06-30 08:04:45', 0);

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `web_item_list`
-- 

CREATE TABLE `web_item_list` (
  `i_id` int(10) NOT NULL auto_increment,
  `i_item_type` int(10) NOT NULL,
  `s_detail` text NOT NULL,
  `s_name` varchar(150) NOT NULL,
  `d_last_update` datetime NOT NULL,
  `i_price_unit` int(15) NOT NULL,
  PRIMARY KEY  (`i_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- 
-- dump ตาราง `web_item_list`
-- 

INSERT INTO `web_item_list` VALUES (1, 2, '2', 'พวงกุญแจ', '2017-06-30 05:09:16', 170);
INSERT INTO `web_item_list` VALUES (2, 3, '---', 'ทดสอบๆ', '2017-06-30 07:17:05', 300);

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `web_item_list_log`
-- 

CREATE TABLE `web_item_list_log` (
  `i_id` int(10) NOT NULL auto_increment,
  `i_item_type` int(10) NOT NULL,
  `s_detail` text NOT NULL,
  `s_name` varchar(150) NOT NULL,
  `d_last_update` datetime NOT NULL,
  `i_price_unit` int(15) NOT NULL,
  `i_id_item` int(10) NOT NULL,
  PRIMARY KEY  (`i_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- 
-- dump ตาราง `web_item_list_log`
-- 

INSERT INTO `web_item_list_log` VALUES (1, 0, '', '', '2017-06-30 01:01:27', 0, 1);
INSERT INTO `web_item_list_log` VALUES (2, 1, 'พวงกุญแจ', 'ขายปลีก', '2017-06-30 01:03:04', 120, 1);
INSERT INTO `web_item_list_log` VALUES (3, 1, 'พวงกุญแจ', 'ขายปลีก', '2017-06-30 01:05:30', 120, 1);

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `web_item_type`
-- 

CREATE TABLE `web_item_type` (
  `i_id` int(5) NOT NULL auto_increment,
  `s_name` varchar(150) default NULL,
  `i_update_utf8` int(1) NOT NULL default '0',
  `s_detail` text NOT NULL,
  `d_last_update` datetime NOT NULL,
  `i_deleted` tinyint(4) NOT NULL default '0',
  PRIMARY KEY  (`i_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

-- 
-- dump ตาราง `web_item_type`
-- 

INSERT INTO `web_item_type` VALUES (1, 'test01', 0, 'test011', '2017-06-28 07:15:59', 0);
INSERT INTO `web_item_type` VALUES (2, 'test02', 0, 'test02', '2017-06-28 01:17:02', 0);
INSERT INTO `web_item_type` VALUES (3, 'test03', 0, '', '2017-06-28 01:17:08', 0);
INSERT INTO `web_item_type` VALUES (4, 'test04', 0, 'เทสๆ', '2017-06-28 07:19:17', 0);
INSERT INTO `web_item_type` VALUES (5, 'test05', 0, 'ไทย', '2017-06-28 07:19:05', 0);
INSERT INTO `web_item_type` VALUES (6, 'ทดสอบๆ', 0, '', '2017-06-28 07:19:26', 0);

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `web_language2`
-- 

CREATE TABLE `web_language2` (
  `i_id` int(5) NOT NULL auto_increment,
  `s_object` varchar(150) NOT NULL,
  `i_id_item` int(10) NOT NULL,
  `i_id_type` int(10) NOT NULL,
  `i_id_county` int(10) NOT NULL,
  `i_update_utf8` int(1) NOT NULL default '0',
  PRIMARY KEY  (`i_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- dump ตาราง `web_language2`
-- 

