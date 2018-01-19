#设置mysql.exe连接mysql.exe所用的字符集
SET NAMES UTF8;
DROP DATABASE IF EXISTS dangdang;
CREATE DATABASE dangdang CHARSET=UTF8;
USE dangdang;
CREATE TABLE book(
	bid INT,
	pic VARCHAR(24),
        title VARCHAR(20),
	price INT,
	birthday VARCHAR(20),
	isOverPrice VARCHAR(1)
);
INSERT INTO book VALUES(1,'dangdang.com/img/ddd','西游戏',46,'2015/07/25','是');
INSERT INTO book VALUES(2,'dangdang.com/img/ccc','水浒传',48,'2015/07/26','是');
INSERT INTO book VALUES(3,'dangdang.com/img/ddd','三国志',40,'2015/07/25','否');

DELETE FROM book WHERE bid=1;
UPDATE book SET title='红楼梦',price=50 WHERE bid=3;
SELECT * FROM book;
