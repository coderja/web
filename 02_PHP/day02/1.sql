SET NAMES UTF8;
SET NAMES UTF8;
DROP DATABASE IF EXISTS danei;
CREATE DATABASE CAGRSET=UTF8;
USE danei; 
CREATE TABLE dept(
    did SMALLINT PRIMARY KEY AUTO_INCREMENT,
    dname VARCHAR(32)
);
INSERT INTO dept VALUES
            (10,'运营部'),
            (20,'研发部'),
            (30,'财务部'),
            (40,'市场部');
CREATE TABLE emp( 
eid TINYINT PRIMARY KEY AUTO_INCREMENT,
    ename VARCHAR(32),
    salary DECIMAL(8,2),
    hireDate DATE,
    depId SMALLINT
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
SELECT ename,salary FROM emp;
#查询所有员工的入职日期、部门编号、姓名
SELECT hideDate,eid,ename FROM emp; 
#查询表中的部门表中的部门编号与部门名称，部门名称用i代替，部门名称用n代替
SELECT eid AS I,depId D FROM emp;
#查询表中部门编号不能重复
SELECT DISTINCT depId FROM emp;
#查询表中的员工姓名，用姓名代替，计算员工年薪（每个月+500）年终奖+5000，
#名称用薪水代替
SELECT ename AS 姓名,(salary+500)*12+5000 薪水 FROM emp; 
#查找表中的员工编号，工资，用工资默认排序
SELECT eid,salary FROM emp ORDER BY salary;
#查询所有员工的姓名和入职日期，先入职的后显示
SELECT ename,hideDate FROM emp ORDER BY hideDate desc;
#查询所有员工的姓名和工资，按照工资由低到高排序，工资相同再按姓名由低到高排
SELECT ename,salary FROM emp ORDER BY salary desc,ename desc;
#查询所有员工的姓名和工资按照工资排序，只显示第一页（最多显示五行记录）
SELECT ename,salary FROM emp LIMIT 0,5;
#查询姓名为Tom的员工所有信息
select * from emp where ename='TOM';
#查询10号部门的员工的所有信息
SELECT * FROM emp WHERE depId=10;
#查询入职日期为2000-1-1的员工所有信息
select * from emp where hideDate='2000-1-1';
#查询员工编号小于7788的员工信息
select * from emp where salary<7788;
#查询不在10号部门的员工的所有信息
select * from emp where depId!=10;
#查询尚未确定部门的员工信息
SELECT * FROM emp where depId IS NULL;
#查询表中工资>6000且小于8000的集合
SELECT * FROM emp WHERE 6000<salary<8000;
#查询表中工资小于6000或者大于8000
select * from emp where salary>8000 OR salary<6000;
#查询出20和30号部门的员工
SELECT * FROM emp WHERE depId=10 OR depID=20;
#查询出10部门工资中大于8000的员工所有信息
SELECT * FROM emp WHERE depId=10 AND salary>8000;
#查询出在2000年入职的员工所有信息
SELECT * FROM emp WHERE hideDate<'2000-12-31' AND hideDate>='2000-1-1';
#查询出不在2000年入职的员工的所有信息
SELECT  * FROM emp WHERE hideDate<'2000-1-1' OR hideDate>'2000-12-31';
#查询出部门编号为10,30,50的员工所有信息
select * from emp where depId=10 or depId=20 or depId=30;
select * FROM emp WHERE depId IN (10,20,30);
#查询出姓名中包含字符E的员工所有信息
select * from emp WHERE ename LIKE '%E%';#包含E
SELECT * FROM emp WHERE ename LIKE 't%';#t开头
#查询出姓名中倒数第二个字符为E的员工所有信息
SELECT * FROM emp WHERE ename LIKE '%e_';
#查询出工资大于6000的员工数量
SELECT COUNT(salary) FROM emp;
#查询出10号部门工资的工资总和
SELECT SUM(salary) FROM emp;
1.复杂查询——分组查询/聚合函数查询
  标准SQL提供的五个聚合查询函数
  COUNT(),SUM(),MAX(),AVG(),MIN()
  示例：查询所有员工的数量
  SELECT COUNT(eid) FROM emp;
  SELECT COUNT(*) FROM emp;
  示例:查询10号部门的员工数量
  SELECT COUNT(*) FROM emp WHERE depId=10;
  示例：查询出每个部门的编号及该部门的员工的数量
  SELECT depId,eid FROM emp GROUP BY depId;
  注意:GROUP BY 后跟进行分组的依据列。只要有一条SELECT
  使用GROUP BY 子句，SELECT字句中要么出现分组依据列，
  要么出现聚合函数，不能直接出现分组依据列
  查询出每个部门的编号，及该部门的工资最大最小值和平均值
  SELECT depId,MAX(salary),MIN(salary),AVG(salary) FROM emp GROUP BY depId ;

  2.复杂查询——子查询
   子查询：在一条语句中，又出现一条查询语句
   示例：查询出"研发部"所有员工的所有信息
   SELECT * FROM emp WHERE depId=(
       SELECT did FROM dept WHERE dname='运营部'
   );
   分析：步骤1-查询"研发部"对应的部门编号=>10
         SELECT did FROM dept WHERE dname="运营部";
        步骤2 查询10号部门的员工信息
         SELECT * FROM  emp WHERE depId=10;
         上述两句话整合一句话:
         SELECT * FROM  emp WHERE depId=(
             SELECT did FROM dept WHERE dname="运营部"
         );
         查询出工资比Scott高的员工信息;
         SELECT salary FROM emp WHERE ename='SCOTT';
         SELECT * FROM emp WHERE salary>9300;
         整合一句
         SELECT * FROM emp WHERE salary>(
         SELECT salary FROM emp WHERE ename='SCOTT'
         );
         
         查询出工资比公司平均工资高的员工的所有信息
         SELECT AVG(salary) FROM emp;
         SELECT * FROM emp WHERE salary>6333;
         整合一句
         SELECT * FROM emp WHERE salary>(
             SELECT AVG(salary) FROM emp
         );
         
         查询出于TOM同一年入职的员工的所有信息
         SELECT YEAR(hideDate) FROM emp WHERE ename='TOM';
         SELECT * FROM emp WHERE YEAR(hideDate)=2000;
         整合一句
          SELECT * FROM emp WHERE YEAR(hideDate)=(
              SELECT YEAR(hideDate) FROM emp WHERE ename='TOM'
          );
         扩展知识：SELECT YEAR('2000-1-1') ,返回2000，YEAR()函数用于获取一个DATE中的年份部门

   3.复杂查询——跨表查询/多表查询——难点
    一个查询结果集中的数据来自多个表。
    示例：查询员工姓名及其所在部门的名称 
    SELECT dname,ename FROM emp,dept WHERE depId=did; #跨表必须有约束      
    SELECT * FROM emp,dept WHERE depId=did;
   上述语法是SQL-92中的语法。不足:无法显示NULL对应的数据。
   SQL-99标准中可以显示出NULL对应的数据：
   (1)SQL-99中的跨表查询——"内连接"
            SELECT ename,dname 
            FROM emp  INNER JOIN dept
            ON depId=did;  #作用等同于SQL-92语法
   (2)SQL-99中的跨表查询——"左外连接"
            SELECT ename,dname 
            FROM emp LEFT OUTER JOIN dept
            ON depId=did;
   (3)SQL-99中的跨表查询——"右外连接"
            SELECT ename,dname 
            FROM emp RIGHT OUTER JOIN dept
            ON depId=did;
   (4)SQL-99中的跨表查询——"全连接"——mysql不支持
            SELECT ename,dname 
            FROM emp FULL JOIN dept
            ON depId=did;
   小知识：笛卡尔积-从两个集合中任取一个元素与另一个集合中的任意元素匹配最后有M*N种可能

   4.复杂查询——结果集的合并
     可以解决MySQL不支持全连接的问题
     语法:(SELECT...FROM...)
          UNION
          (SELECT...FROM...);
          示例：查询员工姓名及其所在部门的名称，要求所有员工姓名和部门名称至少显示一次
          (SELECT ename,dname FROM emp LEFT OUTER JOIN dept ON depId=did)
          UNION
          (SELECT ename,dname FROM emp RIGHT OUTER JOIN dept ON depId=did); 

 