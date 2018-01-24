-- 备份数据库 (命令模式 不要在mysql模式下,  在普通模式)
-- mysqldump -u 用户名 -p 数据库名 > 备份到哪儿去
mysqldump -u root -p s60 > C:/aa.sql     注意:  不要用 分号 结尾

-- 删除数据  只 删除数据, 不删除表结构
-- delete from 表名   	 					删除此表的全部数据
-- delete from 表名 where 条件表达式 		删除此表的部分数据
delete from user where sex = 4;

delete from user;


-- 删除库/表   删除表结构,  数据也会被删掉
drop table user;
drop database s60;


-- 导入数据库 (命令模式 不要在mysql模式下,  在普通模式)
-- mysql -u 用户名 -p 数据库名 < 从哪儿导入


