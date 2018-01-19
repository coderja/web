SET NAMES UTF8;
DROP DATABASE IF EXISTS xuezi;
CREATE DATABASE xuezi CHARSET=UTF8;
USE xuezi;
CREATE TABLE xz_laptop_family(
   fid INT PRIMARY KEY AUTO_INCREMENT,
   fname VARCHAR(32) NOT NULL,
   laptopCount INT
);
INSERT INTO xz_laptop_family VALUES(10,'联想E470',3);
INSERT INTO xz_laptop_family VALUES(20,'戴尔7000',2);
INSERT INTO xz_laptop_family VALUES(30,'MacBook Air',2);
#INSERT INTO xz_laptop_family VALUES(NULL,'MacBook Air2');

CREATE TABLE xz_laptop(
  lid INT PRIMARY KEY AUTO_INCREMENT,
  pic VARCHAR(128) NOT NULL,
  title VARCHAR(128) NOT NULL,
  price DECIMAL(7,2) DEFAULT 99999.99,
  spec VARCHAR(64),
  shelfTime BIGINT,
  isOnsale BOOL,
   familyId INT,
   FOREIGN KEY(familyId) REFERENCES xz_laptop_family(fid)
);
INSERT INTO xz_laptop VALUES(1001,'xz.com/img1.jpg','xxxxxxxx',6666,'3kg',1502231567890,TRUE,10);
INSERT INTO xz_laptop VALUES(1002,'xz.com/img2.jpg','xxxxxxxx',5666,'3kg',1503231567890,TRUE,10);
INSERT INTO xz_laptop VALUES(1003,'xz.com/img3.jpg','xxxxxxxx',6666,'3kg',1504231567890,TRUE,30);
INSERT INTO xz_laptop VALUES(1004,'xz.com/img4.jpg','xxxxxxxx',4666,'3kg',1505231567890,TRUE,10);
INSERT INTO xz_laptop VALUES(1005,'xz.com/img5.jpg','xxxxxxxx',6666,'3kg',1506231567890,TRUE,10);
INSERT INTO xz_laptop VALUES(1006,'xz.com/img6.jpg','xxxxxxxx',4666,'3kg',1507231567890,TRUE,20);
INSERT INTO xz_laptop VALUES(1007,'xz.com/img7.jpg','xxxxxxxx',5666,'2kg',1508231567890,TRUE,30);
#删除编号为4的笔记本，对应型号表中笔记本数量-1
DELETE FROM xz_laptop WHERE lid=1004;#对应型号10
UPDATE xz_laptop_family SET laptopCount=2 WHERE fid=10;
#编号为2的型号由十改成30;
UPDATE xz_laptop SET familyId=30 WHERE lid=1002;
UPDATE xz_laptop_family SET laptopCount=laptopCount-1 WHERE fid=10;
UPDATE xz_laptop_family SET laptopCount=laptopCount+1 WHERE fid=30;