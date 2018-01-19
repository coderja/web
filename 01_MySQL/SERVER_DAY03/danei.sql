SET NAMES UTF8;
DROP DATABASE IF EXISTS danei;
CREATE DATABASE danei CHARSET=UTF8;
USE danei;
CREATE TABLE emp(
    eid  INT,
    ename VARCHAR(6),
    sex CHAR(1),
    salary DECIMAL(9,2),
    age TINYINT,
    hireDate DATE,
    isMarried BOOL
);
INSERT INTO emp VALUES(9999,'张三','男','9999999.99','45','2015-10-29',TRUE);
INSERT INTO emp VALUES(55555,'李四','男','9999.99','25','2016-10-29',FALSE);
INSERT INTO emp VALUES(11000,'王丽','女','8999.99','25','2015-10-29',FALSE);
INSERT INTO emp VALUES(10111,'赵三','男','799999.99','35','2014-10-29',TRUE);
#DELETE FROM emp WHERE eid=9999;
UPDATE emp SET eid='45555',ename='李雷' WHERE eid=55555;

SET NAMES UTF8;
DROP DATABASE IF EXISTS terana;
DREATE DATABASE terana CHARSET=UTF8;
DREATE TABLE emp(
     eid  INT,
     ename VARCHAR(4),
     sex CHAR(1),
     salary DECIMAL(8,2),
     age TINYINT,
     hireDate DATE,
     isMarried BOOL
);