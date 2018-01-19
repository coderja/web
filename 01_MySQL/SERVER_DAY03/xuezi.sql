SET NAMES UTF8;
DROP DATABASE IF EXISTS xuezi;
CREATE DATABASE xuezi CHARSET=UTF8;
USE xuezi;
CREATE TABLE user(
     uid SMALLINT PRIMARY KEY,
     uname  VARCHAR(8) UNIQUE NOT NULL,
     upwd VARCHAR(32) NOT NULL,
     vator VARCHAR(64) DEFAULT 'codeboy/img2.jpg',
     score INT CHECK(score>0)
);
INSERT INTO user VALUES(1,'愤怒的小鸟','123456','codeboy.com/img1',5000);
INSERT INTO user VALUES(2,'愤怒的小鸡','234567','codeboy.com/img4',10000);
INSERT INTO user VALUES(4,'愤怒的小鸭','012345','codeboy.com/img3',50200);
INSERT INTO user VALUES(3,'愤怒的小狗','666666',DEFAULT,50020);
INSERT INTO user(uid,uname) VALUES(6,'jerry');
