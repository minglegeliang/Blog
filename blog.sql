/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50612
Source Host           : localhost:3306
Source Database       : blog

Target Server Type    : MYSQL
Target Server Version : 50612
File Encoding         : 65001

Date: 2015-05-31 22:06:56
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tp_blogs
-- ----------------------------
DROP TABLE IF EXISTS `tp_blogs`;
CREATE TABLE `tp_blogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text CHARACTER SET utf8 NOT NULL,
  `typename` text CHARACTER SET utf8 NOT NULL,
  `type` int(11) NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `timeat` datetime NOT NULL,
  `author` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tp_blogs
-- ----------------------------
INSERT INTO `tp_blogs` VALUES ('8', '222333', '私人', '1', '', '2015-05-31 09:41:25', 'Toruneko');
INSERT INTO `tp_blogs` VALUES ('9', 'asfas a', '私人', '1', 'asfasf', '0000-00-00 00:00:00', '');
INSERT INTO `tp_blogs` VALUES ('10', 'asfsafsaf', '私人', '1', 'asfas', '0000-00-00 00:00:00', '');
INSERT INTO `tp_blogs` VALUES ('11', 'asfasf', '生活', '4', 'safasgasgsdf', '2015-05-31 05:39:13', 'Toruneko');
INSERT INTO `tp_blogs` VALUES ('12', 'asfas', '私人', '1', 'asfasf', '0000-00-00 00:00:00', '');
INSERT INTO `tp_blogs` VALUES ('13', 'asfas', '学习', '3', 'asfas', '0000-00-00 00:00:00', '');
INSERT INTO `tp_blogs` VALUES ('14', '333', '学习', '3', 'dsgsdgsdgsd', '0000-00-00 00:00:00', '');
INSERT INTO `tp_blogs` VALUES ('15', 'asfsa', '学习', '3', 'asfasdf', '0000-00-00 00:00:00', '');
INSERT INTO `tp_blogs` VALUES ('16', 'asf', '娱乐', '5', 'asdfsaf', '0000-00-00 00:00:00', 'Toruneko');
INSERT INTO `tp_blogs` VALUES ('17', 'asfsa', '私人', '1', 'fasfsa', '2015-05-31 04:51:42', 'Toruneko');
INSERT INTO `tp_blogs` VALUES ('18', 'asfas', '私人', '1', 'sfdas', '2015-05-31 05:03:20', 'Toruneko');
INSERT INTO `tp_blogs` VALUES ('19', '', '私人', '1', '', '2015-05-31 09:31:16', 'Toruneko');
INSERT INTO `tp_blogs` VALUES ('20', '', '私人', '1', '', '2015-05-31 09:31:49', 'Toruneko');
INSERT INTO `tp_blogs` VALUES ('21', '', '私人', '1', '', '2015-05-31 09:32:16', 'Toruneko');
INSERT INTO `tp_blogs` VALUES ('22', '', '私人', '1', '', '2015-05-31 09:32:39', 'Toruneko');
INSERT INTO `tp_blogs` VALUES ('23', '', '私人', '1', '', '2015-05-31 09:33:06', 'Toruneko');

-- ----------------------------
-- Table structure for tp_comments
-- ----------------------------
DROP TABLE IF EXISTS `tp_comments`;
CREATE TABLE `tp_comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `blog` text CHARACTER SET utf8 NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `email` varchar(255) NOT NULL,
  `commenter` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tp_comments
-- ----------------------------
INSERT INTO `tp_comments` VALUES ('1', '2', 'asfas阿方索', '5784@qq.com', '啊沙dd');
INSERT INTO `tp_comments` VALUES ('2', '1', 'asfas', 'fasfasf', 'afa');
INSERT INTO `tp_comments` VALUES ('3', '1', 'sgdfgdfg', 'sf', 'sdf');
INSERT INTO `tp_comments` VALUES ('4', '8', 'sadfas', 'asfas', 'asf');
INSERT INTO `tp_comments` VALUES ('5', '8', 'sadfas', 'asfas', 'asf');
INSERT INTO `tp_comments` VALUES ('6', '8', 'sdgsd', 'dsgds', 'sdgds');
INSERT INTO `tp_comments` VALUES ('7', '8', '222', '222', '222');
INSERT INTO `tp_comments` VALUES ('8', '8', '55555', '5555', '55555');
INSERT INTO `tp_comments` VALUES ('9', '8', 'asf', 'd', 'asf');

-- ----------------------------
-- Table structure for tp_types
-- ----------------------------
DROP TABLE IF EXISTS `tp_types`;
CREATE TABLE `tp_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `typename` varchar(255) CHARACTER SET utf8 NOT NULL,
  `num` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tp_types
-- ----------------------------
INSERT INTO `tp_types` VALUES ('1', '私人', '11');
INSERT INTO `tp_types` VALUES ('2', '公共', '-1');
INSERT INTO `tp_types` VALUES ('3', '学习', '3');
INSERT INTO `tp_types` VALUES ('4', '生活', '2');
INSERT INTO `tp_types` VALUES ('5', '娱乐', '1');

-- ----------------------------
-- Table structure for tp_user
-- ----------------------------
DROP TABLE IF EXISTS `tp_user`;
CREATE TABLE `tp_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tp_user
-- ----------------------------
INSERT INTO `tp_user` VALUES ('1', 'Toruneko', 'e10adc3949ba59abbe56e057f20f883e', '123456');
