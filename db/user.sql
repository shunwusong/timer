/*
Navicat MySQL Data Transfer

Source Server         : test
Source Server Version : 50520
Source Host           : localhost:3306
Source Database       : timer

Target Server Type    : MYSQL
Target Server Version : 50520
File Encoding         : 65001

Date: 2015-12-25 18:03:37
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(80) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `create_time` varchar(45) DEFAULT NULL,
  `level` int(3) DEFAULT '0',
  `login_ip` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `username` (`username`),
  KEY `username_2` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('28', 'a', '0cc175b9c0f1b6a831c399e269772661', null, '1450752093', '0', null);
INSERT INTO `user` VALUES ('29', 'test', '1', null, null, '0', null);
