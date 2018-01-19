/*编写一个SQL脚本文件xuezi,进入数据库
    创建一个保存笔记本商品信息的表 laptop 包含如下列：
   lid 编号
   title 产品大标题
   price 商品价格
   spec 商品规格
   stockCount 库存数量
   birthday   生产日期
   isOnSale   是否特价
插入五行记录，注意所有的汉子都用汉语拼音。
删除编号为3的记录;
修改编号为4的所有记录;
查询出所有记录*/
drop database if exists xuezi;
create database xuezi charset=UTF8;
USE xuezi;
create table laptop(
    lid INT,
    title VARCHAR(30),
    price VARCHAR(20),
    spec VARCHAR(30),
    stockcount INT,
    birthday VARCHAR(45),
    isOnSale VARCHAR(45)
);
INSERT INTO laptop VALUES(121,'mac Air','6999.00','0.3kg',5000,'2017/06/28','yes');
INSERT INTO laptop VALUES(123,'iphone8','5999.00','0.3kg',4000,'2017/06/28','yes');
INSERT INTO laptop VALUES(166,'iphone8plus','4000.00','0.3kg',10000,'2017/07/25','yes');
INSERT INTO laptop VALUES(168,'beats','2990.00','0.3kg',5,'2017/07/25','yes');
INSERT INTO laptop VALUES(188,'lianxiang','5000.00','0.3kg',5,'2017/07/25','yes');
INSERT INTO laptop VALUES(588,'lianxiang','5000.00','0.3kg',6,'2017/07/25','yes');

#delete from laptop where lid=121;
#delete from laptop where lid=123;
#SELECT * FROM laptop
update laptop set title='ipro';
update laptop set lid='5888' where lid=121;
update laptop set lid=198,birthday='2016/07/27'  where lid=168;
update laptop set price=8888.00  where lid=166; 