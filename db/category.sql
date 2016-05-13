/*
Navicat MySQL Data Transfer

Source Server         : test
Source Server Version : 50520
Source Host           : localhost:3306
Source Database       : timer

Target Server Type    : MYSQL
Target Server Version : 50520
File Encoding         : 65001

Date: 2015-12-25 18:03:26
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for category
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(48) NOT NULL,
  `p_id` int(11) NOT NULL,
  `url` varchar(48) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES ('1', 'home', '0', null);
INSERT INTO `category` VALUES ('2', 'needing', '0', null);
INSERT INTO `category` VALUES ('3', 'needing_push', '2', 'needing/default/push');
INSERT INTO `category` VALUES ('4', 'needing_pull', '2', null);
INSERT INTO `category` VALUES ('5', 'user', '0', null);
INSERT INTO `category` VALUES ('6', 'user_delete', '5', null);
INSERT INTO `category` VALUES ('7', 'user_update', '5', null);
