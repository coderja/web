#   创建数据库
#		create database `数据库名`;
#		create database if not exists `数据库名`;   如果数据库已存在, 则不再创建
#		
#   注意:  `数据库名/表名/字段名`   ``能够防止 系统关键字
create database `s60`;
create database if not exists `s60`;

#  	选择数据库
#  	use  数据库名
use `s60`;

# 	删除数据库(请注意: 这不是开玩笑的)
# 	drop database 数据库名 	
	drop database `s60`;

#   创建数据表
#   create table if not exists `表名`(
#   	`字段名1` 	字段类型 	字段属性,
#   	`字段名2` 	字段类型 	字段属性,
#   	`字段名3` 	字段类型 	字段属性,
#		...
#   	`字段名N` 	字段类型 	字段属性,
#   
#   	字段属性
#   		1. auto_increment    
#   			设置表的字段值 自动增加, 一般只有 主键 才会拥有
#   		
#   		2. primary key 
#   			设置当前字段为 主键
#   
#   		3. unsigned 
#   			设置当前字段为 无符号
#   		
#   		4. unique
#   			设置当前字段为 唯一索引
#   		
#   		5. not null	
#   			设置非空约束     当前值不能为空
#   		
#   		6. comment  
#   			字段注释
#   		
#   		7. default	
#   			设置默认值
#   
#   
#   )engine=数据库引擎 default charset=字符编码;


create table if not exists `user`(
	`id` 	int  unsigned auto_increment	primary key,
	`name`	varchar(50) not null 	comment '用户名',
	`pwd`   char(32) 	not null 	comment '密码',
	`sex` 	tinyint(1) 	default 1 	comment '性别:  1-男 2-女 3-人妖 4-妖人 5-兽人 6-鱼人 7-神人 8-鸟人',
	`birthday` 	date 		 comment '生日',
	`address` 	varchar(255) comment '地址',
	`icon` 		varchar(255) comment '头像',
	`email`  	varchar(255) comment '邮箱'
)engine=MyISAM  default charset=utf8;

# 查看表结构
# desc 表名
desc `user`;

# 查询语句   查询 表 里面的所有数据
# select * from 表名   
select * from user;
