1.复杂查询 —— 分组查询/聚合查询函数
  标准SQL提供的五个聚合查询函数：
	COUNT()/SUM()/AVG()/MAX()/MIN()
  示例：查询所有员工的数量
	SELECT COUNT(eid) FROM emp;
  示例：查询10号部门的员工的数量
	SELECT COUNT(*) FROM emp WHERE  depId=10;

  示例：查询出每个部门的编号及该部门的员工数量
  SELECT depId,COUNT(eid) as 数量 FROM emp  GROUP BY depId;
练习：查询出每个部门的编号，及该部门的工资最大、最小和平均值。
	SELECT depId,MAX(salary),MIN(salary),AVG(salary) FROM emp GROUP BY depId;
2.复杂查询 —— 子查询
  子查询：在一条语句中，又出现了一条查询语句
  示例：查询出“研发部”员工的所有信息
  分析：步骤1-查询“研发部”对应的部门编号=>10——子查询
	SELECT did FROM dept WHERE dname='运营部';
	   步骤2-查询10号部门的员工信息——父查询
	SELECT * FROM emp WHERE depId=10;	
  上述两句话可以整合为一句话：
		SELECT * FROM emp WHERE depId=(
            SELECT did FROM dept WHERE dname='运营部'
        );
练习：查询出工资比SCOTT高的员工的所有信息
  分析：步骤1-查询SCOTT的工资=>9300——子查询
		SELECT salary FROM emp WHERE ename='SCOTT'; 
	   步骤2-查询工资高于9300的员工信息——父查询
		SELECT * FROM emp WHERE salary>9300;
  两句话整合为一句：
	SELECT * FROM emp WHERE salary>(
        SELECT  salary FROM emp  WHERE ename='SCOTT' 
    );	
  练习：查询出工资比公司平均工资高的员工的所有信息
  步骤1-查询所有员工的平均工资=>6333——子查询
	SELECT AVG(salary) FROM emp;
  步骤2-查询工资高于6333的员工信息——父查询
   SELECT * FROM emp WHERE salary>6333;
   整合一句话
   SELECT * FROM emp WHERE salary>(
       SELECT AVG(salary) FROM emp
   );练习：查询出与TOM同一年入职的员工的所有信息
  步骤1-查询TOM入职时间中年份=>2000
	SELECT YEAR(hideDate) FROM emp WHERE ename='TOM';
  步骤2-查询入职时间中年份为2000的员工信息
	SELECT * FROM emp WHERE YEAR(hideDate)=2000;
  整合为一句话：
	SELECT * FROM emp WHERE YEAR(hideDate)=(
        SELECT YEAR(hideDate) FROM emp WHERE ename='TOM'
    );
    3.复杂查询——跨表查询/多表查询 —— 难点
  一个查询结果集中的数据来自于多个表。
  示例：查询出员工姓名及其所在部门的名称
	 		#错误：产生了笛卡尔积
小知识： 笛卡尔积 - 从2个集合中任取一个元素与另一个集合中的任意元素匹配，最后有MxN种可能
	 	#跨表查询必须有限定条件	！！

