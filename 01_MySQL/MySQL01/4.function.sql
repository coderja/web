-- 聚合函数
-- count()  统计总个数
select count(id) from user;

-- sum() 	求和
select sum(id) from user;

-- avg() 	平均值
select avg(sex) from user;

-- max() 	最大值
-- min() 	最小值
select max(sex) from user;
select min(sex) from user;

-- 字符串函数
-- concat(str1, str2, str3, str4, ... strN)  拼接字符串
select concat(id,'-',name,'-',sex) as ddd from user;
