SET NAMES UTF8;
DROP DATABASE IF EXISTS danei;
CREATE DATABASE danei CHARSET=UTF8;
USE danei;
CREATE TABLE dept(
    did SMALLINT PRIMARY KEY AUTO_INCREMENT,
    dname VARCHAR(32)
);
INSERT INTO dept VALUES(10,'运营部');
INSERT INTO dept VALUES(20,'开发部');
INSERT INTO dept VALUES(30,'市场部');
INSERT INTO dept VALUES(40,'市场部');

CREATE TABLE emp(
    eid INT PRIMARY KEY AUTO_INCREMENT,
    ename VARCHAR(6),
    salary DECIMAL(7,2),
    hideDate DATE,
   depId INT
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
#查询员工的姓名和工资
 SELECT eid,salary FROM emp;
#查询所有员工的入职日期、部门编号、姓名
SELECT hideDate,depId,ename FROM emp;
#查询表中的部门表中的部门编号与部门名称，部门名称用i代替，部门名称用n代替
SELECT did AS i,dname n FROM dept;
#查询表中部门编号不能重复
SELECT DISTINCT depId FROM emp;
#查询表中的员工姓名，用姓名代替，计算员工年薪（每个月+500）年终奖+5000，
#名称用薪水代替
SELECT ename AS 姓名,(salary+500)*12+5000 年终奖 FROM emp;
#查找表中的员工编号，工资，用工资默认排序
SELECT eid,salary FROM emp ORDER BY salary;
#查询所有员工的姓名和入职日期，先入职的后显示
SELECT ename,hideDate FROM emp ORDER BY hideDate DESC;
#查询所有员工的姓名和工资，按照工资由低到高排序，工资相同再按姓名由低到高排
SELECT ename,salary FROM emp ORDER BY salary,ename;
#查询所有员工的姓名和工资按照工资排序，只显示第一页（最多显示五行记录）
SELECT ename,salary FROM emp ORDER BY salary LIMIT 0,5;
#查询姓名为Tom的员工所有信息
SELECT * FROM emp WHERE ename='TOM';
#查询10号部门的员工的所有信息
SELECT * FROM emp WHERE depId=10;
#查询入职日期为2000-1-1的员工所有信息
SELECT * FROM emp WHERE hideDate='2000-1-1';
#查询员工编号小于7788的员工信息
SELECT * FROM emp WHERE eid<7788;
#查询不在10号部门的员工的所有信息
 SELECT * FROM emp WHERE depId!=10;
#查询尚未确定部门的员工信息
SELECT * FROM emp WHERE depId IS NULL;
#查询表中工资>6000且小于8000的集合
SELECT * FROM emp WHERE salary>6000 and salary<8000; 
#查询表中工资小于6000或者大于8000
SELECT *  FROM emp WHERE salary<6000 OR salary>8000;
#查询出20和30号部门的员工
SELECT * FROM emp WHERE depId=20 OR depId=30;
#查询出10部门工资中大于8000的员工所有信息
SELECT * FROM emp WHERE salary>8000 AND depId=10;
#查询出在2000年入职的员工所有信息
SELECT * FROM emp WHERE hideDate<'2001-1-1' AND hideDate>='2000-1-1';
#查询出不在2000年入职的员工的所有信息
SELECT * FROM emp WHERE hideDate<'2000-1-1' OR hideDate>='2001-1-1';
#查询出部门编号为10,30,50的员工所有信息
SELECT * FROM emp WHERE depId=30 OR depId=10 OR depId=50;
SELECT * FROM emp WHERE depId in (10,30,50);
#查询出姓名中包含字符E的员工所有信息
SELECT * FROM emp WHERE ename LIKE'%E%';#包含E
SELECT * FROM emp WHERE ename LIKE't%';#t开头
#查询出姓名中倒数第二个字符为E的员工所有信息
SELECT * FROM emp WHERE enam LIKE'%E_';
#查询出工资大于6000的员工数量
SELECT COUNT(salary>6000) FROM emp;
#查询出10号部门工资的工资总和
SELECT SUM(salary) AS 总计 FROM emp;
 