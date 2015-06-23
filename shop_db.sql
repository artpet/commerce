/*
 Navicat MySQL Data Transfer

 Source Server         : home
 Source Server Type    : MySQL
 Source Server Version : 50538
 Source Host           : localhost
 Source Database       : shop_db

 Target Server Type    : MySQL
 Target Server Version : 50538
 File Encoding         : utf-8

 Date: 06/23/2015 18:52:12 PM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `category`
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
--  Records of `category`
-- ----------------------------
BEGIN;
INSERT INTO `category` VALUES ('1', 'Sound devices'), ('2', 'Video game consoles'), ('3', 'Cell/mobile/wireless phones'), ('4', 'Home security systems'), ('5', 'Cameras'), ('6', 'Home theater systems'), ('7', 'TVs'), ('8', 'Computers'), ('9', 'Games/movies/music'), ('10', 'Accessories'), ('11', 'Office'), ('12', 'House wears');
COMMIT;

-- ----------------------------
--  Table structure for `goods`
-- ----------------------------
DROP TABLE IF EXISTS `goods`;
CREATE TABLE `goods` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `category` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=260 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `goods`
-- ----------------------------
BEGIN;
INSERT INTO `goods` VALUES ('38', 'TV', '0', 'files/TV', '2400', '122', '2015-04-18 14:42:35'), ('39', '111', '111', 'files/111', '111', '111', '2015-04-18 16:24:24'), ('40', 'ww', '0', '1', '0', '0', '2015-04-19 18:10:54'), ('41', 'ww', '0', 'files/ww', '0', '0', '2015-04-19 18:20:13'), ('42', 'ww', '0', 'files/ww', '0', '0', '2015-04-19 18:42:15'), ('43', 'ww', '0', 'files/ww', '0', '0', '2015-04-19 18:43:11'), ('44', 'ww', '0', 'files/ww', '0', '0', '2015-04-19 18:43:28'), ('45', 'ww', '0', 'files/ww', '0', '0', '2015-04-19 18:43:49'), ('46', 'aaaa1112223333', '0', 'files/aaaa1112223333', '0', '0', '2015-04-20 12:53:42'), ('47', 'qweqwe', '0', 'files/qweqwe', '0', '0', '2015-04-20 13:48:59'), ('48', 'eqweqwe', '0', 'files/eqweqwe', '0', '0', '2015-04-20 13:49:21'), ('52', 'sfsdfsdfs', '0', 'files/sfsdfsdfs', '0', '0', '2015-04-21 11:35:12'), ('53', '11111', '11111', 'files/11111', '11111', '1111', '2015-04-21 13:42:00'), ('54', '222222', '222222', 'files/222222', '2222222', '22222', '2015-04-21 13:42:14'), ('55', '3333333', '3333333', 'files/3333333', '33333333', '3333333', '2015-04-21 13:42:27'), ('59', '66666', '66666', 'files/66666', '666666', '66666', '2015-04-21 14:29:13'), ('61', 'kkhgjhg', '0', 'files/kkhgjhg', '0', '0', '2015-04-21 14:54:08'), ('62', '14141414', '14141414', 'files/14141414', '14141414', '14141414', '2015-04-21 17:40:01'), ('63', '15151515', '15151515', 'files/15151515', '15151515', '15151515', '2015-04-21 17:41:44'), ('64', 'sdfsdf', '0', 'files/sdfsdf', '1212', '222', '2015-05-04 22:46:26'), ('65', '1', '0', 'files/1', '22', '111', '2015-05-05 09:21:53'), ('66', 'soun', '0', 'files/soun', '1200', '122', '2015-05-05 10:48:39'), ('80', 'Sound device1', '1', 'files/Sound device1', '1234', '222', '2015-06-22 18:49:25'), ('82', 'Sound device2', '1', 'files/Sound device2', '1234', '22', '2015-06-22 18:50:50'), ('83', 'Sound device3', '1', 'files/Sound device3', '1234', '22', '2015-06-22 18:51:02'), ('84', 'Sound device4', '1', 'files/Sound device4', '1234', '222', '2015-06-22 18:51:18'), ('85', 'Sound device5', '1', 'files/Sound device5', '1234', '22', '2015-06-22 18:51:39'), ('86', 'Sound device6', '1', 'files/Sound device6', '1234', '222', '2015-06-22 18:51:56'), ('87', 'Sound device7', '1', 'files/Sound device7', '1234', '222', '2015-06-22 18:52:42'), ('88', 'Sound device8', '1', 'files/Sound device8', '1234', '222', '2015-06-22 18:52:59'), ('89', 'Sound device9', '1', 'files/Sound device9', '1234', '222', '2015-06-22 18:53:22'), ('90', 'Sound device10', '1', 'files/Sound device10', '1234', '222', '2015-06-22 18:53:45'), ('91', 'Sound device11', '1', 'files/Sound device11', '1234', '22', '2015-06-22 18:54:08'), ('92', 'Sound device12', '1', 'files/Sound device12', '1234', '22', '2015-06-22 18:54:28'), ('93', 'Sound device13', '1', 'files/Sound device13', '1234', '22', '2015-06-22 18:54:50'), ('94', 'Sound device14', '1', 'files/Sound device14', '1234', '22', '2015-06-22 18:55:02'), ('95', 'Sound device15', '1', 'files/Sound device15', '1234', '22', '2015-06-22 18:55:17'), ('96', 'Sound device16', '1', 'files/Sound device16', '1234', '22', '2015-06-22 18:55:31'), ('97', 'Sound device17', '1', 'files/Sound device17', '1234', '22', '2015-06-22 18:55:50'), ('98', 'Sound device18', '1', 'files/Sound device18', '1234', '22', '2015-06-22 18:56:08'), ('99', 'Sound device19', '1', 'files/Sound device19', '1234', '22', '2015-06-22 18:56:23'), ('100', 'Sound device20', '1', 'files/Sound device20', '1234', '22', '2015-06-22 18:57:46'), ('106', 'Video game consoles1', '2', 'files/Video game consoles1', '1234', '22', '2015-06-22 19:08:11'), ('107', 'Video game consoles2', '2', 'files/Video game consoles2', '1234', '22', '2015-06-22 19:08:24'), ('108', 'Video game consoles3', '2', 'files/Video game consoles3', '1234', '22', '2015-06-22 19:08:35'), ('109', 'Video game consoles4', '2', 'files/Video game consoles4', '1234', '22', '2015-06-22 19:08:48'), ('110', 'Video game consoles5', '1', 'files/Video game consoles5', '1234', '22', '2015-06-22 19:09:01'), ('111', 'Video game consoles6', '2', 'files/Video game consoles6', '1234', '22', '2015-06-22 19:09:13'), ('112', 'Video game consoles7', '2', 'files/Video game consoles7', '1234', '22', '2015-06-22 19:09:27'), ('113', 'Video game consoles8', '2', 'files/Video game consoles8', '1234', '22', '2015-06-22 19:09:40'), ('114', 'Video game consoles9', '2', 'files/Video game consoles9', '1234', '22', '2015-06-22 19:09:52'), ('115', 'Video game consoles10', '2', 'files/Video game consoles10', '1234', '22', '2015-06-22 19:10:12'), ('116', 'Video game consoles11', '2', 'files/Video game consoles11', '1234', '22', '2015-06-22 19:10:25'), ('117', 'Video game consoles12', '2', 'files/Video game consoles12', '1234', '22', '2015-06-22 19:10:48'), ('118', 'Video game consoles13', '2', 'files/Video game consoles13', '1234', '22', '2015-06-22 19:11:00'), ('119', 'Video game consoles14', '2', 'files/Video game consoles14', '1234', '22', '2015-06-22 19:11:41'), ('120', 'Video game consoles15', '2', 'files/Video game consoles15', '1234', '22', '2015-06-22 19:11:54'), ('121', 'Mobile1', '3', 'files/Mobile1', '1234', '22', '2015-06-22 19:17:26'), ('122', 'Mobile2', '3', 'files/Mobile2', '1234', '22', '2015-06-22 19:17:53'), ('123', 'Mobile3', '3', 'files/Mobile3', '1234', '22', '2015-06-22 19:18:07'), ('124', 'Mobile4', '3', 'files/Mobile4', '1234', '22', '2015-06-22 19:18:18'), ('125', 'Mobile5', '3', 'files/Mobile5', '1234', '22', '2015-06-22 19:18:31'), ('126', 'Mobile6', '3', 'files/Mobile6', '1234', '22', '2015-06-22 19:18:43'), ('127', 'Mobile7', '3', 'files/Mobile7', '1234', '22', '2015-06-22 19:18:54'), ('128', 'Mobile8', '3', 'files/Mobile8', '1234', '22', '2015-06-22 19:19:04'), ('129', 'Mobile9', '3', 'files/Mobile9', '1234', '22', '2015-06-22 19:19:17'), ('130', 'Mobile10', '3', 'files/Mobile10', '1234', '22', '2015-06-22 19:19:44'), ('131', 'Mobile11', '3', 'files/Mobile11', '1234', '22', '2015-06-22 19:19:57'), ('132', 'Mobile12', '3', 'files/Mobile12', '1234', '22', '2015-06-22 19:20:13'), ('133', 'Mobile13', '3', 'files/Mobile13', '1234', '22', '2015-06-22 19:20:50'), ('134', 'Mobile14', '3', 'files/Mobile14', '1234', '22', '2015-06-22 19:21:02'), ('135', 'Mobile15', '3', 'files/Mobile15', '1234', '22', '2015-06-22 19:21:17'), ('136', 'Mobile16', '3', 'files/Mobile16', '1234', '22', '2015-06-22 19:21:28'), ('137', 'Home security systems1', '4', 'files/Home security systems1', '1234', '22', '2015-06-22 19:26:11'), ('138', 'Home security systems2', '4', 'files/Home security systems2', '1234', '22', '2015-06-22 19:26:22'), ('139', 'Home security systems3', '4', 'files/Home security systems3', '1234', '22', '2015-06-22 19:26:32'), ('140', 'Home security systems4', '4', 'files/Home security systems4', '1234', '22', '2015-06-22 19:26:42'), ('141', 'Home security systems5', '4', 'files/Home security systems5', '1234', '22', '2015-06-22 19:26:53'), ('142', 'Home security systems6', '4', 'files/Home security systems6', '1234', '22', '2015-06-22 19:27:11'), ('143', 'Home security systems7', '4', 'files/Home security systems7', '1234', '22', '2015-06-22 19:27:22'), ('144', 'Home security systems8', '4', 'files/Home security systems8', '1234', '22', '2015-06-22 19:27:35'), ('145', 'Home security systems9', '4', 'files/Home security systems9', '1234', '22', '2015-06-22 19:28:07'), ('146', 'Home security systems10', '4', 'files/Home security systems10', '1234', '22', '2015-06-22 19:28:30'), ('147', 'Home security systems11', '4', 'files/Home security systems11', '1234', '22', '2015-06-22 19:28:56'), ('148', 'Home security systems12', '4', 'files/Home security systems12', '1234', '22', '2015-06-22 19:29:05'), ('149', 'Cameras1', '5', 'files/Cameras1', '1234', '22', '2015-06-22 19:42:02'), ('150', 'Cameras2', '5', 'files/Cameras2', '1234', '22', '2015-06-22 19:42:12'), ('151', 'Cameras3', '5', 'files/Cameras3', '1234', '22', '2015-06-22 19:42:23'), ('152', 'Cameras4', '5', 'files/Cameras4', '1234', '22', '2015-06-22 19:42:34'), ('153', 'Cameras5', '5', 'files/Cameras5', '1234', '22', '2015-06-22 19:42:44'), ('154', 'Cameras6', '5', 'files/Cameras6', '1234', '22', '2015-06-22 19:42:58'), ('155', 'Cameras7', '5', 'files/Cameras7', '1234', '22', '2015-06-22 19:43:11'), ('156', 'Cameras8', '5', 'files/Cameras8', '1234', '22', '2015-06-22 19:44:17'), ('157', 'Cameras9', '5', 'files/Cameras9', '1234', '22', '2015-06-22 19:44:37'), ('158', 'Cameras10', '5', 'files/Cameras10', '1234', '22', '2015-06-22 19:44:48'), ('159', 'Cameras11', '5', 'files/Cameras11', '1234', '22', '2015-06-22 19:44:58'), ('160', 'Cameras12', '5', 'files/Cameras12', '1234', '22', '2015-06-22 19:45:08'), ('161', 'Cameras13', '5', 'files/Cameras13', '1234', '22', '2015-06-22 19:45:19'), ('162', 'Cameras14', '5', 'files/Cameras14', '1234', '22', '2015-06-22 19:45:33'), ('163', 'Home theater system1', '6', 'files/Home theater system1', '1234', '22', '2015-06-22 19:49:11'), ('164', 'Home theater system2', '6', 'files/Home theater system2', '1234', '22', '2015-06-22 19:49:20'), ('165', 'Home theater system3', '6', 'files/Home theater system3', '1234', '22', '2015-06-22 19:51:25'), ('166', 'Home theater system4', '6', 'files/Home theater system4', '1234', '22', '2015-06-22 19:51:38'), ('167', 'Home theater system5', '6', 'files/Home theater system5', '1234', '22', '2015-06-22 19:51:52'), ('168', 'Home theater system6', '6', 'files/Home theater system6', '1234', '22', '2015-06-22 19:52:06'), ('169', 'Home theater system7', '6', 'files/Home theater system7', '1234', '22', '2015-06-22 19:52:22'), ('170', 'Home theater system8', '6', 'files/Home theater system8', '1234', '22', '2015-06-22 19:52:37'), ('171', 'Home theater system9', '6', 'files/Home theater system9', '1234', '22', '2015-06-22 19:52:49'), ('172', 'Home theater system10', '6', 'files/Home theater system10', '1234', '22', '2015-06-22 19:53:01'), ('173', 'Home theater system11', '6', 'files/Home theater system11', '1234', '22', '2015-06-22 19:53:15'), ('174', 'Home theater system12', '6', 'files/Home theater system12', '1234', '22', '2015-06-22 19:53:24'), ('175', 'Home theater system13', '6', 'files/Home theater system13', '1234', '22', '2015-06-22 19:53:40'), ('176', 'Home theater system14', '6', 'files/Home theater system14', '1234', '22', '2015-06-22 19:53:50'), ('177', 'TV1', '7', 'files/TV1', '1234', '22', '2015-06-22 19:58:39'), ('178', 'TV2', '7', 'files/TV2', '1234', '22', '2015-06-22 19:58:53'), ('179', 'TV3', '7', 'files/TV3', '1234', '22', '2015-06-22 19:59:03'), ('180', 'TV4', '7', 'files/TV4', '1234', '22', '2015-06-22 19:59:13'), ('181', 'TV5', '7', 'files/TV5', '1234', '22', '2015-06-22 19:59:28'), ('182', 'TV6', '7', 'files/TV6', '1234', '22', '2015-06-22 19:59:41'), ('183', 'TV7', '7', 'files/TV7', '1234', '22', '2015-06-22 19:59:53'), ('184', 'TV8', '7', 'files/TV8', '1234', '22', '2015-06-22 20:00:20'), ('185', 'TV9', '7', 'files/TV9', '1234', '22', '2015-06-22 20:00:33'), ('186', 'TV10', '7', 'files/TV10', '1234', '22', '2015-06-22 20:00:44'), ('187', 'TV11', '7', 'files/TV11', '1234', '22', '2015-06-22 20:00:54'), ('188', 'TV12', '7', 'files/TV12', '1234', '22', '2015-06-22 20:01:10'), ('189', 'TV13', '7', 'files/TV13', '1234', '22', '2015-06-22 20:01:21'), ('190', 'TV14', '7', 'files/TV14', '1234', '22', '2015-06-22 20:01:30'), ('191', 'Computer1', '8', 'files/Computer1', '1234', '22', '2015-06-22 20:06:22'), ('192', 'Computer2', '8', 'files/Computer2', '1234', '22', '2015-06-22 20:06:34'), ('193', 'Computer3', '8', 'files/Computer3', '1234', '22', '2015-06-22 20:06:45'), ('194', 'Computer4', '8', 'files/Computer4', '1234', '22', '2015-06-22 20:06:55'), ('195', 'Computer5', '8', 'files/Computer5', '1234', '22', '2015-06-22 20:07:08'), ('196', 'Computer6', '8', 'files/Computer6', '1234', '22', '2015-06-22 20:07:24'), ('197', 'Computer7', '8', 'files/Computer7', '1234', '22', '2015-06-22 20:07:36'), ('198', 'Computer8', '8', 'files/Computer8', '1234', '22', '2015-06-22 20:07:52'), ('199', 'Computer9', '8', 'files/Computer9', '1234', '22', '2015-06-22 20:08:02'), ('200', 'Computer10', '8', 'files/Computer10', '1234', '22', '2015-06-22 20:08:15'), ('201', 'Computer11', '8', 'files/Computer11', '1234', '22', '2015-06-22 20:08:52'), ('202', 'Computer12', '8', 'files/Computer12', '1234', '22', '2015-06-22 20:09:09'), ('203', 'Computer13', '8', 'files/Computer13', '1234', '22', '2015-06-22 20:09:20'), ('204', 'Computer14', '8', 'files/Computer14', '1234', '22', '2015-06-22 20:09:30'), ('205', 'Disc1', '9', 'files/Disc1', '1234', '22', '2015-06-22 20:16:28'), ('206', 'Disc2', '9', 'files/Disc2', '1234', '22', '2015-06-22 20:16:39'), ('207', 'Disc3', '9', 'files/Disc3', '1234', '22', '2015-06-22 20:16:51'), ('208', 'Disc4', '9', 'files/Disc4', '1234', '22', '2015-06-22 20:17:02'), ('209', 'Disc5', '9', 'files/Disc5', '1234', '22', '2015-06-22 20:17:16'), ('210', 'Disc6', '9', 'files/Disc6', '1234', '22', '2015-06-22 20:17:30'), ('211', 'Disc7', '9', 'files/Disc7', '1234', '22', '2015-06-22 20:17:45'), ('212', 'Disc8', '9', 'files/Disc8', '1234', '22', '2015-06-22 20:17:57'), ('213', 'Disc9', '9', 'files/Disc9', '1234', '22', '2015-06-22 20:18:08'), ('214', 'Disc10', '9', 'files/Disc10', '1234', '22', '2015-06-22 20:18:19'), ('215', 'Disc11', '9', 'files/Disc11', '1234', '22', '2015-06-22 20:18:32'), ('216', 'Disc12', '9', 'files/Disc12', '1234', '22', '2015-06-22 20:18:48'), ('217', 'Disc13', '9', 'files/Disc13', '1234', '22', '2015-06-22 20:19:01'), ('218', 'Accessory1', '10', 'files/Accessory1', '1234', '22', '2015-06-22 20:23:18'), ('219', 'Accessory2', '10', 'files/Accessory2', '1234', '22', '2015-06-22 20:23:32'), ('220', 'Accessory3', '10', 'files/Accessory3', '1234', '22', '2015-06-22 20:23:43'), ('221', 'Accessory4', '10', 'files/Accessory4', '1234', '22', '2015-06-22 20:23:55'), ('222', 'Accessory5', '10', 'files/Accessory5', '1234', '22', '2015-06-22 20:24:10'), ('223', 'Accessory6', '10', 'files/Accessory6', '1234', '22', '2015-06-22 20:24:24'), ('224', 'Accessory7', '10', 'files/Accessory7', '1234', '22', '2015-06-22 20:24:34'), ('225', 'Accessory8', '10', 'files/Accessory8', '1234', '22', '2015-06-22 20:24:50'), ('226', 'Accessory9', '10', 'files/Accessory9', '1234', '22', '2015-06-22 20:25:01'), ('227', 'Accessory10', '10', 'files/Accessory10', '1234', '22', '2015-06-22 20:25:13'), ('228', 'Accessory11', '10', 'files/Accessory11', '1234', '22', '2015-06-22 20:25:27'), ('229', 'Accessory12', '10', 'files/Accessory12', '1234', '22', '2015-06-22 20:25:37'), ('230', 'Accessory13', '10', 'files/Accessory13', '1234', '22', '2015-06-22 20:25:50'), ('231', 'Accessory14', '10', 'files/Accessory14', '1234', '22', '2015-06-22 20:26:30'), ('232', 'Accessory15', '10', 'files/Accessory15', '1234', '22', '2015-06-22 20:26:40'), ('233', 'Item1', '11', 'files/Item1', '1234', '22', '2015-06-22 20:41:10'), ('234', 'Item2', '11', 'files/Item2', '1234', '22', '2015-06-22 20:41:21'), ('235', 'Item3', '11', 'files/Item3', '1234', '22', '2015-06-22 20:41:32'), ('236', 'Item4', '11', 'files/Item4', '1234', '22', '2015-06-22 20:41:44'), ('237', 'Item5', '11', 'files/Item5', '1234', '22', '2015-06-22 20:41:56'), ('238', 'Item6', '11', 'files/Item6', '1234', '22', '2015-06-22 20:42:07'), ('240', 'Item7', '11', 'files/Item7', '1234', '22', '2015-06-22 20:43:28'), ('241', 'Item8', '11', 'files/Item8', '1234', '22', '2015-06-22 20:43:41'), ('242', 'Item9', '11', 'files/Item9', '1234', '22', '2015-06-22 20:43:54'), ('243', 'Item10', '11', 'files/Item10', '1234', '22', '2015-06-22 20:44:09'), ('244', 'Item11', '11', 'files/Item11', '1234', '22', '2015-06-22 20:44:24'), ('245', 'Item12', '11', 'files/Item12', '1234', '22', '2015-06-22 20:44:34'), ('246', 'Item13', '11', 'files/Item13', '1234', '22', '2015-06-22 20:44:44'), ('247', ' House wears1', '12', 'files/ House wears1', '1234', '22', '2015-06-22 20:50:30'), ('248', ' House wears2', '12', 'files/ House wears2', '1234', '22', '2015-06-22 20:50:39'), ('249', ' House wears3', '12', 'files/ House wears3', '1234', '22', '2015-06-22 20:50:50'), ('250', ' House wears4', '12', 'files/ House wears4', '1234', '22', '2015-06-22 20:51:00'), ('251', ' House wears5', '12', 'files/ House wears5', '1234', '22', '2015-06-22 20:51:12'), ('252', ' House wears6', '12', 'files/ House wears6', '1234', '22', '2015-06-22 20:51:26'), ('253', ' House wears7', '12', 'files/ House wears7', '1234', '22', '2015-06-22 20:51:37'), ('254', ' House wears8', '12', 'files/ House wears8', '1234', '22', '2015-06-22 20:51:48'), ('255', ' House wears9', '12', 'files/ House wears9', '1234', '22', '2015-06-22 20:52:02'), ('256', ' House wears10', '12', 'files/ House wears10', '1234', '22', '2015-06-22 20:52:12'), ('257', ' House wears11', '12', 'files/ House wears11', '1234', '22', '2015-06-22 20:52:39'), ('258', ' House wears12', '12', 'files/ House wears12', '1234', '22', '2015-06-22 20:52:51'), ('259', ' House wears13', '12', 'files/ House wears13', '1234', '22', '2015-06-22 20:53:01');
COMMIT;

-- ----------------------------
--  Table structure for `order_status`
-- ----------------------------
DROP TABLE IF EXISTS `order_status`;
CREATE TABLE `order_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
--  Records of `order_status`
-- ----------------------------
BEGIN;
INSERT INTO `order_status` VALUES ('1', 'Unprocessed'), ('2', 'Processed');
COMMIT;

-- ----------------------------
--  Table structure for `orders`
-- ----------------------------
DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `user` int(11) DEFAULT '41',
  `order_number` int(11) NOT NULL,
  `commodity` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `summary` int(11) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=423 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
--  Records of `orders`
-- ----------------------------
BEGIN;
INSERT INTO `orders` VALUES ('407', '39', '406', '82', '1', '1234', '2015-06-22 21:27:40', '1234', '2'), ('408', '39', '406', '88', '1', '1234', '2015-06-22 21:27:40', '1234', '2'), ('409', '39', '406', '89', '1', '1234', '2015-06-22 21:27:40', '1234', '2'), ('410', '39', '406', '122', '1', '1234', '2015-06-22 21:27:40', '1234', '2'), ('411', '39', '406', '121', '1', '1234', '2015-06-22 21:27:40', '1234', '2'), ('412', '39', '406', '150', '1', '1234', '2015-06-22 21:27:40', '1234', '2'), ('413', '39', '406', '151', '1', '1234', '2015-06-22 21:27:40', '1234', '2'), ('414', '39', '406', '192', '1', '1234', '2015-06-22 21:27:40', '1234', '2'), ('415', '39', '406', '195', '1', '1234', '2015-06-22 21:27:40', '1234', '2'), ('416', '39', '406', '164', '1', '1234', '2015-06-22 21:27:40', '1234', '2'), ('417', '39', '406', '170', '1', '1234', '2015-06-22 21:27:40', '1234', '2'), ('418', '39', '406', '167', '1', '1234', '2015-06-22 21:27:40', '1234', '2'), ('419', '39', '406', '233', '1', '1234', '2015-06-22 21:27:40', '1234', '2'), ('420', '39', '406', '236', '1', '1234', '2015-06-22 21:27:40', '1234', '2'), ('421', '39', '406', '235', '1', '1234', '2015-06-22 21:27:40', '1234', '2'), ('422', '41', '421', '195', '5', '1234', '2015-06-22 22:32:44', '6170', '1');
COMMIT;

-- ----------------------------
--  Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `hash` varchar(255) COLLATE utf8_bin NOT NULL,
  `salt` varchar(255) COLLATE utf8_bin NOT NULL,
  `access` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
--  Records of `users`
-- ----------------------------
BEGIN;
INSERT INTO `users` VALUES ('1', 'pipif', 'sfsndn@gdf.gdf', '111', '', '', '0'), ('2', 'pipifeqweqwe', 'sfsndn@gdf.gdfqweqwe', 'qweasd1!', '', '', '0'), ('3', '111', 'das@dsf.fd', 'qqq', '', '', '0'), ('4', 'qqq', 'qqq@qqq.qq', 'qq', '', '', '0'), ('5', 'pipa', 'pipa@sdsd.p', 'qwe', '', '', '0'), ('6', 'pipa1', 'www@dd.dd', 'feb2f6bd81d038b7ef9fc717d48ee9b0', '', '', '0'), ('7', 'pipa2', 'www@dd.dd1', '6390c7933cd59f4e64be9d2f3ad85f12', '', '', '0'), ('8', 'pipa3', 'www@dd.dd1', '688a8eeaada8addcdf5bd105824fc139', '', '', '0'), ('9', 'pipa4', 'www@dd.dd1', '3a9a36a4d1074e94dfe00002b00870f4', '', '', '0'), ('10', 'pipa5', 'www@dd.dd1', '2502017e52e152c13ec8f2517765e53c', '', '', '0'), ('11', 'pipa6', 'www@dd.dd1', '58ff4c351169b978e2110979f2ff3158', '', '', '0'), ('12', 'pipa7', 'www@dd.dd1', '9ed2eef6b3e3f1e6a11c754f9ede218a', '', '', '0'), ('13', 'pipa8', 'www@dd.dd1', '23bfcc272111c9b7e67acea5147e9f07', '', 'ad093cef0b85807e7243963de2b84fac', '0'), ('14', 'pipa10', 'www@dd.dd1', 'bf554812be542111093359c6fa34f0c5', '', '3cb31944bf60686241126332b2485a51', '0'), ('15', 'pipa11', 'www@dd.dd1', 'a9888a8a232492c501d68d1e3bf74210', '', 'b8c190e5717001d968ea0d58526e7eee', '0'), ('16', 'pipa12', 'www@dd.dd1', '9f8ded013150e861040a3b2ee51cf79c', '', '91c705a56c558400c364552a901075a0', '0'), ('17', 'pipa13', 'www@dd.ddw', 'e9a88306a41cdd476055a4677760896f', '', 'f58573aee6986cd3fab4baee37b3d843', '0'), ('18', 'pipa13', 'www@dd.dd11', 'd9639a642fe34408cc123ef0d0df9c6e', '', '4206a454d5247134a33a6895d007abfc', '0'), ('19', 'pipa14', 'www@dd.dd111', 'a13fe06455fddd300e7cd77eb949651a', '19a2c51a759ee165e07c501b5aafa410', 'ee6de5a846d0d87e966efe46fcd52136', '0'), ('20', 'test', 'test@test.test', 'b645a4e5cf333f4daa12ea2eac067d9c', '408c6989cea36249bb1cc516c248f576', 'e4a9ce3230c93d0b0ae260b17434b9c1', '0'), ('21', 'test1', 'test@test.test1', 'a3015e7385cb771bcac160cf6a5c4943', '', 'bda9f37cf436e25726f2ce60deb9eb58', '0'), ('22', 'test2', 'test@test.test2', 'eacbe0f2894b76442ca09d2c35e7ffc8', '', '090c9c3d533146fcc954b506478b9c53', '0'), ('23', 'test3', 'test@test.test3', '73672b143439d28ec204a100fffaa420', '', '0baa1bf75ce90e9f3e86660346d881f7', '0'), ('24', 'test4', 'test@test.test4', '54239dfaa29813f14b193a670715d187', '', '5671c21fdcc2b7b001d4852fe75b927d', '0'), ('25', 'test5', 'test@test.test5', '2be41b8129568c87087d0e93797930c1', '', 'b4dc4072c1ae7783396bd8d34d67e851', '0'), ('26', 'test6', 'test@test.test6', '33d0d8187208bd35cd710f2704fa57f7', '', '96b8a27bcafe63e45b908300ab6aa17d', '0'), ('27', 'test7', 'test@test.test7', '42a2fefe41462c6c4015d58127b9f454', '', '55c98a8a7d420a5b9e22c7103df69b6c', '0'), ('28', 'test8', 'test@test.test8', 'b524115c0556ce8f9ff75662c7bf4fe8', '', '2eda5f8204e875db185ff9ca764e2a9a', '0'), ('29', 'test9', 'test@test.test9', 'f8e0b41143d66e082a21f33545c96f86', '', 'cf1f15efd6da0e5c5e075a28a2f5c1e5', '0'), ('30', 'test10', 'test@test.test10', '6bdf630b87869a49cbd5b8524f4398d9', '', '4f253de4fde2fd1c96982384ada6d021', '0'), ('31', 'test11', 'test@test.test11', '414038acbf260f0e8f4f33acc5278d5e', '', 'be8a9974b256f2e325878ab89c7fbae1', '0'), ('32', 'test12', 'test@test.test12', 'c285d6fe1ff62b40daa7048052cfa837', '0d6fc3d2106a6f3f7fe657f6fe531442', '2f9ab40b2244d1561eb8a9457c4bc052', '0'), ('33', '121eed\'!%%!??9', '', '71e94b526e33167ef141da1692468d19', '98ef439a06306396662384a8e6b9d426', 'f4110476b9d01145b62707a6a2a38a0c', '0'), ('35', 'qwe', 'qwe@qwe.qwe', '4a7d1ff206ef4a598d0dda03e43341d1', '47be51a59cf2e05b113b22276941aa1b', 'fcdea943a65fe9e087d7163a2863a0a9', '0'), ('36', 'qaz', 'qaz@qaz.qaz', 'a0d55ba164380cc3301322bd2b78190f', 'b3b4f42f57867b1283f6279a5000baa0', '08a17ffbb58d0bfa8014cc0a7d72bd70', '0'), ('37', 'asd', 'asd@asd.asd', '8cdb1d749cd761dea4ac69a6db9b876c', '6792d8e68aaec734407f520ed0e40b4c', '867ce4a2d9d7e7bc673240e2801cb08b', '0'), ('38', 'admin', 'admin@site.com', '40bbbb23fe51fcbcd209009956b46e58', '1a66fcafc69485c1bff5ccd76fb93968', '7586e33dddaeccc864ab396b5102fc4c', '1'), ('39', 'pupkin', 'pupkin@pupkin.ru', 'bcd5922ab2e8c83fc929ba8e2e5289c4', '0a0b4d52977fbadb33487ff6a1333550', '8b5d4ac0e725540caaad43b25b79978f', '0'), ('40', 'root', 'root@root.ru', '6a65493e0c5896921840536366c9d951', '3aab8829e7f0b1c86589b24ceff26741', '4660580ad961eb1859b053a215967f37', '1'), ('41', 'unknown_user', 'unknown_user@u.ru', '273d5fb4dc1a110193247279761ae6a2', '64b5ef2c45c9e939d13f1130dd62cbc1', 'd6647c40f17f7c5333682dc2c48d906c', '0'), ('42', 'vasya', 'vasya@vasya.ru', '8decb0b45fe3922fee3e459243e59386', '07b3906d2c251fd4d8ff2a2c92192835', '37763913f96b3a40b86e102164e23b6b', '0');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
