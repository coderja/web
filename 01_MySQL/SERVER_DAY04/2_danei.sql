#重新创建数据库danei
SET NAMES UTF8;
DROP DATABASE IF EXISTS danei;
CREATE DATABASE danei CHARSET=UTF8;
USE danei;

#创建部门信息表
CREATE TABLE dept(
  did INT PRIMARY KEY ,	#部门编号，自增主键
  dname	VARCHAR(32)	#部门名称
);
#插入4个部门记录
INSERT INTO dept VALUES
(10, '研发部'),
(20, '市场部'),
(30, '运营部'),
(40, '测试部');

#创建员工信息表
CREATE TABLE emp(
  eid INT PRIMARY KEY AUTO_INCREMENT,
  ename VARCHAR(32),
  salary DECIMAL(7,2),
  hireDate DATE,
  deptId INT		#员工所在部门编号
);
INSERT INTO emp VALUES
(5139, 'TOM', 5000, '2000-1-1', 10),
(5199, 'MARY', 5500, '2001-2-1', 10),
(6017, 'ELLE', 3800, '2000-3-5', 10),
(6285, 'TIGER', 6700, '2002-3-5', 20),
(6399, 'SCOTT', 9300, '1998-1-1', 20),
(7155, 'LEAN', 7500, '2000-5-18', 30),
(7788, 'TIM', 5100, '1999-5-2', 30),
(7950, 'JERRY', 4000, '2001-3-1', 20),
(7981, 'JOE', 12000, '2003-5-1', 10),
(8011, 'PETTY', 8500, '1999-2-12', 30),
(8100, 'SMITH', 3800, '2000-2-1', 10),
(9155, 'KING', 4800, '2000-9-18', NULL);