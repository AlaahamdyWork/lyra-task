
SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for employees
-- ----------------------------
DROP TABLE IF EXISTS `employees`;
CREATE TABLE `employees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of employees
-- ----------------------------
INSERT INTO `employees` VALUES ('1', 'Ahmed', 'Street 10, Ezbet Nafie, El-Basatin, Cairo Governorate, Egypt');
INSERT INTO `employees` VALUES ('2', 'Mohamed', '41 El-Soultan Ahmed, El-Gamaleya, Qism El-Gamaleya, Cairo Governorate, Egypt');
INSERT INTO `employees` VALUES ('3', 'Test', '9-13 Abd El-Rahman Nasr Ext, Al Amireyah Ash Shamaleyah, El-Zaytoun, Cairo Governorate, Egypt');
INSERT INTO `employees` VALUES ('4', 'Test 2', 'Al Mataria St, Al Amireyah Ash Shamaleyah, El-Zaytoun, Cairo Governorate, Egypt');
