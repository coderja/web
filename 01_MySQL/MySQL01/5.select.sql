-- 查询数据1   查询表中的所有数据
-- * 通配符  代表所有字段
-- select * from 表名 		   (正式项目中 : 谁用打死谁)		
select * from user;

-- 查询数据2   带条件式的查询所有数据
-- select * from 表名 where 条件表达式
select * from user where sex >= 3;  
select * from user where sex >= 3 and id > 2;

-- 查询数据3   指定字段查询
-- select `字段名1`, `字段名2`, ... from 表名 [where 条件表达式 | order by 字段名 | group by 字段名]
select `name`,`sex` from user;
select `name`,`sex` from user where id > 3;

-- 排序查询 order by
-- select `字段名1`, `字段名2`, ... from 表名 [where 条件表达式 | order by 字段名 [desc|arc] | group by 字段名]
select id, name, sex from user order by sex;
select id, name, sex from user order by sex desc;

-- 分组查询  group by
-- select `字段名1`, `字段名2`, ... from 表名 [where 条件表达式 | order by 字段名 [desc|arc] | group by 字段名]
-- 查询每个部门的最高工资
select `dept`,max(`money`) from salary  group by dept;


-- 嵌套查询
-- 查询每个部门最高工资的那个人
select `uid`,`dept` from salary where money in (25000, 1000000, 9999990)  group by dept;
select `uid`,`dept` from salary where money in (select max(`money`) from salary  group by dept)  group by dept;

-- 多表查询
-- select 字段名.....
-- from 表名1, 表名2, ...
-- [where ... |  order by .. | group by ...]
-- 查询每个人的姓名, 性别, 部门, 工资
select name, sex, dept, money
from user, salary
where user.id = salary.uid  
-- 注意: 多表查询, 表与表之间的关系一定要理清

-- 给重复字段, 指定表名
select user.id, name, sex, dept, money
from user, salary
where user.id = salary.uid 

-- 给表名取别名
select u.id, name, sex, dept, money
from user u, salary s
where u.id = s.uid 


-- 分页查询
-- limit rows
-- limit offset, rows
-- 		offset: 偏移量
-- 		rows:   行数
select * from user limit 3;
select * from user limit 0,3;


-- 模糊查询
-- where  字段名 like 'search' 		查询字段的值 正好是 search
-- where  字段名 like '%search' 		查询字段的值 正好是 以search结尾
-- where  字段名 like 'search%' 		查询字段的值 正好是 以search开头
-- where  字段名 like '%search%' 		查询字段的值 包含 search
select * from user where name like '%黄%';
select * from user where name like '黄%';
select * from user where name like '%黄';
select * from user where name like '黄';


create table if not exists `salary`(
	`id` int auto_increment primary key,
	`uid` int comment '用户id',
	`dept` varchar(255) comment '部门',
	`money` decimal(12,2) comment '工资'
)engine=MyISAM default charset=utf8;


