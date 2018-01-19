SET NAMES UTF8;
DROP DATABASE IF EXISTS xuezi;
CREATE DATABASE xuezi CHARSET=UTF8;
USE xuezi;
CREATE TABLE xz_laptop_family(
    fid INT PRIMARY KEY,
    fname VARCHAR(128),
    laptopCount SMALLINT 
);
INSERT INTO xz_laptop_family VALUES(1,'联想E470',3);
INSERT INTO xz_laptop_family VALUES(2,'小米Air',2);
INSERT INTO xz_laptop_family VALUES(3,'MackBook',2);
CREATE TABLE xz_laptop(
    lid INT PRIMARY KEY,
    pic VARCHAR(64),
    title VARCHAR(128),
    price DECIMAL(8,2),
    spec VARCHAR(32),
    shelfTime DATE,
    isOnsale BOOL,
    familyId INT,
    FOREIGN KEY(familyId) REFERENCES xz_laptop_family(fid)
);
INSERT INTO xz_laptop VALUES(1,'img/1.img','xxxxxxxx',5888,'3kg','2016-8-21',0,2);
INSERT INTO xz_laptop VALUES(2,'img/2.img','xxxxxxxx',5888,'3kg','2016-8-25',1,1);
INSERT INTO xz_laptop VALUES(3,'img/3.img','xxxxxxxx',5888,'3kg','2016-8-21',0,2);
INSERT INTO xz_laptop VALUES(4,'img/4.img','xxxxxxxx',5888,'3kg','2016-8-25',0,2);
INSERT INTO xz_laptop VALUES(5,'img/5.img','xxxxxxxx',5888,'3kg','2016-8-21',1,3);
INSERT INTO xz_laptop VALUES(6,'img/6.img','xxxxxxxx',5888,'3kg','2016-8-25',0,2);
INSERT INTO xz_laptop VALUES(7,'img/7.img','xxxxxxxx',5888,'3kg','2016-8-21',1,3);
#INSERT INTO xz_laptop VALUES(8,'img/7.img','xxxxxxxx',5888,'3kg','2016-8-21',1,5);无法插入
DELETE FROM xz_laptop WHERE lid=5;#删除编号为5的笔记本
UPDATE xz_laptop_family SET laptopCount=1 WHERE fid=3;#对应的型号下笔记本数量应该-1
UPDATE xz_laptop SET familyId=2 WHERE lid=2;#修改编号为2的笔记本所属型号为另一种型号
UPDATE xz_laptop_family SET laptopCount=2 WHERE fid=1;#原型号下的笔记本数量-1
UPDATE xz_laptop_family SET laptopCount=3 WHERE fid=2;#新型号下的笔记本数量+1.
