/*
Navicat MySQL Data Transfer

Source Server         : test
Source Server Version : 50520
Source Host           : localhost:3306
Source Database       : timer

Target Server Type    : MYSQL
Target Server Version : 50520
File Encoding         : 65001

Date: 2016-01-15 10:31:10
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for needing
-- ----------------------------
DROP TABLE IF EXISTS `needing`;
CREATE TABLE `needing` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `push_user` varchar(45) NOT NULL,
  `create_time` int(25) NOT NULL,
  `start_time` int(25) DEFAULT NULL,
  `end_time` int(25) DEFAULT NULL,
  `pull_user` varchar(45) DEFAULT NULL,
  `done` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否完成',
  `subject` varchar(125) NOT NULL,
  `detail` varchar(425) DEFAULT NULL,
  `img` varchar(85) DEFAULT NULL COMMENT '上传的图片',
  `addr` varchar(45) DEFAULT NULL,
  `payment` float(12,0) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `push_user` (`push_user`),
  KEY `pull_user` (`pull_user`),
  CONSTRAINT `needing_ibfk_1` FOREIGN KEY (`push_user`) REFERENCES `user` (`username`) ON DELETE CASCADE,
  CONSTRAINT `needing_ibfk_2` FOREIGN KEY (`pull_user`) REFERENCES `user` (`username`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of needing
-- ----------------------------
INSERT INTO `needing` VALUES ('5', 'test', '1450860775', '1450713600', '1450860720', null, '0', 'te_1', 'de_1', null, null, '0');
INSERT INTO `needing` VALUES ('6', 'test', '1450860794', '1450860780', '1450886400', null, '0', 'te_2', 'de_2', null, null, '0');
INSERT INTO `needing` VALUES ('7', 'test', '1450860813', '1450886400', '1451318400', null, '0', 'te_3', 'te_3', null, null, '0');
INSERT INTO `needing` VALUES ('8', 'test', '1450863740', '1451491200', '1451577600', null, '0', 'te_4', 'de_4', null, null, '0');
INSERT INTO `needing` VALUES ('9', 'test', '0', null, null, null, '0', 'test_5', 'de_5', null, null, '0');
INSERT INTO `needing` VALUES ('10', 'test', '1451456127', '1451456100', '1451491200', null, '0', 'test for time', 'de_6', null, null, '23');
