/*
Navicat MySQL Data Transfer

Source Server         : test
Source Server Version : 50520
Source Host           : localhost:3306
Source Database       : timer

Target Server Type    : MYSQL
Target Server Version : 50520
File Encoding         : 65001

Date: 2015-12-25 18:03:15
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for authitem
-- ----------------------------
DROP TABLE IF EXISTS `authitem`;
CREATE TABLE `authitem` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of authitem
-- ----------------------------
INSERT INTO `authitem` VALUES ('a', '2', null, null, null);
INSERT INTO `authitem` VALUES ('Administrator', '2', null, null, null);
INSERT INTO `authitem` VALUES ('Create Post', '0', null, null, null);
INSERT INTO `authitem` VALUES ('Create User', '0', null, null, null);
INSERT INTO `authitem` VALUES ('Delete Post', '0', null, null, null);
INSERT INTO `authitem` VALUES ('Delete User', '0', null, null, null);
INSERT INTO `authitem` VALUES ('deleteNeeding', '0', '删除需求', '', 's:0:\"\";');
INSERT INTO `authitem` VALUES ('Edit Post', '0', null, null, null);
INSERT INTO `authitem` VALUES ('Edit User', '0', null, null, null);
INSERT INTO `authitem` VALUES ('Post Manager', '1', null, null, null);
INSERT INTO `authitem` VALUES ('pushNedding', '0', '添加需求', '', 's:0:\"\";');
INSERT INTO `authitem` VALUES ('test', '2', null, null, null);
INSERT INTO `authitem` VALUES ('User', '2', null, null, null);
INSERT INTO `authitem` VALUES ('User Manager', '1', null, null, null);
INSERT INTO `authitem` VALUES ('View Post', '0', null, null, null);
INSERT INTO `authitem` VALUES ('View User', '0', null, null, null);
