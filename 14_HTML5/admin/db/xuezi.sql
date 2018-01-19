USE xz;
SET NAMES UTF8;
CREATE TABLE xz_admin(
   aid INT PRIMARY KEY AUTO_INCREMENT,
   uname VARCHAR(20),
   upwd VARCHAR(32),
   cuid INT,
   ctime  DATETIME,
   muid   INT,
   mtime  DATETIME,
   expire  enum('0','1'),
   v1  INT,
   v2   VARCHAR(255)

);

#alter table xz_admin modify upwd varchar(32);

INSERT INTO xz_admin VALUES
(NULL,'tom',md5(123456),0,now(),1,now(),'0',0,''),
(NULL,'jerry',md5(123456),0,now(),1,now(),'0',0,''),
(NULL,'eric',md5(123456),0,now(),1,now(),'0',0,''),
(NULL,'lucy',md5(123456),0,now(),1,now(),'0',0,'');