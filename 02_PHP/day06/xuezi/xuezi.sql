SET NAMES UTF8;
DROP DATABASE IF EXISTS xuezi;
CREATE DATABASE xuezi  CHARSET=UTF8;
USE xuezi;

#创建笔记本型号表

#创建笔记本表xz_laptop

#创建笔记本图片表xz_laptop_pic

#创建用户信息表xz_user
CREATE TABLE xz_user(
      uid INT PRIMARY KEY AUTO_INCREMENT,
      uname VARCHAR(32) UNIQUE NOT NULL,
      upwd VARCHAR(32),
      email VARCHAR(64),
      phone VARCHAR(16),
      avatar VARCHAR(64) DEFAULT 'img/avatar/default.jpg',
      user_name VARCHAR(32),
      gender INT
);
INSERT INTO xz_user VALUES
(NULL,'TOM','123456','1104543@.COM','1356159546','img/avatar/default.png','丁然',1),
(NULL,'TIM','123456','1104543@.COM','1356239546','img/avatar/default.png','赵大猪',1),
(NULL,'TOC','123456','1104543@.COM','1352269546','img/avatar/default.png','刘晓雅',1),
(NULL,'TONNY','123456','1104543@.COM','1326289546','img/avatar/default.png','秦豆',1);
#创建用户收货地址表xz_receiver_address

#创建用户购物车表xz_shopping_cart

#创建订单表xz_order

#创建订单详情表xz_index_detail

#首页轮播广告条目表xz_index_carouse

