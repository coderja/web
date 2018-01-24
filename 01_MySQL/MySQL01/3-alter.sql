-- 修改表名
-- alter table 旧表名 rename 新表名;
alter table user rename student;

-- 修改字段的数据类型
-- alter table 表名 modify 字段名  新数据类型
alter table user modify name varchar(30);

-- 修改字段的排列位置
-- alter table 表名 modify 字段名  新数据类型 first
-- alter table 表名 modify 字段名  新数据类型 after 字段名

-- 增加字段
-- alter table 表名 add 字段名 数据类型 字段属性
-- alter table 表名 add 字段名 数据类型 字段属性 after 字段名
-- alter table 表名 add 字段名 数据类型 字段属性 first

-- 修改字段名
-- alter table  表名 change 旧字段名  新字段名 新数据类型

-- 删除字段
-- alter table 表名 drop 字段名

-- 查看表的存储引擎
-- show create table 表名

-- 更改表的存储引擎
-- alter table 表名 engine=存储引擎
alter table user engine = InnoDB

MyISAM 和 InnoDB 的区别
1.事务支持
	MyISAM: 不支持,  强调的是性能,  查询速度比InnoDB快
	InnoDB: 支持, 提供事务, 外键等高级数据功能

2. 全文索引 FULLTEXTT
	MyISAM: 支持  
	InnoDB: 不支持, 但可以用sphinx技术全文索引

3. 表总行数
	MyISAM: 保存表总行数,  用count() 会直接获取保存的总行数
	InnoDB: 未保存,   	   用count() 会遍历整表, 消耗巨大

	注意:
		以上两种在用 count()  包含了 where条件, 操作一样

4. CURD操作
	MyISAM: 在执行大量的select操作时,  MyISAM速度较快
	InnoDB: 在执行大量的insert, update和delete时, InnoDB速度较快
	注意:
		整表删除时, InnoDB不会重建表, 而是一行一行的删除
		如果要清空大量的数据时, 推荐使用 truncate table 

5. 行锁,表锁
	MyISAM: 支持表锁
	InnoDB: 支持表锁 和 行锁(默认)

总结: 对于 多读少写, 重性能, 	建议采用 MyISAM
      对于大数据项目, 需要事务, 建议采用 InnoDB