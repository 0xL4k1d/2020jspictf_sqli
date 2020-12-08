SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;


CREATE DATABASE jspictf;
USE jspictf;

DROP TABLE IF EXISTS `jspictf`;
CREATE TABLE jspictf
		(
		id int(3) NOT NULL AUTO_INCREMENT,
		username varchar(20) NOT NULL,
		password varchar(200) NOT NULL,
		PRIMARY KEY (id)
		);
CREATE TABLE emails
		(
		id int(3)NOT NULL AUTO_INCREMENT,
		email_id varchar(30) NOT NULL,
		PRIMARY KEY (id)
		);
CREATE TABLE uagents
		(
		id int(3)NOT NULL AUTO_INCREMENT,
		uagent varchar(256) NOT NULL,
		ip_address varchar(35) NOT NULL,
		username varchar(20) NOT NULL,
		PRIMARY KEY (id)
		);
CREATE TABLE referers
		(
		id int(3)NOT NULL AUTO_INCREMENT,
		referer varchar(256) NOT NULL,
		ip_address varchar(35) NOT NULL,
		PRIMARY KEY (id)
		);

INSERT INTO jspictf.jspictf (id, username, password) VALUES ('1','wyf','wyf'), ('2', 'wyfnb', 'wyfnb'), ('3', 'wyftql', 'wyftql'), ('4', 'secure', 'crappy'), ('5', 'stupid', 'stupidity'), ('6', 'superman', 'genious'), ('7', 'batman', 'mob!le'), ('8', 'admin', 'fsaoaigubbwouibiaewrawe'),('9','flag2','flag{th1s_i5_n0t_f14g}');

INSERT INTO `jspictf`.`emails` (id, email_id) VALUES ('1', 'Wyf@666.com'), ('2', 'WyfNB@666.com'), ('3', 'Dummy@dhakkan.local'), ('4', 'secure@dhakkan.local'), ('5', 'stupid@dhakkan.local'), ('6', 'superman@dhakkan.local'), ('7', 'batman@dhakkan.local'), ('8', 'admin@dhakkan.com');

DROP TABLE IF EXISTS `flag2`;
CREATE TABLE `flag2` (
    `flag2` text NOT NULL
) ENGINE=InnoDB CHARSET=utf8;
