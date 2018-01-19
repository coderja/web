SET NAMES UTF8;
DROP DATABASE IF EXISTS xuezi;
CREATE DATABASE xuezi CHARSET=UTF8;
USE xuezi;
CREATE TABLE xz_user(
    uid INT  PRIMARY KEY auto_increment,
    uname VARCHAR(32) unique not null,
    upwd  VARCHAR(32),
    email VARCHAR(32),
    phone VARCHAR(32),
    avator VARCHAR(128),
    user_name VARCHAR(32),
    gender int

);