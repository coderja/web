set names utf8;
drop database if exists weather;
create database weather charset=utf8;
use weather;
create table city(
   id int primary key auto_increment,
   cid int not null,
   city varchar(32) not null,	
   pam varchar(32) not null,	
   province varchar(32) not null
);