-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `user_id` int(11) NOT NULL auto_increment,
  `user_name` varchar(16) NOT NULL,
  `user_pass` varchar(16) NOT NULL,
  `user_hint` varchar(80) NOT NULL,
  `user_date` datetime NOT NULL,
  `user_level` int(3) default NULL,
  PRIMARY KEY  (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of Users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'steve', 'letmein', 'let them in', '2011-08-18 21:43:27', '2');
INSERT INTO `users` VALUES ('2', 'dave', 'bobcat', 'a type of critter', '2011-08-18 21:43:27', '2');