# Host: localhost  (Version 5.5.16)
# Date: 2018-04-05 14:06:15
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "bloodtype"
#

CREATE TABLE `bloodtype` (
  `bid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`bid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

#
# Data for table "bloodtype"
#

INSERT INTO `bloodtype` VALUES (1,'A'),(2,'B'),(3,'O'),(4,'AB');

#
# Structure for table "calls"
#

CREATE TABLE `calls` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `address` varchar(255) NOT NULL DEFAULT '',
  `patient` bit(1) NOT NULL DEFAULT b'0',
  `hospital` int(11) NOT NULL DEFAULT '0',
  `litres` int(11) NOT NULL DEFAULT '0',
  `donator` bit(1) DEFAULT NULL,
  `fn` varchar(255) NOT NULL DEFAULT '',
  `ln` varchar(255) DEFAULT NULL,
  `mail` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`Id`),
  KEY `patient id` (`patient`),
  KEY `hospital id` (`hospital`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

#
# Data for table "calls"
#

INSERT INTO `calls` VALUES (2,'menouf',b'1',1,1,b'0','',NULL,''),(3,'menouf',b'1',2,1,b'0','elham','usama','e@yahoo.com');

#
# Structure for table "employee"
#

CREATE TABLE `employee` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `fn` varchar(255) NOT NULL DEFAULT '',
  `phone` char(11) NOT NULL DEFAULT '',
  `hospitalid` int(11) DEFAULT '0',
  `gender` bit(1) DEFAULT NULL,
  `patientid` int(11) NOT NULL DEFAULT '0',
  `email` varchar(255) NOT NULL DEFAULT '',
  `ln` varchar(255) NOT NULL DEFAULT '',
  `pass` varchar(255) NOT NULL DEFAULT '',
  `mob` varchar(255) NOT NULL DEFAULT '',
  `address` varchar(255) NOT NULL DEFAULT '',
  `isadmin` bit(1) DEFAULT NULL,
  `isactive` bit(1) DEFAULT NULL,
  `isapprove` bit(1) DEFAULT NULL,
  PRIMARY KEY (`Id`),
  KEY `hospitalid` (`hospitalid`),
  KEY `patientid` (`patientid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

#
# Data for table "employee"
#

INSERT INTO `employee` VALUES (1,'mona','01028765434',NULL,b'1',2,'','','','','',b'1',NULL,NULL),(2,'reem','048',1,b'1',0,'reem@gmail.com','hassan','1234','010','shibin',b'1',b'0',b'0'),(3,'reem','0482',0,b'1',0,'reem2@gmail.com','hassan','12345','0101','shibin',b'1',b'0',b'0'),(4,'reem','0482',NULL,b'1',0,'reem44@gmail.com','hassan','1234','0101','shibin',b'1',b'0',b'0'),(5,'reem','0482',NULL,b'1',0,'reem434@gmail.com','hassan','12334','0101','shibin',b'1',b'1',b'1');

#
# Structure for table "hospital"
#

CREATE TABLE `hospital` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `address` varchar(255) NOT NULL DEFAULT '',
  `city` varchar(255) NOT NULL DEFAULT '',
  `patientid` int(11) NOT NULL DEFAULT '0',
  `employeeid` int(11) NOT NULL DEFAULT '0',
  `phone` char(11) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  `pass` varchar(255) NOT NULL DEFAULT '',
  `isactive` bit(1) DEFAULT NULL,
  `isadmin` bit(1) DEFAULT NULL,
  `isapprove` bit(1) DEFAULT NULL,
  `mobile` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

#
# Data for table "hospital"
#

INSERT INTO `hospital` VALUES (1,'kasreleiny','       sheben el kom \r\n       ','              menouf \r\n        \r\n       ',0,0,'048','kasreleiny@gmail.com','1234 111 ',b'1',b'1',b'1','010'),(2,'menoufelaam','       menouf \r\n       ','       menouf \r\n       ',0,0,'048','menoufelaam@gmail.com','1234 ',b'1',b'1',b'1','012');

#
# Structure for table "patient"
#

CREATE TABLE `patient` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `fn` varchar(255) NOT NULL DEFAULT '',
  `lna` varchar(255) NOT NULL DEFAULT '',
  `pass` int(11) NOT NULL DEFAULT '0',
  `city` varchar(255) NOT NULL DEFAULT '',
  `address` varchar(255) NOT NULL DEFAULT '',
  `phone` char(11) NOT NULL DEFAULT '',
  `mobile` char(1) NOT NULL DEFAULT '',
  `gender` bit(1) DEFAULT NULL,
  `bid` varchar(11) NOT NULL DEFAULT '',
  `dateofbirth` date NOT NULL DEFAULT '0000-00-00',
  `ispatient` bit(1) DEFAULT NULL,
  `employeeid` int(11) NOT NULL DEFAULT '0',
  `email` varchar(255) NOT NULL DEFAULT '',
  `did` varchar(255) DEFAULT NULL,
  `callsid` int(11) NOT NULL DEFAULT '0',
  `donnator` bit(1) DEFAULT NULL,
  `isadmin` bit(1) DEFAULT NULL,
  `isapproval` bit(1) DEFAULT NULL,
  `isactive` bit(1) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

#
# Data for table "patient"
#

INSERT INTO `patient` VALUES (1,'mohamed','ahmed',123456789,'menouf','4st','483631422','1',b'0','1','0000-00-00',b'1',1,'m@gmail.com','',1,b'0',b'1',NULL,NULL),(2,'ahmed','saeed',123456,'cairo','madint nasr','236765436','1',b'0','2','0000-00-00',b'0',0,'a@yahoo.com','1',0,b'1',b'0',NULL,NULL),(3,'mona','ali',123321,'tanta','st el bahr','405467654','1',b'1','3','0000-00-00',b'0',0,'mo@gmail.com','2',0,b'1',b'0',NULL,NULL),(4,'khaled','mostafa',1234,'ashmun','3st','487659009','1',b'0','4','0000-00-00',b'1',0,'k@yahoo.com','',0,b'0',b'1',NULL,NULL),(5,'sara','said',123455,'benha','6st','487654345','1',b'1','2','0000-00-00',b'0',0,'s@gmail.com','3',0,b'1',b'0',NULL,NULL),(6,'elham','usama',12345,'menouf','menouf','0483631455','0',b'1','0','0000-00-00',b'1',2,'e@gmail.com',NULL,0,b'0',b'0',NULL,NULL),(10,'zeinab','hamdi',1234,'menouf','menouf','0483632345','0',b'1','0','0000-00-00',b'1',0,'z@gmail.com','0',0,b'0',NULL,NULL,NULL),(11,'keky','kowq',1234,'tanta','3st','033','0',b'0','0','0000-00-00',b'0',0,'ka@yahoo.com','0',0,b'0',b'0',b'1',b'0'),(12,'ahmed','mo',1234,'3st','menouf','0483631433','0',b'0','0','0000-00-00',b'0',0,'ahmed1@gmail.com','0',0,b'1',b'1',b'0',b'1'),(13,'ahmed','mo',1234,'3st','menouf','0483631433','0',b'0','0','0000-00-00',b'0',0,'ahmed1@gmail.com','2',0,b'1',b'1',b'1',b'1'),(14,'ahmed','mo',1234,'3st','menouf','0483631422','0',b'0','0','0000-00-00',b'0',0,'ahmed12@gmail.com','0',0,b'1',b'1',b'0',b'1'),(15,'ahmed','mo',1234,'3st','menouf','0483631433','0',b'0','0','0000-00-00',b'0',0,'ahmed122@gmail.com','0',0,b'1',b'1',b'1',b'1');

#
# Structure for table "donation"
#

CREATE TABLE `donation` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `patient id` int(11) NOT NULL DEFAULT '0',
  `hospital id` int(11) NOT NULL DEFAULT '0',
  `employee id` int(11) NOT NULL DEFAULT '0',
  `litres` char(11) NOT NULL DEFAULT '',
  `calls id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Id`),
  KEY `patient id` (`patient id`),
  KEY `hospital id` (`hospital id`),
  KEY `employee id` (`employee id`),
  CONSTRAINT `donation_ibfk_1` FOREIGN KEY (`patient id`) REFERENCES `patient` (`Id`),
  CONSTRAINT `donation_ibfk_2` FOREIGN KEY (`hospital id`) REFERENCES `hospital` (`Id`),
  CONSTRAINT `donation_ibfk_3` FOREIGN KEY (`employee id`) REFERENCES `employee` (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Data for table "donation"
#

INSERT INTO `donation` VALUES (1,2,1,1,'6',1);
