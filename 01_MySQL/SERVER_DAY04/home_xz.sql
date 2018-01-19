SET NAMES UTF8;
DROP DATABASE IF EXISTS xuezi;
CREATE DATABASE xuezi CHARSET=UTF8;
USE xuezi;
CREATE TABLE xz_user(
    uid INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    uname VARCHAR(32),
    upwd VARCHAR(32),
    email VARCHAR(64),
    phone VARCHAR(16),
    avtor VARCHAR(128),
    user_name VARCHAR(32),
    gender INT
);

CREATE TABLE xz_receiver_address(
    aid INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT,
    receiver VARCHAR(16),
    province VARCHAR(16),
    city VARCHAR(16),
    county VARCHAR(16),
    address VARCHAR(128),
    cellphone VARCHAR(16),
    fixedphone VARCHAR(16),
    postcode CHAR(6),
    tag VARCHAR(16),
    is_default BOOL,
    FOREIGN KEY(aid) REFERENCES xz_user(uid)
);

CREATE TABLE xz_shopping_car(
    cid INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT,
    FOREIGN KEY(cid) REFERENCES xz_user(uid),
    product_id INT,
   count INT
);

CREATE TABLE xz_order(
    aid INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT,
    FOREIGN KEY(aid) REFERENCES xz_user(uid),
    address_id INT,
    status INT,
    order_time BIGINT,
    pay_time BIGINT,
    deliver_time BIGINT,
    received_time BIGINT 
);

CREATE TABLE xz_order_detail(
    did INT PRIMARY KEY AUTO_INCREMENT,
    order_id INT,
    FOREIGN KEY(order_id) REFERENCES xz_order(aid),
    product_id INT,
    count INT
);

CREATE TABLE xz_laptop_family(
    fid INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(32)
);

CREATE TABLE xz_laptop(
    lid INT PRIMARY KEY AUTO_INCREMENT,
    family_id INT,
    FOREIGN KEY(family_id) REFERENCES xz_laptop_family(fid),
    product_id INT,
    title VARCHAR(128),
    subtitle VARCHAR(128),
    price DECIMAL(10,2),
    promise VARCHAR(64),
    spec VARCHAR(64),
    name VARCHAR(32),
    os VARCHAR(32),
    memory VARCHAR(32),
    resolution VARCHAR(32),
    video_card VARCHAR(32),
    cpu VARCHAR(32),
    video_memory VARCHAR(32),
    category VARCHAR(32),
    disk VARCHAR(32),
    details VARCHAR(1024),
    shelf_time BIGINT,
    sold_count INT,
    is_onsale BOOL
);
CREATE TABLE xz_laptop_pic(
    pid INT PRIMARY KEY AUTO_INCREMENT,
    laptop_id INT,
    FOREIGN KEY(laptop_id) REFERENCES xz_laptop(lid),
    sm VARCHAR(128),
    md VARCHAR(128),
    lg VARCHAR(128)
);
CREATE TABLE xz_index_carousel(
    cid INT PRIMARY KEY AUTO_INCREMENT,
    img VARCHAR(128),
    title VARCHAR(64),
    href VARCHAR(128)
);
CREATE TABLE xz_index_product(
    pid INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(64),
    details VARCHAR(128),
    pic VARCHAR(128),
    price DECIMAL(10,2),
    href VARCHAR(128),
    seq_recommened TINYINT,
    seq_new_arrival TINYINT,
    seq_top_sale TINYINT
);
